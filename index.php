<?php

/*
 * Universal Theme addon for Bear CMS
 * https://github.com/bearcms/universal-theme-addon
 * Copyright (c) Amplilabs Ltd.
 * Free to use under the MIT license.
 */

use BearFramework\App;

$app = App::get();

$app->bearCMS->themes
    ->register('bearcms/universal', function (\BearCMS\Themes\Theme $theme) use ($app) {
        $context = $app->contexts->get(__DIR__);

        $app->localization
            ->addDictionary('en', function () use ($context) {
                return include $context->dir . '/locales/en.php';
            })
            ->addDictionary('bg', function () use ($context) {
                return include $context->dir . '/locales/bg.php';
            });

        $context->assets
            ->addDir('assets')
            ->addDir('values/files');

        $theme->version = '1.23';

        $theme->get = function (\BearCMS\Themes\Theme\Customizations $customizations, array $cntx) use ($app, $context) {
            $language = isset($cntx['language']) ? $cntx['language'] : null;
            $languages = isset($cntx['languages']) ? $cntx['languages'] : [];
            $templateFilename = $context->dir . '/components/defaultTemplate.php';
            $template = (static function ($__filename, $customizations, $language, $languages) { // $customizations is used inside
                ob_start();
                include $__filename;
                return ob_get_clean();
            })($templateFilename, $customizations, $language, $languages);
            if ($app->bearCMS->hasEventListeners('internalBearCMSUniversalThemeGet')) {
                $eventDetails = new stdClass();
                $eventDetails->template = $template;
                $app->bearCMS->dispatchEvent('internalBearCMSUniversalThemeGet', $eventDetails);
                $template = $eventDetails->template;
            }
            return $template;
        };

        $theme->manifest = function () use ($app, $context, $theme) {
            $manifest = $theme->makeManifest();
            $manifest->name = __('bearcms.themes.universal.name');
            $manifest->description = __('bearcms.themes.universal.description');
            $manifest->author = [
                'name' => 'BearCMS Team',
                'url' => 'https://bearcms.com/addons/',
                'email' => 'addons@bearcms.com',
            ];
            $manifest->media = [
                [
                    'filename' => $context->dir . '/assets/1.jpg',
                    'width' => 1416,
                    'height' => 1062,
                ]
            ];
            if ($app->bearCMS->hasEventListeners('internalBearCMSUniversalThemeManifest')) {
                $eventDetails = new stdClass();
                $eventDetails->manifest = $manifest;
                $app->bearCMS->dispatchEvent('internalBearCMSUniversalThemeManifest', $eventDetails);
                $manifest = $eventDetails->manifest;
            }
            return $manifest;
        };

        $updateValues = function (array $values = null) {
            if (is_array($values)) {
                if (isset($values['navigationPosition']) && !isset($values['headerLayout'])) {
                    $navigationPosition = \BearCMS\Internal\Themes::getValueDetails($values['navigationPosition']);
                    if ($navigationPosition['value'] === '1') {
                        $values['headerLayout'] = 'navAboveHeaderContainer';
                    } else {
                        $values['headerLayout'] = 'navBelowHeaderContainer';
                    }
                    $values['navigationType'] = '{"value":"horizontal","states":[[":screen-size(maxWidth=680)", "buttonBlock"]]}';
                    unset($values['navigationPosition']);
                    if (!isset($values['navigationSearchButtonVisibility'])) {
                        $values['navigationSearchButtonVisibility'] = '0';
                    }
                    if (!isset($values['navigationStoreCartButtonVisibility'])) {
                        $values['navigationStoreCartButtonVisibility'] = '0';
                    }
                }
                if (isset($values['navigationCSS'])) {
                    $navigationContainerCSS = \BearCMS\Internal\Themes::getValueDetails(isset($values['navigationContainerCSS']) ? $values['navigationContainerCSS'] : '');
                    $navigationCSS = \BearCMS\Internal\Themes::getValueDetails($values['navigationCSS']);
                    $updatedNavigationCSS = $navigationCSS;
                    $contentAlignToSet = null;
                    if (!is_array($updatedNavigationCSS['value'])) {
                        $updatedNavigationCSS['value']['value'] = [];
                    }
                    if (isset($updatedNavigationCSS['value']['text-align'])) {
                        $contentAlignToSet = $updatedNavigationCSS['value']['text-align'];
                        unset($updatedNavigationCSS['value']['text-align']);
                    }
                    if (isset($navigationContainerCSS['value']['text-align'])) {
                        if ($contentAlignToSet === null) {
                            $contentAlignToSet = $navigationContainerCSS['value']['text-align'];
                        }
                        unset($navigationContainerCSS['value']['text-align']);
                    }
                    $updatedNavigationCSS['states'][] =  [":screen-size(maxWidth=680)", [
                        "padding-left" => "0px",
                        "padding-top" => "0px",
                        "padding-right" => "0px",
                        "padding-bottom" => "0px"
                    ]];
                    $prefixes = [
                        'navigationTypeHorizontal',
                        'navigationTypeButtonBlock',
                        'navigationTypeButtonDropDown',
                        'navigationTypeButtonOverlay'
                    ];
                    $getNavigationButtonCSS = function (string $type) use ($values) {
                        if (isset($values['navigationItemCSS'])) {
                            $navigationItemCSS = \BearCMS\Internal\Themes::getValueDetails($values['navigationItemCSS']);
                            if (!is_array($navigationItemCSS['value'])) {
                                $navigationItemCSS['value'] = [];
                            }
                            if ($type === 'toggle') {
                                $navigationItemCSS['value']['width'] = '100%';
                            } else {
                                if (!isset($navigationItemCSS['value']['width'])) {
                                    if (isset($navigationItemCSS['value']['padding-left'], $navigationItemCSS['value']['padding-right'])) {
                                        $navigationItemCSS['value']['width'] = (20 + (int)str_replace('px', '', $navigationItemCSS['value']['padding-left']) + (int)str_replace('px', '', $navigationItemCSS['value']['padding-right'])) . 'px';
                                    } elseif (isset($navigationItemCSS['value']['height'])) {
                                        $navigationItemCSS['value']['width'] = $navigationItemCSS['value']['height'];
                                    } else {
                                        $navigationItemCSS['value']['width'] = '40px';
                                    }
                                }
                            }
                            $setBackgroundImageForAllStates = function (string $filename) use (&$navigationItemCSS, $type) {
                                $defaultColor = '#ffffff';
                                $defaultStateColor = null;
                                $defaultPaddingLeft = '15px';
                                $defaultStatePaddingLeft = null;
                                foreach (['', ':hover', ':active'] as $state) {
                                    $stateIndexToUpdate = null;
                                    if ($state === '') {
                                        $valueToUpdate = $navigationItemCSS['value'];
                                    } else {
                                        $valueToUpdate = [];
                                        foreach ($navigationItemCSS['states'] as $i => $stateData) {
                                            if ($stateData[0] === $state) {
                                                $stateIndexToUpdate = $i;
                                                $valueToUpdate = $stateData[1];
                                                if (!is_array($valueToUpdate)) {
                                                    $valueToUpdate = [];
                                                }
                                                break;
                                            }
                                        }
                                    }
                                    $color = isset($valueToUpdate['color']) ? strtolower($valueToUpdate['color']) : ($defaultStateColor !== null ? $defaultStateColor : $defaultColor);
                                    if ($color === '#fff') {
                                        $color = '#ffffff';
                                    }
                                    $paddingLeft = isset($valueToUpdate['padding-left']) ? $valueToUpdate['padding-left'] : ($defaultStatePaddingLeft !== null ? $defaultStatePaddingLeft : $defaultPaddingLeft);
                                    if ($state === '') {
                                        $defaultStateColor = $color;
                                        $defaultStatePaddingLeft = $paddingLeft;
                                    }
                                    $filenameOptions = $color !== $defaultColor ? '?s=' . trim($color, '#') : '';
                                    if ($state === '' || $filenameOptions !== '') {
                                        $valueToUpdate['background-image'] = 'url(' . $filename . $filenameOptions . ')';
                                        $valueToUpdate['background-repeat'] = 'no-repeat';
                                        if ($type === 'toggle') {
                                            $valueToUpdate['background-size'] = '20px 20px'; // auto 50%
                                            $valueToUpdate['background-position'] = 'left ' . $paddingLeft . ' center';
                                        } else {
                                            $valueToUpdate['background-size'] = '20px 20px';
                                            $valueToUpdate['background-position'] = 'center center';
                                        }
                                        if ($state === '') {
                                            $navigationItemCSS['value'] = $valueToUpdate;
                                        } elseif ($stateIndexToUpdate !== null) {
                                            $navigationItemCSS['states'][$stateIndexToUpdate][1] = $valueToUpdate;
                                        } else {
                                            $navigationItemCSS['states'][] = [$state, $valueToUpdate];
                                        }
                                    }
                                }
                            };
                            if ($type === 'search') {
                                $setBackgroundImageForAllStates('addon:bearcms/universal-theme-addon:assets/search.svg');
                            } elseif ($type === 'store') {
                                $setBackgroundImageForAllStates('addon:bearcms/universal-theme-addon:assets/cart.svg');
                            } elseif ($type === 'toggle') {
                                $setBackgroundImageForAllStates('addon:bearcms/universal-theme-addon:assets/menu.svg');
                            }
                            return json_encode($navigationItemCSS);
                        }
                        return null;
                    };
                    $searchButtonCSS = $getNavigationButtonCSS('search');
                    $storeCartButtonCSS = $getNavigationButtonCSS('store');
                    $toggleButtonCSS = $getNavigationButtonCSS('toggle');
                    foreach ($prefixes as $prefix) {
                        $values[$prefix . 'CSS'] = json_encode($updatedNavigationCSS);
                        if (isset($values['navigationItemCSS'])) {
                            $values[$prefix . 'ItemCSS'] = $values['navigationItemCSS'];
                            $values[$prefix . 'SearchButtonCSS'] = $searchButtonCSS;
                            $values[$prefix . 'StoreCartButtonCSS'] = $storeCartButtonCSS;
                            $values[$prefix . 'ToggleButtonCSS'] = $toggleButtonCSS;
                        }
                        if (isset($values['navigationSelectedItemCSS'])) {
                            $values[$prefix . 'SelectedItemCSS'] = $values['navigationSelectedItemCSS'];
                        }
                        if (isset($values['navigationSubitemCSS'])) {
                            $values[$prefix . 'SubitemCSS'] = $values['navigationSubitemCSS'];
                        }
                        if (isset($values['navigationSelectedSubitemCSS'])) {
                            $values[$prefix . 'SelectedSubitemCSS'] = $values['navigationSelectedSubitemCSS'];
                        }
                        if (isset($values['navigationContainerCSS'])) {
                            $values[$prefix . 'ContainerCSS'] = $values['navigationContainerCSS'];
                        }
                        if ($contentAlignToSet !== null) {
                            $values[$prefix . 'ContentAlign'] = $contentAlignToSet;
                        }
                    }
                    $values['navigationTypeButtonBlockToggleButtonContainerCSS'] = '{"width":"100%"}';
                    unset($values['navigationCSS']);
                    if (isset($values['navigationItemCSS'])) {
                        unset($values['navigationItemCSS']);
                    }
                    if (isset($values['navigationSelectedItemCSS'])) {
                        unset($values['navigationSelectedItemCSS']);
                    }
                    if (isset($values['navigationSubitemCSS'])) {
                        unset($values['navigationSubitemCSS']);
                    }
                    if (isset($values['navigationSelectedSubitemCSS'])) {
                        unset($values['navigationSelectedSubitemCSS']);
                    }
                    if (isset($values['navigationContainerCSS'])) {
                        unset($values['navigationContainerCSS']);
                    }
                }
            }
            
            // Get old assets from the CMS server
            $oldAssets = array(
                'addon:bearcms/universal-theme-addon:assets/s8/1.jpg' => 'addon:bearcms/bearframework-addon:assets/s/otsa/t/universal/assets/s8/1.jpg',
                'addon:bearcms/universal-theme-addon:assets/s7/1.jpg' => 'addon:bearcms/bearframework-addon:assets/s/otsa/t/universal/assets/s7/1.jpg',
                'addon:bearcms/universal-theme-addon:assets/s5/1.jpg' => 'addon:bearcms/bearframework-addon:assets/s/otsa/t/universal/assets/s5/1.jpg',
                'addon:bearcms/universal-theme-addon:assets/s4/1.jpg' => 'addon:bearcms/bearframework-addon:assets/s/otsa/t/universal/assets/s4/1.jpg',
                'addon:bearcms/universal-theme-addon:assets/s3/1.jpg' => 'addon:bearcms/bearframework-addon:assets/s/otsa/t/universal/assets/s3/1.jpg',
                'addon:bearcms/universal-theme-addon:assets/s20/1.jpg' => 'addon:bearcms/bearframework-addon:assets/s/otsa/t/universal/assets/s20/1.jpg',
                'addon:bearcms/universal-theme-addon:assets/s19/1.jpg' => 'addon:bearcms/bearframework-addon:assets/s/otsa/t/universal/assets/s19/1.jpg',
                'addon:bearcms/universal-theme-addon:assets/s18/1.jpg' => 'addon:bearcms/bearframework-addon:assets/s/otsa/t/universal/assets/s18/1.jpg',
                'addon:bearcms/universal-theme-addon:assets/s17/1.jpg' => 'addon:bearcms/bearframework-addon:assets/s/otsa/t/universal/assets/s17/1.jpg',
                'addon:bearcms/universal-theme-addon:assets/s16/1.jpg' => 'addon:bearcms/bearframework-addon:assets/s/otsa/t/universal/assets/s16/1.jpg',
                'addon:bearcms/universal-theme-addon:assets/s12/1.jpg' => 'addon:bearcms/bearframework-addon:assets/s/otsa/t/universal/assets/s12/1.jpg',
                'addon:bearcms/universal-theme-addon:assets/s11/1.jpg' => 'addon:bearcms/bearframework-addon:assets/s/otsa/t/universal/assets/s11/1.jpg',
                'addon:bearcms/universal-theme-addon:assets/checkbox-icon-111.svg' => 'addon:bearcms/bearframework-addon:assets/s/otsa/t/universal/assets/checkbox-icon-111.svg',
                'addon:bearcms/universal-theme-addon:assets/radio-icon-111.svg' => 'addon:bearcms/bearframework-addon:assets/s/otsa/t/universal/assets/radio-icon-111.svg',
                'addon:bearcms/universal-theme-addon:assets/search-icon.png' => 'addon:bearcms/bearframework-addon:assets/s/otsa/t/universal/assets/search-icon.png',
                'addon:internal/cms:themes/bearcms-universal/assets/s9/1.png' => 'addon:bearcms/bearframework-addon:assets/s/otsa/c/universal/assets/s9/1.png',
                'addon:internal/cms:themes/bearcms-universal/assets/s9/2.png' => 'addon:bearcms/bearframework-addon:assets/s/otsa/c/universal/assets/s9/2.png',
                'addon:internal/cms:themes/bearcms-universal/assets/s8/1.png' => 'addon:bearcms/bearframework-addon:assets/s/otsa/c/universal/assets/s8/1.png',
                'addon:internal/cms:themes/bearcms-universal/assets/s8/2.png' => 'addon:bearcms/bearframework-addon:assets/s/otsa/c/universal/assets/s8/2.png',
                'addon:internal/cms:themes/bearcms-universal/assets/s7/1.png' => 'addon:bearcms/bearframework-addon:assets/s/otsa/c/universal/assets/s7/1.png',
                'addon:internal/cms:themes/bearcms-universal/assets/s7/2.png' => 'addon:bearcms/bearframework-addon:assets/s/otsa/c/universal/assets/s7/2.png',
                'addon:internal/cms:themes/bearcms-universal/assets/s6/1.png' => 'addon:bearcms/bearframework-addon:assets/s/otsa/c/universal/assets/s6/1.png',
                'addon:internal/cms:themes/bearcms-universal/assets/s6/2.png' => 'addon:bearcms/bearframework-addon:assets/s/otsa/c/universal/assets/s6/2.png',
                'addon:internal/cms:themes/bearcms-universal/assets/s5/1.png' => 'addon:bearcms/bearframework-addon:assets/s/otsa/c/universal/assets/s5/1.png',
                'addon:internal/cms:themes/bearcms-universal/assets/s5/2.png' => 'addon:bearcms/bearframework-addon:assets/s/otsa/c/universal/assets/s5/2.png',
                'addon:internal/cms:themes/bearcms-universal/assets/s4/1.png' => 'addon:bearcms/bearframework-addon:assets/s/otsa/c/universal/assets/s4/1.png',
                'addon:internal/cms:themes/bearcms-universal/assets/s4/2.png' => 'addon:bearcms/bearframework-addon:assets/s/otsa/c/universal/assets/s4/2.png',
                'addon:internal/cms:themes/bearcms-universal/assets/s3/1.png' => 'addon:bearcms/bearframework-addon:assets/s/otsa/c/universal/assets/s3/1.png',
                'addon:internal/cms:themes/bearcms-universal/assets/s3/2.png' => 'addon:bearcms/bearframework-addon:assets/s/otsa/c/universal/assets/s3/2.png',
                'addon:internal/cms:themes/bearcms-universal/assets/s21/1.png' => 'addon:bearcms/bearframework-addon:assets/s/otsa/c/universal/assets/s21/1.png',
                'addon:internal/cms:themes/bearcms-universal/assets/s21/2.png' => 'addon:bearcms/bearframework-addon:assets/s/otsa/c/universal/assets/s21/2.png',
                'addon:internal/cms:themes/bearcms-universal/assets/s20/1.png' => 'addon:bearcms/bearframework-addon:assets/s/otsa/c/universal/assets/s20/1.png',
                'addon:internal/cms:themes/bearcms-universal/assets/s20/2.png' => 'addon:bearcms/bearframework-addon:assets/s/otsa/c/universal/assets/s20/2.png',
                'addon:internal/cms:themes/bearcms-universal/assets/s2/1.png' => 'addon:bearcms/bearframework-addon:assets/s/otsa/c/universal/assets/s2/1.png',
                'addon:internal/cms:themes/bearcms-universal/assets/s2/2.png' => 'addon:bearcms/bearframework-addon:assets/s/otsa/c/universal/assets/s2/2.png',
                'addon:internal/cms:themes/bearcms-universal/assets/s19/1.png' => 'addon:bearcms/bearframework-addon:assets/s/otsa/c/universal/assets/s19/1.png',
                'addon:internal/cms:themes/bearcms-universal/assets/s19/2.png' => 'addon:bearcms/bearframework-addon:assets/s/otsa/c/universal/assets/s19/2.png',
                'addon:internal/cms:themes/bearcms-universal/assets/s18/1.png' => 'addon:bearcms/bearframework-addon:assets/s/otsa/c/universal/assets/s18/1.png',
                'addon:internal/cms:themes/bearcms-universal/assets/s18/2.png' => 'addon:bearcms/bearframework-addon:assets/s/otsa/c/universal/assets/s18/2.png',
                'addon:internal/cms:themes/bearcms-universal/assets/s17/1.png' => 'addon:bearcms/bearframework-addon:assets/s/otsa/c/universal/assets/s17/1.png',
                'addon:internal/cms:themes/bearcms-universal/assets/s17/2.png' => 'addon:bearcms/bearframework-addon:assets/s/otsa/c/universal/assets/s17/2.png',
                'addon:internal/cms:themes/bearcms-universal/assets/s16/1.png' => 'addon:bearcms/bearframework-addon:assets/s/otsa/c/universal/assets/s16/1.png',
                'addon:internal/cms:themes/bearcms-universal/assets/s16/2.png' => 'addon:bearcms/bearframework-addon:assets/s/otsa/c/universal/assets/s16/2.png',
                'addon:internal/cms:themes/bearcms-universal/assets/s15/1.png' => 'addon:bearcms/bearframework-addon:assets/s/otsa/c/universal/assets/s15/1.png',
                'addon:internal/cms:themes/bearcms-universal/assets/s15/2.png' => 'addon:bearcms/bearframework-addon:assets/s/otsa/c/universal/assets/s15/2.png',
                'addon:internal/cms:themes/bearcms-universal/assets/s14/1.png' => 'addon:bearcms/bearframework-addon:assets/s/otsa/c/universal/assets/s14/1.png',
                'addon:internal/cms:themes/bearcms-universal/assets/s14/2.png' => 'addon:bearcms/bearframework-addon:assets/s/otsa/c/universal/assets/s14/2.png',
                'addon:internal/cms:themes/bearcms-universal/assets/s13/1.png' => 'addon:bearcms/bearframework-addon:assets/s/otsa/c/universal/assets/s13/1.png',
                'addon:internal/cms:themes/bearcms-universal/assets/s13/2.png' => 'addon:bearcms/bearframework-addon:assets/s/otsa/c/universal/assets/s13/2.png',
                'addon:internal/cms:themes/bearcms-universal/assets/s12/1.png' => 'addon:bearcms/bearframework-addon:assets/s/otsa/c/universal/assets/s12/1.png',
                'addon:internal/cms:themes/bearcms-universal/assets/s12/2.png' => 'addon:bearcms/bearframework-addon:assets/s/otsa/c/universal/assets/s12/2.png',
                'addon:internal/cms:themes/bearcms-universal/assets/s11/1.png' => 'addon:bearcms/bearframework-addon:assets/s/otsa/c/universal/assets/s11/1.png',
                'addon:internal/cms:themes/bearcms-universal/assets/s11/2.png' => 'addon:bearcms/bearframework-addon:assets/s/otsa/c/universal/assets/s11/2.png',
                'addon:internal/cms:themes/bearcms-universal/assets/s10/1.png' => 'addon:bearcms/bearframework-addon:assets/s/otsa/c/universal/assets/s10/1.png',
                'addon:internal/cms:themes/bearcms-universal/assets/s10/2.png' => 'addon:bearcms/bearframework-addon:assets/s/otsa/c/universal/assets/s10/2.png',
                'addon:internal/cms:themes/bearcms-universal/assets/s1/1.png' => 'addon:bearcms/bearframework-addon:assets/s/otsa/c/universal/assets/s1/1.png',
                'addon:internal/cms:themes/bearcms-universal/assets/s1/2.png' => 'addon:bearcms/bearframework-addon:assets/s/otsa/c/universal/assets/s1/2.png',
            );
            $valuesJSON = json_encode($values, true);
            if (strpos($valuesJSON, ':') !== false) {
                foreach ($oldAssets as $oldKey => $newKey) {
                    $search[] = 'url(' . $oldKey . ')';
                    $replace[] = 'url(' . $newKey . ')';
                    $search[] = trim(json_encode('url(' . $oldKey . ')', JSON_THROW_ON_ERROR), '"');
                    $replace[] = trim(json_encode('url(' . $newKey . ')', JSON_THROW_ON_ERROR), '"');
                    $search[] = trim(json_encode(trim(json_encode('url(' . $oldKey . ')', JSON_THROW_ON_ERROR), '"'), JSON_THROW_ON_ERROR), '"');
                    $replace[] = trim(json_encode(trim(json_encode('url(' . $newKey . ')', JSON_THROW_ON_ERROR), '"'), JSON_THROW_ON_ERROR), '"');
                }
                $valuesJSON = str_replace($search, $replace, $valuesJSON);
                $values = json_decode($valuesJSON, true);
            }
            return $values;
        };

        $theme->updateValues = $updateValues;

        $theme->options = function () use ($app, $context, $theme, &$updateValues) {
            $options = $theme->makeOptions(); // used inside
            require $context->dir . '/options.php';
            $values = json_decode(file_get_contents($context->dir . '/values/values.json'), true);
            $values = $updateValues($values);
            $options->setValues($values, true);
            if ($app->bearCMS->hasEventListeners('internalBearCMSUniversalThemeOptions')) {
                $eventDetails = new stdClass();
                $eventDetails->options = $options;
                $app->bearCMS->dispatchEvent('internalBearCMSUniversalThemeOptions', $eventDetails);
                $options = $eventDetails->options;
            }
            return $options;
        };

        if ($app->bearCMS->hasEventListeners('internalBearCMSUniversalThemeRegister')) {
            $eventDetails = new stdClass();
            $eventDetails->theme = $theme;
            $app->bearCMS->dispatchEvent('internalBearCMSUniversalThemeRegister', $eventDetails);
            $theme = $eventDetails->theme;
        }

        $app->clientPackages
            ->add('-bearcms-universal-theme', function (IvoPetkov\BearFrameworkAddons\ClientPackage $package) use ($context) {
                //$package->addJSCode(file_get_contents($context->dir . '/dev/universalTheme.js'));
                $package->addJSCode(include $context->dir . '/assets/universalTheme.js.min.php');
            });
    });

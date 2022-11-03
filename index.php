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
            ->addDir('assets');

        $theme->version = '1.19';

        $theme->canStyleElements = true;
        $theme->useDefaultElementsCombinations = true;

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

        $theme->options = function () use ($app, $context, $theme) {
            $options = $theme->makeOptions(); // used inside
            require $context->dir . '/options.php';
            $values = require $context->dir . '/styles/1.php';
            $options->setValues($values);
            if ($app->bearCMS->hasEventListeners('internalBearCMSUniversalThemeOptions')) {
                $eventDetails = new stdClass();
                $eventDetails->options = $options;
                $app->bearCMS->dispatchEvent('internalBearCMSUniversalThemeOptions', $eventDetails);
                $options = $eventDetails->options;
            }
            return $options;
        };

        $theme->styles = function () use ($app, $context, $theme) {
            $styles = [];
            for ($i = 1; $i <= 21; $i++) {
                $style = $theme->makeStyle();
                $style->media = [
                    [
                        'filename' => $context->dir . '/assets/' . $i . '.jpg',
                        'width' => 1416,
                        'height' => 1062,
                    ]
                ];
                $style->values = require $context->dir . '/styles/' . $i . '.php';
                $styles[] = $style;
            }
            if ($app->bearCMS->hasEventListeners('internalBearCMSUniversalThemeStyles')) {
                $eventDetails = new stdClass();
                $eventDetails->styles = $styles;
                $app->bearCMS->dispatchEvent('internalBearCMSUniversalThemeStyles', $eventDetails);
                $styles = $eventDetails->styles;
            }
            return $styles;
        };

        $theme->updateValues = function (array $values = null) {
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
                }
                if (isset($values['navigationCSS'])) {
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
                    if (empty($updatedNavigationCSS['states'])) {
                        $updatedNavigationCSS['states'][] =  [":screen-size(maxWidth=680)", [
                            "padding-left" => "0px",
                            "padding-top" => "0px",
                            "padding-right" => "0px",
                            "padding-bottom" => "0px;"
                        ]];
                    }
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
                                    $color = isset($valueToUpdate['color']) ? strtolower($valueToUpdate['color']) : $defaultColor;
                                    if ($color === '#fff') {
                                        $color = '#ffffff';
                                    }
                                    $filenameOptions = $color !== $defaultColor ? '?s=' . trim($color, '#') : '';
                                    if ($state === '' || $filenameOptions !== '') {
                                        $valueToUpdate['background-image'] = 'url(' . $filename . $filenameOptions . ')';
                                        $valueToUpdate['background-repeat'] = 'no-repeat';
                                        if ($type === 'toggle') {
                                            $valueToUpdate['background-size'] = '20px 20px'; // auto 50%
                                            $valueToUpdate['background-position'] = 'left ' . (isset($valueToUpdate['padding-left']) ? $valueToUpdate['padding-left'] : '15px') . ' center';
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
            return $values;
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

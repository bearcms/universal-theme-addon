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
        $context = $app->contexts->get(__FILE__);

        $app->localization
            ->addDictionary('en', function () use ($context) {
                return include $context->dir . '/locales/en.php';
            })
            ->addDictionary('bg', function () use ($context) {
                return include $context->dir . '/locales/bg.php';
            });

        $context->assets
            ->addDir('assets');

        $theme->version = '1.9';

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
            for ($i = 1; $i <= 16; $i++) {
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

        if ($app->bearCMS->hasEventListeners('internalBearCMSUniversalThemeRegister')) {
            $eventDetails = new stdClass();
            $eventDetails->theme = $theme;
            $app->bearCMS->dispatchEvent('internalBearCMSUniversalThemeRegister', $eventDetails);
            $theme = $eventDetails->theme;
        }
    });

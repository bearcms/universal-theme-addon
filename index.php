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
        ->announce('bearcms/universal', function(\BearCMS\Themes\Theme $theme) use ($app) {
            $context = $app->context->get(__FILE__);

            $app->localization
            ->addDictionary('en', function() use ($context) {
                return include $context->dir . '/locales/en.php';
            })
            ->addDictionary('bg', function() use ($context) {
                return include $context->dir . '/locales/bg.php';
            });

            $context->assets
            ->addDir('assets');

            $theme->version = '1.4';

            $theme->get = function(\BearCMS\Themes\Options $options) use ($context) {
                $templateFilename = $context->dir . '/components/defaultTemplate.php';
                return (static function($__filename, $options) { // used inside
                            ob_start();
                            include $__filename;
                            return ob_get_clean();
                        })($templateFilename, $options);
            };

            $theme->manifest = function() use ($context) {
                return [
                    'name' => __('bearcms.themes.universal.name'),
                    'description' => __('bearcms.themes.universal.description'),
                    'author' => [
                        'name' => 'BearCMS Team',
                        'url' => 'https://bearcms.com/addons/',
                        'email' => 'addons@bearcms.com',
                    ],
                    'media' => [
                        [
                            'filename' => $context->dir . '/assets/1.jpg',
                            'width' => 1024,
                            'height' => 768,
                        ]
                    ]
                ];
            };

            $theme->optionsSchema = function() use ($context) {
                $schema = include $context->dir . '/options.php';
                $values = require $context->dir . '/styles/1.php';
                $schema->setValues($values);
                return $schema;
            };

            $theme->styles = function() use ($context) {
                return include $context->dir . '/styles.php';
            };
        });

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
        ->add('bearcms/universal', function() use ($app) {
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

            $version = '1.2';
            $version .= '.' . (int) $app->bearCMS->isWhitelabel();

            return [
                'version' => $version,
                'initialize' => function() use ($context) {
                    
                },
                'apply' => function($response, $options) use ($app, $context) {
                    if ($response instanceof App\Response\HTML) {
                        $templateFilename = $context->dir . '/components/defaultTemplate.php';
                        $hookName = 'bearCMSUniversalThemeDefaultTemplateCreated';
                    } elseif ($response instanceof App\Response\NotFound) {
                        $templateFilename = $context->dir . '/components/unavailableTemplate.php';
                        $hookName = 'bearCMSUniversalThemeNotFoundTemplateCreated';
                    } elseif ($response instanceof App\Response\TemporaryUnavailable) {
                        $templateFilename = $context->dir . '/components/unavailableTemplate.php';
                        $hookName = 'bearCMSUniversalThemeTemporaryUnavailableTemplateCreated';
                    } else {
                        return;
                    }

                    $isWhitelabel = $app->bearCMS->isWhitelabel(); // used inside

                    ob_start();
                    // $options is used inside
                    include $templateFilename;
                    $templateContent = ob_get_clean();

                    $template = new \BearFramework\HTMLTemplate($templateContent);
                    $template->insert($options->toHTML());

                    if ($app->hooks->exists($hookName)) {
                        $templateContent = $template->get();
                        $originalTemplateContent = $templateContent;
                        $app->hooks->execute($hookName, $templateContent);
                        if ($templateContent !== $originalTemplateContent) {
                            $template->set($templateContent);
                        }
                    }

                    $template->insert($response->content, 'body');
                    $response->content = $app->components->process($template->get());
                },
                'manifest' => function() use ($context) {
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
                },
                'options' => function() use ($context) {
                    $options = include $context->dir . '/options.php';
                    $values = require $context->dir . '/styles/1.php';
                    foreach ($values as $id => $value) {
                        if (strpos($value, '{"') === 0) {
                            $values[$id] = json_decode($value, true);
                        }
                    }
                    $options->setDefaultValues($values);
                    return $options;
                },
                'styles' => function() use ($context) {
                    return include $context->dir . '/styles.php';
                }
            ];
        });

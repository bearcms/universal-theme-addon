<?php

/*
 * Universal Theme addon for Bear CMS
 * https://github.com/bearcms/universal-theme-addon
 * Copyright (c) Amplilabs Ltd.
 * Free to use under the MIT license.
 */

use BearFramework\App;

$app = App::get();
$context = $app->context->get(__FILE__);

return [
    [
        'name' => 'Стил 1',
        'media' => [
            [
                'filename' => $context->dir . '/assets/1.jpg',
                'width' => 1024,
                'height' => 768,
            ]
        ],
        'values' => require $context->dir . '/styles/1.php'
    ],
    [
        'name' => 'Стил 2',
        'media' => [
            [
                'filename' => $context->dir . '/assets/2.jpg',
                'width' => 1024,
                'height' => 768,
            ]
        ],
        'values' => require $context->dir . '/styles/2.php'
    ],
    [
        'name' => 'Стил 3',
        'media' => [
            [
                'filename' => $context->dir . '/assets/3.jpg',
                'width' => 1024,
                'height' => 768,
            ]
        ],
        'values' => require $context->dir . '/styles/3.php'
    ],
    [
        'name' => 'Стил 4',
        'media' => [
            [
                'filename' => $context->dir . '/assets/4.jpg',
                'width' => 1024,
                'height' => 768,
            ]
        ],
        'values' => require $context->dir . '/styles/4.php'
    ],
    [
        'name' => 'Стил 5',
        'media' => [
            [
                'filename' => $context->dir . '/assets/5.jpg',
                'width' => 1024,
                'height' => 768,
            ]
        ],
        'values' => require $context->dir . '/styles/5.php'
    ]
];

<?php

/*
 * Universal Theme addon for Bear CMS
 * https://github.com/bearcms/universal-theme-addon
 * Copyright (c) Amplilabs Ltd.
 * Free to use under the MIT license.
 */

use BearFramework\App;

$app = App::get();

$headerGroup = $options->addGroup(__("bearcms.themes.universal.options.Header"));
$headerGroup->addOption("headerCSS", "css", "", [
    "cssTypes" => ["cssPadding", "cssMargin", "cssBorder", "cssRadius", "cssShadow", "cssBackground", "cssSize"],
    "cssOutput" => [
        ["rule", ".template-header", "box-sizing:border-box;"],
        ["selector", ".template-header"]
    ]
]);

$headerLogoGroup = $headerGroup->addGroup(__("bearcms.themes.universal.options.Logo"));
$headerLogoGroup
    ->addOption("headerLogoImage", "image", __("bearcms.themes.universal.options.Image"))
    ->addOption("headerLogoImageCSS", "css", "", [
        "cssTypes" => ["cssMargin", "cssBorder", "cssRadius", "cssShadow", "cssSize"],
        "cssOutput" => [
            ["rule", ".template-header-logo", "box-sizing:border-box;overflow:hidden;font-size:0;"],
            ["selector", ".template-header-logo"]
        ]
    ]);
$headerLogoContainerGroup = $headerLogoGroup->addGroup(__("bearcms.themes.universal.options.Container"));
$headerLogoContainerGroup
    ->addOption("headerLogoImageContainerCSS", "css", "", [
        "cssTypes" => ["cssPadding", "cssMargin", "cssBorder", "cssRadius", "cssShadow", "cssBackground", "cssSize"],
        "cssOutput" => [
            ["rule", ".template-header-logo-container", "box-sizing:border-box;"],
            ["selector", ".template-header-logo-container"]
        ]
    ]);

$headerTitleGroup = $headerGroup->addGroup(__("bearcms.themes.universal.options.Title"));
$headerTitleGroup
    ->addOption("headerTitleVisibility", "list", __("bearcms.themes.universal.options.Visibility"), [
        "values" => [
            [
                "value" => "1",
                "name" => __("bearcms.themes.universal.options.Visible")
            ],
            [
                "value" => "0",
                "name" => __("bearcms.themes.universal.options.Hidden")
            ]
        ]
    ])
    ->addOption("headerTitleCSS", "css", "", [
        "cssOutput" => [
            ["rule", ".template-header-title", "box-sizing:border-box;display:inline-block;text-decoration:none;word-break:break-word;"],
            ["selector", ".template-header-title"]
        ]
    ]);
$headerTitleContainerGroup = $headerTitleGroup->addGroup(__("bearcms.themes.universal.options.Container"));
$headerTitleContainerGroup
    ->addOption("headerTitleContainerCSS", "css", "", [
        "cssTypes" => ["cssPadding", "cssMargin", "cssBorder", "cssRadius", "cssShadow", "cssBackground", "cssSize", "cssTextAlign"],
        "cssOutput" => [
            ["rule", ".template-header-title-container", "box-sizing:border-box;"],
            ["selector", ".template-header-title-container"]
        ]
    ]);

$headerDescriptionGroup = $headerGroup->addGroup(__("bearcms.themes.universal.options.Description"));
$headerDescriptionGroup
    ->addOption("headerDescriptionVisibility", "list", __("bearcms.themes.universal.options.Visibility"), [
        "values" => [
            [
                "value" => "1",
                "name" => __("bearcms.themes.universal.options.Visible")
            ],
            [
                "value" => "0",
                "name" => __("bearcms.themes.universal.options.Hidden")
            ]
        ]
    ])
    ->addOption("headerDescriptionCSS", "css", "", [
        "cssTypes" => ["cssText", "cssTextShadow", "cssBackground", "cssPadding", "cssBorder", "cssRadius", "cssShadow", "cssSize"],
        "cssOutput" => [
            ["rule", ".template-header-description", "box-sizing:border-box;display:inline-block;word-break:break-word;"],
            ["selector", ".template-header-description"]
        ]
    ]);
$headerDescriptionContainerGroup = $headerDescriptionGroup->addGroup(__("bearcms.themes.universal.options.Container"));
$headerDescriptionContainerGroup
    ->addOption("headerDescriptionContainerCSS", "css", "", [
        "cssTypes" => ["cssPadding", "cssMargin", "cssBorder", "cssRadius", "cssShadow", "cssBackground", "cssSize", "cssTextAlign"],
        "cssOutput" => [
            ["rule", ".template-header-description-container", "box-sizing:border-box;"],
            ["selector", ".template-header-description-container"]
        ]
    ]);

$headerContainerGroup = $headerGroup->addGroup(__("bearcms.themes.universal.options.Container"));
$headerContainerGroup
    ->addOption("headerContainerCSS", "css", "", [
        "cssTypes" => ["cssPadding", "cssMargin", "cssBorder", "cssRadius", "cssShadow", "cssBackground", "cssSize"],
        "cssOutput" => [
            ["rule", ".template-header-container", "box-sizing:border-box;"],
            ["selector", ".template-header-container"]
        ]
    ]);

$navigationGroup = $options->addGroup(__("bearcms.themes.universal.options.Navigation"));
$navigationGroup
    ->addOption("navigationVisibility", "list", __("bearcms.themes.universal.options.Visibility"), [
        "values" => [
            [
                "value" => "1",
                "name" => __("bearcms.themes.universal.options.Visible")
            ],
            [
                "value" => "0",
                "name" => __("bearcms.themes.universal.options.Hidden")
            ]
        ]
    ])
    ->addOption("navigationPosition", "list", __("bearcms.themes.universal.options.Position"), [
        "values" => [
            [
                "value" => "1",
                "name" => __("bearcms.themes.universal.options.Top")
            ],
            [
                "value" => "2",
                "name" => __("bearcms.themes.universal.options.Bottom")
            ]
        ]
    ])
    ->addOption("navigationCSS", "css", "", [
        "cssTypes" => ["cssPadding", "cssMargin", "cssBorder", "cssRadius", "cssShadow", "cssBackground", "cssSize", "cssTextAlign"],
        "cssOutput" => [
            ["rule", ".template-navigation", "box-sizing:border-box;"],
            ["selector", ".template-navigation"]
        ]
    ]);
$navigationItemGroup = $navigationGroup->addGroup(__("bearcms.themes.universal.options.Item"));
$navigationItemGroup
    ->addOption("navigationItemCSS", "css", "", [
        "cssTypes" => ["cssPadding", "cssText", "cssTextShadow", "cssBorder", "cssRadius", "cssShadow", "cssBackground", "cssSize"],
        "cssOutput" => [
            ["rule", ".template-navigation .template-navigation-content > .bearcms-navigation-element-item", "box-sizing:border-box;display:inline-block;max-width:100%;"],
            ["rule", ".template-navigation .template-navigation-content > .bearcms-navigation-element-item > a", "box-sizing:border-box;display:block;white-space:nowrap;text-overflow:ellipsis;font-family:inherit;color:inherit;font-size:inherit;font-weight:inherit;font-style:inherit;text-decoration:inherit;text-align:inherit;line-height:inherit;letter-spacing:inherit;text-shadow:inherit;max-width:100%;overflow:hidden;"],
            ["selector", ".template-navigation .template-navigation-content > .bearcms-navigation-element-item > a"],
            ["selector", ".template-navigation #template-navigation-toggle-button + label"],
            ["selector", ".template-navigation #template-navigation-toggle-button:checked + label"],
            ["selector", ".template-navigation .bearcms-navigation-toggle-item-search"],
            ["selector", ".template-navigation .bearcms-navigation-toggle-item-store-cart"]
        ]
    ]);
$navigationItemSelectedGroup = $navigationItemGroup->addGroup(__("bearcms.themes.universal.options.Selected"));
$navigationItemSelectedGroup->addOption("navigationSelectedItemCSS", "css", "", [
    "cssTypes" => ["cssPadding", "cssText", "cssTextShadow", "cssBorder", "cssRadius", "cssShadow", "cssBackground", "cssSize"],
    "cssOutput" => [
        ["rule", ".template-navigation .template-navigation-content > .bearcms-navigation-element-item-selected > a", "box-sizing:border-box;"],
        ["rule", ".template-navigation #template-navigation-toggle-button:checked + label", "box-sizing:border-box;"],
        ["selector", ".template-navigation .template-navigation-content > .bearcms-navigation-element-item-selected > a"],
        ["selector", ".template-navigation #template-navigation-toggle-button:checked + label"]
    ]
]);
$navigationItemSubitemGroup = $navigationItemGroup->addGroup(__("bearcms.themes.universal.options.Subitem"));
$navigationItemSubitemGroup
    ->addOption("navigationSubitemCSS", "css", "", [
        "cssTypes" => ["cssPadding", "cssText", "cssTextShadow", "cssBorder", "cssRadius", "cssShadow", "cssBackground", "cssSize"],
        "cssOutput" => [
            ["rule", ".template-navigation .template-navigation-content .bearcms-navigation-element-item-children > .bearcms-navigation-element-item", "display:block;"],
            ["rule", ".template-navigation .template-navigation-content .bearcms-navigation-element-item-children > .bearcms-navigation-element-item > a", "box-sizing:border-box;display:block;white-space:nowrap;text-overflow:ellipsis;font-family:inherit;color:inherit;font-size:inherit;font-weight:inherit;font-style:inherit;text-decoration:inherit;text-align:inherit;line-height:inherit;letter-spacing:inherit;text-shadow:inherit;max-width:100%;overflow:hidden;"],
            ["selector", ".template-navigation .template-navigation-content .bearcms-navigation-element-item-children > .bearcms-navigation-element-item > a"]
        ]
    ]);
$navigationItemSubitemSelectedGroup = $navigationItemSubitemGroup->addGroup(__("bearcms.themes.universal.options.Selected"));
$navigationItemSubitemSelectedGroup
    ->addOption("navigationSelectedSubitemCSS", "css", "", [
        "cssTypes" => ["cssPadding", "cssText", "cssTextShadow", "cssBorder", "cssRadius", "cssShadow", "cssBackground", "cssSize"],
        "cssOutput" => [
            ["rule", ".template-navigation .template-navigation-content .bearcms-navigation-element-item-children > .bearcms-navigation-element-item-selected > a", "box-sizing:border-box;"],
            ["selector", ".template-navigation .template-navigation-content .bearcms-navigation-element-item-children > .bearcms-navigation-element-item-selected > a"]
        ]
    ]);
$navigationContainerGroup = $navigationGroup->addGroup(__("bearcms.themes.universal.options.Container"));
$navigationContainerGroup
    ->addOption("navigationContainerCSS", "css", "", [
        "cssTypes" => ["cssPadding", "cssMargin", "cssBorder", "cssRadius", "cssShadow", "cssBackground", "cssSize"],
        "cssOutput" => [
            ["rule", ".template-navigation-container", "box-sizing:border-box;"],
            ["selector", ".template-navigation-container"]
        ]
    ]);

$homePageSpecialBlockGroup = $options->addGroup(__("bearcms.themes.universal.options.Intro"), "This content block is shown only on the home page. It is useful for welcoming your visitors with images, videos or text.");
$homePageSpecialBlockGroup
    ->addOption("homePageSpecialContentBlockVisibility", "list", __("bearcms.themes.universal.options.Visibility"), [
        "values" => [
            [
                "value" => "1",
                "name" => __("bearcms.themes.universal.options.Visible")
            ],
            [
                "value" => "0",
                "name" => __("bearcms.themes.universal.options.Hidden")
            ]
        ]
    ])
    ->addOption("homePageSpecialContentBlockCSS", "css", "", [
        "cssTypes" => ["cssPadding", "cssMargin", "cssBorder", "cssRadius", "cssShadow", "cssBackground", "cssSize"],
        "cssOutput" => [
            ["rule", ".template-homepage-special-content-block", "box-sizing:border-box;"],
            ["selector", ".template-homepage-special-content-block"]
        ]
    ]);
$homePageSpecialBlockElementsGroup = $homePageSpecialBlockGroup->addGroup(__("bearcms.themes.universal.options.Elements"));
$homePageSpecialBlockElementsGroup
    ->addElements('homePageSpecialContentBlockElements', '.template-homepage-special-content-block');

$homePageSpecialBlockContainerGroup = $homePageSpecialBlockGroup->addGroup(__("bearcms.themes.universal.options.Container"));
$homePageSpecialBlockContainerGroup
    ->addOption("homePageSpecialContentBlockContainerCSS", "css", "", [
        "cssTypes" => ["cssPadding", "cssMargin", "cssBorder", "cssRadius", "cssShadow", "cssBackground", "cssSize"],
        "cssOutput" => [
            ["rule", ".template-homepage-special-content-block-container", "box-sizing:border-box;"],
            ["selector", ".template-homepage-special-content-block-container"]
        ]
    ]);

$contentGroup = $options->addGroup(__("bearcms.themes.universal.options.Content"));
$contentGroup
    ->addOption("contentCSS", "css", "", [
        "cssTypes" => ["cssPadding", "cssMargin", "cssBorder", "cssRadius", "cssShadow", "cssBackground", "cssSize"],
        "cssOutput" => [
            ["rule", ".template-content", "box-sizing:border-box;"],
            ["selector", ".template-content"]
        ]
    ]);

$contentElementsGroup = $contentGroup->addGroup(__("bearcms.themes.universal.options.Elements"));
$contentElementsGroup
    ->addElements('contentElements', '.template-content');
$contentElementsContainerGroup = $contentGroup->addGroup(__("bearcms.themes.universal.options.Container"));
$contentElementsContainerGroup
    ->addOption("contentContainerCSS", "css", "", [
        "cssTypes" => ["cssPadding", "cssMargin", "cssBorder", "cssRadius", "cssShadow", "cssBackground", "cssSize"],
        "cssOutput" => [
            ["rule", ".template-content-container", "box-sizing:border-box;"],
            ["selector", ".template-content-container"]
        ]
    ]);

$footerGroup = $options->addGroup(__("bearcms.themes.universal.options.Footer"));
$footerGroup
    ->addOption("footerVisibility", "list", __("bearcms.themes.universal.options.Visibility"), [
        "values" => [
            [
                "value" => "1",
                "name" => __("bearcms.themes.universal.options.Visible")
            ],
            [
                "value" => "0",
                "name" => __("bearcms.themes.universal.options.Hidden")
            ]
        ]
    ])
    ->addOption("footerCSS", "css", "", [
        "cssTypes" => ["cssPadding", "cssMargin", "cssBorder", "cssRadius", "cssShadow", "cssBackground", "cssSize"],
        "cssOutput" => [
            ["rule", ".template-footer", "box-sizing:border-box;"],
            ["selector", ".template-footer"]
        ]
    ]);

$footerElementsGroup = $footerGroup->addGroup(__("bearcms.themes.universal.options.Elements"));
$footerElementsGroup
    ->addElements('footerElements', '.template-footer');

$footerContainerGroup = $footerGroup->addGroup(__("bearcms.themes.universal.options.Container"));
$footerContainerGroup
    ->addOption("footerContainerCSS", "css", "", [
        "cssTypes" => ["cssPadding", "cssMargin", "cssBorder", "cssRadius", "cssShadow", "cssBackground", "cssSize"],
        "cssOutput" => [
            ["rule", ".template-footer-container", "box-sizing:border-box;"],
            ["selector", ".template-footer-container"]
        ]
    ]);

$windowGroup = $options->addGroup(__("bearcms.themes.universal.options.Window"));
$windowGroup
    ->addOption("bodyCSS", "css", "", [
        "cssTypes" => ["cssPadding", "cssBorder", "cssRadius", "cssShadow", "cssBackground"],
        "cssOutput" => [
            ["selector", ".template-body"]
        ]
    ]);

$pagesGroup = $options->addGroup(__('bearcms.themes.universal.Pages'));
$pagesGroup
    ->addPages();

$options->addCustomCSS();

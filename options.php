<?php

/*
 * Universal Theme addon for Bear CMS
 * https://github.com/bearcms/universal-theme-addon
 * Copyright (c) Amplilabs Ltd.
 * Free to use under the MIT license.
 */

use BearFramework\App;

$app = App::get();

$schema = $app->bearCMS->themes->makeOptionsSchema();

$headerGroup = $schema->addGroup(__("bearcms.themes.universal.options.Header"));
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
                ["rule", ".template-header-logo", "box-sizing:border-box;display:inline-block;overflow:hidden;font-size:0;"],
                ["selector", ".template-header-logo"]
            ]
        ]);
$headerLogoContainerGroup = $headerLogoGroup->addGroup(__("bearcms.themes.universal.options.Container"));
$headerLogoContainerGroup
        ->addOption("headerLogoImageContainerCSS", "css", "", [
            "cssTypes" => ["cssPadding", "cssMargin", "cssBorder", "cssRadius", "cssShadow", "cssBackground", "cssSize", "cssTextAlign"],
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
                ["rule", ".template-header-title", "display:inline-block;text-decoration:none;"],
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
                ["rule", ".template-header-description", "box-sizing:border-box;display:inline-block;"],
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

$navigationGroup = $schema->addGroup(__("bearcms.themes.universal.options.Navigation"));
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
                ["rule", ".template-navigation .template-navigation-content > .bearcms-navigation-element-item", "display:inline-block;"],
                ["rule", ".template-navigation .template-navigation-content > .bearcms-navigation-element-item > a", "display:block;white-space:nowrap;text-overflow:ellipsis;"],
                ["rule", ".template-navigation .template-navigation-content > .bearcms-navigation-element-item > a", "font-family:inherit;color:inherit;font-size:inherit;font-weight:inherit;font-style:inherit;text-decoration:inherit;text-align:inherit;line-height:inherit;letter-spacing:inherit;text-shadow:inherit;"],
                ["selector", ".template-navigation .template-navigation-content > .bearcms-navigation-element-item > a"],
                ["selector", ".template-navigation #template-navigation-toggle-button + label"],
                ["selector", ".template-navigation #template-navigation-toggle-button:checked + label"]
            ]
        ]);
$navigationItemSelectedGroup = $navigationItemGroup->addGroup(__("bearcms.themes.universal.options.Selected"));
$navigationItemSelectedGroup->addOption("navigationSelectedItemCSS", "css", "", [
    "cssTypes" => ["cssPadding", "cssText", "cssTextShadow", "cssBorder", "cssRadius", "cssShadow", "cssBackground", "cssSize"],
    "cssOutput" => [
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
                ["rule", ".template-navigation .template-navigation-content .bearcms-navigation-element-item-children > .bearcms-navigation-element-item > a", "display:block;white-space:nowrap;text-overflow:ellipsis;"],
                ["rule", ".template-navigation .template-navigation-content .bearcms-navigation-element-item-children > .bearcms-navigation-element-item > a", "font-family:inherit;color:inherit;font-size:inherit;font-weight:inherit;font-style:inherit;text-decoration:inherit;text-align:inherit;line-height:inherit;letter-spacing:inherit;text-shadow:inherit;"],
                ["selector", ".template-navigation .template-navigation-content .bearcms-navigation-element-item-children > .bearcms-navigation-element-item > a"]
            ]
        ]);
$navigationItemSubitemSelectedGroup = $navigationItemSubitemGroup->addGroup(__("bearcms.themes.universal.options.Selected"));
$navigationItemSubitemSelectedGroup
        ->addOption("navigationSelectedSubitemCSS", "css", "", [
            "cssTypes" => ["cssPadding", "cssText", "cssTextShadow", "cssBorder", "cssRadius", "cssShadow", "cssBackground", "cssSize"],
            "cssOutput" => [
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

$homePageSpecialBlockGroup = $schema->addGroup(__("bearcms.themes.universal.options.Home page special block"), "This content block is placed above the navigation on the home page. It is useful for welcoming your visitors with images, videos or text.");
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

$contentGroup = $schema->addGroup(__("bearcms.themes.universal.options.Content"));
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

$footerGroup = $schema->addGroup(__("bearcms.themes.universal.options.Footer"));
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

$windowGroup = $schema->addGroup(__("bearcms.themes.universal.options.Window"));
$windowGroup
        ->addOption("bodyCSS", "css", "", [
            "cssTypes" => ["cssPadding", "cssBorder", "cssRadius", "cssShadow", "cssBackground"],
            "cssOutput" => [
                ["selector", "body"]
            ]
        ]);

$pagesGroup = $schema->addGroup(__('bearcms.themes.universal.Pages'));
$pagesGroup
        ->addPages();

$schema->addCustomCSS();

return $schema;

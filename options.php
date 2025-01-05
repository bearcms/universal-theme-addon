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
$headerGroup->addOption("headerLayout", "list", __("bearcms.themes.universal.options.Header.Layout"), [
    "values" => [
        [
            "value" => "navAboveHeaderContainer",
            "name" => __("bearcms.themes.universal.options.Header.Layout.NavAboveHeaderContainer"),
            "hint" => __("bearcms.themes.universal.options.Header.Layout.NavAboveHeaderContainerDesc")
        ],
        [
            "value" => "navBelowHeaderContainer",
            "name" => __("bearcms.themes.universal.options.Header.Layout.NavBelowHeaderContainer"),
            "hint" => __("bearcms.themes.universal.options.Header.Layout.NavBelowHeaderContainerDesc")
        ],
        [
            "value" => "navInsideHeaderFirst",
            "name" => __("bearcms.themes.universal.options.Header.Layout.NavInsideHeaderFirst"),
            "hint" => __("bearcms.themes.universal.options.Header.Layout.NavInsideHeaderFirstDesc")
        ],
        [
            "value" => "navInsideHeaderLast",
            "name" => __("bearcms.themes.universal.options.Header.Layout.NavInsideHeaderLast"),
            "hint" => __("bearcms.themes.universal.options.Header.Layout.NavInsideHeaderLastDesc")
        ],
        [
            "value" => "navInsideHeaderContainerFirst",
            "name" => __("bearcms.themes.universal.options.Header.Layout.NavInsideHeaderContainerFirst"),
            "hint" => __("bearcms.themes.universal.options.Header.Layout.NavInsideHeaderContainerFirstDesc")
        ],
        [
            "value" => "navInsideHeaderContainerLast",
            "name" => __("bearcms.themes.universal.options.Header.Layout.NavInsideHeaderContainerLast"),
            "hint" => __("bearcms.themes.universal.options.Header.Layout.NavInsideHeaderContainerLastDesc")
        ],
        [
            "value" => "navHoverOverHeader",
            "name" => __("bearcms.themes.universal.options.Header.Layout.NavHoverOverHeader"),
            "hint" => __("bearcms.themes.universal.options.Header.Layout.NavHoverOverHeaderDesc")
        ],
        [
            "value" => "navHoverOverHeaderContainer",
            "name" => __("bearcms.themes.universal.options.Header.Layout.NavHoverOverHeaderContainer"),
            "hint" => __("bearcms.themes.universal.options.Header.Layout.NavHoverOverHeaderContainerDesc")
        ],
        [
            "value" => "horizontal",
            "name" => __("bearcms.themes.universal.options.Header.Layout.Horizontal"),
            "hint" => __("bearcms.themes.universal.options.Header.Layout.HorizontalDesc")
        ],
        [
            "value" => "custom",
            "name" => __("bearcms.themes.universal.options.Header.Layout.Custom"),
            "hint" => __("bearcms.themes.universal.options.Header.Layout.CustomDesc")
        ]
    ],
    "defaultValue" => "navInsideHeaderLast",
    "onHighlight" => [
        ["cssSelector", ".template-header"]
    ]
]);
$headerGroup->addOption("headerVisibility", "list", __("bearcms.themes.universal.options.Visibility"), [
    "values" => [
        [
            "value" => "1",
            "name" => __("bearcms.themes.universal.options.Visible")
        ],
        [
            "value" => "0",
            "name" => __("bearcms.themes.universal.options.Hidden")
        ]
    ],
    "defaultValue" => "1",
    "onHighlight" => [
        ["cssSelector", ".template-header"]
    ]
]);
$headerGroup->addOption("headerCSS", "css", "", [
    "cssTypes" => ["cssPadding", "cssMargin", "cssBorder", "cssRadius", "cssShadow", "cssBackground", "cssSize"],
    "cssOptions" => ["*/hoverState", "*/screenSizeState", "*/pageTypeState"],
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
        "cssOptions" => ["*/hoverState", "*/activeState", "*/focusState", "*/screenSizeState", "*/pageTypeState"],
        "cssOutput" => [
            ["rule", ".template-header-logo", "box-sizing:border-box;overflow:hidden;font-size:0;"],
            ["selector", ".template-header-logo"]
        ]
    ]);
$headerLogoContainerGroup = $headerLogoGroup->addGroup(__("bearcms.themes.universal.options.Container"));
$headerLogoContainerGroup
    ->addOption("headerLogoImageContainerCSS", "css", "", [
        "cssTypes" => ["cssPadding", "cssMargin", "cssBorder", "cssRadius", "cssShadow", "cssBackground", "cssSize"],
        "cssOptions" => ["*/hoverState", "*/screenSizeState", "*/pageTypeState"],
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
        ],
        "defaultValue" => "1",
        "onHighlight" => [
            ["cssSelector", ".template-header-title"]
        ]
    ])
    ->addOption("headerTitleCSS", "css", "", [
        "cssOptions" => ["*/hoverState", "*/activeState", "*/focusState", "*/screenSizeState", "*/pageTypeState"],
        "cssOutput" => [
            ["rule", ".template-header-title", "box-sizing:border-box;display:inline-block;text-decoration:none;word-break:break-word;"],
            ["selector", ".template-header-title"]
        ]
    ]);
$headerTitleContainerGroup = $headerTitleGroup->addGroup(__("bearcms.themes.universal.options.Container"));
$headerTitleContainerGroup
    ->addOption("headerTitleContainerCSS", "css", "", [
        "cssTypes" => ["cssPadding", "cssMargin", "cssBorder", "cssRadius", "cssShadow", "cssBackground", "cssSize", "cssTextAlign"],
        "cssOptions" => ["*/hoverState", "*/screenSizeState", "*/pageTypeState"],
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
        ],
        "defaultValue" => "1",
        "onHighlight" => [
            ["cssSelector", ".template-header-description"]
        ]
    ])
    ->addOption("headerDescriptionCSS", "css", "", [
        "cssTypes" => ["cssText", "cssTextShadow", "cssBackground", "cssPadding", "cssBorder", "cssRadius", "cssShadow", "cssSize"],
        "cssOptions" => ["*/hoverState", "*/screenSizeState", "*/pageTypeState"],
        "cssOutput" => [
            ["rule", ".template-header-description", "box-sizing:border-box;display:inline-block;word-break:break-word;"],
            ["selector", ".template-header-description"]
        ]
    ]);
$headerDescriptionContainerGroup = $headerDescriptionGroup->addGroup(__("bearcms.themes.universal.options.Container"));
$headerDescriptionContainerGroup
    ->addOption("headerDescriptionContainerCSS", "css", "", [
        "cssTypes" => ["cssPadding", "cssMargin", "cssBorder", "cssRadius", "cssShadow", "cssBackground", "cssSize", "cssTextAlign"],
        "cssOptions" => ["*/hoverState", "*/screenSizeState", "*/pageTypeState"],
        "cssOutput" => [
            ["rule", ".template-header-description-container", "box-sizing:border-box;"],
            ["selector", ".template-header-description-container"]
        ]
    ]);

$navigationGroup = $headerGroup->addGroup(__("bearcms.themes.universal.options.Navigation"));
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
        ],
        "defaultValue" => "1",
        "onHighlight" => [
            ["cssSelector", ".template-navigation-container"]
        ]
    ])
    ->addOption("navigationType", "list", __("bearcms.themes.universal.options.Navigation.Type"), [
        "values" => [
            [
                "value" => "horizontal",
                "name" => __('bearcms.themes.universal.options.Navigation.Type.Horizontal'),
                "hint" => __('bearcms.themes.universal.options.Navigation.Type.HorizontalDesc'),
            ],
            [
                "value" => "buttonBlock",
                "name" => __('bearcms.themes.universal.options.Navigation.Type.ButtonBlock'),
                "hint" => __('bearcms.themes.universal.options.Navigation.Type.ButtonBlockDesc'),
            ],
            [
                "value" => "buttonDropDown",
                "name" => __('bearcms.themes.universal.options.Navigation.Type.ButtonDropDown'),
                "hint" => __('bearcms.themes.universal.options.Navigation.Type.ButtonDropDownDesc'),
            ],
            [
                "value" => "buttonOverlay",
                "name" => __('bearcms.themes.universal.options.Navigation.Type.ButtonOverlay'),
                "hint" => __('bearcms.themes.universal.options.Navigation.Type.ButtonOverlayDesc'),
            ]
        ],
        "states" => [
            [
                "id" => "screen-size",
                "type" => "screenSize"
            ],
            [
                "id" => "page-type",
                "type" => "pageType"
            ]
        ],
        "cssOutput" => [
            ["selector", '.template-navigation-container', '--css-to-attribute-data-bearcms-universal-theme-navigation-type:{value};'],
        ],
        "defaultValue" => "horizontal"
    ]);
$navigationSearchButtonGroup = $navigationGroup->addGroup(__("bearcms.themes.universal.options.Navigation.SearchButton"));
$navigationSearchButtonGroup
    ->addOption("navigationSearchButtonVisibility", "list", __("bearcms.themes.universal.options.Visibility"), [
        "values" => [
            [
                "value" => "auto",
                "name" => __("bearcms.themes.universal.options.Auto")
            ],
            [
                "value" => "1",
                "name" => __("bearcms.themes.universal.options.Visible")
            ],
            [
                "value" => "0",
                "name" => __("bearcms.themes.universal.options.Hidden")
            ]
        ],
        "defaultValue" => "auto",
        "onHighlight" => [
            ["cssSelector", ".bearcms-navigation-button-search"]
        ]
    ]);
$navigationStoreCartButtonGroup = $navigationGroup->addGroup(__("bearcms.themes.universal.options.Navigation.StoreCartButton"));
$navigationStoreCartButtonGroup
    ->addOption("navigationStoreCartButtonVisibility", "list", __("bearcms.themes.universal.options.Visibility"), [
        "values" => [
            [
                "value" => "auto",
                "name" => __("bearcms.themes.universal.options.Auto")
            ],
            [
                "value" => "1",
                "name" => __("bearcms.themes.universal.options.Visible")
            ],
            [
                "value" => "0",
                "name" => __("bearcms.themes.universal.options.Hidden")
            ]
        ],
        "defaultValue" => "auto",
        "onHighlight" => [
            ["cssSelector", ".bearcms-navigation-button-store-cart"]
        ]
    ]);

$addNavigationType = function ($group, string $idPrefix, string $selectorPrefix, string $navigationContentAlignSelector): void {
    $group->addOption($idPrefix . "CSS", "css", "", [
        "cssTypes" => ["cssPadding", "cssMargin", "cssBorder", "cssRadius", "cssShadow", "cssBackground", "cssSize"],
        "cssOptions" => ["*/hoverState", "*/activeState", "*/screenSizeState", "*/pageTypeState"],
        "cssOutput" => [
            ["rule", $selectorPrefix . " .template-navigation", "box-sizing:border-box;"],
            ["selector", $selectorPrefix . " .template-navigation"]
        ]
    ]);
    $group->addOption($idPrefix . "ContentAlign", "list", __('bearcms.themes.universal.options.Navigation.ContentAlign'), [
        "values" => [
            [
                "value" => "left",
                "name" => __('bearcms.themes.universal.options.Navigation.ContentAlign.Left')
            ],
            [
                "value" => "center",
                "name" => __('bearcms.themes.universal.options.Navigation.ContentAlign.Center')
            ],
            [
                "value" => "right",
                "name" => __('bearcms.themes.universal.options.Navigation.ContentAlign.Right')
            ]
        ],
        "cssOutput" => [
            ["selector", $selectorPrefix . " " . $navigationContentAlignSelector, '--css-to-attribute-data-bearcms-universal-theme-navigation-content-align:{value};'],
        ],
        "defaultValue" => "left"
    ]);
};

$addNavigationTypeContainer = function ($group, string $idPrefix, string $selectorPrefix): void {
    $container = $group->addGroup(__("bearcms.themes.universal.options.Container"));
    $container
        ->addOption($idPrefix . "ContainerCSS", "css", "", [
            "cssTypes" => ["cssPadding", "cssMargin", "cssBorder", "cssRadius", "cssShadow", "cssBackground", "cssSize"],
            "cssOptions" => ["*/hoverState", "*/activeState", "*/screenSizeState", "*/pageTypeState"],
            "cssOutput" => [
                ["rule", $selectorPrefix, "box-sizing:border-box;"],
                ["selector", $selectorPrefix]
            ]
        ]);
};

$addNavigationTypeItems = function ($group, string $idPrefix, string $selectorPrefix, bool $addContainer, bool $addSubitem): void {
    $elementsGroup = $group->addGroup(__('bearcms.themes.universal.options.Navigation.Items'));
    $elementsGroup->addOption($idPrefix . "ItemsCSS", "css", "", [
        "cssTypes" => ["cssPadding", "cssMargin", "cssBorder", "cssRadius", "cssShadow", "cssBackground", "cssSize"],
        "cssOptions" => ["*/hoverState", "*/activeState", "*/screenSizeState", "*/pageTypeState"],
        "cssOutput" => [
            ["rule", $selectorPrefix . " .template-navigation-items", "box-sizing:border-box;"],
            ["selector", $selectorPrefix . " .template-navigation-items"]
        ]
    ]);
    $navigationItemGroup = $elementsGroup->addGroup(__("bearcms.themes.universal.options.Item"));
    $navigationItemGroup
        ->addOption($idPrefix . "ItemCSS", "css", "", [
            "cssTypes" => ["cssPadding", "cssText", "cssTextShadow", "cssBorder", "cssRadius", "cssShadow", "cssBackground", "cssSize"],
            "cssOptions" => ["*/hoverState", "*/activeState", "*/focusState", "*/screenSizeState", "*/pageTypeState", "*/firstChildState", "*/lastChildState"],
            "cssOutput" => [
                ["rule", $selectorPrefix . " .template-navigation-content > .bearcms-navigation-element-item", "box-sizing:border-box;display:inline-block;max-width:100%;"],
                ["rule", $selectorPrefix . " .template-navigation-content > .bearcms-navigation-element-item > a", "box-sizing:border-box;display:block;white-space:nowrap;text-overflow:ellipsis;font-family:inherit;color:inherit;font-size:inherit;font-weight:inherit;font-style:inherit;text-decoration:inherit;text-align:inherit;line-height:inherit;letter-spacing:inherit;text-shadow:inherit;max-width:100%;overflow:hidden;"],
                ["selector", $selectorPrefix . " .template-navigation-content > .bearcms-navigation-element-item{stateSelector(first-child)}{stateSelector(last-child)} > a"],
            ]
        ]);
    $navigationItemSelectedGroup = $navigationItemGroup->addGroup(__("bearcms.themes.universal.options.Selected"));
    $navigationItemSelectedGroup->addOption($idPrefix . "SelectedItemCSS", "css", "", [
        "cssTypes" => ["cssPadding", "cssText", "cssTextShadow", "cssBorder", "cssRadius", "cssShadow", "cssBackground", "cssSize"],
        "cssOptions" => ["*/hoverState", "*/activeState", "*/focusState", "*/screenSizeState", "*/pageTypeState", "*/firstChildState", "*/lastChildState"],
        "cssOutput" => [
            ["rule", $selectorPrefix . " .template-navigation-content > .bearcms-navigation-element-item-selected > a", "box-sizing:border-box;"],
            ["selector", $selectorPrefix . " .template-navigation-content > .bearcms-navigation-element-item-selected{stateSelector(first-child)}{stateSelector(last-child)} > a"],
        ]
    ]);
    if ($addSubitem) {
        $navigationItemSubitemGroup = $navigationItemGroup->addGroup(__("bearcms.themes.universal.options.Subitem"));
        $navigationItemSubitemGroup
            ->addOption($idPrefix . "SubitemCSS", "css", "", [
                "cssTypes" => ["cssPadding", "cssText", "cssTextShadow", "cssBorder", "cssRadius", "cssShadow", "cssBackground", "cssSize"],
                "cssOptions" => ["*/hoverState", "*/activeState", "*/focusState", "*/screenSizeState", "*/pageTypeState", "*/firstChildState", "*/lastChildState"],
                "cssOutput" => [
                    ["rule", $selectorPrefix . " .template-navigation-content .bearcms-navigation-element-item-children > .bearcms-navigation-element-item", "display:block;"],
                    ["rule", $selectorPrefix . " .template-navigation-content .bearcms-navigation-element-item-children > .bearcms-navigation-element-item > a", "box-sizing:border-box;display:block;white-space:nowrap;text-overflow:ellipsis;font-family:inherit;color:inherit;font-size:inherit;font-weight:inherit;font-style:inherit;text-decoration:inherit;text-align:inherit;line-height:inherit;letter-spacing:inherit;text-shadow:inherit;max-width:100%;overflow:hidden;"],
                    ["selector", $selectorPrefix . " .template-navigation-content .bearcms-navigation-element-item-children > .bearcms-navigation-element-item{stateSelector(first-child)}{stateSelector(last-child)} > a"]
                ]
            ]);
        $navigationItemSubitemSelectedGroup = $navigationItemSubitemGroup->addGroup(__("bearcms.themes.universal.options.Selected"));
        $navigationItemSubitemSelectedGroup
            ->addOption($idPrefix . "SelectedSubitemCSS", "css", "", [
                "cssTypes" => ["cssPadding", "cssText", "cssTextShadow", "cssBorder", "cssRadius", "cssShadow", "cssBackground", "cssSize"],
                "cssOptions" => ["*/hoverState", "*/activeState", "*/focusState", "*/screenSizeState", "*/pageTypeState", "*/firstChildState", "*/lastChildState"],
                "cssOutput" => [
                    ["rule", $selectorPrefix . " .template-navigation-content .bearcms-navigation-element-item-children > .bearcms-navigation-element-item-selected > a", "box-sizing:border-box;"],
                    ["selector", $selectorPrefix . " .template-navigation-content .bearcms-navigation-element-item-children > .bearcms-navigation-element-item-selected{stateSelector(first-child)}{stateSelector(last-child)} > a"]
                ]
            ]);
    }
    if ($addContainer) {
        $container = $elementsGroup->addGroup(__("bearcms.themes.universal.options.Container"));
        $container
            ->addOption($idPrefix . "ItemsContainerCSS", "css", "", [
                "cssTypes" => ["cssPadding", "cssMargin", "cssBorder", "cssRadius", "cssShadow", "cssBackground", "cssSize"],
                "cssOptions" => ["*/hoverState", "*/activeState", "*/screenSizeState", "*/pageTypeState"],
                "cssOutput" => [
                    ["rule", $selectorPrefix . " .template-navigation-items-container", "box-sizing:border-box;"],
                    ["selector", $selectorPrefix . " .template-navigation-items-container"]
                ]
            ]);
    }
};

$addNavigationTypeButtonsLayout = function ($group, string $idPrefix, string $selectorPrefix, $attributeSuffix): void {
    $group->addOption($idPrefix . "ButtonsLayout", "list", __('bearcms.themes.universal.options.Navigation.ButtonsLayout'), [
        "values" => [
            [
                "value" => "toggleLeft",
                "name" => __('bearcms.themes.universal.options.Navigation.ButtonsLayout.ToggleLeft'),
                "hint" => __('bearcms.themes.universal.options.Navigation.ButtonsLayout.ToggleLeftDesc'),
            ],
            [
                "value" => "toggleRight",
                "name" => __('bearcms.themes.universal.options.Navigation.ButtonsLayout.ToggleRight'),
                "hint" => __('bearcms.themes.universal.options.Navigation.ButtonsLayout.ToggleRightDesc'),
            ]
        ],
        "cssOutput" => [
            ["selector", $selectorPrefix, '--css-to-attribute-data-bearcms-universal-theme-navigation-buttons-layout-' . $attributeSuffix . ':{value};'],
        ],
        "defaultValue" => "toggleLeft"
    ]);
};

$addNavigationTypeToggleButton = function ($group, string $idPrefix, string $selectorPrefix): void {
    $toggleButton = $group->addGroup(__('bearcms.themes.universal.options.Navigation.ToggleButton'));
    $toggleButton->addOption($idPrefix . "ToggleButtonCSS", "css", "", [
        "cssTypes" => ["cssMargin", "cssBorder", "cssRadius", "cssShadow", "cssBackground", "cssSize"],
        "cssOptions" => ["*/hoverState", "*/activeState", "*/focusState", "*/screenSizeState", "*/pageTypeState"],
        "cssOutput" => [
            ["rule", $selectorPrefix . " .template-navigation-button-toggle", "box-sizing:border-box;"],
            ["selector", $selectorPrefix . " .template-navigation-button-toggle"]
        ]
    ]);
    $toggleButtonContainer = $toggleButton->addGroup(__("bearcms.themes.universal.options.Container"));
    $toggleButtonContainer
        ->addOption($idPrefix . "ToggleButtonContainerCSS", "css", "", [
            "cssTypes" => ["cssPadding", "cssMargin", "cssBorder", "cssRadius", "cssShadow", "cssBackground", "cssSize"],
            "cssOptions" => ["*/hoverState", "*/screenSizeState", "*/pageTypeState"],
            "cssOutput" => [
                ["rule", $selectorPrefix . " .template-navigation-button-toggle-container", "box-sizing:border-box;"],
                ["selector", $selectorPrefix . " .template-navigation-button-toggle-container"]
            ]
        ]);
};

$addNavigationTypeAdditionalButtons = function ($group, string $idPrefix, string $selectorPrefix): void {
    $additionalButtons = $group->addGroup(__('bearcms.themes.universal.options.Navigation.AdditionalButtons'));
    $storeCartButton = $additionalButtons->addGroup(__('bearcms.themes.universal.options.Navigation.StoreCartButton'));
    $storeCartButton->addOption($idPrefix . "StoreCartButtonCSS", "css", "", [
        "cssTypes" => ["cssMargin", "cssBorder", "cssRadius", "cssShadow", "cssBackground", "cssSize"],
        "cssOptions" => ["*/hoverState", "*/activeState", "*/focusState", "*/screenSizeState", "*/pageTypeState"],
        "cssOutput" => [
            ["rule", $selectorPrefix . " .bearcms-navigation-button-store-cart", "box-sizing:border-box;"],
            ["selector", $selectorPrefix . " .bearcms-navigation-button-store-cart"]
        ]
    ]);
    $searchButton = $additionalButtons->addGroup(__('bearcms.themes.universal.options.Navigation.SearchButton'));
    $searchButton->addOption($idPrefix . "SearchButtonCSS", "css", "", [
        "cssTypes" => ["cssMargin", "cssBorder", "cssRadius", "cssShadow", "cssBackground", "cssSize"],
        "cssOptions" => ["*/hoverState", "*/activeState", "*/focusState", "*/screenSizeState", "*/pageTypeState"],
        "cssOutput" => [
            ["rule", $selectorPrefix . " .bearcms-navigation-button-search", "box-sizing:border-box;"],
            ["selector", $selectorPrefix . " .bearcms-navigation-button-search"]
        ]
    ]);
    $additionalButtonsContainer = $additionalButtons->addGroup(__("bearcms.themes.universal.options.Container"));
    $additionalButtonsContainer
        ->addOption($idPrefix . "AdditionalButtonsContainerCSS", "css", "", [
            "cssTypes" => ["cssPadding", "cssMargin", "cssBorder", "cssRadius", "cssShadow", "cssBackground", "cssSize"],
            "cssOptions" => ["*/hoverState", "*/screenSizeState", "*/pageTypeState"],
            "cssOutput" => [
                ["rule", $selectorPrefix . " .template-navigation-additional-buttons", "box-sizing:border-box;"],
                ["selector", $selectorPrefix . " .template-navigation-additional-buttons"]
            ]
        ]);
};

$typesGroup = $navigationGroup->addGroup(__('bearcms.themes.universal.options.Navigation.Types'));

// HORIZONTAL
$idPrefix = 'navigationTypeHorizontal';
$selectorPrefix = '.template-navigation-container[data-bearcms-universal-theme-navigation-type="horizontal"]';
$typeGroup = $typesGroup->addGroup(__('bearcms.themes.universal.options.Navigation.Type.Horizontal'));
$addNavigationType($typeGroup, $idPrefix, $selectorPrefix, '.template-navigation');
$addNavigationTypeItems($typeGroup, $idPrefix, $selectorPrefix, false, true);
$addNavigationTypeAdditionalButtons($typeGroup, $idPrefix, $selectorPrefix);
$addNavigationTypeContainer($typeGroup, $idPrefix, $selectorPrefix);

// BUTTON BLOCK
$idPrefix = 'navigationTypeButtonBlock';
$selectorPrefix = '.template-navigation-container[data-bearcms-universal-theme-navigation-type="buttonBlock"]';
$typeGroup = $typesGroup->addGroup(__('bearcms.themes.universal.options.Navigation.Type.ButtonBlock'));
$addNavigationType($typeGroup, $idPrefix, $selectorPrefix, '.template-navigation .template-navigation-buttons');
$addNavigationTypeButtonsLayout($typeGroup, $idPrefix, $selectorPrefix, "button-block");
$addNavigationTypeToggleButton($typeGroup, $idPrefix, $selectorPrefix);
$addNavigationTypeAdditionalButtons($typeGroup, $idPrefix, $selectorPrefix);
$addNavigationTypeItems($typeGroup, $idPrefix, $selectorPrefix, true, false);
$addNavigationTypeContainer($typeGroup, $idPrefix, $selectorPrefix);

// BUTTON DROP DOWN
$idPrefix = 'navigationTypeButtonDropDown';
$selectorPrefix = '.template-navigation-container[data-bearcms-universal-theme-navigation-type="buttonDropDown"]';
$typeGroup = $typesGroup->addGroup(__('bearcms.themes.universal.options.Navigation.Type.ButtonDropDown'));
$addNavigationType($typeGroup, $idPrefix, $selectorPrefix, '.template-navigation .template-navigation-buttons');
$addNavigationTypeButtonsLayout($typeGroup, $idPrefix, $selectorPrefix, "button-drop-down");
$addNavigationTypeToggleButton($typeGroup, $idPrefix, $selectorPrefix);
$addNavigationTypeAdditionalButtons($typeGroup, $idPrefix, $selectorPrefix);
$addNavigationTypeItems($typeGroup, $idPrefix, $selectorPrefix, true, false);
$addNavigationTypeContainer($typeGroup, $idPrefix, $selectorPrefix);

// BUTTON OVERLAY
$idPrefix = 'navigationTypeButtonOverlay';
$selectorPrefix = '.template-navigation-container[data-bearcms-universal-theme-navigation-type="buttonOverlay"]';
$typeGroup = $typesGroup->addGroup(__('bearcms.themes.universal.options.Navigation.Type.ButtonOverlay'));
$addNavigationType($typeGroup, $idPrefix, $selectorPrefix, '.template-navigation .template-navigation-buttons');
$addNavigationTypeButtonsLayout($typeGroup, $idPrefix, $selectorPrefix, "button-overlay");
$addNavigationTypeToggleButton($typeGroup, $idPrefix, $selectorPrefix);
$addNavigationTypeAdditionalButtons($typeGroup, $idPrefix, $selectorPrefix);
$addNavigationTypeItems($typeGroup, $idPrefix, $selectorPrefix, true, false);
$closeButtonGroup = $typeGroup->addGroup(__('bearcms.themes.universal.options.Navigation.Type.ButtonOverlay.CloseButton'));
$closeButtonGroup->addOption($idPrefix . "CloseButtonCSS", "css", "", [
    "cssTypes" => ["cssMargin", "cssBorder", "cssRadius", "cssShadow", "cssBackground", "cssSize"],
    "cssOptions" => ["*/hoverState", "*/activeState", "*/focusState", "*/screenSizeState", "*/pageTypeState"],
    "cssOutput" => [
        ["rule", $selectorPrefix . " .template-navigation-items-close-button", "box-sizing:border-box;cursor:pointer;"],
        ["selector", $selectorPrefix . " .template-navigation-items-close-button"]
    ]
]);
$closeButtonGroupContainer = $closeButtonGroup->addGroup(__("bearcms.themes.universal.options.Container"));
$closeButtonGroupContainer
    ->addOption($idPrefix . "CloseButtonContainerCSS", "css", "", [
        "cssTypes" => ["cssPadding", "cssMargin", "cssBorder", "cssRadius", "cssShadow", "cssBackground", "cssSize"],
        "cssOptions" => ["*/hoverState", "*/screenSizeState", "*/pageTypeState"],
        "cssOutput" => [
            ["rule", $selectorPrefix . " .template-navigation-items-close-button-container", "box-sizing:border-box;"],
            ["selector", $selectorPrefix . " .template-navigation-items-close-button-container"]
        ]
    ]);
$typeGroup->addOption($idPrefix . "BackgroundCSS", "cssBackground", __('bearcms.themes.universal.options.Navigation.Type.ButtonOverlay.Background'), [
    "cssOutput" => [
        ["selector", $selectorPrefix . " .template-navigation-items-background"]
    ]
]);
$addNavigationTypeContainer($typeGroup, $idPrefix, $selectorPrefix);

$headerContainerGroup = $headerGroup->addGroup(__("bearcms.themes.universal.options.Container"));
$headerContainerGroup
    ->addOption("headerContainerCSS", "css", "", [
        "cssTypes" => ["cssPadding", "cssMargin", "cssBorder", "cssRadius", "cssShadow", "cssBackground", "cssSize"],
        "cssOptions" => ["*/hoverState", "*/screenSizeState", "*/pageTypeState"],
        "cssOutput" => [
            ["rule", ".template-header-container", "box-sizing:border-box;"],
            ["selector", ".template-header-container"]
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
        ],
        "defaultValue" => "1",
        "onHighlight" => [
            ["cssSelector", ".template-homepage-special-content-block"]
        ]
    ])
    ->addOption("homePageSpecialContentBlockCSS", "css", "", [
        "cssTypes" => ["cssPadding", "cssMargin", "cssBorder", "cssRadius", "cssShadow", "cssBackground", "cssSize"],
        "cssOutput" => [
            ["rule", ".template-homepage-special-content-block", "box-sizing:border-box;"],
            ["selector", ".template-homepage-special-content-block"]
        ]
    ]);
$homePageSpecialBlockGroup
    ->addElementsGroup('homePageSpecialContentBlockElements', '.template-homepage-special-content-block');

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
        "cssOptions" => ["*/hoverState", "*/screenSizeState", "*/pageTypeState"],
        "cssOutput" => [
            ["rule", ".template-content", "box-sizing:border-box;"],
            ["selector", ".template-content"]
        ]
    ]);

$contentGroup
    ->addElementsGroup('contentElements', '.template-content');

$contentElementsContainerGroup = $contentGroup->addGroup(__("bearcms.themes.universal.options.Container"));
$contentElementsContainerGroup
    ->addOption("contentContainerCSS", "css", "", [
        "cssTypes" => ["cssPadding", "cssMargin", "cssBorder", "cssRadius", "cssShadow", "cssBackground", "cssSize"],
        "cssOptions" => ["*/hoverState", "*/screenSizeState", "*/pageTypeState"],
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
        ],
        "defaultValue" => "1",
        "onHighlight" => [
            ["cssSelector", ".template-footer"]
        ]
    ])
    ->addOption("footerCSS", "css", "", [
        "cssTypes" => ["cssPadding", "cssMargin", "cssBorder", "cssRadius", "cssShadow", "cssBackground", "cssSize"],
        "cssOptions" => ["*/hoverState", "*/screenSizeState", "*/pageTypeState"],
        "cssOutput" => [
            ["rule", ".template-footer", "box-sizing:border-box;"],
            ["selector", ".template-footer"]
        ]
    ]);

$footerGroup
    ->addElementsGroup('footerElements', '.template-footer');

$footerContainerGroup = $footerGroup->addGroup(__("bearcms.themes.universal.options.Container"));
$footerContainerGroup
    ->addOption("footerContainerCSS", "css", "", [
        "cssTypes" => ["cssPadding", "cssMargin", "cssBorder", "cssRadius", "cssShadow", "cssBackground", "cssSize"],
        "cssOptions" => ["*/hoverState", "*/screenSizeState", "*/pageTypeState"],
        "cssOutput" => [
            ["rule", ".template-footer-container", "box-sizing:border-box;"],
            ["selector", ".template-footer-container"]
        ]
    ]);

$windowGroup = $options->addGroup(__("bearcms.themes.universal.options.Window"));
$windowGroup
    ->addOption("bodyCSS", "css", "", [
        "cssTypes" => ["cssPadding", "cssBorder", "cssRadius", "cssShadow", "cssBackground"],
        "cssOptions" => ["*/hoverState", "*/screenSizeState", "*/pageTypeState"],
        "cssOutput" => [
            ["selector", ".template-body"]
        ]
    ]);

$options
    ->addPagesGroup([
        "cssOptions" => ["*/hoverState", "*/activeState", "*/focusState", "*/screenSizeState"]
    ]);

$options->addCustomCSS();

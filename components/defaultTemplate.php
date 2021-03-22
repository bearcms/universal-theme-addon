<?php
/*
 * Universal Theme addon for Bear CMS
 * https://github.com/bearcms/universal-theme-addon
 * Copyright (c) Amplilabs Ltd.
 * Free to use under the MIT license.
 */

use BearFramework\App;

$app = App::get();

$settings = $app->bearCMS->data->settings->get();

$elementsLanguageSuffix = '';
$homePath = '/';
if (isset($languages[0]) && $languages[0] !== $language) {
    $elementsLanguageSuffix = '-' . $language;
    $homePath = '/' . $language . '/';
}

$isHomePage = (string) $app->request->path === $homePath;

$headerLogoImage = $customizations->getValue('headerLogoImage');
$headerTitleVisibility = $customizations->getValue('headerTitleVisibility');
$headerDescriptionVisibility = $customizations->getValue('headerDescriptionVisibility');

$navigationVisibility = $customizations->getValue('navigationVisibility');
$navigationPosition = $customizations->getValue('navigationPosition');
$navigationItemCSS = $customizations->getValue('navigationItemCSS');
$navigationItemCSS = strlen($navigationItemCSS) > 0 ? json_decode($navigationItemCSS, true) : [];
$navigationItemColor = isset($navigationItemCSS['color']) ? $navigationItemCSS['color'] : '#ffffff';
$navigationItemHoverColor = isset($navigationItemCSS['color:hover']) ? $navigationItemCSS['color:hover'] : $navigationItemColor;
$navigationItemActiveColor = isset($navigationItemCSS['color:active']) ? $navigationItemCSS['color:active'] : $navigationItemHoverColor;

$homePageSpecialContentBlockVisibility = $customizations->getValue('homePageSpecialContentBlockVisibility');
$footerVisibility = $customizations->getValue('footerVisibility');
echo '<html>';
echo '<head>';
echo '<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,minimal-ui">';
echo '<style>';
echo 'html, body{
padding: 0;
margin: 0;
min-height: 100%;
}
*{outline:none;-webkit-tap-highlight-color:rgba(0,0,0,0);}';
if ($navigationVisibility === '1') {
    echo '.template-navigation ul, .template-navigation li{
    list-style-type: none;
    list-style-position: outside;
}
.template-navigation ul{
    padding: 0;
    margin: 0;
    z-index: 10;
}
.template-navigation .bearcms-navigation-element-item-more{
    cursor: pointer;
}
.template-navigation .bearcms-navigation-element-item-more > a:before{
    content: "...";
}
.template-navigation-content{font-size:0;}
#template-navigation-toggle-button{
    display: none;
}
#template-navigation-toggle-button + label{
    display: none;
}
@media(max-width: 680px) {
    .template-navigation{
        display: block !important;
        padding: 0 !important;
    }
    .template-navigation .bearcms-navigation-element-item{
        display: block !important;
    }
    .template-navigation .bearcms-navigation-element-item-children{
        display: none !important;
    }
    #template-navigation-toggle-button + label{
        display: block;
        margin: 0 auto;
        cursor: pointer;
        background-image: url(\'data:image/svg+xml;base64,' . base64_encode('<svg xmlns="http://www.w3.org/2000/svg" width="512" height="512" fill="' . $navigationItemColor . '"><path d="M512 192l-96-96-160 160L96 96 0 192l256 256z"/></svg>') . '\');
        background-size: auto 50%;
        background-position: center center;
        background-repeat: no-repeat;
    }
    #template-navigation-toggle-button + label:hover{
        background-image: url(\'data:image/svg+xml;base64,' . base64_encode('<svg xmlns="http://www.w3.org/2000/svg" width="512" height="512" fill="' . $navigationItemHoverColor . '"><path d="M512 192l-96-96-160 160L96 96 0 192l256 256z"/></svg>') . '\');
    }
    #template-navigation-toggle-button + label:active{
        background-image: url(\'data:image/svg+xml;base64,' . base64_encode('<svg xmlns="http://www.w3.org/2000/svg" width="512" height="512" fill="' . $navigationItemActiveColor . '"><path d="M512 192l-96-96-160 160L96 96 0 192l256 256z"/></svg>') . '\');
    }
    #template-navigation-toggle-button + label + div{
        display: none;
    }
    #template-navigation-toggle-button:checked + label + div{
        display: block;
        width: 100%;
        box-sizing: border-box;
    }
}';
}
echo '</style>';
echo '</head>';
echo '<body>';
$navigationContent = '';
if ($navigationVisibility === '1') {
    $navigationContent .= '<div class="template-navigation-container">';
    $navigationContent .= '<nav class="template-navigation">';
    $navigationContent .= '<div>';
    $navigationContent .= '<input id="template-navigation-toggle-button" type="checkbox"/><label for="template-navigation-toggle-button">&nbsp;</label>';
    $navigationContent .= '<div><component src="bearcms-navigation-element" editable="true" id="main-navigation' . $elementsLanguageSuffix . '" source="allPages" showHomeLink="true" menuType="horizontal-down" class="template-navigation-content" selectedPath="' . (string) $app->request->path . '" data-responsive-attributes="vw<680=>menuType=none,vw>=680=>menuType=horizontal-down" /></div>';
    $navigationContent .= '</div>';
    $navigationContent .= '</nav>';
    $navigationContent .= '</div>';
}

if ($navigationPosition === '1') {
    echo $navigationContent;
}

echo '<div class="template-header-container">';
echo '<header class="template-header">';

if (!empty($headerLogoImage)) {
    $imageHTML = '<component src="bearcms-image-element" class="template-header-logo" onClick="openUrl" url="' . htmlentities($app->urls->get($homePath)) . '" filename="' . htmlentities($headerLogoImage) . '"/>';
    echo '<div><div class="template-header-logo-container">' . $imageHTML . '</div></div>';
}
if ($headerTitleVisibility === '1') {
    echo '<div><div class="template-header-title-container"><a class="template-header-title" href="' . htmlentities($app->urls->get($homePath)) . '">' . htmlspecialchars($settings->getTitle((string) $language)) . '</a></div></div>';
}
if ($headerDescriptionVisibility === '1') {
    echo '<div><div class="template-header-description-container"><div class="template-header-description">' . htmlspecialchars($settings->getDescription((string) $language)) . '</div></div></div>';
}

echo '</header>';
echo '</div>';

if ($navigationPosition === '2') {
    echo $navigationContent;
}

if ($isHomePage && $homePageSpecialContentBlockVisibility === '1') {
    echo '<div class="template-homepage-special-content-block-container">';
    echo '<section class="template-homepage-special-content-block">';
    echo '<component src="bearcms-elements" editable="true" canStyle="true" class="homepage-special-bearcms-elements" id="homepage-special' . $elementsLanguageSuffix . '"/>';
    echo '</section>';
    echo '</div>';
}

echo '<div class="template-content-container">';
echo '<section class="template-content">';
echo '{{body}}';
echo '</section>';
echo '</div>';

if ($footerVisibility === '1') {
    echo '<div class="template-footer-container">';
    echo '<footer class="template-footer">';
    echo '<component src="bearcms-elements" editable="true" canStyle="true" class="footer-bearcms-elements" id="footer' . $elementsLanguageSuffix . '"/>';
    echo '</footer>';
    echo '</div>';
}
echo '</body>';
echo '</html>';

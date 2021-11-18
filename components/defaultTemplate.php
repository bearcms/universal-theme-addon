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
    echo 'body .template-navigation ul, body .template-navigation li{
    list-style-type: none;
    list-style-position: outside;
}
body .template-navigation ul{
    padding: 0;
    margin: 0;
    z-index: 10;
}
body .template-navigation .bearcms-navigation-element-item-search a{
    min-width:20px;box-sizing:content-box !important;cursor:pointer;
    background-image:url(\'data:image/svg+xml;base64,' . base64_encode('<svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 24 24" stroke="' . $navigationItemColor . '" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" fill="none"><path d="M14.412112 14.412112L20 20"/><circle cx="10" cy="10" r="6"/></svg>') . '\');
    background-position:center center;
    background-repeat:no-repeat;
    background-size:20px 20px;
}
body .template-navigation .bearcms-navigation-element-item-search:hover a{
    background-image:url(\'data:image/svg+xml;base64,' . base64_encode('<svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 24 24" stroke="' . $navigationItemHoverColor . '" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" fill="none"><path d="M14.412112 14.412112L20 20"/><circle cx="10" cy="10" r="6"/></svg>') . '\');
}
body .template-navigation .bearcms-navigation-element-item-search:active a{
    background-image:url(\'data:image/svg+xml;base64,' . base64_encode('<svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 24 24" stroke="' . $navigationItemActiveColor . '" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" fill="none"><path d="M14.412112 14.412112L20 20"/><circle cx="10" cy="10" r="6"/></svg>') . '\');
}
body .template-navigation .bearcms-navigation-element-item-store-cart a{
    min-width:20px;box-sizing:content-box !important;cursor:pointer;
    background-image:url(\'data:image/svg+xml;base64,' . base64_encode('<svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 24 24" stroke="' . $navigationItemColor . '" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" fill="none"><path d="M6 6h15l-1.5 9h-12z"/><circle cx="9" cy="19" r="1"/><circle cx="18" cy="19" r="1"/><path d="M6 6H3"/></svg>') . '\');
    background-position:center center;
    background-repeat:no-repeat;
    background-size:20px 20px;
}
body .template-navigation .bearcms-navigation-element-item-store-cart:hover a{
    background-image:url(\'data:image/svg+xml;base64,' . base64_encode('<svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 24 24" stroke="' . $navigationItemHoverColor . '" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" fill="none"><path d="M6 6h15l-1.5 9h-12z"/><circle cx="9" cy="19" r="1"/><circle cx="18" cy="19" r="1"/><path d="M6 6H3"/></svg>') . '\');
}
body .template-navigation .bearcms-navigation-element-item-store-cart:active a{
    background-image:url(\'data:image/svg+xml;base64,' . base64_encode('<svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 24 24" stroke="' . $navigationItemColor . '" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" fill="none"><path d="M6 6h15l-1.5 9h-12z"/><circle cx="9" cy="19" r="1"/><circle cx="18" cy="19" r="1"/><path d="M6 6H3"/></svg>') . '\');
}

body .template-navigation .bearcms-navigation-element-item-more{
    cursor: pointer;
}
body .template-navigation .bearcms-navigation-element-item-more > a:before{
    content: "...";
}
body .template-navigation-content{font-size:0;}
body #template-navigation-toggle-button{
    display: none;
}
body #template-navigation-toggle-button + label{
    display: none;
}
body .bearcms-navigation-toggle-item-search{
    display:none;
}
body .bearcms-navigation-toggle-item-store-cart{
    display:none;
}
@media(max-width: 680px) {
    body .template-navigation{
        display: block !important;
        padding: 0 !important;
    }
    body .template-navigation .bearcms-navigation-element-item{
        display:block !important;
    }
    body .template-navigation .bearcms-navigation-element-item-children{
        display:none !important;
    }
    body .template-navigation .bearcms-navigation-element-item.bearcms-navigation-element-item-search{
        display:none !important;
    }
    body .template-navigation .bearcms-navigation-element-item.bearcms-navigation-element-item-store-cart{
        display:none !important;
    }
    body #template-navigation-toggle-button + label{
        display: block;
        margin: 0 auto;
        cursor: pointer;
        background-image: url(\'data:image/svg+xml;base64,' . base64_encode('<svg xmlns="http://www.w3.org/2000/svg" width="512" height="512" fill="' . $navigationItemColor . '"><path d="M512 192l-96-96-160 160L96 96 0 192l256 256z"/></svg>') . '\');
        background-size: auto 50%;
        background-position: center center;
        background-repeat: no-repeat;
    }
    body #template-navigation-toggle-button + label:hover{
        background-image: url(\'data:image/svg+xml;base64,' . base64_encode('<svg xmlns="http://www.w3.org/2000/svg" width="512" height="512" fill="' . $navigationItemHoverColor . '"><path d="M512 192l-96-96-160 160L96 96 0 192l256 256z"/></svg>') . '\');
    }
    body #template-navigation-toggle-button + label:active{
        background-image: url(\'data:image/svg+xml;base64,' . base64_encode('<svg xmlns="http://www.w3.org/2000/svg" width="512" height="512" fill="' . $navigationItemActiveColor . '"><path d="M512 192l-96-96-160 160L96 96 0 192l256 256z"/></svg>') . '\');
    }
    body #template-navigation-toggle-button + label + div{
        display: none;
    }
    body #template-navigation-toggle-button:checked + label + div{
        display: block;
        width: 100%;
        box-sizing: border-box;
    }
    body .bearcms-navigation-toggle-item-search{
        display:block;
        width:20px;float:right;box-sizing:content-box;cursor:pointer;
        background-image:url(\'data:image/svg+xml;base64,' . base64_encode('<svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 24 24" stroke="' . $navigationItemColor . '" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" fill="none"><path d="M14.412112 14.412112L20 20"/><circle cx="10" cy="10" r="6"/></svg>') . '\');
        background-position:center center;
        background-repeat:no-repeat;
        background-size:20px 20px;
    }
    body .bearcms-navigation-toggle-item-search:hover{
        background-image:url(\'data:image/svg+xml;base64,' . base64_encode('<svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 24 24" stroke="' . $navigationItemHoverColor . '" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" fill="none"><path d="M14.412112 14.412112L20 20"/><circle cx="10" cy="10" r="6"/></svg>') . '\');
    }
    body .bearcms-navigation-toggle-item-search:active{
        background-image:url(\'data:image/svg+xml;base64,' . base64_encode('<svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 24 24" stroke="' . $navigationItemActiveColor . '" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" fill="none"><path d="M14.412112 14.412112L20 20"/><circle cx="10" cy="10" r="6"/></svg>') . '\');
    }
    body .bearcms-navigation-toggle-item-store-cart{
        display:block;
        width:20px;float:right;box-sizing:content-box;cursor:pointer;
        background-image:url(\'data:image/svg+xml;base64,' . base64_encode('<svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 24 24" stroke="' . $navigationItemColor . '" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" fill="none"><path d="M6 6h15l-1.5 9h-12z"/><circle cx="9" cy="19" r="1"/><circle cx="18" cy="19" r="1"/><path d="M6 6H3"/></svg>') . '\');
        background-position:center center;
        background-repeat:no-repeat;
        background-size:20px 20px;
    }
    body .bearcms-navigation-toggle-item-store-cart:hover{
        background-image:url(\'data:image/svg+xml;base64,' . base64_encode('<svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 24 24" stroke="' . $navigationItemHoverColor . '" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" fill="none"><path d="M6 6h15l-1.5 9h-12z"/><circle cx="9" cy="19" r="1"/><circle cx="18" cy="19" r="1"/><path d="M6 6H3"/></svg>') . '\');
    }
    body .bearcms-navigation-toggle-item-store-cart:active{
        background-image:url(\'data:image/svg+xml;base64,' . base64_encode('<svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 24 24" stroke="' . $navigationItemColor . '" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" fill="none"><path d="M6 6h15l-1.5 9h-12z"/><circle cx="9" cy="19" r="1"/><circle cx="18" cy="19" r="1"/><path d="M6 6H3"/></svg>') . '\');
    }
}';
}
echo '</style>';
echo '<script>';
echo 'var f=function(){
var t=document.querySelector(\'.template-navigation .bearcms-navigation-toggle-item-search\');
var tc=document.querySelector(\'.template-navigation .bearcms-navigation-element-item-search\');
if(t!==null){tc!==null?t.style.removeProperty(\'display\'):t.style.setProperty(\'display\',\'none\');}
var t=document.querySelector(\'.template-navigation .bearcms-navigation-toggle-item-store-cart\');
var tc=document.querySelector(\'.template-navigation .bearcms-navigation-element-item-store-cart\');
if(t!==null){tc!==null?t.style.removeProperty(\'display\'):t.style.setProperty(\'display\',\'none\');}
};f();window.addEventListener(\'resize\',f);window.addEventListener(\'load\',f);setInterval(f,500);';
echo '</script>';
if ($navigationVisibility === '1') {
    echo '<link rel="client-packages-embed" name="responsiveAttributes">';
}
echo '</head>';
echo '<body class="template-body">';
$navigationContent = '';
if ($navigationVisibility === '1') {
    $navigationContent .= '<div class="template-navigation-container">';
    $navigationContent .= '<nav class="template-navigation">';
    $navigationContent .= '<div>';
    $navigationContent .= '<div class="bearcms-navigation-toggle-item-store-cart" style="display:none;" onclick="this.parentNode.querySelector(\'.bearcms-navigation-element-item-store-cart\').firstChild.click();"></div>';
    $navigationContent .= '<div class="bearcms-navigation-toggle-item-search" style="display:none;" onclick="this.parentNode.querySelector(\'.bearcms-navigation-element-item-search\').firstChild.click();"></div>';
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
    echo '<component src="bearcms-elements" editable="true" class="homepage-special-bearcms-elements" id="homepage-special' . $elementsLanguageSuffix . '"/>';
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
    echo '<component src="bearcms-elements" editable="true" class="footer-bearcms-elements" id="footer' . $elementsLanguageSuffix . '"/>';
    echo '</footer>';
    echo '</div>';
}
echo '</body>';
echo '</html>';

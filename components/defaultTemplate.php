<?php
/*
 * Universal Theme addon for Bear CMS
 * https://github.com/bearcms/universal-theme-addon
 * Copyright (c) Amplilabs Ltd.
 * Free to use under the MIT license.
 */

use BearFramework\App;

$app = App::get();
$context = $app->contexts->get(__DIR__);

$settings = $app->bearCMS->data->settings->get();

$elementsLanguageSuffix = '';
$homePath = '/';
if (isset($languages[0]) && $languages[0] !== $language) {
    $elementsLanguageSuffix = '-' . $language;
    $homePath = '/' . $language . '/';
}

$isHomePage = (string) $app->request->path === $homePath;

$headerIsVisible = $customizations->getValue('headerVisibility') === '1';
$headerLayout = (string)$customizations->getValue('headerLayout');
$headerLogoImage = (string)$customizations->getValue('headerLogoImage');
$headerTitleIsVisible = (string)$customizations->getValue('headerTitleVisibility') === '1';
$headerDescriptionIsVisible = (string)$customizations->getValue('headerDescriptionVisibility') === '1';
$navigationIsVisible = (string)$customizations->getValue('navigationVisibility') === '1';
$navigationSearchButtonVisibility = (string)$customizations->getValue('navigationSearchButtonVisibility');
if ($navigationSearchButtonVisibility === 'auto') {
    $navigationSearchButtonIsVisible = $app->bearCMS->addons->exists('bearcms/search-box-element-addon') && isset($app->searchBoxElement) && $app->searchBoxElement->isEnabled();
} else {
    $navigationSearchButtonIsVisible = $navigationSearchButtonVisibility === '1';
}
$navigationStoreCartButtonVisibility = (string)$customizations->getValue('navigationStoreCartButtonVisibility');
if ($navigationStoreCartButtonVisibility === 'auto') {
    $navigationStoreCartButtonIsVisible = $app->bearCMS->addons->exists('bearcms/store-addon') && isset($app->store) && $app->store->isEnabled();
} else {
    $navigationStoreCartButtonIsVisible = $navigationStoreCartButtonVisibility === '1';
}
$homePageSpecialContentBlockIsVisible = $customizations->getValue('homePageSpecialContentBlockVisibility') === '1';
$footerIsVisible = $customizations->getValue('footerVisibility') === '1';

echo '<html>';
echo '<head>';
echo '<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,minimal-ui">';

echo '<style>';

echo 'html,body{padding:0;margin:0;min-height:100%;}';
echo '*{outline:none;-webkit-tap-highlight-color:rgba(0,0,0,0);}';

if ($headerLayout === 'horizontal') {
    echo 'body .template-header{display:flex;}';
    echo 'body .template-header > *{flex:0 0 auto;}';
}

if ($navigationIsVisible) {
    echo 'body .template-navigation ul,body .template-navigation li{list-style-type:none;list-style-position:outside;padding:0;margin:0;}';
    echo 'body .bearcms-navigation-button-search{display:inline-block;box-sizing:content-box;cursor:pointer;}';
    echo 'body .bearcms-navigation-button-store-cart{display:inline-block;box-sizing:content-box;cursor:pointer;}';
    echo 'body .template-navigation{font-size:0;}';
    echo 'body .template-navigation .bearcms-navigation-element-item-more{cursor:pointer;}';
    echo 'body .template-navigation .bearcms-navigation-element-item-more > a:before{content:"...";}';

    echo 'body .template-navigation-container[data-bearcms-universal-theme-navigation-type="horizontal"] .template-navigation{display:flex;}';
    echo 'body .template-navigation-container[data-bearcms-universal-theme-navigation-type="horizontal"] .template-navigation-additional-buttons{flex:0 0 auto;}';
    echo 'body .template-navigation-container[data-bearcms-universal-theme-navigation-type="horizontal"] .template-navigation-items{flex:0 1 auto;min-width:0;}';
    echo 'body .template-navigation-container[data-bearcms-universal-theme-navigation-type="horizontal"] .bearcms-navigation-element-item-children{z-index:10;}';

    echo 'body .template-navigation-container[data-bearcms-universal-theme-navigation-type="buttonDropDown"] .template-navigation-buttons{display:flex;}';
    echo 'body .template-navigation-container[data-bearcms-universal-theme-navigation-type="buttonDropDown"] .template-navigation-button-toggle{cursor:pointer;}';
    echo 'body .template-navigation-container[data-bearcms-universal-theme-navigation-type="buttonDropDown"] .template-navigation-additional-buttons{display:flex;}';
    echo 'body .template-navigation-container[data-bearcms-universal-theme-navigation-type="buttonDropDown"] .template-navigation-items-container{box-sizing:border-box;position:absolute;z-index:10;}';
    echo 'body .template-navigation-container[data-bearcms-universal-theme-navigation-type="buttonDropDown"] .template-navigation-items-container:not([data-bearcms-template-visibility="visible"]){display:none;}';
    echo 'body .template-navigation-container[data-bearcms-universal-theme-navigation-type="buttonDropDown"] .bearcms-navigation-element-item-children{display:none !important;}';

    echo 'body .template-navigation-container[data-bearcms-universal-theme-navigation-type="buttonOverlay"] .template-navigation-buttons{display:flex;}';
    echo 'body .template-navigation-container[data-bearcms-universal-theme-navigation-type="buttonOverlay"] .template-navigation-button-toggle{cursor:pointer;}';
    echo 'body .template-navigation-container[data-bearcms-universal-theme-navigation-type="buttonOverlay"] .template-navigation-additional-buttons{display:flex;}';
    echo 'body .template-navigation-container[data-bearcms-universal-theme-navigation-type="buttonOverlay"] .template-navigation-items-overlay{position:fixed;top:0;left:0;z-index:10;width:100%;height:100%;overscroll-behavior:contain;overflow:hidden;}';
    echo 'body .template-navigation-container[data-bearcms-universal-theme-navigation-type="buttonOverlay"] .template-navigation-items-overlay .template-navigation-items-background{position:fixed;top:0;left:0;width:100vw;height:100vh;overflow:hidden;opacity:1;transition:opacity 500ms;}';
    echo 'body .template-navigation-container[data-bearcms-universal-theme-navigation-type="buttonOverlay"] .template-navigation-items-overlay .template-navigation-items-container{position:fixed;top:0;transform:translateX(0);transition:transform 500ms,box-shadow 500ms;box-sizing:border-box;overflow:auto;}';
    echo 'body .template-navigation-container[data-bearcms-universal-theme-navigation-type="buttonOverlay"][data-bearcms-universal-theme-navigation-buttons-layout-button-overlay="toggleLeft"] .template-navigation-items-overlay .template-navigation-items-container{left:0;}';
    echo 'body .template-navigation-container[data-bearcms-universal-theme-navigation-type="buttonOverlay"][data-bearcms-universal-theme-navigation-buttons-layout-button-overlay="toggleRight"] .template-navigation-items-overlay .template-navigation-items-container{right:0;}';
    echo 'body .template-navigation-container[data-bearcms-universal-theme-navigation-type="buttonOverlay"] .template-navigation-items-overlay:not([data-bearcms-template-visibility="visible"]){pointer-events:none;}';
    echo 'body .template-navigation-container[data-bearcms-universal-theme-navigation-type="buttonOverlay"] .template-navigation-items-overlay:not([data-bearcms-template-visibility="visible"]) .template-navigation-items-background{opacity:0;}';
    echo 'body .template-navigation-container[data-bearcms-universal-theme-navigation-type="buttonOverlay"][data-bearcms-universal-theme-navigation-buttons-layout-button-overlay="toggleLeft"] .template-navigation-items-overlay:not([data-bearcms-template-visibility="visible"]) .template-navigation-items-container{transform:translateX(-100%);box-shadow:unset;}';
    echo 'body .template-navigation-container[data-bearcms-universal-theme-navigation-type="buttonOverlay"][data-bearcms-universal-theme-navigation-buttons-layout-button-overlay="toggleRight"] .template-navigation-items-overlay:not([data-bearcms-template-visibility="visible"]) .template-navigation-items-container{transform:translateX(100%);box-shadow:unset;}';
    echo 'body .template-navigation-container[data-bearcms-universal-theme-navigation-type="buttonOverlay"] .bearcms-navigation-element-item-children{display:none !important;}';

    echo 'body .template-navigation-container[data-bearcms-universal-theme-navigation-type="buttonBlock"] .template-navigation-buttons{display:flex;}';
    echo 'body .template-navigation-container[data-bearcms-universal-theme-navigation-type="buttonBlock"] .template-navigation-button-toggle{cursor:pointer;}';
    echo 'body .template-navigation-container[data-bearcms-universal-theme-navigation-type="buttonBlock"] .template-navigation-additional-buttons{display:flex;}';
    echo 'body .template-navigation-container[data-bearcms-universal-theme-navigation-type="buttonBlock"] .template-navigation-items-container{box-sizing:border-box;max-width:100vw;}';
    echo 'body .template-navigation-container[data-bearcms-universal-theme-navigation-type="buttonBlock"] .bearcms-navigation-element-item{display:block !important;}';
    echo 'body .template-navigation-container[data-bearcms-universal-theme-navigation-type="buttonBlock"] .template-navigation-items-container:not([data-bearcms-template-visibility="visible"]){display:none;}';
    echo 'body .template-navigation-container[data-bearcms-universal-theme-navigation-type="buttonBlock"] .bearcms-navigation-element-item-children{display:none !important;}';

    echo 'body .template-navigation-container [data-bearcms-universal-theme-navigation-content-align="left"]{justify-content:start;}';
    echo 'body .template-navigation-container [data-bearcms-universal-theme-navigation-content-align="center"]{justify-content:center;}';
    echo 'body .template-navigation-container [data-bearcms-universal-theme-navigation-content-align="right"]{justify-content:end;}';

    if ($headerLayout === 'horizontal') {
        echo 'body .template-navigation-container{flex:1 1 auto;min-width:0;}';
    }
    if ($headerLayout === 'navHoverOverHeader' || $headerLayout === 'navHoverOverHeaderContainer') {
        echo 'body .template-navigation-container{position:absolute;z-index:5;}';
    } else {
        echo 'body .template-navigation-container{position:relative;}'; // for the buttonDropDown
    }
}

echo '</style>';

if ($navigationIsVisible) {
    echo '<link rel="client-packages-embed" name="responsiveAttributes">';
    echo '<link rel="client-packages-embed" name="-bearcms-universal-theme">';
    if ($navigationStoreCartButtonIsVisible) {
        echo '<link rel="client-packages-embed" name="-bearcms-store">';
    }
    if ($navigationSearchButtonIsVisible) {
        echo '<link rel="client-packages-embed" name="-bearcms-search">';
    }
}

echo '</head>';
echo '<body class="template-body">';

$navigationContent = '';
if ($navigationIsVisible) {
    $additionalButtons = '';
    if ($navigationStoreCartButtonIsVisible) {
        $additionalButtons .= '<div class="bearcms-navigation-button-store-cart" onclick="bearCMS.store.openCart();" title="' . htmlentities(__('bearcms.themes.universal.OpenStoreCart')) . '"></div>';
    }
    if ($navigationSearchButtonIsVisible) {
        $additionalButtons .= '<div class="bearcms-navigation-button-search" onclick="bearCMS.search.open();" title="' . htmlentities(__('bearcms.themes.universal.OpenSiteSearch')) . '"></div>';
    }

    $navigationContent .= '<div class="template-navigation-container">';
    $navigationContent .= '<div class="template-navigation">';
    $navigationContent .= '<nav class="template-navigation-items">';
    $navigationContent .= '<component src="bearcms-navigation-element" menuType="responsive" editable="true" id="main-navigation' . $elementsLanguageSuffix . '" source="allPages" showHomeLink="true" class="template-navigation-content" selectedPath="' . (string) $app->request->path . '"/>';
    $navigationContent .= '</nav>';
    $navigationContent .= '<div class="template-navigation-additional-buttons">' . $additionalButtons . '</div>';
    $navigationContent .= '</div>';
    $navigationContent .= '<script>bearCMS.universalTheme.initializeNavigation();</script>';
    $navigationContent .= '</div>';
    if ($headerLayout === 'navHoverOverHeader' || $headerLayout === 'navHoverOverHeaderContainer') {
        $navigationContent = '<div style="position:relative;">' . $navigationContent . '</div>';
    }
}

if ($navigationIsVisible && $headerLayout === 'navAboveHeaderContainer') {
    echo $navigationContent;
}

if ($headerIsVisible) {
    echo '<div class="template-header-container">';

    if ($navigationIsVisible && ($headerLayout === 'navInsideHeaderContainerFirst' || $headerLayout === 'navHoverOverHeaderContainer')) {
        echo $navigationContent;
    }

    echo '<header class="template-header">';

    if ($navigationIsVisible && ($headerLayout === 'navInsideHeaderFirst' || $headerLayout === 'navHoverOverHeader')) {
        echo $navigationContent;
    }

    if (isset($headerLogoImage[0])) {
        $headerLogoImageDetails = $customizations->getAssetDetails($headerLogoImage, ['filename', 'width', 'height']);
        $imageHTML = '<component src="bearcms-image-element" class="template-header-logo" onClick="openUrl" url="' . htmlentities($app->urls->get($homePath)) . '" filename="' . htmlentities($headerLogoImageDetails['filename']) . '" fileWidth="' . htmlentities((string)$headerLogoImageDetails['width']) . '" fileHeight="' . htmlentities((string)$headerLogoImageDetails['height']) . '"/>';
        echo '<div><div class="template-header-logo-container">' . $imageHTML . '</div></div>';
    }
    if ($headerTitleIsVisible) {
        echo '<div><div class="template-header-title-container"><a class="template-header-title" href="' . htmlentities($app->urls->get($homePath)) . '">' . htmlspecialchars($settings->getTitle((string) $language)) . '</a></div></div>';
    }
    if ($headerDescriptionIsVisible) {
        echo '<div><div class="template-header-description-container"><div class="template-header-description">' . htmlspecialchars($settings->getDescription((string) $language)) . '</div></div></div>';
    }

    if ($navigationIsVisible && ($headerLayout === 'navInsideHeaderLast' || $headerLayout === 'horizontal')) {
        echo $navigationContent;
    }

    echo '</header>';

    if ($navigationIsVisible && $headerLayout === 'navInsideHeaderContainerLast') {
        echo $navigationContent;
    }

    echo '</div>';
}

if ($navigationIsVisible && $headerLayout === 'navBelowHeaderContainer') {
    echo $navigationContent;
}

if ($isHomePage && $homePageSpecialContentBlockIsVisible) {
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

if ($footerIsVisible) {
    echo '<div class="template-footer-container">';
    echo '<footer class="template-footer">';
    echo '<component src="bearcms-elements" editable="true" class="footer-bearcms-elements" id="footer' . $elementsLanguageSuffix . '"/>';
    echo '</footer>';
    echo '</div>';
}

echo '</body>';
echo '</html>';

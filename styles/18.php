<?php

/*
 * Universal Theme addon for Bear CMS
 * https://github.com/bearcms/universal-theme-addon
 * Copyright (c) Amplilabs Ltd.
 * Free to use under the MIT license.
 */

$h1 = '"color":"#ffffff","font-family":"googlefonts:Roboto Condensed","font-size":"30px","line-height":"180%"';
$h2 = '"color":"#ffffff","font-family":"googlefonts:Roboto Condensed","font-size":"25px","line-height":"180%"';
$h3 = '"color":"#ffffff","font-family":"googlefonts:Roboto Condensed","font-size":"20px","line-height":"180%"';
$text = '"color":"#ffffff","font-family":"Arial","font-size":"13px","line-height":"180%"';
$input = '"color":"#000000","font-family":"Arial","font-size":"13px","line-height":"180%","background-color":"#ffffff","padding-left":"15px","padding-right":"15px","padding-top":"10px","padding-bottom":"10px","width":"100%","border-top-left-radius":"3px","border-top-right-radius":"3px","border-bottom-left-radius":"3px","border-bottom-right-radius":"3px"';
$link = '"color":"#ffffff","color:hover":"#ffffff","color:active":"#ffffff","font-family":"Arial","font-size":"13px","line-height":"180%","text-decoration":"underline"';
$image = '"border-top-left-radius":"3px","border-top-right-radius":"3px","border-bottom-left-radius":"3px","border-bottom-right-radius":"3px"';
$button = '"color":"#ffffff","font-family":"Arial","font-size":"13px","line-height":"42px","padding-left":"15px","padding-right":"15px","height":"42px","background-color":"#941111","background-color:hover":"#8f0e0e","background-color:active":"#820a0a","border-top-left-radius":"3px","border-top-right-radius":"3px","border-bottom-left-radius":"3px","border-bottom-right-radius":"3px"';
$date = '"color":"#999999","font-family":"Arial","font-size":"12px","line-height":"180%"';
$userImage = '"width":"50px","height":"50px","margin-right":"12px","border-top-left-radius":"3px","border-top-right-radius":"3px","border-bottom-left-radius":"3px","border-bottom-right-radius":"3px"';
$separator = '"background-color":"#ddd","border-top-right-radius":"3px","border-bottom-right-radius":"3px","border-top-left-radius":"3px","border-bottom-left-radius":"3px","height":"5px","margin-top":"30px","margin-bottom":"30px","margin-left":"auto","margin-right":"auto"';

$getElementsStyles = function ($prefix) use ($text, $h1, $h2, $h3, $input, $link, $image, $button, $date, $userImage, $separator) {
    return [
        $prefix . 'HeadingLargeCSS' => '{' . $h1 . '}',
        $prefix . 'HeadingMediumCSS' => '{' . $h2 . '}',
        $prefix . 'HeadingSmallCSS' => '{' . $h3 . '}',
        $prefix . 'TextCSS' => '{' . $text . '}',
        $prefix . 'TextLinkCSS' => '{' . $link . '}',
        $prefix . 'ImageCSS' => '{' . $image . '}',
        $prefix . 'ImageGalleryImageCSS' => '{' . $image . '}',
        $prefix . 'VideoCSS' => '{' . $image . '}',
        $prefix . 'LinkCSS' => '{' . $link . '}',
        $prefix . 'NavigationItemLinkCSS' => '{' . $link . '}',
        $prefix . 'CommentsCommentCSS' => '{"margin-bottom":"10px"}',
        $prefix . 'CommentsAuthorNameCSS' => '{' . $text . '}',
        $prefix . 'CommentsAuthorImageCSS' => '{' . $userImage . '}',
        $prefix . 'CommentsDateCSS' => '{' . $date . '}',
        $prefix . 'CommentsTextCSS' => '{' . $text . '}',
        $prefix . 'CommentsTextLinksCSS' => '{' . $link . '}',
        $prefix . 'CommentsTextInputCSS' => '{' . $input . ',"height":"120px"}',
        $prefix . 'CommentsSendButtonCSS' => '{' . $button . ',"margin-top":"10px"}',
        $prefix . 'CommentsShowMoreButtonCSS' => '{' . $link . ',"margin-bottom":"5px"}',
        $prefix . 'HtmlCSS' => '{' . $text . '}',
        $prefix . 'HtmlLinkCSS' => '{' . $link . '}',
        $prefix . 'BlogPostsPostTitleCSS' => '{' . $link . ',"font-family":"googlefonts:Roboto Condensed","font-size":"22px"}',
        $prefix . 'BlogPostsPostDateContainerCSS' => '{' . $date . ',"margin-top":"5px"}',
        $prefix . 'BlogPostsPostDateCSS' => '{' . $date . '}',
        $prefix . 'BlogPostsPostContentCSS' => '{"margin-top":"7px"}',
        $prefix . 'BlogPostsShowMoreButtonCSS' => '{' . $link . ',"margin-top":"5px"}',
        $prefix . 'ForumPostsTitleCSS' => '{' . $link . '}',
        $prefix . 'ForumPostsRepliesCountCSS' => '{' . $date . '}',
        $prefix . 'ForumPostsShowMoreButtonCSS' => '{' . $link . '}',
        $prefix . 'ForumPostsNewPostButtonCSS' => '{' . $link . '}',
        $prefix . 'ShareButtonCSS' => '{' . $button . '}',
        $prefix . 'SeparatorLargeCSS' => '{' . $separator . ',"max-width":"200px"}',
        $prefix . 'SeparatorMediumCSS' => '{' . $separator . ',"max-width":"150px"}',
        $prefix . 'SeparatorSmallCSS' => '{' . $separator . ',"max-width":"100px"}',
        $prefix . 'SearchBoxInputCSS' => '{' . $input . '}',
        $prefix . 'SearchBoxButtonCSS' => '{' . $button . ',"width":"46px","height":"100%","background-image":"url(addon:bearcms\/universal-theme-addon:assets\/search-icon.png)","background-position":"center center","background-repeat":"no-repeat","background-attachment":"scroll","background-size":"cover","border-top-left-radius":"0px","border-bottom-left-radius":"0px"}',
        $prefix . 'StoreItemsItemImageCSS' => '{' . $image . ',"width":"150px"}',
        $prefix . 'StoreItemsItemNameCSS' => '{' . $link . ',"font-size":"22px"}',
        $prefix . 'StoreItemsItemDescriptionCSS' => '{' . $text . '}',
        $prefix . 'StoreItemsItemDescriptionContainerCSS' => '{"padding-top":"5px"}',
        $prefix . 'StoreItemsItemPriceCSS' => '{' . $text . '}',
        $prefix . 'StoreItemsItemPriceOriginalCSS' => '{' . $text . ',"text-decoration":"line-through","font-size":"12px"}',
        $prefix . 'StoreItemsItemPriceContainerCSS' => '{"padding-top":"5px"}',
    ];
};

$result = [
    'headerCSS' => '{"background-color":"rgba(0,0,0,0.5)","padding-top":"60px","padding-bottom":"60px;"}',
    'headerLogoImageCSS' => '{"max-width":"250px","margin-left":"auto","margin-right":"auto"}',
    'headerLogoImageContainerCSS' => '{"margin-bottom":"15px","padding-left":"20px","padding-right":"20px"}',
    'headerTitleVisibility' => '1',
    'headerTitleCSS' => '{"font-family":"googlefonts:Roboto Condensed","font-size":"45px","color":"#ffffff","padding-bottom":"20px","font-weight":"bold"}',
    'headerTitleContainerCSS' => '{"padding-left":"20px","padding-right":"20px", "text-align":"center"}',
    'headerDescriptionVisibility' => '1',
    'headerDescriptionCSS' => '{"font-family":"googlefonts:Roboto Condensed","font-size":"18px","color":"#ffffff","padding-bottom":"15px","font-weight":"bold"}',
    'headerDescriptionContainerCSS' => '{"padding-left":"20px","padding-right":"20px","text-align":"center"}',
    'headerContainerCSS' => '{"max-width":"790px"}',

    'navigationVisibility' => '1',
    'navigationPosition' => '2',
    'navigationCSS' => '{"background-color":"#941111","padding-left":"20px","padding-right":"20px"}',
    'navigationItemCSS' => '{"line-height":"53px","padding-left":"15px","padding-right":"15px","height":"54px","color":"#ffffff","text-decoration":"none","font-family":"Arial","font-size":"14px","text-align":"left","background-color:hover":"#8f0e0e","background-color:active":"#820a0a"}',
    'navigationSelectedItemCSS' => '{}',
    'navigationSubitemCSS' => '{"line-height":"45px","padding-left":"15px","padding-right":"15px","height":"46px","color":"#ffffff","text-decoration":"none","font-family":"Arial","font-size":"14px","background-color":"#8f0e0e","background-color:hover":"#820a0a","background-color:active":"#7a0707","text-align":"left"}',
    'navigationSelectedSubitemCSS' => '{"background-color":"#e1b8bc"}',
    'navigationContainerCSS' => '{"max-width":"790px"}',

    'homePageSpecialContentBlockVisibility' => '0',
    'homePageSpecialContentBlockCSS' => '{"background-color":"rgba(0,0,0,0.5)","padding-top":"20px","padding-right":"20px","padding-bottom":"20px","padding-left":"20px"}',
    'homePageSpecialContentBlockContainerCSS' => '{"max-width":"790px"}',

    'contentCSS' => '{"background-color":"rgba(0,0,0,0.5)","padding-top":"20px","padding-right":"20px","padding-bottom":"20px","padding-left":"20px","min-height":"300px"}',
    'contentContainerCSS' => '{"max-width":"790px"}',

    'footerVisibility' => '0',
    'footerCSS' => '{"background-color":"rgba(0,0,0,0.5)","padding-top":"20px","padding-right":"20px","padding-bottom":"20px","padding-left":"20px"}',
    'footerContainerCSS' => '{"max-width":"790px"}',

    'bodyCSS' => '{"background-color":"#f4f8f9","background-image":"url(addon:bearcms\/universal-theme-addon:assets\/s18\/1.jpg)","background-position":"top center","background-repeat":"no-repeat","background-size":"cover","background-attachment":"fixed"}',

    'blogPostPageTitleCSS' => '{' . $h1 . '}',
    'blogPostPageDateContainerCSS' => '{"padding-top":"10px"}',
    'blogPostPageDateCSS' => '{' . $date . '}',
    'blogPostPageContentCSS' => '{"padding-top":"15px"}',

    'forumPostPageTitleCSS' => '{' . $h1 . '}',
    'forumPostPageContentCSS' => '{"padding-top":"15px"}',
    'forumPostPageReplyCSS' => '{"margin-bottom":"10px"}',
    'forumPostPageReplyAuthorNameCSS' => '{' . $text . '}',
    'forumPostPageReplyAuthorImageCSS' => '{' . $userImage . '}',
    'forumPostPageReplyDateCSS' => '{' . $date . '}',
    'forumPostPageReplyTextCSS' => '{' . $text . '}',
    'forumPostPageReplyTextLinksCSS' => '{' . $link . '}',
    'forumPostPageTextInputCSS' => '{' . $input . ',"height":"200px"}',
    'forumPostPageSendButtonCSS' => '{' . $button . ',"margin-top":"10px"}',
    'storeItemPageImageGalleryImageCSS' => '{' . $image . '}',
    'storeItemPageNameCSS' => '{' . $h1 . '}',
    'storeItemPageOptionSelectCSS' => '{' . $input . ',"width":""}',
    'storeItemPageOptionLabelCSS' => '{' . $text . '}',
    'storeItemPageOptionContainerCSS' => '{"padding-top":"15px"}',
    'storeItemPagePriceCSS' => '{' . $text . '}',
    'storeItemPagePriceOriginalCSS' => '{' . $text . ',"text-decoration":"line-through","font-size":"12px"}',
    'storeItemPagePriceContainerCSS' => '{"padding-top":"15px"}',
    'storeItemPageBuyButtonCSS' => '{' . $button . '}',
    'storeItemPageBuyButtonContainerCSS' => '{"padding-top":"15px"}',
    'storeItemPageDescriptionCSS' => '{' . $text . '}'
];
$result = array_merge($result, $getElementsStyles('homePageSpecialContentBlockElements'));
$result = array_merge($result, $getElementsStyles('contentElements'));
$result = array_merge($result, $getElementsStyles('footerElements'));
return $result;

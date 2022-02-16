<?php

/*
 * Universal Theme addon for Bear CMS
 * https://github.com/bearcms/universal-theme-addon
 * Copyright (c) Amplilabs Ltd.
 * Free to use under the MIT license.
 */

$h1 = '"color":"#000000","font-family":"googlefonts:Oswald","font-size":"30px","line-height":"180%","text-align":"center"';
$h2 = '"color":"#000000","font-family":"googlefonts:Oswald","font-size":"25px","line-height":"180%","text-align":"center"';
$h3 = '"color":"#000000","font-family":"googlefonts:Oswald","font-size":"20px","line-height":"180%","text-align":"center"';
$text = '"color":"#000000","font-family":"Tahoma","font-size":"13px","line-height":"180%"';
$input = '"color":"#000000","font-family":"Tahoma","font-size":"13px","line-height":"180%","background-color":"#f5f5f5","padding-left":"15px","padding-right":"15px","padding-top":"10px","padding-bottom":"10px","width":"100%","border-top-left-radius":"2px","border-top-right-radius":"2px","border-bottom-left-radius":"2px","border-bottom-right-radius":"2px","border-top":"1px solid #cccccc","border-bottom":"1px solid #cccccc","border-left":"1px solid #cccccc","border-right":"1px solid #cccccc","border-top:hover":"1px solid #aaaaaa","border-bottom:hover":"1px solid #aaaaaa","border-left:hover":"1px solid #aaaaaa","border-right:hover":"1px solid #aaaaaa","border-top:active":"1px solid #888888","border-bottom:active":"1px solid #888888","border-left:active":"1px solid #888888","border-right:active":"1px solid #888888"';
$link = '"color":"#000000","color:hover":"#000000","color:active":"#000000","font-family":"Tahoma","font-size":"13px","line-height":"180%","text-decoration":"underline"';
$image = '"border-top-left-radius":"2px","border-top-right-radius":"2px","border-bottom-left-radius":"2px","border-bottom-right-radius":"2px"';
$button = '"color":"#ffffff","font-family":"Tahoma","font-size":"13px","line-height":"42px","padding-left":"15px","padding-right":"15px","height":"42px","background-color":"#333333","background-color:hover":"#444444","background-color:active":"#555555","border-top-left-radius":"2px","border-top-right-radius":"2px","border-bottom-left-radius":"2px","border-bottom-right-radius":"2px"';
$date = '"color":"#888888","font-family":"Tahoma","font-size":"12px","line-height":"180%"';
$userImage = '"width":"50px","height":"50px","margin-right":"12px","border-top-left-radius":"2px","border-top-right-radius":"2px","border-bottom-left-radius":"2px","border-bottom-right-radius":"2px"';
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
        $prefix . 'BlogPostsPostTitleCSS' => '{' . $link . ',"font-family":"googlefonts:Oswald","font-size":"22px"}',
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
        $prefix . 'SearchBoxButtonCSS' => '{' . $button . ',"width":"46px","height":"100%","background-image":"url(addon:bearcms\/universal-theme-addon:assets\/search-icon.png)","background-position":"center center","background-repeat":"no-repeat","background-attachment":"scroll","background-size":"cover"}',
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
    'headerCSS' => '{"max-width":"840px","margin-left":"auto","margin-right":"auto","padding-bottom":"10px","padding-top":"35px"}',
    'headerLogoImageCSS' => '{"max-width":"300px","margin-left":"auto","margin-right":"auto"}',
    'headerLogoImageContainerCSS' => '{"margin-bottom":"10px","padding-left":"20px","padding-right":"20px"}',
    'headerTitleVisibility' => '1',
    'headerTitleCSS' => '{"font-family":"googlefonts:Oswald","font-size":"35px","color":"#ffffff","padding-bottom":"20px","font-weight":"bold"}',
    'headerTitleContainerCSS' => '{"padding-left":"20px","padding-right":"20px", "text-align":"center"}',
    'headerDescriptionVisibility' => '1',
    'headerDescriptionCSS' => '{"font-family":"googlefonts:Oswald","font-size":"14px","color":"#ffffff","padding-bottom":"15px","font-weight":"bold"}',
    'headerDescriptionContainerCSS' => '{"margin-bottom":"20px","padding-left":"20px","padding-right":"20px", "text-align":"center"}',
    'headerContainerCSS' => '{}',

    'navigationVisibility' => '1',
    'navigationPosition' => '2',
    'navigationCSS' => '{"max-width":"800px","margin-left":"auto","margin-right":"auto"}',
    'navigationItemCSS' => '{"line-height":"35px","padding-left":"0","padding-right":"13px","height":"36px","color":"#ffffff","text-decoration":"none","text-decoration:hover":"underline","font-family":"googlefonts:Oswald","font-size":"16px","text-align":"left"}',
    'navigationSelectedItemCSS' => '{"text-decoration":"underline"}',
    'navigationSubitemCSS' => '{"line-height":"35px","padding-left":"15px","padding-right":"15px","height":"36px","color":"#ffffff","color:hover":"#ffffff","color:active":"#ffffff","text-decoration":"none","font-family":"googlefonts:Oswald","font-size":"14px","background-color":"#111111","background-color:hover":"#222222","background-color:active":"#333333","text-align":"left"}',
    'navigationSelectedSubitemCSS' => '{"background-color":"#333333"}',
    'navigationContainerCSS' => '{"padding-left":"20px","padding-right":"20px","padding-bottom":"10px","text-align":"center"}',

    'homePageSpecialContentBlockVisibility' => '0',
    'homePageSpecialContentBlockCSS' => '{"background-color":"#ffffff","padding-top":"25px","padding-right":"15px","padding-bottom":"25px","padding-left":"15px"}',
    'homePageSpecialContentBlockContainerCSS' => '{"max-width":"840px","margin-left":"auto","margin-right":"auto","padding-right":"5px","padding-left":"5px","padding-top":"5px"}',

    'contentCSS' => '{"background-color":"#ffffff","padding-top":"25px","padding-right":"15px","padding-bottom":"25px","padding-left":"15px","min-height":"300px"}',
    'contentContainerCSS' => '{"max-width":"840px","margin-left":"auto","margin-right":"auto","padding-top":"5px","padding-right":"5px","padding-left":"5px","padding-bottom":"5px"}',

    'footerVisibility' => '0',
    'footerCSS' => '{"background-color":"#ffffff","padding-top":"25px","padding-right":"15px","padding-bottom":"25px","padding-left":"15px"}',
    'footerContainerCSS' => '{"max-width":"840px","margin-left":"auto","margin-right":"auto","padding-right":"5px","padding-left":"5px","padding-bottom":"5px"}',

    'bodyCSS' => '{"background-color":"#000000","background-image":"url(addon:bearcms\/universal-theme-addon:assets\/s16\/1.jpg)","background-position":"bottom center","background-repeat":"no-repeat","background-size":"cover","background-attachment":"fixed"}',

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

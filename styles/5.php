<?php

/*
 * Universal Theme addon for Bear CMS
 * https://github.com/bearcms/universal-theme-addon
 * Copyright (c) Amplilabs Ltd.
 * Free to use under the MIT license.
 */

$h1 = '"color":"#333333","font-family":"googlefonts:Spectral SC","font-size":"28px","text-align":"center","line-height":"180%","margin-top":"0","margin-right":"0","margin-bottom":"0","margin-left":"0"';
$h2 = '"color":"#333333","font-family":"googlefonts:Spectral SC","font-size":"22px","text-align":"center","line-height":"180%","margin-top":"0","margin-right":"0","margin-bottom":"0","margin-left":"0"';
$h3 = '"color":"#333333","font-family":"googlefonts:Spectral SC","font-size":"18px","text-align":"center","line-height":"180%","margin-top":"0","margin-right":"0","margin-bottom":"0","margin-left":"0"';
$text = '"color":"#000000","font-family":"Arial","font-size":"14px","line-height":"180%"';
$input = '"color":"#000000","font-family":"Arial","font-size":"14px","line-height":"180%","padding-left":"15px","padding-right":"15px","padding-top":"10px","padding-bottom":"10px","width":"100%","border-top":"1px solid #cccccc","border-bottom":"1px solid #cccccc","border-left":"1px solid #cccccc","border-right":"1px solid #cccccc","border-top:hover":"1px solid #aaaaaa","border-bottom:hover":"1px solid #aaaaaa","border-left:hover":"1px solid #aaaaaa","border-right:hover":"1px solid #aaaaaa","border-top:active":"1px solid #888888","border-bottom:active":"1px solid #888888","border-left:active":"1px solid #888888","border-right:active":"1px solid #888888","border-top-left-radius":"2px","border-top-right-radius":"2px","border-bottom-left-radius":"2px","border-bottom-right-radius":"2px"';
$link = '"color":"#333333","color:hover":"#222222","color:active":"#111111","font-family":"Arial","font-size":"14px","line-height":"180%","text-decoration":"underline"';
$button = '"color":"#ffffff","font-family":"Arial","font-size":"14px","line-height":"42px","padding-left":"15px","padding-right":"15px","height":"42px","background-color":"#333333","background-color:hover":"#222222","background-color:active":"#111111","border-top-left-radius":"2px","border-top-right-radius":"2px","border-bottom-left-radius":"2px","border-bottom-right-radius":"2px"';
$date = '"color":"#aaa","font-family":"Arial","font-size":"12px","line-height":"180%"';
$userImage = '"width":"50px","height":"50px","margin-right":"8px"';
$separator = '"background-color":"#ccc","height":"2px","margin-top":"30px","margin-bottom":"30px","margin-left":"auto","margin-right":"auto"';

$getElementsStyles = function ($prefix) use ($text, $h1, $h2, $h3, $input, $link, $button, $date, $userImage, $separator) {
    return [
        $prefix . 'HeadingLargeCSS' => '{' . $h1 . '}',
        $prefix . 'HeadingMediumCSS' => '{' . $h2 . '}',
        $prefix . 'HeadingSmallCSS' => '{' . $h3 . '}',
        $prefix . 'TextCSS' => '{' . $text . '}',
        $prefix . 'TextLinkCSS' => '{' . $link . '}',
        $prefix . 'LinkCSS' => '{' . $link . '}',
        $prefix . 'NavigationItemLinkCSS' => '{' . $link . '}',
        $prefix . 'CommentsCommentCSS' => '{"margin-bottom":"10px"}',
        $prefix . 'CommentsAuthorNameCSS' => '{' . $text . '}',
        $prefix . 'CommentsAuthorImageCSS' => '{' . $userImage . '}',
        $prefix . 'CommentsDateCSS' => '{' . $date . '}',
        $prefix . 'CommentsTextCSS' => '{' . $text . '}',
        $prefix . 'CommentsTextLinksCSS' => '{' . $link . '}',
        $prefix . 'CommentsTextInputCSS' => '{' . $input . ',"height":"80px"}',
        $prefix . 'CommentsSendButtonCSS' => '{' . $button . ',"margin-top":"10px"}',
        $prefix . 'CommentsShowMoreButtonCSS' => '{' . $link . ',"margin-bottom":"5px"}',
        $prefix . 'HtmlCSS' => '{' . $text . '}',
        $prefix . 'HtmlLinkCSS' => '{' . $link . '}',
        $prefix . 'BlogPostsPostTitleCSS' => '{' . $link . ',"font-family":"googlefonts:Open Sans","font-size":"22px"}',
        $prefix . 'BlogPostsPostDateContainerCSS' => '{' . $date . ',"margin-top":"5px"}',
        $prefix . 'BlogPostsPostDateCSS' => '{' . $date . '}',
        $prefix . 'BlogPostsPostContentCSS' => '{"margin-top":"7px"}',
        $prefix . 'BlogPostsShowMoreButtonCSS' => '{' . $link . ',"margin-top":"5px"}',
        $prefix . 'ForumPostsTitleCSS' => '{' . $link . '}',
        $prefix . 'ForumPostsRepliesCountCSS' => '{' . $date . '}',
        $prefix . 'ForumPostsShowMoreButtonCSS' => '{' . $link . '}',
        $prefix . 'ForumPostsNewPostButtonCSS' => '{' . $link . '}',
        $prefix . 'ShareButtonCSS' => '{' . $button . '}',
        $prefix . 'SeparatorLargeCSS' => '{' . $separator . ',"width":"80%"}',
        $prefix . 'SeparatorMediumCSS' => '{' . $separator . ',"width":"60%"}',
        $prefix . 'SeparatorSmallCSS' => '{' . $separator . ',"width":"40%"}',
        $prefix . 'SearchBoxInputCSS' => '{' . $input . '}',
        $prefix . 'SearchBoxButtonCSS' => '{' . $button . ',"width":"46px","height":"100%","background-image":"url(addon:bearcms\/universal-theme-addon:assets\/search-icon.png)","background-position":"center center","background-repeat":"no-repeat","background-attachment":"scroll","background-size":"cover"}',
        $prefix . 'StoreItemsItemNameCSS' => '{' . $link . ',"font-size":"22px"}',
        $prefix . 'StoreItemsItemDescriptionCSS' => '{' . $text . '}',
        $prefix . 'StoreItemsItemDescriptionContainerCSS' => '{"padding-top":"5px"}',
        $prefix . 'StoreItemsItemPriceCSS' => '{' . $text . '}',
        $prefix . 'StoreItemsItemPriceOriginalCSS' => '{' . $text . ',"text-decoration":"line-through","font-size":"12px"}',
        $prefix . 'StoreItemsItemPriceContainerCSS' => '{"padding-top":"5px"}',
    ];
};

$result = [
    'headerCSS' => '{"max-width":"800px","margin-left":"auto","margin-right":"auto","padding-bottom":"10px","padding-top":"20px"}',
    'headerLogoImageCSS' => '{"max-width":"300px","margin-left":"auto","margin-right":"auto"}',
    'headerLogoImageContainerCSS' => '{"margin-bottom":"10px"}',
    'headerTitleVisibility' => '1',
    'headerTitleCSS' => '{"font-family":"googlefonts:Spectral SC","font-size":"50px","color":"#ffffff","padding-top":"13px","padding-bottom":"15px","padding-left":"20px","padding-right":"20px","text-shadow":"0 0 10px rgba(0,0,0,0.5)"}',
    'headerTitleContainerCSS' => '{"margin-bottom":"10px","text-align":"center"}',
    'headerDescriptionVisibility' => '0',
    'headerDescriptionCSS' => '{"font-family":"googlefonts:Spectral SC","font-size":"15px","color":"#ffffff","padding-top":"0px","padding-bottom":"15px","padding-left":"20px","padding-right":"20px","text-shadow":"0 0 10px rgba(0,0,0,0.5)"}',
    'headerDescriptionContainerCSS' => '{"margin-bottom":"20px","text-align":"center"}',
    'headerContainerCSS' => '{"padding-left":"10px","padding-right":"10px"}',
    'navigationVisibility' => '1',
    'navigationPosition' => '1',
    'navigationCSS' => '{"background-color":"#ffffff","border-bottom-left-radius":"3px","border-bottom-right-radius":"3px","padding-top":"0px","padding-bottom":"0px","box-shadow":"0 0 10px rgba(0,0,0,0.5)"}',
    'navigationItemCSS' => '{"line-height":"43px","padding-left":"16px","padding-right":"16px","height":"44px","color":"#333333","color:hover":"#ffffff","color:active":"#ffffff","text-decoration":"none","font-family":"Arial","font-size":"15px","background-color:hover":"#222222","background-color:active":"#111111","text-align":"left"}',
    'navigationSelectedItemCSS' => '{"color":"#ffffff","background-color":"#333333"}',
    'navigationSubitemCSS' => '{"line-height":"43px","padding-left":"16px","padding-right":"16px","height":"44px","color":"#ffffff","color:hover":"#ffffff","color:active":"#ffffff","text-decoration":"none","font-family":"Arial","font-size":"15px","background-color":"#333333","background-color:hover":"#222222","background-color:active":"#111111","text-align":"left"}',
    'navigationSelectedSubitemCSS' => '{"background-color":"#333333"}',
    'navigationContainerCSS' => '{"max-width":"800px","margin-left":"auto","margin-right":"auto","text-align":"center","padding-left":"10px","padding-right":"10px"}',
    'homePageSpecialContentBlockVisibility' => '1',
    'homePageSpecialContentBlockCSS' => '{"padding-top":"20px","padding-right":"20px","padding-bottom":"20px","padding-left":"20px","background-color":"#ffffff","border-top-left-radius":"3px","border-top-right-radius":"3px","border-bottom-left-radius":"3px","border-bottom-right-radius":"3px","box-shadow":"0 0 10px rgba(0,0,0,0.5)"}',
    'homePageSpecialContentBlockContainerCSS' => '{"max-width":"800px","margin-left":"auto","margin-right":"auto","margin-bottom":"30px","padding-left":"10px","padding-right":"10px"}',
    'contentCSS' => '{"background-color":"#ffffff","padding-top":"20px","padding-right":"20px","padding-bottom":"20px","padding-left":"20px","min-height":"300px","border-bottom-left-radius":"3px","border-bottom-right-radius":"3px","border-top-left-radius":"3px","border-top-right-radius":"3px","box-shadow":"0 0 10px rgba(0,0,0,0.5)"}',
    'contentContainerCSS' => '{"max-width":"800px","margin-left":"auto","margin-right":"auto","padding-left":"10px","padding-right":"10px"}',
    'footerVisibility' => '1',
    'footerCSS' => '{"padding-top":"20px","padding-right":"20px","padding-bottom":"20px","padding-left":"20px","border-top-left-radius":"3px","border-top-right-radius":"3px","border-bottom-left-radius":"3px","border-bottom-right-radius":"3px","background-color":"#ffffff","box-shadow":"0 0 10px rgba(0,0,0,0.5)"}',
    'footerContainerCSS' => '{"max-width":"800px","margin-left":"auto","margin-right":"auto","margin-top":"30px","margin-bottom":"30px","padding-left":"10px","padding-right":"10px"}',
    'bodyCSS' => '{"background-color":"#111111","background-image":"url(addon:bearcms\/universal-theme-addon:assets\/s5\/1.jpg)","background-position":"top center","background-repeat":"no-repeat","background-attachment":"fixed","background-size":"cover"}',
    'blogPostPageTitleCSS' => '{' . $h1 . '}',
    'blogPostPageDateContainerCSS' => '{"padding-top":"10px","text-align":"center"}',
    'blogPostPageDateCSS' => '{' . $date . '}',
    'blogPostPageContentCSS' => '{"padding-top":"15px"}',
    'newForumPostPageTitleCSS' => '{' . $h1 . '}',
    'newForumPostPageContentCSS' => '{"padding-top":"15px"}',
    'newForumPostPageTitleLabelCSS' => '{' . $text . '}',
    'newForumPostPageTitleInputCSS' => '{' . $input . '}',
    'newForumPostPageTextLabelCSS' => '{' . $text . ',"margin-top":"10px"}',
    'newForumPostPageTextInputCSS' => '{' . $input . ',"height":"200px"}',
    'newForumPostPageSendButtonCSS' => '{' . $button . ',"margin-top":"10px"}',
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

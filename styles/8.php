<?php

/*
 * Universal Theme addon for Bear CMS
 * https://github.com/bearcms/universal-theme-addon
 * Copyright (c) Amplilabs Ltd.
 * Free to use under the MIT license.
 */

$h1 = '"color":"#111111","font-family":"googlefonts:Noto Serif","font-size":"26px","text-align":"center","line-height":"180%"';
$h2 = '"color":"#111111","font-family":"googlefonts:Noto Serif","font-size":"20px","text-align":"center","line-height":"180%"';
$h3 = '"color":"#111111","font-family":"googlefonts:Noto Serif","font-size":"16px","text-align":"center","line-height":"180%"';
$text = '"color":"#000000","font-family":"Arial","font-size":"13px","line-height":"180%"';
$input = '"color":"#000000","font-family":"Arial","font-size":"13px","line-height":"180%","background-color":"#f5f5f5","padding-left":"15px","padding-right":"15px","padding-top":"10px","padding-bottom":"10px","width":"100%","border-top":"1px solid #cccccc","border-bottom":"1px solid #cccccc","border-left":"1px solid #cccccc","border-right":"1px solid #cccccc","border-top:hover":"1px solid #aaaaaa","border-bottom:hover":"1px solid #aaaaaa","border-left:hover":"1px solid #aaaaaa","border-right:hover":"1px solid #aaaaaa","border-top:active":"1px solid #888888","border-bottom:active":"1px solid #888888","border-left:active":"1px solid #888888","border-right:active":"1px solid #888888","border-top-left-radius":"2px","border-top-right-radius":"2px","border-bottom-left-radius":"2px","border-bottom-right-radius":"2px"';
$link = '"color":"#000000","color:hover":"#222222","color:active":"#444444","font-family":"Arial","font-size":"13px","line-height":"180%","text-decoration":"underline"';
$image = '"border-top-left-radius":"2px","border-top-right-radius":"2px","border-bottom-left-radius":"2px","border-bottom-right-radius":"2px"';
$button = '"color":"#ffffff","font-family":"Arial","font-size":"13px","line-height":"42px","padding-left":"15px","padding-right":"15px","height":"42px","background-color":"#333333","background-color:hover":"#222222","background-color:active":"#111111","border-top-left-radius":"2px","border-top-right-radius":"2px","border-bottom-left-radius":"2px","border-bottom-right-radius":"2px"';
$date = '"color":"#888888","font-family":"Arial","font-size":"12px","line-height":"180%"';
$userImage = '"width":"50px","height":"50px","margin-right":"12px","border-top-left-radius":"2px","border-top-right-radius":"2px","border-bottom-left-radius":"2px","border-bottom-right-radius":"2px"';
$separator = '"background-color":"#ccc","height":"2px","margin-top":"30px","margin-bottom":"30px","margin-left":"auto","margin-right":"auto"';

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
        $prefix . 'BlogPostsPostTitleCSS' => '{' . $link . ',"font-family":"googlefonts:Noto Serif","font-size":"22px"}',
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
    ];
};

$result = [
    'headerCSS' => '{"max-width":"800px","margin-left":"auto","margin-right":"auto","padding-bottom":"10px","padding-top":"25px"}',
    'headerLogoImageCSS' => '{"max-width":"300px","margin-left":"auto","margin-right":"auto"}',
    'headerLogoImageContainerCSS' => '{"margin-bottom":"10px"}',
    'headerTitleVisibility' => '1',
    'headerTitleCSS' => '{"font-family":"googlefonts:Noto Serif","font-size":"25px","color":"#ffffff","padding-top":"13px","padding-bottom":"15px","padding-left":"20px","padding-right":"20px"}',
    'headerTitleContainerCSS' => '{"text-align":"center"}',
    'headerDescriptionVisibility' => '1',
    'headerDescriptionCSS' => '{"font-family":"Arial","font-size":"13px","color":"#ffffff","padding-top":"0px","padding-bottom":"15px","padding-left":"20px","padding-right":"20px"}',
    'headerDescriptionContainerCSS' => '{"margin-bottom":"20px","text-align":"center"}',
    'headerContainerCSS' => '{}',

    'navigationVisibility' => '1',
    'navigationPosition' => '2',
    'navigationCSS' => '{"text-align":"center","padding-right":"10px","padding-left":"10px"}',
    'navigationItemCSS' => '{"line-height":"50px","padding-left":"20px","padding-right":"20px","height":"54px","color":"#111111","color:hover":"#111111","background-color:hover":"#f5f5f5","background-color:active":"#eeeeee","text-decoration":"none","font-family":"Arial","font-size":"13px","text-align":"left","border-top":"2px solid #ffffff","border-bottom":"2px solid #ffffff","border-top:hover":"2px solid #f5f5f5","border-bottom:hover":"2px solid #f5f5f5","border-top:active":"2px solid #eeeeee","border-bottom:active":"2px solid #eeeeee"}',
    'navigationSelectedItemCSS' => '{"color":"#eb2d0c","color:hover":"#eb2d0c","color:active":"#eb2d0c","background-color":"#ffffff","background-color:hover":"#f5f5f5","background-color:active":"#eeeeee","border-bottom":"2px solid #eb2d0c","border-bottom:hover":"2px solid #eb2d0c","border-bottom:active":"2px solid #eb2d0c"}',
    'navigationSubitemCSS' => '{"line-height":"43px","padding-left":"20px","padding-right":"20px","height":"44px","color":"#ffffff","color:hover":"#ffffff","color:active":"#ffffff","text-decoration":"none","font-family":"Arial","font-size":"13px","background-color":"#bd1f04","background-color:hover":"#ad1c03","background-color:active":"#9c1802","text-align":"left"}',
    'navigationSelectedSubitemCSS' => '{"background-color":"#222222"}',
    'navigationContainerCSS' => '{"max-width":"800px","margin-left":"auto","margin-right":"auto","margin-bottom":"40px","background-color":"#ffffff","border-top-left-radius":"8px","border-top-right-radius":"8px","border-bottom-left-radius":"2px","border-bottom-right-radius":"2px","box-shadow":"0 0 10px rgba(0,0,0,0.5)"}',

    'homePageSpecialContentBlockVisibility' => '0',
    'homePageSpecialContentBlockCSS' => '{"padding-top":"30px","padding-right":"20px","padding-bottom":"30px","padding-left":"20px"}',
    'homePageSpecialContentBlockContainerCSS' => '{"max-width":"800px","margin-left":"auto","margin-right":"auto","margin-bottom":"40px","background-color":"#ffffff","border-top-left-radius":"2px","border-top-right-radius":"2px","border-bottom-left-radius":"2px","border-bottom-right-radius":"2px","box-shadow":"0 0 10px rgba(0,0,0,0.5)"}',

    'contentCSS' => '{"padding-top":"30px","padding-right":"20px","padding-bottom":"30px","padding-left":"20px","min-height":"300px"}',
    'contentContainerCSS' => '{"max-width":"800px","margin-left":"auto","margin-right":"auto","margin-bottom":"40px","background-color":"#ffffff","border-bottom-left-radius":"8px","border-bottom-right-radius":"8px","border-top-left-radius":"2px","border-top-right-radius":"2px","box-shadow":"0 0 10px rgba(0,0,0,0.5)"}',

    'footerVisibility' => '0',
    'footerCSS' => '{"padding-top":"30px","padding-right":"20px","padding-bottom":"30px","padding-left":"20px"}',
    'footerContainerCSS' => '{"max-width":"800px","margin-left":"auto","margin-right":"auto","margin-bottom":"40px","background-color":"#ffffff","border-top-left-radius":"2px","border-top-right-radius":"2px","border-bottom-left-radius":"2px","border-bottom-right-radius":"2px","box-shadow":"0 0 10px rgba(0,0,0,0.5)"}',

    'bodyCSS' => '{"background-color":"#ffffff","background-image":"url(addon:bearcms\/universal-theme-addon:assets\/s8\/1.jpg)","background-position":"top center","background-repeat":"no-repeat","background-size":"cover","background-attachment":"fixed"}',

    'blogPostPageTitleCSS' => '{' . $h1 . '}',
    'blogPostPageDateContainerCSS' => '{"padding-top":"10px","text-align":"center"}',
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
];
$result = array_merge($result, $getElementsStyles('homePageSpecialContentBlockElements'));
$result = array_merge($result, $getElementsStyles('contentElements'));
$result = array_merge($result, $getElementsStyles('footerElements'));
return $result;

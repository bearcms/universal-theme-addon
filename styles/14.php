<?php

/*
 * Universal Theme addon for Bear CMS
 * https://github.com/bearcms/universal-theme-addon
 * Copyright (c) Amplilabs Ltd.
 * Free to use under the MIT license.
 */

$h1 = '"color":"#000000","font-family":"Times New Roman","font-size":"30px","line-height":"180%"';
$h2 = '"color":"#000000","font-family":"Times New Roman","font-size":"25px","line-height":"180%"';
$h3 = '"color":"#000000","font-family":"Times New Roman","font-size":"20px","line-height":"180%"';
$text = '"color":"#000000","font-family":"Arial","font-size":"13px","line-height":"180%"';
$input = '"color":"#000000","font-family":"Arial","font-size":"13px","line-height":"180%","background-color":"#f5f5f5","padding-left":"15px","padding-right":"15px","padding-top":"10px","padding-bottom":"10px","width":"100%","border-top-left-radius":"2px","border-top-right-radius":"2px","border-bottom-left-radius":"2px","border-bottom-right-radius":"2px","border-top":"1px solid #cccccc","border-bottom":"1px solid #cccccc","border-left":"1px solid #cccccc","border-right":"1px solid #cccccc","border-top:hover":"1px solid #aaaaaa","border-bottom:hover":"1px solid #aaaaaa","border-left:hover":"1px solid #aaaaaa","border-right:hover":"1px solid #aaaaaa","border-top:active":"1px solid #888888","border-bottom:active":"1px solid #888888","border-left:active":"1px solid #888888","border-right:active":"1px solid #888888"';
$link = '"color":"#000000","color:hover":"#000000","color:active":"#000000","font-family":"Arial","font-size":"13px","line-height":"180%","text-decoration":"underline"';
$image = '"border-top-left-radius":"2px","border-top-right-radius":"2px","border-bottom-left-radius":"2px","border-bottom-right-radius":"2px"';
$button = '"color":"#ffffff","font-family":"Arial","font-size":"13px","line-height":"42px","padding-left":"15px","padding-right":"15px","height":"42px","background-color":"#333333","background-color:hover":"#444444","background-color:active":"#555555","border-top-left-radius":"2px","border-top-right-radius":"2px","border-bottom-left-radius":"2px","border-bottom-right-radius":"2px"';
$date = '"color":"#888888","font-family":"Arial","font-size":"12px","line-height":"180%"';
$userImage = '"width":"50px","height":"50px","margin-right":"12px","border-top-left-radius":"2px","border-top-right-radius":"2px","border-bottom-left-radius":"2px","border-bottom-right-radius":"2px"';
$separator = '"background-color":"#ccc","height":"2px","margin-top":"40px","margin-bottom":"40px"';

$getElementsStyles = function ($prefix) use ($text, $h1, $h2, $h3, $input, $link, $image, $button, $date, $userImage, $separator) {
    if ($prefix === 'homePageSpecialContentBlockElements' || $prefix === 'footerElements') {
        $textStyle = ',"color":"#ffffff"';
        $h1 .= $textStyle;
        $h2 .= $textStyle;
        $h3 .= $textStyle;
        $text .= $textStyle;
        $link .= $textStyle . ',"color:hover":"#ffffff","color:active":"#ffffff"';
        $input .= ',"border-top":"","border-bottom":"","border-left":"","border-right":"","border-top:hover":"","border-bottom:hover":"","border-left:hover":"","border-right:hover":"","border-top:active":"","border-bottom:active":"","border-left:active":"","border-right:active":""';
        $separator .= ',"background-color":"rgba(255,255,255,0.3)"';
    }
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
        $prefix . 'BlogPostsPostTitleCSS' => '{' . $link . ',"font-family":"Times New Roman","font-size":"22px"}',
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
    'headerCSS' => '{"max-width":"840px","margin-left":"auto","margin-right":"auto","padding-bottom":"10px","padding-top":"35px"}',
    'headerLogoImageCSS' => '{"max-width":"300px"}',
    'headerLogoImageContainerCSS' => '{"margin-bottom":"10px","padding-left":"20px","padding-right":"20px"}',
    'headerTitleVisibility' => '1',
    'headerTitleCSS' => '{"font-family":"Times New Roman","font-size":"35px","color":"#ffffff","padding-bottom":"20px","font-weight":"bold"}',
    'headerTitleContainerCSS' => '{"padding-left":"20px","padding-right":"20px"}',
    'headerDescriptionVisibility' => '1',
    'headerDescriptionCSS' => '{"font-family":"Times New Roman","font-size":"14px","color":"#ffffff","padding-bottom":"15px","font-weight":"bold"}',
    'headerDescriptionContainerCSS' => '{"margin-bottom":"20px","padding-left":"20px","padding-right":"20px"}',
    'headerContainerCSS' => '{}',

    'navigationVisibility' => '1',
    'navigationPosition' => '2',
    'navigationCSS' => '{"max-width":"800px","margin-left":"auto","margin-right":"auto"}',
    'navigationItemCSS' => '{"line-height":"35px","padding-left":"0","padding-right":"13px","height":"36px","color":"#ffffff","text-decoration":"none","text-decoration:hover":"underline","font-family":"Times New Roman","font-size":"16px","text-align":"left"}',
    'navigationSelectedItemCSS' => '{"text-decoration":"underline"}',
    'navigationSubitemCSS' => '{"line-height":"35px","padding-left":"15px","padding-right":"15px","height":"36px","color":"#ffffff","color:hover":"#ffffff","color:active":"#ffffff","text-decoration":"none","font-family":"Times New Roman","font-size":"14px","background-color":"#111111","background-color:hover":"#222222","background-color:active":"#333333","text-align":"left"}',
    'navigationSelectedSubitemCSS' => '{"background-color":"#333333"}',
    'navigationContainerCSS' => '{"padding-left":"20px","padding-right":"20px","padding-bottom":"10px"}',

    'homePageSpecialContentBlockVisibility' => '1',
    'homePageSpecialContentBlockCSS' => '{"max-width":"840px","margin-left":"auto","margin-right":"auto","padding-top":"40px","padding-right":"20px","padding-bottom":"40px","padding-left":"20px"}',
    'homePageSpecialContentBlockContainerCSS' => '{}',

    'contentCSS' => '{"max-width":"840px","margin-left":"auto","margin-right":"auto","padding-top":"40px","padding-right":"20px","padding-bottom":"40px","padding-left":"20px","min-height":"300px"}',
    'contentContainerCSS' => '{"background-color":"#ffffff"}',

    'footerVisibility' => '1',
    'footerCSS' => '{"max-width":"840px","margin-left":"auto","margin-right":"auto","padding-top":"40px","padding-right":"20px","padding-bottom":"40px","padding-left":"20px"}',
    'footerContainerCSS' => '{"background-color":"#222222"}',

    'bodyCSS' => '{"background-color":"#97B8B6"}',

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
];
$result = array_merge($result, $getElementsStyles('homePageSpecialContentBlockElements'));
$result = array_merge($result, $getElementsStyles('contentElements'));
$result = array_merge($result, $getElementsStyles('footerElements'));
return $result;

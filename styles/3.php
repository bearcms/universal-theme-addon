<?php

/*
 * Universal Theme addon for Bear CMS
 * https://github.com/bearcms/universal-theme-addon
 * Copyright (c) Amplilabs Ltd.
 * Free to use under the MIT license.
 */

$h1 = '"color":"#1BB0CE","font-family":"googlefonts:Open Sans","font-size":"28px","line-height":"180%","margin-top":"0","margin-right":"0","margin-bottom":"0","margin-left":"0"';
$h2 = '"color":"#1BB0CE","font-family":"googlefonts:Open Sans","font-size":"22px","line-height":"180%","margin-top":"0","margin-right":"0","margin-bottom":"0","margin-left":"0"';
$h3 = '"color":"#1BB0CE","font-family":"googlefonts:Open Sans","font-size":"18px","line-height":"180%","margin-top":"0","margin-right":"0","margin-bottom":"0","margin-left":"0"';
$text = '"color":"#000000","font-family":"Arial","font-size":"14px","line-height":"180%"';
$input = '"color":"#000000","font-family":"Arial","font-size":"14px","line-height":"180%","padding-left":"15px","padding-right":"15px","padding-top":"10px","padding-bottom":"10px","width":"100%","border-top":"1px solid #cccccc","border-bottom":"1px solid #cccccc","border-left":"1px solid #cccccc","border-right":"1px solid #cccccc","border-top:hover":"1px solid #aaaaaa","border-bottom:hover":"1px solid #aaaaaa","border-left:hover":"1px solid #aaaaaa","border-right:hover":"1px solid #aaaaaa","border-top:active":"1px solid #888888","border-bottom:active":"1px solid #888888","border-left:active":"1px solid #888888","border-right:active":"1px solid #888888"';
$link = '"color":"#1BB0CE","color:hover":"#1099B5","color:active":"#0A7D94","font-family":"Arial","font-size":"14px","line-height":"180%","text-decoration":"underline"';
$button = '"color":"#ffffff","font-family":"Arial","font-size":"14px","line-height":"42px","padding-left":"15px","padding-right":"15px","height":"42px","background-color":"#1BB0CE","background-color:hover":"#1099B5","background-color:active":"#0A7D94"';
$date = '"color":"#aaa","font-family":"Arial","font-size":"12px","line-height":"180%"';
$userImage = '"width":"50px","height":"50px","margin-right":"8px"';
$separator = '"background-color":"#ccc","height":"2px","margin-top":"30px","margin-bottom":"30px","margin-left":"auto","margin-right":"auto"';

$getElementsStyles = function ($prefix) use ($text, $h1, $h2, $h3, $input, $link, $button, $date, $userImage, $separator) {
    if ($prefix === 'homePageSpecialContentBlockElements' || $prefix === 'footerElements') {
        $text .= ',"color":"#ffffff"';
        $input .= ',"border-top":"","border-bottom":"","border-left":"","border-right":"","border-top:hover":"","border-bottom:hover":"","border-left:hover":"","border-right:hover":"","border-top:active":"","border-bottom:active":"","border-left:active":"","border-right:active":""';
        $separator .= ',"background-color":"#333"';
    }
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
    ];
};

$result = [
    'headerCSS' => '{"max-width":"900px","margin-left":"auto","margin-right":"auto","padding-right":"30px","padding-bottom":"30px","padding-left":"30px","padding-top":"60px"}',
    'headerLogoImageCSS' => '{"max-width":"300px","margin-left":"auto","margin-right":"auto"}',
    'headerLogoImageContainerCSS' => '{"margin-bottom":"30px"}',
    'headerTitleVisibility' => '1',
    'headerTitleCSS' => '{"font-family":"googlefonts:Open Sans","font-size":"30px","font-weight":"bold","color":"#ffffff","text-decoration:hover":"underline"}',
    'headerTitleContainerCSS' => '{"margin-bottom":"30px","text-align":"left"}',
    'headerDescriptionVisibility' => '1',
    'headerDescriptionCSS' => '{"color":"rgba(255,255,255,0.8)","font-family":"googlefonts:Open Sans","font-size":"15px"}',
    'headerDescriptionContainerCSS' => '{"margin-bottom":"30px","text-align":"left"}',
    'headerContainerCSS' => '{"background-image":"url(addon:bearcms\/universal-theme-addon:assets\/s3\/1.jpg)","background-position":"top center","background-repeat":"no-repeat","background-attachment":"scroll","background-size":"cover"}',
    'navigationVisibility' => '1',
    'navigationPosition' => '2',
    'navigationCSS' => '{"max-width":"900px","margin-left":"auto","margin-right":"auto","padding-right":"15px","padding-left":"15px"}',
    'navigationItemCSS' => '{"line-height":"43px","padding-left":"16px","padding-right":"16px","height":"44px","color":"#000000","text-decoration":"none","font-family":"Arial","font-size":"15px","border-bottom:hover":"2px solid #1099B5","border-bottom:active":"2px solid #0A7D94","text-align":"left"}',
    'navigationSelectedItemCSS' => '{"border-bottom":"2px solid #1BB0CE"}',
    'navigationSubitemCSS' => '{"line-height":"43px","padding-left":"16px","padding-right":"16px","height":"44px","color":"#ffffff","color:hover":"#ffffff","color:active":"#ffffff","text-decoration":"none","font-family":"Arial","font-size":"15px","background-color":"#1BB0CE","background-color:hover":"#1099B5","background-color:active":"#0A7D94","text-align":"left"}',
    'navigationSelectedSubitemCSS' => '{"background-color":"#1BB0CE"}',
    'navigationContainerCSS' => '{"background-color":"#ffffff","border-bottom":"1px solid rgba(0,0,0,0.1)"}',
    'homePageSpecialContentBlockVisibility' => '0',
    'homePageSpecialContentBlockCSS' => '{"max-width":"900px","margin-left":"auto","margin-right":"auto","padding-top":"25px","padding-right":"15px","padding-bottom":"25px","padding-left":"15px"}',
    'homePageSpecialContentBlockContainerCSS' => '{"background-color":"#111111"}',
    'contentCSS' => '{"max-width":"900px","margin-left":"auto","margin-right":"auto","padding-top":"40px","padding-right":"15px","padding-bottom":"40px","padding-left":"15px","min-height":"300px"}',
    'contentContainerCSS' => '{"background-color":"#ffffff"}',
    'footerVisibility' => '1',
    'footerCSS' => '{"max-width":"900px","margin-left":"auto","margin-right":"auto","padding-top":"40px","padding-right":"15px","padding-bottom":"40px","padding-left":"15px"}',
    'footerContainerCSS' => '{"background-color":"#111111"}',
    'bodyCSS' => '{"background-color":"#111111"}',
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
];
$result = array_merge($result, $getElementsStyles('homePageSpecialContentBlockElements'));
$result = array_merge($result, $getElementsStyles('contentElements'));
$result = array_merge($result, $getElementsStyles('footerElements'));
return $result;

<?php

/*
 * Universal Theme addon for Bear CMS
 * https://github.com/bearcms/universal-theme-addon
 * Copyright (c) Amplilabs Ltd.
 * Free to use under the MIT license.
 */

$h1 = '"color":"#1BB0CE","font-family":"googlefonts:Open Sans","font-size":"28px","text-align":"center","line-height":"180%","margin-top":"0","margin-right":"0","margin-bottom":"0","margin-left":"0"';
$h2 = '"color":"#1BB0CE","font-family":"googlefonts:Open Sans","font-size":"22px","text-align":"center","line-height":"180%","margin-top":"0","margin-right":"0","margin-bottom":"0","margin-left":"0"';
$h3 = '"color":"#1BB0CE","font-family":"googlefonts:Open Sans","font-size":"18px","text-align":"center","line-height":"180%","margin-top":"0","margin-right":"0","margin-bottom":"0","margin-left":"0"';
$text = '"color":"#000000","font-family":"Arial","font-size":"14px","line-height":"180%"';
$input = '"color":"#000000","font-family":"Arial","font-size":"14px","line-height":"180%","padding-left":"15px","padding-right":"15px","padding-top":"10px","padding-bottom":"10px","width":"100%","border-top":"1px solid #cccccc","border-bottom":"1px solid #cccccc","border-left":"1px solid #cccccc","border-right":"1px solid #cccccc","border-top:hover":"1px solid #aaaaaa","border-bottom:hover":"1px solid #aaaaaa","border-left:hover":"1px solid #aaaaaa","border-right:hover":"1px solid #aaaaaa","border-top:active":"1px solid #888888","border-bottom:active":"1px solid #888888","border-left:active":"1px solid #888888","border-right:active":"1px solid #888888"';
$link = '"color":"#1BB0CE","color:hover":"#1099B5","color:active":"#0A7D94","font-family":"Arial","font-size":"14px","line-height":"180%","text-decoration":"underline"';
$button = '"color":"#ffffff","font-family":"Arial","font-size":"14px","line-height":"42px","padding-left":"15px","padding-right":"15px","height":"42px","background-color":"#1BB0CE","background-color:hover":"#1099B5","background-color:active":"#0A7D94"';
$date = '"color":"#aaa","font-family":"Arial","font-size":"12px","line-height":"180%"';
$userImage = '"width":"50px","height":"50px","margin-right":"8px"';

$getElementsStyles = function($prefix) use ($text, $h1, $h2, $h3, $input, $link, $button, $date, $userImage) {
    if ($prefix === 'homePageSpecialContentBlockElements' || $prefix === 'footerElements') {
        $text .= ',"color":"#ffffff"';
        $input .= ',"border-top":"","border-bottom":"","border-left":"","border-right":"","border-top:hover":"","border-bottom:hover":"","border-left:hover":"","border-right:hover":"","border-top:active":"","border-bottom:active":"","border-left:active":"","border-right:active":""';
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
    ];
};

$result = [
    'headerCSS' => '{"max-width":"900px","margin-left":"auto","margin-right":"auto","padding-right":"40px","padding-bottom":"40px","padding-left":"40px","padding-top":"80px"}',
    'headerLogoImageCSS' => '{"max-width":"300px","margin-left":"auto","margin-right":"auto"}',
    'headerLogoImageContainerCSS' => '{"margin-bottom":"40px","text-align":"center"}',
    'headerTitleVisibility' => '1',
    'headerTitleCSS' => '{"font-family":"googlefonts:Open Sans","font-size":"40px","font-weight":"bold","color":"#ffffff","background-color":"rgba(0,0,0,0.7)","padding-top":"18px","padding-bottom":"20px","padding-left":"25px","padding-right":"25px"}',
    'headerTitleContainerCSS' => '{"margin-bottom":"40px","text-align":"center"}',
    'headerDescriptionVisibility' => '0',
    'headerDescriptionCSS' => '{"font-family":"googlefonts:Open Sans","font-size":"15px","color":"#ffffff","background-color":"rgba(0,0,0,0.7)","padding-top":"18px","padding-bottom":"20px","padding-left":"25px","padding-right":"25px"}',
    'headerDescriptionContainerCSS' => '{"margin-bottom":"40px","text-align":"center"}',
    'headerContainerCSS' => '',
    'navigationVisibility' => '1',
    'navigationPosition' => '1',
    'navigationCSS' => '{"max-width":"900px","margin-left":"auto","margin-right":"auto","padding-right":"15px","padding-left":"15px","text-align":"center"}',
    'navigationItemCSS' => '{"line-height":"43px","padding-left":"16px","padding-right":"16px","height":"44px","color":"#ffffff","color:hover":"#ffffff","color:active":"#ffffff","text-decoration":"none","font-family":"Arial","font-size":"15px","background-color:hover":"#1099B5","background-color:active":"#0A7D94","text-align":"left"}',
    'navigationSelectedItemCSS' => '{"background-color":"#1BB0CE"}',
    'navigationSubitemCSS' => '{"line-height":"43px","padding-left":"16px","padding-right":"16px","height":"44px","color":"#ffffff","color:hover":"#ffffff","color:active":"#ffffff","text-decoration":"none","font-family":"Arial","font-size":"15px","background-color":"#1BB0CE","background-color:hover":"#1099B5","background-color:active":"#0A7D94","text-align":"left"}',
    'navigationSelectedSubitemCSS' => '{"background-color":"#1BB0CE"}',
    'navigationContainerCSS' => '{"background-color":"rgba(0,0,0,0.7)"}',
    'homePageSpecialContentBlockVisibility' => '1',
    'homePageSpecialContentBlockCSS' => '{"padding-top":"20px","padding-right":"20px","padding-bottom":"20px","padding-left":"20px"}',
    'homePageSpecialContentBlockContainerCSS' => '{"max-width":"900px","margin-left":"auto","margin-right":"auto","background-color":"rgba(0,0,0,0.7)","margin-bottom":"30px"}',
    'contentCSS' => '{"padding-top":"20px","padding-right":"20px","padding-bottom":"20px","padding-left":"20px","min-height":"300px"}',
    'contentContainerCSS' => '{"max-width":"900px","margin-left":"auto","margin-right":"auto","background-color":"#ffffff"}',
    'footerVisibility' => '1',
    'footerCSS' => '{"padding-top":"20px","padding-right":"20px","padding-bottom":"20px","padding-left":"20px"}',
    'footerContainerCSS' => '{"max-width":"900px","margin-left":"auto","margin-right":"auto","background-color":"rgba(0,0,0,0.7)","margin-top":"30px","margin-bottom":"30px"}',
    'bodyCSS' => '{"background-color":"#111111","background-image":"url(addon:bearcms\/universal-theme-addon:assets\/s4\/1.jpg)","background-position":"top center","background-repeat":"no-repeat","background-attachment":"fixed","background-size":"cover"}',
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

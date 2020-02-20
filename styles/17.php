<?php

/*
 * Universal Theme addon for Bear CMS
 * https://github.com/bearcms/universal-theme-addon
 * Copyright (c) Amplilabs Ltd.
 * Free to use under the MIT license.
 */

$h1 = '"color":"#000000","font-family":"googlefonts:Andika","font-size":"30px","line-height":"180%"';
$h2 = '"color":"#000000","font-family":"googlefonts:Andika","font-size":"25px","line-height":"180%"';
$h3 = '"color":"#000000","font-family":"googlefonts:Andika","font-size":"20px","line-height":"180%"';
$text = '"color":"#000000","font-family":"Arial","font-size":"13px","line-height":"180%"';
$input = '"color":"#000000","font-family":"Arial","font-size":"13px","line-height":"180%","background-color":"rgba(255,255,255,0)","padding-left":"15px","padding-right":"15px","padding-top":"10px","padding-bottom":"10px","width":"100%","border-top-left-radius":"4px","border-top-right-radius":"4px","border-bottom-left-radius":"4px","border-bottom-right-radius":"4px","border-top":"1px solid #cccccc","border-bottom":"1px solid #cccccc","border-left":"1px solid #cccccc","border-right":"1px solid #cccccc","border-top:hover":"1px solid #aaaaaa","border-bottom:hover":"1px solid #aaaaaa","border-left:hover":"1px solid #aaaaaa","border-right:hover":"1px solid #aaaaaa","border-top:active":"1px solid #999999","border-bottom:active":"1px solid #999999","border-left:active":"1px solid #999999","border-right:active":"1px solid #999999"';
$link = '"color":"#000000","color:hover":"#000000","color:active":"#000000","font-family":"Arial","font-size":"13px","line-height":"180%","text-decoration":"underline"';
$image = '"border-top-left-radius":"4px","border-top-right-radius":"4px","border-bottom-left-radius":"4px","border-bottom-right-radius":"4px"';
$button = '"color":"#ffffff","font-family":"Arial","font-size":"13px","line-height":"42px","padding-left":"15px","padding-right":"15px","height":"42px","background-color":"#cb1754","background-color:hover":"#bf134d","background-color:active":"#b50e47","border-top-left-radius":"4px","border-top-right-radius":"4px","border-bottom-left-radius":"4px","border-bottom-right-radius":"4px"';
$date = '"color":"#999999","font-family":"Arial","font-size":"12px","line-height":"180%"';
$userImage = '"width":"50px","height":"50px","margin-right":"12px","border-top-left-radius":"4px","border-top-right-radius":"4px","border-bottom-left-radius":"4px","border-bottom-right-radius":"4px"';
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
        $prefix . 'BlogPostsPostTitleCSS' => '{' . $link . ',"font-family":"googlefonts:Andika","font-size":"22px"}',
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
    ];
};

$result = [
    'headerCSS' => '{"max-width":"740px","margin-left":"auto","margin-right":"auto","padding-bottom":"10px","padding-top":"65px"}',
    'headerLogoImageCSS' => '{"max-width":"250px","margin-left":"auto","margin-right":"auto"}',
    'headerLogoImageContainerCSS' => '{"margin-bottom":"15px","padding-left":"20px","padding-right":"20px"}',
    'headerTitleVisibility' => '1',
    'headerTitleCSS' => '{"font-family":"googlefonts:Andika","font-size":"35px","color":"#ffffff","padding-bottom":"20px","font-weight":"bold"}',
    'headerTitleContainerCSS' => '{"padding-left":"20px","padding-right":"20px", "text-align":"center"}',
    'headerDescriptionVisibility' => '1',
    'headerDescriptionCSS' => '{"font-family":"googlefonts:Andika","font-size":"14px","color":"#ffffff","padding-bottom":"15px","font-weight":"bold"}',
    'headerDescriptionContainerCSS' => '{"margin-bottom":"20px","padding-left":"20px","padding-right":"20px", "text-align":"center"}',
    'headerContainerCSS' => '{}',

    'navigationVisibility' => '1',
    'navigationPosition' => '1',
    'navigationCSS' => '{"max-width":"700px","margin-left":"auto","margin-right":"auto"}',
    'navigationItemCSS' => '{"line-height":"53px","border-top":"2px solid rgba(0,0,0,0)","border-top:hover":"2px solid #cb1754","padding-left":"15px","padding-right":"15px","height":"56px","color":"#111111","text-decoration":"none","font-family":"googlefonts:Andika","font-size":"14px","text-align":"left","background-color:hover":"#e5c7cf","background-color:active":"#e1bfc0"}',
    'navigationSelectedItemCSS' => '{"background-color":"#e5c7cf","border-top":"2px solid #cb1754"}',
    'navigationSubitemCSS' => '{"line-height":"45px","padding-left":"15px","padding-right":"15px","height":"46px","color":"111111","text-decoration":"none","font-family":"googlefonts:Andika","font-size":"14px","background-color":"#e1bfc0","background-color:hover":"#e1b8bc","background-color:active":"#deb4b8","text-align":"left"}',
    'navigationSelectedSubitemCSS' => '{"background-color":"#e1b8bc"}',
    'navigationContainerCSS' => '{"text-align":"center","box-shadow":"0 0 10px 0 rgba(0,0,0,0.1)","background-color":"rgba(255,255,255,0.9)"}',

    'homePageSpecialContentBlockVisibility' => '1',
    'homePageSpecialContentBlockCSS' => '{"background-color":"rgba(255,255,255,0.9)","padding-top":"20px","padding-right":"20px","padding-bottom":"20px","padding-left":"20px","border-top-left-radius":"10px","border-top-right-radius":"10px","border-bottom-left-radius":"10px","border-bottom-right-radius":"10px","box-shadow":"0 0 10px 0 rgba(0,0,0,0.1)"}',
    'homePageSpecialContentBlockContainerCSS' => '{"max-width":"740px","margin-left":"auto","margin-right":"auto","padding-right":"5px","padding-left":"5px","padding-top":"30px"}',

    'contentCSS' => '{"background-color":"rgba(255,255,255,0.9)","padding-top":"20px","padding-right":"20px","padding-bottom":"20px","padding-left":"20px","min-height":"300px","border-top-left-radius":"10px","border-top-right-radius":"10px","border-bottom-left-radius":"10px","border-bottom-right-radius":"10px","box-shadow":"0 0 10px 0 rgba(0,0,0,0.1)"}',
    'contentContainerCSS' => '{"max-width":"740px","margin-left":"auto","margin-right":"auto","padding-top":"30px","padding-right":"5px","padding-left":"5px","padding-bottom":"30px"}',

    'footerVisibility' => '1',
    'footerCSS' => '{"background-color":"rgba(255,255,255,0.9)","padding-top":"20px","padding-right":"20px","padding-bottom":"20px","padding-left":"20px","border-top-left-radius":"10px","border-top-right-radius":"10px","border-bottom-left-radius":"10px","border-bottom-right-radius":"10px","box-shadow":"0 0 10px 0 rgba(0,0,0,0.1)"}',
    'footerContainerCSS' => '{"max-width":"740px","margin-left":"auto","margin-right":"auto","padding-right":"5px","padding-left":"5px","padding-bottom":"30px"}',

    'bodyCSS' => '{"background-color":"#f4f8f9","background-image":"url(addon:bearcms\/universal-theme-addon:assets\/s17\/1.jpg)","background-position":"top center","background-repeat":"no-repeat","background-size":"cover","background-attachment":"fixed"}',

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

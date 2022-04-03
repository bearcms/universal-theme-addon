<?php

/*
 * Universal Theme addon for Bear CMS
 * https://github.com/bearcms/universal-theme-addon
 * Copyright (c) Amplilabs Ltd.
 * Free to use under the MIT license.
 */

$h1 = '"color":"#ffffff","font-family":"Arial Black","font-size":"30px","line-height":"180%"';
$h2 = '"color":"#ffffff","font-family":"Arial Black","font-size":"25px","line-height":"180%"';
$h3 = '"color":"#ffffff","font-family":"Arial Black","font-size":"20px","line-height":"180%"';
$text = '"color":"#ffffff","font-family":"Arial","font-size":"13px","line-height":"180%"';
$input = '"color":"#111111","font-family":"Arial","font-size":"13px","line-height":"180%","background-color":"rgba(255,255,255,0.5)","padding-left":"15px","padding-right":"15px","padding-top":"10px","padding-bottom":"10px","width":"100%","border-top-left-radius":"2px","border-top-right-radius":"2px","border-bottom-left-radius":"2px","border-bottom-right-radius":"2px"';
$link = '"color":"#ffffff","color:hover":"#ffffff","color:active":"#ffffff","font-family":"Arial","font-size":"13px","line-height":"180%","text-decoration":"underline"';
$image = '"border-top-left-radius":"2px","border-top-right-radius":"2px","border-bottom-left-radius":"2px","border-bottom-right-radius":"2px"';
$button = '"color":"#ffffff","font-family":"Arial","font-size":"13px","line-height":"42px","padding-left":"15px","padding-right":"15px","height":"42px","background-color":"#111111","background-color:hover":"#050505","background-color:active":"#000000","border-top-left-radius":"2px","border-top-right-radius":"2px","border-bottom-left-radius":"2px","border-bottom-right-radius":"2px"';
$date = '"color":"#999999","font-family":"Arial","font-size":"12px","line-height":"180%"';
$userImage = '"width":"50px","height":"50px","margin-right":"12px","border-top-left-radius":"2px","border-top-right-radius":"2px","border-bottom-left-radius":"2px","border-bottom-right-radius":"2px"';
$separator = '"background-color":"#ddd","border-top-right-radius":"3px","border-bottom-right-radius":"3px","border-top-left-radius":"3px","border-bottom-left-radius":"3px","height":"5px","margin-top":"30px","margin-bottom":"30px","margin-left":"auto","margin-right":"auto"';

$getElementsStyles = function ($prefix) use ($text, $h1, $h2, $h3, $input, $link, $image, $button, $date, $userImage, $separator) {
    $formFieldInput = $input;
    $formFieldLabel = $text;
    $formFieldHint = $text . ',"font-size":"12px","padding-bottom":"3px"';
    $formFieldContainer = '"padding-bottom":"15px"';
    $formFieldListOptionButton = $input . ',"width":"40px","height":"40px","background-position":"center center","background-repeat":"no-repeat","background-attachment":"scroll","background-size":"cover"';
    $formFieldListOptionText = $text . ',"padding-left":"15px","padding-top":"8px"';
    $formFieldListOptionTextbox = $input . ',"height":"40px","line-height":"38px","width":"250px","margin-left":"10px"';
    $formFieldListOptionContainer = '"margin-bottom":"5px"';
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
        $prefix . 'BlogPostsPostTitleCSS' => '{' . $link . ',"font-family":"Arial Black","font-size":"22px"}',
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
        $prefix . 'FormFieldTextCSS' => '{' . $formFieldInput . '}',
        $prefix . 'FormFieldTextLabelCSS' => '{' . $formFieldLabel . '}',
        $prefix . 'FormFieldTextHintCSS' => '{' . $formFieldHint . '}',
        $prefix . 'FormFieldTextContainerCSS' => '{' . $formFieldContainer . '}',
        $prefix . 'FormFieldTextareaCSS' => '{' . $formFieldInput . ',"height":"140px"}',
        $prefix . 'FormFieldTextareaLabelCSS' => '{' . $formFieldLabel . '}',
        $prefix . 'FormFieldTextareaHintCSS' => '{' . $formFieldHint . '}',
        $prefix . 'FormFieldTextareaContainerCSS' => '{' . $formFieldContainer . '}',
        $prefix . 'FormFieldOpenedListSingleSelectLabelCSS' => '{' . $formFieldLabel . '}',
        $prefix . 'FormFieldOpenedListSingleSelectHintCSS' => '{' . $formFieldHint . '}',
        $prefix . 'FormFieldOpenedListSingleSelectOptionButtonCSS' => '{' . $formFieldListOptionButton . ',"border-top-left-radius":"50%","border-top-right-radius":"50%","border-bottom-left-radius":"50%","border-bottom-right-radius":"50%"}',
        $prefix . 'FormFieldOpenedListSingleSelectOptionButtonCheckedCSS' => '{"background-image":"url(addon:bearcms\/universal-theme-addon:assets\/radio-icon-111.svg)","background-size":"30px 30px"}',
        $prefix . 'FormFieldOpenedListSingleSelectOptionTextCSS' => '{' . $formFieldListOptionText . '}',
        $prefix . 'FormFieldOpenedListSingleSelectOptionTextboxCSS' => '{' . $formFieldListOptionTextbox . '}',
        $prefix . 'FormFieldOpenedListSingleSelectOptionContainerCSS' => '{' . $formFieldListOptionContainer . '}',
        $prefix . 'FormFieldOpenedListSingleSelectContainerCSS' => '{' . $formFieldContainer . '}',
        $prefix . 'FormFieldOpenedListMultiSelectLabelCSS' => '{' . $formFieldLabel . '}',
        $prefix . 'FormFieldOpenedListMultiSelectHintCSS' => '{' . $formFieldHint . '}',
        $prefix . 'FormFieldOpenedListMultiSelectOptionButtonCSS' => '{' . $formFieldListOptionButton . '}',
        $prefix . 'FormFieldOpenedListMultiSelectOptionButtonCheckedCSS' => '{"background-image":"url(addon:bearcms\/universal-theme-addon:assets\/checkbox-icon-111.svg)","background-size":"18px 18px"}',
        $prefix . 'FormFieldOpenedListMultiSelectOptionTextCSS' => '{' . $formFieldListOptionText . '}',
        $prefix . 'FormFieldOpenedListMultiSelectOptionTextboxCSS' => '{' . $formFieldListOptionTextbox . '}',
        $prefix . 'FormFieldOpenedListMultiSelectOptionContainerCSS' => '{' . $formFieldListOptionContainer . '}',
        $prefix . 'FormFieldOpenedListMultiSelectContainerCSS' => '{' . $formFieldContainer . '}',
        $prefix . 'FormFieldClosedListCSS' => '{' . $formFieldInput . '}',
        $prefix . 'FormFieldClosedListLabelCSS' => '{' . $formFieldLabel . '}',
        $prefix . 'FormFieldClosedListHintCSS' => '{' . $formFieldHint . '}',
        $prefix . 'FormFieldClosedListContainerCSS' => '{' . $formFieldContainer . '}',
        $prefix . 'FormSubmitButtonCSS' => '{' . $button . '}',
    ];
};

$result = [
    'headerCSS' => '{"max-width":"760px","margin-left":"auto","margin-right":"auto","padding-bottom":"60px","padding-top":"80px"}',
    'headerLogoImageCSS' => '{"max-width":"250px","margin-left":"auto","margin-right":"auto"}',
    'headerLogoImageContainerCSS' => '{"margin-bottom":"15px","padding-left":"20px","padding-right":"20px"}',
    'headerTitleVisibility' => '1',
    'headerTitleCSS' => '{"font-family":"Arial Black","font-size":"35px","color":"#ffffff","padding-bottom":"20px"}',
    'headerTitleContainerCSS' => '{"padding-left":"20px","padding-right":"20px", "text-align":"center"}',
    'headerDescriptionVisibility' => '1',
    'headerDescriptionCSS' => '{"font-family":"Arial Black","font-size":"15px","color":"#ffffff","padding-bottom":"20px"}',
    'headerDescriptionContainerCSS' => '{"padding-left":"20px","padding-right":"20px", "text-align":"center"}',
    'headerContainerCSS' => '{}',

    'navigationVisibility' => '1',
    'navigationPosition' => '2',
    'navigationCSS' => '{"background-color":"rgba(255,255,255,0.9)","border-top-left-radius":"2px","border-top-right-radius":"2px","border-bottom-left-radius":"2px","border-bottom-right-radius":"2px"}',
    'navigationItemCSS' => '{"line-height":"45px","padding-left":"15px","padding-right":"15px","height":"46px","color":"#111111","text-decoration":"none","font-family":"Arial","font-size":"13px","text-align":"left","background-color:hover":"#f5f5f5","background-color:active":"#eeeeee"}',
    'navigationSelectedItemCSS' => '{"background-color":"#eeeeee"}',
    'navigationSubitemCSS' => '{"line-height":"45px","padding-left":"15px","padding-right":"15px","height":"46px","color":"111111","text-decoration":"none","font-family":"Arial","font-size":"13px","background-color":"#ffffff","background-color:hover":"#f5f5f5","background-color:active":"#eeeeee","text-align":"left"}',
    'navigationSelectedSubitemCSS' => '{"background-color":"#e1b8bc"}',
    'navigationContainerCSS' => '{"text-align":"center","max-width":"730px","margin-left":"auto","margin-right":"auto"}',

    'homePageSpecialContentBlockVisibility' => '0',
    'homePageSpecialContentBlockCSS' => '{"max-width":"760px","margin-left":"auto","margin-right":"auto","padding-top":"20px","padding-right":"20px","padding-bottom":"20px","padding-left":"20px","min-height":"300px"}',
    'homePageSpecialContentBlockContainerCSS' => '{}',

    'contentCSS' => '{"padding-top":"20px","padding-right":"15px","padding-bottom":"20px","padding-left":"15px","min-height":"300px"}',
    'contentContainerCSS' => '{"max-width":"760px","margin-left":"auto","margin-right":"auto"}',

    'footerVisibility' => '0',
    'footerCSS' => '{"max-width":"760px","margin-left":"auto","margin-right":"auto","padding-top":"20px","padding-right":"15px","padding-bottom":"20px","padding-left":"15px"}',
    'footerContainerCSS' => '{}',

    'bodyCSS' => '{"background-color":"#000000","background-image":"url(addon:bearcms\/universal-theme-addon:assets\/s20\/1.jpg)","background-position":"center center","background-repeat":"no-repeat","background-size":"cover","background-attachment":"fixed"}',

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

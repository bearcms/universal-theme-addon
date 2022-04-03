<?php

/*
 * Universal Theme addon for Bear CMS
 * https://github.com/bearcms/universal-theme-addon
 * Copyright (c) Amplilabs Ltd.
 * Free to use under the MIT license.
 */

$h1 = '"color":"#0ea2c9","font-family":"googlefonts:Roboto Slab","font-size":"26px","text-align":"center","line-height":"200%"';
$h2 = '"color":"#0ea2c9","font-family":"googlefonts:Roboto Slab","font-size":"20px","text-align":"center","line-height":"200%"';
$h3 = '"color":"#0ea2c9","font-family":"googlefonts:Roboto Slab","font-size":"16px","text-align":"center","line-height":"200%"';
$text = '"color":"#222222","font-family":"Tahoma","font-size":"13px","line-height":"200%"';
$input = '"color":"#000000","font-family":"Tahoma","font-size":"13px","line-height":"200%","padding-left":"15px","padding-right":"15px","padding-top":"10px","padding-bottom":"10px","width":"100%","border-top":"1px solid #cccccc","border-bottom":"1px solid #cccccc","border-left":"1px solid #cccccc","border-right":"1px solid #cccccc","border-top:hover":"1px solid #aaaaaa","border-bottom:hover":"1px solid #aaaaaa","border-left:hover":"1px solid #aaaaaa","border-right:hover":"1px solid #aaaaaa","border-top:active":"1px solid #888888","border-bottom:active":"1px solid #888888","border-left:active":"1px solid #888888","border-right:active":"1px solid #888888","border-top-left-radius":"2px","border-top-right-radius":"2px","border-bottom-left-radius":"2px","border-bottom-right-radius":"2px","background-color":"#fff"';
$link = '"color":"#1ab2db","color:hover":"#13a9d1","color:active":"#0ea2c9","font-family":"Tahoma","font-size":"13px","line-height":"200%","text-decoration":"underline"';
$image = '"border-top-left-radius":"2px","border-top-right-radius":"2px","border-bottom-left-radius":"2px","border-bottom-right-radius":"2px"';
$button = '"color":"#ffffff","font-family":"Tahoma","font-size":"13px","line-height":"42px","padding-left":"15px","padding-right":"15px","height":"42px","background-color":"#333333","background-color:hover":"#222222","background-color:active":"#111111","border-top-left-radius":"2px","border-top-right-radius":"2px","border-bottom-left-radius":"2px","border-bottom-right-radius":"2px"';
$date = '"color":"#888","font-family":"Tahoma","font-size":"12px","line-height":"200%"';
$userImage = '"width":"50px","height":"50px","margin-right":"12px","border-top-left-radius":"2px","border-top-right-radius":"2px","border-bottom-left-radius":"2px","border-bottom-right-radius":"2px"';
$separator = '"background-color":"#ccc","height":"2px","margin-top":"30px","margin-bottom":"30px","margin-left":"auto","margin-right":"auto"';

$getElementsStyles = function ($prefix) use ($text, $h1, $h2, $h3, $input, $link, $image, $button, $date, $userImage, $separator) {
    if ($prefix === 'footerElements') {
        $textStyle = ',"color":"#ffffff"';
        $h1 .= $textStyle;
        $h2 .= $textStyle;
        $h3 .= $textStyle;
        $text .= $textStyle;
        $link .= $textStyle . ',"color:hover":"#ffffff","color:active":"#ffffff"';
        $input .= ',"border-top":"","border-bottom":"","border-left":"","border-right":"","border-top:hover":"","border-bottom:hover":"","border-left:hover":"","border-right:hover":"","border-top:active":"","border-bottom:active":"","border-left:active":"","border-right:active":""';
        $separator .= ',"background-color":"#333"';
    }
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
        $prefix . 'CommentsTextInputCSS' => '{' . $input . ',"height":"100px"}',
        $prefix . 'CommentsSendButtonCSS' => '{' . $button . ',"margin-top":"10px"}',
        $prefix . 'CommentsShowMoreButtonCSS' => '{' . $link . ',"margin-bottom":"5px"}',
        $prefix . 'HtmlCSS' => '{' . $text . '}',
        $prefix . 'HtmlLinkCSS' => '{' . $link . '}',
        $prefix . 'BlogPostsPostTitleCSS' => '{' . $link . ',"font-family":"googlefonts:Roboto Slab","font-size":"22px"}',
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
    'headerCSS' => '{"max-width":"800px","margin-left":"auto","margin-right":"auto","padding-bottom":"30px","padding-top":"30px"}',
    'headerLogoImageCSS' => '{"max-width":"300px","margin-left":"auto","margin-right":"auto"}',
    'headerLogoImageContainerCSS' => '{"margin-bottom":"10px"}',
    'headerTitleVisibility' => '1',
    'headerTitleCSS' => '{"font-family":"googlefonts:Roboto Slab","font-size":"30px","color":"#333333","padding-top":"13px","padding-bottom":"15px","padding-left":"20px","padding-right":"20px"}',
    'headerTitleContainerCSS' => '{"margin-top":"15px","margin-bottom":"15px","text-align":"center"}',
    'headerDescriptionVisibility' => '1',
    'headerDescriptionCSS' => '{"font-family":"googlefonts:Roboto Slab","font-size":"15px","color":"#777777","padding-top":"0px","padding-bottom":"15px","padding-left":"20px","padding-right":"20px"}',
    'headerDescriptionContainerCSS' => '{"margin-bottom":"15px","text-align":"center"}',
    'headerContainerCSS' => '{"padding-left":"10px","padding-right":"10px"}',

    'navigationVisibility' => '1',
    'navigationPosition' => '1',
    'navigationCSS' => '{"max-width":"800px","margin-left":"auto","margin-right":"auto","text-align":"center"}',
    'navigationItemCSS' => '{"line-height":"60px","padding-left":"20px","padding-right":"20px","height":"60px","color":"#333333","color:hover":"#ffffff","background-color:hover":"#1ab2db","background-color:active":"#13a9d1","text-decoration":"none","font-family":"Tahoma","font-size":"13px","text-align":"left"}',
    'navigationSelectedItemCSS' => '{"color":"#ffffff","background-color":"#24C0EB","background-color:hover":"#24C0EB"}',
    'navigationSubitemCSS' => '{"line-height":"43px","padding-left":"20px","padding-right":"20px","height":"44px","color":"#ffffff","color:hover":"#ffffff","color:active":"#ffffff","text-decoration":"none","font-family":"Tahoma","font-size":"13px","background-color":"#1ab2db","background-color:hover":"#13a9d1","background-color:active":"#0ea2c9","text-align":"left"}',
    'navigationSelectedSubitemCSS' => '{"background-color":"#333333"}',
    'navigationContainerCSS' => '{"background-color":"#ffffff","box-shadow":"0 0 4px rgba(0,0,0,0.3)","border-top":"4px solid #24C0EB"}',

    'homePageSpecialContentBlockVisibility' => '1',
    'homePageSpecialContentBlockCSS' => '{"padding-top":"20px","padding-right":"20px","padding-bottom":"20px","padding-left":"20px","background-color":"#ffffff","border-top-left-radius":"3px","border-top-right-radius":"3px","border-bottom-left-radius":"3px","border-bottom-right-radius":"3px","box-shadow":"0 0 4px rgba(0,0,0,0.3)"}',
    'homePageSpecialContentBlockContainerCSS' => '{"max-width":"800px","margin-left":"auto","margin-right":"auto","margin-bottom":"30px","padding-left":"10px","padding-right":"10px"}',

    'contentCSS' => '{"padding-top":"20px","padding-right":"20px","padding-bottom":"20px","padding-left":"20px","min-height":"300px"}',
    'contentContainerCSS' => '{"max-width":"800px","margin-left":"auto","margin-right":"auto"}',

    'footerVisibility' => '1',
    'footerCSS' => '{"max-width":"800px","margin-left":"auto","margin-right":"auto","padding-top":"20px","padding-right":"20px","padding-bottom":"20px","padding-left":"20px"}',
    'footerContainerCSS' => '{"background-color":"#111111"}',

    'bodyCSS' => '{"background-color":"#f5f5f5"}',

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

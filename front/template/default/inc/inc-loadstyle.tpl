
{* <!-- CSS SOURCE -->
<link rel="stylesheet" type="text/css" href="{$template}/assets/css/import.css">
<link rel="stylesheet" type="text/css" href="{$template}/assets/css/source.css{$lastModify}">

<!-- CSS MODIFY -->
<link rel="stylesheet" type="text/css" href="{$template}/assets/css/modify.css{$lastModify}">

{strip}
    {if {$assigncss|default:null}}
        {foreach $assigncss as $addAssetCss}
            {$addAssetCss}
        {/foreach}
    {/if}
{/strip} *}

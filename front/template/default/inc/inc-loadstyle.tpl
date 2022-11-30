
<!-- Core -->
<link rel="stylesheet" href="{$template}/assets/css/plugin/bootstrap.min.css">
<!-- <link rel="stylesheet" href="{$template}/assets/css/plugin/bootstrap-5.min.css"> -->
<link rel="stylesheet" href="{$template}/assets/css/plugin/normalize.min.css">
<link rel="stylesheet" href="{$template}/assets/css/plugin/animate.min.css">
<link rel="stylesheet" href="{$template}/assets/css/plugin/animate.min.css">
<link rel="stylesheet" href="{$template}/assets/css/plugin/select2.min.css">
<link rel="stylesheet" href="{$template}/assets/css/plugin/slick.css">
<link rel="stylesheet" href="sweetalert2.min.css">


<!-- Custom -->
<link rel="stylesheet" type="text/css" href="{$template}/assets/css/style.css{$lastModify}">

<!-- Modify -->
<link rel="stylesheet" type="text/css" href="{$template}/assets/css/modify.css{$lastModify}">

{strip}
    {if {$assigncss|default:null}}
        {foreach $assigncss as $addAssetCss}
            {$addAssetCss}
        {/foreach}
    {/if}
{/strip}


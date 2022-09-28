{* <!-- JS SOURCE -->
<script src="{$template}/assets/js/jquery-2.1.4.min.js"></script>
<script src="{$template}/assets/js/popper.min.js"></script>
<script src="{$template}/assets/js/jquery-ui.min.js"></script>
<script src="{$template}/assets/js/jquery.ui.touch-punch.min.js"></script>
<script src="{$template}/assets/js/jquery.easing-1.3.min.js"></script>
<script src="{$template}/assets/js/modernizr-3.6.0.min.js"></script>
<script src="{$template}/assets/js/bootstrap.min.js"></script>
<script src="{$template}/assets/js/validator.min.js"></script>
<script src="{$template}/assets/js/wow.min.js"></script>
<script src="{$template}/assets/js/select2.min.js"></script>
<script src="{$template}/assets/js/jquery.fancybox.min.js"></script>
<script src="{$template}/assets/js/jquery.mCustomScrollbar.min.js"></script>
<script src="{$template}/assets/js/slick.js"></script>
<script src="{$template}/assets/js/lazyload.min.js"></script>
<script src="{$template}/assets/js/trunk8.min.js"></script>
<script src="{$template}/assets/js/jquery.matchHeight-min.js"></script> 
<script src="{$template}/assets/js/jquery.sticky-sidebar.min.js"></script>
<script src="{$template}/assets/js/sticky-sidebar.min.js"></script>
<script src="{$template}/assets/js/resizesensor.js"></script>
<script src="{$template}/assets/js/aos.js"></script>
<script src="{$template}/assets/js/swiper-bundle.min.js"></script>

<!-- JS MAIN -->
<script src="{$template}/assets/js/main.js{$lastModify}"></script>

<!-- JS DEV -->
<script src="{$template}/assets/js/dev.js{$lastModify}"></script>

<!-- JS PDPA -->
<script src="{$template}/assets/js/cookie.js{$lastModify}"></script>
<script src="{$template}/assets/js/pdpa.js{$lastModify}"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<!-- JS SWEETAERT -->
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>
	var raf = window.requestAnimationFrame || window.mozRequestAnimationFrame || window.webkitRequestAnimationFrame || window.msRequestAnimationFrame;
</script>

{strip}
    {if {$assignjs|default:null}}
        {foreach $assignjs as $addAssetScript}
            {$addAssetScript}
        {/foreach}
    {/if}
{/strip} *}
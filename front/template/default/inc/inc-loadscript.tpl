<!-- Core -->

<script src="{$template}/assets/js/jquery-2.2.4.js"></script>
<script src="{$template}/assets/js/jquery.easing.min.js"></script>
<script src="{$template}/assets/js/modernizr.min.js"></script>
<script src="{$template}/assets/js/popper.min.js"></script>
<script src="{$template}/assets/js/bootstrap.min.js"></script>
<script src="{$template}/assets/js/validator.min.js"></script>
<script src="{$template}/assets/js/jquery.lazyload.min.js"></script>
<script src="{$template}/assets/js/slick-vdo.js"></script>
<script src="{$template}/assets/js/slick.js"></script>
<script src="{$template}/assets/js/slick.min.js"></script>
<script src="{$template}/assets/js/aos.js"></script>
<script src="{$template}/assets/js/select2.min.js"></script>

<script src="{$template}/assets/js/jquery.fancybox.min.js"></script>
<script src="{$template}/assets/js/sweetalert2@11.js"></script>

<script src="{$template}/assets/plugin/fullcalendar/lib/moment.min.js"></script>
<script src="{$template}/assets/plugin/fullcalendar/fullcalendar.min.js"></script>
<script src="{$template}/assets/plugin/fullcalendar/locale/th.js"></script>
<script src="{$template}/assets/plugin/fullcalendar/locale/th.js"></script>

<!-- Custom -->
<script src="{$template}/assets/js/fontsize.js{$lastModify}"></script>
<script src="{$template}/assets/js/theme-style.js{$lastModify}"></script>
<script src="{$template}/assets/js/main.js{$lastModify}"></script>
<script src="{$template}/assets/js/calendar.js{$lastModify}"></script>
<!-- JS PDPA -->
<script src="{$template}/assets/js/cookie.js{$lastModify}"></script>
<script src="{$template}/assets/js/pdpa.js{$lastModify}"></script>

<script type="text/javascript">var raf = window.requestAnimationFrame || window.mozRequestAnimationFrame || window.webkitRequestAnimationFrame || window.msRequestAnimationFrame;</script>

{strip}
    {if {$assignjs|default:null}}
        {foreach $assignjs as $addAssetScript}
            {$addAssetScript}
        {/foreach}
    {/if}
{/strip}
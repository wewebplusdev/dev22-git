$(document).ready(function() {

    jQuery(function() {
        var classFontSize = new Array();
        var txtFontSize = new Array();
        var nameClassFont = new Array();

        nameClassFont.push('body');
        nameClassFont.push('.typo-s');
        nameClassFont.push('.typo-xs');
        nameClassFont.push('.typo-sm');
        nameClassFont.push('.typo-md');
        nameClassFont.push('.typo-lg');
        nameClassFont.push('.typo-xl');
        nameClassFont.push('.typo-default');
        nameClassFont.push('.site-header .text-size .txt');
        nameClassFont.push('.site-header .text-color .txt');
        nameClassFont.push('.site-header .text-color .link');
        nameClassFont.push('.site-header .social-list .txt');
        nameClassFont.push('.btn')
        nameClassFont.push('.control-label')
        nameClassFont.push('input')
        nameClassFont.push('.select2-selection__rendered')
        nameClassFont.push('.title')
        nameClassFont.push('.subtitle')
        nameClassFont.push('.desc')
        nameClassFont.push('.profile-name')
        nameClassFont.push('.profile-position')
        nameClassFont.push('.profile-timeline')
        nameClassFont.push('.profile-contact')
        nameClassFont.push('.url')
        nameClassFont.push('.top-graphic .wrapper .breadcrumb .breadcrumb-item a')
        nameClassFont.push('.default-nav-slider .item a')
        nameClassFont.push('.default-tab-slider .slick-list .item .tab-block a')
        nameClassFont.push('.news-block .typo-xs')
        nameClassFont.push('.pagination-block .pagination-label')
        nameClassFont.push('.pagination li a')
        nameClassFont.push('.txt')
        nameClassFont.push('')
        nameClassFont.push('')
        nameClassFont.push('')
        nameClassFont.push('')
        nameClassFont.push('')
        nameClassFont.push('')
        nameClassFont.push('')
        nameClassFont.push('')
        nameClassFont.push('')
        nameClassFont.push('')
        nameClassFont.push('')
        nameClassFont.push('')
        nameClassFont.push('')
        nameClassFont.push('')
        nameClassFont.push('')
        nameClassFont.push('')
        nameClassFont.push('')
        nameClassFont.push('')
        nameClassFont.push('')
        nameClassFont.push('')
        nameClassFont.push('')
        nameClassFont.push('')
        nameClassFont.push('')


        nameClassFont.push('.site-header .nav-list > li a');


        for (var i = 0; i < nameClassFont.length; i++) {
            classFontSize.push(nameClassFont[i]);
            txtFontSize.push(parseInt($(nameClassFont[i]).css('font-size')));
        }

        $('a.size-small').click(function() {
            for (var i = 0; i < classFontSize.length; i++) {
                $(classFontSize[i]).css("font-size", txtFontSize[i] + "px");
            }
            $(this).parent().addClass('active');
            $('a.size-medium').parent().removeClass('active');
            $('a.size-large').parent().removeClass('active');
            $('.overflow-line-1').trunk8({
                lines: 1,
                tooltip: false
            });
            $('.overflow-line-2').trunk8({
                lines: 2,
                tooltip: false
            });
            $('.overflow-line-3').trunk8({
                lines: 3,
                tooltip: false
            });
            $('.overflow-line-4').trunk8({
                lines: 4,
                tooltip: false
            });
        });

        $('a.size-medium').click(function() {
            for (var i = 0; i < classFontSize.length; i++) {
                $(classFontSize[i]).css("font-size", (txtFontSize[i] + parseInt(1)) + "px");
            }
            $(this).parent().addClass('active');
            $('a.size-small').parent().removeClass('active');
            $('a.size-large').parent().removeClass('active');
            $('.overflow-line-1').trunk8({
                lines: 1,
                tooltip: false
            });
            $('.overflow-line-2').trunk8({
                lines: 2,
                tooltip: false
            });
            $('.overflow-line-3').trunk8({
                lines: 3,
                tooltip: false
            });
            $('.overflow-line-4').trunk8({
                lines: 4,
                tooltip: false
            });
        });

        $('a.size-large').click(function() {
            for (var i = 0; i < classFontSize.length; i++) {
                $(classFontSize[i]).css("font-size", (txtFontSize[i] + parseInt(2)) + "px");
            }
            $(this).parent().addClass('active');
            $('a.size-small').parent().removeClass('active');
            $('a.size-medium').parent().removeClass('active');
            $('.overflow-line-1').trunk8({
                lines: 1,
                tooltip: false
            });
            $('.overflow-line-2').trunk8({
                lines: 2,
                tooltip: false
            });
            $('.overflow-line-3').trunk8({
                lines: 3,
                tooltip: false
            });
            $('.overflow-line-4').trunk8({
                lines: 4,
                tooltip: false
            });
        });
    });

});
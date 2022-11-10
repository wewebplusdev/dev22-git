$(function(){
	"use strict";
    var origin_url = base+base_url_lang;
	$.embed={
		copyToClipboard:function(element){
			var self=this;
            var $temp = $("<input>");
            $("body").append($temp);
            $temp.val($(element).val()).select();
            document.execCommand("copy");
            $temp.remove();
            $('.alert-success').show();

		},
		init:function(){
			var self=this;
			$('.embed-code').on('click',function(){
                var embed_url = $(this).attr("embed-url");
                var embed_type = $(this).attr("embed-type");
                $(".dropdown-menu").remove();
                var  html = '<div class="dropdown-menu dropdown-menu-right">';
                html += '<div class="embed-title-bar">';
                html += '<div class="embed-label">';
                html += '<div class="style-scope yt-sharing-embed-renderer">Embed '+embed_type+' </div>';
                html += '<div class="embed-close">X</div>';
                html += '</div>';
                html += '</div>';
                html += '<textarea id="txt-embed-code" class="form-control" name="txtEmbedCode" rows="4" cols="50">';
                html += '<iframe name="'+embed_type+'" frameborder="0" src="'+embed_url+'" title="'+embed_type+' player" width="560" height="315" frameborder="1" scrolling="no" allowfullscreen allowautotransparency=true></iframe>';
                html += '</textarea>';
                html += '<div class="action-buttons">';
                html += '<button type="button" class="embed-copy btn-light">Copy</button>';
                html += '</div>';
                html += '<div class="alert alert-success" style="position: absolute;bottom: 10px;display:none;" role="alert">';
                html += 'Copied to clipboard.';
                html += '</div>';
                html += '</div>';
                $(this).after(html);
                $(".dropdown-menu").show();
                /*$( ".dropdown-menu" ).off().mouseleave(function() {
                    $(".dropdown-menu").remove();
                });*/
                $('.embed-close').off().on('click',function(){
                    $(".dropdown-menu").remove();
                });
                $('.embed-copy').off().on('click',function(){
                    $('.alert-success').hide();
                    self.copyToClipboard('#txt-embed-code');
                });
			});

		}
	};
	$.embed.init();
});

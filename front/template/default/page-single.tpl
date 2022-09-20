

{if $fileInclude|default:null}
   {include file="{$fileInclude|templateInclude:$settemplate}" title=pageContent}
   {* <script src="{$template}/assets/js/main.js{$lastModify}"></script> *}
{/if}

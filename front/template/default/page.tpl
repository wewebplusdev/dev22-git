
<!DOCTYPE html>
<html lang="{$langon}">
<head>
    {include file="{$incfile.metatag}" title=title}
    {include file="{$incfile.style}" title=title}
</head>
    <body class="{$themeWebsite.class}">
    {include file="{$incfile.preloader}" title=title}
    <div class="global-container">
        {* {include file="{$themeWebsite.header}" title=title} *}
        {include file="{$headerBody|default:$themeWebsite.header}" title=title}
        {include file="{$fileInclude|templateInclude}" title=pageContent}
        {* {include file="{$themeWebsite.footer}" title=title} *}
        {include file="{$footerBody|default:$themeWebsite.footer}" title=title}
        
        {$arr_ChatFB|htmlspecialchars_decode}
    </div>
    {include file="{$incfile.pdpa}" title=title}
    {include file="{$incfile.loadscript}" title=title}
    {include file="{$incfile.modal}" title=title}
    {include file="{$incfile.popup}" title=title}
    </body>
</html>
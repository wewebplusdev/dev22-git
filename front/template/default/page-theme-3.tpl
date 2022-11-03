
<!DOCTYPE html>
<html lang="{$langon}">
<head>
    {include file="{$incfile.metatag}" title=title}
    {include file="{$incfile.style}" title=title}
</head>
    <body class="theme-3">
    {include file="{$incfile.preloader}" title=title}
    <div class="global-container">
        {include file="{$incfile.header3}" title=title}
        {include file="{$fileInclude|templateInclude}" title=pageContent}
        {include file="{$incfile.footer3}" title=title}
    </div>
    {include file="{$incfile.pdpa}" title=title}
    {include file="{$incfile.loadscript}" title=title}
    {include file="{$incfile.modal}" title=title}
    {include file="{$incfile.popup}" title=title}
    </body>
</html>
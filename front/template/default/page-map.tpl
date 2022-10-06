
<!DOCTYPE html>
<html lang="{$langon}">
<head>
    {include file="{$incfile.metatag}" title=title}
    {include file="{$incfile.style}" title=title}
    <style>
      html,
      body {
          height: initial;
      }
    </style>
</head>
    <body>
    <div class="global-container">
        {include file="{$incfile.header}" title=title}
        {include file="{$fileInclude|templateInclude}" title=pageContent}
    </div>
    {include file="{$incfile.loadscript}" title=title}
    </body>
</html>
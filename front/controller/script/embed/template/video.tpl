{include file="{$incfile.metatag}" title=title}
{include file="{$incfile.style}" title=title}

<div class="youtube-block">
        <video width="100%"  controls>
            <source src="{$fullpath_vdo}">
            Your browser does not support the video tag.
        </video>    
</div>

{include file="{$incfile.loadscript}" title=title}
{include file="{$incfile.modal}" title=title}
{include file="{$incfile.popup}" title=title}

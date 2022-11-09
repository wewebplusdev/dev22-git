{include file="{$incfile.metatag}" title=title}
{include file="{$incfile.style}" title=title}

<div class="default-page online-services">
    <div class="container">

        <div class="default-page about">
            <div class="container">
                <div class="gallery-list">
                    <ul class="item-list">
                        
                        {foreach $albumCMSImageURL as $key => $image}
                            <li>
                                <a href="{$image}" class="link" data-fancybox="gallery">
                                    <figure class="cover">
                                        <img src="{$image}" alt="gallery thumbnail">
                                    </figure>
                                </a>
                            </li>
                        {/foreach}

                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

{include file="{$incfile.loadscript}" title=title}
{include file="{$incfile.modal}" title=title}
{include file="{$incfile.popup}" title=title}
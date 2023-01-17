<section class="site-container" style="background-color: #{$themeWebsite.color|default:'#FFFFF'};">
<div class="top-graphic">
    <div class="slider">
        {foreach $callTopGraphic as $keycallTopGraphic => $valuecallTopGraphic}
         <a {if $valuecallTopGraphic['url'] neq "" && $valuecallTopGraphic['url'] neq "#"}href="{$valuecallTopGraphic['url']}"{if $valuecallTopGraphic['target'] eq 2}target="_blank"{/if}{else}href="javascript:void(0);"{/if} class="link">
            <div class="tpg-item">
                <figure class="cover">
                    <img src="{$valuecallTopGraphic['pic']|fileinclude:"real":{$valuecallTopGraphic['masterkey']}:"link"}" alt="{$valuecallTopGraphic.pic}">
                </figure>
                <div class="info">
                    <div class="container">
                        <div class="wrapper">
                            {* {if $valuecallTopGraphic['subject'] neq ""}
                                <div class="title text-limit -x3">
                                    {$valuecallTopGraphic['subject']}
                                </div>
                            {/if}
                            {if $valuecallTopGraphic['title'] neq ""}
                                <div class="desc text-limit -x3">
                                    {$valuecallTopGraphic['title']}
                                </div>
                            {/if}
                            {if $valuecallTopGraphic['url'] neq "" && $valuecallTopGraphic['url'] neq "#"}
                            <a {if $valuecallTopGraphic['url'] neq "" && $valuecallTopGraphic['url'] neq "#"}href="{$valuecallTopGraphic['url']}"{if $valuecallTopGraphic['target'] eq 2}target="_blank"{/if}{else}href="javascript:void(0);"{/if} class="btn btn-border-light" title="btn btn-primary">{$lang['system']['viewmore']}</a>
                            {/if} *}
                        </div>
                    </div>
                </div>
            </div>
             </a>
        {/foreach}
    </div>
</div>
{if $callAnnouncer->_numOfRows gte 1}
    <!-- Home Notice and Search -->
    <div class="notice-search">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="home-notice">
                    <div class="title">
                        {* {$listNews.0.group.subject|rechangeQuot2} *}
                        <img src="front/template/default/assets/img/icon/icon-home-notice.png" alt="announcer">
                    </div>
                    <div class="notice-slide">
                        {foreach $callAnnouncer as $keycallAnnouncer => $valuecallAnnouncer}
                          {if $valuecallAnnouncer['url'] neq "" && $valuecallAnnouncer['url'] neq "#"}
                            <div class="text"><a href="{$valuecallAnnouncer['url']}" {if $valuecallAnnouncer['target'] eq 2}target="_blank"{/if} style="text-decoration: none;">{$valuecallAnnouncer['title']}</a></div>
                          {/if}
                          {/foreach}
    
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
{/if}

{if $callservice_top->_numOfRows gte 1}
    <div class="default-nav">
        <div class="row no-gutters">
            <div class="col-xl-2 col-md-3 col-sm-4 col-5">
                <div class="topic">
                    <div class="title">
                        {$lang['menu']['service']}
                    </div>
                </div>
            </div>
            <div class="col-xl-8 col-md-9 col-sm-8 col-7">
                <div class="slider">
                    {foreach $callservice_top as $keycallservice_top => $valuecallservice_top}
                        <div class="item-">
                            {* <a {if $valuecallservice_top['url'] neq "" && $valuecallservice_top['url'] neq "#"}href="{$valuecallservice_top['url']}"{if $valuecallservice_top['target'] eq 2}target="_blank"{/if}{else}href="javascript:void(0);"{/if} class="link {if $keycallservice_top eq 0}active{/if}" title="{$valuecallservice_top['subject']}">
                                <div class="wrapper">
                                    <div class="icon">
                                        <img src="{$valuecallservice_top['pic']|fileinclude:"real":{$valuecallservice_top['masterkey']}:"link"}" alt="{$valuecallservice_top['subject']}">
                                    </div>
                                    <div class="txt">
                                        {$valuecallservice_top['subject']}
                                    </div>
                                </div>
                            </a> *}
                            <a href="{$ul}/service/264" class="link" title="ตรวจสอบอัญมณี">
                                <figure class="cover">
                                    <img src="https://localhost/dev22-git/front/template/default/assets/img/static/no-img.jpg" alt="pic-20222912-1672287266-226.png">
                                </figure>
                            </a>
                        </div>
                    {/foreach}
                </div>
            </div>
        </div>
    </div>
{/if}

<div class="container">
    {foreach $sectionMainpage as $keysectionMainpage => $valuesectionMainpage}
        {include file={$valuesectionMainpage.file}}
    {/foreach}
</div>

</section>
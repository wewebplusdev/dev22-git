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
                <div class="item-">
                    <a href="{$ul}/service/262" class="link active" title="{$lang['service']['menu1']}">
                        <div class="wrapper">
                            <div class="icon">
                                <img src="front/template/default/assets/img/icon/ตรวจสอบอัญมณี.png" alt="ตรวจสอบอัญมณี">
                            </div>
                            <div class="txt">
                                {$lang['service']['menu1']}
                            </div>
                        </div>
                    </a>
                </div>
                <div class="item-">
                    <a href="{$ul}/service/263" class="link" title="{$lang['service']['menu2']}">
                        <div class="wrapper">
                            <div class="icon">
                                <img src="front/template/default/assets/img/icon/ตรวจสอบโลหะมีค่า.png" alt="ตรวจสอบโลหะมีค่า">
                            </div>
                            <div class="txt">
                                {$lang['service']['menu2']}
                            </div>
                        </div>
                    </a>
                </div>
                <div class="item-">
                    <a href="{$ul}/service/264" class="link" title="{$lang['service']['menu3']}">
                        <div class="wrapper">
                            <div class="icon">
                                <img src="front/template/default/assets/img/icon/ศูนย์ให้คำปรึกษา.png" alt="ศูนย์ให้คำปรึกษา">
                            </div>
                            <div class="txt">
                                {$lang['service']['menu3']}
                            </div>
                        </div>
                    </a>
                </div>
                <div class="item-">
                    <a href="{$ul}/service/265" class="link" title="{$lang['service']['menu4']}">
                        <div class="wrapper">
                            <div class="icon">
                                <img src="front/template/default/assets/img/icon/เครื่องมือ.png" alt="เครื่องมือ">
                            </div>
                            <div class="txt">
                                {$lang['service']['menu4']}
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container">
    {foreach $sectionMainpage as $keysectionMainpage => $valuesectionMainpage}
        {include file={$valuesectionMainpage.file}}
    {/foreach}
</div>

</section>
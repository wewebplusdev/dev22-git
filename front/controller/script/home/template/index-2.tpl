<section class="site-container" style="background-color: #{$themeWebsite.color|default:'#FFFFF'};">
  <div class="main-page">

    <div class="top-graphic">

      <div class="default-slider-dots slider">
        {foreach $callTopGraphic as $keycallTopGraphic => $valuecallTopGraphic}
          <div class="tpg-item">
            <a {if $valuecallTopGraphic['url'] neq "" && $valuecallTopGraphic['url'] neq "#"}href="{$valuecallTopGraphic['url']}"{if $valuecallTopGraphic['target'] eq 2}target="_blank" {/if}{else}href="javascript:void(0);"{/if} class="link">
              <figure class="cover">
                <img src="{$valuecallTopGraphic['pic']|fileinclude:"real":{$valuecallTopGraphic['masterkey']}:"link"}"
                  alt="{$valuecallTopGraphic.pic}" alt="top graphic">
              </figure>
              <div class="info">
                <div class="container">
                  <div class="wrapper">
                    {if $valuecallTopGraphic['subject'] neq ""}
                      <div class="title text-limit -x2">
                        {$valuecallTopGraphic['subject']}
                      </div>
                    {/if}
                    <div class="row align-items-end">
                      {if $valuecallTopGraphic['title'] neq ""}
                        <div class="col-md">
                          <div class="desc text-limit -x2">
                            {$valuecallTopGraphic['title']}
                          </div>
                        </div>
                      {/if}
                      {if $valuecallTopGraphic['url'] neq "" && $valuecallTopGraphic['url'] neq "#"}
                        <div class="col-md-auto">
                          <button
                            {if $valuecallTopGraphic['url'] neq "" && $valuecallTopGraphic['url'] neq "#"}href="{$valuecallTopGraphic['url']}"
                              {if $valuecallTopGraphic['target'] eq 2}target="_blank" {/if}{else}href="javascript:void(0);"
                            {/if} class="btn btn-border-light"
                            title="btn btn-primary">{$lang['system']['viewmore']}</button>
                        </div>
                      {/if}
                    </div>
                  </div>
                </div>
              </div>
            </a>
          </div>
        {/foreach}
      </div>
    </div>
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
                                <div class="text"><a href="{$valuecallAnnouncer['url']}" style="text-decoration: none;">{$valuecallAnnouncer['title']}</a></div>
                              {/if}
                              {/foreach}

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    {foreach $sectionMainpage as $keysectionMainpage => $valuesectionMainpage}
      {include file={$valuesectionMainpage.file}}
    {/foreach}
  </div>

</section>
<section class="site-container" style="background-color: #{$themeWebsite.color|default:'#FFFFF'};">
  <div class="main-page">

    <div class="top-graphic">
      <div class="default-slider-dots slider">
      {foreach $callTopGraphic as $keycallTopGraphic => $valuecallTopGraphic}
        <div class="tpg-item">
          <a {if $valuecallTopGraphic['url'] neq "" && $valuecallTopGraphic['url'] neq "#"}href="{$valuecallTopGraphic['url']}"{if $valuecallTopGraphic['target'] eq 2}target="_blank"{/if}{else}href="javascript:void(0);"{/if} class="link">
              <figure class="cover">
                  <img src="{$valuecallTopGraphic['pic']|fileinclude:"real":{$valuecallTopGraphic['masterkey']}:"link"}" alt="{$valuecallTopGraphic.pic}">
              </figure>
              <div class="info">
                  <div class="container -lg">
                      <div class="wrapper">
                        {if $valuecallTopGraphic['subject'] neq ""}
                        <div class="title text-limit -x3">
                          {$valuecallTopGraphic['subject']}
                        </div>
                        {/if}
                        <div class="border-topic"></div>
                        {if $valuecallTopGraphic['title'] neq ""}
                        <div class="desc text-limit -x3">
                          {$valuecallTopGraphic['title']}
                        </div>
                        {/if}
                        {if $valuecallTopGraphic['url'] neq "" && $valuecallTopGraphic['url'] neq "#"}
                        <button {if $valuecallTopGraphic['url'] neq "" && $valuecallTopGraphic['url'] neq "#"}href="{$valuecallTopGraphic['url']}"{if $valuecallTopGraphic['target'] eq 2}target="_blank"{/if}{else}href="javascript:void(0);"{/if} class="btn btn-primary" title="btn btn-primary">{$lang['system']['viewmore']}</button>
                        {/if}

                        <!-- CK Editor -->
                        {* {strip}
                          {$valuecallTopGraphic.htmlfilename|fileinclude:"html":$valuecallTopGraphic.masterkey|callHtml}
                        {/strip} *}
                        <!-- CK Editor -->
                        
                        {* <div class="git-update-content">
                            <div class="row align-items-center">
                                <div class="col-sm-auto">
                                    <button href="" class="btn btn-primary" title="btn btn-primary">GIT UPDATE</button>
                                </div>
                                <div class="col-sm">
                                    <div class="desc text-limit -x1">
                                        GIT แนะผู้บริโภคเรียกดูใบรับรอง ก่อนซื้ออัญมณีออนไลน์ และเครื่องประดับแห่งชาติ (องค์การมหาชน) พ.ศ. 2546
                                    </div>
                                </div>
                            </div>
                        </div> *}
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
                            <img src="front/assets/img/new/icon/icon-home-notice.png" alt="announcer">
                        </div>
                        <div class="notice-slide">
                            {* {foreach $listNews.0.listcontent as $showContent_0} *}
                               <!-- Start Type Detail -->
                               {* {assign var=typedetail value=$showContent_0.typedetail}
                               {if $typedetail == 1} *}

                               <!-- 1 -->
                                {* {assign var=valDetailUrl value=$showContent_0.urldetail}
                                {assign var=valDetailTragetType value=$showContent_0.typetraget}
                                    {if $valDetailTragetType == 1}
                                        {assign var=valDetailTraget value="_parent"}
                                     {else}
                                        {assign var=valDetailTraget value="_blank"}
                                     {/if}
                               {else} *}

                                 <!-- 2-->
                                {* {assign var=valDetailUrl value="{$langPage}/news/detail/{$showContent_0.id}"}
                                {assign var=valDetailTraget value="_parent"}

                               {/if} *}
                               <!-- End Type Detail -->

                                {* <div class="text"><a href="{$valDetailUrl}" title="{$showContent_0.subject|rechangeQuot2}"  target="{$valDetailTraget}">{$showContent_0.subject|rechangeQuot2}</a></div>
                                {/foreach} *}

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
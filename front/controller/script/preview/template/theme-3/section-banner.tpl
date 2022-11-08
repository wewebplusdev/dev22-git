{if $callBannerSection->_numOfRows gte 1}
  <div class="banner-block">
      <div class="slider">
          {foreach $callBannerSection as $keycallBannerSection => $valuecallBannerSection}
              <div>
                  <div class="box">
                      <div class="row no-gutters align-items-center" style="height: 100%;">
                          <div class="col-6">
                              <div class="inner">
                                  <div class="title text-limit -x2">
                                      {$valuecallBannerSection.subject}
                                  </div>
                                  <div class="desc text-limit -x3">
                                      {$valuecallBannerSection.title}
                                  </div>
                                  <a {if $valuecallBannerSection['url'] neq "" && $valuecallBannerSection['url'] neq "#"}href="{$valuecallBannerSection['url']}"{if $valuecallBannerSection['target'] eq 2}target="_blank"{/if}{else}href="javascript:void(0);"{/if} class="btn btn-light" title="{$lang['system']['viewmore']}">{$lang['system']['viewmore']}</a>
                              </div>
                          </div>
                          <div class="col-6">
                              <div class="graphic">
                                  <img src="{$valuecallBannerSection['pic']|fileinclude:"real":{$valuecallBannerSection['masterkey']}:"link"}" alt="{$valuecallBannerSection.subject}">
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          {/foreach}
      </div>
  </div>
{/if}
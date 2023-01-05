{if $callWeblinkSection->_numOfRows gte 1}
  <div class="weblink-block">
    <div class="container">
      <div class="row align-items-center gutters-10">
        <div class="col">
          <div class="title typo-xl fw-medium text-uppercase">GIT WEBLINK</div>
        </div>
        <div class="col-auto">
          <div class="action" style="display: none;">
            <a href="javascript:void(0);" class="btn btn-border-light"
              title="{$lang['system']['viewsall']}">{$lang['system']['viewsall']}</a>
          </div>
        </div>
      </div>
      <div class="weblink-list">
        <div class="default-slider default-slider-dots slider">
          {foreach $callWeblinkSection as $keycallWeblinkSection => $valuecallWeblinkSection}
            <div class="item">
              <a {if $valuecallWeblinkSection['url'] neq "" && $valuecallWeblinkSection['url'] neq "#"}href="{$valuecallWeblinkSection['url']}"{if $valuecallWeblinkSection['target'] eq 2}target="_blank"{/if}{else}href="javascript:void(0);"{/if} class="link" title="{$valuecallWeblinkSection.subject}">
                <div class="thumbnail">
                  <figure class="cover">
                    <img src="{$valuecallWeblinkSection['pic']|fileinclude:"real":{$valuecallWeblinkSection['masterkey']}:"link"}" alt="{$valuecallWeblinkSection.subject}">
                  </figure>
                </div>
              </a>
            </div>
          {/foreach}
        </div>
      </div>
    </div>
  </div>
{/if}
{if $callWeblinkSection->_numOfRows gte 1}
  <div class="weblink-block">
      <div class="default-header-block">
          <div class="h-title">
              GIT WEBLINK
          </div>
      </div>
      <div class="slider default-slider">
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
{/if}
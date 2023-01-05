{if $callWeblinkSection->_numOfRows gte 1}
  <div class="git-e-Learning-block">
    <div class="container -xl">
      <div class="h-title text-uppercase text-center text-light">
        GIT e-Learning
      </div>
      <div class="default-slider default-slider-dots slider">
        {foreach $callWeblinkSection as $keycallWeblinkSection => $valuecallWeblinkSection}
          <div class="item">
            <a {if $valuecallWeblinkSection['url'] neq "" && $valuecallWeblinkSection['url'] neq "#"}href="{$valuecallWeblinkSection['url']}"{if $valuecallWeblinkSection['target'] eq 2}target="_blank"{/if}{else}href="javascript:void(0);"{/if} class="link" title="{$valuecallWeblinkSection.subject}">
              <figure class="cover">
                <img src="{$valuecallWeblinkSection['pic']|fileinclude:"real":{$valuecallWeblinkSection['masterkey']}:"link"}" alt="{$valuecallWeblinkSection.subject}">
              </figure>
            </a>
          </div>
        {/foreach}
      </div>
      <div class="action" style="display: none;">
        <a href="javascript:void(0);" class="btn btn-border-light" title="{$lang['system']['viewsall']}">{$lang['system']['viewsall']}</a>
      </div>
    </div>
  </div>
{/if}
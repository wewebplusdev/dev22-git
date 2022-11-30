{if $callKmSection->_numOfRows gte 1}
  <div class="knowledge-block">
      <div class="default-header-block">
          <div class="h-title">
              {$lang['home']['km']}
          </div>
          <a href="" class="link" title="{$lang['system']['viewsall']}">
              {$lang['system']['viewsall']}
          </a>
      </div>
      <div class="slider">
          {foreach $callKmSection as $keycallKmSection => $valuecallKmSection}
              <div class="item">
                  <a class="link" {if $valuecallKmSection['url'] neq "" && $valuecallKmSection['url'] neq "#"}href="{$valuecallKmSection['url']}"{if $valuecallKmSection['target'] eq 2}target="_blank"{/if}{else}href="javascript:void(0);"{/if} title="{$valuecallKmSection.subject}">
                      <div class="row no-gutters">
                          <div class="col">
                              <div class="thumbnail">
                                  <figure class="cover">
                                      <img src="{$valuecallKmSection['pic']|fileinclude:"real":{$valuecallKmSection['masterkey']}:"link"}" alt="{$valuecallKmSection.subject}">
                                  </figure>
                              </div>
                          </div>
                      </div>
                      <div class="row no-gutters">
                          <div class="col">
                              <div class="title text-limit -x2">
                                  {$valuecallKmSection.subject}
                              </div>
                              <div class="desc text-limit -x3">
                                  {$valuecallKmSection.title}
                              </div>
                          </div>
                      </div>
                  </a>
              </div>
          {/foreach}
      </div>
  </div>
{/if}
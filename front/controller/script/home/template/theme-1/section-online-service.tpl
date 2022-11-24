{if $callService->_numOfRows gte 1}
  <div class="e-services-block">
    <div class="container">
      <div class="h-title text-uppercase text-center text-primary">
        GIT E-Services
      </div>
      <ul class="item-list">
        {foreach $callService as $keycallService => $valuecallService}
          <li>
            <a {if $valuecallService.url neq "#" && $valuecallService.url neq ""}href="{$valuecallService.url}"{else}href="javascript:void(0);"{/if} {if $valuecallService.target eq 2}target="_blank"{/if} class="link" title="{$valuecallService.subject}">
              <figure class="cover">
                <img src="{$valuecallService['pic']|fileinclude:"real":{$valuecallService['masterkey']}:"link"}" alt="{$valuecallService.subject}">
              </figure>
              <div class="inner">
                <!-- <div class="wrapper"> -->
                <div class="title text-uppercase text-limit -x2">
                  {$valuecallService.title}
                </div>
    
                <div class="subtitle">
                  {$valuecallService.descript}
                </div>
                <!-- </div> -->
              </div>
              <div class="text-orient text-limit">
                {$valuecallService.subject}
              </div>
            </a>
          </li>
        {/foreach}
      </ul>
    </div>
  </div>
{/if}
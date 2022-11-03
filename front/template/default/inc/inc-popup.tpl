<div class="gallery-popup d-none">
  {if $callBanner->_numOfRows gte 1}
    {foreach $callBanner as $keycallBanner => $valuecallBanner}
      <a href="{$valuecallBanner['pic']|fileinclude:"real":{$valuecallBanner['masterkey']}:"link"}?targetid=manual{$keycallBanner}" 
      data-fancybox="gallery-popup" {if $valuecallBanner.url neq "" && $valuecallBanner.url neq "#"}data-href="{$valuecallBanner.url}"{else}data-href="javascript:void(0);"{/if} 
      {if $valuecallBanner.target eq 2}data-target="_blank"{else}data-target="_self"{/if} data-id="{encodeStr($valuecallBanner.id)}" class="popup-item" id="manual{$keycallBanner}">
      </a>
    {/foreach}
  {/if}
</div>
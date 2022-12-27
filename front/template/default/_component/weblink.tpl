<section class="site-container">

  <div class="default-header">
    <div class="top-graphic">
      <figure class="cover">
          <img class="figure-img img-fluid" src="{$template}{$settingModulus.tgp}" alt="{$settingModulus.subject}">
      </figure>
      <div class="container">
          <div class="wrapper">
          <div class="title typo-lg">{$settingModulus.title}</div>
          <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="{$ul}/home">{$lang['menu']['home']}</a></li>
              {if $settingModulus.subject neq ""}
                <li class="breadcrumb-item"><a href="{$ul}/{$menuActive}">{$settingModulus.subject}</a></li>
              {/if}
              <li class="breadcrumb-item active" aria-current="page">{$settingModulus.breadcrumb}</li>
          </ol>
          </div>
      </div>
    </div>
  </div>
  <div class="default-page online-services">
    <div class="container">
      <div class="h-title">
        {$settingModulus.breadcrumb}
      </div>
      <div class="online-services-block">
        <ul class="item-list">
          {foreach $callWel as $keycallWel => $valuecallWel}
            <li>
              <a {if $valuecallWel.url neq "#" && $valuecallWel.url neq ""}href="{$valuecallWel.url}"{else}href="javascript:void(0);"{/if} {if $valuecallWel.target eq 2}target="_blank"{/if} class="link" title="{$valuecallWel.subject}">
                <figure class="cover">
                  <img src="{$valuecallWel['pic']|fileinclude:"real":{$valuecallWel['masterkey']}:"link"}" alt="{$valuecallWel.subject}">
                </figure>
                <div class="inner">
                  <!-- <div class="wrapper"> -->
                  <div class="title text-uppercase text-limit -x2">
                    {$valuecallWel.title}
                  </div>
  
                  <div class="subtitle">
                    {$valuecallWel.descript}
                  </div>
                  <!-- </div> -->
                </div>
                <div class="text-orient text-limit">
                  {$valuecallWel.subject}
                </div>
              </a>
            </li>
          {/foreach}
        </ul>
      </div>
    </div>
  </div>

</section>
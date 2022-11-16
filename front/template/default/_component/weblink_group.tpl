<section class="site-container">
<div class="default-header">
    <div class="top-graphic mb-4">
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
<div class="default-page training-work">
  {if count($getMenuDetail) > 0}
    <div class="container">
        <div class="default-nav-slider">
          {foreach $getMenuDetail as $keygetMenuDetail => $valuegetMenuDetail}
            {$arrName = explode("-", $valuegetMenuDetail.subject)}
            <div class="item">
              <a href="{$ul}/{$menuActive}/{$valuegetMenuDetail.id}" {if $MenuID eq $valuegetMenuDetail.masterkey}class="active"{/if}>{$arrName[0]}</a>
            </div>
          {/foreach}
        </div>
    </div>
  {/if}

    <div class="border-nav-slider"></div>

    <div class="container mt-5">
        <h2 class="text-primary mb-4">{$settingModulus.title}</h2>
        {if count($arrMenu) > 0}
        <div class="default-tab-slider default-slick">
          {foreach $arrMenu as $keyarrMenu => $valuearrMenu}
            <div class="item">
              <div class="tab-block {if $menuidLv2 eq $valuearrMenu.id}active{/if}">
                <a class="text-limit" href="{str_replace("//","/","{$ul}/{$menuActive}/{$valuearrMenu.menuid}/{$valuearrMenu.id}")}">{$valuearrMenu.subject}</a>
              </div>
            </div>
          {/foreach}
        {/if}
    </div>
</div>


<div class="default-page training-work">
    <div class="container">
        <div class="h-title">{$settingModulus.namepage}</div>
        {foreach $callCMS_arr as $keycallCMS_arr => $valuecallCMS_arr}
          <div class="sponsor-block">
            <div class="title">{$valuecallCMS_arr['group']['subject']}</div>
            {if count($valuecallCMS_arr['list'] > 0)}
              <ul class="item-list">
                {foreach $valuecallCMS_arr['list'] as $keySub => $valueSub}
                  <li>
                      <a {if $valueSub.url neq "#" && $valueSub.url neq ""}href="{$valueSub.url}"{else}href="javascript:void(0);"{/if} {if $valueSub.target eq 2}target="_blank"{/if} class="link">
                          <figure class="cover">
                              <img src="{$valueSub['pic']|fileinclude:"real":{$valueSub['masterkey']}:"link"}" alt="{$valueSub.subject}">
                          </figure>
                      </a>
                  </li>
                {/foreach}
              </ul>
            {/if}
          </div>
        {/foreach}
    </div>
</div>

<div class="container">
    <div class="editor-content">

    </div>
</div>
</section>
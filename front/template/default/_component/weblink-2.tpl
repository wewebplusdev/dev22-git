<section class="site-container">
  <div class="default-header">
    <div class="top-graphic">
      <figure class="cover">
        <img class="figure-img img-fluid"
          src="{$template}{$settingModulus.tgp}" alt="{$settingModulus.subject}">
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
  <div class="default-page information-service">
  {if count($getMenuDetail) > 0}
    <div class="container">
      <div class="default-nav-slider" data-slick='{$initialSlide}'>
        {foreach $getMenuDetail as $keygetMenuDetail => $valuegetMenuDetail}
          {$arrName = explode("-", $valuegetMenuDetail.subject)}
          <div class="item">
            <a href="{$ul}/{$menuActive}/{$valuegetMenuDetail.id}" {if $MenuID eq $valuegetMenuDetail.masterkey}class="active"{/if}>{$arrName[0]}</a>
          </div>
        {/foreach}
      </div>
    </div>
  <div class="border-nav-slider"></div>
  {/if}


    {if count($arrMenu) > 0}
      <div class="container mt-md-5 mt-4">
          <h2 class="text-primary mb-4">{$settingModulus.breadcrumb}</h2>
          <div class="default-tab-slider default-slick" data-slick='{$initialSlide2}'>
            {foreach $arrMenu as $keyarrMenu => $valuearrMenu}
              <div class="item">
                <div class="tab-block {if $callGroup->fields.id eq $valuearrMenu.id}active{/if}">
                  <a class="text-limit" href="{str_replace("//","/","{$ul}/{$menuActive}/{$valuearrMenu.menuid}/{$valuearrMenu.id}")}">{$valuearrMenu.subject}</a>
                </div>
              </div>
            {/foreach}
          </div>
      </div>
    {/if}

    <div class="container">
      <div class="row py-5">
        <div class="col">
          <h2 class="text-black text-uppercase mb-4">{$callGroup->fields.subject}</h2>
          <!-- related sites block -->
          <div class="related-sites-block">
            <div class="related-sites">
              <ul class="item-list">
                {foreach $callWel as $keycallWel => $valuecallWel}
                  <li>
                    <a {if $valuecallWel.url neq "#" && $valuecallWel.url neq ""}href="{$valuecallWel.url}"{else}href="javascript:void(0);"{/if} {if $valuecallWel.target eq 2}target="_blank"{/if} class="link" title="{$valuecallWel.subject}">
                      <div class="row no-gutters">
                        <div class="col">
                          <div class="related-sites-thumbnail">
                            <figure class="cover">
                              <img src="{$valuecallWel['pic']|fileinclude:"real":{$valuecallWel['masterkey']}:"link"}" alt="{$valuecallWel.subject}">
                            </figure>
                          </div>
                        </div>
                      </div>
                      <div class="row no-gutters">
                        <div class="col">
                          <div class="related-sites-desc">
                            <div class="title text-limit">
                              {$valuecallWel.subject}
                            </div>
                            <div class="url text-limit">
                              {$valuecallWel.url}
                            </div>
                          </div>
                        </div>
                      </div>
                    </a>
                  </li>
                {/foreach}
              </ul>
            </div>
          </div>
          <!-- end related sites block  -->
        </div>
      </div>
      {if $callWel->_numOfRows gte 1 && $pagination['totalpage'] gte 2}
        {include file="{$incfile.pagination}"}
      {/if}
      <div class="editor-content">
      </div>

    </div>
  </div>
</section>
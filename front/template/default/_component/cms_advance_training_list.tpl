<section class="site-container">
  <div class="default-header">
    <div class="top-graphic">
      <figure class="cover">
        <img class="figure-img img-fluid"
        src="{$template}{$settingModulus.tgp}" alt="{$settingModulus.tgp}">
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

    {if count($arrMenu) > 0 && $showslick}
    <div class="container mt-md-5 mt-4">
      <h2 class="text-primary mb-4">{$settingModulus.breadcrumb}</h2>
      <div class="default-tab-slider default-slick">
        {foreach $arrMenu as $keyarrMenu => $valuearrMenu}
          <div class="item">
            <div class="tab-block {if $menuidLv2 eq $valuearrMenu.id}active{/if}">
            <a class="text-limit" href="{if $valuearrMenu.url eq '' || $valuearrMenu.url eq '#'}{str_replace("//","/","{$ul}/{$menuActive}/{$valuearrMenu.menuid}/{$valuearrMenu.id}")}{else}{$valuearrMenu.url}{/if}" {if $valuearrMenu.target eq 2}target="_blank"{/if}>{$valuearrMenu.subject}</a>
            </div>
          </div>
        {/foreach}
      </div>
    </div>
    {/if}

    
      <div class="container mt-md-5 mt-4">
      {if $callCMS->_numOfRows gte 1}
        <div class="row py-3">
          <div class="col">
            <div class="h-title">{$TitleName}</div>
            <div class="detail-link-block">
              <div class="detail-link">
                <ul class="item-list fluid">
                  {foreach $callCMS as $keycallCMS => $valuecallCMS}
                    <li>
                      <div class="row no-gutters">
                        <div class="col-md col-12">
                          <div class="detail-thumbnail">
                            <figure class="cover">
                              <img src="{$valuecallCMS['pic']|fileinclude:"real":{$valuecallCMS['masterkey']}:"link"}" alt="{$valuecallCMS.subject}">
                            </figure>
                          </div>
                        </div>
                        <div class="col-md col-12">
                          <div class="detail-desc">
                            <div class="title text-limit -x2">
                              {$valuecallCMS.subject}
                            </div>
                            <p class="desc text-limit">
                              {$valuecallCMS.title}
                            </p>
                            <a href="{$ul}/{$menuActive}/{$valuecallCMS.menuid}/{$valuecallCMS.gid}/{$menuDetail}/{$valuecallCMS.id}" class="btn btn-primary" title="รายละเอียดหลักสูตร">
                              {$lang['training']['detail']}
                              <!-- <img class="icon ml-3" src="{$template}/assets/img/icon/icon-deatail.svg" alt="icon"> -->
                              <svg xmlns="http://www.w3.org/2000/svg" width="51.235" height="7.199"
                                viewBox="0 0 51.235 7.199">
                                <path data-name="Path 5" d="M4670.6,5544.179h50.033l-6.306-6.347"
                                  transform="translate(-4670.602 -5537.48)" fill="none" stroke="#fff" stroke-width="1" />
                              </svg>
                            </a>
                          </div>
                        </div>
                      </div>
                    </li>
                  {/foreach}
                </ul>
              </div>
            </div>
            <!-- end detail link block -->
          </div>
        </div>
      {/if}
        <div class="border-nav-slider pt-5"></div>
        <!-- <div class="container"> -->
        <div class="editor-content">
          <!-- CK Editor -->
          {strip}
            {$callGroup->fields.htmlfilename|fileinclude:"html":$callGroup->fields.masterkey|callHtml}
          {/strip}
          <!-- CK Editor -->
        </div>
        <!-- </div> -->
      </div>
    
  </div>
</section>
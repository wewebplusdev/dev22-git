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
        <div class="default-nav-slider" data-slick='{$initialSlide}'>
          {foreach $getMenuDetail as $keygetMenuDetail => $valuegetMenuDetail}
            {$arrName = explode("-", $valuegetMenuDetail.subject)}
            <div class="item">
              <a href="{$ul}/{$menuActive}/{$valuegetMenuDetail.id}"
                {if $MenuID eq $valuegetMenuDetail.masterkey}class="active" {/if}>{$arrName[0]}</a>
            </div>
          {/foreach}
        </div>
      </div>
    {/if}

    <div class="border-nav-slider"></div>

    <div class="container mt-5">
      {if count($arrMenu) > 0}
      <h2 class="text-primary mb-4">{$settingModulus.breadcrumb}</h2>
      <div class="default-tab-slider default-slick" data-slick='{$initialSlide2}'>
        {foreach $arrMenu as $keyarrMenu => $valuearrMenu}
          <div class="item">
            <div class="tab-block {if $menuidLv2 eq $valuearrMenu.id}active{/if}">
              <a class="text-limit" href="{str_replace("//","/","{$ul}/{$menuActive}/{$valuearrMenu.menuid}/{$valuearrMenu.id}")}">{$valuearrMenu.subject}</a>
            </div>
          </div>
        {/foreach}
      </div>
      {/if}

      <div class="h-title">{$settingModulus.namepage}</div>
      {foreach $callCMS_arr as $keycallCMS_arr => $valuecallCMS_arr}
        <div class="sponsor-block">
          <div class="title">{$valuecallCMS_arr['group']['subject']}</div>
          <div class="row justify-content-md-start justify-content-center">
            {foreach $valuecallCMS_arr['list'] as $keyvaluecallCMS_arr => $valueSub}
              <div class="col{if $keyvaluecallCMS_arr > 0}-md col-auto{/if}">
                <a href="javascript:void(0)" class="link">
                  <img src="{$valueSub['pic']|fileinclude:"real":{$valueSub['masterkey']}:"link"}" alt="{$valueSub.subject}">
                </a>
              </div>
            {/foreach}
          </div>
        </div>
      {/foreach}

      <div class="pagination-block">
        <div class="row align-items-center">
          <div class="col-sm-6">
            <div class="pagination-label">
              ทั้งหมด 93 รายการ
            </div>
          </div>
          <div class="col-sm-6">
            <div class="pagination">
              <ul class="item-list">
                <li>
                  <a href="/th/news?page=2" title="ก่อนหน้า">
                    <span class="feather icon-chevron-left" aria-hidden="true"></span>
                  </a>
                </li>
                <li class="active">
                  <a href="javascript:void(0)" title="1">1</a>
                </li>
                <li class="">
                  <a href="javascript:void(0)" title="2">2</a>
                </li>
                <li class="">
                  <a href="javascript:void(0)" title="3">3</a>
                </li>
                <li class="">
                  <a href="javascript:void(0)" title="4">4</a>
                </li>
                <li class="">
                  <a href="javascript:void(0)" title="5">5</a>
                </li>
                <li class="">
                  <a href="javascript:void(0)" title="6">6</a>
                </li>
                <li>
                  <a href="javascript:void(0)" title="ถัดไป">
                    <span class="feather icon-chevron-right" aria-hidden="true"></span>
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="container">
    <div class="editor-content">

    </div>
  </div>
</section>
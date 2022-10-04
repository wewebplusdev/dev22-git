<section class="site-container">
  <div class="default-header">
    <div class="top-graphic mb-4">
      <figure class="cover">
        <img class="figure-img img-fluid" src="{$template}/assets/img/background/mock-top-grapphic-2.png" alt="">
      </figure>
      <div class="container">
        <div class="wrapper">
          <div class="title typo-lg">เกี่ยวกับเรา</div>
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">หน้าหลัก</a></li>
            <li class="breadcrumb-item"><a href="#">งานบริการ</a></li>
            <li class="breadcrumb-item active" aria-current="page">นโยบายและแผน</li>
          </ol>
        </div>
      </div>
    </div>
  </div>
  <div class="default-page about">
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
    {/if}

    <div class="border-nav-slider"></div>

    {if count($arrMenu) > 0 && $showslick}
      <div class="container mt-5">
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
      </div>
    {/if}

    <div class="container">
      <div class="row align-items-center">
        <div class="col-auto">
          <div class="h-title">นโยบายและแผน</div>
        </div>
        <div class="col text-right">
          <div class="form-group has-feedback">
            <label class="control-label visuallyhidden" for="yearSelect">ปี :</label>

            <div class="select-wrapper">
              <span>ปี :</span>
              <select class="select-control select-year" name="ordernews" id="yearSelect">
                <option value="SELECT1">2565</option>
                <option value="SELECT2">2564</option>
                <option value="SELECT3">2563</option>
              </select>
            </div>
          </div>
        </div>
      </div>
      {if $callCMS->_numOfRows gte 1}
        {foreach $callCMS as $keycallCMS => $valuecallCMS}
          <div class="news-block">
            <div class="row align-items-center">
              <div class="col-sm-auto">
                <figure class="cover">
                  <img src="{$valuecallCMS['pic']|fileinclude:"real":{$valuecallCMS['masterkey']}:"link"}" alt="{$valuecallCMS.subject}">
                </figure>
              </div>
              <div class="col-sm">
                <div class="title">{$valuecallCMS.subject}</div>
                <div class="row">
                  <div class="col-12">
                    <div class="desc">{$valuecallCMS.title}</div>
                  </div>
                  <div class="col-12">
                    <span class="feather icon-calendar"></span>
                    <span class="typo-xs text-black">{$valuecallCMS.credate|DateThai:'1':{$langon}:'full'}</span>
                  </div>
                  <div class="col-12">
                    <a href="javascript:void(0)" class="btn" title="btn">{$lang['system']['viewmore']}</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        {/foreach}
      {/if}
      

      <div class="editor-content">
      </div>
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
</section>
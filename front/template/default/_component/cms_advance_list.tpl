<section class="site-container">
  <div class="default-header">
    <div class="top-graphic mb-4">
      <figure class="cover">
        <img class="figure-img img-fluid" src="{$template}{$settingModulus.tgp}" alt="{$settingModulus.tgp}">
      </figure>
      <div class="container">
        <div class="wrapper">
          <div class="title typo-lg">{$settingModulus.subject}</div>
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{$ul}/home">{$lang['menu']['home']}</a></li>
            <li class="breadcrumb-item"><a href="{$ul}/{$menuActive}">{$settingModulus.subject}</a></li>
            <li class="breadcrumb-item active" aria-current="page">{$settingModulus.breadcrumb}</li>
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
          <div class="h-title">{$callGroup->fields.subject}</div>
        </div>
        {if count($callYear) > 0}
          <div class="col text-right">
            <div class="form-group has-feedback">
              <label class="control-label visuallyhidden" for="yearSelect">{$lang['system']['year']} :</label>
              <div class="select-wrapper">
                <span>{$lang['system']['year']} :</span>
                <select class="select-control select-year" name="ordernews" id="yearSelect">
                    <option value="All">{$lang['system']['all']}</option>
                    {foreach $callYear as $keycallYear => $valuecallYear}
                      <option value="{date('Y', strtotime($valuecallYear.credate))}" {if $req_params['year'] eq date('Y', strtotime($valuecallYear.credate))}selected="selected"{/if}>{date('Y', strtotime(DateFormat($valuecallYear.credate)))}</option>
                    {/foreach}
                </select>
              </div>
            </div>
        {/if}
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
                    <a href="{$ul}/{$menuActive}/{$valuecallCMS.menuid}/{$valuecallCMS.gid}/{$menuDetail}/{$valuecallCMS.id}" class="btn" title="btn">{$lang['system']['viewmore']}</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        {/foreach}
      {/if}
      

      <div class="editor-content">
      </div>
      {if $callCMS->_numOfRows gte 1 && $pagination['totalpage'] gte 2}
        {include file="{$incfile.pagination}"}
      {/if}
    </div>
  </div>
</section>
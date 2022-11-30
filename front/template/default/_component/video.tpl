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
      <div class="border-nav-slider"></div>
      {/if}
      {if count($arrMenu) > 0}
      <div class="container mt-5">
          <h2 class="text-primary mb-4">{$callGroupActive->fields.subject}</h2>
          <div class="default-tab-slider default-slick" data-slick='{$initialSlide2}'>
              {foreach $arrMenu as $keyarrMenu => $valuearrMenu}
                <div class="item">
                    <div class="tab-block {if $callGroupActive->fields.id eq $valuearrMenu.id}active{/if}">
                        <a class="text-limit" href="{$ul}/{$menuActive}/{$valuearrMenu.id}">{$valuearrMenu.subject}</a>
                    </div>
                </div>
              {/foreach}
          </div>
      </div>
      {/if}
      
      <div class="container">
          <div class="row align-items-center">
              <div class="col-auto">
                  <div class="h-title">{$callGroupActive->fields.subject}</div>
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

        {if $callCMS->_numOfRows gte 1}
          {foreach $callCMS as $keycallCMS => $valuecallCMS}
            <div class="news-block -video">
              <div class="row align-items-center">
                  <div class="col-sm-auto">
                      <div class="video-gallery-banner">
                          <figure class="cover -banner">
                              <img src="{$valuecallCMS['pic']|fileinclude:"real":{$valuecallCMS['masterkey']}:"link"}" alt="{$valuecallCMS.subject}">
                          </figure>
                          <a class="link" href="javascript:void(0)">
                              <span class="feather icon-play-circle"></span>
                          </a>
                      </div>
                  </div>
                  <div class="col-sm">
                      <div class="title">{str_replace("<br>", "", $valuecallCMS.subject)}</div>
                      <div class="row">
                          <div class="col-12">
                              <div class="desc">{str_replace("<br>", "", $valuecallCMS.title)}</div>
                          </div>
                          <div class="col-12">
                              <!-- <img class="" src="<?php echo $core_template; ?>/assets/img/icon/icon-calendar.svg" alt="icon calenda  r"> -->
                              <span class="feather icon-calendar"></span>
                              <span class="typo-xs text-black">{$valuecallCMS.credate|DateThai:'1':{$langon}:'full'}</span>
                          </div>
                          <div class="col-12">
                              <a href="{$ul}/{$menuActive}/{$valuecallCMS.gid}/{$menuDetail}/{$valuecallCMS.id}" class="btn btn-primary" title="{$lang['system']['viewmore']}">
                                {$lang['system']['viewmore']}
                                  <!-- <img class="icon ml-3" src="https://project.wewebcloud.com/dev22-git/front/template/default/assets/img/icon/icon-deatail.svg" alt="icon"> -->
                                  <svg xmlns="http://www.w3.org/2000/svg" width="51.235" height="7.199" viewBox="0 0 51.235 7.199">
                                      <path data-name="Path 5" d="M4670.6,5544.179h50.033l-6.306-6.347" transform="translate(-4670.602 -5537.48)" fill="none" stroke="#fff" stroke-width="1"></path>
                                  </svg>
                              </a>
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
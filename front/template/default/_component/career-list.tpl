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


    <div class="container mt-5">
    {if count($arrMenu) > 0 && $showslick}
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
      </div>

    <div class="container">
      <div class="editor-content">
        {if $callSetting->fields.htmlfilename neq ""}
            <!-- CK Editor -->
            {strip}
                {$callSetting->fields.htmlfilename|fileinclude:"html":$callSetting->fields.masterkey|callHtml}
            {/strip}
            <!-- CK Editor -->
        {/if}
      </div>
      <form action="{$ul}/{$menuActive}/{$valuegetMenuDetail.id}" data-toggle="validator" role="form" class="form-default" method="get">
        <div class="row align-items-center">
          <div class="col-md-8">
            <div class="control-label" for="jobSearch">{$lang['career']['search-title']}</div>
            <div class="form-group form-search">
              <label class="control-label visuallyhidden" for="jobSearch">{$lang['career']['search']}</label>
              <input type="text" name="keywords" class="form-control" id="jobSearch" aria-describedby="jobSearch"
                placeholder="{$lang['career']['search']}" value="{$req_params['keywords']}">
              <div class="form-control-icon">
                <span class="icon-from -icon-search"></span>
              </div>
            </div>
          </div>
          <div class="col-md-4 text-right">
            <div class="control-label" for="mockSelect1" style="opacity: 0;">Example select</div>
            <div class="form-group has-feedback">
              <label class="control-label visuallyhidden" for="mockSelect1">Example select</label>
              <div class="select-wrapper">
                <select class="select-control" name="selectCareer" id="mockSelect1" style="width: 100%;" onchange="this.form.submit()">
                  <option value="0">{$lang['career']['select']}</option>
                  {foreach $callListCareerSelect as $keycallListCareerSelect => $valuecallListCareerSelect}
                  <option value="{$valuecallListCareerSelect.id}" {if $req_params['selectcareer'] eq $valuecallListCareerSelect.id}selected{/if}>{$valuecallListCareerSelect.subject}</option>
                  {/foreach}
                </select>
              </div>
            </div>
          </div>
        </div>
      </form>
        {foreach $callCMS as $keycallCMS => $valuecallCMS}
         
          <div class="job-source-block mb-3">
          
            <div class="row">
            <a href="{$ul}/{$menuActive}/{$valuegetMenuDetail.id}/{$menuDetail}/{$valuecallCMS.id}" style="text-decoration: none;">
                <div class="col-12">
                    <div class="title typo-sm text-limit -x3">{$valuecallCMS.subject}</div>
                    <div class="desc">({$lang['career']['quantity']} : {$valuecallCMS.quantity} {$lang['career']['position']})</div>
                </div>
                <div class="col-12 py-3">
                    <div class="desc text-limit -x3">{$valuecallCMS.title}</div>
                </div>
            </a>
            </div>
            <div class="job-source-location">
                <div class="row align-items-center">
                    <div class="col">
                        <div class="row align-items-center no-gutters">
                        
                            <div class="col-auto">
                                <img src="{$template}/assets/img/icon/icon-location.svg" alt="icon-location">
                            </div>
                            <div class="col">
                            <a href="{$ul}/{$menuActive}/{$valuegetMenuDetail.id}/{$menuDetail}/{$valuecallCMS.id}" style="text-decoration: none;">
                                <div class="desc">{$lang['career']['location']} : {$valuecallCMS.address}</div>
                            </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-auto">
                        <a href="{$ul}/{$menuActive}/{$valuegetMenuDetail.id}/{$menuDetail}/{$valuecallCMS.id}" class="link" title="{$lang['career']['detail']}">
                            <div class="row align-items-center no-gutters">
                                <div class="col">
                                    <div class="desc">
                                        {$lang['career']['detail']}
                                    </div>
                                </div>
                                <div class="col-auto">
                                    <img src="{$template}/assets/img/icon/icon-detail.svg" alt="icon-detail">
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            
        </div>
          
        {/foreach}
        {if $callCMS->_numOfRows gte 1 && $pagination['totalpage'] gte 2}
          {include file="{$incfile.pagination}"}
        {/if}

    </div>
  </div>
</section>
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
              <a href="{$ul}/{$menuActive}/{$valuegetMenuDetail.id}"
                {if $MenuID eq $valuegetMenuDetail.masterkey} class="active"
                {/if}>{$arrName[0]}</a>
            </div>
          {/foreach}
          
        </div>
      </div>
      <div class="border-nav-slider"></div>
    {/if}

    <div class="container">
      {if count($arrMenu) > 0}
        <div class="container mt-5">
          <h2 class="text-primary mb-4">{$settingModulus.breadcrumb}</h2>
          <div class="default-tab-slider default-slick" data-slick='{$initialSlide2}'>
            {foreach $arrMenu as $keyarrMenu => $valuearrMenu}
              <div class="item">
                <div class="tab-block {if $callGroup->fields.id eq $valuearrMenu.id}{$menuDetailID = $valuearrMenu.menuid}active{/if}">
                  <a class="text-limit"
                    href="{str_replace("//","/","{$ul}/{$menuActive}/{$valuearrMenu.menuid}/{$valuearrMenu.id}"
                )}">{$valuearrMenu.subject}</a>
                </div>
              </div>
            {/foreach}
          </div>
        </div>
      {/if}
      <div class="default-filter">
        <div class="container">
          <form action="{$ul}/{$menuActive}/{$menuDetailID}/{$callGroup->fields.id}/{$req_params['year']}" data-toggle="validator" role="form" class="form-default" method="post">
            <div class="row gutters-15 align-items-end">
              <div class="col-lg-5 col-12 mr-auto">
                <div class="form-group">
                  <div class="row no-gutters">
                    <div class="col">
                      <label class="visuallyhidden" for="keywords">{$lang['system']['search']}</label>
                      <input type="search" id="keywords" name="keywords" class="form-control" placeholder="{$lang['system']['search']}" value="{$req_params['keywords']}">
                    </div>
                    <div class="col-auto">
                      <button type="button" class="btn btn-primary btn-search" onclick="this.form.submit()">
                        <span class="feather icon-search"></span>
                      </button>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-3 col-md-6 col-12">
                <div class="form-group has-feedback">
                  <label class="control-label" for="contact">{$lang['system']['sort']}</label>
                  <div class="select-wrapper">
                    <select class="select-control" name="order" id="order" style="width: 100%;" onchange="this.form.submit()">
                      {foreach $orderArray as $keyorderArray => $valueorderArray}
                      <option value="{$keyorderArray}" {if $req_params['order'] eq $keyorderArray}selected="selected" {/if}>{$valueorderArray}</option>
                    {/foreach}
                    </select>
                  </div>
                </div>
              </div>

            </div>
            {if count($callYear) > 0}
            <div class="group-list year-list">
              <ul class="nav-list">
                {foreach $callYear as $keycallYear => $valuecallYear}
                  <li>
                    <a 
                  href="{$ul}/{$menuActive}/{$menuDetailID}/{$callGroup->fields.id}/{date('Y', strtotime($valuecallYear.credate))}"
                 class="link {if $req_params['year'] eq date('Y', strtotime($valuecallYear.credate))}active{/if}">{$lang['system']['year']} {date('Y', strtotime(DateFormat($valuecallYear.credate)))}</a>
                  </li>
                {/foreach}
              </ul>
            </div>
            {/if}
          </form>
        </div>
      </div>


      <div class="row align-items-center">
        <div class="col-auto">
          <div class="h-title">{$callGroup->fields.subject}</div>
        </div>
        {* {if count($callYear) > 0}
          <div class="col text-right">
            <div class="form-group">
              <label class="control-label visuallyhidden" for="yearSelect">{$lang['system']['year']} :</label>
              <div class="select-wrapper">
                <span>{$lang['system']['year']} :</span>
                <select class="select-control select-year" name="ordernews" id="yearSelect">
                  <option value="All">{$lang['system']['all']}</option>
                  {foreach $callYear as $keycallYear => $valuecallYear}
                    <option value="{date('Y', strtotime($valuecallYear.credate))}"
                      {if $req_params['year'] eq date('Y', strtotime($valuecallYear.credate))}selected="selected" {/if}>
                      {date('Y', strtotime(DateFormat($valuecallYear.credate)))}</option>
                  {/foreach}
                </select>
              </div>
            </div>
          </div>
        {/if} *}
      </div>
      {foreach $callCMS as $keycallCMS => $valuecallCMS}
        {$Call_File = $callSetWebsite::Call_File($valuecallCMS['id'])}
        {$fileinfo = $Call_File->fields['filename']|fileinclude:'file':{$valuecallCMS.masterkey}|get_Icon}
        {if $Call_File->fields.name neq ""}
          {$subject = $valuecallCMS.subject}
          {* {$subject = $Call_File->fields.name} *}
        {else}
          {$subject = $valuecallCMS.subject}
        {/if}
        <div class="download-block">
          <div class="row align-items-center">
            <div class="col-md">
              <div class="row no-gutters">
                <div class="col-auto">
                  <img class="icon -icon-download" src="{$template}/assets/img/icon/icon-attachment.svg"
                    alt="attachment icon">
                </div>
                <div class="col">
                  <div class="title typo-sm">{$subject}</div>
                  <div class="row">
                    {if $Call_File->_numOfRows gte 1}
                      <div class="col-sm-auto">
                        <div class="row">
                          <div class="col-sm-auto">
                            <div class="download-block-type">
                              <img class="icon" src="{$template}/assets/img/icon/icon-file.svg" alt="icon file">
                              <div class="desc typo-s">
                                {$lang['system']['size']} :
                                <span>{$Call_File->fields['filename']|fileinclude:'file':{$valuecallCMS.masterkey}|get_IconSize}</span>
                              </div>
                            </div>
                          </div>
                          <div class="col-sm-auto">
                            <div class="download-block-type">
                              <img class="icon" src="{$template}/assets/img/icon/icon-pdf.svg" alt="icon file">
                              <div class="desc typo-s">
                                {$lang['system']['type']} :
                                <span>{$fileinfo.type}</span>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    {/if}
                    <div class="col-sm-auto">
                      <div class="row">
                        <div class="col-sm-auto">
                          <div class="download-block-type">
                            <img class="icon" src="{$template}/assets/img/icon/icon-view-.svg" alt="icon file">
                            <div class="desc view typo-s">
                              {$lang['system']['view']}
                              <span>{$valuecallCMS.view|number_format}</span>
                            </div>
                          </div>
                        </div>
                        <div class="col-sm-auto">
                          <div class="download-block-type">
                            <img class="icon" src="{$template}/assets/img/icon/icon-time.svg" alt="icon file">
                            <div class="desc time typo-s">
                              {$lang['system']['lastdate']}
                              <span>{$valuecallCMS.credate|DateThai:'23':{$langon}:'shot3'}</span>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-auto">
              <div class="row">
                <div class="download-block-btn">
                  {if $valuecallCMS.typec eq 1}
                    <div class="col-auto">
                      <a href="{$ul}/{$menuActive}/{$valuecallCMS.menuid}/{$valuecallCMS.gid}/{$menuDetail}/{$valuecallCMS.id}"
                        class="btn" title="{$lang['system']['viewmore']}">{$lang['system']['viewmore']}</a>
                    </div>
                  {/if}
                  {if $Call_File->_numOfRows gte 1}
                    <div class="col-auto">
                      <a href="{$ul}/download/{$Call_File->fields['filename']|fileinclude:'file':{$valuecallCMS.masterkey}:'download'}&n={$Call_File->fields['name']}&t={'md_cmf'|encodeStr}"
                        class="btn" title="{$lang['system']['download']}">{$lang['system']['download']}</a>
                    </div>
                  {/if}
                </div>
              </div>
            </div>
          </div>
        </div>
      {/foreach}
      <div class="editor-content">
      </div>
      {if $callCMS->_numOfRows gte 1 && $pagination['totalpage'] gte 2}
        {include file="{$incfile.pagination}"}
      {/if}
    </div>
  </div>
</section>
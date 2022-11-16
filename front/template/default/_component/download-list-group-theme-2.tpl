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
    {/if}

    <div class="border-nav-slider"></div>

    {if count($arrMenu) > 0}
      <div class="container mt-5">
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
        <ul class="item-list procurement-process">
          {foreach $callCMS as $keycallCMS => $valuecallCMS}
            {$Call_File = $callSetWebsite::Call_File($valuecallCMS['id'])}
            {$fileinfo = $Call_File->fields['filename']|fileinclude:'file':{$valuecallCMS.masterkey}|get_Icon}
            <li>
                <div class="list-wrapper">
                    <figure class="cover">
                        <img src="{$valuecallCMS['pic']|fileinclude:"real":{$valuecallCMS['masterkey']}:"link"}" alt="{$valuecallCMS.subject}">
                    </figure>
                    <div class="inner">
                        <!-- <div class="seemore"> -->
                        <div class="row align-items-centre w100 m-auto">
                            {if $valuecallCMS.typec eq 1}
                              <div class="col-12 text-center">
                                  <a href="{$ul}/{$menuActive}/{$valuecallCMS.menuid}/{$valuecallCMS.gid}/{$menuDetail}/{$valuecallCMS.id}" class="btn btn-primary mb-4" title="{$lang['system']['viewmore']}">{$lang['system']['viewmore']}</a>
                              </div>
                            {/if}
                            {if $Call_File->_numOfRows gte 1}
                              <div class="col-12 text-center">
                                  <a href="{$ul}/download/{$Call_File->fields['filename']|fileinclude:'file':{$valuecallCMS.masterkey}:'download'}&n={$Call_File->fields['name']}&t={'md_cmf'|encodeStr}" class="btn btn-primary" title="{$lang['system']['download']}">{$lang['system']['download']}</a>
                              </div>
                            {/if}
                        </div>
  
  
                        <!-- </div> -->
                    </div>
                </div>
            </li>
          {/foreach}
        </ul>
        {if $callCMS->_numOfRows gte 1 && $pagination['totalpage'] gte 2}
          {include file="{$incfile.pagination}"}
        {/if}
    </div>
</div>
</section>
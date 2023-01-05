<section class="site-container">
   <div class="default-header">
      <div class="top-graphic">
         <figure class="cover">
            <img class="figure-img img-fluid" src="{$template}{$settingModulus.tgp}" alt="{$settingModulus.tgp}">
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


      {if count($arrMenu) > 0 && $showslick}
         <div class="container mt-md-5 mt-4">
            <div class="row aling-items-center gutters-10">
               <h2 class="text-primary mb-4">{$settingModulus.breadcrumb}</h2>
               {* {if $settingModulus['rssfeed']}
                  <div class="col-auto">
                     <a href="{$ul}/rss/{$callCMS->fields.masterkey}GIT{$settingModulus['group']}.xml" target="_blank" class="rss">
                        <img src="{$template}/assets/img/icon/icon-rss.png" alt="icon rss">
                     </a>
                  </div>
               {/if} *}
            </div>
            <div class="default-tab-slider default-slick" data-slick='{$initialSlide2}'>
               {foreach $arrMenu as $keyarrMenu => $valuearrMenu}
                  <div class="item">
                     <div class="tab-block {if $menuidLv2 eq $valuearrMenu.id}{$menuDetailID = $valuearrMenu.menuid}active{/if}">
                        <a class="text-limit" href="{str_replace("//","/","{$ul}/{$menuActive}/{$valuearrMenu.menuid}/{$valuearrMenu.id}")}">{$valuearrMenu.subject}</a>
                     </div>
                  </div>
               {/foreach}
            </div>
         </div>
      {/if}
      <div class="default-filter">
                <div class="container">
                    <form action="{$ul}/{$menuActive}/{$menuDetailID}/{$callGroup->fields.id}/{$req_params['year']}"
                        data-toggle="validator" role="form" class="form-default" method="post">
                        <div class="row gutters-15 align-items-end">
                            <div class="col-lg-5 col-12 mr-auto">
                                <div class="form-group">
                                    <div class="row no-gutters">
                                        <div class="col">
                                            <label class="visuallyhidden"
                                                for="keywords">{$lang['system']['search']}</label>
                                            <input type="search" id="keywords" name="keywords" class="form-control"
                                                placeholder="{$lang['system']['search']}"
                                                value="{$req_params['keywords']}">
                                        </div>
                                        <div class="col-auto">
                                            <button type="button" class="btn btn-primary btn-search"
                                                onclick="this.form.submit()">
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
                                        <select class="select-control" name="order" id="order" style="width: 100%;"
                                            onchange="this.form.submit()">
                                            {foreach $orderArray as $keyorderArray => $valueorderArray}
                                                <option value="{$keyorderArray}"
                                                    {if $req_params['order'] eq $keyorderArray}selected="selected" {/if}>
                                                    {$valueorderArray}</option>
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
                                            <a href="{$ul}/{$menuActive}/{$menuDetailID}/{$callGroup->fields.id}/{date('Y', strtotime($valuecallYear.credate))}"
                                                class="link {if $req_params['year'] eq date('Y', strtotime($valuecallYear.credate))}active{/if}">{$lang['system']['year']}
                                                {date('Y', strtotime(DateFormat($valuecallYear.credate)))}</a>
                                        </li>
                                    {/foreach}
                                </ul>
                            </div>
                        {/if}
                    </form>
                </div>
            </div>

      <div class="container">
         <div class="row align-items-center">
            <div class="col-auto">
               <div class="h-title">{$callGroup->fields.subject}
               {if $settingModulus['rssfeed']}<a href="{$ul}/rss/{$callCMS->fields.masterkey}GIT{$settingModulus['group']}.xml" target="_blank" class="rss" style="display: inline;">
                  <img src="{$template}/assets/img/icon/icon-rss.png" alt="icon rss">
               </a>{/if}</div>
            </div>
         </div>
         {if $callGroup->fields.isstatic==0}
            {if $callCMS->_numOfRows gte 1}
               {foreach $callCMS as $keycallCMS => $valuecallCMS}
              
                  <div class="news-block">
                     <div class="row align-items-center">
                        <div class="col-sm-auto">
                           <figure class="cover">
                           <a href="{$ul}/{$menuActive}/{$valuecallCMS.menuid}/{$valuecallCMS.gid}/{$menuDetail}/{$valuecallCMS.id}" style="text-decoration: none;">
                              <img src="{$valuecallCMS['pic']|fileinclude:"real":{$valuecallCMS['masterkey']}:"link"}" alt="{$valuecallCMS.subject}">
                           </a>
                           </figure>
                        </div>
                        <div class="col-sm">
                        <a href="{$ul}/{$menuActive}/{$valuecallCMS.menuid}/{$valuecallCMS.gid}/{$menuDetail}/{$valuecallCMS.id}" style="text-decoration: none;">
                           <div class="title">{$valuecallCMS.subject}</div>
                           </a>
                           <div class="row">
                              <div class="col-12">
                                 <div class="desc">{$valuecallCMS.title}</div>
                              </div>
                              <div class="col-12">
                                 <span class="feather icon-calendar"></span>
                                 {if $valuecallCMS.refdate eq '0000-00-00 00:00:00'}
                                 <span class="typo-xs text-black">{$valuecallCMS.credate|DateThai:'1':{$langon}:'full'}</span>
                                 {/if}
                                 {if $valuecallCMS.refdate neq '0000-00-00 00:00:00'}
                                 <span class="typo-xs text-black">{$valuecallCMS.refdate|DateThai:'1':{$langon}:'full'}</span>
                                 {/if}

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
         {else}

            {if count($rss)>0}
               {foreach $rss as $rssresult}
                  <div class="news-block">
                     <div class="row align-items-center">
                        <div class="col-sm">
                           <div class="title">{$rssresult->title}</div>
                           <div class="row">
                              <div class="col-12">
                                 <div class="desc">{$rssresult->description}</div>
                              </div>
                              <div class="col-12">
                                 <span class="feather icon-calendar"></span>
                                 <span class="typo-xs text-black">{$rssresult->pubDate}</span>
                              </div>
                              <div class="col-12">
                                 <a href="{$rssresult->link}" target="_blank" class="btn" title="btn">{$lang['system']['viewmore']}</a>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               {/foreach}
            {/if}

            <div class="editor-content">
            </div>
         {/if}
      </div>
   </div>
</section>
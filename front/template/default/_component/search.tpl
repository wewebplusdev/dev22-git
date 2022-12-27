<section class="site-container" data-id="{$sitekey}">
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
            <li class="breadcrumb-item active"><a href="{$ul}/{$menuActive}">{$settingModulus.subject}</a></li>
          </ol>
        </div>
      </div>
    </div>
  </div>
  <div class="default-page about">
    <div class="container">
      <div class="search-filter-tab">
        <div class="collapse-block">
          <div class="card-header" id="advancedSearchCollapse">
            <div class="title-search-filter {if $typeSearch eq 1}collapsed{/if} toggle-change" data-toggle="collapse" data-target="#collapse" aria-expanded="false"
              aria-controls="collapse">{$lang["search"]["advance:search"]}</div>
          </div>
          <div id="collapse" class="collapse {if $typeSearch eq 2}show{/if}" aria-labelledby="advancedSearchCollapse" data-parent="#accordion">
            <form role="form" class="form-default" method="post" id="advancedSearchForm" name="advancedSearchForm">
              <input type="hidden" class="form-control" name="keywords" value="{$keywords}"/>
              <input type="hidden" class="form-control" name="typeSch" value="{$typeSearch}"/>
              <div class="row {if $typeSearch eq 2}d-flex{/if}">
                <div class="col-sm">
                  <div class="form-group has-feedback">
                    <label class="control-label" for="advancedSearchGroup">{$lang["search"]["group"]}</label>
                    <div class="select-wrapper">
                      <select class="select-control" id="inputGroup" name="inputGroup" onchange="submit()" style="width: 100%;">
                        <option value="0">{$lang["search"]["select"]}</option>
                        {foreach $arrcong as $keyarrcong => $valuearrcong}
                          <option value="{$keyarrcong}" {if $txtMasterkey eq $keyarrcong}selected{/if}>{$valuearrcong[$langon]}</option>
                        {/foreach}
                      </select>
                    </div>
                  </div>
                </div>
                <div class="col-sm">
                  <div class="form-group has-feedback">
                    <label class="control-label" for="advancedSearchType">{$lang["search"]["type"]}</label>
                    <div class="select-wrapper">
                      <select class="select-control" id="hashtag" name="typeOption" style="width: 100%;">
                        <option value="1" {if $typeOption eq 1}selected{/if}>{$lang["search"]["txtSch"]}</option>
                        <option value="2" {if $typeOption eq 2}selected{/if}>{$lang["search"]["hashtag"]}</option>
                      </select>
                    </div>
                  </div>
                </div>
                <div class="col-sm">
                  <div class="form-group has-feedback">
                    <label class="control-label" for="advancedSearchSDate">{$lang["search"]["sdate"]}</label>
                    <div class="block-control">
                      <input type="date" class="form-control" id="start" name="trip-start" value="{$dateStart}" ata-error="">
                      <!-- <span class="form-control-feedback" aria-hidden="true"></span> -->
                    </div>
                  </div>
                </div>
                <div class="col-sm">
                  <div class="form-group has-feedback">
                    <label class="control-label" for="advancedSearchEDate">{$lang["search"]["edate"]}</label>
                    <div class="block-control">
                      <input type="date" class="form-control" id="end" name="trip-end" value="{$dateEnd}" ata-error="">
                      <!-- <span class="form-control-feedback" aria-hidden="true"></span> -->
                    </div>
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
      <div class="search-page">
        <div class="search-bar">
          <div class="row align-items-center">
            <div class="col-sm">
              {* <div class="title">ผลลัพธ์การค้นหา“#ตำรายาของประเทศไทย”</div> *}
              <div class="title">
              {if $call_hashtag_page->_numOfRows gte 1}
                {$lang["search:page"]} 
                “
                {foreach $call_hashtag_page as $keycall_hashtag_page => $valuecall_hashtag_page}
                  {if $keycall_hashtag_page gte 1}
                    , #{$valuecall_hashtag_page.subject}
                  {else}
                    #{$valuecall_hashtag_page.subject}
                  {/if}
                  {/foreach}
                ”
                
              {else}
                {$lang["search:page"]} “{$keywords}”
              {/if}
              </div>
            </div>
            <div class="col-sm-auto">
              <div class="form-group">
                <label class="control-label visuallyhidden" for="detailSearch">{$lang['search']['subject']}</label>
                <div class="block-control outer-form">
                  <input type="text" class="form-control" id="detailSearch" value="{$keywords}" placeholder="{$lang['search']['subject']}">
                  <div class="search-icon simple-search-icon">
                    <img src="{$template}/assets/img/icon/icon-search.svg" alt="icon search">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="search-list">
          <div class="title"> {$lang["search:listfound"]} {$pagination.total} {$lang["search:list"]}</div>
          {if $callSearchAll->_numOfRows gte 1}
            <ul class="item-list">
              {foreach $callSearchAll as $key => $result}
                 {* conf *}
                 {foreach $arrconm as $keyarrconm => $valuearrconm}
                  {$per_arr = "/{$keyarrconm}/"}
                  {if preg_match($per_arr, $result.mnumasterkey)}
                     {* about *}
                     {if $keyarrconm eq 'ab_'}
                        {$url_sch = str_replace('|page|', "{$valuearrconm}/{$result.mnuid}" ,$result.url)}
                     {* service *}
                     {elseif $keyarrconm eq 'sv_'}
                        {$url_sch = str_replace('|page|', "{$valuearrconm}/{$result.mnuid}" ,$result.url)}
                     {* training *}
                     {elseif $keyarrconm eq 'trw_'}
                        {$url_sch = str_replace('|page|', "{$valuearrconm}/{$result.mnuid}" ,$result.url)}
                     {* information-service *}
                     {elseif $keyarrconm eq 'is_'}
                        {$url_sch = str_replace('|page|', "{$valuearrconm}/{$result.mnuid}" ,$result.url)}
                     {* research *}
                     {elseif $keyarrconm eq 'rs_'}
                        {$url_sch = str_replace('|page|', "{$valuearrconm}/{$result.mnuid}" ,$result.url)}
                     {* member-relations *}
                     {elseif $keyarrconm eq 'mr'}
                        {$url_sch = str_replace('|page|', "{$valuearrconm}/{$result.mnuid}" ,$result.url)}
                     {* policy *}
                     {elseif $keyarrconm eq 'plc'}
                        {$url_sch = str_replace('|page|', "{$valuearrconm}" ,$result.url)}
                     {* video *}
                     {elseif $keyarrconm eq 'vdo'}
                        {$url_sch = str_replace('|page|', "{$valuearrconm}" ,$result.url)}
                     {* video *}
                     {elseif $keyarrconm eq 'ptg'}
                        {$url_sch = str_replace('|page|', "{$valuearrconm}" ,$result.url)}
                     {* calendar *}
                     {elseif $keyarrconm eq 'cl'}
                        {$url_sch = str_replace('|page|', "{$valuearrconm}" ,$result.url)}
                     {/if}
                  {/if}
               {/foreach}
               {* conf *}
                {if unserialize($result.tid) != ""}
                {$call_hashtag_list = searchPage::call_hashtag($masterkeyTag, unserialize($result.tid))}
                {else}
                {$call_hashtag_list = ""}
                {/if}
                <li>
                  <a href="{$domain}/{$url_sch}" class="link list-wrapper" target="_blank">
                    <div class="list-inner">
                      <div class="list-title">{str_replace("<br>", "", $result.subject)}</div>
                      <div class="list-desc text-limit -x2">{str_replace("<br>", "", $result.title)}</div>
                      <div class="list-link">{$domain}/{$url_sch}</div>
                      {if $call_hashtag_list->_numOfRows gte 1}
                        <div class="tag-list">
                          {foreach $call_hashtag_list as $keycall_hashtag_list => $valuecall_hashtag_list}
                            <div class="detail-hashtag-block">
                              <a href="{$ul}/{$menuActive}/hashtag/{$valuecall_hashtag_list.id}" class="detail-hashtag-link">{$valuecall_hashtag_list.subject}</a>
                            </div>
                          {/foreach}
                          {* <div class="detail-hashtag-block">
                            <a href="about-detail-search.php" class="detail-hashtag-link">ตำรายาของประเทศไทย</a>
                          </div>
                          <div class="detail-hashtag-block">
                            <a href="about-detail-search.php" class="detail-hashtag-link">ตำรายาของประเทศไทย</a>
                          </div> *}
                        </div>
                      {/if}
                    </div>
                  </a>
                </li>
              {/foreach}
            </ul>
          {/if}
        </div>
      </div>
      {if $callSearchAll->_numOfRows gte 1 && $pagination['totalpage'] gte 2}
        {include file="{$incfile.pagination}"}
      {/if}
    </div>
  </div>
</section>
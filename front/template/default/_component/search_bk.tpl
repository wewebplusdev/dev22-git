<section class="site-container sitekey" data-page="index" data-id="{$sitekey}">

   <div class="default-header">
      <div class="top-graphic mb-4 text-primary">
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
   <div class="default-page contact-page">
      <div class="container">
         <h2 class="h-title text-left mb-0">{$lang['search']['subject']}</h2>

         <div class="search-block mb-3">
            <form data-toggle="validator" role="form" class="form-default" method="post">
               <div class="row">
                  <div class="col">
                     <div class="block-control form-group">
                        <label class="control-label visuallyhidden" for="keyword">{$lang['search']['subject']}</label>
                        <input type="text" class="form-control" id="keyword" name="keywords" value="{$keywords}" aria-describedby="keyword" placeholder="{$lang['search']['subject']}">
                        <button type="submit" class="btn form-control-icon">
                           <span class="icon-from -icon-search"></span>
                        </button>
                     </div>
                  </div>
               </div>
               <div class="search-result">
                  {$result_txt}
               </div>
            </form>

             {if $callSearchAll->_numOfRows gte 1}

               <ul class="item-list">
                  {foreach $callSearchAll as $result}
                     {* conf *}
                     {foreach $arrconm as $keyarrconm => $valuearrconm}
                        {$per_arr = "/{$keyarrconm}/"}
                        {if preg_match($per_arr, $result.mnumasterkey)}
                           {$keyarrconm|print_pre}
                           {* about *}
                           {if $keyarrconm eq 'ab_'}
                              {$url_sch = str_replace('|page|', "{$valuearrconm}/{$result.mnuid}" ,$result.url)}
                           {* service *}
                           {elseif $keyarrconm eq 'sv_'}
                              {$url_sch = str_replace('|page|', "{$valuearrconm}/{$result.mnuid}" ,$result.url)}
                           {* training *}
                           {elseif $keyarrconm eq 'trw_'}
                              {$url_sch = str_replace('|page|', "{$valuearrconm}/{$result.mnuid}" ,$result.url)}
                           {/if}
                        {/if}
                     {/foreach}
                     {$url_sch|print_pre}
                     {* conf *}
                     <li>
                        <div class="row align-items-end">
                           <div class="col">
                              <div class="title">{$result.subject}</div>
                              <div class="desc text-limit">{$result.title}</div>
                              <a href="{$domain}/{$url_sch}" class="link" target="_blank">{$domain}/{$url_sch}</a>
                           </div>
                           <div class="col-md-auto">
                              <a href="{$domain}/{$url_sch}" class="link detail" title="{$result.title}" target="_blank">
                                 <div class="row align-items-center no-gutters">
                                    <div class="col-auto">
                                       <div class="txt">
                                          {$lang['search']['more']}
                                       </div>
                                    </div>
                                    <div class="col-auto">
                                       <img src="{$template}/assets/img/icon/icon-detail.svg" alt="icon-detail">
                                    </div>
                                 </div>
                              </a>
                           </div>
                        </div>
                        {if $call_hashtag_page->_numOfRows gte 1}
                           <div class="row align-items-end">
                           {foreach $call_hashtag_page as $keycall_hashtag_list => $valuecall_hashtag_list}
                              <div class="col-md-3 col-sm-4 col-12 search-click" data-url="{$ul}/{$menuActive}/hashtag/{$valuecall_hashtag_list.id}">
                                 <div class="list-link desc" style="margin-top: 10px;">#{$valuecall_hashtag_list.subject}</div>
                              </div>
                           {/foreach}
                           </div>
                        {/if}
                     </li>
                  {/foreach}
               </ul>

            {/if}
         </div>

         <div class="editor-content">
         </div>
         {if $callSearchAll->_numOfRows gte 1 && $pagination['totalpage'] gte 2}
            {include file="{$incfile.pagination}"}
         {/if}
      </div>
   </div>

</section>
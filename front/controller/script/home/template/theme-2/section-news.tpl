{if count($arrNewsList) > 0}
  <div class="git-news-block">
    <div class="container">
      <div class="row">
        <div class="col-lg-4">
          <div class="h-title text-uppercase">
            GIT NEWS
          </div>
        </div>
        <div class="col-lg-8">
          <ul class="default-nav-tabs nav nav-tabs" id="gitNewsTab" role="tablist">
            {foreach $arrNewsList as $keyarrNewsList => $valuearrNewsList}
              <li class="nav-item">
                <a class="nav-link {if $keyarrNewsList eq 0}active{/if}" id="news-{$keyarrNewsList}-tab"
                  href="#news-{$keyarrNewsList}" data-toggle="tab">{$valuearrNewsList['group']['subject']}</a>
              </li>
            {/foreach}
            {* <li class="nav-item">
                <a class="nav-link active" id="news-01-tab" data-toggle="tab" href="#news-01" role="tab"
                  aria-controls="news-01" aria-selected="true">ข่าวสาร/กิจกรรม </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="news-02-tab" data-toggle="tab" href="#news-02" role="tab"
                  aria-controls="news-02" aria-selected="false">งานประชุม/สัมมนา</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="news-03-tab" data-toggle="tab" href="#news-03" role="tab"
                  aria-controls="news-03" aria-selected="false">การจัดซื้อ/จัดจ้าง</a>
              </li> *}
          </ul>
        </div>
      </div>
      <div class="row">
        <div class="col">
          <p class="desc">
            {$lang['home']['government']}
          </p>
          <div class="default-tab-content tab-content" id="gitNewsTabContent">
            {foreach $arrNewsList as $keyarrNewsList => $valuearrNewsList}
              <div class="tab-pane fade show {if $keyarrNewsList eq 0}active{/if}" id="news-{$keyarrNewsList}"
                role="tabpanel" aria-labelledby="news-{$keyarrNewsList}-tab">
                {if count($valuearrNewsList.list.pin) > 0}
                  <div class="default-slider default-slider-dots slider">

                    {foreach $valuearrNewsList.list.pin as $keySubNews => $valueSubNews}

                      <div class="item">
                        <a href="{$ul}/about/{$valueSubNews.menuid}/{$valueSubNews.gid}/detail/{$valueSubNews.id}" class="link" title="">
                          <div class="wrapper">
                            <figure class="cover">
                              <img src="{$valueSubNews['pic']|fileinclude:"real":{$valueSubNews['masterkey']}:"link"}" alt="{$valueSubNews.subject}">
                            </figure>
                            <div class="inner">
                              <div class="title text-limit -x2">
                              {$valueSubNews.subject}
                              </div>
                              <div class="desc text-limit -x2">
                              {$valueSubNews.title}
                              </div>
                              <div class="divider"></div>
                              <div class="date">
                              {$valueSubNews.credate|DateThai:'1':{$langon}:'full'}
                                <span class="icon feather-chevron-right"></span>
                              </div>
                            </div>
                          </div>
                        </a>
                      </div>

                    {/foreach}
                  </div>
                {/if}
              </div>
            {/foreach}
          </div>
          <div class="action">
            <a href="{$ul}/about/{$valueSubNews.menuid}" class="btn btn-lg btn-border-light" title="{$lang['system']['viewsall']}">{$lang['system']['viewsall']}</a>
          </div>
        </div>
      </div>
    </div>
  </div>
{/if}
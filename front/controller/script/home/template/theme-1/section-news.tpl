{if count($arrNewsList) > 0}
  <div class="git-news-block">
    <div class="container">
      <div class="h-title text-primary text-uppercase">GIT News</div>
      <ul class="default-nav-tab nav nav-pills">
        {foreach $arrNewsList as $keyarrNewsList => $valuearrNewsList}
          <li>
            <a class="item {if $keyarrNewsList eq 0}active{/if}" href="#News{$keyarrNewsList}" data-toggle="tab">{$valuearrNewsList['group']['subject']}</a>
          </li>
        {/foreach}
      </ul>
    </div>
    <div class="tab-content clearfix">
    {foreach $arrNewsList as $keyarrNewsList => $valuearrNewsList}
      <div class="tab-pane {if $keyarrNewsList eq 0}active{/if}" id="News{$keyarrNewsList}">
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
                      <div class="date">
                        <span class="feather-calendar"></span>
                        {$valueSubNews.credate|DateThai:'1':{$langon}:'full'}
                      </div>
                    </div>
                  </div>
                </a>
              </div>
              {$menuidcontent = $valueSubNews.menuid}
            {/foreach}
          </div>
        {/if}
        {if count($valuearrNewsList.list.unpin) > 0}
          <div class="container">
            <ul class="item-list">
            {foreach $valuearrNewsList.list.unpin as $keySubNews => $valueSubNews}
              <li>
                <a href="{$ul}/about/{$valueSubNews.menuid}/{$valueSubNews.gid}/detail/{$valueSubNews.id}" class="link">
                  <div class="news-block-item">
                    <div class="row align-items-center">
                      <div class="col-sm-auto">
                        <figure class="cover">
                          <img src="{$valueSubNews['pic']|fileinclude:"real":{$valueSubNews['masterkey']}:"link"}" alt="{$valueSubNews.subject}">
                        </figure>
                      </div>
                      <div class="col-sm">
                        <div class="title">
                          {$valueSubNews.subject}
                        </div>
                        <div class="row">
                          <div class="col-sm">
                            <div class="desc">
                              {$valueSubNews.subject}
                            </div>
                          </div>
                          <div class="col-sm-auto">
                            <div class="date">
                              <span class="feather icon-calendar"></span>
                              <span class="typo-xs text-black">{$valueSubNews.credate|DateThai:'1':{$langon}:'full'}</span>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </a>
              </li>
            {/foreach}
            </ul>
            <div class="load-more-hide text-center">
              <a href="{$ul}/about/{$menuidcontent}" class="btn btn-border-primary" title="{$lang['system']['viewsall']}">{$lang['system']['viewsall']}</a>
            </div>
          </div>
        {/if}
      </div>
    {/foreach}
    </div>
  </div>
{/if}
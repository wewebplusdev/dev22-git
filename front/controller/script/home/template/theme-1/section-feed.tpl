{if $callFeed->_numOfRows gte 1}
  <div class="git-information-block">
    <div class="container -lg">
      <div class="h-title m-0">GIT Information Center</div>
      <div class="sub-title">{$lang['home']['feedtitle']}</div>
      <div class="default-slider default-slider-dots slider">
      {foreach $callFeed as $keycallFeed => $valuecallFeed}
          <div class="item">
            <a href="{$ul}/information/detail/{$valuecallFeed.id}" class="link" title="">
              <div class="wrapper">
                <div class="inner">
                  <div class="title text-limit -x2">
                  {$valuecallFeed.subject}
                  </div>
                  <div class="desc text-limit -x2">
                  {$valuecallFeed.title}
                  </div>
                  <div class="divider"></div>
                  <div class="date">
                    <div class="row align-items-center">
                      <div class="col">
                        <span class="feather-calendar"></span>
                        {$valuecallFeed.credate}
                      </div>
                      <div class="col-auto">
                        <span class="icon feather-chevron-right"></span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </a>
          </div>
      {/foreach}
      </div>
      <div class="load-more-hide text-center">
        <a href="{$ul}/information" class="btn btn-lg btn-border-light"
          title="{$lang['system']['viewsall']}">{$lang['system']['viewsall']}</a>
      </div>
    </div>
  </div>
{/if}
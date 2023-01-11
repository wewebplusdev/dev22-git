{if count($arrVdoList) > 0}
  <div class="git-vdo-block">
    <div class="container -lg">
      <div class="h-title text-center">GIT VDO</div>
      <ul class="nav nav-pills default-nav-tab">
        {foreach $arrVdoList as $keyarrVdoList => $valuearrVdoList}
          <li>
            <a class="item {if $keyarrVdoList eq 0}active{/if}" href="#vdoGallery{$keyarrVdoList}" data-toggle="tab">{$valuearrVdoList.group.subject}</a>
          </li>
        {/foreach}
      </ul>
      <div class="tab-content clearfix">
        {foreach $arrVdoList as $keyarrVdoList => $valuearrVdoList}
          <div class="tab-pane {if $keyarrVdoList eq 0}active{/if}" id="vdoGallery{$keyarrVdoList}">
            {if count($valuearrVdoList.list) > 0}
              <div class="thumb wow" data-wow-duration="2s">
                <div class="video-gallery-banner">
                  <figure class="cover -banner">
                    <img src="{$template}/assets/img/upload/git-vdo.png" alt="git vdo">
                  </figure>
                  <a class="link" href="https://www.youtube.com/channel/UCaAgFkuBiRcX1NO1HOaQ9Iw" target="_blank">
                    <div class="title text-uppercase"> Let's talk about GIT Museum</div>
                    <div class="desc">
                      {$lang['home']['vdotitle']}
                    </div>
                    <span class="feather icon-play-circle"></span>
                  </a>
                </div>
                <ul class="item-list">
                  {foreach $valuearrVdoList.list as $keySubNews => $valueSubNews}
                    <li>
                      <div class="wrapper">
                        <div class="yt-frame">
                          <div class="icon">
                            <span class="feather icon-play-circle"></span>
                          </div>

                          {* <div class="iframe-container">
                            <iframe class="responsive-iframe" src="https://www.youtube.com/embed/4r9TbKLCus0"
                              title="YouTube video player"
                              allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                              allowfullscreen></iframe>
                          </div> *}
                          {if $valueSubNews.filevdo neq ""}
                            <div class="iframe-mp4">
                              <video class="slide-video slide-media" loop muted autoplay controls preload="metadata" poster="">
                                  <source src="{$valueSubNews['filevdo']|fileinclude:'vdo':{$valueSubNews['masterkey']}:'vdo'}" type="video/mp4" />
                              </video>
                            </div>
                            {else}
                              <div class="iframe-mp4">
                                <video class="slide-video slide-media" loop muted autoplay controls preload="metadata" poster="">
                                    <source src="./front/template/default/assets/img/upload/slide-clock.mp4" type="video/mp4" />
                                </video>
                              </div>
                          {/if}
                          <figure class="cover">
                            <img src="{$valueSubNews['pic']|fileinclude:"real":{$valueSubNews['masterkey']}:"link"}" alt="{$valueSubNews.subject}">
                          </figure>
                        </div>
                        <a class="link" href="{$ul}/video/{$valuearrVdoList.group.id}/detail/{$valueSubNews.id}" target="_blank">
                          <div class="desc text-center text-uppercase">
                            {$valueSubNews.subject}
                          </div>
                        </a>
                      </div>
                    </li>
                  {/foreach}
                </ul>
              </div>
            {/if}
          </div>
        {/foreach}
      </div>
      <div class="load-more-hide text-center pb-5">
        <a href="{$ul}/video" class="btn btn-primary" title="{$lang['system']['viewsall']}">{$lang['system']['viewsall']}</a>
      </div>
    </div>
  </div>
{/if}
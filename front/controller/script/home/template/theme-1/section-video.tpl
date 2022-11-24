{if count($arrVdoList) > 0}
  
  <div class="git-vdo-block">
    <div class="container -lg">
      <div class="h-title text-center">GIT VDO</div>
      <ul class="nav nav-pills default-nav-tab">
        {foreach $arrVdoList as $keyarrVdoList => $valuearrVdoList}
          <li>
            <a class="item {if $keyarrVdoList eq 0}active{/if}" href="#vdoGallery{$keyarrVdoList}" data-toggle="tab">{$valuearrVdoList.subject}</a>
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
                  <a class="link" href="javascript:void(0)">
                    <div class="title text-uppercase"> Let's talk about GIT Museum</div>
                    <div class="desc">
                      เจาะกระแสการพัฒนาอย่างยั่งยืน ทางรอดของ<br>อุตสาหกรรมอัญมณีและเครื่องประดับยุคใหม่
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
                          <div class="iframe-container">
                            <iframe class="responsive-iframe" src="https://www.youtube.com/embed/4r9TbKLCus0"
                              title="YouTube video player"
                              allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                              allowfullscreen></iframe>
                          </div>
                          <figure class="cover">
                            <img src="{$valueSubNews['pic']|fileinclude:"real":{$valueSubNews['masterkey']}:"link"}" alt="{$valueSubNews.subject}">
                          </figure>
                        </div>
                        <a class="link" href="video-gallery-detail.php" target="_blank">
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
        <a href="javascript:void(0)" class="btn btn-primary" title="ดูทั้งหมด">ดูทั้งหมด</a>
      </div>
    </div>
  </div>
{/if}
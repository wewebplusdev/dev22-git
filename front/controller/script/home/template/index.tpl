<section class="site-container" style="background-color: #{$themeWebsite.color|default:'#FFFFF'};">
  <div class="main-page">

    <div class="top-graphic">
      <div class="default-slider-dots slider">
      {foreach $callTopGraphic as $keycallTopGraphic => $valuecallTopGraphic}
        <div class="tpg-item">
          <a href="" class="link">
            <figure class="cover">
              <img src="{$valuecallTopGraphic['pic']|fileinclude:"real":{$valuecallTopGraphic['masterkey']}:"link"}" alt="{$valuecallTopGraphic.pic}">
            </figure>
            <div class="info">
              <div class="container">
                <div class="wrapper">
                  {if $valuecallTopGraphic['subject'] neq ""}
                  <div class="title text-limit -x2">
                    {$valuecallTopGraphic['subject']}
                  </div>
                  {/if}
                  <div class="row align-items-end">
                    {if $valuecallTopGraphic['title'] neq ""}
                    <div class="col-md">
                      <div class="desc text-limit -x2">
                        {$valuecallTopGraphic['title']}
                      </div>
                    </div>
                    {/if}
                    {if $valuecallTopGraphic['url'] neq "" && $valuecallTopGraphic['url'] neq "#"}
                    <div class="col-md-auto">
                      <button {if $valuecallTopGraphic['url'] neq "" && $valuecallTopGraphic['url'] neq "#"}href="{$valuecallTopGraphic['url']}"{if $valuecallTopGraphic['target'] eq 2}target="_blank"{/if}{else}href="javascript:void(0);"{/if} class="btn btn-primary" title="btn btn-primary">{$lang['system']['viewmore']}</button>
                    </div>
                    {/if}
                  </div>
                </div>
              </div>
            </div>
          </a>
        </div>
      {/foreach}
      </div>
    </div>

    {foreach $sectionMainpage as $keysectionMainpage => $valuesectionMainpage}
      {include file={$valuesectionMainpage.file}}
    {/foreach}

    <div class="git-information-block">
      <div class="container -lg">
        <div class="h-title m-0">GIT Information Center</div>
        <div class="sub-title">ศูนย์ข้อมูลอัญมณีและเครื่องประดับ</div>
        <div class="default-slider default-slider-dots slider">
          <?php for ($i = 1; $i <= 7; $i++) { ?>
          <div class="item">
            <a href="" class="link" title="">
              <div class="wrapper">
                <div class="inner">
                  <div class="title text-limit -x2">
                    บทความวิชาการ เรื่อง “ตลาด อีคอมเมิร์ซเมืองรองของจีนอีคอมเมิร์ซเมืองรองของจีน...
                  </div>
                  <div class="desc text-limit -x2">
                    บทความวิชาการ เรื่อง “ตลาดอีคอมเมิร์ซเมืองรองของจีน โอกาสทองอัญมณีและเครื่องประดับไทย”
                  </div>
                  <div class="divider"></div>
                  <div class="date">
                    <div class="row align-items-center">
                      <div class="col">
                        <span class="feather-calendar"></span>
                        16 มิถุนายน 2565
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
          <?php } ?>
        </div>
        <div class="load-more-hide text-center">
          <a href="javascript:void(0)" class="btn btn-lg btn-border-light" title="ดูทั้งหมด">อ่านต่อ</a>
        </div>
      </div>
    </div>
    <div class="git-service-block">
      <div class="container -lg">
        <div class="row">
          <div class="col-md-4">
            <div class="row align-items-center">
              <div class="col-md-12 col">
                <div class="h-title m-0">GIT SEVICES</div>
                <div class="sub-title">บริการของเรา</div>
              </div>
              <div class="col-md-12 col-auto">
                <div class="load-more-hide text-left mb-4">
                  <a href="javascript:void(0)" class="btn btn-border-primary" title="ดูทั้งหมด">ดูทั้งหมด</a>
                </div>
              </div>
            </div>
            <div class="sidebar-menus">
              <ul class="item-list">
                <li class="menu-service">
                  <a class="link topic active" href="#Tab1" data-toggle="tab">
                    <div class="block-dots">
                      <div class="dots-topic active"></div>
                    </div>
                    บริการห้องปฏิบัติการ
                  </a>
                  <ul class="sub-topic -block">
                    <li class="-border-top">
                      <a class="link" href="javascript:void(0)">ตรวจสอบอัญมณี</a>
                    </li>
                    <li class="">
                      <a class="link" href="javascript:void(0)">ตรวจสอบโลหะมีค่า</a>
                    </li>
                    <li class="">
                      <a class="link" href="javascript:void(0)">Laser Engraving</a>
                    </li>
                    <li class="">
                      <a class="link" href="javascript:void(0)">แกะสลักอัญมณี</a>
                    </li>
                  </ul>
                </li>
              </ul>
              <ul class="item-list">
                <li class="menu-service">
                  <a class="link topic" href="#Tab2" data-toggle="tab">
                    <div class="block-dots">
                      <div class="dots-topic"></div>
                    </div>
                    บริการฝึกอบรม
                  </a>
                  <ul class="sub-topic">
                    <li class="-border-top">
                      <a class="link" href="javascript:void(0)">ตรวจสอบอัญมณี</a>
                    </li>
                    <li class="">
                      <a class="link" href="javascript:void(0)">ตรวจสอบโลหะมีค่า</a>
                    </li>
                    <li class="">
                      <a class="link" href="javascript:void(0)">Laser Engraving</a>
                    </li>
                    <li class="">
                      <a class="link" href="javascript:void(0)">แกะสลักอัญมณี</a>
                    </li>
                  </ul>
                </li>
              </ul>
              <ul class="item-list">
                <li class="menu-service">
                  <a class="link topic" href="#Tab3" data-toggle="tab">
                    <div class="block-dots">
                      <div class="dots-topic"></div>
                    </div>
                    บริการข้อมูลข่าวสาร
                  </a>
                  <ul class="sub-topic">
                    <li class="-border-top">
                      <a class="link" href="javascript:void(0)">ตรวจสอบอัญมณี</a>
                    </li>
                    <li class="">
                      <a class="link" href="javascript:void(0)">ตรวจสอบโลหะมีค่า</a>
                    </li>
                    <li class="">
                      <a class="link" href="javascript:void(0)">Laser Engraving</a>
                    </li>
                    <li class="">
                      <a class="link" href="javascript:void(0)">แกะสลักอัญมณี</a>
                    </li>
                  </ul>
                </li>
              </ul>
            </div>
          </div>
          <div class="col-md">
            <figure class="cover">
              <img src="{$template}/assets/img/upload/service-image.png" alt="gallery thumbnail">
            </figure>
            <div class="tab-content clearfix">
              <div class="tab-pane active" id="Tab1">
                <div class="topic-content-block">
                  <div class="h-title m-0">บริการห้องปฏิบัติการ1</div>
                  <div class="sub-title">ตรวจสอบอัญมณี</div>
                  <div class="desc">
                    ห้องปฏิบัติการตรวจสอบอัญมณีของสถาบันวิจัยและพัฒนาอัญมณีและเครื่องประดับแห่งชาติ (องค์การมหาชน)….
                  </div>
                  <div class="load-more-hide text-left mt-4">
                    <a href="javascript:void(0)" class="btn btn-border-primary" title="ดูทั้งหมด">อ่านต่อ</a>
                  </div>
                </div>
              </div>
              <div class="tab-pane" id="Tab2">
                <div class="topic-content-block">
                  <div class="h-title m-0">บริการห้องปฏิบัติการ2</div>
                  <div class="sub-title">ตรวจสอบอัญมณี</div>
                  <div class="desc">
                    ห้องปฏิบัติการตรวจสอบอัญมณีของสถาบันวิจัยและพัฒนาอัญมณีและเครื่องประดับแห่งชาติ (องค์การมหาชน)….
                  </div>
                  <div class="load-more-hide text-left mt-4">
                    <a href="javascript:void(0)" class="btn btn-border-primary" title="ดูทั้งหมด">อ่านต่อ</a>
                  </div>
                </div>
              </div>
              <div class="tab-pane" id="Tab3">
                <div class="topic-content-block tab-pane">
                  <div class="h-title m-0">บริการห้องปฏิบัติการ3</div>
                  <div class="sub-title">ตรวจสอบอัญมณี</div>
                  <div class="desc">
                    ห้องปฏิบัติการตรวจสอบอัญมณีของสถาบันวิจัยและพัฒนาอัญมณีและเครื่องประดับแห่งชาติ (องค์การมหาชน)….
                  </div>
                  <div class="load-more-hide text-left mt-4">
                    <a href="javascript:void(0)" class="btn btn-border-primary" title="ดูทั้งหมด">อ่านต่อ</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="git-vdo-block">
      <div class="container -lg">
        <div class="h-title text-center">GIT VDO</div>
        <ul class="nav nav-pills default-nav-tab">
          <li>
            <a class="item active" href="#vdoGallery1" data-toggle="tab">Museum & Gems Treasure</a>
          </li>
          <li>
            <a class="item" href="#vdoGallery2" data-toggle="tab">Guide for Trade Development</a>
          </li>
        </ul>
        <div class="tab-content clearfix">
          <div class="tab-pane active" id="vdoGallery1">
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
                <?php for ($i = 1; $i <= 3; $i++) { ?>
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
                        <img src="{$template}/assets/img/upload/git-vdo.png" alt="git vdo">
                      </figure>
                    </div>
                    <a class="link" href="video-gallery-detail.php" target="_blank">
                      <div class="desc text-center text-uppercase">
                        ซื้อเครื่องประดับเพชร พลอย <br>อย่างไรให้มั่นใจ
                      </div>
                    </a>
                  </div>
                </li>
                <?php } ?>
              </ul>
            </div>
          </div>
          <div class="tab-pane" id="vdoGallery2">
            <div class="thumb wow" data-wow-duration="2s">
              vdoGallery2
            </div>
          </div>
        </div>
        <div class="load-more-hide text-center pb-5">
          <a href="javascript:void(0)" class="btn btn-primary" title="ดูทั้งหมด">ดูทั้งหมด</a>
        </div>
      </div>

    </div>
  </div>

</section>
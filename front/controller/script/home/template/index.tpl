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

    <div class="lab-update-block">
      <div class="container">
        <div class="h-title text-uppercase text-center text-primary">
          GIT LAB UPDATE
        </div>
        <ul class="default-nav-tab nav nav-pills">
          <li>
            <a class="item active" href="#labUpdate1" data-toggle="tab">บันทึกจากห้องปฏิบัติการ</a>
          </li>
          <li>
            <a class="item" href="#labUpdate2" data-toggle="tab">ความรู้เรื่องโลหะมีค่า</a>
          </li>
        </ul>
        <div class="tab-content clearfix">
          <div class="tab-pane active" id="labUpdate1">
            <div class="default-list">
              <div class="default-slider default-slider-arrows default-slider-dots slider">
                <?php for ($i = 1; $i <= 5; $i++) { ?>

                <div class="item">
                  <a href="" class="link">
                    <div class="row no-gutters">
                      <div class="col-auto">
                        <span class="icon feather-file-text"></span>
                      </div>
                      <div class="col">
                        <div class="inner">
                          <div class="row">
                            <div class="col-sm">
                              <div class="title typo-md fw-medium text-limit">
                                Star Sapphire Doublets
                              </div>
                              <div class="desc typo-s text-limit -x2">
                                PDF File Size: 1 MB
                              </div>
                            </div>
                            <div class="col-sm-auto">
                              <div class="date typo-s">
                                16 มิถุนายน 2565
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </a>
                </div>

                <?php } ?>

              </div>
            </div>
          </div>
          <div class="tab-pane" id="labUpdate2">
            labUpdate2
          </div>
        </div>
        <div class="load-more text-center action">
          <a href="" class="btn btn-border-primary" title="ดูทั้งหมด">ดูทั้งหมด</a>
        </div>
      </div>
    </div>

    <div class="git-library-weblinks">
      <div class="container">
        <div class="row gutters-lg-40">
          <div class="col-lg-5">
            <div class="git-library-block">
              <div class="h-title text-primary">
                GIT LIBRARY
              </div>
              <div class="library-form bg-primary text-light">
                <div class="row gutters-10">
                  <div class="col-auto">
                    <span class="icon feather-search"></span>
                  </div>
                  <div class="col">
                    <div class="desc">
                      WEB OPAC 2.0 สืบค้นหนังสือ/วารสาร
                      ห้องสมุดอัญมณีและเครื่องประดับ
                    </div>
                  </div>
                </div>
                <form data-toggle="validator" role="form" class="form-default" method="post">
                  <div class="form-group">
                    <label class="control-label visuallyhidden" for="bookSearch">สืบค้นหนังสือ/วารสาร</label>
                    <div class="block-control">
                      <input type="text" class="form-control" id="bookSearch" placeholder="">
                    </div>
                  </div>
                  <div class="form-group has-feedback">
                    <label class="control-label visuallyhidden" for="category">ติดต่อ</label>
                    <div class="select-wrapper">
                      <select class="select-control" name="category" id="category" style="width: 100%;">
                        <option value="SELECT1">Title</option>
                        <option value="SELECT2">Subject</option>
                      </select>
                    </div>
                  </div>
                  <button type="submit" id="submitForm" class="btn fluid btn-light" title="ค้นหา">ค้นหา</button>
                </form>
              </div>
            </div>
          </div>
          <div class="col-lg-7">
            <div class="weblink-block">
              <div class="row align-items-center gutters-10">
                <div class="col">
                  <div class="h-title text-primary text-uppercase mb-0">GIT WEBLINK</div>
                </div>
                <div class="col-auto">
                  <div class="action">
                    <a href="" class="btn btn-border-primary" title="ดูทั้งหมด">ดูทั้งหมด</a>
                  </div>
                </div>
              </div>
              <div class="weblink-list">
                <div class="default-slider default-slider-dots slider">
                  <?php for ($i = 1; $i <= 8; $i++) { ?>
                  <div class="item">
                    <a href="" class="link" title="web link">
                      <div class="thumbnail">
                        <figure class="cover">
                          <img src="{$template}/assets/img//static/git-weblink.jpg" alt="logo">
                        </figure>
                      </div>
                    </a>
                  </div>
                  <?php } ?>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="museum-block">
      <div class="container">
        <div class="museum-header">
          <div class="h-title fw-semi-bold text-light text-uppercase mb-1">
            GIT MUSEUM
          </div>
          <div class="desc">
            พิพิธภัณฑ์อัญมณีและเครื่องประดับสถาบันวิจัยและพัฒนาอัญมณี <br>
            และเครื่องประดับแห่งชาติ (องค์การมหาชน)
          </div>
          <a href="javascript:void(0)" class="btn btn-border-light" title="ดูทั้งหมด">ดูทั้งหมด</a>
        </div>
      </div>
      <div class="museum-container container">
        <ul class="item-list">
          <li>
            <a href="" class="link" title="GIT Museum">
              <div class="wrapper biggest"
                style="background-image: url({$template}/assets/img/background/bg-museum-01.jpg);">
                <div class="topic">
                  <span class="feather-arrow-up-right"></span>
                  GIT Museum
                </div>
                <div class="title">
                  พิพิธภัณฑ์อัญมณี <br>
                  และเครื่องประดับ
                </div>
                <div class="desc text-limit -x2">
                  การจัดตั้งพิพิธภัณฑ์อัญมณีและเครื่องประดับ
                  เป็นส่วนหนึ่งในแผนงานของสถาบัน
                </div>
              </div>
            </a>
          </li>
          <li>
            <a href="" class="link" title="GIT Virtual Museum">
              <div class="wrapper"
                style="background-image: url({$template}/assets/img/background/bg-museum-02.jpg);">
                <div class="topic">
                  <span class="feather-arrow-up-right"></span>
                  GIT Virtual Museum
                </div>
                <div class="title">
                  พิพิธภัณฑ์เสมือนจริง <br>
                  Virtual Museum
                </div>
                <div class="desc text-limit -x2">
                  แหล่งเรียนรู้ทางด้านอัญมณีและเครื่องประดับ
                  ควบคู่ไปกับการได้ท่องโลกแบบเสมือนจริง
                </div>
              </div>
            </a>
          </li>
          <li>
            <a href="" class="link" title="GIT Virtual Exhibition">
              <div class="wrapper"
                style="background-image: url({$template}/assets/img/background/bg-museum-03.jpg);">
                <div class="topic">
                  <span class="feather-arrow-up-right"></span>
                  GIT Virtual Exhibition
                </div>
                <div class="title">
                  อีสานเดิ้น <br>
                  (Esan Dern)
                </div>
                <div class="desc text-limit -x2">
                  นิทรรศการเครื่องประดับอัตลักษณ์อีสานใต้
                  ได้รวบรวมผลงานต้นแบบเครื่องประดับ
                </div>
              </div>
            </a>
          </li>
        </ul>
      </div>
    </div>

    <div class="git-book-block">
      <div class="container">
        <div class="h-title text-primary text-uppercase text-center">
          GIT Book
        </div>
        <ul class="default-nav-tab -x3 nav nav-pills">
          <li>
            <a class="item" href="#gitBook1" data-toggle="tab">GIT Trade Publication</a>
          </li>
          <li>
            <a class="item active" href="#gitBook2" data-toggle="tab">JEWELRY CONCEPT STORE BY GIT</a>
          </li>
          <li>
            <a class="item" href="#gitBook3" data-toggle="tab">GIT Bookstore</a>
          </li>
        </ul>
        <div class="tab-content clearfix">
          <div class="tab-pane" id="gitBook1">
            gitBook1
          </div>
          <div class="tab-pane active" id="gitBook2">
            <div class="booklist">
              <div class="default-slider default-slider-dots slider">

                <?php for ($i = 1; $i <= 10; $i++) { ?>

                <div class="item">
                  <a href="" class="link" title="">
                    <figure class="cover">
                      <img src="{$template}/assets/img/static/git-book-02.jpg" alt="GIT BOOK">
                    </figure>
                    <div class="title text-center typo-sm">
                      GIT Gem & Jewelry
                      Review Issue 1/2022
                    </div>
                  </a>
                </div>

                <?php } ?>

              </div>
            </div>
          </div>
          <div class="tab-pane" id="gitBook3">
            <div class="booklist">
              <div class="default-slider default-slider-dots slider">

                <?php for ($i = 1; $i <= 10; $i++) { ?>

                <div class="item">
                  <a href="" class="link" title="">
                    <figure class="cover">
                      <img src="{$template}/assets/img/static/git-book-02.jpg" alt="GIT BOOK">
                    </figure>
                    <div class="title text-center typo-sm">
                      GIT Gem & Jewelry
                      Review Is
                    </div>
                  </a>
                </div>

                <?php } ?>

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
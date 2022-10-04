<section class="site-container">
  <div class="default-header">
    <div class="top-graphic mb-4">
      <figure class="cover">
        <img class="figure-img img-fluid" src="{$template}/assets/img/background/mock-top-grapphic-2.png" alt="">
      </figure>
      <div class="container">
        <div class="wrapper">
          <div class="title typo-lg">เกี่ยวกับเรา</div>
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">หน้าหลัก</a></li>
            <li class="breadcrumb-item"><a href="#">งานบริการ</a></li>
            <li class="breadcrumb-item active" aria-current="page">นโยบายและแผน</li>
          </ol>
        </div>
      </div>
    </div>
  </div>
  <div class="default-page about">
    <div class="container">
      <div class="default-nav-slider">
        <div class="item">
          <a href="javascript:void(0)" class="active">ตรวจสอบอัญมณี</a>
        </div>
        <div class="item">
          <a href="javascript:void(0)">ตรวจสอบโลหะมีค่า</a>
        </div>
        <div class="item">
          <a href="javascript:void(0))">ศูนย์ให้คำปรึกษา</a>
        </div>
        <div class="item">
          <a href="javascript:void(0)">เครื่องมือ</a>
        </div>
        <div class="item">
          <a href="javascript:void(0)">สัมมนา/workshop</a>
        </div>
        <div class="item">
          <a href="javascript:void(0)">ราคา</a>
        </div>
        <div class="item">
          <a href="javascript:void(0)">การประกวดออกแบบ</a>
        </div>
        <div class="item">
          <a href="javascript:void(0)">การบริหารและพัฒนาทรัพยากรบุคคล</a>
        </div>
      </div>
    </div>

    <div class="border-nav-slider"></div>

    <div class="container mt-5">
      <h2 class="text-primary mb-4">นโยบายและแผน</h2>
      <div class="default-tab-slider default-slick">
        <div class="item">
          <div class="tab-block active">
            <a class="text-limit" href="javascript:void(0)">แนะนำบริการ</a>
          </div>
        </div>
        <div class="item">
          <div class="tab-block">
            <a class="text-limit" href="javascript:void(0)">ค่าบริการ</a>
          </div>
        </div>
        <div class="item">
          <div class="tab-block">
            <a class="text-limit" href="javascript:void(0)">ตรวจสอบใบรายงาน</a>
          </div>
        </div>
        <div class="item">
          <div class="tab-block">
            <a class="text-limit" href="javascript:void(0)">ติดตามงานตรวจสอบ</a>
          </div>
        </div>
        <div class="item">
          <div class="tab-block">
            <a class="text-limit" href="javascript:void(0)">การประกวดออกแบบการประกวดออกแบบ</a>
          </div>
        </div>
        <div class="item">
          <div class="tab-block">
            <a class="text-limit" href="javascript:void(0)">การประกวดออกแบบการประกวดออกแบบ</a>
          </div>
        </div>
        <div class="item">
          <div class="tab-block">
            <a class="text-limit" href="javascript:void(0)">การประกวดออกแบบการประกวดออกแบบ</a>
          </div>
        </div>
      </div>
    </div>

    <div class="container">
      <div class="row align-items-center">
        <div class="col-auto">
          <div class="h-title">นโยบายและแผน</div>
        </div>
        <div class="col text-right">
          <div class="form-group has-feedback">
            <label class="control-label visuallyhidden" for="yearSelect">ปี :</label>

            <div class="select-wrapper">
              <span>ปี :</span>
              <select class="select-control select-year" name="ordernews" id="yearSelect">
                <option value="SELECT1">2565</option>
                <option value="SELECT2">2564</option>
                <option value="SELECT3">2563</option>
              </select>
            </div>
          </div>
        </div>
      </div>
      <?php for ($i = 1; $i <= 5; $i++) { ?>
      <div class="news-block">
        <div class="row align-items-center">
          <div class="col-sm-auto">
            <figure class="cover">
              <img src="{$template}/assets/img/static/news-image.png" alt="news image">
            </figure>
          </div>
          <div class="col-sm">
            <div class="title">GIT จับมือ Shop Channel สร้างความเชื่อมั่นผู้บริโภคอัญมณีและเครื่องประดับ</div>
            <div class="row">
              <div class="col-12">
                <div class="desc">GIT จับมือ Shop Channel สร้างความเชื่อมั่นผู้บริโภคอัญมณีและเครื่องประดับ
                  หนุนผู้ประกอบการขยายช่องทางการค้าผ่านแพลตฟอร์ม Home Shopping 24 ชั่วโมง</div>
              </div>
              <div class="col-12">
                <!-- <img class="" src="{$template}/assets/img/icon/icon-calendar.svg" alt="icon calendar"> -->
                <span class="feather icon-calendar"></span>
                <span class="typo-xs text-black">16 มิถุนายน 2565</span>
              </div>
              <div class="col-12">
                <a href="javascript:void(0)" class="btn" title="btn">อ่านต่อ</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <?php } ?>

      <div class="editor-content">
      </div>
      <div class="pagination-block">
        <div class="row align-items-center">
          <div class="col-sm-6">
            <div class="pagination-label">
              ทั้งหมด 93 รายการ
            </div>
          </div>
          <div class="col-sm-6">
            <div class="pagination">
              <ul class="item-list">
                <li>
                  <a href="/th/news?page=2" title="ก่อนหน้า">
                    <span class="feather icon-chevron-left" aria-hidden="true"></span>
                  </a>
                </li>
                <li class="active">
                  <a href="javascript:void(0)" title="1">1</a>
                </li>
                <li class="">
                  <a href="javascript:void(0)" title="2">2</a>
                </li>
                <li class="">
                  <a href="javascript:void(0)" title="3">3</a>
                </li>
                <li class="">
                  <a href="javascript:void(0)" title="4">4</a>
                </li>
                <li class="">
                  <a href="javascript:void(0)" title="5">5</a>
                </li>
                <li class="">
                  <a href="javascript:void(0)" title="6">6</a>
                </li>
                <li>
                  <a href="javascript:void(0)" title="ถัดไป">
                    <span class="feather icon-chevron-right" aria-hidden="true"></span>
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>
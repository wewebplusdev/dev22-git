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
              <li class="nav-item">
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
              </li>
            </ul>
          </div>
        </div>
        <div class="row">
          <div class="col">
            <p class="desc">
              เป็นองค์กรของรัฐในรูปแบบองค์การมหาชนตามพระราชบัญญัติองค์การมหาชน พ.ศ. 2542
            </p>
            <div class="default-tab-content tab-content" id="gitNewsTabContent">
              <div class="tab-pane fade show active" id="news-01" role="tabpanel" aria-labelledby="news-01-tab">
                <div class="default-slider default-slider-dots slider">

                  {for $index=1 to 5}

                  <div class="item">
                    <a href="" class="link" title="">
                      <div class="wrapper">
                        <figure class="cover">
                          <img src="{$template}/assets/img/static/service-01.jpg"
                            alt="news thumbnail">
                        </figure>
                        <div class="inner">
                          <div class="title text-limit -x2">
                            GIT จับมือ Shop Channel สร้าง
                            ความเชื่อมั่นผู้บริโภคอัญมณี
                          </div>
                          <div class="desc text-limit -x2">
                            GIT จับมือ Shop Channel สร้างความเชื่อ
                            มั่นผู้บริโภคอัญมณีและเครื่องประดับ
                          </div>
                          <div class="divider"></div>
                          <div class="date">
                            16 มิถุนายน 2565
                            <span class="icon feather-chevron-right"></span>
                          </div>
                        </div>
                      </div>
                    </a>
                  </div>

                  {/for}
                </div>
              </div>
              <div class="tab-pane fade" id="news-02" role="tabpanel" aria-labelledby="news-02-tab">
                news-02
              </div>
              <div class="tab-pane fade" id="news-03" role="tabpanel" aria-labelledby="news-03-tab">
                news-03
              </div>
            </div>
            <div class="action">
              <a href="" class="btn btn-lg btn-border-light" title="ดูทั้งหมด">ดูทั้งหมด</a>
            </div>
          </div>
        </div>
      </div>
    </div>
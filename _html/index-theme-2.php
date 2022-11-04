<!DOCTYPE html>
<html lang="en">

<head>
    <?php include('inc/metatag.php'); ?>
    <?php include('inc/loadstyle.php'); ?>
</head>

<body class="theme-2">

    <div class="global-container">
        <?php include('inc/header-theme-2.php'); ?>

        <section class="site-container">
            <div class="main-page">

                <div class="top-graphic">

                    <div class="default-slider-dots slider">

                        <?php for ($i = 1; $i <= 3; $i++) { ?>

                            <div class="tpg-item">
                                <a href="" class="link">
                                    <figure class="cover">
                                        <img src="<?php echo $core_template; ?>/assets/img/static/tpg-theme-2.jpg" alt="top graphic">
                                    </figure>
                                    <div class="info">
                                        <div class="container">
                                            <div class="wrapper">
                                                <div class="title text-limit -x2">
                                                    สถาบันวิจัยและพัฒนาอัญมณีและเครื่องประดับแห่งชาติ (องค์การมหาชน)
                                                </div>
                                                <div class="row align-items-end">
                                                    <div class="col-md">
                                                        <div class="desc text-limit -x2">
                                                            เป็นองค์กรของรัฐในรูปแบบองค์การมหาชนตามพระราชบัญญัติองค์การมหาชน พ.ศ. 2542 <br>
                                                            จัดตั้งขึ้นตาม พระราชกฤษฎีกาจัดตั้งสถาบันวิจัยและพัฒนาอัญมณี และเครื่องประดับแห่งชาติ (องค์การมหาชน) พ.ศ. 2546
                                                        </div>
                                                    </div>
                                                    <div class="col-md-auto">
                                                        <button href="" class="btn btn-border-light" title="btn btn-primary">อ่านต่อ</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="tpg-item">
                                <a href="" class="link">
                                    <figure class="cover">
                                        <img src="<?php echo $core_template; ?>/assets/img/static/tpg-theme-2-02.jpg" alt="top graphic">
                                    </figure>
                                    <div class="info">
                                        <div class="container">
                                            <div class="wrapper">
                                                <div class="title text-limit -x2">
                                                    สถาบันวิจัยและพัฒนาอัญมณีและเครื่องประดับแห่งชาติ (องค์การมหาชน)
                                                </div>
                                                <div class="row align-items-end">
                                                    <div class="col-md">
                                                        <div class="desc text-limit -x2">
                                                            เป็นองค์กรของรัฐในรูปแบบองค์การมหาชนตามพระราชบัญญัติองค์การมหาชน พ.ศ. 2542 <br>
                                                            จัดตั้งขึ้นตาม พระราชกฤษฎีกาจัดตั้งสถาบันวิจัยและพัฒนาอัญมณี และเครื่องประดับแห่งชาติ (องค์การมหาชน) พ.ศ. 2546
                                                        </div>
                                                    </div>
                                                    <div class="col-md-auto">
                                                        <button type="button" class="btn btn-border-light">อ่านต่อ</button>
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

                <div class="services-block">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="left-side">
                                    <div class="h-title">
                                        งานบริการ
                                    </div>
                                    <p class="desc">
                                        เป็นองค์กรของรัฐในรูปแบบองค์การ
                                        มหาชนตามพระราชบัญญัติองค์การ
                                        มหาชน พ.ศ. 2542
                                    </p>
                                    <a href="" class="btn btn-lg btn-border-light" title="อ่านต่อ">อ่านต่อ</a>
                                </div>
                            </div>
                            <div class="col-lg-8">
                                <div class="right-side">

                                    <ul class="default-nav-tabs nav nav-tabs" id="updateTab" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active" id="service-01-tab" data-toggle="tab" href="#service-01" role="tab" aria-controls="service-01" aria-selected="true">บริการห้องปฏิบัติการ</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="service-02-tab" data-toggle="tab" href="#service-02" role="tab" aria-controls="service-02" aria-selected="false">บริการฝึกอบรม</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="service-03-tab" data-toggle="tab" href="#service-03" role="tab" aria-controls="service-03" aria-selected="false">บริการข้อมูลข่าวสาร</a>
                                        </li>
                                    </ul>
                                    <div class="default-tab-content tab-content" id="updateTabContent">
                                        <div class="tab-pane fade show active" id="service-01" role="tabpanel" aria-labelledby="service-01-tab">
                                            <div class="default-slider default-slider-dots slider">

                                                <?php for ($i = 1; $i <= 8; $i++) { ?>

                                                    <div class="item">
                                                        <a href="" class="link" title="ตรวจสอบอัญมณี">
                                                            <figure class="cover">
                                                                <img src="<?php echo $core_template; ?>/assets/img/static/service-01.jpg" alt="ตรวจสอบอัญมณี">
                                                            </figure>
                                                            <div class="inner">
                                                                <div class="title">
                                                                    ตรวจสอบอัญมณี
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </div>

                                                <?php } ?>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="service-02" role="tabpanel" aria-labelledby="service-02-tab">
                                            service-02
                                        </div>
                                        <div class="tab-pane fade" id="service-03" role="tabpanel" aria-labelledby="service-03-tab">
                                            service-03
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="e-service-block">
                    <div class="container">
                        <div class="h-title text-uppercase">E - Service</div>
                        <div class="desc typo-md">
                            เป็นองค์กรของรัฐในรูปแบบองค์การมหาชนตามพระราชบัญญัติองค์การมหาชน พ.ศ. 2542
                        </div>
                        <ul class="item-list">
                            <?php for ($i = 1; $i <= 4; $i++) { ?>
                                <li>
                                    <a href="" class="link" title="Sample Tracking">
                                        <div class="icon">
                                            <div class="circle">
                                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="121" height="94.95" viewBox="0 0 121 94.95">
                                                    <g>
                                                        <path data-name="Path 2003" d="M60.739,96.7a.925.925,0,0,1-.673-.29L.253,33.039a.926.926,0,0,1-.129-1.1L15.6,5.031a.925.925,0,0,1,.8-.464h8.135a.925.925,0,1,1,0,1.85h-7.6L2.071,32.268,60.736,94.424,118.908,32.3,102.371,6.417H40.5a.925.925,0,0,1,0-1.85h62.38a.926.926,0,0,1,.78.427l17.2,26.911a.926.926,0,0,1-.1,1.13L61.414,96.407a.926.926,0,0,1-.673.293Z" transform="translate(0 -1.75)" fill="#013f94" />
                                                        <path data-name="Path 2004" d="M.925,40.058a.925.925,0,0,1-.2-1.828L72.314,22.148a.925.925,0,1,1,.406,1.805L1.129,40.035a.928.928,0,0,1-.2.023" transform="translate(0 -8.479)" fill="#013f94" />
                                                        <path data-name="Path 2005" d="M144.665,33.329a.92.92,0,0,1-.3-.049L64.791,6.369a.925.925,0,0,1,.593-1.753l79.578,26.911a.925.925,0,0,1-.3,1.8" transform="translate(-24.591 -1.75)" fill="#013f94" />
                                                        <path data-name="Path 2006" d="M50.315,7.484a3.742,3.742,0,1,1,3.747-3.742,3.749,3.749,0,0,1-3.747,3.742m0-5.634a1.892,1.892,0,1,0,1.9,1.892,1.9,1.9,0,0,0-1.9-1.892" transform="translate(-17.848)" fill="#013f94" />
                                                    </g>
                                                </svg>
                                            </div>
                                        </div>
                                        <div class="text-center">
                                            <div class="title text-uppercase">SAMPLE TRACKING</div>
                                            <div class="desc">Gem & Precious Metals Testing</div>
                                        </div>
                                    </a>
                                </li>
                            <?php } ?>
                        </ul>
                        <div class="action">
                            <a href="" class="btn btn-lg btn-border-primary" title="ดูทั้งหมด">ดูทั้งหมด</a>
                        </div>
                    </div>
                </div>

                <div class="training-block">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="left-side">
                                    <div class="h-title text-uppercase">GIT Training
                                        Movement
                                    </div>
                                    <div class="desc typo-md">
                                        เป็นองค์กรของรัฐในรูปแบบองค์การมหาชนตามพระราชบัญญัติองค์การมหาชน พ.ศ. 2542
                                    </div>
                                    <div class="action">
                                        <a href="" class="btn btn-lg btn-border-light" title="ดูทั้งหมด">ดูทั้งหมด</a>
                                    </div>
                                    <div class="graphic">
                                        <img src="<?php echo $core_template; ?>/assets/img/static/graphic-diamonds.png" alt="diamonds">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-8">
                                <ul class="default-nav-tabs nav nav-tabs" id="trainingTab" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="training-01-tab" data-toggle="tab" href="#training-01" role="tab" aria-controls="training-01" aria-selected="true">หลักสูตรฝึกอบรมระยะยาว</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="training-02-tab" data-toggle="tab" href="#training-02" role="tab" aria-controls="training-02" aria-selected="false">หลักสูตรฝึกอบรมระยะสั้น</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="training-03-tab" data-toggle="tab" href="#training-03" role="tab" aria-controls="training-03" aria-selected="false">หลักสูตรฝึกอบรม (ออนไลน์)</a>
                                    </li>
                                </ul>
                                <div class="default-tab-content tab-content" id="trainingTabContent">
                                    <div class="tab-pane fade show active" id="training-01" role="tabpanel" aria-labelledby="training-01-tab">
                                        <div class="default-list">
                                            <div class="default-slider default-slider-dots slider">
                                                <?php for ($i = 1; $i <= 5; $i++) { ?>

                                                    <div class="item">
                                                        <a href="" class="link">
                                                            <div class="row no-gutters">
                                                                <div class="col-auto">
                                                                    <span class="icon feather-file-text"></span>
                                                                </div>
                                                                <div class="col">
                                                                    <div class="inner">
                                                                        <div class="title typo-md fw-medium text-limit">ขอเชิญเข้าร่วม Workshop “เทคนิคการสร้าง</div>
                                                                        <div class="desc typo-s text-limit -x2">
                                                                            ในวันพฤหัสบดี-ศุกร์ที่ 18-19 สิงหาคม 2565 เวลา 09.00 – 16.00 น. (ค่าใช้จ่าย 2,900 บาท/ท่าน) รับเพียง 18 ท่านเท่านั้น)
                                                                        </div>
                                                                        <div class="date typo-s">
                                                                            16 มิถุนายน 2565
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
                                    <div class="tab-pane fade" id="training-02" role="tabpanel" aria-labelledby="training-02-tab">
                                        training-02
                                    </div>
                                    <div class="tab-pane fade" id="training-03" role="tabpanel" aria-labelledby="training-03-tab">
                                        training-03
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="banner-I-block">
                    <div class="container">
                        <div class="banner-txt text-center">
                            <div class="title text-uppercase">
                                GIT <span class="text-secondary">Carat</span> Application
                            </div>
                            <div class="subtitle">Platform ให้คำปรึกษา ทุกเรื่องอัญมณีและเครื่องประดับครั้งแรกบนมือถือวันนี้</div>
                            <div class="desc">ดาวน์โหลดฟรีได้แล้วทั้ง IOS และ Android</div>
                            <div class="action">
                                <a href="https://apps.apple.com/th/app/carat/id1498901876?itsct=apps_box_badge&amp;itscg=30200" title="Download on the App Store" target="_blank">
                                    <img src="<?php echo $core_template; ?>/assets/img/icon/appstore.svg" alt="Download on the App Store">
                                </a>
                                <a href="https://play.google.com/store/apps/details?id=com.ultimate.carat&hl=th" title="Get it on Google Play" target="_blank">
                                    <img src="<?php echo $core_template; ?>/assets/img/icon/playstore.svg" alt="Get it on Google Play">
                                </a>
                            </div>
                        </div>
                        <div class="graphic">
                            <img src="<?php echo $core_template; ?>/assets/img/static/graphic-smartphone.png" alt="smartphone">
                        </div>
                    </div>
                </div>

                <div class="museum-block">
                    <div class="container">
                        <div class="text-center">
                            <div class="h-title fw-semi-bold text-primary text-uppercase">
                                GIT MUSEUM
                            </div>
                        </div>

                        <div class="row gutters-15">
                            <div class="col-lg-8 col-md-6 mb-md-0 mb-3">
                                <a href="" class="link" title="GIT Museum">
                                    <div class="wrapper biggest" style="background-image: url(<?php echo $core_template; ?>/assets/img/background/bg-museum-01.jpg);">
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
                            </div>
                            <div class="col">
                                <div class="row h-100">
                                    <div class="col-12 mb-3">
                                        <a href="" class="link" title="GIT Virtual Museum">
                                            <div class="wrapper" style="background-image: url(<?php echo $core_template; ?>/assets/img/background/bg-museum-02.jpg);">
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
                                    </div>
                                    <div class="col-12">
                                        <a href="" class="link" title="GIT Virtual Exhibition">
                                            <div class="wrapper" style="background-image: url(<?php echo $core_template; ?>/assets/img/background/bg-museum-03.jpg);">
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
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

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
                                        <a class="nav-link active" id="news-01-tab" data-toggle="tab" href="#news-01" role="tab" aria-controls="news-01" aria-selected="true">ข่าวสาร/กิจกรรม </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="news-02-tab" data-toggle="tab" href="#news-02" role="tab" aria-controls="news-02" aria-selected="false">งานประชุม/สัมมนา</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="news-03-tab" data-toggle="tab" href="#news-03" role="tab" aria-controls="news-03" aria-selected="false">การจัดซื้อ/จัดจ้าง</a>
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

                                            <?php for ($i = 1; $i <= 5; $i++) { ?>

                                                <div class="item">
                                                    <a href="" class="link" title="">
                                                        <div class="wrapper">
                                                            <figure class="cover">
                                                                <img src="<?php echo $core_template; ?>/assets/img/static/service-01.jpg" alt="news thumbnail">
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

                                            <?php } ?>
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

                <div class="banner-II-block bg-primary">
                    <figure class="cover">
                        <img src="<?php echo $core_template; ?>/assets/img/background/bg-banner-theme-2-02.jpg" alt="banner II">
                    </figure>
                    <div class="wrapper">
                        <div class="inner">
                            <div class="title typo-xl fw-semi-bold text-light text-uppercase text-center px-3">
                                GEM AND JEWELRY TOURIST ATTRACTION
                            </div>
                        </div>
                    </div>
                </div>

                <div class="lab-update-block">
                    <div class="container">
                        <div class="h-title">GIT LAB UPDATE</div>
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
                        <div class="action">
                            <a href="" class="btn btn-lg btn-border-light" title="ดูทั้งหมด">ดูทั้งหมด</a>
                        </div>
                    </div>
                </div>

                <div class="banner-III">
                    <div class="container">
                        <div class="wrapper">
                            <div class="quote text-uppercase">
                                GIT’s World Jewelry Design <br>
                                and Faceting Awards
                            </div>
                            <div class="frame-img">
                                <figure class="cover">
                                    <img src="<?php echo $core_template; ?>/assets/img/static/flint-stone-towards-sky.png" alt="diamonds" style="mix-blend-mode: multiply;">
                                </figure>
                            </div>
                            <div class="box bg-primary text-light">
                                <div class="inner">
                                    <div class="title">
                                        GIT’s World Jewelry Design
                                        Awards 2021
                                    </div>
                                    <div class="subtitle">
                                        ภายใต้ธีม "Intergeneration Jewelry : <br>
                                        Jewlry for every generation"
                                    </div>
                                    <div class="desc">
                                        สอบถามรายละเอียดเพิ่มเติมที่ : 02 634 4999 <br>
                                        ติดตามรายละเอียดการประกวดที่ : www.gitwjda.com
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

        </section>

        <?php include('inc/footer-theme-2.php'); ?>
    </div>

    <?php include('inc/loadscript.php'); ?>

</body>

</html>
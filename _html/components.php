<!DOCTYPE html>
<html lang="en">

<head>
    <?php include('inc/metatag.php'); ?>
    <?php include('inc/loadstyle.php'); ?>
</head>

<body class="">

    <div class="global-container">
        <?php include('inc/header.php'); ?>

        <section class="site-container">

            <div class="default-filter">
                <div class="container">
                    <form data-toggle="validator" role="form" class="form-default" method="post">
                        <div class="row gutters-15 align-items-end">
                            <div class="col-lg-5 col-12 mr-auto">
                                <div class="form-group">
                                    <div class="row no-gutters">
                                        <div class="col">
                                            <label class="visuallyhidden" for="keywords">Search</label>
                                            <input type="search" id="keywords" class="form-control" placeholder="ค้นหา...">
                                        </div>
                                        <div class="col-auto">
                                            <button type="button" class="btn btn-primary btn-search">
                                                <span class="feather icon-search"></span>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-12">
                                <div class="form-group has-feedback">
                                    <label class="control-label" for="contact">จัดเรียง</label>
                                    <div class="select-wrapper">
                                        <select class="select-control" name="contact" id="contact" style="width: 100%;">
                                            <option value="SELECT1">จัดเรียงตามระบบ</option>
                                            <option value="SELECT2">ปรับปรุงล่าสุด</option>
                                            <option value="SELECT3">ดาวน์โหลดสูง - ต่ำ</option>
                                            <option value="SELECT4">เข้าชมสูง - ต่ำ</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <div class="container">

                <div class="group-list year-list">
                    <ul class="nav-list">
                        <li>
                            <a href="" class="link active">ปี 2566</a>
                        </li>
                        <li>
                            <a href="" class="link ">ปี 2565</a>
                        </li>
                        <li>
                            <a href="" class="link ">ปี 2565</a>
                        </li>
                        <li>
                            <a href="" class="link ">ปี 2565</a>
                        </li>
                        <li>
                            <a href="" class="link ">ปี 2565</a>
                        </li>
                    </ul>
                </div>

            </div>

            <div class="container">
                <div class="components">
                    <div class="row py-5">
                        <div class="col-md-6 col-12 mb-5">
                            <div class="typo-lg">
                                <h2 class="text-black">FONT WEIGHT</h2>
                                <div class="fw-extra-light">
                                    Content = คอนเทนต์ fw-extra-light
                                </div>
                                <div class="fw-light">
                                    Content = คอนเทนต์ fw-light
                                </div>
                                <div class="fw-normal">
                                    Content = คอนเทนต์ fw-normal
                                </div>
                                <div class="fw-medium">
                                    Content = คอนเทนต์ fw-medium
                                </div>
                                <div class="fw-semi-bold">
                                    Content = คอนเทนต์ fw-semi-bold
                                </div>
                                <div class="fw-bold">
                                    Content = คอนเทนต์ fw-bold
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-12 mb-5">
                            <div class="font-normal">
                                <h2 class="text-black">FONT SIZE</h2>
                                <div class="typo-xs">
                                    Content = คอนเทนต์ typo-xs
                                </div>
                                <div class="typo-sm">
                                    Content = คอนเทนต์ typo-sm
                                </div>
                                <div class="typo-md">
                                    Content = คอนเทนต์ typo-md
                                </div>
                                <div class="typo-lg">
                                    Content = คอนเทนต์ typo-lg
                                </div>
                                <div class="typo-xl">
                                    Content = คอนเทนต์ typo-xl
                                </div>
                                <div class="typo-default">
                                    Content = คอนเทนต์ typo-default
                                </div>
                            </div>
                        </div>
                        <div class="col-12 mb-5">
                            <div class="font-normal typo-xl">
                                <h2 class="text-black">COLORS</h2>
                                <div class="text-primary">
                                    Content = คอนเทนต์ text-primary
                                </div>
                                <div class="text-primary-light">
                                    Content = คอนเทนต์ text-primary-light
                                </div>
                                <div class="text-secondary">
                                    Content = คอนเทนต์ text-secondary
                                </div>
                                <div class="text-gray">
                                    Content = คอนเทนต์ text-gray
                                </div>
                                <div class="text-dark">
                                    Content = คอนเทนต์ text-dark
                                </div>
                                <div class="text-default">
                                    Content = คอนเทนต์ text-default
                                </div>
                                <div class="text-success">
                                    Content = คอนเทนต์ text-success
                                </div>
                                <div class="text-info">
                                    Content = คอนเทนต์ text-info
                                </div>
                                <div class="text-warning">
                                    Content = คอนเทนต์ text-warning
                                </div>
                                <div class="text-danger">
                                    Content = คอนเทนต์ text-danger
                                </div>
                            </div>
                        </div>
                        <div class="col-12 mb-5">
                            <div class="button">
                                <h2 class="text-black">BUTTONS</h2>
                                <a href="" class="btn" title="btn">btn</a>
                                <a href="" class="btn btn-primary" title="btn btn-primary">btn btn-primary</a>
                                <a href="" class="btn btn-border-primary" title="btn btn-primary">btn btn-border-primary</a>
                                <a href="" class="btn btn-lg btn-primary" title="btn btn-lg btn-primary">btn btn-lg btn-primary</a>
                                <a href="" class="btn btn-xl btn-primary" title="btn btn-xl btn-primary">btn btn-xl btn-primary</a>
                            </div>
                            <div class="button mt-5">
                                <h2 class="text-black mb-3">BUTTONS STYLE</h2>
                                <a href="" class="btn btn-primary" title="btn btn-primary">
                                    <span class="feather icon-plus"></span>
                                    btn btn-primary
                                </a>
                                <a href="" class="btn btn-primary" title="btn btn-primary">
                                    btn btn-primary
                                    <!-- <img class="icon ml-3" src="<?php echo $core_template; ?>/assets/img/icon/icon-deatail.svg" alt="icon file"> -->
                                    <svg xmlns="http://www.w3.org/2000/svg" width="51.235" height="7.199" viewBox="0 0 51.235 7.199">
                                        <path data-name="Path 5" d="M4670.6,5544.179h50.033l-6.306-6.347" transform="translate(-4670.602 -5537.48)" fill="none" stroke="#fff" stroke-width="1" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                        <div class="col-12 mb-5">
                            <form data-toggle="validator" role="form" class="form-default" method="post">
                                <div class="row">
                                    <div class="col-md-6 col-12 mb-5">
                                        <div class="input">
                                            <h2 class="text-black">INPUT</h2>
                                            <div class="form-group has-feedback">
                                                <label class="control-label" for="email">Example input</label>
                                                <div class="block-control">
                                                    <input type="email" class="form-control" id="email" placeholder="input">
                                                </div>
                                            </div>
                                            <div class="form-group form-search">
                                                <label class="control-label visuallyhidden" for="jobSearch">Example input</label>
                                                <input type="text" class="form-control" id="jobSearch" aria-describedby="jobSearch" placeholder="Job | Search">
                                                <div class="form-control-icon">
                                                    <span class="icon-from -icon-search"></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-6 mb-5">
                                        <div class="form-group has-feedback">
                                            <h2 class="text-black">SELECT</h2>
                                            <label class="control-label" for="mockSelect1">Example select</label>
                                            <div class="select-wrapper">
                                                <select class="select-control" name="ordernews" id="mockSelect1" style="width: 100%;">
                                                    <option value="SELECT1">Select1</option>
                                                    <option value="SELECT2">Select2</option>
                                                    <option value="SELECT3">Select3</option>
                                                    <option value="SELECT4">Select4</option>
                                                    <option value="SELECT5">Select5</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group has-feedback">
                                            <label class="control-label visuallyhidden" for="yearSelect">Year select</label>
                                            <div class="select-wrapper">
                                                <select class="select-control select-year" name="ordernews" id="yearSelect">
                                                    <option value="SELECT1">2565</option>
                                                    <option value="SELECT2">2564</option>
                                                    <option value="SELECT3">2563</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 col-12 mb-5">
                                        <div class="radio">
                                            <h2 class="text-black">RADIO</h2>
                                            <fieldset class="p-0">
                                                <legend class="visuallyhidden">radio</legend>
                                                <div class="form-check">
                                                    <input class="form-check-input radio-check" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                                                    <label class="control-label" for="exampleRadios1">
                                                        Default radio
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input radio-check" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
                                                    <label class="control-label" for="exampleRadios2">
                                                        Second default radio
                                                    </label>
                                                </div>
                                                <div class="form-check disabled">
                                                    <input class="form-check-input radio-check" type="radio" name="exampleRadios" id="exampleRadios3" value="option3" disabled>
                                                    <label class="control-label" for="exampleRadios3">
                                                        Disabled radio
                                                    </label>
                                                </div>
                                            </fieldset>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12 mb-5">
                                        <div class="CHECKBOX">
                                            <h2 class="text-black">CHECKBOX</h2>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                                <label class="control-label" for="defaultCheck1">
                                                    Default checkbox
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="defaultCheck2" disabled>
                                                <label class="control-label" for="defaultCheck2">
                                                    Disabled checkbox
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="col-12">
                            <h2 class="text-black mb-4">เอกสารแนบ</h2>
                            <div class="attachment-slider default-slick">
                                <?php for ($i = 1; $i <= 5; $i++) { ?>
                                    <div class="item">
                                        <div class="attachment-block">
                                            <a href="#" class="link" title="เอกสารแนบ">
                                                <div class="row no-gutters">
                                                    <div class="col-auto">
                                                        <!-- <img class="icon" src="<?php echo $core_template; ?>/assets/img/icon/icon-attachment.svg" alt="attachment icon"> -->
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="41" viewBox="0 0 32 41">
                                                            <g data-name="Group 9337" transform="translate(0)">
                                                                <path data-name="Path 2087" d="M9.75,2h15a1,1,0,0,1,.721.307l11.25,11.7A1,1,0,0,1,37,14.7V38.1A4.832,4.832,0,0,1,32.25,43H9.75A4.832,4.832,0,0,1,5,38.1V6.9A4.832,4.832,0,0,1,9.75,2ZM24.324,4H9.75A2.831,2.831,0,0,0,7,6.9V38.1A2.831,2.831,0,0,0,9.75,41h22.5A2.831,2.831,0,0,0,35,38.1v-23Z" transform="translate(-5 -2)" fill="#013f94" />
                                                                <path data-name="Path 2088" d="M32.438,15.438H21a1,1,0,0,1-1-1V3a1,1,0,0,1,2,0V13.438H32.438a1,1,0,0,1,0,2Z" transform="translate(-1.438 -2)" fill="#013f94" />
                                                                <path data-name="Path 2089" d="M26.75,20.5H12a1,1,0,0,1,0-2H26.75a1,1,0,0,1,0,2Z" transform="translate(-3.375 2.949)" fill="#013f94" />
                                                                <path data-name="Path 2090" d="M26.75,26.5H12a1,1,0,0,1,0-2H26.75a1,1,0,0,1,0,2Z" transform="translate(-3.375 4.75)" fill="#013f94" />
                                                                <path data-name="Path 2091" d="M15.813,14.5H12a1,1,0,0,1,0-2h3.813a1,1,0,0,1,0,2Z" transform="translate(-3.518 1.15)" fill="#013f94" />
                                                            </g>
                                                        </svg>
                                                    </div>
                                                    <div class="col">
                                                        <div class="title typo-sm">มาตรการป้องกันการรับสินบน (ไฟล์ PDF ขนาด 293 KB)</div>
                                                        <div class="subtitle typo-x">Type file : 009 Mb | File size: .pdf</div>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                <?php } ?>
                            </div>
                        </div>
                        <div class="col-12">
                            <h2 class="text-black my-5">gallery block</h2>
                            <div class="gallery-block">
                                <div class="gallery-slider-for">
                                    <?php for ($i = 1; $i <= 4; $i++) { ?>
                                        <div class="item">
                                            <a href="<?php echo $core_template; ?>/assets/img/upload/gallery-thumb.jpg" class="link" data-fancybox="gallery">
                                                <figure class="cover">
                                                    <img src="<?php echo $core_template; ?>/assets/img/upload/gallery-thumb.jpg" alt="gallery thumbnail">
                                                </figure>
                                            </a>
                                        </div>
                                        <div class="item">
                                            <a href="<?php echo $core_template; ?>/assets/img/upload/gallery-thumb-flip.jpg" class="link" data-fancybox="gallery">
                                                <figure class="cover">
                                                    <img src="<?php echo $core_template; ?>/assets/img/upload/gallery-thumb-flip.jpg" alt="gallery thumbnail">
                                                </figure>
                                            </a>
                                        </div>
                                    <?php } ?>
                                </div>
                                <div class="gallery-slider-nav">
                                    <?php for ($i = 1; $i <= 4; $i++) { ?>
                                        <div class="item">
                                            <figure class="cover">
                                                <img src="<?php echo $core_template; ?>/assets/img/upload/gallery-thumb.jpg" alt="gallery thumbnail">
                                            </figure>
                                        </div>
                                        <div class="item">
                                            <figure class="cover">
                                                <img src="<?php echo $core_template; ?>/assets/img/upload/gallery-thumb-flip.jpg" alt="gallery thumbnail">
                                            </figure>
                                        </div>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- add -->
                    <div class="row py-5">
                        <div class="col">
                            <h2 class="text-black text-uppercase mb-4">detail link block</h2>
                            <!-- detail link block -->
                            <div class="detail-link-block">
                                <div class="detail-link">
                                    <ul class="item-list fluid">
                                        <?php for ($i = 1; $i <= 2; $i++) { ?>
                                            <li>
                                                <div class="row no-gutters">
                                                    <div class="col-md col-12">
                                                        <div class="detail-thumbnail">
                                                            <figure class="cover">
                                                                <img src="<?php echo $core_template; ?>/assets/img/upload/detail-link.jpg" alt="detail link thumbnail">
                                                            </figure>
                                                        </div>
                                                    </div>
                                                    <div class="col-md col-12">
                                                        <div class="detail-desc">
                                                            <div class="title text-limit -x2">
                                                                หลักสูตรวุฒิบัตรธุรกิจอัญมณีและเครื่องประดับ (GJBD - Gem and Jewelry Business Diploma Program)
                                                            </div>
                                                            <p class="desc text-limit">
                                                                หลักสูตรนี้ออกแบบมาเพื่อผู้ประกอบการ ผู้สนใจทั่วไปชาวไทย ที่ต้องการศึกษา
                                                                ความรู้พื้นฐานทางธุรกิจอัญมณีและเครื่องประดับด้วยเนื้อหาที่เข้มข้นในระยะเวลาที่
                                                                กระชับ ตั้งแต่วิธีการเริ่มต้นทำธุรกิจ จนกระทั่งถึงการผลิตออกเป็นเครื่องประดับ
                                                                พร้อมขาย เพื่อนำไปใช้ประโยชน์ในการซื้อ-ขาย หรือนำไปใช้เพื่อดำเนินธุรกิจ
                                                                ขนาดกลางและขนาดย่อมได้อย่างมีประสิทธิภาพระยะเวลาอบรม
                                                            </p>
                                                            <a href="#" class="btn btn-primary" title="รายละเอียดหลักสูตร">
                                                                รายละเอียดหลักสูตร
                                                                <!-- <img class="icon ml-3" src="<?php echo $core_template; ?>/assets/img/icon/icon-deatail.svg" alt="icon"> -->
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="51.235" height="7.199" viewBox="0 0 51.235 7.199">
                                                                    <path data-name="Path 5" d="M4670.6,5544.179h50.033l-6.306-6.347" transform="translate(-4670.602 -5537.48)" fill="none" stroke="#fff" stroke-width="1" />
                                                                </svg>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        <?php } ?>
                                    </ul>
                                </div>
                            </div>
                            <!-- end detail link block -->
                        </div>
                    </div>

                    <div class="row py-5">
                        <div class="col">
                            <h2 class="text-black text-uppercase mb-4">profile block</h2>
                            <!-- profile block -->
                            <div class="profile-block">
                                <div class="profile">
                                    <div class="h-title">ประธาน</div>
                                    <ul class="item-list">
                                        <?php for ($i = 1; $i <= 3; $i++) { ?>
                                            <li>
                                                <div class="row no-gutters">
                                                    <div class="col">
                                                        <div class="profile-thumbnail">
                                                            <figure class="cover">
                                                                <img src="<?php echo $core_template; ?>/assets/img/upload/profile-thumbnail.jpg" alt="profile thumbnail">
                                                            </figure>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row no-gutters">
                                                    <div class="col">
                                                        <div class="profile-desc">
                                                            <div class="profile-name">
                                                                นางนันทวัลย์ ศกุนตนาค
                                                            </div>

                                                            <div class="profile-position">
                                                                อดีตปลัดกระทรวงพาณิชย์
                                                            </div>
                                                            <div class="profile-timeline">
                                                                (29 มิ.ย. 2564 - ปัจจุบัน)
                                                            </div>
                                                            <div class="profile-contact">
                                                                <div class="email">
                                                                    อีเมล: rphusit@git.or.th
                                                                </div>
                                                                <div class="telephone">
                                                                    เบอร์โทร: 0-2634-4999 ต่อ 633
                                                                </div>
                                                            </div>
                                                            <a href="#" class="btn" title="อ่านรายละเอียด" data-toggle="modal" data-target="#profileBlock">
                                                                <span class="feather icon-chevron-right"></span>
                                                                อ่านรายละเอียด
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        <?php } ?>
                                    </ul>
                                </div>
                            </div>
                            <!-- end profile block -->
                        </div>
                    </div>



                    <div class="row py-5">
                        <div class="col">
                            <h2 class="text-black text-uppercase mb-4">gallery block</h2>
                            <!--gallery block -->
                            <div class="gallery-block">
                                <div class="gallery">
                                    <ul class="item-list">
                                        <?php for ($i = 1; $i <= 3; $i++) { ?>
                                            <li>
                                                <div class="row no-gutters">
                                                    <div class="col">
                                                        <div class="gallery-thumbnail">
                                                            <figure class="cover">
                                                                <img src="<?php echo $core_template; ?>/assets/img/upload/gallery-thumbnail.jpg" alt="gallery thumbnail">
                                                            </figure>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row no-gutters">
                                                    <div class="col">
                                                        <div class="gallery-desc">
                                                            <div class="title">
                                                                ห้องปฎิบัติการ
                                                            </div>
                                                            <a href="#" class="btn btn-primary" title="แสดงภาพ">
                                                                แสดงภาพ
                                                                <!-- <img class="icon ml-3" src="<?php echo $core_template; ?>/assets/img/icon/icon-deatail.svg" alt="icon"> -->
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="51.235" height="7.199" viewBox="0 0 51.235 7.199">
                                                                    <path data-name="Path 5" d="M4670.6,5544.179h50.033l-6.306-6.347" transform="translate(-4670.602 -5537.48)" fill="none" stroke="#fff" stroke-width="1" />
                                                                </svg>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        <?php } ?>
                                    </ul>
                                </div>
                            </div>
                            <!-- end gallery block  -->
                        </div>
                    </div>

                    <div class="row py-5">
                        <div class="col">
                            <h2 class="text-black text-uppercase mb-4">related sites block</h2>
                            <!-- related sites block -->
                            <div class="related-sites-block">
                                <div class="related-sites">
                                    <ul class="item-list">
                                        <?php for ($i = 1; $i <= 5; $i++) { ?>
                                            <li>
                                                <a href="" class="link" title="ห้องปฎิบัติการ">
                                                    <div class="row no-gutters">
                                                        <div class="col">
                                                            <div class="related-sites-thumbnail">
                                                                <figure class="cover">
                                                                    <img src="<?php echo $core_template; ?>/assets/img/upload/related-sites-thumbnail.png" alt="related sites thumbnail">
                                                                </figure>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row no-gutters">
                                                        <div class="col">
                                                            <div class="related-sites-desc">
                                                                <div class="title text-limit">
                                                                    ห้องปฎิบัติการ
                                                                </div>
                                                                <div class="url text-limit">
                                                                    http://www.agta.org
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                        <?php } ?>
                                    </ul>
                                </div>
                            </div>
                            <!-- end related sites block  -->
                        </div>
                    </div>

                    <div class="row py-5">
                        <div class="col">
                            <h2 class="text-black text-uppercase mb-4">image block</h2>
                            <h3 class="text-black text-uppercase mb-4">cover</h3>
                            <!-- image block -->
                            <div class="image-block">
                                <div class="image-thumbnail">
                                    <figure class="cover">
                                        <img src="<?php echo $core_template; ?>/assets/img/upload/image-thumbnail.jpg" alt="image thumbnail">
                                    </figure>
                                </div>
                            </div>
                            <!-- end image block  -->
                        </div>
                    </div>

                    <div class="row py-5">
                        <div class="col">
                            <h2 class="text-black text-uppercase mb-4">Collapse block</h2>
                            <!-- collapse block -->
                            <div class="collapse-block">
                                <div id="accordionInner">
                                    <div class="card">
                                        <div class="card-header" id="headingCollapse">
                                            <h3 class="mb-0">
                                                <button class="btn btn-lg fluid collapsed" data-toggle="collapse" data-target="#collapse" aria-expanded="false" aria-controls="collapse">
                                                    <span>
                                                        ราคาค่าบริการตรวจสอบเพชร
                                                    </span>
                                                    <span class="feather icon-plus-circle"></span>
                                                </button>
                                            </h3>
                                        </div>
                                        <div id="collapse" class="collapse" aria-labelledby="headingCollapse" data-parent="#accordion">
                                            <div class="card-body">
                                                <table class="table table-bordered text-center">
                                                    <thead>
                                                        <tr>
                                                            <th>ชนิด</th>
                                                            <th>น้ำหนัก(กะรัต)</th>
                                                            <th>ประเภท</th>
                                                            <th>ราคา(บาท)*</th>
                                                            <th>ตัวอย่างใบรายงานผล</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>-</td>
                                                            <td>ขนาดเล็กกว่า 1.00</td>
                                                            <td>รายงานพร้อมภาพถ่าย</td>
                                                            <td>1,300 / เม็ด</td>
                                                            <td>-</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end collapse block  -->
                        </div>
                    </div>
                    <!-- add -->
                </div>
            </div>

            <div class="container">
                <h2 class="text-black mb-4">Top Graphic & Breadcrumb</h2>
            </div>
            <div class="default-header">
                <div class="top-graphic">
                    <figure class="cover">
                        <img class="figure-img img-fluid" src="<?php echo $core_template; ?>/assets/img/background/mock-top-grapphic.png" alt="">
                    </figure>
                    <div class="container">
                        <div class="wrapper">
                            <div class="title typo-lg">งานฝึกอบรม</div>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">หน้าหลัก</a></li>
                                <li class="breadcrumb-item"><a href="#">งานฝึกอบรม</a></li>
                                <li class="breadcrumb-item active" aria-current="page">ดูทองเปิดร้านได้</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <h2 class="text-black">Default Nav Slider</h2>
                <div class="default-nav-slider">
                    <div class="item">
                        <a href="javascript:void(0)" class="active">หลักสูตร</a>
                    </div>
                    <div class="item">
                        <a href="javascript:void(0)">สัมมนา/workshop</a>
                    </div>
                    <div class="item">
                        <a href="javascript:void(0))">ราคา</a>
                    </div>
                    <div class="item">
                        <a href="javascript:void(0)">การประกวดออกแบบ</a>
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

            <div class="container mt-md-5 mt-4">
                <h2 class="text-black mb-4">Default Tab Slider</h2>
                <div class="default-tab-slider default-slick">
                    <div class="item">
                        <div class="tab-block active">
                            <a class="text-limit" href="javascript:void(0)">หลักสูตร</a>
                        </div>
                    </div>
                    <div class="item">
                        <div class="tab-block">
                            <a class="text-limit" href="javascript:void(0)">สัมมนา/workshop</a>
                        </div>
                    </div>
                    <!-- <div class="item">
                        <div class="tab-block">
                            <a class="text-limit" href="javascript:void(0)">การประกวดออกแบบ</a>
                        </div>
                    </div>
                    <div class="item">
                        <div class="tab-block">
                            <a class="text-limit" href="javascript:void(0)">ราคา</a>
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
                    </div> -->
                </div>
            </div>
            <div class="container">
                <h2 class="text-black">Block Download</h2>
                <div class="download-block">
                    <div class="row align-items-center">
                        <div class="col-md">
                            <div class="row no-gutters">
                                <div class="col-auto">
                                    <img class="icon -icon-download" src="<?php echo $core_template; ?>/assets/img/icon/icon-attachment.svg" alt="attachment icon">
                                </div>
                                <div class="col">
                                    <div class="title typo-sm">มาตรการป้องกันการรับสินบน (ไฟล์ PDF ขนาด 293 KB)</div>
                                    <div class="row">
                                        <div class="col-sm-auto">
                                            <div class="row">
                                                <div class="col-sm-auto">
                                                    <div class="download-block-type">
                                                        <img class="icon" src="<?php echo $core_template; ?>/assets/img/icon/icon-file.svg" alt="icon file">
                                                        <div class="desc typo-s">
                                                            ขนาดไฟล์ :
                                                            <span>3 MB</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-auto">
                                                    <div class="download-block-type">
                                                        <img class="icon" src="<?php echo $core_template; ?>/assets/img/icon/icon-pdf.svg" alt="icon file">
                                                        <div class="desc typo-s">
                                                            ชนิดไฟล์ :
                                                            <span>PDF</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-auto">
                                            <div class="row">
                                                <div class="col-sm-auto">
                                                    <div class="download-block-type">
                                                        <img class="icon" src="<?php echo $core_template; ?>/assets/img/icon/icon-view-.svg" alt="icon file">
                                                        <div class="desc view typo-s">
                                                            เข้าชม
                                                            <span>202</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-auto">
                                                    <div class="download-block-type">
                                                        <img class="icon" src="<?php echo $core_template; ?>/assets/img/icon/icon-time.svg" alt="icon file">
                                                        <div class="desc time typo-s">
                                                            ปรับปรุงเมื่อ
                                                            <span>20.02.2565</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-auto">
                            <div class="row">
                                <div class="download-block-btn">
                                    <div class="col-auto">
                                        <a href="javascript:void(0)" class="btn" title="btn">อ่านต่อ</a>
                                    </div>
                                    <div class="col-auto">
                                        <a href="javascript:void(0)" class="btn" title="btn">ดาวน์โหลด</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <h2 class="text-black">Block News</h2>
                <div class="news-block">
                    <div class="row align-items-center">
                        <div class="col-sm-auto">
                            <figure class="cover">
                                <img src="<?php echo $core_template; ?>/assets/img/static/news-image.png" alt="news image">
                            </figure>
                        </div>
                        <div class="col-sm">
                            <div class="title">GIT จับมือ Shop Channel สร้างความเชื่อมั่นผู้บริโภคอัญมณีและเครื่องประดับ</div>
                            <div class="row">
                                <div class="col-12">
                                    <div class="desc">GIT จับมือ Shop Channel สร้างความเชื่อมั่นผู้บริโภคอัญมณีและเครื่องประดับ หนุนผู้ประกอบการขยายช่องทางการค้าผ่านแพลตฟอร์ม Home Shopping 24 ชั่วโมง</div>
                                </div>
                                <div class="col-12">
                                    <!-- <img class="" src="<?php echo $core_template; ?>/assets/img/icon/icon-calendar.svg" alt="icon calendar"> -->
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
                <h2 class="text-black">Block Youtube</h2>
                <div class="youtube-block">
                    <div class="iframe-container">
                        <iframe class="responsive-iframe" src="https://www.youtube.com/embed/4r9TbKLCus0" title="YouTube video player" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                </div>

                <h2 class="text-black">Pagination</h2>

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

                <div class="job-source-block mb-5">
                    <div class="row">
                        <div class="col-auto">
                            <div class="title typo-sm">หัวหน้าฝ่ายวิจัยพัฒนาอัญมณีและเครื่องประดับ</div>
                            <div class="desc">(จำนวนที่เปิดรับ : 1 ตำแหน่ง)</div>
                        </div>
                        <div class="col-auto py-3">
                            <div class="desc">ปฏิบัติในฐานะหัวหน้าหน่วยงาน โดยใช้ความรู้ ความสามารถ ประสบการ์ณและความเชี่ยวชาญในด้านวิจัยแลพัฒนา เทคนิคการตรวจสอบ</div>
                        </div>
                    </div>
                    <div class="job-source-location">
                        <div class="row align-items-center">
                            <div class="col">
                                <div class="row align-items-center no-gutters">
                                    <div class="col-auto">
                                        <img src="<?php echo $core_template; ?>/assets/img/icon/icon-location.svg" alt="icon-location">
                                    </div>
                                    <div class="col">
                                        <div class="desc">สถานที่ : กรุงเทพมหานคร</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-auto">
                                <a href="javascript:void(0)" class="link" title="รายละเอียด">
                                    <div class="row align-items-center no-gutters">
                                        <div class="col">
                                            <div class="desc">
                                                รายละเอียด
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <img src="<?php echo $core_template; ?>/assets/img/icon/icon-detail.svg" alt="icon-detail">
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="collapse-block">
                    <div id="accordionInner">
                        <div class="row py-3">
                            <div class="col">
                                <div class="card">
                                    <div class="card-header" id="heading-service-work-1">
                                        <h3 class="mb-0"><button aria-controls="collapse" aria-expanded="true" class="btn btn-lg fluid" data-target="#service-work-1" data-toggle="collapse"><span>ราคาค่าบริการตรวจสอบเพชร</span></button></h3>
                                    </div>

                                    <div aria-labelledby="heading-service-work-1" class="collapse show" data-parent="#accordionInner" id="service-work-1">
                                        <div class="card-body">
                                            <table class="table table-bordered bordered-custom text-center">
                                                <thead>
                                                    <tr>
                                                        <th>ชนิด</th>
                                                        <th>น้ำหนัก(กะรัต)</th>
                                                        <th>ประเภท</th>
                                                        <th>ราคา(บาท)*</th>
                                                        <th>ตัวอย่างใบรายงานผล</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td><img alt="" src="./front/template/default/assets/img/static/diamond-type-1.png" style=" width: 141px; ">
                                                            <div class="desc">การจัดระดับคุณภาพเพชร<br>
                                                                Diamond Grading</div>
                                                        </td>
                                                        <td>
                                                            <p>ขนาดเล็กกว่า 1.00</p>

                                                            <p>1.00 - 5.00</p>

                                                            <p>ขนาดใหญ่กว่า 5.0 ส่วนที่เกิน 5.00 กะรัต</p>
                                                        </td>
                                                        <td>
                                                            <p>รายงานพร้อมภาพถ่าย</p>

                                                            <p>รายงานพร้อมภาพถ่าย</p>

                                                            <p>รายงานพร้อมภาพถ่าย</p>
                                                        </td>
                                                        <td>
                                                            <p>1,300 / เม็ด</p>

                                                            <p>1,500 / เม็ด</p>

                                                            <p>เพิ่ม 700 / กะรัต</p>
                                                        </td>
                                                        <td style="width: 25%;">
                                                            <a class="fancybox th radius" style="display: table-cell;" href="ckeditor/upload/files/1673410427_01_Diamond_Grading_Cer.jpg" data-fancybox-group="gallery" title="">
                                                                <img src="ckeditor/upload/files/1673410427_01_Diamond_Grading_Cer.jpg" border="0" alt="Diamond Report">
                                                            </a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td><img alt="" src="./front/template/default/assets/img/static/diamond-type-2.png" style=" width: 141px; ">
                                                            <div class="desc">การตรวจสอบ<br>
                                                                ความเป็นธรรมชาติของสีเพชร<br>
                                                                Determination of<br>
                                                                authenticity offancy<br>
                                                                Colored Diamond</div>
                                                        </td>
                                                        <td>
                                                            <p>ขนาดเล็กกว่า 1.00</p>

                                                            <p>1.00 – 1.99</p>

                                                            <p>2.00 – 2.99</p>

                                                            <p>3.00 – 4.99</p>

                                                            <p>ใหญ่กว่าหรือเท่ากับ 5.00</p>
                                                        </td>
                                                        <td>
                                                            <p>รายงานพร้อมภาพถ่าย</p>

                                                            <p>รายงานพร้อมภาพถ่าย</p>

                                                            <p>รายงานพร้อมภาพถ่าย</p>

                                                            <p>รายงานพร้อมภาพถ่าย</p>

                                                            <p>รายงานพร้อมภาพถ่าย</p>
                                                        </td>
                                                        <td>
                                                            <p>2,500 / เม็ด</p>

                                                            <p>3,000 / เม็ด</p>

                                                            <p>3,500 / เม็ด</p>

                                                            <p>4,500 / เม็ด</p>

                                                            <p>6,000 / เม็ด</p>
                                                        </td>
                                                        <td style="width: 25%;">
                                                            <a class="fancybox th radius" style="display: table-cell;" href="ckeditor/upload/files/1673410468_02_Dia_ColorTreat_Cer.jpg" data-fancybox-group="gallery" title="">
                                                                <img src="ckeditor/upload/files/1673410468_02_Dia_ColorTreat_Cer.jpg" border="0" alt="Diamond Report"></a>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>

                                            <div class="border-table">
                                                <p>*ราคาดังกล่าวข้างต้นยังไม่รวมภาษีมูลค่าเพิ่ม 7%</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row py-3">
                            <div class="col">
                                <div class="card">
                                    <div class="card-header" id="heading-service-work-2">
                                        <h3 class="mb-0"><button aria-controls="collapse" aria-expanded="false" class="btn btn-lg fluid collapsed" data-target="#service-work-2" data-toggle="collapse"><span>ราคาค่าบริการตรวจสอบอัญมณีแบบเต็ม </span></button></h3>
                                    </div>

                                    <div aria-labelledby="heading-service-work-2" class="collapse" data-parent="#accordionInner" id="service-work-2">
                                        <div class="card-body">
                                            <table class="table table-bordered bordered-custom text-center">
                                                <thead>
                                                    <tr>
                                                        <th>ชนิด</th>
                                                        <th>น้ำหนัก(กะรัต)</th>
                                                        <th style="opacity:0;">ประเภท</th>
                                                        <th>ราคา(บาท)*</th>
                                                        <th>ตัวอย่างใบรายงานผล</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            <img alt="" src="./front/template/default/assets/img/static/ruby-type-1.png" style=" width: 141px; ">
                                                            <div class="desc">ทับทิม (Ruby)</div>
                                                        </td>
                                                        <td>
                                                            <p>เล็กกว่า 3.00<br>
                                                                3.00 - 6.99<br>
                                                                ใหญ่กว่าหรือเท่ากับ 7.00</p>
                                                            &nbsp;

                                                            <p>ตรวจวิเคราะห์<br>
                                                                หาแหล่งกำเนิด</p>
                                                        </td>
                                                        <td>&nbsp;</td>
                                                        <td>
                                                            <p>1,600 / เม็ด<br>
                                                                2,500 / เม็ด<br>
                                                                3,700 / เม็ด</p>
                                                            &nbsp;

                                                            <p class="-fix-height">เพิ่ม 1,500 / เม็ด</p>
                                                        </td>
                                                        <td style="width: 25%;">
                                                            <a class="fancybox th radius" style="display: table-cell;" href="/dev22-git/ckeditor/upload/files/1673410550_03_Ruby_Cer.jpg" data-fancybox="gallery" title="">
                                                                <img src="/dev22-git/ckeditor/upload/files/1673410550_03_Ruby_Cer.jpg" alt="Ruby Report">
                                                            </a>
                                                            <!-- <a href="../front/template/default/assets/img/upload/gallery-thumb.png" class="link" data-fancybox="gallery" tabindex="0">
                                                                <figure class="cover">
                                                                    <img src="../front/template/default/assets/img/upload/gallery-thumb.png" alt="gallery thumb">
                                                                </figure>
                                                            </a> -->
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td><img alt="" src="./front/template/default/assets/img/static/ruby-type-2.png" style=" width: 141px; ">
                                                            <div class="desc">แซปไฟร์ (Sapphire)</div>
                                                        </td>
                                                        <td>
                                                            <p>เล็กกว่า 3.00<br>
                                                                3.00 - 6.99<br>
                                                                ใหญ่กว่าหรือเท่ากับ 7.00</p>
                                                            &nbsp;

                                                            <p>ตรวจวิเคราะห์<br>
                                                                หาแหล่งกำเนิด</p>
                                                        </td>
                                                        <td>&nbsp;</td>
                                                        <td>
                                                            <p>1,600 / เม็ด<br>
                                                                2,500 / เม็ด<br>
                                                                3,700 / เม็ด</p>
                                                            &nbsp;

                                                            <p class="-fix-height">เพิ่ม 1,500 / เม็ด</p>
                                                        </td>

                                                        <td style="width: 25%;">
                                                            <a class="fancybox th radius" style="display: table-cell;" href="ckeditor/upload/files/1673410641_04_Sapphire_Cer.jpg" data-fancybox-group="gallery" title="">
                                                                <img src="ckeditor/upload/files/1673410641_04_Sapphire_Cer.jpg" border="0" alt="Sapphire Report"></a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td><img alt="" src="./front/template/default/assets/img/static/ruby-type-3.png" style=" width: 141px; ">
                                                            <div class="desc">มรกต (Emerald)</div>
                                                        </td>
                                                        <td>
                                                            <p>เล็กกว่า 3.00<br>
                                                                3.00 - 6.99<br>
                                                                ใหญ่กว่าหรือเท่ากับ 7.00</p>
                                                            &nbsp;

                                                            <p>ตรวจวิเคราะห์<br>
                                                                หาแหล่งกำเนิด</p>
                                                        </td>
                                                        <td>&nbsp;</td>
                                                        <td>
                                                            <p>1,600 / เม็ด<br>
                                                                2,500 / เม็ด<br>
                                                                3,700 / เม็ด</p>
                                                            &nbsp;

                                                            <p class="-fix-height">เพิ่ม 1,500 / เม็ด</p>
                                                        </td>
                                                        <td style="width: 25%;">
                                                            <a class="fancybox th radius" style="display: table-cell;" href="ckeditor/upload/files/1673410717_05_Emerald_Cer.jpg" data-fancybox-group="gallery" title="">
                                                                <img src="ckeditor/upload/files/1673410717_05_Emerald_Cer.jpg" border="0" alt="Chrysoberyl Report"></a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td><img alt="" src="./front/template/default/assets/img/static/ruby-type-4.png" style=" width: 141px; ">
                                                            <div class="desc">คริสโซเบริล (Chrysoberyl)</div>
                                                        </td>
                                                        <td>
                                                            <p>เล็กกว่าหรือเท่ากับ&nbsp;20.00<br>
                                                                ใหญ่กว่า 20.00</p>
                                                        </td>
                                                        <td>&nbsp;</td>
                                                        <td>
                                                            <p>1,600 / เม็ด<br>
                                                                2,500 / เม็ด</p>
                                                        </td>
                                                        <td style=" vertical-align: baseline; "><img alt="" src="ckeditor/upload/files/1673410754_06_Chrysoberyl_Cer.jpg" style=" width: 200px;"></td>
                                                    </tr>
                                                    <tr>
                                                        <td><img alt="" src="./front/template/default/assets/img/static/ruby-type-5.png" style=" width: 141px; ">
                                                            <div class="desc">หยก (Jade)</div>
                                                        </td>
                                                        <td>
                                                            <p>เล็กกว่าหรือเท่ากับ 10.00<br>
                                                                ใหญ่กว่า 10.00</p>
                                                        </td>
                                                        <td>&nbsp;</td>
                                                        <td>
                                                            <p>1,600 / เม็ด<br>
                                                                2,500 / เม็ด</p>
                                                        </td>
                                                        <td style="width: 25%;">
                                                            <a class="fancybox th radius" style="display: table-cell;" href="ckeditor/upload/files/1673410855_07_Jade_Fei-Cui_Cer.jpg" data-fancybox-group="gallery" title="">
                                                                <img src="ckeditor/upload/files/1673410855_07_Jade_Fei-Cui_Cer.jpg" border="0" alt="jade Report"></a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td><img alt="" src="./front/template/default/assets/img/static/ruby-type-6.png" style=" width: 141px; ">
                                                            <div class="desc">พลอยชนิดอื่นๆ<br>
                                                                (Other Colored<br>
                                                                Stones)</div>
                                                        </td>
                                                        <td>
                                                            <p>เล็กกว่าหรือเท่ากับ&nbsp;20.00<br>
                                                                ใหญ่กว่า 20.00</p>
                                                        </td>
                                                        <td>&nbsp;</td>
                                                        <td>
                                                            <p>1,600 / เม็ด<br>
                                                                2,500 / เม็ด</p>
                                                        </td>
                                                        <td style="width: 25%;">
                                                            <a class="fancybox th radius" style="display: table-cell;" href="ckeditor/upload/files/1673410949_08_OtherStone_Cer.jpg" data-fancybox-group="gallery" title="">
                                                                <img src="ckeditor/upload/files/1673410949_08_OtherStone_Cer.jpg" border="0" alt="Colored Stone Report"></a>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>

                                            <div class="border-table">
                                                <p>*ราคาดังกล่าวข้างต้นยังไม่รวมภาษีมูลค่าเพิ่ม 7%</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row py-3">
                            <div class="col">
                                <div class="card">
                                    <div class="card-header" id="heading-service-work-3">
                                        <h3 class="mb-0"><button aria-controls="collapse" aria-expanded="false" class="btn btn-lg fluid collapsed" data-target="#service-work-3" data-toggle="collapse"><span>ราคาค่าบริการตรวจสอบไข่มุกแบบเต็ม </span></button></h3>
                                    </div>

                                    <div aria-labelledby="heading-service-work-3" class="collapse" data-parent="#accordionInner" id="service-work-3">
                                        <div class="card-body">
                                            <table class="table table-bordered text-center">
                                                <thead>
                                                    <tr>
                                                        <th>ชนิด</th>
                                                        <th>จำนวน</th>
                                                        <th>ประเภทการตรวจสอบ</th>
                                                        <th>ราคา(บาท)*</th>
                                                        <th>ตัวอย่างใบรายงานผล</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td rowspan="2" style="width: 230px;"><img alt="" src="./front/template/default/assets/img/static/Pearl.png" style="width: 141px;">
                                                            <div class="desc" style="text-align: center;">ไข่มุก</div>
                                                        </td>
                                                        <td>
                                                            <p style="text-align: center;">การตรวจออกใบรับรองแบบเป็นเม็ด</p>
                                                        </td>
                                                        <td>
                                                            <p style="text-align: center;">ขนาดเล็กกว่าหรือเท่ากับ 12 มม.</p>

                                                            <p style="text-align: center;">ขนาดใหญ่กว่า 12 มม.</p>
                                                        </td>
                                                        <td>
                                                            <p>1,600 / เม็ด</p>

                                                            <p>2,500 / เม็ด</p>
                                                        </td>
                                                        <td rowspan="2" style="width: 25%;">
                                                            <a class="fancybox th radius" style="display: table-cell;" href="./front/template/default/assets/img/background/image-service-work-9.png" data-fancybox-group="gallery" title="">
                                                                <img src="./front/template/default/assets/img/background/image-service-work-9.png" border="0" alt="Pearl Report"></a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="display: none;">&nbsp;</td>
                                                        <td>
                                                            <p style="text-align: center;">การตรวจออกใบรับรองแบบเป็นสาย</p>
                                                        </td>
                                                        <td>
                                                            <p style="text-align: center;">สายยาวไม่เกิน 16 นิ้ว และ<br>
                                                                มุกขนาดเล็กกว่าหรือ<br>
                                                                เท่ากับ 12 มม.</p>

                                                            <p style="text-align: center;">สายยาวไม่เกิน 16 นิ้ว และ<br>
                                                                มุกขนาดใหญ่กว่า 12 มม.</p>
                                                        </td>
                                                        <td>
                                                            <p>5,000 / เม็ด</p>

                                                            <p>8,000 / เม็ด</p>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>

                                            <div class="border-table">
                                                <p>*ถ้าสายยาวกว่า 16 นิ้ว ให้เทียบอัตราส่วนเพิ่มตามราคาต่อนิ้ว</p>
                                            </div>

                                            <div class="border-table">
                                                <p>*ราคาดังกล่าวข้างต้นยังไม่รวมภาษีมูลค่าเพิ่ม 7%</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row py-3">
                            <div class="col">
                                <div class="card">
                                    <div class="card-header" id="heading-service-work-4">
                                        <h3 class="mb-0"><button aria-controls="collapse" aria-expanded="false" class="btn btn-lg fluid collapsed" data-target="#service-work-4" data-toggle="collapse">ราคาค่าบริการตรวจสอบเครื่องประดับแบบเต็ม</button></h3>
                                    </div>

                                    <div aria-labelledby="heading-service-work-4" class="collapse" data-parent="#accordionInner" id="service-work-4">
                                        <div class="card-body">
                                            <table class="table table-bordered text-center">
                                                <thead>
                                                    <tr>
                                                        <th>ชนิด</th>
                                                        <th>จำนวน</th>
                                                        <th>ราคา(บาท)*</th>
                                                        <th>ตัวอย่างใบรายงานผล</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td rowspan="3"><img alt="" src="./front/template/default/assets/img/static/10_Jewelry.jpg">
                                                            <div class="desc">การตรวจสอบเครื่อประดับ<br>
                                                                Jewelry Identification</div>
                                                        </td>
                                                        <td>
                                                            <p>พลอย 1 เม็ด</p>
                                                        </td>
                                                        <td>
                                                            <p>3,000 / ชิ้น</p>
                                                        </td>
                                                        <td rowspan="3" style="width: 25%;">
                                                            <a class="fancybox th radius" style="display: table-cell;" href="./front/template/default/assets/img/background/image-service-work-8.png" data-fancybox-group="gallery" title="">
                                                                <img src="./front/template/default/assets/img/background/image-service-work-8.png" border="0" alt="Jewelry Report"></a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="display: none;">&nbsp;</td>
                                                        <td>
                                                            <p>เพรชสุ่ม 1- 5 เม็ด</p>
                                                        </td>
                                                        <td>
                                                            <p>ตรวจพลอยเพิ่มคิดราคาเพิ่ม<br>
                                                                700 / เม็ด</p>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="display: none;">&nbsp;</td>
                                                        <td>
                                                            <p>โลหะ XRF</p>
                                                        </td>
                                                        <td>
                                                            <p>ตรวจเพรชเพิ่มคิดราคาเพิ่ม<br>
                                                                250/ เม็ด</p>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>

                                            <div class="border-table">
                                                <p>*ราคาดังกล่าวข้างต้นยังไม่รวมภาษีมูลค่าเพิ่ม 7%</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row py-3">
                            <div class="col">
                                <div class="card">
                                    <div class="card-header" id="heading-service-work-5">
                                        <h3 class="mb-0"><button aria-controls="collapse" aria-expanded="true" class="btn btn-lg fluid" data-target="#service-work-5" data-toggle="collapse"><span>ราคาค่าบริการตรวจสอบอัญมณีแบบย่อ</span></button></h3>
                                    </div>

                                    <div aria-labelledby="heading-service-work-5" class="collapse" data-parent="#accordionInner" id="service-work-5">
                                        <div class="card-body">
                                            <table class="table table-bordered text-center">
                                                <thead>
                                                    <tr>
                                                        <th>ชนิด</th>
                                                        <th>ประเภทการตรวจสอบ</th>
                                                        <th>ราคา(บาท)*</th>
                                                        <th>ตัวอย่างใบรายงานผล</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            <div class="desc">พลอยเนื้ออ่อนทุกชนิด<br>
                                                                ทุกขนาด (All Sized of Semi-<br>
                                                                Precious Colored Stones)</div>
                                                        </td>
                                                        <td>
                                                            <p>ไม่ตรวจการปรับปรุงคุณภาพ<br>
                                                                ทุกขนาด<br>
                                                                (Without treatment<br>
                                                                determination)</p>

                                                            <p>ตรวจการปรับปรุงคุณภาพ<br>
                                                                ทุกขนาด<br>
                                                                (With treatment<br>
                                                                determination)</p>
                                                        </td>
                                                        <td>
                                                            <p>300 / เม็ด</p>

                                                            <p>500 / เม็ด</p>
                                                        </td>
                                                        <td rowspan="3" style="width: 25%;">
                                                            <a class="fancybox th radius" style="display: table-cell;" href="./front/template/default/assets/img/background/image-service-work-10.png" data-fancybox-group="gallery" title="">
                                                                <img src="./front/template/default/assets/img/background/image-service-work-10.png" border="0" alt="Diamond Report"></a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="desc">พลอยเนื้อแข็งทุกชนิด<br>
                                                                ทุกขนาด<br>
                                                                (All Sized of Precious<br>
                                                                Colored Stones)</div>
                                                        </td>
                                                        <td>
                                                            <p>ตรวจการปรับปรุงคุณภาพ<br>
                                                                ทุกขนาด<br>
                                                                (With treatment<br>
                                                                determination)</p>
                                                        </td>
                                                        <td>
                                                            <p>500 / เม็ด</p>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="desc">เพชรทุกขนาด (ยกเว้น<br>
                                                                เพชรสี) (All Sized of<br>
                                                                Diamonds, except<br>
                                                                color diamonds)</div>
                                                        </td>
                                                        <td>
                                                            <p>ตรวจเพชรธรรมชาติหรือเพชร<br>
                                                                สังเคราะห์<br>
                                                                (Natural or Synthetic<br>
                                                                diamond determination)</p>
                                                        </td>
                                                        <td>
                                                            <p>500 / เม็ด</p>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>

                                            <div class="border-table">
                                                <p>*ราคาดังกล่าวข้างต้นยังไม่รวมภาษีมูลค่าเพิ่ม 7%</p>
                                            </div>

                                            <div class="border-table">
                                                <p>หมายเหตุ : ราคาบริการค่าตรวจสอบอัญมณี อาจมีการเปลี่ยนแปลงได้ โดยไม่ต้องแจ้งให้ทราบล่วงหน้า</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row py-3">
                            <div class="col">
                                <div class="card">
                                    <div class="card-header" id="heading-service-work-6">
                                        <h3 class="mb-0"><button aria-controls="collapse" aria-expanded="true" class="btn btn-lg fluid" data-target="#service-work-6" data-toggle="collapse"><span>ราคาค่าบริการแกะสลักขอบเพชรและพลอย</span></button></h3>
                                    </div>

                                    <div aria-labelledby="heading-service-work-6" class="collapse" data-parent="#accordionInner" id="service-work-6">
                                        <div class="card-body">
                                            <table class="table table-bordered">
                                                <thead>
                                                    <tr>
                                                        <th>บริการแกะสลักขอบเพชรและพลอย</th>
                                                        <th>ราคา (บาท/เม็ด)</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            <p>1. การแกะสลัก Report Number</p>
                                                        </td>
                                                        <td>
                                                            <p>500</p>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <p>2. การแกะสลักตัวหนังสือไม่เกิน 14 ตัวอักษร</p>
                                                        </td>
                                                        <td>
                                                            <p>900</p>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>

                                            <div class="border-table">
                                                <p>หมายเหตุ :<br>
                                                    • อัตราค่าบริการดังกล่าว ยังไม่รวมภาษีมูลค่าเพิ่ม 7%<br>
                                                    • การแกะสลักตัวหนังสือที่มากกว่า 14 ตัวอักษรและ/หรือมีกราฟิก จะมีการตกลงราคาระหว่างสถาบันกับลูกค้าเป็นราย ๆ ไป</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="about-logo-pattern">
                            <div class="row py-3">
                                <div class="col-sm text-center">
                                    <p>
                                        Standard Logo 1 (รูปแบบหลัก)
                                        <br>
                                        ใช้สำหรับวาง รูปแบบทั่วไป
                                    </p>
                                    <a href="/dev22-git/ckeditor/upload/files/id20/Standard_logo1.png" target="_blank">
                                        <img alt="" src="/dev22-git/ckeditor/upload/files/id20/Standard_logo1.png" style="width: 300px; height: 300px; border: 1px solid #0782C1; margin: 0 0 2rem 0;">
                                    </a>
                                </div>
                                <div class="col-sm text-center">
                                    <p>
                                        Standard Logo 2
                                        <br>
                                        ใช้สำหรับวางรูปแบบแนวนอน หรือพื้นที่แคบ
                                    </p>
                                    <a href="/dev22-git/ckeditor/upload/files/id20/Standard_logo2.png" target="_blank">
                                        <img alt="" src="/dev22-git/ckeditor/upload/files/id20/Standard_logo2.png" style="width: 300px; height: 300px; border: 1px solid #0782C1; margin: 0 0 2rem 0;">
                                    </a>
                                </div>
                                <div class="col-md text-center">
                                    <p>
                                        Standard Logo 3
                                        <br>
                                        ใช้สำหรับวางในรูปแบบแนวยาวหรือแนวตั้ง
                                    </p>
                                    <a href="/dev22-git/ckeditor/upload/files/id20/Standard_logo3.jpg" target="_blank">
                                        <img alt="" src="/dev22-git/ckeditor/upload/files/id20/Standard_logo3.jpg" style="width: 300px; height: 300px; border: 1px solid #0782C1; margin: 0 0 2rem 0;">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </section>

        <?php include('inc/footer.php'); ?>
        <?php include('inc/modal.php'); ?>

    </div>

    <?php include('inc/loadscript.php'); ?>

</body>

</html>
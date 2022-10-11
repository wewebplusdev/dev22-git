<!DOCTYPE html>
<html lang="en">

<head>
    <?php include('inc/metatag.php'); ?>
    <?php include('inc/loadstyle.php'); ?>
</head>

<body>
    <div class="global-container">
        <?php include('inc/header.php'); ?>
        <section class="site-container">
            <div class="default-header">
                <div class="top-graphic mb-4">
                    <figure class="cover">
                        <img class="figure-img img-fluid" src="<?php echo $core_template; ?>/assets/img/background/mock-top-grapphic-2.png" alt="">
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
                    <form data-toggle="validator" role="form" class="form-default" method="post">
                        <div class="row align-items-center">
                            <div class="col-md-8">
                                <div class="control-label" for="jobSearch">ค้นหางาน</div>
                                <div class="form-group form-search">
                                    <label class="control-label visuallyhidden" for="jobSearch">ค้นหางาน</label>
                                    <input type="text" class="form-control" id="jobSearch" aria-describedby="jobSearch" placeholder="Job | Search">
                                    <div class="form-control-icon">
                                        <span class="icon-from -icon-search"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 text-right">
                                <div class="control-label" for="mockSelect1" style="opacity: 0;">Example select</div>
                                <div class="form-group has-feedback">
                                    <label class="control-label visuallyhidden" for="mockSelect1">Example select</label>
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
                            </div>
                        </div>
                    </form>
                    <?php for ($i = 1; $i <= 5; $i++) { ?>
                        <div class="job-source-block mb-3">
                            <div class="row">
                                <div class="col-12">
                                    <div class="title typo-sm">หัวหน้าฝ่ายวิจัยพัฒนาอัญมณีและเครื่องประดับ</div>
                                    <div class="desc">(จำนวนที่เปิดรับ : 1 ตำแหน่ง)</div>
                                </div>
                                <div class="col-12 py-3">
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
        <?php include('inc/footer.php'); ?>
    </div>
    <?php include('inc/loadscript.php'); ?>
</body>

</html>
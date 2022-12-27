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
                <div class="top-graphic">
                    <figure class="cover">
                        <img class="figure-img img-fluid" src="<?php echo $core_template; ?>/assets/img/background/mock-top-grapphic.png" alt="">
                    </figure>
                    <div class="container">
                        <div class="wrapper">
                            <div class="title typo-lg">งานบริการข้อมูล</div>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">หน้าหลัก</a></li>
                                <li class="breadcrumb-item"><a href="#">งานบริการข้อมูล</a></li>
                                <li class="breadcrumb-item active" aria-current="page">บทความ</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <div class="default-page information-service">
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
                    <h2 class="text-primary mb-4">บทความ</h2>
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
                    <div class="editor-content">
                        <div class="h-title">บทความทั่วไป</div>
                        <div class="row py-3">
                            <div class="col">
                                <div class="collapse-block">
                                    <div id="accordionInner">
                                        <div class="card">
                                            <div class="card-header">
                                                <h3 class="mb-0">
                                                    <button class="btn btn-lg fluid collapsed" data-toggle="collapse" data-target="#information-service-9" aria-expanded="false" aria-controls="collapse">
                                                        <span>
                                                            สัสันอัญมณี
                                                        </span>
                                                        <span class="feather icon-plus-circle"></span>
                                                    </button>
                                                </h3>
                                            </div>
                                            <div id="information-service-9" class="collapse show" aria-labelledby="headingCollapse" data-parent="#accordion">
                                                <?php for ($i = 1; $i <= 6; $i++) { ?>
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
                                                <?php } ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row py-3">
                            <div class="col">
                                <div class="collapse-block">
                                    <div id="accordionInner">
                                        <div class="card">
                                            <div class="card-header">
                                                <h3 class="mb-0">
                                                    <button class="btn btn-lg fluid collapsed" data-toggle="collapse" data-target="#information-service-10" aria-expanded="false" aria-controls="collapse">
                                                        <span>
                                                            โลกอัญมณี 360 
                                                        </span>
                                                        <span class="feather icon-plus-circle"></span>
                                                    </button>
                                                </h3>
                                            </div>
                                            <div id="information-service-10" class="collapse" aria-labelledby="headingCollapse" data-parent="#accordion">
                                                <?php for ($i = 1; $i <= 6; $i++) { ?>
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
                                                <?php } ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
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
            </div>
        </section>
        <?php include('inc/footer.php'); ?>
    </div>
    <?php include('inc/loadscript.php'); ?>
</body>

</html>
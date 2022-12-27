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
                            <div class="title typo-lg">งานฝึกอบรม</div>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">หน้าหลัก</a></li>
                                <li class="breadcrumb-item"><a href="#">งานบริการ</a></li>
                                <li class="breadcrumb-item active" aria-current="page">หลักสูตร</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <div class="default-page training-work">
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
                    <h2 class="text-primary mb-4">ตรวจสอบอัญมณี</h2>
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
                    <div class="h-title">หลักสูตรด้านการตลาด</div>
                    <div class="editor-content">
                        <div class="row py-3">
                            <div class="col">
                                <div class="collapse-block">
                                    <div id="accordionInner">
                                        <div class="card">
                                            <div class="card-header">
                                                <h3 class="mb-0">
                                                    <button class="btn btn-lg fluid collapsed" data-toggle="collapse" data-target="#training-work-1" aria-expanded="false" aria-controls="collapse">
                                                        <span>
                                                            บันทึกจากห้องปฏิบัติการ
                                                        </span>
                                                        <span class="feather icon-plus-circle"></span>
                                                    </button>
                                                </h3>
                                            </div>
                                            <div id="training-work-1" class="collapse show" aria-labelledby="headingCollapse" data-parent="#accordion">
                                                <?php for ($i = 1; $i <= 6; $i++) { ?>
                                                    <div class="download-block">
                                                        <div class="row align-items-center">
                                                            <div class="col-md">
                                                                <div class="row no-gutters align-items-center">
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
                                                    <button class="btn btn-lg fluid collapsed" data-toggle="collapse" data-target="#training-work-2" aria-expanded="false" aria-controls="collapse">
                                                        <span>
                                                            บันทึกจากห้องปฏิบัติการ
                                                        </span>
                                                        <span class="feather icon-plus-circle"></span>
                                                    </button>
                                                </h3>
                                            </div>
                                            <div id="training-work-2" class="collapse" aria-labelledby="headingCollapse" data-parent="#accordion">
                                                <?php for ($i = 1; $i <= 6; $i++) { ?>
                                                    <div class="download-block">
                                                        <div class="row align-items-center">
                                                            <div class="col-md">
                                                                <div class="row no-gutters align-items-center">
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
                    </div>
                </div>

                <div class="container">
                    <div class="editor-content">
                    </div>
                    <div class="border-nav-slider pt-5"></div>
                    <div class="youtube-block pt-4">
                        <div class="iframe-container">
                            <iframe class="responsive-iframe" src="https://www.youtube.com/embed/4r9TbKLCus0" title="YouTube video player" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                    </div>

                    <div class="row mt-5">
                        <div class="col-12">
                            <h2 class="text-primary mb-4">เอกสารแนบ</h2>
                            <div class="attachment-slider default-slick">
                                <?php for ($i = 1; $i <= 5; $i++) { ?>
                                    <div class="item">
                                        <div class="attachment-block">
                                            <a href="#" class="link" title="เอกสารแนบ">
                                                <div class="row no-gutters align-items-center">
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
                    </div>
                    <div class="row pt-5 text-right">
                        <div class="col-12">
                            <a href="" class="btn btn-border-primary" title="btn btn-primary">กลับ</a>
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
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
                                <li class="breadcrumb-item active" aria-current="page">การจัดซื้อ/ จัดจ้าง</li>
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
                    <h2 class="text-primary mb-4">การจัดซื้อ/ จัดจ้าง</h2>
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
                    <ul class="item-list procurement-process">
                        <?php for ($i = 1; $i <= 4; $i++) { ?>
                            <li>
                                <div class="list-wrapper">
                                    <figure class="cover">
                                        <img src="<?php echo $core_template; ?>/assets/img/static/procurement-process-image1.png" alt="procurement process">
                                    </figure>
                                    <div class="inner">
                                        <div class="row align-items-center w100 m-auto">
                                            <div class="col-12 text-center">
                                                <a href="javascript:void(0)" class="btn btn-primary mb-4" title="อ่านต่อ">อ่านต่อ</a>
                                            </div>
                                            <div class="col-12 text-center">
                                                <a href="javascript:void(0)" class="btn btn-primary" title="ดาวน์โหลด">ดาวน์โหลด</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        <?php } ?>
                    </ul>
                </div>
            </div>
        </section>
        <?php include('inc/footer.php'); ?>
    </div>
    <?php include('inc/loadscript.php'); ?>
</body>

</html>
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
                        <img class="figure-img img-fluid" src="<?php echo $core_template; ?>/assets/img/background/mock-top-grapphic.png" alt="">
                    </figure>
                    <div class="container">
                        <div class="wrapper">
                            <div class="title typo-lg">งานบริการข้อมูล</div>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">หน้าหลัก</a></li>
                                <li class="breadcrumb-item"><a href="#">งานบริการข้อมูล</a></li>
                                <li class="breadcrumb-item active" aria-current="page">เว็บไซต์ทีเ่กี่ยวข้อง</li>
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

                <div class="container">
                    <div class="row py-5">
                        <div class="col">
                            <h2 class="text-black text-uppercase mb-4">related sites block</h2>
                            <!-- related sites block -->
                            <div class="related-sites-block">
                                <div class="related-sites">
                                    <ul class="item-list">
                                        <?php for ($i = 1; $i <= 16; $i++) { ?>
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
                    <div class="editor-content">
                    </div>

                </div>
            </div>
        </section>
        <?php include('inc/footer.php'); ?>
    </div>
    <?php include('inc/loadscript.php'); ?>
</body>

</html>
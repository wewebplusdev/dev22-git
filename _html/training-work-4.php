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
                            <a href="javascript:void(0)" class="active">หลักสูตร</a>
                        </div>
                        <div class="item">
                            <a href="javascript:void(0)">สัมนา/workshop</a>
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
                    <h2 class="text-primary mb-4">อัญมณีศาสตร์</h2>
                    <div class="default-tab-slider default-slick">
                        <div class="item">
                            <div class="tab-block active">
                                <a class="text-limit" href="javascript:void(0)">หลักสูตรด้านอัญมณีศาสตร์</a>
                            </div>
                        </div>
                        <div class="item">
                            <div class="tab-block">
                                <a class="text-limit" href="javascript:void(0)">ดูทองเปิดร้านได้</a>
                            </div>
                        </div>
                        <div class="item">
                            <div class="tab-block">
                                <a class="text-limit" href="javascript:void(0)">การออกแบบ</a>
                            </div>
                        </div>
                        <div class="item">
                            <div class="tab-block">
                                <a class="text-limit" href="javascript:void(0)">การตลาด</a>
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
                <div class="container mt-md-5 mt-4">
                    <div class="row py-3">
                        <div class="col">
                            <div class="h-title">หลักสูตรด้านอัญมณีศาสตร์</div>
                            <div class="detail-link-block">
                                <div class="detail-link">
                                    <ul class="item-list">
                                        <?php for ($i = 1; $i <= 3; $i++) { ?>
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
                    <div class="border-nav-slider pt-5"></div>
                    <!-- <div class="container"> -->
                    <div class="editor-content">
                        <img src="<?php echo $core_template; ?>/assets/img/background/payment-method.png" alt="">
                        <div class="title">วิธีการชำระเงิน :</div>
                        <p>ชำระด้วย เงินสด หรือบัตรเครดิต VISA และ Master Card ณ ฝ่ายฝึกอบรม ชั้น 3 สถาบันวิจัยและพัฒนาอัญมณีและเครื่องประดับแห่งชาติ (องค์การมหาชน)
                            โอนเงิน เข้าบัญชีเงินฝากออมทรัพย์ ธนาคารไทยพาณิชย์ สาขาปาโซ่ทาวเวอร์ ชื่อบัญชี : สถาบันวิจัยและพัฒนาอัญมณีและเครื่องประดับแห่งชาติ เลขที่บัญชี : 245-207440-3
                        </p>
                        <div class="title">หมายเหตุ</div>
                        <p>หากชำระเงินผ่าน ธนาคารไทยพาณิชย์ กรุณา Fax สลิปการโอนเงิน และเอกสารการสมัคร มายังฝ่ายฝึกอบรมที่เบอร์แฟ็กซ์ (02) 634-4999 ต่อ 304 เพื่อเป็นหลักฐานยืนยันการเข้ารับการฝึกอบรม</p>
                    </div>
                    <!-- </div> -->
                </div>
            </div>
        </section>
        <?php include('inc/footer.php'); ?>
    </div>
    <?php include('inc/loadscript.php'); ?>
</body>

</html>
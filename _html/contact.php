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
                <div class="top-graphic mb-4 text-primary">
                    <figure class="cover">
                        <img class="figure-img img-fluid" src="<?php echo $core_template; ?>/assets/img/background/top-graphic-contact.jpg" alt="">
                    </figure>
                    <div class="container">
                        <div class="wrapper">
                            <div class="title typo-lg">ติดต่อเรา</div>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#" class="link">หน้าหลัก</a></li>
                                <li class="breadcrumb-item active" aria-current="page">ติดต่อเรา</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <div class="default-page contact-page">
                <div class="container">
                    <div class="contact-block">
                        <div class="text-center">
                            <div class="title">
                                สถาบันวิจัยและพัฒนาอัญมณีและเครื่องประดับแห่งชาติ (องค์การมหาชน) สำนักงานใหญ่
                            </div>
                            <p class="desc">
                                140, 140/1-3, 140/5 อาคารไอทีเอฟ-ทาวเวอร์ ชั้นที่ 1-4, 6ถนนสีลม แขวงสุริยวงศ์ เขตบางรัก กรุงเทพมหานคร 10500 <br>
                                เลขประจำตัวผู้เสียภาษีอากร 0 9940 00210 63 9
                                <br>
                                <br>
                                วันและเวลาทำการ : วันจันทร์ - ศุกร์ เวลา 8.30 - 16.30 น.
                            </p>
                            <div class="report-link">
                                <a href="https://www.git.or.th/complainSystem/default.aspx" class="btn btn-primary" title="ระบบร้องเรียนการทุจริตและประพฤติมิชอบ" target="_blank">
                                    ระบบร้องเรียนการทุจริตและประพฤติมิชอบ
                                </a>
                                <a href="https://www.git.or.th/complainSystem/General.aspx" class="btn btn-primary" title="ระบบร้องเรียน/ เสนอแนะออนไลน์ (เรื่องทั่วไป)" target="_blank">
                                    ระบบร้องเรียน/ เสนอแนะออนไลน์ (เรื่องทั่วไป)
                                </a>
                            </div>
                            <hr class="divider">
                            <div class="contact-list">
                                <ul class="item-list">
                                    <li>
                                        <a href="tel:026344999" class="link" title="Telephone Number">
                                            <span class="feather icon-phone-call"></span>
                                            0 2634 4999
                                        </a>
                                    </li>
                                    <li>
                                        <a href="" class="link" title="Fax Number">
                                            <span class="feather icon-printer"></span>
                                            <!-- <span class="lnr lnr-printer"></span> -->
                                            0 2634 4970
                                        </a>
                                    </li>
                                    <li>
                                        <a href="mailto:jewelry@git.or.th" class="link" title="Email address">
                                            <span class="feather icon-mail"></span>
                                            jewelry@git.or.th
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="map-block">
                    <!-- <a href="" class="link"> -->
                        <div class="iframe-container">
                            <iframe class="responsive-iframe" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7751.732215638551!2d100.528245!3d13.726555!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x2984903b1c6a5de!2sThe%20Gem%20and%20Jewelry%20Institute%20of%20Thailand%20(Public%20Organization)!5e0!3m2!1sth!2sus!4v1664961253439!5m2!1sth!2sus" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    <!-- </a> -->
                </div>
                <div class="container">
                    <div class="form-block">
                        <div class="title">แบบฟอร์มติดต่อเรา</div>
                        <hr class="divider">
                        <form data-toggle="validator" role="form" class="form-default mt-xl-5" method="post">
                            <div class="row gutters-lg-50 gutters-15">
                                <div class="col-md-6">
                                    <div class="form-group has-feedback">
                                        <label class="control-label" for="contact">ติดต่อ</label>
                                        <div class="select-wrapper">
                                            <select class="select-control" name="contact" id="contact" style="width: 100%;">
                                                <option value="SELECT1">ร้องเรียน</option>
                                                <option value="SELECT2">ระบบร้องเรียนการทุจริตและประพฤติมิชอบ</option>
                                                <option value="SELECT2">ระบบร้องเรียน/ เสนอแนะออนไลน์ (เรื่องทั่วไป)</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group has-feedback">
                                        <label class="control-label" for="topic">หัวข้อ</label>
                                        <div class="block-control">
                                            <input type="text" class="form-control" id="topic" placeholder="หัวข้อ" data-error="" value="ร้องเรียนเกี่ยวกับนโยบายการใช้งานเว็บไซต์">
                                            <span class="form-control-feedback" aria-hidden="true"></span>
                                        </div>
                                    </div>
                                    <div class="form-group has-feedback">
                                        <label class="control-label" for="message">ข้อความ</label>
                                        <div class="block-control">
                                            <textarea class="form-control form-text-area" rows="10" cols="100" id="message" placeholder="" data-error=""></textarea>
                                            <span class="form-control-feedback" aria-hidden="true"></span>
                                        </div>
                                    </div>

                                </div>
                                <div class="col-md-6 order-md-2 order-first">
                                    <div class="graphic-map">
                                        <div class="row">
                                            <div class="col">
                                                <div class="title">แผนที่กราฟฟิค</div>
                                            </div>
                                            <div class="col-auto">
                                                <a href="" class="link" title="ดาวน์โหลดแผนที่">
                                                    <span class="feather icon-download"></span>ดาวน์โหลดแผนที่
                                                </a>
                                            </div>
                                        </div>
                                        <figure class="cover">
                                            <img src="<?php echo $core_template; ?>/assets/img/static/graphic-map.jpg" alt="แผนที่กราฟฟิค">
                                        </figure>
                                    </div>
                                </div>
                            </div>
                            <div class="row gutters-lg-50 gutters-15">
                                <div class="col-md-6">
                                    <div class="form-group has-feedback">
                                        <label class="control-label" for="fullName">ชื่อ - นามสกุล</label>
                                        <div class="block-control">
                                            <input type="text" class="form-control" id="fullName" placeholder="กรอก ชื่อ - นามสกุล" data-error="" value="">
                                            <span class="form-control-feedback" aria-hidden="true"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group has-feedback">
                                        <label class="control-label" for="email">อีเมล</label>
                                        <div class="block-control">
                                            <input type="email" class="form-control" id="email" placeholder="กรอกอีเมล" data-error="" value="">
                                            <span class="form-control-feedback" aria-hidden="true"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group has-feedback">
                                        <label class="control-label" for="address">ที่อยู่</label>
                                        <div class="block-control">
                                            <input type="text" class="form-control" id="address" placeholder="กรอกที่อยู่" data-error="" value="">
                                            <span class="form-control-feedback" aria-hidden="true"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group has-feedback">
                                        <label class="control-label" for="phoneNumber">เบอร์โทรศัพท์</label>
                                        <div class="block-control">
                                            <input type="tel" class="form-control" id="phoneNumber" placeholder="กรอกเบอร์โทรศัพท์" data-error="" value="">
                                            <span class="form-control-feedback" aria-hidden="true"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row gutters-lg-50 gutters-15 justify-content-center">
                                <div class="col-md-3 col">
                                    <button type="submit" id="submitForm" class="btn fluid btn-lg btn-primary" title="ส่งข้อมูล">ส่งข้อมูล</button>
                                </div>
                                <div class="col-md-3 col">
                                    <button type="button" id="cancelForm" class="btn fluid btn-lg btn-border-primary" title="ยกเลิก">ยกเลิก</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="typo-lg text-primary mb-4">เอกสารแนบ</div>
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
            </div>

        </section>

        <?php include('inc/footer.php'); ?>

    </div>

    <?php include('inc/loadscript.php'); ?>


</body>

</html>
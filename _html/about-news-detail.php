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
                                <li class="breadcrumb-item active" aria-current="page">คณะกรรมการสถาบัน</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <div class="default-page about">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <div class="h-title -mc">แหล่งงาน</div>
                        </div>
                    </div>
                    <div class="default-bar">
                        <div class="row align-items-center">
                            <div class="col">
                                <div class="whead">
                                    <div class="h-title">หัวหน้าฝ่ายวิจัยและพัฒนาอัญมณีและเครื่องประดับ</div>
                                </div>
                            </div>

                        </div>
                        <div class="whead-addon -bsc">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="detail-info">
                                        <ul class="item-list">
                                            <li>23.07.2564</li>
                                            <li>
                                                <span class="feather icon-eye mr-2"></span>
                                                336 View
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="social-block">
                                        <div class="title">Share :</div>
                                        <ul class="item-list">
                                            <li>
                                                <a href="" class="link">
                                                    <img src="<?php echo $core_template; ?>/assets/img/icon/icon-social-facebook.svg" alt="" style=" width: auto; ">
                                                </a>
                                            </li>
                                            <li>
                                                <a href="" class="link">
                                                    <img src="<?php echo $core_template; ?>/assets/img/icon/icon-social-twitter.svg" alt="">
                                                </a>
                                            </li>
                                            <li>
                                                <a href="" class="link">
                                                    <img src="<?php echo $core_template; ?>/assets/img/icon/icon-social-gmail.svg" alt="">
                                                </a>
                                            </li>
                                            <li class="-bsc"></li>
                                            <li>
                                                <a href="" class="link">
                                                    <img src="<?php echo $core_template; ?>/assets/img/icon/icon-print.svg" alt="">
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="container">
                    <div class="gallery-block">
                        <div class="gallery-slider-for">
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
                    <div class="editor-content">
                        <div class="title">วัตถุประสงค์ของตำแหน่งงาน</div>
                        <p>ปฏิบัติงานในฐานะหัวหน้าหน่วยงาน โดยใช้ความรู้ ความสามารถ ประสบการณ์และความเชี่ยวชาญในด้านวิจัยและพัฒนา เทคนิคการตรวจสอบ การวิเคราะห์
                            การปรับปรุงมาตรฐานอัญมณีและโลหะมีค่าประเภทต่างๆ รวมถึงการวางแผน บริหารจัดการ จัดระบบงาน อำนวยการ สั่งการ มอบหมาย กำกับ แนะนำ ตรวจ
                            สอบ ประเมินผลงาน ตัดสินใจ แก้ปัญหาในงานตามภารกิจของหน่วยงานที่รับผิดชอบ บริหารจัดการการถ่ายทอดองค์ความรู้ใหม่ๆที่ได้จากงานวิจัยและพัฒนา
                            จัดทำยุทธศาสตร์งานวิจัยของสถาบัน แผนงานวิจัยประจำปี ติดตามงานและควบคุมโครงการวิจัยของสถาบัน กำกับดูแลการดำเนินงานระบบมาตรฐานต่างๆ
                            ของสถาบัน และปฏิบัติหน้าที่อื่นที่ได้รับมอบหมาย</p>
                        <div class="title">ความรับผิดชอบหลัก</div>
                        <p class="-mc">- การกำกับนโยบายและแผนงานของหน่วยงาน กำหนดเป้าหมายตัวชี้วัดผลงาน</p>
                        <p class="-mc">- การบริหารงานของหน่วยงาน ควบคุม กำกับดูแล และพัฒนากระบวนการทำงานของฝ่าย</p>
                        <p class="-mc">- การบริหารผู้ใต้บังคับบัญชา กำหนดเป้าหมายติดตามประเมินผลการปฏิบัติงาน พัฒนาความรู้ทักษะ</p>
                        <p class="-mc">- การจัดทำและควบคุมแผนงบประมาณของหน่วยงาน</p>
                        <p class="-mc">- การจัดทำแผนการวิจัยและพัฒนาให้สอดคล้องกับยุทธศาศตร์ และการให้ทุนวิจัย การบริหารโครงการวิจัยต่างๆติดตามความก้าวหน้าโครงการวิจัยต่างๆของสถาบัน</p>
                        <p class="-mc">- ดำเนินการวิจัยและพัฒนาโครงการวิจัยด้านเทคนิคของสถาบัน</p>
                        <p class="-mc">- พัฒนาองค์ความรู้ด้านการวิจัยและพัฒนา เป็นผู้แทนของสถาบันฯ ในการเข้าร่วมการสัมมนาหรือการแลกเปลี่ยนข้อมูลในเชิงวิชาการและประชาสัมพันธ์เผยแพร่องค์ความรู้จากงานวิจัย</p>
                        <p class="-mc">- วางแผน บริหารจัดการการดำเนินงานและพัฒนาระบบมาตรฐาน ISO ต่างๆ ของสถาบัน</p>
                        <p>- จัดประชุมวิชาการนานาชาติ การเขียนบทความวิชาการและการเป็นวิทยากร</p>
                        <div class="title">ความรู้ ความสามารถ ทักษะเฉพาะตำแหน่ง</div>
                        <p class="-mc">- มีวุฒิการศึกษาไม่ต่ำกว่าระดับปริญญาตรีหรือเทียบเท่า สาขาวิทยาศาสตร์ ธรณีวิทยา อัญมณีศาสตร์ วัสดุศาสตร์ โลกศาสตร์ เคมี เคมีวิเคราะห์ หรือสาขาอื่นๆ</p>
                        <p class="-mc">- ที่เกี่ยวข้อง จากสถาบันการศึกษาที่สำนักงานคณะกรรมการข้าราชการพลเรือนรับรอง</p>
                        <p class="-mc">- ประสบการณ์ด้านงานวิจัยและพัฒนา ไม่น้อยกว่า 12 ปี กรณีมีประสบการณ์ด้านการตรวจวิเคราะห์ การวิจัย หรือการพัฒนาเชิงเทคนิคด้านอัญมณีและเครื่อง</p>
                        <p class="-mc">- ประดับในห้องปฏิบัติการ จะได้รับการพิจารณาเป็นพิเศษ</p>
                        <p class="-mc">- ประสบการณ์ในตำแหน่งบังคับบัญชาไม่น้อยกว่า 7 ปี การบริหารหน่วยงาน บุคลากร งบประมาณ</p>
                        <p>- ต้องมีคุณสมบัติและไม่มีลักษณะต้องห้ามการเป็นเจ้าหน้าที่สถาบัน ตาม พรฎ จัดตั้งสถาบันฯ</p>
                        <div class="title">ความรู้ ความสามารถ ทักษะเฉพาะตำแหน่ง</div>
                        <p class="-mc">- มีความสามารถในการสื่อสารภาษาอังกฤษได้ดี</p>
                        <p class="-mc">- การใช้โปรแกรมคอมพิวเตอร์ Word, Excel และ Power Point</p>
                        <p class="-mc">- ทักษะการคิดวิเคราะห์ การสื่อสาร การนำเสนอ และการบริหารจัดการ</p>
                        <p class="-mc">- ทักษะการใช้เครื่องมือ อุปกรณ์ในห้องแล็บวิเคราะห์</p>
                        <p class="-mc">- ความสามารถในการทำงานภายใต้สภาวะกดดัน</p>
                        <div class="button -ck">
                            <div class="row my-sm-5 my-4">
                                <div class="col-sm text-sm-right">
                                    <a href="" class="btn btn-primary" title="btn btn-primary">
                                        กรอกใบสมัครออนไลน์
                                        <svg xmlns="http://www.w3.org/2000/svg" width="51.235" height="7.199" viewBox="0 0 51.235 7.199">
                                            <path data-name="Path 5" d="M4670.6,5544.179h50.033l-6.306-6.347" transform="translate(-4670.602 -5537.48)" fill="none" stroke="#fff" stroke-width="1"></path>
                                        </svg>
                                    </a>
                                </div>
                                <div class="col">
                                    <a href="" class="btn btn-primary" title="btn btn-primary">
                                        ดาวน์โหลดใบสมัคร
                                        <svg xmlns="http://www.w3.org/2000/svg" width="51.235" height="7.199" viewBox="0 0 51.235 7.199">
                                            <path data-name="Path 5" d="M4670.6,5544.179h50.033l-6.306-6.347" transform="translate(-4670.602 -5537.48)" fill="none" stroke="#fff" stroke-width="1"></path>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="title">วัตถุประสงค์ของตำแหน่งงาน</div>
                        <p>ปฏิบัติงานในฐานะหัวหน้าหน่วยงาน โดยใช้ความรู้ ความสามารถ ประสบการณ์และความเชี่ยวชาญในด้านวิจัยและพัฒนา เทคนิคการตรวจสอบ การวิเคราะห์
                            การปรับปรุงมาตรฐานอัญมณีและโลหะมีค่าประเภทต่างๆ รวมถึงการวางแผน บริหารจัดการ จัดระบบงาน อำนวยการ สั่งการ มอบหมาย กำกับ แนะนำ ตรวจ
                            สอบ ประเมินผลงาน ตัดสินใจ แก้ปัญหาในงานตามภารกิจของหน่วยงานที่รับผิดชอบ บริหารจัดการการถ่ายทอดองค์ความรู้ใหม่ๆที่ได้จากงานวิจัยและพัฒนา
                            จัดทำยุทธศาสตร์งานวิจัยของสถาบัน แผนงานวิจัยประจำปี ติดตามงานและควบคุมโครงการวิจัยของสถาบัน กำกับดูแลการดำเนินงานระบบมาตรฐานต่างๆ
                            ของสถาบัน และปฏิบัติหน้าที่อื่นที่ได้รับมอบหมาย</p>
                        <div class="title">ความรับผิดชอบหลัก</div>
                        <p class="-mc">- การกำกับนโยบายและแผนงานของหน่วยงาน กำหนดเป้าหมายตัวชี้วัดผลงาน</p>
                        <p class="-mc">- การบริหารงานของหน่วยงาน ควบคุม กำกับดูแล และพัฒนากระบวนการทำงานของฝ่าย</p>
                        <p class="-mc">- การบริหารผู้ใต้บังคับบัญชา กำหนดเป้าหมายติดตามประเมินผลการปฏิบัติงาน พัฒนาความรู้ทักษะ</p>
                        <p class="-mc">- การจัดทำและควบคุมแผนงบประมาณของหน่วยงาน</p>
                        <p class="-mc">- การจัดทำแผนการวิจัยและพัฒนาให้สอดคล้องกับยุทธศาศตร์ และการให้ทุนวิจัย การบริหารโครงการวิจัยต่างๆติดตามความก้าวหน้าโครงการวิจัยต่างๆของสถาบัน</p>
                        <p class="-mc">- ดำเนินการวิจัยและพัฒนาโครงการวิจัยด้านเทคนิคของสถาบัน</p>
                        <p class="-mc">- พัฒนาองค์ความรู้ด้านการวิจัยและพัฒนา เป็นผู้แทนของสถาบันฯ ในการเข้าร่วมการสัมมนาหรือการแลกเปลี่ยนข้อมูลในเชิงวิชาการและประชาสัมพันธ์เผยแพร่องค์ความรู้จากงานวิจัย</p>
                        <p class="-mc">- วางแผน บริหารจัดการการดำเนินงานและพัฒนาระบบมาตรฐาน ISO ต่างๆ ของสถาบัน</p>
                        <p>- จัดประชุมวิชาการนานาชาติ การเขียนบทความวิชาการและการเป็นวิทยากร</p>
                        <div class="title">ความรู้ ความสามารถ ทักษะเฉพาะตำแหน่ง</div>
                        <p class="-mc">- มีวุฒิการศึกษาไม่ต่ำกว่าระดับปริญญาตรีหรือเทียบเท่า สาขาวิทยาศาสตร์ ธรณีวิทยา อัญมณีศาสตร์ วัสดุศาสตร์ โลกศาสตร์ เคมี เคมีวิเคราะห์ หรือสาขาอื่นๆ</p>
                        <p class="-mc">- ที่เกี่ยวข้อง จากสถาบันการศึกษาที่สำนักงานคณะกรรมการข้าราชการพลเรือนรับรอง</p>
                        <p class="-mc">- ประสบการณ์ด้านงานวิจัยและพัฒนา ไม่น้อยกว่า 12 ปี กรณีมีประสบการณ์ด้านการตรวจวิเคราะห์ การวิจัย หรือการพัฒนาเชิงเทคนิคด้านอัญมณีและเครื่อง</p>
                        <p class="-mc">- ประดับในห้องปฏิบัติการ จะได้รับการพิจารณาเป็นพิเศษ</p>
                        <p class="-mc">- ประสบการณ์ในตำแหน่งบังคับบัญชาไม่น้อยกว่า 7 ปี การบริหารหน่วยงาน บุคลากร งบประมาณ</p>
                        <p>- ต้องมีคุณสมบัติและไม่มีลักษณะต้องห้ามการเป็นเจ้าหน้าที่สถาบัน ตาม พรฎ จัดตั้งสถาบันฯ</p>
                        <div class="title">ความรู้ ความสามารถ ทักษะเฉพาะตำแหน่ง</div>
                        <p class="-mc">- มีความสามารถในการสื่อสารภาษาอังกฤษได้ดี</p>
                        <p class="-mc">- การใช้โปรแกรมคอมพิวเตอร์ Word, Excel และ Power Point</p>
                        <p class="-mc">- ทักษะการคิดวิเคราะห์ การสื่อสาร การนำเสนอ และการบริหารจัดการ</p>
                        <p class="-mc">- ทักษะการใช้เครื่องมือ อุปกรณ์ในห้องแล็บวิเคราะห์</p>
                        <p class="-mc">- ความสามารถในการทำงานภายใต้สภาวะกดดัน</p>
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
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
                        <img src="<?php echo $core_template; ?>/assets/img/background/top-graphic-contact.jpg" alt="">
                    </figure>
                    <div class="container">
                        <div class="wrapper">
                            <div class="title typo-lg">ค้นหา</div>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">หน้าหลัก</a></li>
                                <li class="breadcrumb-item active" aria-current="page">ค้นหา</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <div class="default-page search-page">
                <div class="container">
                    <h2 class="h-title text-left mb-0">คำค้นหา</h2>

                    <div class="search-block mb-3">
                        <form data-toggle="validator" role="form" class="form-default" method="post">
                            <div class="row">
                                <div class="col">
                                    <div class="block-control form-group">
                                        <label class="control-label visuallyhidden" for="keyword">คำค้นหา</label>
                                        <input type="text" class="form-control" id="keyword" aria-describedby="keyword" placeholder="คำค้นหา">
                                        <button type="submit" class="btn form-control-icon">
                                                <span class="icon-from -icon-search"></span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="search-result">
                                ผลการค้นหา "<span>16</span>" ทั้งหมด 161 รายการ
                            </div>
                        </form>
                        <ul class="item-list">
                            <?php for ($i = 1; $i <= 5; $i++) { ?>
                                <li>
                                    <div class="row align-items-end">
                                        <div class="col">
                                            <div class="title">หัวหน้าฝ่ายวิจัยและพัฒนาอัญมณีและเครื่องประดับ</div>
                                            <div class="desc text-limit">ปฏิบัติงานในฐานะหัวหน้าหน่วยงาน โดยใช้ความรู้ ความสามารถ ประสบการณ์และความเชี่ยวชาญในด้านวิจัยและพัฒนา เทคนิคการตรวจสอบ</div>
                                            <a href="https://www.git.or.th/contact_us.html" class="link" target="_blank">https://www.git.or.th/contact_us.html</a>
                                        </div>
                                        <div class="col-md-auto">
                                            <a href="javascript:void(0)" class="link detail" title="รายละเอียด">
                                                <div class="row align-items-center no-gutters">
                                                    <div class="col-auto">
                                                        <div class="txt">
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
                                </li>
                            <?php } ?>
                        </ul>
                    </div>

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
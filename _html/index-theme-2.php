<!DOCTYPE html>
<html lang="en">

<head>
    <?php include('inc/metatag.php'); ?>
    <?php include('inc/loadstyle.php'); ?>
</head>

<body class="theme-2">

    <div class="global-container">
        <?php include('inc/header-theme-2.php'); ?>

        <section class="site-container">

            <div class="top-graphic">

                <div class="slider">

                    <?php for ($i = 1; $i <= 3; $i++) { ?>

                        <div class="tpg-item">
                            <a href="" class="link">
                                <figure class="cover">
                                    <img src="<?php echo $core_template; ?>/assets/img/static/tpg-theme-2.jpg" alt="top graphic">
                                </figure>
                                <div class="info">
                                    <div class="container">
                                        <div class="wrapper">
                                            <div class="title text-limit -x2">
                                                สถาบันวิจัยและพัฒนาอัญมณีและเครื่องประดับแห่งชาติ (องค์การมหาชน)
                                            </div>
                                            <div class="row align-items-end">
                                                <div class="col-md">
                                                    <div class="desc text-limit -x2">
                                                        เป็นองค์กรของรัฐในรูปแบบองค์การมหาชนตามพระราชบัญญัติองค์การมหาชน พ.ศ. 2542 <br>
                                                        จัดตั้งขึ้นตาม พระราชกฤษฎีกาจัดตั้งสถาบันวิจัยและพัฒนาอัญมณี และเครื่องประดับแห่งชาติ (องค์การมหาชน) พ.ศ. 2546
                                                    </div>
                                                </div>
                                                <div class="col-md-auto">
                                                    <button href="" class="btn btn-border-light" title="btn btn-primary">อ่านต่อ</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="tpg-item">
                            <a href="" class="link">
                                <figure class="cover">
                                    <img src="<?php echo $core_template; ?>/assets/img/static/tpg-theme-2-02.jpg" alt="top graphic">
                                </figure>
                                <div class="info">
                                    <div class="container">
                                        <div class="wrapper">
                                            <div class="title text-limit -x2">
                                                สถาบันวิจัยและพัฒนาอัญมณีและเครื่องประดับแห่งชาติ (องค์การมหาชน)
                                            </div>
                                            <div class="row align-items-end">
                                                <div class="col-md">
                                                    <div class="desc text-limit -x2">
                                                        เป็นองค์กรของรัฐในรูปแบบองค์การมหาชนตามพระราชบัญญัติองค์การมหาชน พ.ศ. 2542 <br>
                                                        จัดตั้งขึ้นตาม พระราชกฤษฎีกาจัดตั้งสถาบันวิจัยและพัฒนาอัญมณี และเครื่องประดับแห่งชาติ (องค์การมหาชน) พ.ศ. 2546
                                                    </div>
                                                </div>
                                                <div class="col-md-auto">
                                                    <button type="button" class="btn btn-border-light">อ่านต่อ</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>

                    <?php } ?>

                </div>

            </div>

            <div class="services-block">
                <div class="container">
                    <ul class="nav nav-tabs" id="updateTab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="service-01-tab" data-toggle="tab" href="#service-01" role="tab" aria-controls="service-01" aria-selected="true">บริการห้องปฏิบัติการ</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="service-02-tab" data-toggle="tab" href="#service-02" role="tab" aria-controls="service-02" aria-selected="false">บริการฝึกอบรม</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="service-03-tab" data-toggle="tab" href="#service-03" role="tab" aria-controls="service-03" aria-selected="false">บริการข้อมูลข่าวสาร</a>
                        </li>
                    </ul>
                    <div class="tab-content" id="updateTabContent">
                        <div class="tab-pane fade show active" id="service-01" role="tabpanel" aria-labelledby="service-01-tab">
                            <div class="row">
                                <div class="col-4">
                                    <div class="title">
                                        งานบริการ
                                    </div>
                                    <p class="desc">
                                        เป็นองค์กรของรัฐในรูปแบบองค์การ
                                        มหาชนตามพระราชบัญญัติองค์การ
                                        มหาชน พ.ศ. 2542
                                    </p>
                                    <a href="" class="btn btn-border-light" title="btn btn-primary">อ่านต่อ</a>
                                </div>
                                <div class="col-8">

                                    <div class="default-slider slider">

                                        <?php for ($i = 1; $i <= 5; $i++) { ?>

                                            <div class="item">
                                                <a href="" class="link" title="ตรวจสอบอัญมณี">
                                                    <figure class="cover">
                                                        <img src="<?php echo $core_template; ?>/assets/img/static/service-01.jpg" alt="ตรวจสอบอัญมณี">
                                                    </figure>
                                                    <div class="inner">
                                                        <div class="title">
                                                            ตรวจสอบอัญมณี
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>

                                        <?php } ?>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="service-02" role="tabpanel" aria-labelledby="service-02-tab">
                            service-02
                        </div>
                        <div class="tab-pane fade" id="service-03" role="tabpanel" aria-labelledby="service-03-tab">
                            service-03
                        </div>
                    </div>
                </div>
            </div>

            <div class="container">

            </div>

        </section>

        <?php include('inc/footer-theme-2.php'); ?>
    </div>

    <?php include('inc/loadscript.php'); ?>

</body>

</html>
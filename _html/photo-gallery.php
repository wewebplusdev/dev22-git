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
                    <div class="gallery-list">
                        <ul class="item-list">
                            <?php for ($i = 1; $i <= 21; $i++) { ?>
                                <li>
                                    <a href="<?php echo $core_template; ?>/assets/img/upload/gallery-thumb.jpg" class="link" data-fancybox="gallery">
                                        <div class="title tag">gallery block</div>
                                        <figure class="cover">
                                            <img src="<?php echo $core_template; ?>/assets/img/upload/gallery-thumb.jpg" alt="gallery thumbnail">
                                        </figure>
                                    </a>
                                </li>
                            <?php } ?>
                        </ul>
                        <div class="load-more-hide text-center mt-5">
                            <a href="javascript:void(0)" class="btn btn-primary" title="ดูทั้งหมด">ดูทั้งหมด</a>
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
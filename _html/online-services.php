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
                        <img class="figure-img img-fluid" src="<?php echo $core_template; ?>/assets/img/background/mock-top-grapphic-1.png" alt="">
                    </figure>
                    <div class="container">
                        <div class="wrapper">
                            <div class="title typo-lg">เกี่ยวกับเรา</div>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">หน้าหลัก</a></li>
                                <li class="breadcrumb-item active" aria-current="page">บริการออนไลน์</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <div class="default-page online-services">
                <div class="container">
                    <div class="h-title">
                        บริการออนไลน์
                    </div>
                    <div class="online-services-block">
                        <ul class="item-list">
                            <?php for ($i = 1; $i <= 8; $i++) { ?>
                                <li>
                                    <a href="" class="link" title="SAMPLE TRACKING">
                                        <figure class="cover">
                                            <img src="<?php echo $core_template; ?>/assets/img/static/online-service-01.jpg" alt="diamond">
                                        </figure>
                                        <div class="inner">
                                            <!-- <div class="wrapper"> -->
                                                <div class="title text-uppercase text-limit -x2">
                                                    SAMPLE <br>
                                                    TRACKING
                                                </div>

                                                <div class="subtitle">
                                                    Gem & <br>
                                                    Precious <br>
                                                    Metals <br>
                                                    Testing
                                                </div>
                                            <!-- </div> -->
                                        </div>
                                        <div class="text-orient text-limit">
                                            SAMPLE
                                            TRACKING
                                        </div>
                                    </a>
                                </li>
                            <?php } ?>
                        </ul>
                    </div>
                </div>
            </div>

        </section>

        <?php include('inc/footer.php'); ?>
    </div>

    <?php include('inc/loadscript.php'); ?>

</body>

</html>
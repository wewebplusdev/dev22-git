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

            <div class="intro-page">
                <div class="intro-slider">
                    <div class="item">
                        <div class="cover">
                            <img src="<?php echo $core_template; ?>/assets/img/static/intro.jpg" alt="intro image" class="lazy loading img-cover" data-was-processed="true">
                        </div>
                    </div>
                    <!-- <div class="item">
                        <div class="video-container">
                            <video class="slide-video slide-media" loop="" muted="" autoplay="" controls="" preload="metadata" poster="">
                                <source src="https://en.nrct.go.th/upload/int/vdo/vdo-2-20221205-1652353475-910.mp4" type="video/mp4">
                            </video>
                        </div>
                    </div> -->
                </div>
                <div class="intro-content">
                    <div class="container">
                        <div class="row row-0 height">
                            <div class="col-md">
                                <div class="logo">
                                    <div class="symbol">
                                        <img src="<?php echo $core_template; ?>/assets/img/static/git-brand.svg" alt="Gem and Jewelry Institute of Thailand" class="lazy loading" data-was-processed="true">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-auto">
                                <div class="action">
                                    <a href="index.php" class="btn btn-border-light">เข้าสู่เว็บไซต์</a>
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

    <script>
        $('.menu-full').hide();
        $('.site-header').hide();
        $('.site-container').addClass('intro');
        $('.site-footer').hide();
    </script>
</body>

</html>
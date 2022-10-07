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

            <div class="error-page">
                <div class="container">
                    <div class="error-block">
                        <div class="row no-gutters">
                            <div class="col-12">
                                <div class="graphic">
                                    <img src="<?php echo $core_template; ?>/assets/img/background/error-404.svg" alt="error 404">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="h-title">
                                    404
                                </div>
                                <div class="title">
                                    PAGE NOT FOUND
                                </div>
                                <div class="desc">we can't seem to find page you are looking for</div>
                                <a href="" class="btn btn-lg btn-primary" title="กลับหน้าหลัก">กลับหน้าหลัก</a>
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
        $('.site-container').addClass('error');
        $('.site-footer').hide();
    </script>
</body>

</html>
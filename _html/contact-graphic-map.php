<!DOCTYPE html>
<html lang="en">

<head>
    <?php include('inc/metatag.php'); ?>
    <?php include('inc/loadstyle.php'); ?>

    <style>
        html,
        body {
            height: initial;
        }
    </style>
</head>

<body>

    <div class="global-container">
        <?php include('inc/header.php'); ?>

        <section class="site-container map-page">

            <nav class="nav-map">
                <ul class="nav-list">
                    <li class="active">
                        <a href="" class="btn btn-border-primary">
                            แผนที่กราฟิก
                        </a>
                    </li>
                    <li>
                        <a href="" class="btn btn-border-primary">
                            แผนที่กูเกิ้ล
                        </a>
                    </li>
                </ul>
            </nav>

            <div class="maps-block">
                <div class="graphic-map">
                    <figure class="contain">
                        <img src="<?php echo $core_template; ?>/assets/img/static/graphic-map-full.jpg" alt="แผนที่กราฟฟิค">
                    </figure>
                </div>
            </div>

        </section>

    </div>

    <?php include('inc/loadscript.php'); ?>

    <script>
        $('.menu-full').hide();
        $('.site-header-topbar').hide();
        $('.site-header-main').hide();
        $('.site-header-topbar.mobile').hide();
        $('.site-header').addClass('map-header');
    </script>

</body>

</html>
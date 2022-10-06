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
                <div class="google-map">
                    <div class="iframe-container">
                        <iframe class="responsive-iframe" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7751.732215638551!2d100.528245!3d13.726555!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x2984903b1c6a5de!2sThe%20Gem%20and%20Jewelry%20Institute%20of%20Thailand%20(Public%20Organization)!5e0!3m2!1sth!2sus!4v1664961253439!5m2!1sth!2sus" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
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
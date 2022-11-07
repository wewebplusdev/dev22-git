<!DOCTYPE html>
<html lang="en">

<head>
    <?php include('inc/metatag.php'); ?>
    <?php include('inc/loadstyle.php'); ?>
</head>

<body class="theme-1">

    <div class="global-container">
        <?php include('inc/header.php'); ?>

        <section class="site-container">
            <div class="main-page">

                <div class="container -xl">
                    <div class="video-gallery">
                        <div class="h-title text-center">GIT VDO</div>
                        <ul class="nav nav-pills default-nav-tab">
                            <li>
                                <a class="item active" href="#vdoGallery1" data-toggle="tab">Museum & Gems Treasure</a>
                            </li>
                            <li>
                                <a class="item" href="#vdoGallery2" data-toggle="tab">Guide for Trade Development</a>
                            </li>
                        </ul>
                        <div class="tab-content clearfix">
                            <div class="tab-pane active" id="vdoGallery1">
                                <div class="thumb wow" data-wow-duration="2s">
                                    <div class="video-gallery-banner">
                                        <figure class="cover -banner">
                                            <img src="<?php echo $core_template; ?>/assets/img/upload/git-vdo.png" alt="git vdo">
                                        </figure>
                                        <a class="link" href="javascript:void(0)">
                                            <div class="title text-uppercase"> Let's talk about GIT Museum</div>
                                            <div class="desc">
                                                เจาะกระแสการพัฒนาอย่างยั่งยืน ทางรอดของ<br>อุตสาหกรรมอัญมณีและเครื่องประดับยุคใหม่
                                            </div>
                                            <span class="feather icon-play-circle"></span>
                                        </a>
                                    </div>
                                    <ul class="item-list">
                                        <?php for ($i = 1; $i <= 3; $i++) { ?>
                                            <li>
                                                <div class="wrapper">
                                                    <div class="yt-frame">
                                                        <div class="icon">
                                                            <span class="feather icon-play-circle"></span>
                                                        </div>
                                                        <div class="iframe-container">
                                                            <iframe class="responsive-iframe" src="https://www.youtube.com/embed/4r9TbKLCus0" title="YouTube video player" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                                        </div>
                                                        <figure class="cover">
                                                            <img src="<?php echo $core_template; ?>/assets/img/upload/git-vdo.png" alt="git vdo">
                                                        </figure>
                                                    </div>
                                                    <a class="link" href="video-gallery-detail.php" target="_blank">
                                                        <div class="desc text-center text-uppercase">
                                                            ซื้อเครื่องประดับเพชร พลอย <br>อย่างไรให้มั่นใจ
                                                        </div>
                                                    </a>
                                                </div>
                                            </li>
                                        <?php } ?>
                                    </ul>
                                </div>
                            </div>
                            <div class="tab-pane" id="vdoGallery2">
                                <div class="thumb wow" data-wow-duration="2s">
                                    vdoGallery2
                                </div>
                            </div>
                        </div>
                        <div class="load-more-hide text-center mb-5">
                            <a href="javascript:void(0)" class="btn btn-primary" title="ดูทั้งหมด">ดูทั้งหมด</a>
                        </div>
                    </div>

                </div>
            </div>

        </section>

        <?php include('inc/footer.php'); ?>

        <?php include('inc/popup.php'); ?>
    </div>

    <?php include('inc/loadscript.php'); ?>

    <!-- <script>
        $(document).ready(function(){
            $('.popup-item').first().trigger('click');
        });
    </script> -->

</body>

</html>
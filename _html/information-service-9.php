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
                <div class="top-graphic">
                    <figure class="cover">
                        <img class="figure-img img-fluid" src="<?php echo $core_template; ?>/assets/img/background/mock-top-grapphic.png" alt="">
                    </figure>
                    <div class="container">
                        <div class="wrapper">
                            <div class="title typo-lg">งานบริการข้อมูล</div>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">หน้าหลัก</a></li>
                                <li class="breadcrumb-item"><a href="#">งานบริการข้อมูล</a></li>
                                <li class="breadcrumb-item active" aria-current="page">บทความ</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <div class="default-page information-service">
                <div class="container">
                    <div class="default-nav-slider">
                        <div class="item">
                            <a href="javascript:void(0)" class="active">ตรวจสอบอัญมณี</a>
                        </div>
                        <div class="item">
                            <a href="javascript:void(0)">ตรวจสอบโลหะมีค่า</a>
                        </div>
                        <div class="item">
                            <a href="javascript:void(0))">ศูนย์ให้คำปรึกษา</a>
                        </div>
                        <div class="item">
                            <a href="javascript:void(0)">เครื่องมือ</a>
                        </div>
                        <div class="item">
                            <a href="javascript:void(0)">สัมมนา/workshop</a>
                        </div>
                        <div class="item">
                            <a href="javascript:void(0)">ราคา</a>
                        </div>
                        <div class="item">
                            <a href="javascript:void(0)">การประกวดออกแบบ</a>
                        </div>
                        <div class="item">
                            <a href="javascript:void(0)">การบริหารและพัฒนาทรัพยากรบุคคล</a>
                        </div>
                    </div>
                </div>

                <div class="border-nav-slider"></div>

                <div class="container">
                    <div class="row py-5">
                        <div class="col">
                            <div class="h-title">ห้องแสดงภาพ</div>
                            <!--gallery block -->
                            <div class="gallery-block">
                                <div class="gallery">
                                    <ul class="item-list">  
                                        <?php for ($i = 1; $i <= 4; $i++) { ?>
                                            <li>
                                                <div class="row no-gutters">
                                                    <div class="col">
                                                        <div class="gallery-thumbnail">
                                                            <figure class="cover">
                                                                <img src="<?php echo $core_template; ?>/assets/img/upload/gallery-thumbnail.jpg" alt="gallery thumbnail">
                                                            </figure>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row no-gutters">
                                                    <div class="col">
                                                        <div class="gallery-desc">
                                                            <div class="title">
                                                                ห้องปฎิบัติการ
                                                            </div>
                                                            <a href="#" class="btn btn-primary" title="แสดงภาพ">
                                                                แสดงภาพ
                                                                <!-- <img class="icon ml-3" src="<?php echo $core_template; ?>/assets/img/icon/icon-deatail.svg" alt="icon"> -->
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="51.235" height="7.199" viewBox="0 0 51.235 7.199">
                                                                    <path data-name="Path 5" d="M4670.6,5544.179h50.033l-6.306-6.347" transform="translate(-4670.602 -5537.48)" fill="none" stroke="#fff" stroke-width="1" />
                                                                </svg>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        <?php } ?>
                                    </ul>
                                </div>
                            </div>
                            <!-- end gallery block  -->
                        </div>
                    </div>
                    <div class="editor-content">
                    </div>

                </div>
            </div>
        </section>
        <?php include('inc/footer.php'); ?>
    </div>
    <?php include('inc/loadscript.php'); ?>
</body>

</html>
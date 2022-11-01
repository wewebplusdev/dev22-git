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
                    <div class="search-page">
                        <div class="search-bar">
                            <div class="row align-items-center">
                                <div class="col-sm">
                                    <div class="title">ผลลัพธ์การค้นหา“#ตำรายาของประเทศไทย”</div>
                                </div>
                                <div class="col-sm-auto">
                                    <div class="form-group">
                                        <label class="control-label visuallyhidden" for="detailSearch">search</label>
                                        <div class="block-control">
                                            <input type="text" class="form-control" id="detailSearch" placeholder="search">
                                            <div class="search-icon">
                                                <img src="<?php echo $core_template; ?>/assets/img/icon/icon-search.svg" alt="icon search">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="search-list">
                            <div class="title"> จำนวนที่พบ 1 รายการ</div>
                            <ul class="item-list">
                                <?php for ($i = 1; $i <= 4; $i++) { ?>
                                    <li>
                                        <a href="javascript:void(0)" class="link list-wrapper">
                                            <div class="list-inner">
                                                <div class="list-title">ตำรามาตรฐานยาสมุนไพรไทยฉบับเพิ่มเติมล่าสุด</div>
                                                <div class="list-desc text-limit -x2">สำนักยาและวัตถุเสพติด กรมวิทยาศาสตร์การแพทย์ ได้จัดทำตำรามาตรฐานยาสมุนไพรไทย ฉบับเพิ่มเติม ปี พ.ศ.2565 (Thai Herbal Pharmacopoeia 2021 Supplement 2022, THP 2021 Suppl.2022)</div>
                                                <div class="list-link">https://website.bdn.go.th/news/detail/qQAcZKtl</div>
                                                <div class="tag-list">
                                                    <div class="detail-hashtag-block">
                                                        <a href="about-detail-search.php" class="detail-hashtag-link">ตำรายาของประเทศไทย</a>
                                                    </div>
                                                    <div class="detail-hashtag-block">
                                                        <a href="about-detail-search.php" class="detail-hashtag-link">ตำรายาของประเทศไทย</a>
                                                    </div>
                                                    <div class="detail-hashtag-block">
                                                        <a href="about-detail-search.php" class="detail-hashtag-link">ตำรายาของประเทศไทย</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                <?php } ?>
                            </ul>
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
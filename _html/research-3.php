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
                        <img src="<?php echo $core_template; ?>/assets/img/background/mock-top-grapphic-1.png" alt="">
                    </figure>
                    <div class="container">
                        <div class="wrapper">
                            <div class="title typo-lg">งานวิจัย</div>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">หน้าหลัก</a></li>
                                <li class="breadcrumb-item"><a href="online-services.php">บริการออนไลน์</a></li>
                                <li class="breadcrumb-item active" aria-current="page">ระบบคำนวณเพชร</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>

            <div class="default-page diamond-calc-page">
                <div class="container">
                    <!-- <div class="editor-content"> -->
                    <div class="h-title">ระบบคำนวณเพชร</div>
                    <div class="image-block">
                        <div class="image-thumbnail">
                            <figure class="cover">
                                <img src="<?php echo $core_template; ?>/assets/img/static/image-thumbnail-research.jpg" alt="image thumbnail">
                            </figure>
                        </div>
                    </div>
                    <div class="contact-block">
                        <div class="title text-black typo-sm">
                            สถานที่ติดต่อ
                        </div>
                        <div class="desc">
                            ห้องปฏิบัติการตรวจสอบอัญมณีสถาบันวิจัยและพัฒนาอัญมณีและเครื่องประดับแห่งชาติ (องค์การมหาชน)อาคารไอทีเอฟ ทาวเวอร์ ชั้น 4 ถนนสีลม
                            แขวงสุริยวงศ์ เขตบางรัก กรุงเทพฯ 10500
                        </div>
                        <div class="desc">
                            <strong>โทรศัพท์</strong> 0 2634 4999 ต่อ <strong>409</strong> <br>
                            <strong>โทรสาร</strong> 0 2634 4970 <br>
                            <strong>อีเมล</strong> jewelry@git.or.th
                        </div>
                        <div class="desc">
                            <strong>เวลาทำการ</strong> <br>
                            วันจันทร์ - ศุกร์ เวลา 8.30 - 16.30 น. เว้นวันเสาร์ - อาทิตย์ วันนักขัตฤกษ์ และวันหยุดตามประกาศของสถาบัน
                        </div>
                    </div>
                    <div class="diamond-calc-block">
                        <div class="form-block">
                            <div class="title text-black typo-sm">
                                ระบบคำนวณเพชร
                            </div>
                            <hr class="divider my-3">
                            <form data-toggle="validator" role="form" class="form-default mt-xl-5" method="post">
                                <div class="row gutters-30">
                                    <div class="col-md-6">
                                        <div class="form-group has-feedback">
                                            <label class="control-label" for="diaform">Diamond shape</label>
                                            <div class="select-wrapper">
                                                <select class="select-control select-gray" name="diaform" id="diaform" style="width: 100%;">
                                                    <option value="1" selected="">Round</option>
                                                    <option value="2">Oval</option>
                                                    <option value="3">Princess</option>
                                                    <option value="4">Asscher</option>
                                                    <option value="5">Cushion</option>
                                                    <option value="6">Heart</option>
                                                    <option value="7">Baguette</option>
                                                    <option value="8">Trillion</option>
                                                    <option value="9">Emerald</option>
                                                    <option value="10">Radiant</option>
                                                    <option value="11">Marquise</option>
                                                    <option value="12">Pear</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label" for="diamcut">Length, mm</label>
                                            <div class="block-control">
                                                <input type="number" class="form-control" name="diamcut" id="diamcut" min="0" step="0.1" value="10">
                                            </div>
                                        </div>
                                        <!-- <div class="form-group">
                                            <label class="control-label" for="widecut">Width, mm</label>
                                            <div class="block-control">
                                                <input type="number" class="form-control" name="widecut" id="widecut" min="0" step="0.1" value="8">
                                            </div>
                                        </div> -->
                                        <div class="form-group">
                                            <label class="control-label" for="heightcut">Depth, mm</label>
                                            <div class="block-control">
                                                <input type="number" class="form-control" name="heightcut" id="heightcut" min="0" step="0.1" value="6">
                                            </div>
                                        </div>
                                        <div class="form-group has-feedback">
                                            <label class="control-label" for="girth">Girdle Thickness</label>
                                            <div class="select-wrapper">
                                                <select class="select-control select-gray" name="girth" id="girth" style="width: 100%;">
                                                    <option value="0">Thin-Medium (0%)</option>
                                                    <option value="0.02">Slightly Thick (+2%)</option>
                                                    <option value="0.04">Thick (+4%)</option>
                                                    <option value="0.06">Very Thick (+6%)</option>
                                                    <option value="0.09">Extra Thick (+9%)</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label" for="pavbul">Corrections, %</label>
                                            <div class="block-control">
                                                <input type="number" class="form-control" name="pavbul" id="pavbul" min="0" step="1" value="6">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 order-md-2 order-3">
                                        <div class="calc-result">
                                            <div class="wrapper">
                                                <div class="row">
                                                    <div class="col">
                                                        <div class="calc-shape">
                                                            <div class="row gutters-15 align-items-center">
                                                                <div class="col-auto">
                                                                    <div class="icon">
                                                                        <img src="<?php echo $core_template; ?>/assets/img/icon/diamond-round.png" alt="Diamond Round Shape">
                                                                    </div>
                                                                </div>
                                                                <div class="col">
                                                                    <div class="title fw-bold">
                                                                        Round
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <hr class="divider my-0">
                                                <div class="row">
                                                    <div class="col">
                                                        <div class="calc-detail">
                                                            <div class="desc">
                                                                Dept Percentage 60.00
                                                            </div>
                                                            <div class="desc">
                                                                Length to Width Ratio: 1.00 to 1
                                                            </div>
                                                            <div class="desc text-primary">
                                                                <strong>
                                                                    The daimond weighs approximately 3.660 carats
                                                                </strong>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 order-md-3 order-2">
                                        <div class="action">
                                            <div class="item-list">
                                                <li>
                                                    <button type="submit" id="submitForm" class="btn btn-lg btn-primary disabled" title="คำณวน">คำณวน</button>
                                                </li>
                                                <li>
                                                    <button type="button" id="cancelForm" class="btn btn-lg btn-border-primary" title="รีเซ็ต">รีเซ็ต</button>
                                                </li>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- </div> -->

                </div>
            </div>
        </section>
        <?php include('inc/footer.php'); ?>
    </div>
    <?php include('inc/loadscript.php'); ?>
</body>

</html>

<!-- <div class="form-group has-feedback">
                                            <label class="control-label" for="diamondShape">Diamond shape</label>
                                            <div class="select-wrapper">
                                                <select class="select-control" name="diamondShape" id="diamondShape" style="width: 100%;">
                                                    <option value="SELECT1">Round</option>
                                                    <option value="SELECT2">Oval</option>
                                                    <option value="SELECT2">Princess</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group has-feedback">
                                            <label class="control-label" for="diameter">Diameter,mm</label>
                                            <div class="select-wrapper">
                                                <select class="select-control" name="diameter" id="diameter" style="width: 100%;">
                                                    <option value="SELECT1">19</option>
                                                    <option value="SELECT2">20</option>
                                                    <option value="SELECT2">21</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group has-feedback">
                                            <label class="control-label" for="dept">Dept,mm</label>
                                            <div class="select-wrapper">
                                                <select class="select-control" name="dept" id="dept" style="width: 100%;">
                                                    <option value="SELECT1">6</option>
                                                    <option value="SELECT2">7</option>
                                                    <option value="SELECT2">8</option>
                                                </select>
                                            </div>
                                        </div> -->
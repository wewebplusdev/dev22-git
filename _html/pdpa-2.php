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
                <div class="top-graphic text-dark">
                    <figure class="cover">
                        <img src="<?php echo $core_template; ?>/assets/img/background/top-graphic-pdpa.jpg" alt="">
                    </figure>
                    <div class="container">
                        <div class="wrapper">
                            <div class="title typo-lg">นโยบายส่วนบุคคล</div>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#" class="link">หน้าหลัก</a></li>
                                <li class="breadcrumb-item active" aria-current="page">นโยบายส่วนบุคคล</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <div class="default-nav">
                <div class="nav-slider-block">
                    <div class="container">
                        <div class="default-nav-slider">
                            <div class="item">
                                <a href="javascript:void(0))" class="active">
                                    แบบคำขอใช้สิทธิ <br>
                                    ข้อมูลส่วนบุคคล
                                </a>
                            </div>
                            <div class="item">
                                <a href="javascript:void(0)">
                                    นโยบายความเป็นส่วนตัว
                                    สำหรับลูกค้า
                                </a>
                            </div>
                            <div class="item">
                                <a href="javascript:void(0)">
                                    นโยบายความเป็นส่วนตัว
                                    สำหรับคู่ค้า
                                </a>
                            </div>
                            <div class="item">
                                <a href="javascript:void(0))">
                                    นโยบายความเป็นส่วนตัว
                                    สำหรับพนักงาน
                                </a>
                            </div>
                            <div class="item">
                                <a href="javascript:void(0))">
                                    นโยบายความเป็นส่วนตัว
                                    สำหรับผู้สมัครงาน
                                </a>
                            </div>
                            <div class="item">
                                <a href="javascript:void(0))">
                                    นโยบายคุกกี้
                                </a>
                            </div>

                        </div>
                    </div>
                    <div class="border-nav-slider"></div>
                </div>
            </div>
            <div class="default-page pdpa-page">
                <div class="container">
                    <div class="h-title">
                        แบบคำขอใช้สิทธิข้อมูลส่วนบุคคล
                    </div>
                    <!-- <div class="form-block">
                        <form data-toggle="validator" role="form" class="form-default" method="post">
                            <div class="row gutters-lg-50 gutters-15">
                                <div class="col-md-6">
                                    <div class="form-group has-feedback">
                                        <label class="control-label" for="firstName">ติดต่อ</label>
                                        <div class="select-wrapper">
                                            <select class="select-control" name="first name" id="firstName" style="width: 100%;">
                                                <option value="0">ชื่อ</option>
                                                <option value="1">ชื่อ</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group has-feedback">
                                        <label class="control-label" for="lastName">นามสกุล *</label>
                                        <div class="block-control">
                                            <input type="text" class="form-control" id="lastName" placeholder="กรอกนามสกุล" data-error="" value="" required>
                                            <span class="form-control-feedback" aria-hidden="true"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group has-feedback">
                                        <label class="control-label" for="email">อีเมล *</label>
                                        <div class="block-control">
                                            <input type="email" class="form-control" id="email" placeholder="กรอกอีเมล" data-error="" value="" required>
                                            <span class="form-control-feedback" aria-hidden="true"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group has-feedback">
                                        <label class="control-label" for="phoneNumber">เบอร์โทรศัพท์ *</label>
                                        <div class="block-control">
                                            <input type="tel" class="form-control" id="phoneNumber" placeholder="กรอกเบอร์โทรศัพท์" data-error="" value="" required>
                                            <span class="form-control-feedback" aria-hidden="true"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row gutters-lg-50 gutters-15 justify-content-center">
                                <div class="col-md-3 col">
                                    <button type="submit" id="submitForm" class="btn fluid btn-lg btn-primary disabled" title="ยืนยันตัวตนของคุณ">ยืนยันตัวตนของคุณ</button>
                                </div>
                            </div>
                        </form>
                    </div> -->
                    <div class="form-block">
                        <form data-toggle="validator" role="form" class="form-default" method="post">
                            <div class="row gutters-lg-30 gutters-15">
                                <div class="col-md-6">
                                    <div class="form-group has-feedback">
                                        <label class="control-label" for="firstName">ชื่อ *</label>
                                        <div class="block-control">
                                            <input type="text" class="form-control" id="firstName" placeholder="กรอกชื่อ" data-error="" value="" required>
                                            <span class="form-control-feedback" aria-hidden="true"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group has-feedback">
                                        <label class="control-label" for="lastName">นามสกุล *</label>
                                        <div class="block-control">
                                            <input type="text" class="form-control" id="lastName" placeholder="กรอกนามสกุล" data-error="" value="" required>
                                            <span class="form-control-feedback" aria-hidden="true"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group has-feedback">
                                        <label class="control-label" for="email">อีเมล *</label>
                                        <div class="block-control">
                                            <input type="email" class="form-control" id="email" placeholder="กรอกอีเมล" data-error="" value="" required>
                                            <span class="form-control-feedback" aria-hidden="true"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group has-feedback">
                                        <label class="control-label" for="phoneNumber">เบอร์โทรศัพท์ *</label>
                                        <div class="block-control">
                                            <input type="tel" class="form-control" id="phoneNumber" placeholder="กรอกเบอร์โทรศัพท์" data-error="" value="" required>
                                            <span class="form-control-feedback" aria-hidden="true"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="box">
                                        <p class="desc">
                                            ข้าพเจ้าขอรับรองว่า ข้อมูลต่างๆ ที่ได้แจ้งให้แก่บริษัทนั้นเป็นความจริง ถูกต้อง และบริษัทอาจติดต่อข้าพเจ้าเพื่อขอข้อมูลเพิ่มเติมเพื่อให้สามารถดำเนินการตามคำขอของข้าพเจ้าได้อย่างถูกต้อง ครบถ้วน
                                            <br><br>
                                            ทั้งนี้ ข้าพเจ้ารับทราบว่า บริษัทจะพิจารณาและแจ้งผลการพิจารณาตามคำร้องขอใช้สิทธิภายใน 30 วันนับแต่วันที่ได้รับคำร้องขอดังกล่าว และบริษัทสงวนสิทธิในการพิจารณาคำร้องขอใช้สิทธิของข้าพเจ้า และอาจจำเป็นต้องปฏิเสธคำร้องของข้าพเจ้า เพื่อให้เป็นไปตามกฎหมายที่เกี่ยวข้อง เช่น กรณีไม่สามารถแสดงให้เห็นชัดเจนว่าเป็นเจ้าของข้อมูลหรือไม่มีอำนาจในการยื่นคำร้องร้องขอ กรณีเป็นคำขอที่ไม่สมเหตุสมผล เป็นคำขอฟุ่มเฟือย การดำเนินการตามคำขอจะทำให้กระทบในด้านลบต่อบุคคลอื่น บริษัทจำเป็นต้องใช้ข้อมูลนั้นในการประมวลผลตามหน้าที่กฎหมาย หรือบริษัททำลายข้อมูลนั้นแล้วเนื่องจากพ้นระยะเวลาการเก็บข้อมูลแล้ว
                                    </div>
                                    </p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="form-group form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="from-check" require>
                                        <label class="control-label c-color" for="from-check">
                                            ฉันยอมรับเงื่อนไข
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="row gutters-lg-50 gutters-15 justify-content-center">
                                <div class="col-md-3 col">
                                    <button type="submit" id="submitForm" class="btn fluid btn-lg btn-primary disabled" title="ยืนยันตัวตนของคุณ">ยืนยันตัวตนของคุณ</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </section>

        <?php include('inc/footer.php'); ?>

    </div>

    <?php include('inc/loadscript.php'); ?>

    <script>
        Swal.fire({
            // popup: 'popup-class',
            title: 'บันทึกข้อมูลเรียบร้อยแล้ว',
            text: 'ทางเราได้รับข้อมูลของท่านเรียบร้อยแล้ว ขอขอบพระคุณที่ใช้บริการ',
            icon: 'success',
            confirmButtonText: 'ตกลง'
        })
    </script>


</body>

</html>
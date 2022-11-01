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
                    <div class="complaint-system-form">
                        <div class="title">WHISTLE BLOWING FORM</div>
                        <div class="desc">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and</div>
                        <form data-toggle="validator" role="form" class="form-default" method="post">

                            <div class="form-group has-feedback">
                                <label class="control-label" for="complaintSystemTopic">Topic</label>
                                <div class="select-wrapper">
                                    <select class="select-control select-year" name="ordernews" id="complaintSystemTopic" style="width: 100%;">
                                        <option value="SELECT1">แจ้งเรื่องร้องเรียนทั่วไป</option>
                                        <option value="SELECT2">แจ้งเรื่องร้องเรียนทั่วไป</option>
                                        <option value="SELECT3">แจ้งเรื่องร้องเรียนทั่วไป</option>
                                        <option value="SELECT4">แจ้งเรื่องร้องเรียนทั่วไป</option>
                                        <option value="SELECT5">แจ้งเรื่องร้องเรียนทั่วไป</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group has-feedback -nm">
                                <label class="control-label" for="complaintSystemTextArea">Detail</label>
                                <div class="block-control">
                                    <textarea class="form-control form-text-area h-100" rows="6" cols="100" id="complaintSystemTextArea" value="Spicyfi" data-error=""></textarea>
                                    <span class="form-control-feedback" aria-hidden="true"></span>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm">
                                    <div class="form-group has-feedback">
                                        <label class="control-label" for="complaintSystemF-name">Full Name</label>
                                        <span>*</span>
                                        <div class="block-control">
                                            <input type="text" class="form-control" id="complaintSystemF-name" placeholder="Tori H Wilson" data-error="">
                                            <span class="form-control-feedback" aria-hidden="true"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm">
                                    <div class="form-group has-feedback">
                                        <label class="control-label" for="complaintSystemE-mail">Email</label>
                                        <span>*</span>
                                        <div class="block-control">
                                            <input type="email" class="form-control" id="complaintSystemE-mail" placeholder="Tori.Engineer@Gmail.Com" data-error="">
                                            <span class="form-control-feedback" aria-hidden="true"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm">
                                    <div class="form-group has-feedback">
                                        <label class="control-label" for="complaintSystemAdress">Adress</label>
                                        <div class="block-control">
                                            <input type="text" class="form-control" id="complaintSystemAdress" placeholder="3533 Cullen Boulevard, Tx 77204-3001" data-error="">
                                            <span class="form-control-feedback" aria-hidden="true"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm">
                                    <div class="form-group has-feedback">
                                        <label class="control-label" for="complaintSystemTelephone">Telephone</label>
                                        <div class="block-control">
                                            <input type="number" class="form-control" id="complaintSystemTelephone" placeholder="089 253 3356" data-error="">
                                            <span class="form-control-feedback" aria-hidden="true"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm">
                                    <div class="form-group has-feedback">
                                        <label class="control-label" for="complaintSystemPassword">Password</label>
                                        <div class="block-control">
                                            <input type="password" class="form-control" id="complaintSystemPassword" placeholder="" data-error="">
                                            <span class="form-control-feedback" aria-hidden="true"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm">
                                    <div class="form-group has-feedback">
                                        <label class="control-label" for="CaptchaMockup">Chaptcha Mockup</label>
                                        <div class="block-control">
                                            <input type="text" class="form-control" id="CaptchaMockup" placeholder="Captcha Mockup" data-error="">
                                            <span class="form-control-feedback" aria-hidden="true"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-sm-5 mt-4">
                                <div class="col text-right">
                                    <a href="javascript:void(0)" class="btn btn-primary" title="btn btn-primary">SEND</a>
                                </div>
                                <div class="col text-left">
                                    <a href="javascript:void(0)" class="btn btn-primary -cancel" title="btn btn-primary">CANCEL</a>
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
</body>

</html>
<?php
/* Smarty version 4.0.0, created on 2022-10-12 17:57:18
  from '/var/www/html/front/template/default/_component/career-form.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.0',
  'unifunc' => 'content_63469d8e59e022_42160912',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5a523170c265681e6c2b26d0727eb06a15c5892a' => 
    array (
      0 => '/var/www/html/front/template/default/_component/career-form.tpl',
      1 => 1665572236,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63469d8e59e022_42160912 (Smarty_Internal_Template $_smarty_tpl) {
?><section class="site-container">
<div class="default-header">
    <div class="top-graphic mb-4">
        <figure class="cover">
            <img class="figure-img img-fluid" src="<?php echo $_smarty_tpl->tpl_vars['template']->value;
echo $_smarty_tpl->tpl_vars['settingModulus']->value['tgp'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['settingModulus']->value['subject'];?>
">
        </figure>
        <div class="container">
            <div class="wrapper">
              <div class="title typo-lg"><?php echo $_smarty_tpl->tpl_vars['settingModulus']->value['title'];?>
</div>
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?php echo $_smarty_tpl->tpl_vars['ul']->value;?>
/home"><?php echo $_smarty_tpl->tpl_vars['lang']->value['menu']['home'];?>
</a></li>
                <?php if ($_smarty_tpl->tpl_vars['settingModulus']->value['subject'] != '') {?>
                  <li class="breadcrumb-item"><a href="<?php echo $_smarty_tpl->tpl_vars['ul']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['menuActive']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['settingModulus']->value['subject'];?>
</a></li>
                <?php }?>
                <li class="breadcrumb-item active" aria-current="page"><?php echo $_smarty_tpl->tpl_vars['settingModulus']->value['breadcrumb'];?>
</li>
              </ol>
            </div>
        </div>
    </div>
</div>
<div class="default-page about form-about">
    <?php if (count($_smarty_tpl->tpl_vars['getMenuDetail']->value) > 0) {?>
      <div class="container">
        <div class="default-nav-slider" data-slick='<?php echo $_smarty_tpl->tpl_vars['initialSlide']->value;?>
'>
          <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['getMenuDetail']->value, 'valuegetMenuDetail', false, 'keygetMenuDetail');
$_smarty_tpl->tpl_vars['valuegetMenuDetail']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['keygetMenuDetail']->value => $_smarty_tpl->tpl_vars['valuegetMenuDetail']->value) {
$_smarty_tpl->tpl_vars['valuegetMenuDetail']->do_else = false;
?>
            <?php $_smarty_tpl->_assignInScope('arrName', explode("-",$_smarty_tpl->tpl_vars['valuegetMenuDetail']->value['subject']));?>
            <div class="item">
              <a href="<?php echo $_smarty_tpl->tpl_vars['ul']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['menuActive']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['valuegetMenuDetail']->value['id'];?>
" <?php if ($_smarty_tpl->tpl_vars['MenuID']->value == $_smarty_tpl->tpl_vars['valuegetMenuDetail']->value['masterkey']) {?>class="active"<?php }?>><?php echo $_smarty_tpl->tpl_vars['arrName']->value[0];?>
</a>
            </div>
          <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </div>
      </div>
    <?php }?>

    <div class="container">
        <div class="h-title">
            ใบสมัครงาน (APPLICATION FORM)
            </br>
            สถาบันวิจัยและพัฒนาอัญมณีและเครื่องประดับแห่งชาติ(องค์การมหาชน)
        </div>
        <form data-toggle="validator" role="form" class="form-default" method="post">
            <div class="upload-form mb-lg-5 mb-4">
                <div class="row gutters-custom align-items-center">
                    <div class="col-sm-auto">
                        <!-- <div class="upload-form-image">
                            <div class="upload-image">
                                <p>UPLOAD</p>
                                <div class="form-group has-feedback">
                                    <div class="control-label" for="mockSelect-profile"></div>
                                </div>
                            </div>
                        </div> -->
                                                <input name="keyProfile" value="<?php echo $_smarty_tpl->tpl_vars['careermasterkey']->value;?>
" type="hidden">
                        <input name="picProfile" id="picProfile" value="" type="file" style="display:none;" accept="image/jpeg,jpg,png">
                        <input name="LangPage" value="<?php echo $_smarty_tpl->tpl_vars['LangPage']->value;?>
" type="hidden">
                                                <div class="thumb drag-area">
                            <figure class="cover showProfile" id="clickuploadProfile" style="cursor:pointer;">
                                                            <input type="file" name="uploadProfile" id="uploadProfile" style="display:none;" accept="image/jpeg,jpg,png">
                                                              <img id="img-area" src="<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/assets/img/upload/avatar.jpg" alt="" class="lazy">
                            </figure>
                        </div>
                    </div>
                    <div class="col-sm">
                        <div class="form-default">
                            <!-- <div class="typo-xs text-gray" style=" padding-left: 12.5px; padding-right: 12.5px; ">ตำแหน่งที่ต้องการสมัคร Position</div> -->
                            <div class="row gutters-custom">
                                <div class="col">
                                    <div class="control-label" for="mockSelect1">ตำแหน่งที่ต้องการสมัคร position</div>
                                    <div class="form-group has-feedback">
                                        <label class="control-label visuallyhidden" for="mockSelect1">Example select</label>
                                        <div class="select-wrapper">
                                            <select class="select-control select-year" name="info[]" id="mockSelect1" style="width: 100%;">
                                              <option value="0"><?php echo $_smarty_tpl->tpl_vars['lang']->value['career']['select'];?>
</option>
                                              <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['callListCareerSelect']->value, 'valuecallListCareerSelect', false, 'keycallListCareerSelect');
$_smarty_tpl->tpl_vars['valuecallListCareerSelect']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['keycallListCareerSelect']->value => $_smarty_tpl->tpl_vars['valuecallListCareerSelect']->value) {
$_smarty_tpl->tpl_vars['valuecallListCareerSelect']->do_else = false;
?>
                                              <option value="<?php echo $_smarty_tpl->tpl_vars['valuecallListCareerSelect']->value['id'];?>
" <?php if ($_smarty_tpl->tpl_vars['req_params']->value['selectcareer'] == $_smarty_tpl->tpl_vars['valuecallListCareerSelect']->value['id']) {?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['valuecallListCareerSelect']->value['subject'];?>
</option>
                                              <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row gutters-custom">
                                <div class="col-md">
                                    <div class="form-group has-feedback">
                                        <label class="control-label visuallyhidden" for="salaly">Example input</label>
                                        <div class="block-control">
                                            <input type="text" class="form-control" name="info[]" id="salaly" placeholder="เงินเดือนที่ต้องการ" data-error="">
                                            <span class="form-control-feedback" aria-hidden="true"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md">
                                    <div class="form-group has-feedback">
                                        <label class="control-label visuallyhidden" for="sdate">Example input</label>
                                        <div class="block-control">
                                            <input type="date" class="form-control" name="info[]" id="sdate" placeholder="วันที่พร้อมจะเริ่มงานได้/Starting Date" ata-error="">
                                            <span class="form-control-feedback" aria-hidden="true"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="title">
                โปรดกรอกข้อความในใบสมัครโดยละเอียดและครบถ้วน
                </br>
                (Please complete the following form and state details)
            </div>
            <div class="form-default mt-xl-4">
                <div class="title">ประวัติส่วนตัว PERSONAL DETEAILS <span>*</span> </div>
                <div class="row gutters-custom">
                    <div class="col-sm-2 col-3">
                        <div class="form-group">
                            <label class="control-label visuallyhidden" for="mockSelect2">Example select</label>
                            <div class="select-wrapper">
                                <select class="select-control" name="ordernews" id="mockSelect2" style="width: 100%;">
                                    <option value="SELECT1">นาย</option>
                                    <option value="SELECT2">นางสาว</option>
                                    <option value="SELECT3">นาง</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm">
                        <div class="form-group has-feedback">
                            <label class="control-label visuallyhidden" for="fname">Example input</label>
                            <div class="block-control">
                                <input type="text" class="form-control" id="fname" placeholder="ชื่อ First Name (Thai)" data-error="">
                                <span class="form-control-feedback" aria-hidden="true"></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm">
                        <div class="form-group has-feedback">
                            <label class="control-label visuallyhidden" for="lname">Example input</label>
                            <div class="block-control">
                                <input type="text" class="form-control" id="lname" placeholder="นามสกุล Surname (Thai)" data-error="">
                                <span class="form-control-feedback" aria-hidden="true"></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row gutters-custom">
                    <div class="col-sm-2 col-3">
                        <div class="form-group">
                            <label class="control-label visuallyhidden" for="mockSelect3">Example select</label>
                            <div class="select-wrapper">
                                <select class="select-control" name="ordernews" id="mockSelect3" style="width: 100%;">
                                    <option value="SELECT1">Mr.</option>
                                    <option value="SELECT2">Mrs.</option>
                                    <option value="SELECT2">Ms.</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm">
                        <div class="form-group has-feedback">
                            <label class="control-label visuallyhidden" for="email">Example input</label>
                            <div class="block-control">
                                <input type="email" class="form-control" id="email" placeholder="ชื่อ First Name (Thai)" data-error="">
                                <span class="form-control-feedback" aria-hidden="true"></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm">
                        <div class="form-group has-feedback">
                            <label class="control-label visuallyhidden" for="email">Example input</label>
                            <div class="block-control">
                                <input type="email" class="form-control" id="email" placeholder="นามสกุล Surname (Thai)" data-error="">
                                <span class="form-control-feedback" aria-hidden="true"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-default">
                <!-- <div class="text-primary typo-xs">วันเดือนปีเกิด/Date of birthday<span>*</span> </div> -->
                <div class="row gutters-custom align-items-end">
                    <div class="col-xl">
                        <div class="row gutters-custom align-items-end">
                            <div class="col-xl-3 col-lg-4 col-sm">
                                <div class="form-group -nm I">
                                    <label class="control-label label-custom" for="select-day">วันเดือนปีเกิด/Date of birthday<span>*</span></label>
                                    <div class="select-wrapper">
                                        <select class="select-control" name="ordernews" id="select-day" style="width: 100%;">
                                            <option value="SELECT1">01</option>
                                            <option value="SELECT2">02</option>
                                            <option value="SELECT2">03</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-4 col-sm">
                                <div class="form-group">
                                    <label class="control-label visuallyhidden" for="select-month">Example select</label>
                                    <div class="select-wrapper">
                                        <select class="select-control" name="ordernews" id="select-month" style="width: 100%;">
                                            <option value="SELECT1">January</option>
                                            <option value="SELECT2">January</option>
                                            <option value="SELECT2">January</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-sm">
                                <div class="form-group">
                                    <label class="control-label visuallyhidden" for="select-year">Example select</label>
                                    <div class="select-wrapper">
                                        <select class="select-control" name="ordernews" id="select-year" style="width: 100%;">
                                            <option value="SELECT1">2565</option>
                                            <option value="SELECT2">2566</option>
                                            <option value="SELECT2">2567</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl">
                        <div class="row gutters-custom align-items-center">
                            <div class="col-xl-3 col-lg-4 col-sm">
                                <div class="form-group has-feedback">
                                    <label class="control-label visuallyhidden" for="weight">Example input</label>
                                    <div class="block-control">
                                        <input type="text" class="form-control" id="weight" placeholder="99 kg" data-error="">
                                        <span class="form-control-feedback" aria-hidden="true"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-sm">
                                <div class="form-group has-feedback">
                                    <label class="control-label visuallyhidden" for="height">Example input</label>
                                    <div class="block-control">
                                        <input type="text" class="form-control" id="height" placeholder="ส่วนสูง/Height cm" data-error="">
                                        <span class="form-control-feedback" aria-hidden="true"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-5 col-lg-4 col-sm">
                                <div class="form-group">
                                    <label class="control-label visuallyhidden" for="date-select-year">Example select</label>
                                    <div class="select-wrapper">
                                        <select class="select-control" name="ordernews" id="date-select-year" style="width: 100%;">
                                            <option value="SELECT1">ภูมิสำเนา/Place of Birth</option>
                                            <option value="SELECT2">ภูมิสำเนา/Place of Birth</option>
                                            <option value="SELECT2">ภูมิสำเนา/Place of Birth</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row gutters-custom align-items-center">
                    <div class="col-auto">
                        <fieldset>
                            <legend class="visuallyhidden">radio</legend>
                            <div class="form-group form-check">
                                <input class="form-check-input radio-check" type="radio" name="exampleRadios" id="male" value="option1" checked>
                                <label class="control-label" for="male">
                                    ชาย/Male
                                </label>
                            </div>
                        </fieldset>
                    </div>
                    <div class="col">
                        <fieldset>
                            <legend class="visuallyhidden">radio</legend>
                            <div class="form-group form-check">
                                <input class="form-check-input radio-check" type="radio" name="exampleRadios" id="female" value="option1" checked>
                                <label class="control-label" for="female">
                                    หญิง/Female
                                </label>
                            </div>
                        </fieldset>
                    </div>
                </div>
            </div>
            <div class="form-default mt-xl-4">
                <div class="title">ที่อยู่ตามทะเบียนบ้าน/Home Address</div>
                <div class="row gutters-custom">
                    <div class="col-md-4">
                        <div class="row gutters-custom">
                            <div class="col-md-7 col-sm">
                                <div class="form-group has-feedback">
                                    <label class="control-label visuallyhidden" for="have-with-number">Example input</label>
                                    <div class="block-control">
                                        <input type="text" class="form-control" id="have-with-number" placeholder="Have With number" data-error="">
                                        <span class="form-control-feedback" aria-hidden="true"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-5 col-sm">
                                <div class="form-group has-feedback">
                                    <label class="control-label visuallyhidden" for="moo">Example input</label>
                                    <input type="text" class="form-control" id="moo" placeholder="Moo" data-error="">
                                    <div class="block-control">
                                        <span class="form-control-feedback" aria-hidden="true"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="row gutters-custom">
                            <div class="col-sm">
                                <div class="form-group has-feedback">
                                    <label class="control-label visuallyhidden" for="village-building">Example input</label>
                                    <div class="block-control">
                                        <input type="text" class="form-control" id="village-building" placeholder="Village / building" data-error="">
                                        <span class="form-control-feedback" aria-hidden="true"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm">
                                <div class="form-group has-feedback">
                                    <label class="control-label visuallyhidden" for="alley">Example input</label>
                                    <div class="block-control">
                                        <input type="text" class="form-control" id="alley" placeholder="Alley" data-error="">
                                        <span class="form-control-feedback" aria-hidden="true"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm">
                                <div class="form-group has-feedback">
                                    <label class="control-label visuallyhidden" for="road">Example input</label>
                                    <div class="block-control">
                                        <input type="text" class="form-control" id="road" placeholder="Road" data-error="">
                                        <span class="form-control-feedback" aria-hidden="true"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row gutters-custom">
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label class="control-label visuallyhidden" for="province">Example select</label>
                            <div class="select-wrapper">
                                <select class="select-control" name="ordernews" id="province" style="width: 100%;">
                                    <option value="SELECT1">Province</option>
                                    <option value="SELECT2">Province</option>
                                    <option value="SELECT2">Province</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm">
                        <div class="form-group">
                            <label class="control-label visuallyhidden" for="district">Example select</label>
                            <div class="select-wrapper">
                                <select class="select-control" name="ordernews" id="district" style="width: 100%;">
                                    <option value="SELECT1">District</option>
                                    <option value="SELECT2">District</option>
                                    <option value="SELECT2">District</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm">
                        <div class="form-group">
                            <label class="control-label visuallyhidden" for="subdistrict">Example select</label>
                            <div class="select-wrapper">
                                <select class="select-control" name="ordernews" id="subdistrict" style="width: 100%;">
                                    <option value="SELECT1">Subdistrict</option>
                                    <option value="SELECT2">Subdistrict</option>
                                    <option value="SELECT2">Subdistrict</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm">
                        <div class="form-group has-feedback">
                            <label class="control-label visuallyhidden" for="postcode">Example input</label>
                            <div class="block-control">
                                <input type="text" class="form-control" id="postcode" placeholder="Postcode" data-error="">
                                <span class="form-control-feedback" aria-hidden="true"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-default mt-xl-4">
                <div class="title">ที่อยู่ปัจจุบัน/Present Address</div>
                <div class="row gutters-custom">
                    <div class="col-md-4">
                        <div class="row gutters-custom">
                            <div class="col-md-7 col-sm">
                                <div class="form-group has-feedback">
                                    <label class="control-label visuallyhidden" for="present-have-with-number">Example input</label>
                                    <div class="block-control">
                                        <input type="text" class="form-control" id="present-have-with-number" placeholder="Have With number" data-error="">
                                        <span class="form-control-feedback" aria-hidden="true"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-5 col-sm">
                                <div class="form-group has-feedback">
                                    <label class="control-label visuallyhidden" for="present-moo">Example input</label>
                                    <div class="block-control">
                                        <input type="text" class="form-control" id="present-moo" placeholder="Moo" data-error="">
                                        <span class="form-control-feedback" aria-hidden="true"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="row gutters-custom">
                            <div class="col-sm">
                                <div class="form-group has-feedback">
                                    <label class="control-label visuallyhidden" for="present-village-building">Example input</label>
                                    <div class="block-control">
                                        <input type="text" class="form-control" id="present-village-building" placeholder="Village / building" data-error="">
                                        <span class="form-control-feedback" aria-hidden="true"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm">
                                <div class="form-group has-feedback">
                                    <label class="control-label visuallyhidden" for="present-alley">Example input</label>
                                    <div class="block-control">
                                        <input type="text" class="form-control" id="present-alley" placeholder="Alley" data-error="">
                                        <span class="form-control-feedback" aria-hidden="true"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm">
                                <div class="form-group has-feedback">
                                    <label class="control-label visuallyhidden" for="present-road">Example input</label>
                                    <div class="block-control">
                                        <input type="text" class="form-control" id="present-road" placeholder="Road" data-error="">
                                        <span class="form-control-feedback" aria-hidden="true"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row gutters-custom">
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label class="control-label visuallyhidden" for="present-province">Example select</label>
                            <div class="select-wrapper">
                                <select class="select-control" name="ordernews" id="present-province" style="width: 100%;">
                                    <option value="SELECT1">Province</option>
                                    <option value="SELECT2">Province</option>
                                    <option value="SELECT2">Province</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm">
                        <div class="form-group">
                            <label class="control-label visuallyhidden" for="present-district">Example select</label>
                            <div class="select-wrapper">
                                <select class="select-control" name="ordernews" id="present-district" style="width: 100%;">
                                    <option value="SELECT1">District</option>
                                    <option value="SELECT2">District</option>
                                    <option value="SELECT2">District</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm">
                        <div class="form-group">
                            <label class="control-label visuallyhidden" for="present-subdistrict">Example select</label>
                            <div class="select-wrapper">
                                <select class="select-control" name="ordernews" id="present-subdistrict" style="width: 100%;">
                                    <option value="SELECT1">Subdistrict</option>
                                    <option value="SELECT2">Subdistrict</option>
                                    <option value="SELECT2">Subdistrict</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm">
                        <div class="form-group has-feedback">
                            <label class="control-label visuallyhidden" for="present-postcode">Example input</label>
                            <div class="block-control">
                                <input type="text" class="form-control" id="present-postcode" placeholder="Postcode" data-error="">
                                <span class="form-control-feedback" aria-hidden="true"></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row gutters-custom">
                    <div class="col-sm">
                        <div class="form-group has-feedback">
                            <label class="control-label" for="telephone-home">โทรศัพท์ / Telephone Home</label>
                            <div class="block-control">
                                <input type="text" class="form-control" id="telephone-home" placeholder="058-7784562" data-error="">
                                <span class="form-control-feedback" aria-hidden="true"></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm">
                        <div class="form-group has-feedback">
                            <label class="control-label" for="telephone-mobile">โทรศัพท์มือถือ / Mobile Phone</label>
                            <div class="block-control">
                                <input type="text" class="form-control" id="telephone-mobile" placeholder="060-XXX-XXXX" data-error="">
                                <span class="form-control-feedback" aria-hidden="true"></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm">
                        <div class="form-group has-feedback">
                            <label class="control-label" for="email">อีเมล์ / E-Mail</label>
                            <div class="block-control">
                                <input type="email" class="form-control" id="email" placeholder="อีเมล์ E-Mail" data-error="">
                                <span class="form-control-feedback" aria-hidden="true"></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row gutters-custom">
                    <div class="col-xl-4 col-md-4 col-sm-6">
                        <div class="row gutters-custom">
                            <div class="col-sm">
                                <div class="form-group has-feedback">
                                    <label class="control-label" for="identification-1">บัตรประชาชนเลขที่ / Identification Card No.</label>
                                    <div class="block-control">
                                        <input type="text" class="form-control" id="identification-1" placeholder="X-XXXX-XXXXX-XX-X" data-error="">
                                        <span class="form-control-feedback" aria-hidden="true"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-8 col-sm-6">
                        <div class="row gutters-custom">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="control-label" for="issued-at">สถานที่ออกบัตร / Issued at</label>
                                    <div class="select-wrapper">
                                        <select class="select-control" name="ordernews" id="issued-at" style="width: 100%;">
                                            <option value="SELECT1">กรุงเทพ</option>
                                            <option value="SELECT2">กรุงเทพ</option>
                                            <option value="SELECT2">กรุงเทพ</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group has-feedback">
                                    <label class="control-label" for="expiry-date" style=" font-size: 14px; ">วันหมดอายุ / Expiry Date</label>
                                    <div class="block-control">
                                        <input type="text" class="form-control" id="expiry-date" placeholder="17 - 02 - 2565" data-error="">
                                        <span class="form-control-feedback" aria-hidden="true"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-default mt-xl-4">
                <div class="title">สถานภาพทางทหาร / Military Status</div>
                <div class="row gutters-custom">
                    <div class="col-auto">
                        <fieldset>
                            <legend class="visuallyhidden">radio</legend>
                            <div class="form-group form-check">
                                <input class="form-check-input radio-check" type="radio" name="exampleRadios" id="exempted" value="option1" checked>
                                <label class="control-label" for="exempted">
                                    ได้รับการยกเว้น / Exempted
                                </label>
                            </div>
                        </fieldset>
                    </div>
                    <div class="col-auto">
                        <fieldset>
                            <legend class="visuallyhidden">radio</legend>
                            <div class="form-group form-check">
                                <input class="form-check-input radio-check" type="radio" name="exampleRadios" id="non-exempted" value="option1" checked>
                                <label class="control-label" for="non-exempted">
                                    ยังไม่ผ่านการเกณฑ์ทหาร / Non-Exempted
                                </label>
                            </div>
                        </fieldset>
                    </div>
                    <div class="col-auto">
                        <fieldset>
                            <legend class="visuallyhidden">radio</legend>
                            <div class="form-group form-check">
                                <input class="form-check-input radio-check" type="radio" name="exampleRadios" id="territorial-degree-student" value="option1" checked>
                                <label class="control-label" for="territorial-degree-student">
                                    เรียนรักษาดินแดน / Territorial Degree Student
                                </label>
                            </div>
                        </fieldset>
                    </div>
                </div>
                <div class="row gutters-custom align-items-center">
                    <div class="col-auto">
                        <fieldset>
                            <legend class="visuallyhidden">radio</legend>
                            <div class="form-group form-check">
                                <input class="form-check-input radio-check" type="radio" name="exampleRadios" id="date-entered-service" value="option1" checked>
                                <label class="control-label" for="date-entered-service">
                                    รับราชการทหารแล้ว / Date Entered Service
                                </label>
                            </div>
                        </fieldset>
                    </div>
                    <div class="col-auto">
                        <fieldset>
                            <legend class="visuallyhidden">radio</legend>
                            <div class="form-group form-check">
                                <input class="form-check-input radio-check" type="radio" name="exampleRadios" id="other" value="option1" checked>
                                <label class="control-label" for="other">
                                    อื่นๆ / Other
                                </label>
                            </div>
                        </fieldset>
                    </div>
                    <div class="col-md-5 col-sm-6">
                        <div class="form-group has-feedback">
                            <label class="control-label visuallyhidden" for="identification-2">บัตรประชาชนเลขที่ / Identification Card No.</label>
                            <div class="block-control">
                                <input type="text" class="form-control" id="identification-2" placeholder="ระบุ / Annotate" data-error="">
                                <span class="form-control-feedback" aria-hidden="true"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-default emergency-case">
                <div class="title">บุคคลที่สามารถติดต่อได้กรณีเร่งด่วน / In case of emergency please contact</div>
                <div class="row gutters-custom align-items-end">
                    <div class="col-md">
                        <div class="form-group has-feedback">
                            <label class="control-label font-size-C" for="e-name">ชื่อ / Name</label>
                            <div class="block-control">
                                <input type="text" class="form-control" id="e-name" placeholder="ชื่อ / Name" data-error="">
                                <span class="form-control-feedback" aria-hidden="true"></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md">
                        <div class="row gutters-custom">
                            <div class="col-md col-sm-6">
                                <div class="form-group has-feedback">
                                    <label class="control-label font-size-C" for="e-surname">นามสกุล / Surname</label>
                                    <div class="block-control">
                                        <input type="text" class="form-control" id="e-surname" placeholder="นามสกุล / Surname" data-error="">
                                        <span class="form-control-feedback" aria-hidden="true"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-4 col-sm-6">
                                <div class="form-group">
                                    <label class="control-label label-custom" for="e-select-day">วันเดือนปีเกิด/Date of birthday</label>
                                    <div class="select-wrapper">
                                        <select class="select-control" name="ordernews" id="e-select-day" style="width: 100%;">
                                            <option value="SELECT1">23</option>
                                            <option value="SELECT2">24</option>
                                            <option value="SELECT2">25</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md">
                        <div class="row gutters-custom">
                            <div class="col-md-5 col-sm-4">
                                <div class="form-group">
                                    <label class="control-label visuallyhidden" for="e-select-month">Ex</label>
                                    <div class="select-wrapper">
                                        <select class="select-control" name="ordernews" id="e-select-month" style="width: 100%;">
                                            <option value="SELECT1">ธันวาคม</option>
                                            <option value="SELECT2">ธันวาคม</option>
                                            <option value="SELECT2">ธันวาคม</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md col-sm-4">
                                <div class="form-group">
                                    <label class="control-label visuallyhidden" for="e-select-year">Ex</label>
                                    <div class="select-wrapper">
                                        <select class="select-control" name="ordernews" id="e-select-year" style="width: 100%;">
                                            <option value="SELECT1">2544</option>
                                            <option value="SELECT2">2544</option>
                                            <option value="SELECT2">ธ2544</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md col-sm-4">
                                <div class="form-group has-feedback">
                                    <label class="control-label visuallyhidden" for="e-age">Ex</label>
                                    <div class="block-control">
                                        <input type="text" class="form-control text-center" id="e-age" placeholder="35" data-error="">
                                        <span class="form-control-feedback" aria-hidden="true"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row gutters-custom">
                    <div class="col-sm">
                        <div class="form-group has-feedback">
                            <label class="control-label font-size-C" for="relations">ความสัมพันธ์ / Relations</label>
                            <div class="block-control">
                                <input type="text" class="form-control" id="relations" placeholder="ความสัมพันธ์ / Relations" data-error="">
                                <span class="form-control-feedback" aria-hidden="true"></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm">
                        <div class="form-group has-feedback">
                            <label class="control-label font-size-C" for="address-workplace">ที่อยู่/ที่ทำงาน / Address/Workplace</label>
                            <div class="block-control">
                                <input type="text" class="form-control" id="address-workplace" placeholder="ที่อยู่/ที่ทำงาน / Address/Workplace" data-error="">
                                <span class="form-control-feedback" aria-hidden="true"></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm">
                        <div class="form-group has-feedback">
                            <label class="control-label" for="e-tel">โทรศัพท / Tel.</label>
                            <div class="block-control">
                                <input type="text" class="form-control" id="e-tel" placeholder="060-XXX-XXXX" data-error="">
                                <span class="form-control-feedback" aria-hidden="true"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-default family-datails">
                <div class="form-set">
                    <div class="title">รายละเอียดครอบครัว / Family details <span>*</span></div>
                    <div class="row gutters-custom align-items-end">
                        <div class="col-md">
                            <div class="form-group has-feedback">
                                <label class="control-label font-size-C" for="f-name-1">1. ชื่อ / Name</label>
                                <div class="block-control">
                                    <input type="text" class="form-control" id="f-name-1" placeholder="ชื่อ / Name" data-error="">
                                    <span class="form-control-feedback" aria-hidden="true"></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md">
                            <div class="row gutters-custom">
                                <div class="col-md col-sm-6">
                                    <div class="form-group has-feedback">
                                        <label class="control-label font-size-C" for="f-surname-1">นามสกุล / Surname</label>
                                        <div class="block-control">
                                            <input type="text" class="form-control" id="f-surname-1" placeholder="นามสกุล / Surname" data-error="">
                                            <span class="form-control-feedback" aria-hidden="true"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-6">
                                    <div class="form-group">
                                        <label class="control-label label-custom" for="f-select-day-1">วันเดือนปีเกิด/Date of birthday</label>
                                        <div class="select-wrapper">
                                            <select class="select-control" name="ordernews" id="f-select-day-1" style="width: 100%;">
                                                <option value="SELECT1">23</option>
                                                <option value="SELECT2">24</option>
                                                <option value="SELECT2">25</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md">
                            <div class="row gutters-custom">
                                <div class="col-md-5 col-sm-4">
                                    <div class="form-group">
                                        <label class="control-label visuallyhidden" for="f-select-month-1">Ex</label>
                                        <div class="select-wrapper">
                                            <select class="select-control" name="ordernews" id="f-select-month-1" style="width: 100%;">
                                                <option value="SELECT1">ธันวาคม</option>
                                                <option value="SELECT2">ธันวาคม</option>
                                                <option value="SELECT2">ธันวาคม</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md col-sm-4">
                                    <div class="form-group">
                                        <label class="control-label visuallyhidden" for="f-select-year-1">Ex</label>
                                        <div class="select-wrapper">
                                            <select class="select-control" name="ordernews" id="f-select-year-1" style="width: 100%;">
                                                <option value="SELECT1">2544</option>
                                                <option value="SELECT2">2544</option>
                                                <option value="SELECT2">ธ2544</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md col-sm-4">
                                    <div class="form-group has-feedback">
                                        <label class="control-label visuallyhidden" for="f-age-1">Ex</label>
                                        <div class="block-control">
                                            <input type="text" class="form-control text-center" id="f-age-1" placeholder="35" data-error="">
                                            <span class="form-control-feedback" aria-hidden="true"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row gutters-custom">
                        <div class="col-sm">
                            <div class="form-group has-feedback">
                                <label class="control-label font-size-C" for="f-relations-1">ความสัมพันธ์ / Relations</label>
                                <div class="block-control">
                                    <input type="text" class="form-control" id="f-relations-1" placeholder="ความสัมพันธ์ / Relations" data-error="">
                                    <span class="form-control-feedback" aria-hidden="true"></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm">
                            <div class="form-group has-feedback">
                                <label class="control-label font-size-C" for="f-address-workplace-1">ที่อยู่/ที่ทำงาน / Address/Workplace</label>
                                <div class="block-control">
                                    <input type="text" class="form-control" id="f-address-workplace-1" placeholder="ที่อยู่/ที่ทำงาน / Address/Workplace" data-error="">
                                    <span class="form-control-feedback" aria-hidden="true"></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm">
                            <div class="form-group has-feedback">
                                <label class="control-label" for="f-tel-1">โทรศัพท / Tel.</label>
                                <div class="block-control">
                                    <input type="text" class="form-control" id="f-tel-1" placeholder="060-XXX-XXXX" data-error="">
                                    <span class="form-control-feedback" aria-hidden="true"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row gutters-custom">
                        <div class="col-auto">
                            <div class="row gutters-custom">
                                <div class="col-auto">
                                    <fieldset>
                                        <legend class="visuallyhidden">Live</legend>
                                        <div class="form-group form-check">
                                            <input class="form-check-input radio-check" type="radio" name="exampleRadios" id="live" value="option1" checked>
                                            <label class="control-label" for="live">
                                                Live
                                            </label>
                                        </div>
                                    </fieldset>
                                </div>
                                <div class="col-auto">
                                    <fieldset>
                                        <legend class="visuallyhidden">Pass Away</legend>
                                        <div class="form-group form-check">
                                            <input class="form-check-input radio-check" type="radio" name="exampleRadios" id="pass-away" value="option1" checked>
                                            <label class="control-label" for="pass-away">
                                                Pass Away
                                            </label>
                                        </div>
                                    </fieldset>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-8">
                            <div class="row gutters-custom">
                                <div class="col">
                                    <div class="form-group">
                                        <label class="control-label visuallyhidden" for="fc-select-day-1">Ex</label>
                                        <div class="select-wrapper select-custom">
                                            <select class="select-control" name="ordernews" id="fc-select-day-1" style="width: 100%;">
                                                <option value="SELECT1">Day</option>
                                                <option value="SELECT2">Day</option>
                                                <option value="SELECT2">Day</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label class="control-label visuallyhidden" for="fc-select-month-1">Ex</label>
                                        <div class="select-wrapper select-custom">
                                            <select class="select-control" name="ordernews" id="fc-select-month-1" style="width: 100%;">
                                                <option value="SELECT1">Month</option>
                                                <option value="SELECT2">Month</option>
                                                <option value="SELECT2">Month</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label class="control-label visuallyhidden" for="fc-select-year-1">Ex</label>
                                        <div class="select-wrapper select-custom">
                                            <select class="select-control" name="ordernews" id="fc-select-year-1" style="width: 100%;">
                                                <option value="SELECT1">Year</option>
                                                <option value="SELECT2">Year</option>
                                                <option value="SELECT2">Year</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-set I">
                    <div class="row gutters-custom align-items-end">
                        <div class="col-md">
                            <div class="form-group has-feedback">
                                <label class="control-label font-size-C" for="f-name-2">2. ชื่อ / Name</label>
                                <div class="block-control">
                                    <input type="text" class="form-control" id="f-name-2" placeholder="ชื่อ / Name" data-error="">
                                    <span class="form-control-feedback" aria-hidden="true"></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md">
                            <div class="row gutters-custom">
                                <div class="col-md col-sm-6">
                                    <div class="form-group has-feedback">
                                        <label class="control-label font-size-C" for="f-surname-2">นามสกุล / Surname</label>
                                        <div class="block-control">
                                            <input type="text" class="form-control" id="f-surname-2" placeholder="นามสกุล / Surname" data-error="">
                                            <span class="form-control-feedback" aria-hidden="true"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-6">
                                    <div class="form-group">
                                        <label class="control-label label-custom" for="f-select-day-2">วันเดือนปีเกิด/Date of birthday</label>
                                        <div class="select-wrapper">
                                            <select class="select-control" name="ordernews" id="f-select-day-2" style="width: 100%;">
                                                <option value="SELECT1">23</option>
                                                <option value="SELECT2">24</option>
                                                <option value="SELECT2">25</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md">
                            <div class="row gutters-custom">
                                <div class="col-md-5 col-sm-4">
                                    <div class="form-group">
                                        <label class="control-label visuallyhidden" for="f-select-month-2">Ex</label>
                                        <div class="select-wrapper">
                                            <select class="select-control" name="ordernews" id="f-select-month-2" style="width: 100%;">
                                                <option value="SELECT1">ธันวาคม</option>
                                                <option value="SELECT2">ธันวาคม</option>
                                                <option value="SELECT2">ธันวาคม</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md col-sm-4">
                                    <div class="form-group">
                                        <label class="control-label visuallyhidden" for="f-select-year-2">Ex</label>
                                        <div class="select-wrapper">
                                            <select class="select-control" name="ordernews" id="f-select-year-2" style="width: 100%;">
                                                <option value="SELECT1">2544</option>
                                                <option value="SELECT2">2544</option>
                                                <option value="SELECT2">ธ2544</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md col-sm-4">
                                    <div class="form-group has-feedback">
                                        <label class="control-label visuallyhidden" for="f-age-2">Ex</label>
                                        <div class="block-control">
                                            <input type="text" class="form-control text-center" id="f-age-2" placeholder="35" data-error="">
                                            <span class="form-control-feedback" aria-hidden="true"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row gutters-custom">
                        <div class="col-sm">
                            <div class="form-group has-feedback">
                                <label class="control-label font-size-C" for="f-relations-2">ความสัมพันธ์ / Relations</label>
                                <div class="block-control">
                                    <input type="text" class="form-control" id="f-relations-2" placeholder="ความสัมพันธ์ / Relations" data-error="">
                                    <span class="form-control-feedback" aria-hidden="true"></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm">
                            <div class="form-group has-feedback">
                                <label class="control-label font-size-C" for="f-address-workplace-2">ที่อยู่/ที่ทำงาน / Address/Workplace</label>
                                <div class="block-control">
                                    <input type="text" class="form-control" id="f-address-workplace-2" placeholder="ที่อยู่/ที่ทำงาน / Address/Workplace" data-error="">
                                    <span class="form-control-feedback" aria-hidden="true"></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm">
                            <div class="form-group has-feedback">
                                <label class="control-label" for="f-tel-2">โทรศัพท / Tel.</label>
                                <div class="block-control">
                                    <input type="text" class="form-control" id="f-tel-2" placeholder="060-XXX-XXXX" data-error="">
                                    <span class="form-control-feedback" aria-hidden="true"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row gutters-custom">
                        <div class="col-auto">
                            <div class="row gutters-custom">
                                <div class="col-auto">
                                    <fieldset>
                                        <legend class="visuallyhidden">Live</legend>
                                        <div class="form-group form-check">
                                            <input class="form-check-input radio-check" type="radio" name="exampleRadios" id="live-2" value="option1" checked>
                                            <label class="control-label" for="live-2">
                                                Live
                                            </label>
                                        </div>
                                    </fieldset>
                                </div>
                                <div class="col-auto">
                                    <fieldset>
                                        <legend class="visuallyhidden">Pass Away</legend>
                                        <div class="form-group form-check">
                                            <input class="form-check-input radio-check" type="radio" name="exampleRadios" id="pass-away-2" value="option1" checked>
                                            <label class="control-label" for="pass-away-2">
                                                Pass Away
                                            </label>
                                        </div>
                                    </fieldset>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-8">
                            <div class="row gutters-custom">
                                <div class="col">
                                    <div class="form-group">
                                        <label class="control-label visuallyhidden" for="fc-select-day-2">Ex</label>
                                        <div class="select-wrapper select-custom">
                                            <select class="select-control" name="ordernews" id="fc-select-day-2" style="width: 100%;">
                                                <option value="SELECT1">Day</option>
                                                <option value="SELECT2">Day</option>
                                                <option value="SELECT2">Day</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label class="control-label visuallyhidden" for="fc-select-month-2">Ex</label>
                                        <div class="select-wrapper select-custom">
                                            <select class="select-control" name="ordernews" id="fc-select-month-2" style="width: 100%;">
                                                <option value="SELECT1">Month</option>
                                                <option value="SELECT2">Month</option>
                                                <option value="SELECT2">Month</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label class="control-label visuallyhidden" for="fc-select-year-2">Ex</label>
                                        <div class="select-wrapper select-custom">
                                            <select class="select-control" name="ordernews" id="fc-select-year-2" style="width: 100%;">
                                                <option value="SELECT1">Year</option>
                                                <option value="SELECT2">Year</option>
                                                <option value="SELECT2">Year</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-set II">
                    <div class="row gutters-custom align-items-center">
                        <div class="col-sm-auto">
                            <div class="row gutters-custom">
                                <div class="col-sm">
                                    <div class="form-group has-feedback">
                                        <label class="control-label visuallyhidden" for="input-two">input-two</label>
                                        <div class="block-control">
                                            <input type="text" class="form-control" id="input-two" placeholder="2" data-error="">
                                            <span class="form-control-feedback" aria-hidden="true"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm">
                                    <div class="form-group has-feedback">
                                        <label class="control-label visuallyhidden" for="you-are-someone-who">You Are Someone Who?</label>
                                        <div class="block-control">
                                            <input type="text" class="form-control" id="you-are-someone-who" placeholder="You Are Someone Who?" data-error="">
                                            <span class="form-control-feedback" aria-hidden="true"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm text-right">
                            <div class="button add-form-1">
                                <a href="javascript:void(0);" class="btn btn-primary" title="btn btn-primary">
                                    <span class="feather icon-plus text-white"></span>
                                    Add Brother / Sister
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="row gutters-custom align-items-end">
                        <div class="col-md">
                            <div class="form-group has-feedback">
                                <label class="control-label font-size-C" for="f-name-3">พี่น้อง / Brother Sister</label>
                                <div class="block-control">
                                    <input type="text" class="form-control" id="f-name-3" placeholder="ชื่อ / Name" data-error="">
                                    <span class="form-control-feedback" aria-hidden="true"></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md">
                            <div class="row gutters-custom">
                                <div class="col-md col-sm-6">
                                    <div class="form-group has-feedback">
                                        <label class="control-label font-size-C" for="f-surname-3">นามสกุล / Surname</label>
                                        <div class="block-control">
                                            <input type="text" class="form-control" id="f-surname-3" placeholder="นามสกุล / Surname" data-error="">
                                            <span class="form-control-feedback" aria-hidden="true"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-6">
                                    <div class="form-group">
                                        <label class="control-label label-custom" for="f-select-day-3">วันเดือนปีเกิด/Date of birthday</label>
                                        <div class="select-wrapper">
                                            <select class="select-control" name="ordernews" id="f-select-day-3" style="width: 100%;">
                                                <option value="SELECT1">23</option>
                                                <option value="SELECT2">24</option>
                                                <option value="SELECT2">25</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md">
                            <div class="row gutters-custom">
                                <div class="col-md-5 col-sm-4">
                                    <div class="form-group">
                                        <label class="control-label visuallyhidden" for="f-select-month-3">Ex</label>
                                        <div class="select-wrapper">
                                            <select class="select-control" name="ordernews" id="f-select-month-3" style="width: 100%;">
                                                <option value="SELECT1">ธันวาคม</option>
                                                <option value="SELECT2">ธันวาคม</option>
                                                <option value="SELECT2">ธันวาคม</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md col-sm-4">
                                    <div class="form-group">
                                        <label class="control-label visuallyhidden" for="f-select-year-3">Ex</label>
                                        <div class="select-wrapper">
                                            <select class="select-control" name="ordernews" id="f-select-year-3" style="width: 100%;">
                                                <option value="SELECT1">2544</option>
                                                <option value="SELECT2">2544</option>
                                                <option value="SELECT2">ธ2544</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md col-sm-4">
                                    <div class="form-group has-feedback">
                                        <label class="control-label visuallyhidden" for="f-age-3">Ex</label>
                                        <div class="block-control">
                                            <input type="text" class="form-control text-center" id="f-age-3" placeholder="35" data-error="">
                                            <span class="form-control-feedback" aria-hidden="true"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row gutters-custom">
                        <div class="col-sm">
                            <div class="form-group has-feedback">
                                <label class="control-label font-size-C" for="f-relations-3">ความสัมพันธ์ / Relations</label>
                                <div class="block-control">
                                    <input type="text" class="form-control" id="f-relations-3" placeholder="ความสัมพันธ์ / Relations" data-error="">
                                    <span class="form-control-feedback" aria-hidden="true"></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm">
                            <div class="form-group has-feedback">
                                <label class="control-label font-size-C" for="f-address-workplace-3">ที่อยู่/ที่ทำงาน / Address/Workplace</label>
                                <div class="block-control">
                                    <input type="text" class="form-control" id="f-address-workplace-3" placeholder="ที่อยู่/ที่ทำงาน / Address/Workplace" data-error="">
                                    <span class="form-control-feedback" aria-hidden="true"></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm">
                            <div class="form-group has-feedback">
                                <label class="control-label" for="f-tel-3">โทรศัพท / Tel.</label>
                                <div class="block-control">
                                    <input type="text" class="form-control" id="f-tel-3" placeholder="060-XXX-XXXX" data-error="">
                                    <span class="form-control-feedback" aria-hidden="true"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row gutters-custom">
                        <div class="col-auto">
                            <div class="row gutters-custom">
                                <div class="col-auto">
                                    <fieldset>
                                        <legend class="visuallyhidden">Live</legend>
                                        <div class="form-group form-check">
                                            <input class="form-check-input radio-check" type="radio" name="exampleRadios" id="live-3" value="option1" checked>
                                            <label class="control-label" for="live-3">
                                                Live
                                            </label>
                                        </div>
                                    </fieldset>
                                </div>
                                <div class="col-auto">
                                    <fieldset>
                                        <legend class="visuallyhidden">Pass Away</legend>
                                        <div class="form-group form-check">
                                            <input class="form-check-input radio-check" type="radio" name="exampleRadios" id="pass-away-3" value="option1" checked>
                                            <label class="control-label" for="pass-away-3">
                                                Pass Away
                                            </label>
                                        </div>
                                    </fieldset>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-8">
                            <div class="row gutters-custom">
                                <div class="col">
                                    <div class="form-group">
                                        <label class="control-label visuallyhidden" for="fc-select-day-3">Ex</label>
                                        <div class="select-wrapper select-custom">
                                            <select class="select-control" name="ordernews" id="fc-select-day-3" style="width: 100%;">
                                                <option value="SELECT1">Day</option>
                                                <option value="SELECT2">Day</option>
                                                <option value="SELECT2">Day</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label class="control-label visuallyhidden" for="fc-select-month-3">Ex</label>
                                        <div class="select-wrapper select-custom">
                                            <select class="select-control" name="ordernews" id="fc-select-month-3" style="width: 100%;">
                                                <option value="SELECT1">Month</option>
                                                <option value="SELECT2">Month</option>
                                                <option value="SELECT2">Month</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label class="control-label visuallyhidden" for="fc-select-year-3">Ex</label>
                                        <div class="select-wrapper select-custom">
                                            <select class="select-control" name="ordernews" id="fc-select-year-3" style="width: 100%;">
                                                <option value="SELECT1">Year</option>
                                                <option value="SELECT2">Year</option>
                                                <option value="SELECT2">Year</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-set V d-none" id="add-form-1">
                    <div class="row align-items-center">
                        <div class="col">
                            <div class="title"> พี่น้อง / Brother Sister</div>
                        </div>
                        <div class="col-auto">
                            <div class="button delete-form-1">
                                <a href="javascript:void(0);" class="btn btn-primary" title="btn btn-primary">
                                    <!-- <span class="feather icon-minus text-white"></span> -->
                                    ลบ
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="row gutters-custom align-items-end">
                        <div class="col-md">
                            <div class="form-group has-feedback">
                                <label class="control-label font-size-C" for="f-name-4">พี่น้อง / Brother Sister</label>
                                <div class="block-control">
                                    <input type="text" class="form-control" id="f-name-4" placeholder="ชื่อ / Name" data-error="">
                                    <span class="form-control-feedback" aria-hidden="true"></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md">
                            <div class="row gutters-custom">
                                <div class="col-md col-sm-6">
                                    <div class="form-group has-feedback">
                                        <label class="control-label font-size-C" for="f-surname-4">นามสกุล / Surname</label>
                                        <div class="block-control">
                                            <input type="text" class="form-control" id="f-surname-4" placeholder="นามสกุล / Surname" data-error="">
                                            <span class="form-control-feedback" aria-hidden="true"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-6">
                                    <div class="form-group">
                                        <label class="control-label label-custom" for="f-select-day-4">วันเดือนปีเกิด/Date of birthday</label>
                                        <div class="select-wrapper">
                                            <select class="select-control" name="ordernews" id="f-select-day-4" style="width: 100%;">
                                                <option value="SELECT1">23</option>
                                                <option value="SELECT2">24</option>
                                                <option value="SELECT2">25</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md">
                            <div class="row gutters-custom">
                                <div class="col-md-5 col-sm-4">
                                    <div class="form-group">
                                        <label class="control-label visuallyhidden" for="f-select-month-4">Ex</label>
                                        <div class="select-wrapper">
                                            <select class="select-control" name="ordernews" id="f-select-month-4" style="width: 100%;">
                                                <option value="SELECT1">ธันวาคม</option>
                                                <option value="SELECT2">ธันวาคม</option>
                                                <option value="SELECT2">ธันวาคม</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md col-sm-4">
                                    <div class="form-group">
                                        <label class="control-label visuallyhidden" for="f-select-year-4">Ex</label>
                                        <div class="select-wrapper">
                                            <select class="select-control" name="ordernews" id="f-select-year-4" style="width: 100%;">
                                                <option value="SELECT1">2544</option>
                                                <option value="SELECT2">2544</option>
                                                <option value="SELECT2">ธ2544</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md col-sm-4">
                                    <div class="form-group has-feedback">
                                        <label class="control-label visuallyhidden" for="f-age-4">Ex</label>
                                        <div class="block-control">
                                            <input type="text" class="form-control text-center" id="f-age-4" placeholder="35" data-error="">
                                            <span class="form-control-feedback" aria-hidden="true"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row gutters-custom">
                        <div class="col-sm">
                            <div class="form-group has-feedback">
                                <label class="control-label font-size-C" for="f-relations-4">ความสัมพันธ์ / Relations</label>
                                <div class="block-control">
                                    <input type="text" class="form-control" id="f-relations-4" placeholder="ความสัมพันธ์ / Relations" data-error="">
                                    <span class="form-control-feedback" aria-hidden="true"></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm">
                            <div class="form-group has-feedback">
                                <label class="control-label font-size-C" for="f-address-workplace-4">ที่อยู่/ที่ทำงาน / Address/Workplace</label>
                                <div class="block-control">
                                    <input type="text" class="form-control" id="f-address-workplace-4" placeholder="ที่อยู่/ที่ทำงาน / Address/Workplace" data-error="">
                                    <span class="form-control-feedback" aria-hidden="true"></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm">
                            <div class="form-group has-feedback">
                                <label class="control-label" for="f-tel-4">โทรศัพท / Tel.</label>
                                <div class="block-control">
                                    <input type="text" class="form-control" id="f-tel-4" placeholder="060-XXX-XXXX" data-error="">
                                    <span class="form-control-feedback" aria-hidden="true"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row gutters-custom">
                        <div class="col-auto">
                            <div class="row gutters-custom">
                                <div class="col-auto">
                                    <fieldset>
                                        <legend class="visuallyhidden">Live</legend>
                                        <div class="form-group form-check">
                                            <input class="form-check-input radio-check" type="radio" name="exampleRadios" id="live-4" value="option1" checked>
                                            <label class="control-label" for="live-4">
                                                Live
                                            </label>
                                        </div>
                                    </fieldset>
                                </div>
                                <div class="col-auto">
                                    <fieldset>
                                        <legend class="visuallyhidden">Pass Away</legend>
                                        <div class="form-group form-check">
                                            <input class="form-check-input radio-check" type="radio" name="exampleRadios" id="pass-away-4" value="option1" checked>
                                            <label class="control-label" for="pass-away-4">
                                                Pass Away
                                            </label>
                                        </div>
                                    </fieldset>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-8">
                            <div class="row gutters-custom">
                                <div class="col">
                                    <div class="form-group">
                                        <label class="control-label visuallyhidden" for="fc-select-day-4">Ex</label>
                                        <div class="select-wrapper select-custom">
                                            <select class="select-control" name="ordernews" id="fc-select-day-4" style="width: 100%;">
                                                <option value="SELECT1">Day</option>
                                                <option value="SELECT2">Day</option>
                                                <option value="SELECT2">Day</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label class="control-label visuallyhidden" for="fc-select-month-4">Ex</label>
                                        <div class="select-wrapper select-custom">
                                            <select class="select-control" name="ordernews" id="fc-select-month-4" style="width: 100%;">
                                                <option value="SELECT1">Month</option>
                                                <option value="SELECT2">Month</option>
                                                <option value="SELECT2">Month</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label class="control-label visuallyhidden" for="fc-select-year-4">Ex</label>
                                        <div class="select-wrapper select-custom">
                                            <select class="select-control" name="ordernews" id="fc-select-year-4" style="width: 100%;">
                                                <option value="SELECT1">Year</option>
                                                <option value="SELECT2">Year</option>
                                                <option value="SELECT2">Year</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-default form-history">
                <div class="row gutters-custom align-items-center">
                    <div class="col-sm">
                        <div class="title">ประวัติการศึกษา EDUCATION BACKGROUND <span>*</span></div>
                    </div>
                    <div class="col-sm-auto text-right">
                        <div class="button add-form-2">
                            <a href="javascript:void(0);" class="btn btn-primary" title="btn btn-primary">
                                <span class="feather icon-plus text-white"></span>
                                Add Education History
                            </a>
                        </div>
                    </div>
                </div>

                <div class="row gutters-custom align-items-end">
                    <div class="col-sm">
                        <div class="form-group">
                            <label class="control-label font-size-C label-custom" for="education-level">ระดับการศึกษา / Education history</label>
                            <div class="select-wrapper">
                                <select class="select-control" name="ordernews" id="education-level" style="width: 100%;">
                                    <option value="SELECT1">ระดับการศึกษา / Education Level</option>
                                    <option value="SELECT2">ระดับการศึกษา / Education Level</option>
                                    <option value="SELECT2">ระดับการศึกษา / Education Level</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm">
                        <div class="form-group has-feedback">
                            <label class="control-label visuallyhidden" for="academy-name">ชื่อสถาบัน / Academy Name</label>
                            <div class="block-control">
                                <input type="text" class="form-control" id="academy-name" placeholder="ชื่อสถาบัน / Academy Name" data-error="">
                                <span class="form-control-feedback" aria-hidden="true"></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm">
                        <div class="form-group has-feedback">
                            <label class="control-label visuallyhidden" for="you-are-someone-who-2">คุณมาจากที่ไหน / You Are Someone Who?</label>
                            <div class="block-control">
                                <input type="text" class="form-control" id="you-are-someone-who-2" placeholder="คุณมาจากที่ไหน / You Are Someone Who?" data-error="">
                                <span class="form-control-feedback" aria-hidden="true"></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row gutters-custom">
                    <div class="col-md-4 col-sm-6">
                        <div class="form-group has-feedback">
                            <label class="control-label visuallyhidden" for="majors">วิชาเอก / Majors</label>
                            <div class="block-control">
                                <input type="text" class="form-control" id="majors" placeholder="วิชาเอก / Majors" data-error="">
                                <span class="form-control-feedback" aria-hidden="true"></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="form-group has-feedback">
                            <label class="control-label visuallyhidden" for="educational-background">ประวัติการศึกษา / Educational Background</label>
                            <div class="block-control">
                                <input type="text" class="form-control" id="educational-background" placeholder="ประวัติการศึกษา / Educational Background" data-error="">
                                <span class="form-control-feedback" aria-hidden="true"></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row gutters-custom">
                    <div class="col-md-4 col-sm-6">
                        <div class="row gutters-custom">
                            <div class="col-sm">
                                <div class="form-group">
                                    <label class="control-label label-custom visuallyhidden" for="since-year">Since Year</label>
                                    <div class="select-wrapper">
                                        <select class="select-control" name="ordernews" id="since-year" style="width: 100%;">
                                            <option value="SELECT1">Since Year</option>
                                            <option value="SELECT2">Since Year</option>
                                            <option value="SELECT2">Since Year</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm">
                                <div class="form-group">
                                    <label class="control-label label-custom visuallyhidden" for="to-year">To Year</label>
                                    <div class="select-wrapper">
                                        <select class="select-control" name="ordernews" id="to-year" style="width: 100%;">
                                            <option value="SELECT1">To Year</option>
                                            <option value="SELECT2">To Year</option>
                                            <option value="SELECT2">To Year</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="row gutters-custom">
                            <div class="col">
                                <div class="form-group has-feedback">
                                    <label class="control-label visuallyhidden" for="average-score">คะแนนเฉลี่ย / Average Score</label>
                                    <div class="block-control">
                                        <input type="text" class="form-control" id="average-score" placeholder="คะแนนเฉลี่ย / Average Score" data-error="">
                                        <span class="form-control-feedback" aria-hidden="true"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="d-none mt-3" id="add-form-2">
                    <div class="row align-items-center">
                        <!-- <div class="col">
                            <div class="title"> พี่น้อง / Brother Sister</div>
                        </div> -->
                        <div class="col text-right">
                            <div class="button delete-form-2">
                                <a href="javascript:void(0);" class="btn btn-primary" title="btn btn-primary">
                                    <!-- <span class="feather icon-minus text-white"></span> -->
                                    ลบ
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="row gutters-custom align-items-end">
                        <div class="col-sm">
                            <div class="form-group">
                                <label class="control-label font-size-C" for="education-level-2">ระดับการศึกษา / Education history</label>
                                <div class="select-wrapper">
                                    <select class="select-control" name="ordernews" id="education-level-2" style="width: 100%;">
                                        <option value="SELECT1">ระดับการศึกษา / Education Level</option>
                                        <option value="SELECT2">ระดับการศึกษา / Education Level</option>
                                        <option value="SELECT2">ระดับการศึกษา / Education Level</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm">
                            <div class="form-group has-feedback">
                                <label class="control-label visuallyhidden" for="academy-name-2">ชื่อสถาบัน / Academy Name</label>
                                <div class="block-control">
                                    <input type="text" class="form-control" id="academy-name-2" placeholder="ชื่อสถาบัน / Academy Name" data-error="">
                                    <span class="form-control-feedback" aria-hidden="true"></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm">
                            <div class="form-group has-feedback">
                                <label class="control-label visuallyhidden" for="you-are-someone-who-3">คุณมาจากที่ไหน / You Are Someone Who?</label>
                                <div class="block-control">
                                    <input type="text" class="form-control" id="you-are-someone-who-3" placeholder="คุณมาจากที่ไหน / You Are Someone Who?" data-error="">
                                    <span class="form-control-feedback" aria-hidden="true"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row gutters-custom">
                        <div class="col-md-4 col-sm-6">
                            <div class="form-group has-feedback">
                                <label class="control-label visuallyhidden" for="majors-2">วิชาเอก / Majors</label>
                                <div class="block-control">
                                    <input type="text" class="form-control" id="majors-2" placeholder="วิชาเอก / Majors" data-error="">
                                    <span class="form-control-feedback" aria-hidden="true"></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="form-group has-feedback">
                                <label class="control-label visuallyhidden" for="educational-background-2">ประวัติการศึกษา / Educational Background</label>
                                <div class="block-control">
                                    <input type="text" class="form-control" id="educational-background-2" placeholder="ประวัติการศึกษา / Educational Background" data-error="">
                                    <span class="form-control-feedback" aria-hidden="true"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row gutters-custom">
                        <div class="col-md-4 col-sm-6">
                            <div class="row gutters-custom">
                                <div class="col-sm">
                                    <div class="form-group">
                                        <label class="control-label label-custom visuallyhidden" for="since-year-3">Since Year</label>
                                        <div class="select-wrapper">
                                            <select class="select-control" name="ordernews" id="since-year-3" style="width: 100%;">
                                                <option value="SELECT1">Since Year</option>
                                                <option value="SELECT2">Since Year</option>
                                                <option value="SELECT2">Since Year</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm">
                                    <div class="form-group">
                                        <label class="control-label label-custom visuallyhidden" for="to-year-3">To Year</label>
                                        <div class="select-wrapper">
                                            <select class="select-control" name="ordernews" id="to-year-3" style="width: 100%;">
                                                <option value="SELECT1">To Year</option>
                                                <option value="SELECT2">To Year</option>
                                                <option value="SELECT2">To Year</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="row gutters-custom">
                                <div class="col">
                                    <div class="form-group has-feedback">
                                        <label class="control-label visuallyhidden" for="average-score-2">คะแนนเฉลี่ย / Average Score</label>
                                        <div class="block-control">
                                            <input type="text" class="form-control" id="average-score-2" placeholder="คะแนนเฉลี่ย / Average Score" data-error="">
                                            <span class="form-control-feedback" aria-hidden="true"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-default form-history">
                <div class="row gutters-custom align-items-center">
                    <div class="col">
                        <div class="title">ประวัติการฝึกอบรม/ดูงาน/ฝึกงาน JOB TRAINING/INSPECTION/APPRENTICESHIP<span>*</span></div>
                    </div>
                    <div class="col-sm-auto">
                        <div class="button add-form-3">
                            <a href="javascript:void(0);" class="btn btn-primary" title="btn btn-primary">
                                <span class="feather icon-plus text-white"></span>
                                Add Education History
                            </a>
                        </div>
                    </div>
                </div>
                <div class="row gutters-custom align-items-end">
                    <div class="col-sm">
                        <div class="form-group has-feedback">
                            <label class="control-label font-size-C" for="course">ชื่อหลักสูตร/Course</label>
                            <div class="block-control">
                                <input type="text" class="form-control" id="course" placeholder="ชื่อหลักสูตร/Course" data-error="">
                                <span class="form-control-feedback" aria-hidden="true"></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm">
                        <div class="form-group has-feedback">
                            <label class="control-label visuallyhidden" for="institute">สถาบัน/Institute</label>
                            <div class="block-control">
                                <input type="text" class="form-control" id="institute" placeholder="สถาบัน/Institute" data-error="">
                                <span class="form-control-feedback" aria-hidden="true"></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm">
                        <div class="form-group has-feedback">
                            <label class="control-label visuallyhidden" for="degree-certificate">วุฒิที่ได้รับ / Degree/Certificate</label>
                            <div class="block-control">
                                <input type="text" class="form-control" id="degree-certificate" placeholder="วุฒิที่ได้รับ / Degree/Certificate" data-error="">
                                <span class="form-control-feedback" aria-hidden="true"></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row gutters-custom">
                    <div class="col-md-4 col-sm-6">
                        <div class="row gutters-custom">
                            <div class="col">
                                <div class="form-group has-feedback">
                                    <label class="control-label visuallyhidden" for="period">ระยะเวลา/Period</label>
                                    <div class="block-control">
                                        <input type="text" class="form-control" id="period" placeholder="ระยะเวลา/Period" data-error="">
                                        <span class="form-control-feedback" aria-hidden="true"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="row gutters-custom">
                            <div class="col-sm">
                                <div class="form-group">
                                    <label class="control-label label-custom visuallyhidden" for="since-year-2">Since Year</label>
                                    <div class="select-wrapper">
                                        <select class="select-control" name="ordernews" id="since-year-2" style="width: 100%;">
                                            <option value="SELECT1">Since Year</option>
                                            <option value="SELECT2">Since Year</option>
                                            <option value="SELECT2">Since Year</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm">
                                <div class="form-group">
                                    <label class="control-label label-custom visuallyhidden" for="to-year-2">To Year </label>
                                    <div class="select-wrapper">
                                        <select class="select-control" name="ordernews" id="to-year-2" style="width: 100%;">
                                            <option value="SELECT1">To Year</option>
                                            <option value="SELECT2">To Year</option>
                                            <option value="SELECT2">To Year</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="d-none mt-3" id="add-form-3">
                    <div class="row align-items-center">
                        <!-- <div class="col">
                            <div class="title"> พี่น้อง / Brother Sister</div>
                        </div> -->
                        <div class="col text-right">
                            <div class="button delete-form-3">
                                <a href="javascript:void(0);" class="btn btn-primary" title="btn btn-primary">
                                    <!-- <span class="feather icon-minus text-white"></span> -->
                                    ลบ
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="row gutters-custom align-items-end">
                        <div class="col-sm">
                            <div class="form-group has-feedback">
                                <label class="control-label font-size-C" for="course-2">ชื่อหลักสูตร/Course</label>
                                <div class="block-control">
                                    <input type="text" class="form-control" id="course-2" placeholder="ชื่อหลักสูตร/Course" data-error="">
                                    <span class="form-control-feedback" aria-hidden="true"></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm">
                            <div class="form-group has-feedback">
                                <label class="control-label visuallyhidden" for="institute-2">สถาบัน/Institute</label>
                                <div class="block-control">
                                    <input type="text" class="form-control" id="institute-2" placeholder="สถาบัน/Institute" data-error="">
                                    <span class="form-control-feedback" aria-hidden="true"></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm">
                            <div class="form-group has-feedback">
                                <label class="control-label visuallyhidden" for="degree-certificate-2">วุฒิที่ได้รับ / Degree/Certificate</label>
                                <div class="block-control">
                                    <input type="text" class="form-control" id="degree-certificate-2" placeholder="วุฒิที่ได้รับ / Degree/Certificate" data-error="">
                                    <span class="form-control-feedback" aria-hidden="true"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row gutters-custom">
                        <div class="col-md-4 col-sm-6">
                            <div class="row gutters-custom">
                                <div class="col">
                                    <div class="form-group has-feedback">
                                        <label class="control-label visuallyhidden" for="period-2">ระยะเวลา/Period</label>
                                        <div class="block-control">
                                            <input type="text" class="form-control" id="period-2" placeholder="ระยะเวลา/Period" data-error="">
                                            <span class="form-control-feedback" aria-hidden="true"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="row gutters-custom">
                                <div class="col-sm">
                                    <div class="form-group">
                                        <label class="control-label label-custom visuallyhidden" for="since-year-4">Since Year</label>
                                        <div class="select-wrapper">
                                            <select class="select-control" name="ordernews" id="since-year-4" style="width: 100%;">
                                                <option value="SELECT1">Since Year</option>
                                                <option value="SELECT2">Since Year</option>
                                                <option value="SELECT2">Since Year</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm">
                                    <div class="form-group">
                                        <label class="control-label label-custom visuallyhidden" for="to-year-4">To Year </label>
                                        <div class="select-wrapper">
                                            <select class="select-control" name="ordernews" id="to-year-4" style="width: 100%;">
                                                <option value="SELECT1">To Year</option>
                                                <option value="SELECT2">To Year</option>
                                                <option value="SELECT2">To Year</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-default form-history">
                <div class="row gutters-custom align-items-center">
                    <div class="col-sm">
                        <div class="title">ประวัติการทำงาน (เรียงจากปัจจุบันไปหาอดีต)
                            <!-- </br> -->
                            EMPLOYMENT RECORD (Start with your present or most recent post)
                        </div>
                    </div>
                    <div class="col-sm-auto">
                        <div class="button add-form-4">
                            <a href="javascript:void(0);" class="btn btn-primary" title="btn btn-primary">
                                <span class="feather icon-plus text-white"></span>
                                Add Education History
                            </a>
                        </div>
                    </div>
                </div>
                <div class="row gutters-custom align-items-end">
                    <div class="col-md col-sm-auto">
                        <div class="form-group has-feedback">
                            <label class="control-label font-size-C" for="company-name">1. ชื่อบริษัท</label>
                            <div class="block-control">
                                <input type="text" class="form-control" id="company-name" placeholder="ชื่อบริษัท / Company’s Name" data-error="">
                                <span class="form-control-feedback" aria-hidden="true"></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md col-sm-auto">
                        <div class="form-group has-feedback">
                            <label class="control-label visuallyhidden" for="type-of-business">ประเภทธุรกิจ / Type Of Business</label>
                            <div class="block-control">
                                <input type="text" class="form-control" id="type-of-business" placeholder="ประเภทธุรกิจ / Type Of Business" data-error="">
                                <span class="form-control-feedback" aria-hidden="true"></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md col-sm-auto">
                        <div class="form-group has-feedback">
                            <label class="control-label visuallyhidden" for="c-address">ที่อยู่ / Address</label>
                            <div class="block-control">
                                <input type="text" class="form-control" id="c-address" placeholder="ที่อยู่ / Address" data-error="">
                                <span class="form-control-feedback" aria-hidden="true"></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md col-sm-auto">
                        <div class="form-group has-feedback">
                            <label class="control-label visuallyhidden" for="c-telephone">โทรศัพท์ / Telephone</label>
                            <div class="block-control">
                                <input type="text" class="form-control" id="c-telephone" placeholder="โทรศัพท์ / Telephone" data-error="">
                                <span class="form-control-feedback" aria-hidden="true"></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row gutters-custom">
                    <div class="col-md col-sm-auto">
                        <div class="form-group has-feedback">
                            <label class="control-label visuallyhidden" for="first-position">ตำแหน่งแรกเข้า / First Position</label>
                            <div class="block-control">
                                <input type="text" class="form-control" id="first-position" placeholder="ตำแหน่งแรกเข้า / First Position" data-error="">
                                <span class="form-control-feedback" aria-hidden="true"></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md col-sm-auto">
                        <div class="form-group has-feedback">
                            <label class="control-label visuallyhidden" for="last-position">ตำแหน่งแรกเข้า / Last Position</label>
                            <div class="block-control">
                                <input type="text" class="form-control" id="last-position" placeholder="ตำแหน่งแรกเข้า / Last Position" data-error="">
                                <span class="form-control-feedback" aria-hidden="true"></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md col-sm-auto">
                        <div class="form-group has-feedback">
                            <label class="control-label visuallyhidden" for="last-salary">เงินเดือนสุดท้าย / Last Salary</label>
                            <div class="block-control">
                                <input type="text" class="form-control" id="last-salary" placeholder="เงินเดือนสุดท้าย / Last Salary" data-error="">
                                <span class="form-control-feedback" aria-hidden="true"></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md col-sm-auto">
                        <div class="form-group has-feedback">
                            <label class="control-label visuallyhidden" for="other-salary">รายได้อื่น ๆ / Other</label>
                            <div class="block-control">
                                <input type="text" class="form-control" id="other-salary" placeholder="รายได้อื่น ๆ / Other" data-error="">
                                <span class="form-control-feedback" aria-hidden="true"></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row gutters-custom mt-2">
                    <div class="col">
                        <div class="form-group has-feedback">
                            <label class="control-label font-size-C" for="brief-responsibility">ลักษณะงานที่รับผิดชอบโดยย่อ / Brief Responsibility</label>
                            <div class="block-control">
                                <input type="text" class="form-control" id="brief-responsibility" placeholder="ลักษณะงานที่รับผิดชอบโดยย่อ / Brief Responsibility" data-error="">
                                <span class="form-control-feedback" aria-hidden="true"></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row gutters-custom">
                    <div class="col-md-3 col-sm-6">
                        <div class="row gutters-custom">
                            <div class="col">
                                <div class="form-group has-feedback">
                                    <label class="control-label visuallyhidden" for="c-period">ระยะเวลา/Period</label>
                                    <div class="block-control">
                                        <input type="text" class="form-control" id="c-period" placeholder="ระยะเวลา/Period" data-error="">
                                        <span class="form-control-feedback" aria-hidden="true"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="row gutters-custom align-items-center">
                            <div class="col">
                                <div class="form-group">
                                    <label class="control-label visuallyhidden" for="c-start-date">วันเริ่มงาน</label>
                                    <div class="select-wrapper">
                                        <select class="select-control" name="ordernews" id="c-start-date" style="width: 100%;">
                                            <option value="SELECT1">วันเริ่มงาน</option>
                                            <option value="SELECT2">วันเริ่มงาน</option>
                                            <option value="SELECT2">วันเริ่มงาน</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-auto">
                                <div class="txt">
                                    ถึง
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label class="control-label visuallyhidden" for="c-end-date">สิ้นสุดวันที่</label>
                                    <div class="select-wrapper">
                                        <select class="select-control" name="ordernews" id="c-end-date" style="width: 100%;">
                                            <option value="SELECT1">สิ้นสุดวันที่</option>
                                            <option value="SELECT2">สิ้นสุดวันที่</option>
                                            <option value="SELECT2">สิ้นสุดวันที่</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="d-none mt-3" id="add-form-4">
                    <div class="row align-items-center">
                        <!-- <div class="col">
                            <div class="title"> พี่น้อง / Brother Sister</div>
                        </div> -->
                        <div class="col text-right">
                            <div class="button delete-form-4">
                                <a href="javascript:void(0);" class="btn btn-primary" title="btn btn-primary">
                                    <!-- <span class="feather icon-minus text-white"></span> -->
                                    ลบ
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="row gutters-custom align-items-end">
                        <div class="col-md col-sm-auto">
                            <div class="form-group has-feedback">
                                <label class="control-label font-size-C" for="company-name-2">2. ชื่อบริษัท</label>
                                <div class="block-control">
                                    <input type="text" class="form-control" id="company-name-2" placeholder="ชื่อบริษัท / Company’s Name" data-error="">
                                    <span class="form-control-feedback" aria-hidden="true"></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md col-sm-auto">
                            <div class="form-group has-feedback">
                                <label class="control-label visuallyhidden" for="type-of-business-2">ประเภทธุรกิจ / Type Of Business</label>
                                <div class="block-control">
                                    <input type="text" class="form-control" id="type-of-business-2" placeholder="ประเภทธุรกิจ / Type Of Business" data-error="">
                                    <span class="form-control-feedback" aria-hidden="true"></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md col-sm-auto">
                            <div class="form-group has-feedback">
                                <label class="control-label visuallyhidden" for="c-address-2">ที่อยู่ / Address</label>
                                <div class="block-control">
                                    <input type="text" class="form-control" id="c-address-2" placeholder="ที่อยู่ / Address" data-error="">
                                    <span class="form-control-feedback" aria-hidden="true"></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md col-sm-auto">
                            <div class="form-group has-feedback">
                                <label class="control-label visuallyhidden" for="c-telephone-2">โทรศัพท์ / Telephone</label>
                                <div class="block-control">
                                    <input type="text" class="form-control" id="c-telephone-2" placeholder="โทรศัพท์ / Telephone" data-error="">
                                    <span class="form-control-feedback" aria-hidden="true"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row gutters-custom">
                        <div class="col-md col-sm-auto">
                            <div class="form-group has-feedback">
                                <label class="control-label visuallyhidden" for="first-position-2">ตำแหน่งแรกเข้า / First Position</label>
                                <div class="block-control">
                                    <input type="text" class="form-control" id="first-position-2" placeholder="ตำแหน่งแรกเข้า / First Position" data-error="">
                                    <span class="form-control-feedback" aria-hidden="true"></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md col-sm-auto">
                            <div class="form-group has-feedback">
                                <label class="control-label visuallyhidden" for="last-position-2">ตำแหน่งแรกเข้า / Last Position</label>
                                <div class="block-control">
                                    <input type="text" class="form-control" id="last-position-2" placeholder="ตำแหน่งแรกเข้า / Last Position" data-error="">
                                    <span class="form-control-feedback" aria-hidden="true"></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md col-sm-auto">
                            <div class="form-group has-feedback">
                                <label class="control-label visuallyhidden" for="last-salary-2">เงินเดือนสุดท้าย / Last Salary</label>
                                <div class="block-control">
                                    <input type="text" class="form-control" id="last-salary-2" placeholder="เงินเดือนสุดท้าย / Last Salary" data-error="">
                                    <span class="form-control-feedback" aria-hidden="true"></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md col-sm-auto">
                            <div class="form-group has-feedback">
                                <label class="control-label visuallyhidden" for="other-salary-2">รายได้อื่น ๆ / Other</label>
                                <div class="block-control">
                                    <input type="text" class="form-control" id="other-salary-2" placeholder="รายได้อื่น ๆ / Other" data-error="">
                                    <span class="form-control-feedback" aria-hidden="true"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row gutters-custom mt-2">
                        <div class="col">
                            <div class="form-group has-feedback">
                                <label class="control-label font-size-C" for="brief-responsibility-2">ลักษณะงานที่รับผิดชอบโดยย่อ / Brief Responsibility</label>
                                <div class="block-control">
                                    <input type="text" class="form-control" id="brief-responsibility-2" placeholder="ลักษณะงานที่รับผิดชอบโดยย่อ / Brief Responsibility" data-error="">
                                    <span class="form-control-feedback" aria-hidden="true"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row gutters-custom">
                        <div class="col-md-3 col-sm-6">
                            <div class="row gutters-custom">
                                <div class="col">
                                    <div class="form-group has-feedback">
                                        <label class="control-label visuallyhidden" for="c-period-2">ระยะเวลา/Period</label>
                                        <div class="block-control">
                                            <input type="text" class="form-control" id="c-period-2" placeholder="ระยะเวลา/Period" data-error="">
                                            <span class="form-control-feedback" aria-hidden="true"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="row gutters-custom align-items-center">
                                <div class="col">
                                    <div class="form-group">
                                        <label class="control-label visuallyhidden" for="c-start-date-2">วันเริ่มงาน</label>
                                        <div class="select-wrapper">
                                            <select class="select-control" name="ordernews" id="c-start-date-2" style="width: 100%;">
                                                <option value="SELECT1">วันเริ่มงาน</option>
                                                <option value="SELECT2">วันเริ่มงาน</option>
                                                <option value="SELECT2">วันเริ่มงาน</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-auto">
                                    <div class="txt">
                                        ถึง
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label class="control-label visuallyhidden" for="c-end-date-2">สิ้นสุดวันที่</label>
                                        <div class="select-wrapper">
                                            <select class="select-control" name="ordernews" id="c-end-date-2" style="width: 100%;">
                                                <option value="SELECT1">สิ้นสุดวันที่</option>
                                                <option value="SELECT2">สิ้นสุดวันที่</option>
                                                <option value="SELECT2">สิ้นสุดวันที่</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-default form-history">
                <div class="title">ประวัติการฝึกอบรม/ดูงาน/ฝึกงาน / JOB TRAINING/INSPECTION/APPRENTICESHIP <span>*</span></div>
                <div class="row gutters-custom align-items-center py-sm-4">
                    <div class="col-sm">
                        <div class="topic">ความสามารถทางภาษา / Language Abilities</div>
                    </div>
                    <div class="col-sm-auto">
                        <div class="button add-form-5">
                            <a href="javascript:void(0);" class="btn btn-primary" title="btn btn-primary">
                                <span class="feather icon-plus text-white"></span>
                                Add Education History
                            </a>
                        </div>
                    </div>
                </div>
                <div class="row gutters-custom">
                    <div class="col-sm">
                        <div class="form-group">
                            <label class="control-label font-size-C" for="l-english">ภาษาอังกฤษ/English</label>
                            <div class="select-wrapper">
                                <select class="select-control" name="ordernews" id="l-english" style="width: 100%;">
                                    <option value="SELECT1">ภาษาอังกฤษ/English</option>
                                    <option value="SELECT2">ภาษาอังกฤษ/English</option>
                                    <option value="SELECT2">ภาษาอังกฤษ/English</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm">
                        <div class="form-group">
                            <label class="control-label font-size-C" for="e-excellent-1">พูด / Speaking</label>
                            <div class="select-wrapper">
                                <select class="select-control" name="ordernews" id="e-excellent-1" style="width: 100%;">
                                    <option value="SELECT1">ดีมาก / Excellent</option>
                                    <option value="SELECT2">ดีมาก / Excellent</option>
                                    <option value="SELECT2">ดีมาก / Excellent</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm">
                        <div class="form-group">
                            <label class="control-label font-size-C" for="e-excellent-2">ฟัง / listening</label>
                            <div class="select-wrapper">
                                <select class="select-control" name="ordernews" id="e-excellent-2" style="width: 100%;">
                                    <option value="SELECT1">ดีมาก / Excellent</option>
                                    <option value="SELECT2">ดีมาก / Excellent</option>
                                    <option value="SELECT2">ดีมาก / Excellent</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm">
                        <div class="form-group">
                            <label class="control-label font-size-C" for="e-excellent-3">เขียน / Writing</label>
                            <div class="select-wrapper">
                                <select class="select-control" name="ordernews" id="e-excellent-3" style="width: 100%;">
                                    <option value="SELECT1">ดีมาก / Excellent</option>
                                    <option value="SELECT2">ดีมาก / Excellent</option>
                                    <option value="SELECT2">ดีมาก / Excellent</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="d-none mt-3" id="add-form-5">
                    <div class="row align-items-center">
                        <!-- <div class="col">
                            <div class="title"> พี่น้อง / Brother Sister</div>
                        </div> -->
                        <div class="col text-right">
                            <div class="button delete-form-5">
                                <a href="javascript:void(0);" class="btn btn-primary" title="btn btn-primary">
                                    <!-- <span class="feather icon-minus text-white"></span> -->
                                    ลบ
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="row gutters-custom">
                        <div class="col-sm">
                            <div class="form-group">
                                <label class="control-label visuallyhidden" for="l-china">ภาษาจีน/Chinese</label>
                                <div class="select-wrapper">
                                    <select class="select-control" name="ordernews" id="l-china" style="width: 100%;">
                                        <option value="SELECT1">ภาษาอังกฤษ/English</option>
                                        <option value="SELECT2">ภาษาอังกฤษ/English</option>
                                        <option value="SELECT2">ภาษาอังกฤษ/English</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm">
                            <div class="form-group">
                                <label class="control-label visuallyhidden" for="c-excellent-1">พูด / Speaking</label>
                                <div class="select-wrapper">
                                    <select class="select-control" name="ordernews" id="c-excellent-1" style="width: 100%;">
                                        <option value="SELECT1">ดีมาก / Excellent</option>
                                        <option value="SELECT2">ดีมาก / Excellent</option>
                                        <option value="SELECT2">ดีมาก / Excellent</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm">
                            <div class="form-group">
                                <label class="control-label visuallyhidden" for="c-excellent-2">ฟัง / listening</label>
                                <div class="select-wrapper">
                                    <select class="select-control" name="ordernews" id="c-excellent-2" style="width: 100%;">
                                        <option value="SELECT1">ดีมาก / Excellent</option>
                                        <option value="SELECT2">ดีมาก / Excellent</option>
                                        <option value="SELECT2">ดีมาก / Excellent</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm">
                            <div class="form-group">
                                <label class="control-label visuallyhidden" for="c-excellent-3">เขียน / Writing</label>
                                <div class="select-wrapper">
                                    <select class="select-control" name="ordernews" id="c-excellent-3" style="width: 100%;">
                                        <option value="SELECT1">ดีมาก / Excellent</option>
                                        <option value="SELECT2">ดีมาก / Excellent</option>
                                        <option value="SELECT2">ดีมาก / Excellent</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-default mt-xl-4">
                <div class="title">ข้อมูลทั่วไป GENERAL DATA</div>
                <div class="row gutters-custom mt-3">
                    <div class="col">
                        <div class="topic">1. การไปปฏิบัติงานต่างจังหวัด / Can you work up country?</div>
                    </div>
                </div>
                <div class="row gutters-custom">
                    <div class="col-sm mt-sm-3 mt-0">
                        <fieldset>
                            <legend class="control-legend">เป็นการประจำ / Permanent </legend>
                            <div class="row gutters-custom">
                                <div class="col-auto">
                                    <div class="form-group form-check -nm IC">
                                        <input class="form-check-input radio-check" type="radio" name="exampleRadios" id="permanent-no" value="option1" checked>
                                        <label class="control-label" for="permanent-no">
                                            ขัดข้อง / No
                                        </label>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group form-check -nm IC">
                                        <input class="form-check-input radio-check" type="radio" name="exampleRadios" id="permanent-yes" value="option1" checked>
                                        <label class="control-label" for="permanent-yes">
                                            ไม่ขัดข้อง / Yes
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </fieldset>
                    </div>
                    <div class="col-sm mt-sm-3 mt-3">
                        <fieldset>
                            <legend class="control-legend">เป็นครั้งคราว / Temporary</legend>
                            <div class="row gutters-custom">
                                <div class="col-auto">
                                    <div class="form-group form-check -nm IC">
                                        <input class="form-check-input radio-check" type="radio" name="exampleRadios" id="temporary-no" value="option1" checked>
                                        <label class="control-label" for="temporary-no">
                                            ขัดข้อง / No
                                        </label>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group form-check -nm IC">
                                        <input class="form-check-input radio-check" type="radio" name="exampleRadios" id="temporary-yes" value="option1" checked>
                                        <label class="control-label" for="temporary-yes">
                                            ไม่ขัดข้อง / Yes
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </fieldset>
                    </div>
                </div>
                <div class="row gutters-custom mt-lg-5 mt-4">
                    <div class="col">
                        <div class="topic -np">2. การเจ็บป่วยขนาดหนัก หรือโรคติดต่อร้ายแรง / Have you ever been seriously ill or contacted with contagious disease?</div>
                    </div>
                </div>
                <div class="row gutters-custom align-items-center">
                    <div class="col-md-4 col-sm-6">
                        <div class="row gutters-custom">
                            <div class="col-auto">
                                <fieldset>textarea
                                    <legend class="visuallyhidden"></legend>
                                    <div class="form-group form-check -nm I">
                                        <input class="form-check-input radio-check" type="radio" name="exampleRadios" id="contagious-no" value="option1" checked>
                                        <label class="control-label" for="contagious-no">
                                            ไม่เคย / No
                                        </label>
                                    </div>
                                </fieldset>
                            </div>
                            <div class="col-auto">
                                <fieldset>
                                    <legend class="visuallyhidden"></legend>
                                    <div class="form-group form-check -nm I">
                                        <input class="form-check-input radio-check" type="radio" name="exampleRadios" id="contagious-yes" value="option1" checked>
                                        <label class="control-label" for="contagious-yes">
                                            เคย (ระบุ) / Yes (Explain)
                                        </label>
                                    </div>
                                </fieldset>
                            </div>
                        </div>
                    </div>
                    <div class="col-md col-sm-6">
                        <div class="row gutters-custom">
                            <div class="col">
                                <div class="form-group has-feedback -nm I">
                                    <label class="control-label visuallyhidden" for="spicyfi-1">Spicyfi</label>
                                    <div class="block-control">
                                        <input type="text" class="form-control" id="spicyfi-1" placeholder="Spicyfi" data-error="">
                                        <span class="form-control-feedback" aria-hidden="true"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row gutters-custom mt-lg-5 mt-4">
                    <div class="col">
                        <div class="topic -np">3. โรคประจำตัว / Any physical disability or handicap</div>
                    </div>
                </div>
                <div class="row gutters-custom align-items-center">
                    <div class="col-md-4 col-sm-6">
                        <div class="row gutters-custom">
                            <div class="col-auto">
                                <fieldset>
                                    <legend class="visuallyhidden"></legend>
                                    <div class="form-group form-check -nm I">
                                        <input class="form-check-input radio-check" type="radio" name="exampleRadios" id="congenital-disease-no" value="option1" checked>
                                        <label class="control-label" for="congenital-disease-no">
                                            ไม่เคย / No
                                        </label>
                                    </div>
                                </fieldset>
                            </div>
                            <div class="col-auto">
                                <fieldset>
                                    <legend class="visuallyhidden"></legend>
                                    <div class="form-group form-check -nm I">
                                        <input class="form-check-input radio-check" type="radio" name="exampleRadios" id="congenital-disease-yes" value="option1" checked>
                                        <label class="control-label" for="congenital-disease-yes">
                                            มี / Yes
                                        </label>
                                    </div>
                                </fieldset>
                            </div>
                        </div>
                    </div>
                    <div class="col-md col-sm-6">
                        <div class="row gutters-custom">
                            <div class="col">
                                <div class="form-group has-feedback -nm I">
                                    <label class="control-label visuallyhidden" for="spicyfi-2">Spicyfi</label>
                                    <div class="block-control">
                                        <input type="text" class="form-control" id="spicyfi-2" placeholder="Spicyfi" data-error="">
                                        <span class="form-control-feedback" aria-hidden="true"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row gutters-custom mt-lg-5 mt-4">
                    <div class="col">
                        <div class="topic -np">4. เคยถูกจำคุก หรือต้องโทษทางอาญาหรือไม่ / Have you ever been arrested, takes custody, help for investigation or questioning or charged by any law enforcement authority?</div>
                    </div>
                </div>
                <div class="row gutters-custom align-items-center">
                    <div class="col-md-4 col-sm-6">
                        <div class="row gutters-custom">
                            <div class="col-auto">
                                <fieldset>
                                    <legend class="visuallyhidden"></legend>
                                    <div class="form-group form-check -nm I">
                                        <input class="form-check-input radio-check" type="radio" name="exampleRadios" id="imprisonment-no" value="option1" checked>
                                        <label class="control-label" for="imprisonment-no">
                                            ไม่เคย / No
                                        </label>
                                    </div>
                                </fieldset>
                            </div>
                            <div class="col-auto">
                                <fieldset>
                                    <legend class="visuallyhidden"></legend>
                                    <div class="form-group form-check -nm I">
                                        <input class="form-check-input radio-check" type="radio" name="exampleRadios" id="imprisonment-yes" value="option1" checked>
                                        <label class="control-label" for="imprisonment-yes">
                                            เคย เพราะ / Yes (Reason)
                                        </label>
                                    </div>
                                </fieldset>
                            </div>
                        </div>
                    </div>
                    <div class="col-md col-sm-6">
                        <div class="row gutters-custom">
                            <div class="col">
                                <div class="form-group has-feedback -nm I">
                                    <label class="control-label visuallyhidden" for="spicyfi-3">Spicyfi</label>
                                    <div class="block-control">
                                        <input type="text" class="form-control" id="spicyfi-3" placeholder="Spicyfi" data-error="">
                                        <span class="form-control-feedback" aria-hidden="true"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row gutters-custom mt-lg-5 mt-4">
                    <div class="col">
                        <div class="topic -np">5. เคยถูกให้ออกจากงานหรือเลิกจ้างหรือไม่ / Have you ever been discharged from employment for any reason?</div>
                    </div>
                </div>
                <div class="row gutters-custom align-items-center">
                    <div class="col-md-4 col-sm-6">
                        <div class="row gutters-custom">
                            <div class="col-auto">
                                <fieldset>
                                    <legend class="visuallyhidden"></legend>
                                    <div class="form-group form-check -nm I">
                                        <input class="form-check-input radio-check" type="radio" name="exampleRadios" id="dismissal-no" value="option1" checked>
                                        <label class="control-label" for="dismissal-no">
                                            ไม่เคย / No
                                        </label>
                                    </div>
                                </fieldset>
                            </div>
                            <div class="col-auto">
                                <fieldset>
                                    <legend class="visuallyhidden"></legend>
                                    <div class="form-group form-check -nm I">
                                        <input class="form-check-input radio-check" type="radio" name="exampleRadios" id="dismissal-yes" value="option1" checked>
                                        <label class="control-label" for="dismissal-yes">
                                            เคย เพราะ / Yes (Reason)
                                        </label>
                                    </div>
                                </fieldset>
                            </div>
                        </div>
                    </div>
                    <div class="col-md col-sm-6">
                        <div class="row gutters-custom">
                            <div class="col">
                                <div class="form-group has-feedback -nm I">
                                    <label class="control-label visuallyhidden" for="spicyfi-4">Spicyfi</label>
                                    <div class="block-control">
                                        <input type="text" class="form-control" id="spicyfi-4" placeholder="Spicyfi" data-error="">
                                        <span class="form-control-feedback" aria-hidden="true"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row gutters-custom mt-lg-5 mt-4">
                    <div class="col">
                        <div class="topic -np">6. ท่านมีเพื่อนหรือญาติที่ทำงานที่บริษัทนี้หรือไม่ / Have you any friend or relative employed here?</div>
                    </div>
                </div>
                <div class="row gutters-custom align-items-center">
                    <div class="col-md-4 col-sm-6">
                        <div class="row gutters-custom">
                            <div class="col-auto">
                                <fieldset>
                                    <legend class="visuallyhidden"></legend>
                                    <div class="form-group form-check -nm I">
                                        <input class="form-check-input radio-check" type="radio" name="exampleRadios" id="friend-no" value="option1" checked>
                                        <label class="control-label" for="friend-no">
                                            ไม่เคย / No
                                        </label>
                                    </div>
                                </fieldset>
                            </div>
                            <div class="col-auto">
                                <fieldset>
                                    <legend class="visuallyhidden"></legend>
                                    <div class="form-group form-check -nm I">
                                        <input class="form-check-input radio-check" type="radio" name="exampleRadios" id="friend-yes" value="option1" checked>
                                        <label class="control-label" for="friend-yes">
                                            เคย เพราะ / Yes (Reason)
                                        </label>
                                    </div>
                                </fieldset>
                            </div>
                        </div>
                    </div>
                    <div class="col-md col-sm-6">
                        <div class="row gutters-custom">
                            <div class="col">
                                <div class="form-group has-feedback -nm I">
                                    <label class="control-label visuallyhidden" for="spicyfi-5">Spicyfi</label>
                                    <div class="block-control">
                                        <input type="text" class="form-control" id="spicyfi-5" placeholder="Spicyfi" data-error="">
                                        <span class="form-control-feedback" aria-hidden="true"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row gutters-custom mt-lg-5 mt-4">
                    <div class="col">
                        <div class="topic -np">7. ท่านทราบข่าวการสมัครงานจาก / Where did you hear of our vacancy?</div>
                    </div>
                </div>
                <div class="row gutters-custom align-items-center">
                    <div class="col-md-3 col-sm-6">
                        <fieldset>
                            <legend class="visuallyhidden"></legend>
                            <div class="form-group form-check -nm I">
                                <input class="form-check-input radio-check -C" type="radio" name="exampleRadios" id="personal-recommendation" value="option1" checked>
                                <label class="control-label" for="personal-recommendation">
                                    เจ้าหน้าที่สภาบัน ชื่อ

                                    personal-recommendation
                                </label>
                            </div>
                        </fieldset>
                    </div>
                    <div class="col-md-8 col-sm-6">
                        <div class="form-group has-feedback -nm I">
                            <label class="control-label visuallyhidden" for="a-name-1">Spicyfi</label>
                            <div class="block-control">
                                <input type="text" class="form-control" id="a-name-1" placeholder="ชื่อ / Name" data-error="">
                                <span class="form-control-feedback" aria-hidden="true"></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row gutters-custom align-items-center mt-sm-0 mt-2">
                    <div class="col-md-3 col-sm-6">
                        <fieldset>
                            <legend class="visuallyhidden"></legend>
                            <div class="form-group form-check -nm I">
                                <input class="form-check-input radio-check" type="radio" name="exampleRadios" id="others" value="option1" checked>
                                <label class="control-label" for="others">
                                    อื่นๆ ระบุ others
                                </label>
                            </div>
                        </fieldset>
                    </div>
                    <div class="col-md-8 col-sm-6 mt-md-2">
                        <div class="form-group has-feedback -nm I">
                            <label class="control-label visuallyhidden" for="a-name-2">Spicyfi</label>
                            <div class="block-control">
                                <input type="text" class="form-control" id="a-name-2" placeholder="ชื่อ / Name" data-error="">
                                <span class="form-control-feedback" aria-hidden="true"></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row gutters-custom mt-lg-5 mt-4">
                    <div class="col">
                        <div class="title">8. ข้อมูลเพิ่มเติม FURTHER INFORMATION</div>
                    </div>
                </div>
                <div class="row gutters-custom">
                    <div class="col">
                        <div class="form-group has-feedback -nm">
                            <div class="topic py-0 pb-2">ข้อมูลเพิ่มเติมซึ่งท่านคิดว่าจะเป็นประโยชน์ต่อการสมัครงาน/Further information which you considered to be beneficial to application.</div>
                            <label class="control-label visuallyhidden" for="textarea-1">ข้อมูลเพิ่มเติมซึ่งท่านคิดว่าจะเป็นประโยชน์ต่อการสมัครงาน/Further information which you considered to be beneficial to application.</label>
                            <div class="block-control">
                                <textarea class="form-control form-text-area" rows="4" cols="100" id="textarea-1" value="Spicyfi" data-error=""></textarea>
                                <span class="form-control-feedback" aria-hidden="true"></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row gutters-custom mt-lg-5 mt-4">
                    <div class="col">
                        <div class="title">ประวัติการฝึกอบรม/ดูงาน/ฝึกงาน / JOB TRAINING/INSPECTION/APPRENTICESHIP <span>*</span></div>
                    </div>
                </div>
                <div class="row gutters-custom align-items-center pt-3">
                    <div class="col-sm-9">
                        <div class="topic"> โปรดให้รายละเอียดของผู้ให้การรับรอง (ซึ่งไม่ใช่ญาติ) ที่รู้จักตัวท่านดี / Give information of references (other than relatives)who know you</div>
                    </div>

                    <div class="col-sm text-right">
                        <div class="button add-form-6 my-sm-0 my-3">
                            <a href="javascript:void(0);" class="btn btn-primary" title="btn btn-primary">
                                <span class="feather icon-plus text-white"></span>
                                Add Education History
                            </a>
                        </div>
                    </div>
                </div>
                <div class="row gutters-custom align-items-center">
                    <div class="col-auto">
                        <fieldset>
                            <legend class="visuallyhidden"></legend>
                            <div class="form-group form-check -nm">
                                <input class="form-check-input radio-check" type="radio" name="exampleRadios" id="reference-no" value="option1" checked>
                                <label class="control-label" for="reference-no">
                                    ไม่มี / No
                                </label>
                            </div>
                        </fieldset>
                    </div>
                    <div class="col">
                        <fieldset>
                            <legend class="visuallyhidden"></legend>
                            <div class="form-group form-check -nm">
                                <input class="form-check-input radio-check" type="radio" name="exampleRadios" id="reference-yes" value="option1" checked>
                                <label class="control-label" for="reference-yes">
                                    มี / Yes
                                </label>
                            </div>
                        </fieldset>
                    </div>
                </div>
                <div class="row gutters-custom">
                    <div class="col-md col-sm">
                        <div class="form-group has-feedback">
                            <label class="control-label" for="p-name-1">1. ชื่อ-นามสกุล / Name-Surname</label>
                            <div class="block-control">
                                <input type="text" class="form-control" id="p-name-1" placeholder="ชื่อ-นามสกุล / Name-Surname" data-error="">
                                <span class="form-control-feedback" aria-hidden="true"></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md col-sm">
                        <div class="form-group has-feedback">
                            <label class="control-label" for="p-address-1">ที่อยู่/สถานที่ทำงาน/Address/Office Address</label>
                            <div class="block-control">
                                <input type="text" class="form-control" id="p-address-1" placeholder="ที่อยู่/สถานที่ทำงาน/Address/Office Address" data-error="">
                                <span class="form-control-feedback" aria-hidden="true"></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md col-sm">
                        <div class="form-group has-feedback">
                            <label class="control-label" for="p-position-1">ตำแหน่ง / Position</label>
                            <div class="block-control">
                                <input type="text" class="form-control" id="p-position-1" placeholder="ตำแหน่ง / Position" data-error="">
                                <span class="form-control-feedback" aria-hidden="true"></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row gutters-custom">
                    <div class="col-sm-4">
                        <div class="form-group has-feedback">
                            <label class="control-label" for="p-telephone-1">โทรศัพท์ / Telephone</label>
                            <div class="block-control">
                                <input type="text" class="form-control" id="p-telephone-1" placeholder="โทรศัพท์ / Telephone" data-error="">
                                <span class="form-control-feedback" aria-hidden="true"></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label class="control-label" for="p-relations-1">ความสัมพันธ์ / Relations</label>
                            <div class="select-wrapper">
                                <select class="select-control" name="ordernews" id="p-relations-1" style="width: 100%;">
                                    <option value="SELECT1">ความสัมพันธ์ / Relations</option>
                                    <option value="SELECT2">ความสัมพันธ์ / Relations</option>
                                    <option value="SELECT2">ความสัมพันธ์ / Relations</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="d-none mt-3" id="add-form-6">
                <div class="row align-items-center">
                        <!-- <div class="col">
                            <div class="title"> พี่น้อง / Brother Sister</div>
                        </div> -->
                        <div class="col text-right">
                            <div class="button delete-form-6">
                                <a href="javascript:void(0);" class="btn btn-primary" title="btn btn-primary">
                                    <!-- <span class="feather icon-minus text-white"></span> -->
                                    ลบ
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="row gutters-custom">
                        <div class="col-md col-sm">
                            <div class="form-group has-feedback">
                                <label class="control-label" for="p-name-2">2. ชื่อ-นามสกุล / Name-Surname</label>
                                <div class="block-control">
                                    <input type="text" class="form-control" id="p-name-2" placeholder="ชื่อ-นามสกุล / Name-Surname" data-error="">
                                    <span class="form-control-feedback" aria-hidden="true"></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md col-sm">
                            <div class="form-group has-feedback">
                                <label class="control-label" for="p-address-2">ที่อยู่/สถานที่ทำงาน/Address/Office Address</label>
                                <div class="block-control">
                                    <input type="text" class="form-control" id="p-address-2" placeholder="ที่อยู่/สถานที่ทำงาน/Address/Office Address" data-error="">
                                    <span class="form-control-feedback" aria-hidden="true"></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md col-sm">
                            <div class="form-group has-feedback">
                                <label class="control-label" for="p-position-2">ตำแหน่ง / Position</label>
                                <div class="block-control">
                                    <input type="text" class="form-control" id="p-position-2" placeholder="ตำแหน่ง / Position" data-error="">
                                    <span class="form-control-feedback" aria-hidden="true"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row gutters-custom">
                        <div class="col-sm-4">
                            <div class="form-group has-feedback">
                                <label class="control-label" for="p-telephone-2">โทรศัพท์ / Telephone</label>
                                <div class="block-control">
                                    <input type="text" class="form-control" id="p-telephone-2" placeholder="โทรศัพท์ / Telephone" data-error="">
                                    <span class="form-control-feedback" aria-hidden="true"></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label class="control-label" for="p-relations-2">ความสัมพันธ์ / Relations</label>
                                <div class="select-wrapper">
                                    <select class="select-control" name="ordernews" id="p-relations-2" style="width: 100%;">
                                        <option value="SELECT1">ความสัมพันธ์ / Relations</option>
                                        <option value="SELECT2">ความสัมพันธ์ / Relations</option>
                                        <option value="SELECT2">ความสัมพันธ์ / Relations</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row gutters-custom mt-5">
                    <div class="col">
                        <div class="title">สำหรับเจ้าหน้าที่ทรัพยากรบุคคล / FOR COMPANY USE ONLY</div>
                    </div>
                </div>
                <div class="upload-documents">
                    <div class="row gutters-custom">
                        <div class="col-12">
                            <!-- <div class="form-group has-feedback -nm">
                                <div class="topic">เอกสารการศึกษา / Transcript <span>*</span> </div>
                                <div class="block-control">
                                    <label class="btn btn-primary btn-file" for="use-only-upload-1">
                                        <input type="file" id="use-only-upload-1">
                                        <div class="row gutters-custom">
                                            <div class="col-auto">
                                                <img class="icon" src="<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/assets/img/icon/icon-upload.svg" alt="icon upload">
                                            </div>
                                            <div class="col">
                                                <span class="typo-xs text-white">อัพโหลด / Upload</span>
                                            </div>
                                        </div>
                                    </label>
                                </div>
                            </div> -->

                            <div class="form-group has-feedback">
                                <div class="topic">เอกสารการศึกษา / Transcript <span>*</span> </div>
                                <input class="input-file" id="use-only-upload-1" type="file">
                                <label tabindex="0" for="use-only-upload-1" class="btn btn-primary btn-file">
                                    <div class="row gutters-custom">
                                        <div class="col-auto">
                                            <img class="icon" src="<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/assets/img/icon/icon-upload.svg" alt="icon upload">
                                        </div>
                                        <div class="col">
                                            <span class="typo-xs text-white">อัพโหลด / Upload</span>
                                        </div>
                                    </div>
                                </label>
                                <div class="row align-items-center">
                                    <div class="col-auto">
                                        <p class="file-return">file mockup.png</p>
                                    </div>
                                    <div class="col">
                                        <div class="uploadTxt-close" id="CloseFile">
                                            <span class="feather icon-x"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <!-- <div class="form-group has-feedback">
                                <div class="topic">สำเนาทะเบียนบ้าน / Household Registration เอกสารทางการทหาร / Military Document<span>*</span></div>
                                <div class="block-control">
                                    <label class="btn btn-primary btn-file" for="use-only-upload-2">
                                        <input type="file" id="use-only-upload-2">
                                        <div class="row gutters-custom">
                                            <div class="col-auto">
                                                <img class="icon" src="<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/assets/img/icon/icon-upload.svg" alt="icon upload">
                                            </div>
                                            <div class="col">
                                                <span class="typo-xs text-white">อัพโหลด / Upload</span>
                                            </div>
                                        </div>
                                    </label>
                                </div>
                            </div> -->

                            <div class="form-group has-feedback">
                                <div class="topic">สำเนาทะเบียนบ้าน / Household Registration เอกสารทางการทหาร / Military Document<span>*</span></div>
                                <input class="input-file" id="use-only-upload-2" type="file">
                                <label tabindex="0" for="use-only-upload-2" class="btn btn-primary btn-file">
                                    <div class="row gutters-custom">
                                        <div class="col-auto">
                                            <img class="icon" src="<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/assets/img/icon/icon-upload.svg" alt="icon upload">
                                        </div>
                                        <div class="col">
                                            <span class="typo-xs text-white">อัพโหลด / Upload</span>
                                        </div>
                                    </div>
                                </label>
                                <div class="row align-items-center">
                                    <div class="col-auto">
                                        <p class="file-return">file mockup.png</p>
                                    </div>
                                    <div class="col">
                                        <div class="uploadTxt-close" id="CloseFile">
                                            <span class="feather icon-x"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <!-- <div class="form-group has-feedback">
                                <div class="topic">สำเนาบัตรประชาชน / Identification Card เอกสารผ่านงาน / Work Experience Reference<span>*</span></div>
                                <div class="block-control">
                                    <label class="btn btn-primary btn-file" for="use-only-upload-3">
                                        <input type="file" id="use-only-upload-3">
                                        <div class="row gutters-custom">
                                            <div class="col-auto">
                                                <img class="icon" src="<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/assets/img/icon/icon-upload.svg" alt="icon upload">
                                            </div>
                                            <div class="col">
                                                <span class="typo-xs text-white">อัพโหลด / Upload</span>
                                            </div>
                                        </div>
                                    </label>
                                </div>
                            </div> -->

                            <div class="form-group has-feedback">
                                <div class="topic">สำเนาบัตรประชาชน / Identification Card เอกสารผ่านงาน / Work Experience Reference<span>*</span></div>
                                <input class="input-file" id="use-only-upload-3" type="file">
                                <label tabindex="0" for="use-only-upload-3" class="btn btn-primary btn-file">
                                    <div class="row gutters-custom">
                                        <div class="col-auto">
                                            <img class="icon" src="<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/assets/img/icon/icon-upload.svg" alt="icon upload">
                                        </div>
                                        <div class="col">
                                            <span class="typo-xs text-white">อัพโหลด / Upload</span>
                                        </div>
                                    </div>
                                </label>
                                <div class="row align-items-center">
                                    <div class="col-auto">
                                        <p class="file-return">file mockup.png</p>
                                    </div>
                                    <div class="col">
                                        <div class="uploadTxt-close" id="CloseFile">
                                            <span class="feather icon-x"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <!-- <div class="form-group has-feedback">
                                <div class="topic">สำเนาทะเบียนสมรส / Marriage Registration<span>*</span></div>
                                <div class="block-control">
                                    <label class="btn btn-primary btn-file" for="use-only-upload-4">
                                        <input type="file" id="use-only-upload-4">
                                        <div class="row gutters-custom">
                                            <div class="col-auto">
                                                <img class="icon" src="<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/assets/img/icon/icon-upload.svg" alt="icon upload">
                                            </div>
                                            <div class="col">
                                                <span class="typo-xs text-white">อัพโหลด / Upload</span>
                                            </div>
                                        </div>
                                    </label>
                                </div>
                            </div> -->

                            <div class="form-group has-feedback">
                                <div class="topic">สำเนาทะเบียนสมรส / Marriage Registration<span>*</span></div>
                                <input class="input-file" id="use-only-upload-4" type="file">
                                <label tabindex="0" for="use-only-upload-4" class="btn btn-primary btn-file">
                                    <div class="row gutters-custom">
                                        <div class="col-auto">
                                            <img class="icon" src="<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/assets/img/icon/icon-upload.svg" alt="icon upload">
                                        </div>
                                        <div class="col">
                                            <span class="typo-xs text-white">อัพโหลด / Upload</span>
                                        </div>
                                    </div>
                                </label>
                                <div class="row align-items-center">
                                    <div class="col-auto">
                                        <p class="file-return">file mockup.png</p>
                                    </div>
                                    <div class="col">
                                        <div class="uploadTxt-close" id="CloseFile">
                                            <span class="feather icon-x"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <!-- <div class="form-group has-feedback">
                                <div class="topic">สำเนาใบอนุญาตขับขี่รถยนต์, จักรยานยนต์ / Private car, Motorcycle License<span>*</span></div>
                                <div class="block-control">
                                    <label class="btn btn-primary btn-file" for="use-only-upload-5">
                                        <input type="file" id="use-only-upload-5">
                                        <div class="row gutters-custom">
                                            <div class="col-auto">
                                                <img class="icon" src="<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/assets/img/icon/icon-upload.svg" alt="icon upload">
                                            </div>
                                            <div class="col">
                                                <span class="typo-xs text-white">อัพโหลด / Upload</span>
                                            </div>
                                        </div>
                                    </label>
                                </div>
                            </div> -->

                            <div class="form-group has-feedback">
                                <div class="topic">สำเนาใบอนุญาตขับขี่รถยนต์, จักรยานยนต์ / Private car, Motorcycle License<span>*</span></div>
                                <input class="input-file" id="use-only-upload-5" type="file">
                                <label tabindex="0" for="use-only-upload-5" class="btn btn-primary btn-file">
                                    <div class="row gutters-custom">
                                        <div class="col-auto">
                                            <img class="icon" src="<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/assets/img/icon/icon-upload.svg" alt="icon upload">
                                        </div>
                                        <div class="col">
                                            <span class="typo-xs text-white">อัพโหลด / Upload</span>
                                        </div>
                                    </div>
                                </label>
                                <div class="row align-items-center">
                                    <div class="col-auto">
                                        <p class="file-return">file mockup.png</p>
                                    </div>
                                    <div class="col">
                                        <div class="uploadTxt-close" id="CloseFile">
                                            <span class="feather icon-x"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="col-12">
                            <!-- <div class="form-group has-feedback"> -->
                            <!-- <div class="topic">เอกสารอื่น ๆ / Other<span>*</span></div> -->
                            <!-- <label class="control-label visuallyhidden" for="use-only-upload-6">โทรศัพท์ / Telephone</label> -->
                            <!-- <div class="block-control">
                                    <label class="btn btn-primary btn-file" for="use-only-upload-6">
                                        <input type="file" id="use-only-upload-6">
                                        <div class="row gutters-custom">
                                            <div class="col-auto">
                                                <img class="icon" src="<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/assets/img/icon/icon-upload.svg" alt="icon upload">
                                            </div>
                                            <div class="col">
                                                <span class="typo-xs text-white">อัพโหลด / Upload</span>
                                            </div>
                                        </div>
                                    </label>
                                </div> -->
                            <!-- </div> -->
                            <div class="form-group has-feedback">
                                <div class="topic">เอกสารอื่น ๆ / Other<span>*</span></div>
                                <input class="input-file" id="use-only-upload-6" type="file">
                                <label tabindex="0" for="use-only-upload-6" class="btn btn-primary btn-file">
                                    <div class="row gutters-custom">
                                        <div class="col-auto">
                                            <img class="icon" src="<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/assets/img/icon/icon-upload.svg" alt="icon upload">
                                        </div>
                                        <div class="col">
                                            <span class="typo-xs text-white">อัพโหลด / Upload</span>
                                        </div>
                                    </div>
                                </label>
                                <div class="row align-items-center">
                                    <div class="col-auto">
                                        <p class="file-return">file mockup.png</p>
                                    </div>
                                    <div class="col">
                                        <div class="uploadTxt-close" id="CloseFile">
                                            <span class="feather icon-x"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row gutters-custom mt-5">
                    <div class="col">
                        <div class="-note">หมายเหตุ : เฉพาะไฟล์ PDF,PNG,JPG (ขนาดไฟล์ไม่เกิน 2M)</div>
                    </div>
                </div>
                <div class="row gutters-custom mt-md-5 mt-4">
                    <div class="col">
                        <div class="form-group has-feedback -nm">
                            <label class="control-label" for="textarea-2">ความเห็นของเจ้าหน้าที่ทรัพยากรบุคคล / Human Resource Officer’s Comments</label>
                            <div class="block-control">
                                <textarea class="form-control form-text-area" rows="4" cols="100" id="textarea-2" value="Spicyfi" data-error=""></textarea>
                                <span class="form-control-feedback" aria-hidden="true"></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row gutters-custom mt-lg-5 mt-4">
                    <div class="col-12">
                        <div class=" form-group form-check">
                            <input class="form-check-input" type="checkbox" value="" id="from-check-1">
                            <label class="control-label c-color" for="from-check-1">
                                ข้าพเจ้าในฐานะเจ้าของข้อมูลส่วนบุคคล ยินยอมมอบเอกสารและหลักฐานประกอบการสมัครงานนี้ให้แก่สถาบันและอนุญาตให้สถาบันเก็บรวบรวม ใช้ หรือเปิดเผย ข้อมูลส่วนบุคคลของข้าพเจ้า
                                เพื่อวัตถุประสงค์หลักในการบริหารจัดการเกี่ยวกับความสัมพันธ์ในการจ้างแรงงานและการบริหารงานบุคคลในองค์กร อันเป็นการจำเป็นโดยชอบด้วยกฏหมายและตามพระราชบัญญัติคุ้มครอง
                                ข้อมูลส่วนบุคคล พ.ศ.2562 เท่านั้น
                                </br>
                                </br>
                                (I, as the data subject consent to provide/give the documents and the evidences for this job application to the GIT andallow GIT to collect, use or disclose
                                my personal data, primarily for the purposes of managing relations in employment and Human Resources management in the company, in accordance by law
                                and under the Personal Data Protection Act (B.E.2562) only)
                            </label>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group form-check">
                            <input class="form-check-input" type="checkbox" value="" id="from-check-2">
                            <label class="control-label c-color" for="from-check-2">
                                ข้าพเจ้าขอรับรองว่าข้อความข้างต้นและหลักฐานต่าง ๆ ถูกต้องและเป็นความจริงทุกประการ ข้าพเจ้ายินดีให้สถาบันสอบประวัติเกี่ยวกับตัว I certify that my answers or evidences are true. I understand that any incorrect, incomplete, or false statement of information
                            </label>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group form-check">
                            <input class="form-check-input" type="checkbox" value="" id="from-check-3">
                            <label class="control-label c-color" for="from-check-3">
                                furnished by me will be considered as just cause for rejection of this application or dismissal from employment without advance
                                </br>
                                ข้าพเจ้าได้ และหากข้าพเจ้าได้รับการพิจารณาเข้าทำงาน และสถาบันตรวจสอบว่าข้อความที่ให้ไว้ไม่ตรงกับความจริง ข้าพเจ้ายินดีให้สถาบันยกเลิกสัญญา
                            </label>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group form-check">
                            <input class="form-check-input" type="checkbox" value="" id="from-check-4">
                            <label class="control-label c-color" for="from-check-4">
                                จ้างของข้าพเจ้าทันที โดยไม่ต้องบอกกล่าวล่วงหน้า และไม่ต้องจ่ายเงินชดเชยหรือค่าเสียหายใด ๆ ทั้งสิ้น
                                </br>
                                notice or any compensation of severance pay whatsoever
                            </label>
                        </div>
                    </div>
                </div>
                <div class="row gutters-custom mt-5 text-center">
                    <div class="col">
                        <button type="submit" id="submitform" class="btn btn-xl btn-primary btn-form" title="SUBMIT AN APPLICATION">SUBMIT AN APPLICATION</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
</section><?php }
}

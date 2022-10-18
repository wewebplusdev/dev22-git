<?php
/* Smarty version 4.0.0, created on 2022-10-18 10:33:56
  from '/var/www/html/front/controller/script/about/template/career-test.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.0',
  'unifunc' => 'content_634e1ea4b296b3_31060270',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5efc371a8e4bc3816ff79f1cb25ed0f007e01b1f' => 
    array (
      0 => '/var/www/html/front/controller/script/about/template/career-test.tpl',
      1 => 1666064030,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_634e1ea4b296b3_31060270 (Smarty_Internal_Template $_smarty_tpl) {
?><section class="site-container" data-menuid="<?php echo $_smarty_tpl->tpl_vars['settingModulus']->value['menuid'];?>
">
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
        <form data-toggle="validator" role="form" class="form-default" name="form-career" id="form-career" method="POST">
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
                                                <input name="LangPage" value="<?php echo $_smarty_tpl->tpl_vars['LangPage']->value;?>
" type="hidden">
                                                <div class="thumb drag-area">
                            <figure class="cover showProfile" id="clickuploadProfile" style="cursor:pointer;">
                                                            <input type="file" name="uploadProfile" id="uploadProfile" style="display:none;" accept="image/jpeg,jpg,png" required="required">
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
                                            <select class="select-control select-year" name="info[]" id="mockSelect1" style="width: 100%;" required="required">
                                              <option value=""><?php echo $_smarty_tpl->tpl_vars['lang']->value['career']['select'];?>
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
                                            <input type="text" class="form-control" name="info[]" id="salaly" placeholder="เงินเดือนที่ต้องการ" data-error="" required="required">
                                            <span class="form-control-feedback" aria-hidden="true"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md">
                                    <div class="form-group has-feedback">
                                        <label class="control-label visuallyhidden" for="sdate">Example input</label>
                                        <div class="block-control">
                                            <input type="date" class="form-control" name="info[]" id="sdate" placeholder="วันที่พร้อมจะเริ่มงานได้/Starting Date" ata-error="" required="required">
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
                            <label class="control-label visuallyhidden" for="inputPrefix">Example select</label>
                            <div class="select-wrapper">
                                <select class="select-control" name="general[]" id="inputPrefix" onchange="hidearmy()" style="width: 100%;">
                                  <option value="<?php echo $_smarty_tpl->tpl_vars['lang']->value['career']['mr'];?>
"><?php echo $_smarty_tpl->tpl_vars['lang']->value['career']['mr'];?>
</option>
                                  <option value="<?php echo $_smarty_tpl->tpl_vars['lang']->value['career']['mis'];?>
"><?php echo $_smarty_tpl->tpl_vars['lang']->value['career']['mis'];?>
</option>
                                  <option value="<?php echo $_smarty_tpl->tpl_vars['lang']->value['career']['miss'];?>
"><?php echo $_smarty_tpl->tpl_vars['lang']->value['career']['miss'];?>
</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm">
                        <div class="form-group has-feedback">
                            <label class="control-label visuallyhidden" for="fname">Example input</label>
                            <div class="block-control">
                                <input type="text" class="form-control" name="general[]" id="fname" placeholder="ชื่อ First Name (Thai)" data-error="" required="required">
                                <span class="form-control-feedback" aria-hidden="true"></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm">
                        <div class="form-group has-feedback">
                            <label class="control-label visuallyhidden" for="lname">Example input</label>
                            <div class="block-control">
                                <input type="text" class="form-control" name="general[]" id="lname" placeholder="นามสกุล Surname (Thai)" data-error="" required="required">
                                <span class="form-control-feedback" aria-hidden="true"></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="upload-documents">
                    <div class="row gutters-custom">
                        <div class="col-12">
                            <div class="form-group has-feedback">
                                <div class="topic">เอกสารการศึกษา / Transcript <span>*</span> </div>
                                <label tabindex="0" for="use-only-upload-1" class="btn btn-primary btn-file -upload-1">
                                    <input class="input-file" id="use-only-upload-1" type="file">
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
                                <div class="row align-items-center" id="file-01" style="display: none;">
                                    <div class="col-auto">
                                        <p class="file-return">file mockup.png</p>
                                    </div>
                                    <div class="col" onclick="removeFile('fileTranscript', '#file-01');">
                                        <div class="uploadTxt-close" id="CloseFile">
                                            <span class="feather icon-x"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group has-feedback">
                                <div class="topic">สำเนาทะเบียนบ้าน / Household Registration เอกสารทางการทหาร / Military Document<span>*</span></div>
                                <label tabindex="0" for="use-only-upload-2" class="btn btn-primary btn-file -upload-2">
                                    <input class="input-file" id="use-only-upload-2" type="file">
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
                                <div class="row align-items-center" id="file-02" style="display: none;">
                                    <div class="col-auto">
                                        <p class="file-return">file mockup.png</p>
                                    </div>
                                    <div class="col" onclick="removeFile('fileMilitary', '#file-02');">
                                        <div class="uploadTxt-close" id="CloseFile">
                                            <span class="feather icon-x"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row gutters-custom mt-5 text-center">
                    <div class="col">
                                                <input type="submit" class="btn btn-xl btn-primary btn-form" value="SUBMIT AN APPLICATION">
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
</section><?php }
}

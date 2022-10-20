<?php
/* Smarty version 4.0.0, created on 2022-10-19 15:22:25
  from '/var/www/html/front/template/default/inc/inc-pdpa.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.0',
  'unifunc' => 'content_634fb3c120ea65_26328554',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ffd3fd85e6623d75d8762d2d0430ada6af8d662e' => 
    array (
      0 => '/var/www/html/front/template/default/inc/inc-pdpa.tpl',
      1 => 1666167740,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_634fb3c120ea65_26328554 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="cookie-tab pdpa" >
    <div class="container">
        <div class="row align-items-center  h-tap">
            <div class="col-md-auto">
                <div class="icon-pdpa">
                    <img src="<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/assets/img/icon/pdpa-icon.svg" class="lazy" alt="pdpa-icon">
                </div>
            </div>
            <div class="col-md">
                <div class="text">
                    เว็บไซต์นี้ให้ความสำคัญต่อข้อมูลส่วนบุคคล เพื่อให้ท่านได้รับประสบการณ์ที่ดีบนเว็บไซต์ของเรา หากท่านใช้บริการเว็บไซต์นี้
                    โดยไม่มีการปรับตั้งค่าใดๆแสดงว่าท่านยอมรับการใช้งานคุกกี้และนโยบายข้อมูลส่วนบุคคลของเรา
                     <a class="link -cookie-policy" href="<?php echo $_smarty_tpl->tpl_vars['ul']->value;?>
/policy" target="_blank">รายละเอียดเพิ่มเติม</a>
                </div>
            </div>
            <div class="col-md-auto">
                <div class="action">
                    <a class="btn btn-primary acept-btn acceptCookie" id="btn-AcceptPdpa" data-accept="Accept" href="javascript:void(0);">ยอมรับ</a>
                    <a class="btn btn-light reject-btn" href="javascript:void(0);">ปฏิเสธ</a>
                </div>
            </div>
        </div>
    </div>
</div><?php }
}

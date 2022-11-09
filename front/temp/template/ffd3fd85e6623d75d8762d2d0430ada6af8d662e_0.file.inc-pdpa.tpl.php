<?php
/* Smarty version 4.0.0, created on 2022-11-09 09:29:21
  from '/var/www/html/front/template/default/inc/inc-pdpa.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.0',
  'unifunc' => 'content_636b1081989699_74280826',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ffd3fd85e6623d75d8762d2d0430ada6af8d662e' => 
    array (
      0 => '/var/www/html/front/template/default/inc/inc-pdpa.tpl',
      1 => 1667877798,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_636b1081989699_74280826 (Smarty_Internal_Template $_smarty_tpl) {
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
                <?php echo $_smarty_tpl->tpl_vars['lang']->value['pdpa']['cookie'];?>

                     <a class="link -cookie-policy" href="<?php echo $_smarty_tpl->tpl_vars['ul']->value;?>
/policy" target="_blank"><?php echo $_smarty_tpl->tpl_vars['lang']->value['pdpa']['more_details'];?>
</a>
                </div>
            </div>
            <div class="col-md-auto">
                <div class="action">
                    <a class="btn btn-primary acept-btn acceptCookie" id="btn-AcceptPdpa" data-accept="Accept" href="javascript:void(0);"><?php echo $_smarty_tpl->tpl_vars['lang']->value['pdpa']['accept'];?>
</a>
                    <a class="btn btn-light reject-btn" href="javascript:void(0);"><?php echo $_smarty_tpl->tpl_vars['lang']->value['pdpa']['decline'];?>
</a>
                </div>
            </div>
        </div>
    </div>
</div><?php }
}

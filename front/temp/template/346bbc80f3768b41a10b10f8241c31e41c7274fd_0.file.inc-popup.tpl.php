<?php
/* Smarty version 4.0.0, created on 2022-11-02 17:25:01
  from '/var/www/html/front/template/default/inc/inc-popup.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.0',
  'unifunc' => 'content_6362457d90ceb1_48965742',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '346bbc80f3768b41a10b10f8241c31e41c7274fd' => 
    array (
      0 => '/var/www/html/front/template/default/inc/inc-popup.tpl',
      1 => 1667384682,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6362457d90ceb1_48965742 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="gallery-popup d-none">
  <?php if ($_smarty_tpl->tpl_vars['callBanner']->value->_numOfRows >= 1) {?>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['callBanner']->value, 'valuecallBanner', false, 'keycallBanner');
$_smarty_tpl->tpl_vars['valuecallBanner']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['keycallBanner']->value => $_smarty_tpl->tpl_vars['valuecallBanner']->value) {
$_smarty_tpl->tpl_vars['valuecallBanner']->do_else = false;
?>
      <a href="<?php ob_start();
echo $_smarty_tpl->tpl_vars['valuecallBanner']->value['masterkey'];
$_prefixVariable1 = ob_get_clean();
echo fileinclude($_smarty_tpl->tpl_vars['valuecallBanner']->value['pic'],"real",$_prefixVariable1,"link");?>
?targetid=manual<?php echo $_smarty_tpl->tpl_vars['keycallBanner']->value;?>
" 
      data-fancybox="gallery-popup" <?php if ($_smarty_tpl->tpl_vars['valuecallBanner']->value['url'] != '' && $_smarty_tpl->tpl_vars['valuecallBanner']->value['url'] != "#") {?>data-href="<?php echo $_smarty_tpl->tpl_vars['valuecallBanner']->value['url'];?>
"<?php } else { ?>data-href="javascript:void(0);"<?php }?> 
      <?php if ($_smarty_tpl->tpl_vars['valuecallBanner']->value['target'] == 2) {?>data-target="_blank"<?php } else { ?>data-target="_self"<?php }?> data-id="<?php echo encodeStr($_smarty_tpl->tpl_vars['valuecallBanner']->value['id']);?>
" class="popup-item" id="manual<?php echo $_smarty_tpl->tpl_vars['keycallBanner']->value;?>
">
      </a>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
  <?php }?>
</div><?php }
}

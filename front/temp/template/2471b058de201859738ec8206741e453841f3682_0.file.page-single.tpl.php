<?php
/* Smarty version 4.0.0, created on 2022-10-11 17:39:01
  from '/var/www/html/front/template/default/page-single.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.0',
  'unifunc' => 'content_634547c5590519_65191629',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2471b058de201859738ec8206741e453841f3682' => 
    array (
      0 => '/var/www/html/front/template/default/page-single.tpl',
      1 => 1658892364,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_634547c5590519_65191629 (Smarty_Internal_Template $_smarty_tpl) {
?>

<?php if ((($tmp = $_smarty_tpl->tpl_vars['fileInclude']->value ?? null)===null||$tmp==='' ? null ?? null : $tmp)) {?>
   <?php ob_start();
echo templateInclude($_smarty_tpl->tpl_vars['fileInclude']->value,$_smarty_tpl->tpl_vars['settemplate']->value);
$_prefixVariable1=ob_get_clean();
$_smarty_tpl->_subTemplateRender($_prefixVariable1, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>'pageContent'), 0, true);
?>
   <?php }
}
}

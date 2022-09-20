<?php
/* Smarty version 4.0.0, created on 2022-09-20 16:59:14
  from '/var/www/html/front/template/default/inc/inc-loadstyle.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.0',
  'unifunc' => 'content_63298ef28937f1_44250684',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0808b38a737bb839451a44599899888a059b3a9c' => 
    array (
      0 => '/var/www/html/front/template/default/inc/inc-loadstyle.tpl',
      1 => 1658892428,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63298ef28937f1_44250684 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!-- CSS SOURCE -->
<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/assets/css/import.css">
<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/assets/css/source.css<?php echo $_smarty_tpl->tpl_vars['lastModify']->value;?>
">

<!-- CSS CONCAT -->
<!-- <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/assets/css/style.concat.css"> -->

<!-- CSS MODIFY -->
<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/assets/css/modify.css<?php echo $_smarty_tpl->tpl_vars['lastModify']->value;?>
">

<?php ob_start();
echo (($tmp = $_smarty_tpl->tpl_vars['assigncss']->value ?? null)===null||$tmp==='' ? null ?? null : $tmp);
$_prefixVariable2 = ob_get_clean();
if ($_prefixVariable2) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['assigncss']->value, 'addAssetCss');
$_smarty_tpl->tpl_vars['addAssetCss']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['addAssetCss']->value) {
$_smarty_tpl->tpl_vars['addAssetCss']->do_else = false;
echo $_smarty_tpl->tpl_vars['addAssetCss']->value;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
}
}

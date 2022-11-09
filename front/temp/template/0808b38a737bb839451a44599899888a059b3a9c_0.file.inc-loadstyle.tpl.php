<?php
/* Smarty version 4.0.0, created on 2022-11-09 17:57:18
  from '/var/www/html/front/template/default/inc/inc-loadstyle.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.0',
  'unifunc' => 'content_636b878e3841b6_77920907',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0808b38a737bb839451a44599899888a059b3a9c' => 
    array (
      0 => '/var/www/html/front/template/default/inc/inc-loadstyle.tpl',
      1 => 1665028818,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_636b878e3841b6_77920907 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!-- Core -->
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/assets/css/plugin/bootstrap.min.css">
<!-- <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/assets/css/plugin/bootstrap-5.min.css"> -->
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/assets/css/plugin/normalize.min.css">
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/assets/css/plugin/animate.min.css">
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/assets/css/plugin/animate.min.css">
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/assets/css/plugin/select2.min.css">
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/assets/css/plugin/slick.css">
<link rel="stylesheet" href="sweetalert2.min.css">


<!-- Custom -->
<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/assets/css/style.css<?php echo $_smarty_tpl->tpl_vars['lastModify']->value;?>
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
}?>

<?php }
}

<?php
/* Smarty version 4.0.0, created on 2022-10-17 16:55:05
  from '/var/www/html/front/controller/script/about/template/listSubDistrict.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.0',
  'unifunc' => 'content_634d2679baf054_77138197',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'db689fef76f62c1582e724a8fa70197dd8dfbf7c' => 
    array (
      0 => '/var/www/html/front/controller/script/about/template/listSubDistrict.tpl',
      1 => 1666000243,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_634d2679baf054_77138197 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['infoSubDistrict']->value->_numOfRows > 0) {?>
	<option value=""><?php echo $_smarty_tpl->tpl_vars['lang']->value['career']['subdistrict'];?>
</option>		
	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['infoSubDistrict']->value, 'listSubDistrict');
$_smarty_tpl->tpl_vars['listSubDistrict']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['listSubDistrict']->value) {
$_smarty_tpl->tpl_vars['listSubDistrict']->do_else = false;
?>
		<option value="<?php echo $_smarty_tpl->tpl_vars['listSubDistrict']->value[0];?>
" data-name="<?php echo $_smarty_tpl->tpl_vars['listSubDistrict']->value[2];?>
"><?php echo $_smarty_tpl->tpl_vars['listSubDistrict']->value[2];?>
</option>
	<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

<?php } else { ?>
	<option value=""><?php echo $_smarty_tpl->tpl_vars['lang']->value['career']['subdistrict'];?>
</option>
<?php }
}
}

<?php
/* Smarty version 4.0.0, created on 2022-10-11 17:39:01
  from '/var/www/html/front/controller/script/about/template/listDistrict.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.0',
  'unifunc' => 'content_634547c56d6d99_98027618',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd9a9cbe2aff1cf216383e315be74ad897815ba20' => 
    array (
      0 => '/var/www/html/front/controller/script/about/template/listDistrict.tpl',
      1 => 1665484657,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_634547c56d6d99_98027618 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['infoDistrict']->value->_numOfRows > 0) {?>

	<option disabled value="0" selected=""><?php echo $_smarty_tpl->tpl_vars['lang']->value['career']['district'];?>
</option>		
	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['infoDistrict']->value, 'listDistrict');
$_smarty_tpl->tpl_vars['listDistrict']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['listDistrict']->value) {
$_smarty_tpl->tpl_vars['listDistrict']->do_else = false;
?>
		<option value="<?php echo $_smarty_tpl->tpl_vars['listDistrict']->value[0];?>
" data-name="<?php echo $_smarty_tpl->tpl_vars['listDistrict']->value[2];?>
"><?php echo $_smarty_tpl->tpl_vars['listDistrict']->value[2];?>
</option>
	<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

<?php } else { ?>
	<option disabled value="" selected=""><?php echo $_smarty_tpl->tpl_vars['lang']->value['career']['district'];?>
</option>
<?php }
}
}

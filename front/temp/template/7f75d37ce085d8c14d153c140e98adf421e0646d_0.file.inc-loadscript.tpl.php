<?php
/* Smarty version 4.0.0, created on 2022-09-29 16:37:49
  from '/var/www/html/front/template/default/inc/inc-loadscript.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.0',
  'unifunc' => 'content_6335676d3863f0_52195135',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7f75d37ce085d8c14d153c140e98adf421e0646d' => 
    array (
      0 => '/var/www/html/front/template/default/inc/inc-loadscript.tpl',
      1 => 1664444256,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6335676d3863f0_52195135 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- Core -->

<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/assets/js/jquery-2.2.4.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/assets/js/jquery.easing.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/assets/js/modernizr.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/assets/js/popper.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/assets/js/bootstrap.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/assets/js/validator.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/assets/js/jquery.lazyload.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/assets/js/slick-vdo.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/assets/js/slick.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/assets/js/slick.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/assets/js/aos.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/assets/js/select2.min.js"><?php echo '</script'; ?>
>


<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/assets/js/sweetalert2@11.js"><?php echo '</script'; ?>
>

<!-- Custom -->
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/assets/js/fontsize.js<?php echo $_smarty_tpl->tpl_vars['lastModify']->value;?>
"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/assets/js/theme-style.js<?php echo $_smarty_tpl->tpl_vars['lastModify']->value;?>
"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/assets/js/main.js<?php echo $_smarty_tpl->tpl_vars['lastModify']->value;?>
"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript">var raf = window.requestAnimationFrame || window.mozRequestAnimationFrame || window.webkitRequestAnimationFrame || window.msRequestAnimationFrame;<?php echo '</script'; ?>
>

<?php ob_start();
echo (($tmp = $_smarty_tpl->tpl_vars['assignjs']->value ?? null)===null||$tmp==='' ? null ?? null : $tmp);
$_prefixVariable1 = ob_get_clean();
if ($_prefixVariable1) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['assignjs']->value, 'addAssetScript');
$_smarty_tpl->tpl_vars['addAssetScript']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['addAssetScript']->value) {
$_smarty_tpl->tpl_vars['addAssetScript']->do_else = false;
echo $_smarty_tpl->tpl_vars['addAssetScript']->value;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
}
}

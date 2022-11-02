<?php
/* Smarty version 4.0.0, created on 2022-11-02 14:16:20
  from '/var/www/html/front/template/default/page-intro.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.0',
  'unifunc' => 'content_636219445bf9a4_89460528',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e2106c9ab73b4923d428e4f719b0e3988c3899f9' => 
    array (
      0 => '/var/www/html/front/template/default/page-intro.tpl',
      1 => 1658892364,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_636219445bf9a4_89460528 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="<?php echo $_smarty_tpl->tpl_vars['langon']->value;?>
">
<head>
<?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['incfile']->value['metatag']), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>'title'), 0, true);
?>
</head>
<body>
<?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['incfile']->value['preloader']), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>'title'), 0, true);
?>
<div class="global-container">
<?php ob_start();
echo templateInclude($_smarty_tpl->tpl_vars['fileInclude']->value,$_smarty_tpl->tpl_vars['settemplate']->value);
$_prefixVariable1=ob_get_clean();
$_smarty_tpl->_subTemplateRender($_prefixVariable1, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>'pageContent'), 0, true);
?>
</div>
<?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['incfile']->value['loadscript']), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>'title'), 0, true);
?>
</body>
</html><?php }
}

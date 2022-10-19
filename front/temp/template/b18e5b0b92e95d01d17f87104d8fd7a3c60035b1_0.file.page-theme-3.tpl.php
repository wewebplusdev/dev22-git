<?php
/* Smarty version 4.0.0, created on 2022-10-19 17:55:24
  from '/var/www/html/front/template/default/page-theme-3.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.0',
  'unifunc' => 'content_634fd79cc24376_16223474',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b18e5b0b92e95d01d17f87104d8fd7a3c60035b1' => 
    array (
      0 => '/var/www/html/front/template/default/page-theme-3.tpl',
      1 => 1666176917,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_634fd79cc24376_16223474 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="<?php echo $_smarty_tpl->tpl_vars['langon']->value;?>
">
<head>
    <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['incfile']->value['metatag']), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>'title'), 0, true);
?>
    <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['incfile']->value['style']), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>'title'), 0, true);
?>
</head>
    <body class="theme-3">
    <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['incfile']->value['preloader']), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>'title'), 0, true);
?>
    <div class="global-container">
        <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['incfile']->value['header3']), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>'title'), 0, true);
?>
        <?php ob_start();
echo templateInclude($_smarty_tpl->tpl_vars['fileInclude']->value);
$_prefixVariable1=ob_get_clean();
$_smarty_tpl->_subTemplateRender($_prefixVariable1, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>'pageContent'), 0, true);
?>
        <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['incfile']->value['footer3']), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>'title'), 0, true);
?>
    </div>
    <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['incfile']->value['pdpa']), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>'title'), 0, true);
?>
    <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['incfile']->value['loadscript']), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>'title'), 0, true);
?>
    <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['incfile']->value['modal']), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>'title'), 0, true);
?>
    </body>
</html><?php }
}

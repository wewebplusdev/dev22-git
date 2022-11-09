<?php
/* Smarty version 4.0.0, created on 2022-11-09 09:29:21
  from '/var/www/html/front/template/default/page.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.0',
  'unifunc' => 'content_636b10810712a4_53352265',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3c9e98fe33447c313325dca8d61f9c184e8de4cc' => 
    array (
      0 => '/var/www/html/front/template/default/page.tpl',
      1 => 1667960081,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_636b10810712a4_53352265 (Smarty_Internal_Template $_smarty_tpl) {
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
    <body class="<?php echo $_smarty_tpl->tpl_vars['themeWebsite']->value['class'];?>
">
    <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['incfile']->value['preloader']), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>'title'), 0, true);
?>
    <div class="global-container">
        <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['themeWebsite']->value['header']), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>'title'), 0, true);
?>
        <?php ob_start();
echo templateInclude($_smarty_tpl->tpl_vars['fileInclude']->value);
$_prefixVariable1=ob_get_clean();
$_smarty_tpl->_subTemplateRender($_prefixVariable1, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>'pageContent'), 0, true);
?>
        <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['themeWebsite']->value['footer']), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>'title'), 0, true);
?>
        
        <!-- Chat Facebook Plugin -->
        <?php echo htmlspecialchars_decode($_smarty_tpl->tpl_vars['arr_ChatFB']->value);?>

    </div>
    <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['incfile']->value['pdpa']), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>'title'), 0, true);
?>
    <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['incfile']->value['loadscript']), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>'title'), 0, true);
?>
    <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['incfile']->value['modal']), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>'title'), 0, true);
?>
    <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['incfile']->value['popup']), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>'title'), 0, true);
?>
    </body>
</html><?php }
}

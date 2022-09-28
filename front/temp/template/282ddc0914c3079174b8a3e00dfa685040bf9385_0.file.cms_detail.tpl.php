<?php
/* Smarty version 4.0.0, created on 2022-09-28 17:57:02
  from '/var/www/html/front/template/default/_component/cms_detail.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.0',
  'unifunc' => 'content_6334287e849625_96326828',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '282ddc0914c3079174b8a3e00dfa685040bf9385' => 
    array (
      0 => '/var/www/html/front/template/default/_component/cms_detail.tpl',
      1 => 1664362615,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6334287e849625_96326828 (Smarty_Internal_Template $_smarty_tpl) {
?><h1>CMS DETAIL</h1>
<div>
  <div>menu</div>
  <ul>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['arrMenu']->value, 'valuearrMenu', false, 'keyarrMenu');
$_smarty_tpl->tpl_vars['valuearrMenu']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['keyarrMenu']->value => $_smarty_tpl->tpl_vars['valuearrMenu']->value) {
$_smarty_tpl->tpl_vars['valuearrMenu']->do_else = false;
?>
      <li>
        <a href="<?php echo $_smarty_tpl->tpl_vars['ul']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['menuActive']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['valuearrMenu']->value['menuid'];?>
/<?php echo $_smarty_tpl->tpl_vars['valuearrMenu']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['valuearrMenu']->value['subject'];?>
</a>
      </li>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
  </ul>
</div><?php }
}

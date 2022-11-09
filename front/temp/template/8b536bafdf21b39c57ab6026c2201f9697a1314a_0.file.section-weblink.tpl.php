<?php
/* Smarty version 4.0.0, created on 2022-11-08 17:24:47
  from '/var/www/html/front/controller/script/home/template/theme-3/section-weblink.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.0',
  'unifunc' => 'content_636a2e6fc16ed9_12722676',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8b536bafdf21b39c57ab6026c2201f9697a1314a' => 
    array (
      0 => '/var/www/html/front/controller/script/home/template/theme-3/section-weblink.tpl',
      1 => 1667900202,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_636a2e6fc16ed9_12722676 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['callWeblinkSection']->value->_numOfRows >= 1) {?>
  <div class="weblink-block">
      <div class="default-header-block">
          <div class="h-title">
              GIT WEBLINK
          </div>
      </div>
      <div class="slider default-slider">
          <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['callWeblinkSection']->value, 'valuecallWeblinkSection', false, 'keycallWeblinkSection');
$_smarty_tpl->tpl_vars['valuecallWeblinkSection']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['keycallWeblinkSection']->value => $_smarty_tpl->tpl_vars['valuecallWeblinkSection']->value) {
$_smarty_tpl->tpl_vars['valuecallWeblinkSection']->do_else = false;
?>
              <div class="item">
                  <a <?php if ($_smarty_tpl->tpl_vars['valuecallWeblinkSection']->value['url'] != '' && $_smarty_tpl->tpl_vars['valuecallWeblinkSection']->value['url'] != "#") {?>href="<?php echo $_smarty_tpl->tpl_vars['valuecallWeblinkSection']->value['url'];?>
"<?php if ($_smarty_tpl->tpl_vars['valuecallWeblinkSection']->value['target'] == 2) {?>target="_blank"<?php }
} else { ?>href="javascript:void(0);"<?php }?> class="link" title="web link">
                      <div class="thumbnail">
                          <figure class="cover">
                              <img src="<?php ob_start();
echo $_smarty_tpl->tpl_vars['valuecallWeblinkSection']->value['masterkey'];
$_prefixVariable7 = ob_get_clean();
echo fileinclude($_smarty_tpl->tpl_vars['valuecallWeblinkSection']->value['pic'],"real",$_prefixVariable7,"link");?>
" alt="<?php echo $_smarty_tpl->tpl_vars['valuecallWeblinkSection']->value['subject'];?>
">
                          </figure>
                      </div>
                  </a>
              </div>
          <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
      </div>
  </div>
<?php }
}
}

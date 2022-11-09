<?php
/* Smarty version 4.0.0, created on 2022-11-09 09:50:33
  from '/var/www/html/front/controller/script/home/template/theme-3/section-km.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.0',
  'unifunc' => 'content_636b15795dae04_10649176',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '48362dcb6b5acea29ea2aa75bd6a4b5d30ff59c0' => 
    array (
      0 => '/var/www/html/front/controller/script/home/template/theme-3/section-km.tpl',
      1 => 1667960081,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_636b15795dae04_10649176 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['callKmSection']->value->_numOfRows >= 1) {?>
  <div class="knowledge-block">
      <div class="default-header-block">
          <div class="h-title">
              แหล่งความรู้
          </div>
          <a href="" class="link" title="<?php echo $_smarty_tpl->tpl_vars['lang']->value['system']['viewsall'];?>
">
              <?php echo $_smarty_tpl->tpl_vars['lang']->value['system']['viewsall'];?>

          </a>
      </div>
      <div class="slider">
          <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['callKmSection']->value, 'valuecallKmSection', false, 'keycallKmSection');
$_smarty_tpl->tpl_vars['valuecallKmSection']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['keycallKmSection']->value => $_smarty_tpl->tpl_vars['valuecallKmSection']->value) {
$_smarty_tpl->tpl_vars['valuecallKmSection']->do_else = false;
?>
              <div class="item">
                  <a class="link" <?php if ($_smarty_tpl->tpl_vars['valuecallKmSection']->value['url'] != '' && $_smarty_tpl->tpl_vars['valuecallKmSection']->value['url'] != "#") {?>href="<?php echo $_smarty_tpl->tpl_vars['valuecallKmSection']->value['url'];?>
"<?php if ($_smarty_tpl->tpl_vars['valuecallKmSection']->value['target'] == 2) {?>target="_blank"<?php }
} else { ?>href="javascript:void(0);"<?php }?> title="<?php echo $_smarty_tpl->tpl_vars['valuecallKmSection']->value['subject'];?>
">
                      <div class="row no-gutters">
                          <div class="col">
                              <div class="thumbnail">
                                  <figure class="cover">
                                      <img src="<?php ob_start();
echo $_smarty_tpl->tpl_vars['valuecallKmSection']->value['masterkey'];
$_prefixVariable1 = ob_get_clean();
echo fileinclude($_smarty_tpl->tpl_vars['valuecallKmSection']->value['pic'],"real",$_prefixVariable1,"link");?>
" alt="<?php echo $_smarty_tpl->tpl_vars['valuecallKmSection']->value['subject'];?>
">
                                  </figure>
                              </div>
                          </div>
                      </div>
                      <div class="row no-gutters">
                          <div class="col">
                              <div class="title text-limit -x2">
                                  <?php echo $_smarty_tpl->tpl_vars['valuecallKmSection']->value['subject'];?>

                              </div>
                              <div class="desc text-limit -x3">
                                  <?php echo $_smarty_tpl->tpl_vars['valuecallKmSection']->value['title'];?>

                              </div>
                          </div>
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

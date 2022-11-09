<?php
/* Smarty version 4.0.0, created on 2022-11-09 09:50:33
  from '/var/www/html/front/controller/script/home/template/theme-3/section-banner.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.0',
  'unifunc' => 'content_636b1579759151_43947123',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '829d326424318c5e4e7eea136993d516fa331b0f' => 
    array (
      0 => '/var/www/html/front/controller/script/home/template/theme-3/section-banner.tpl',
      1 => 1667960081,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_636b1579759151_43947123 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['callBannerSection']->value->_numOfRows >= 1) {?>
  <div class="banner-block">
      <div class="slider">
          <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['callBannerSection']->value, 'valuecallBannerSection', false, 'keycallBannerSection');
$_smarty_tpl->tpl_vars['valuecallBannerSection']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['keycallBannerSection']->value => $_smarty_tpl->tpl_vars['valuecallBannerSection']->value) {
$_smarty_tpl->tpl_vars['valuecallBannerSection']->do_else = false;
?>
              <div>
                  <div class="box">
                      <div class="row no-gutters align-items-center" style="height: 100%;">
                          <div class="col-6">
                              <div class="inner">
                                  <div class="title text-limit -x2">
                                      <?php echo $_smarty_tpl->tpl_vars['valuecallBannerSection']->value['subject'];?>

                                  </div>
                                  <div class="desc text-limit -x3">
                                      <?php echo $_smarty_tpl->tpl_vars['valuecallBannerSection']->value['title'];?>

                                  </div>
                                  <a <?php if ($_smarty_tpl->tpl_vars['valuecallBannerSection']->value['url'] != '' && $_smarty_tpl->tpl_vars['valuecallBannerSection']->value['url'] != "#") {?>href="<?php echo $_smarty_tpl->tpl_vars['valuecallBannerSection']->value['url'];?>
"<?php if ($_smarty_tpl->tpl_vars['valuecallBannerSection']->value['target'] == 2) {?>target="_blank"<?php }
} else { ?>href="javascript:void(0);"<?php }?> class="btn btn-light" title="<?php echo $_smarty_tpl->tpl_vars['lang']->value['system']['viewmore'];?>
"><?php echo $_smarty_tpl->tpl_vars['lang']->value['system']['viewmore'];?>
</a>
                              </div>
                          </div>
                          <div class="col-6">
                              <div class="graphic">
                                  <img src="<?php ob_start();
echo $_smarty_tpl->tpl_vars['valuecallBannerSection']->value['masterkey'];
$_prefixVariable2 = ob_get_clean();
echo fileinclude($_smarty_tpl->tpl_vars['valuecallBannerSection']->value['pic'],"real",$_prefixVariable2,"link");?>
" alt="<?php echo $_smarty_tpl->tpl_vars['valuecallBannerSection']->value['subject'];?>
">
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
      </div>
  </div>
<?php }
}
}

<?php
/* Smarty version 4.0.0, created on 2022-11-08 16:32:19
  from '/var/www/html/front/template/default/inc/inc-sitemap.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.0',
  'unifunc' => 'content_636a222319a3e2_89411441',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a79e88559f9eec5746a24974607cef7eaeeaf829' => 
    array (
      0 => '/var/www/html/front/template/default/inc/inc-sitemap.tpl',
      1 => 1664871484,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_636a222319a3e2_89411441 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="sitemap">
    <div class="container">
        <div id="accordion">
            <div class="card">
                <div class="card-header" id="headingSitemap">
                    <h3 class="mb-0">
                        <button class="btn btn-sm btn-link collapsed" data-toggle="collapse" data-target="#collapseSitemap" aria-expanded="false" aria-controls="collapseSitemap">
                            <?php echo $_smarty_tpl->tpl_vars['lang']->value['menu']['sitemap'];?>
 <span class="feather icon-chevron-up"></span>
                        </button>
                    </h3>
                </div>
                <div id="collapseSitemap" class="collapse" aria-labelledby="headingSitemap" data-parent="#accordion">
                    <div class="card-body">
                        <h4 class="h-title">
                            <?php echo $_smarty_tpl->tpl_vars['lang']->value['menu']['home'];?>

                        </h4>
                        <div class="row">
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['arrSitemap']->value, 'valuearrSitemap', false, 'keyarrSitemap');
$_smarty_tpl->tpl_vars['valuearrSitemap']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['keyarrSitemap']->value => $_smarty_tpl->tpl_vars['valuearrSitemap']->value) {
$_smarty_tpl->tpl_vars['valuearrSitemap']->do_else = false;
?>
                                <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                                    <h4 class="title">
                                        <?php echo $_smarty_tpl->tpl_vars['valuearrSitemap']->value['group']['subject'];?>

                                    </h4>
                                    <?php if (count($_smarty_tpl->tpl_vars['valuearrSitemap']->value) > 0) {?>
                                        <ul class="list-group">
                                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['valuearrSitemap']->value['list'], 'valuesubgroup', false, 'keysubgroup');
$_smarty_tpl->tpl_vars['valuesubgroup']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['keysubgroup']->value => $_smarty_tpl->tpl_vars['valuesubgroup']->value) {
$_smarty_tpl->tpl_vars['valuesubgroup']->do_else = false;
?>
                                                <?php if (count($_smarty_tpl->tpl_vars['valuesubgroup']->value['menu']) > 0) {?>
                                                    <li class="list-group-item">
                                                        <a <?php if ($_smarty_tpl->tpl_vars['valuesubgroup']->value['subgroup']['url'] != '' && $_smarty_tpl->tpl_vars['valuesubgroup']->value['subgroup']['url'] != "#") {?>href="<?php echo $_smarty_tpl->tpl_vars['valuesubgroup']->value['subgroup']['url'];?>
" <?php if ($_smarty_tpl->tpl_vars['valuesubgroup']->value['subgroup']['target'] == 2) {?>target="_blank"<?php }?> <?php } else { ?>href="javascript:void(0);"<?php }?> class="link" title="<?php echo $_smarty_tpl->tpl_vars['valuesubgroup']->value['subgroup']['subject'];?>
"><?php echo $_smarty_tpl->tpl_vars['valuesubgroup']->value['subgroup']['subject'];?>
</a>
                                                        <ul class="sub-list-group item-list">
                                                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['valuesubgroup']->value['menu'], 'valueMenu', false, 'keyMenu');
$_smarty_tpl->tpl_vars['valueMenu']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['keyMenu']->value => $_smarty_tpl->tpl_vars['valueMenu']->value) {
$_smarty_tpl->tpl_vars['valueMenu']->do_else = false;
?>
                                                                <li>
                                                                    <a <?php if ($_smarty_tpl->tpl_vars['valuesubgroup']->value['url'] != '' && $_smarty_tpl->tpl_vars['valuesubgroup']->value['url'] != "#") {?>href="<?php echo $_smarty_tpl->tpl_vars['valuesubgroup']->value['url'];?>
" <?php if ($_smarty_tpl->tpl_vars['valuesubgroup']->value['target'] == 2) {?>target="_blank"<?php }?> <?php } else { ?>href="javascript:void(0);"<?php }?> class="link" title="<?php echo $_smarty_tpl->tpl_vars['valueMenu']->value['subject'];?>
"><?php echo $_smarty_tpl->tpl_vars['valueMenu']->value['subject'];?>
</a>
                                                                </li>
                                                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                                        </ul>
                                                    </li>
                                                <?php } else { ?>
                                                    <li class="list-group-item">
                                                        <a <?php if ($_smarty_tpl->tpl_vars['valuesubgroup']->value['subgroup']['url'] != '' && $_smarty_tpl->tpl_vars['valuesubgroup']->value['subgroup']['url'] != "#") {?>href="<?php echo $_smarty_tpl->tpl_vars['valuesubgroup']->value['subgroup']['url'];?>
" <?php if ($_smarty_tpl->tpl_vars['valuesubgroup']->value['subgroup']['target'] == 2) {?>target="_blank"<?php }?> <?php } else { ?>href="javascript:void(0);"<?php }?> class="link" title="<?php echo $_smarty_tpl->tpl_vars['valuesubgroup']->value['subgroup']['subject'];?>
"><?php echo $_smarty_tpl->tpl_vars['valuesubgroup']->value['subgroup']['subject'];?>
</a>
                                                    </li>
                                                <?php }?>
                                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                        </ul>
                                    <?php }?>
                                </div>
                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div><?php }
}

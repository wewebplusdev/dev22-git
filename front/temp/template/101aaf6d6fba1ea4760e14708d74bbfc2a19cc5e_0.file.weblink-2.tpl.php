<?php
/* Smarty version 4.0.0, created on 2022-11-08 16:32:18
  from '/var/www/html/front/template/default/_component/weblink-2.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.0',
  'unifunc' => 'content_636a2222d3bde8_82012666',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '101aaf6d6fba1ea4760e14708d74bbfc2a19cc5e' => 
    array (
      0 => '/var/www/html/front/template/default/_component/weblink-2.tpl',
      1 => 1666845625,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_636a2222d3bde8_82012666 (Smarty_Internal_Template $_smarty_tpl) {
?><section class="site-container">
  <div class="default-header">
    <div class="top-graphic mb-4">
      <figure class="cover">
        <img class="figure-img img-fluid"
          src="<?php echo $_smarty_tpl->tpl_vars['template']->value;
echo $_smarty_tpl->tpl_vars['settingModulus']->value['tgp'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['settingModulus']->value['subject'];?>
">
      </figure>
      <div class="container">
        <div class="wrapper">
          <div class="title typo-lg"><?php echo $_smarty_tpl->tpl_vars['settingModulus']->value['title'];?>
</div>
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?php echo $_smarty_tpl->tpl_vars['ul']->value;?>
/home"><?php echo $_smarty_tpl->tpl_vars['lang']->value['menu']['home'];?>
</a></li>
            <?php if ($_smarty_tpl->tpl_vars['settingModulus']->value['subject'] != '') {?>
              <li class="breadcrumb-item"><a href="<?php echo $_smarty_tpl->tpl_vars['ul']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['menuActive']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['settingModulus']->value['subject'];?>
</a></li>
            <?php }?>
            <li class="breadcrumb-item active" aria-current="page"><?php echo $_smarty_tpl->tpl_vars['settingModulus']->value['breadcrumb'];?>
</li>
          </ol>
        </div>
      </div>
    </div>
  </div>
  <div class="default-page information-service">
  <?php if (count($_smarty_tpl->tpl_vars['getMenuDetail']->value) > 0) {?>
    <div class="container">
      <div class="default-nav-slider" data-slick='<?php echo $_smarty_tpl->tpl_vars['initialSlide']->value;?>
'>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['getMenuDetail']->value, 'valuegetMenuDetail', false, 'keygetMenuDetail');
$_smarty_tpl->tpl_vars['valuegetMenuDetail']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['keygetMenuDetail']->value => $_smarty_tpl->tpl_vars['valuegetMenuDetail']->value) {
$_smarty_tpl->tpl_vars['valuegetMenuDetail']->do_else = false;
?>
          <?php $_smarty_tpl->_assignInScope('arrName', explode("-",$_smarty_tpl->tpl_vars['valuegetMenuDetail']->value['subject']));?>
          <div class="item">
            <a href="<?php echo $_smarty_tpl->tpl_vars['ul']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['menuActive']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['valuegetMenuDetail']->value['id'];?>
" <?php if ($_smarty_tpl->tpl_vars['MenuID']->value == $_smarty_tpl->tpl_vars['valuegetMenuDetail']->value['masterkey']) {?>class="active"<?php }?>><?php echo $_smarty_tpl->tpl_vars['arrName']->value[0];?>
</a>
          </div>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
      </div>
    </div>
  <?php }?>

    <div class="border-nav-slider"></div>

    <?php if (count($_smarty_tpl->tpl_vars['arrMenu']->value) > 0) {?>
      <div class="container mt-5">
          <h2 class="text-primary mb-4"><?php echo $_smarty_tpl->tpl_vars['settingModulus']->value['breadcrumb'];?>
</h2>
          <div class="default-tab-slider default-slick" data-slick='<?php echo $_smarty_tpl->tpl_vars['initialSlide2']->value;?>
'>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['arrMenu']->value, 'valuearrMenu', false, 'keyarrMenu');
$_smarty_tpl->tpl_vars['valuearrMenu']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['keyarrMenu']->value => $_smarty_tpl->tpl_vars['valuearrMenu']->value) {
$_smarty_tpl->tpl_vars['valuearrMenu']->do_else = false;
?>
              <div class="item">
                <div class="tab-block <?php if ($_smarty_tpl->tpl_vars['callGroup']->value->fields['id'] == $_smarty_tpl->tpl_vars['valuearrMenu']->value['id']) {?>active<?php }?>">
                  <a class="text-limit" href="<?php echo str_replace("//","/",((string)$_smarty_tpl->tpl_vars['ul']->value)."/".((string)$_smarty_tpl->tpl_vars['menuActive']->value)."/".((string)$_smarty_tpl->tpl_vars['valuearrMenu']->value['menuid'])."/".((string)$_smarty_tpl->tpl_vars['valuearrMenu']->value['id']));?>
"><?php echo $_smarty_tpl->tpl_vars['valuearrMenu']->value['subject'];?>
</a>
                </div>
              </div>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
          </div>
      </div>
    <?php }?>

    <div class="container">
      <div class="row py-5">
        <div class="col">
          <h2 class="text-black text-uppercase mb-4"><?php echo $_smarty_tpl->tpl_vars['callGroup']->value->fields['subject'];?>
</h2>
          <!-- related sites block -->
          <div class="related-sites-block">
            <div class="related-sites">
              <ul class="item-list">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['callWel']->value, 'valuecallWel', false, 'keycallWel');
$_smarty_tpl->tpl_vars['valuecallWel']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['keycallWel']->value => $_smarty_tpl->tpl_vars['valuecallWel']->value) {
$_smarty_tpl->tpl_vars['valuecallWel']->do_else = false;
?>
                  <li>
                    <a <?php if ($_smarty_tpl->tpl_vars['valuecallWel']->value['url'] != "#" && $_smarty_tpl->tpl_vars['valuecallWel']->value['url'] != '') {?>href="<?php echo $_smarty_tpl->tpl_vars['valuecallWel']->value['url'];?>
"<?php } else { ?>href="javascript:void(0);"<?php }?> <?php if ($_smarty_tpl->tpl_vars['valuecallWel']->value['target'] == 2) {?>target="_blank"<?php }?> class="link" title="<?php echo $_smarty_tpl->tpl_vars['valuecallWel']->value['subject'];?>
">
                      <div class="row no-gutters">
                        <div class="col">
                          <div class="related-sites-thumbnail">
                            <figure class="cover">
                              <img src="<?php ob_start();
echo $_smarty_tpl->tpl_vars['valuecallWel']->value['masterkey'];
$_prefixVariable3 = ob_get_clean();
echo fileinclude($_smarty_tpl->tpl_vars['valuecallWel']->value['pic'],"real",$_prefixVariable3,"link");?>
" alt="<?php echo $_smarty_tpl->tpl_vars['valuecallWel']->value['subject'];?>
">
                            </figure>
                          </div>
                        </div>
                      </div>
                      <div class="row no-gutters">
                        <div class="col">
                          <div class="related-sites-desc">
                            <div class="title text-limit">
                              <?php echo $_smarty_tpl->tpl_vars['valuecallWel']->value['subject'];?>

                            </div>
                            <div class="url text-limit">
                              <?php echo $_smarty_tpl->tpl_vars['valuecallWel']->value['url'];?>

                            </div>
                          </div>
                        </div>
                      </div>
                    </a>
                  </li>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
              </ul>
            </div>
          </div>
          <!-- end related sites block  -->
        </div>
      </div>
      <?php if ($_smarty_tpl->tpl_vars['callWel']->value->_numOfRows >= 1 && $_smarty_tpl->tpl_vars['pagination']->value['totalpage'] >= 2) {?>
        <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['incfile']->value['pagination']), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
      <?php }?>
      <div class="editor-content">
      </div>

    </div>
  </div>
</section><?php }
}

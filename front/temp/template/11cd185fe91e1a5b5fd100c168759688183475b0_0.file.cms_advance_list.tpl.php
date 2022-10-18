<?php
/* Smarty version 4.0.0, created on 2022-10-18 17:08:59
  from '/var/www/html/front/template/default/_component/cms_advance_list.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.0',
  'unifunc' => 'content_634e7b3b49bf98_21057649',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '11cd185fe91e1a5b5fd100c168759688183475b0' => 
    array (
      0 => '/var/www/html/front/template/default/_component/cms_advance_list.tpl',
      1 => 1665462779,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_634e7b3b49bf98_21057649 (Smarty_Internal_Template $_smarty_tpl) {
?><section class="site-container">
  <div class="default-header">
    <div class="top-graphic mb-4">
      <figure class="cover">
        <img class="figure-img img-fluid" src="<?php echo $_smarty_tpl->tpl_vars['template']->value;
echo $_smarty_tpl->tpl_vars['settingModulus']->value['tgp'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['settingModulus']->value['tgp'];?>
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
  <div class="default-page about">
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

    <?php if (count($_smarty_tpl->tpl_vars['arrMenu']->value) > 0 && $_smarty_tpl->tpl_vars['showslick']->value) {?>
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
              <div class="tab-block <?php if ($_smarty_tpl->tpl_vars['menuidLv2']->value == $_smarty_tpl->tpl_vars['valuearrMenu']->value['id']) {?>active<?php }?>">
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
      <div class="row align-items-center">
        <div class="col-auto">
          <div class="h-title"><?php echo $_smarty_tpl->tpl_vars['callGroup']->value->fields['subject'];?>
</div>
        </div>
        <?php if (count($_smarty_tpl->tpl_vars['callYear']->value) > 0) {?>
          <div class="col text-right">
            <div class="form-group has-feedback">
              <label class="control-label visuallyhidden" for="yearSelect"><?php echo $_smarty_tpl->tpl_vars['lang']->value['system']['year'];?>
 :</label>
              <div class="select-wrapper">
                <span><?php echo $_smarty_tpl->tpl_vars['lang']->value['system']['year'];?>
 :</span>
                <select class="select-control select-year" name="ordernews" id="yearSelect">
                    <option value="All"><?php echo $_smarty_tpl->tpl_vars['lang']->value['system']['all'];?>
</option>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['callYear']->value, 'valuecallYear', false, 'keycallYear');
$_smarty_tpl->tpl_vars['valuecallYear']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['keycallYear']->value => $_smarty_tpl->tpl_vars['valuecallYear']->value) {
$_smarty_tpl->tpl_vars['valuecallYear']->do_else = false;
?>
                      <option value="<?php echo date('Y',strtotime($_smarty_tpl->tpl_vars['valuecallYear']->value['credate']));?>
" <?php if ($_smarty_tpl->tpl_vars['req_params']->value['year'] == date('Y',strtotime($_smarty_tpl->tpl_vars['valuecallYear']->value['credate']))) {?>selected="selected"<?php }?>><?php echo date('Y',strtotime(DateFormat($_smarty_tpl->tpl_vars['valuecallYear']->value['credate'])));?>
</option>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </select>
              </div>
            </div>
        <?php }?>
        </div>
      </div>
      <?php if ($_smarty_tpl->tpl_vars['callCMS']->value->_numOfRows >= 1) {?>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['callCMS']->value, 'valuecallCMS', false, 'keycallCMS');
$_smarty_tpl->tpl_vars['valuecallCMS']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['keycallCMS']->value => $_smarty_tpl->tpl_vars['valuecallCMS']->value) {
$_smarty_tpl->tpl_vars['valuecallCMS']->do_else = false;
?>
          <div class="news-block">
            <div class="row align-items-center">
              <div class="col-sm-auto">
                <figure class="cover">
                  <img src="<?php ob_start();
echo $_smarty_tpl->tpl_vars['valuecallCMS']->value['masterkey'];
$_prefixVariable1 = ob_get_clean();
echo fileinclude($_smarty_tpl->tpl_vars['valuecallCMS']->value['pic'],"real",$_prefixVariable1,"link");?>
" alt="<?php echo $_smarty_tpl->tpl_vars['valuecallCMS']->value['subject'];?>
">
                </figure>
              </div>
              <div class="col-sm">
                <div class="title"><?php echo $_smarty_tpl->tpl_vars['valuecallCMS']->value['subject'];?>
</div>
                <div class="row">
                  <div class="col-12">
                    <div class="desc"><?php echo $_smarty_tpl->tpl_vars['valuecallCMS']->value['title'];?>
</div>
                  </div>
                  <div class="col-12">
                    <span class="feather icon-calendar"></span>
                    <span class="typo-xs text-black"><?php ob_start();
echo $_smarty_tpl->tpl_vars['langon']->value;
$_prefixVariable2 = ob_get_clean();
echo DateThai($_smarty_tpl->tpl_vars['valuecallCMS']->value['credate'],'1',$_prefixVariable2,'full');?>
</span>
                  </div>
                  <div class="col-12">
                    <a href="<?php echo $_smarty_tpl->tpl_vars['ul']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['menuActive']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['valuecallCMS']->value['menuid'];?>
/<?php echo $_smarty_tpl->tpl_vars['valuecallCMS']->value['gid'];?>
/<?php echo $_smarty_tpl->tpl_vars['menuDetail']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['valuecallCMS']->value['id'];?>
" class="btn" title="btn"><?php echo $_smarty_tpl->tpl_vars['lang']->value['system']['viewmore'];?>
</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
      <?php }?>
      

      <div class="editor-content">
      </div>
      <?php if ($_smarty_tpl->tpl_vars['callCMS']->value->_numOfRows >= 1 && $_smarty_tpl->tpl_vars['pagination']->value['totalpage'] >= 2) {?>
        <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['incfile']->value['pagination']), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
      <?php }?>
    </div>
  </div>
</section><?php }
}

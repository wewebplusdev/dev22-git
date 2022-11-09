<?php
/* Smarty version 4.0.0, created on 2022-11-09 11:33:21
  from '/var/www/html/front/template/default/_component/cms_advance_training_list.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.0',
  'unifunc' => 'content_636b2d91d01668_66601230',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'db15aebb852c8b63e794c07c2cf2bbf3310593cd' => 
    array (
      0 => '/var/www/html/front/template/default/_component/cms_advance_training_list.tpl',
      1 => 1667968400,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_636b2d91d01668_66601230 (Smarty_Internal_Template $_smarty_tpl) {
?><section class="site-container">
  <div class="default-header">
    <div class="top-graphic mb-4">
      <figure class="cover">
        <img class="figure-img img-fluid"
        src="<?php echo $_smarty_tpl->tpl_vars['template']->value;
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
  <div class="default-page training-work">
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
      <div class="default-tab-slider default-slick">
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

    <?php if ($_smarty_tpl->tpl_vars['callCMS']->value->_numOfRows >= 1) {?>
      <div class="container mt-5">
        <div class="row py-3">
          <div class="col">
            <div class="h-title">หลักสูตรด้านอัญมณีศาสตร์</div>
            <div class="detail-link-block">
              <div class="detail-link">
                <ul class="item-list fluid">
                  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['callCMS']->value, 'valuecallCMS', false, 'keycallCMS');
$_smarty_tpl->tpl_vars['valuecallCMS']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['keycallCMS']->value => $_smarty_tpl->tpl_vars['valuecallCMS']->value) {
$_smarty_tpl->tpl_vars['valuecallCMS']->do_else = false;
?>
                    <li>
                      <div class="row no-gutters">
                        <div class="col-md col-12">
                          <div class="detail-thumbnail">
                            <figure class="cover">
                              <img src="<?php ob_start();
echo $_smarty_tpl->tpl_vars['valuecallCMS']->value['masterkey'];
$_prefixVariable1 = ob_get_clean();
echo fileinclude($_smarty_tpl->tpl_vars['valuecallCMS']->value['pic'],"real",$_prefixVariable1,"link");?>
" alt="<?php echo $_smarty_tpl->tpl_vars['valuecallCMS']->value['subject'];?>
">
                            </figure>
                          </div>
                        </div>
                        <div class="col-md col-12">
                          <div class="detail-desc">
                            <div class="title text-limit -x2">
                              <?php echo $_smarty_tpl->tpl_vars['valuecallCMS']->value['subject'];?>

                            </div>
                            <p class="desc text-limit">
                              <?php echo $_smarty_tpl->tpl_vars['valuecallCMS']->value['title'];?>

                            </p>
                            <a href="<?php echo $_smarty_tpl->tpl_vars['ul']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['menuActive']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['valuecallCMS']->value['menuid'];?>
/<?php echo $_smarty_tpl->tpl_vars['valuecallCMS']->value['gid'];?>
/<?php echo $_smarty_tpl->tpl_vars['menuDetail']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['valuecallCMS']->value['id'];?>
" class="btn btn-primary" title="รายละเอียดหลักสูตร">
                              <?php echo $_smarty_tpl->tpl_vars['lang']->value['training']['detail'];?>

                              <!-- <img class="icon ml-3" src="<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/assets/img/icon/icon-deatail.svg" alt="icon"> -->
                              <svg xmlns="http://www.w3.org/2000/svg" width="51.235" height="7.199"
                                viewBox="0 0 51.235 7.199">
                                <path data-name="Path 5" d="M4670.6,5544.179h50.033l-6.306-6.347"
                                  transform="translate(-4670.602 -5537.48)" fill="none" stroke="#fff" stroke-width="1" />
                              </svg>
                            </a>
                          </div>
                        </div>
                      </div>
                    </li>
                  <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </ul>
              </div>
            </div>
            <!-- end detail link block -->
          </div>
        </div>
        <div class="border-nav-slider pt-5"></div>
        <!-- <div class="container"> -->
        <div class="editor-content">
          <!-- CK Editor -->
          <?php echo callHtml(fileinclude($_smarty_tpl->tpl_vars['callGroup']->value->fields['htmlfilename'],"html",$_smarty_tpl->tpl_vars['callGroup']->value->fields['masterkey']));?>

          <!-- CK Editor -->
        </div>
        <!-- </div> -->
      </div>
    <?php }?>
  </div>
</section><?php }
}

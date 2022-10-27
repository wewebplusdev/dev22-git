<?php
/* Smarty version 4.0.0, created on 2022-10-27 13:49:30
  from '/var/www/html/front/template/default/_component/cms_album_list.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.0',
  'unifunc' => 'content_635a29fab329c3_47048030',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '72f7233520d3ce0b45948b592573fa7daf11d599' => 
    array (
      0 => '/var/www/html/front/template/default/_component/cms_album_list.tpl',
      1 => 1666853365,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_635a29fab329c3_47048030 (Smarty_Internal_Template $_smarty_tpl) {
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

    <div class="container">
      <div class="row py-5">
        <div class="col">
          <div class="h-title"><?php echo $_smarty_tpl->tpl_vars['settingModulus']->value['breadcrumb'];?>
</div>
          <!--gallery block -->
          <div class="gallery-block">
            <div class="gallery">
              <ul class="item-list">
              <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['callCMS']->value, 'valuecallCMS', false, 'keycallCMS');
$_smarty_tpl->tpl_vars['valuecallCMS']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['keycallCMS']->value => $_smarty_tpl->tpl_vars['valuecallCMS']->value) {
$_smarty_tpl->tpl_vars['valuecallCMS']->do_else = false;
?>
                <li>
                  <div class="row no-gutters">
                    <div class="col">
                      <div class="gallery-thumbnail">
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
                  </div>
                  <div class="row no-gutters">
                    <div class="col">
                      <div class="gallery-desc">
                        <div class="title">
                          <?php echo $_smarty_tpl->tpl_vars['valuecallCMS']->value['subject'];?>

                        </div>
                        <a href="<?php echo $_smarty_tpl->tpl_vars['ul']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['menuActive']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['valuecallCMS']->value['menuid'];?>
/<?php echo $_smarty_tpl->tpl_vars['menuDetail']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['valuecallCMS']->value['id'];?>
" class="btn btn-primary" title="<?php echo $_smarty_tpl->tpl_vars['lang']->value['infoserv']['pictures'];?>
">
                          <?php echo $_smarty_tpl->tpl_vars['lang']->value['infoserv']['pictures'];?>

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
          <!-- end gallery block  -->
        </div>
      </div>
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

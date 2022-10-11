<?php
/* Smarty version 4.0.0, created on 2022-10-11 12:14:47
  from '/var/www/html/front/template/default/_component/career-list.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.0',
  'unifunc' => 'content_6344fbc73cc2f0_03420016',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2659ba8196501d395b620594509e82102202d876' => 
    array (
      0 => '/var/www/html/front/template/default/_component/career-list.tpl',
      1 => 1665465286,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6344fbc73cc2f0_03420016 (Smarty_Internal_Template $_smarty_tpl) {
?><section class="site-container">
  <div class="default-header">
    <div class="top-graphic mb-4">
      <figure class="cover">
        <img class="figure-img img-fluid" src="<?php echo $_smarty_tpl->tpl_vars['template']->value;
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

    <div class="container mt-5">
    <?php if (count($_smarty_tpl->tpl_vars['arrMenu']->value) > 0 && $_smarty_tpl->tpl_vars['showslick']->value) {?>
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
      <?php }?>
      </div>

    <div class="container">
      <div class="editor-content">
        <?php if ($_smarty_tpl->tpl_vars['callSetting']->value->fields['htmlfilename'] != '') {?>
            <!-- CK Editor -->
            <?php echo callHtml(fileinclude($_smarty_tpl->tpl_vars['callSetting']->value->fields['htmlfilename'],"html",$_smarty_tpl->tpl_vars['callSetting']->value->fields['masterkey']));?>

            <!-- CK Editor -->
        <?php }?>
      </div>
      <form action="<?php echo $_smarty_tpl->tpl_vars['ul']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['menuActive']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['valuegetMenuDetail']->value['id'];?>
" data-toggle="validator" role="form" class="form-default" method="get">
        <div class="row align-items-center">
          <div class="col-md-8">
            <div class="control-label" for="jobSearch"><?php echo $_smarty_tpl->tpl_vars['lang']->value['career']['search-title'];?>
</div>
            <div class="form-group form-search">
              <label class="control-label visuallyhidden" for="jobSearch"><?php echo $_smarty_tpl->tpl_vars['lang']->value['career']['search'];?>
</label>
              <input type="text" name="keywords" class="form-control" id="jobSearch" aria-describedby="jobSearch"
                placeholder="<?php echo $_smarty_tpl->tpl_vars['lang']->value['career']['search'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['req_params']->value['keywords'];?>
">
              <div class="form-control-icon">
                <span class="icon-from -icon-search"></span>
              </div>
            </div>
          </div>
          <div class="col-md-4 text-right">
            <div class="control-label" for="mockSelect1" style="opacity: 0;">Example select</div>
            <div class="form-group has-feedback">
              <label class="control-label visuallyhidden" for="mockSelect1">Example select</label>
              <div class="select-wrapper">
                <select class="select-control" name="selectCareer" id="mockSelect1" style="width: 100%;" onchange="this.form.submit()">
                  <option value="0"><?php echo $_smarty_tpl->tpl_vars['lang']->value['career']['select'];?>
</option>
                  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['callListCareerSelect']->value, 'valuecallListCareerSelect', false, 'keycallListCareerSelect');
$_smarty_tpl->tpl_vars['valuecallListCareerSelect']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['keycallListCareerSelect']->value => $_smarty_tpl->tpl_vars['valuecallListCareerSelect']->value) {
$_smarty_tpl->tpl_vars['valuecallListCareerSelect']->do_else = false;
?>
                  <option value="<?php echo $_smarty_tpl->tpl_vars['valuecallListCareerSelect']->value['id'];?>
" <?php if ($_smarty_tpl->tpl_vars['req_params']->value['selectcareer'] == $_smarty_tpl->tpl_vars['valuecallListCareerSelect']->value['id']) {?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['valuecallListCareerSelect']->value['subject'];?>
</option>
                  <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </select>
              </div>
            </div>
          </div>
        </div>
      </form>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['callCMS']->value, 'valuecallCMS', false, 'keycallCMS');
$_smarty_tpl->tpl_vars['valuecallCMS']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['keycallCMS']->value => $_smarty_tpl->tpl_vars['valuecallCMS']->value) {
$_smarty_tpl->tpl_vars['valuecallCMS']->do_else = false;
?>
        <div class="job-source-block mb-3">
          <div class="row">
            <div class="col-auto">
              <div class="title typo-sm"><?php echo $_smarty_tpl->tpl_vars['valuecallCMS']->value['subject'];?>
</div>
              <div class="desc">(<?php echo $_smarty_tpl->tpl_vars['lang']->value['career']['quantity'];?>
 : <?php echo $_smarty_tpl->tpl_vars['valuecallCMS']->value['quantity'];?>
 <?php echo $_smarty_tpl->tpl_vars['lang']->value['career']['position'];?>
)</div>
            </div>
            <div class="col-auto py-3">
              <div class="desc"><?php echo $_smarty_tpl->tpl_vars['valuecallCMS']->value['title'];?>
</div>
            </div>
          </div>
          <div class="job-source-location">
            <div class="row align-items-center">
              <div class="col">
                <div class="row align-items-center no-gutters">
                  <div class="col-auto">
                    <img src="<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/assets/img/icon/icon-location.svg" alt="icon-location">
                  </div>
                  <div class="col">
                    <div class="desc"><?php echo $_smarty_tpl->tpl_vars['lang']->value['career']['location'];?>
 : <?php echo $_smarty_tpl->tpl_vars['valuecallCMS']->value['address'];?>
</div>
                  </div>
                </div>
              </div>
              <div class="col-auto">
                <a href="<?php echo $_smarty_tpl->tpl_vars['ul']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['menuActive']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['valuegetMenuDetail']->value['id'];?>
/<?php echo $_smarty_tpl->tpl_vars['menuDetail']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['valuecallCMS']->value['id'];?>
" class="link" title="<?php echo $_smarty_tpl->tpl_vars['lang']->value['career']['detail'];?>
">
                  <div class="row align-items-center no-gutters">
                    <div class="col">
                      <div class="desc">
                        <?php echo $_smarty_tpl->tpl_vars['lang']->value['career']['detail'];?>

                      </div>
                    </div>
                    <div class="col-auto">
                      <img src="<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/assets/img/icon/icon-detail.svg" alt="icon-detail">
                    </div>
                  </div>
                </a>
              </div>
            </div>
          </div>
        </div>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        <?php if ($_smarty_tpl->tpl_vars['callCMS']->value->_numOfRows >= 1 && $_smarty_tpl->tpl_vars['pagination']->value['totalpage'] >= 2) {?>
          <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['incfile']->value['pagination']), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
        <?php }?>

    </div>
  </div>
</section><?php }
}

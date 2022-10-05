<?php
/* Smarty version 4.0.0, created on 2022-10-05 16:48:25
  from '/var/www/html/front/template/default/_component/download-list-subgroup.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.0',
  'unifunc' => 'content_633d52e98bdab4_59931436',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ba51911e198a925c5af085503014d7218bc5c857' => 
    array (
      0 => '/var/www/html/front/template/default/_component/download-list-subgroup.tpl',
      1 => 1664963075,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_633d52e98bdab4_59931436 (Smarty_Internal_Template $_smarty_tpl) {
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
            <div class="row align-items-center">
                <div class="col-auto">
                    <div class="h-title"><?php echo $_smarty_tpl->tpl_vars['callGroup']->value->fields['subject'];?>
</div>
                </div>
                <?php if (count($_smarty_tpl->tpl_vars['callYear']->value) > 0) {?>
                    <div class="col text-right">
                        <div class="form-group">
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
                    </div>
                <?php }?>
            </div>

            <?php if (count($_smarty_tpl->tpl_vars['arrListData']->value) > 0) {?>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['arrListData']->value, 'valuearrListData', false, 'keyarrListData');
$_smarty_tpl->tpl_vars['valuearrListData']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['keyarrListData']->value => $_smarty_tpl->tpl_vars['valuearrListData']->value) {
$_smarty_tpl->tpl_vars['valuearrListData']->do_else = false;
?>
                    <div class="row py-3">
                        <div class="col">
                            <div class="collapse-block">
                                <div id="accordionInner">
                                    <div class="card">
                                        <div class="card-header">
                                            <h3 class="mb-0">
                                                <button class="btn btn-lg fluid <?php if ($_smarty_tpl->tpl_vars['keyarrListData']->value >= 1) {?>collapsed<?php }?>" data-toggle="collapse" data-target="#about-<?php echo $_smarty_tpl->tpl_vars['valuearrListData']->value['subgroup']['id'];?>
" aria-expanded="<?php if ($_smarty_tpl->tpl_vars['keyarrListData']->value == 0) {?>true<?php } else { ?>false<?php }?>" aria-controls="collapse">
                                                    <span>
                                                        <?php echo $_smarty_tpl->tpl_vars['valuearrListData']->value['subgroup']['subject'];?>

                                                    </span>
                                                    <span class="feather icon-plus-circle"></span>
                                                </button>
                                            </h3>
                                        </div>
                                        <div id="about-<?php echo $_smarty_tpl->tpl_vars['valuearrListData']->value['subgroup']['id'];?>
" class="collapse <?php if ($_smarty_tpl->tpl_vars['keyarrListData']->value == 0) {?>show<?php }?>" aria-labelledby="headingCollapse" data-parent="#accordion">
                                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['valuearrListData']->value['list'], 'valueList', false, 'keyList');
$_smarty_tpl->tpl_vars['valueList']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['keyList']->value => $_smarty_tpl->tpl_vars['valueList']->value) {
$_smarty_tpl->tpl_vars['valueList']->do_else = false;
?>
                                                <?php  $_prefixVariable1 = $_smarty_tpl->tpl_vars['callSetWebsite']->value;
$_smarty_tpl->_assignInScope('Call_File', $_prefixVariable1::Call_File($_smarty_tpl->tpl_vars['valueList']->value['id']));?>
                                                <?php ob_start();
echo $_smarty_tpl->tpl_vars['valueList']->value['masterkey'];
$_prefixVariable2 = ob_get_clean();
$_smarty_tpl->_assignInScope('fileinfo', get_Icon(fileinclude($_smarty_tpl->tpl_vars['Call_File']->value->fields['filename'],'file',$_prefixVariable2)));?>
                                                <?php if ($_smarty_tpl->tpl_vars['Call_File']->value->fields['name'] != '') {?>
                                                <?php $_smarty_tpl->_assignInScope('subject', $_smarty_tpl->tpl_vars['Call_File']->value->fields['name']);?>
                                                <?php } else { ?>
                                                <?php $_smarty_tpl->_assignInScope('subject', $_smarty_tpl->tpl_vars['valueList']->value['subject']);?>
                                                <?php }?>
                                                <div class="download-block">
                                                    <div class="row align-items-center">
                                                        <div class="col-md">
                                                            <div class="row no-gutters">
                                                                <div class="col-auto">
                                                                    <img class="icon -icon-download" src="<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/assets/img/icon/icon-attachment.svg" alt="attachment icon">
                                                                </div>
                                                                <div class="col">
                                                                    <div class="title typo-sm"><?php echo $_smarty_tpl->tpl_vars['subject']->value;?>
</div>
                                                                    <div class="row">
                                                                        <?php if ($_smarty_tpl->tpl_vars['Call_File']->value->_numOfRows >= 1) {?>
                                                                            <div class="col-sm-auto">
                                                                                <div class="row">
                                                                                    <div class="col-sm-auto">
                                                                                        <div class="download-block-type">
                                                                                            <img class="icon" src="<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/assets/img/icon/icon-file.svg" alt="icon file">
                                                                                            <div class="desc typo-s">
                                                                                                <?php echo $_smarty_tpl->tpl_vars['lang']->value['system']['size'];?>
 :
                                                                                                <span><?php ob_start();
echo $_smarty_tpl->tpl_vars['valueList']->value['masterkey'];
$_prefixVariable3 = ob_get_clean();
echo get_IconSize(fileinclude($_smarty_tpl->tpl_vars['Call_File']->value->fields['filename'],'file',$_prefixVariable3));?>
</span>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-sm-auto">
                                                                                        <div class="download-block-type">
                                                                                            <img class="icon" src="<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/assets/img/icon/icon-pdf.svg" alt="icon file">
                                                                                            <div class="desc typo-s">
                                                                                                <?php echo $_smarty_tpl->tpl_vars['lang']->value['system']['type'];?>
 :
                                                                                                <span><?php echo $_smarty_tpl->tpl_vars['fileinfo']->value['type'];?>
</span>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        <?php }?>
                                                                        <div class="col-sm-auto">
                                                                            <div class="row">
                                                                                <div class="col-sm-auto">
                                                                                    <div class="download-block-type">
                                                                                        <img class="icon" src="<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/assets/img/icon/icon-view-.svg" alt="icon file">
                                                                                        <div class="desc view typo-s">
                                                                                            <?php echo $_smarty_tpl->tpl_vars['lang']->value['system']['view'];?>

                                                                                            <span><?php echo number_format($_smarty_tpl->tpl_vars['valueList']->value['view']);?>
</span>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-sm-auto">
                                                                                    <div class="download-block-type">
                                                                                        <img class="icon" src="<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/assets/img/icon/icon-time.svg" alt="icon file">
                                                                                        <div class="desc time typo-s">
                                                                                            <?php echo $_smarty_tpl->tpl_vars['lang']->value['system']['lastdate'];?>

                                                                                            <span><?php ob_start();
echo $_smarty_tpl->tpl_vars['langon']->value;
$_prefixVariable4 = ob_get_clean();
echo DateThai($_smarty_tpl->tpl_vars['valueList']->value['credate'],'23',$_prefixVariable4,'shot3');?>
</span>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-auto">
                                                            <div class="row">
                                                                <div class="download-block-btn">
                                                                    <?php if ($_smarty_tpl->tpl_vars['valueList']->value['typec'] == 1) {?>
                                                                        <div class="col-auto">
                                                                            <a href="<?php echo $_smarty_tpl->tpl_vars['ul']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['menuActive']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['valueList']->value['menuid'];?>
/<?php echo $_smarty_tpl->tpl_vars['valueList']->value['gid'];?>
/<?php echo $_smarty_tpl->tpl_vars['menuDetail']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['valueList']->value['id'];?>
" class="btn" title="<?php echo $_smarty_tpl->tpl_vars['lang']->value['system']['viewmore'];?>
"><?php echo $_smarty_tpl->tpl_vars['lang']->value['system']['viewmore'];?>
</a>
                                                                        </div>
                                                                    <?php }?>
                                                                    <?php if ($_smarty_tpl->tpl_vars['Call_File']->value->_numOfRows >= 1) {?>
                                                                        <div class="col-auto">
                                                                            <a href="<?php echo $_smarty_tpl->tpl_vars['ul']->value;?>
/download/<?php ob_start();
echo $_smarty_tpl->tpl_vars['valueList']->value['masterkey'];
$_prefixVariable5 = ob_get_clean();
echo fileinclude($_smarty_tpl->tpl_vars['Call_File']->value->fields['filename'],'file',$_prefixVariable5,'download');?>
&n=<?php echo $_smarty_tpl->tpl_vars['Call_File']->value->fields['name'];?>
&t=<?php echo encodeStr('md_cmf');?>
" class="btn" title="<?php echo $_smarty_tpl->tpl_vars['lang']->value['system']['download'];?>
"><?php echo $_smarty_tpl->tpl_vars['lang']->value['system']['download'];?>
</a>
                                                                        </div>
                                                                    <?php }?>
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

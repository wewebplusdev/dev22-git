<?php
/* Smarty version 4.0.0, created on 2022-10-05 16:48:27
  from '/var/www/html/front/template/default/_component/cms_board.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.0',
  'unifunc' => 'content_633d52eb5ee709_75139632',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ab4c24d228815b55478250f50e3825831cd43de9' => 
    array (
      0 => '/var/www/html/front/template/default/_component/cms_board.tpl',
      1 => 1664963065,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_633d52eb5ee709_75139632 (Smarty_Internal_Template $_smarty_tpl) {
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

    <div class="default-page about-page">
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
            <h2 class="text-primary mb-4"><?php echo $_smarty_tpl->tpl_vars['settingModulus']->value['breadcrumb'];?>
</h2>
            <?php if (count($_smarty_tpl->tpl_vars['arrMenu']->value) > 0) {?>
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

            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['arrMem']->value, 'valuearrMem', false, 'keyarrMem');
$_smarty_tpl->tpl_vars['valuearrMem']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['keyarrMem']->value => $_smarty_tpl->tpl_vars['valuearrMem']->value) {
$_smarty_tpl->tpl_vars['valuearrMem']->do_else = false;
?>
                <div class="row <?php if ($_smarty_tpl->tpl_vars['keyarrMem']->value >= 1) {?>mt-5<?php }?>">
                    <div class="col">
                        <!-- profile block -->
                        <div class="profile-block">
                            <div class="profile">
                                <div class="h-title"><?php echo $_smarty_tpl->tpl_vars['valuearrMem']->value['group'];?>
</div>
                                <?php if (count($_smarty_tpl->tpl_vars['valuearrMem']->value['list']) > 0) {?>
                                    <ul class="item-list">
                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['valuearrMem']->value['list'], 'valueMember', false, 'keyMember');
$_smarty_tpl->tpl_vars['valueMember']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['keyMember']->value => $_smarty_tpl->tpl_vars['valueMember']->value) {
$_smarty_tpl->tpl_vars['valueMember']->do_else = false;
?>
                                        <li>
                                            <div class="row no-gutters">
                                                <div class="col">
                                                    <div class="profile-thumbnail">
                                                        <figure class="cover">
                                                            <img src="<?php ob_start();
echo $_smarty_tpl->tpl_vars['valueMember']->value['masterkey'];
$_prefixVariable1 = ob_get_clean();
echo fileinclude($_smarty_tpl->tpl_vars['valueMember']->value['pic'],"real",$_prefixVariable1,"link");?>
"
                                                                alt="profile thumbnail">
                                                        </figure>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row no-gutters">
                                                <div class="col">
                                                    <div class="profile-desc">
                                                        <div class="profile-name">
                                                            <?php echo $_smarty_tpl->tpl_vars['valueMember']->value['fname'];?>
 <?php echo $_smarty_tpl->tpl_vars['valueMember']->value['lname'];?>

                                                        </div>
        
                                                        <div class="profile-position">
                                                            <?php echo $_smarty_tpl->tpl_vars['valueMember']->value['depart'];?>

                                                        </div>
                                                        <?php if ($_smarty_tpl->tpl_vars['valueMember']->value['sdatetxt'] != '') {?>
                                                            <div class="profile-timeline">
                                                                <?php echo $_smarty_tpl->tpl_vars['valueMember']->value['sdatetxt'];?>

                                                            </div>
                                                        <?php }?>
                                                        <?php if ($_smarty_tpl->tpl_vars['valueMember']->value['email'] != '' || $_smarty_tpl->tpl_vars['valueMember']->value['tel'] != '') {?>
                                                            <div class="profile-contact">
                                                                <?php if ($_smarty_tpl->tpl_vars['valueMember']->value['email'] != '') {?>
                                                                    <div class="email">
                                                                        <?php echo $_smarty_tpl->tpl_vars['lang']->value['system']['email'];?>
: <?php echo $_smarty_tpl->tpl_vars['valueMember']->value['email'];?>

                                                                    </div>
                                                                <?php }?>
                                                                <?php if ($_smarty_tpl->tpl_vars['valueMember']->value['tel'] != '') {?>
                                                                    <div class="telephone">
                                                                        <?php echo $_smarty_tpl->tpl_vars['lang']->value['system']['tel'];?>
: <?php echo $_smarty_tpl->tpl_vars['valueMember']->value['tel'];?>

                                                                    </div>
                                                                <?php }?>
                                                            </div>
                                                        <?php }?>
                                                        <a href="javascript:void(0);" class="btn modal-alert" title="<?php echo $_smarty_tpl->tpl_vars['lang']->value['system']['readmore2'];?>
" data-toggle="modal" 
                                                            data-target="#profileBlock" data-name="<?php echo $_smarty_tpl->tpl_vars['valueMember']->value['fname'];?>
 <?php echo $_smarty_tpl->tpl_vars['valueMember']->value['lname'];?>
" data-depart="<?php echo $_smarty_tpl->tpl_vars['valueMember']->value['depart'];?>
" 
                                                            data-sdatetxt="<?php echo $_smarty_tpl->tpl_vars['valueMember']->value['sdatetxt'];?>
" data-email="<?php echo $_smarty_tpl->tpl_vars['valueMember']->value['email'];?>
" data-tel="<?php echo $_smarty_tpl->tpl_vars['valueMember']->value['tel'];?>
" 
                                                            data-pic="<?php ob_start();
echo $_smarty_tpl->tpl_vars['valueMember']->value['masterkey'];
$_prefixVariable2 = ob_get_clean();
echo fileinclude($_smarty_tpl->tpl_vars['valueMember']->value['pic'],"real",$_prefixVariable2,"link");?>
" data-txtemail="<?php echo $_smarty_tpl->tpl_vars['lang']->value['system']['email'];?>
" data-txttel="<?php echo $_smarty_tpl->tpl_vars['lang']->value['system']['tel'];?>
">
                                                            <span class="feather icon-chevron-right"></span>
                                                            <?php echo $_smarty_tpl->tpl_vars['lang']->value['system']['readmore2'];?>

                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                    </ul>
                                <?php }?>
                            </div>
                        </div>
                        <!-- end profile block -->
                    </div>
                </div>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

            <?php if ($_smarty_tpl->tpl_vars['arrMenuActive']->value->fields['url'] != '' && $_smarty_tpl->tpl_vars['arrMenuActive']->value->fields['url'] != "#") {?>
                <?php $_smarty_tpl->_assignInScope('myUrlArray', explode("v=",$_smarty_tpl->tpl_vars['arrMenuActive']->value->fields['url']));?>
                <?php $_smarty_tpl->_assignInScope('myUrlCut', $_smarty_tpl->tpl_vars['myUrlArray']->value[1]);?>
                <?php $_smarty_tpl->_assignInScope('myUrlCutArray', explode("&",$_smarty_tpl->tpl_vars['myUrlCut']->value));?>
                <?php $_smarty_tpl->_assignInScope('myUrlCutAnd', $_smarty_tpl->tpl_vars['myUrlCutArray']->value[0]);?>
                <div class="youtube-block">
                    <div class="iframe-container">
                        <iframe class="responsive-iframe" src="https://www.youtube.com/embed/<?php echo $_smarty_tpl->tpl_vars['myUrlCutAnd']->value;?>
"
                            title="YouTube video player"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen></iframe>
                    </div>
                </div>
            <?php }?>

            <?php if ($_smarty_tpl->tpl_vars['Call_File']->value->_numOfRows >= 1) {?>
                <div class="row mt-5">
                    <div class="col-12">
                        <h2 class="text-black mb-4"><?php echo $_smarty_tpl->tpl_vars['lang']->value['system']['attachment'];?>
</h2>
                        <div class="attachment-slider default-slick">
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['Call_File']->value, 'valueCall_File', false, 'keyCall_File');
$_smarty_tpl->tpl_vars['valueCall_File']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['keyCall_File']->value => $_smarty_tpl->tpl_vars['valueCall_File']->value) {
$_smarty_tpl->tpl_vars['valueCall_File']->do_else = false;
?>
                                <?php ob_start();
echo $_smarty_tpl->tpl_vars['arrMenuActive']->value->fields['masterkey'];
$_prefixVariable3 = ob_get_clean();
$_smarty_tpl->_assignInScope('fileinfo', get_Icon(fileinclude($_smarty_tpl->tpl_vars['valueCall_File']->value['filename'],'file',$_prefixVariable3)));?>
                                <div class="item">
                                    <div class="attachment-block">
                                        <a href="<?php echo $_smarty_tpl->tpl_vars['ul']->value;?>
/download/<?php ob_start();
echo $_smarty_tpl->tpl_vars['arrMenuActive']->value->fields['masterkey'];
$_prefixVariable4 = ob_get_clean();
echo fileinclude($_smarty_tpl->tpl_vars['valueCall_File']->value['filename'],'file',$_prefixVariable4,'download');?>
&n=<?php echo $_smarty_tpl->tpl_vars['valueCall_File']->value['name'];?>
&t=<?php echo encodeStr('md_memf');?>
" class="link" title="<?php echo $_smarty_tpl->tpl_vars['lang']->value['system']['attachment'];?>
">
                                            <div class="row no-gutters">
                                                <div class="col-auto">
                                                    <!-- <img class="icon" src="<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/assets/img/icon/icon-attachment.svg" alt="attachment icon"> -->
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="41"
                                                        viewBox="0 0 32 41">
                                                        <g data-name="Group 9337" transform="translate(0)">
                                                            <path data-name="Path 2087"
                                                                d="M9.75,2h15a1,1,0,0,1,.721.307l11.25,11.7A1,1,0,0,1,37,14.7V38.1A4.832,4.832,0,0,1,32.25,43H9.75A4.832,4.832,0,0,1,5,38.1V6.9A4.832,4.832,0,0,1,9.75,2ZM24.324,4H9.75A2.831,2.831,0,0,0,7,6.9V38.1A2.831,2.831,0,0,0,9.75,41h22.5A2.831,2.831,0,0,0,35,38.1v-23Z"
                                                                transform="translate(-5 -2)" fill="#013f94" />
                                                            <path data-name="Path 2088"
                                                                d="M32.438,15.438H21a1,1,0,0,1-1-1V3a1,1,0,0,1,2,0V13.438H32.438a1,1,0,0,1,0,2Z"
                                                                transform="translate(-1.438 -2)" fill="#013f94" />
                                                            <path data-name="Path 2089"
                                                                d="M26.75,20.5H12a1,1,0,0,1,0-2H26.75a1,1,0,0,1,0,2Z"
                                                                transform="translate(-3.375 2.949)" fill="#013f94" />
                                                            <path data-name="Path 2090"
                                                                d="M26.75,26.5H12a1,1,0,0,1,0-2H26.75a1,1,0,0,1,0,2Z"
                                                                transform="translate(-3.375 4.75)" fill="#013f94" />
                                                            <path data-name="Path 2091"
                                                                d="M15.813,14.5H12a1,1,0,0,1,0-2h3.813a1,1,0,0,1,0,2Z"
                                                                transform="translate(-3.518 1.15)" fill="#013f94" />
                                                        </g>
                                                    </svg>
                                                </div>
                                                <div class="col">
                                                    <div class="title typo-sm"><?php echo $_smarty_tpl->tpl_vars['valueCall_File']->value['name'];?>

                                                    </div>
                                                    <div class="subtitle typo-x"><?php echo $_smarty_tpl->tpl_vars['lang']->value['system']['size'];?>
 : <?php ob_start();
echo $_smarty_tpl->tpl_vars['arrMenuActive']->value->fields['masterkey'];
$_prefixVariable5 = ob_get_clean();
echo get_IconSize(fileinclude($_smarty_tpl->tpl_vars['valueCall_File']->value['filename'],'file',$_prefixVariable5));?>
 | <?php echo $_smarty_tpl->tpl_vars['lang']->value['system']['type'];?>
 : <?php echo $_smarty_tpl->tpl_vars['fileinfo']->value['type'];?>
</div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        </div>
                    </div>
                </div>
            <?php }?>
            <div class="row py-5 text-right">
                <div class="col-12">
                    <a href="javascript:history.back();" class="btn btn-border-primary" title="btn btn-primary"><?php echo $_smarty_tpl->tpl_vars['lang']->value['system']['btn_back'];?>
</a>
                </div>
            </div>
        </div>
    </div>
</section><?php }
}

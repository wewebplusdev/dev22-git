<?php
/* Smarty version 4.0.0, created on 2022-09-20 16:59:14
  from '/var/www/html/front/controller/script/home/template/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.0',
  'unifunc' => 'content_63298ef2d84804_53499743',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '30c1539e360a33b39b09d18d8f696a42027194f8' => 
    array (
      0 => '/var/www/html/front/controller/script/home/template/index.tpl',
      1 => 1661323831,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63298ef2d84804_53499743 (Smarty_Internal_Template $_smarty_tpl) {
?><section class="site-container">
    <div class="main-slider" data-aos="fade-up">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['callTopGraphic']->value, 'valuecallTopGraphic', false, 'keycallTopGraphic');
$_smarty_tpl->tpl_vars['valuecallTopGraphic']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['keycallTopGraphic']->value => $_smarty_tpl->tpl_vars['valuecallTopGraphic']->value) {
$_smarty_tpl->tpl_vars['valuecallTopGraphic']->do_else = false;
?>
            <div class="item image">
                <div class="wrapper">
                    <a <?php if ($_smarty_tpl->tpl_vars['valuecallTopGraphic']->value['url'] != "#" && $_smarty_tpl->tpl_vars['valuecallTopGraphic']->value['url'] != '') {?>href="<?php echo $_smarty_tpl->tpl_vars['valuecallTopGraphic']->value['url'];?>
"<?php if ($_smarty_tpl->tpl_vars['valuecallTopGraphic']->value['target'] == 2) {?>target="_blank"<?php }
} else { ?>href="javascript:void(0);"<?php }?> class="link">
                        <figure class="cover">
                            <img src="<?php ob_start();
echo $_smarty_tpl->tpl_vars['valuecallTopGraphic']->value['masterkey'];
$_prefixVariable3 = ob_get_clean();
echo fileinclude($_smarty_tpl->tpl_vars['valuecallTopGraphic']->value['pic'],"real",$_prefixVariable3,"link");?>
" alt="<?php echo $_smarty_tpl->tpl_vars['valuecallTopGraphic']->value['subject'];?>
" class="lazy">
                        </figure>
                    </a>
                </div>
            </div>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </div>
    <?php if ($_smarty_tpl->tpl_vars['callGroupProductlist']->value->_numOfRows >= 1) {?>
        
        <div class="wg-product">
            <div class="graphic -L effectI">
                <img src="<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/assets/img/static/graphicI.svg" alt="graphic" class="lazy">
            </div>
            <div class="graphic -R effectII">
                <img src="<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/assets/img/static/graphicII.svg" alt="graphic" class="lazy">
            </div>
            <div class="container">
                <div class="whead">
                    <h2 class="font-head" data-aos="fade-down"><?php echo $_smarty_tpl->tpl_vars['lang']->value['menu']['product'];?>
</h2>
                </div>
                <div class="nav-box">
                    <ul class="default-nav-slider nav nav-tabs item-list" id="myTab" role="tablist" data-aos="fade-up">
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['callGroupProduct']->value, 'valuecallGroupProduct', false, 'keycallGroupProduct');
$_smarty_tpl->tpl_vars['valuecallGroupProduct']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['keycallGroupProduct']->value => $_smarty_tpl->tpl_vars['valuecallGroupProduct']->value) {
$_smarty_tpl->tpl_vars['valuecallGroupProduct']->do_else = false;
?>
                            <?php if ($_smarty_tpl->tpl_vars['valuecallGroupProduct']->value['type'] == 1) {?>
                                <?php $_smarty_tpl->_assignInScope('linkhref', "#wg-product".((string)$_smarty_tpl->tpl_vars['valuecallGroupProduct']->value['id']));?>
                                <?php $_smarty_tpl->_assignInScope('datatoggle', "tab");?>
                            <?php } else { ?>
                                <?php $_smarty_tpl->_assignInScope('linkhref', ((string)$_smarty_tpl->tpl_vars['ul']->value)."/product/detail/G".((string)$_smarty_tpl->tpl_vars['valuecallGroupProduct']->value['id']));?>
                                <?php $_smarty_tpl->_assignInScope('datatoggle', '');?>
                            <?php }?>
                            <li class="nav-item">
                                <a class="nav-link link <?php if ($_smarty_tpl->tpl_vars['keycallGroupProduct']->value == 0) {?>active<?php }?>" id="wg-product<?php echo $_smarty_tpl->tpl_vars['valuecallGroupProduct']->value['id'];?>
-tab" data-toggle="<?php echo $_smarty_tpl->tpl_vars['datatoggle']->value;?>
" href="<?php echo $_smarty_tpl->tpl_vars['linkhref']->value;?>
"
                                    role="tab" aria-controls="wg-productI" aria-selected="true">
                                    <div class="icon"></div>
                                    <?php echo $_smarty_tpl->tpl_vars['valuecallGroupProduct']->value['subject'];?>

                                </a>
                            </li>
                        <?php
}
if ($_smarty_tpl->tpl_vars['valuecallGroupProduct']->do_else) {
?>
                            <li class="nav-item">
                                <a class="nav-link link" id="wg-product" data-toggle="" href=""
                                    role="tab" aria-controls="wg-productI" aria-selected="true">
                                    <div class="icon"></div>
                                    NO ITEM HERE.
                                </a>
                            </li>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </ul>
                </div>
            </div>
            <div class="tab-content" id="myTabContent">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['callGroupProductlist']->value, 'valuecallGroupProductlist', false, 'keycallGroupProductlist');
$_smarty_tpl->tpl_vars['valuecallGroupProductlist']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['keycallGroupProductlist']->value => $_smarty_tpl->tpl_vars['valuecallGroupProductlist']->value) {
$_smarty_tpl->tpl_vars['valuecallGroupProductlist']->do_else = false;
?>
                                        <?php ob_start();
echo $_smarty_tpl->tpl_vars['valuecallGroupProductlist']->value['masterkey'];
$_prefixVariable4 = ob_get_clean();
ob_start();
echo $_smarty_tpl->tpl_vars['valuecallGroupProductlist']->value['id'];
$_prefixVariable5 = ob_get_clean();
$_prefixVariable6 = $_smarty_tpl->tpl_vars['homePage']->value;
$_smarty_tpl->_assignInScope('callcmsList', $_prefixVariable6::callcms($_prefixVariable4,'',$_prefixVariable5,"Home",15));?>
                    <div class="tab-pane fade <?php if ($_smarty_tpl->tpl_vars['keycallGroupProductlist']->value == 0) {?>show active<?php }?>" id="wg-product<?php echo $_smarty_tpl->tpl_vars['valuecallGroupProductlist']->value['id'];?>
" role="tabpanel" aria-labelledby="wg-productI-tab">
                        <div class="container">
                            <div class="info">
                                <!-- CK Editor -->
                                <?php echo callHtml(fileinclude($_smarty_tpl->tpl_vars['valuecallGroupProductlist']->value['htmlfilename2'],"html",$_smarty_tpl->tpl_vars['valuecallGroupProductlist']->value['masterkey']));?>

                                <!-- CK Editor -->
                                <div class="action" data-aos="fade-up">
                                    <a href="<?php echo $_smarty_tpl->tpl_vars['ul']->value;?>
/product/list/<?php echo $_smarty_tpl->tpl_vars['valuecallGroupProductlist']->value['id'];?>
" class="btn btn-primary">
                                        <?php echo $_smarty_tpl->tpl_vars['lang']->value['system']['viewsall'];?>

                                        <span class="feather icon icon-arrow-right"></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <?php if ($_smarty_tpl->tpl_vars['callcmsList']->value->_numOfRows >= 1) {?>
                            <div class="wg-product-slider" data-aos="fade-up">
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['callcmsList']->value, 'valuecallcmsList', false, 'keycallcmsList');
$_smarty_tpl->tpl_vars['valuecallcmsList']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['keycallcmsList']->value => $_smarty_tpl->tpl_vars['valuecallcmsList']->value) {
$_smarty_tpl->tpl_vars['valuecallcmsList']->do_else = false;
?>
                                    <div class="item product-default">
                                        <div class="wrapper">
                                            <a href="<?php echo $_smarty_tpl->tpl_vars['ul']->value;?>
/product/detail/C<?php echo $_smarty_tpl->tpl_vars['valuecallcmsList']->value['id'];?>
" class="link">
                                                <div class="thumb">
                                                    <figure class="cover">
                                                        <img src="<?php ob_start();
echo $_smarty_tpl->tpl_vars['valuecallcmsList']->value['masterkey'];
$_prefixVariable7 = ob_get_clean();
echo fileinclude($_smarty_tpl->tpl_vars['valuecallcmsList']->value['pic'],"real",$_prefixVariable7,"link");?>
" alt="<?php echo $_smarty_tpl->tpl_vars['valuecallcmsList']->value['pic'];?>
" class="lazy">
                                                    </figure>
                                                </div>
                                                <div class="content">
                                                    <div class="font-sub">
                                                        <div class="icon">
                                                            <span class="feather icon icon-arrow-right"></span>
                                                        </div>
                                                        <?php echo $_smarty_tpl->tpl_vars['valuecallcmsList']->value['subject'];?>

                                                    </div>
                                                    <div class="font-body">
                                                        <?php echo $_smarty_tpl->tpl_vars['valuecallcmsList']->value['title'];?>

                                                    </div>
                                                </div>
                                            </a>
                                            <!-- Display None -->
                                            <div class="action" style="display:none;">
                                                <a href="<?php echo $_smarty_tpl->tpl_vars['ul']->value;?>
/product/apply" class="btn btn-primary-outline">
                                                    <?php echo $_smarty_tpl->tpl_vars['lang']->value['home']['loan'];?>

                                                    <span class="feather icon icon-arrow-right"></span>
                                                </a>
                                            </div>
                                            <!-- Display None -->
                                        </div>
                                    </div>
                                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                            </div>
                        <?php }?>
                    </div>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </div>
        </div>
    <?php }?>
    
    <?php if ($_smarty_tpl->tpl_vars['callWeblinkBun']->value->_numOfRows >= 1) {?>
        <div class="wg-business-network">
            <div class="graphic -L effectII">
                <img src="<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/assets/img/static/graphicV.svg" alt="graphic" class="lazy">
            </div>
            <div class="graphic -R effectI">
                <img src="<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/assets/img/static/graphicVI.svg" alt="graphic" class="lazy">
            </div>
            <div class="container">
                <div class="whead">
                    <h3 class="font-head" data-aos="fade-down"><?php echo $_smarty_tpl->tpl_vars['lang']->value['home']['business'];?>
</h3>
                </div>
                <div class="wg-business-network-slider" data-aos="fade-up">
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['callWeblinkBun']->value, 'valuecallWeblinkBun', false, 'keycallWeblinkBun');
$_smarty_tpl->tpl_vars['valuecallWeblinkBun']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['keycallWeblinkBun']->value => $_smarty_tpl->tpl_vars['valuecallWeblinkBun']->value) {
$_smarty_tpl->tpl_vars['valuecallWeblinkBun']->do_else = false;
?>
                        <div class="item">
                            <div class="wrapper">
                                <a <?php if ($_smarty_tpl->tpl_vars['valuecallWeblinkBun']->value['url'] != "#" && $_smarty_tpl->tpl_vars['valuecallWeblinkBun']->value['url'] != '') {?>href="<?php echo $_smarty_tpl->tpl_vars['valuecallWeblinkBun']->value['url'];?>
"<?php if ($_smarty_tpl->tpl_vars['valuecallWeblinkBun']->value['target'] == 2) {?>target="_blank"<?php }
} else { ?>href="javascript:void(0);"<?php }?> class="link">
                                    <div class="thumb">
                                        <figure class="cover">
                                            <img src="<?php ob_start();
echo $_smarty_tpl->tpl_vars['valuecallWeblinkBun']->value['masterkey'];
$_prefixVariable8 = ob_get_clean();
echo fileinclude($_smarty_tpl->tpl_vars['valuecallWeblinkBun']->value['pic'],"real",$_prefixVariable8,"link");?>
" alt="<?php echo $_smarty_tpl->tpl_vars['valuecallWeblinkBun']->value['pic'];?>
" class="lazy">
                                        </figure>
                                    </div>
                                    <div class="content">
                                        <div class="font-head">
                                            <?php echo $_smarty_tpl->tpl_vars['valuecallWeblinkBun']->value['subject'];?>

                                        </div>
                                        <div class="font-body">
                                            <?php echo $_smarty_tpl->tpl_vars['valuecallWeblinkBun']->value['title'];?>

                                        </div>
                                        <div class="icon">
                                            <span class="feather icon icon-arrow-right"></span>
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

    <!-- HIDE 23072022 --->
    
    <?php if (count($_smarty_tpl->tpl_vars['arr5pd_data_1']->value) > 0) {?>
        <div class="wg-five-product">
            <div class="graphic -L effectI">
                <img src="<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/assets/img/static/graphicVII.svg" alt="graphic" class="lazy">
            </div>
            <div class="graphic -BT effectII">
                <svg xmlns="http://www.w3.org/2000/svg" width="1202.931" height="56.33" viewBox="0 0 1202.931 56.33">
                    <g id="Group_6970" data-name="Group 6970" transform="translate(-716.705 -6299.746)">
                        <path id="Path_312" data-name="Path 312" d="M0,0H1169.135" transform="translate(750.5 6300.5)"
                            fill="none" stroke="#707070" stroke-width="1" opacity="0.16" />
                        <line id="Line_124" data-name="Line 124" x1="32.865" y2="55.822" transform="translate(717.136 6300)"
                            fill="none" stroke="#707070" stroke-width="1" opacity="0.24" />
                    </g>
                </svg>
            </div>
            <div class="container">
                <div class="row row-0">
                    <div class="col-lg-6">
                        <div class="content-info">
                            <div class="h-title" data-aos="fade-down">4Products</div>
                            <div class="font-sub" data-aos="fade-up">บริษัท เอสจี แคปปิตอล จำกัด (มหาชน)</div>
                            <div class="font-body" data-aos="fade-right">
                                <?php echo $_smarty_tpl->tpl_vars['lang']->value['home']['txt:5pd'];?>

                            </div>
                        </div>
                        <div class="wg-five-product-slideI" data-aos="fade-right">
                            <?php $_smarty_tpl->_assignInScope('number5pd', 1);?>
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['arr5pd_data_1']->value, 'valuearr5pd_data_1', false, 'keyarr5pd_data_1');
$_smarty_tpl->tpl_vars['valuearr5pd_data_1']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['keyarr5pd_data_1']->value => $_smarty_tpl->tpl_vars['valuearr5pd_data_1']->value) {
$_smarty_tpl->tpl_vars['valuearr5pd_data_1']->do_else = false;
?>
                                <div class="item">
                                    <div class="wrapper">
                                        <a href="javascript:void(0);" class="link"><?php echo $_smarty_tpl->tpl_vars['number5pd']->value;?>
</a>
                                    </div>
                                </div>
                                <?php $_smarty_tpl->_assignInScope('number5pd', $_smarty_tpl->tpl_vars['number5pd']->value+1);?>
                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        </div>
                        <div class="wg-five-product-slideII" data-aos="fade-up">
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['arr5pd_data_2']->value, 'valuearr5pd_data_2', false, 'keyarr5pd_data_2');
$_smarty_tpl->tpl_vars['valuearr5pd_data_2']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['keyarr5pd_data_2']->value => $_smarty_tpl->tpl_vars['valuearr5pd_data_2']->value) {
$_smarty_tpl->tpl_vars['valuearr5pd_data_2']->do_else = false;
?>
                                <div class="item">
                                    <div class="wrapper">
                                        <div class="row row-0 align-items-center">
                                            <div class="col-auto">
                                                <div class="thumb">
                                                    <figure class="cover">
                                                        <img src="<?php ob_start();
echo $_smarty_tpl->tpl_vars['valuearr5pd_data_2']->value['masterkey'];
$_prefixVariable9 = ob_get_clean();
echo fileinclude($_smarty_tpl->tpl_vars['valuearr5pd_data_2']->value['pic2'],"real",$_prefixVariable9,"link");?>
" alt="<?php echo $_smarty_tpl->tpl_vars['valuearr5pd_data_2']->value['pic'];?>
" class="lazy">
                                                    </figure>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="content">
                                                    <div class="font-body">
                                                        <?php echo $_smarty_tpl->tpl_vars['valuearr5pd_data_2']->value['title'];?>

                                                    </div>
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
                    <div class="col-lg-6">
                        <div class="wg-five-product-slideIII" data-aos="fade-left">
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['arr5pd_data_3']->value, 'valuearr5pd_data_3', false, 'keyarr5pd_data_3');
$_smarty_tpl->tpl_vars['valuearr5pd_data_3']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['keyarr5pd_data_3']->value => $_smarty_tpl->tpl_vars['valuearr5pd_data_3']->value) {
$_smarty_tpl->tpl_vars['valuearr5pd_data_3']->do_else = false;
?>
                                <div class="item">
                                    <div class="thumb">
                                        <figure class="cover">
                                            <img src="<?php ob_start();
echo $_smarty_tpl->tpl_vars['valuearr5pd_data_3']->value['masterkey'];
$_prefixVariable10 = ob_get_clean();
echo fileinclude($_smarty_tpl->tpl_vars['valuearr5pd_data_3']->value['pic'],"real",$_prefixVariable10,"link");?>
" alt="<?php echo $_smarty_tpl->tpl_vars['valuearr5pd_data_3']->value['pic'];?>
" class="lazy">
                                        </figure>
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
    <?php }?>

    <!-- HIDE 23072022 --->

    <?php if ($_smarty_tpl->tpl_vars['callWeblinkRel']->value->_numOfRows >= 1) {?>
        
        <div class="wg-toBnoI">
            <div class="graphic effectI">
                <img src="<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/assets/img/static/graphicVIII.svg" alt="graphic" class="lazy">
            </div>
            <div class="inner">
                <div class="container">
                    <div class="row row-0 height">
                        <div class="col-md-auto">
                            <div class="whead" data-aos="fade-right">
                                <h4 class="font-head">
                                    Our History
                                    <img src="<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/assets/img/icon/toBnoI.svg" alt="OUR HISTORY " class="lazy">
                                </h4>
                                <div class="font-sub">
                                    <?php if ($_smarty_tpl->tpl_vars['langon']->value == 'th') {?>
                                        บริษัท เอสจี แคปปิตอล จำกัด (มหาชน)
                                    <?php } else { ?>
                                        SG Capital Public Company Limited
                                    <?php }?>
                                </div>
                                                            </div>
                        </div>
                        <div class="col-md">
                            <div class="wg-toBnoI-slider" data-aos="fade-left">
                                <div class="slider">
                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['callWeblinkRel']->value, 'valuecallWeblinkRel', false, 'keycallWeblinkRel');
$_smarty_tpl->tpl_vars['valuecallWeblinkRel']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['keycallWeblinkRel']->value => $_smarty_tpl->tpl_vars['valuecallWeblinkRel']->value) {
$_smarty_tpl->tpl_vars['valuecallWeblinkRel']->do_else = false;
?>
                                        <div class="item">
                                            <a <?php if ($_smarty_tpl->tpl_vars['valuecallWeblinkRel']->value['url'] != "#" && $_smarty_tpl->tpl_vars['valuecallWeblinkRel']->value['url'] != '') {?>href="<?php echo $_smarty_tpl->tpl_vars['valuecallWeblinkRel']->value['url'];?>
"<?php if ($_smarty_tpl->tpl_vars['valuecallWeblinkRel']->value['target'] == 2) {?>target="_blank"<?php }
} else { ?>href="javascript:void(0);"<?php }?> class="link">
                                                <div class="wrapper">
                                                    <div class="thumb">
                                                        <figure class="cover">
                                                            <img src="<?php ob_start();
echo $_smarty_tpl->tpl_vars['valuecallWeblinkRel']->value['masterkey'];
$_prefixVariable11 = ob_get_clean();
echo fileinclude($_smarty_tpl->tpl_vars['valuecallWeblinkRel']->value['pic'],"real",$_prefixVariable11,"link");?>
" alt="<?php echo $_smarty_tpl->tpl_vars['valuecallWeblinkRel']->value['pic'];?>
"
                                                                class="lazy">
                                                        </figure>
                                                    </div>
                                                    <div class="content">
                                                        <div class="font-head"><?php echo $_smarty_tpl->tpl_vars['valuecallWeblinkRel']->value['subject'];?>
</div>
                                                        <div class="font-body">
                                                            <?php echo $_smarty_tpl->tpl_vars['valuecallWeblinkRel']->value['title'];?>

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
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php }?>

    <?php if ($_smarty_tpl->tpl_vars['settingWeb']->value['contact']['urlyoutube'] != '' && $_smarty_tpl->tpl_vars['settingWeb']->value['contact']['urlyoutube'] != "#") {?>
        <?php $_smarty_tpl->_assignInScope('myUrlArray', explode("v=",$_smarty_tpl->tpl_vars['settingWeb']->value['contact']['urlyoutube']));?>
        <?php $_smarty_tpl->_assignInScope('myUrlCut', $_smarty_tpl->tpl_vars['myUrlArray']->value[1]);?>
        <?php $_smarty_tpl->_assignInScope('myUrlCutArray', explode("&",$_smarty_tpl->tpl_vars['myUrlCut']->value));?>
        <?php $_smarty_tpl->_assignInScope('myUrlCutAnd', $_smarty_tpl->tpl_vars['myUrlCutArray']->value[0]);?>
        <div class="wg-video">
            <div class="container">
                <div class="iframe-container" data-aos="fade-up">
                    <iframe src="https://www.youtube.com/embed/<?php echo $_smarty_tpl->tpl_vars['myUrlCutAnd']->value;?>
" title="YouTube video player"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen></iframe>
                </div>
            </div>
        </div>
    <?php }?>

    <div class="wg-investor-relations">
        <div class="container">
            <div class="whead">
                <h4 class="font-head" data-aos="fade-down"><?php echo $_smarty_tpl->tpl_vars['lang']->value['menu']['investor'];?>
</h4>
            </div>
            <div class="row row-0">
                <div class="col-xl">
                    <div class="box-L">
                        <div class="font-sub" data-aos="fade-down"><?php echo $_smarty_tpl->tpl_vars['lang']->value['home']['inves:important'];?>
</div>
                        <div class="font-body" data-aos="fade-up">
                            <?php echo $_smarty_tpl->tpl_vars['lang']->value['home']['inves:detail'];?>

                        </div>
                        <div class="investor-information" data-aos="fade-up">
                            <div class="box">
                                <div class="font-body"><?php echo $_smarty_tpl->tpl_vars['lang']->value['investor']['stock'];?>
</div>
                                <div class="stock-ir name title">-</div>
                            </div>
                            <div class="box">
                                <div class="font-body"><?php echo $_smarty_tpl->tpl_vars['lang']->value['investor']['lastprice'];?>
</div>
                                <div class="stock-ir price title">0.00 THB</div>
                            </div>
                            <div class="box -auto">
                                <div class="font-body"><?php echo $_smarty_tpl->tpl_vars['lang']->value['investor']['change'];?>
 (%)</div>
                                <div class="title">
                                    <!-- -up / -down -->
                                    <div class="stock-ir icon -up" style="display: none;"></div>
                                    <span class="stock-ir change">-</span>
                                </div>
                            </div>
                        </div>
                        <?php if ($_smarty_tpl->tpl_vars['callIrnewsDownload']->value->_numOfRows >= 1) {?>
                            <div class="font-sub" data-aos="fade-down"><?php echo $_smarty_tpl->tpl_vars['lang']->value['investor']['stock:market'];?>
</div>
                            <div class="market-news" data-aos="fade-up">
                                <ul class="item-list">
                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['callIrnewsDownload']->value, 'valuecallIrnewsDownload', false, 'keycallIrnewsDownload');
$_smarty_tpl->tpl_vars['valuecallIrnewsDownload']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['keycallIrnewsDownload']->value => $_smarty_tpl->tpl_vars['valuecallIrnewsDownload']->value) {
$_smarty_tpl->tpl_vars['valuecallIrnewsDownload']->do_else = false;
?>
                                        <?php  $_prefixVariable12 = $_smarty_tpl->tpl_vars['callSetWebsite']->value;
$_smarty_tpl->_assignInScope('Call_File', $_prefixVariable12::Call_File($_smarty_tpl->tpl_vars['valuecallIrnewsDownload']->value['id']));?>
                                        <li>
                                            <?php if ($_smarty_tpl->tpl_vars['Call_File']->value->_numOfRows >= 1) {?>
                                                <a href="<?php echo $_smarty_tpl->tpl_vars['ul']->value;?>
/download/<?php ob_start();
echo $_smarty_tpl->tpl_vars['valuecallIrnewsDownload']->value['masterkey'];
$_prefixVariable13 = ob_get_clean();
echo fileinclude($_smarty_tpl->tpl_vars['Call_File']->value->fields['filename'],'file',$_prefixVariable13,'download');?>
&n=<?php echo $_smarty_tpl->tpl_vars['Call_File']->value->fields['name'];?>
&t=<?php echo encodeStr('md_cmf');?>
" class="link">
                                            <?php } else { ?>
                                                <a href="javascript:void(0);" class="link">
                                            <?php }?>
                                                <div class="row row-0 align-items-center">
                                                    <div class="col-md-auto date-box">
                                                        <div class="inner">
                                                            <div class="date">
                                                                <div class="icon"></div>
                                                                <?php ob_start();
echo $_smarty_tpl->tpl_vars['langon']->value;
$_prefixVariable14 = ob_get_clean();
echo DateThai($_smarty_tpl->tpl_vars['valuecallIrnewsDownload']->value['credate'],'23',$_prefixVariable14,'shot3');?>

                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md">
                                                        <div class="text-box">
                                                            <div class="font-body desc">
                                                                <?php echo $_smarty_tpl->tpl_vars['valuecallIrnewsDownload']->value['subject'];?>

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
                        <?php }?>
                        <div class="action" data-aos="fade-left">
                            <a href="<?php echo $_smarty_tpl->tpl_vars['ul']->value;?>
/investor/<?php echo $_smarty_tpl->tpl_vars['valuecallIrnewsDownload']->value['masterkey'];?>
" class="btn btn-primary-outline">
                                <?php echo $_smarty_tpl->tpl_vars['lang']->value['system']['viewsall'];?>

                                <span class="feather icon icon-arrow-right"></span>
                            </a>
                        </div>
                    </div>
                </div>
                <?php if ($_smarty_tpl->tpl_vars['callIrdownload']->value->_numOfRows >= 1) {?>
                    <div class="col-xl-auto">
                        <div class="box-R">
                            <div class="font-sub" data-aos="fade-down"><?php echo $_smarty_tpl->tpl_vars['lang']->value['investor']['download'];?>
</div>
                            <div class="download-list">
                                <ul class="item-list" data-aos="fade-up">
                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['callIrdownload']->value, 'valuecallIrdownload', false, 'keycallIrdownload');
$_smarty_tpl->tpl_vars['valuecallIrdownload']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['keycallIrdownload']->value => $_smarty_tpl->tpl_vars['valuecallIrdownload']->value) {
$_smarty_tpl->tpl_vars['valuecallIrdownload']->do_else = false;
?>
                                        <?php  $_prefixVariable15 = $_smarty_tpl->tpl_vars['callSetWebsite']->value;
$_smarty_tpl->_assignInScope('Call_File', $_prefixVariable15::Call_File($_smarty_tpl->tpl_vars['valuecallIrdownload']->value['id']));?>
                                        <li>
                                            <?php if ($_smarty_tpl->tpl_vars['Call_File']->value->_numOfRows >= 1) {?>
                                                <a href="<?php echo $_smarty_tpl->tpl_vars['ul']->value;?>
/download/<?php ob_start();
echo $_smarty_tpl->tpl_vars['valuecallIrdownload']->value['masterkey'];
$_prefixVariable16 = ob_get_clean();
echo fileinclude($_smarty_tpl->tpl_vars['Call_File']->value->fields['filename'],'file',$_prefixVariable16,'download');?>
&n=<?php echo $_smarty_tpl->tpl_vars['Call_File']->value->fields['name'];?>
&t=<?php echo encodeStr('md_cmf');?>
" class="link">
                                            <?php } else { ?>
                                                <a href="javascript:void(0);" class="link">
                                            <?php }?>
                                                <div class="row row-0 align-items-center height">
                                                    <div class="col-auto">
                                                        <div class="file-icon">
                                                            <span class="fa fa-file"></span>
                                                        </div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="content">
                                                            <div class="font-body desc">
                                                                <?php echo $_smarty_tpl->tpl_vars['valuecallIrdownload']->value['subject'];?>

                                                            </div>
                                                        </div>
                                                    </div>
                                                    <?php if ($_smarty_tpl->tpl_vars['Call_File']->value->_numOfRows >= 1) {?>
                                                        <div class="col-auto">
                                                            <div class="download-icon">
                                                                <span class="feather icon-download"></span>
                                                            </div>
                                                        </div>
                                                    <?php }?>
                                                </div>
                                            </a>
                                        </li>
                                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                </ul>
                                <div class="action" data-aos="fade-right">
                                    <a href="<?php echo $_smarty_tpl->tpl_vars['ul']->value;?>
/investor/<?php echo $_smarty_tpl->tpl_vars['valuecallIrdownload']->value['masterkey'];?>
" class="btn btn-primary-outline">
                                        <?php echo $_smarty_tpl->tpl_vars['lang']->value['system']['viewsall'];?>

                                        <span class="feather icon icon-arrow-right"></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php }?>
            </div>
        </div>
    </div>

    <div class="wg-more-link">
        <ul class="item-list">
            <li data-aos="fade-up">
                <a href="<?php echo $_smarty_tpl->tpl_vars['ul']->value;?>
/investor/ir_cg" class="link">
                    <div class="thumb">
                        <figure class="cover">
                            <img src="<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/assets/img/upload/more-link01.jpg" alt="<?php echo $_smarty_tpl->tpl_vars['lang']->value['home']['corporate'];?>
" class="lazy">
                        </figure>
                    </div>
                    <div class="content">
                        <div class="font-head"><?php echo $_smarty_tpl->tpl_vars['lang']->value['home']['corporate'];?>
</div>
                        <div class="action">
                            <div class="btn">
                                <?php echo $_smarty_tpl->tpl_vars['lang']->value['system']['viewsall'];?>

                                <span class="feather icon icon-arrow-right"></span>
                            </div>
                        </div>
                    </div>
                </a>
            </li>
            <li data-aos="fade-up">
                <a href="<?php echo $_smarty_tpl->tpl_vars['ul']->value;?>
/about/abdax" class="link">
                    <div class="thumb">
                        <figure class="cover">
                            <img src="<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/assets/img/upload/more-link02.jpg" alt="<?php echo $_smarty_tpl->tpl_vars['lang']->value['home']['board'];?>
" class="lazy">
                        </figure>
                    </div>
                    <div class="content">
                        <div class="font-head"><?php echo $_smarty_tpl->tpl_vars['lang']->value['home']['board'];?>
</div>
                        <div class="action">
                            <div class="btn">
                                <?php echo $_smarty_tpl->tpl_vars['lang']->value['system']['viewsall'];?>

                                <span class="feather icon icon-arrow-right"></span>
                            </div>
                        </div>
                    </div>
                </a>
            </li>
            <li data-aos="fade-up">
                <a href="<?php echo $_smarty_tpl->tpl_vars['ul']->value;?>
/investor/ir_ini/rQRWewEb3Q" class="link">
                    <div class="thumb">
                        <figure class="cover">
                            <img src="<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/assets/img/upload/more-link03.jpg" alt="<?php echo $_smarty_tpl->tpl_vars['lang']->value['home']['listofmajor'];?>
" class="lazy">
                        </figure>
                    </div>
                    <div class="content">
                        <div class="font-head"><?php echo $_smarty_tpl->tpl_vars['lang']->value['home']['listofmajor'];?>
</div>
                        <div class="action">
                            <div class="btn">
                                <?php echo $_smarty_tpl->tpl_vars['lang']->value['system']['viewsall'];?>

                                <span class="feather icon icon-arrow-right"></span>
                            </div>
                        </div>
                    </div>
                </a>
            </li>
        </ul>
    </div>

    <?php if ($_smarty_tpl->tpl_vars['callNews']->value->_numOfRows >= 1) {?>
        <div class="wg-news">
            <div class="graphic effectII">
                <svg xmlns="http://www.w3.org/2000/svg" width="1599.905" height="105.086" viewBox="0 0 1599.905 105.086">
                    <g id="Group_16" data-name="Group 16" transform="translate(-240.794 -444.707)">
                        <path id="Path_31" data-name="Path 31" d="M0,0H1523.436" transform="translate(317.263 549)"
                            fill="none" stroke="#707070" stroke-width="1" opacity="0.16" />
                        <line id="Line_136" data-name="Line 136" x1="75.564" y1="104.5" transform="translate(241.199 445)"
                            fill="none" stroke="#707070" stroke-width="1" opacity="0.24" />
                    </g>
                </svg>
            </div>
            <div class="graphicII effectI">
                <img src="<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/assets/img/static/graphicIV.svg" alt="graphic" class="lazy">
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-xl-5">
                        <div class="logo" data-aos="fade-right">
                            <img src="<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/assets/img/static/brand-lg.png" alt="sg capital" class="lazy">
                        </div>
                        <div class="whead">
                            <h4 class="font-head" data-aos="fade-down"><?php echo $_smarty_tpl->tpl_vars['lang']->value['menu']['news'];?>
</h4>
                            <div class="font-body" data-aos="fade-up">
                                <?php echo $_smarty_tpl->tpl_vars['lang']->value['home']['newslastest'];?>

                            </div>
                            <div class="action" data-aos="fade-right">
                                <a href="<?php echo $_smarty_tpl->tpl_vars['ul']->value;?>
/news" class="btn btn-primary-outline">
                                    <?php echo $_smarty_tpl->tpl_vars['lang']->value['system']['viewsall'];?>

                                    <span class="feather icon icon-arrow-right"></span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-7">
                        <div class="wg-news-slider" data-aos="fade-left">
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['callNews']->value, 'valuecallNews', false, 'keycallNews');
$_smarty_tpl->tpl_vars['valuecallNews']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['keycallNews']->value => $_smarty_tpl->tpl_vars['valuecallNews']->value) {
$_smarty_tpl->tpl_vars['valuecallNews']->do_else = false;
?>
                                <div class="item news-default">
                                    <div class="wrapper">
                                        <a href="<?php echo $_smarty_tpl->tpl_vars['ul']->value;?>
/news/detail/<?php echo encodeStr($_smarty_tpl->tpl_vars['valuecallNews']->value['id']);?>
" class="link">
                                            <div class="thumb">
                                                <figure class="cover">
                                                    <img src="<?php ob_start();
echo $_smarty_tpl->tpl_vars['valuecallNews']->value['masterkey'];
$_prefixVariable17 = ob_get_clean();
echo fileinclude($_smarty_tpl->tpl_vars['valuecallNews']->value['pic'],"real",$_prefixVariable17,"link");?>
" alt="<?php echo $_smarty_tpl->tpl_vars['valuecallNews']->value['pic'];?>
" class="lazy">
                                                </figure>
                                            </div>
                                            <div class="content">
                                                <div class="title">
                                                    <?php echo $_smarty_tpl->tpl_vars['valuecallNews']->value['subject'];?>

                                                </div>
                                                <div class="font-body">
                                                    <?php echo $_smarty_tpl->tpl_vars['valuecallNews']->value['title'];?>

                                                </div>
                                                <div class="number"><?php echo is_txtNumber($_smarty_tpl->tpl_vars['keycallNews']->value);?>
</div>
                                                <div class="icon-text">
                                                    <span class="feather icon icon-arrow-right"></span>
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
            </div>
        </div>
    <?php }?>

    <?php if ($_smarty_tpl->tpl_vars['callCareerDetail']->value->_numOfRows >= 1) {?>
        <div class="wg-career">
            <div class="graphic effectI">
                <svg xmlns="http://www.w3.org/2000/svg" width="1517.196" height="549.999" viewBox="0 0 1517.196 549.999">
                    <g id="Group_17" data-name="Group 17" transform="translate(-432.804 -6299.75)">
                        <path id="Path_30" data-name="Path 30" d="M0,0H1199.5" transform="translate(750.5 6300.5)"
                            fill="none" stroke="#707070" stroke-width="1" opacity="0.16" />
                        <line id="Line_125" data-name="Line 125" x1="316.763" y2="549.5" transform="translate(433.237 6300)"
                            fill="none" stroke="#707070" stroke-width="1" opacity="0.24" />
                    </g>
                </svg>
            </div>
            <div class="graphicII effectII">
                <img src="<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/assets/img/static/graphicIII.svg" alt="graphic" class="lazy">
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-xl-5">
                        <div class="thumb" data-aos="fade-right">
                            <img src="<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/assets/img/static/man-career.png" alt="career" class="lazy">
                        </div>
                    </div>
                    <div class="col-xl-7">
                        <div class="whead">
                            <h4 class="font-head" data-aos="fade-down"><?php echo $_smarty_tpl->tpl_vars['lang']->value['menu']['career'];?>
</h4>
                            <div class="font-body" data-aos="fade-up">
                                <?php echo $_smarty_tpl->tpl_vars['lang']->value['home']['career:detail'];?>

                            </div>
                            <div class="action" data-aos="fade-left">
                                <a href="<?php echo $_smarty_tpl->tpl_vars['ul']->value;?>
/career" class="btn btn-primary-outline">
                                    <?php echo $_smarty_tpl->tpl_vars['lang']->value['system']['viewsall'];?>

                                    <span class="feather icon icon-arrow-right"></span>
                                </a>
                            </div>
                        </div>
                        <div class="content">
                            <ul class="item-list">
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['callCareerDetail']->value, 'valuecallCareerDetail', false, 'keycallCareerDetail');
$_smarty_tpl->tpl_vars['valuecallCareerDetail']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['keycallCareerDetail']->value => $_smarty_tpl->tpl_vars['valuecallCareerDetail']->value) {
$_smarty_tpl->tpl_vars['valuecallCareerDetail']->do_else = false;
?>
                                    <li data-aos="fade-up">
                                        <a href="<?php echo $_smarty_tpl->tpl_vars['ul']->value;?>
/career/detail/<?php echo encodeStr($_smarty_tpl->tpl_vars['valuecallCareerDetail']->value['id']);?>
" class="link">
                                            <div class="row row-0 align-items-center">
                                                <div class="col-md-auto date-box">
                                                    <div class="inner">
                                                        <div class="date">
                                                            <div class="icon"></div>
                                                            <?php ob_start();
echo $_smarty_tpl->tpl_vars['langon']->value;
$_prefixVariable18 = ob_get_clean();
echo DateThai($_smarty_tpl->tpl_vars['valuecallCareerDetail']->value['credate'],'23',$_prefixVariable18,'shot3');?>

                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md">
                                                    <div class="text-box">
                                                        <div class="font-body title">
                                                            <?php echo $_smarty_tpl->tpl_vars['valuecallCareerDetail']->value['subject'];?>

                                                        </div>
                                                        <div class="font-body desc">
                                                            <?php echo $_smarty_tpl->tpl_vars['valuecallCareerDetail']->value['title'];?>

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
                </div>
            </div>
        </div>
    <?php }?>

</section>
<?php }
}

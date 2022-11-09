<?php
/* Smarty version 4.0.0, created on 2022-11-08 17:24:47
  from '/var/www/html/front/controller/script/home/template/theme-3/section-news.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.0',
  'unifunc' => 'content_636a2e6fa2b9f7_35240533',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2c361ed7eeb3cbf17d3d5f1f374f6c5c78ae5764' => 
    array (
      0 => '/var/www/html/front/controller/script/home/template/theme-3/section-news.tpl',
      1 => 1667900202,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_636a2e6fa2b9f7_35240533 (Smarty_Internal_Template $_smarty_tpl) {
if (count($_smarty_tpl->tpl_vars['arrNewsHome']->value) > 0) {?>
    <div class="update-block">
        <div class="default-header-block">
            <div class="h-title">
                GIT UPDATE
            </div>
            <a href="<?php echo $_smarty_tpl->tpl_vars['ul']->value;?>
/about/<?php echo $_smarty_tpl->tpl_vars['about_newsmenuid']->value;?>
" class="link" title="<?php echo $_smarty_tpl->tpl_vars['lang']->value['system']['viewsall'];?>
">
                <?php echo $_smarty_tpl->tpl_vars['lang']->value['system']['viewsall'];?>

            </a>
        </div>
        <ul class="nav nav-tabs" id="updateTab" role="tablist">
            <?php $_smarty_tpl->_assignInScope('newscount', 0);?>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['arrNewsHome']->value, 'valuearrNewsHome', false, 'keyarrNewsHome');
$_smarty_tpl->tpl_vars['valuearrNewsHome']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['keyarrNewsHome']->value => $_smarty_tpl->tpl_vars['valuearrNewsHome']->value) {
$_smarty_tpl->tpl_vars['valuearrNewsHome']->do_else = false;
?>
                <li class="nav-item">
                    <a class="nav-link <?php if ($_smarty_tpl->tpl_vars['newscount']->value == 0) {?>active<?php }?>" id="news-tab-<?php echo $_smarty_tpl->tpl_vars['keyarrNewsHome']->value;?>
" data-toggle="tab" href="#news-<?php echo $_smarty_tpl->tpl_vars['keyarrNewsHome']->value;?>
" role="tab" aria-controls="news-<?php echo $_smarty_tpl->tpl_vars['keyarrNewsHome']->value;?>
" aria-selected="<?php if ($_smarty_tpl->tpl_vars['newscount']->value == 0) {?>true<?php } else { ?>false<?php }?>"><?php echo $_smarty_tpl->tpl_vars['valuearrNewsHome']->value['group']['subject'];?>
</a>
                </li>
            <?php $_smarty_tpl->_assignInScope('newscount', $_smarty_tpl->tpl_vars['newscount']->value+1);?>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </ul>
        <div class="tab-content" id="updateTabContent">
            <?php $_smarty_tpl->_assignInScope('newscount', 0);?>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['arrNewsHome']->value, 'valuearrNewsHome', false, 'keyarrNewsHome');
$_smarty_tpl->tpl_vars['valuearrNewsHome']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['keyarrNewsHome']->value => $_smarty_tpl->tpl_vars['valuearrNewsHome']->value) {
$_smarty_tpl->tpl_vars['valuearrNewsHome']->do_else = false;
?>
                <div class="tab-pane fade <?php if ($_smarty_tpl->tpl_vars['newscount']->value == 0) {?>show active<?php }?>" id="news-<?php echo $_smarty_tpl->tpl_vars['keyarrNewsHome']->value;?>
" role="tabpanel" aria-labelledby="news-tab-<?php echo $_smarty_tpl->tpl_vars['keyarrNewsHome']->value;?>
">
                    <div class="slider default-slider">
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['valuearrNewsHome']->value['list'], 'valuearrNewsSub', false, 'keyNewsSub');
$_smarty_tpl->tpl_vars['valuearrNewsSub']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['keyNewsSub']->value => $_smarty_tpl->tpl_vars['valuearrNewsSub']->value) {
$_smarty_tpl->tpl_vars['valuearrNewsSub']->do_else = false;
?>
                            <div class="item">
                                <a class="link" href="<?php echo $_smarty_tpl->tpl_vars['ul']->value;?>
/about/<?php echo $_smarty_tpl->tpl_vars['valuearrNewsSub']->value['menuid'];?>
/<?php echo $_smarty_tpl->tpl_vars['valuearrNewsSub']->value['gid'];?>
/detail/<?php echo $_smarty_tpl->tpl_vars['valuearrNewsSub']->value['id'];?>
" title="ศูนย์ข้อมูลอัญมณีและเครื่องประดับ">
                                    <div class="row no-gutters">
                                        <div class="col">
                                            <div class="thumbnail">
                                                <figure class="cover">
                                                    <img src="<?php ob_start();
echo $_smarty_tpl->tpl_vars['valuearrNewsSub']->value['masterkey'];
$_prefixVariable5 = ob_get_clean();
echo fileinclude($_smarty_tpl->tpl_vars['valuearrNewsSub']->value['pic'],"real",$_prefixVariable5,"link");?>
" alt="<?php echo $_smarty_tpl->tpl_vars['valuearrNewsSub']->value['subject'];?>
">
                                                </figure>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row no-gutters">
                                        <div class="col">
                                            <div class="date text-limit">
                                                <?php ob_start();
echo $_smarty_tpl->tpl_vars['langon']->value;
$_prefixVariable6 = ob_get_clean();
echo DateThai($_smarty_tpl->tpl_vars['valuearrNewsSub']->value['credate'],'1',$_prefixVariable6,'full');?>

                                            </div>
                                            <div class="title text-limit -x3">
                                                <?php echo $_smarty_tpl->tpl_vars['valuearrNewsSub']->value['subject'];?>

                                            </div>
                                            <button type="button" class="btn btn-primary"><?php echo $_smarty_tpl->tpl_vars['lang']->value['system']['viewmore'];?>
</button>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </div>
                </div>
                <?php $_smarty_tpl->_assignInScope('newscount', $_smarty_tpl->tpl_vars['newscount']->value+1);?>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </div>
    </div>
<?php }
}
}

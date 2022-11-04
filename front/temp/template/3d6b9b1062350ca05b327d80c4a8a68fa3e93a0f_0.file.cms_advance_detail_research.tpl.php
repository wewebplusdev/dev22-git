<?php
/* Smarty version 4.0.0, created on 2022-11-04 13:19:19
  from '/var/www/html/front/template/default/_component/cms_advance_detail_research.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.0',
  'unifunc' => 'content_6364aee7a7c172_66278242',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3d6b9b1062350ca05b327d80c4a8a68fa3e93a0f' => 
    array (
      0 => '/var/www/html/front/template/default/_component/cms_advance_detail_research.tpl',
      1 => 1667542757,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6364aee7a7c172_66278242 (Smarty_Internal_Template $_smarty_tpl) {
?><section class="site-container">
    <div class="default-header">
        <div class="top-graphic text-dark">
            <figure class="cover">
                <img src="<?php echo $_smarty_tpl->tpl_vars['template']->value;
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
    <div class="default-nav">
        <div class="nav-slider-block">
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
        </div>
    </div>
    <div class="default-page research-page">
        <div class="container">
        <?php if ($_smarty_tpl->tpl_vars['callCMS']->value->fields['htmlfilename'] != '') {?>
            <div class="editor-content">
              <!-- CK Editor -->
              <?php echo callHtml(fileinclude($_smarty_tpl->tpl_vars['callCMS']->value->fields['htmlfilename'],"html",$_smarty_tpl->tpl_vars['callCMS']->value->fields['masterkey']));?>

              <!-- CK Editor -->
            </div>
          <?php }?>

        </div>
    </div>
</section><?php }
}

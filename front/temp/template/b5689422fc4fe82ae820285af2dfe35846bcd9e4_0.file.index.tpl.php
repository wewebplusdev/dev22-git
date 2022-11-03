<?php
/* Smarty version 4.0.0, created on 2022-11-02 14:29:35
  from '/var/www/html/front/controller/script/intro/template/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.0',
  'unifunc' => 'content_63621c5fb04529_54193949',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b5689422fc4fe82ae820285af2dfe35846bcd9e4' => 
    array (
      0 => '/var/www/html/front/controller/script/intro/template/index.tpl',
      1 => 1667374172,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63621c5fb04529_54193949 (Smarty_Internal_Template $_smarty_tpl) {
?><section class="site-container">

<div class="intro-page">
    <div class="intro-slider">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['callintro']->value, 'valuecallintro', false, 'keycallintro');
$_smarty_tpl->tpl_vars['valuecallintro']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['keycallintro']->value => $_smarty_tpl->tpl_vars['valuecallintro']->value) {
$_smarty_tpl->tpl_vars['valuecallintro']->do_else = false;
?>
          <?php if ($_smarty_tpl->tpl_vars['valuecallintro']->value['typevdo'] == "file") {?>
            <div class="item">
              <div class="video-container">
                  <video class="slide-video slide-media" loop="" muted="" autoplay="" controls="" preload="metadata" poster="">
                      <source src="<?php ob_start();
echo $_smarty_tpl->tpl_vars['valuecallintro']->value['masterkey'];
$_prefixVariable1 = ob_get_clean();
echo fileinclude($_smarty_tpl->tpl_vars['valuecallintro']->value['filevdo'],'vdo',$_prefixVariable1,'vdo');?>
" type="video/mp4">
                  </video>
              </div>
            </div>
          <?php } else { ?>
            <div class="item">
                <div class="cover">
                    <img src="<?php ob_start();
echo $_smarty_tpl->tpl_vars['valuecallintro']->value['masterkey'];
$_prefixVariable2 = ob_get_clean();
echo fileinclude($_smarty_tpl->tpl_vars['valuecallintro']->value['pic'],"real",$_prefixVariable2,"link");?>
" alt="<?php echo $_smarty_tpl->tpl_vars['valuecallintro']->value['subject'];?>
" class="lazy loading img-cover" data-was-processed="true">
                </div>
            </div>
          <?php }?>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </div>
    <div class="intro-content">
        <div class="container">
            <div class="row row-0 height">
                <div class="col-md">
                    <div class="logo">
                        <div class="symbol">
                            <img src="<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/assets/img/static/git-brand.svg" alt="Gem and Jewelry Institute of Thailand" class="lazy loading" data-was-processed="true">
                        </div>
                    </div>
                </div>
                <div class="col-md-auto">
                    <div class="action">
                        <a href="<?php echo $_smarty_tpl->tpl_vars['ul']->value;?>
/home" class="btn btn-border-light">เข้าสู่เว็บไซต์</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

</section><?php }
}

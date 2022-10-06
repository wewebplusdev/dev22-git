<?php
/* Smarty version 4.0.0, created on 2022-10-06 17:17:23
  from '/var/www/html/front/template/default/_component/map-graphic.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.0',
  'unifunc' => 'content_633eab33e27302_45248007',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fc786c148d871bae86138da39099e00833b19dca' => 
    array (
      0 => '/var/www/html/front/template/default/_component/map-graphic.tpl',
      1 => 1665051441,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_633eab33e27302_45248007 (Smarty_Internal_Template $_smarty_tpl) {
?><section class="site-container map-page" data-page="graphic-map">

  <nav class="nav-map">
    <ul class="nav-list">
      <li class="active">
        <a href="<?php echo $_smarty_tpl->tpl_vars['ul']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['menuActive']->value;?>
/graphic-map" class="btn btn-border-primary">
          <?php echo $_smarty_tpl->tpl_vars['lang']->value['contact']['graphic-map'];?>

        </a>
      </li>
      <li>
        <a href="<?php echo $_smarty_tpl->tpl_vars['ul']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['menuActive']->value;?>
/google-map" class="btn btn-border-primary">
          <?php echo $_smarty_tpl->tpl_vars['lang']->value['contact']['google-map'];?>

        </a>
      </li>
    </ul>
  </nav>

  <div class="maps-block">
    <div class="graphic-map">
      <figure class="contain">
        <img src="<?php echo fileinclude($_smarty_tpl->tpl_vars['settingWeb']->value['addresspic'],"real","set","link");?>
" alt="<?php echo $_smarty_tpl->tpl_vars['settingWeb']->value['addresspic'];?>
">
      </figure>
    </div>
  </div>

</section><?php }
}

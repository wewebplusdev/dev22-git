<?php
/* Smarty version 4.0.0, created on 2022-11-09 11:13:08
  from '/var/www/html/front/template/default/_component/map-google.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.0',
  'unifunc' => 'content_636b28d49c6163_40341472',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1bab99f079c30e05c3426e429b0b7722022c9cf0' => 
    array (
      0 => '/var/www/html/front/template/default/_component/map-google.tpl',
      1 => 1665051431,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_636b28d49c6163_40341472 (Smarty_Internal_Template $_smarty_tpl) {
?><section class="site-container map-page" data-page="google-map">

  <nav class="nav-map">
    <ul class="nav-list">
      <li class="active">
        <a href="<?php echo $_smarty_tpl->tpl_vars['ul']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['menuActive']->value;?>
/google-map" class="btn btn-border-primary">
          <?php echo $_smarty_tpl->tpl_vars['lang']->value['contact']['google-map'];?>

        </a>
      </li>
      <li>
        <a href="<?php echo $_smarty_tpl->tpl_vars['ul']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['menuActive']->value;?>
/graphic-map" class="btn btn-border-primary">
          <?php echo $_smarty_tpl->tpl_vars['lang']->value['contact']['graphic-map'];?>

        </a>
      </li>
    </ul>
  </nav>

  <div class="maps-block">
    <div class="google-map">
      <div class="iframe-container">
        <iframe class="responsive-iframe"
          src="https://maps.google.com/maps?q=<?php echo $_smarty_tpl->tpl_vars['settingWeb']->value['contact']['glati'];?>
,<?php echo $_smarty_tpl->tpl_vars['settingWeb']->value['contact']['glongti'];?>
&hl=es;z=20&amp;output=embed"
          style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>
    </div>
  </div>

</section><?php }
}

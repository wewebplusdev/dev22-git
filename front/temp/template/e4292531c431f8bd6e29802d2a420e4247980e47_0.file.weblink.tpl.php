<?php
/* Smarty version 4.0.0, created on 2022-10-05 17:11:36
  from '/var/www/html/front/template/default/_component/weblink.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.0',
  'unifunc' => 'content_633d58586cc667_16009244',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e4292531c431f8bd6e29802d2a420e4247980e47' => 
    array (
      0 => '/var/www/html/front/template/default/_component/weblink.tpl',
      1 => 1664964285,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_633d58586cc667_16009244 (Smarty_Internal_Template $_smarty_tpl) {
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
  <div class="default-page online-services">
    <div class="container">
      <div class="h-title">
        <?php echo $_smarty_tpl->tpl_vars['settingModulus']->value['breadcrumb'];?>

      </div>
      <div class="online-services-block">
        <ul class="item-list">
          <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['callWel']->value, 'valuecallWel', false, 'keycallWel');
$_smarty_tpl->tpl_vars['valuecallWel']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['keycallWel']->value => $_smarty_tpl->tpl_vars['valuecallWel']->value) {
$_smarty_tpl->tpl_vars['valuecallWel']->do_else = false;
?>
            <li>
              <a <?php if ($_smarty_tpl->tpl_vars['valuecallWel']->value['url'] != "#" && $_smarty_tpl->tpl_vars['valuecallWel']->value['url'] != '') {?>href="<?php echo $_smarty_tpl->tpl_vars['valuecallWel']->value['url'];?>
"<?php } else { ?>href="javascript:void(0);"<?php }?> <?php if ($_smarty_tpl->tpl_vars['valuecallWel']->value['target'] == 2) {?>target="_blank"<?php }?> class="link" title="SAMPLE TRACKING">
                <figure class="cover">
                  <img src="<?php ob_start();
echo $_smarty_tpl->tpl_vars['valuecallWel']->value['masterkey'];
$_prefixVariable1 = ob_get_clean();
echo fileinclude($_smarty_tpl->tpl_vars['valuecallWel']->value['pic'],"real",$_prefixVariable1,"linkx");?>
" alt="<?php echo $_smarty_tpl->tpl_vars['valuecallWel']->value['subject'];?>
">
                </figure>
                <div class="inner">
                  <!-- <div class="wrapper"> -->
                  <div class="title text-uppercase text-limit -x2">
                    <?php echo $_smarty_tpl->tpl_vars['valuecallWel']->value['title'];?>

                  </div>
  
                  <div class="subtitle">
                    <?php echo $_smarty_tpl->tpl_vars['valuecallWel']->value['descript'];?>

                  </div>
                  <!-- </div> -->
                </div>
                <div class="text-orient text-limit">
                  <?php echo $_smarty_tpl->tpl_vars['valuecallWel']->value['subject'];?>

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

</section><?php }
}

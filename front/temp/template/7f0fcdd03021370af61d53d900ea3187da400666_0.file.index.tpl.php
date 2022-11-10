<?php
/* Smarty version 4.0.0, created on 2022-11-09 17:57:19
  from '/var/www/html/front/controller/script/404/template/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.0',
  'unifunc' => 'content_636b878f70f171_48716951',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7f0fcdd03021370af61d53d900ea3187da400666' => 
    array (
      0 => '/var/www/html/front/controller/script/404/template/index.tpl',
      1 => 1667960081,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_636b878f70f171_48716951 (Smarty_Internal_Template $_smarty_tpl) {
?><section class="site-container">

<div class="error-page">
    <div class="container">
        <div class="error-block">
            <div class="row no-gutters">
                <div class="col-12">
                    <div class="graphic">
                        <img src="<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/assets/img/background/error-404.svg" alt="error 404">
                    </div>
                </div>
                <div class="col-12">
                    <div class="h-title">
                        404
                    </div>
                    <div class="title">
                        <?php echo $_smarty_tpl->tpl_vars['lang']->value['404']['title'];?>

                    </div>
                    <div class="desc"><?php echo $_smarty_tpl->tpl_vars['lang']->value['404']['des'];?>
</div>
                    <a href="<?php echo $_smarty_tpl->tpl_vars['ul']->value;?>
/home" class="btn btn-lg btn-primary" title="<?php echo $_smarty_tpl->tpl_vars['lang']->value['404']['back'];?>
"><?php echo $_smarty_tpl->tpl_vars['lang']->value['404']['back'];?>
</a>
                </div>

            </div>
        </div>
    </div>
</div>

</section><?php }
}

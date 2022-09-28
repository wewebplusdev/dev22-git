<?php
/* Smarty version 4.0.0, created on 2022-09-28 16:18:43
  from '/var/www/html/front/template/default/inc/inc-metatag.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.0',
  'unifunc' => 'content_63341173c4b089_89446158',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '25c2c8cf17ab5a1ebc3c01443357e2a40a063b5e' => 
    array (
      0 => '/var/www/html/front/template/default/inc/inc-metatag.tpl',
      1 => 1664356628,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63341173c4b089_89446158 (Smarty_Internal_Template $_smarty_tpl) {
?><base href="<?php echo $_smarty_tpl->tpl_vars['base']->value;?>
">
<title><?php echo (($tmp = $_smarty_tpl->tpl_vars['seo']->value['title'] ?? null)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['settingWeb']->value['metatitle'] ?? null : $tmp);?>
</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1">
<meta name="keywords" content="<?php echo (($tmp = $_smarty_tpl->tpl_vars['seo']->value['keyword'] ?? null)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['settingWeb']->value['keywords'] ?? null : $tmp);?>
">
<meta name="description" content="<?php echo (($tmp = $_smarty_tpl->tpl_vars['seo']->value['desc'] ?? null)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['settingWeb']->value['description'] ?? null : $tmp);?>
">
<meta name="author" content="">
<meta name="HandheldFriendly" content="true">
<meta name="format-detection" content="telephone=no">
<meta name="icon_web" content="<?php echo $_smarty_tpl->tpl_vars['icon_web']->value;?>
">

<!-- META OPEN GRAPH (FB) -->
<?php $_smarty_tpl->_assignInScope('valLinkImgSeo', ((string)$_smarty_tpl->tpl_vars['template']->value)."/assets/img/static/brand.png");?>
<meta property="og:type" content="website">
<meta property="og:url" content="<?php echo $_smarty_tpl->tpl_vars['fullurl']->value;?>
">
<meta property="og:title" content="<?php echo (($tmp = $_smarty_tpl->tpl_vars['valSeoTitle']->value ?? null)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['settingWeb']->value['metatitle'] ?? null : $tmp);?>
">
<meta property="og:description" content="<?php echo (($tmp = $_smarty_tpl->tpl_vars['seo']->value['desc'] ?? null)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['settingWeb']->value['description'] ?? null : $tmp);?>
">
<meta property="og:image" content="<?php echo (($tmp = $_smarty_tpl->tpl_vars['valSeoImages']->value ?? null)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['valLinkImgSeo']->value ?? null : $tmp);?>
">
<meta property="og:site_name" content="<?php echo (($tmp = $_smarty_tpl->tpl_vars['valSeoTitle']->value ?? null)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['settingWeb']->value['metatitle'] ?? null : $tmp);?>
">
<meta property="og:locale" content="">
<meta property="og:locale:alternate" content="">
<link rel="image_src" href="<?php echo (($tmp = $_smarty_tpl->tpl_vars['valSeoImages']->value ?? null)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['valLinkImgSeo']->value ?? null : $tmp);?>
" />

<!-- TWITTER CARD -->
<meta name="twitter:card" content="summary">
<meta name="twitter:title" content="">
<meta name="twitter:description" content="">
<meta name="twitter:url" content="">
<meta name="twitter:image:src" content="">

<!-- ICONS -->
<link rel="shortcut icon" href="<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/assets/favicon/favicon.ico" type="image/x-icon"/>
<link rel="apple-touch-icon" sizes="57x57" href="<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/assets/favicon/apple-icon-57x57.png">
<link rel="apple-touch-icon" sizes="60x60" href="<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/assets/favicon/apple-icon-60x60.png">
<link rel="apple-touch-icon" sizes="72x72" href="<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/assets/favicon/apple-icon-72x72.png">
<link rel="apple-touch-icon" sizes="76x76" href="<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/assets/favicon/apple-icon-76x76.png">
<link rel="apple-touch-icon" sizes="114x114" href="<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/assets/favicon/apple-icon-114x114.png">
<link rel="apple-touch-icon" sizes="120x120" href="<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/assets/favicon/apple-icon-120x120.png">
<link rel="apple-touch-icon" sizes="144x144" href="<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/assets/favicon/apple-icon-144x144.png">
<link rel="apple-touch-icon" sizes="152x152" href="<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/assets/favicon/apple-icon-152x152.png">
<link rel="apple-touch-icon" sizes="180x180" href="<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/assets/favicon/apple-icon-180x180.png">
<link rel="icon" type="image/png" href="<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/assets/favicon/favicon-16x16.png" sizes="16x16">
<link rel="icon" type="image/png" href="<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/assets/favicon/favicon-32x32.png" sizes="32x32">
<link rel="icon" type="image/png" href="<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/assets/favicon/favicon-96x96.png" sizes="96x96">
<link rel="icon" type="image/png" href="<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/assets/favicon/android-192x192.png" sizes="192x192">
<?php }
}

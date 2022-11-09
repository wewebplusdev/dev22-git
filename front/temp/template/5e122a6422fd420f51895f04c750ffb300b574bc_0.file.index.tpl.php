<?php
/* Smarty version 4.0.0, created on 2022-11-09 08:59:35
  from '/var/www/html/front/controller/script/calendar/template/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.0',
  'unifunc' => 'content_636b0987008862_51617762',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5e122a6422fd420f51895f04c750ffb300b574bc' => 
    array (
      0 => '/var/www/html/front/controller/script/calendar/template/index.tpl',
      1 => 1667959172,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_636b0987008862_51617762 (Smarty_Internal_Template $_smarty_tpl) {
?><section class="site-container sitekey" data-page="index" data-id="<?php echo $_smarty_tpl->tpl_vars['sitekey']->value;?>
">

   <div class="default-header">
      <div class="top-graphic mb-4 text-primary">
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
                  <li class="breadcrumb-item active"><a href="<?php echo $_smarty_tpl->tpl_vars['ul']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['menuActive']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['settingModulus']->value['subject'];?>
</a></li>
               </ol>
            </div>
         </div>
      </div>
   </div>
   <div class="default-page calendar-page">
      <div class="container">
         <div class="row" id="revertCustom">
            <div class="col-xl-5 col-md-6 col-12 order-md-2">
               <div class="calendar-block">
                  <div id="calendar">
                     <form action="" method="get" name="myCalendarForm" id="myCalendarForm">
                        <input name="inputLanguage" type="hidden" id="inputLanguage"
                               value="<?php echo $_smarty_tpl->tpl_vars['langFull']->value;?>
">
                        <input name="inputFolderPath" type="hidden" id="inputFolderPath"
                               value="<?php echo $_smarty_tpl->tpl_vars['langon']->value;?>
">
                     </form>
                  </div>
               </div>
            </div>
            <div class="col-xl-7 col-md-6 col-12 order-md-1">
               <div id="calendarList">

               </div>
            </div>
         </div>
         <div class="row justify-content-end">
            <div class="col-xl-5 col-md-6 col-12">
               <div class="calendar-group">
                  <div class="title"><?php echo $_smarty_tpl->tpl_vars['lang']->value['menu']['calendar'];?>
</div>
                  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['callCalendarGroup']->value, 'valuecallCalendarGroup', false, 'keycallCalendarGroup');
$_smarty_tpl->tpl_vars['valuecallCalendarGroup']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['keycallCalendarGroup']->value => $_smarty_tpl->tpl_vars['valuecallCalendarGroup']->value) {
$_smarty_tpl->tpl_vars['valuecallCalendarGroup']->do_else = false;
?>
                     <p class="desc event-group" style="cursor: pointer;" data-id="<?php echo $_smarty_tpl->tpl_vars['valuecallCalendarGroup']->value['id'];?>
">
                        <span class="icon" style="background-color: <?php echo $_smarty_tpl->tpl_vars['valuecallCalendarGroup']->value['color'];?>
;"></span>
                        <?php echo $_smarty_tpl->tpl_vars['valuecallCalendarGroup']->value['subject'];?>

                     </p>
                  <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                 </div>
            </div>
         </div>
      </div>
   </div>

</section><?php }
}

<?php
/* Smarty version 4.0.0, created on 2022-11-09 11:36:24
  from '/var/www/html/front/controller/script/calendar/template/load-calendar-list.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.0',
  'unifunc' => 'content_636b2e48953ac7_93269923',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2bb0b025ad6aa17d0e37de518809595c85cdf97f' => 
    array (
      0 => '/var/www/html/front/controller/script/calendar/template/load-calendar-list.tpl',
      1 => 1667968571,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_636b2e48953ac7_93269923 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="title">
   <span><?php echo $_smarty_tpl->tpl_vars['txt_calendarList']->value;?>
</span>
</div>
<div class="calendar-vertical-block">
   <?php if ($_smarty_tpl->tpl_vars['CallActivityData']->value->_numOfRows >= 1) {?>
      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['CallActivityData']->value, 'valueCallActivityData', false, 'keyCallActivityData');
$_smarty_tpl->tpl_vars['valueCallActivityData']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['keyCallActivityData']->value => $_smarty_tpl->tpl_vars['valueCallActivityData']->value) {
$_smarty_tpl->tpl_vars['valueCallActivityData']->do_else = false;
?>
         <?php ob_start();
echo calendarPage::showDateCalendarDay($_smarty_tpl->tpl_vars['valueCallActivityData']->value[11]);
$_prefixVariable1=ob_get_clean();
$_smarty_tpl->_assignInScope('valSdate', $_prefixVariable1);?>
         <?php ob_start();
echo calendarPage::showDateCalendarDay($_smarty_tpl->tpl_vars['valueCallActivityData']->value[12]);
$_prefixVariable2=ob_get_clean();
$_smarty_tpl->_assignInScope('valEdate', $_prefixVariable2);?>
         <?php ob_start();
echo calendarPage::callCalendarGroup($_smarty_tpl->tpl_vars['valueCallActivityData']->value[1],$_smarty_tpl->tpl_vars['valueCallActivityData']->value[27],'list');
$_prefixVariable3=ob_get_clean();
$_smarty_tpl->_assignInScope('callCalendarGroupList', $_prefixVariable3);?>
         <?php $_smarty_tpl->_assignInScope('callCalendarGroupList', calendarPage::callCalendarGroup($_smarty_tpl->tpl_vars['valueCallActivityData']->value[1],$_smarty_tpl->tpl_vars['valueCallActivityData']->value[27],'list'));?>
         <?php if ($_smarty_tpl->tpl_vars['valueCallActivityData']->value[32] == 1) {?>
            <?php $_smarty_tpl->_assignInScope('valDateShowCalDay', ((string)$_smarty_tpl->tpl_vars['valSdate']->value)."-".((string)$_smarty_tpl->tpl_vars['valEdate']->value));?>
         <?php } else { ?>
            <?php $_smarty_tpl->_assignInScope('valDateShowCalDay', ((string)$_smarty_tpl->tpl_vars['valSdate']->value));?>
         <?php }?>
         <a href="<?php echo $_smarty_tpl->tpl_vars['ul']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['menuActive']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['menuDetail']->value;?>
/<?php echo encodeStr($_smarty_tpl->tpl_vars['valueCallActivityData']->value[0]);?>
" class="link">
            <div class="list-wrapper">
               <div class="row no-gutters">
                  <div class="col-9">
                     <div class="list-inner">
                        <div class="list-title text-limit -x2">
                           <span class="icon"></span>
                           <?php echo $_smarty_tpl->tpl_vars['valueCallActivityData']->value[3];?>

                        </div>
                     </div>
                  </div>
                  <div class="col text-right">
                     <div class="list-date text-limit">
                        <span><?php echo $_smarty_tpl->tpl_vars['valDateShowCalDay']->value;?>
 <?php echo calendarPage::CallMonthPage($_smarty_tpl->tpl_vars['valueCallActivityData']->value[11]);?>
</span>
                     </div>
                  </div>
               </div>
            </div>
         </a>
      <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
   <?php } else { ?>
      <div>
         <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
            <tr>
               <td align="center" style="padding-top:50px;padding-bottom:100px;font-size:18px;">
                  <span><?php echo $_smarty_tpl->tpl_vars['lang']->value["calendar"]["nodata"];?>
</span>
               </td>
            </tr>
         </table>
      </div>
   <?php }?>
</div>


   <?php echo '<script'; ?>
>
      $('.calendar-list').slick({
         slidesToShow: 5,
         slidesToScroll: 1,
         vertical: true,
         responsive: [{
               breakpoint: 1200,
               settings: {
                  slidesToShow: 3
               }
            }]
      });
   <?php echo '</script'; ?>
>
<?php }
}

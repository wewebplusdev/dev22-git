<?php
/* Smarty version 4.0.0, created on 2022-11-09 11:31:50
  from '/var/www/html/front/controller/script/calendar/template/load-calendar.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.0',
  'unifunc' => 'content_636b2d3670b986_14295757',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a2bc6022ba3298ae035bce604343b8864acb1b48' => 
    array (
      0 => '/var/www/html/front/controller/script/calendar/template/load-calendar.tpl',
      1 => 1667968303,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_636b2d3670b986_14295757 (Smarty_Internal_Template $_smarty_tpl) {
?><form action="" method="get" name="myCalendarForm" id="myCalendarForm">
   <input name="masterkey" type="hidden" id="masterkey" value="<?php echo $_smarty_tpl->tpl_vars['pageMasterkey']->value;?>
">
   <input name="action" type="hidden" id="action" value="">
   <input name="myCalendarDate" type="hidden" id="myCalendarDate" value="<?php echo $_smarty_tpl->tpl_vars['myCalendarDate']->value;?>
">
   <input name="myCalendarDate_Day" type="hidden" id="myCalendarDate_Day" value="<?php echo $_smarty_tpl->tpl_vars['myCalendarDate_Day']->value;?>
">
   <input name="myCalendarDate_Month" type="hidden" id="myCalendarDate_Month" value="<?php echo $_smarty_tpl->tpl_vars['myCalendarDate_Month']->value;?>
">
   <input name="myCalendarDate_Year" type="hidden" id="myCalendarDate_Year" value="<?php echo $_smarty_tpl->tpl_vars['myCalendarDate_Year']->value;?>
">
   <input name="viewAll" type="hidden" id="viewAll" value="">
   <input name="inputLanguage" type="hidden" id="inputLanguage" value="<?php echo $_smarty_tpl->tpl_vars['langFull']->value;?>
">
   <input name="inputFolderPath" type="hidden" id="inputFolderPath" value="<?php echo $_smarty_tpl->tpl_vars['langon']->value;?>
">
   <input name="myCalendarDatePer" type="hidden" id="myCalendarDatePer" value="">
   <input name="myCalendarGroup" type="hidden" id="myCalendarGroup" value="<?php echo $_smarty_tpl->tpl_vars['myCalendarGroup']->value;?>
">
</form>
<div class="calendar-tap-select">
   <div class="row align-items-center h-100 no-gutters">
      <div class="col-md col-4">
         <div class="day">
            <div class="txt"><?php echo $_smarty_tpl->tpl_vars['myCalendarDate_Day']->value;?>
</div>
            <div class="border-custom"></div>
         </div>
      </div>
      <div class="col">
         <div class="form-group">
            <label class="control-label visuallyhidden" for="calenadrSelectmonth">Calenadr Select tmonth</label>
            <div class="select-wrapper">
               <select class="select-control select-year" name="inputMonth" id="calenadrSelectmonth" onchange="<?php echo $_smarty_tpl->tpl_vars['strActionMonth']->value;?>
" style="width: 100%;">
                  <?php $_smarty_tpl->_assignInScope('valMonthSelect', "00");?>
                  <?php
$_smarty_tpl->tpl_vars['index'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['index']->step = 1;$_smarty_tpl->tpl_vars['index']->total = (int) ceil(($_smarty_tpl->tpl_vars['index']->step > 0 ? 12+1 - (1) : 1-(12)+1)/abs($_smarty_tpl->tpl_vars['index']->step));
if ($_smarty_tpl->tpl_vars['index']->total > 0) {
for ($_smarty_tpl->tpl_vars['index']->value = 1, $_smarty_tpl->tpl_vars['index']->iteration = 1;$_smarty_tpl->tpl_vars['index']->iteration <= $_smarty_tpl->tpl_vars['index']->total;$_smarty_tpl->tpl_vars['index']->value += $_smarty_tpl->tpl_vars['index']->step, $_smarty_tpl->tpl_vars['index']->iteration++) {
$_smarty_tpl->tpl_vars['index']->first = $_smarty_tpl->tpl_vars['index']->iteration === 1;$_smarty_tpl->tpl_vars['index']->last = $_smarty_tpl->tpl_vars['index']->iteration === $_smarty_tpl->tpl_vars['index']->total;?>{
                     <?php $_smarty_tpl->_assignInScope('valMonthSelect', "0".((string)$_smarty_tpl->tpl_vars['index']->value));?>
                     <?php $_smarty_tpl->_assignInScope('valMonthSelect', substr($_smarty_tpl->tpl_vars['valMonthSelect']->value,-2));?>
                     <option value="<?php echo $_smarty_tpl->tpl_vars['valMonthSelect']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['myCalendarDate_Month']->value == $_smarty_tpl->tpl_vars['valMonthSelect']->value) {?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['date_array']->value[$_smarty_tpl->tpl_vars['langon']->value][$_smarty_tpl->tpl_vars['valMonthSelect']->value];?>
</option>
                  <?php }
}
?>
               </select>
            </div>
         </div>
      </div>
      <div class="col">
         <div class="form-group">
            <label class="control-label visuallyhidden" for="calenadrSelectyear">Calenadr Select year</label>
            <div class="select-wrapper">
               <select class="select-control select-year" name="inputYear" id="calenadrSelectyear" onChange="<?php echo $_smarty_tpl->tpl_vars['strActionYear']->value;?>
" style="width: 80%;">
                  <?php
$_smarty_tpl->tpl_vars['index'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['index']->step = 1;$_smarty_tpl->tpl_vars['index']->total = (int) ceil(($_smarty_tpl->tpl_vars['index']->step > 0 ? date('Y')+2+1 - (2013) : 2013-(date('Y')+2)+1)/abs($_smarty_tpl->tpl_vars['index']->step));
if ($_smarty_tpl->tpl_vars['index']->total > 0) {
for ($_smarty_tpl->tpl_vars['index']->value = 2013, $_smarty_tpl->tpl_vars['index']->iteration = 1;$_smarty_tpl->tpl_vars['index']->iteration <= $_smarty_tpl->tpl_vars['index']->total;$_smarty_tpl->tpl_vars['index']->value += $_smarty_tpl->tpl_vars['index']->step, $_smarty_tpl->tpl_vars['index']->iteration++) {
$_smarty_tpl->tpl_vars['index']->first = $_smarty_tpl->tpl_vars['index']->iteration === 1;$_smarty_tpl->tpl_vars['index']->last = $_smarty_tpl->tpl_vars['index']->iteration === $_smarty_tpl->tpl_vars['index']->total;?>
                     <option value="<?php echo $_smarty_tpl->tpl_vars['index']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['myCalendarDate_Year']->value == $_smarty_tpl->tpl_vars['index']->value) {?>selected="selected"<?php }?>><?php ob_start();
echo $_smarty_tpl->tpl_vars['langon']->value;
$_prefixVariable1 = ob_get_clean();
echo getYearLang($_smarty_tpl->tpl_vars['index']->value,$_prefixVariable1);?>
</option>
                  <?php }
}
?>
               </select>
            </div>
         </div>
      </div>
   </div>
</div>
<table width="100%" align="center" border="0" cellpadding="0" cellspacing="1" bgcolor="#fff">
   <tbody>
      <tr class="calDayBorder" bgcolor="#dfdfdf">
         <td width="60" height="55" align="center" class="calDayBg">
            <span class="calDay text-active"><?php echo $_smarty_tpl->tpl_vars['day_array']->value[$_smarty_tpl->tpl_vars['langon']->value]['07'];?>
</span>
         </td>
         <td width="60" height="55" align="center" class="calDayBg">
            <span class="calDay"><?php echo $_smarty_tpl->tpl_vars['day_array']->value[$_smarty_tpl->tpl_vars['langon']->value]['01'];?>
</span>
         </td>
         <td width="60" height="55" align="center" class="calDayBg">
            <span class="calDay"><?php echo $_smarty_tpl->tpl_vars['day_array']->value[$_smarty_tpl->tpl_vars['langon']->value]['02'];?>
</span>
         </td>
         <td width="60" height="55" align="center" class="calDayBg">
            <span class="calDay"><?php echo $_smarty_tpl->tpl_vars['day_array']->value[$_smarty_tpl->tpl_vars['langon']->value]['03'];?>
</span>
         </td>
         <td width="60" height="55" align="center" class="calDayBg">
            <span class="calDay"><?php echo $_smarty_tpl->tpl_vars['day_array']->value[$_smarty_tpl->tpl_vars['langon']->value]['04'];?>
</span>
         </td>
         <td width="60" height="55" align="center" class="calDayBg">
            <span class="calDay"><?php echo $_smarty_tpl->tpl_vars['day_array']->value[$_smarty_tpl->tpl_vars['langon']->value]['05'];?>
</span>
         </td>
         <td width="60" height="55" align="center" class="calDayBg">
            <span class="calDay text-active"><?php echo $_smarty_tpl->tpl_vars['day_array']->value[$_smarty_tpl->tpl_vars['langon']->value]['06'];?>
</span>
         </td>
      </tr>
      <tr>
         <!-- START BLOCK : CALENDAR_DATA -->
         <?php if ($_smarty_tpl->tpl_vars['startWeekDay']->value >= 1) {?>
            <!-- check Start Day in Week -->
            <?php
$_smarty_tpl->tpl_vars['index'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['index']->step = 1;$_smarty_tpl->tpl_vars['index']->total = (int) ceil(($_smarty_tpl->tpl_vars['index']->step > 0 ? $_smarty_tpl->tpl_vars['startWeekDay']->value+1 - (1) : 1-($_smarty_tpl->tpl_vars['startWeekDay']->value)+1)/abs($_smarty_tpl->tpl_vars['index']->step));
if ($_smarty_tpl->tpl_vars['index']->total > 0) {
for ($_smarty_tpl->tpl_vars['index']->value = 1, $_smarty_tpl->tpl_vars['index']->iteration = 1;$_smarty_tpl->tpl_vars['index']->iteration <= $_smarty_tpl->tpl_vars['index']->total;$_smarty_tpl->tpl_vars['index']->value += $_smarty_tpl->tpl_vars['index']->step, $_smarty_tpl->tpl_vars['index']->iteration++) {
$_smarty_tpl->tpl_vars['index']->first = $_smarty_tpl->tpl_vars['index']->iteration === 1;$_smarty_tpl->tpl_vars['index']->last = $_smarty_tpl->tpl_vars['index']->iteration === $_smarty_tpl->tpl_vars['index']->total;?>
               <td width="<?php echo $_smarty_tpl->tpl_vars['mod_calendar_config']->value["cell-width"];?>
" height="<?php echo $_smarty_tpl->tpl_vars['mod_calendar_config']->value["cell-height"];?>
" class="calDayNameberBgNull"></td>
            <?php }
}
?>
            <?php
$_smarty_tpl->tpl_vars['fornew'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['fornew']->step = 1;$_smarty_tpl->tpl_vars['fornew']->total = (int) ceil(($_smarty_tpl->tpl_vars['fornew']->step > 0 ? 7+1 - ($_smarty_tpl->tpl_vars['index']->value) : $_smarty_tpl->tpl_vars['index']->value-(7)+1)/abs($_smarty_tpl->tpl_vars['fornew']->step));
if ($_smarty_tpl->tpl_vars['fornew']->total > 0) {
for ($_smarty_tpl->tpl_vars['fornew']->value = $_smarty_tpl->tpl_vars['index']->value, $_smarty_tpl->tpl_vars['fornew']->iteration = 1;$_smarty_tpl->tpl_vars['fornew']->iteration <= $_smarty_tpl->tpl_vars['fornew']->total;$_smarty_tpl->tpl_vars['fornew']->value += $_smarty_tpl->tpl_vars['fornew']->step, $_smarty_tpl->tpl_vars['fornew']->iteration++) {
$_smarty_tpl->tpl_vars['fornew']->first = $_smarty_tpl->tpl_vars['fornew']->iteration === 1;$_smarty_tpl->tpl_vars['fornew']->last = $_smarty_tpl->tpl_vars['fornew']->iteration === $_smarty_tpl->tpl_vars['fornew']->total;?>
               <!-- check Event Date -->
               <?php if ($_smarty_tpl->tpl_vars['myCalendarEventCounter']->value[$_smarty_tpl->tpl_vars['mCount']->value] == 0 || $_smarty_tpl->tpl_vars['myCalendarEventCounter']->value[$_smarty_tpl->tpl_vars['mCount']->value] == '') {?>
                  <?php ob_start();
echo formatNum($_smarty_tpl->tpl_vars['mCount']->value);
$_prefixVariable2=ob_get_clean();
if ($_smarty_tpl->tpl_vars['Checktoday']->value == ((string)$_smarty_tpl->tpl_vars['myCalendarDate_Year']->value)."-".((string)$_smarty_tpl->tpl_vars['myCalendarDate_Month']->value)."-".$_prefixVariable2) {?>
                     <?php $_smarty_tpl->_assignInScope('strOptionFont', "class=\"calDayToday\"  title=\" ".((string)$_smarty_tpl->tpl_vars['lang']->value['calendar']['thisday'])." \"");?>
                  <?php } else { ?>
                     <?php $_smarty_tpl->_assignInScope('strOptionFont', "class=\"calDayToday\" ");?>
                  <?php }?>
                  <td align="center" width="<?php echo $_smarty_tpl->tpl_vars['mod_calendar_config']->value["cell-width"];?>
" height="<?php echo $_smarty_tpl->tpl_vars['mod_calendar_config']->value["cell-height"];?>
" class="calDayNameberBgCaseA">
                     <div class="calDayNormal"><?php echo $_smarty_tpl->tpl_vars['mCount']->value;?>
</div>
                  </td>
               <?php } else { ?>
                  <?php $_smarty_tpl->_assignInScope('strOptionFont', '');?>
                  <?php $_smarty_tpl->_assignInScope('strOption', '');?>
                  <?php $_smarty_tpl->_assignInScope('valCheckA', "0");?>
                  <?php ob_start();
echo formatNum($_smarty_tpl->tpl_vars['mCount']->value);
$_prefixVariable3 = ob_get_clean();
ob_start();
echo sprintf('%04d-%02d-%02d',$_smarty_tpl->tpl_vars['myCalendarDate_Year']->value,$_smarty_tpl->tpl_vars['myCalendarDate_Month']->value,$_prefixVariable3);
$_prefixVariable4=ob_get_clean();
$_smarty_tpl->_assignInScope('valDateToday', $_prefixVariable4);?>
                  <?php ob_start();
echo formatNum($_smarty_tpl->tpl_vars['mCount']->value);
$_prefixVariable5=ob_get_clean();
if ($_smarty_tpl->tpl_vars['Checktoday']->value == ((string)$_smarty_tpl->tpl_vars['myCalendarDate_Year']->value)."-".((string)$_smarty_tpl->tpl_vars['myCalendarDate_Month']->value)."-".$_prefixVariable5) {?>
                     <?php if ($_smarty_tpl->tpl_vars['mySpecialDayCounter']->value[$_smarty_tpl->tpl_vars['mCount']->value] == 0 || $_smarty_tpl->tpl_vars['mySpecialDayCounter']->value[$_smarty_tpl->tpl_vars['mCount']->value] == '') {?>
                        <?php $_smarty_tpl->_assignInScope('strOptionFont', "calDayToday");?>
                        <?php $_smarty_tpl->_assignInScope('valCheckA', "1");?>
                     <?php } else { ?>
                        <?php $_smarty_tpl->_assignInScope('strOptionFont', '');?>
                        <?php $_smarty_tpl->_assignInScope('valCheckA', "0");?>
                     <?php }?>
                  <?php } elseif ($_smarty_tpl->tpl_vars['mySpecialDayCounter']->value[$_smarty_tpl->tpl_vars['mCount']->value] == 0 || $_smarty_tpl->tpl_vars['mySpecialDayCounter']->value[$_smarty_tpl->tpl_vars['mCount']->value] == '') {?>
                     <?php $_smarty_tpl->_assignInScope('strOptionFont', "calDayEvent");?>
                     <?php $_smarty_tpl->_assignInScope('valCheckA', "1");?>
                  <?php } else { ?>
                     <?php $_smarty_tpl->_assignInScope('strOptionFont', '');?>
                     <?php $_smarty_tpl->_assignInScope('valCheckA', "0");?>
                  <?php }?>
                  <td align="center" width="<?php echo $_smarty_tpl->tpl_vars['mod_calendar_config']->value["cell-width"];?>
" height="<?php echo $_smarty_tpl->tpl_vars['mod_calendar_config']->value["cell-height"];?>
"
                      class="calDayNameberBgCaseA <?php echo $_smarty_tpl->tpl_vars['strOptionFont']->value;?>
">
                     <?php if ($_smarty_tpl->tpl_vars['valCheckA']->value >= 1) {?>
                        <div class="calDayNormal" onclick="
                              document.myCalendarForm.myCalendarDatePer.value = '<?php echo $_smarty_tpl->tpl_vars['myCalendarDate_Year']->value;?>
-<?php echo $_smarty_tpl->tpl_vars['myCalendarDate_Month']->value;?>
-<?php echo formatNum($_smarty_tpl->tpl_vars['mCount']->value);?>
';
                                    document.myCalendarForm.action.value = '';
                                    getCalendarDetailAll();
                             " title="<?php echo $_smarty_tpl->tpl_vars['mCount']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['mCount']->value;?>
</div>
                     <?php } else { ?>
                        <div class="calDayNormal"><?php echo $_smarty_tpl->tpl_vars['mCount']->value;?>
</div>
                     <?php }?>
                  </td>
               <?php }?>
               <?php $_smarty_tpl->_assignInScope('mCount', $_smarty_tpl->tpl_vars['mCount']->value+1);?>
            <?php }
}
?>
         <?php }?>
         <!-- end startWeekDay -->
      </tr>
      <?php $_smarty_tpl->_assignInScope('colcount', "0");?>
      <?php
$_smarty_tpl->tpl_vars['fortr'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['fortr']->step = 1;$_smarty_tpl->tpl_vars['fortr']->total = (int) ceil(($_smarty_tpl->tpl_vars['fortr']->step > 0 ? $_smarty_tpl->tpl_vars['endDayOfMonth']->value+1 - ($_smarty_tpl->tpl_vars['mCount']->value) : $_smarty_tpl->tpl_vars['mCount']->value-($_smarty_tpl->tpl_vars['endDayOfMonth']->value)+1)/abs($_smarty_tpl->tpl_vars['fortr']->step));
if ($_smarty_tpl->tpl_vars['fortr']->total > 0) {
for ($_smarty_tpl->tpl_vars['fortr']->value = $_smarty_tpl->tpl_vars['mCount']->value, $_smarty_tpl->tpl_vars['fortr']->iteration = 1;$_smarty_tpl->tpl_vars['fortr']->iteration <= $_smarty_tpl->tpl_vars['fortr']->total;$_smarty_tpl->tpl_vars['fortr']->value += $_smarty_tpl->tpl_vars['fortr']->step, $_smarty_tpl->tpl_vars['fortr']->iteration++) {
$_smarty_tpl->tpl_vars['fortr']->first = $_smarty_tpl->tpl_vars['fortr']->iteration === 1;$_smarty_tpl->tpl_vars['fortr']->last = $_smarty_tpl->tpl_vars['fortr']->iteration === $_smarty_tpl->tpl_vars['fortr']->total;?>
         <?php if ($_smarty_tpl->tpl_vars['colcount']->value == 0) {?>
            <tr>
            <?php }?>
            <?php $_smarty_tpl->_assignInScope('colcount', $_smarty_tpl->tpl_vars['colcount']->value+1);?>
            <?php if ($_smarty_tpl->tpl_vars['myCalendarEventCounter']->value[$_smarty_tpl->tpl_vars['mCount']->value] == 0 || $_smarty_tpl->tpl_vars['myCalendarEventCounter']->value[$_smarty_tpl->tpl_vars['mCount']->value] == '') {?>
               <?php ob_start();
echo formatNum($_smarty_tpl->tpl_vars['mCount']->value);
$_prefixVariable6=ob_get_clean();
$_smarty_tpl->_assignInScope('datexxx', ((string)$_smarty_tpl->tpl_vars['myCalendarDate_Year']->value)."-".((string)$_smarty_tpl->tpl_vars['myCalendarDate_Month']->value)."-".$_prefixVariable6);?>
               <?php ob_start();
echo formatNum($_smarty_tpl->tpl_vars['mCount']->value);
$_prefixVariable7=ob_get_clean();
if ($_smarty_tpl->tpl_vars['Checktoday']->value == ((string)$_smarty_tpl->tpl_vars['myCalendarDate_Year']->value)."-".((string)$_smarty_tpl->tpl_vars['myCalendarDate_Month']->value)."-".$_prefixVariable7) {?>
                  <?php $_smarty_tpl->_assignInScope('strOptionFont', "calDayToday");?>
               <?php } else { ?>
                  <?php $_smarty_tpl->_assignInScope('strOptionFont', '');?>
               <?php }?>
               <td align="center" width="<?php echo $_smarty_tpl->tpl_vars['mod_calendar_config']->value["cell-width"];?>
" height="<?php echo $_smarty_tpl->tpl_vars['mod_calendar_config']->value["cell-height"];?>
" class="calDayNameberBgCaseA <?php echo $_smarty_tpl->tpl_vars['strOptionFont']->value;?>
">
                  <div class="calDayNormal"><?php echo $_smarty_tpl->tpl_vars['mCount']->value;?>
</div>
               </td>
            <?php } else { ?>
               <?php $_smarty_tpl->_assignInScope('strOptionFont', '');?>
               <?php $_smarty_tpl->_assignInScope('strOption', '');?>
               <?php $_smarty_tpl->_assignInScope('valCheckA', "0");?>
               <?php ob_start();
echo formatNum($_smarty_tpl->tpl_vars['mCount']->value);
$_prefixVariable8 = ob_get_clean();
ob_start();
echo sprintf('%04d-%02d-%02d',$_smarty_tpl->tpl_vars['myCalendarDate_Year']->value,$_smarty_tpl->tpl_vars['myCalendarDate_Month']->value,$_prefixVariable8);
$_prefixVariable9=ob_get_clean();
$_smarty_tpl->_assignInScope('valDateToday', $_prefixVariable9);?>
               <?php ob_start();
echo formatNum($_smarty_tpl->tpl_vars['mCount']->value);
$_prefixVariable10=ob_get_clean();
if ($_smarty_tpl->tpl_vars['Checktoday']->value == ((string)$_smarty_tpl->tpl_vars['myCalendarDate_Year']->value)."-".((string)$_smarty_tpl->tpl_vars['myCalendarDate_Month']->value)."-".$_prefixVariable10) {?>
                  <?php if ($_smarty_tpl->tpl_vars['mySpecialDayCounter']->value[$_smarty_tpl->tpl_vars['mCount']->value] == 0 || $_smarty_tpl->tpl_vars['mySpecialDayCounter']->value[$_smarty_tpl->tpl_vars['mCount']->value] == '') {?>
                     <?php $_smarty_tpl->_assignInScope('strOptionFont', "calDayToday");?>
                     <?php $_smarty_tpl->_assignInScope('valCheckA', "1");?>
                  <?php } else { ?>
                     <?php $_smarty_tpl->_assignInScope('strOptionFont', '');?>
                     <?php $_smarty_tpl->_assignInScope('valCheckA', "0");?>
                  <?php }?>
               <?php } elseif ($_smarty_tpl->tpl_vars['mySpecialDayCounter']->value[$_smarty_tpl->tpl_vars['mCount']->value] == 0 || $_smarty_tpl->tpl_vars['mySpecialDayCounter']->value[$_smarty_tpl->tpl_vars['mCount']->value] == '') {?>
                  <?php $_smarty_tpl->_assignInScope('strOptionFont', "calDayEvent");?>
                  <?php $_smarty_tpl->_assignInScope('valCheckA', "1");?>
               <?php } else { ?>
                  <?php $_smarty_tpl->_assignInScope('strOptionFont', '');?>
                  <?php $_smarty_tpl->_assignInScope('valCheckA', "0");?>
               <?php }?>
               <td align="center" width="<?php echo $_smarty_tpl->tpl_vars['mod_calendar_config']->value["cell-width"];?>
" height="<?php echo $_smarty_tpl->tpl_vars['mod_calendar_config']->value["cell-height"];?>
" class="calDayNameberBgCaseA <?php echo $_smarty_tpl->tpl_vars['strOptionFont']->value;?>
">
                  <?php if ($_smarty_tpl->tpl_vars['valCheckA']->value >= 1) {?>

                     <div class="calDayNormal" onclick="document.myCalendarForm.myCalendarDatePer.value = '<?php echo $_smarty_tpl->tpl_vars['myCalendarDate_Year']->value;?>
-<?php echo $_smarty_tpl->tpl_vars['myCalendarDate_Month']->value;?>
-<?php echo formatNum($_smarty_tpl->tpl_vars['mCount']->value);?>
';document.myCalendarForm.action.value = '';getCalendarDetailAll();" title="<?php echo $_smarty_tpl->tpl_vars['mCount']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['mCount']->value;?>
</div>

                  <?php } else { ?>
                     <div class="calDayNormal"><?php echo $_smarty_tpl->tpl_vars['mCount']->value;?>
</div>
                  <?php }?>
               <?php }?>
            </td>
            <?php if ($_smarty_tpl->tpl_vars['colcount']->value == 7) {?>
            </tr>
            <?php $_smarty_tpl->_assignInScope('colcount', 0);?>
         <?php }?>
         <?php $_smarty_tpl->_assignInScope('mCount', $_smarty_tpl->tpl_vars['mCount']->value+1);?>
      <?php }
}
?>

      <?php if ($_smarty_tpl->tpl_vars['colcount']->value >= 1) {?>
         <?php $_smarty_tpl->_assignInScope('countnull', 7-$_smarty_tpl->tpl_vars['colcount']->value);?>
         <?php
$_smarty_tpl->tpl_vars['forwhile'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['forwhile']->step = 1;$_smarty_tpl->tpl_vars['forwhile']->total = (int) ceil(($_smarty_tpl->tpl_vars['forwhile']->step > 0 ? $_smarty_tpl->tpl_vars['countnull']->value+1 - (1) : 1-($_smarty_tpl->tpl_vars['countnull']->value)+1)/abs($_smarty_tpl->tpl_vars['forwhile']->step));
if ($_smarty_tpl->tpl_vars['forwhile']->total > 0) {
for ($_smarty_tpl->tpl_vars['forwhile']->value = 1, $_smarty_tpl->tpl_vars['forwhile']->iteration = 1;$_smarty_tpl->tpl_vars['forwhile']->iteration <= $_smarty_tpl->tpl_vars['forwhile']->total;$_smarty_tpl->tpl_vars['forwhile']->value += $_smarty_tpl->tpl_vars['forwhile']->step, $_smarty_tpl->tpl_vars['forwhile']->iteration++) {
$_smarty_tpl->tpl_vars['forwhile']->first = $_smarty_tpl->tpl_vars['forwhile']->iteration === 1;$_smarty_tpl->tpl_vars['forwhile']->last = $_smarty_tpl->tpl_vars['forwhile']->iteration === $_smarty_tpl->tpl_vars['forwhile']->total;?>
         <td width="<?php echo $_smarty_tpl->tpl_vars['mod_calendar_config']->value["cell-width"];?>
" height="<?php echo $_smarty_tpl->tpl_vars['mod_calendar_config']->value["cell-height"];?>
" class="calDayNameberBgNull"></td>
      <?php }
}
?>

   <?php }?>
   <!-- END BLOCK : CALENDAR_DATA -->
</tbody>
</table>
<div class="calendar-info">
   <div class="calendar-explain d-flex">
      <div class="explain-I mr-5"><?php echo $_smarty_tpl->tpl_vars['lang']->value["calendar"]["eventday"];?>
</div>
      <div class="explain-II"><?php echo $_smarty_tpl->tpl_vars['lang']->value["calendar"]["datenow"];?>
</div>
   </div>
   <div class="calendar-info d-none">
      <div class="calendar-info-title"><?php echo $_smarty_tpl->tpl_vars['lang']->value["calendar"]["note1"];?>
</div>
      <ul>
         <li>
            <i class="icon" style="background-color: #00aeef;"></i>
            <?php echo $_smarty_tpl->tpl_vars['lang']->value["calendar"]["note2"];?>

         </li>
         <li>
            <i class="icon" style="background-color: #ff9d65;"></i>
            <?php echo $_smarty_tpl->tpl_vars['lang']->value["calendar"]["note3"];?>

         </li>
         <li>
            <i class="icon" style="background-color: #fff;"></i>
            <?php echo $_smarty_tpl->tpl_vars['lang']->value["calendar"]["note4"];?>

         </li>
      </ul>
      <div class="clearfix"></div>
   </div>
</div>
<?php }
}

<form action="" method="get" name="myCalendarForm" id="myCalendarForm">
   <input name="masterkey" type="hidden" id="masterkey" value="{$pageMasterkey}">
   <input name="action" type="hidden" id="action" value="">
   <input name="myCalendarDate" type="hidden" id="myCalendarDate" value="{$myCalendarDate}">
   <input name="myCalendarDate_Day" type="hidden" id="myCalendarDate_Day" value="{$myCalendarDate_Day}">
   <input name="myCalendarDate_Month" type="hidden" id="myCalendarDate_Month" value="{$myCalendarDate_Month}">
   <input name="myCalendarDate_Year" type="hidden" id="myCalendarDate_Year" value="{$myCalendarDate_Year}">
   <input name="viewAll" type="hidden" id="viewAll" value="">
   <input name="inputLanguage" type="hidden" id="inputLanguage" value="{$langFull}">
   <input name="inputFolderPath" type="hidden" id="inputFolderPath" value="{$langon}">
   <input name="myCalendarDatePer" type="hidden" id="myCalendarDatePer" value="">
   <input name="myCalendarGroup" type="hidden" id="myCalendarGroup" value="{$myCalendarGroup}">
</form>
<div class="calendar-tap-select">
   <div class="row align-items-center h-100 no-gutters">
      <div class="col-md col-4">
         <div class="day">
            <div class="txt">{$myCalendarDate_Day}</div>
            <div class="border-custom"></div>
         </div>
      </div>
      <div class="col">
         <div class="form-group">
            <label class="control-label visuallyhidden" for="calenadrSelectmonth">Calenadr Select tmonth</label>
            <div class="select-wrapper">
               <select class="select-control select-year" name="inputMonth" id="calenadrSelectmonth" onchange="{$strActionMonth}" style="width: 100%;">
                  {assign var="valMonthSelect" value="00"}
                  {for $index=1 to 12}{
                     {$valMonthSelect="0`$index`"}
                     {$valMonthSelect = $valMonthSelect|substr:-2}
                     <option value="{$valMonthSelect}" {if $myCalendarDate_Month eq $valMonthSelect}selected{/if}>{$date_array[$langon][$valMonthSelect]}</option>
                  {/for}
               </select>
            </div>
         </div>
      </div>
      <div class="col">
         <div class="form-group">
            <label class="control-label visuallyhidden" for="calenadrSelectyear">Calenadr Select year</label>
            <div class="select-wrapper">
               <select class="select-control select-year" name="inputYear" id="calenadrSelectyear" onChange="{$strActionYear}" style="width: 80%;">
                  {for $index=2013 to date('Y')+2}
                     <option value="{$index}" {if $myCalendarDate_Year eq $index}selected="selected"{/if}>{$index|getYearLang:{$langon}}</option>
                  {/for}
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
            <span class="calDay text-active">{$day_array[$langon]['07']}</span>
         </td>
         <td width="60" height="55" align="center" class="calDayBg">
            <span class="calDay">{$day_array[$langon]['01']}</span>
         </td>
         <td width="60" height="55" align="center" class="calDayBg">
            <span class="calDay">{$day_array[$langon]['02']}</span>
         </td>
         <td width="60" height="55" align="center" class="calDayBg">
            <span class="calDay">{$day_array[$langon]['03']}</span>
         </td>
         <td width="60" height="55" align="center" class="calDayBg">
            <span class="calDay">{$day_array[$langon]['04']}</span>
         </td>
         <td width="60" height="55" align="center" class="calDayBg">
            <span class="calDay">{$day_array[$langon]['05']}</span>
         </td>
         <td width="60" height="55" align="center" class="calDayBg">
            <span class="calDay text-active">{$day_array[$langon]['06']}</span>
         </td>
      </tr>
      <tr>
         <!-- START BLOCK : CALENDAR_DATA -->
         {if $startWeekDay gte 1}
            <!-- check Start Day in Week -->
            {for $index=1 to $startWeekDay}
               <td width="{$mod_calendar_config["cell-width"]}" height="{$mod_calendar_config["cell-height"]}" class="calDayNameberBgNull"></td>
            {/for}
            {for $fornew=$index to 7}
               <!-- check Event Date -->
               {if $myCalendarEventCounter[$mCount] == 0 || $myCalendarEventCounter[$mCount] == ""}
                  {if $Checktoday == "{$myCalendarDate_Year}-{$myCalendarDate_Month}-{$mCount|formatNum}"}
                     {$strOptionFont = "class=\"calDayToday\"  title=\" {$lang['calendar']['thisday']} \""}
                  {else}
                     {$strOptionFont = "class=\"calDayToday\" "}
                  {/if}
                  <td align="center" width="{$mod_calendar_config["cell-width"]}" height="{$mod_calendar_config["cell-height"]}" class="calDayNameberBgCaseA">
                     <div class="calDayNormal">{$mCount}</div>
                  </td>
               {else}
                  {assign var="strOptionFont" value=""}
                  {assign var="strOption" value=""}
                  {assign var="valCheckA" value="0"}
                  {assign var="valDateToday" value="{sprintf('%04d-%02d-%02d', $myCalendarDate_Year, $myCalendarDate_Month, {formatNum($mCount)})}"}
                  {if $Checktoday == "{$myCalendarDate_Year}-{$myCalendarDate_Month}-{$mCount|formatNum}"}
                     {if $mySpecialDayCounter[$mCount] == 0 || $mySpecialDayCounter[$mCount] == ""}
                        {assign var="strOptionFont" value="calDayToday"}
                        {assign var="valCheckA" value="1"}
                     {else}
                        {assign var="strOptionFont" value=""}
                        {assign var="valCheckA" value="0"}
                     {/if}
                  {elseif $mySpecialDayCounter[$mCount] == 0 || $mySpecialDayCounter[$mCount] == ""}
                     {assign var="strOptionFont" value="calDayEvent"}
                     {assign var="valCheckA" value="1"}
                  {else}
                     {assign var="strOptionFont" value=""}
                     {assign var="valCheckA" value="0"}
                  {/if}
                  <td align="center" width="{$mod_calendar_config["cell-width"]}" height="{$mod_calendar_config["cell-height"]}"
                      class="calDayNameberBgCaseA {$strOptionFont}">
                     {if $valCheckA >= 1}
                        <div class="calDayNormal" onclick="
                              document.myCalendarForm.myCalendarDatePer.value = '{$myCalendarDate_Year}-{$myCalendarDate_Month}-{formatNum($mCount)}';
                                    document.myCalendarForm.action.value = '';
                                    getCalendarDetailAll();
                             " title="{$mCount}">{$mCount}</div>
                     {else}
                        <div class="calDayNormal">{$mCount}</div>
                     {/if}
                  </td>
               {/if}
               {$mCount = $mCount+1}
            {/for}
         {/if}
         <!-- end startWeekDay -->
      </tr>
      {assign var="colcount" value="0"}
      {for $fortr=$mCount to $endDayOfMonth}
         {if $colcount eq 0}
            <tr>
            {/if}
            {$colcount = $colcount+1}
            {if $myCalendarEventCounter[$mCount] == 0 || $myCalendarEventCounter[$mCount] == ""}
               {assign var="datexxx" value="{$myCalendarDate_Year}-{$myCalendarDate_Month}-{$mCount|formatNum}"}
               {if $Checktoday == "{$myCalendarDate_Year}-{$myCalendarDate_Month}-{$mCount|formatNum}"}
                  {assign var="strOptionFont" value="calDayToday"}
               {else}
                  {$strOptionFont = ""}
               {/if}
               <td align="center" width="{$mod_calendar_config["cell-width"]}" height="{$mod_calendar_config["cell-height"]}" class="calDayNameberBgCaseA {$strOptionFont}">
                  <div class="calDayNormal">{$mCount}</div>
               </td>
            {else}
               {assign var="strOptionFont" value=""}
               {assign var="strOption" value=""}
               {assign var="valCheckA" value="0"}
               {assign var="valDateToday" value="{sprintf('%04d-%02d-%02d', $myCalendarDate_Year, $myCalendarDate_Month, {formatNum($mCount)})}"}
               {if $Checktoday == "{$myCalendarDate_Year}-{$myCalendarDate_Month}-{$mCount|formatNum}"}
                  {if $mySpecialDayCounter[$mCount] == 0 || $mySpecialDayCounter[$mCount] == ""}
                     {assign var="strOptionFont" value="calDayToday"}
                     {assign var="valCheckA" value="1"}
                  {else}
                     {assign var="strOptionFont" value=""}
                     {assign var="valCheckA" value="0"}
                  {/if}
               {elseif $mySpecialDayCounter[$mCount] == 0 || $mySpecialDayCounter[$mCount] == ""}
                  {assign var="strOptionFont" value="calDayEvent"}
                  {assign var="valCheckA" value="1"}
               {else}
                  {assign var="strOptionFont" value=""}
                  {assign var="valCheckA" value="0"}
               {/if}
               <td align="center" width="{$mod_calendar_config["cell-width"]}" height="{$mod_calendar_config["cell-height"]}" class="calDayNameberBgCaseA {$strOptionFont}">
                  {if $valCheckA >= 1}

                     <div class="calDayNormal" onclick="document.myCalendarForm.myCalendarDatePer.value = '{$myCalendarDate_Year}-{$myCalendarDate_Month}-{formatNum($mCount)}';document.myCalendarForm.action.value = '';getCalendarDetailAll();" title="{$mCount}">{$mCount}</div>

                  {else}
                     <div class="calDayNormal">{$mCount}</div>
                  {/if}
               {/if}
            </td>
            {if $colcount eq 7}
            </tr>
            {$colcount = 0}
         {/if}
         {$mCount = $mCount+1}
      {/for}

      {if $colcount gte 1}
         {$countnull = 7 - $colcount}
         {for $forwhile = 1 to $countnull}
         <td width="{$mod_calendar_config["cell-width"]}" height="{$mod_calendar_config["cell-height"]}" class="calDayNameberBgNull"></td>
      {/for}

   {/if}
   <!-- END BLOCK : CALENDAR_DATA -->
</tbody>
</table>
<div class="calendar-info">
   <div class="calendar-explain d-flex">
      <div class="explain-I mr-5">{$lang["calendar"]["eventday"]}</div>
      <div class="explain-II">{$lang["calendar"]["datenow"]}</div>
   </div>
   <div class="calendar-info d-none">
      <div class="calendar-info-title">{$lang["calendar"]["note1"]}</div>
      <ul>
         <li>
            <i class="icon" style="background-color: #00aeef;"></i>
            {$lang["calendar"]["note2"]}
         </li>
         <li>
            <i class="icon" style="background-color: #ff9d65;"></i>
            {$lang["calendar"]["note3"]}
         </li>
         <li>
            <i class="icon" style="background-color: #fff;"></i>
            {$lang["calendar"]["note4"]}
         </li>
      </ul>
      <div class="clearfix"></div>
   </div>
</div>

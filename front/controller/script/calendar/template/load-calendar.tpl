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

<div id="content-wrap">
    <!--calendar-->
    <div class="carlendar">
        <!--carlendar-body-->
        <div class="carlendar-body">
            <!--nav-->


            <table width="100%" border="0" cellspacing="0" cellpadding="0">
                <tr class="calendar-tap-select">
                    {* <td align="left" width="50">
                        <div class="fc-corner-left" style="cursor:pointer;" onClick="
                            document.myCalendarForm.myCalendarDate.value = '{$btnPrevious}';
                            document.myCalendarForm.action.value = '';
                            document.myCalendarForm.myCalendarDatePer.value = '';
                            GetCalendar();
                            ">
                            <span class="fc-icon fc-icon-left-single-arrow"
                                style="margin-top:10px;margin-left:13px;"></span>
                        </div>
                    </td> *}
                    <td align="left">
                        <div class="row m-auto">
                            <div class="col-4">
                                <div class="day-custom">
                                    <span>{$myCalendarDate_Day}</span>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="select-control -style1">
                                    <select name="inputMonth" id="inputMonth" onchange="{$strActionMonth}">
                                        {for $index=1 to 12}
                                            {assign var="valMonthSelect" value="{substr({'0'|concatsmarty:{$index}},-2)}"}
                                            <option value="{$valMonthSelect}"
                                                {if $myCalendarDate_Month eq $valMonthSelect}selected{/if}>
                                                {$date_array[$langon][$valMonthSelect]}</option>
                                        {/for}
                                    </select>
                                </div>
                            </div>
                            {* <div class="col-sm-3 col-xs-4 d-none">
                                <button type="button"
                                    class="fc-today-button fc-button fc-state-default fc-corner-left fc-corner-right"
                                    style="color:#FFFFFF; width:100px;" onClick="
                                    document.myCalendarForm.myCalendarDate.value = '{date("Y-m-d")}';
                                    document.myCalendarForm.action.value = '';
                                    GetCalendar();
                                    ">
                                    {$lang["calendar"]["thismonth"]}
                                </button>
                            </div> *}
                            <div class="col-4">
                                <div class="select-control -style1">
                                    <select name="inputYear" id="inputYear" onChange="{$strActionYear}">
                                        {for $index=2013 to date('Y')+2}
                                            <option value="{$index}" {if $myCalendarDate_Year eq $index}selected="selected"
                                                {/if}>{$index|getYearLang:{$langon}}</option>
                                        {/for}
                                    </select>
                                </div>
                            </div>
                        </div>

                    </td>
                    {* <td align="right">
                        <div class="fc-corner-right" style="cursor:pointer;" onclick="document.myCalendarForm.myCalendarDate.value = '{$btnNext}';
                            document.myCalendarForm.action.value = '';
                            document.myCalendarForm.myCalendarDatePer.value = '';
                            GetCalendar();"><span class="fc-icon fc-icon-right-single-arrow"
                                style="margin-top:10px;margin-right:13px;"></span></div>
                    </td> *}
                </tr>
            </table>
            <!--end nav-->
            {* <div style="clear:both; height:10px;"></div> *}
            <table width="100%" align="center" border="0" cellpadding="0" cellspacing="1" bgcolor="#dfdfdf">
                <tr class="calDayBorder">
                    <td width="14%" height="60" align="center" class="calDayBg">
                        <span class="calDay text-active">{$day_array[$langon]['07']}</span>
                    </td>
                    <td width="15%" align="center" class="calDayBg">
                        <span class="calDay">{$day_array[$langon]['01']}</span>
                    </td>
                    <td width="15%" align="center" class="calDayBg">
                        <span class="calDay">{$day_array[$langon]['02']}</span>
                    </td>
                    <td width="15%" align="center" class="calDayBg">
                        <span class="calDay">{$day_array[$langon]['03']}</span>
                    </td>
                    <td width="14%" align="center" class="calDayBg">
                        <span class="calDay">{$day_array[$langon]['04']}</span>
                    </td>
                    <td width="14%" align="center" class="calDayBg">
                        <span class="calDay">{$day_array[$langon]['05']}</span>
                    </td>
                    <td width="13%" align="center" class="calDayBg">
                        <span class="calDay text-active">{$day_array[$langon]['06']}</span>
                    </td>
                </tr>
                <!-- START BLOCK : CALENDAR_DATA -->
                {if $startWeekDay gte 1}
                    <!-- check Start Day in Week -->
                    {for $index=1 to $startWeekDay}
                        <td width="{$mod_calendar_config["cell-width"]}" height="{$mod_calendar_config["cell-height"]}"
                            class="calDayNameberBgNull"></td>
                    {/for}
                    {for $fornew=$index to 7}
                        <!-- check Event Date -->
                        {if $myCalendarEventCounter[$mCount] == 0 || $myCalendarEventCounter[$mCount] == ""}
                            {if $Checktoday == "{$myCalendarDate_Year}-{$myCalendarDate_Month}-{$mCount|formatNum}"}
                                {$strOptionFont = "class=\"calDayToday\"  title=\" {$lang['calendar']['thisday']} \""}
                            {else}
                                {$strOptionFont = "class=\"calDayToday\" "}
                            {/if}
                            <td width="{$mod_calendar_config["cell-width"]}" height="{$mod_calendar_config["cell-height"]}"
                                class="calDayNameberBgCaseA">
                                <div>{$mCount}</div>
                            </td>
                        {else}
                            {assign var="strOptionFont" value=""}
                            {assign var="strOption" value=""}
                            {assign var="valCheckA" value="0"}
                            {assign var="valDateToday" value="{sprintf('%04d-%02d-%02d', $myCalendarDate_Year, $myCalendarDate_Month, {formatNum($mCount)})}"}
                            {if $Checktoday == "{$myCalendarDate_Year}-{$myCalendarDate_Month}-{$mCount|formatNum}"}
                                {if $mySpecialDayCounter[$mCount] == 0 || $mySpecialDayCounter[$mCount] == ""}
                                    {assign var="strOptionFont" value="class=\"calDayToday\"  title=\"{$lang['calendar']['thisday']}\" "}
                                    {assign var="valCheckA" value="1"}
                                {else}
                                    {assign var="strOptionFont" value="class=\"calDayNormal\""}
                                    {assign var="valCheckA" value="0"}
                                {/if}
                            {elseif $mySpecialDayCounter[$mCount] == 0 || $mySpecialDayCounter[$mCount] == ""}
                                {assign var="strOptionFont" value="class=\"calDayEvent\""}
                                {assign var="valCheckA" value="1"}
                            {else}
                                {assign var="strOptionFont" value="class=\"calDayNormal\""}
                                {assign var="valCheckA" value="0"}
                            {/if}
                            <td width="{$mod_calendar_config["cell-width"]}" height="{$mod_calendar_config["cell-height"]}"
                                class="calDayNameberBgCaseB">
                                {if $valCheckA >= 1}
                                    <a href="javascript:void(0)" onclick="
                                document.myCalendarForm.myCalendarDatePer.value = '{$myCalendarDate_Year}-{$myCalendarDate_Month}-{formatNum($mCount)}';
                                document.myCalendarForm.action.value = '';
                                getCalendarDetailAll();
                                " title="{$mCount}">
                                        <div {$strOptionFont}>{$mCount}</div>
                                    </a>
                                {else}
                                    <span {$strOptionFont}>{$mCount}</span>
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
                                {assign var="strOptionFont" value="class=\"calDayToday\"  title=\"{$lang['calendar']['thisday']}\"
                    "}
                            {else}
                                {$strOptionFont = "class=\"calDayNormal\" "}
                            {/if}
                            <td width="{$mod_calendar_config["cell-width"]}" height="{$mod_calendar_config["cell-height"]}"
                                class="calDayNameberBgCaseA">
                                <div {$strOptionFont}>{$mCount}</div>
                            </td>
                        {else}
                            {assign var="strOptionFont" value=""}
                            {assign var="strOption" value=""}
                            {assign var="valCheckA" value="0"}
                            {assign var="valDateToday" value="{sprintf('%04d-%02d-%02d', $myCalendarDate_Year, $myCalendarDate_Month, {formatNum($mCount)})}"}
                            {if $Checktoday == "{$myCalendarDate_Year}-{$myCalendarDate_Month}-{$mCount|formatNum}"}
                                {if $mySpecialDayCounter[$mCount] == 0 || $mySpecialDayCounter[$mCount] == ""}
                                    {assign var="strOptionFont" value="class=\"calDayToday\"  title=\"{$lang['calendar']['thisday']}\""}
                                    {assign var="valCheckA" value="1"}
                                {else}
                                    {assign var="strOptionFont" value="class=\"calDayNormal\""}
                                    {assign var="valCheckA" value="0"}
                                {/if}
                            {elseif $mySpecialDayCounter[$mCount] == 0 || $mySpecialDayCounter[$mCount] == ""}
                                {assign var="strOptionFont" value="class=\"calDayEvent\""}
                                {assign var="valCheckA" value="1"}
                            {else}
                                {assign var="strOptionFont" value="class=\"calDayNormal\""}
                                {assign var="valCheckA" value="0"}
                            {/if}
                            <td width="{$mod_calendar_config["cell-width"]}" height="{$mod_calendar_config["cell-height"]}"
                                class="calDayNameberBgCaseB">
                                {if $valCheckA >= 1}
                                    <a href="javascript:void(0)" onclick="
                        document.myCalendarForm.myCalendarDatePer.value = '{$myCalendarDate_Year}-{$myCalendarDate_Month}-{formatNum($mCount)}';
                        document.myCalendarForm.action.value = '';
                        getCalendarDetailAll();
                        " title="{$mCount}">
                                        <div {$strOptionFont}>{$mCount}</div>
                                    </a>
                                {else}
                                    <span {$strOptionFont}>{$mCount}</span>
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
                    {for $forwhile=$colcount to 7}
                        <td width="{$mod_calendar_config["cell-width"]}" height="{$mod_calendar_config["cell-height"]}"
                            class="calDayNameberBgNull"></td>
                    {/for}

                {/if}
                <!-- END BLOCK : CALENDAR_DATA -->
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
            <!--end calendar-->
        </div>
</div>
<?php

// getDateNow
$myCalendarDate = $_REQUEST['myCalendarDate'] ? $_REQUEST['myCalendarDate'] : "";
if ($myCalendarDate == "") {
   $myCalendarDate = getDateNow();
}
$myCalendarDateArray = explode("-", $myCalendarDate);

$GroupID = $_REQUEST['myCalendarGroup'];

// Find Start Week Day ##############################################
$today = getdate(mktime(0, 0, 0, $myCalendarDateArray[1], 1, $myCalendarDateArray[0]));


$startWeekDay = $today['wday'];
$myCalendarDateYear = $today['year'];
$myCalendarDateMonth = $today['mon'];
$endDayOfMonth = getEndDayOfMonth($myCalendarDate);

$myStartDateOfMonth = sprintf("%04d-%02d-%02d", $myCalendarDateArray[0], $myCalendarDateArray[1], 1);
$myEndDateOfMonth = sprintf("%04d-%02d-%02d", $myCalendarDateArray[0], $myCalendarDateArray[1], $endDayOfMonth);

$myCalendarEventCounter = array();
$myCalendarEventCounter[0] = 0;

// set up active days
$CallActivityData = $calendarPage->CallActivityData($myStartDateOfMonth, $myEndDateOfMonth, 'month', $GroupID);

if ($CallActivityData->_numOfRows > 0) {
   foreach ($CallActivityData as $keyCallActivityData => $valueCallActivityData) {
      if (strcmp($valueCallActivityData[$config['cas']['db']['main'] . "_sdate"], $myStartDateOfMonth) < 1) {
         $myCalendarDateStart = $myStartDateOfMonth;
      } else {
         $myCalendarDateStart = $valueCallActivityData[$config['cas']['db']['main'] . "_sdate"];
      }
      $myStart = substr($myCalendarDateStart, 8, 2) * 1;
      if ($valueCallActivityData[$config['cas']['db']['main'] . "_edate"] != "0000-00-00") {
         if (strcmp($myEndDateOfMonth, $valueCallActivityData[$config['cas']['db']['main'] . "_edate"]) < 1) {
            $myCalendarDateEnd = $myEndDateOfMonth;
         } else {
            $myCalendarDateEnd = $valueCallActivityData[$config['cas']['db']['main'] . "_edate"];
         }
      } else {
         $myCalendarDateEnd = "0000-00-00";
      }

      if ($myCalendarDateEnd == "0000-00-00") {
         $myCalendarEventCounter[$myStart]++;
      } else {
         $myEnd = substr($myCalendarDateEnd, 8, 2) * 1;
         for ($i = $myStart; $i <= $myEnd; $i++) {
            $myCalendarEventCounter[$i]++;
         }
      }
   }
}

//----------- Add Special Day -----------------------
$mySpecialDayCounter[0] = 0;
$myCalendarDateArr = explode("-", $myCalendarDate);
$maxSpecialDayOfMonth = count($arrySpecialDayOfMonth[$myCalendarDateArr[1]]);
for ($i = 0; $i < $maxSpecialDayOfMonth; $i++) {

   $arry = explode(";;", $arrySpecialDayOfMonth[$myCalendarDateArr[1]][$i]);
   $mCount = $arry[0];
   $specialDayName = $arry[1];

   $myCalendarEventCounter[$mCount]++;
   $mySpecialDayCounter[$mCount]++;
}

// Load calendar display #############################################
$Checktoday = date('Y-m-d');
$mCount = 1;

$myCalendarDateArr = explode("-", $myCalendarDate);
if ($myCalendarDateArr[1] < 1) {
   $thisMonth = substr($myCalendarDateArr[1], 1, 1);
} else {
   $thisMonth = $myCalendarDateArr[1];
}

if ($thisMonth == 12) {
   $NextMonth = "01";
   $NextYear = $myCalendarDateArr[0] + 1;
   $BackMonth = 11;
   $BackYear = $myCalendarDateArr[0];
} else if ($thisMonth == 1) {
   $NextMonth = format($thisMonth + 1, 2);
   $NextYear = $myCalendarDateArr[0];
   $BackMonth = 12;
   $BackYear = $myCalendarDateArr[0] - 1;
} else {
   $NextMonth = format($thisMonth + 1, 2);
   $NextYear = $myCalendarDateArr[0];
   $BackMonth = format($thisMonth - 1, 2);
   $BackYear = $myCalendarDateArr[0];
}

// set up action
$strActionMonth = "
	if(this.value>0) {

		document.myCalendarForm.myCalendarDate.value = '" . $myCalendarDateArr[0] . "-'+this.value+'-'+document.myCalendarForm.myCalendarDate_Day.value;
		document.myCalendarForm.myCalendarDatePer.value = '';
		document.myCalendarForm.action.value = '';
		GetCalendar();
	}else{
		document.myCalendarForm.myCalendarDate.value ='';
		document.myCalendarForm.action.value = '';
		document.myCalendarForm.myCalendarDatePer.value = '';
	}";

$strActionYear = "
	document.myCalendarForm.myCalendarDate.value = this.value+'-'+'" . $thisMonth . "'+'-'+document.myCalendarForm.myCalendarDate_Day.value;
	document.myCalendarForm.action.value = '';
	document.myCalendarForm.myCalendarDatePer.value = '';
	GetCalendar();";

$btnPrevious = $BackYear . "-" . $BackMonth . "-" . $myCalendarDateArr[2];
$btnNext = $NextYear . "-" . $NextMonth . "-" . $myCalendarDateArr[2];

$settingPage = array(
    "page" => $menuActive,
    "template" => "load-calendar.tpl",
    "display" => "page-single"
);

$smarty->assign("mySpecialDayCounter", $mySpecialDayCounter);
$smarty->assign("myCalendarEventCounter", $myCalendarEventCounter);
$smarty->assign("mCount", $mCount);
$smarty->assign("Checktoday", $Checktoday);
$smarty->assign("endDayOfMonth", $endDayOfMonth);
$smarty->assign("startWeekDay", $startWeekDay);
$smarty->assign("btnPrevious", $btnPrevious);
$smarty->assign("btnNext", $btnNext);
$smarty->assign("strActionMonth", $strActionMonth);
$smarty->assign("strActionYear", $strActionYear);
$smarty->assign("myCalendarDate", $myCalendarDate);
$smarty->assign("myCalendarDate_Day", $myCalendarDateArr[2]);
$smarty->assign("myCalendarDate_Month", $myCalendarDateArr[1]);
$smarty->assign("myCalendarDate_Year", $myCalendarDateArr[0]);
$smarty->assign("mod_calendar_config", $mod_calendar_config);
$smarty->assign("myCalendarGroup", $GroupID);


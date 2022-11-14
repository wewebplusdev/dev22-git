<?php
// getDateNow
$myCalendarDate = $_REQUEST['myCalendarDate'] ? $_REQUEST['myCalendarDate'] : "";
if($myCalendarDate=="") { $myCalendarDate=getDateNow(); }
$myCalendarDateArray = explode("-",$myCalendarDate);

$GroupID = $_REQUEST['myCalendarGroup'];
if (!empty($_REQUEST['myCalendarDatePer'])) {
    $dateList = explode("-",$_REQUEST['myCalendarDatePer']);
    $txt_calendarList = $lang["calendar"]["activity"] . " " . $dateList[2]. " " . $date_array[$url->pagelang[2]][$dateList[1]] . " " . getYearLang($dateList[0], $url->pagelang[2]);
}else{
    $txt_calendarList = $lang["calendar"]["activityM"] . " " . $date_array[$url->pagelang[2]][$_REQUEST['myCalendarDate_Month']] . " " . getYearLang($_REQUEST['myCalendarDate_Year'], $url->pagelang[2]);
}
$smarty->assign("txt_calendarList", $txt_calendarList);

// Find Start Week Day ##############################################
$today=getdate(mktime(0,0,0,$myCalendarDateArray[1],1,$myCalendarDateArray[0]));

$startWeekDay=$today['wday'];
$myCalendarDateYear=$today['year'];
$myCalendarDateMonth=$today['mon'];
$endDayOfMonth=getEndDayOfMonth($myCalendarDate);

$myStartDateOfMonth = sprintf("%04d-%02d-%02d",$myCalendarDateArray[0],$myCalendarDateArray[1],1);
$myEndDateOfMonth = sprintf("%04d-%02d-%02d",$myCalendarDateArray[0],$myCalendarDateArray[1],$endDayOfMonth);

$myCalendarData[0]="";
$myCalendarEventCounter[0]=0;

// call active days
$CallActivityData = $calendarPage->CallActivityData($myStartDateOfMonth, $myEndDateOfMonth, 'day', $GroupID);
$smarty->assign("CallActivityData", $CallActivityData);

$settingPage = array(
    "page" => $menuActive,
    "template" => "load-calendar-list.tpl",
    "display" => "page-single"
);


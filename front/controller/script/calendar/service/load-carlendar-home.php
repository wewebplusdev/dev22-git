<?php
// getDateNow
$myCalendarDate = $_REQUEST['myCalendarDate'];
if($myCalendarDate=="") { $myCalendarDate=getDateNow(); }
$myCalendarDateArray = explode("-",$myCalendarDate);

// Find Start Week Day ##############################################
$today=getdate(mktime(0,0,0,$myCalendarDateArray[1],1,$myCalendarDateArray[0]));

$startWeekDay=$today[wday];
$myCalendarDateYear=$today[year];
$myCalendarDateMonth=$today[mon];
$endDayOfMonth=getEndDayOfMonth($myCalendarDate);

$myStartDateOfMonth = sprintf("%04d-%02d-%02d",$myCalendarDateArray[0],$myCalendarDateArray[1],1);
$myEndDateOfMonth = sprintf("%04d-%02d-%02d",$myCalendarDateArray[0],$myCalendarDateArray[1],$endDayOfMonth);

$myCalendarData[0]="";
$myCalendarEventCounter[0]=0;

// call active days
$callCalendarList = $calendarPage->callCalendarList($config['cl']['masterkey'], $myStartDateOfMonth, $myEndDateOfMonth);
$smarty->assign("callCalendarList", $callCalendarList);

$settingPage = array(
    "page" => $menuActive,
    "template" => "load-calendar-home.tpl",
    "display" => "page-single"
);


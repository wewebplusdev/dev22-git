<!DOCTYPE html>
<html lang="en">

<head>
    <?php include('inc/metatag.php'); ?>
    <?php include('inc/loadstyle.php'); ?>
</head>

<body>
    <div class="global-container">
        <?php include('inc/header.php'); ?>
        <section class="site-container">
            <div class="default-header">
                <div class="top-graphic mb-4">
                    <figure class="cover">
                        <img class="figure-img img-fluid" src="<?php echo $core_template; ?>/assets/img/background/mock-top-grapphic-2.png" alt="">
                    </figure>
                    <div class="container">
                        <div class="wrapper">
                            <div class="title typo-lg">งานบริการ</div>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">หน้าหลัก</a></li>
                                <!-- <li class="breadcrumb-item"><a href="#">งานบริการ</a></li> -->
                                <li class="breadcrumb-item active" aria-current="page">ปฏิทินกิจกรรม</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <div class="default-page calendar-page">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-5 col-md-6 col-12 order-md-2">
                            <div class="calendar-block">
                                <div id="calendar">
                                    <div class="calendar-tap-select">
                                        <div class="row align-items-center h-100 no-gutters">
                                            <div class="col-md col-4">
                                                <div class="day">
                                                    <div class="txt">01</div>
                                                    <div class="border-custom"></div>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="form-group">
                                                    <label class="control-label visuallyhidden" for="calenadrSelectmonth">Calenadr Selec tmonth</label>
                                                    <div class="select-wrapper">
                                                        <select class="select-control select-year" name="ordernews" id="calenadrSelectmonth" style="width: 100%;">
                                                            <option value="SELECT1">มกราคม</option>
                                                            <option value="SELECT2">กุมภาพันธ์</option>
                                                            <option value="SELECT3">มีนาคม</option>
                                                            <option value="SELECT4">เมษายน</option>
                                                            <option value="SELECT5">พฤษภาคม</option>
                                                            <option value="SELECT6">มิถุนายน</option>
                                                            <option value="SELECT7">กรกฎาคม</option>
                                                            <option value="SELECT8">สิงหาคม</option>
                                                            <option value="SELECT9">กันยายน</option>
                                                            <option value="SELECT10">ตุลาคม </option>
                                                            <option value="SELECT11">พฤศจิกายน</option>
                                                            <option value="SELECT12">ธันวาคม</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="form-group">
                                                    <label class="control-label visuallyhidden" for="calenadrSelectyear">Calenadr Selec year</label>
                                                    <div class="select-wrapper">
                                                        <select class="select-control select-year" name="ordernews" id="calenadrSelectyear" style="width: 80%;">
                                                            <option value="SELECT1">2565</option>
                                                            <option value="SELECT2">2557</option>
                                                            <option value="SELECT3">2558</option>
                                                            <option value="SELECT4">2559</option>
                                                            <option value="SELECT5">2560</option>
                                                            <option value="SELECT6">2561</option>
                                                            <option value="SELECT7">2562</option>
                                                            <option value="SELECT8">2563</option>
                                                            <option value="SELECT9">2564</option>
                                                            <option value="SELECT10">2565 </option>
                                                            <option value="SELECT11">2566</option>
                                                            <option value="SELECT12">2567</option>
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
                                                    <span class="calDay text-active">S</span>
                                                </td>
                                                <td width="60" height="55" align="center" class="calDayBg">
                                                    <span class="calDay">M</span>
                                                </td>
                                                <td width="60" height="55" align="center" class="calDayBg">
                                                    <span class="calDay">T</span>
                                                </td>
                                                <td width="60" height="55" align="center" class="calDayBg">
                                                    <span class="calDay">W</span>
                                                </td>
                                                <td width="60" height="55" align="center" class="calDayBg">
                                                    <span class="calDay">T</span>
                                                </td>
                                                <td width="60" height="55" align="center" class="calDayBg">
                                                    <span class="calDay">F</span>
                                                </td>
                                                <td width="60" height="55" align="center" class="calDayBg">
                                                    <span class="calDay text-active">S</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td width="60" height="60" class="calDayNameberBgNull"></td>
                                                <td width="60" height="60" class="calDayNameberBgNull"></td>
                                                <td width="60" height="60" class="calDayNameberBgNull"></td>
                                                <td width="60" height="60" class="calDayNameberBgNull"></td>
                                                <td width="60" height="60" class="calDayNameberBgNull"></td>
                                                <td width="60" height="60" class="calDayNameberBgNull"></td>
                                                <td width="60" align="center" height="60" class="calDayNameberBgCaseA">
                                                    <div class="calDayToday">1</div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td width="60" align="center" height="60" class="calDayNameberBgCaseA">
                                                    <div class="calDayNormal">2</div>
                                                </td>
                                                <td width="60" align="center" height="60" class="calDayNameberBgCaseA">
                                                    <div class="calDayNormal">3</div>
                                                </td>
                                                <td width="60" align="center" height="60" class="calDayNameberBgCaseA">
                                                    <div class="calDayNormal">4</div>
                                                </td>
                                                <td width="60" align="center" height="60" class="calDayNameberBgCaseA">
                                                    <div class="calDayNormal">5</div>
                                                </td>
                                                <td width="60" align="center" height="60" class="calDayNameberBgCaseA">
                                                    <div class="calDayNormal">6</div>
                                                </td>
                                                <td width="60" align="center" height="60" class="calDayNameberBgCaseA">
                                                    <div class="calDayNormal">7</div>
                                                </td>
                                                <td width="60" align="center" height="60" class="calDayNameberBgCaseA">
                                                    <div class="calDayNormal">8</div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td width="60" align="center" height="60" class="calDayNameberBgCaseA">
                                                    <div class="calDayNormal">9</div>
                                                </td>
                                                <td width="60" align="center" height="60" class="calDayNameberBgCaseA">
                                                    <div class="calDayNormal">10</div>
                                                </td>
                                                <td width="60" align="center" height="60" class="calDayNameberBgCaseA">
                                                    <div class="calDayNormal">11</div>
                                                </td>
                                                <td width="60" align="center" height="60" class="calDayNameberBgCaseA calDayEvent">
                                                    <div class="calDayNormal">12</div>
                                                </td>
                                                <td width="60" align="center" height="60" class="calDayNameberBgCaseA calDayEvent">
                                                    <div class="calDayNormal">13</div>
                                                </td>
                                                <td width="60" align="center" height="60" class="calDayNameberBgCaseA calDayEvent">
                                                    <div class="calDayNormal">14</div>
                                                </td>
                                                <td width="60" align="center" height="60" class="calDayNameberBgCaseA">
                                                    <div class="calDayNormal">15</div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td width="60" align="center" height="60" class="calDayNameberBgCaseA">
                                                    <div class="calDayNormal">16</div>
                                                </td>
                                                <td width="60" align="center" height="60" class="calDayNameberBgCaseA">
                                                    <div class="calDayNormal">17</div>
                                                </td>
                                                <td width="60" align="center" height="60" class="calDayNameberBgCaseA calDayEvent">
                                                    <div class="calDayNormal">18</div>
                                                </td>
                                                <td width="60" align="center" height="60" class="calDayNameberBgCaseA calDayEvent">
                                                    <div class="calDayNormal">19</div>
                                                </td>
                                                <td width="60" align="center" height="60" class="calDayNameberBgCaseA">
                                                    <div class="calDayNormal">20</div>
                                                </td>
                                                <td width="60" align="center" height="60" class="calDayNameberBgCaseA">
                                                    <div class="calDayNormal">21</div>
                                                </td>
                                                <td width="60" align="center" height="60" class="calDayNameberBgCaseA">
                                                    <div class="calDayNormal">22</div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td width="60" align="center" height="60" class="calDayNameberBgCaseA calDayEvent">
                                                    <div class="calDayNormal">23</div>
                                                </td>
                                                <td width="60" align="center" height="60" class="calDayNameberBgCaseA calDayEvent">
                                                    <div class="calDayNormal">24</div>
                                                </td>
                                                <td width="60" align="center" height="60" class="calDayNameberBgCaseA calDayEvent">
                                                    <div class="calDayNormal" title="วันนี้">25</div>
                                                </td>
                                                <td width="60" align="center" height="60" class="calDayNameberBgCaseA">
                                                    <div class="calDayNormal">26</div>
                                                </td>
                                                <td width="60" align="center" height="60" class="calDayNameberBgCaseA">
                                                    <div class="calDayNormal">27</div>
                                                </td>
                                                <td width="60" align="center" height="60" class="calDayNameberBgCaseA">
                                                    <div class="calDayNormal">28</div>
                                                </td>
                                                <td width="60" align="center" height="60" class="calDayNameberBgCaseA">
                                                    <div class="calDayNormal">29</div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td width="60" align="center" height="60" class="calDayNameberBgCaseA">
                                                    <div class="calDayNormal">30</div>
                                                </td>
                                                <td width="60" align="center" height="60" class="calDayNameberBgCaseA">
                                                    <div class="calDayNormal">31</div>
                                                </td>
                                                <td width="60" height="60" class="calDayNameberBgNull"></td>
                                                <td width="60" height="60" class="calDayNameberBgNull"></td>
                                                <td width="60" height="60" class="calDayNameberBgNull"></td>
                                                <td width="60" height="60" class="calDayNameberBgNull"></td>
                                                <td width="60" height="60" class="calDayNameberBgNull"></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <div class="calendar-info">
                                        <div class="calendar-explain d-flex">
                                            <div class="explain-I mr-5">วันที่มีกิจกรรม</div>
                                            <div class="explain-II">วันปัจจุบัน</div>
                                        </div>
                                        <div class="calendar-info d-none">
                                            <div class="calendar-info-title"><strong>หมายเหตุ</strong> : คลิ๊กที่วันที่เพื่อแสดงผลกิจกรรมต่างๆ ที่มีในวันที่นั้นๆ</div>
                                            <ul>
                                                <li>
                                                    <i class="icon" style="background-color: #00aeef;"></i>
                                                    วันที่ปัจจุบัน (กรณีมีกิจกรรมวันที่ในส่วนนี้สามารถคลิ๊กได้)
                                                </li>
                                                <li>
                                                    <i class="icon" style="background-color: #ff9d65;"></i>
                                                    วันที่มีกิจกรรมต่างๆ
                                                </li>
                                                <li>
                                                    <i class="icon" style="background-color: #fff;"></i>
                                                    วันที่ปกติ (ไม่มีกิจกรรม)
                                                </li>
                                            </ul>
                                            <div class="clearfix"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-7 col-md-6 col-12 order-md-1">
                            <div id="calendarList">
                                <div class="title">
                                    <span>กิจกรรมที่จัดในเดือน มกราคม 2565</span>
                                </div>
                                <div class="calendar-vertical-block">
                                    <?php for ($i = 1; $i <= 10; $i++) { ?>
                                        <a href="javascript:void(0)" class="link">
                                            <div class="list-wrapper">
                                                <div class="row no-gutters">
                                                    <div class="col-9">
                                                        <div class="list-inner">
                                                            <div class="list-title text-limit -x2">
                                                                <span class="icon"></span>
                                                                อบรม "การปฐมพยาบาลฉุกเฉินและการกู้ชีพขั้นพื้นฐาน" สำหรับบุคลากรสำนักยาและวัตถุเสพติด
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col text-right">
                                                        <div class="list-date text-limit">
                                                            <span>28-29 มกราคม</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-end">
                        <div class="col-xl-5 col-md-6 col-12">
                            <div class="calendar-group">
                                <div class="title">ปฏิทินกิจกรรม</div>
                                <p class="event-group" style="cursor: pointer;" data-id="5">
                                    <span class="icon" style="background-color: #013f94;"></span>
                                    ปฏิทินกิจกรรมการประชุมห้องสารมาตรฐาน 328
                                </p>
                                <p class="event-group" style="cursor: pointer;" data-id="4">
                                    <span class="icon" style="background-color: #CFE0FF;"></span>
                                    ปฏิทินกิจกรรมการประชุมห้องตำรายา 416
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
        </section>
        <?php include('inc/footer.php'); ?>
    </div>
    <?php include('inc/loadscript.php'); ?>
</body>

</html>
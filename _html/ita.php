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
                <div class="top-graphic">
                    <figure class="cover">
                        <img src="<?php echo $core_template; ?>/assets/img/background/mock-top-grapphic-2.png" alt="">
                    </figure>
                    <div class="container">
                        <div class="wrapper">
                            <div class="title typo-lg">ITA ประจำปีงบประมาณ พ.ศ. 2565</div>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#" class="link">หน้าหลัก</a></li>
                                <li class="breadcrumb-item active" aria-current="page">ITA ประจำปีงบประมาณ พ.ศ. 2565</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>

            <div class="default-page about">
                <div class="container">
                    <div class="h-title">ITA ประจำปีงบประมาณ พ.ศ. 2565</div>
                    <p class="desc mb-3">แบบวัดการเปิดเผยข้อมูลสาธารณะ (Open Data Integrity and Transparency Assessment: OIT) สำหรับการประเมินคุณธรรมและความโปร่งใสในการดำเนินงานของหน่วยงานภาครัฐ (ITA) ประจำปีงบประมาณ พ.ศ. 2565</p>

                    <!-- <div class="group-list year-list">
                        <ul class="nav-list">
                            <li>
                                <a href="" class="link active">ปี 2566</a>
                            </li>
                            <li>
                                <a href="" class="link ">ปี 2565</a>
                            </li>
                        </ul>
                    </div> -->

                    <div class="oit-list">
                        <div class="collapse-block">
                            <div id="accordion-oit">
                                <ul class="item-list fluid">
                                    <li class="item">
                                        <div class="title">ตัวชี้วัดที่ 9 การเปิดเผยข้อมูล ประกอบด้วย 5 ตัวชี้วัดย่อย ดังนี้</div>
                                        <div class="card">
                                            <div class="card-header">
                                                <h3 class="mb-0">
                                                    <button class="btn btn-lg fluid collapsed" data-toggle="collapse" data-target="#oit-01" aria-expanded="false" aria-controls="collapse">
                                                        <span class="text-limit">
                                                            ตัวชี้วัดย่อยที่ 9.1 ข้อมูลพื้นฐาน
                                                        </span>
                                                        <span class="feather icon-plus-circle"></span>
                                                    </button>
                                                </h3>
                                            </div>
                                            <div id="oit-01" class="collapse" data-parent="#accordion-oit">
                                                <div class="card-body">
                                                    <table class="table" cellpadding="0">
                                                        <tbody>
                                                            <tr>
                                                                <td style="width:15%;">
                                                                    <strong>ตัวชี้วัดย่อย/ข้อ</strong>
                                                                </td>
                                                                <td style="width:35%;">
                                                                    <strong>ข้อมูล</strong>
                                                                </td>
                                                                <td>
                                                                    <strong>รายละเอียด</strong>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td colspan="3">
                                                                    <strong>ตัวชี้วัดย่อยที่ 9.1 ข้อมูลพื้นฐาน</strong>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td colspan="3">
                                                                    <strong>ข้อมูลพื้นฐาน</strong>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td style="text-align: center;">
                                                                    OIT 1
                                                                </td>
                                                                <td>
                                                                    โครงสร้าง
                                                                </td>
                                                                <td>
                                                                    <ul class="pro_list1" style="margin-top:20px;">
                                                                        <li><a href="about_structure.html"><b>โครงสร้าง</b></a></li>
                                                                    </ul>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td style="text-align: center;">
                                                                    OIT 2
                                                                </td>
                                                                <td>
                                                                    ข้อมูลผู้บริหาร
                                                                </td>
                                                                <td>
                                                                    <ul class="pro_list1" style="margin-top:20px;">
                                                                        <li><a href="thai/about_us/GIT_Executive_2021.pdf"><b>คณะผู้บริหารสถาบัน</b></a></li>
                                                                        <li><a href="about_staff.html"><b>คณะกรรมการสถาบัน</b></a></li>
                                                                    </ul>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td style="text-align: center;">
                                                                    OIT 3
                                                                </td>
                                                                <td>
                                                                    อำนาจหน้าที่
                                                                </td>
                                                                <td>
                                                                    <ul class="pro_list1" style="margin-top:20px;">
                                                                        <li><a href="about_mission.html"><b>อำนาจหน้าที่ (ตามพระราชกฤษฎีกาจัดตั้งสถาบันฯ หมวด 1 มาตรา 8 และมาตรา 9)</b></a></li>

                                                                    </ul>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td style="text-align: center;">
                                                                    OIT 4
                                                                </td>
                                                                <td>
                                                                    แผนยุทธศาสตร์หรือแผนพัฒนาหน่วยงาน
                                                                </td>
                                                                <td>
                                                                    <ul class="pro_list1" style="margin-top:20px;">
                                                                        <li><a href="thai/about_us/strategic/2021/GIT_action_plan_5y.pdf"><b>แผนยุทธศาสตร์ของสถาบันวิจัยและพัฒนาอัญมณีและเครื่องประดับแห่งชาติ (องค์การมหาชน) ปี 2565-2569</b></a></li>
                                                                        <li><a href="thai/about_us/strategic/2022/02/GIT_strategic_2022.pdf"><b>กรอบแผนปฏิบัติการ พ.ศ. 2565 (เชิงยุทธศาสตร์สถาบัน)</b></a></li>
                                                                        <li><a href="thai/about_us/strategic/strategic_gem_jewelry.pdf"><b>แผนปฎิบัติงานและแผนงบประมาณประจำปี 2565</b></a></li>

                                                                    </ul>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td style="text-align: center;">
                                                                    OIT 5
                                                                </td>
                                                                <td>
                                                                    ข้อมูลการติดต่อ
                                                                </td>
                                                                <td>
                                                                    <ul class="pro_list1" style="margin-top:20px;">
                                                                        <li><a href="contact_us.html"><b>ติดต่อเรา</b></a></li>


                                                                    </ul>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td style="text-align: center;">
                                                                    OIT 6
                                                                </td>
                                                                <td>
                                                                    กฎหมายที่เกี่ยวข้อง
                                                                </td>
                                                                <td>
                                                                    <ul class="pro_list1" style="margin-top:20px;">
                                                                        <li><a href="about_mission.html"><b>กฎหมาย กฎ ระเบียบ ข้อบังคับ ประกาศ</b></a></li>
                                                                    </ul>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td colspan="3">
                                                                    <strong>การประชาสัมพันธ์</strong>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td style="text-align: center;">
                                                                    OIT 7
                                                                </td>
                                                                <td>
                                                                    ข่าวประชาสัมพันธ์
                                                                </td>
                                                                <td>
                                                                    <ul class="pro_list1" style="margin-top:20px;">
                                                                        <li><a href="about_news.html"><b>ข่าวสาร</b></a></li>
                                                                    </ul>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td colspan="3">
                                                                    <strong>การปฏิสัมพันธ์ข้อมูล</strong>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td style="text-align: center;">
                                                                    OIT 8
                                                                </td>
                                                                <td>
                                                                    Q&amp;A
                                                                </td>
                                                                <td>
                                                                    <ul class="pro_list1" style="margin-top:20px;">
                                                                        <li><a href="index.html"><b>Q&amp;A</b></a></li>
                                                                    </ul>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td style="text-align: center;">
                                                                    OIT 9
                                                                </td>
                                                                <td>
                                                                    Social Network
                                                                </td>
                                                                <td>
                                                                    <ul class="pro_list1" style="margin-top:20px;">
                                                                        <li><a href="index.html"><b>Social Network</b></a></li>
                                                                    </ul>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="item">
                                        <div class="card">
                                            <div class="card-header">
                                                <h3 class="mb-0">
                                                    <button class="btn btn-lg fluid collapsed" data-toggle="collapse" data-target="#oit-02" aria-expanded="false" aria-controls="collapse">
                                                        <span class="text-limit">
                                                            ตัวชี้วัดย่อยที่ 9.2 การบริหารงาน
                                                        </span>
                                                        <span class="feather icon-plus-circle"></span>
                                                    </button>
                                                </h3>
                                            </div>
                                            <div id="oit-02" class="collapse" data-parent="#accordion-oit">
                                                <div class="card-body">
                                                    <table class="table" cellpadding="0">
                                                        <tbody>
                                                            <tr>
                                                                <td style="width:15%;">
                                                                    <strong>ตัวชี้วัดย่อย/ข้อ</strong>
                                                                </td>
                                                                <td style="width:35%;">
                                                                    <strong>ข้อมูล</strong>
                                                                </td>
                                                                <td>
                                                                    <strong>รายละเอียด</strong>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td colspan="3">
                                                                    <strong>ตัวชี้วัดย่อยที่ 9.2 การบริหารงาน</strong>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td colspan="3">
                                                                    <strong>การดำเนินงาน</strong>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td style="text-align: center;">
                                                                    OIT 10
                                                                </td>
                                                                <td>
                                                                    แผนดำเนินงานประจำปี
                                                                </td>
                                                                <td>
                                                                    <ul class="pro_list1" style="margin-top:20px;">
                                                                        <li><a href="thai/about_us/strategic/strategic_gem_jewelry.pdf"><b>แผนปฏิบัติงานและแผนงบประมาณประจำปี 2565</b></a></li>
                                                                    </ul>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td style="text-align: center;">
                                                                    OIT 11
                                                                </td>
                                                                <td>
                                                                    รายงานการกำกับติดตามการดำเนินงานประจำปี รอบ 6 เดือน
                                                                </td>
                                                                <td>
                                                                    <ul class="pro_list1" style="margin-top:20px;">
                                                                        <li><a href="thai/about_us/annual_achievement/2022/04/git_report_6M_2022.pdf"><b>รายงานผลการดำเนินงานของสถาบัน ประจำปีงบประมาณ พ.ศ. 2565 รอบ 6 เดือน (ต.ค.64 - มี.ค.65)</b></a></li>
                                                                        <li><a href="thai/about_us/annual_achievement/2022/04/git_budget_report_6M_2022.pdf"><b>รายงานผลการใช้จ่ายงบประมาณของสถาบัน ประจำปีงบประมาณ พ.ศ. 2565 รอบ 6 เดือน (ต.ค.64 - มี.ค.65)</b></a></li>
                                                                    </ul>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td style="text-align: center;">
                                                                    OIT 12
                                                                </td>
                                                                <td>
                                                                    รายงานผลการดำเนินงานประจำปี
                                                                </td>
                                                                <td>
                                                                    <ul class="pro_list1" style="margin-top:20px;">
                                                                        <li><a href="thai/about_us/annual_achievement/2022/01/git_performance_report_2021.pdf"><b>รายงานผลการดำเนินงานของสถาบันประจำปีงบประมาณ พ.ศ.2564 (รายงานผลการดำเนินงานตามยุทธศาสตร์สถาบัน)</b></a></li>
                                                                        <li><a href="thai/about_us/annual_achievement/2022/01/git_budget_report_2021.pdf"><b>รายงานผลการใช้จ่ายงบประมาณของสถาบันประจำปีงบประมาณ พ.ศ. 2564</b></a></li>
                                                                    </ul>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td colspan="3">
                                                                    <strong>การปฏิบัติงาน</strong>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td style="text-align: center;">
                                                                    OIT 13
                                                                </td>
                                                                <td>
                                                                    คู่มือหรือมาตรฐานการปฏิบัติงาน
                                                                </td>
                                                                <td>
                                                                    <ul class="pro_list1" style="margin-top:20px;">
                                                                        <li><a href="management_standard.html"><b>คู่มือหรือมาตรฐานการปฏิบัติงาน</b></a></li>
                                                                    </ul>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td colspan="3">
                                                                    <strong>การให้บริการ</strong>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td style="text-align: center;">
                                                                    OIT 14
                                                                </td>
                                                                <td>
                                                                    คู่มือหรือมาตรฐานการให้บริการ
                                                                </td>
                                                                <td>
                                                                    <ul class="pro_list1" style="margin-top:20px;">
                                                                        <li><a href="operations_standard.html"><b>คู่มือหรือมาตรฐานการให้บริการ</b></a></li>
                                                                    </ul>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td style="text-align: center;">
                                                                    OIT 15
                                                                </td>
                                                                <td>
                                                                    ข้อมูลเชิงสถิติการให้บริการ
                                                                </td>
                                                                <td>
                                                                    <ul class="pro_list1" style="margin-top:20px;">
                                                                        <li><a href="thai/about_us/annual_achievement/2022/04/git_services_report_6M_2022.pdf"><b>สถิติการให้บริการของสถาบัน ประจำปีงบประมาณ พ.ศ. 2565 รอบ 6 เดือน (ต.ค.64 - มี.ค.65)</b></a></li>
                                                                        <li><a href="thai/about_us/annual_achievement/2022/04/git_report_6M_2022.pdf"><b>รายงานผลการดำเนินงานของสถาบัน ประจำปีงบประมาณ พ.ศ. 2565 รอบ 6 เดือน (ต.ค.64 - มี.ค.65)</b></a></li>
                                                                        <li><a href="thai/about_us/annual_achievement/2022/04/git_income_report_6m_2022.pdf"><b>รายงานรายได้จากผลการดำเนินงาน ประจำปีงบประมาณ พ.ศ. 2565 รอบ 6 เดือน (ต.ค.64 - มี.ค.65)</b></a></li>
                                                                    </ul>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td style="text-align: center;">
                                                                    OIT 16
                                                                </td>
                                                                <td>
                                                                    รายงานผลการสำรวจความพึงพอใจการให้บริการ
                                                                </td>
                                                                <td>
                                                                    <ul class="pro_list1" style="margin-top:20px;">
                                                                        <li><a href="thai/about_us/annual_achievement/2022/01/satisfaction_report2021.pdf"><b>รายงานความพึงพอใจของผู้ใช้บริการ ประจำปีงบประมาณ พ.ศ.2564</b></a></li>
                                                                    </ul>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td style="text-align: center;">
                                                                    OIT 17
                                                                </td>
                                                                <td>
                                                                    E-Service
                                                                </td>
                                                                <td>
                                                                    <ul class="pro_list1" style="margin-top:20px;">
                                                                        <li><a href="e-services.html"><b>GIT e-Services</b></a></li>
                                                                    </ul>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="item">
                                        <div class="card">
                                            <div class="card-header">
                                                <h3 class="mb-0">
                                                    <button class="btn btn-lg fluid collapsed" data-toggle="collapse" data-target="#oit-03" aria-expanded="false" aria-controls="collapse">
                                                        <span class="text-limit">
                                                            ตัวชี้วัดย่อยที่ 9.3 การบริหารเงินงบประมาณ
                                                        </span>
                                                        <span class="feather icon-plus-circle"></span>
                                                    </button>
                                                </h3>
                                            </div>
                                            <div id="oit-03" class="collapse" data-parent="#accordion-oit">
                                                <div class="card-body">
                                                    <table class="table" cellpadding="0">
                                                        <tbody>
                                                            <tr>
                                                                <td style="width:15%;">
                                                                    <strong>ตัวชี้วัดย่อย/ข้อ</strong>
                                                                </td>
                                                                <td style="width:35%;">
                                                                    <strong>ข้อมูล</strong>
                                                                </td>
                                                                <td>
                                                                    <strong>รายละเอียด</strong>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td colspan="3">
                                                                    <strong>ตัวชี้วัดย่อยที่ 9.3 การบริหารเงินงบประมาณ</strong>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td colspan="3">
                                                                    <strong>แผนการใช้จ่ายงบประมาณประจำปี</strong>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td style="text-align: center;">
                                                                    OIT 18
                                                                </td>
                                                                <td>
                                                                    แผนการใช้จ่ายงบประมาณประจำปี
                                                                </td>
                                                                <td>
                                                                    <ul class="pro_list1" style="margin-top:20px;">
                                                                        <li><a href="thai/about_us/strategic/strategic_gem_jewelry.pdf"><b>แผนปฏิบัติงานและแผนงบประมาณประจำปี 2565</b></a></li>
                                                                    </ul>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td style="text-align: center;">
                                                                    OIT 19
                                                                </td>
                                                                <td>
                                                                    รายงานการกำกับติดตามการใช้จ่ายงบประมาณประจำปีรอบ 6 เดือน
                                                                </td>
                                                                <td>
                                                                    <ul class="pro_list1" style="margin-top:20px;">
                                                                        <li><a href="thai/about_us/annual_achievement/2022/04/git_budget_report_6M_2022.pdf"><b>รายงานผลการใช้จ่ายงบประมาณของสถาบัน ประจำปีงบประมาณ พ.ศ. 2565 รอบ 6 เดือน (ต.ค.64 - มี.ค.65)</b></a></li>
                                                                    </ul>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td style="text-align: center;">
                                                                    OIT 20
                                                                </td>
                                                                <td>
                                                                    รายงานผลการใช้จ่ายงบประมาณประจำปี
                                                                </td>
                                                                <td>
                                                                    <ul class="pro_list1" style="margin-top:20px;">
                                                                        <li><a href="thai/about_us/annual_achievement/2022/01/git_budget_report_2021.pdf"><b>รายงานผลการใช้จ่ายงบประมาณของสถาบัน ประจำปีงบประมาณ พ.ศ. 2564</b></a></li>
                                                                    </ul>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td colspan="3">
                                                                    <strong>การจัดซื้อจัดจ้างหรือการจัดหาพัสดุ</strong>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td style="text-align: center;">
                                                                    OIT 21
                                                                </td>
                                                                <td>
                                                                    แผนการจัดซื้อจัดจ้างหรือแผนการจัดหาพัสดุ
                                                                </td>
                                                                <td>
                                                                    <ul class="pro_list1" style="margin-top:20px;">
                                                                        <li><a href="about_procurement.html#pro2565"><b>ประกาศเผยแพร่แผนการจัดซื้อ/จัดจ้าง</b></a></li>
                                                                    </ul>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td style="text-align: center;">
                                                                    OIT 22
                                                                </td>
                                                                <td>
                                                                    ประกาศต่าง ๆ เกี่ยวกับการจัดซื้อจ้างหรือการจัดหาพัสดุ
                                                                </td>
                                                                <td>
                                                                    <ul class="pro_list1" style="margin-top:20px;">
                                                                        <li><a href="about_procurement.html#pro2565"><b>ประกาศราคากลาง (บก.06) และ TOR</b></a></li>
                                                                        <li><a href="about_procurement.html#pro2565"><b>ประกาศการจัดซื้อจัดจ้าง</b></a></li>
                                                                        <li><a href="about_procurement.html#pro2565"><b>ประกาศผู้ชนะการเสนอราคา</b></a></li>
                                                                        <li><a href="about_procurement.html#pro2565"><b>ประกาศสาระสำคัญของสัญญาหรือข้อตกลง</b></a></li>

                                                                    </ul>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td style="text-align: center;">
                                                                    OIT 23
                                                                </td>
                                                                <td>
                                                                    สรุปผลการจัดซื้อจัดจ้างหรือการจัดหาพัสดุรายเดือน
                                                                </td>
                                                                <td>
                                                                    <ul class="pro_list1" style="margin-top:20px;">
                                                                        <li><a href="about_procurement.html#procurment-2564"><b>รายงานผลการดำเนินการจัดซื้อจัดจ้างในรอบเดือน 1 เดือน</b></a></li>
                                                                    </ul>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td style="text-align: center;">
                                                                    OIT 24
                                                                </td>
                                                                <td>
                                                                    รายงานผลการจัดซื้อจัดจ้างหรือการจัดหาพัสดุประจำปี
                                                                </td>
                                                                <td>
                                                                    <ul class="pro_list1" style="margin-top:20px;">
                                                                        <li><a href="thai/about_us/annual_achievement/2022/02/procurement_2021.pdf"><b>รายงานผลการจัดซื้อจัดจ้างปีงบประมาณ พ.ศ. 2564</b></a></li>
                                                                    </ul>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="item">
                                        <div class="card">
                                            <div class="card-header">
                                                <h3 class="mb-0">
                                                    <button class="btn btn-lg fluid collapsed" data-toggle="collapse" data-target="#oit-04" aria-expanded="false" aria-controls="collapse">
                                                        <span class="text-limit">
                                                            ตัวชี้วัดย่อยที่ 9.4 การบริหารและพัฒนาทรัพยากรบุคคล
                                                        </span>
                                                        <span class="feather icon-plus-circle"></span>
                                                    </button>
                                                </h3>
                                            </div>
                                            <div id="oit-04" class="collapse" data-parent="#accordion-oit">
                                                <div class="card-body">
                                                    <table class="table" cellpadding="0">
                                                        <tbody>
                                                            <tr>
                                                                <td style="width:15%;">
                                                                    <strong>ตัวชี้วัดย่อย/ข้อ</strong>
                                                                </td>
                                                                <td style="width:35%;">
                                                                    <strong>ข้อมูล</strong>
                                                                </td>
                                                                <td>
                                                                    <strong>รายละเอียด</strong>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td colspan="3">
                                                                    <strong>ตัวชี้วัดย่อยที่ 9.4 การบริหารและพัฒนาทรัพยากรบุคคล</strong>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td colspan="3">
                                                                    <strong>การบริหารและพัฒนาทรัพยากรบุคคล</strong>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td style="text-align: center;">
                                                                    OIT 25
                                                                </td>
                                                                <td>
                                                                    นโยบายการบริหารทรัพยากรบุคคล
                                                                </td>
                                                                <td>
                                                                    <ul class="pro_list1" style="margin-top:20px;">
                                                                        <li><a href="thai/about_us/hrm/2019/HR_Policy.pdf"><b>นโยบายการบริหารทรัพยากรบุคคล</b></a></li>
                                                                        <li><a href="thai/about_us/hrm/2022/MCM_HR_Plan_2565.pdf"><b>แผนปฏิบัติการด้านการบริหารทรัพยากรบุคคล ประจำปีงบประมาณ พ.ศ. 2565</b></a></li>
                                                                        <li><a href="thai/about_us/hrm/2022/HR_Resource_Management_2022.pdf"><b>แผนพัฒนาทรัพยากรบุคคล ประจำปีงบประมาณ พ.ศ.2565</b></a></li>
                                                                    </ul>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td style="text-align: center;">
                                                                    OIT 26
                                                                </td>
                                                                <td>
                                                                    การดำเนินการตามนโยบายการบริหารทรัพยากรบุคคล
                                                                </td>
                                                                <td>
                                                                    <ul class="pro_list1" style="margin-top:20px;">

                                                                        <li><a href="thai/about_us/hrm/2022/HR_Report_6m_2022.pdf"><b>รายงานผลการดำเนินงานทรัพยากรบุคคล ประจำปีงบประมาณ 2565 รอบ 6 เดือน (ต.ค.64 - มี.ค.65)</b></a></li>
                                                                    </ul>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td style="text-align: center;">
                                                                    OIT 27
                                                                </td>
                                                                <td>
                                                                    หลักเกณฑ์การบริหารและพัฒนาทรัพยากรบุคคล
                                                                </td>
                                                                <td>
                                                                    <ul class="pro_list1" style="margin-top:20px;">
                                                                        <li>
                                                                            หลักเกณฑ์การบริหารและพัฒนาทรัพยากรบุคคล
                                                                            <ul class="pro_list1">

                                                                                <li>
                                                                                    <a href="thai/about_us/hrm/2022/HRM_03_011.pdf"><b>หลักเกณฑ์การคัดเลือก การบรรจุและแต่งตั้ง การจ้าง สัญญาจ้างและการต่อสัญญาจ้างเจ้าหน้าที่หรือลูกจ้าง พ.ศ. 2565</b></a>
                                                                                </li>

                                                                                <li>
                                                                                    <a href="thai/about_us/hrm/2021/HRM_03_02.pdf"><b>หลักเกณฑ์การพัฒนาบุคลากร</b></a>
                                                                                </li>

                                                                                <li>
                                                                                    <a href="thai/about_us/hrm/2022/HRM_03_004.pdf"><b>หลักเกณฑ์และวิธีการประเมินผลการปฏิบัติงานของเจ้าหน้าที่ ประจำปีงบประมาณ พ.ศ. 2565 </b></a>
                                                                                </li>

                                                                                <li>
                                                                                    <a href="thai/about_us/hrm/2021/HRM_03_01.pdf"><b>หลักเกณฑ์การบริหารทรัพยากรบุคคล (หมวด 9 วินัย และการรักษาวินัย)</b></a>
                                                                                </li>

                                                                                <li>
                                                                                    <a href="thai/about_us/hrm/2019/HRM_03_04.pdf"><b>หลักเกณฑ์และวิธีการเลื่อนระดับนักวิชาการ</b></a>
                                                                                </li>

                                                                                <li>
                                                                                    <a href="thai/about_us/hrm/2019/HRM_03_08.pdf"><b>ระเบียบว่าด้วยการเลื่อนเงินเดือน</b></a>
                                                                                </li>
                                                                            </ul>
                                                                        </li>

                                                                    </ul>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td style="text-align: center;">
                                                                    OIT 28
                                                                </td>
                                                                <td>
                                                                    รายงานผลการบริหารและพัฒนาทรัพยากรบุคคลประจำปี
                                                                </td>
                                                                <td>
                                                                    <ul class="pro_list1" style="margin-top:20px;">
                                                                        <li><a href="thai/about_us/hrm/2022/HR_2021.pdf"><b>รายงานผลการดำเนินงานทรัพยากรบุคคล ประจำปีงบประมาณ 2564</b></a></li>
                                                                    </ul>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="item">
                                        <div class="card">
                                            <div class="card-header">
                                                <h3 class="mb-0">
                                                    <button class="btn btn-lg fluid collapsed" data-toggle="collapse" data-target="#oit-05" aria-expanded="false" aria-controls="collapse">
                                                        <span class="text-limit">
                                                            ตัวชี้วัดย่อยที่ 9.5 การส่งเสริมความโปร่งใส
                                                        </span>
                                                        <span class="feather icon-plus-circle"></span>
                                                    </button>
                                                </h3>
                                            </div>
                                            <div id="oit-05" class="collapse" data-parent="#accordion-oit">
                                                <div class="card-body">
                                                    <table class="table" cellpadding="0">
                                                        <tbody>
                                                            <tr>
                                                                <td style="width:15%;">
                                                                    <strong>ตัวชี้วัดย่อย/ข้อ</strong>
                                                                </td>
                                                                <td style="width:35%;">
                                                                    <strong>ข้อมูล</strong>
                                                                </td>
                                                                <td>
                                                                    <strong>รายละเอียด</strong>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td colspan="3">
                                                                    <strong>ตัวชี้วัดย่อยที่ 9.5 การส่งเสริมความโปร่งใส</strong>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td colspan="3">
                                                                    <strong>การจัดการเรื่องร้องเรียนการทุจริตและประพฤติมิชอบ</strong>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td style="text-align: center;">
                                                                    OIT 29
                                                                </td>
                                                                <td>
                                                                    แนวปฏิบัติการจัดการเรื่องร้องเรียนการทุจริตและประพฤติมิชอบ
                                                                </td>
                                                                <td>
                                                                    <ul class="pro_list1" style="margin-top:20px;">
                                                                        <li><a href="thai/about_us/corruption_management_2021.pdf"><b>มาตรการจัดการเรื่องร้องเรียนการทุจริต</b></a></li>
                                                                    </ul>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td style="text-align: center;">
                                                                    OIT 30
                                                                </td>
                                                                <td>
                                                                    ช่องทางแจ้งเรื่องร้องเรียนการทุจริตและประพฤติมิชอบ
                                                                </td>
                                                                <td>
                                                                    <ul class="pro_list1" style="margin-top:20px;">
                                                                        <li><a href="https://www.git.or.th/complainSystem/default.aspx"><b>ระบบร้องเรียนการทุจริตและประพฤติมิชอบ</b></a></li>
                                                                    </ul>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td style="text-align: center;">
                                                                    OIT 31
                                                                </td>
                                                                <td>
                                                                    ข้อมูลเชิงสถิติเรื่องร้องเรียนการทุจริตและประพฤติมิชอบ
                                                                </td>
                                                                <td>
                                                                    <ul class="pro_list1" style="margin-top:20px;">
                                                                        <li><a href="thai/about_us/corruption_stat2022.pdf"><b>สถิติร้องเรียนการทุจริตและประพฤติมิชอบ</b></a></li>
                                                                    </ul>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td colspan="3">
                                                                    <strong>การเปิดโอกาสให้เกิดการมีส่วนร่วม</strong>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td style="text-align: center;">
                                                                    OIT 32
                                                                </td>
                                                                <td>
                                                                    ช่องทางการรับฟังความคิดเห็น
                                                                </td>
                                                                <td>
                                                                    <ul class="pro_list1" style="margin-top:20px;">
                                                                        <li><a href="index.html"><b>ช่องทางการรับฟังความคิดเห็น</b></a></li>
                                                                    </ul>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td style="text-align: center;">
                                                                    OIT 33
                                                                </td>
                                                                <td>
                                                                    การเปิดโอกาสให้เกิดการมีส่วนร่วม
                                                                </td>
                                                                <td>
                                                                    <ul class="pro_list1" style="margin-top:20px;">
                                                                        <li><a href="event_20220118.html"><b>GIT จัดประชุมรับฟังความคิดเห็นสถานการณ์และแนวโน้มการส่งออกของอุตสาหกรรมอัญมณีและเครื่องประดับเงิน</b></a></li>
                                                                        <li><a href="event_20211223.html"><b>GIT จัดการประชุมเตรียมพร้อมจัดงานเทศกาลนานาชาติพลอยและเครื่องประดับจันทบุรี 2021</b></a></li>
                                                                        <li><a href="event_20211215.html"><b>GIT ลงนาม MOU ความร่วมมือกับมหาวิทยาลัยบูรพา เพื่อยกระดับมาตรฐานห้องปฏิบัติการตรวจสอบอัญมณี เครื่องประดับ และโลหะมีค่า พร้อมร่วมกันพัฒนาบุคลากรและผู้ประกอบการ</b></a></li>
                                                                    </ul>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="item">
                                        <div class="title pt-3">ตัวชี้วัดที่ 10 การป้องกันการทุจริต ประกอบด้วย 2 ตัวชี้วัดย่อย ดังนี้</div>
                                        <div class="card">
                                            <div class="card-header">
                                                <h3 class="mb-0">
                                                    <button class="btn btn-lg fluid collapsed" data-toggle="collapse" data-target="#oit-10-1" aria-expanded="false" aria-controls="collapse">
                                                        <span class="text-limit">
                                                            ตัวชี้วัดย่อยที่ 10.1 การดำเนินการเพื่อป้องกันการทุจริต
                                                        </span>
                                                        <span class="feather icon-plus-circle"></span>
                                                    </button>
                                                </h3>
                                            </div>
                                            <div id="oit-10-1" class="collapse" data-parent="#accordion-oit">
                                                <div class="card-body">
                                                    <table class="table" cellpadding="0">
                                                        <tbody>
                                                            <tr>
                                                                <td style="width:15%;">
                                                                    <strong>ตัวชี้วัดย่อย/ข้อ</strong>
                                                                </td>
                                                                <td style="width:35%;">
                                                                    <strong>ข้อมูล</strong>
                                                                </td>
                                                                <td>
                                                                    <strong>รายละเอียด</strong>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td colspan="3">
                                                                    <strong>ตัวชี้วัดย่อยที่ 10.1 การดำเนินการเพื่อป้องกันการทุจริต</strong>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td colspan="3">
                                                                    <strong>เจตจำนงสุจริตของผู้บริหาร</strong>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td style="text-align: center;">
                                                                    OIT 34
                                                                </td>
                                                                <td>
                                                                    นโยบายไม่รับของขวัญ (No Gift Policy)
                                                                </td>
                                                                <td>
                                                                    <ul class="pro_list1" style="margin-top:20px;">
                                                                        <li><a href="thai/about_us/git_nogift_2021.pdf"><b>นโยบาย "No Gift Policy งดรับ-งดให้"</b></a></li>
                                                                    </ul>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td style="text-align: center;">
                                                                    OIT 35
                                                                </td>
                                                                <td>
                                                                    การมีส่วนร่วมของผู้บริหาร
                                                                </td>
                                                                <td>
                                                                    <ul class="pro_list1" style="margin-top:20px;">
                                                                        <li><a href="thai/news/pr_news/2022/01/event_20220120.pdf"><b>GIT เดินหน้าขับเคลื่อนด้านคุณธรรมและความโปร่งใส</b></a></li>
                                                                    </ul>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td colspan="3">
                                                                    <strong>การประเมินความเสี่ยงเพื่อป้องกันการทุจริต</strong>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td style="text-align: center;">
                                                                    OIT 36
                                                                </td>
                                                                <td>
                                                                    การประเมินความเสี่ยงการทุจริตและประพฤติมิชอบประจำปี
                                                                </td>
                                                                <td>
                                                                    <ul class="pro_list1" style="margin-top:20px;">
                                                                        <li><a href="thai/about_us/strategic/2022/03/GIT_corruption_plan2022.pdf"><b>แผนบริหารความเสี่ยงการทุจริต ประจำปีงบประมาณ พ.ศ. 2565</b></a></li>
                                                                        <li><a href="thai/about_us/strategic/2022/01/GIT_risk_plan2022.pdf"><b>แผนบริหารความเสี่ยง ประจำปีงบประมาณ พ.ศ. 2565</b></a></li>
                                                                        <li><a href="thai/about_us/strategic/2022/01/GIT_internal_audit_plan2022.pdf"><b>แผนควบคุมภายใน ประจำปีงบประมาณ พ.ศ.2565</b></a></li>
                                                                    </ul>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td style="text-align: center;">
                                                                    OIT 37
                                                                </td>
                                                                <td>
                                                                    การดำเนินการเพื่อจัดการความเสี่ยงการทุจริตและประพฤติมิชอบ
                                                                </td>
                                                                <td>
                                                                    <ul class="pro_list1" style="margin-top:20px;">
                                                                        <li><a href="thai/about_us/annual_achievement/2022/04/git_corrupt_report_6M_2022.pdf"><b>รายงานผลการบริหารความเสี่ยงการทุจริต ประจำปีงบประมาณ พ.ศ. 2565 รอบ 6 เดือน (ต.ค.64 - มี.ค.65)</b></a></li>
                                                                        <li><a href="thai/about_us/annual_achievement/2022/04/git_risk_internal_audit_6M_2022.pdf"><b>รายงานผลการบริหารความเสี่ยงและการควบคุมภายใน ประจำปีงบประมาณ พ.ศ.2565 รอบ 6 เดือน (ต.ค.64 - มี.ค.65)</b></a></li>

                                                                    </ul>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td colspan="3">
                                                                    <strong>การเสริมสร้างวัฒนธรรมองค์กร</strong>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td style="text-align: center;">
                                                                    OIT 38
                                                                </td>
                                                                <td>
                                                                    การเสริมสร้างวัฒนธรรมองค์กร ตามมาตรฐานทางจริยธรรม
                                                                </td>
                                                                <td>
                                                                    <ul class="pro_list1" style="margin-top:20px;">
                                                                        <li><a href="thai/news/pr_news/2022/04/event_20220404.pdf"><b>GIT รณรงค์เพื่อเสริมสร้างค่านิยมการต่อต้าน ป้องกันและปราบปรามการทุจริต</b></a></li>
                                                                        <li><a href="thai/news/pr_news/2021/10/event_20211030.pdf"><b>GIT จัดกิจกรรมส่งเสริมค่านิยมและทัศนคติในการปฏิบัติงานโดยมีจิตสำนึกที่ดี และรับผิดชอบต่อหน้าที่ ตามมาตรฐานทางจริยธรรม</b></a></li>
                                                                        <li><a href="thai/news/pr_news/2022/02/event_20220210.pdf"><b>GIT เสริมสร้างวัฒนธรรมองค์กรเพื่อร่วมกันขับเคลื่อนและยกระดับการพัฒนาด้านคุณธรรมและความโปร่งใสในการดำเนินงาน</b></a></li>

                                                                    </ul>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td colspan="3">
                                                                    <strong>แผนป้องกันการทุจริต</strong>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td style="text-align: center;">
                                                                    OIT 39
                                                                </td>
                                                                <td>
                                                                    แผนปฏิบัติการป้องกันการทุจริต
                                                                </td>
                                                                <td>
                                                                    <ul class="pro_list1" style="margin-top:20px;">
                                                                        <li><a href="thai/about_us/strategic/2021/11/GIT_corruption_plan2021.pdf"><b>แผนปฏิบัติการป้องกันและปราบปรามการทุจริต ปีงบประมาณ 2565</b></a></li>


                                                                    </ul>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td style="text-align: center;">
                                                                    OIT 40
                                                                </td>
                                                                <td>
                                                                    รายงานการกำกับติดตามการดำเนินการป้องกันการทุจริตประจำปี รอบ 6 เดือน
                                                                </td>
                                                                <td>
                                                                    <ul class="pro_list1" style="margin-top:20px;">
                                                                        <li><a href="thai/about_us/annual_achievement/2022/04/git_corrupt_protection_report_6M_2022.pdf"><b>รายงานสรุปผลการดำเนินงานด้านการป้องกันและปราบปรามการทุจริต ประจำปีงบประมาณ พ.ศ. 2565 รอบ 6 เดือน (ต.ค.64 - มี.ค.65)</b></a></li>


                                                                    </ul>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td style="text-align: center;">
                                                                    OIT 41
                                                                </td>
                                                                <td>
                                                                    รายงานผลการดำเนินการป้องกันการทุจริตประจำปี
                                                                </td>
                                                                <td>
                                                                    <ul class="pro_list1" style="margin-top:20px;">
                                                                        <li><a href="thai/about_us/annual_achievement/2021/11/git_corrupt_2021.pdf"><b>รายงานสรุปผลการดำเนินงานด้านการป้องกันและปราบปรามการทุจริตฯ ประจำปีงบประมาณ พ.ศ. 2564</b></a></li>
                                                                    </ul>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="item">
                                        <div class="card">
                                            <div class="card-header">
                                                <h3 class="mb-0">
                                                    <button class="btn btn-lg fluid collapsed" data-toggle="collapse" data-target="#oit-10-2" aria-expanded="false" aria-controls="collapse">
                                                        <span class="text-limit">
                                                            ตัวชี้วัดย่อยที่ 10.2 มาตรการภายในเพื่อป้องกันการทุจริต
                                                        </span>
                                                        <span class="feather icon-plus-circle"></span>
                                                    </button>
                                                </h3>
                                            </div>
                                            <div id="oit-10-2" class="collapse" data-parent="#accordion-oit">
                                                <div class="card-body">
                                                    <table class="table" cellpadding="0">
                                                        <tbody>
                                                            <tr>
                                                                <td style="width:15%;">
                                                                    <strong>ตัวชี้วัดย่อย/ข้อ</strong>
                                                                </td>
                                                                <td style="width:35%;">
                                                                    <strong>ข้อมูล</strong>
                                                                </td>
                                                                <td>
                                                                    <strong>รายละเอียด</strong>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td colspan="3">
                                                                    <strong>ตัวชี้วัดย่อยที่ 10.2 มาตรการภายในเพื่อป้องกันการทุจริต</strong>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td colspan="3">
                                                                    <strong>มาตรการส่งเสริมความโปร่งใสและป้องกันการทุจริตภายในหน่วยงาน</strong>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td style="text-align: center;">
                                                                    OIT 42
                                                                </td>
                                                                <td>
                                                                    มาตรการส่งเสริมคุณธรรมและความโปร่งใสภายในหน่วยงาน
                                                                </td>
                                                                <td>
                                                                    <ul class="pro_list1" style="margin-top:20px;">
                                                                        <li>
                                                                        </li>
                                                                        <li>
                                                                            <a href="thai/about_us/annual_achievement/2022/04/git_ita_report_2021.pdf" target="_blank">
                                                                                <b>
                                                                                    รายงานการวิเคราะห์ผลการประเมินคุณธรรมและความโปร่งใสในการดำเนินงานของหน่วยงานภาครัฐ (Integrity and Transparency Assessment: ITA) ประจำปีงบประมาณ พ.ศ. 2564
                                                                                    และมาตรการขับเคลื่อนการส่งเสริมคุณธรรมและความโปร่งใสในการดำเนินงานของ สวอ. ประจำปีงบประมาณ พ.ศ. 2565</b></a>
                                                                        </li>
                                                                        <li><a href="thai/about_us/strategic/2021/11/GIT_moral_plan2021.pdf"><b>แผนปฏิบัติการส่งเสริมคุณธรรมของสถาบัน ประจำปีงบประมาณ พ.ศ. 2565</b></a></li>
                                                                    </ul>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td style="text-align: center;">
                                                                    OIT 43
                                                                </td>
                                                                <td>
                                                                    การดำเนินการตามมาตรการส่งเสริมคุณธรรมและความโปร่งใสภายในหน่วยงาน
                                                                </td>
                                                                <td>
                                                                    <ul class="pro_list1" style="margin-top:20px;">
                                                                        <li><a href="thai/about_us/annual_achievement/2022/04/git_tranparency_6m_2022.pdf"><b>รายงานผลการดำเนินการตามมาตรการขับเคลื่อนการส่งเสริมคุณธรรมและความโปร่งใสในการดำเนินงานของ สวอ. ประจำปีงบประมาณ พ.ศ. 2565</b></a></li>
                                                                        <li><a href="thai/about_us/annual_achievement/2022/04/git_morality_6m_2022.pdf"><b>รายงานผลการดำเนินงานตามแผนปฏิบัติการส่งเสริมคุณธรรมของสถาบัน ประจำปีงบประมาณ พ.ศ. 2565 รอบ 6 เดือน (ต.ค.64 - มี.ค.65)</b></a></li>
                                                                    </ul>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
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
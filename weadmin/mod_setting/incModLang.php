<?php
if($_SESSION[$valSiteManage."core_session_language"]=="Eng"){

}else{
		$langMod["txt:titleadd"] = "สร้างข้อมูล".getNameMenu($_REQUEST["menukeyid"]);
		$langMod["txt:titleedit"] = "แก้ไขข้อมูล".getNameMenu($_REQUEST["menukeyid"]);
		$langMod["txt:titleview"] = "แสดงผลข้อมูล".getNameMenu($_REQUEST["menukeyid"]);
		$langMod["txt:sortpermis"] = "จัดเรียงข้อมูล".getNameMenu($_REQUEST["menukeyid"]);
		$langMod["txt:subject"] = "ข้อมูล".getNameMenu($_REQUEST["menukeyid"]);
		$langMod["txt:subjectDe"] = "โปรดป้อนชื่อ เพื่อใช้ในการแสดงผลในหน้าเว็บไซต์ของคุณ";
		$langMod["txt:title"] = "ข้อมูลรายละเอียด".getNameMenu($_REQUEST["menukeyid"]);
		$langMod["txt:titleDe"] = "โปรดป้อนรายละเอียด เพื่อใช้ในการแสดงผลในหน้าเว็บไซต์ของคุณ";
		$langMod["txt:pic"] = "รูปภาพประกอบ";
		$langMod["txt:picDe"] = "ข้อมูลรูปภาพประกอบ เพื่อใช้ในการแสดงผลรูปภาพของเนื้อหานี้";

		$langMod["txt:seo"] = "กำหนดวันที่ในการแสดงผล";
		$langMod["txt:seoDe"] = "ข้อมูลนี้คือส่วนที่ใช้ในการกำหนดวันที่ในการแสดงผล เพื่อใช้ในการแสดงผลในหน้าเว็บไซต์ของคุณ";
		
		
		$langMod["inp:notedate"] ="หมายเหตุ : กรณีไม่ต้องการระบุวันเริ่มต้น และวันสิ้นสุดของเนื้อหานี้ กรุณาเว้นไว้ไม่ต้องกรอกข้อมูลใดๆ";
		$langMod["edit:linknote"] ="หมายเหตุ : กรุณา URL นำหน้าด้วย \"http://\" เช่น http://www.wewebplus.com เป็นต้น";
		$langMod["inp:album"] ="เลือกรูปภาพ";
		$langMod["tit:subject"] ="ชื่อ".getNameMenu($_REQUEST["menukeyid"]);
		$langMod["tit:sdate"] ="วันเริ่มต้น";
		$langMod["tit:edate"] ="วันสิ้นสุด";
		$langMod["file:type"] ="ประเภท";
		$langMod["file:size"] ="ขนาด";
		$langMod["file:download"] ="ดาวน์โหลด";
		$langMod["tit:linkvdo"] ="ลิงค์";
		$langMod["home:detail"] ="อ่านรายละเอียด";
		$langMod["tit:typevdo"] ="การแสดงผล";
		$langMod["inp:notepic"] ="หมายเหตุ : กรุณาอัพโหลดเฉพาะไฟล์ .jpg, .png และ .gif เท่านั้น, ขนาดของรูปภาพไม่เกิน 2 Mb และรูปภาพที่ให้ในการอัพโหลดควรมีสัดส่วนที่ ".$sizeWidthReal."x".$sizeHeightReal." พิกเซล";
		
		$langMod["tit:selectg"] ="เลือกบริษัทรถยนต์มือสอง";
		$langMod["tit:selectgn"] ="บริษัทรถยนต์มือสอง";
		
		$langMod["tit:selecttn"] ="รุ่นศูนย์บริการ";
		$langMod["tit:selectt"] ="เลือกรุ่นศูนย์บริการ";
		
		$langMod["tit:inpName"] = "ชื่อ".getNameMenu($_REQUEST["menukeyid"]);
		$langTxt["mg:statusshow"] = "Show";
		$langTxt["mg:titleDe"] = "โปรดป้อนชื่อเมนูไทยและไอคอน เพื่อใช้ในการแสดงผลเมนูในการจัดการเว็บไซต์ของคุณ";
		$langMod["txt:picFooter"] = "สีพื้นหลังของส่วนเว็บไซต์";
		$langMod["txt:picFooterDe"] = "ข้อมูลสีหรือรูปพื้นหลัง เพื่อใช้ในการแสดงผลที่ส่วนเว็บไซต์ของเนื้อหานี้";
		
		$langMod["txt:mainpage"] = "รูปแบบเว็บไซต์";
		$langMod["txt:mainpage1"] = "รูปแบบ";
		$langMod["txt:titleDeMainpage"] = "โปรดเลือกหน้าหลักเว็บไซต์ เพื่อใช้ในการแสดงผลในหน้าเว็บไซต์ของคุณ";
		$langTxt["btn:preview"] = "Preview";
}
?>

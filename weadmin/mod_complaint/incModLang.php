<?php
if($_SESSION[$valSiteManage."core_session_language"]=="Eng"){
	// $langMod["meu:contant"] = getNameMenu($_REQUEST["menukeyid"]);
	// $langMod["tit:subject"] ="Subject";
	// $langMod["tit:subjectg"] ="Group";
	// $langMod["txt:set"] = "Email";
	// $langMod["txt:setDe"] = "This information is used to determine the contact email of your website.";
	// $langMod["tit:email"] ="Email";
	// $langMod["txt:titleEmail"] = "Email";
	// $langMod["ats:email"] = "Please enter your email again.";
	// $langMod["tit:tel"] ="Phone";
	// $langMod["tit:by"] ="Name";
	// $langMod["tit:qty"] ="Quantity (Unit)";
	// $langMod["tit:company"] ="Company Name";
	// $langMod["tit:special"] ="Special Requirement";
	// $langMod["tit:fname"] ="First Name";
	// $langMod["tit:lname"] ="Last Name";

	// $langMod["txt:info"] = "Contact information";
	// $langMod["txt:infoDe"] = "This information is the section used to contact your website page.";
	$langMod["meu:group"] = "Group " .getNameMenu ($_REQUEST["menukeyid"]);
$langMod["meu:contant"] = getNameMenu ($_REQUEST["menukeyid"]);

$langMod["txt:titleadd"] = "Create data" .getNameMenu ($_REQUEST["menukeyid"]);
$langMod["txt:titleedit"] = "Edit info" .getNameMenu ($_REQUEST["menukeyid"]);
$langMod["txt:titleview"] = "Display data" .getNameMenu ($_REQUEST["menukeyid"]);
$langMod["txt:sortpermis"] = "sort data" .getNameMenu ($_REQUEST["menukeyid"]);

$langMod["txt:titleaddg"] = "Create data". $langMod["meu:group"];
$langMod["txt:titleeditg"] = "Edit info". $langMod["meu:group"];
$langMod["txt:titleviewg"] = "Display data". $langMod["meu:group"];
$langMod["txt:sortpermisg"] = "sort data". $langMod["meu:group"];
$langMod["txt:titleeditset"] = "Edit info Setting". getNameMenu ($_REQUEST["menukeyid"]);

$langMod["txt:set"] = "Email Info";
$langMod["txt:setDe"] = "This information is the part used to define the e-mail address to contact your website.";

$langMod["txt:info"] = "Contact information";
$langMod["txt:infoDe"] = "This information is the interface used to contact your website";

$langMod["tit:email"] = "Email";
// topic
// $langMod["tit:subject"] = "". getNameMenu ($_REQUEST["menukeyid"]);

$langMod["tit:subject"] = "Subject";
$langMod["tit:subjectg"] = "Group";
$langMod["tit:tel"] = "Phone";
$langMod["tit:by"] = "Contact person";
$langMod["tit:mgs"] = "Text";
$langMod["tit:address"] = "Address";
$langMod["tit:no"] = "rank";
$langMod["tit:selectg"] = "Select ". $langMod["meu:group"];
$langMod["tit:selectgn"] = "Name ". $langMod["meu:group"];
$langMod["txt:subjectg"] = "info ". $langMod["meu:group"];
$langMod["txt:subjectgDe"] = "Please enter a name ". $langMod["meu:group"]. "to display the page on your site.";
$langMod["tit:noteg"] = "Note";
$langMod["ats:email"] = "the same email address that is already in the system";

$langMod["tit:inpName"] = "Name ". $langMod["meu:group"];
$langMod["tit:qty"] = "Quantity (Unit)";
$langMod["tit:company"] = "Company Name";
$langMod["tit:special"] = "Special Requirement";
$langMod["tit:fname"] = "First Name";
$langMod["tit:lname"] = "Last Name";
$langMod["tit:name"] = "Name - Surname";

$langMod["meu:setPermis"] = "Address";
$langMod["txt:titleadds"] = "". $langMod["meu:setPermis"]." New";
$langMod["txt:titleedits"] = "". $langMod["meu:setPermis"]." Edit";
$langMod["txt:titleviews"] = "". $langMod["meu:setPermis"]." Display";
$langMod["txt:sortpermiss"] = "". $langMod["meu:setPermis"]." Sort";
$langMod["txt:titles"] = "Setting " .getNameMenu($_REQUEST["menukeyid"]);
$langMod["txt:titlesDe"] = "Please enter details. For use in display on your website. ";

$langMod["txt:titleemailset"] = "Email Notify Edit";
$langMod["tit:emailset"] = "Email";
$langMod["tit:titlesetting"] = "Subtitle";

$langMod["txt:attfile"] = "Attachment information";
$langMod["txt:attfileDe"] = "Attachment information To use to display the attachment of this content. In the form of downloading documents stored on a computer on your website. ";
$langMod["inp:sefile"] = "Select attachment";
}else{
		$langMod["meu:group"] = "กลุ่ม".getNameMenu($_REQUEST["menukeyid"]);
		$langMod["meu:contant"] = getNameMenu($_REQUEST["menukeyid"]);
		$langMod["txt:titles"] = "ตั้งค่า " .getNameMenu($_REQUEST["menukeyid"]);
		$langMod["txt:titleadd"] = "สร้างข้อมูล".getNameMenu($_REQUEST["menukeyid"]);
		$langMod["txt:titleedit"] = "แก้ไขข้อมูล".getNameMenu($_REQUEST["menukeyid"]);
		$langMod["txt:titleview"] = "แสดงผลข้อมูล".getNameMenu($_REQUEST["menukeyid"]);
		$langMod["txt:sortpermis"] = "จัดเรียงข้อมูล".getNameMenu($_REQUEST["menukeyid"]);

		$langMod["txt:titleaddg"] = "สร้างข้อมูล".$langMod["meu:group"];
		$langMod["txt:titleeditg"] = "แก้ไขข้อมูล".$langMod["meu:group"];
		$langMod["txt:titleviewg"] = "แสดงผลข้อมูล".$langMod["meu:group"];
		$langMod["txt:sortpermisg"] = "จัดเรียงข้อมูล".$langMod["meu:group"];

		$langMod["txt:set"] = "ข้อมูลอีเมล์";
		$langMod["txt:setDe"] = "ข้อมูลนี้คือส่วนที่ใช้ในการกำหนดอีเมล์ในการติดต่อหน้าเว็บไซต์ของคุณ";
		
		$langMod["txt:info"] = "ข้อมูลการติดต่อ";
		$langMod["txt:infoDe"] = "ข้อมูลนี้คือส่วนที่ใช้ในการติดต่อหน้าเว็บไซต์ของคุณ";

		$langMod["tit:email"] ="อีเมล";
		// หัวข้อ
		// $langMod["tit:subject"] ="".getNameMenu($_REQUEST["menukeyid"]);

		$langMod["tit:subject"] ="หัวข้อ";
		$langMod["tit:subjectg"] ="กลุ่ม";
		$langMod["tit:tel"] ="เบอร์โทรศัพท์";
		$langMod["tit:by"] ="ผู้ติดต่อ";
		$langMod["tit:mgs"] ="ข้อความ";
		$langMod["tit:address"] ="ที่อยู่";
		$langMod["tit:no"] ="ลำดับ";
		$langMod["tit:selectg"] ="เลือก".$langMod["meu:group"];
		$langMod["tit:selectgn"] ="ชื่อ".$langMod["meu:group"];
		$langMod["txt:subjectg"] = "ข้อมูล".$langMod["meu:group"];
		$langMod["txt:subjectgDe"] = "โปรดป้อนชื่อ".$langMod["meu:group"]." เพื่อใช้ในการแสดงผลในหน้าเว็บไซต์ของคุณ";
		$langMod["tit:noteg"] ="หมายเหตุ";
		$langMod["ats:email"] = "อีเมล์ซ้ำกับที่มีอยู่ในระบบแล้ว";
				
		$langMod["tit:inpName"] = "ชื่อ".$langMod["meu:group"];
		$langMod["tit:qty"] ="คุณภาพ (หน่วย)";
		$langMod["tit:company"] ="ชื่อบริษัท";
		$langMod["tit:special"] ="Special Requirement";
		$langMod["tit:fname"] ="ชื่อ";
		$langMod["tit:lname"] ="นามสกุล";
		$langMod["txt:titleemailset"] = "แก้ไขแจ้งเตือนอีเมล";
		$langMod["tit:emailset"] = "อีเมล";
		
		$langMod["txt:attfile"] = "ข้อมูลเอกสารแนบ";
		$langMod["txt:attfileDe"] = "ข้อมูลเอกสารแนบ เพื่อใช้ในการแสดงผลเอกสารแนบของเนื้อหานี้ ในรูปแบบของการดาวน์โหลดเอกสารเก็บไว้ในเครื่องคอมพิวเตอร์บนเว็บไซต์ของคุณ";
		$langMod["inp:sefile"] ="เลือกเอกสารแนบ";
		$langMod["tit:fname"] = "ชื่อ-นามสกุล";

}
?>

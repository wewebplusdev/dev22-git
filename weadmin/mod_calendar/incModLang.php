<?php
if($_SESSION[$valSiteManage."core_session_language"]=="Eng"){

}else{

		$langMod["meu:group"] = "กลุ่ม".getNameMenu($_REQUEST["menukeyid"])." ";
		$langMod["meu:contant"] = getNameMenu($_REQUEST["menukeyid"]);

		$langMod["txt:titleadd"] = "สร้างข้อมูล".getNameMenu($_REQUEST["menukeyid"]);
		$langMod["txt:titleedit"] = "แก้ไขข้อมูล".getNameMenu($_REQUEST["menukeyid"]);
		$langMod["txt:titleview"] = "แสดงผลข้อมูล".getNameMenu($_REQUEST["menukeyid"]);
		$langMod["txt:sortpermis"] = "จัดเรียงข้อมูล".getNameMenu($_REQUEST["menukeyid"]);

		$langMod["txt:titleaddg"] = "สร้างข้อมูล".$langMod["meu:group"];
		$langMod["txt:titleeditg"] = "แก้ไขข้อมูล".$langMod["meu:group"];
		$langMod["txt:titleviewg"] = "แสดงผลข้อมูล".$langMod["meu:group"];
		$langMod["txt:sortpermisg"] = "จัดเรียงข้อมูล".$langMod["meu:group"];

		$langMod["txt:subject"] = "ข้อมูล".getNameMenu($_REQUEST["menukeyid"]);
		$langMod["viw:subjectDe"] = "ข้อมูลกลุ่มและชื่อ".getNameMenu($_REQUEST["menukeyid"])." เพื่อใช้ในการแสดงผลเนื้อหาในหน้ารวมข้อมูลทั้งหมดของเมนูนี้บนเว็บไซต์ของคุณ";
		$langMod["txt:subjectDe"] = "โปรดป้อนกลุ่มและชื่อ".getNameMenu($_REQUEST["menukeyid"])." เพื่อใช้ในการแสดงผลเนื้อหาในหน้ารวมข้อมูลทั้งหมดของเมนูนี้บนเว็บไซต์ของคุณ";
		$langMod["txt:title"] = "ข้อมูลรายละเอียด".getNameMenu($_REQUEST["menukeyid"]);
		$langMod["txt:titleDe"] = "โปรดป้อนรายละเอียด เพื่อใช้ในการแสดงผลในหน้าเว็บไซต์ของคุณ";
		$langMod["txt:attfile"] = "ข้อมูลเอกสารแนบ ";
		$langMod["txt:attfileDe"] = "ข้อมูลเอกสารแนบ เพื่อใช้ในการแสดงผลเอกสารแนบของเนื้อหานี้ ในรูปแบบของการดาวน์โหลดเอกสารเก็บไว้ในเครื่องคอมพิวเตอร์บนเว็บไซต์ของคุณ";




		$langMod["txt:seo"] = "ข้อมูลรองรับการค้นหาของ Search Engine";
		$langMod["txt:seoDe"] = "ข้อมูลนี้คือส่วนที่ใช้ในการรองรับการค้นหาของ Search Engine ไม่ว่าจะเป็น Google หรือ Yahoo เป็นต้น";
		$langMod["txt:date"] = "กำหนดวันที่และรายละเอียดในการจัดกิจกรรม";
		$langMod["txt:dateDe"] = "ข้อมูลนี้คือส่วนที่ใช้ในการกำหนดวันที่และรายละเอียดในการจัดกิจกรรม เพื่อใช้ในการแสดงผลในหน้าเว็บไซต์ของคุณ";

		$langMod["txt:redate"] = "กำหนดวันที่การลงทะเบียน";
		$langMod["txt:redateDe"] = "ข้อมูลนี้คือส่วนที่ใช้ในการกำหนดวันที่การลงทะเบียน เพื่อใช้ในการแสดงผลในหน้าเว็บไซต์ของคุณ";


		$langMod["txt:album"] = "ข้อมูลอัลบั้มภาพ ";
		$langMod["txt:albumDe"] = "ข้อมูลอัลบั้มภาพ เพื่อใช้ในการแสดงผลรูปภาพของเนื้อหานี้ ในรูปแบบภาพพสไลด์บนเว็บไซต์ของคุณ";
		$langMod["txt:video"] = "ข้อมูลวิดีโอ ";
		$langMod["txt:videoDe"] = "ข้อมูลวิดีโอ เพื่อใช้ในการแสดงผลวิดีโอของเนื้อหานี้ ในรูปแบบเครื่องเล่นวิดีโอบนเว็บไซต์ของคุณ";
		$langMod["txt:pic"] = "รูปภาพประกอบ";
		$langMod["txt:picDe"] = "ข้อมูลรูปภาพประกอบ เพื่อใช้ในการแสดงผลรูปภาพของเนื้อหานี้";

		$langMod["txt:map"] = "แผนที่ประกอบ";
		$langMod["txt:mapDe"] = "ข้อมูลแผนที่ประกอบ เพื่อใช้ในการแสดงผลรูปภาพของเนื้อหานี้";


		$langMod["inp:seotitle"] ="Tag Title ";
		$langMod["inp:seotitlenote"] ="หมายเหตุ : เนื้อหาที่จะแสดงในส่วนของหัวข้อของการค้นหาใน Search Engine(Google, Yahoo)";
		$langMod["inp:seodes"] ="Tag Description ";
		$langMod["inp:seodesnote"] ="หมายเหตุ : เนื้อหาที่จะแสดงในส่วนของรายละเอียดหัวข้อของการค้นหาใน Search Engine(Google, Yahoo)";
		$langMod["inp:seokey"] ="Tag Keywords ";
		$langMod["inp:seokeynote"] ="หมายเหตุ : คำหรือวลีที่ใช้ในการค้นหาใน Search Engine(Google, Yahoo)";

		$langMod["inp:album"] ="เลือกรูปภาพ";
		$langMod["inp:chfile"] ="เปลี่ยนชื่อเอกสารแนบ";
		$langMod["inp:sefile"] ="เลือกเอกสารแนบ";
		$langMod["inp:notefile"] ="หมายเหตุ : กรุณาเลือกอัพโหลดไฟล์ที่มีขนาดเหมาะสมไม่ใหญ่เกินไป เนื่องจากหากไฟล์ขนาดใหญ่จะส่งผลให้เกินความล่าช้าในการอัพโหลดไฟล์";
		$langMod["inp:notedate"] ="หมายเหตุ : กรณีมีวันที่จัดกิจกรรมมีวันเดียวไม่ต้องระบุถึง";
		$langMod["inp:notepic"] ="หมายเหตุ : กรุณาอัพโหลดเฉพาะไฟล์ .jpg, .png และ .gif เท่านั้น, ขนาดของรูปภาพไม่เกิน 2 Mb และรูปภาพที่ให้ในการอัพโหลดควรมีสัดส่วนที่ ".$sizeWidthPic."x".$sizeHeightPic." พิกเซล";
		$langMod["inp:notealbum"] ="หมายเหตุ : กรุณาอัพโหลดเฉพาะไฟล์ .jpg, .png และ .gif เท่านั้น, ขนาดของรูปภาพไม่เกิน 2 Mb และรูปภาพที่ให้ในการอัพโหลดควรมีสัดส่วนที่ ".$sizeWidthAlbum."x".$sizeHeightAlbum." พิกเซล";
		$langMod["inp:notemap"] ="หมายเหตุ : กรุณาอัพโหลดเฉพาะไฟล์ .jpg, .png และ .gif เท่านั้น, ขนาดของรูปภาพไม่เกิน 2 Mb และรูปภาพที่ให้ในการอัพโหลดควรมีสัดส่วนที่ ".$sizeWidthMap."x".$sizeHeightMap." พิกเซล";

		$langMod["tit:subject"] ="ชื่อ".getNameMenu($_REQUEST["menukeyid"])." ";
		$langMod["tit:subjectg"] ="ชื่อ".$langMod["meu:group"];
		$langMod["tit:sdate"] ="วันที่ ";
		$langMod["tit:redate"] ="วันที่ลงทะเบียน";
		$langMod["tit:edate"] ="ถึง";
		$langMod["tit:title"] ="คำบรรยาย";
		$langMod["tit:typevdo"] ="ประเภทวิดีโอ";
		$langMod["tit:linkvdo"] ="เว็บไซต์ Youtube";
		$langMod["tit:uploadvdo"] ="อัพโหลดไฟล์";
		$langMod["tit:linkvdonote"] ="หมายเหตุ : เฉพาะชื่อ URL youtube.com เท่านั้น";
		$langMod["tit:uploadvdonote"] ="หมายเหตุ : กรุณาอัพโหลดเฉพาะไฟล์ .flv, .wmv, .mp3, .wav, .wma, .avi และ .mpeg เท่านั้น";

		$langMod["inp:salary"] ="เวลา ";
		$langMod["inp:salaryno"] ="ไม่แสดงเงินเดือน";
		$langMod["inp:salaryyes"] ="ระบุเวลา";
		$langMod["inp:salaryto"] ="ระบุช่วงเงินเดือน";
		$langMod["inp:salaryorg"] ="ตามโครงสร้างบริษัท";
		$langMod["inp:salaryinfo"] ="ระบุเวลา";
		$langMod["inp:pricesale"] ="หมายเหตุ : กรุณาป้อนข้อมูลเป็นตัวเลขเท่านั้น";
		$langMod["inp:qua"] ="รับสมัคร";
		$langMod["inp:work"] ="สถานที่่ ";
		$langMod["inp:eat"] ="อาหารและเครื่องดื่ม";
		$langMod["inp:walk"] ="ระยะเวลาในการเดินทาง";
		$langMod["inp:app"] ="ผู้สมัคร";
		$langMod["tit:regisdate"] ="วันที่สมัคร";
		$langMod["tit:selectgnew"]="เลือกหลักสูตร";

		$langMod["file:type"] ="ประเภท";
		$langMod["file:size"] ="ขนาด";
		$langMod["file:download"] ="ดาวน์โหลด";

		$langMod["home:detail"] ="อ่านรายละเอียด";

		$langMod["txt:regis"] = "ข้อมูลผู้สมัคร";
		$langMod["txt:regisDe"] = "ข้อมูลผู้สมัคร เป็นข้อมูลส่วนของผู้สมัครที่ได้สมัครเข้ามาในเว็บไซต์ของคุณ";
		$langMod["ep:name"] ="Name / ชื่อผู้เข้าร่วมประชุม";
		$langMod["ep:address"] ="Address / ที่อยู่";
		$langMod["ep:province"] ="จังหวัด";
		$langMod["ep:zipcode"] ="รหัสไปรษณีย์";
		$langMod["ep:mobile"] ="Phone / โทรศัพท์";
		$langMod["ep:food"] ="Food / ประเภทอาหาร";
		$langMod["ep:email"] ="E-mail / อีเมล์ ";
		$langMod["ep:regisdate"] ="วันที่ลงทะเบียน";

		$langMod["txt:regis2"] = "Hotel Booking / การจองห้องพัก";
		$langMod["txt:regis2De"] = "ข้อมูลการจองห้องพักสัมมนา เป็นข้อมูลส่วนของผู้สมัครที่ได้สมัครเข้ามาในเว็บไซต์ของคุณ";
		$langMod["ep:date"] ="วัน/เดือน/ปี";
		$langMod["ep:hotel"] ="Booking / เข้าพัก";
		$langMod["ep:Checkin"] ="Check in Date / วันที่เข้าพัก";
		$langMod["ep:Checkout"] ="Check out Date / วันที่ออก";
		$langMod["ep:roomType"] ="Room Type / ประเภทห้องพัก";
		$langMod["ep:Live"] ="Live with / พักคู่กับ";
		$langMod["ep:count"] ="จำนวนผู้เข้าอบรม(ท่าน)";
		$langMod["ep:army"] ="ภาวะทางทหาร";


		$langMod["txt:regis4"] = "ข้อมูลลงทะเบียนเข้าร่วมสัมมนา";
		$langMod["txt:regis4De"] = "ข้อมูลลงทะเบียนเข้าร่วมสัมมนา เป็นข้อมูลส่วนของผู้สมัครที่ได้สมัครเข้ามาในเว็บไซต์ของคุณ";
		$langMod["ep:position1"] ="ตำแหน่งที่ 1";
		$langMod["ep:position2"] ="ตำแหน่งที่ 2";
		$langMod["ep:position3"] ="ตำแหน่งที่ 3";
		$langMod["ep:money"] ="ตำแหน่ง";

		$langMod["txt:regis3"] = "ข้อมูลสมัครเพิ่มเติม";
		$langMod["txt:regis3De"] = "ข้อมูลสมัครเพิ่มเติม เป็นข้อมูลส่วนของผู้สมัครที่ได้สมัครเข้ามาในเว็บไซต์ของคุณ";
		$langMod["ep:edu"] ="ชื่อบริษัท";
		$langMod["ep:academy"] ="ชื่อสถานศึกษา";
		$langMod["ep:qualification"] ="สาขาวิชา";
		$langMod["ep:eduYear"] ="ปีที่สำเร็จการศึกษา";
		$langMod["ep:gpa"] ="เกรดเฉลี่ย";

		$langMod["txt:regis5"] = "ข้อมูลการชำระเงิน";
		$langMod["txt:regis5De"] = "ข้อมูลการชำระเงิน เป็นข้อมูลส่วนของผู้สมัครที่ได้สมัครเข้ามาในเว็บไซต์ของคุณ";
		$langMod["ep:thai"] ="ทักษะภาษาไทย";
		$langMod["ep:eng"] ="ทักษะภาษาอังกฤษ";
		$langMod["ep:other"] ="ทักษะภาษาอื่นๆ";
		$langMod["ep:tl"] ="ฟัง";
		$langMod["ep:ts"] ="พูด";
		$langMod["ep:tr"] ="อ่าน";
		$langMod["ep:tw"] ="เขียน";
		$langMod["ep:printt"] ="พิมพ์ดีดไทย(คำ / นาที)";
		$langMod["ep:printe"] ="พิมพ์ดีดอังกฤษ(คำ / นาที)";
		$langMod["ep:car"] ="มีพาหะนะส่วนตัว";
		$langMod["ep:driving"] ="ใบขับขี่";
		$langMod["ep:special"] ="ความสามารถพิเศษอื่นๆ";
		$langMod["ep:ref"] ="บุคคลอ้างอิง";
		$langMod["ep:lange"] ="ภาษา";
		$langMod["ep:select"] ="หลักสูตร";
		$langMod["ep:bam"] ="บาท / เดือน";
		$langMod["ep:selectp"] ="เลือกเข้าพัก";
		$langMod["ep:selectS"] ="เลือกเพศ";
		$langMod["ep:selectE"] ="เลือกระดับการศึกษาสูงสุด";
		$langMod["ep:selectM"] ="เลือกเงินเดือน";
		$langMod["ep:below"] ="ต่ำกว่า 10,000";
		$langMod["ep:more"] ="มากกว่า 250,000";

		$langMod["txt:set"] = "ข้อมูลอีเมล์";
		$langMod["txt:setDe"] = "ข้อมูลนี้คือส่วนที่ใช้ในการกำหนดอีเมล์ในการติดต่อหน้าเว็บไซต์ของคุณ";
		$langMod["tit:email"] ="อีเมล์";
		$langMod["ats:email"] = "อีเมล์ซ้ำกับที่มีอยู่ในระบบแล้ว";

		$langMod["inp:price"] ="หมายเหตุ : กรุณาป้อนข้อมูลเป็นตัวเลขเท่านั้น ";
		$langMod["inp:pricesale"] ="หมายเหตุ : กรุณาป้อนข้อมูลเป็นตัวเลขเท่านั้น";
		$langMod["tit:price"] ="ราคา/ท่าน (ปกติ)";
		$langMod["tit:pricesale"] ="ราคา/ท่าน (สมาชิก)";
		$langMod["tit:join"] ="สมัครโดย";
		$langMod["tit:no"] ="ลำดับ";

		$langMod["inp:officeth"] ="Name of Company / ชื่อหน่วยงาน";
		$langMod["inp:officeen"] ="Company (English)";
		$langMod["inp:officetype"] ="ประเภทธุรกิจ / อุตสาหกรรม";
		$langMod["inp:officeadd"] ="	ที่อยู่บริษัท : ชื่ออาคาร /นิคม อุตสาหกรรม";
		$langMod["inp:officeclass"] ="ชั้นที่";
		$langMod["inp:officenum"] ="เลขที่";
		$langMod["inp:officem"] ="หมู่ที่";
		$langMod["inp:offices"] ="ถนน/ซอย";
		$langMod["inp:officet"] ="จังหวัด";
		$langMod["inp:officec"] ="เขต/อำเภอ";
		$langMod["inp:officep"] ="แขวง/ตำบล";
		$langMod["inp:officez"] ="รหัสไปรณีย์";
		$langMod["inp:officetel"] ="โทรศัพท์";
		$langMod["inp:officefax"] ="โทรสาร";
		$langMod["inp:officeemail"] ="อีเมล์ (ฝ่ายบุคคล)";
		$langMod["inp:officeweb"] ="เว็บไซต์";
		$langMod["inp:officecon"] ="ชื่อผู้ติดต่อ";
		$langMod["inp:officeinfo"] ="หมายเลขติดต่อภายใน";
		$langMod["inp:fname"] ="ชื่อ";
		$langMod["inp:lname"] ="นามสกุล";
		$langMod["inp:fnameeng"] ="First Name";
		$langMod["inp:lnameeng"] ="Last Name";
		$langMod["inp:position"] ="ตำแหน่ง";
		$langMod["inp:telephone"] ="โทรศัพท์";
		$langMod["inp:username"] ="อีเมล์";
		$langMod["inp:follow"] ="สมัครเพิ่มเติม(คน)";
		$langMod["inp:payment"] ="การชำระเงิน";
		$langMod["inp:vat"] ="ภาษีมูลค่าเพิ่ม";
		$langMod["inp:vat3"] ="ภาษีหัก ณ ที่จ่าย ";

		$langMod["inp:per"] ="ค่าลงทะเบียนต่อท่าน";
		$langMod["inp:sum"] ="รวมเป็นเงิน";
		$langMod["inp:total"] ="รวมเป็นเงินค่าลงทะเบียนทั้งสิ้น";
		$langMod["inp:totalall"] ="กรณีไม่มีหนังสือหัก ณ ที่จ่าย";
		$langMod["inp:part"] ="สมัครแทน";
		$langMod["inp:order"] ="เลขที่";
		$langMod["inp:cool"] ="แสดงไอคอน";


		$langMod["tit:selectg"] ="เลือก".$langMod["meu:group"];
		$langMod["op:selectg"] =$langMod["meu:group"]." (ทั้งหมด) ";
		$langMod["tit:selectgn"] =$langMod["meu:group"];
		$langMod["txt:subjectg"] = "ข้อมูล".$langMod["meu:group"];
		$langMod["viw:subjectgDe"] = "ข้อมูลชื่อ".$langMod["meu:group"]." เพื่อใช้ในการแสดงผลในหน้าเว็บไซต์ของคุณ";
		$langMod["txt:subjectgDe"] = "โปรดป้อนชื่อ".$langMod["meu:group"]." เพื่อใช้ในการแสดงผลในหน้าเว็บไซต์ของคุณ";
		$langMod["tit:noteg"] ="คำอธิบาย ";
		$langMod["ats:email"] = "อีเมล์ซ้ำกับที่มีอยู่ในระบบแล้ว";

		$langMod["tit:hotelname"] ="หน่วยงาน ";
		$langMod["tit:person"] ="ชื่อผู้ประสานงานและอีเมล์";
		$langMod["tit:inpName"] = "ชื่อ".getNameMenu($_REQUEST["menukeyid"]);
		$langMod["tit:sSedate"]= "วันที่เริ่มต้น";
		$langMod["tit:eSedate"]= "วันที่สิ้นสุด";
                $langMod["tit:color"] = "สีกลุ่ม ";


		$langMod = checkpageText($langMod);

		$langMod["tit:hashtag"] = "ข้อมูลแท็กเชื่อมโยง";
		$langMod["tit:hashtagDes"] = "ข้อมูลนี้คือส่วนที่ใช้ในการกำหนดแท็กเชื่อมโยงในการแสดงผลส่วนนี้ เพื่อใช้ในการแสดงผลในหน้าเว็บไซต์ของคุณ";
		$langMod["inp:hashtag"] = "แท็กเชื่อมโยง";
		$langMod["tit:selectghasg"] = "เลือก".$langMod["inp:hashtag"];
}
?>

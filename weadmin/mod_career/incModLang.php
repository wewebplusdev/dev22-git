<?php
if($_SESSION[$valSiteManage."core_session_language"]=="Eng"){


		$langMod["meu:selectgn"] = "Group ". $langMod["meu:group"];

		$langMod["txt:titleadd"] = "" .getNameMenu($_REQUEST["menukeyid"])." New";
		$langMod["txt:titleedit"] = "" .getNameMenu($_REQUEST["menukeyid"])." Edit";
		$langMod["txt:titleview"] = "" .getNameMenu($_REQUEST["menukeyid"])." Display";
		$langMod["txt:sortpermis"] = "" .getNameMenu($_REQUEST["menukeyid"])." Sort";
		
		$langMod["meu:group"] = "Group " .getNameMenu($_REQUEST["menukeyid"]);
		$langMod["meu:email"] ="Email"; 
		$langMod["txt:titleeditM"] = "".$langMod["meu:email"]." Edit";
		
		$langMod["txt:subject"] = "" .getNameMenu($_REQUEST["menukeyid"])." Info";
		$langMod["txt:subjectDe"] = "Please enter a selection, group, title and subtitle. To use to display content on the page, include all of this menu information on your site. ";
		$langMod["txt:title"] = "Detailed information " .getNameMenu($_REQUEST["menukeyid"]);
		$langMod["txt:titleDe"] = "Please enter details. For use in display on your website. ";
		$langMod["txt:attfile"] = "Attachment information";
		$langMod["txt:attfileDe"] = "Attachment information To use to display the attachment of this content. In the form of downloading documents stored on a computer on your website. ";
		$langMod["btn:export3"] = "PDF";
		$langMod["btn:set"] = "Setting Email";
		$langMod["btn:mem"] = "Applicant";
		$langMod["btn:position"] = "Position";

		$langMod["txt:titleview_app"] = "".$langMod["btn:mem"]." Display";

		$langMod["btn:career"] = "Career";
		$langMod["btn:from"] = "Form";
		
		$langMod["btn:position"] = "Position";
		

		
		$langMod["txt:seo"] = "Support for Search Engine Search";
		$langMod["txt:seoDe"] = "This information is used to support search engines such as Google or Yahoo.";
		$langMod["txt:date"] = "Set display date";
		$langMod["txt:dateDe"] = "This is the section used to set the display date. For use in display on your website. ";

		$langMod["txt:album"] = "Photo album information";
		$langMod["txt:albumDe"] = "Photo album information To use to display this image of the content. In slideshows format on your website ";
		$langMod["txt:video"] = "Video Info";
		$langMod["txt:videoDe"] = "Video information For use in video rendering of this content. In video player format on your website. ";
		$langMod["txt:pic"] = "Image Gallery";
		$langMod["txt:picDe"] = "Image data includes For use in displaying images of this content. ";
		
		
		$langMod["inp:seotitle"] = "Title Tag";
		$langMod["inp:seotitlenote"] = "Note: Content will be displayed in the Search Topics section of the Search Engine (Google, Yahoo).";
		$langMod["inp:seodes"] = "Tag Description";
		$langMod["inp:seodesnote"] = "Note: Content will be displayed in the Search Topics section of the Search Engine (Google, Yahoo)";
		$langMod["inp:seokey"] = "Tag Keywords";
		$langMod["inp:seokeynote"] = "Note: Search words or phrases in Search Engine (Google, Yahoo)";
		
		$langMod["inp:album"] = "Select photo";
		$langMod["inp:chfile"] = "Rename attachment";
		$langMod["inp:sefile"] = "Select attachment";
		$langMod["inp:notefile"] = "Note: Please select a file with a size that is not too large. This is because large files will result in delays in uploading files. ";
		$langMod["inp:notedate"] = "Note: If you do not want to specify a start date And the end date of this content. Please do not fill out any information. ";
		$langMod["inp:notepic"] = "Note: Please upload only .jpg, .png and .gif files, the size of the image should not exceed 2 Mb and the image provided in the upload should have a proportional ". $sizeWidthPic." X ". $sizeHeightPic." Pixels ";
		$langMod["inp:notealbum"] = "Note: Please upload only .jpg, .png and .gif files, the image size should not exceed 2 Mb. ". $sizeWidthAlbum." X ". $sizeHeightAlbum." Pixels ";
				
		$langMod["tit:subject"] ="Name ".$langMod["btn:career"];
		$langMod["tit:sdate"] = "Start date";
		$langMod["tit:edate"] = "End date";
		$langMod["tit:title"] = "Subtitle";
		$langMod["tit:typevdo"] = "Video type";
		$langMod["tit:linkvdo"] = "Youtube link";
		$langMod["tit:uploadvdo"] = "Upload a file";
		$langMod["tit:linkvdonote"] = "Note: The only link is the youtube.com URL.";
		$langMod["tit:uploadvdonote"] = "Note: Please upload only .flv, .wmv, .mp3, .wav, .wma, .avi, and .mpeg files.";
		
		$langMod["inp:salary"] ="เงินเดือน";
		$langMod["inp:salaryno"] ="ไม่แสดงเงินเดือน";
		$langMod["inp:salaryyes"] ="ระบุเงินเดือน";
		$langMod["inp:salaryto"] ="ระบุช่วงเงินเดือน";
		$langMod["inp:salaryorg"] ="ตามโครงสร้างบริษัท";
		$langMod["inp:salaryinfo"] ="ระบุเงินเดือน";
		$langMod["inp:pricesale"] ="หมายเหตุ : กรุณาป้อนข้อมูลเป็นตัวเลขเท่านั้น";
		$langMod["inp:qua"] ="อัตราจ้าง";
		$langMod["inp:work"] ="สถานที่ทำงาน";
		$langMod["inp:app"] ="ผู้สมัคร";
		$langMod["tit:regisdate"] ="วันที่สมัคร";
		$langMod["tit:selectg"]="เลือกตำแหน่งงาน";


		$langMod["tit:selectgn"] = "Name Group ". $langMod["btn:position"];
		$langMod["txt:subjectg"] = "Information ".$langMod["btn:position"];
		$langMod["txt:subjectgDe"] = "Please enter a name ". $langMod["btn:position"]. " to be used for display on your site.";
		$langMod["tit:noteg"] ="Note";
		$langMod["txt:titleaddg"] = "". $langMod["btn:position"]." New";
		$langMod["txt:titleeditg"] = "". $langMod["btn:position"]." Edit";
		$langMod["txt:titleviewg"] = "". $langMod["btn:position"]." Display";
		$langMod["txt:sortpermisg"] = "". $langMod["btn:position"]." Sort";


		$langMod["file:type"] ="ประเภท";
		$langMod["file:size"] ="ขนาด";
		$langMod["file:download"] ="ดาวน์โหลด";
		
		$langMod["home:detail"] ="อ่านรายละเอียด";
		
		$langMod["txt:regis"] = "ข้อมูลผู้สมัคร";
		$langMod["txt:regisDe"] = "ข้อมูลผู้สมัคร เป็นข้อมูลส่วนของผู้สมัครที่ได้สมัครเข้ามาในเว็บไซต์ของคุณ";
		$langMod["ep:name"] ="ชื่อ-นามสกุล";
		$langMod["ep:address"] ="ที่อยู่";
		$langMod["ep:province"] ="จังหวัด";
		$langMod["ep:zipcode"] ="รหัสไปรษณีย์";
		$langMod["ep:mobile"] ="เบอร์โทรศัพมือถือ";
		$langMod["ep:tel"] ="เบอร์โทรศัพบ้าน";
		$langMod["ep:email"] ="อีเมล ";
		
		$langMod["txt:regis2"] = "ข้อมูลส่วนตัว";
		$langMod["txt:regis2De"] = "ข้อมูลส่วนตัว เป็นข้อมูลส่วนของผู้สมัครที่ได้สมัครเข้ามาในเว็บไซต์ของคุณ";
		$langMod["ep:date"] ="วัน/เดือน/ปี";
		$langMod["ep:status"] ="สถาณะภาพสมรส";
		$langMod["ep:sex"] ="เพศ";
		$langMod["ep:nationality"] ="สัญชาติ";
		$langMod["ep:blood"] ="กรุ๊ปเลือด";
		$langMod["ep:religion"] ="ศาสนา";
		$langMod["ep:h"] ="ส่วนสูง(cm)";
		$langMod["ep:w"] ="น้ำหนัก(kg)";
		$langMod["ep:army"] ="ภาวะทางทหาร";
		
		$langMod["txt:regis3"] = "ประวัติการศึกษาสูงสุด";
		$langMod["txt:regis3De"] = "ประวัติการศึกษาสูงสุด เป็นข้อมูลส่วนของผู้สมัครที่ได้สมัครเข้ามาในเว็บไซต์ของคุณ";
		$langMod["ep:edu"] ="ระดับการศึกษาสูงสุด";
		$langMod["ep:academy"] ="ชื่อสถานศึกษา";
		$langMod["ep:qualification"] ="สาขาวิชา";
		$langMod["ep:eduYear"] ="ปีที่สำเร็จการศึกษา";
		$langMod["ep:gpa"] ="เกรดเฉลี่ย";
		
		$langMod["txt:regis4"] = "ข้อมูลตำแหน่งและเงินเดือน";
		$langMod["txt:regis4De"] = "ข้อมูลตำแหน่งและเงินเดือน เป็นข้อมูลส่วนของผู้สมัครที่ได้สมัครเข้ามาในเว็บไซต์ของคุณ";
		$langMod["ep:position1"] ="ตำแหน่งงาน";
		$langMod["ep:position2"] ="ตำแหน่งที่ 2";
		$langMod["ep:position3"] ="ตำแหน่งที่ 3";
		$langMod["ep:money"] ="เงินเดือนที่ต้องการ";

		$langMod["txt:regis6"] = "ข้อมูลครอบครัว";
		$langMod["txt:regis6De"] = "ข้อมูลครอบครัว เป็นข้อมูลส่วนของผู้สมัครที่ได้สมัครเข้ามาในเว็บไซต์ของคุณ";
		$langMod["ep:parent"] = "สถานภาพบิดา/มารดา ";
		$langMod["father:name"] = "ชื่อ-นามสกุลบิดา ";
		$langMod["father:bdate"] = "วันเกิดบิดา ";
		$langMod["father:age"] = "อายุบิดา ";
		$langMod["father:job"] = "อาชีพบิดา ";
		$langMod["father:office"] = "สถานที่อยู่สำนักงานบิดา ";
		$langMod["father:tel"] = "เบอรโทรศัพท์บิดา ";
		$langMod["father:status"] = "สถานะบิดา ";
		$langMod["mother:name"] = "ชื่อ-นามสกุลมารดา ";
		$langMod["mother:bdate"] = "วันเกิดมารดา ";
		$langMod["mother:age"] = "อายุมารดา ";
		$langMod["mother:job"] = "อาชีพมารดา ";
		$langMod["mother:office"] = "สถานที่อยู่สำนักงานมารดา ";
		$langMod["mother:tel"] = "เบอรโทรศัพท์มารดา ";
		$langMod["mother:status"] = "สถานะมารดา ";
		$langMod["brother:name"] = "ชื่อ-นามสกุลพี่น้องคนที่ ";
		$langMod["brother:age"] = "อายุพี่น้องคนที่ ";
		$langMod["brother:job"] = "อาชีพพี่น้องคนที่ ";
		$langMod["brother:office"] = "สถานที่อยู่สำนักงานพี่น้องคนที่ ";
		$langMod["brother:tel"] = "เบอรโทรศัพท์พี่น้องคนที่ ";
		$langMod["brother:bdate"] = "วันเกิดพี่น้องคนที่ ";
		$langMod["brother:status"] = "สถานะพี่น้องคนที่ ";
		$langMod["mate:name"] = "ชื่อ-นามสกุลสามี/ภรรยา ";
		$langMod["mate:age"] = "อายุสามี/ภรรยา ";
		$langMod["mate:job"] = "อาชีพสามี/ภรรยา ";
		$langMod["mate:office"] = "สถานที่อยู่สำนักงานสามี/ภรรยา ";
		$langMod["mate:tel"] = "เบอรโทรศัพท์สามี/ภรรยา ";
		$langMod["mate:bdate"] = "วันเกิดสามี/ภรรยา ";

		$langMod["age"] = "ปี ";


		$langMod["txt:regis7"] = "ประวัติการทำงาน";
		$langMod["txt:regis7De"] = "ประวัติการทำงาน เป็นข้อมูลส่วนของผู้สมัครที่ได้สมัครเข้ามาในเว็บไซต์ของคุณ";
		
		
		$langMod["txt:regis5"] = "ข้อมูลอื่นๆ";
		$langMod["txt:regis5De"] = "ข้อมูลอื่นๆ เป็นข้อมูลส่วนของผู้สมัครที่ได้สมัครเข้ามาในเว็บไซต์ของคุณ";
		$langMod["ep:thai"] ="ทักษะภาษาไทย";
		$langMod["ep:eng"] ="ทักษะภาษาอังกฤษ";
		$langMod["ep:other"] ="ทักษะภาษาอื่นๆ";
		$langMod["ep:tl"] ="ฟัง";
		$langMod["ep:ts"] ="พูด";
		$langMod["ep:tr"] ="เข้าใจ";
		$langMod["ep:tw"] ="เขียน";
		$langMod["ep:printt"] ="พิมพ์ดีดไทย(คำ / นาที)";
		$langMod["ep:printe"] ="พิมพ์ดีดอังกฤษ(คำ / นาที)";
		$langMod["ep:car"] ="มีพาหะนะส่วนตัว";
		$langMod["ep:driving"] ="ใบขับขี่";
		$langMod["ep:special"] ="ความสามารถพิเศษอื่นๆ";
		$langMod["ep:ref"] ="บุคคลอ้างอิง";
		$langMod["ep:lange"] ="ภาษา";
		$langMod["ep:select"] ="ตำแหน่งที่ต้องการ";
		$langMod["ep:bam"] ="บาท / เดือน";
		$langMod["ep:selectp"] ="เลือกจังหวัด";
		$langMod["ep:selectS"] ="เลือกเพศ";
		$langMod["ep:selectE"] ="เลือกระดับการศึกษาสูงสุด";
		$langMod["ep:selectM"] ="เลือกเงินเดือน";
		$langMod["ep:below"] ="ต่ำกว่า 10,000";
		$langMod["ep:more"] ="มากกว่า 250,000";
		$langMod["txt:regis8"] ="ประวัติการทำงาน";
		$langMod["txt:regis8De"] = "ประวัติการทำงาน เป็นข้อมูลส่วนของผู้สมัครที่ได้สมัครเข้ามาในเว็บไซต์ของคุณ";
		$langMod["txt:set"] = "ข้อมูลอีเมล์";
		$langMod["txt:setDe"] = "ข้อมูลนี้คือส่วนที่ใช้ในการกำหนดอีเมล์ในการติดต่อหน้าเว็บไซต์ของคุณ";
		$langMod["tit:email"] ="Email";
		$langMod["tit:no"] ="ลำดับ";

		$langMod["ats:email"] = "อีเมล์ซ้ำกับที่มีอยู่ในระบบแล้ว";
		$langMod["meu:selectgn"] = $langMod["btn:position"];
		$langMod["txt:regis9"]= "ประวัติการฝึกอบรม/ดูงาน/ฝึกงาน";
		$langMod["txt:regis9De"] = "ประวัติการฝึกอบรม/ดูงาน/ฝึกงาน เป็นข้อมูลส่วนของผู้สมัครที่ได้สมัครเข้ามาในเว็บไซต์ของคุณ";
		$langMod["meu:setPermis"] = "Setting";
		$langMod["txt:titleadds"] = "". $langMod["meu:setPermis"]." New";
		$langMod["txt:titleedits"] = "". $langMod["meu:setPermis"]." Edit";
		$langMod["txt:titleviews"] = "". $langMod["meu:setPermis"]." Display";
		$langMod["txt:sortpermiss"] = "". $langMod["meu:setPermis"]." Sort";
		$langMod["txt:titles"] = "Setting " .getNameMenu($_REQUEST["menukeyid"]);
		$langMod["txt:titlesDe"] = "Please enter details. For use in display on your website. ";

}else{
		$langMod["txt:regis9"]= "ประวัติการฝึกอบรม/ดูงาน/ฝึกงาน";
		$langMod["txt:regis9De"] = "ประวัติการฝึกอบรม/ดูงาน/ฝึกงาน เป็นข้อมูลส่วนของผู้สมัครที่ได้สมัครเข้ามาในเว็บไซต์ของคุณ";
		$langMod["txt:titleadd"] = "สร้างข้อมูล".getNameMenu($_REQUEST["menukeyid"]);
		$langMod["txt:titleedit"] = "แก้ไขข้อมูล".getNameMenu($_REQUEST["menukeyid"]);
		$langMod["txt:titleview"] = "แสดงผลข้อมูล".getNameMenu($_REQUEST["menukeyid"]);
		$langMod["txt:sortpermis"] = "จัดเรียงข้อมูล".getNameMenu($_REQUEST["menukeyid"]);
		$langMod["meu:group"] = "group " .getNameMenu($_REQUEST["menukeyid"]);
		$langMod["meu:email"] ="Email"; 
		$langMod["txt:titleeditM"] = "แก้ไขข้อมูล".$langMod["meu:email"];
		
		$langMod["txt:subject"] = "ข้อมูล".getNameMenu($_REQUEST["menukeyid"]);
		$langMod["txt:subjectDe"] = "โปรดป้อนหัวข้อและคำบรรยาย เพื่อใช้ในการแสดงผลเนื้อหาในหน้ารวมข้อมูลทั้งหมดของเมนูนี้บนเว็บไซต์ของคุณ";
		$langMod["txt:title"] = "ข้อมูลรายละเอียด".getNameMenu($_REQUEST["menukeyid"]);
		$langMod["txt:titleDe"] = "โปรดป้อนรายละเอียด เพื่อใช้ในการแสดงผลในหน้าเว็บไซต์ของคุณ";
		$langMod["txt:attfile"] = "ข้อมูลเอกสารแนบ";
		$langMod["txt:attfileDe"] = "ข้อมูลเอกสารแนบ เพื่อใช้ในการแสดงผลเอกสารแนบของเนื้อหานี้ ในรูปแบบของการดาวน์โหลดเอกสารเก็บไว้ในเครื่องคอมพิวเตอร์บนเว็บไซต์ของคุณ";
		$langMod["btn:export3"] = "PDF";
		$langMod["btn:set"] = "Setting Email";
		$langMod["btn:mem"] = "Applicant";
		$langMod["btn:position"] = "Position";

		$langMod["txt:titleview_app"] = "แสดงผลข้อมูล".$langMod["btn:mem"];

		$langMod["btn:career"] = "Career";
		$langMod["btn:from"] = "แบบฟอร์ม";
		
		$langMod["btn:position"] = "Position";
		

		
		$langMod["txt:seo"] = "ข้อมูลรองรับการค้นหาของ Search Engine";
		$langMod["txt:seoDe"] = "ข้อมูลนี้คือส่วนที่ใช้ในการรองรับการค้นหาของ Search Engine ไม่ว่าจะเป็น Google หรือ Yahoo เป็นต้น";
		$langMod["txt:date"] = "กำหนดวันที่ในการแสดงผล";
		$langMod["txt:dateDe"] = "ข้อมูลนี้คือส่วนที่ใช้ในการกำหนดวันที่ในการแสดงผล เพื่อใช้ในการแสดงผลในหน้าเว็บไซต์ของคุณ";

		$langMod["txt:album"] = "ข้อมูลอัลบั้มภาพ";
		$langMod["txt:albumDe"] = "ข้อมูลอัลบั้มภาพ เพื่อใช้ในการแสดงผลรูปภาพของเนื้อหานี้ ในรูปแบบภาพพสไลด์บนเว็บไซต์ของคุณ";
		$langMod["txt:video"] = "ข้อมูลวิดีโอ";
		$langMod["txt:videoDe"] = "ข้อมูลวิดีโอ เพื่อใช้ในการแสดงผลวิดีโอของเนื้อหานี้ ในรูปแบบเครื่องเล่นวิดีโอบนเว็บไซต์ของคุณ";
		$langMod["txt:pic"] = "รูปภาพประกอบ";
		$langMod["txt:picDe"] = "ข้อมูลรูปภาพประกอบ เพื่อใช้ในการแสดงผลรูปภาพของเนื้อหานี้";


		$langMod["inp:seotitle"] ="Tag Title";
		$langMod["inp:seotitlenote"] ="หมายเหตุ : เนื้อหาที่จะแสดงในส่วนของหัวข้อของการค้นหาใน Search Engine(Google, Yahoo)";
		$langMod["inp:seodes"] ="Tag Description";
		$langMod["inp:seodesnote"] ="หมายเหตุ : เนื้อหาที่จะแสดงในส่วนของรายละเอียดหัวข้อของการค้นหาใน Search Engine(Google, Yahoo)";
		$langMod["inp:seokey"] ="Tag Keywords";
		$langMod["inp:seokeynote"] ="หมายเหตุ : คำหรือวลีที่ใช้ในการค้นหาใน Search Engine(Google, Yahoo)";

		$langMod["inp:album"] ="เลือกรูปภาพ";
		$langMod["inp:chfile"] ="เปลี่ยนชื่อเอกสารแนบ";
		$langMod["inp:sefile"] ="เลือกเอกสารแนบ";
		$langMod["inp:notefile"] ="หมายเหตุ : กรุณาเลือกอัพโหลดไฟล์ที่มีขนาดเหมาะสมไม่ใหญ่เกินไป เนื่องจากหากไฟล์ขนาดใหญ่จะส่งผลให้เกินความล่าช้าในการอัพโหลดไฟล์";
		$langMod["inp:notedate"] ="หมายเหตุ : กรณีไม่ต้องการระบุวันเริ่มต้น และวันสิ้นสุดของเนื้อหานี้ กรุณาเว้นไว้ไม่ต้องกรอกข้อมูลใดๆ";
		$langMod["inp:notepic"] ="หมายเหตุ : กรุณาอัพโหลดเฉพาะไฟล์ .jpg, .png และ .gif เท่านั้น, ขนาดของรูปภาพไม่เกิน 2 Mb และรูปภาพที่ให้ในการอัพโหลดควรมีสัดส่วนที่ ".$sizeWidthPic."x".$sizeHeightPic." พิกเซล";
		$langMod["inp:notealbum"] ="หมายเหตุ : กรุณาอัพโหลดเฉพาะไฟล์ .jpg, .png และ .gif เท่านั้น, ขนาดของรูปภาพไม่เกิน 2 Mb และรูปภาพที่ให้ในการอัพโหลดควรมีสัดส่วนที่ ".$sizeWidthAlbum."x".$sizeHeightAlbum." พิกเซล";
		
		$langMod["tit:subject"] ="ชื่อ".$langMod["btn:career"];
		$langMod["tit:sdate"] ="วันเริ่มต้น";
		$langMod["tit:edate"] ="วันสิ้นสุด";
		$langMod["tit:title"] ="คำบรรยาย";
		$langMod["tit:typevdo"] ="ประเภทวิดีโอ";
		$langMod["tit:linkvdo"] ="ลิงค์ Youtube";
		$langMod["tit:uploadvdo"] ="อัพโหลดไฟล์";
		$langMod["tit:linkvdonote"] ="หมายเหตุ : ลิงค์ที่ใช่ คือ URL youtube.com เท่านั้น";
		$langMod["tit:uploadvdonote"] ="หมายเหตุ : กรุณาอัพโหลดเฉพาะไฟล์ .flv, .wmv, .mp3, .wav, .wma, .avi และ .mpeg เท่านั้น";
		
		$langMod["inp:salary"] ="เงินเดือน";
		$langMod["inp:salaryno"] ="ไม่แสดงเงินเดือน";
		$langMod["inp:salaryyes"] ="ระบุเงินเดือน";
		$langMod["inp:salaryto"] ="ระบุช่วงเงินเดือน";
		$langMod["inp:salaryorg"] ="ตามโครงสร้างบริษัท";
		$langMod["inp:salaryinfo"] ="ระบุเงินเดือน";
		$langMod["inp:pricesale"] ="หมายเหตุ : กรุณาป้อนข้อมูลเป็นตัวเลขเท่านั้น";
		$langMod["inp:qua"] ="อัตราจ้าง";
		$langMod["inp:work"] ="สถานที่ทำงาน";
		$langMod["inp:app"] ="ผู้สมัคร";
		$langMod["tit:regisdate"] ="วันที่สมัคร";
		$langMod["tit:selectg"]="เลือกตำแหน่งงาน";

		$langMod["tit:selectgn"] ="ชื่อ".$langMod["btn:position"]." ";
		$langMod["txt:titleaddg"] = "สร้างข้อมูล".$langMod["btn:position"];
		$langMod["txt:subjectg"] = "ข้อมูล".$langMod["btn:position"];
		$langMod["txt:subjectgDe"] = "โปรดป้อนชื่อ".$langMod["btn:position"]." เพื่อใช้ในการแสดงผลในหน้าเว็บไซต์ของคุณ";
		$langMod["tit:noteg"] ="คำอธิบาย ";
		$langMod["txt:titleeditg"] = "แก้ไขข้อมูล".$langMod["btn:position"];
		$langMod["txt:titleviewg"] = "แสดงผลข้อมูล".$langMod["btn:position"];

		$langMod["file:type"] ="ประเภท";
		$langMod["file:size"] ="ขนาด";
		$langMod["file:download"] ="ดาวน์โหลด";
		
		$langMod["home:detail"] ="อ่านรายละเอียด";
		
		$langMod["txt:regis"] = "ข้อมูลผู้สมัคร";
		$langMod["txt:regisDe"] = "ข้อมูลผู้สมัคร เป็นข้อมูลส่วนของผู้สมัครที่ได้สมัครเข้ามาในเว็บไซต์ของคุณ";
		$langMod["ep:name"] ="ชื่อ-นามสกุล";
		$langMod["ep:address"] ="ที่อยู่";
		$langMod["ep:province"] ="จังหวัด";
		$langMod["ep:zipcode"] ="รหัสไปรษณีย์";
		$langMod["ep:mobile"] ="เบอร์โทรศัพมือถือ";
		$langMod["ep:tel"] ="เบอร์โทรศัพบ้าน";
		$langMod["ep:email"] ="อีเมล ";
		
		$langMod["txt:regis2"] = "ข้อมูลส่วนตัว";
		$langMod["txt:regis2De"] = "ข้อมูลส่วนตัว เป็นข้อมูลส่วนของผู้สมัครที่ได้สมัครเข้ามาในเว็บไซต์ของคุณ";
		$langMod["ep:date"] ="วัน/เดือน/ปี";
		$langMod["ep:status"] ="สถาณะภาพสมรส";
		$langMod["ep:sex"] ="เพศ";
		$langMod["ep:nationality"] ="สัญชาติ";
		$langMod["ep:religion"] ="ศาสนา";
		$langMod["ep:h"] ="ส่วนสูง(cm)";
		$langMod["ep:w"] ="น้ำหนัก(kg)";
		$langMod["ep:army"] ="ภาวะทางทหาร";
		
		$langMod["txt:regis4"] = "ข้อมูลตำแหน่งและเงินเดือน";
		$langMod["txt:regis4De"] = "ข้อมูลตำแหน่งและเงินเดือน เป็นข้อมูลส่วนของผู้สมัครที่ได้สมัครเข้ามาในเว็บไซต์ของคุณ";
		$langMod["ep:position1"] ="ตำแหน่งงาน";
		$langMod["ep:position2"] ="ตำแหน่งที่ 2";
		$langMod["ep:position3"] ="ตำแหน่งที่ 3";
		$langMod["ep:money"] ="เงินเดือนที่ต้องการ";
		
		$langMod["txt:regis3"] = "ประวัติการศึกษาสูงสุด";
		$langMod["txt:regis3De"] = "ประวัติการศึกษาสูงสุด เป็นข้อมูลส่วนของผู้สมัครที่ได้สมัครเข้ามาในเว็บไซต์ของคุณ";
		$langMod["ep:edu"] ="ระดับการศึกษาสูงสุด";
		$langMod["ep:academy"] ="ชื่อสถานศึกษา";
		$langMod["ep:qualification"] ="สาขาวิชา";
		$langMod["ep:eduYear"] ="ปีที่สำเร็จการศึกษา";
		$langMod["ep:gpa"] ="เกรดเฉลี่ย";
		
		$langMod["txt:regis5"] = "ความสามารถพิเศษต่างๆ";
		$langMod["txt:regis5De"] = "ความสามารถพิเศษต่างๆ เป็นข้อมูลส่วนของผู้สมัครที่ได้สมัครเข้ามาในเว็บไซต์ของคุณ";
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
		$langMod["ep:select"] ="ตำแหน่งที่ต้องการ";
		$langMod["ep:bam"] ="บาท / เดือน";
		$langMod["ep:selectp"] ="เลือกจังหวัด";
		$langMod["ep:selectS"] ="เลือกเพศ";
		$langMod["ep:selectE"] ="เลือกระดับการศึกษาสูงสุด";
		$langMod["ep:selectM"] ="เลือกเงินเดือน";
		$langMod["ep:below"] ="ต่ำกว่า 10,000";
		$langMod["ep:more"] ="มากกว่า 250,000";
		
		$langMod["txt:set"] = "ข้อมูลอีเมล์";
		$langMod["txt:setDe"] = "ข้อมูลนี้คือส่วนที่ใช้ในการกำหนดอีเมล์ในการติดต่อหน้าเว็บไซต์ของคุณ";
		$langMod["tit:email"] ="อีเมล์";
		$langMod["tit:no"] ="ลำดับ";

		$langMod["ats:email"] = "อีเมล์ซ้ำกับที่มีอยู่ในระบบแล้ว";
		$langMod["meu:selectgn"] = $langMod["btn:position"];
}
?>

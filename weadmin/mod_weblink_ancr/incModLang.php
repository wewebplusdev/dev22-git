<?php
if ($_SESSION[$valSiteManage . "core_session_language"] == "Eng") {
    $langMod["meu:contant"] = getNameMenu($_REQUEST["menukeyid"]);
    $langMod["meu:group"] = "GROUP " . getNameMenu($_REQUEST["menukeyid"]);
    $langMod["tit:subject"] = "Name" . getNameMenu($_REQUEST["menukeyid"]);
    $langMod["txt:titleadd"] = "" .getNameMenu($_REQUEST["menukeyid"])." New";
    $langMod["txt:titleedit"] = "" .getNameMenu($_REQUEST["menukeyid"])." Edit";
    $langMod["txt:titleview"] = "" .getNameMenu($_REQUEST["menukeyid"])." Display";
    $langMod["txt:sortpermis"] = "" .getNameMenu($_REQUEST["menukeyid"])." Sort";
    $langMod["txt:subject"] = "" .getNameMenu($_REQUEST["menukeyid"])." Info";
    $langMod["txt:subjectDe"] = "Please enter a selection, group, title and subtitle. To use to display content on the page, include all of this menu information on your site. ";
    $langMod["txt:title"] = "Detailed information " .getNameMenu($_REQUEST["menukeyid"]);
    $langMod["txt:titleDe"] = "Please enter details. For use in display on your website. ";
    $langMod["txt:pic"] = "Image Gallery";
    $langMod["txt:picDe"] = "Image data includes For use in displaying images of this content. ";

    $langMod["txt:seo"] = "Support for Search Engine Search";
    $langMod["txt:seoDe"] = "This information is used to support search engines such as Google or Yahoo.";

    $langMod["inp:notedate"] = "Note: If you do not want to specify a start date And the end date of this content. Please do not fill out any information. ";
    $langMod["edit:linknote"] = "Note : Please enter the URL preceded by \"http://\" such as http://www.wewebplus.com/ etc. If you do not want to enter the URL, use " . "#";

    $langMod["inp:album"] = "Select photo";
    $langMod["tit:subject"] = "Name " .getNameMenu($_REQUEST["menukeyid"]);
    $langMod["tit:sdate"] = "Start date";
    $langMod["tit:edate"] = "End date";
    $langMod["file:type"] = "Type";
    $langMod["file:size"] = "Size";
    $langMod["file:download"] = "Download";
    $langMod["tit:linkvdo"] = "URL";
    $langMod["home:detail"] = "Read details";
    $langMod["tit:typevdo"] = "Display";
    $langMod["inp:notepic"] = "Note: Please upload only .jpg, .png and .gif files, the size of the image should not exceed 2 Mb and the image provided in the upload should have a proportional ". $sizeWidthReal." X ". $sizeHeightReal." Pixels ";
    $langMod["inp:notepic2"] = "Note: Please upload only .jpg, .png and .gif files, the size of the image should not exceed 2 Mb and the image provided in the upload should have a proportional ". $sizeWidthIcon." X ". $sizeHeightIcon." Pixels ";
    
    $langMod["txt:video"] = "Video Info";
    $langMod["tit:uploadvdo"] = "Upload a file";
    $langMod["tit:linkvdonote"] = "Note: The only link is the youtube.com URL.";
    $langMod["tit:uploadvdonote"] = "Note: Please upload only .flv, .wmv, .mp3, .wav, .wma, .avi, and .mpeg files.";
    $langMod["txt:videoDe"] = "Video information For use in video rendering of this content. In video player format on your website. ";
    

    $langMod["inp:chfile"] = "Rename attachment";
    $langMod["inp:sefile"] = "Select attachment";
    $langMod["inp:notefile"] = "Note: Please select a file with a size that is not too large. This is because large files will result in delays in uploading files. ";
    $langMod["inp:notedate"] = "Note: If you do not want to specify a start date And the end date of this content. Please do not fill out any information. ";
    $langMod["inp:notealbum"] = "Note: Please upload only .jpg, .png and .gif files, the image size should not exceed 2 Mb. ". $sizeWidthAlbum." X ". $sizeHeightAlbum." Pixels ";
    
    $langMod["tit:inpName"] = "Name " .getNameMenu($_REQUEST["menukeyid"]);
    $langMod["tit:desc"] = "Description";
    $langMod["tit:title"] = "Title";
    
    $langMod["txt:logo"] = "Image Logo";

} else {
    $langMod["meu:contant"] = getNameMenu($_REQUEST["menukeyid"]);
    $langMod["meu:group"] = "กลุ่ม " . getNameMenu($_REQUEST["menukeyid"]);
    $langMod["txt:titleadd"] = "สร้างข้อมูล" . getNameMenu($_REQUEST["menukeyid"]);
    $langMod["txt:titleedit"] = "แก้ไขข้อมูล" . getNameMenu($_REQUEST["menukeyid"]);
    $langMod["txt:titleview"] = "แสดงผลข้อมูล" . getNameMenu($_REQUEST["menukeyid"]);
    $langMod["txt:sortpermis"] = "จัดเรียงข้อมูล" . getNameMenu($_REQUEST["menukeyid"]);
    $langMod["txt:subject"] = "ข้อมูล" . getNameMenu($_REQUEST["menukeyid"]);
    $langMod["txt:subjectDe"] = "โปรดป้อนชื่อ เพื่อใช้ในการแสดงผลในหน้าเว็บไซต์ของคุณ";
    $langMod["txt:title"] = "ข้อมูลรายละเอียด" . getNameMenu($_REQUEST["menukeyid"]);
    $langMod["txt:titleDe"] = "โปรดป้อนรายละเอียด เพื่อใช้ในการแสดงผลในหน้าเว็บไซต์ของคุณ";
    $langMod["txt:pic"] = "รูปภาพประกอบ";
    $langMod["txt:picDe"] = "ข้อมูลรูปภาพประกอบ เพื่อใช้ในการแสดงผลรูปภาพของเนื้อหานี้";

    $langMod["txt:seo"] = "กำหนดวันที่ในการแสดงผล";
    $langMod["txt:seoDe"] = "ข้อมูลนี้คือส่วนที่ใช้ในการกำหนดวันที่ในการแสดงผล เพื่อใช้ในการแสดงผลในหน้าเว็บไซต์ของคุณ";

    $langMod["inp:notedate"] = "หมายเหตุ : กรณีไม่ต้องการระบุวันเริ่มต้น และวันสิ้นสุดของเนื้อหานี้ กรุณาเว้นไว้ไม่ต้องกรอกข้อมูลใดๆ";
    $langMod["edit:linknote"] = "หมายเหตุ : กรุณา URL นำหน้าด้วย \"http://\" เช่น http://www.wewebplus.com เป็นต้น กรณีไม่ต้องการใส่ URL ให้ใช้เครื่องหมาย " . "#" . " แทน";

    $langMod["inp:album"] = "เลือกรูปภาพ";
    $langMod["tit:subject"] = "ชื่อ" . getNameMenu($_REQUEST["menukeyid"]);
    $langMod["tit:sdate"] = "วันเริ่มต้น";
    $langMod["tit:edate"] = "วันสิ้นสุด";
    $langMod["file:type"] = "ประเภท";
    $langMod["file:size"] = "ขนาด";
    $langMod["file:download"] = "ดาวน์โหลด";
    $langMod["tit:linkvdo"] = "ลิงค์";
    $langMod["home:detail"] = "อ่านรายละเอียด";
    $langMod["tit:typevdo"] = "การแสดงผล";
    $langMod["inp:notepic"] = "หมายเหตุ : กรุณาอัพโหลดเฉพาะไฟล์ .jpg ,.gif และ .png เท่านั้น ขนาดของรูปภาพที่ใช้ในการอัพโหลด " . $sizeWidthReal . " x " . $sizeHeightReal . " พิกเซล";

    $langMod["txt:video"] = "ข้อมูลวิดีโอ ";
    $langMod["tit:uploadvdo"] = "อัพโหลดไฟล์";
    $langMod["tit:linkvdonote"] = "หมายเหตุ : เฉพาะชื่อ URL youtube.com เท่านั้น";
    $langMod["tit:uploadvdonote"] = "หมายเหตุ : กรุณาอัพโหลดเฉพาะไฟล์ .mp4 และขนาดไม่เกิน 10 Mb เท่านั้น";

    // $langMod["tit:selectg"] = "เลือกบริษัทรถยนต์มือสอง";
    // $langMod["tit:selectgn"] = "บริษัทรถยนต์มือสอง";

    // $langMod["tit:selecttn"] = "รุ่นศูนย์บริการ";
    // $langMod["tit:selectt"] = "เลือกรุ่นศูนย์บริการ";

    $langMod["tit:inpName"] = "ชื่อ" . getNameMenu($_REQUEST["menukeyid"]);
    $langMod["tit:desc"] = "รายละเอียด";
}

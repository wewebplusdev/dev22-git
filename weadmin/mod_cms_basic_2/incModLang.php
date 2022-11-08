<?php

if ($_SESSION[$valSiteManage . "core_session_language"] == "Eng") {
    $langMod["txt:titleedit"] = "" . getNameMenu($_REQUEST["menukeyid"] . " Edit");
    
    $langMod["txt:title"] = "" . getNameMenu($_REQUEST["menukeyid"] . " info");
    $langMod["txt:titleDe"] = "Please enter details. For use in display on your website. ";
    
        $langMod["txt:titleHome"] = "Homepage " . getNameMenu($_REQUEST["menukeyid"] . " info");
    $langMod["txt:titleDeHome"] = "Please enter details. For use in display on your website. in homepage ";
    
    $langMod["txt:attfile"] = "Attachment information";
    $langMod["txt:attfileDe"] = "Attachment information To use to display the attachment of this content. In the form of downloading documents stored on a computer on your website. ";
    $langMod["txt:seo"] = "Support for Search Engine Search";
    $langMod["txt:seoDe"] = "This information is used to support search engines such as Google or Yahoo.";


    $langMod["txt:album"] = "Photo album information";
    $langMod["txt:albumDe"] = "Photo album information To use to display this image of the content. In slideshows format on your website ";


    $langMod["inp:album"] = "Select photo";
    $langMod["inp:chfile"] = "Rename attachment";
    $langMod["inp:sefile"] = "Select attachment";
    $langMod["inp:notefile"] = "Note: Please select a file with a size that is not too large. This is because large files will result in delays in uploading files. ";


    $langMod["inp:seotitle"] = "Title Tag";
    $langMod["inp:seotitlenote"] = "Note: Content will be displayed in the Search Topics section of the Search Engine (Google, Yahoo).";
    $langMod["inp:seodes"] = "Tag Description";
    $langMod["inp:seodesnote"] = "Note: Content will be displayed in the Search Topics section of the Search Engine (Google, Yahoo)";
    $langMod["inp:seokey"] = "Tag Keywords";
    $langMod["inp:seokeynote"] = "Note: Search words or phrases in Search Engine (Google, Yahoo)";
    $langMod["inp:notealbum"] = "Note: Please upload only .jpg, .png and .gif files, the image size should not exceed 2 Mb. ". $sizeWidthAlbum." X ". $sizeHeightAlbum." Pixels ";


    $langMod["file:type"] = "type";
    $langMod["file:size"] = "Size";
    $langMod["file:download"] = "Download";

    $langMod["home: detail"] = "Read details";
} else {
    $langMod["txt:titleedit"] = "แก้ไขข้อมูล" . getNameMenu($_REQUEST["menukeyid"]);


    $langMod["txt:title"] = "ข้อมูล" . getNameMenu($_REQUEST["menukeyid"]);
    $langMod["txt:titleDe"] = "โปรดป้อนรายละเอียด เพื่อใช้ในการแสดงผลในหน้าเว็บไซต์ของคุณ"
    ;
    $langMod["txt:titleHome"] = "ข้อมูล" . getNameMenu($_REQUEST["menukeyid"]) . " แสดงหน้าแรก";
    $langMod["txt:titleDeHome"] = "โปรดป้อนรายละเอียด เพื่อใช้ในการแสดงผลในหน้าเว็บไซต์ของคุณในหน้าหลัก";

    $langMod["txt:attfile"] = "ข้อมูลเอกสารแนบ";
    $langMod["txt:attfileDe"] = "ข้อมูลเอกสารแนบ เพื่อใช้ในการแสดงผลเอกสารแนบของเนื้อหานี้ ในรูปแบบของการดาวน์โหลดเอกสารเก็บไว้ในเครื่องคอมพิวเตอร์บนเว็บไซต์ของคุณ";
    $langMod["txt:seo"] = "ข้อมูลรองรับการค้นหาของ Search Engine";
    $langMod["txt:seoDe"] = "ข้อมูลนี้คือส่วนที่ใช้ในการรองรับการค้นหาของ Search Engine ไม่ว่าจะเป็น Google หรือ Yahoo เป็นต้น";

    $langMod["txt:album"] = "ข้อมูลอัลบั้มภาพ";
    $langMod["txt:albumDe"] = "ข้อมูลอัลบั้มภาพ เพื่อใช้ในการแสดงผลรูปภาพของเนื้อหานี้ ในรูปแบบภาพพสไลด์บนเว็บไซต์ของคุณ";

    $langMod["txt:video"] = "ข้อมูลวิดีโอ";
    $langMod["txt:videoDe"] = "ข้อมูลวิดีโอ เพื่อใช้ในการแสดงผลวิดีโอของเนื้อหานี้ ในรูปแบบเครื่องเล่นวิดีโอบนเว็บไซต์ของคุณ";


    $langMod["inp:album"] ="เลือกรูปภาพ";
    $langMod["inp:chfile"] = "เปลี่ยนชื่อเอกสารแนบ";
    $langMod["inp:sefile"] = "เลือกเอกสารแนบ";
    $langMod["inp:notefile"] = "หมายเหตุ : กรุณาเลือกอัพโหลดไฟล์ที่มีขนาดเหมาะสมไม่ใหญ่เกินไป เนื่องจากหากไฟล์ขนาดใหญ่จะส่งผลให้เกินความล่าช้าในการอัพโหลดไฟล์";


    $langMod["inp:seotitle"] = "Tag Title";
    $langMod["inp:seotitlenote"] = "หมายเหตุ : เนื้อหาที่จะแสดงในส่วนของหัวข้อของการค้นหาใน Search Engine(Google, Yahoo)";
    $langMod["inp:seodes"] = "Tag Description";
    $langMod["inp:seodesnote"] = "หมายเหตุ : เนื้อหาที่จะแสดงในส่วนของรายละเอียดหัวข้อของการค้นหาใน Search Engine(Google, Yahoo)";
    $langMod["inp:seokey"] = "Tag Keywords";
    $langMod["inp:seokeynote"] = "หมายเหตุ : คำหรือวลีที่ใช้ในการค้นหาใน Search Engine(Google, Yahoo)";


    $langMod["file:type"] = "ประเภท";
    $langMod["file:size"] = "ขนาด";
    $langMod["file:download"] = "ดาวน์โหลด";

    $langMod["home:detail"] = "อ่านรายละเอียด";
    $langMod["inp:notealbum"] ="หมายเหตุ : กรุณาอัพโหลดเฉพาะไฟล์ .jpg, .png และ .gif เท่านั้น, ขนาดของรูปภาพไม่เกิน 2 Mb และรูปภาพที่ให้ในการอัพโหลดควรมีสัดส่วนที่ ".$sizeWidthAlbum."x".$sizeHeightAlbum." พิกเซล";
    $langMod["txt:code"] = "โค้ด";
    $langMod["txt:date"] = "กำหนดวันที่ในการแสดงผล";
    $langMod["txt:dateDe"] = "ข้อมูลนี้คือส่วนที่ใช้ในการกำหนดวันที่ในการแสดงผล เพื่อใช้ในการแสดงผลในหน้าเว็บไซต์ของคุณ";
    $langMod["tit:sdate"] ="วันเริ่มต้น ";
    $langMod["tit:edate"] ="วันสิ้นสุด ";
}
?>

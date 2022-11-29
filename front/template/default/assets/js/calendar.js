// JavaScript Document
function getCalendarDetailAll() {
   var formData = new FormData($("#myCalendarForm")[0]);
   var path = $("base").attr("href") + base_url_lang;
   $.ajax({
      url: path + "/calendar/load-calendar-list",
      type: "POST",
      success: function (data) {
         jQuery("#calendarList").show();
         jQuery("#calendarList").html(data);
      },
      data: formData,
      cache: false,
      contentType: false,
      processData: false,
   });
}


function GetCalendar() {
   var formData = new FormData($("#myCalendarForm")[0]);
   var path = $("base").attr("href") + base_url_lang;
   // console.log(path);
   $.ajax({
      url: path + "/calendar/load-calendar",
      type: "POST",
      success: function (data) {
         // console.log(data);
         jQuery("#calendar").show();
         jQuery("#calendar").html(data);
         getCalendarDetailAll();
         $(".select-control.select-year").select2({
            theme: "option-year",
            minimumResultsForSearch: -1,
         });
      },
      data: formData,
      cache: false,
      contentType: false,
      processData: false,
   });
}

function getCalendarAllHome() {

   var TYPE = "POST";
   var URL = path + "/" + base_url_lang + "/calendar/load-carlendar-home";

   var dataSet = jQuery("#myCalendarForm").serialize();
   jQuery.ajax({type: TYPE, url: URL, data: dataSet,
      success: function (html) {

         jQuery("#calendar").show();
         jQuery("#calendar").html(html);
      }
   });
}

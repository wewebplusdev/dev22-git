$(document).ready(function () {
   var pagenow = $('.site-container').data('page');
   console.log(pagenow);
   switch (pagenow) {
      // initialize calendar
      case 'index':
         GetCalendar();
         break;

      default:
         break;
   }
});

$('.event-group').on('click', function () {
   let thisID = $(this).data('id');
   document.myCalendarForm.action.value = '';
   document.myCalendarForm.myCalendarGroup.value = '' + thisID + '';
   GetCalendar();
});
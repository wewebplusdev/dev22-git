<section class="site-container sitekey" data-page="index" data-id="{$sitekey}">

   <div class="default-header">
      <div class="top-graphic mb-4 text-primary">
         <figure class="cover">
            <img class="figure-img img-fluid" src="{$template}{$settingModulus.tgp}" alt="{$settingModulus.subject}">
         </figure>
         <div class="container">
            <div class="wrapper">
               <div class="title typo-lg">{$settingModulus.title}</div>
               <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="{$ul}/home">{$lang['menu']['home']}</a></li>
                  <li class="breadcrumb-item active"><a href="{$ul}/{$menuActive}">{$settingModulus.subject}</a></li>
               </ol>
            </div>
         </div>
      </div>
   </div>
   <div class="default-page calendar-page">
      <div class="container">
         <div class="row" id="revertCustom">
            <div class="col-xl-5 col-md-6 col-12 order-md-2">
               <div class="calendar-block">
                  <div id="calendar">
                     <form action="" method="get" name="myCalendarForm" id="myCalendarForm">
                        <input name="inputLanguage" type="hidden" id="inputLanguage" value="{$langFull}">
                        <input name="inputFolderPath" type="hidden" id="inputFolderPath" value="{$langon}">
                     </form>
                  </div>
               </div>
            </div>
            <div class="col-xl-7 col-md-6 col-12 order-md-1">
               <div id="calendarList">

               </div>
            </div>
         </div>
         <div class="row justify-content-end">
            <div class="col-xl-5 col-md-6 col-12">
               <div class="calendar-group">
                  <div class="title">{$lang['menu']['calendar']}</div>
                  {foreach $callCalendarGroup as $keycallCalendarGroup => $valuecallCalendarGroup}
                     <p class="desc event-group" style="cursor: pointer;" data-id="{$valuecallCalendarGroup.id}">
                        <span class="icon" style="background-color: {$valuecallCalendarGroup.color};"></span>
                        {$valuecallCalendarGroup.subject}
                     </p>
                  {/foreach}
                  {* <p class="desc" style="cursor: pointer;">
                  <span class="icon" style="background-color: var(--color-primary);"></span>
                  กิจกรรมเข้าร่วมรับการอบรม, ประชุม, ส่งเสริมอาชีพ
                  </p> *}
               </div>
            </div>
         </div>
      </div>
   </div>

</section>
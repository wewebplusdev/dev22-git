<div class="title">
   <span>{$txt_calendarList}</span>
</div>
<div class="calendar-vertical-block">
   {if $CallActivityData->_numOfRows gte 1}
      {foreach $CallActivityData as $keyCallActivityData => $valueCallActivityData}
         {assign var="valSdate" value="{calendarPage::showDateCalendarDay($valueCallActivityData.11)}"}
         {assign var="valEdate" value="{calendarPage::showDateCalendarDay($valueCallActivityData.12)}"}
         {assign var="callCalendarGroupList" value="{calendarPage::callCalendarGroup($valueCallActivityData.1, $valueCallActivityData.27, 'list')}"}
         {$callCalendarGroupList = calendarPage::callCalendarGroup($valueCallActivityData.1, $valueCallActivityData.27, 'list')}
         {if $valueCallActivityData.32 eq 1}
            {assign var="valDateShowCalDay" value="{$valSdate}-{$valEdate}"}
         {else}
            {assign var="valDateShowCalDay" value="{$valSdate}"}
         {/if}
         <a href="{$ul}/{$menuActive}/{$menuDetail}/{encodeStr($valueCallActivityData.0)}" class="link">
            <div class="list-wrapper">
               <div class="row no-gutters">
                  <div class="col-9">
                     <div class="list-inner">
                        <span class="icon-list-inner" style="{if $valueCallActivityData.color neq ""}background-color: {$valueCallActivityData.color}{else}border:solid 1px black{/if};"></span>
                        <div class="list-title text-limit -x2">
                           <span class="icon"></span>
                           {if $langon == 'th'}
                              {$valueCallActivityData.3}
                           {else if $langon == 'en'}
                              {$valueCallActivityData.5}
                           {else if $langon == 'cn'}
                              {$valueCallActivityData.4}
                           {/if}
                        </div>
                     </div>
                  </div>
                  <div class="col text-right">
                     <div class="list-date text-limit">
                        <span>{$valDateShowCalDay} {calendarPage::CallMonthPage($valueCallActivityData.11)}</span>
                     </div>
                  </div>
               </div>
            </div>
         </a>
      {/foreach}
   {else}
      <div>
         <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
            <tr>
               <td align="center" style="padding-top:50px;padding-bottom:100px;font-size:18px;">
                  <span>{$lang["calendar"]["nodata"]}</span>
               </td>
            </tr>
         </table>
      </div>
   {/if}
</div>

{literal}
   <script>
      $('.calendar-list').slick({
         slidesToShow: 5,
         slidesToScroll: 1,
         vertical: true,
         responsive: [{
            breakpoint: 1200,
            settings: {
               slidesToShow: 3
            }
         }]
      });
   </script>
{/literal}
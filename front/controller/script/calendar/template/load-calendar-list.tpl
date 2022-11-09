<div class="calendar-list-title">
    <span>{$txt_calendarList}</span>
</div>
<div class="calendar-list">
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
            <div>
                <a href="{$ul}/{$menuActive}/{$menuDetail}/{encodeStr($valueCallActivityData.0)}" class="link"
                    title="{$valueCallActivityData.3}">
                    <div class="list-wrapper">
                        <div class="row">
                            <div class="col-xl-6 col-8">
                                <div class="list-inner">
                                    <div class="list-title">
                                    <span class="icon" style="{if $callCalendarGroupList->fields.color neq ""}background-color: {$callCalendarGroupList->fields.color}{else}border:solid 1px black{/if};"></span>
                                        {$valueCallActivityData.3}
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6 col-4">
                                <div class="list-date">
                                    <span>
                                        {$valDateShowCalDay}
                                        <small>{calendarPage::CallMonthPage($valueCallActivityData.11)}</small>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
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
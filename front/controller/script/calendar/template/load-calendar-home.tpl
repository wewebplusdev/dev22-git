<div class="calendar-list">
    {foreach $callCalendarList as $keycallCalendarList => $valuecallCalendarList}
        {$valSdate = showDateCalendarDay($valuecallCalendarList['sdate'])}
        {$valEdate = showDateCalendarDay($valuecallCalendarList['edate'])}
        {$valMonthdate = getMonthLang($valuecallCalendarList['sdate'], $pagelang)}
        <div>
            <a href="{$ul}/{$menuActive}/{$menuDetail}/{encodeStr($valuecallCalendarList.id)}" class="list-wrapper" title="{$valuecallCalendarList.subject}">
                <div class="list-date">
                    <span>{$valSdate}-{$valEdate}<small>{$valMonthdate}</small></span>
                </div>
                <div class="list-inner">
                    <div class="list-title text-light">
                        {$valuecallCalendarList.subject} </div>
                </div>
            </a>
        </div>
    {/foreach}
</div>

<script type="text/javascript">
    $('.calendar-list').slick({
        slidesToShow: 5,
        slidesToScroll: 1,
        vertical: true,
        arrows:false,
        responsive: [{
            breakpoint: 1200,
            settings: {
                slidesToShow: 3
            }
        }]
    });
</script>
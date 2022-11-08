{if count($arrNewsHome) > 0}
    <div class="update-block">
        <div class="default-header-block">
            <div class="h-title">
                GIT UPDATE
            </div>
            <a href="{$ul}/about/{$about_newsmenuid}" class="link" title="{$lang['system']['viewsall']}">
                {$lang['system']['viewsall']}
            </a>
        </div>
        <ul class="nav nav-tabs" id="updateTab" role="tablist">
            {$newscount = 0}
            {foreach $arrNewsHome as $keyarrNewsHome => $valuearrNewsHome}
                <li class="nav-item">
                    <a class="nav-link {if $newscount eq 0}active{/if}" id="news-tab-{$keyarrNewsHome}" data-toggle="tab" href="#news-{$keyarrNewsHome}" role="tab" aria-controls="news-{$keyarrNewsHome}" aria-selected="{if $newscount eq 0}true{else}false{/if}">{$valuearrNewsHome['group']['subject']}</a>
                </li>
            {$newscount = $newscount+1}
            {/foreach}
        </ul>
        <div class="tab-content" id="updateTabContent">
            {$newscount = 0}
            {foreach $arrNewsHome as $keyarrNewsHome => $valuearrNewsHome}
                <div class="tab-pane fade {if $newscount eq 0}show active{/if}" id="news-{$keyarrNewsHome}" role="tabpanel" aria-labelledby="news-tab-{$keyarrNewsHome}">
                    <div class="slider default-slider">
                        {foreach $valuearrNewsHome['list'] as $keyNewsSub => $valuearrNewsSub}
                            <div class="item">
                                <a class="link" href="{$ul}/about/{$valuearrNewsSub.menuid}/{$valuearrNewsSub.gid}/detail/{$valuearrNewsSub.id}" title="ศูนย์ข้อมูลอัญมณีและเครื่องประดับ">
                                    <div class="row no-gutters">
                                        <div class="col">
                                            <div class="thumbnail">
                                                <figure class="cover">
                                                    <img src="{$valuearrNewsSub['pic']|fileinclude:"real":{$valuearrNewsSub['masterkey']}:"link"}" alt="{$valuearrNewsSub.subject}">
                                                </figure>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row no-gutters">
                                        <div class="col">
                                            <div class="date text-limit">
                                                {$valuearrNewsSub.credate|DateThai:'1':{$langon}:'full'}
                                            </div>
                                            <div class="title text-limit -x3">
                                                {$valuearrNewsSub.subject}
                                            </div>
                                            <button type="button" class="btn btn-primary">{$lang['system']['viewmore']}</button>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        {/foreach}
                    </div>
                </div>
                {$newscount = $newscount+1}
            {/foreach}
        </div>
    </div>
{/if}
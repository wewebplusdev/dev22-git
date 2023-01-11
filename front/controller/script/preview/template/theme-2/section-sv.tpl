{if count($arrServiceList) > 0}
    <div class="services-block">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="left-side">
                        <div class="h-title">
                            {$lang['home']['servicework']}
                        </div>
                        <p class="desc">
                           {$lang['home']['serviceworkdes']}
                        </p>
                        <a href="{$ul}/service" class="btn btn-lg btn-border-light"
                            title="{$lang['system']['viewmore']}">{$lang['system']['viewmore']}</a>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="right-side">

                        <ul class="default-nav-tabs nav nav-tabs" id="updateTab" role="tablist">
                            {foreach $arrServiceList as $keyarrServiceList => $valuearrServiceList}
                                <li class="nav-item">
                                    <a class="nav-link {if $keyarrServiceList eq 0}active{/if}"
                                        id="service-{$keyarrServiceList}-tab" data-toggle="tab"
                                        href="#service-{$keyarrServiceList}" role="tab"
                                        aria-controls="service-{$keyarrServiceList}"
                                        aria-selected="true">{$valuearrServiceList.group.subject}</a>
                                </li>
                            {/foreach}
                        </ul>

                        <div class="default-tab-content tab-content" id="updateTabContent">
                            {foreach $arrServiceList as $keyarrServiceList => $valuearrServiceList}
                                <div class="tab-pane fade show {if $keyarrServiceList eq 0}active{/if}" id="service-{$keyarrServiceList}" role="tabpanel"
                                    aria-labelledby="service-{$keyarrServiceList}-tab">
                                    <div class="default-slider default-slider-dots slider">

                                    {foreach $valuearrServiceList.list as $keySubNews => $valueSubNews}
                                            <div class="item">
                                                <a href="{$ul}/service/{$valueSubNews.menuid}/{$valueSubNews.id}" class="link" title="{$valueSubNews.subject}">
                                                    <figure class="cover">
                                                        <img src="{$valueSubNews['pic']|fileinclude:"real":{$valueSubNews['masterkey']}:"link"}" alt="{$valueSubNews.subject}">
                                                    </figure>
                                                    <div class="inner">
                                                        <div class="title">
                                                        {$valueSubNews.subject}
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>

                                        {/foreach}
                                    </div>
                                </div>
                            {/foreach}
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
{/if}
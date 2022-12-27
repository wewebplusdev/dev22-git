<section class="site-container">
    <div class="default-header">
        <div class="top-graphic">
            <figure class="cover">
                <img class="figure-img img-fluid" src="{$template}{$settingModulus.tgp}" alt="{$settingModulus.tgp}">
            </figure>
            <div class="container">
                <div class="wrapper">
                    <div class="title typo-lg">{$settingModulus.title}</div>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{$ul}/home">{$lang['menu']['home']}</a></li>
                        {if $settingModulus.subject neq ""}
                            <li class="breadcrumb-item"><a href="{$ul}/{$menuActive}">{$settingModulus.subject}</a></li>
                        {/if}
                        <li class="breadcrumb-item active" aria-current="page">{$settingModulus.breadcrumb}</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <div class="default-page about-page">
        {if count($getMenuDetail) > 0}
            <div class="container">
                <div class="default-nav-slider" data-slick='{$initialSlide}'>
                    {foreach $getMenuDetail as $keygetMenuDetail => $valuegetMenuDetail}
                    {$arrName = explode("-", $valuegetMenuDetail.subject)}
                    <div class="item">
                        <a href="{$ul}/{$menuActive}/{$valuegetMenuDetail.id}" {if $MenuID eq $valuegetMenuDetail.masterkey}class="active"{/if}>{$arrName[0]}</a>
                    </div>
                    {/foreach}
                </div>
            </div>
        <div class="border-nav-slider"></div>
        {/if}


        <div class="container mt-md-5 mt-4">
            <h2 class="text-primary mb-4">{$settingModulus.breadcrumb}</h2>
            {if count($arrMenu) > 0}
                <div class="default-tab-slider default-slick" data-slick='{$initialSlide2}'>
                    {foreach $arrMenu as $keyarrMenu => $valuearrMenu}
                        <div class="item">
                            <div class="tab-block {if $menuidLv2 eq $valuearrMenu.id}active{/if}">
                                <a class="text-limit" href="{str_replace("//","/","{$ul}/{$menuActive}/{$valuearrMenu.menuid}/{$valuearrMenu.id}")}">{$valuearrMenu.subject}</a>
                            </div>
                        </div>
                    {/foreach}
                </div>
            {/if}

            {foreach $arrMem as $keyarrMemList => $valuearrMemList}
                {foreach $valuearrMemList as $keyarrMem => $valuearrMem}
                <div class="row {if $keyarrMem gte 1}mt-5{/if}">
                    <div class="col">
                        <!-- profile block -->
                        <div class="profile-block">
                            <div class="profile">
                                <div class="h-title">{$valuearrMem['group']}</div>
                                {if count($valuearrMem['list']) > 0}
                                    <ul class="item-list">
                                    {foreach $valuearrMem['list'] as $keyMember => $valueMember}
                                        <li>
                                            <div class="row no-gutters">
                                                <div class="col">
                                                    <div class="profile-thumbnail">
                                                        <figure class="cover">
                                                            <img src="{$valueMember['pic']|fileinclude:"real":{$valueMember['masterkey']}:"link"}"
                                                                alt="profile thumbnail">
                                                        </figure>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row no-gutters">
                                                <div class="col">
                                                    <div class="profile-desc">
                                                        <div class="profile-name">
                                                            {$valueMember.fname} {$valueMember.lname}
                                                        </div>
        
                                                        <div class="profile-position">
                                                            {$valueMember.depart}
                                                        </div>
                                                        {if $valueMember.sdatetxt neq ""}
                                                            <div class="profile-timeline">
                                                                {$valueMember.sdatetxt}
                                                            </div>
                                                        {/if}
                                                        {if $valueMember.email neq "" || $valueMember.tel neq ""}
                                                            <div class="profile-contact">
                                                                {if $valueMember.email neq ""}
                                                                    <div class="email">
                                                                        {$lang['system']['email']}: {$valueMember.email}
                                                                    </div>
                                                                {/if}
                                                                {if $valueMember.tel neq ""}
                                                                    <div class="telephone">
                                                                        {$lang['system']['tel']}: {$valueMember.tel}
                                                                    </div>
                                                                {/if}
                                                            </div>
                                                        {/if}
                                                        {* <a href="javascript:void(0);" class="btn modal-alert" title="{$lang['system']['readmore2']}" data-toggle="modal" 
                                                            data-target="#profileBlock" data-name="{$valueMember.fname} {$valueMember.lname}" data-depart="{$valueMember.depart}" 
                                                            data-sdatetxt="{$valueMember.sdatetxt}" data-email="{$valueMember.email}" data-tel="{$valueMember.tel}" 
                                                            data-pic="{$valueMember['pic']|fileinclude:"real":{$valueMember['masterkey']}:"link"}" data-txtemail="{$lang['system']['email']}" data-txttel="{$lang['system']['tel']}">
                                                            <span class="feather icon-chevron-right"></span>
                                                            {$lang['system']['readmore2']}
                                                        </a> *}
                                                        <a href="{$ul}/{$menuActive}/{$valueMember.menuid}/{$valueMember.position}/{$menuDetail}/{$valueMember.id}" class="btn modal-alert" title="{$lang['system']['readmore2']}" data-name="{$valueMember.fname} {$valueMember.lname}" data-depart="{$valueMember.depart}" 
                                                            data-sdatetxt="{$valueMember.sdatetxt}" data-email="{$valueMember.email}" data-tel="{$valueMember.tel}" 
                                                            data-pic="{$valueMember['pic']|fileinclude:"real":{$valueMember['masterkey']}:"link"}" data-txtemail="{$lang['system']['email']}" data-txttel="{$lang['system']['tel']}">
                                                            <span class="feather icon-chevron-right"></span>
                                                            {$lang['system']['readmore2']}
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    {/foreach}
                                    </ul>
                                {/if}
                            </div>
                        </div>
                        <!-- end profile block -->
                    </div>
                </div>
                {/foreach}
            {/foreach}

            {if $arrMenuActive->fields.url neq "" && $arrMenuActive->fields.url neq "#"}
                {$myUrlArray = "v="|explode:$arrMenuActive->fields.url}
                {$myUrlCut = $myUrlArray[1]}
                {$myUrlCutArray = "&"|explode:$myUrlCut}
                {$myUrlCutAnd= $myUrlCutArray.0}
                <div class="youtube-block">
                    <div class="iframe-container">
                        <iframe class="responsive-iframe" src="https://www.youtube.com/embed/{$myUrlCutAnd}"
                            title="YouTube video player"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen></iframe>
                    </div>
                </div>
            {/if}

            {if $Call_File->_numOfRows gte 1}
                <div class="row mt-5">
                    <div class="col-12">
                        <h2 class="text-black mb-4">{$lang['system']['attachment']}</h2>
                        <div class="attachment-slider default-slick">
                            {foreach $Call_File as $keyCall_File => $valueCall_File}
                                {$fileinfo = $valueCall_File['filename']|fileinclude:'file':{$arrMenuActive->fields.masterkey}|get_Icon}
                                <div class="item">
                                    <div class="attachment-block">
                                        <a href="{$ul}/download/{$valueCall_File['filename']|fileinclude:'file':{$arrMenuActive->fields.masterkey}:'download'}&n={$valueCall_File['name']}&t={'md_memf'|encodeStr}" class="link" title="{$lang['system']['attachment']}">
                                            <div class="row no-gutters">
                                                <div class="col-auto">
                                                    <!-- <img class="icon" src="{$template}/assets/img/icon/icon-attachment.svg" alt="attachment icon"> -->
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="41"
                                                        viewBox="0 0 32 41">
                                                        <g data-name="Group 9337" transform="translate(0)">
                                                            <path data-name="Path 2087"
                                                                d="M9.75,2h15a1,1,0,0,1,.721.307l11.25,11.7A1,1,0,0,1,37,14.7V38.1A4.832,4.832,0,0,1,32.25,43H9.75A4.832,4.832,0,0,1,5,38.1V6.9A4.832,4.832,0,0,1,9.75,2ZM24.324,4H9.75A2.831,2.831,0,0,0,7,6.9V38.1A2.831,2.831,0,0,0,9.75,41h22.5A2.831,2.831,0,0,0,35,38.1v-23Z"
                                                                transform="translate(-5 -2)" fill="#013f94" />
                                                            <path data-name="Path 2088"
                                                                d="M32.438,15.438H21a1,1,0,0,1-1-1V3a1,1,0,0,1,2,0V13.438H32.438a1,1,0,0,1,0,2Z"
                                                                transform="translate(-1.438 -2)" fill="#013f94" />
                                                            <path data-name="Path 2089"
                                                                d="M26.75,20.5H12a1,1,0,0,1,0-2H26.75a1,1,0,0,1,0,2Z"
                                                                transform="translate(-3.375 2.949)" fill="#013f94" />
                                                            <path data-name="Path 2090"
                                                                d="M26.75,26.5H12a1,1,0,0,1,0-2H26.75a1,1,0,0,1,0,2Z"
                                                                transform="translate(-3.375 4.75)" fill="#013f94" />
                                                            <path data-name="Path 2091"
                                                                d="M15.813,14.5H12a1,1,0,0,1,0-2h3.813a1,1,0,0,1,0,2Z"
                                                                transform="translate(-3.518 1.15)" fill="#013f94" />
                                                        </g>
                                                    </svg>
                                                </div>
                                                <div class="col">
                                                    <div class="title typo-sm">{$valueCall_File.name}
                                                    </div>
                                                    <div class="subtitle typo-x">{$lang['system']['size']} : {$valueCall_File['filename']|fileinclude:'file':{$arrMenuActive->fields.masterkey}|get_IconSize} | {$lang['system']['type']} : {$fileinfo.type}</div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            {/foreach}
                        </div>
                    </div>
                </div>
            {/if}
            <div class="row py-5 text-right">
                <div class="col-12">
                    <a href="javascript:history.back();" class="btn btn-border-primary" title="btn btn-primary">{$lang['system']['btn_back']}</a>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="site-container">
    <div class="default-header">
        <div class="top-graphic">
            <figure class="cover">
                <img class="figure-img img-fluid" src="{$template}{$settingModulus.tgp}"
                    alt="{$settingModulus.subject}">
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
    <div class="default-page about">
        {if count($getMenuDetail) > 0}
            <div class="container">
                <div class="default-nav-slider" data-slick='{$initialSlide}'>
                    {foreach $getMenuDetail as $keygetMenuDetail => $valuegetMenuDetail}
                        {$arrName = explode("-", $valuegetMenuDetail.subject)}
                        <div class="item">
                            <a href="{$ul}/{$menuActive}/{$valuegetMenuDetail.id}"
                                {if $MenuID eq $valuegetMenuDetail.masterkey}class="active"
                                {/if}>{$valuegetMenuDetail.subject}</a>
                        </div>
                    {/foreach}
                </div>
            </div>
            <div class="border-nav-slider"></div>
        {/if}

        {if count($arrMenu) > 0}
            <div class="container mt-md-5 mt-4">
                <h2 class="text-primary mb-4">{$settingModulus.breadcrumb}</h2>
                <div class="default-tab-slider default-slick" data-slick='{$initialSlide2}'>
                    {foreach $arrMenu as $keyarrMenu => $valuearrMenu}
                        <div class="item">
                            <div class="tab-block {if $callGroup->fields.id eq $valuearrMenu.id}{$menuDetailID = $valuearrMenu.menuid}active{/if}">
                                <a class="text-limit"
                                    href="{str_replace("//","/","{$ul}/{$menuActive}/{$valuearrMenu.menuid}/{$valuearrMenu.id}"
                            )}">{$valuearrMenu.subject}</a>
                            </div>
                        </div>
                    {/foreach}
                </div>
            </div>
        {/if}

        <div class="container">

            <div class="default-filter">
                <div class="container">
                    <form action="{$ul}/{$menuActive}/{$menuDetailID}/{$callGroup->fields.id}/{$req_params['year']}"
                        data-toggle="validator" role="form" class="form-default" method="post">
                        <div class="row gutters-15 align-items-end">
                            <div class="col-lg-5 col-12 mr-auto">
                                <div class="form-group">
                                    <div class="row no-gutters">
                                        <div class="col">
                                            <label class="visuallyhidden"
                                                for="keywords">{$lang['system']['search']}</label>
                                            <input type="search" id="keywords" name="keywords" class="form-control"
                                                placeholder="{$lang['system']['search']}"
                                                value="{$req_params['keywords']}">
                                        </div>
                                        <div class="col-auto">
                                            <button type="button" class="btn btn-primary btn-search"
                                                onclick="this.form.submit()">
                                                <span class="feather icon-search"></span>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-12">
                                <div class="form-group has-feedback">
                                    <label class="control-label" for="contact">{$lang['system']['sort']}</label>
                                    <div class="select-wrapper">
                                        <select class="select-control" name="order" id="order" style="width: 100%;"
                                            onchange="this.form.submit()">
                                            {foreach $orderArray as $keyorderArray => $valueorderArray}
                                                <option value="{$keyorderArray}"
                                                    {if $req_params['order'] eq $keyorderArray}selected="selected" {/if}>
                                                    {$valueorderArray}</option>
                                            {/foreach}
                                        </select>
                                    </div>
                                </div>
                            </div>

                        </div>
                        {*{if count($callYear) > 0}
                            <div class="group-list year-list">
                                <ul class="nav-list">
                                    {foreach $callYear as $keycallYear => $valuecallYear}
                                        <li>
                                            <a href="{$ul}/{$menuActive}/{$menuDetailID}/{$callGroup->fields.id}/{date('Y', strtotime($valuecallYear.credate))}"
                                                class="link {if $req_params['year'] eq date('Y', strtotime($valuecallYear.credate))}active{/if}">{$lang['system']['year']}
                                                {date('Y', strtotime(DateFormat($valuecallYear.credate)))}</a>
                                        </li>
                                    {/foreach}
                                </ul>
                            </div>
                        {/if}*}
                        {if $callGroupType eq 2}
                            <div class="group-list year-list">
                                <ul class="nav-list">
                                    {foreach $callSubGroup as $key => $value}
                                        <li>
                                            <a href="{$ul}/{$menuActive}/{$menuDetailID}/{$callGroup->fields.id}/{$value['id']}"
                                                class="link {if $subGroup eq $value['id']}active{/if}">{$value['subject']}
                                            </a>
                                        </li>
                                    {/foreach}
                                </ul>
                            </div>
                        {/if}
                    </form>
                </div>
            </div>

            <div class="row align-items-center">
                <div class="col-auto">
                    <div class="h-title">{$callGroup->fields.subject}</div>
                </div>
                {* {if count($callYear) > 0}
                    <div class="col text-right">
                        <div class="form-group">
                            <label class="control-label visuallyhidden" for="yearSelect">{$lang['system']['year']} :</label>
                            <div class="select-wrapper">
                                <span>{$lang['system']['year']} :</span>
                                <select class="select-control select-year" name="ordernews" id="yearSelect">
                                    <option value="All">{$lang['system']['all']}</option>
                                    {foreach $callYear as $keycallYear => $valuecallYear}
                                        <option value="{date('Y', strtotime($valuecallYear.credate))}"
                                            {if $req_params['year'] eq date('Y', strtotime($valuecallYear.credate))}selected="selected"
                                            {/if}>{date('Y', strtotime(DateFormat($valuecallYear.credate)))}</option>
                                    {/foreach}
                                </select>
                            </div>
                        </div>
                    </div>
                {/if} *}
            </div>

            <div id="accordionInner">
                <div class="collapse-block">
                {if count($arrListData) > 0}
                    {foreach $arrListData as $keyarrListData => $valuearrListData}
                        {if count($valuearrListData.list) >0}
                        <div class="row py-3">
                            <div class="col">
                                        <div class="card">
                                            <!--<div class="card-header">
                                                <h3 class="mb-0">
                                                    <button class="btn btn-lg fluid {if $keyarrListData gte 1}collapsed{/if}"
                                                        data-toggle="collapse" data-target="#about-{$valuearrListData.subgroup.id}"
                                                        aria-expanded="{if $keyarrListData eq 0}true{else}false{/if}"
                                                        aria-controls="collapse">
                                                        <span>
                                                            {$valuearrListData.subgroup.subject}
                                                        </span>
                                                        <span class="feather icon-plus-circle"></span>
                                                    </button>
                                                </h3>
                                            </div>-->
                                            <div id="about-{$valuearrListData.subgroup.id}"
                                                class="collapse {if $keyarrListData eq 0}show{/if}"
                                                aria-labelledby="headingCollapse" data-parent="#accordionInner">
                                                {foreach $valuearrListData.list as $keyList => $valueList}
                                                    {$Call_File = $callSetWebsite::Call_File($valueList['id'])}
                                                    {$fileinfo = $Call_File->fields['filename']|fileinclude:'file':{$valueList.masterkey}|get_Icon}
                                                    {if $Call_File->fields.name neq ""}
                                                        {$subject = $valueList.subject}
                                                        {* {$subject = $Call_File->fields.name} *}
                                                    {else}
                                                        {$subject = $valueList.subject}
                                                    {/if}
                                                    <div class="download-block">
                                                        <div class="row align-items-center">
                                                            <div class="col-md">
                                                                <div class="row no-gutters">
                                                                    <div class="col-auto">
                                                                        <img class="icon -icon-download"
                                                                            src="{$template}/assets/img/icon/icon-attachment.svg"
                                                                            alt="attachment icon">
                                                                    </div>
                                                                    <div class="col">
                                                                        <div class="title typo-sm">{$subject}</div>
                                                                        <div class="row">
                                                                            {if $Call_File->_numOfRows gte 1}
                                                                                <div class="col-sm-auto">
                                                                                    <div class="row">
                                                                                        <div class="col-sm-auto">
                                                                                            <div class="download-block-type">
                                                                                                <img class="icon"
                                                                                                    src="{$template}/assets/img/icon/icon-file.svg"
                                                                                                    alt="icon file">
                                                                                                <div class="desc typo-s">
                                                                                                    {$lang['system']['size']} :
                                                                                                    <span>{$Call_File->fields['filename']|fileinclude:'file':{$valueList.masterkey}|get_IconSize}</span>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="col-sm-auto">
                                                                                            <div class="download-block-type">
                                                                                                <img class="icon"
                                                                                                    src="{$template}/assets/img/icon/icon-pdf.svg"
                                                                                                    alt="icon file">
                                                                                                <div class="desc typo-s">
                                                                                                    {$lang['system']['type']} :
                                                                                                    <span>{$fileinfo.type}</span>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            {/if}
                                                                            <div class="col-sm-auto">
                                                                                <div class="row">
                                                                                    <div class="col-sm-auto">
                                                                                        <div class="download-block-type">
                                                                                            <img class="icon"
                                                                                                src="{$template}/assets/img/icon/icon-view-.svg"
                                                                                                alt="icon file">
                                                                                            <div class="desc view typo-s">
                                                                                                {$lang['system']['view']}
                                                                                                <span>{$valueList.view|number_format}</span>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-sm-auto">
                                                                                        <div class="download-block-type">
                                                                                            <img class="icon"
                                                                                                src="{$template}/assets/img/icon/icon-time.svg"
                                                                                                alt="icon file">
                                                                                            <div class="desc time typo-s">
                                                                                                {$lang['system']['lastdate']}
                                                                                                <span>{$valueList.credate|DateThai:'23':{$langon}:'shot3'}</span>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-auto">
                                                                {* <div class="row">
                                                                    <div class="download-block-btn">
                                                                        {if $valueList.typec eq 1}
                                                                            <div class="col-auto">
                                                                                <a href="{$ul}/{$menuActive}/{$valueList.menuid}/{$valueList.gid}/{$menuDetail}/{$valueList.id}"
                                                                                    class="btn"
                                                                                    title="{$lang['system']['viewmore']}">{$lang['system']['readabstract']}</a>
                                                                            </div>
                                                                        {/if}
                                                                        {if $Call_File->_numOfRows gte 1}
                                                                            <div class="col-auto">
                                                                                <a href="{$ul}/download/{$Call_File->fields['filename']|fileinclude:'file':{$valueList.masterkey}:'download'}&n={$Call_File->fields['name']}&t={'md_cmf'|encodeStr}"
                                                                                    class="btn"
                                                                                    title="{$lang['system']['download']}">{$lang['system']['downloaddoc']}</a>
                                                                            </div>
                                                                        {/if}
                                                                        {if $valueList.url2 neq "#" && $valueList.url2 neq "" && $valueList.masterkey eq $masterkey_rs_ri}
                                                                        <div class="col-auto">
                                                                            <a {if $valueList.url2 neq "#" && $valueList.url2 neq ""}href="{$valueList.url2}" {if $valueList.target eq 2}target="_blank"{/if} {else}href="javascript:void(0);"{/if}
                                                                                class="btn"
                                                                                title="{$lang['system']['download']}">{$lang['system']['completereport']}</a>
                                                                        </div>
                                                                        {/if}
                                                                    </div>
                                                                </div> *}
                                                                <div class="row">
                                                                    <div class="download-block-btn -add">
                                                                            <div class="col-auto">
                                                                                <a href="{$ul}/{$menuActive}/{$valueList.menuid}/{$valueList.gid}/{$menuDetail}/{$valueList.id}"
                                                                                    class="btn"
                                                                                    title="{$lang['system']['readabstract']}">{$lang['system']['readabstract']}</a>
                                                                            </div>
                                                                        {if $valueList.typec eq 1}
                                                                            <div class="col-auto">
                                                                                <a href="{$ul}/{$menuActive}/{$valueList.menuid}/{$valueList.gid}/{$menuDetail}/{$valueList.id}"
                                                                                    class="btn"
                                                                                    title="{$lang['system']['readabstract']}">{$lang['system']['readabstract']}</a>
                                                                            </div>
                                                                        {/if}
                                                                        {if $Call_File->_numOfRows gte 1}
                                                                            <div class="col-auto">
                                                                                <a href="{$ul}/download/{$Call_File->fields['filename']|fileinclude:'file':{$valueList.masterkey}:'download'}&n={$Call_File->fields['name']}&t={'md_cmf'|encodeStr}"
                                                                                    class="btn"
                                                                                    title="{$lang['system']['downloaddoc']}">{$lang['system']['downloaddoc']}</a>
                                                                            </div>
                                                                        {/if}
                                                                        {if $valueList.url2 neq "#" && $valueList.url2 neq "" && $valueList.masterkey eq $masterkey_rs_ri}
                                                                            <div class="col-auto">
                                                                                <a {if $valueList.url2 neq "#" && $valueList.url2 neq ""}href="{$valueList.url2}" {if $valueList.target eq 2}target="_blank"{/if} {else}href="javascript:void(0);"{/if}
                                                                                    class="btn"
                                                                                    title="{$lang['system']['completereport']}">{$lang['system']['completereport']}</a>
                                                                            </div>
                                                                        {/if}
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                {/foreach}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            {/if}
                        {/foreach}
                    {/if}
                </div>
            </div>

            <div class="editor-content">
            </div>
            {if $callCMS->_numOfRows gte 1 && $pagination['totalpage'] gte 2}
                {include file="{$incfile.pagination}"}
            {/if}
        </div>
    </div>
</section>
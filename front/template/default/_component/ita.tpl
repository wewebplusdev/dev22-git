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

    <div class="default-page about">
        {if count($getMenuDetail) > 0}
            <div class="container">
                <div class="default-nav-slider" data-slick='{$initialSlide}'>
                    {foreach $getMenuDetail as $keygetMenuDetail => $valuegetMenuDetail}
                        {$arrName = explode("-", $valuegetMenuDetail.subject)}
                        <div class="item">
                            <a href="{$ul}/{$menuActive}/{$valuegetMenuDetail.id}"
                                {if $MenuID eq $valuegetMenuDetail.masterkey}{$menuDetailID=$valuegetMenuDetail.id} class="active" {/if}>{$arrName[0]}</a>
                        </div>
                    {/foreach}
                </div>
            </div>
            <div class="border-nav-slider"></div>
        {/if}


        {if count($arrMenu) > 0 && $showslick}
            <div class="container mt-md-5 mt-4">
                <div class="row aling-items-center gutters-10">
                    <h2 class="text-primary mb-4">{$settingModulus.breadcrumb}</h2>
                    {* {if $settingModulus['rssfeed']}
                 <div class="col-auto">
                    <a href="{$ul}/rss/{$callCMS->fields.masterkey}GIT{$settingModulus['group']}.xml" target="_blank" class="rss">
                       <img src="{$template}/assets/img/icon/icon-rss.png" alt="icon rss">
                    </a>
                 </div>
              {/if} *}
                </div>
            </div>
        {/if}

        <div class="container">
        <div class="group-list year-list">
                <ul class="nav-list">
                    {foreach $callGroup as $key => $value}
                        <li>
                            <a href="{$ul}/{$menuActive}/{$menuDetailID}/{$value.id}"
                                class="link  {if $GroupID eq $value.id}active {/if}" title="{$value.subject}" data-toggle="tooltip" data-placement="top" title="{$value.subject}">{$value.subject}</a>
                        </li>
                    {/foreach}
                </ul>
            </div>
            <div class="h-title">{$callGroupInfo.subject}</div>
            <p class="desc mb-3">{$callGroupInfo.title}</p>

            <div class="oit-list">
                <div class="collapse-block">
                    <div id="accordion-oit">
                        <ul class="item-list fluid">
                            {foreach $callSubGroup as $key => $value}
                                <li class="item">
                                    <div class="title">{$value.subject} {$value.title}</div>
                                </li>
                                {foreach $arrListData[$value.id]['ssubgroup'] as $keysub => $valuesub}

                                    <li class="item">
                                        <div class="card">
                                            <div class="card-header">
                                                <h3 class="mb-0">
                                                    <button class="btn btn-lg fluid collapsed" data-toggle="collapse"
                                                        data-target="#oit-{$valuesub.id}" aria-expanded="false"
                                                        aria-controls="collapse">
                                                        <span class="text-limit">
                                                            {$valuesub.subject}
                                                        </span>
                                                        <span class="feather icon-plus-circle"></span>
                                                    </button>
                                                </h3>
                                            </div>
                                            <div id="oit-{$valuesub.id}" class="collapse" data-parent="#accordion-oit">
                                                <div class="card-body">
                                                    <table class="table" cellpadding="0">
                                                        <tbody>
                                                            <tr>
                                                                <td style="width:15%;">
                                                                    <strong>ตัวชี้วัดย่อย/ข้อ</strong>
                                                                </td>
                                                                <td style="width:35%;">
                                                                    <strong>ข้อมูล</strong>
                                                                </td>
                                                                <td>
                                                                    <strong>รายละเอียด</strong>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td colspan="3">
                                                                    <strong>{$valuesub.subject}</strong>
                                                                </td>
                                                            </tr>

                                                            {foreach $arrListData[$valuesub.id]['list'] as $keylist => $valuelist}
                                                                <tr>
                                                                    <td colspan="3">
                                                                        <strong>{$valuelist.subject}</strong>
                                                                    </td>
                                                                </tr>
                                                                {foreach $valuelist['linklist'] as $keylinklist => $valuelinklist}
                                                                    <tr>
                                                                        <td style="text-align: center;">
                                                                            {$valuelinklist.code}
                                                                        </td>
                                                                        <td>
                                                                            {$valuelinklist.name}
                                                                        </td>
                                                                        <td>
                                                                            <ul class="pro_list1" style="margin-top:20px;">
                                                                                <li><a
                                                                                        href="{if $valuelinklist.file eq 'url'}{$valuelinklist.url}{else}{$ul}/download/{$valuelinklist.filename|fileinclude:'file':'ab_ita':'download'}&n={$valuelinklist.name}&t={'md_cmf'|encodeStr }{/if}"><b>{$valuelinklist.title}</b></a>
                                                                                </li>
                                                                            </ul>
                                                                        </td>
                                                                    </tr>
                                                                {/foreach}
                                                            {/foreach}
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                {/foreach}
                            {/foreach}

                        </ul>
                    </div>
                </div>
            </div>

        </div>
    </div>

</section>
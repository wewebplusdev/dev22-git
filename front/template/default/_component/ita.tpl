<section class="site-container">

            <div class="default-header">
                <div class="top-graphic">
                    <figure class="cover">
                        <img src="{$template}{$settingModulus.tgp}" alt="{$settingModulus.subject}">
                    </figure>
                    <div class="container">
                        <div class="wrapper">
                            <div class="title typo-lg">{$callGroupInfo.subject}</div>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{$ul}/home">{$lang['menu']['home']}</a></li>
                                <li class="breadcrumb-item active" aria-current="page">{$callGroupInfo.subject}</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>

            <div class="default-page about">
                <div class="container">
                    <div class="h-title">{$callGroupInfo.subject}</div>
                    <p class="desc mb-3">{$callGroupInfo.title}</p>

                    <div class="group-list year-list">
                        <ul class="nav-list">
                             {foreach $callGroup as $key => $value}
                            <li>
                                <a href="{$ul}/ita/{$value.id}/{urlencode($value.subject)}" class="link  {if $callGroupInfo.id eq $value.id}class="active" {/if}">{$value.subject}</a>
                            </li>
                        {/foreach}
                        </ul>
                    </div>

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
                                                    <button class="btn btn-lg fluid collapsed" data-toggle="collapse" data-target="#oit-{$valuesub.id}" aria-expanded="false" aria-controls="collapse">
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
                                                                        {$valuelinklist.subject}
                                                                    </td>
                                                                    <td>
                                                                        <ul class="pro_list1" style="margin-top:20px;">
                                                                            <li><a href="{if $valuelinklist.file eq 'url'}{$valuelinklist.url}{/if}"><b>{$valuelinklist.title}</b></a></li>
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
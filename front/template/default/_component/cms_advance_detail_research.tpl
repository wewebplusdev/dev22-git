<section class="site-container">
    <div class="default-header">
        <div class="top-graphic text-dark">
            <figure class="cover">
                <img src="{$template}{$settingModulus.tgp}" alt="{$settingModulus.subject}">
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
    <div>
        <div class="nav-slider-block">
            {if count($getMenuDetail) > 0}
                <div class="container">
                <div class="default-nav-slider" data-slick='{$initialSlide}'>
                    {foreach $getMenuDetail as $keygetMenuDetail => $valuegetMenuDetail}
                    {$arrName = explode("-", $valuegetMenuDetail.subject)}
                    <div class="item">
                        <a href="{$ul}/{$menuActive}/{$valuegetMenuDetail.id}" {if $MenuID eq $valuegetMenuDetail.masterkey}class="active"{/if}>{$valuegetMenuDetail.subject}</a>
                    </div>
                    {/foreach}
                </div>
                </div>
            <div class="border-nav-slider"></div>
            {/if}
        </div>
    </div>
    <div class="default-page research-page">
        <div class="container">
        {if $callCMS->fields.htmlfilename neq ""}
            <div class="editor-content">
              <!-- CK Editor -->
              {strip}
                {$callCMS->fields.htmlfilename|fileinclude:"html":$callCMS->fields.masterkey|callHtml}
              {/strip}
              <!-- CK Editor -->
            </div>
          {/if}

        </div>
    </div>
</section>
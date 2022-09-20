<section class="site-container">
    <div class="main-slider" data-aos="fade-up">
        {foreach $callTopGraphic as $keycallTopGraphic => $valuecallTopGraphic}
            <div class="item image">
                <div class="wrapper">
                    <a {if $valuecallTopGraphic.url neq "#" && $valuecallTopGraphic.url neq ""}href="{$valuecallTopGraphic.url}"{if $valuecallTopGraphic.target eq 2}target="_blank"{/if}{else}href="javascript:void(0);"{/if} class="link">
                        <figure class="cover">
                            <img src="{$valuecallTopGraphic['pic']|fileinclude:"real":{$valuecallTopGraphic['masterkey']}:"link"}" alt="{$valuecallTopGraphic.subject}" class="lazy">
                        </figure>
                    </a>
                </div>
            </div>
        {/foreach}
    </div>

    {if $callGroupProductlist->_numOfRows gte 1}
        
        <div class="wg-product">
            <div class="graphic -L effectI">
                <img src="{$template}/assets/img/static/graphicI.svg" alt="graphic" class="lazy">
            </div>
            <div class="graphic -R effectII">
                <img src="{$template}/assets/img/static/graphicII.svg" alt="graphic" class="lazy">
            </div>
            <div class="container">
                <div class="whead">
                    <h2 class="font-head" data-aos="fade-down">{$lang['menu']['product']}</h2>
                </div>
                <div class="nav-box">
                    <ul class="default-nav-slider nav nav-tabs item-list" id="myTab" role="tablist" data-aos="fade-up">
                        {foreach $callGroupProduct as $keycallGroupProduct => $valuecallGroupProduct}
                            {if $valuecallGroupProduct.type eq 1}
                                {assign var="linkhref" value="#wg-product{$valuecallGroupProduct.id}"}
                                {assign var="datatoggle" value="tab"}
                            {else}
                                {assign var="linkhref" value="{$ul}/product/detail/G{$valuecallGroupProduct.id}"}
                                {assign var="datatoggle" value=""}
                            {/if}
                            <li class="nav-item">
                                <a class="nav-link link {if $keycallGroupProduct eq 0}active{/if}" id="wg-product{$valuecallGroupProduct.id}-tab" data-toggle="{$datatoggle}" href="{$linkhref}"
                                    role="tab" aria-controls="wg-productI" aria-selected="true">
                                    <div class="icon"></div>
                                    {$valuecallGroupProduct.subject}
                                </a>
                            </li>
                        {/foreach}
                    </ul>
                </div>
            </div>
            <div class="tab-content" id="myTabContent">
                {foreach $callGroupProductlist as $keycallGroupProductlist => $valuecallGroupProductlist}
                    {* List *}
                    {$callcmsList = $homePage::callcms({$valuecallGroupProductlist.masterkey}, "", {$valuecallGroupProductlist.id}, "Home", 15)}
                    <div class="tab-pane fade {if $keycallGroupProductlist eq 0}show active{/if}" id="wg-product{$valuecallGroupProductlist.id}" role="tabpanel" aria-labelledby="wg-productI-tab">
                        <div class="container">
                            <div class="info">
                                <!-- CK Editor -->
                                {strip}
                                    {$valuecallGroupProductlist.htmlfilename2|fileinclude:"html":$valuecallGroupProductlist.masterkey|callHtml}
                                {/strip}
                                <!-- CK Editor -->
                                <div class="action" data-aos="fade-up">
                                    <a href="{$ul}/product/list/{$valuecallGroupProductlist.id}" class="btn btn-primary">
                                        {$lang['system']['viewsall']}
                                        <span class="feather icon icon-arrow-right"></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        {if $callcmsList->_numOfRows gte 1}
                            <div class="wg-product-slider" data-aos="fade-up">
                                {foreach $callcmsList as $keycallcmsList => $valuecallcmsList}
                                    <div class="item product-default">
                                        <div class="wrapper">
                                            <a href="{$ul}/product/detail/C{$valuecallcmsList.id}" class="link">
                                                <div class="thumb">
                                                    <figure class="cover">
                                                        <img src="{$valuecallcmsList['pic']|fileinclude:"real":{$valuecallcmsList['masterkey']}:"link"}" alt="{$valuecallcmsList['pic']}" class="lazy">
                                                    </figure>
                                                </div>
                                                <div class="content">
                                                    <div class="font-sub">
                                                        <div class="icon">
                                                            <span class="feather icon icon-arrow-right"></span>
                                                        </div>
                                                        {$valuecallcmsList.subject}
                                                    </div>
                                                    <div class="font-body">
                                                        {$valuecallcmsList.title}
                                                    </div>
                                                </div>
                                            </a>
                                            <!-- Display None -->
                                            <div class="action" style="display:none;">
                                                <a href="{$ul}/product/apply" class="btn btn-primary-outline">
                                                    {$lang['home']['loan']}
                                                    <span class="feather icon icon-arrow-right"></span>
                                                </a>
                                            </div>
                                            <!-- Display None -->
                                        </div>
                                    </div>
                                {/foreach}
                            </div>
                        {/if}
                    </div>
                {/foreach}
            </div>
        </div>
    {/if}
    {if $callWeblinkBun->_numOfRows gte 1}
        <div class="wg-business-network">
            <div class="graphic -L effectII">
                <img src="{$template}/assets/img/static/graphicV.svg" alt="graphic" class="lazy">
            </div>
            <div class="graphic -R effectI">
                <img src="{$template}/assets/img/static/graphicVI.svg" alt="graphic" class="lazy">
            </div>
            <div class="container">
                <div class="whead">
                    <h3 class="font-head" data-aos="fade-down">{$lang['home']['business']}</h3>
                </div>
                <div class="wg-business-network-slider" data-aos="fade-up">
                    {foreach $callWeblinkBun as $keycallWeblinkBun => $valuecallWeblinkBun}
                        <div class="item">
                            <div class="wrapper">
                                <a {if $valuecallWeblinkBun.url neq "#" && $valuecallWeblinkBun.url neq ""}href="{$valuecallWeblinkBun.url}"{if $valuecallWeblinkBun.target eq 2}target="_blank"{/if}{else}href="javascript:void(0);"{/if} class="link">
                                    <div class="thumb">
                                        <figure class="cover">
                                            <img src="{$valuecallWeblinkBun['pic']|fileinclude:"real":{$valuecallWeblinkBun['masterkey']}:"link"}" alt="{$valuecallWeblinkBun.pic}" class="lazy">
                                        </figure>
                                    </div>
                                    <div class="content">
                                        <div class="font-head">
                                            {$valuecallWeblinkBun.subject}
                                        </div>
                                        <div class="font-body">
                                            {$valuecallWeblinkBun.title}
                                        </div>
                                        <div class="icon">
                                            <span class="feather icon icon-arrow-right"></span>
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
    
    {if count($arr5pd_data_1) > 0}
        <div class="wg-five-product">
            <div class="graphic -L effectI">
                <img src="{$template}/assets/img/static/graphicVII.svg" alt="graphic" class="lazy">
            </div>
            <div class="graphic -BT effectII">
                <svg xmlns="http://www.w3.org/2000/svg" width="1202.931" height="56.33" viewBox="0 0 1202.931 56.33">
                    <g id="Group_6970" data-name="Group 6970" transform="translate(-716.705 -6299.746)">
                        <path id="Path_312" data-name="Path 312" d="M0,0H1169.135" transform="translate(750.5 6300.5)"
                            fill="none" stroke="#707070" stroke-width="1" opacity="0.16" />
                        <line id="Line_124" data-name="Line 124" x1="32.865" y2="55.822" transform="translate(717.136 6300)"
                            fill="none" stroke="#707070" stroke-width="1" opacity="0.24" />
                    </g>
                </svg>
            </div>
            <div class="container">
                <div class="row row-0">
                    <div class="col-lg-6">
                        <div class="content-info">
                            <div class="h-title" data-aos="fade-down">4Products</div>
                            <div class="font-sub" data-aos="fade-up">บริษัท เอสจี แคปปิตอล จำกัด (มหาชน)</div>
                            <div class="font-body" data-aos="fade-right">
                                {$lang['home']['txt:5pd']}
                            </div>
                        </div>
                        <div class="wg-five-product-slideI" data-aos="fade-right">
                            {$number5pd = 1}
                            {foreach $arr5pd_data_1 as $keyarr5pd_data_1 => $valuearr5pd_data_1}
                                <div class="item">
                                    <div class="wrapper">
                                        <a href="javascript:void(0);" class="link">{$number5pd}</a>
                                    </div>
                                </div>
                                {$number5pd = $number5pd + 1}
                            {/foreach}
                        </div>
                        <div class="wg-five-product-slideII" data-aos="fade-up">
                            {foreach $arr5pd_data_2 as $keyarr5pd_data_2 => $valuearr5pd_data_2}
                                <div class="item">
                                    <div class="wrapper">
                                        <div class="row row-0 align-items-center">
                                            <div class="col-auto">
                                                <div class="thumb">
                                                    <figure class="cover">
                                                        <img src="{$valuearr5pd_data_2['pic2']|fileinclude:"real":{$valuearr5pd_data_2['masterkey']}:"link"}" alt="{$valuearr5pd_data_2.pic}" class="lazy">
                                                    </figure>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="content">
                                                    <div class="font-body">
                                                        {$valuearr5pd_data_2.title}
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            {/foreach}
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="wg-five-product-slideIII" data-aos="fade-left">
                            {foreach $arr5pd_data_3 as $keyarr5pd_data_3 => $valuearr5pd_data_3}
                                <div class="item">
                                    <div class="thumb">
                                        <figure class="cover">
                                            <img src="{$valuearr5pd_data_3['pic']|fileinclude:"real":{$valuearr5pd_data_3['masterkey']}:"link"}" alt="{$valuearr5pd_data_3.pic}" class="lazy">
                                        </figure>
                                    </div>
                                </div>
                            {/foreach}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    {/if}

    {if $callWeblinkRel->_numOfRows gte 1}
        
        <div class="wg-toBnoI">
            <div class="graphic effectI">
                <img src="{$template}/assets/img/static/graphicVIII.svg" alt="graphic" class="lazy">
            </div>
            <div class="inner">
                <div class="container">
                    <div class="row row-0 height">
                        <div class="col-md-auto">
                            <div class="whead" data-aos="fade-right">
                                <h4 class="font-head">
                                    Our History
                                    <img src="{$template}/assets/img/icon/toBnoI.svg" alt="OUR HISTORY " class="lazy">
                                </h4>
                                <div class="font-sub">
                                    ประวัติความเป็นมา<br>
                                    บริษัท เอสจี แคปปิตอล จำกัด (มหาชน)
                                </div>
                                {* <div class="action">
                                    <a href="#" class="btn btn-primary">
                                        {$lang['system']['viewsall']}
                                        <span class="feather icon icon-arrow-right"></span>
                                    </a>
                                </div> *}
                            </div>
                        </div>
                        <div class="col-md">
                            <div class="wg-toBnoI-slider" data-aos="fade-left">
                                <div class="slider">
                                    {foreach $callWeblinkRel as $keycallWeblinkRel => $valuecallWeblinkRel}
                                        <div class="item">
                                            <a {if $valuecallWeblinkRel.url neq "#" && $valuecallWeblinkRel.url neq ""}href="{$valuecallWeblinkRel.url}"{if $valuecallWeblinkRel.target eq 2}target="_blank"{/if}{else}href="javascript:void(0);"{/if} class="link">
                                                <div class="wrapper">
                                                    <div class="thumb">
                                                        <figure class="cover">
                                                            <img src="{$valuecallWeblinkRel['pic']|fileinclude:"real":{$valuecallWeblinkRel['masterkey']}:"link"}" alt="{$valuecallWeblinkRel.pic}"
                                                                class="lazy">
                                                        </figure>
                                                    </div>
                                                    <div class="content">
                                                        <div class="font-head">{$valuecallWeblinkRel.subject}</div>
                                                        <div class="font-body">
                                                            {$valuecallWeblinkRel.title}
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    {/foreach}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    {/if}

    {if $settingWeb['contact']['urlyoutube'] neq "" && $settingWeb['contact']['urlyoutube'] neq "#"}
        {$myUrlArray = "v="|explode:$settingWeb['contact']['urlyoutube']}
        {$myUrlCut = $myUrlArray[1]}
        {$myUrlCutArray = "&"|explode:$myUrlCut}
        {$myUrlCutAnd= $myUrlCutArray.0}
        <div class="wg-video">
            <div class="container">
                <div class="iframe-container" data-aos="fade-up">
                    <iframe src="https://www.youtube.com/embed/{$myUrlCutAnd}" title="YouTube video player"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen></iframe>
                </div>
            </div>
        </div>
    {/if}

    <div class="wg-investor-relations">
        <div class="container">
            <div class="whead">
                <h4 class="font-head" data-aos="fade-down">{$lang['menu']['investor']}</h4>
            </div>
            <div class="row row-0">
                <div class="col-xl">
                    <div class="box-L">
                        <div class="font-sub" data-aos="fade-down">{$lang['home']['inves:important']}</div>
                        <div class="font-body" data-aos="fade-up">
                            {$lang['home']['inves:detail']}
                        </div>
                        <div class="investor-information" data-aos="fade-up">
                            <div class="box">
                                <div class="font-body">{$lang['investor']['stock']}</div>
                                <div class="stock-ir name title">-</div>
                            </div>
                            <div class="box">
                                <div class="font-body">{$lang['investor']['lastprice']}</div>
                                <div class="stock-ir price title">0.00 THB</div>
                            </div>
                            <div class="box -auto">
                                <div class="font-body">{$lang['investor']['change']} (%)</div>
                                <div class="title">
                                    <!-- -up / -down -->
                                    <div class="stock-ir icon -up" style="display: none;"></div>
                                    <span class="stock-ir change">-</span>
                                </div>
                            </div>
                        </div>
                        {if $callIrnewsDownload->_numOfRows gte 1}
                            <div class="font-sub" data-aos="fade-down">{$lang['investor']['stock:market']}</div>
                            <div class="market-news" data-aos="fade-up">
                                <ul class="item-list">
                                    {foreach $callIrnewsDownload as $keycallIrnewsDownload => $valuecallIrnewsDownload}
                                        {$Call_File = $callSetWebsite::Call_File($valuecallIrnewsDownload['id'])}
                                        <li>
                                            {if $Call_File->_numOfRows gte 1}
                                                <a href="{$ul}/download/{$Call_File->fields['filename']|fileinclude:'file':{$valuecallIrnewsDownload.masterkey}:'download'}&n={$Call_File->fields['name']}&t={'md_cmf'|encodeStr}" class="link">
                                            {else}
                                                <a href="javascript:void(0);" class="link">
                                            {/if}
                                                <div class="row row-0 align-items-center">
                                                    <div class="col-md-auto date-box">
                                                        <div class="inner">
                                                            <div class="date">
                                                                <div class="icon"></div>
                                                                {$valuecallIrnewsDownload.credate|DateThai:'23':{$langon}:'shot3'}
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md">
                                                        <div class="text-box">
                                                            <div class="font-body desc">
                                                                {$valuecallIrnewsDownload.subject}
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                    {/foreach}
                                </ul>
                            </div>
                        {/if}
                        <div class="action" data-aos="fade-left">
                            <a href="{$ul}/investor/{$valuecallIrnewsDownload.masterkey}" class="btn btn-primary-outline">
                                {$lang['system']['viewsall']}
                                <span class="feather icon icon-arrow-right"></span>
                            </a>
                        </div>
                    </div>
                </div>
                {if $callIrdownload->_numOfRows gte 1}
                    <div class="col-xl-auto">
                        <div class="box-R">
                            <div class="font-sub" data-aos="fade-down">{$lang['investor']['download']}</div>
                            <div class="download-list">
                                <ul class="item-list" data-aos="fade-up">
                                    {foreach $callIrdownload as $keycallIrdownload => $valuecallIrdownload}
                                        {$Call_File = $callSetWebsite::Call_File($valuecallIrdownload['id'])}
                                        <li>
                                            {if $Call_File->_numOfRows gte 1}
                                                <a href="{$ul}/download/{$Call_File->fields['filename']|fileinclude:'file':{$valuecallIrdownload.masterkey}:'download'}&n={$Call_File->fields['name']}&t={'md_cmf'|encodeStr}" class="link">
                                            {else}
                                                <a href="javascript:void(0);" class="link">
                                            {/if}
                                                <div class="row row-0 align-items-center height">
                                                    <div class="col-auto">
                                                        <div class="file-icon">
                                                            <span class="fa fa-file"></span>
                                                        </div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="content">
                                                            <div class="font-body desc">
                                                                {$valuecallIrdownload.subject}
                                                            </div>
                                                        </div>
                                                    </div>
                                                    {if $Call_File->_numOfRows gte 1}
                                                        <div class="col-auto">
                                                            <div class="download-icon">
                                                                <span class="feather icon-download"></span>
                                                            </div>
                                                        </div>
                                                    {/if}
                                                </div>
                                            </a>
                                        </li>
                                    {/foreach}
                                </ul>
                                <div class="action" data-aos="fade-right">
                                    <a href="{$ul}/investor/{$valuecallIrdownload.masterkey}" class="btn btn-primary-outline">
                                        {$lang['system']['viewsall']}
                                        <span class="feather icon icon-arrow-right"></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                {/if}
            </div>
        </div>
    </div>

    <div class="wg-more-link">
        <ul class="item-list">
            <li data-aos="fade-up">
                <a href="{$ul}/investor/ir_cg" class="link">
                    <div class="thumb">
                        <figure class="cover">
                            <img src="{$template}/assets/img/upload/more-link01.jpg" alt="{$lang['home']['corporate']}" class="lazy">
                        </figure>
                    </div>
                    <div class="content">
                        <div class="font-head">{$lang['home']['corporate']}</div>
                        <div class="action">
                            <div class="btn">
                                {$lang['system']['viewsall']}
                                <span class="feather icon icon-arrow-right"></span>
                            </div>
                        </div>
                    </div>
                </a>
            </li>
            <li data-aos="fade-up">
                <a href="{$ul}/about/abdax" class="link">
                    <div class="thumb">
                        <figure class="cover">
                            <img src="{$template}/assets/img/upload/more-link02.jpg" alt="{$lang['home']['board']}" class="lazy">
                        </figure>
                    </div>
                    <div class="content">
                        <div class="font-head">{$lang['home']['board']}</div>
                        <div class="action">
                            <div class="btn">
                                {$lang['system']['viewsall']}
                                <span class="feather icon icon-arrow-right"></span>
                            </div>
                        </div>
                    </div>
                </a>
            </li>
            <li data-aos="fade-up">
                <a href="{$ul}/investor/ir_ini/rQRWewEb3Q" class="link">
                    <div class="thumb">
                        <figure class="cover">
                            <img src="{$template}/assets/img/upload/more-link03.jpg" alt="{$lang['home']['listofmajor']}" class="lazy">
                        </figure>
                    </div>
                    <div class="content">
                        <div class="font-head">{$lang['home']['listofmajor']}</div>
                        <div class="action">
                            <div class="btn">
                                {$lang['system']['viewsall']}
                                <span class="feather icon icon-arrow-right"></span>
                            </div>
                        </div>
                    </div>
                </a>
            </li>
        </ul>
    </div>

    {if $callNews->_numOfRows gte 1}
        <div class="wg-news">
            <div class="graphic effectII">
                <svg xmlns="http://www.w3.org/2000/svg" width="1599.905" height="105.086" viewBox="0 0 1599.905 105.086">
                    <g id="Group_16" data-name="Group 16" transform="translate(-240.794 -444.707)">
                        <path id="Path_31" data-name="Path 31" d="M0,0H1523.436" transform="translate(317.263 549)"
                            fill="none" stroke="#707070" stroke-width="1" opacity="0.16" />
                        <line id="Line_136" data-name="Line 136" x1="75.564" y1="104.5" transform="translate(241.199 445)"
                            fill="none" stroke="#707070" stroke-width="1" opacity="0.24" />
                    </g>
                </svg>
            </div>
            <div class="graphicII effectI">
                <img src="{$template}/assets/img/static/graphicIV.svg" alt="graphic" class="lazy">
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-xl-5">
                        <div class="logo" data-aos="fade-right">
                            <img src="{$template}/assets/img/static/brand-lg.png" alt="sg capital" class="lazy">
                        </div>
                        <div class="whead">
                            <h4 class="font-head" data-aos="fade-down">{$lang['menu']['news']}</h4>
                            <div class="font-body" data-aos="fade-up">
                                {$lang['home']['newslastest']}
                            </div>
                            <div class="action" data-aos="fade-right">
                                <a href="{$ul}/news" class="btn btn-primary-outline">
                                    {$lang['system']['viewsall']}
                                    <span class="feather icon icon-arrow-right"></span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-7">
                        <div class="wg-news-slider" data-aos="fade-left">
                            {foreach $callNews as $keycallNews => $valuecallNews}
                                <div class="item news-default">
                                    <div class="wrapper">
                                        <a href="{$ul}/news/detail/{encodeStr($valuecallNews.id)}" class="link">
                                            <div class="thumb">
                                                <figure class="cover">
                                                    <img src="{$valuecallNews['pic']|fileinclude:"real":{$valuecallNews['masterkey']}:"link"}" alt="{$valuecallNews.pic}" class="lazy">
                                                </figure>
                                            </div>
                                            <div class="content">
                                                <div class="title">
                                                    {$valuecallNews.subject}
                                                </div>
                                                <div class="font-body">
                                                    {$valuecallNews.title}
                                                </div>
                                                <div class="number">{$keycallNews|is_txtNumber}</div>
                                                <div class="icon-text">
                                                    <span class="feather icon icon-arrow-right"></span>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            {/foreach}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    {/if}

    {if $callCareerDetail->_numOfRows gte 1}
        <div class="wg-career">
            <div class="graphic effectI">
                <svg xmlns="http://www.w3.org/2000/svg" width="1517.196" height="549.999" viewBox="0 0 1517.196 549.999">
                    <g id="Group_17" data-name="Group 17" transform="translate(-432.804 -6299.75)">
                        <path id="Path_30" data-name="Path 30" d="M0,0H1199.5" transform="translate(750.5 6300.5)"
                            fill="none" stroke="#707070" stroke-width="1" opacity="0.16" />
                        <line id="Line_125" data-name="Line 125" x1="316.763" y2="549.5" transform="translate(433.237 6300)"
                            fill="none" stroke="#707070" stroke-width="1" opacity="0.24" />
                    </g>
                </svg>
            </div>
            <div class="graphicII effectII">
                <img src="{$template}/assets/img/static/graphicIII.svg" alt="graphic" class="lazy">
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-xl-5">
                        <div class="thumb" data-aos="fade-right">
                            <img src="{$template}/assets/img/static/man-career.png" alt="career" class="lazy">
                        </div>
                    </div>
                    <div class="col-xl-7">
                        <div class="whead">
                            <h4 class="font-head" data-aos="fade-down">{$lang['menu']['career']}</h4>
                            <div class="font-body" data-aos="fade-up">
                                {$lang['home']['career:detail']}
                            </div>
                            <div class="action" data-aos="fade-left">
                                <a href="{$ul}/career" class="btn btn-primary-outline">
                                    {$lang['system']['viewsall']}
                                    <span class="feather icon icon-arrow-right"></span>
                                </a>
                            </div>
                        </div>
                        <div class="content">
                            <ul class="item-list">
                                {foreach $callCareerDetail as $keycallCareerDetail => $valuecallCareerDetail}
                                    <li data-aos="fade-up">
                                        <a href="{$ul}/career/detail/{encodeStr($valuecallCareerDetail.id)}" class="link">
                                            <div class="row row-0 align-items-center">
                                                <div class="col-md-auto date-box">
                                                    <div class="inner">
                                                        <div class="date">
                                                            <div class="icon"></div>
                                                            {$valuecallCareerDetail.credate|DateThai:'23':{$langon}:'shot3'}
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md">
                                                    <div class="text-box">
                                                        <div class="font-body title">
                                                            {$valuecallCareerDetail.subject}
                                                        </div>
                                                        <div class="font-body desc">
                                                            {$valuecallCareerDetail.title}
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                {/foreach}
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    {/if}

</section>

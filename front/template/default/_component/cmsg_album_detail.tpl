<section class="site-container">
  <div class="default-header">
    <div class="top-graphic">
      <figure class="cover">
        <img class="figure-img img-fluid" src="{$template}{$settingModulus.tgp}" alt="{$settingModulus.subject}">
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
  <div class="default-page about">
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
      <div class="container mt-5">
        <div class="row aling-items-center gutters-10">
          <h2 class="text-primary mb-4">{$callCMS->fields.subject}</h2>
          {if $settingModulus['rssfeed']}
            <div class="col-auto">
              <a href="{$ul}/rss/{$callCMS->fields.masterkey}GIT{$settingModulus['group']}.xml" target="_blank" class="rss">
                  <img src="{$template}/assets/img/icon/icon-rss.png" alt="icon rss">
              </a>
            </div>
          {/if}
        </div>       
      </div>

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
      <div class="border-nav-slider pt-5">
        {if count($albumCMSImageURL) > 0}
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    {foreach $albumCMSImageURL as $key => $image}
                        <li data-target="#carouselExampleIndicators" data-slide-to="{$key}"  {if $key eq 0}class="active"{/if}></li>
                    {/foreach}
                </ol>
                <div class="carousel-inner">
                    {foreach $albumCMSImageURL as $key => $image}
                        <div class="carousel-item  {if $key eq 0}active{/if}">
                        <img class="d-block w-100" src="{$image}" alt="{$key} slide">
                        </div>
                    {/foreach}
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        {/if}
      </div>
      {if $callCMS->fields.url neq '' && $callCMS->fields.url neq '#'}
      {$myUrlArray = "v="|explode:$callCMS->fields.url}
      {$myUrlCut = $myUrlArray[1]}
      {$myUrlCutArray = "&"|explode:$myUrlCut}
      {$myUrlCutAnd= $myUrlCutArray.0}
      <div class="youtube-block pt-4">
        <div class="iframe-container">
          <iframe class="responsive-iframe" src="https://www.youtube.com/embed/{$myUrlCutAnd}" title="YouTube video player"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
            allowfullscreen></iframe>
        </div>
      </div>
      {/if}

      {if $Call_File->_numOfRows gte 1}
        <div class="row mt-5">
          <div class="col-12">
            <h2 class="text-primary mb-4">{$lang['system']['attachment']}</h2>
            <div class="attachment-slider default-slick">
              {foreach $Call_File as $keyCall_File => $valueCall_File}
                {$fileinfo = $valueCall_File['filename']|fileinclude:'file':{$callCMS->fields.masterkey}|get_Icon}
                <div class="item">
                  <div class="attachment-block">
                    <a href="{$ul}/download/{$valueCall_File['filename']|fileinclude:'file':{$callCMS->fields.masterkey}:'download'}&n={$valueCall_File['name']}&t={'md_cmf'|encodeStr}" class="link" title="{$lang['system']['attachment']}">
                      <div class="row no-gutters">
                        <div class="col-auto">
                          <!-- <img class="icon" src="{$template}/assets/img/icon/icon-attachment.svg" alt="attachment icon"> -->
                          <svg xmlns="http://www.w3.org/2000/svg" width="32" height="41" viewBox="0 0 32 41">
                            <g data-name="Group 9337" transform="translate(0)">
                              <path data-name="Path 2087"
                                d="M9.75,2h15a1,1,0,0,1,.721.307l11.25,11.7A1,1,0,0,1,37,14.7V38.1A4.832,4.832,0,0,1,32.25,43H9.75A4.832,4.832,0,0,1,5,38.1V6.9A4.832,4.832,0,0,1,9.75,2ZM24.324,4H9.75A2.831,2.831,0,0,0,7,6.9V38.1A2.831,2.831,0,0,0,9.75,41h22.5A2.831,2.831,0,0,0,35,38.1v-23Z"
                                transform="translate(-5 -2)" fill="#013f94" />
                              <path data-name="Path 2088"
                                d="M32.438,15.438H21a1,1,0,0,1-1-1V3a1,1,0,0,1,2,0V13.438H32.438a1,1,0,0,1,0,2Z"
                                transform="translate(-1.438 -2)" fill="#013f94" />
                              <path data-name="Path 2089" d="M26.75,20.5H12a1,1,0,0,1,0-2H26.75a1,1,0,0,1,0,2Z"
                                transform="translate(-3.375 2.949)" fill="#013f94" />
                              <path data-name="Path 2090" d="M26.75,26.5H12a1,1,0,0,1,0-2H26.75a1,1,0,0,1,0,2Z"
                                transform="translate(-3.375 4.75)" fill="#013f94" />
                              <path data-name="Path 2091" d="M15.813,14.5H12a1,1,0,0,1,0-2h3.813a1,1,0,0,1,0,2Z"
                                transform="translate(-3.518 1.15)" fill="#013f94" />
                            </g>
                          </svg>
                        </div>
                        <div class="col">
                          <div class="title typo-sm">{$valueCall_File.name}</div>
                          <div class="subtitle typo-x">{$lang['system']['size']} : {$valueCall_File['filename']|fileinclude:'file':{$callCMS->fields.masterkey}|get_IconSize} | {$lang['system']['type']} : {$fileinfo.type}</div>
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

      {if $call_hashtag->_numOfRows gte 1}
        <div class="tag-list">
            <ul class="item-list">
                {foreach $call_hashtag as $keycall_hashtag => $valuecall_hashtag}
                  <li>
                      <a href="{$ul}/search/hashtag/{$valuecall_hashtag.id}" class="detail-hashtag">{$valuecall_hashtag.subject}</a>
                  </li>
                {/foreach}
            </ul>
        </div>
      {/if}

      <div class="row pt-5 text-right">
        <div class="col-12">
          <a href="javascript:history.back();" class="btn btn-border-primary" title="btn btn-primary">{$lang['system']['btn_back']}</a>
        </div>
      </div>
    </div>
  </div>
</section>
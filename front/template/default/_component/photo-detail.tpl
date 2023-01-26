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
  </div>
  <div class="default-page online-services">
    <div class="container">

      <div class="default-bar">
        <div class="row align-items-center">
          <div class="col-md-auto">
            <div class="whead">
              <div class="h-title">{$callCMS->fields.subject}</div>
            </div>
          </div>
          <div class="col-md">
            <div class="social-block">
              <div class="title">{$lang['system']['share']} :</div>
              <ul class="item-list">
                <li>
                  <a href="https://www.facebook.com/sharer/sharer.php?u={$fullurl}" target="_blank" class="link">
                    <img src="{$template}/assets/img/icon/icon-social-facebook.svg" alt=""
                      style=" width: auto; ">
                  </a>
                </li>
                <li>
                  <a href="https://twitter.com/intent/tweet?url={$fullurl}" target="_blank" class="link">
                    <img src="{$template}/assets/img/icon/icon-social-twitter.svg" alt="">
                  </a>
                </li>
                {if $MenuID eq 'ptg' or $MenuID eq 'is_gal'}
                  <li>
                      <a href="javascript:void(0);" class="embed-code" embed-url="{$embed_url}" embed-type="Photo gallery">
                          <img src="{$template}/assets/img/icon/icon-embed.svg" alt="embed">
                      </a>
                  </li>
                {/if}
                <li>
                  <a href="mailto:?subject={$callCMS->fields.subject}&amp;body=Check out this site : {$fullurl}"
                  title="{$infoSetting->fields['subject']}" class="link">
                    <img src="{$template}/assets/img/icon/icon-social-gmail.svg" alt="">
                  </a>
                </li>
                <li class="-bsc"></li>
                <li>
                  <a href="javascript:window.print()" class="link">
                    <img src="{$template}/assets/img/icon/icon-print.svg" alt="">
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <div class="whead-addon -bsc">
          <div class="detail-info">
            <ul class="item-list">
              <li>{$callCMS->fields.credate|DateThai:'23':{$langon}:'shot3'}</li>
              <li>
                <span class="feather icon-eye mr-2"></span>
                {$callCMS->fields.view} {$lang['system']['view']}
              </li>
            </ul>
          </div>
        </div>
      </div>

            <div class="default-page about">
                <div class="container">
                    <div class="gallery-list">
                        <ul class="item-list">
                            
                            {foreach $albumCMSImageURL as $key => $image}
                                <li>
                                    <a href="{$image}" class="link" data-fancybox="gallery">
                                        <figure class="cover">
                                            <img src="{$image}" alt="gallery thumbnail">
                                        </figure>
                                    </a>
                                </li>
                            {/foreach}
                        </ul>
                        
                    </div>
                </div>
            </div>

            <div class="row pt-5 text-right">
            <div class="col-12">
              <a href="javascript:history.back();" class="btn btn-border-primary"
                title="btn btn-primary">{$lang['system']['btn_back']}</a>
            </div>
          </div>
    </div>
    
  </div>

</section>
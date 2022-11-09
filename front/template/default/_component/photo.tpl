<section class="site-container">

  <div class="default-header">
    <div class="top-graphic mb-4">
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
      
      <div class="gallery-block">
            <div class="gallery">
              <ul class="item-list">
               {foreach $callWel as $keycallWel => $valuecallCMS}
                <li>
                  <div class="row no-gutters">
                    <div class="col">
                      <div class="gallery-thumbnail">
                        <figure class="cover">
                          <img src="{$valuecallCMS['pic']|fileinclude:"real":{$valuecallCMS['masterkey']}:"link"}" alt="{$valuecallCMS.subject}">
                        </figure>
                      </div>
                    </div>
                  </div>
                  <div class="row no-gutters">
                    <div class="col">
                      <div class="gallery-desc">
                        <div class="title">
                          {$valuecallCMS.subject}
                        </div>
                        <a href="{$ul}/{$menuActive}/{$menuDetail}/{$valuecallCMS.id}" class="btn btn-primary" title="{$lang['infoserv']['pictures']}">
                          {$lang['infoserv']['pictures']}
                          <!-- <img class="icon ml-3" src="{$template}/assets/img/icon/icon-deatail.svg" alt="icon"> -->
                          <svg xmlns="http://www.w3.org/2000/svg" width="51.235" height="7.199"
                            viewBox="0 0 51.235 7.199">
                            <path data-name="Path 5" d="M4670.6,5544.179h50.033l-6.306-6.347"
                              transform="translate(-4670.602 -5537.48)" fill="none" stroke="#fff" stroke-width="1" />
                          </svg>
                        </a>
                      </div>
                    </div>
                  </div>
                </li>
              {/foreach}
              </ul>
            </div>
          </div>

    </div>
  </div>

</section>
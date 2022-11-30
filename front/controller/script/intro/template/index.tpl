<section class="site-container">

<div class="intro-page">
    <div class="intro-slider">
        {foreach $callintro as $keycallintro => $valuecallintro}
          {if $valuecallintro.typevdo eq "file"}
            <div class="item">
              <div class="video-container">
                  <video class="slide-video slide-media" loop="" muted="" autoplay="" controls="" preload="metadata" poster="">
                      <source src="{$valuecallintro['filevdo']|fileinclude:'vdo':{$valuecallintro['masterkey']}:'vdo'}" type="video/mp4">
                  </video>
              </div>
            </div>
          {else}
            <div class="item">
                <div class="cover">
                    <img src="{$valuecallintro['pic']|fileinclude:"real":{$valuecallintro['masterkey']}:"link"}" alt="{$valuecallintro['subject']}" class="lazy loading img-cover" data-was-processed="true">
                </div>
            </div>
          {/if}
        {/foreach}
    </div>
    <div class="intro-content">
        <div class="container">
            <div class="row row-0 height">
                <div class="col-md">
                    <div class="logo">
                        <div class="symbol">
                            <img src="{$template}/assets/img/static/git-brand.svg" alt="Gem and Jewelry Institute of Thailand" class="lazy loading" data-was-processed="true">
                        </div>
                    </div>
                </div>
                <div class="col-md-auto">
                    <div class="action">
                        <a href="{$ul}/home" class="btn btn-border-light">{$lang['system']['enter_the_website']}</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

</section>
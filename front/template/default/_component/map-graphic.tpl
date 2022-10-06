<section class="site-container map-page" data-page="graphic-map">

  <nav class="nav-map">
    <ul class="nav-list">
      <li class="active">
        <a href="{$ul}/{$menuActive}/graphic-map" class="btn btn-border-primary">
          {$lang['contact']['graphic-map']}
        </a>
      </li>
      <li>
        <a href="{$ul}/{$menuActive}/google-map" class="btn btn-border-primary">
          {$lang['contact']['google-map']}
        </a>
      </li>
    </ul>
  </nav>

  <div class="maps-block">
    <div class="graphic-map">
      <figure class="contain">
        <img src="{$settingWeb['addresspic']|fileinclude:"real":"set":"link"}" alt="{$settingWeb['addresspic']}">
      </figure>
    </div>
  </div>

</section>
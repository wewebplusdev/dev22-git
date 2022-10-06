<section class="site-container map-page" data-page="google-map">

  <nav class="nav-map">
    <ul class="nav-list">
      <li class="active">
        <a href="{$ul}/{$menuActive}/google-map" class="btn btn-border-primary">
          {$lang['contact']['google-map']}
        </a>
      </li>
      <li>
        <a href="{$ul}/{$menuActive}/graphic-map" class="btn btn-border-primary">
          {$lang['contact']['graphic-map']}
        </a>
      </li>
    </ul>
  </nav>

  <div class="maps-block">
    <div class="google-map">
      <div class="iframe-container">
        <iframe class="responsive-iframe"
          src="https://maps.google.com/maps?q={$settingWeb['contact']['glati']},{$settingWeb['contact']['glongti']}&hl=es;z=20&amp;output=embed"
          style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>
    </div>
  </div>

</section>
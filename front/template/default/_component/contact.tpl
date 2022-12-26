<section class="site-container sitekey" data-page="index" data-id="{$sitekey}">

  <div class="default-header">
    <div class="top-graphic mb-4 text-primary">
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
  <div class="default-page contact-page">
    <div class="container">
      <div class="contact-block">
        <div class="text-center">
          {if $callCMSS->fields.subject neq ""}
            <div class="title">
              {$callCMSS->fields.subject}
            </div>
          {/if}
          <p class="desc">
            {$settingWeb.contact.$lang_concat}
            {if $callCMSS->fields.title neq ""}
              <br>
              {$callCMSS->fields.title}
            {/if}
            <br>
            <br>
            {$lang['contact']['working']} : {$lang['contact']['timmer']}
          </p>
          <div class="report-link">
            <a href="{$ul}/policy/complaint-system/corruption" class="btn btn-primary"
              title="{$lang['contact']['misconduct-complaint']}">
              {$lang['contact']['misconduct-complaint']}
            </a>
            <a href="{$ul}/policy/complaint-system" class="btn btn-primary"
              title="{$lang['contact']['feedback-system']}">
              {$lang['contact']['feedback-system']}
            </a>
          </div>
          <hr class="divider">
          <div class="contact-list">
            <ul class="item-list">
              {if $settingWeb.contact.tel neq ""}
                <li>
                  <a href="tel:{str_replace(" ", "", str_replace("-", "", $settingWeb.contact.tel))}" class="link" title="Telephone Number">
                    <span class="feather icon-phone-call"></span>
                    {$settingWeb.contact.tel}
                  </a>
                </li>
              {/if}
              {if $settingWeb.contact.fax neq ""}
                <li>
                  <a href="" class="link" title="Fax Number">
                    <span class="feather icon-printer"></span>
                    <!-- <span class="lnr lnr-printer"></span> -->
                    {$settingWeb.contact.fax}
                  </a>
                </li>
              {/if}
              {if $settingWeb.contact.email neq ""}
                <li>
                  <a href="mailto:jewelry@git.or.th" class="link" title="Email address">
                    <span class="feather icon-mail"></span>
                    {$settingWeb.contact.email}
                  </a>
                </li>
              {/if}
            </ul>
          </div>
        </div>
      </div>
    </div>
    <div class="map-block">
      <!-- <a href="" class="link"> -->
      <div class="iframe-container">
        <iframe class="responsive-iframe"
          src="https://maps.google.com/maps?q={$settingWeb['contact']['glati']},{$settingWeb['contact']['glongti']}&hl=es;z=20&amp;output=embed"
          style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>
      <!-- </a> -->
    </div>
    <div class="container">
      <div class="form-block">
        <div class="title">{$lang['contact']['form']}</div>
        <hr class="divider">
        <form data-toggle="validator" name="contactForm" id="contactForm" role="form" class="form-default mt-xl-5" method="post">
          <div class="row gutters-lg-50 gutters-15">
            <div class="col-md-6">
              <div class="form-group has-feedback">
                <label class="control-label" for="contact">{$lang['contact']['group']}</label>
                <div class="select-wrapper">
                  <select class="select-control" name="inputGroup" id="inputGroup" style="width: 100%;">
                    {foreach $callContactGroup as $keycallContactGroup => $valuecallContactGroup}
                      <option value="{$valuecallContactGroup.id}">{$valuecallContactGroup.subject}</option>
                    {/foreach}
                  </select>
                </div>
              </div>
              <div class="form-group has-feedback">
                <label class="control-label" for="topic">{$lang['contact']['subject']}</label>
                <span class="form-input-require">*</span>
                <div class="block-control">
                  <input type="text" class="form-control" name="inputSubject" id="topic" placeholder="{$lang['contact']['subject']}" data-error=""
                    value="" required>
                  <span class="form-control-feedback" aria-hidden="true"></span>
                </div>
              </div>
              <div class="form-group has-feedback">
                <label class="control-label" for="message">{$lang['contact']['text']}</label>
                <span class="form-input-require">*</span>
                <div class="block-control">
                  <textarea class="form-control form-text-area" name="inputMessage" rows="10" cols="100" id="{$lang['contact']['text']}" placeholder=""
                    data-error="" required></textarea>
                  <span class="form-control-feedback" aria-hidden="true"></span>
                </div>
              </div>

            </div>
            <div class="col-md-6 order-md-2 order-first">
              <div class="graphic-map">
                <div class="row">
                  <div class="col">
                    <div class="title">{$lang['contact']['graphic-map']}</div>
                  </div>
                  {$addresspic = "addresspic{$langweb}"}
                  <div class="col-auto">
                    <a href="{$ul}/download/{$settingWeb[$addresspic]|fileinclude:'real':'set':'download'}&n={$settingWeb[$addresspic]}" class="link" title="{$lang['contact']['download-map']}">
                      <span class="feather icon-download"></span>{$lang['contact']['download-map']}
                    </a>
                  </div>
                </div>
                <figure class="cover">
                  <img src="{$settingWeb[$addresspic]|fileinclude:"real":'set':"link"}" alt="{$lang['contact']['graphic-map']}">
                </figure>
              </div>
            </div>
          </div>
          <div class="row gutters-lg-50 gutters-15">
            <div class="col-md-6">
              <div class="form-group has-feedback">
                <label class="control-label" for="fullName">{$lang['contact']['name']}</label>
                <span class="form-input-require">*</span>
                <div class="block-control">
                  <input type="text" class="form-control" name="inputName" id="fullName" placeholder="{$lang['system']['fill']} {$lang['contact']['name']}" data-error=""
                    value="" required>
                  <span class="form-control-feedback" aria-hidden="true"></span>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group has-feedback">
                <label class="control-label" for="email">{$lang['contact']['email']}</label>
                <span class="form-input-require">*</span>
                <div class="block-control">
                  <input type="email" class="form-control" name="inputEmail" id="email" placeholder="{$lang['system']['fill']}{$lang['contact']['email']}" data-error="" value="" required>
                  <span class="form-control-feedback" aria-hidden="true"></span>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group has-feedback">
                <label class="control-label" for="address">{$lang['contact']['address']}</label>
                <span class="form-input-require">*</span>
                <div class="block-control">
                  <input type="text" class="form-control" name="inputAddress" id="address" placeholder="{$lang['system']['fill']}{$lang['contact']['address']}" data-error="" value="" required>
                  <span class="form-control-feedback" aria-hidden="true"></span>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group has-feedback">
                <label class="control-label" for="phoneNumber">{$lang['contact']['tel']}</label>
                <span class="form-input-require">*</span>
                <div class="block-control">
                  <input type="tel" class="form-control" name="inputTel" id="phoneNumber" placeholder="{$lang['system']['fill']}{$lang['contact']['tel']}" data-error=""
                    value="" required onkeypress="return isNumberKey(event)">
                  <span class="form-control-feedback" aria-hidden="true"></span>
                </div>
              </div>
            </div>
          </div>
          <div class="row gutters-lg-50 gutters-15 justify-content-center">
            <div class="col-md-3 col">
              {* <button type="submit" id="submitForm" class="btn fluid btn-lg btn-primary" title="{$lang['system']['submit']}">{$lang['system']['submit']}</button> *}
              <input type="hidden" id="g-recaptcha-response" name="g-recaptcha-response">
              <input type="submit"  id="submitForm" class="btn fluid btn-lg btn-primary" value="{$lang['system']['submit']}">
            </div>
            <div class="col-md-3 col">
              <button type="button" id="cancelForm" class="btn fluid btn-lg btn-border-primary"
                title="{$lang['system']['cancel']}">{$lang['system']['cancel']}</button>
            </div>
          </div>
        </form>
      </div>
      {if $Call_File->_numOfRows gte 1}
        <div class="typo-lg text-primary mb-4">{$lang['system']['attachment']}</div>
        <div class="attachment-slider default-slick">
          {foreach $Call_File as $keyCall_File => $valueCall_File}
            {$fileinfo = $valueCall_File['filename']|fileinclude:'file':{$callCMSS->fields.masterkey}|get_Icon}
            <div class="item">
              <div class="attachment-block">
                <a href="{$ul}/download/{$valueCall_File['filename']|fileinclude:'file':{$callCMSS->fields.masterkey}:'download'}&n={$valueCall_File['name']}&t={'md_cmsf'|encodeStr}" class="link" title="{$lang['system']['attachment']}">
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
                      <div class="subtitle typo-x">{$lang['system']['size']} : {$valueCall_File['filename']|fileinclude:'file':{$callCMSS->fields.masterkey}|get_IconSize} | {$lang['system']['type']} : {$fileinfo.type}</div>
                    </div>
                  </div>
                </a>
              </div>
            </div>
          {/foreach}
        </div>
      {/if}
    </div>
  </div>

</section>
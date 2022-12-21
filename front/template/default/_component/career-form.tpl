<section class="site-container sitekey" data-menuid="{$settingModulus['menuid']}" 
data-id="{$sitekey}" data-size="{$lang['career']['swal']['maxsize']}" data-sizeis="{$lang['career']['swal']['maxsizeis']}"
data-error="{$lang['career']['swal']['error']}" data-typeerror="{$lang['career']['swal']['typeerror']}" data-tryagian="{$lang['career']['swal']['tryagian']}">
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
<div class="default-page about form-about">
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
    {/if}

    <div class="container">
        <div class="h-title">
        {$lang['career']['Application_form']}
            </br>
            {$lang['career']['title']}
        </div>
        <form data-toggle="validator" role="form" class="form-default" name="form-career" id="form-career" method="POST">
            <div class="upload-form mb-lg-5 mb-4">
                <div class="row gutters-custom align-items-center">
                    <div class="col-sm-auto">
                        <!-- <div class="upload-form-image">
                            <div class="upload-image">
                                <p>UPLOAD</p>
                                <div class="form-group has-feedback">
                                    <div class="control-label" for="mockSelect-profile"></div>
                                </div>
                            </div>
                        </div> -->
                        {* pictures *}
                        <input name="keyProfile" value="{$careermasterkey}" type="hidden">
                        {* <input name="picProfile" id="picProfile" type="file" style="display:none;" accept="image/jpeg,jpg,png"> *}
                        <input name="LangPage" value="{$LangPage}" type="hidden">
                        {* pictures *}
                        <div class="thumb drag-area">
                            <figure class="cover showProfile" id="clickuploadProfile" style="cursor:pointer;">
                              {* pictures *}
                              <input type="file" name="uploadProfile" id="uploadProfile" style="display:none;" accept="image/jpeg,jpg,png" required="required">
                              {* pictures *}
                                <img id="img-area" src="{$template}/assets/img/upload/avatar.jpg" alt="" class="lazy">
                            </figure>
                        </div>
                    </div>
                    <div class="col-sm">
                        <div class="form-default">
                            <!-- <div class="typo-xs text-gray" style=" padding-left: 12.5px; padding-right: 12.5px; ">ตำแหน่งที่ต้องการสมัคร Position</div> -->
                            <div class="row gutters-custom">
                                <div class="col">
                                    <div class="control-label" for="mockSelect1">{$lang['career']['apply']}</div>
                                    <div class="form-group has-feedback">
                                        <label class="control-label visuallyhidden" for="mockSelect1">Example select</label>
                                        <div class="select-wrapper">
                                            <select class="select-control select-year" name="info[]" id="mockSelect1" style="width: 100%;" required="required">
                                              <option value="">{$lang['career']['select']}</option>
                                              {foreach $callListCareerSelect as $keycallListCareerSelect => $valuecallListCareerSelect}
                                              <option value="{$valuecallListCareerSelect.id}" {if $CareerSelect eq $valuecallListCareerSelect.id}selected{/if}>{$valuecallListCareerSelect.subject}</option>
                                              {/foreach}
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row gutters-custom">
                                <div class="col-md">
                                    <div class="form-group has-feedback">
                                        <label class="control-label visuallyhidden" for="salaly">Example input</label>
                                        <div class="block-control">
                                            <input type="number" class="form-control" name="info[]" id="salaly" placeholder="{$lang["career"]["salary"]}" data-error="" required="required">
                                            <span class="form-control-feedback" aria-hidden="true"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md">
                                    <div class="form-group has-feedback">
                                        <label class="control-label visuallyhidden" for="sdate">Example input</label>
                                        <div class="block-control">
                                            <input type="date" class="form-control" name="info[]" id="sdate" placeholder="{$lang['career']['datework']}" ata-error="" required="required">
                                            <span class="form-control-feedback" aria-hidden="true"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="title">
                {$lang['career']['fill-apply']}

            </div>
            <div class="form-default mt-xl-4">
                <div class="title">{$lang['career']['Personal_details']} <span>*</span> </div>
                <div class="row gutters-custom">
                    <div class="col-sm-2 col-3">
                        <div class="form-group">
                            <label class="control-label visuallyhidden" for="inputPrefix">Example select</label>
                            <div class="select-wrapper">
                                <select class="select-control" name="general[]" id="inputPrefix" onchange="hidearmy()" style="width: 100%;">
                                  <option value="{$lang['career']['mr']}">{$lang['career']['mr']}</option>
                                  <option value="{$lang['career']['mis']}">{$lang['career']['mis']}</option>
                                  <option value="{$lang['career']['miss']}">{$lang['career']['miss']}</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm">
                        <div class="form-group has-feedback">
                            <label class="control-label visuallyhidden" for="fname">Example input</label>
                            <div class="block-control">
                                <input type="text" class="form-control" name="general[]" id="fname" placeholder="{$lang['career']['fname']}" data-error="" required="required">
                                <span class="form-control-feedback" aria-hidden="true"></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm">
                        <div class="form-group has-feedback">
                            <label class="control-label visuallyhidden" for="lname">Example input</label>
                            <div class="block-control">
                                <input type="text" class="form-control" name="general[]" id="lname" placeholder="{$lang['career']['lname']}" data-error="" required="required">
                                <span class="form-control-feedback" aria-hidden="true"></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row gutters-custom">
                    <div class="col-sm-2 col-3">
                        <div class="form-group">
                            <label class="control-label visuallyhidden" for="inputPrefixen">Example select</label>
                            <div class="select-wrapper">
                                <select class="select-control" name="general[]" id="inputPrefixen" onchange="hidearmyen()" style="width: 100%;">
                                  <option value="{$lang['career']['mren']}">{$lang['career']['mren']}</option>
                                  <option value="{$lang['career']['misen']}">{$lang['career']['misen']}</option>
                                  <option value="{$lang['career']['missen']}">{$lang['career']['missen']}</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm">
                        <div class="form-group has-feedback">
                            <label class="control-label visuallyhidden" for="email">Example input</label>
                            <div class="block-control">
                                <input type="text" class="form-control" name="general[]" id="email" placeholder="{$lang['career']['fnameen']}" data-error="" required="required">
                                <span class="form-control-feedback" aria-hidden="true"></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm">
                        <div class="form-group has-feedback">
                            <label class="control-label visuallyhidden" for="email">Example input</label>
                            <div class="block-control">
                                <input type="text" class="form-control" name="general[]" id="email" placeholder="{$lang['career']['lnameen']}" data-error="" required="required">
                                <span class="form-control-feedback" aria-hidden="true"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-default">
                <!-- <div class="text-primary typo-xs"><span>*</span> </div> -->
                <div class="row gutters-custom align-items-end">
                    <div class="col-xl">
                        <div class="row gutters-custom align-items-end">
                            <div class="col-xl-3 col-lg-4 col-sm">
                                <div class="form-group -nm I">
                                    <label class="control-label label-custom" for="select-day">{$lang['career']['date']}<span>*</span></label>
                                    <div class="select-wrapper">
                                        <select class="select-control" name="general[]" id="select-day" style="width: 100%;" required="required">
                                          <option value="">{$lang['career']['day']}</option>
                                          {for $index=1 to 31}
                                              <option value="{if $index < 10}0{/if}{$index}">{$index}</option>
                                          {/for}
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-4 col-sm">
                                <div class="form-group">
                                    <label class="control-label visuallyhidden" for="select-month">Example select</label>
                                    <div class="select-wrapper">
                                        <select class="select-control" name="general[]" id="select-month" style="width: 100%;" required="required">
                                          <option value="">{$lang['career']['month']}</option>
                                          {foreach $MonthArray as $keyMonthArray => $valueMonthArray}
                                              <option value="{$valueMonthArray['number']}">{$valueMonthArray[$LangMonth]}</option>
                                          {/foreach}
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-sm">
                                <div class="form-group">
                                    <label class="control-label visuallyhidden" for="select-year">Example select</label>
                                    <div class="select-wrapper">
                                        <select class="select-control" name="general[]" id="select-year" style="width: 100%;" required="required">
                                          <option value="">{$lang['career']['year']}</option>
                                          {assign var="current" value="{$Year}"}
                                          {assign var="currentEN" value="{$YearEn}"}
                                          {while $current > ($Year - 100)}
                                              <option value="{$currentEN}">{$current}</option>
                                              {$current--}
                                              {$currentEN--}
                                          {/while}
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl">
                        <div class="row gutters-custom align-items-center">
                            <div class="col-xl-3 col-lg-4 col-sm">
                                <div class="form-group has-feedback">
                                    <label class="control-label visuallyhidden" for="weight">Example input</label>
                                    <div class="block-control">
                                        <input type="text" class="form-control" name="general[]" id="weight" placeholder="99 kg" data-error="" required="required">
                                        <span class="form-control-feedback" aria-hidden="true"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-sm">
                                <div class="form-group has-feedback">
                                    <label class="control-label visuallyhidden" for="height">Example input</label>
                                    <div class="block-control">
                                        <input type="text" class="form-control" name="general[]" id="height" placeholder="{$lang['career']['height']}" data-error="" required="required">
                                        <span class="form-control-feedback" aria-hidden="true"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm">
                                <div class="form-group has-feedback">
                                    <label class="control-label visuallyhidden" for="inputPlaceOfBirth">Example input</label>
                                    <div class="block-control">
                                        <input type="text" class="form-control" name="general[]" id="inputPlaceOfBirth" placeholder="{$lang['career']['Domicile']}" data-error="" required="required">
                                        <span class="form-control-feedback" aria-hidden="true"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row gutters-custom align-items-center">
                    <div class="col-auto">
                        <fieldset>
                            <legend class="visuallyhidden">radio</legend>
                            <div class="form-group form-check">
                                <input class="form-check-input radio-check" type="radio" name="general[sex]" id="male" value="ชาย" required="required">
                                <label class="control-label" for="male">
                                    {$lang['career']['male']}
                                </label>
                            </div>
                        </fieldset>
                    </div>
                    <div class="col">
                        <fieldset>
                            <legend class="visuallyhidden">radio</legend>
                            <div class="form-group form-check">
                                <input class="form-check-input radio-check" type="radio" name="general[sex]" id="female" value="หญิง" required="required">
                                <label class="control-label" for="female">
                                    {$lang['career']['female']}
                                </label>
                            </div>
                        </fieldset>
                    </div>
                </div>
            </div>
            <div class="form-default mt-xl-4">
                <div class="title">{$lang['career']['homeaddress']}</div>
                <div class="row gutters-custom">
                    <div class="col-md-4">
                        <div class="row gutters-custom">
                            <div class="col-md-7 col-sm">
                                <div class="form-group has-feedback">
                                    <label class="control-label visuallyhidden" for="have-with-number">Example input</label>
                                    <div class="block-control">
                                        <input type="text" class="form-control" name="address[]" id="have-with-number" placeholder="{$lang['career']['numhome']}" data-error="" required="required">
                                        <span class="form-control-feedback" aria-hidden="true"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-5 col-sm">
                                <div class="form-group has-feedback">
                                    <label class="control-label visuallyhidden" for="moo">Example input</label>
                                    <input type="text" class="form-control" name="address[]" id="moo" placeholder="{$lang["career"]["Moo"]}" data-error="" required="required">
                                    <div class="block-control">
                                        <span class="form-control-feedback" aria-hidden="true"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="row gutters-custom">
                            <div class="col-sm">
                                <div class="form-group has-feedback">
                                    <label class="control-label visuallyhidden" for="village-building">Example input</label>
                                    <div class="block-control">
                                        <input type="text" class="form-control" name="address[]" id="village-building" placeholder="{$lang["career"]["MooHome"]}" data-error="" required="required">
                                        <span class="form-control-feedback" aria-hidden="true"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm">
                                <div class="form-group has-feedback">
                                    <label class="control-label visuallyhidden" for="alley">Example input</label>
                                    <div class="block-control">
                                        <input type="text" class="form-control" name="address[]" id="alley" placeholder="{$lang["career"]["alley"]}" data-error="" required="required">
                                        <span class="form-control-feedback" aria-hidden="true"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm">
                                <div class="form-group has-feedback">
                                    <label class="control-label visuallyhidden" for="road">Example input</label>
                                    <div class="block-control">
                                        <input type="text" class="form-control" name="address[]" id="road" placeholder="{$lang["career"]["road"]}" data-error="" required="required">
                                        <span class="form-control-feedback" aria-hidden="true"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row gutters-custom">
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label class="control-label visuallyhidden" for="inputProvince">Example select</label>
                            <div class="select-wrapper">
                                <select class="select-control inputProvince" name="address[]" id="inputProvince" style="width: 100%;" required="required">
                                    <option value="">{$lang['career']['province']}</option>
                                    {foreach $callProvince_mains as $callProvince_main}
                                        <option value="{$callProvince_main.0}" data-name="{$callProvince_main.2}">{$callProvince_main.2}</option>
                                    {/foreach}
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm">
                        <div class="form-group">
                            <label class="control-label visuallyhidden" for="inputDistrict">Example select</label>
                            <div class="select-wrapper">
                                <select class="select-control inputDistrict" name="address[]" id="inputDistrict" style="width: 100%;" required="required">
                                    <option value="">{$lang['career']['district']}</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm">
                        <div class="form-group">
                            <label class="control-label visuallyhidden" for="inputSubdictrict">Example select</label>
                            <div class="select-wrapper">
                                <select class="select-control inputSubdictrict" name="address[]" id="inputSubdictrict" style="width: 100%;" required="required">
                                    <option value="">{$lang['career']['subdistrict']}</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm">
                        <div class="form-group has-feedback">
                            <label class="control-label visuallyhidden" for="postcode">Example input</label>
                            <div class="block-control">
                                <input type="text" class="form-control" name="address[]" id="postcode" placeholder="{$lang['career']['postcode']}" data-error="" required="required">
                                <span class="form-control-feedback" aria-hidden="true"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-default mt-xl-4">
                <div class="title">{$lang['career']['presentaddress']}</div>
                <div class="row gutters-custom">
                    <div class="col-md-4">
                        <div class="row gutters-custom">
                            <div class="col-md-7 col-sm">
                                <div class="form-group has-feedback">
                                    <label class="control-label visuallyhidden" for="present-have-with-number">Example input</label>
                                    <div class="block-control">
                                        <input type="text" class="form-control" name="address[]" id="present-have-with-number" placeholder="{$lang['career']['numhome']}" data-error="" required="required">
                                        <span class="form-control-feedback" aria-hidden="true"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-5 col-sm">
                                <div class="form-group has-feedback">
                                    <label class="control-label visuallyhidden" for="present-moo">Example input</label>
                                    <div class="block-control">
                                        <input type="text" class="form-control" name="address[]" id="present-moo" placeholder="{$lang["career"]["Moo"]}" data-error="" required="required">
                                        <span class="form-control-feedback" aria-hidden="true"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="row gutters-custom">
                            <div class="col-sm">
                                <div class="form-group has-feedback">
                                    <label class="control-label visuallyhidden" for="present-village-building">Example input</label>
                                    <div class="block-control">
                                        <input type="text" class="form-control" name="address[]" id="present-village-building" placeholder="{$lang["career"]["MooHome"]}" data-error="" required="required">
                                        <span class="form-control-feedback" aria-hidden="true"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm">
                                <div class="form-group has-feedback">
                                    <label class="control-label visuallyhidden" for="present-alley">Example input</label>
                                    <div class="block-control">
                                        <input type="text" class="form-control" name="address[]" id="present-alley" placeholder="{$lang["career"]["alley"]}" data-error="" required="required">
                                        <span class="form-control-feedback" aria-hidden="true"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm">
                                <div class="form-group has-feedback">
                                    <label class="control-label visuallyhidden" for="present-road">Example input</label>
                                    <div class="block-control">
                                        <input type="text" class="form-control" name="address[]" id="present-road" placeholder="{$lang["career"]["road"]}" data-error="" required="required">
                                        <span class="form-control-feedback" aria-hidden="true"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row gutters-custom">
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label class="control-label visuallyhidden" for="inputProvince2">Example select</label>
                            <div class="select-wrapper">
                                <select class="select-control inputProvince2" name="address[]" id="inputProvince2" style="width: 100%;" required="required">
                                    <option value="">{$lang['career']['province']}</option>
                                    {foreach $callProvince_mains as $callProvince_main}
                                        <option value="{$callProvince_main.0}" data-name="{$callProvince_main.2}">{$callProvince_main.2}</option>
                                    {/foreach}
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm">
                        <div class="form-group">
                            <label class="control-label visuallyhidden" for="inputDistrict2">Example select</label>
                            <div class="select-wrapper">
                                <select class="select-control inputDistrict2" name="address[]" id="inputDistrict2" style="width: 100%;" required="required">
                                    <option value="">{$lang['career']['district']}</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm">
                        <div class="form-group">
                            <label class="control-label visuallyhidden" for="present-subdistrict">Example select</label>
                            <div class="select-wrapper">
                                <select class="select-control inputSubdictrict2" name="address[]" id="present-subdistrict" style="width: 100%;" required="required">
                                    <option value="">{$lang['career']['subdistrict']}</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm">
                        <div class="form-group has-feedback">
                            <label class="control-label visuallyhidden" for="present-postcode">Example input</label>
                            <div class="block-control">
                                <input type="text" class="form-control" name="address[]" id="present-postcode" placeholder="{$lang['career']['postcode']}" data-error="" required="required">
                                <span class="form-control-feedback" aria-hidden="true"></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row gutters-custom">
                    <div class="col-sm">
                        <div class="form-group has-feedback">
                            <label class="control-label" for="telephone-home">{$lang['career']['telhome']}</label>
                            <div class="block-control">
                                <input type="text" class="form-control" name="address[]" id="telephone-home" placeholder="058-7784562" data-error="" required="required">
                                <span class="form-control-feedback" aria-hidden="true"></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm">
                        <div class="form-group has-feedback">
                            <label class="control-label" for="telephone-mobile">{$lang['career']['telmobile']}</label>
                            <div class="block-control">
                                <input type="text" class="form-control" name="address[]" id="telephone-mobile" placeholder="060-XXX-XXXX" data-error="" required="required">
                                <span class="form-control-feedback" aria-hidden="true"></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm">
                        <div class="form-group has-feedback">
                            <label class="control-label" for="email">{$lang['contact']['email']}</label>
                            <div class="block-control">
                                <input type="email" class="form-control" name="address[]" id="email" placeholder="{$lang['contact']['email']}" data-error="" required="required">
                                <span class="form-control-feedback" aria-hidden="true"></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row gutters-custom">
                    <div class="col-xl-4 col-md-4 col-sm-6">
                        <div class="row gutters-custom">
                            <div class="col-sm">
                                <div class="form-group has-feedback">
                                    <label class="control-label" for="identification-1">{$lang['career']['idencardno']}</label>
                                    <div class="block-control">
                                        <input type="text" class="form-control" name="address[]" id="identification-1" placeholder="X-XXXX-XXXXX-XX-X" data-error="" required="required">
                                        <span class="form-control-feedback" aria-hidden="true"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-8 col-sm-6">
                        <div class="row gutters-custom">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="control-label" for="issued-at">{$lang['career']['issuedat']}</label>
                                    <div class="select-wrapper">
                                        <select class="select-control" name="address[]" id="issued-at" style="width: 100%;" required="required">
                                            <option value="">{$lang['career']['province']}</option>
                                            {foreach $callProvince_mains as $callProvince_main}
                                                <option value="{$callProvince_main.0}" data-name="{$callProvince_main.2}">{$callProvince_main.2}</option>
                                            {/foreach}
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group has-feedback">
                                    <label class="control-label" for="expiry-date" style=" font-size: 14px; ">{$lang['career']['expdate']}</label>
                                    <div class="block-control">
                                        <input type="text" class="form-control" name="address[]" id="expiry-date" placeholder="17 - 02 - 2565" data-error="" required="required">
                                        <span class="form-control-feedback" aria-hidden="true"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-default mt-xl-4" id="textarmy">
                <div class="title">{$lang['career']['army5']}</div>
                <div class="row gutters-custom">
                    <div class="col-auto">
                        <fieldset>
                            <legend class="visuallyhidden">radio</legend>
                            <div class="form-group form-check">
                                <input class="form-check-input radio-check military-checking" type="radio" name="military[status]" id="exempted" value="ได้รับการยกเว้น" checked>
                                <label class="control-label" for="exempted">
                               {$lang['career']['army1']}
                                </label>
                            </div>
                        </fieldset>
                    </div>
                    <div class="col-auto">
                        <fieldset>
                            <legend class="visuallyhidden">radio</legend>
                            <div class="form-group form-check">
                                <input class="form-check-input radio-check military-checking" type="radio" name="military[status]" id="non-exempted" value="ยังไม่ผ่านการเกณฑ์ทหาร">
                                <label class="control-label" for="non-exempted">
                                {$lang['career']['army2']}
                                </label>
                            </div>
                        </fieldset>
                    </div>
                    <div class="col-auto">
                        <fieldset>
                            <legend class="visuallyhidden">radio</legend>
                            <div class="form-group form-check">
                                <input class="form-check-input radio-check military-checking" type="radio" name="military[status]" id="territorial-degree-student" value="เรียนรักษาดินแดน">
                                <label class="control-label" for="territorial-degree-student">
                                    {$lang['career']['army3']}
                                </label>
                            </div>
                        </fieldset>
                    </div>
                </div>
                <div class="row gutters-custom align-items-center">
                    <div class="col-auto">
                        <fieldset>
                            <legend class="visuallyhidden">radio</legend>
                            <div class="form-group form-check">
                                <input class="form-check-input radio-check military-checking" type="radio" name="military[status]" id="date-entered-service" value="รับราชการทหารแล้ว">
                                <label class="control-label" for="date-entered-service">
                                    {$lang['career']['army4']}
                                </label>
                            </div>
                        </fieldset>
                    </div>
                    <div class="col-auto">
                        <fieldset>
                            <legend class="visuallyhidden">radio</legend>
                            <div class="form-group form-check">
                                <input class="form-check-input radio-check military-checking" type="radio" name="military[status]" id="other" value="อื่นๆ">
                                <label class="control-label" for="other">
                                    {$lang['career']['army']}
                                </label>
                            </div>
                        </fieldset>
                    </div>
                    <div class="col-md-5 col-sm-6 military-other">
                        <div class="form-group has-feedback">
                            <label class="control-label visuallyhidden" for="identification-2">{$lang['career']['idencardno']}</label>
                            <div class="block-control">
                                <input type="text" class="form-control mili-other" name="military[]" id="identification-2" placeholder="ระบุ / Annotate" data-error="">
                                <span class="form-control-feedback" aria-hidden="true"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-default emergency-case">
                <div class="title">{$lang['career']['emercontact']}</div>
                <div class="row gutters-custom align-items-end">
                    <div class="col-md">
                        <div class="form-group has-feedback">
                            <label class="control-label font-size-C" for="e-name">{$lang['career']['fname']}</label>
                            <div class="block-control">
                                <input type="text" class="form-control" name="emergency[]" id="e-name" placeholder="{$lang['career']['fname']}" data-error="" required="required">
                                <span class="form-control-feedback" aria-hidden="true"></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md">
                        <div class="row gutters-custom">
                            <div class="col-md col-sm-6">
                                <div class="form-group has-feedback">
                                    <label class="control-label font-size-C" for="e-surname">{$lang['career']['lname']}</label>
                                    <div class="block-control">
                                        <input type="text" class="form-control" name="emergency[]" id="e-surname" placeholder="{$lang['career']['lname']}" data-error="" required="required">
                                        <span class="form-control-feedback" aria-hidden="true"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-4 col-sm-6">
                                <div class="form-group">
                                    <label class="control-label label-custom" for="e-select-day">{$lang['career']['date']}</label>
                                    <div class="select-wrapper">
                                        <select class="select-control" name="emergency[]" id="e-select-day" style="width: 100%;" required="required">
                                            <option value="">{$lang['career']['day']}</option>
                                            {for $index=1 to 31}
                                                <option value="{if $index < 10}0{/if}{$index}">{$index}</option>
                                            {/for}
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md">
                        <div class="row gutters-custom">
                            <div class="col-md-5 col-sm-4">
                                <div class="form-group">
                                    <label class="control-label visuallyhidden" for="e-select-month">Ex</label>
                                    <div class="select-wrapper">
                                        <select class="select-control" name="emergency[]" id="e-select-month" style="width: 100%;" required="required">
                                            <option value="">{$lang['career']['month']}</option>
                                            {foreach $MonthArray as $keyMonthArray => $valueMonthArray}
                                                <option value="{$valueMonthArray['number']}">{$valueMonthArray[$LangMonth]}</option>
                                            {/foreach}
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md col-sm-4">
                                <div class="form-group">
                                    <label class="control-label visuallyhidden" for="e-select-year">Ex</label>
                                    <div class="select-wrapper">
                                        <select class="select-control" name="emergency[]" id="e-select-year" style="width: 100%;" required="required">
                                            <option value="">{$lang['career']['year']}</option>
                                            {assign var="current" value="{$Year}"}
                                            {assign var="currentEN" value="{$YearEn}"}
                                            {while $current > ($Year - 100)}
                                                <option value="{$currentEN}">{$current}</option>
                                                {$current--}
                                                {$currentEN--}
                                            {/while}
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md col-sm-4">
                                <div class="form-group has-feedback">
                                    <label class="control-label visuallyhidden" for="e-age">Ex</label>
                                    <div class="block-control">
                                        <input type="number" class="form-control text-center" name="emergency[]" id="e-age" placeholder="35" data-error="" required="required">
                                        <span class="form-control-feedback" aria-hidden="true"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row gutters-custom">
                    <div class="col-sm">
                        <div class="form-group has-feedback">
                            <label class="control-label font-size-C" for="relations">{$lang['career']['relation']}</label>
                            <div class="block-control">
                                <input type="text" class="form-control" name="emergency[]" id="relations" placeholder="{$lang['career']['relation']}" data-error="" required="required">
                                <span class="form-control-feedback" aria-hidden="true"></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm">
                        <div class="form-group has-feedback">
                            <label class="control-label font-size-C" for="address-workplace">{$lang['career']['addresswork']}</label>
                            <div class="block-control">
                                <input type="text" class="form-control" name="emergency[]" id="address-workplace" placeholder="{$lang['career']['addresswork']}" data-error="" required="required">
                                <span class="form-control-feedback" aria-hidden="true"></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm">
                        <div class="form-group has-feedback">
                            <label class="control-label" for="e-tel">{$lang['career']['phone']}</label>
                            <div class="block-control">
                                <input type="text" class="form-control" name="emergency[]" id="e-tel" placeholder="060-XXX-XXXX" data-error="" required="required">
                                <span class="form-control-feedback" aria-hidden="true"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-default family-datails">
                <div class="form-set">
                    <div class="title">{$lang['career']['famiryde']} <span>*</span></div>
                    <div class="row gutters-custom align-items-end">
                        <div class="col-md">
                            <div class="form-group has-feedback">
                                <label class="control-label font-size-C" for="f-name-1">1. {$lang['career']['fname']}</label>
                                <div class="block-control">
                                    <input type="text" class="form-control" name="family[]" id="f-name-1" placeholder="{$lang['career']['fname']}" data-error="" required="required">
                                    <span class="form-control-feedback" aria-hidden="true"></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md">
                            <div class="row gutters-custom">
                                <div class="col-md col-sm-6">
                                    <div class="form-group has-feedback">
                                        <label class="control-label font-size-C" for="f-surname-1">{$lang['career']['lname']}</label>
                                        <div class="block-control">
                                            <input type="text" class="form-control" name="family[]" id="f-surname-1" placeholder="{$lang['career']['lname']}" data-error="" required="required">
                                            <span class="form-control-feedback" aria-hidden="true"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-6">
                                    <div class="form-group">
                                        <label class="control-label label-custom" for="f-select-day-1">{$lang['career']['date']}</label>
                                        <div class="select-wrapper">
                                            <select class="select-control" name="family[]" id="f-select-day-1" style="width: 100%;" required="required">
                                                <option value="">{$lang['career']['day']}</option>
                                                {for $index=1 to 31}
                                                    <option value="{if $index < 10}0{/if}{$index}">{$index}</option>
                                                {/for}
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md">
                            <div class="row gutters-custom">
                                <div class="col-md-5 col-sm-4">
                                    <div class="form-group">
                                        <label class="control-label visuallyhidden" for="f-select-month-1">Ex</label>
                                        <div class="select-wrapper">
                                            <select class="select-control" name="family[]" id="f-select-month-1" style="width: 100%;" required="required">
                                                <option value="">{$lang['career']['month']}</option>
                                                {foreach $MonthArray as $keyMonthArray => $valueMonthArray}
                                                    <option value="{$valueMonthArray['number']}">{$valueMonthArray[$LangMonth]}</option>
                                                {/foreach}
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md col-sm-4">
                                    <div class="form-group">
                                        <label class="control-label visuallyhidden" for="f-select-year-1">Ex</label>
                                        <div class="select-wrapper">
                                            <select class="select-control" name="family[]" id="f-select-year-1" style="width: 100%;" required="required">
                                                <option value="">{$lang['career']['year']}</option>
                                                {assign var="current" value="{$Year}"}
                                                {assign var="currentEN" value="{$YearEn}"}
                                                {while $current > ($Year - 100)}
                                                    <option value="{$currentEN}">{$current}</option>
                                                    {$current--}
                                                    {$currentEN--}
                                                {/while}
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md col-sm-4">
                                    <div class="form-group has-feedback">
                                        <label class="control-label visuallyhidden" for="f-age-1">Ex</label>
                                        <div class="block-control">
                                            <input type="number" class="form-control text-center" name="family[]" id="f-age-1" placeholder="35" data-error="" required="required">
                                            <span class="form-control-feedback" aria-hidden="true"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row gutters-custom">
                        <div class="col-sm">
                            <div class="form-group has-feedback">
                                <label class="control-label font-size-C" for="f-relations-1">{$lang['career']['relation']}</label>
                                <div class="block-control">
                                    <input type="text" class="form-control" name="family[]" id="f-relations-1" placeholder="{$lang['career']['relation']}" data-error="" required="required">
                                    <span class="form-control-feedback" aria-hidden="true"></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm">
                            <div class="form-group has-feedback">
                                <label class="control-label font-size-C" for="f-address-workplace-1">{$lang['career']['addresswork']}</label>
                                <div class="block-control">
                                    <input type="text" class="form-control" name="family[]" id="f-address-workplace-1" placeholder="{$lang['career']['addresswork']}" data-error="" required="required">
                                    <span class="form-control-feedback" aria-hidden="true"></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm">
                            <div class="form-group has-feedback">
                                <label class="control-label" for="f-tel-1">{$lang['career']['phone']}</label>
                                <div class="block-control">
                                    <input type="text" class="form-control" name="family[]" id="f-tel-1" placeholder="060-XXX-XXXX" data-error="" required="required">
                                    <span class="form-control-feedback" aria-hidden="true"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row gutters-custom">
                        <div class="col-auto">
                            <div class="row gutters-custom">
                                <div class="col-auto">
                                    <fieldset>
                                        <legend class="visuallyhidden">{$lang['career']['status:live']}</legend>
                                        <div class="form-group form-check">
                                            <input class="form-check-input radio-check family-checking" type="radio" name="family[alive]" id="live" value="มีชีวิต" required="required">
                                            <label class="control-label" for="live">
                                                {$lang['career']['status:live']}
                                            </label>
                                        </div>
                                    </fieldset>
                                </div>
                                <div class="col-auto">
                                    <fieldset>
                                        <legend class="visuallyhidden">{$lang['career']['status:pass']}</legend>
                                        <div class="form-group form-check">
                                            <input class="form-check-input radio-check family-checking" type="radio" name="family[alive]" id="pass-away" value="เสียชีวิต" required="required">
                                            <label class="control-label" for="pass-away">
                                                {$lang['career']['status:pass']}
                                            </label>
                                        </div>
                                    </fieldset>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-8 family-date">
                            <div class="row gutters-custom">
                                <div class="col">
                                    <div class="form-group">
                                        <label class="control-label visuallyhidden" for="family-day-1">Ex</label>
                                        <div class="select-wrapper select-custom">
                                            <select class="select-control" name="family[]" id="family-day-1" style="width: 100%;">
                                                <option value="">{$lang['career']['day']}</option>
                                                {for $index=1 to 31}
                                                    <option value="{if $index < 10}0{/if}{$index}">{$index}</option>
                                                {/for}
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label class="control-label visuallyhidden" for="family-month-1">Ex</label>
                                        <div class="select-wrapper select-custom">
                                            <select class="select-control" name="family[]" id="family-month-1" style="width: 100%;">
                                                <option value="">{$lang['career']['month']}</option>
                                                {foreach $MonthArray as $keyMonthArray => $valueMonthArray}
                                                    <option value="{$valueMonthArray['number']}">{$valueMonthArray[$LangMonth]}</option>
                                                {/foreach}
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label class="control-label visuallyhidden" for="family-year-1">Ex</label>
                                        <div class="select-wrapper select-custom">
                                            <select class="select-control" name="family[]" id="family-year-1" style="width: 100%;">
                                                <option value="">{$lang['career']['year']}</option>
                                                {assign var="current" value="{$Year}"}
                                                {assign var="currentEN" value="{$YearEn}"}
                                                {while $current > ($Year - 100)}
                                                    <option value="{$currentEN}">{$current}</option>
                                                    {$current--}
                                                    {$currentEN--}
                                                {/while}
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-set I">
                    <div class="row gutters-custom align-items-end">
                        <div class="col-md">
                            <div class="form-group has-feedback">
                                <label class="control-label font-size-C" for="f-name-2">2. {$lang['career']['fname']}</label>
                                <div class="block-control">
                                    <input type="text" class="form-control" name="family[]" id="f-name-2" placeholder="{$lang['career']['fname']}" data-error="" required="required">
                                    <span class="form-control-feedback" aria-hidden="true"></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md">
                            <div class="row gutters-custom">
                                <div class="col-md col-sm-6">
                                    <div class="form-group has-feedback">
                                        <label class="control-label font-size-C" for="f-surname-2">{$lang['career']['lname']}</label>
                                        <div class="block-control">
                                            <input type="text" class="form-control" name="family[]" id="f-surname-2" placeholder="{$lang['career']['lname']}" data-error="" required="required">
                                            <span class="form-control-feedback" aria-hidden="true"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-6">
                                    <div class="form-group">
                                        <label class="control-label label-custom" for="f-select-day-2">{$lang['career']['date']}</label>
                                        <div class="select-wrapper">
                                            <select class="select-control" name="family[]" id="f-select-day-2" style="width: 100%;" required="required">
                                                <option value="">{$lang['career']['day']}</option>
                                                {for $index=1 to 31}
                                                    <option value="{if $index < 10}0{/if}{$index}">{$index}</option>
                                                {/for}
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md">
                            <div class="row gutters-custom">
                                <div class="col-md-5 col-sm-4">
                                    <div class="form-group">
                                        <label class="control-label visuallyhidden" for="f-select-month-2">Ex</label>
                                        <div class="select-wrapper">
                                            <select class="select-control" name="family[]" id="f-select-month-2" style="width: 100%;" required="required">
                                                <option value="">{$lang['career']['month']}</option>
                                                {foreach $MonthArray as $keyMonthArray => $valueMonthArray}
                                                    <option value="{$valueMonthArray['number']}">{$valueMonthArray[$LangMonth]}</option>
                                                {/foreach}
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md col-sm-4">
                                    <div class="form-group">
                                        <label class="control-label visuallyhidden" for="f-select-year-2">Ex</label>
                                        <div class="select-wrapper">
                                            <select class="select-control" name="family[]" id="f-select-year-2" style="width: 100%;" required="required">
                                                <option value="">{$lang['career']['year']}</option>
                                                {assign var="current" value="{$Year}"}
                                                {assign var="currentEN" value="{$YearEn}"}
                                                {while $current > ($Year - 100)}
                                                    <option value="{$currentEN}">{$current}</option>
                                                    {$current--}
                                                    {$currentEN--}
                                                {/while}
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md col-sm-4">
                                    <div class="form-group has-feedback">
                                        <label class="control-label visuallyhidden" for="f-age-2">Ex</label>
                                        <div class="block-control">
                                            <input type="number" class="form-control text-center" name="family[]" id="f-age-2" placeholder="35" data-error="" required="required">
                                            <span class="form-control-feedback" aria-hidden="true"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row gutters-custom">
                        <div class="col-sm">
                            <div class="form-group has-feedback">
                                <label class="control-label font-size-C" for="f-relations-2">{$lang['career']['relation']}</label>
                                <div class="block-control">
                                    <input type="text" class="form-control" name="family[]" id="f-relations-2" placeholder="{$lang['career']['relation']}" data-error="" required="required">
                                    <span class="form-control-feedback" aria-hidden="true"></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm">
                            <div class="form-group has-feedback">
                                <label class="control-label font-size-C" for="f-address-workplace-2">{$lang['career']['addresswork']}</label>
                                <div class="block-control">
                                    <input type="text" class="form-control" name="family[]" id="f-address-workplace-2" placeholder="{$lang['career']['addresswork']}" data-error="" required="required">
                                    <span class="form-control-feedback" aria-hidden="true"></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm">
                            <div class="form-group has-feedback">
                                <label class="control-label" for="f-tel-2">{$lang['career']['phone']}</label>
                                <div class="block-control">
                                    <input type="text" class="form-control" name="family[]" id="f-tel-2" placeholder="060-XXX-XXXX" data-error="" required="required">
                                    <span class="form-control-feedback" aria-hidden="true"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row gutters-custom">
                        <div class="col-auto">
                            <div class="row gutters-custom">
                                <div class="col-auto">
                                    <fieldset>
                                        <legend class="visuallyhidden">{$lang['career']['status:live']}</legend>
                                        <div class="form-group form-check">
                                            <input class="form-check-input radio-check family2-checking" type="radio" name="family[alive2]" id="live-2" value="มีชีวิต" required="required">
                                            <label class="control-label" for="live-2">
                                                {$lang['career']['status:live']}
                                            </label>
                                        </div>
                                    </fieldset>
                                </div>
                                <div class="col-auto">
                                    <fieldset>
                                        <legend class="visuallyhidden">{$lang['career']['status:pass']}</legend>
                                        <div class="form-group form-check">
                                            <input class="form-check-input radio-check family2-checking" type="radio" name="family[alive2]" id="pass-away-2" value="เสียชีวิต" required="required">
                                            <label class="control-label" for="pass-away-2">
                                                {$lang['career']['status:pass']}
                                            </label>
                                        </div>
                                    </fieldset>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-8 family-date-2">
                            <div class="row gutters-custom">
                                <div class="col">
                                    <div class="form-group">
                                        <label class="control-label visuallyhidden" for="family-day-2">Ex</label>
                                        <div class="select-wrapper select-custom">
                                            <select class="select-control" name="family[]" id="family-day-2" style="width: 100%;">
                                                <option value="">{$lang['career']['day']}</option>
                                                {for $index=1 to 31}
                                                    <option value="{if $index < 10}0{/if}{$index}">{$index}</option>
                                                {/for}
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label class="control-label visuallyhidden" for="family-month-2">Ex</label>
                                        <div class="select-wrapper select-custom">
                                            <select class="select-control" name="family[]" id="family-month-2" style="width: 100%;">
                                                <option value="">{$lang['career']['month']}</option>
                                                {foreach $MonthArray as $keyMonthArray => $valueMonthArray}
                                                    <option value="{$valueMonthArray['number']}">{$valueMonthArray[$LangMonth]}</option>
                                                {/foreach}
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label class="control-label visuallyhidden" for="family-year-2">Ex</label>
                                        <div class="select-wrapper select-custom">
                                            <select class="select-control" name="family[]" id="family-year-2" style="width: 100%;">
                                                <option value="">{$lang['career']['year']}</option>
                                                {assign var="current" value="{$Year}"}
                                                {assign var="currentEN" value="{$YearEn}"}
                                                {while $current > ($Year - 100)}
                                                    <option value="{$currentEN}">{$current}</option>
                                                    {$current--}
                                                    {$currentEN--}
                                                {/while}
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-set II">
                    <div class="row gutters-custom align-items-center">
                        <div class="col-sm-auto">
                            <div class="row gutters-custom">
                                <div class="col-sm">
                                    <div class="form-group has-feedback">
                                        <label class="control-label visuallyhidden" for="inputNumberbrother">input-two</label>
                                        <div class="block-control">
                                            <input type="number" class="form-control" name="brethren[0][]" id="inputNumberbrother" onkeyup="hidebrother()" onmouseup="hidebrother()" value="1" data-error="">
                                            <span class="form-control-feedback" aria-hidden="true"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm">
                                    <div class="form-group has-feedback">
                                        <label class="control-label visuallyhidden" for="you-are-someone-who">{$lang['career']['whoyou']}</label>
                                        <div class="block-control">
                                            <input type="text" class="form-control" name="brethren[0][]" id="you-are-someone-who" placeholder="{$lang['career']['whoyou']}" data-error="" required="required">
                                            <span class="form-control-feedback" aria-hidden="true"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm text-right">
                            <div class="button ">
                                <a href="javascript:void(0);" class="btn btn-primary addbrethren" title="btn btn-primary">
                                    <span class="feather icon-plus text-white"></span>
                                    {$lang['career']['addbrosis']}
                                </a>
                            </div>
                        </div>
                    </div>
                    <div id="textvaluebro">
                        <div class="row gutters-custom align-items-end">
                            <div class="col-md">
                                <div class="form-group has-feedback">
                                    <label class="control-label font-size-C" for="f-name-3">{$lang['career']['fname']}</label>
                                    <div class="block-control">
                                        <input type="text" class="form-control" name="brethren[0][]" id="f-name-3" placeholder="{$lang['career']['fname']}" data-error="" required="required">
                                        <span class="form-control-feedback" aria-hidden="true"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md">
                                <div class="row gutters-custom">
                                    <div class="col-md col-sm-6">
                                        <div class="form-group has-feedback">
                                            <label class="control-label font-size-C" for="f-surname-3">{$lang['career']['lname']}</label>
                                            <div class="block-control">
                                                <input type="text" class="form-control" name="brethren[0][]" id="f-surname-3" placeholder="{$lang['career']['lname']}" data-error="" required="required">
                                                <span class="form-control-feedback" aria-hidden="true"></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-sm-6">
                                        <div class="form-group">
                                            <label class="control-label label-custom" for="f-select-day-3">{$lang['career']['date']}</label>
                                            <div class="select-wrapper">
                                                <select class="select-control" name="brethren[0][]" id="f-select-day-3" style="width: 100%;" required="required">
                                                    <option value="">{$lang['career']['day']}</option>
                                                    {for $index=1 to 31}
                                                        <option value="{if $index < 10}0{/if}{$index}">{$index}</option>
                                                    {/for}
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md">
                                <div class="row gutters-custom">
                                    <div class="col-md-5 col-sm-4">
                                        <div class="form-group">
                                            <label class="control-label visuallyhidden" for="f-select-month-3">Ex</label>
                                            <div class="select-wrapper">
                                                <select class="select-control" name="brethren[0][]" id="f-select-month-3" style="width: 100%;" required="required">
                                                        <option value="">{$lang['career']['month']}</option>
                                                        {foreach $MonthArray as $keyMonthArray => $valueMonthArray}
                                                            <option value="{$valueMonthArray['number']}">{$valueMonthArray[$LangMonth]}</option>
                                                        {/foreach}
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md col-sm-4">
                                        <div class="form-group">
                                            <label class="control-label visuallyhidden" for="f-select-year-3">Ex</label>
                                            <div class="select-wrapper">
                                                <select class="select-control" name="brethren[0][]" id="f-select-year-3" style="width: 100%;" required="required">
                                                    <option value="">{$lang['career']['year']}</option>
                                                    {assign var="current" value="{$Year}"}
                                                    {assign var="currentEN" value="{$YearEn}"}
                                                    {while $current > ($Year - 100)}
                                                        <option value="{$currentEN}">{$current}</option>
                                                        {$current--}
                                                        {$currentEN--}
                                                    {/while}
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md col-sm-4">
                                        <div class="form-group has-feedback">
                                            <label class="control-label visuallyhidden" for="f-age-3">Ex</label>
                                            <div class="block-control">
                                                <input type="number" class="form-control text-center" name="brethren[0][]" id="f-age-3" placeholder="35" data-error="" required="required">
                                                <span class="form-control-feedback" aria-hidden="true"></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row gutters-custom">
                            <div class="col-sm">
                                <div class="form-group has-feedback">
                                    <label class="control-label font-size-C" for="f-relations-3">{$lang['career']['relation']}</label>
                                    <div class="block-control">
                                        <input type="text" class="form-control" name="brethren[0][]" id="f-relations-3" placeholder="{$lang['career']['relation']}" data-error="" required="required">
                                        <span class="form-control-feedback" aria-hidden="true"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm">
                                <div class="form-group has-feedback">
                                    <label class="control-label font-size-C" for="f-address-workplace-3">{$lang['career']['addresswork']}</label>
                                    <div class="block-control">
                                        <input type="text" class="form-control" name="brethren[0][]" id="f-address-workplace-3" placeholder="{$lang['career']['addresswork']}" data-error="" required="required">
                                        <span class="form-control-feedback" aria-hidden="true"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm">
                                <div class="form-group has-feedback">
                                    <label class="control-label" for="f-tel-3">{$lang['career']['phone']}</label>
                                    <div class="block-control">
                                        <input type="text" class="form-control" name="brethren[0][]" id="f-tel-3" placeholder="060-XXX-XXXX" data-error="" required="required">
                                        <span class="form-control-feedback" aria-hidden="true"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row gutters-custom">
                            <div class="col-auto">
                                <div class="row gutters-custom">
                                    <div class="col-auto">
                                        <fieldset>
                                            <legend class="visuallyhidden">{$lang['career']['status:live']}</legend>
                                            <div class="form-group form-check">
                                                <input class="form-check-input radio-check brethren-checking-1" type="radio" name="brethren[0][alive]" id="live-3" value="มีชีวิต" required="required">
                                                <label class="control-label" for="live-3">
                                                    {$lang['career']['status:live']}
                                                </label>
                                            </div>
                                        </fieldset>
                                    </div>
                                    <div class="col-auto">
                                        <fieldset>
                                            <legend class="visuallyhidden">{$lang['career']['status:pass']}</legend>
                                            <div class="form-group form-check">
                                                <input class="form-check-input radio-check brethren-checking-1" type="radio" name="brethren[0][alive]" id="pass-away-3" value="เสียชีวิต" required="required">
                                                <label class="control-label" for="pass-away-3">
                                                    {$lang['career']['status:pass']}
                                                </label>
                                            </div>
                                        </fieldset>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-8 brother-date-1">
                                <div class="row gutters-custom">
                                    <div class="col">
                                        <div class="form-group">
                                            <label class="control-label visuallyhidden" for="brother-day-1">Ex</label>
                                            <div class="select-wrapper select-custom">
                                                <select class="select-control" name="brethren[0][]" id="brother-day-1" style="width: 100%;">
                                                    <option value="">{$lang['career']['day']}</option>
                                                    {for $index2=1 to 31}
                                                        <option value="{if $index < 10}0{/if}{$index2}">{$index2}</option>
                                                    {/for}
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-group">
                                            <label class="control-label visuallyhidden" for="brother-month-1">Ex</label>
                                            <div class="select-wrapper select-custom">
                                                <select class="select-control" name="brethren[0][]" id="brother-month-1" style="width: 100%;">
                                                    <option value="">{$lang['career']['month']}</option>
                                                    {foreach $MonthArray as $keyMonthArray => $valueMonthArray}
                                                        <option value="{$valueMonthArray['number']}">{$valueMonthArray[$LangMonth]}</option>
                                                    {/foreach}
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-group">
                                            <label class="control-label visuallyhidden" for="brother-year-1">Ex</label>
                                            <div class="select-wrapper select-custom">
                                                <select class="select-control" name="brethren[0][]" id="brother-year-1" style="width: 100%;">
                                                    <option value="">{$lang['career']['year']}</option>
                                                    {assign var="current" value="{$Year}"}
                                                    {assign var="currentEN" value="{$YearEn}"}
                                                    {while $current > ($Year - 100)}
                                                        <option value="{$currentEN}">{$current}</option>
                                                        {$current--}
                                                        {$currentEN--}
                                                    {/while}
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- //////////////////////////////// Start Clone Brother /////////////////////////////// -->
                <div id="temp_brethrens">
                    <div class="form-set V d-none">
                        <div class="row align-items-center">
                            <div class="col">
                                <div class="title"> {$lang['career']['sis']}</div>
                            </div>
                            <div class="col-auto">
                                <div class="button">
                                    <a href="javascript:void(0);" class="btn btn-primary clickdel" title="btn btn-primary">
                                        <!-- <span class="feather icon-minus text-white"></span> -->
                                        {$lang['career']['del']}
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="row gutters-custom align-items-end">
                            <div class="col-md">
                                <div class="form-group has-feedback">
                                    <label class="control-label font-size-C" for="f-name-4">{$lang['career']['fname']}</label>
                                    <div class="block-control">
                                        <input type="text" class="form-control" name="brethren[temp][]" id="f-name-4" placeholder="{$lang['career']['fname']}" data-error="">
                                        <span class="form-control-feedback" aria-hidden="true"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md">
                                <div class="row gutters-custom">
                                    <div class="col-md col-sm-6">
                                        <div class="form-group has-feedback">
                                            <label class="control-label font-size-C" for="f-surname-4">{$lang['career']['lname']}</label>
                                            <div class="block-control">
                                                <input type="text" class="form-control" name="brethren[temp][]" id="f-surname-4" placeholder="{$lang['career']['lname']}" data-error="">
                                                <span class="form-control-feedback" aria-hidden="true"></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-sm-6">
                                        <div class="form-group">
                                            <label class="control-label label-custom" for="f-select-day-4-temp">{$lang['career']['date']}</label>
                                            <div class="select-wrapper">
                                                <select class="select-control" name="brethren[temp][]" id="f-select-day-4-temp" style="width: 100%;">
                                                    <option value="">{$lang['career']['day']}</option>
                                                    {for $index=1 to 31}
                                                        <option value="{if $index < 10}0{/if}{$index}">{$index}</option>
                                                    {/for}
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md">
                                <div class="row gutters-custom">
                                    <div class="col-md-5 col-sm-4">
                                        <div class="form-group">
                                            <label class="control-label visuallyhidden" for="f-select-month-4-temp">Ex</label>
                                            <div class="select-wrapper">
                                                <select class="select-control" name="brethren[temp][]" id="f-select-month-4-temp" style="width: 100%;">
                                                    <option value="">{$lang['career']['month']}</option>
                                                    {foreach $MonthArray as $keyMonthArray => $valueMonthArray}
                                                        <option value="{$valueMonthArray['number']}">{$valueMonthArray[$LangMonth]}</option>
                                                    {/foreach}
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md col-sm-4">
                                        <div class="form-group">
                                            <label class="control-label visuallyhidden" for="f-select-year-4-temp">Ex</label>
                                            <div class="select-wrapper">
                                                <select class="select-control" name="brethren[temp][]" id="f-select-year-4-temp" style="width: 100%;">
                                                    <option value="">{$lang['career']['year']}</option>
                                                    {assign var="current" value="{$Year}"}
                                                    {assign var="currentEN" value="{$YearEn}"}
                                                    {while $current > ($Year - 100)}
                                                        <option value="{$currentEN}">{$current}</option>
                                                        {$current--}
                                                        {$currentEN--}
                                                    {/while}
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md col-sm-4">
                                        <div class="form-group has-feedback">
                                            <label class="control-label visuallyhidden" for="f-age-4">Ex</label>
                                            <div class="block-control">
                                                <input type="number" class="form-control text-center" name="brethren[temp][]" id="f-age-4" placeholder="35" data-error="">
                                                <span class="form-control-feedback" aria-hidden="true"></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row gutters-custom">
                            <div class="col-sm">
                                <div class="form-group has-feedback">
                                    <label class="control-label font-size-C" for="f-relations-4">{$lang['career']['relation']}</label>
                                    <div class="block-control">
                                        <input type="text" class="form-control" name="brethren[temp][]" id="f-relations-4" placeholder="{$lang['career']['relation']}" data-error="">
                                        <span class="form-control-feedback" aria-hidden="true"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm">
                                <div class="form-group has-feedback">
                                    <label class="control-label font-size-C" for="f-address-workplace-4">{$lang['career']['addresswork']}</label>
                                    <div class="block-control">
                                        <input type="text" class="form-control" name="brethren[temp][]" id="f-address-workplace-4" placeholder="{$lang['career']['addresswork']}" data-error="">
                                        <span class="form-control-feedback" aria-hidden="true"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm">
                                <div class="form-group has-feedback">
                                    <label class="control-label" for="f-tel-4">{$lang['career']['phone']}</label>
                                    <div class="block-control">
                                        <input type="text" class="form-control" name="brethren[temp][]" id="f-tel-4" placeholder="060-XXX-XXXX" data-error="">
                                        <span class="form-control-feedback" aria-hidden="true"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row gutters-custom">
                            <div class="col-auto">
                                <div class="row gutters-custom">
                                    <div class="col-auto">
                                        <fieldset>
                                            <legend class="visuallyhidden">{$lang['career']['status:live']}</legend>
                                            <div class="form-group form-check">
                                                <input class="form-check-input radio-check" onclick="swap(this)" type="radio" name="brethren[temp][alive]" id="live-4" value="มีชีวิต">
                                                <label class="control-label" for="live-4">
                                                    {$lang['career']['status:live']}
                                                </label>
                                            </div>
                                        </fieldset>
                                    </div>
                                    <div class="col-auto">
                                        <fieldset>
                                            <legend class="visuallyhidden">{$lang['career']['status:pass']}</legend>
                                            <div class="form-group form-check">
                                                <input class="form-check-input radio-check" onclick="swap(this)" type="radio" name="brethren[temp][alive]" id="pass-away-4" value="เสียชีวิต" checked>
                                                <label class="control-label" for="pass-away-4">
                                                    {$lang['career']['status:pass']}
                                                </label>
                                            </div>
                                        </fieldset>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-8 borther-date">
                                <div class="row gutters-custom">
                                    <div class="col">
                                        <div class="form-group">
                                            <label class="control-label visuallyhidden" for="fc-select-day-4-temp">Ex</label>
                                            <div class="select-wrapper select-custom">
                                                <select class="select-control select-day" name="brethren[temp][]" id="fc-select-day-4-temp" style="width: 100%;">
                                                    <option value="">{$lang['career']['day']}</option>
                                                    {for $index=1 to 31}
                                                        <option value="{if $index < 10}0{/if}{$index}">{$index}</option>
                                                    {/for}
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-group">
                                            <label class="control-label visuallyhidden" for="fc-select-month-4-temp">Ex</label>
                                            <div class="select-wrapper select-custom">
                                                <select class="select-control select-month" name="brethren[temp][]" id="fc-select-month-4-temp" style="width: 100%;">
                                                    <option value="">{$lang['career']['month']}</option>
                                                    {foreach $MonthArray as $keyMonthArray => $valueMonthArray}
                                                        <option value="{$valueMonthArray['number']}">{$valueMonthArray[$LangMonth]}</option>
                                                    {/foreach}
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-group">
                                            <label class="control-label visuallyhidden" for="fc-select-year-4-temp">Ex</label>
                                            <div class="select-wrapper select-custom">
                                                <select class="select-control select-year" name="brethren[temp][]" id="fc-select-year-4-temp" style="width: 100%;">
                                                    <option value="">{$lang['career']['year']}</option>
                                                    {assign var="current" value="{$Year}"}
                                                    {assign var="currentEN" value="{$YearEn}"}
                                                    {while $current > ($Year - 100)}
                                                        <option value="{$currentEN}">{$current}</option>
                                                        {$current--}
                                                        {$currentEN--}
                                                    {/while}
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--//////////////////////////////// End Clone Brother /////////////////////////////// -->

                <div class="brethren">

                </div>
            </div>
            {* start Education *}
            <div class="form-default form-history">
                <div class="row gutters-custom align-items-center">
                    <div class="col-sm">
                        <div class="title">{$lang['career']['educat']} <span>*</span></div>
                    </div>
                    <div class="col-sm-auto text-right">
                        <div class="button">
                            <a href="javascript:void(0);" class="btn btn-primary clickdel_educational" data-action="adds" title="btn btn-primary">
                                <span class="feather icon-plus text-white"></span>
                                {$lang["career"]["addedu"]}
                            </a>
                        </div>
                    </div>
                </div>

                <div class="row gutters-custom align-items-end">
                    <div class="col-sm">
                        <div class="form-group">
                            <label class="control-label font-size-C label-custom" for="education-level">{$lang['career']['educat1']}</label>
                            <div class="select-wrapper">
                                <select class="select-control" name="education[0][]" id="education-level" style="width: 100%;" required="required">
                                    <option value="">{$lang["career"]["edu"]}</option>
                                    <option value="{$lang["career"]["secondary"]}">{$lang["career"]["secondary"]}</option>
                                    <option value="{$lang["career"]["highschool"]}">{$lang["career"]["highschool"]}</option>
                                    <option value="{$lang["career"]["vocational"]}">{$lang["career"]["vocational"]}</option>
                                    <option value="{$lang["career"]["diploma"]}">{$lang["career"]["diploma"]}</option>
                                    <option value="{$lang["career"]["bachelor"]}">{$lang["career"]["bachelor"]}</option>
                                    <option value="{$lang["career"]["master"]}">{$lang["career"]["master"]}</option>
                                    <option value="{$lang["career"]["phd"]}">{$lang["career"]["phd"]}</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm">
                        <div class="form-group has-feedback">
                            <label class="control-label visuallyhidden" for="academy-name">{$lang['career']['educat2']}</label>
                            <div class="block-control">
                                <input type="text" class="form-control" name="education[0][]" id="academy-name" placeholder="{$lang['career']['educat2']}" data-error="" required="required">
                                <span class="form-control-feedback" aria-hidden="true"></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm">
                        <div class="form-group has-feedback">
                            <label class="control-label visuallyhidden" for="you-are-someone-who-2">{$lang['career']['whoyou2']}</label>
                            <div class="block-control">
                                <input type="text" class="form-control" name="education[0][]" id="you-are-someone-who-2" placeholder="{$lang['career']['whoyou2']}" data-error="" required="required">
                                <span class="form-control-feedback" aria-hidden="true"></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row gutters-custom">
                    <div class="col-md-4 col-sm-6">
                        <div class="form-group has-feedback">
                            <label class="control-label visuallyhidden" for="majors">{$lang['career']['educat3']}</label>
                            <div class="block-control">
                                <input type="text" class="form-control" name="education[0][]" id="majors" placeholder="{$lang['career']['educat3']}" data-error="" required="required">
                                <span class="form-control-feedback" aria-hidden="true"></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="form-group has-feedback">
                            <label class="control-label visuallyhidden" for="educational-background">{$lang['career']['educat']}</label>
                            <div class="block-control">
                                <input type="text" class="form-control" name="education[0][]" id="educational-background" placeholder="{$lang['career']['educat']}" data-error="" required="required">
                                <span class="form-control-feedback" aria-hidden="true"></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row gutters-custom">
                    <div class="col-md-4 col-sm-6">
                        <div class="row gutters-custom">
                            <div class="col-sm">
                                <div class="form-group">
                                    <label class="control-label label-custom visuallyhidden" for="chengeemount">{$lang['career']['educat6']}</label>
                                    <div class="select-wrapper">
                                    {$date = date('Y')}
                                    {$dateNow = date('Y') - 10}
                                        <select class="select-control" name="education[0][]" id="chengeemount" style="width: 100%;" required="required">
                                            <option value="">{$lang['career']['educat6']}</option>
                                            {for $i=$date to $dateNow step=-1}
                                                {if $langon == 'th'}
                                                    <option value="{$i+543}">{$i+543}</option>
                                                {else}
                                                    <option value="{$i}">{$i}</option>
                                                {/if}
                                            {/for}
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm">
                                <div class="form-group">
                                    <label class="control-label label-custom visuallyhidden" for="chengeeyear">{$lang['career']['educat7']}</label>
                                    <div class="select-wrapper">
                                        <select class="select-control" name="education[0][]" id="chengeeyear" style="width: 100%;" required="required">
                                            {for $i=$date to $dateNow step=-1}
                                                {if $langon == 'th'}
                                                    <option value="{$i+543}">{$i+543}</option>
                                                {else}
                                                    <option value="{$i}">{$i}</option>
                                                {/if}
                                            {/for}
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="row gutters-custom">
                            <div class="col">
                                <div class="form-group has-feedback">
                                    <label class="control-label visuallyhidden" for="average-score">{$lang['career']['educat5']}</label>
                                    <div class="block-control">
                                        <input type="text" class="form-control" name="education[0][]" id="average-score" placeholder="{$lang['career']['educat5']}" data-error="" required="required">
                                        <span class="form-control-feedback" aria-hidden="true"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--//////////////////////////////// Start Clone Education /////////////////////////////// -->
                <div class="d-none mt-3 ele_edu" id="clone_educational">
                    <div class="row align-items-center">
                        <!-- <div class="col">
                            <div class="title"> </div>
                        </div> -->
                        <div class="col text-right">
                            <div class="button">
                                <a href="javascript:void(0);" class="btn btn-primary clickdel_educational" data-action="del" title="btn btn-primary">
                                    <!-- <span class="feather icon-minus text-white"></span> -->
                                    {$lang['career']['del']}
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="row gutters-custom align-items-end">
                        <div class="col-sm">
                            <div class="form-group">
                                <label class="control-label font-size-C" for="education-level-2">{$lang['career']['educat1']}</label>
                                <div class="select-wrapper">
                                    <select class="select-control" name="education[tmp][]" id="education-level-2" style="width: 100%;">
                                        <option value="">{$lang["career"]["edu"]}</option>
                                        <option value="{$lang["career"]["secondary"]}">{$lang["career"]["secondary"]}</option>
                                        <option value="{$lang["career"]["highschool"]}">{$lang["career"]["highschool"]}</option>
                                        <option value="{$lang["career"]["vocational"]}">{$lang["career"]["vocational"]}</option>
                                        <option value="{$lang["career"]["diploma"]}">{$lang["career"]["diploma"]}</option>
                                        <option value="{$lang["career"]["bachelor"]}">{$lang["career"]["bachelor"]}</option>
                                        <option value="{$lang["career"]["master"]}">{$lang["career"]["master"]}</option>
                                        <option value="{$lang["career"]["phd"]}">{$lang["career"]["phd"]}</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm">
                            <div class="form-group has-feedback">
                                <label class="control-label visuallyhidden" for="academy-name-2">{$lang['career']['educat2']}</label>
                                <div class="block-control">
                                    <input type="text" class="form-control" name="education[tmp][]" id="academy-name-2" placeholder="{$lang['career']['educat2']}" data-error="">
                                    <span class="form-control-feedback" aria-hidden="true"></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm">
                            <div class="form-group has-feedback">
                                <label class="control-label visuallyhidden" for="you-are-someone-who-3">{$lang['career']['whoyou2']}</label>
                                <div class="block-control">
                                    <input type="text" class="form-control" name="education[tmp][]" id="you-are-someone-who-3" placeholder="{$lang['career']['whoyou2']}" data-error="">
                                    <span class="form-control-feedback" aria-hidden="true"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row gutters-custom">
                        <div class="col-md-4 col-sm-6">
                            <div class="form-group has-feedback">
                                <label class="control-label visuallyhidden" for="majors-2">{$lang['career']['educat3']}</label>
                                <div class="block-control">
                                    <input type="text" class="form-control" name="education[tmp][]" id="majors-2" placeholder="{$lang['career']['educat3']}" data-error="">
                                    <span class="form-control-feedback" aria-hidden="true"></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="form-group has-feedback">
                                <label class="control-label visuallyhidden" for="educational-background-2">{$lang['career']['educat']}</label>
                                <div class="block-control">
                                    <input type="text" class="form-control" name="education[tmp][]" id="educational-background-2" placeholder="{$lang['career']['educat']}" data-error="">
                                    <span class="form-control-feedback" aria-hidden="true"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row gutters-custom">
                        <div class="col-md-4 col-sm-6">
                            <div class="row gutters-custom">
                                <div class="col-sm">
                                    <div class="form-group">
                                        <label class="control-label label-custom visuallyhidden" for="since-year-3">{$lang['career']['educat6']}</label>
                                        <div class="select-wrapper">
                                        {$date = date('Y')}
                                        {$dateNow = date('Y') - 10}
                                            <select class="select-control" name="education[tmp][]" id="since-year-3" style="width: 100%;">
                                                <option value="">{$lang['career']['educat6']}</option>
                                                {for $i=$date to $dateNow step=-1}
                                                    {if $langon == 'th'}
                                                        <option value="{$i+543}">{$i+543}</option>
                                                    {else}
                                                        <option value="{$i}">{$i}</option>
                                                    {/if}
                                                {/for}
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm">
                                    <div class="form-group">
                                        <label class="control-label label-custom visuallyhidden" for="to-year-3">{$lang['career']['educat7']}</label>
                                        <div class="select-wrapper">
                                            <select class="select-control" name="education[tmp][]" id="to-year-3" style="width: 100%;">
                                                {for $i=$date to $dateNow step=-1}
                                                    {if $langon == 'th'}
                                                        <option value="{$i+543}">{$i+543}</option>
                                                    {else}
                                                        <option value="{$i}">{$i}</option>
                                                    {/if}
                                                {/for}
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="row gutters-custom">
                                <div class="col">
                                    <div class="form-group has-feedback">
                                        <label class="control-label visuallyhidden" for="average-score-2">{$lang['career']['educat5']}</label>
                                        <div class="block-control">
                                            <input type="text" class="form-control" name="education[tmp][]" id="average-score-2" placeholder="{$lang['career']['educat5']}" data-error="">
                                            <span class="form-control-feedback" aria-hidden="true"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--//////////////////////////////// End Clone Education /////////////////////////////// -->

                <div class="educational">

                </div>
            </div>
            {* End Education *}

            {* Start Traing *}
            <div class="form-default form-history">
                <div class="row gutters-custom align-items-center">
                    <div class="col">
                        <div class="title">{$lang['career']['tran']}<span>*</span></div>
                    </div>
                    <div class="col-sm-auto">
                        <div class="button ">
                            <a href="javascript:void(0);" class="btn btn-primary clickdel_training" data-action="adds" title="btn btn-primary">
                                <span class="feather icon-plus text-white"></span>
                                {$lang["career"]["addedu"]}
                            </a>
                        </div>
                    </div>
                </div>
                <div class="row gutters-custom align-items-end">
                    <div class="col-sm">
                        <div class="form-group has-feedback">
                            <label class="control-label font-size-C" for="course">{$lang['career']['tran2']}</label>
                            <div class="block-control">
                                <input type="text" class="form-control" name="training[0][]" id="course" placeholder="{$lang['career']['tran2']}" data-error="" required="required">
                                <span class="form-control-feedback" aria-hidden="true"></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm">
                        <div class="form-group has-feedback">
                            <label class="control-label visuallyhidden" for="institute">{$lang['career']['tran1']}</label>
                            <div class="block-control">
                                <input type="text" class="form-control" name="training[0][]" id="institute" placeholder="{$lang['career']['tran1']}" data-error="" required="required">
                                <span class="form-control-feedback" aria-hidden="true"></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm">
                        <div class="form-group has-feedback">
                            <label class="control-label visuallyhidden" for="degree-certificate">{$lang['career']['tran3']}</label>
                            <div class="block-control">
                                <input type="text" class="form-control" name="training[0][]" id="degree-certificate" placeholder="{$lang['career']['tran3']}" data-error="" required="required">
                                <span class="form-control-feedback" aria-hidden="true"></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row gutters-custom">
                    <div class="col-md-4 col-sm-6">
                        <div class="row gutters-custom">
                            <div class="col">
                                <div class="form-group has-feedback">
                                    <label class="control-label visuallyhidden" for="period">{$lang['career']['tran4']}</label>
                                    <div class="block-control">
                                        <input type="text" class="form-control" name="training[0][]" id="period" placeholder="{$lang['career']['tran4']}" data-error="" required="required">
                                        <span class="form-control-feedback" aria-hidden="true"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="row gutters-custom">
                            <div class="col-sm">
                                <div class="form-group">
                                    <label class="control-label label-custom visuallyhidden" for="chengeemount-2">{$lang['career']['educat6']}</label>
                                    <div class="select-wrapper">
                                    {$date = date('Y')}
                                    {$dateNow = date('Y') - 10}
                                        <select class="select-control" name="training[0][]" id="chengeemount-2" style="width: 100%;" required="required">
                                            <option value="">{$lang['career']['educat6']}</option>
                                            {for $i=$date to $dateNow step=-1}
                                                {if $langon == 'th'}
                                                    <option value="{$i+543}">{$i+543}</option>
                                                {else}
                                                    <option value="{$i}">{$i}</option>
                                                {/if}
                                            {/for}
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm">
                                <div class="form-group">
                                    <label class="control-label label-custom visuallyhidden" for="chengeeyear-2">{$lang['career']['educat7']} </label>
                                    <div class="select-wrapper">
                                        <select class="select-control" name="training[0][]" id="chengeeyear-2" style="width: 100%;" required="required">
                                            {for $i=$date to $dateNow step=-1}
                                                {if $langon == 'th'}
                                                    <option value="{$i+543}">{$i+543}</option>
                                                {else}
                                                    <option value="{$i}">{$i}</option>
                                                {/if}
                                            {/for}
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--//////////////////////////////// Start Clone Training /////////////////////////////// -->
                <div class="d-none mt-3" id="clone_training">
                    <div class="row align-items-center">
                        <!-- <div class="col">
                            <div class="title"> </div>
                        </div> -->
                        <div class="col text-right">
                            <div class="button">
                                <a href="javascript:void(0);" class="btn btn-primary clickdel_training" data-action="dels" title="btn btn-primary">
                                    <!-- <span class="feather icon-minus text-white"></span> -->
                                    {$lang['career']['del']}
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="row gutters-custom align-items-end">
                        <div class="col-sm">
                            <div class="form-group has-feedback">
                                <label class="control-label font-size-C" for="course-2">{$lang['career']['tran2']}</label>
                                <div class="block-control">
                                    <input type="text" class="form-control" name="training[tmp][]" id="course-2" placeholder="{$lang['career']['tran2']}" data-error="">
                                    <span class="form-control-feedback" aria-hidden="true"></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm">
                            <div class="form-group has-feedback">
                                <label class="control-label visuallyhidden" for="institute-2">{$lang['career']['tran1']}</label>
                                <div class="block-control">
                                    <input type="text" class="form-control" name="training[tmp][]" id="institute-2" placeholder="{$lang['career']['tran1']}" data-error="">
                                    <span class="form-control-feedback" aria-hidden="true"></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm">
                            <div class="form-group has-feedback">
                                <label class="control-label visuallyhidden" for="degree-certificate-2">{$lang['career']['tran3']}</label>
                                <div class="block-control">
                                    <input type="text" class="form-control" name="training[tmp][]" id="degree-certificate-2" placeholder="{$lang['career']['tran3']}" data-error="">
                                    <span class="form-control-feedback" aria-hidden="true"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row gutters-custom">
                        <div class="col-md-4 col-sm-6">
                            <div class="row gutters-custom">
                                <div class="col">
                                    <div class="form-group has-feedback">
                                        <label class="control-label visuallyhidden" for="period-2">{$lang['career']['tran4']}</label>
                                        <div class="block-control">
                                            <input type="text" class="form-control" name="training[tmp][]" id="period-2" placeholder="{$lang['career']['tran4']}" data-error="">
                                            <span class="form-control-feedback" aria-hidden="true"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="row gutters-custom">
                                <div class="col-sm">
                                    <div class="form-group">
                                        <label class="control-label label-custom visuallyhidden" for="since-year-4">{$lang['career']['educat6']}</label>
                                        <div class="select-wrapper">
                                            <select class="select-control" name="training[tmp][]" id="since-year-4" style="width: 100%;">
                                                <option value="">{$lang['career']['educat6']}</option>
                                                {for $i=$date to $dateNow step=-1}
                                                    {if $langon == 'th'}
                                                        <option value="{$i+543}">{$i+543}</option>
                                                    {else}
                                                        <option value="{$i}">{$i}</option>
                                                    {/if}
                                                {/for}
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm">
                                    <div class="form-group">
                                        <label class="control-label label-custom visuallyhidden" for="to-year-4">{$lang['career']['educat7']} </label>
                                        <div class="select-wrapper">
                                            <select class="select-control" name="training[tmp][]" id="to-year-4" style="width: 100%;">
                                                {for $i=$date to $dateNow step=-1}
                                                    {if $langon == 'th'}
                                                        <option value="{$i+543}">{$i+543}</option>
                                                    {else}
                                                        <option value="{$i}">{$i}</option>
                                                    {/if}
                                                {/for}
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--//////////////////////////////// End Clone Training /////////////////////////////// -->

                <div class="training">

                </div>
            </div>
            {* End Traing *}

            {* Start Works *}
            <div class="form-default form-history">
                <div class="row gutters-custom align-items-center">
                    <div class="col-sm">
                        <div class="title">{$lang['career']['work']}
                        </div>
                    </div>
                    <div class="col-sm-auto">
                        <div class="button ">
                            <a href="javascript:void(0);" class="btn btn-primary clickdel_works" data-action="adds" title="btn btn-primary">
                                <span class="feather icon-plus text-white"></span>
                                {$lang["career"]["addedu"]}
                            </a>
                        </div>
                    </div>
                </div>
                <div class="row gutters-custom align-items-end">
                    <div class="col-md col-sm-auto">
                        <div class="form-group has-feedback">
                            <label class="control-label font-size-C" for="company-name">1. {$lang['career']['company_name']}</label>
                            <div class="block-control">
                                <input type="text" class="form-control" name="workhistory[0][]" id="company-name" placeholder="{$lang['career']['company_name']}" data-error="" required="required">
                                <span class="form-control-feedback" aria-hidden="true"></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md col-sm-auto">
                        <div class="form-group has-feedback">
                            <label class="control-label visuallyhidden" for="type-of-business">{$lang['career']['typebussiness']}</label>
                            <div class="block-control">
                                <input type="text" class="form-control" name="workhistory[0][]" id="type-of-business" placeholder="{$lang['career']['typebussiness']}" data-error="" required="required">
                                <span class="form-control-feedback" aria-hidden="true"></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md col-sm-auto">
                        <div class="form-group has-feedback">
                            <label class="control-label visuallyhidden" for="c-address">{$lang['system']['address']}</label>
                            <div class="block-control">
                                <input type="text" class="form-control" name="workhistory[0][]" id="c-address" placeholder="{$lang['system']['address']}" data-error="" required="required">
                                <span class="form-control-feedback" aria-hidden="true"></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md col-sm-auto">
                        <div class="form-group has-feedback">
                            <label class="control-label visuallyhidden" for="c-telephone">{$lang['career']['ref4']}</label>
                            <div class="block-control">
                                <input type="text" class="form-control" name="workhistory[0][]" id="c-telephone" placeholder="{$lang['career']['ref4']}" data-error="" required="required">
                                <span class="form-control-feedback" aria-hidden="true"></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row gutters-custom">
                    <div class="col-md col-sm-auto">
                        <div class="form-group has-feedback">
                            <label class="control-label visuallyhidden" for="first-position">{$lang['career']['fpos']}</label>
                            <div class="block-control">
                                <input type="text" class="form-control" name="workhistory[0][]" id="first-position" placeholder="{$lang['career']['fpos']}" data-error="" required="required">
                                <span class="form-control-feedback" aria-hidden="true"></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md col-sm-auto">
                        <div class="form-group has-feedback">
                            <label class="control-label visuallyhidden" for="last-position">{$lang['career']['lpos']}</label>
                            <div class="block-control">
                                <input type="text" class="form-control" name="workhistory[0][]" id="last-position" placeholder="{$lang['career']['lpos']}" data-error="" required="required">
                                <span class="form-control-feedback" aria-hidden="true"></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md col-sm-auto">
                        <div class="form-group has-feedback">
                            <label class="control-label visuallyhidden" for="last-salary">{$lang['career']['lsalary']}</label>
                            <div class="block-control">
                                <input type="text" class="form-control" name="workhistory[0][]" id="last-salary" placeholder="{$lang['career']['lsalary']}" data-error="" required="required">
                                <span class="form-control-feedback" aria-hidden="true"></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md col-sm-auto">
                        <div class="form-group has-feedback">
                            <label class="control-label visuallyhidden" for="other-salary">{$lang['career']['osalary']}</label>
                            <div class="block-control">
                                <input type="text" class="form-control" name="workhistory[0][]" id="other-salary" placeholder="{$lang['career']['osalary']}" data-error="" required="required">
                                <span class="form-control-feedback" aria-hidden="true"></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row gutters-custom mt-2">
                    <div class="col">
                        <div class="form-group has-feedback">
                            <label class="control-label font-size-C" for="brief-responsibility">{$lang['career']['briefres']}</label>
                            <div class="block-control">
                                <input type="text" class="form-control" name="workhistory[0][]" id="brief-responsibility" placeholder="{$lang['career']['briefres']}" data-error="" required="required">
                                <span class="form-control-feedback" aria-hidden="true"></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row gutters-custom">
                    <div class="col-md-3 col-sm-6">
                        <div class="row gutters-custom">
                            <div class="col">
                                <div class="form-group has-feedback">
                                    <label class="control-label visuallyhidden" for="c-period">{$lang['career']['tran4']}</label>
                                    <div class="block-control">
                                        <input type="text" class="form-control" name="workhistory[0][]" id="c-period" placeholder="{$lang['career']['tran4']}" data-error="" required="required">
                                        <span class="form-control-feedback" aria-hidden="true"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="row gutters-custom align-items-center">
                            <div class="col">
                                <div class="form-group has-feedback">
                                    <label class="control-label visuallyhidden" for="c-start-date">{$lang['career']['scareer']}</label>
                                    <div class="block-control">
                                    <input type="date" class="form-control" name="workhistory[0][]" id="c-start-date" placeholder="วันเริ่มงาน"
                                        data-error="" required="required">
                                    <span class="form-control-feedback" aria-hidden="true"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-auto">
                                <div class="txt">
                                    {$lang['career']['to']}
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group has-feedback">
                                    <label class="control-label visuallyhidden" for="c-end-date">{$lang['career']['ecareer']}</label>
                                    <div class="block-control">
                                    <input type="date" class="form-control" name="workhistory[0][]" id="c-end-date" placeholder="สิ้นสุดวันที่"
                                        data-error="" required="required">
                                    <span class="form-control-feedback" aria-hidden="true"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--//////////////////////////////// Start Clone Works /////////////////////////////// -->
                <div class="d-none mt-3" id="clone_works">
                    <div class="row align-items-center">
                        <!-- <div class="col">
                            <div class="title"> </div>
                        </div> -->
                        <div class="col text-right">
                            <div class="button delete-form-4">
                                <a href="javascript:void(0);" class="btn btn-primary clickdel_works" data-action="adds" title="btn btn-primary">
                                    <!-- <span class="feather icon-minus text-white"></span> -->
                                    {$lang['career']['del']}
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="row gutters-custom align-items-end">
                        <div class="col-md col-sm-auto">
                            <div class="form-group has-feedback">
                                <label class="control-label font-size-C -title" for="company-name-2">2. {$lang['career']['company_name']}</label>
                                <div class="block-control">
                                    <input type="text" class="form-control" name="workhistory[tmp][]" id="company-name-2" placeholder="{$lang['career']['company_name']}" data-error="">
                                    <span class="form-control-feedback" aria-hidden="true"></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md col-sm-auto">
                            <div class="form-group has-feedback">
                                <label class="control-label visuallyhidden" for="type-of-business-2">{$lang['career']['typebussiness']}</label>
                                <div class="block-control">
                                    <input type="text" class="form-control" name="workhistory[tmp][]" id="type-of-business-2" placeholder="{$lang['career']['typebussiness']}" data-error="">
                                    <span class="form-control-feedback" aria-hidden="true"></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md col-sm-auto">
                            <div class="form-group has-feedback">
                                <label class="control-label visuallyhidden" for="c-address-2">{$lang['system']['address']}</label>
                                <div class="block-control">
                                    <input type="text" class="form-control" name="workhistory[tmp][]" id="c-address-2" placeholder="{$lang['system']['address']}" data-error="">
                                    <span class="form-control-feedback" aria-hidden="true"></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md col-sm-auto">
                            <div class="form-group has-feedback">
                                <label class="control-label visuallyhidden" for="c-telephone-2">{$lang['career']['ref4']}</label>
                                <div class="block-control">
                                    <input type="text" class="form-control" name="workhistory[tmp][]" id="c-telephone-2" placeholder="{$lang['career']['ref4']}" data-error="">
                                    <span class="form-control-feedback" aria-hidden="true"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row gutters-custom">
                        <div class="col-md col-sm-auto">
                            <div class="form-group has-feedback">
                                <label class="control-label visuallyhidden" for="first-position-2">{$lang['career']['fpos']}</label>
                                <div class="block-control">
                                    <input type="text" class="form-control" name="workhistory[tmp][]" id="first-position-2" placeholder="{$lang['career']['fpos']}" data-error="">
                                    <span class="form-control-feedback" aria-hidden="true"></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md col-sm-auto">
                            <div class="form-group has-feedback">
                                <label class="control-label visuallyhidden" for="last-position-2">{$lang['career']['lpos']}</label>
                                <div class="block-control">
                                    <input type="text" class="form-control" name="workhistory[tmp][]" id="last-position-2" placeholder="ตำแหน่งแรกเข้า / Last Position" data-error="">
                                    <span class="form-control-feedback" aria-hidden="true"></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md col-sm-auto">
                            <div class="form-group has-feedback">
                                <label class="control-label visuallyhidden" for="last-salary-2">{$lang['career']['lsalary']}</label>
                                <div class="block-control">
                                    <input type="text" class="form-control" name="workhistory[tmp][]" id="last-salary-2" placeholder="{$lang['career']['lsalary']}" data-error="">
                                    <span class="form-control-feedback" aria-hidden="true"></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md col-sm-auto">
                            <div class="form-group has-feedback">
                                <label class="control-label visuallyhidden" for="other-salary-2">{$lang['career']['osalary']}</label>
                                <div class="block-control">
                                    <input type="text" class="form-control" name="workhistory[tmp][]" id="other-salary-2" placeholder="{$lang['career']['osalary']}" data-error="">
                                    <span class="form-control-feedback" aria-hidden="true"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row gutters-custom mt-2">
                        <div class="col">
                            <div class="form-group has-feedback">
                                <label class="control-label font-size-C" for="brief-responsibility-2">{$lang['career']['briefres']}</label>
                                <div class="block-control">
                                    <input type="text" class="form-control" name="workhistory[tmp][]" id="brief-responsibility-2" placeholder="{$lang['career']['briefres']}" data-error="">
                                    <span class="form-control-feedback" aria-hidden="true"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row gutters-custom">
                        <div class="col-md-3 col-sm-6">
                            <div class="row gutters-custom">
                                <div class="col">
                                    <div class="form-group has-feedback">
                                        <label class="control-label visuallyhidden" for="c-period-2">{$lang['career']['tran4']}</label>
                                        <div class="block-control">
                                            <input type="text" class="form-control" name="workhistory[tmp][]" id="c-period-2" placeholder="{$lang['career']['tran4']}" data-error="">
                                            <span class="form-control-feedback" aria-hidden="true"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="row gutters-custom align-items-center">
                                <div class="col">
                                    <div class="form-group has-feedback">
                                        <label class="control-label visuallyhidden" for="c-start-date">{$lang['career']['scareer']}</label>
                                        <div class="block-control">
                                        <input type="date" class="form-control" name="workhistory[tmp][]" id="c-start-date" placeholder="วันเริ่มงาน"
                                            data-error="">
                                        <span class="form-control-feedback" aria-hidden="true"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-auto">
                                    <div class="txt">
                                        {$lang['career']['to']}
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group has-feedback">
                                        <label class="control-label visuallyhidden" for="c-end-date">{$lang['career']['ecareer']}</label>
                                        <div class="block-control">
                                        <input type="date" class="form-control" name="workhistory[tmp][]" id="c-end-date" placeholder="สิ้นสุดวันที่"
                                            data-error="">
                                        <span class="form-control-feedback" aria-hidden="true"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--//////////////////////////////// End Clone Works /////////////////////////////// -->
                <div class="working">

                </div>
            </div>
            {* End Works *}

            {* Start Language *}
            <div class="form-default form-history">
                <div class="title">{$lang['career']['tran']} <span>*</span></div>
                <div class="row gutters-custom align-items-center py-sm-4">
                    <div class="col-sm">
                        <div class="topic">{$lang['career']['lang']}</div>
                    </div>
                    <div class="col-sm-auto">
                        <div class="button ">
                            <a href="javascript:void(0);" class="btn btn-primary clickdel_language" data-action="adds" title="btn btn-primary">
                                <span class="feather icon-plus text-white"></span>
                                {$lang["career"]["addedu"]}
                            </a>
                        </div>
                    </div>
                </div>
                <div class="row gutters-custom">
                    <div class="col-sm">
                        <div class="form-group">
                            <label class="control-label font-size-C" for="l-english">{$lang['career']['elang']}</label>
                            <div class="select-wrapper">
                                <select class="select-control" name="language[0][]" id="l-english" style="width: 100%;">
                                    <option value="{$lang["career"]["langeng"]}" selected="">{$lang["career"]["langeng"]}</option>
                                    <option value="{$lang["career"]["langthai"]}">{$lang["career"]["langthai"]}</option>
                                    <option value="{$lang["career"]["langchi"]}">{$lang["career"]["langchi"]}</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm">
                        <div class="form-group">
                            <label class="control-label font-size-C" for="e-excellent-1">{$lang['career']['lang2']}</label>
                            <div class="select-wrapper">
                                <select class="select-control" name="language[0][]" id="e-excellent-1" style="width: 100%;">
                                    <option value="{$lang['career']['best']}" selected="">{$lang['career']['best']}</option>
                                    <option value="{$lang['career']['good']}">{$lang['career']['good']}</option>
                                    <option value="{$lang['career']['mediem']}">{$lang['career']['mediem']}</option>
                                    <option value="{$lang['career']['bad']}">{$lang['career']['bad']}</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm">
                        <div class="form-group">
                            <label class="control-label font-size-C" for="e-excellent-2">{$lang['career']['lang4']}</label>
                            <div class="select-wrapper">
                                <select class="select-control" name="language[0][]" id="e-excellent-2" style="width: 100%;">
                                    <option value="{$lang['career']['best']}" selected="">{$lang['career']['best']}</option>
                                    <option value="{$lang['career']['good']}">{$lang['career']['good']}</option>
                                    <option value="{$lang['career']['mediem']}">{$lang['career']['mediem']}</option>
                                    <option value="{$lang['career']['bad']}">{$lang['career']['bad']}</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm">
                        <div class="form-group">
                            <label class="control-label font-size-C" for="e-excellent-3">{$lang['career']['lang3']}</label>
                            <div class="select-wrapper">
                                <select class="select-control" name="language[0][]" id="e-excellent-3" style="width: 100%;">
                                    <option value="{$lang['career']['best']}" selected="">{$lang['career']['best']}</option>
                                    <option value="{$lang['career']['good']}">{$lang['career']['good']}</option>
                                    <option value="{$lang['career']['mediem']}">{$lang['career']['mediem']}</option>
                                    <option value="{$lang['career']['bad']}">{$lang['career']['bad']}</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <!--//////////////////////////////// Start Clone Language /////////////////////////////// -->
                <div class="d-none mt-3" id="clone_language">
                    <div class="row align-items-center">
                        <!-- <div class="col">
                            <div class="title"> </div>
                        </div> -->
                        <div class="col text-right">
                            <div class="button delete-form-5">
                                <a href="javascript:void(0);" class="btn btn-primary clickdel_language" data-action="dels" title="btn btn-primary">
                                    <!-- <span class="feather icon-minus text-white"></span> -->
                                    {$lang['career']['del']}
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="row gutters-custom">
                        <div class="col-sm">
                            <div class="form-group">
                                <label class="control-label visuallyhidden" for="l-china">{$lang['career']['clang']}</label>
                                <div class="select-wrapper">
                                    <select class="select-control" name="language[tmp][]" id="l-china" style="width: 100%;">
                                        <option value="{$lang["career"]["langeng"]}" selected="">{$lang["career"]["langeng"]}</option>
                                        <option value="{$lang["career"]["langthai"]}">{$lang["career"]["langthai"]}</option>
                                        <option value="{$lang["career"]["langchi"]}">{$lang["career"]["langchi"]}</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm">
                            <div class="form-group">
                                <label class="control-label visuallyhidden" for="c-excellent-1">{$lang['career']['lang2']}</label>
                                <div class="select-wrapper">
                                    <select class="select-control" name="language[tmp][]" id="c-excellent-1" style="width: 100%;">
                                        <option value="{$lang['career']['best']}" selected="">{$lang['career']['best']}</option>
                                        <option value="{$lang['career']['good']}">{$lang['career']['good']}</option>
                                        <option value="{$lang['career']['mediem']}">{$lang['career']['mediem']}</option>
                                        <option value="{$lang['career']['bad']}">{$lang['career']['bad']}</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm">
                            <div class="form-group">
                                <label class="control-label visuallyhidden" for="c-excellent-2">{$lang['career']['lang4']}</label>
                                <div class="select-wrapper">
                                    <select class="select-control" name="language[tmp][]" id="c-excellent-2" style="width: 100%;">
                                        <option value="{$lang['career']['best']}" selected="">{$lang['career']['best']}</option>
                                        <option value="{$lang['career']['good']}">{$lang['career']['good']}</option>
                                        <option value="{$lang['career']['mediem']}">{$lang['career']['mediem']}</option>
                                        <option value="{$lang['career']['bad']}">{$lang['career']['bad']}</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm">
                            <div class="form-group">
                                <label class="control-label visuallyhidden" for="c-excellent-3">{$lang['career']['lang3']}</label>
                                <div class="select-wrapper">
                                    <select class="select-control" name="language[tmp][]" id="c-excellent-3" style="width: 100%;">
                                        <option value="{$lang['career']['best']}" selected="">{$lang['career']['best']}</option>
                                        <option value="{$lang['career']['good']}">{$lang['career']['good']}</option>
                                        <option value="{$lang['career']['mediem']}">{$lang['career']['mediem']}</option>
                                        <option value="{$lang['career']['bad']}">{$lang['career']['bad']}</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--//////////////////////////////// End Clone Language /////////////////////////////// -->
                <div class="language">

                </div>
            </div>
            {* End Language *}

            <div class="form-default mt-xl-4">
                <div class="title">{$lang['career']['topic1']}</div>
                <div class="row gutters-custom mt-3">
                    <div class="col">
                        <div class="topic">1. {$lang['career']['ctext1']}</div>
                    </div>
                </div>
                <div class="row gutters-custom">
                    <div class="col-sm mt-sm-3 mt-0">
                        <fieldset>
                            <legend class="control-legend">{$lang['career']['Permanent']} </legend>
                            <div class="row gutters-custom">
                                <div class="col-auto">
                                    <div class="form-group form-check -nm IC">
                                        <input class="form-check-input radio-check" type="radio" name="information[countryPermanent]" id="permanent-no" value="ขัดข้อง" required="required">
                                        <label class="control-label" for="permanent-no">
                                            {$lang['career']['crash'] }
                                        </label>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group form-check -nm IC">
                                        <input class="form-check-input radio-check" type="radio" name="information[countryPermanent]" id="permanent-yes" value="ไม่ขัดข้อง" required="required">
                                        <label class="control-label" for="permanent-yes">
                                            {$lang['career']['nocrash']}
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </fieldset>
                    </div>
                    <div class="col-sm mt-sm-3 mt-3">
                        <fieldset>
                            <legend class="control-legend">{$lang['career']['Temporary']}</legend>
                            <div class="row gutters-custom">
                                <div class="col-auto">
                                    <div class="form-group form-check -nm IC">
                                        <input class="form-check-input radio-check" type="radio" name="information[countryTemporary]" id="temporary-no" value="ขัดข้อง" required="required">
                                        <label class="control-label" for="temporary-no">
                                            {$lang['career']['crash'] }
                                        </label>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group form-check -nm IC">
                                        <input class="form-check-input radio-check" type="radio" name="information[countryTemporary]" id="temporary-yes" value="ไม่ขัดข้อง" required="required">
                                        <label class="control-label" for="temporary-yes">
                                            {$lang['career']['nocrash']}
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </fieldset>
                    </div>
                </div>
                <div class="row gutters-custom mt-lg-5 mt-4">
                    <div class="col">
                        <div class="topic -np">2. {$lang['career']['ctext2']}</div>
                    </div>
                </div>
                <div class="row gutters-custom align-items-center">
                    <div class="col-md-4 col-sm-6">
                        <div class="row gutters-custom">
                            <div class="col-auto">
                                <fieldset>
                                    <legend class="visuallyhidden"></legend>
                                    <div class="form-group form-check -nm I">
                                        <input class="form-check-input radio-check contagious-checking" type="radio" name="information[contagious]" id="contagious-no" value="ไม่เคย" required="required">
                                        <label class="control-label" for="contagious-no">
                                            {$lang['career']['never']}
                                        </label>
                                    </div>
                                </fieldset>
                            </div>
                            <div class="col-auto">
                                <fieldset>
                                    <legend class="visuallyhidden"></legend>
                                    <div class="form-group form-check -nm I">
                                        <input class="form-check-input radio-check contagious-checking" type="radio" name="information[contagious]" id="contagious-yes" value="เคย" required="required">
                                        <label class="control-label" for="contagious-yes">
                                           {$lang['career']['ever']}
                                        </label>
                                    </div>
                                </fieldset>
                            </div>
                        </div>
                    </div>
                    <div class="col-md col-sm-6 contagiousExplain">
                        <div class="row gutters-custom">
                            <div class="col">
                                <div class="form-group has-feedback -nm I">
                                    <label class="control-label visuallyhidden" for="spicyfi-1">Spicyfi</label>
                                    <div class="block-control">
                                        <input type="text" class="form-control" name="information[contagiousExplain]" id="spicyfi-1" placeholder="Spicyfi" data-error="">
                                        <span class="form-control-feedback" aria-hidden="true"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row gutters-custom mt-lg-5 mt-4">
                    <div class="col">
                        <div class="topic -np">3. {$lang['career']['ctext3']}</div>
                    </div>
                </div>
                <div class="row gutters-custom align-items-center">
                    <div class="col-md-4 col-sm-6">
                        <div class="row gutters-custom">
                            <div class="col-auto">
                                <fieldset>
                                    <legend class="visuallyhidden"></legend>
                                    <div class="form-group form-check -nm I">
                                        <input class="form-check-input radio-check handicap-checking" type="radio" name="information[handicap]" id="congenital-disease-no" value="ไม่เคย" required="required">
                                        <label class="control-label" for="congenital-disease-no">
                                            {$lang['career']['never']}
                                        </label>
                                    </div>
                                </fieldset>
                            </div>
                            <div class="col-auto">
                                <fieldset>
                                    <legend class="visuallyhidden"></legend>
                                    <div class="form-group form-check -nm I">
                                        <input class="form-check-input radio-check handicap-checking" type="radio" name="information[handicap]" id="congenital-disease-yes" value="มี" required="required">
                                        <label class="control-label" for="congenital-disease-yes">
                                            {$lang['career']['ever']}
                                        </label>
                                    </div>
                                </fieldset>
                            </div>
                        </div>
                    </div>
                    <div class="col-md col-sm-6 handicap">
                        <div class="row gutters-custom">
                            <div class="col">
                                <div class="form-group has-feedback -nm I">
                                    <label class="control-label visuallyhidden" for="spicyfi-2">Spicyfi</label>
                                    <div class="block-control">
                                        <input type="text" class="form-control" name="information[handicapExplain]" id="spicyfi-2" placeholder="Spicyfi" data-error="">
                                        <span class="form-control-feedback" aria-hidden="true"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row gutters-custom mt-lg-5 mt-4">
                    <div class="col">
                        <div class="topic -np">4. {$lang['career']['ctext4']}</div>
                    </div>
                </div>
                <div class="row gutters-custom align-items-center">
                    <div class="col-md-4 col-sm-6">
                        <div class="row gutters-custom">
                            <div class="col-auto">
                                <fieldset>
                                    <legend class="visuallyhidden"></legend>
                                    <div class="form-group form-check -nm I">
                                        <input class="form-check-input radio-check arrested-checking" type="radio" name="information[arrested]" id="imprisonment-no" value="ไม่เคย" required="required">
                                        <label class="control-label" for="imprisonment-no">
                                            {$lang['career']['never']}
                                        </label>
                                    </div>
                                </fieldset>
                            </div>
                            <div class="col-auto">
                                <fieldset>
                                    <legend class="visuallyhidden"></legend>
                                    <div class="form-group form-check -nm I">
                                        <input class="form-check-input radio-check arrested-checking" type="radio" name="information[arrested]" id="imprisonment-yes" value="เคย เพราะ" required="required">
                                        <label class="control-label" for="imprisonment-yes">
                                            {$lang['career']['ever']}
                                        </label>
                                    </div>
                                </fieldset>
                            </div>
                        </div>
                    </div>
                    <div class="col-md col-sm-6 arrested">
                        <div class="row gutters-custom">
                            <div class="col">
                                <div class="form-group has-feedback -nm I">
                                    <label class="control-label visuallyhidden" for="spicyfi-3">Spicyfi</label>
                                    <div class="block-control">
                                        <input type="text" class="form-control" name="information[arrestedExplain]" id="spicyfi-3" placeholder="Spicyfi" data-error="">
                                        <span class="form-control-feedback" aria-hidden="true"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row gutters-custom mt-lg-5 mt-4">
                    <div class="col">
                        <div class="topic -np">5. {$lang['career']['ctext5']}</div>
                    </div>
                </div>
                <div class="row gutters-custom align-items-center">
                    <div class="col-md-4 col-sm-6">
                        <div class="row gutters-custom">
                            <div class="col-auto">
                                <fieldset>
                                    <legend class="visuallyhidden"></legend>
                                    <div class="form-group form-check -nm I">
                                        <input class="form-check-input radio-check dischargedemployment-checking" type="radio" name="information[dischargedemployment]" id="dismissal-no" value="ไม่เคย" required="required">
                                        <label class="control-label" for="dismissal-no">
                                            {$lang['career']['never']}
                                        </label>
                                    </div>
                                </fieldset>
                            </div>
                            <div class="col-auto">
                                <fieldset>
                                    <legend class="visuallyhidden"></legend>
                                    <div class="form-group form-check -nm I">
                                        <input class="form-check-input radio-check dischargedemployment-checking" type="radio" name="information[dischargedemployment]" id="dismissal-yes" value="เคย เพราะ" required="required">
                                        <label class="control-label" for="dismissal-yes">
                                            {$lang['career']['ever']}
                                        </label>
                                    </div>
                                </fieldset>
                            </div>
                        </div>
                    </div>
                    <div class="col-md col-sm-6 dischargedemployment">
                        <div class="row gutters-custom">
                            <div class="col">
                                <div class="form-group has-feedback -nm I">
                                    <label class="control-label visuallyhidden" for="spicyfi-4">Spicyfi</label>
                                    <div class="block-control">
                                        <input type="text" class="form-control" name="information[dischargedemploymentExplain]" id="spicyfi-4" placeholder="Spicyfi" data-error="">
                                        <span class="form-control-feedback" aria-hidden="true"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row gutters-custom mt-lg-5 mt-4">
                    <div class="col">
                        <div class="topic -np">6. {$lang['career']['ctext6']}</div>
                    </div>
                </div>
                <div class="row gutters-custom align-items-center">
                    <div class="col-md-4 col-sm-6">
                        <div class="row gutters-custom">
                            <div class="col-auto">
                                <fieldset>
                                    <legend class="visuallyhidden"></legend>
                                    <div class="form-group form-check -nm I">
                                        <input class="form-check-input radio-check relative-checking" type="radio" name="information[relative]" id="friend-no" value="ไม่เคย" required="required">
                                        <label class="control-label" for="friend-no">
                                            {$lang['career']['never']}
                                        </label>
                                    </div>
                                </fieldset>
                            </div>
                            <div class="col-auto">
                                <fieldset>
                                    <legend class="visuallyhidden"></legend>
                                    <div class="form-group form-check -nm I">
                                        <input class="form-check-input radio-check relative-checking" type="radio" name="information[relative]" id="friend-yes" value="เคย เพราะ" required="required">
                                        <label class="control-label" for="friend-yes">
                                            {$lang['career']['ever']}
                                        </label>
                                    </div>
                                </fieldset>
                            </div>
                        </div>
                    </div>
                    <div class="col-md col-sm-6 relativeExplain">
                        <div class="row gutters-custom">
                            <div class="col">
                                <div class="form-group has-feedback -nm I">
                                    <label class="control-label visuallyhidden" for="spicyfi-5">Spicyfi</label>
                                    <div class="block-control">
                                        <input type="text" class="form-control" name="information[relativeExplain]" id="spicyfi-5" placeholder="Spicyfi" data-error="">
                                        <span class="form-control-feedback" aria-hidden="true"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row gutters-custom mt-lg-5 mt-4">
                    <div class="col">
                        <div class="topic -np">7. {$lang['career']['ctext7']}</div>
                    </div>
                </div>
                <div class="row gutters-custom align-items-center">
                    <div class="col-md-3 col-sm-6">
                        <fieldset>
                            <legend class="visuallyhidden"></legend>
                            <div class="form-group form-check -nm I">
                                <input class="form-check-input radio-check -C hearing-checking" type="radio" name="information[hearing]" id="personal-recommendation" value="เจ้าหน้าที่สภาบัน" checked>
                                <label class="control-label" for="personal-recommendation">
                                    {$lang['career']['ctext']}
                                </label>
                            </div>
                        </fieldset>
                    </div>
                    <div class="col-md-8 col-sm-6 hearingPerson1">
                        <div class="form-group has-feedback -nm I">
                            <label class="control-label visuallyhidden" for="a-name-1">Spicyfi</label>
                            <div class="block-control">
                                <input type="text" class="form-control" name="information[hearingPerson1]" id="a-name-1" placeholder="{$lang['career']['ref1']}" data-error="" required="required">
                                <span class="form-control-feedback" aria-hidden="true"></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row gutters-custom align-items-center mt-sm-0 mt-2">
                    <div class="col-md-3 col-sm-6">
                        <fieldset>
                            <legend class="visuallyhidden"></legend>
                            <div class="form-group form-check -nm I">
                                <input class="form-check-input radio-check hearing-checking" type="radio" name="information[hearing]" id="others" value="อื่นๆ">
                                <label class="control-label" for="others">
                                    {$lang['career']['spacial4']}
                                </label>
                            </div>
                        </fieldset>
                    </div>
                    <div class="col-md-8 col-sm-6 mt-md-2 hearingPerson2">
                        <div class="form-group has-feedback -nm I">
                            <label class="control-label visuallyhidden" for="a-name-2">Spicyfi</label>
                            <div class="block-control">
                                <input type="text" class="form-control" name="information[hearingPerson2]" id="a-name-2" placeholder="{$lang['career']['fname']}" data-error="">
                                <span class="form-control-feedback" aria-hidden="true"></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row gutters-custom mt-lg-5 mt-4">
                    <div class="col">
                        <div class="title">8. {$lang['career']['ctext8']}</div>
                    </div>
                </div>
                <div class="row gutters-custom">
                    <div class="col">
                        <div class="form-group has-feedback -nm">
                            <div class="topic py-0 pb-2">{$lang['career']['dctext8']}</div>
                            <label class="control-label visuallyhidden" for="textarea-1">{$lang['career']['dctext8']}</label>
                            <div class="block-control">
                                <textarea class="form-control form-text-area" rows="4" cols="100" name="information[considered]" id="textarea-1" value="Spicyfi" data-error="" required="required"></textarea>
                                <span class="form-control-feedback" aria-hidden="true"></span>
                            </div>
                        </div>
                    </div>
                </div>
                {* Start Reference *}
                <div class="row gutters-custom mt-lg-5 mt-4">
                    <div class="col">
                        <div class="title">9. {$lang['career']['ctext9']} <span>*</span></div>
                    </div>
                </div>
                <div class="row gutters-custom align-items-center pt-3">
                    <div class="col-sm-9">
                        <div class="topic"> {$lang['career']['dctext9']}</div>
                    </div>

                    <div class="col-sm text-right">
                        <div class="button  my-sm-0 my-3">
                            <a href="javascript:void(0);" class="btn btn-primary clickdel_reference" data-action="adds" title="btn btn-primary">
                                <span class="feather icon-plus text-white"></span>
                                {$lang["career"]["addedu"]}
                            </a>
                        </div>
                    </div>
                </div>
                <div class="row gutters-custom align-items-center">
                    <div class="col-auto">
                        <fieldset>
                            <legend class="visuallyhidden"></legend>
                            <div class="form-group form-check -nm">
                                <input class="form-check-input radio-check reference-checking" type="radio" name="reference[0][reference]" id="reference-no" value="ไม่มี" checked>
                                <label class="control-label" for="reference-no">
                                    {$lang['career']['unhave']}
                                </label>
                            </div>
                        </fieldset>
                    </div>
                    <div class="col">
                        <fieldset>
                            <legend class="visuallyhidden"></legend>
                            <div class="form-group form-check -nm">
                                <input class="form-check-input radio-check reference-checking" type="radio" name="reference[0][reference]" id="reference-yes" value="มี">
                                <label class="control-label" for="reference-yes">
                                    {$lang['career']['have']}
                                </label>
                            </div>
                        </fieldset>
                    </div>
                </div>
                <div class="row gutters-custom reference">
                    <div class="col-md col-sm">
                        <div class="form-group has-feedback">
                            <label class="control-label" for="p-name-1">1. {$lang['career']['ref1']}</label>
                            <div class="block-control">
                                <input type="text" class="form-control" name="reference[0][]" id="p-name-1" placeholder="{$lang['career']['ref1']}" data-error="">
                                <span class="form-control-feedback" aria-hidden="true"></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md col-sm">
                        <div class="form-group has-feedback">
                            <label class="control-label" for="p-address-1">{$lang['career']['addresswork']}</label>
                            <div class="block-control">
                                <input type="text" class="form-control" name="reference[0][]" id="p-address-1" placeholder="{$lang['career']['addresswork']}" data-error="">
                                <span class="form-control-feedback" aria-hidden="true"></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md col-sm">
                        <div class="form-group has-feedback">
                            <label class="control-label" for="p-position-1">{$lang['career']['ref2']}</label>
                            <div class="block-control">
                                <input type="text" class="form-control" name="reference[0][]" id="p-position-1" placeholder="{$lang['career']['ref2']}" data-error="">
                                <span class="form-control-feedback" aria-hidden="true"></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row gutters-custom reference">
                    <div class="col-sm-4">
                        <div class="form-group has-feedback">
                            <label class="control-label" for="p-telephone-1">{$lang['career']['ref4']}</label>
                            <div class="block-control">
                                <input type="text" class="form-control" name="reference[0][]" id="p-telephone-1" placeholder="{$lang['career']['ref4']}" data-error="">
                                <span class="form-control-feedback" aria-hidden="true"></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group has-feedback">
                            <label class="control-label" for="p-relations-1">{$lang['career']['relation']}</label>
                            <div class="block-control">
                                <input type="text" class="form-control" name="reference[0][]" id="p-relations-1" placeholder="{$lang['career']['relation']}" data-error="">
                                <span class="form-control-feedback" aria-hidden="true"></span>
                            </div>
                        </div>
                    </div>
                </div>
                <!--//////////////////////////////// End Clone Language /////////////////////////////// -->
                <div class="d-none mt-3" id="clone_reference">
                    <div class="row align-items-center">
                        <!-- <div class="col">
                            <div class="title"> </div>
                        </div> -->
                        <div class="col text-right">
                            <div class="button delete-form-6">
                                <a href="javascript:void(0);" class="btn btn-primary clickdel_reference" data-action="dels" title="btn btn-primary">
                                    <!-- <span class="feather icon-minus text-white"></span> -->
                                    {$lang['career']['del']}
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="row gutters-custom">
                        <div class="col-md col-sm">
                            <div class="form-group has-feedback">
                                <label class="control-label" for="p-name-2">2. {$lang['career']['ref1']}</label>
                                <div class="block-control">
                                    <input type="text" class="form-control" name="reference[tmp][]" id="p-name-2" placeholder="{$lang['career']['ref1']}" data-error="">
                                    <span class="form-control-feedback" aria-hidden="true"></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md col-sm">
                            <div class="form-group has-feedback">
                                <label class="control-label" for="p-address-2">{$lang['career']['addresswork']}</label>
                                <div class="block-control">
                                    <input type="text" class="form-control" name="reference[tmp][]" id="p-address-2" placeholder="{$lang['career']['addresswork']}" data-error="">
                                    <span class="form-control-feedback" aria-hidden="true"></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md col-sm">
                            <div class="form-group has-feedback">
                                <label class="control-label" for="p-position-2">{$lang['career']['ref2']}</label>
                                <div class="block-control">
                                    <input type="text" class="form-control" name="reference[tmp][]" id="p-position-2" placeholder="{$lang['career']['ref2']}" data-error="">
                                    <span class="form-control-feedback" aria-hidden="true"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row gutters-custom">
                        <div class="col-sm-4">
                            <div class="form-group has-feedback">
                                <label class="control-label" for="p-telephone-2">{$lang['career']['ref4']}</label>
                                <div class="block-control">
                                    <input type="text" class="form-control" name="reference[tmp][]" id="p-telephone-2" placeholder="{$lang['career']['ref4']}" data-error="">
                                    <span class="form-control-feedback" aria-hidden="true"></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group has-feedback">
                                <label class="control-label" for="p-relations-1">{$lang['career']['relation']}</label>
                                <div class="block-control">
                                    <input type="text" class="form-control" name="reference[tmp][]" id="p-relations-1" placeholder="{$lang['career']['relation']}" data-error="">
                                    <span class="form-control-feedback" aria-hidden="true"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--//////////////////////////////// End Clone Reference /////////////////////////////// -->
                <div class="reference_append">

                </div>
                {* End Reference *}

                <div class="row gutters-custom mt-5">
                    <div class="col">
                        <div class="title">{$lang['career']['upfiletxt']}</div>
                    </div>
                </div>
                <div class="upload-documents">
                    <div class="row gutters-custom">
                        <div class="col-12">
                            <div class="form-group has-feedback">
                                <div class="topic">{$lang['career']['upfiletxt1']} <span>*</span> </div>
                                <label tabindex="0" for="use-only-upload-1" class="btn btn-primary btn-file -upload-1">
                                    <input class="input-file" id="use-only-upload-1" type="file">
                                    <div class="row gutters-custom">
                                        <div class="col-auto">
                                            <img class="icon" src="{$template}/assets/img/icon/icon-upload.svg" alt="icon upload">
                                        </div>
                                        <div class="col">
                                            <span class="typo-xs text-white">{$lang['career']['uploadtxt']}</span>
                                        </div>
                                    </div>
                                </label>
                                <div class="row align-items-center" id="file-01" style="display: none;">
                                    <div class="col-auto">
                                        <p class="file-return">file mockup.png</p>
                                    </div>
                                    <div class="col" onclick="removeFile('fileTranscript', '#file-01');">
                                        <div class="uploadTxt-close" id="CloseFile">
                                            <span class="feather icon-x"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group has-feedback">
                                <div class="topic">{$lang['career']['upfiletxt2']}<span>*</span></div>
                                <label tabindex="0" for="use-only-upload-2" class="btn btn-primary btn-file -upload-2">
                                    <input class="input-file" id="use-only-upload-2" type="file">
                                    <div class="row gutters-custom">
                                        <div class="col-auto">
                                            <img class="icon" src="{$template}/assets/img/icon/icon-upload.svg" alt="icon upload">
                                        </div>
                                        <div class="col">
                                            <span class="typo-xs text-white">{$lang['career']['uploadtxt']}</span>
                                        </div>
                                    </div>
                                </label>
                                <div class="row align-items-center" id="file-02" style="display: none;">
                                    <div class="col-auto">
                                        <p class="file-return">file mockup.png</p>
                                    </div>
                                    <div class="col" onclick="removeFile('fileMilitary', '#file-02');">
                                        <div class="uploadTxt-close" id="CloseFile">
                                            <span class="feather icon-x"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group has-feedback">
                                <div class="topic">{$lang['career']['upfiletxt3']}<span>*</span></div>
                                <label tabindex="0" for="use-only-upload-3" class="btn btn-primary btn-file -upload-3">
                                    <input class="input-file" id="use-only-upload-3" type="file">
                                    <div class="row gutters-custom">
                                        <div class="col-auto">
                                            <img class="icon" src="{$template}/assets/img/icon/icon-upload.svg" alt="icon upload">
                                        </div>
                                        <div class="col">
                                            <span class="typo-xs text-white">{$lang['career']['uploadtxt']}</span>
                                        </div>
                                    </div>
                                </label>
                                <div class="row align-items-center" id="file-03" style="display: none;">
                                    <div class="col-auto">
                                        <p class="file-return">file mockup.png</p>
                                    </div>
                                    <div class="col" onclick="removeFile('workexperience', '#file-03');">
                                        <div class="uploadTxt-close" id="CloseFile">
                                            <span class="feather icon-x"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group has-feedback">
                                <div class="topic">{$lang['career']['upfiletxt4']}<span>*</span></div>
                                <label tabindex="0" for="use-only-upload-4" class="btn btn-primary btn-file -upload-4">
                                    <input class="input-file" id="use-only-upload-4" type="file">
                                    <div class="row gutters-custom">
                                        <div class="col-auto">
                                            <img class="icon" src="{$template}/assets/img/icon/icon-upload.svg" alt="icon upload">
                                        </div>
                                        <div class="col">
                                            <span class="typo-xs text-white">{$lang['career']['uploadtxt']}</span>
                                        </div>
                                    </div>
                                </label>
                                <div class="row align-items-center" id="file-04" style="display: none;">
                                    <div class="col-auto">
                                        <p class="file-return">file mockup.png</p>
                                    </div>
                                    <div class="col" onclick="removeFile('marriage', '#file-04');">
                                        <div class="uploadTxt-close" id="CloseFile">
                                            <span class="feather icon-x"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group has-feedback">
                                <div class="topic">{$lang['career']['upfiletxt5']}<span>*</span></div>
                                <label tabindex="0" for="use-only-upload-5" class="btn btn-primary btn-file -upload-5">
                                    <input class="input-file" id="use-only-upload-5" type="file">
                                    <div class="row gutters-custom">
                                        <div class="col-auto">
                                            <img class="icon" src="{$template}/assets/img/icon/icon-upload.svg" alt="icon upload">
                                        </div>
                                        <div class="col">
                                            <span class="typo-xs text-white">{$lang['career']['uploadtxt']}</span>
                                        </div>
                                    </div>
                                </label>
                                <div class="row align-items-center" id="file-05" style="display: none;">
                                    <div class="col-auto">
                                        <p class="file-return">file mockup.png</p>
                                    </div>
                                    <div class="col" onclick="removeFile('license', '#file-05');">
                                        <div class="uploadTxt-close" id="CloseFile">
                                            <span class="feather icon-x"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="col-12">
                            <div class="form-group has-feedback">
                                <div class="topic">{$lang['career']['upfiletxt6']}<span>*</span></div>
                                <label tabindex="0" for="use-only-upload-6" class="btn btn-primary btn-file -upload-6">
                                    <input class="input-file" id="use-only-upload-6" type="file">
                                    <div class="row gutters-custom">
                                        <div class="col-auto">
                                            <img class="icon" src="{$template}/assets/img/icon/icon-upload.svg" alt="icon upload">
                                        </div>
                                        <div class="col">
                                            <span class="typo-xs text-white">{$lang['career']['uploadtxt']}</span>
                                        </div>
                                    </div>
                                </label>
                                <div class="row align-items-center" id="file-06" style="display: none;">
                                    <div class="col-auto">
                                        <p class="file-return">file mockup.png</p>
                                    </div>
                                    <div class="col" onclick="removeFile('other', '#file-06');">
                                        <div class="uploadTxt-close" id="CloseFile">
                                            <span class="feather icon-x"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row gutters-custom mt-5">
                    <div class="col">
                        <div class="-note">{$lang["career"]["notefile"]}</div>
                    </div>
                </div>
                <div class="row gutters-custom mt-md-5 mt-4">
                    <div class="col">
                        <div class="form-group has-feedback -nm">
                            <label class="control-label" for="textarea-2">{$lang['career']['vertxt']}</label>
                            <div class="block-control">
                                <textarea class="form-control form-text-area" rows="4" cols="100" name="comment[]" id="textarea-2" value="Spicyfi" data-error="" required="required"></textarea>
                                <span class="form-control-feedback" aria-hidden="true"></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row gutters-custom mt-lg-5 mt-4">
                    <div class="col-12">
                        <div class=" form-group form-check">
                            <input class="form-check-input" type="checkbox" value="1" name="comment[confirm][0]" id="from-check-1" required="required">
                            <label class="control-label c-color" for="from-check-1">
                               {$lang['career']['vertxt1']}
                            </label>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group form-check">
                            <input class="form-check-input" type="checkbox" value="1" name="comment[confirm][1]" id="from-check-2" required="required">
                            <label class="control-label c-color" for="from-check-2">
                               {$lang['career']['vertxt2']}
                            </label>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group form-check">
                            <input class="form-check-input" type="checkbox" value="1" name="comment[confirm][2]" id="from-check-3" required="required">
                            <label class="control-label c-color" for="from-check-3">
                                {$lang['career']['vertxt3']}
                            </label>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group form-check">
                            <input class="form-check-input" type="checkbox" value="1" name="comment[confirm][3]" id="from-check-4" required="required">
                            <label class="control-label c-color" for="from-check-4">
                               {$lang['career']['vertxt4']}
                            </label>
                        </div>
                    </div>
                </div>
                <div class="row gutters-custom mt-5 text-center">
                
                    <div class="col">
                        {* <button type="submit" id="submitform" class="btn btn-xl btn-primary btn-form" title="SUBMIT AN APPLICATION">SUBMIT AN APPLICATION</button> *}
                        <div class="g-recaptcha" data-sitekey="6LeTd5YjAAAAAHtJXZFYCrOAlchZ5hcUqzM27yQ_" style="margin-bottom: 3em;"></div>
                        
                        <input type="submit" class="btn btn-xl btn-primary btn-form" id="clicksubmitfromcar" value="{$lang['career']['submit']}">
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
</section>
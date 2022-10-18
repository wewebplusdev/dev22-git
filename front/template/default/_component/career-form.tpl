<section class="site-container sitekey" data-menuid="{$settingModulus['menuid']}" data-id="{$sitekey}">
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
            ใบสมัครงาน (APPLICATION FORM)
            </br>
            สถาบันวิจัยและพัฒนาอัญมณีและเครื่องประดับแห่งชาติ(องค์การมหาชน)
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
                                    <div class="control-label" for="mockSelect1">ตำแหน่งที่ต้องการสมัคร position</div>
                                    <div class="form-group has-feedback">
                                        <label class="control-label visuallyhidden" for="mockSelect1">Example select</label>
                                        <div class="select-wrapper">
                                            <select class="select-control select-year" name="info[]" id="mockSelect1" style="width: 100%;" required="required">
                                              <option value="">{$lang['career']['select']}</option>
                                              {foreach $callListCareerSelect as $keycallListCareerSelect => $valuecallListCareerSelect}
                                              <option value="{$valuecallListCareerSelect.id}" {if $req_params['selectcareer'] eq $valuecallListCareerSelect.id}selected{/if}>{$valuecallListCareerSelect.subject}</option>
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
                                            <input type="number" class="form-control" name="info[]" id="salaly" placeholder="เงินเดือนที่ต้องการ" data-error="" required="required">
                                            <span class="form-control-feedback" aria-hidden="true"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md">
                                    <div class="form-group has-feedback">
                                        <label class="control-label visuallyhidden" for="sdate">Example input</label>
                                        <div class="block-control">
                                            <input type="date" class="form-control" name="info[]" id="sdate" placeholder="วันที่พร้อมจะเริ่มงานได้/Starting Date" ata-error="" required="required">
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
                โปรดกรอกข้อความในใบสมัครโดยละเอียดและครบถ้วน
                </br>
                (Please complete the following form and state details)
            </div>
            <div class="form-default mt-xl-4">
                <div class="title">ประวัติส่วนตัว PERSONAL DETEAILS <span>*</span> </div>
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
                                <input type="text" class="form-control" name="general[]" id="fname" placeholder="ชื่อ First Name (Thai)" data-error="" required="required">
                                <span class="form-control-feedback" aria-hidden="true"></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm">
                        <div class="form-group has-feedback">
                            <label class="control-label visuallyhidden" for="lname">Example input</label>
                            <div class="block-control">
                                <input type="text" class="form-control" name="general[]" id="lname" placeholder="นามสกุล Surname (Thai)" data-error="" required="required">
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
                                <input type="text" class="form-control" name="general[]" id="email" placeholder="ชื่อ First Name (Thai)" data-error="" required="required">
                                <span class="form-control-feedback" aria-hidden="true"></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm">
                        <div class="form-group has-feedback">
                            <label class="control-label visuallyhidden" for="email">Example input</label>
                            <div class="block-control">
                                <input type="text" class="form-control" name="general[]" id="email" placeholder="นามสกุล Surname (Thai)" data-error="" required="required">
                                <span class="form-control-feedback" aria-hidden="true"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-default">
                <!-- <div class="text-primary typo-xs">วันเดือนปีเกิด/Date of birthday<span>*</span> </div> -->
                <div class="row gutters-custom align-items-end">
                    <div class="col-xl">
                        <div class="row gutters-custom align-items-end">
                            <div class="col-xl-3 col-lg-4 col-sm">
                                <div class="form-group -nm I">
                                    <label class="control-label label-custom" for="select-day">วันเดือนปีเกิด/Date of birthday<span>*</span></label>
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
                                        <input type="text" class="form-control" name="general[]" id="height" placeholder="ส่วนสูง/Height cm" data-error="" required="required">
                                        <span class="form-control-feedback" aria-hidden="true"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm">
                                <div class="form-group has-feedback">
                                    <label class="control-label visuallyhidden" for="inputPlaceOfBirth">Example input</label>
                                    <div class="block-control">
                                        <input type="text" class="form-control" name="general[]" id="inputPlaceOfBirth" placeholder="ภูมิสำเนา/Place of Birth" data-error="" required="required">
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
                                    ชาย/Male
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
                                    หญิง/Female
                                </label>
                            </div>
                        </fieldset>
                    </div>
                </div>
            </div>
            <div class="form-default mt-xl-4">
                <div class="title">ที่อยู่ตามทะเบียนบ้าน/Home Address</div>
                <div class="row gutters-custom">
                    <div class="col-md-4">
                        <div class="row gutters-custom">
                            <div class="col-md-7 col-sm">
                                <div class="form-group has-feedback">
                                    <label class="control-label visuallyhidden" for="have-with-number">Example input</label>
                                    <div class="block-control">
                                        <input type="text" class="form-control" name="address[]" id="have-with-number" placeholder="Have With number" data-error="" required="required">
                                        <span class="form-control-feedback" aria-hidden="true"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-5 col-sm">
                                <div class="form-group has-feedback">
                                    <label class="control-label visuallyhidden" for="moo">Example input</label>
                                    <input type="text" class="form-control" name="address[]" id="moo" placeholder="Moo" data-error="" required="required">
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
                                        <input type="text" class="form-control" name="address[]" id="village-building" placeholder="Village / building" data-error="" required="required">
                                        <span class="form-control-feedback" aria-hidden="true"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm">
                                <div class="form-group has-feedback">
                                    <label class="control-label visuallyhidden" for="alley">Example input</label>
                                    <div class="block-control">
                                        <input type="text" class="form-control" name="address[]" id="alley" placeholder="Alley" data-error="" required="required">
                                        <span class="form-control-feedback" aria-hidden="true"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm">
                                <div class="form-group has-feedback">
                                    <label class="control-label visuallyhidden" for="road">Example input</label>
                                    <div class="block-control">
                                        <input type="text" class="form-control" name="address[]" id="road" placeholder="Road" data-error="" required="required">
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
                                <input type="text" class="form-control" name="address[]" id="postcode" placeholder="Postcode" data-error="" required="required">
                                <span class="form-control-feedback" aria-hidden="true"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-default mt-xl-4">
                <div class="title">ที่อยู่ปัจจุบัน/Present Address</div>
                <div class="row gutters-custom">
                    <div class="col-md-4">
                        <div class="row gutters-custom">
                            <div class="col-md-7 col-sm">
                                <div class="form-group has-feedback">
                                    <label class="control-label visuallyhidden" for="present-have-with-number">Example input</label>
                                    <div class="block-control">
                                        <input type="text" class="form-control" name="address[]" id="present-have-with-number" placeholder="Have With number" data-error="" required="required">
                                        <span class="form-control-feedback" aria-hidden="true"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-5 col-sm">
                                <div class="form-group has-feedback">
                                    <label class="control-label visuallyhidden" for="present-moo">Example input</label>
                                    <div class="block-control">
                                        <input type="text" class="form-control" name="address[]" id="present-moo" placeholder="Moo" data-error="" required="required">
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
                                        <input type="text" class="form-control" name="address[]" id="present-village-building" placeholder="Village / building" data-error="" required="required">
                                        <span class="form-control-feedback" aria-hidden="true"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm">
                                <div class="form-group has-feedback">
                                    <label class="control-label visuallyhidden" for="present-alley">Example input</label>
                                    <div class="block-control">
                                        <input type="text" class="form-control" name="address[]" id="present-alley" placeholder="Alley" data-error="" required="required">
                                        <span class="form-control-feedback" aria-hidden="true"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm">
                                <div class="form-group has-feedback">
                                    <label class="control-label visuallyhidden" for="present-road">Example input</label>
                                    <div class="block-control">
                                        <input type="text" class="form-control" name="address[]" id="present-road" placeholder="Road" data-error="" required="required">
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
                                <input type="text" class="form-control" name="address[]" id="present-postcode" placeholder="Postcode" data-error="" required="required">
                                <span class="form-control-feedback" aria-hidden="true"></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row gutters-custom">
                    <div class="col-sm">
                        <div class="form-group has-feedback">
                            <label class="control-label" for="telephone-home">โทรศัพท์ / Telephone Home</label>
                            <div class="block-control">
                                <input type="text" class="form-control" name="address[]" id="telephone-home" placeholder="058-7784562" data-error="" required="required">
                                <span class="form-control-feedback" aria-hidden="true"></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm">
                        <div class="form-group has-feedback">
                            <label class="control-label" for="telephone-mobile">โทรศัพท์มือถือ / Mobile Phone</label>
                            <div class="block-control">
                                <input type="text" class="form-control" name="address[]" id="telephone-mobile" placeholder="060-XXX-XXXX" data-error="" required="required">
                                <span class="form-control-feedback" aria-hidden="true"></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm">
                        <div class="form-group has-feedback">
                            <label class="control-label" for="email">อีเมล์ / E-Mail</label>
                            <div class="block-control">
                                <input type="email" class="form-control" name="address[]" id="email" placeholder="อีเมล์ E-Mail" data-error="" required="required">
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
                                    <label class="control-label" for="identification-1">บัตรประชาชนเลขที่ / Identification Card No.</label>
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
                                    <label class="control-label" for="issued-at">สถานที่ออกบัตร / Issued at</label>
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
                                    <label class="control-label" for="expiry-date" style=" font-size: 14px; ">วันหมดอายุ / Expiry Date</label>
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
                <div class="title">สถานภาพทางทหาร / Military Status</div>
                <div class="row gutters-custom">
                    <div class="col-auto">
                        <fieldset>
                            <legend class="visuallyhidden">radio</legend>
                            <div class="form-group form-check">
                                <input class="form-check-input radio-check military-checking" type="radio" name="military[status]" id="exempted" value="ได้รับการยกเว้น" checked>
                                <label class="control-label" for="exempted">
                                    ได้รับการยกเว้น / Exempted
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
                                    ยังไม่ผ่านการเกณฑ์ทหาร / Non-Exempted
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
                                    เรียนรักษาดินแดน / Territorial Degree Student
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
                                    รับราชการทหารแล้ว / Date Entered Service
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
                                    อื่นๆ / Other
                                </label>
                            </div>
                        </fieldset>
                    </div>
                    <div class="col-md-5 col-sm-6 military-other">
                        <div class="form-group has-feedback">
                            <label class="control-label visuallyhidden" for="identification-2">บัตรประชาชนเลขที่ / Identification Card No.</label>
                            <div class="block-control">
                                <input type="text" class="form-control mili-other" name="military[]" id="identification-2" placeholder="ระบุ / Annotate" data-error="">
                                <span class="form-control-feedback" aria-hidden="true"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-default emergency-case">
                <div class="title">บุคคลที่สามารถติดต่อได้กรณีเร่งด่วน / In case of emergency please contact</div>
                <div class="row gutters-custom align-items-end">
                    <div class="col-md">
                        <div class="form-group has-feedback">
                            <label class="control-label font-size-C" for="e-name">ชื่อ / Name</label>
                            <div class="block-control">
                                <input type="text" class="form-control" name="emergency[]" id="e-name" placeholder="ชื่อ / Name" data-error="" required="required">
                                <span class="form-control-feedback" aria-hidden="true"></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md">
                        <div class="row gutters-custom">
                            <div class="col-md col-sm-6">
                                <div class="form-group has-feedback">
                                    <label class="control-label font-size-C" for="e-surname">นามสกุล / Surname</label>
                                    <div class="block-control">
                                        <input type="text" class="form-control" name="emergency[]" id="e-surname" placeholder="นามสกุล / Surname" data-error="" required="required">
                                        <span class="form-control-feedback" aria-hidden="true"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-4 col-sm-6">
                                <div class="form-group">
                                    <label class="control-label label-custom" for="e-select-day">วันเดือนปีเกิด/Date of birthday</label>
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
                            <label class="control-label font-size-C" for="relations">ความสัมพันธ์ / Relations</label>
                            <div class="block-control">
                                <input type="text" class="form-control" name="emergency[]" id="relations" placeholder="ความสัมพันธ์ / Relations" data-error="" required="required">
                                <span class="form-control-feedback" aria-hidden="true"></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm">
                        <div class="form-group has-feedback">
                            <label class="control-label font-size-C" for="address-workplace">ที่อยู่/ที่ทำงาน / Address/Workplace</label>
                            <div class="block-control">
                                <input type="text" class="form-control" name="emergency[]" id="address-workplace" placeholder="ที่อยู่/ที่ทำงาน / Address/Workplace" data-error="" required="required">
                                <span class="form-control-feedback" aria-hidden="true"></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm">
                        <div class="form-group has-feedback">
                            <label class="control-label" for="e-tel">โทรศัพท / Tel.</label>
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
                    <div class="title">รายละเอียดครอบครัว / Family details <span>*</span></div>
                    <div class="row gutters-custom align-items-end">
                        <div class="col-md">
                            <div class="form-group has-feedback">
                                <label class="control-label font-size-C" for="f-name-1">1. ชื่อ / Name</label>
                                <div class="block-control">
                                    <input type="text" class="form-control" name="family[]" id="f-name-1" placeholder="ชื่อ / Name" data-error="" required="required">
                                    <span class="form-control-feedback" aria-hidden="true"></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md">
                            <div class="row gutters-custom">
                                <div class="col-md col-sm-6">
                                    <div class="form-group has-feedback">
                                        <label class="control-label font-size-C" for="f-surname-1">นามสกุล / Surname</label>
                                        <div class="block-control">
                                            <input type="text" class="form-control" name="family[]" id="f-surname-1" placeholder="นามสกุล / Surname" data-error="" required="required">
                                            <span class="form-control-feedback" aria-hidden="true"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-6">
                                    <div class="form-group">
                                        <label class="control-label label-custom" for="f-select-day-1">วันเดือนปีเกิด/Date of birthday</label>
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
                                <label class="control-label font-size-C" for="f-relations-1">ความสัมพันธ์ / Relations</label>
                                <div class="block-control">
                                    <input type="text" class="form-control" name="family[]" id="f-relations-1" placeholder="ความสัมพันธ์ / Relations" data-error="" required="required">
                                    <span class="form-control-feedback" aria-hidden="true"></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm">
                            <div class="form-group has-feedback">
                                <label class="control-label font-size-C" for="f-address-workplace-1">ที่อยู่/ที่ทำงาน / Address/Workplace</label>
                                <div class="block-control">
                                    <input type="text" class="form-control" name="family[]" id="f-address-workplace-1" placeholder="ที่อยู่/ที่ทำงาน / Address/Workplace" data-error="" required="required">
                                    <span class="form-control-feedback" aria-hidden="true"></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm">
                            <div class="form-group has-feedback">
                                <label class="control-label" for="f-tel-1">โทรศัพท / Tel.</label>
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
                                        <legend class="visuallyhidden">Live</legend>
                                        <div class="form-group form-check">
                                            <input class="form-check-input radio-check family-checking" type="radio" name="family[alive]" id="live" value="มีชีวิต" required="required">
                                            <label class="control-label" for="live">
                                                Live
                                            </label>
                                        </div>
                                    </fieldset>
                                </div>
                                <div class="col-auto">
                                    <fieldset>
                                        <legend class="visuallyhidden">Pass Away</legend>
                                        <div class="form-group form-check">
                                            <input class="form-check-input radio-check family-checking" type="radio" name="family[alive]" id="pass-away" value="เสียชีวิต" required="required">
                                            <label class="control-label" for="pass-away">
                                                Pass Away
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
                                <label class="control-label font-size-C" for="f-name-2">2. ชื่อ / Name</label>
                                <div class="block-control">
                                    <input type="text" class="form-control" name="family[]" id="f-name-2" placeholder="ชื่อ / Name" data-error="" required="required">
                                    <span class="form-control-feedback" aria-hidden="true"></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md">
                            <div class="row gutters-custom">
                                <div class="col-md col-sm-6">
                                    <div class="form-group has-feedback">
                                        <label class="control-label font-size-C" for="f-surname-2">นามสกุล / Surname</label>
                                        <div class="block-control">
                                            <input type="text" class="form-control" name="family[]" id="f-surname-2" placeholder="นามสกุล / Surname" data-error="" required="required">
                                            <span class="form-control-feedback" aria-hidden="true"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-6">
                                    <div class="form-group">
                                        <label class="control-label label-custom" for="f-select-day-2">วันเดือนปีเกิด/Date of birthday</label>
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
                                <label class="control-label font-size-C" for="f-relations-2">ความสัมพันธ์ / Relations</label>
                                <div class="block-control">
                                    <input type="text" class="form-control" name="family[]" id="f-relations-2" placeholder="ความสัมพันธ์ / Relations" data-error="" required="required">
                                    <span class="form-control-feedback" aria-hidden="true"></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm">
                            <div class="form-group has-feedback">
                                <label class="control-label font-size-C" for="f-address-workplace-2">ที่อยู่/ที่ทำงาน / Address/Workplace</label>
                                <div class="block-control">
                                    <input type="text" class="form-control" name="family[]" id="f-address-workplace-2" placeholder="ที่อยู่/ที่ทำงาน / Address/Workplace" data-error="" required="required">
                                    <span class="form-control-feedback" aria-hidden="true"></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm">
                            <div class="form-group has-feedback">
                                <label class="control-label" for="f-tel-2">โทรศัพท / Tel.</label>
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
                                        <legend class="visuallyhidden">Live</legend>
                                        <div class="form-group form-check">
                                            <input class="form-check-input radio-check family2-checking" type="radio" name="family[alive2]" id="live-2" value="มีชีวิต" required="required">
                                            <label class="control-label" for="live-2">
                                                Live
                                            </label>
                                        </div>
                                    </fieldset>
                                </div>
                                <div class="col-auto">
                                    <fieldset>
                                        <legend class="visuallyhidden">Pass Away</legend>
                                        <div class="form-group form-check">
                                            <input class="form-check-input radio-check family2-checking" type="radio" name="family[alive2]" id="pass-away-2" value="เสียชีวิต" required="required">
                                            <label class="control-label" for="pass-away-2">
                                                Pass Away
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
                                        <label class="control-label visuallyhidden" for="you-are-someone-who">You Are Someone Who?</label>
                                        <div class="block-control">
                                            <input type="text" class="form-control" name="brethren[0][]" id="you-are-someone-who" placeholder="You Are Someone Who?" data-error="" required="required">
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
                                    Add Brother / Sister
                                </a>
                            </div>
                        </div>
                    </div>
                    <div id="textvaluebro">
                        <div class="row gutters-custom align-items-end">
                            <div class="col-md">
                                <div class="form-group has-feedback">
                                    <label class="control-label font-size-C" for="f-name-3">ชื่อ / Name</label>
                                    <div class="block-control">
                                        <input type="text" class="form-control" name="brethren[0][]" id="f-name-3" placeholder="ชื่อ / Name" data-error="" required="required">
                                        <span class="form-control-feedback" aria-hidden="true"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md">
                                <div class="row gutters-custom">
                                    <div class="col-md col-sm-6">
                                        <div class="form-group has-feedback">
                                            <label class="control-label font-size-C" for="f-surname-3">นามสกุล / Surname</label>
                                            <div class="block-control">
                                                <input type="text" class="form-control" name="brethren[0][]" id="f-surname-3" placeholder="นามสกุล / Surname" data-error="" required="required">
                                                <span class="form-control-feedback" aria-hidden="true"></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-sm-6">
                                        <div class="form-group">
                                            <label class="control-label label-custom" for="f-select-day-3">วันเดือนปีเกิด/Date of birthday</label>
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
                                    <label class="control-label font-size-C" for="f-relations-3">ความสัมพันธ์ / Relations</label>
                                    <div class="block-control">
                                        <input type="text" class="form-control" name="brethren[0][]" id="f-relations-3" placeholder="ความสัมพันธ์ / Relations" data-error="" required="required">
                                        <span class="form-control-feedback" aria-hidden="true"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm">
                                <div class="form-group has-feedback">
                                    <label class="control-label font-size-C" for="f-address-workplace-3">ที่อยู่/ที่ทำงาน / Address/Workplace</label>
                                    <div class="block-control">
                                        <input type="text" class="form-control" name="brethren[0][]" id="f-address-workplace-3" placeholder="ที่อยู่/ที่ทำงาน / Address/Workplace" data-error="" required="required">
                                        <span class="form-control-feedback" aria-hidden="true"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm">
                                <div class="form-group has-feedback">
                                    <label class="control-label" for="f-tel-3">โทรศัพท / Tel.</label>
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
                                            <legend class="visuallyhidden">Live</legend>
                                            <div class="form-group form-check">
                                                <input class="form-check-input radio-check brethren-checking-1" type="radio" name="brethren[0][alive]" id="live-3" value="มีชีวิต" required="required">
                                                <label class="control-label" for="live-3">
                                                    Live
                                                </label>
                                            </div>
                                        </fieldset>
                                    </div>
                                    <div class="col-auto">
                                        <fieldset>
                                            <legend class="visuallyhidden">Pass Away</legend>
                                            <div class="form-group form-check">
                                                <input class="form-check-input radio-check brethren-checking-1" type="radio" name="brethren[0][alive]" id="pass-away-3" value="เสียชีวิต" required="required">
                                                <label class="control-label" for="pass-away-3">
                                                    Pass Away
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
                                <div class="title"> พี่น้อง / Brother Sister</div>
                            </div>
                            <div class="col-auto">
                                <div class="button">
                                    <a href="javascript:void(0);" class="btn btn-primary clickdel" title="btn btn-primary">
                                        <!-- <span class="feather icon-minus text-white"></span> -->
                                        ลบ
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="row gutters-custom align-items-end">
                            <div class="col-md">
                                <div class="form-group has-feedback">
                                    <label class="control-label font-size-C" for="f-name-4">ชื่อ / Name</label>
                                    <div class="block-control">
                                        <input type="text" class="form-control" name="brethren[temp][]" id="f-name-4" placeholder="ชื่อ / Name" data-error="">
                                        <span class="form-control-feedback" aria-hidden="true"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md">
                                <div class="row gutters-custom">
                                    <div class="col-md col-sm-6">
                                        <div class="form-group has-feedback">
                                            <label class="control-label font-size-C" for="f-surname-4">นามสกุล / Surname</label>
                                            <div class="block-control">
                                                <input type="text" class="form-control" name="brethren[temp][]" id="f-surname-4" placeholder="นามสกุล / Surname" data-error="">
                                                <span class="form-control-feedback" aria-hidden="true"></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-sm-6">
                                        <div class="form-group">
                                            <label class="control-label label-custom" for="f-select-day-4-temp">วันเดือนปีเกิด/Date of birthday</label>
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
                                    <label class="control-label font-size-C" for="f-relations-4">ความสัมพันธ์ / Relations</label>
                                    <div class="block-control">
                                        <input type="text" class="form-control" name="brethren[temp][]" id="f-relations-4" placeholder="ความสัมพันธ์ / Relations" data-error="">
                                        <span class="form-control-feedback" aria-hidden="true"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm">
                                <div class="form-group has-feedback">
                                    <label class="control-label font-size-C" for="f-address-workplace-4">ที่อยู่/ที่ทำงาน / Address/Workplace</label>
                                    <div class="block-control">
                                        <input type="text" class="form-control" name="brethren[temp][]" id="f-address-workplace-4" placeholder="ที่อยู่/ที่ทำงาน / Address/Workplace" data-error="">
                                        <span class="form-control-feedback" aria-hidden="true"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm">
                                <div class="form-group has-feedback">
                                    <label class="control-label" for="f-tel-4">โทรศัพท / Tel.</label>
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
                                            <legend class="visuallyhidden">Live</legend>
                                            <div class="form-group form-check">
                                                <input class="form-check-input radio-check" onclick="swap(this)" type="radio" name="brethren[temp][alive]" id="live-4" value="มีชีวิต">
                                                <label class="control-label" for="live-4">
                                                    Live
                                                </label>
                                            </div>
                                        </fieldset>
                                    </div>
                                    <div class="col-auto">
                                        <fieldset>
                                            <legend class="visuallyhidden">Pass Away</legend>
                                            <div class="form-group form-check">
                                                <input class="form-check-input radio-check" onclick="swap(this)" type="radio" name="brethren[temp][alive]" id="pass-away-4" value="เสียชีวิต" checked>
                                                <label class="control-label" for="pass-away-4">
                                                    Pass Away
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
                        <div class="title">ประวัติการศึกษา EDUCATION BACKGROUND <span>*</span></div>
                    </div>
                    <div class="col-sm-auto text-right">
                        <div class="button">
                            <a href="javascript:void(0);" class="btn btn-primary clickdel_educational" data-action="adds" title="btn btn-primary">
                                <span class="feather icon-plus text-white"></span>
                                Add Education History
                            </a>
                        </div>
                    </div>
                </div>

                <div class="row gutters-custom align-items-end">
                    <div class="col-sm">
                        <div class="form-group">
                            <label class="control-label font-size-C label-custom" for="education-level">ระดับการศึกษา / Education history</label>
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
                            <label class="control-label visuallyhidden" for="academy-name">ชื่อสถาบัน / Academy Name</label>
                            <div class="block-control">
                                <input type="text" class="form-control" name="education[0][]" id="academy-name" placeholder="ชื่อสถาบัน / Academy Name" data-error="" required="required">
                                <span class="form-control-feedback" aria-hidden="true"></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm">
                        <div class="form-group has-feedback">
                            <label class="control-label visuallyhidden" for="you-are-someone-who-2">คุณมาจากที่ไหน / You Are Someone Who?</label>
                            <div class="block-control">
                                <input type="text" class="form-control" name="education[0][]" id="you-are-someone-who-2" placeholder="คุณมาจากที่ไหน / You Are Someone Who?" data-error="" required="required">
                                <span class="form-control-feedback" aria-hidden="true"></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row gutters-custom">
                    <div class="col-md-4 col-sm-6">
                        <div class="form-group has-feedback">
                            <label class="control-label visuallyhidden" for="majors">วิชาเอก / Majors</label>
                            <div class="block-control">
                                <input type="text" class="form-control" name="education[0][]" id="majors" placeholder="วิชาเอก / Majors" data-error="" required="required">
                                <span class="form-control-feedback" aria-hidden="true"></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="form-group has-feedback">
                            <label class="control-label visuallyhidden" for="educational-background">ประวัติการศึกษา / Educational Background</label>
                            <div class="block-control">
                                <input type="text" class="form-control" name="education[0][]" id="educational-background" placeholder="ประวัติการศึกษา / Educational Background" data-error="" required="required">
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
                                    <label class="control-label label-custom visuallyhidden" for="chengeemount">Since Year</label>
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
                                    <label class="control-label label-custom visuallyhidden" for="chengeeyear">To Year</label>
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
                                    <label class="control-label visuallyhidden" for="average-score">คะแนนเฉลี่ย / Average Score</label>
                                    <div class="block-control">
                                        <input type="text" class="form-control" name="education[0][]" id="average-score" placeholder="คะแนนเฉลี่ย / Average Score" data-error="" required="required">
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
                            <div class="title"> พี่น้อง / Brother Sister</div>
                        </div> -->
                        <div class="col text-right">
                            <div class="button">
                                <a href="javascript:void(0);" class="btn btn-primary clickdel_educational" data-action="del" title="btn btn-primary">
                                    <!-- <span class="feather icon-minus text-white"></span> -->
                                    ลบ
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="row gutters-custom align-items-end">
                        <div class="col-sm">
                            <div class="form-group">
                                <label class="control-label font-size-C" for="education-level-2">ระดับการศึกษา / Education history</label>
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
                                <label class="control-label visuallyhidden" for="academy-name-2">ชื่อสถาบัน / Academy Name</label>
                                <div class="block-control">
                                    <input type="text" class="form-control" name="education[tmp][]" id="academy-name-2" placeholder="ชื่อสถาบัน / Academy Name" data-error="">
                                    <span class="form-control-feedback" aria-hidden="true"></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm">
                            <div class="form-group has-feedback">
                                <label class="control-label visuallyhidden" for="you-are-someone-who-3">คุณมาจากที่ไหน / You Are Someone Who?</label>
                                <div class="block-control">
                                    <input type="text" class="form-control" name="education[tmp][]" id="you-are-someone-who-3" placeholder="คุณมาจากที่ไหน / You Are Someone Who?" data-error="">
                                    <span class="form-control-feedback" aria-hidden="true"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row gutters-custom">
                        <div class="col-md-4 col-sm-6">
                            <div class="form-group has-feedback">
                                <label class="control-label visuallyhidden" for="majors-2">วิชาเอก / Majors</label>
                                <div class="block-control">
                                    <input type="text" class="form-control" name="education[tmp][]" id="majors-2" placeholder="วิชาเอก / Majors" data-error="">
                                    <span class="form-control-feedback" aria-hidden="true"></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="form-group has-feedback">
                                <label class="control-label visuallyhidden" for="educational-background-2">ประวัติการศึกษา / Educational Background</label>
                                <div class="block-control">
                                    <input type="text" class="form-control" name="education[tmp][]" id="educational-background-2" placeholder="ประวัติการศึกษา / Educational Background" data-error="">
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
                                        <label class="control-label label-custom visuallyhidden" for="since-year-3">Since Year</label>
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
                                        <label class="control-label label-custom visuallyhidden" for="to-year-3">To Year</label>
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
                                        <label class="control-label visuallyhidden" for="average-score-2">คะแนนเฉลี่ย / Average Score</label>
                                        <div class="block-control">
                                            <input type="text" class="form-control" name="education[tmp][]" id="average-score-2" placeholder="คะแนนเฉลี่ย / Average Score" data-error="">
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
                        <div class="title">ประวัติการฝึกอบรม/ดูงาน/ฝึกงาน JOB TRAINING/INSPECTION/APPRENTICESHIP<span>*</span></div>
                    </div>
                    <div class="col-sm-auto">
                        <div class="button ">
                            <a href="javascript:void(0);" class="btn btn-primary clickdel_training" data-action="adds" title="btn btn-primary">
                                <span class="feather icon-plus text-white"></span>
                                Add Education History
                            </a>
                        </div>
                    </div>
                </div>
                <div class="row gutters-custom align-items-end">
                    <div class="col-sm">
                        <div class="form-group has-feedback">
                            <label class="control-label font-size-C" for="course">ชื่อหลักสูตร/Course</label>
                            <div class="block-control">
                                <input type="text" class="form-control" name="training[0][]" id="course" placeholder="ชื่อหลักสูตร/Course" data-error="" required="required">
                                <span class="form-control-feedback" aria-hidden="true"></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm">
                        <div class="form-group has-feedback">
                            <label class="control-label visuallyhidden" for="institute">สถาบัน/Institute</label>
                            <div class="block-control">
                                <input type="text" class="form-control" name="training[0][]" id="institute" placeholder="สถาบัน/Institute" data-error="" required="required">
                                <span class="form-control-feedback" aria-hidden="true"></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm">
                        <div class="form-group has-feedback">
                            <label class="control-label visuallyhidden" for="degree-certificate">วุฒิที่ได้รับ / Degree/Certificate</label>
                            <div class="block-control">
                                <input type="text" class="form-control" name="training[0][]" id="degree-certificate" placeholder="วุฒิที่ได้รับ / Degree/Certificate" data-error="" required="required">
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
                                    <label class="control-label visuallyhidden" for="period">ระยะเวลา/Period</label>
                                    <div class="block-control">
                                        <input type="text" class="form-control" name="training[0][]" id="period" placeholder="ระยะเวลา/Period" data-error="" required="required">
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
                                    <label class="control-label label-custom visuallyhidden" for="chengeemount-2">Since Year</label>
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
                                    <label class="control-label label-custom visuallyhidden" for="chengeeyear-2">To Year </label>
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
                            <div class="title"> พี่น้อง / Brother Sister</div>
                        </div> -->
                        <div class="col text-right">
                            <div class="button">
                                <a href="javascript:void(0);" class="btn btn-primary clickdel_training" data-action="dels" title="btn btn-primary">
                                    <!-- <span class="feather icon-minus text-white"></span> -->
                                    ลบ
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="row gutters-custom align-items-end">
                        <div class="col-sm">
                            <div class="form-group has-feedback">
                                <label class="control-label font-size-C" for="course-2">ชื่อหลักสูตร/Course</label>
                                <div class="block-control">
                                    <input type="text" class="form-control" name="training[tmp][]" id="course-2" placeholder="ชื่อหลักสูตร/Course" data-error="">
                                    <span class="form-control-feedback" aria-hidden="true"></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm">
                            <div class="form-group has-feedback">
                                <label class="control-label visuallyhidden" for="institute-2">สถาบัน/Institute</label>
                                <div class="block-control">
                                    <input type="text" class="form-control" name="training[tmp][]" id="institute-2" placeholder="สถาบัน/Institute" data-error="">
                                    <span class="form-control-feedback" aria-hidden="true"></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm">
                            <div class="form-group has-feedback">
                                <label class="control-label visuallyhidden" for="degree-certificate-2">วุฒิที่ได้รับ / Degree/Certificate</label>
                                <div class="block-control">
                                    <input type="text" class="form-control" name="training[tmp][]" id="degree-certificate-2" placeholder="วุฒิที่ได้รับ / Degree/Certificate" data-error="">
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
                                        <label class="control-label visuallyhidden" for="period-2">ระยะเวลา/Period</label>
                                        <div class="block-control">
                                            <input type="text" class="form-control" name="training[tmp][]" id="period-2" placeholder="ระยะเวลา/Period" data-error="">
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
                                        <label class="control-label label-custom visuallyhidden" for="since-year-4">Since Year</label>
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
                                        <label class="control-label label-custom visuallyhidden" for="to-year-4">To Year </label>
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
                        <div class="title">ประวัติการทำงาน (เรียงจากปัจจุบันไปหาอดีต)
                            <!-- </br> -->
                            EMPLOYMENT RECORD (Start with your present or most recent post)
                        </div>
                    </div>
                    <div class="col-sm-auto">
                        <div class="button ">
                            <a href="javascript:void(0);" class="btn btn-primary clickdel_works" data-action="adds" title="btn btn-primary">
                                <span class="feather icon-plus text-white"></span>
                                Add Education History
                            </a>
                        </div>
                    </div>
                </div>
                <div class="row gutters-custom align-items-end">
                    <div class="col-md col-sm-auto">
                        <div class="form-group has-feedback">
                            <label class="control-label font-size-C" for="company-name">1. ชื่อบริษัท</label>
                            <div class="block-control">
                                <input type="text" class="form-control" name="workhistory[0][]" id="company-name" placeholder="ชื่อบริษัท / Company’s Name" data-error="" required="required">
                                <span class="form-control-feedback" aria-hidden="true"></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md col-sm-auto">
                        <div class="form-group has-feedback">
                            <label class="control-label visuallyhidden" for="type-of-business">ประเภทธุรกิจ / Type Of Business</label>
                            <div class="block-control">
                                <input type="text" class="form-control" name="workhistory[0][]" id="type-of-business" placeholder="ประเภทธุรกิจ / Type Of Business" data-error="" required="required">
                                <span class="form-control-feedback" aria-hidden="true"></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md col-sm-auto">
                        <div class="form-group has-feedback">
                            <label class="control-label visuallyhidden" for="c-address">ที่อยู่ / Address</label>
                            <div class="block-control">
                                <input type="text" class="form-control" name="workhistory[0][]" id="c-address" placeholder="ที่อยู่ / Address" data-error="" required="required">
                                <span class="form-control-feedback" aria-hidden="true"></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md col-sm-auto">
                        <div class="form-group has-feedback">
                            <label class="control-label visuallyhidden" for="c-telephone">โทรศัพท์ / Telephone</label>
                            <div class="block-control">
                                <input type="text" class="form-control" name="workhistory[0][]" id="c-telephone" placeholder="โทรศัพท์ / Telephone" data-error="" required="required">
                                <span class="form-control-feedback" aria-hidden="true"></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row gutters-custom">
                    <div class="col-md col-sm-auto">
                        <div class="form-group has-feedback">
                            <label class="control-label visuallyhidden" for="first-position">ตำแหน่งแรกเข้า / First Position</label>
                            <div class="block-control">
                                <input type="text" class="form-control" name="workhistory[0][]" id="first-position" placeholder="ตำแหน่งแรกเข้า / First Position" data-error="" required="required">
                                <span class="form-control-feedback" aria-hidden="true"></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md col-sm-auto">
                        <div class="form-group has-feedback">
                            <label class="control-label visuallyhidden" for="last-position">ตำแหน่งสุดท้าย / Last Position</label>
                            <div class="block-control">
                                <input type="text" class="form-control" name="workhistory[0][]" id="last-position" placeholder="ตำแหน่งสุดท้าย / Last Position" data-error="" required="required">
                                <span class="form-control-feedback" aria-hidden="true"></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md col-sm-auto">
                        <div class="form-group has-feedback">
                            <label class="control-label visuallyhidden" for="last-salary">เงินเดือนสุดท้าย / Last Salary</label>
                            <div class="block-control">
                                <input type="text" class="form-control" name="workhistory[0][]" id="last-salary" placeholder="เงินเดือนสุดท้าย / Last Salary" data-error="" required="required">
                                <span class="form-control-feedback" aria-hidden="true"></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md col-sm-auto">
                        <div class="form-group has-feedback">
                            <label class="control-label visuallyhidden" for="other-salary">รายได้อื่น ๆ / Other</label>
                            <div class="block-control">
                                <input type="text" class="form-control" name="workhistory[0][]" id="other-salary" placeholder="รายได้อื่น ๆ / Other" data-error="" required="required">
                                <span class="form-control-feedback" aria-hidden="true"></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row gutters-custom mt-2">
                    <div class="col">
                        <div class="form-group has-feedback">
                            <label class="control-label font-size-C" for="brief-responsibility">ลักษณะงานที่รับผิดชอบโดยย่อ / Brief Responsibility</label>
                            <div class="block-control">
                                <input type="text" class="form-control" name="workhistory[0][]" id="brief-responsibility" placeholder="ลักษณะงานที่รับผิดชอบโดยย่อ / Brief Responsibility" data-error="" required="required">
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
                                    <label class="control-label visuallyhidden" for="c-period">ระยะเวลา/Period</label>
                                    <div class="block-control">
                                        <input type="text" class="form-control" name="workhistory[0][]" id="c-period" placeholder="ระยะเวลา/Period" data-error="" required="required">
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
                                    <label class="control-label visuallyhidden" for="c-start-date">วันเริ่มงาน</label>
                                    <div class="block-control">
                                    <input type="date" class="form-control" name="workhistory[0][]" id="c-start-date" placeholder="วันเริ่มงาน"
                                        data-error="" required="required">
                                    <span class="form-control-feedback" aria-hidden="true"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-auto">
                                <div class="txt">
                                    ถึง
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group has-feedback">
                                    <label class="control-label visuallyhidden" for="c-end-date">สิ้นสุดวันที่</label>
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
                            <div class="title"> พี่น้อง / Brother Sister</div>
                        </div> -->
                        <div class="col text-right">
                            <div class="button delete-form-4">
                                <a href="javascript:void(0);" class="btn btn-primary clickdel_works" data-action="adds" title="btn btn-primary">
                                    <!-- <span class="feather icon-minus text-white"></span> -->
                                    ลบ
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="row gutters-custom align-items-end">
                        <div class="col-md col-sm-auto">
                            <div class="form-group has-feedback">
                                <label class="control-label font-size-C -title" for="company-name-2">2. ชื่อบริษัท / Company’s Nam</label>
                                <div class="block-control">
                                    <input type="text" class="form-control" name="workhistory[tmp][]" id="company-name-2" placeholder="ชื่อบริษัท / Company’s Name" data-error="">
                                    <span class="form-control-feedback" aria-hidden="true"></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md col-sm-auto">
                            <div class="form-group has-feedback">
                                <label class="control-label visuallyhidden" for="type-of-business-2">ประเภทธุรกิจ / Type Of Business</label>
                                <div class="block-control">
                                    <input type="text" class="form-control" name="workhistory[tmp][]" id="type-of-business-2" placeholder="ประเภทธุรกิจ / Type Of Business" data-error="">
                                    <span class="form-control-feedback" aria-hidden="true"></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md col-sm-auto">
                            <div class="form-group has-feedback">
                                <label class="control-label visuallyhidden" for="c-address-2">ที่อยู่ / Address</label>
                                <div class="block-control">
                                    <input type="text" class="form-control" name="workhistory[tmp][]" id="c-address-2" placeholder="ที่อยู่ / Address" data-error="">
                                    <span class="form-control-feedback" aria-hidden="true"></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md col-sm-auto">
                            <div class="form-group has-feedback">
                                <label class="control-label visuallyhidden" for="c-telephone-2">โทรศัพท์ / Telephone</label>
                                <div class="block-control">
                                    <input type="text" class="form-control" name="workhistory[tmp][]" id="c-telephone-2" placeholder="โทรศัพท์ / Telephone" data-error="">
                                    <span class="form-control-feedback" aria-hidden="true"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row gutters-custom">
                        <div class="col-md col-sm-auto">
                            <div class="form-group has-feedback">
                                <label class="control-label visuallyhidden" for="first-position-2">ตำแหน่งแรกเข้า / First Position</label>
                                <div class="block-control">
                                    <input type="text" class="form-control" name="workhistory[tmp][]" id="first-position-2" placeholder="ตำแหน่งแรกเข้า / First Position" data-error="">
                                    <span class="form-control-feedback" aria-hidden="true"></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md col-sm-auto">
                            <div class="form-group has-feedback">
                                <label class="control-label visuallyhidden" for="last-position-2">ตำแหน่งแรกเข้า / Last Position</label>
                                <div class="block-control">
                                    <input type="text" class="form-control" name="workhistory[tmp][]" id="last-position-2" placeholder="ตำแหน่งแรกเข้า / Last Position" data-error="">
                                    <span class="form-control-feedback" aria-hidden="true"></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md col-sm-auto">
                            <div class="form-group has-feedback">
                                <label class="control-label visuallyhidden" for="last-salary-2">เงินเดือนสุดท้าย / Last Salary</label>
                                <div class="block-control">
                                    <input type="text" class="form-control" name="workhistory[tmp][]" id="last-salary-2" placeholder="เงินเดือนสุดท้าย / Last Salary" data-error="">
                                    <span class="form-control-feedback" aria-hidden="true"></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md col-sm-auto">
                            <div class="form-group has-feedback">
                                <label class="control-label visuallyhidden" for="other-salary-2">รายได้อื่น ๆ / Other</label>
                                <div class="block-control">
                                    <input type="text" class="form-control" name="workhistory[tmp][]" id="other-salary-2" placeholder="รายได้อื่น ๆ / Other" data-error="">
                                    <span class="form-control-feedback" aria-hidden="true"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row gutters-custom mt-2">
                        <div class="col">
                            <div class="form-group has-feedback">
                                <label class="control-label font-size-C" for="brief-responsibility-2">ลักษณะงานที่รับผิดชอบโดยย่อ / Brief Responsibility</label>
                                <div class="block-control">
                                    <input type="text" class="form-control" name="workhistory[tmp][]" id="brief-responsibility-2" placeholder="ลักษณะงานที่รับผิดชอบโดยย่อ / Brief Responsibility" data-error="">
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
                                        <label class="control-label visuallyhidden" for="c-period-2">ระยะเวลา/Period</label>
                                        <div class="block-control">
                                            <input type="text" class="form-control" name="workhistory[tmp][]" id="c-period-2" placeholder="ระยะเวลา/Period" data-error="">
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
                                        <label class="control-label visuallyhidden" for="c-start-date">วันเริ่มงาน</label>
                                        <div class="block-control">
                                        <input type="date" class="form-control" name="workhistory[tmp][]" id="c-start-date" placeholder="วันเริ่มงาน"
                                            data-error="">
                                        <span class="form-control-feedback" aria-hidden="true"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-auto">
                                    <div class="txt">
                                        ถึง
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group has-feedback">
                                        <label class="control-label visuallyhidden" for="c-end-date">สิ้นสุดวันที่</label>
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
                <div class="title">ประวัติการฝึกอบรม/ดูงาน/ฝึกงาน / JOB TRAINING/INSPECTION/APPRENTICESHIP <span>*</span></div>
                <div class="row gutters-custom align-items-center py-sm-4">
                    <div class="col-sm">
                        <div class="topic">ความสามารถทางภาษา / Language Abilities</div>
                    </div>
                    <div class="col-sm-auto">
                        <div class="button ">
                            <a href="javascript:void(0);" class="btn btn-primary clickdel_language" data-action="adds" title="btn btn-primary">
                                <span class="feather icon-plus text-white"></span>
                                Add Education History
                            </a>
                        </div>
                    </div>
                </div>
                <div class="row gutters-custom">
                    <div class="col-sm">
                        <div class="form-group">
                            <label class="control-label font-size-C" for="l-english">ภาษาอังกฤษ/English</label>
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
                            <label class="control-label font-size-C" for="e-excellent-1">พูด / Speaking</label>
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
                            <label class="control-label font-size-C" for="e-excellent-2">ฟัง / listening</label>
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
                            <label class="control-label font-size-C" for="e-excellent-3">เขียน / Writing</label>
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
                            <div class="title"> พี่น้อง / Brother Sister</div>
                        </div> -->
                        <div class="col text-right">
                            <div class="button delete-form-5">
                                <a href="javascript:void(0);" class="btn btn-primary clickdel_language" data-action="dels" title="btn btn-primary">
                                    <!-- <span class="feather icon-minus text-white"></span> -->
                                    ลบ
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="row gutters-custom">
                        <div class="col-sm">
                            <div class="form-group">
                                <label class="control-label visuallyhidden" for="l-china">ภาษาจีน/Chinese</label>
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
                                <label class="control-label visuallyhidden" for="c-excellent-1">พูด / Speaking</label>
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
                                <label class="control-label visuallyhidden" for="c-excellent-2">ฟัง / listening</label>
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
                                <label class="control-label visuallyhidden" for="c-excellent-3">เขียน / Writing</label>
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
                <div class="title">ข้อมูลทั่วไป GENERAL DATA</div>
                <div class="row gutters-custom mt-3">
                    <div class="col">
                        <div class="topic">1. การไปปฏิบัติงานต่างจังหวัด / Can you work up country?</div>
                    </div>
                </div>
                <div class="row gutters-custom">
                    <div class="col-sm mt-sm-3 mt-0">
                        <fieldset>
                            <legend class="control-legend">เป็นการประจำ / Permanent </legend>
                            <div class="row gutters-custom">
                                <div class="col-auto">
                                    <div class="form-group form-check -nm IC">
                                        <input class="form-check-input radio-check" type="radio" name="information[countryPermanent]" id="permanent-no" value="ขัดข้อง" required="required">
                                        <label class="control-label" for="permanent-no">
                                            ขัดข้อง / No
                                        </label>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group form-check -nm IC">
                                        <input class="form-check-input radio-check" type="radio" name="information[countryPermanent]" id="permanent-yes" value="ไม่ขัดข้อง" required="required">
                                        <label class="control-label" for="permanent-yes">
                                            ไม่ขัดข้อง / Yes
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </fieldset>
                    </div>
                    <div class="col-sm mt-sm-3 mt-3">
                        <fieldset>
                            <legend class="control-legend">เป็นครั้งคราว / Temporary</legend>
                            <div class="row gutters-custom">
                                <div class="col-auto">
                                    <div class="form-group form-check -nm IC">
                                        <input class="form-check-input radio-check" type="radio" name="information[countryTemporary]" id="temporary-no" value="ขัดข้อง" required="required">
                                        <label class="control-label" for="temporary-no">
                                            ขัดข้อง / No
                                        </label>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group form-check -nm IC">
                                        <input class="form-check-input radio-check" type="radio" name="information[countryTemporary]" id="temporary-yes" value="ไม่ขัดข้อง" required="required">
                                        <label class="control-label" for="temporary-yes">
                                            ไม่ขัดข้อง / Yes
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </fieldset>
                    </div>
                </div>
                <div class="row gutters-custom mt-lg-5 mt-4">
                    <div class="col">
                        <div class="topic -np">2. การเจ็บป่วยขนาดหนัก หรือโรคติดต่อร้ายแรง / Have you ever been seriously ill or contacted with contagious disease?</div>
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
                                            ไม่เคย / No
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
                                            เคย (ระบุ) / Yes (Explain)
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
                        <div class="topic -np">3. โรคประจำตัว / Any physical disability or handicap</div>
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
                                            ไม่เคย / No
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
                                            มี / Yes
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
                        <div class="topic -np">4. เคยถูกจำคุก หรือต้องโทษทางอาญาหรือไม่ / Have you ever been arrested, takes custody, help for investigation or questioning or charged by any law enforcement authority?</div>
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
                                            ไม่เคย / No
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
                                            เคย เพราะ / Yes (Reason)
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
                        <div class="topic -np">5. เคยถูกให้ออกจากงานหรือเลิกจ้างหรือไม่ / Have you ever been discharged from employment for any reason?</div>
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
                                            ไม่เคย / No
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
                                            เคย เพราะ / Yes (Reason)
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
                        <div class="topic -np">6. ท่านมีเพื่อนหรือญาติที่ทำงานที่บริษัทนี้หรือไม่ / Have you any friend or relative employed here?</div>
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
                                            ไม่เคย / No
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
                                            เคย เพราะ / Yes (Reason)
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
                        <div class="topic -np">7. ท่านทราบข่าวการสมัครงานจาก / Where did you hear of our vacancy?</div>
                    </div>
                </div>
                <div class="row gutters-custom align-items-center">
                    <div class="col-md-3 col-sm-6">
                        <fieldset>
                            <legend class="visuallyhidden"></legend>
                            <div class="form-group form-check -nm I">
                                <input class="form-check-input radio-check -C hearing-checking" type="radio" name="information[hearing]" id="personal-recommendation" value="เจ้าหน้าที่สภาบัน" checked>
                                <label class="control-label" for="personal-recommendation">
                                    เจ้าหน้าที่สภาบัน ชื่อ

                                    personal-recommendation
                                </label>
                            </div>
                        </fieldset>
                    </div>
                    <div class="col-md-8 col-sm-6 hearingPerson1">
                        <div class="form-group has-feedback -nm I">
                            <label class="control-label visuallyhidden" for="a-name-1">Spicyfi</label>
                            <div class="block-control">
                                <input type="text" class="form-control" name="information[hearingPerson1]" id="a-name-1" placeholder="ชื่อ / Name" data-error="" required="required">
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
                                    อื่นๆ ระบุ others
                                </label>
                            </div>
                        </fieldset>
                    </div>
                    <div class="col-md-8 col-sm-6 mt-md-2 hearingPerson2">
                        <div class="form-group has-feedback -nm I">
                            <label class="control-label visuallyhidden" for="a-name-2">Spicyfi</label>
                            <div class="block-control">
                                <input type="text" class="form-control" name="information[hearingPerson2]" id="a-name-2" placeholder="ชื่อ / Name" data-error="">
                                <span class="form-control-feedback" aria-hidden="true"></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row gutters-custom mt-lg-5 mt-4">
                    <div class="col">
                        <div class="title">8. ข้อมูลเพิ่มเติม FURTHER INFORMATION</div>
                    </div>
                </div>
                <div class="row gutters-custom">
                    <div class="col">
                        <div class="form-group has-feedback -nm">
                            <div class="topic py-0 pb-2">ข้อมูลเพิ่มเติมซึ่งท่านคิดว่าจะเป็นประโยชน์ต่อการสมัครงาน/Further information which you considered to be beneficial to application.</div>
                            <label class="control-label visuallyhidden" for="textarea-1">ข้อมูลเพิ่มเติมซึ่งท่านคิดว่าจะเป็นประโยชน์ต่อการสมัครงาน/Further information which you considered to be beneficial to application.</label>
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
                        <div class="title">9. ผู้ให้การรับรอง PERSONAL REFERENCE <span>*</span></div>
                    </div>
                </div>
                <div class="row gutters-custom align-items-center pt-3">
                    <div class="col-sm-9">
                        <div class="topic"> โปรดให้รายละเอียดของผู้ให้การรับรอง (ซึ่งไม่ใช่ญาติ) ที่รู้จักตัวท่านดี / Give information of references (other than relatives)who know you</div>
                    </div>

                    <div class="col-sm text-right">
                        <div class="button  my-sm-0 my-3">
                            <a href="javascript:void(0);" class="btn btn-primary clickdel_reference" data-action="adds" title="btn btn-primary">
                                <span class="feather icon-plus text-white"></span>
                                Add Education History
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
                                    ไม่มี / No
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
                                    มี / Yes
                                </label>
                            </div>
                        </fieldset>
                    </div>
                </div>
                <div class="row gutters-custom reference">
                    <div class="col-md col-sm">
                        <div class="form-group has-feedback">
                            <label class="control-label" for="p-name-1">1. ชื่อ-นามสกุล / Name-Surname</label>
                            <div class="block-control">
                                <input type="text" class="form-control" name="reference[0][]" id="p-name-1" placeholder="ชื่อ-นามสกุล / Name-Surname" data-error="">
                                <span class="form-control-feedback" aria-hidden="true"></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md col-sm">
                        <div class="form-group has-feedback">
                            <label class="control-label" for="p-address-1">ที่อยู่/สถานที่ทำงาน/Address/Office Address</label>
                            <div class="block-control">
                                <input type="text" class="form-control" name="reference[0][]" id="p-address-1" placeholder="ที่อยู่/สถานที่ทำงาน/Address/Office Address" data-error="">
                                <span class="form-control-feedback" aria-hidden="true"></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md col-sm">
                        <div class="form-group has-feedback">
                            <label class="control-label" for="p-position-1">ตำแหน่ง / Position</label>
                            <div class="block-control">
                                <input type="text" class="form-control" name="reference[0][]" id="p-position-1" placeholder="ตำแหน่ง / Position" data-error="">
                                <span class="form-control-feedback" aria-hidden="true"></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row gutters-custom reference">
                    <div class="col-sm-4">
                        <div class="form-group has-feedback">
                            <label class="control-label" for="p-telephone-1">โทรศัพท์ / Telephone</label>
                            <div class="block-control">
                                <input type="text" class="form-control" name="reference[0][]" id="p-telephone-1" placeholder="โทรศัพท์ / Telephone" data-error="">
                                <span class="form-control-feedback" aria-hidden="true"></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group has-feedback">
                            <label class="control-label" for="p-relations-1">ความสัมพันธ์ / Relations</label>
                            <div class="block-control">
                                <input type="text" class="form-control" name="reference[0][]" id="p-relations-1" placeholder="ความสัมพันธ์ / Relations" data-error="">
                                <span class="form-control-feedback" aria-hidden="true"></span>
                            </div>
                        </div>
                    </div>
                </div>
                <!--//////////////////////////////// End Clone Language /////////////////////////////// -->
                <div class="d-none mt-3" id="clone_reference">
                    <div class="row align-items-center">
                        <!-- <div class="col">
                            <div class="title"> พี่น้อง / Brother Sister</div>
                        </div> -->
                        <div class="col text-right">
                            <div class="button delete-form-6">
                                <a href="javascript:void(0);" class="btn btn-primary clickdel_reference" data-action="dels" title="btn btn-primary">
                                    <!-- <span class="feather icon-minus text-white"></span> -->
                                    ลบ
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="row gutters-custom">
                        <div class="col-md col-sm">
                            <div class="form-group has-feedback">
                                <label class="control-label" for="p-name-2">2. ชื่อ-นามสกุล / Name-Surname</label>
                                <div class="block-control">
                                    <input type="text" class="form-control" name="reference[tmp][]" id="p-name-2" placeholder="ชื่อ-นามสกุล / Name-Surname" data-error="">
                                    <span class="form-control-feedback" aria-hidden="true"></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md col-sm">
                            <div class="form-group has-feedback">
                                <label class="control-label" for="p-address-2">ที่อยู่/สถานที่ทำงาน/Address/Office Address</label>
                                <div class="block-control">
                                    <input type="text" class="form-control" name="reference[tmp][]" id="p-address-2" placeholder="ที่อยู่/สถานที่ทำงาน/Address/Office Address" data-error="">
                                    <span class="form-control-feedback" aria-hidden="true"></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md col-sm">
                            <div class="form-group has-feedback">
                                <label class="control-label" for="p-position-2">ตำแหน่ง / Position</label>
                                <div class="block-control">
                                    <input type="text" class="form-control" name="reference[tmp][]" id="p-position-2" placeholder="ตำแหน่ง / Position" data-error="">
                                    <span class="form-control-feedback" aria-hidden="true"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row gutters-custom">
                        <div class="col-sm-4">
                            <div class="form-group has-feedback">
                                <label class="control-label" for="p-telephone-2">โทรศัพท์ / Telephone</label>
                                <div class="block-control">
                                    <input type="text" class="form-control" name="reference[tmp][]" id="p-telephone-2" placeholder="โทรศัพท์ / Telephone" data-error="">
                                    <span class="form-control-feedback" aria-hidden="true"></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group has-feedback">
                                <label class="control-label" for="p-relations-1">ความสัมพันธ์ / Relations</label>
                                <div class="block-control">
                                    <input type="text" class="form-control" name="reference[tmp][]" id="p-relations-1" placeholder="ความสัมพันธ์ / Relations" data-error="">
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
                        <div class="title">สำหรับเจ้าหน้าที่ทรัพยากรบุคคล / FOR COMPANY USE ONLY</div>
                    </div>
                </div>
                <div class="upload-documents">
                    <div class="row gutters-custom">
                        <div class="col-12">
                            <div class="form-group has-feedback">
                                <div class="topic">เอกสารการศึกษา / Transcript <span>*</span> </div>
                                <label tabindex="0" for="use-only-upload-1" class="btn btn-primary btn-file -upload-1">
                                    <input class="input-file" id="use-only-upload-1" type="file">
                                    <div class="row gutters-custom">
                                        <div class="col-auto">
                                            <img class="icon" src="{$template}/assets/img/icon/icon-upload.svg" alt="icon upload">
                                        </div>
                                        <div class="col">
                                            <span class="typo-xs text-white">อัพโหลด / Upload</span>
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
                                <div class="topic">สำเนาทะเบียนบ้าน / Household Registration เอกสารทางการทหาร / Military Document<span>*</span></div>
                                <label tabindex="0" for="use-only-upload-2" class="btn btn-primary btn-file -upload-2">
                                    <input class="input-file" id="use-only-upload-2" type="file">
                                    <div class="row gutters-custom">
                                        <div class="col-auto">
                                            <img class="icon" src="{$template}/assets/img/icon/icon-upload.svg" alt="icon upload">
                                        </div>
                                        <div class="col">
                                            <span class="typo-xs text-white">อัพโหลด / Upload</span>
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
                                <div class="topic">สำเนาบัตรประชาชน / Identification Card เอกสารผ่านงาน / Work Experience Reference<span>*</span></div>
                                <label tabindex="0" for="use-only-upload-3" class="btn btn-primary btn-file -upload-3">
                                    <input class="input-file" id="use-only-upload-3" type="file">
                                    <div class="row gutters-custom">
                                        <div class="col-auto">
                                            <img class="icon" src="{$template}/assets/img/icon/icon-upload.svg" alt="icon upload">
                                        </div>
                                        <div class="col">
                                            <span class="typo-xs text-white">อัพโหลด / Upload</span>
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
                                <div class="topic">สำเนาทะเบียนสมรส / Marriage Registration<span>*</span></div>
                                <label tabindex="0" for="use-only-upload-4" class="btn btn-primary btn-file -upload-4">
                                    <input class="input-file" id="use-only-upload-4" type="file">
                                    <div class="row gutters-custom">
                                        <div class="col-auto">
                                            <img class="icon" src="{$template}/assets/img/icon/icon-upload.svg" alt="icon upload">
                                        </div>
                                        <div class="col">
                                            <span class="typo-xs text-white">อัพโหลด / Upload</span>
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
                                <div class="topic">สำเนาใบอนุญาตขับขี่รถยนต์, จักรยานยนต์ / Private car, Motorcycle License<span>*</span></div>
                                <label tabindex="0" for="use-only-upload-5" class="btn btn-primary btn-file -upload-5">
                                    <input class="input-file" id="use-only-upload-5" type="file">
                                    <div class="row gutters-custom">
                                        <div class="col-auto">
                                            <img class="icon" src="{$template}/assets/img/icon/icon-upload.svg" alt="icon upload">
                                        </div>
                                        <div class="col">
                                            <span class="typo-xs text-white">อัพโหลด / Upload</span>
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
                                <div class="topic">เอกสารอื่น ๆ / Other<span>*</span></div>
                                <label tabindex="0" for="use-only-upload-6" class="btn btn-primary btn-file -upload-6">
                                    <input class="input-file" id="use-only-upload-6" type="file">
                                    <div class="row gutters-custom">
                                        <div class="col-auto">
                                            <img class="icon" src="{$template}/assets/img/icon/icon-upload.svg" alt="icon upload">
                                        </div>
                                        <div class="col">
                                            <span class="typo-xs text-white">อัพโหลด / Upload</span>
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
                            <label class="control-label" for="textarea-2">ความเห็นของเจ้าหน้าที่ทรัพยากรบุคคล / Human Resource Officer’s Comments</label>
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
                                ข้าพเจ้าในฐานะเจ้าของข้อมูลส่วนบุคคล ยินยอมมอบเอกสารและหลักฐานประกอบการสมัครงานนี้ให้แก่สถาบันและอนุญาตให้สถาบันเก็บรวบรวม ใช้ หรือเปิดเผย ข้อมูลส่วนบุคคลของข้าพเจ้า
                                เพื่อวัตถุประสงค์หลักในการบริหารจัดการเกี่ยวกับความสัมพันธ์ในการจ้างแรงงานและการบริหารงานบุคคลในองค์กร อันเป็นการจำเป็นโดยชอบด้วยกฏหมายและตามพระราชบัญญัติคุ้มครอง
                                ข้อมูลส่วนบุคคล พ.ศ.2562 เท่านั้น
                                </br>
                                </br>
                                (I, as the data subject consent to provide/give the documents and the evidences for this job application to the GIT andallow GIT to collect, use or disclose
                                my personal data, primarily for the purposes of managing relations in employment and Human Resources management in the company, in accordance by law
                                and under the Personal Data Protection Act (B.E.2562) only)
                            </label>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group form-check">
                            <input class="form-check-input" type="checkbox" value="1" name="comment[confirm][1]" id="from-check-2" required="required">
                            <label class="control-label c-color" for="from-check-2">
                                ข้าพเจ้าขอรับรองว่าข้อความข้างต้นและหลักฐานต่าง ๆ ถูกต้องและเป็นความจริงทุกประการ ข้าพเจ้ายินดีให้สถาบันสอบประวัติเกี่ยวกับตัว I certify that my answers or evidences are true. I understand that any incorrect, incomplete, or false statement of information
                            </label>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group form-check">
                            <input class="form-check-input" type="checkbox" value="1" name="comment[confirm][2]" id="from-check-3" required="required">
                            <label class="control-label c-color" for="from-check-3">
                                furnished by me will be considered as just cause for rejection of this application or dismissal from employment without advance
                                </br>
                                ข้าพเจ้าได้ และหากข้าพเจ้าได้รับการพิจารณาเข้าทำงาน และสถาบันตรวจสอบว่าข้อความที่ให้ไว้ไม่ตรงกับความจริง ข้าพเจ้ายินดีให้สถาบันยกเลิกสัญญา
                            </label>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group form-check">
                            <input class="form-check-input" type="checkbox" value="1" name="comment[confirm][3]" id="from-check-4" required="required">
                            <label class="control-label c-color" for="from-check-4">
                                จ้างของข้าพเจ้าทันที โดยไม่ต้องบอกกล่าวล่วงหน้า และไม่ต้องจ่ายเงินชดเชยหรือค่าเสียหายใด ๆ ทั้งสิ้น
                                </br>
                                notice or any compensation of severance pay whatsoever
                            </label>
                        </div>
                    </div>
                </div>
                <div class="row gutters-custom mt-5 text-center">
                    <div class="col">
                        {* <button type="submit" id="submitform" class="btn btn-xl btn-primary btn-form" title="SUBMIT AN APPLICATION">SUBMIT AN APPLICATION</button> *}
                        <input type="hidden" id="g-recaptcha-response" name="g-recaptcha-response">
                        <input type="submit" class="btn btn-xl btn-primary btn-form" id="clicksubmitfromcar" value="SUBMIT AN APPLICATION">
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
</section>
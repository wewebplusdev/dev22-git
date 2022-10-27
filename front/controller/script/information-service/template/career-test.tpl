<section class="site-container" data-menuid="{$settingModulus['menuid']}">
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
                                            <input type="text" class="form-control" name="info[]" id="salaly" placeholder="เงินเดือนที่ต้องการ" data-error="" required="required">
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
                    </div>
                </div>
                <div class="row gutters-custom mt-5 text-center">
                    <div class="col">
                        {* <button type="submit" id="submitform" class="btn btn-xl btn-primary btn-form" title="SUBMIT AN APPLICATION">SUBMIT AN APPLICATION</button> *}
                        <input type="submit" class="btn btn-xl btn-primary btn-form" value="SUBMIT AN APPLICATION">
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
</section>
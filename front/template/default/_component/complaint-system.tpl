<section class="site-container sitekey" data-page="formcomplain" data-id="{$sitekey}">
    <div class="default-header">
        <div class="top-graphic mb-4">
            <figure class="cover">
                <img class="figure-img img-fluid" src="{$template}/assets/img/background/mock-top-grapphic-2.png"
                    alt="">
            </figure>
            <div class="container">
                <div class="wrapper">
                    <div class="title typo-lg">{$settingModulus.title}</div>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{$ul}/home">{$lang['menu']['home']}</a></li>
                        <li class="breadcrumb-item active" aria-current="page"><a
                                href="{$ul}/policy">{$lang["policy"]["title"]}</a></li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <div class="default-page about">
        <div class="container">
            <div class="complaint-system-form">
                <div class="title">{$lang["policy"]["complaint"]}</div>
                <div class="desc"></div>
                <form data-toggle="validator" name="complainForm" id="complainForm" role="form" class="form-default" method="post">
                    <input type="hidden" name="masterkey" value="{$masterkey}">
                    <div class="form-group has-feedback">
                        <label class="control-label" for="complaintSystemTopic">{$lang['complaint']['group']}</label>
                        <div class="select-wrapper">
                            <select class="select-control select-year" name="inputGroup" id="inputGroup"
                                style="width: 100%;">
                                {foreach $callContactGroup as $keycallContactGroup => $valuecallContactGroup}
                                <option value="{$valuecallContactGroup.id}">{$valuecallContactGroup.subject}</option>
                                {/foreach}
                            </select>
                        </div>
                    </div>
                    <div class="form-group has-feedback -nm">
                        <label class="control-label" for="complaintSystemTextArea">{$lang['contact']['text']}</label>
                        <div class="block-control">
                            <textarea class="form-control form-text-area h-100" rows="6" cols="100" name="inputMessage"
                                id="inputMessage" value="Spicyfi" data-error="" required></textarea>
                            <span class="form-control-feedback" aria-hidden="true"></span>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm">
                            <div class="form-group has-feedback">
                                <label class="control-label"
                                    for="complaintSystemF-name">{$lang['contact']['name']}</label>
                                <span>*</span>
                                <div class="block-control">
                                    <input type="text" class="form-control" name="inputName" id="inputName"
                                        placeholder="{$lang['system']['fill']} {$lang['contact']['name']}" data-error=""
                                        required>
                                    <span class="form-control-feedback" aria-hidden="true"></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm">
                            <div class="form-group has-feedback">
                                <label class="control-label"
                                    for="complaintSystemE-mail">{$lang['contact']['email']}</label>
                                <span>*</span>
                                <div class="block-control">
                                    <input type="email" class="form-control" name="inputEmail" id="inputEmail"
                                        placeholder="{$lang['system']['fill']}{$lang['contact']['email']}" data-error=""
                                        required>
                                    <span class="form-control-feedback" aria-hidden="true"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm">
                            <div class="form-group has-feedback">
                                <label class="control-label"
                                    for="complaintSystemAdress">{$lang['contact']['address']}</label>
                                <div class="block-control">
                                    <input type="text" class="form-control" name="inputAddress" id="inputAddress"
                                        placeholder="{$lang['system']['fill']}{$lang['contact']['address']}"
                                        data-error="" required>
                                    <span class="form-control-feedback" aria-hidden="true"></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm">
                            <div class="form-group has-feedback">
                                <label class="control-label"
                                    for="complaintSystemTelephone">{$lang['contact']['tel']}</label>
                                <div class="block-control">
                                    <input type="tel" class="form-control" name="inputTel" id="inputTel"
                                        placeholder="{$lang['system']['fill']}{$lang['contact']['tel']}" data-error=""
                                        required onkeypress="return isNumberKey(event)">
                                    <span class="form-control-feedback" aria-hidden="true"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    {* <div class="row">
                                <div class="col-sm">
                                    <div class="form-group has-feedback">
                                        <label class="control-label" for="complaintSystemPassword">Password</label>
                                        <div class="block-control">
                                            <input type="password" class="form-control" id="complaintSystemPassword" placeholder="" data-error="">
                                            <span class="form-control-feedback" aria-hidden="true"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm">
                                    <div class="form-group has-feedback">
                                        <label class="control-label" for="CaptchaMockup">Chaptcha Mockup</label>
                                        <div class="block-control">
                                            <input type="text" class="form-control" id="CaptchaMockup" placeholder="Captcha Mockup" data-error="">
                                            <span class="form-control-feedback" aria-hidden="true"></span>
                                        </div>
                                    </div>
                                </div>
                            </div> *}
                    <div class="row mt-sm-5 mt-4">
                        <div class="col text-right">
                        <input type="hidden" id="g-recaptcha-response" name="g-recaptcha-response">
                            <input type="submit" class="btn btn-primary" id="submitForm" title="btn btn-primary"
                                value="{$lang['system']['submit']}"></input>
                        </div>
                        <div class="col text-left">
                            <button class="btn btn-primary -cancel" id="cancelForm"
                                title="{$lang['system']['cancel']}">{$lang['system']['cancel']}</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
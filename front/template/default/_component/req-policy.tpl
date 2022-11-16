<section class="site-container sitekey" data-page="req" data-id="{$sitekey}">
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
                <div class="title">{$lang["policy"]["request"]}</div>
                <form data-toggle="validator" name="reqForm" id="reqForm" role="form" class="form-default"
                    method="post">
                    <div class="row">
                        <div class="col-sm">
                            <div class="form-group has-feedback">
                                <label class="control-label"
                                    for="complaintSystemF-name">{$lang['policy']['fname']}</label>
                                <span>*</span>
                                <div class="block-control">
                                    <input type="text" class="form-control" name="inputfName" id="inputfName"
                                        placeholder="{$lang['system']['fill']} {$lang['policy']['fname']}" data-error=""
                                        required>
                                    <span class="form-control-feedback" aria-hidden="true"></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm">
                            <div class="form-group has-feedback">
                                <label class="control-label"
                                    for="complaintSystemF-name">{$lang['policy']['lname']}</label>
                                <span>*</span>
                                <div class="block-control">
                                    <input type="text" class="form-control" name="inputlName" id="inputlName"
                                        placeholder="{$lang['system']['fill']} {$lang['policy']['lname']}" data-error=""
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
                                    for="complaintSystemE-mail">{$lang['policy']['email']}</label>
                                <span>*</span>
                                <div class="block-control">
                                    <input type="email" class="form-control" name="inputEmail" id="inputEmail"
                                        placeholder="{$lang['system']['fill']}{$lang['policy']['email']}" data-error=""
                                        required>
                                    <span class="form-control-feedback" aria-hidden="true"></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm">
                            <div class="form-group has-feedback">
                                <label class="control-label"
                                    for="complaintSystemTelephone">{$lang['policy']['tel']}</label>
                                    <span>*</span>
                                <div class="block-control">
                                    <input type="tel" class="form-control" name="inputTel" id="inputTel"
                                        placeholder="{$lang['system']['fill']}{$lang['policy']['tel']}" data-error=""
                                        required onkeypress="return isNumberKey(event)">
                                    <span class="form-control-feedback" aria-hidden="true"></span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row" style="margin: 2rem 0">
                        <div class="col-sm" style="padding: 0;">
                            <div class="form-group has-feedback" style="background-color: #eeeeee;padding: 30px 25px;">
                                <label style="font-size: 16px; font-color:#707070;line-height: 1.5em;"
                                    for="complaintSystemE-mail">{$lang['policy']['tx1']}

                                    </br></br></br>
                                    {$lang['policy']['tx2']}</label>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm">
                            <div class="form-group has-feedback">
                                <div class="form-check d-flex align-items-center">
                                    <input class="form-check-input" type="checkbox" value="" name="checkacp" id="checkacp" data-error="" required>
                                    <label class="form-check-label" for="checkacp">
                                        <small>{$lang['policy']['acp']}</small>
                                    </label>
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
                        <div class="col text-center">
                            <input type="submit" class="btn btn-primary" id="submitForm" title="btn btn-primary"
                                value="{$lang['policy']['btn-req']}"></input>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
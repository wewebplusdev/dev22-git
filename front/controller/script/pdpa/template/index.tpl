

<section class="site-container">
    <div class="default-page">
        <!--begin::Default Header-->
        <div class="default-header">
            <div class="topbar">
                <div class="container">
                    <ol class="breadcrumb">
                        <li>
                            <a href="{$ul}/home" class="link">หน้าหลัก</a>
                        </li>
                        <li>
                            <a href="jacasvript:void(0)" class="link">ติดต่อเรา</a>
                        </li>
                    </ol>
                </div>
            </div>
        </div>
        {* {$settingWeb|print_pre} *}
        <!--end::Default Header-->
        <!--begin::Default Body-->
        <div class="default-body p-0">
            <div class="container">
                <div class="contact-block">
                    <div class="contact-info">
                        <div class="whead whead-lg">
                            <h2 class="title">ติดต่อเรา</h2>
                        </div>
                        <div class="info">
                            <div class="row row-20">
                                <div class="col-auto">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col-auto">
                                            <div class="icon">
                                                <img src="{$template}/assets/img/icon/address.svg" alt="">
                                            </div>
                                        </div>
                                        <div class="col">
                                            <h4 class="h-title">{$settingWebcontact.subjectoffice}</h4>
                                            <p class="desc">{$settingWeb.contact.address}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row row-20">
                                <div class="col-auto">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col-auto">
                                            <div class="icon">
                                                <img src="{$template}/assets/img/icon/phone-3.svg" alt="">
                                            </div>
                                        </div>
                                        <div class="col">
                                            <h4 class="title">ศูนย์บริการข้อมูล</h4>
                                            <div class="phone">
                                                <ul class="item-list">
                                                {foreach $callSettingTels as $keyTel => $callSettingTel}
                                                    {* <a href="" class="link">{$callSettingTel['detail']}</a> 
                                                    {if $keyTel+1 < $callSettingTels->_numOfRows}
                                                        <span>,</span>
                                                    {/if} *}
                                                    <li>
                                                        <a href="tel:{$callSettingTel['detail']}" class="link">{$callSettingTel['detail']}</a>
                                                    </li>
                                                {/foreach}
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-auto">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col-auto">
                                            <div class="icon">
                                                <img src="{$template}/assets/img/icon/fax.svg" alt="">
                                            </div>
                                        </div>
                                        <div class="col">
                                            <h4 class="title">แฟกซ์</h4>
                                            <p class="desc">{$settingWeb.contact.fax}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row row-20">
                                <div class="col-auto">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col-auto">
                                            <div class="icon">
                                                <img src="{$template}/assets/img/icon/email.svg" alt="">
                                            </div>
                                        </div>
                                        <div class="col">
                                            <h4 class="title">อีเมล</h4>
                                            <div class="phone">
                                                <ul class="item-list">
                                                    <li>
                                                        <a href="mailto:{$settingWeb.contact.email}" class="link">{$settingWeb.contact.email}</a>
                                                    </li>
                                                    {* <li>
                                                        <a href="#" class="link">chumphon2012@gmail.com</a>
                                                    </li> *}
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="social">
                                <a href="{$settingWeb.social.Facebook.link}" target="_blank" class="link" title="Facebook">
                                    <img src="{$template}/assets/img/icon/social-facebook-2.svg" alt="">
                                </a>
                                <a href="{$settingWeb.social.Line.link}" target="_blank" class="link" title="Twitter">
                                    <img src="{$template}/assets/img/icon/social-twitter-2.svg" alt="">
                                </a>
                                <a href="{$settingWeb.social.Youtube.link}" target="_blank" class="link" title="Youtube">
                                    <img src="{$template}/assets/img/icon/social-youtube-2.svg" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="obj-1">
                            <img src="{$template}/assets/img/static/shell.png" alt="">
                        </div>
                        <div class="obj-2">
                            <img src="{$template}/assets/img/static/chumphon.svg" alt="">
                        </div>
                    </div>
                    <div class="contact-form">
                        <div class="row no-gutters">
                            <div class="col-auto cover">
                                <img class="img-cover" src="{$template}/assets/img/static/contact-form.jpg" alt="">
                            </div>
                            <div class="col">
                                <form data-toggle="validator" role="form" class="form-default shadow-none" id="contactus" method="post">
                                    <h2 class="h-title">แบบฟอร์ติดต่อเรา</h2>
                                    <div class="obj">
                                        <img src="{$template}/assets/img/icon/comment.svg" alt="">
                                    </div>
                                    <div class="row row-20">
                                        <div class="col">
                                            <div class="form-group has-feedback">
                                                <div class="block-control">
                                                    <input class="form-control" 
                                                        type="text"
                                                        id="inputName"
                                                        name="inputName" 
                                                        value=""
                                                        placeholder=""
                                                        data-error=""
                                                        required="">
                                                    <span class="floating-label">ชื่อ-นามสกุล</span>
                                                    <span class="form-control-feedback" aria-hidden="true"></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-group has-feedback">
                                                <div class="block-control">
                                                    <input class="form-control" 
                                                        type="text"
                                                        id="inputTel"
                                                        name="inputTel" 
                                                        value=""
                                                        placeholder=""
                                                        data-error=""
                                                        required="">
                                                    <span class="floating-label">เบอร์โทรศัพท์</span>
                                                    <span class="form-control-feedback" aria-hidden="true"></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <input type="hidden" id="g-recaptcha-response" name="g-recaptcha-response">
                                    <input type="hidden" name="action" value="validate_captcha">
                                    <div class="row row-20">
                                        <div class="col">
                                            <div class="form-group has-feedback">
                                                <div class="block-control">
                                                    <input class="form-control" 
                                                        type="email"
                                                        id="inputEmail"
                                                        name="inputEmail" 
                                                        value=""
                                                        placeholder=""
                                                        data-error=""
                                                        required="">
                                                    <span class="floating-label">อีเมล</span>
                                                    <span class="form-control-feedback" aria-hidden="true"></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-group has-feedback">
                                                <div class="block-control">
                                                    <div class="select-wrapper">
                                                        <div class="row no-gutters align-items-center">
                                                            <div class="col-auto">
                                                                <label for="">เรื่องติดต่อ<span class="text-danger"></span></label>
                                                            </div>
                                                            <div class="col">
                                                                <select name="inputGruop" id="inputGruop" required data-placeholder="เลือก" class="select-control" style="width: 100%;">
                                                                    <option><option>
                                                                    {foreach $callGroupContacts as $keyGroupContact => $callGroupContact}
                                                                        <option value="{$callGroupContact['id']}">{$callGroupContact['subject']}</option>
                                                                    {/foreach}
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <span class="form-control-feedback" aria-hidden="true"></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group has-feedback">
                                        <div class="block-control">
                                            <input class="form-control" 
                                                type="text"
                                                id="inputSubject"
                                                name="inputSubject" 
                                                value=""
                                                placeholder=""
                                                data-error=""
                                                required="">
                                            <span class="floating-label">หัวข้อ</span>
                                            <span class="form-control-feedback" aria-hidden="true"></span>
                                        </div>
                                    </div>
                                    <div class="form-group has-feedback">
                                        <div class="block-control">
                                            <textarea class="form-control"
                                                rows="7"
                                                id="inputDes"
                                                name="inputDes" 
                                                placeholder=""
                                                data-error=""
                                                required=""></textarea>
                                            <span class="floating-label">รายละเอียด</span>
                                            <span class="form-control-feedback" aria-hidden="true"></span>
                                        </div>
                                    </div>
                                    <div class="form-button">
                                        <div class="row row-20">
                                            <div class="col-auto">
                                                <button type="submit" class="btn btn-md btn-primary" id="submit-contact">ยืนยัน</button>
                                            </div>
                                            <div class="col-auto">
                                                <button type="reset" class="btn btn-md btn-mute">ล้างฟอร์ม</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="contact-map">
                <div class="area">
                    <div class="container">
                        <div class="header">
                            <div class="row no-gutters align-items-center">
                                <div class="col-auto">
                                    <div class="icon">
                                        <img src="{$template}/assets/img/icon/map-2.svg" alt="">
                                    </div>
                                </div>
                                <div class="col">
                                    <h2 class="title">แผนที่จังหวัดชุมพร</h2>
                                </div>
                            </div>
                        </div>
                        <div class="body">
                            <figure class="cover">
                                <img class="img-cover" src="{$settingWeb['addresspic']|fileinclude:"real":'set':"link"}"" alt="">
                            </figure>
                        </div>
                    </div>
                </div>
                <div class="gmap">
                    <div class="topbar">
                        <div class="row">
                            <div class="col">
                                <h2 class="title">GOOGLE <strong class="text-secondary">MAP</strong></h2>
                            </div>
                            <div class="col-auto">
                                <div class="action">
                                    <a href="https://www.google.com/maps?ll=10.493,99.18&z=17&t=m&hl=th&gl=US&mapclient=embed&daddr=10%C2%B029%2734.8%22N+99%C2%B010%2748.0%22E+10.493000,+99.180000@10.493,99.17999999999999" class="link" target="_blank">
                                        <div class="icon">
                                            <img src="{$template}/assets/img/icon/navi.svg" alt="">
                                        </div>
                                        NAVIGATOR
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <iframe src="https://maps.google.com/maps?q={$settingWeb.contact.glati},{$settingWeb.contact.glongti}&hl=es;z=20&amp;output=embed" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>  
            </div>
        </div>
        <!--end::Default Body-->
    </div>
</section>
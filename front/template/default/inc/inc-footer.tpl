<footer class="site-footer">
    <div class="footer-top">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="brand">
                        <a href="link" title="Gem and Jewelry Institute of Thailand">
                            <img src="{$template}/assets/img/static/git-brand.svg" alt="Gem and Jewelry Institute of Thailand Logo">
                        </a>
                    </div>
                </div>
                <div class="col">
                    <h2 class="title">
                        {$settingWeb['subject']}
                    </h2>
                    <p class="desc">
                        {$address = "address{$langweb}"}
                        {$settingWeb['contact'][$address]}
                    </p>
                </div>
            </div>
            <div class="row align-items-end">
                <div class="col-lg">
                    <div class="contact">
                        <ul class="item-list">
                            {if $settingWeb['contact']['tel'] neq ""}
                            <li>
                                <a href="tel:{str_replace('-', '', str_replace(' ', '', $settingWeb['contact']['tel']))}" class="link" title="{$lang['contact']['tel']}">
                                    <span class="feather icon-phone-call"></span>
                                    {$settingWeb['contact']['tel']}
                                </a>
                            </li>
                            {/if}
                            {if $settingWeb['contact']['fax'] neq ""}
                            <li>
                                <a href="" class="link" title="{$lang['system']['fax']}">
                                    <span class="feather icon-printer"></span>
                                    <!-- <span class="lnr lnr-printer"></span> -->
                                    {$settingWeb['contact']['fax']}
                                </a>
                            </li>
                            {/if}
                            {if $settingWeb['contact']['email']}
                            <li>
                                <a href="mailto:{$settingWeb['contact']['email']}" class="link" title="{$lang['system']['email']}">
                                    <span class="feather icon-mail"></span>
                                    {$settingWeb['contact']['email']}
                                </a>
                            </li>
                            {/if}
                        </ul>
                    </div>
                    <div class="maps">
                        <ul class="item-list">
                            <li>
                                <a href="{$ul}/contact/graphic-map" class="btn btn-xl btn-primary" title="Maps">
                                    MAPS
                                </a>
                            </li>
                            <li>
                                <a href="{$ul}/contact/google-map" class="btn btn-xl btn-primary" title="Google maps">
                                    GOOGLE MAPS
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg">
                    <div class="social">
                        <ul class="item-list">
                            {if $settingWeb['social']['Instagram']['link'] neq "" && $settingWeb['social']['Instagram']['link'] neq "#"}
                            <li>
                                <a href="{$settingWeb['social']['Instagram']['link']}" target="_blank" class="btn btn-xl btn-primary" title="Instagram">
                                    <div class="inner">
                                        <!-- <div class="icon">
                                            <img src="{$template}/assets/img/icon/Icon-instagram.svg" alt="instagram icon">
                                        </div> -->
                                        <svg xmlns="http://www.w3.org/2000/svg" width="40.024" height="40.024" viewBox="0 0 40.024 40.024">
                                            <path data-name="Icon zocial-instagram" d="M3.6,40.02a4.758,4.758,0,0,1-2.19-1.243A4.4,4.4,0,0,1,.2,36.688C.055,36.133.047,35.609.047,20.163.039,2.81.016,3.764.469,2.786A4.668,4.668,0,0,1,2.745.526C3.754.08,2.768.1,20.255.127l16.11.016.5.172a4.744,4.744,0,0,1,3,3l.172.5.016,16.11c.023,17.893.063,16.556-.508,17.714a4.646,4.646,0,0,1-1.979,1.979c-1.142.563.156.524-17.549.516C6.483,40.129,4,40.114,3.6,40.02ZM34.77,35.257c.641-.454.657-.5.68-3.48.023-2.9.008-3.05-.469-3.511-.43-.422-.633-.446-3.465-.438l-2.581.008-.352.188a1.923,1.923,0,0,0-.579.547l-.235.344L27.763,31.5c-.008,1.416.023,2.706.063,2.854a1.461,1.461,0,0,0,.8.985l.391.2,2.714-.023,2.706-.023ZM21.616,27.663a7.762,7.762,0,0,0,5.991-6.022,9.553,9.553,0,0,0,.086-2.542,7.877,7.877,0,0,0-4.012-5.756,8.392,8.392,0,0,0-2.065-.766c-.149-.016-.461-.063-.7-.1a7.726,7.726,0,0,0-6.976,2.987,7.651,7.651,0,0,0,.149,9.5,7.8,7.8,0,0,0,5.162,2.808A8.162,8.162,0,0,0,21.616,27.663ZM8,22.588A12.411,12.411,0,0,1,9.033,14.65a11.5,11.5,0,0,1,2.338-3.214A12.2,12.2,0,0,1,22.015,7.963a12.389,12.389,0,0,1,9.963,9.072,12.145,12.145,0,0,1,.321,4.38,8.611,8.611,0,0,1-.321,1.689c-.023.039-.016.07.023.078.3.031,3.339.023,3.394-.016.047-.023.063-3.5.055-8.728L35.427,5.75l-.235-.336a1.954,1.954,0,0,0-.587-.516l-.352-.18-14.28.023L5.7,4.757l-.321.211a2.057,2.057,0,0,0-.5.508l-.188.3-.023,8.642c-.008,4.755-.008,8.673.016,8.72a8.416,8.416,0,0,0,1.744.078H8.141Z" transform="translate(-0.044 -0.116)" fill="#fff" />
                                        </svg>

                                        <div class="txt text-uppercase">
                                            FOLLOW US ON <br>
                                            INSTAGRAM
                                        </div>
                                        <span class="feather icon-arrow-right"></span>
                                    </div>
                                </a>
                            </li>
                            {/if}
                            {if $settingWeb['social']['Facebook']['link'] neq "" && $settingWeb['social']['Facebook']['link'] neq "#"}
                            <li>
                                <a href="{$settingWeb['social']['Facebook']['link']}" target="_blank" class="btn btn-xl btn-primary" title="Facebook">
                                    <div class="inner">
                                        <!-- <div class="icon">
                                            <img src="{$template}/assets/img/icon/Icon-facebook-square.svg" alt="facebook icon">
                                        </div> -->
                                        <svg xmlns="http://www.w3.org/2000/svg" width="39.324" height="39.324" viewBox="0 0 39.324 39.324">
                                            <path data-name="Icon awesome-facebook-square" d="M35.111,2.25H4.213A4.213,4.213,0,0,0,0,6.463v30.9a4.213,4.213,0,0,0,4.213,4.213H16.261V28.2h-5.53V21.912h5.53v-4.8c0-5.455,3.248-8.469,8.222-8.469a33.5,33.5,0,0,1,4.873.425v5.354H26.611c-2.7,0-3.548,1.678-3.548,3.4v4.086H29.1L28.135,28.2H23.063V41.574H35.111a4.213,4.213,0,0,0,4.213-4.213V6.463A4.213,4.213,0,0,0,35.111,2.25Z" transform="translate(0 -2.25)" fill="#fff" />
                                        </svg>
                                        <div class="txt text-uppercase">
                                            FOLLOW US ON <br>
                                            FACEBOOK
                                        </div>
                                        <span class="feather icon-arrow-right"></span>
                                    </div>
                                </a>
                            </li>
                            {/if}
                            <li>
                                <a href="" class="btn btn-xl btn-primary" title="YouTube">
                                    <div class="inner">
                                        <!-- <div class="icon">
                                            <img src="{$template}/assets/img/icon/Icon-youtube.svg" alt="youtube icon">
                                        </div> -->
                                        <svg xmlns="http://www.w3.org/2000/svg" width="38.4" height="27" viewBox="0 0 38.4 27">
                                            <path data-name="Icon awesome-youtube" d="M38.648,8.725a4.825,4.825,0,0,0-3.395-3.417c-2.995-.808-15-.808-15-.808s-12.008,0-15,.808A4.825,4.825,0,0,0,1.852,8.725c-.8,3.014-.8,9.3-.8,9.3s0,6.289.8,9.3a4.753,4.753,0,0,0,3.395,3.362c2.995.808,15,.808,15,.808s12.008,0,15-.808a4.753,4.753,0,0,0,3.395-3.362c.8-3.014.8-9.3.8-9.3s0-6.289-.8-9.3ZM16.323,23.737V12.318l10.036,5.71L16.323,23.737Z" transform="translate(-1.05 -4.5)" fill="#fff" />
                                        </svg>
                                        <div class="txt text-uppercase">
                                            FOLLOW US ON <br>
                                            youtube
                                        </div>
                                        <span class="feather icon-arrow-right"></span>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="" class="btn btn-xl btn-primary" title="Twitter">
                                    <div class="inner">
                                        <!-- <div class="icon">
                                            <img src="{$template}/assets/img/icon/Icon-twitter.svg" alt="twitter icon">
                                        </div> -->
                                        <svg xmlns="http://www.w3.org/2000/svg" width="40.831" height="33.162" viewBox="0 0 40.831 33.162">
                                            <path data-name="Icon awesome-twitter" d="M36.634,11.645c.026.363.026.725.026,1.088,0,11.063-8.42,23.809-23.809,23.809A23.648,23.648,0,0,1,0,32.786a17.312,17.312,0,0,0,2.021.1A16.759,16.759,0,0,0,12.41,29.315a8.383,8.383,0,0,1-7.824-5.8,10.553,10.553,0,0,0,1.58.13,8.851,8.851,0,0,0,2.2-.285,8.369,8.369,0,0,1-6.71-8.213v-.1A8.428,8.428,0,0,0,5.441,16.1,8.381,8.381,0,0,1,2.85,4.909,23.787,23.787,0,0,0,20.1,13.666a9.447,9.447,0,0,1-.207-1.917A8.376,8.376,0,0,1,34.38,6.023,16.476,16.476,0,0,0,39.691,4a8.346,8.346,0,0,1-3.679,4.612,16.776,16.776,0,0,0,4.819-1.3,17.989,17.989,0,0,1-4.2,4.327Z" transform="translate(0 -3.381)" fill="#fff" />
                                        </svg>

                                        <div class="txt text-uppercase">
                                            FOLLOW US ON <br>
                                            twitter
                                        </div>
                                        <span class="feather icon-arrow-right"></span>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-sitemap">
        <?php include('sitemap.php'); ?>
    </div>
    <div class="footer-bottom">
        <div class="container">
            <div class="row">
                <div class="col-lg">
                    <div class="policy">
                        <ul class="item-list">
                            <li>
                                <a href="" class="link" title="นโยบายการคุ้มครองข้อมูลส่วนบุคคล">นโยบายการคุ้มครองข้อมูลส่วนบุคคล</a>
                            </li>
                            <li>
                                <a href="" class="link" title="แนวทางปฏิบัติการเผยแพร่ข้อมูลต่อสาธารณะ">แนวทางปฏิบัติการเผยแพร่ข้อมูลต่อสาธารณะ</a>
                            </li>
                        </ul>
                    </div>
                    <div class="copyright">
                        Copyright © 2022 The Gem and Jewelry Institute of Thailand (Public Organization). All rights reserved.
                    </div>
                </div>
                <div class="col-lg-auto text-center">
                    <div class="w3c">
                        <a href="https://www.w3.org/WAI/WCAG2AA-Conformance" title="Explanation of WCAG 2 Level AA conformance">
                            <img height="50" width="150" src="https://www.w3.org/WAI/WCAG21/wcag2.1AA-blue-v.svg" alt="Level AA conformance, W3C WAI Web Content Accessibility Guidelines 2.1">
                            <!-- <img height="32" width="88" src="https://www.w3.org/WAI/WCAG21/wcag2.1AA-blue-v.svg" alt="Level AA conformance, W3C WAI Web Content Accessibility Guidelines 2.1"> -->
                        </a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg text-right">
                    <div class="footer-stat">
                        <span>{$lang["counter"]["visited"]}</span>
                        <span class="count">{$usercounter}</span>
                        <span>{$lang["counter"]["online"]}</span>
                        <span class="count">{$useronline}</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
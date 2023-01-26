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
                    {$subject = "subject{$langweb}"}
                        {$settingWeb[$subject]}
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
                {if $social->_numOfRows gte 1}
                    <div class="social">
                        <ul class="item-list">
                        {foreach $social as $Keysocial => $Valuesocial}
                            <li>
                                <a {if $Valuesocial['url'] neq "" && $Valuesocial['url'] neq "#"}href="{$Valuesocial['url']}"{if $Valuesocial['target'] eq 2}target="_blank"{/if}{else}href="javascript:void(0);"{/if} class="btn btn-xl btn-primary" title="{$Valuesocial.subject}">
                                    <div class="inner">
                                    <img width="40.024" height="40.024" src="{$Valuesocial['pic']|fileinclude:"real":{$Valuesocial['masterkey']}:"link"}" alt="{$Valuesocial.pic}">

                                        <div class="txt text-uppercase">
                                            FOLLOW US ON <br>
                                            {$Valuesocial.subject}
                                        </div>
                                        <span class="feather icon-arrow-right"></span>
                                    </div>
                                </a>
                            </li>
                        {/foreach}
                        </ul>
                    </div>
                    {/if}
                </div>
            </div>
        </div>
    </div>
    <div class="footer-sitemap">
        {include file="{$incfile.sitemap}"}
    </div>
    <div class="footer-bottom">
        <div class="container">
            <div class="row">
                <div class="col-lg">
                    {if $calPolicy->_numOfRows gte 1}
                        <div class="policy">
                            <ul class="item-list">
                                {foreach $calPolicy as $keycalPolicy => $valuecalPolicy}
                                    <li>
                                    <a href="{$ul}/policy/{$valuecalPolicy.id}" class="link" title="{$valuecalPolicy.subject}">{$valuecalPolicy.subject}</a>
                                    </li>
                                {/foreach}
                            </ul>
                        </div>
                    {/if}
                    <div class="copyright">
                        {$lang['system']['copyright']}
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
<footer class="site-footer">
    <div class="footer-top">
        <div class="container">
            <div class="row">
               <div class="col-12">
                  <div class="brand">
                     <a href="{$ul}/home" title="Gem and Jewelry Institute of Thailand">
                           <img src="{$template}/assets/img/static/git-logo.png" alt="Gem and Jewelry Institute of Thailand Logo">
                     </a>
                  </div>
               </div>
            </div>
            <div class="row justify-content-between">
               <div class="col-xl-8 col-12">
                  <h2 class="title">
                  {$subject = "subject{$langweb}"}
                  {$settingWeb[$subject]}
                  </h2>
                  <p class="desc">
                     {$address = "address{$langweb}"}
                     {$settingWeb['contact'][$address]}
                  </p>
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
                              <a href="javascript:void(0);" class="link" title="{$lang['system']['fax']}">
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

                  {if $social->_numOfRows gte 1}
                  <div class="social">
                  
                  
                     <ul class="item-list">
                     {foreach $social as $Keysocial => $Valuesocial}
                        <li>
                     <a {if $Valuesocial['url'] neq "" && $Valuesocial['url'] neq "#"}href="{$Valuesocial['url']}"{if $Valuesocial['target'] eq 2}target="_blank"{/if}{else}href="javascript:void(0);"{/if} class="link" title="{$Valuesocial.subject}">
                                 <div class="inner">
                                 <img width="30" height="30" src="{$Valuesocial['pic']|fileinclude:"real":{$Valuesocial['masterkey']}:"link"}" alt="{$Valuesocial.pic}">
                                 </div>
                              </a>
                           </li>
                     {/foreach}
                        {* {if $settingWeb['social']['Facebook']['link'] neq "" && $settingWeb['social']['Facebook']['link'] neq "#"}
                           <li>
                              <a href="{$settingWeb['social']['Facebook']['link']}" class="link" title="Facebook" target="_blank">
                                 <div class="inner">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="11.264" height="22.528" viewBox="0 0 11.264 22.528">
                                       <path id="Path_2008" data-name="Path 2008" d="M211.957,156.278v2.5h-2.5v3.755h2.5V173.8h5.006V162.536h3.329l.425-3.755h-3.755v-2.19c0-1.014.1-1.552,1.665-1.552h2.09v-3.767h-3.354C213.359,151.272,211.957,153.149,211.957,156.278Z" transform="translate(-209.454 -151.272)" fill="#063f94" />
                                    </svg>
                                 </div>
                              </a>
                           </li>
                        {/if}
                        {if $settingWeb['social']['Instagram']['link'] neq "" && $settingWeb['social']['Instagram']['link'] neq "#"}
                           <li>
                              <a href="{$settingWeb['social']['Instagram']['link']}" class="link" title="Instagram" target="_blank">
                                 <div class="inner">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24.754" height="24.754" viewBox="0 0 24.754 24.754">
                                       <path id="Path_2011" data-name="Path 2011" d="M159.44,139.636H144.588a4.951,4.951,0,0,0-4.951,4.951v14.852a4.951,4.951,0,0,0,4.951,4.951H159.44a4.951,4.951,0,0,0,4.951-4.951V144.587A4.951,4.951,0,0,0,159.44,139.636Zm-2.475,3.713h3.713v3.713h-3.713Zm-4.951,3.713a4.951,4.951,0,1,1-4.951,4.951A4.951,4.951,0,0,1,152.014,147.062Zm9.9,12.377a2.475,2.475,0,0,1-2.475,2.475H144.588a2.475,2.475,0,0,1-2.475-2.475v-8.664h2.6a7.426,7.426,0,1,0,14.729,1.238,7.334,7.334,0,0,0-.124-1.238h2.6v8.664Z" transform="translate(-139.637 -139.636)" fill="#d1d1d1" />
                                    </svg>
                                 </div>
                              </a>
                           </li>
                        {/if}
                        {if $settingWeb['social']['Twitter']['link'] neq "" && $settingWeb['social']['Twitter']['link'] neq "#"}
                           <li>
                              <a href="{$settingWeb['social']['Twitter']['link']}" class="link" title="Twitter" target="_blank">
                                 <div class="inner">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24.754" height="19.781" viewBox="0 0 24.754 19.781">
                                       <path id="Path_2012" data-name="Path 2012" d="M175.347,163.486a10.284,10.284,0,0,1-3.23,1.238,5.112,5.112,0,0,0-3.713-1.584,5.037,5.037,0,0,0-5.075,4.951,4.953,4.953,0,0,0,.136,1.139,14.494,14.494,0,0,1-10.471-5.223,4.888,4.888,0,0,0,1.572,6.634,5.124,5.124,0,0,1-2.3-.631v.062a5.025,5.025,0,0,0,4.072,4.951,5.188,5.188,0,0,1-2.29.087,5.074,5.074,0,0,0,4.74,3.466,10.286,10.286,0,0,1-6.275,2.166,10.541,10.541,0,0,1-1.238-.074,14.543,14.543,0,0,0,7.785,2.253,14.234,14.234,0,0,0,14.491-13.971q0-.125,0-.25v-.644a10.285,10.285,0,0,0,2.475-2.587,10.271,10.271,0,0,1-2.921.792A5.038,5.038,0,0,0,175.347,163.486Z" transform="translate(-151.274 -163.14)" fill="#d1d1d1" />
                                    </svg>
                                 </div>
                              </a>
                           </li>
                        {/if}
                        {if $settingWeb['social']['Youtube']['link'] neq "" && $settingWeb['social']['Youtube']['link'] neq "#"}
                           <li>
                              <a href="{$settingWeb['social']['Youtube']['link']}" class="link" title="YouTube" target="_blank">
                                 <div class="inner">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="27.534" height="28.686" viewBox="0 0 27.534 28.686">
                                       <g id="Group_7082" data-name="Group 7082" transform="translate(-13.767 -12.666)">
                                          <path id="Path_2014" data-name="Path 2014" d="M228.729,147.058h.513a2.065,2.065,0,0,0,2.065-2.053v-3.342a2.065,2.065,0,0,0-2.053-2.028h-.513a2.065,2.065,0,0,0-2.065,2.053v3.342A2.065,2.065,0,0,0,228.729,147.058Zm-.513-5.519a.776.776,0,0,1,1.552,0v3.592a.776.776,0,0,1-1.552,0Z" transform="translate(-202.295 -124.617)" fill="#d1d1d1" />
                                          <path id="Path_2015" data-name="Path 2015" d="M171.022,127.41h1.815v-3.993l2.065-5.657h-1.69l-1.252,3.755-1.252-3.755h-1.865l2.2,5.657Z" transform="translate(-150.684 -105.094)" fill="#d1d1d1" />
                                          <path id="Path_2016" data-name="Path 2016" d="M284.16,147.058a3.216,3.216,0,0,0,1.94-.9v.776h1.5v-7.3h-1.5v5.657s-.513.6-1,.6-.513-.388-.513-.388v-5.87H283v6.421A1.177,1.177,0,0,0,284.16,147.058Z" transform="translate(-252.558 -124.617)" fill="#d1d1d1" />
                                          <path id="Path_2017" data-name="Path 2017" d="M277.837,286.6a1.077,1.077,0,0,0-.776.388v5.182a1.027,1.027,0,0,0,.776.338c.776,0,.776-.864.776-.864v-4.18S278.476,286.6,277.837,286.6Z" transform="translate(-247.261 -255.778)" fill="#d1d1d1" />
                                          <path id="Path_2019" data-name="Path 2019" d="M333.11,286.6c-.776,0-.776.864-.776.864v1.114h1.552v-1.114S333.886,286.6,333.11,286.6Z" transform="translate(-296.589 -255.778)" fill="#d1d1d1" />
                                          <path id="Path_2020" data-name="Path 2020" d="M151.333,221.352l-.065,0h-.025s-4.718-.263-9.474-.263-9.5.25-9.5.25a3.755,3.755,0,0,0-3.878,3.627c0,.042,0,.085,0,.127a29.653,29.653,0,0,0,0,9.562,3.755,3.755,0,0,0,3.753,3.757l.127,0s4.668.25,9.5.25,9.5-.25,9.5-.25a3.755,3.755,0,0,0,3.878-3.627c0-.042,0-.085,0-.127a35.038,35.038,0,0,0,.388-4.806,34.132,34.132,0,0,0-.388-4.806A3.755,3.755,0,0,0,151.333,221.352Zm-15.184,4.194h-1.89v9.737h-1.865v-9.737H130.5v-1.6h5.682Zm4.919,9.737H139.5v-.738a3.267,3.267,0,0,1-1.94.864,1.151,1.151,0,0,1-1.164-.989v-7.647h1.615v7.147s0,.375.513.375,1.039-.613,1.039-.613v-6.909h1.552Zm4.643.125a2.077,2.077,0,0,1-1.677-.826v.7h-1.69V223.945h1.677v3.68a2.5,2.5,0,0,1,1.677-.839c1.039,0,1.427.864,1.427,1.977l.012,4.668S147.137,235.409,145.711,235.409Zm7.5-4.03h-3.229v1.852s0,.864.776.864.776-.864.776-.864v-.876h1.677v1.352a2.178,2.178,0,0,1-2.328,1.727,2.378,2.378,0,0,1-2.5-1.727v-4.831a2.178,2.178,0,0,1,2.5-2.09,2.04,2.04,0,0,1,2.328,2.09v2.5Z" transform="translate(-114.234 -197.311)" fill="#d1d1d1" />
                                       </g>
                                    </svg>

                                 </div>
                              </a>
                           </li>
                        {/if} *}
                     </ul>
                  </div>
                  {/if}
               </div>
               <div class="col-xl-auto col-12">
                  <div class="maps">
                     <ul class="item-list">
                        <li>
                           <a href="{$ul}/contact/graphic-map" class="btn btn-light" title="Maps">
                              <div class="inner">
                                 <div class="icon">
                                    <img src="{$template}/assets/img/icon/map.svg" alt="map">
                                 </div>
                                 <div class="txt text-uppercase">
                                    {$lang['home']['findusmap']}
                                 </div>
                                 <span class="feather icon-arrow-right"></span>
                              </div>
                           </a>
                        </li>
                        <li>
                           <a href="{$ul}/contact/google-map" class="btn btn-primary" title="Google maps">
                              <div class="inner">
                                 <div class="icon">
                                    <img src="{$template}/assets/img/icon/google-maps.svg" alt="map">
                                 </div>
                                 <div class="txt text-uppercase">
                                    {$lang['home']['findusgmap']}
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
      {include file="{$incfile.sitemap}"}
   </div>
   <div class="footer-bottom">
      <div class="container">
         <div class="row">
               <div class="col-lg">
                  <div class="copyright">
                     {$lang['system']['copyright']}
                  </div>
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
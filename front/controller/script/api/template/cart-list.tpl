<form action="#" id="myFormOrderMin" name="myFormOrderMin" method="post" class="sitekey" data-id="{$sitekey}">
    <input name="action" id="action" type="hidden" value="addnew">
    <input name="accountID" id="accountID" type="hidden" value="3kb0agqrgf1687qvmrif50kj13">
    <input name="productID" id="productID" type="hidden" value="">
    <input type="hidden" class="input" name="txtLanguage" id="txtLanguage" value="{$langFull}" />
    <input type="hidden" class="input" name="valFolderPath" id="valFolderPath" value="{$langon}" />
    <input name="inputSend" id="inputSend" type="hidden" value="1" />
    <input type="hidden" id="g-recaptcha-response" name="g-recaptcha-response">
    <div class="product-page">
        <div class="row">

            

            <div class="col-12" id="stepAddTocart">
                <div class="cart-list" {if $countcart < 1}style="display:none;"{/if}>
                    <div class="cart-list-wrapper">

                        <div class="cart-body">
                            <div class="cart-header">
                                <div class="cart-header-block text-center fw-bold">
                                    <div class="row">
                                        <div class="col-2">{$lang['menu']['products']}</div>
                                        {* <div class="col-2"></div> *}
                                        <div class="col-3">{$lang['cart']['detail']}</div>
                                        <div class="col-2">{$lang['product']['price']}/{$lang['order']['unit']}</div>
                                        <div class="col-2">{$lang['product']['amount']}</div>
                                        <div class="col-2">{$lang['order']['max']}</div>
                                        <div class="col-1">{$lang['cart']['edit']}</div>
                                    </div>
                                </div>
                            </div>
                            <div class="cart-body-block pt-4">
                                {foreach $callShoppingCartPD as $keycallShoppingCartPD => $valuecallShoppingCartPD}
                                    {$callProduct = apiPage::callProduct($valuecallShoppingCartPD.pid)}
                                    <div class="cart-block-custom">
                                        <div class="row">
                                            <div class="col-2">
                                                <div class="list-wrapper">
                                                    <div class="list-thumb">
                                                        <figure class="thumb-bg m-0"
                                                            style="background-image: url('{$callProduct->fields['pic']|fileinclude:"real":{$callProduct->fields['masterkey']}:"link"}');">
                                                            <img src="{$template}/assets/image/asset/thumb-product.png" alt="{$callProduct->fields.subject}"
                                                                title="{$callProduct->fields.subject}">
                                                        </figure>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-3">
                                                <div class="list-wrapper pt-3">
                                                    <div class="list-inner">
                                                        <span class="text-black fw-bold">{$callProduct->fields.subject}</span>
                                                        <small>{$lang['product']['code']} : {$callProduct->fields.code}</small>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-2 cart-position-custom text-center">{$callProduct->fields.pricesale|number_format}</div>

                                            <div class="col-2 boxPriceCart cart-position-custom">
                                                <div class="list-qty">
                                                    <div class="control-group d-flex">
                                                        <button type="button" class="btn-number minus" disabled="disabled"
                                                            data-type="minus" data-field="inputprice{$valuecallShoppingCartPD.id}">
                                                            <i class="feather icon-minus" aria-hidden="true"></i>
                                                        </button>
                                                        <input type="text" name="inputprice{$valuecallShoppingCartPD.id}"
                                                            class="form-control input-number" value="{$valuecallShoppingCartPD.count}" min="1" max="5">
                                                        <button type="button" class="btn-number plus" data-type="plus"
                                                            data-field="inputprice{$valuecallShoppingCartPD.id}">
                                                            <i class="feather icon-plus" aria-hidden="true"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
        
                                            <div class="col-2 cart-position-custom " id="boxFinalPriceWe{$valuecallShoppingCartPD.id}">
                                            {$valuecallShoppingCartPD.price|number_format}
                                            </div>
                                            <div class="col-1  cart-position-custom">
                                                <div class="list-btn boxDelOrder">
                                                    <a href="javascript:void(0)"
                                                        onclick="jQuery('#productID').val('{$valuecallShoppingCartPD.id}');orderDelToCart();"
                                                        class="icon-close">
                                                        <img class=""src="{$template}/assets/image/icon/icon-backspace.svg" alt="{$template}/assets/image/icon/icon-backspace.svg">
                                                        </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                {/foreach}
                            </div>
                        </div>
                    </div>
                </div>

                <div class="cart-list-bottom" id="boxStepOneBtn">
                    <div class="row mt-3 mb-3 p-2 align-items-center">
                        <div class="col-sm-6 col-12 text-center text-sm-left pt-2 pb-2">
                            <a href="./th/products/" class="btn btn-file btn-sm btn-secondary btn-rounded">
                                <div class="mr-2">
                                    <i class="feather icon-shopping-cart"></i>
                                </div>
                                {$lang['order']['Select']}
                            </a>
                        </div>

                        <div class="col-sm-6 col-12 text-center text-sm-right pt-2   pb-2" {if $countcart < 1}style="display:none;"{/if}>
                            <a href="javascript:void(0)" onclick="orderDelToCartAll()"class="d-inline-flex" style="color: #3A62AF;">
                                <div class="d-flex mr-2">
                                    <img class="pb-1" src="{$template}/assets/image/icon/icon-backspace-righ.svg" alt="{$template}/assets/image/icon/icon-backspace-righ.svg">
                                </div>    
                                {$lang['order']['Clear']}
                            </a>
                            {* <a href="javascript:void(0)"
                                onclick="actionStepOpenHidenShopping('step2','stepAddAddressToCart')"
                                class="btn btn-primary">{$lang['order']['Continue']}
                            </a> *}
                        </div>

                    </div>
                </div>
            </div>



            <div class="col-12" id="stepAddAddressToCart" style="display:none;">
                <div class="form-block">
                    <div class="whead">
                        <img class="mr-2" src="{$template}/assets/image/icon/icon-location-cart-1.svg" alt="{$template}/assets/image/icon/icon-location-cart-1.svg">
                        <div class="whead-title typo-default">{$lang['order']['information']}</div>
                    </div>
                    <div class="form-wrapper">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="control-label" for="">{$lang["contact"]["name"]}</label>
                                    <input class="form-control" type="text" id="inputName" name="inputName" >
                                </div>    
                            </div>
                            <div class="col-sm-3 ">
                                <div class="form-group">
                                    <label class="control-label" for="">{$lang['order']['tel']}</label>
                                    <input class="form-control" type="text" id="inputTel" name="inputTel" placeholder="{$lang['cart']['like']} 0856458742">
                                </div>
                            </div>
                            <div class="col-sm-3">
                            </div>
                        </div>

                         <div class="whead-title typo-default">
                             {$lang['cart']['agency']}
                         </div> 

                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="control-label" for="">{$lang["contact"]["unit"]}</label>
                                    <input class="form-control" type="text" id="inputOfficeName" name="inputOfficeName" placeholder="{$lang['cart']['like']}{$lang['cart']['office']}">
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="form-group">
                                    <label class="control-label" for="">{$lang['order']['type']}</label>
                                    <div class="select-control">
                                        <select id="inputOfficeType" name="inputOfficeType">
                                            <option value="0">{$lang['order']['typeSel']}</option>
                                            {foreach $callTypeUnit as $keycallTypeUnit => $valuecallTypeUnit}
                                                <option value="{$valuecallTypeUnit.id}">{$valuecallTypeUnit.subject}</option>
                                            {/foreach}
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="form-group">
                                    <label class="control-label" for="">{$lang['order']['fax']}</label>
                                    <input class="form-control" type="text" id="inputFax" name="inputFax" placeholder="{$lang['cart']['like']}1140">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="control-label" for="">{$lang['order']['amp']} *</label>
                                    <div class="select-control" id="boxAmpRegis">
                                        <select name="inputAmp" id="inputAmp"
                                            onchange="loadBoxSelectBoxArea('myFormOrderMin','loadSelectBoxAreaS','boxLoadComplete')">
                                            <option value="0">{$lang['order']['ampSel']}</option>
                                            {foreach $callAmp as $keycallAmp => $valuecallAmp}
                                                <option value="{$valuecallAmp.id}">{$valuecallAmp.subject}</option>
                                            {/foreach}
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="form-group">
                                    <label class="control-label" for="">{$lang['order']['prov']} *</label>
                                    <div class="select-control">
                                        <select name="inputProv" id="inputProv"
                                            onchange="loadBoxSelectBoxArea('myFormOrderMin','loadSelectBoxProvS','boxAmpRegis')">
                                            <option value="0">{$lang['order']['provSel']}</option>
                                            {foreach $callProvice as $keycallProvice => $valuecallProvice}
                                                <option value="{$valuecallProvice.id}">{$valuecallProvice.subject}</option>
                                            {/foreach}
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                {* <div class="form-group">
                                    <label class="control-label" for="">{$lang['order']['zipcard']}</label>
                                    <input class="form-control" type="number" id="inputZipcode" name="inputZipcode">
                                </div> *}
                                <div class="form-group">
                                    <label class="control-label" for="">{$lang['order']['email']}</label>
                                    <input class="form-control" type="email" id="inputEmail" name="inputEmail" placeholder="Service Provider@gmail.co.th">
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label" for="">{$lang['order']['corporate']}</label>
                            <textarea class="form-control" id="inputAddress" name="inputAddress" rows="5" placeholder="{$lang['cart']['like']}{$lang['cart']['address']}"></textarea>
                        </div>

                        <div class="row">
                            <div class="col-sm-6">
                                {* <div class="form-group">
                                    <label class="control-label" for="">{$lang['order']['tel']}</label>
                                    <input class="form-control" type="text" id="inputTel" name="inputTel">
                                </div> *}
                            </div>
                            <div class="col-sm-6">  
                                {* <div class="form-group">
                                    <label class="control-label" for="">{$lang['order']['fax']}</label>
                                    <input class="form-control" type="text" id="inputFax" name="inputFax">
                                </div> *}
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-6">
                                {* <div class="form-group">
                                    <label class="control-label" for="">{$lang['order']['email']}</label>
                                    <input class="form-control" type="email" id="inputEmail" name="inputEmail">
                                </div> *}
                            </div>
                        </div>
                    </div>
                </div>

                <div class="cart-list-note">
                    <i class="icon"><img src="{$template}/assets/image/icon/icon-contact-chat-cart-1.svg" alt="{$template}/assets/image/icon/icon-contact-chat-cart-1.svg"></i>
                    <div class="list-note-custom">
                        {$lang['order']['Contact']} : {$settingWeb['contact']}
                    </div>
                </div>

                <div class="row">                            
                    <div class="col-12" {if $countcart < 1}style="display:none;"{/if}>
                        <div class="cart-detail-custom">
                            <div class="row">
                                <div class="col-sm-8 col-12 mb-3">
                                    <div class="sum-list">
                                    <div class="sum-header fw-bold">
                                        {$lang['order']['sum']} 
                                    </div>
                                    </div>
                                </div>
                                <div class="col-sm-4 col-12">
                                    <div class="sum-body fw-bold">
                                    <div class="row">
                                        <div class="col-7">{$lang['cart']['list']}</div>
                                        <div class="col-5 text-right orderFinalCountWe">{$countcart}</div>
                                    </div>
                                    <div class="row pt-2 pb-2">
                                        <div class="col-7">{$lang['order']['total']}</div>
                                        <div class="col-5 text-right"><strong class="orderFinalQuantityWe">{$array_cart['shopping_total']}</strong> {$lang['product']['bath']}</div>
                                    </div>
                                    <div class="row pt-2 pb-2">
                                        <div class="col-7">{$lang['order']['tran']}</div>
                                        <div class="col-5 text-right"><strong class="orderFinalSportPriceWe">{number_format($array_cart['TransportPriceAll'])}</strong> {$lang['product']['bath']}</div>
                                    </div>
                                    <div class="row pt-2 pb-2" style="display:none;">
                                        <div class="col-7">{$lang['order']['vat']}</div>
                                        <div class="col-5 text-right"><strong class="orderFinalVatPriceWe">0</strong> {$lang['product']['bath']}</div>
                                    </div>
                                    <div class="row pt-2 pb-2">
                                        <div class="col-7">{$lang['order']['pre']}</div>
                                        <div class="col-5 text-right text-primary"><strong class="orderFinalTotalPriceWe">{$array_cart['shopping_totalFinal']}</strong> {$lang['product']['bath']}</div>
                                    </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="cart-list-bottom">
                    <div class="row align-items-center pt-4 p-2">
                        <div class="col-sm-6 col-12 text-center text-sm-left pt-2 pb-2">
                            <a href="javascript:void(0)" onclick="actionStepOpenHidenShopping('step1','stepAddTocart')" style="color:#3A62AF">
                                <i class="feather icon-edit"></i>
                                {$lang['order']['Edit']}
                               </a>
                        </div>
                        <div class="col-sm-6 col-12 text-center text-sm-right pt-2 pb-2">
                            <a href="javascript:void(0)" onclick="verifySubmit()"
                                class="btn btn-sm btn-secondary btn-rounded">{$lang['order']['Continue']}</a>
                        </div>
                    </div>
                </div>
                {* <div style="clear:both; height:20px;"></div> *}
                <div id="load_mainContant" style="color:#FF0000; display:none; text-align:center;"></div>
            </div>


            <div class="col-12" id="stepAddPaymentToCart" style="display:none;">
                <div class="form-block">
                        <div class="whead">
                            <div class="whead-title">
                                <img class="mr-2" src="{$template}/assets/image/icon/icon-money-cart-1.svg" alt="{$template}/assets/image/icon/icon-money-cart-1.svg">
                                {$lang['order']['channel']} 
                            </div>
                        </div>
                    <div class="form-wrapper">
                        <div class="radio-control">
                            <div class="form-group">
                                <label class="btn active" style="color: #000;">
                                    <input name="formPayment" id="" value="1" autocomplete="off" checked="checked" type="radio">
                                    <i class="icon mr-2"><img src="{$template}/assets/image/icon/icon-circle-true-cart-1.png" alt="{$template}/assets/image/icon/icon-circle-true-cart-1.png" style=" width: 35px;"></i>
                                    {$lang['order']['bank']}              
                                </label>
                                <div class="form-inner" id="formPayment1">
                                    <div class="editor-content">
                                        <div style="line-height:normal; ">
                                        </div>
                                    </div>
                                </div>
                                <div class="cart-list-note w-80 p-0">
                                    <i class="icon"><img src="{$template}/assets/image/icon/icon-contact-chat-cart-1.svg" alt="{$template}/assets/image/icon/icon-contact-chat-cart-1.svg"></i>
                                    <div class="list-note-custom">
                                        {$lang['order']['Contact']} : {$settingWeb['contact']}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="cart-list-note d-none">
                    <i class="icon"><img src="{$template}/assets/image/icon/icon-note.png" alt="{$template}/assets/image/icon/icon-note.png"></i>
                    <span class="text-primary">{$lang['order']['Contact']} :</span> {$settingWeb['contact']}
                </div>
                 
                <div class="row pt-4">
                    <div class="col-12" {if $countcart < 1}style="display:none;"{/if}>
                        <div class="cart-detail-custom">
                            <div class="row">
                                <div class="col-sm-8 col-12 mb-3">
                                    <div class="sum-list">
                                    <div class="sum-header fw-bold">
                                        {$lang['order']['sum']} 
                                    </div>
                                    </div>
                                </div>
                                <div class="col-sm-4 col-12">
                                    <div class="sum-body fw-bold">
                                    <div class="row">
                                        <div class="col-7">{$lang['cart']['list']}</div>
                                        <div class="col-5 text-right orderFinalCountWe">{$countcart}</div>
                                    </div>
                                    <div class="row pt-2 pb-2">
                                        <div class="col-7">{$lang['order']['total']}</div>
                                        <div class="col-5 text-right"><strong class="orderFinalQuantityWe">{$array_cart['shopping_total']}</strong> {$lang['product']['bath']}</div>
                                    </div>
                                    <div class="row pt-2 pb-2">
                                        <div class="col-7">{$lang['order']['tran']}</div>
                                        <div class="col-5 text-right"><strong class="orderFinalSportPriceWe">{number_format($array_cart['TransportPriceAll'])}</strong> {$lang['product']['bath']}</div>
                                    </div>
                                    <div class="row pt-2 pb-2" style="display:none;">
                                        <div class="col-7">{$lang['order']['vat']}</div>
                                        <div class="col-5 text-right"><strong class="orderFinalVatPriceWe">0</strong> {$lang['product']['bath']}</div>
                                    </div>
                                    <div class="row pt-2 pb-2">
                                        <div class="col-7">{$lang['order']['pre']}</div>
                                        <div class="col-5 text-right text-primary"><strong class="orderFinalTotalPriceWe">{$array_cart['shopping_totalFinal']}</strong> {$lang['product']['bath']}</div>
                                    </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="cart-list-bottom">
                    <div class="row align-items-center pt-4 p-2">
                        <div class="col-sm-9 ">
                            <div class="row text-center">
                                <div class="col-md-3 col-sm-4 col-12 pt-2 pb-2">
                                    <a href="javascript:void(0)"
                                        onclick="actionStepOpenHidenShopping('step2','stepAddAddressToCart')" style="width: 100%; color: #3A62AF;" >
                                        <i class="feather icon-corner-up-left"></i>
                                        {$lang['system']['btn_back']}
                                    </a>
                                </div>
                                <div class="col-sm-auto pt-2 pb-2">
                                    <a href="javascript:void(0)" onclick="actionStepOpenHidenShopping('step1','stepAddTocart')" style="color: #3A62AF;">
                                        <i class="feather icon-edit"></i>
                                        {$lang['order']['Edit']}
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3 text-center text-sm-right">
                            <div class="row">
                                <div class="col-md-12 pt-2 pb-2">
                                    <a href="javascript:void(0)" onclick="orderShowInformation()"class="btn btn-sm btn-secondary btn-rounded">
                                        {$lang['order']['Continue']}
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <div class="col-12 mt-4 mb-4" id="stepAddOrderToCart" style="display:none;">
                <div class="cart-info">
                    <div class="row pt-4">
                        <div class="col-sm-6">
                            <div class="list-wrapper">
                                <div class="list-title">
                                    <img class="mr-3" src="{$template}/assets/image/icon/icon-product-cart.svg" alt="{$template}/assets/image/icon/icon-product-cart.svg">      
                                    {$lang['order']['Product']} : 
                                </div>
                                <div class="list-desc" id="infoBoxSend">  
                                    {$lang['order']['mail']}
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="list-wrapper">
                                <div class="list-title">
                                    <img class="mr-3" src="{$template}/assets/image/icon/icon-money-cart.svg" alt="{$template}/assets/image/icon/icon-money-cart.svg">       
                                    {$lang['order']['Payment']} : 
                                </div>
                                <div class="list-desc" id="infoBoxBank">ผ่านเคาน์เตอร์ธนาคารกรุงไทย (Teller Payment)">
                                    {$lang['order']['bank']}       
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-5">
                        <div class="col-sm-6">
                            <div class="list-wrapper">
                                <div class="list-title">
                                    <img class="mr-3" src="{$template}/assets/image/icon/icon-receipt-cart.svg" alt="{$template}/assets/image/icon/icon-receipt-cart.svg"> 
                                    {$lang['order']['shipping']} : 
                                </div>
                                <div class="list-desc" id="infoBoxAddress">
                                    {* สาธิต อุดมสาลี
                                    172 ซอยประเสริฐมนูกิจ 14 ถนนประเสริฐมนูกิจ แขวงจรเข้บัว
                                    เขตลาดพร้าว กรุงเทพมหานคร 10230
                                    โทรศัพท์: 02-570-1266
                                    อีเมล์: Contact@wewebplus.com *}
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="list-wrapper">
                                <div class="list-title">
                                    <img class="mr-3" src="{$template}/assets/image/icon/icon-address-cart.svg" alt="{$template}/assets/image/icon/icon-address-cart.svg"> 
                                    {$lang['order']['receipt']} :
                                 </div>
                                <div class="list-desc" id="infoBoxBill">
                                    {* สาธิต อุดมสาลี
                                    172 ซอยประเสริฐมนูกิจ 14 ถนนประเสริฐมนูกิจ
                                    แขวงจรเข้บัว เขตลาดพร้าว กรุงเทพมหานคร 10230 *}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {* <div class="cart-list-bottom">
                    <div class="row">
                        <div class="col-sm-2">
                            <a href="javascript:void(0)"
                                onclick="actionStepOpenHidenShopping('step3','stepAddPaymentToCart')"
                                class="btn btn-primary" style="width: 100%;">{$lang['system']['btn_back']}</a>
                        </div>
                        <div class="col-sm-2">
                            <a href="javascript:void(0)" onclick="actionStepOpenHidenShopping('step1','stepAddTocart')"
                                class="btn btn-primary">{$lang['order']['Edit']}</a>
                        </div>
                        <div class="col-sm-8 text-right">
                            <a href="javascript:void(0)" onclick="orderStepOrderComplete()"
                                class="btn btn-primary">{$lang['order']['Confirmation']}</a>
                        </div>
                    </div>
                </div> *}
                <div class="row">
                    <div class="col-12" {if $countcart < 1}style="display:none;"{/if}>
                        <div class="cart-detail-custom">
                            <div class="row">
                                <div class="col-sm-8 col-12 mb-3">
                                    <div class="sum-list">
                                    <div class="sum-header fw-bold">
                                        {$lang['order']['sum']} 
                                    </div>
                                    </div>
                                </div>
                                <div class="col-sm-4 col-12">
                                    <div class="sum-body fw-bold">
                                    <div class="row">
                                        <div class="col-7">{$lang['cart']['list']}</div>
                                        <div class="col-5 text-right orderFinalCountWe">{$countcart}</div>
                                    </div>
                                    <div class="row pt-2 pb-2">
                                        <div class="col-7">{$lang['order']['total']}</div>
                                        <div class="col-5 text-right"><strong class="orderFinalQuantityWe">{$array_cart['shopping_total']}</strong> {$lang['product']['bath']}</div>
                                    </div>
                                    <div class="row pt-2 pb-2">
                                        <div class="col-7">{$lang['order']['tran']}</div>
                                        <div class="col-5 text-right"><strong class="orderFinalSportPriceWe">{number_format($array_cart['TransportPriceAll'])}</strong> {$lang['product']['bath']}</div>
                                    </div>
                                    <div class="row pt-2 pb-2" style="display:none;">
                                        <div class="col-7">{$lang['order']['vat']}</div>
                                        <div class="col-5 text-right"><strong class="orderFinalVatPriceWe">0</strong> {$lang['product']['bath']}</div>
                                    </div>
                                    <div class="row pt-2 pb-2">
                                        <div class="col-7">{$lang['order']['pre']}</div>
                                        <div class="col-5 text-right text-primary"><strong class="orderFinalTotalPriceWe">{$array_cart['shopping_totalFinal']}</strong> {$lang['product']['bath']}</div>
                                    </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="cart-list-bottom">
                    <div class="row align-items-center pt-4 p-2">
                        <div class="col-sm-9 ">
                            <div class="row text-center">
                                <div class="col-md-3 col-sm-4 col-12 pt-2 pb-2">
                                    <a href="javascript:void(0)"
                                        onclick="actionStepOpenHidenShopping('step2','stepAddAddressToCart')" style="width: 100%; color: #3A62AF;">
                                        <i class="feather icon-corner-up-left"></i>
                                        {$lang['system']['btn_back']}
                                    </a>
                                </div>
                                <div class="col-sm-auto pt-2 pb-2">
                                    <a href="javascript:void(0)" onclick="actionStepOpenHidenShopping('step1','stepAddTocart')" style="color: #3A62AF;">
                                        <i class="feather icon-edit"></i>
                                        {$lang['order']['Edit']}
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3 text-center text-sm-right">
                            <div class="row">
                                <div class="col-md-12 pt-2 pb-2">
                                    <a href="javascript:void(0)" onclick="orderStepOrderComplete()"class="btn btn-sm btn-secondary btn-rounded">
                                        {$lang['order']['Continue']}
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12 sum-cart-label" {if $countcart < 1}style="display:none;"{/if}>
                <div class="cart-detail-custom">
                    <div class="row">
                        <div class="col-sm-8 col-12 mb-3">
                            <div class="sum-list">
                            <div class="sum-header fw-bold">
                                {$lang['order']['sum']} 
                            </div>
                            </div>
                         </div>
                        <div class="col-sm-4 col-12">
                            <div class="sum-body fw-bold">
                            <div class="row">
                                <div class="col-7">{$lang['cart']['list']}</div>
                                <div class="col-5 text-right" id="orderFinalCountWe">{$countcart}</div>
                            </div>
                            <div class="row pt-2 pb-2">
                                <div class="col-7">{$lang['order']['total']}</div>
                                <div class="col-5 text-right"><strong id="orderFinalQuantityWe">{$array_cart['shopping_total']}</strong> {$lang['product']['bath']}</div>
                            </div>
                            <div class="row pt-2 pb-2">
                                <div class="col-7">{$lang['order']['tran']}</div>
                                <div class="col-5 text-right"><strong id="orderFinalSportPriceWe">{number_format($array_cart['TransportPriceAll'])}</strong> {$lang['product']['bath']}</div>
                            </div>
                            <div class="row pt-2 pb-2" style="display:none;">
                                <div class="col-7">{$lang['order']['vat']}</div>
                                <div class="col-5 text-right"><strong id="orderFinalVatPriceWe">0</strong> {$lang['product']['bath']}</div>
                            </div>
                            <div class="row pt-2 pb-2">
                                <div class="col-7">{$lang['order']['pre']}</div>
                                <div class="col-5 text-right text-primary"><strong id="orderFinalTotalPriceWe">{$array_cart['shopping_totalFinal']}</strong> {$lang['product']['bath']}</div>
                            </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 text-right">
                            <div class="cart-button-continue" id="setButtonDisplay">
                                <a href="javascript:void(0)"
                                onclick="actionStepOpenHidenShopping('step2','stepAddAddressToCart')"
                                class="btn btn-file btn-sm btn-secondary btn-rounded">{$lang['order']['Continue']}</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
{literal}
    <script>
    $(document).ready(function () {
        // recaptcha v3
        grecaptcha.ready(function () {
            // do request for recaptcha token
            // response is promise with passed token
            grecaptcha
            .execute($(".sitekey").data("id"), { action: "validate_captcha" })
            .then(function (token) {
                // add token value to form
                document.getElementById("g-recaptcha-response").value = token;
            });
        });
    });

    $('.btn-number').click(function(e) {
		e.preventDefault();
		fieldName = $(this).attr('data-field');
		type = $(this).attr('data-type');
		var input = $("input[name='" + fieldName + "']");
		var currentVal = parseInt(input.val());
		if (!isNaN(currentVal)) {
			if (type == 'minus') {
				if (currentVal > input.attr('min')) {
					input.val(currentVal - 1).change();
					orderCalToCart();

				}
				if (parseInt(input.val()) == input.attr('min')) {
					$(this).attr('disabled', true);
				}
			} else if (type == 'plus') {

				if (currentVal < input.attr('max')) {
					input.val(currentVal + 1).change();
					orderCalToCart();
				}
				if (parseInt(input.val()) == input.attr('max')) {
					$(this).attr('disabled', true);
				}
			}
		} else {
			input.val(0);
		}
	});

    $('.input-number').focusin(function() {
		$(this).data('oldValue', $(this).val());
	});

	$('.input-number').change(function() {
		minValue = parseInt($(this).attr('min'));
		maxValue = parseInt($(this).attr('max'));
		valueCurrent = parseInt($(this).val());
		name = $(this).attr('name');
		if (valueCurrent >= minValue) {
			$(".btn-number[data-type='minus'][data-field='" + name + "']").removeAttr('disabled');
			orderCalToCart();
		} else {
			alert('Sorry, the minimum value was reached');
			$(this).val($(this).data('oldValue'));
		}
		if (valueCurrent <= maxValue) {
			$(".btn-number[data-type='plus'][data-field='" + name + "']").removeAttr('disabled');
			orderCalToCart();
		} else {
			alert('Sorry, the maximum value was reached');
			$(this).val($(this).data('oldValue'));
		}
	});
	$(".input-number").keydown(function(e) {
		if ($.inArray(e.keyCode, [46, 8, 9, 27, 13, 190]) !== -1 ||
			(e.keyCode == 65 && e.ctrlKey === true) ||
			(e.keyCode >= 35 && e.keyCode <= 39)) {
			return;
		}
		if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {
			e.preventDefault();
		}
	});
    </script>
{/literal}
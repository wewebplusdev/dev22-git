<section class="site-container" data-menuid="{$settingModulus['menuid']}">
    <div class="default-header">
        <div class="top-graphic">
            <figure class="cover">
                <img src="{$template}{$settingModulus.tgp}" alt="{$settingModulus.subject}">
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

    <div class="default-page diamond-calc-page">
        <div class="container">
            <!-- <div class="editor-content"> -->
            <div class="h-title">{$lang['calculator']['title']}</div>
            <div class="image-block">
                <div class="image-thumbnail">
                    <figure class="cover">
                        <img src="{$template}/assets/img/static/image-thumbnail-research.jpg"
                            alt="image thumbnail">
                    </figure>
                </div>
            </div>
            <div class="contact-block">
                <div class="title text-black typo-sm">
                    {$lang['contact']['contact_address']}
                </div>
                <div class="desc">
                    {$lang['contact']['establishment_address']}
                </div>
                <div class="desc">
                    <strong>{$lang['system']['tel']}</strong> 0 2634 4999 {$lang['contact']['ext']} <strong>409</strong> <br>
                    <strong>{$lang['system']['fax']}</strong> 0 2634 4970 <br>
                    <strong>{$lang['system']['email']}</strong> jewelry@git.or.th
                </div>
                <div class="desc">
                    <strong>{$lang['contact']['working']}</strong> <br>
                    {$lang['contact']['timmer']}
                </div>
            </div>
            <div class="diamond-calc-block">
                <div class="form-block">
                    <div class="title text-black typo-sm">
                        {$lang['calculator']['title']}
                    </div>
                    <hr class="divider my-3">
                    <form data-toggle="validator" id="form-calculator" role="form" class="form-default mt-xl-5" method="post">
                        <input type="hidden" class="form-control" name="type" id="type" value="{$callCMSFields['type']}">
                        <input type="hidden" class="form-control" name="factor" id="factor" value="{$callCMSFields['factor']}">
                        <div class="row gutters-30">
                            <div class="col-md-6">
                                <div class="form-group has-feedback">
                                    <label class="control-label" for="diaform">{$lang['calculator']['Diamond_shape']}</label>
                                    <div class="select-wrapper">
                                        <select class="select-control select-gray" name="diaform" id="diaform"
                                            style="width: 100%;">
                                            {foreach $callCMS as $keycallCMS => $valuecallCMS}
                                                {$select = ""}
                                                {if $keycallCMS eq 0}
                                                    {$select = "selected='selected'"}
                                                {/if}
                                                <option value="{$valuecallCMS.id}" data-type="{$valuecallCMS.type}" {$select} data-pic="{$valuecallCMS['pic']|fileinclude:"real":{$valuecallCMS['masterkey']}:"link"}"
                                                data-subject="{$valuecallCMS.subject}"
                                                data-factor="{$valuecallCMS.factor}"
                                                >
                                                    {$valuecallCMS.subject}
                                                </option>
                                            {/foreach}
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group type-1 confition-cal">
                                    <label class="control-label" for="diamcut1">{$lang['calculator']['Diameter']}</label>
                                    <div class="block-control">
                                        <input type="number" class="form-control" name="diamcut1" id="diamcut1" min="0"
                                            step="0.1" value="10">
                                    </div>
                                </div>
                                <div class="form-group type-other confition-cal" style="display: none;">
                                    <label class="control-label" for="diamcut">{$lang['calculator']['Length']}</label>
                                    <div class="block-control">
                                        <input type="number" class="form-control" name="diamcut" id="diamcut" min="0"
                                            step="0.1" value="10">
                                    </div>
                                </div>
                                <div class="form-group type-other confition-cal" style="display: none;">
                                    <label class="control-label" for="widecut">{$lang['calculator']['Width']}</label>
                                    <div class="block-control">
                                        <input type="number" class="form-control" name="widecut" id="widecut" min="0" step="0.1" value="8">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label" for="heightcut">{$lang['calculator']['Length']}</label>
                                    <div class="block-control">
                                        <input type="number" class="form-control" name="heightcut" id="heightcut"
                                            min="0" step="0.1" value="6">
                                    </div>
                                </div>
                                <div class="form-group has-feedback">
                                    <label class="control-label" for="girth">{$lang['calculator']['Girdle_Thickness']}</label>
                                    <div class="select-wrapper">
                                        <select class="select-control select-gray" name="girth" id="girth"
                                            style="width: 100%;">
                                            <option value="0">{$lang['calculator']['Thin_Medium']} (0%)</option>
                                            <option value="0.02">{$lang['calculator']['Slightly_Thick']} (+2%)</option>
                                            <option value="0.04">{$lang['calculator']['Thick']} (+4%)</option>
                                            <option value="0.06">{$lang['calculator']['Very_Thick']} (+6%)</option>
                                            <option value="0.09">{$lang['calculator']['Extra_Thick']} (+9%)</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label" for="pavbul">Corrections, %</label>
                                    <div class="block-control">
                                        <input type="number" class="form-control" name="pavbul" id="pavbul" min="0"
                                            step="1" value="0">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 order-md-2 order-3">
                                <div class="calc-result">
                                    <div class="wrapper">
                                        <div class="row">
                                            <div class="col">
                                                <div class="calc-shape">
                                                    <div class="row gutters-15 align-items-center">
                                                        <div class="col-auto">
                                                            <div class="icon -shape-diamon">
                                                                <img src="{$callCMSFields['pic']|fileinclude:"real":{$callCMSFields['masterkey']}:"link"}"
                                                                    alt="{$callCMSFields['sibject']}">
                                                            </div>
                                                        </div>
                                                        <div class="col -shape-title">
                                                            <div class="title fw-bold">
                                                                {$callCMSFields['subject']}
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <hr class="divider my-0">
                                        <div class="row">
                                            <div class="col">
                                                <div class="calc-detail">
                                                    <div class="desc -percentage">
                                                        {$lang['calculator']['Dept_Percentage']} <span>60</span>
                                                    </div>
                                                    <div class="desc -ratio">
                                                        {$lang['calculator']['Length_to_Width_Ratio']}: <span>1.00</span> to 1
                                                    </div>
                                                    <div class="desc text-primary -weighs">
                                                        <strong>
                                                            {$lang['calculator']['weighs_approximately']} <span>3.660</span> carats
                                                        </strong>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 order-md-3 order-2">
                                <div class="action">
                                    <div class="item-list">
                                        <li>
                                            <button type="submit" id="submitForm"
                                                class="btn btn-lg btn-primary disabled" title="คำณวน">{$lang['calculator']['Calculate']}</button>
                                        </li>
                                        <li>
                                            <button type="button" id="cancelForm" class="btn btn-lg btn-border-primary"
                                                title="{$lang['calculator']['Reset']}">{$lang['calculator']['Reset']}</button>
                                        </li>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <!-- </div> -->

        </div>
    </div>
</section>
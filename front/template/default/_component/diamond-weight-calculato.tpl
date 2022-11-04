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
            <div class="h-title">ระบบคำนวณเพชร</div>
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
                    สถานที่ติดต่อ
                </div>
                <div class="desc">
                    ห้องปฏิบัติการตรวจสอบอัญมณีสถาบันวิจัยและพัฒนาอัญมณีและเครื่องประดับแห่งชาติ
                    (องค์การมหาชน)อาคารไอทีเอฟ ทาวเวอร์ ชั้น 4 ถนนสีลม
                    แขวงสุริยวงศ์ เขตบางรัก กรุงเทพฯ 10500
                </div>
                <div class="desc">
                    <strong>โทรศัพท์</strong> 0 2634 4999 ต่อ <strong>409</strong> <br>
                    <strong>โทรสาร</strong> 0 2634 4970 <br>
                    <strong>อีเมล</strong> jewelry@git.or.th
                </div>
                <div class="desc">
                    <strong>เวลาทำการ</strong> <br>
                    วันจันทร์ - ศุกร์ เวลา 8.30 - 16.30 น. เว้นวันเสาร์ - อาทิตย์ วันนักขัตฤกษ์
                    และวันหยุดตามประกาศของสถาบัน
                </div>
            </div>
            <div class="diamond-calc-block">
                <div class="form-block">
                    <div class="title text-black typo-sm">
                        ระบบคำนวณเพชร
                    </div>
                    <hr class="divider my-3">
                    <form data-toggle="validator" id="form-calculator" role="form" class="form-default mt-xl-5" method="post">
                        <input type="hidden" class="form-control" name="type" id="type" value="{$callCMSFields['type']}">
                        <input type="hidden" class="form-control" name="factor" id="factor" value="{$callCMSFields['factor']}">
                        <div class="row gutters-30">
                            <div class="col-md-6">
                                <div class="form-group has-feedback">
                                    <label class="control-label" for="diaform">Diamond shape</label>
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
                                    <label class="control-label" for="diamcut1">Diameter, mm</label>
                                    <div class="block-control">
                                        <input type="number" class="form-control" name="diamcut1" id="diamcut1" min="0"
                                            step="0.1" value="10">
                                    </div>
                                </div>
                                <div class="form-group type-other confition-cal" style="display: none;">
                                    <label class="control-label" for="diamcut">Length, mm</label>
                                    <div class="block-control">
                                        <input type="number" class="form-control" name="diamcut" id="diamcut" min="0"
                                            step="0.1" value="10">
                                    </div>
                                </div>
                                <div class="form-group type-other confition-cal" style="display: none;">
                                    <label class="control-label" for="widecut">Width, mm</label>
                                    <div class="block-control">
                                        <input type="number" class="form-control" name="widecut" id="widecut" min="0" step="0.1" value="8">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label" for="heightcut">Depth, mm</label>
                                    <div class="block-control">
                                        <input type="number" class="form-control" name="heightcut" id="heightcut"
                                            min="0" step="0.1" value="6">
                                    </div>
                                </div>
                                <div class="form-group has-feedback">
                                    <label class="control-label" for="girth">Girdle Thickness</label>
                                    <div class="select-wrapper">
                                        <select class="select-control select-gray" name="girth" id="girth"
                                            style="width: 100%;">
                                            <option value="0">Thin-Medium (0%)</option>
                                            <option value="0.02">Slightly Thick (+2%)</option>
                                            <option value="0.04">Thick (+4%)</option>
                                            <option value="0.06">Very Thick (+6%)</option>
                                            <option value="0.09">Extra Thick (+9%)</option>
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
                                                        Dept Percentage <span>60</span>
                                                    </div>
                                                    <div class="desc -ratio">
                                                        Length to Width Ratio: <span>1.00</span> to 1
                                                    </div>
                                                    <div class="desc text-primary -weighs">
                                                        <strong>
                                                            The daimond weighs approximately <span>3.660</span> carats
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
                                                class="btn btn-lg btn-primary disabled" title="คำณวน">คำณวน</button>
                                        </li>
                                        <li>
                                            <button type="button" id="cancelForm" class="btn btn-lg btn-border-primary"
                                                title="รีเซ็ต">รีเซ็ต</button>
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
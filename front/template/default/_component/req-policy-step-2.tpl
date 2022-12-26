<section class="site-container sitekey" data-timer="{$timeout}" data-page="step-2" data-id="{$sitekey}">
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
    <div class="default-body">
      <div class="form-block">
        <div class="container">
          <div class="complaint-system-form">
            <div class="whead">
              <h2 class="title">{$lang['form']['title-befor'] }
                <span class="text-secondary">{$lang['form']['title-after'] }</span>
              </h2>
            </div>
          </div>
          <form data-toggle="validator" role="form" id="requestForm_step2" class="form-default" method="post">
            <div class="row">
              <div class="col-sm">
                <div class="form-group has-feedback">
                  <label class="control-label">{$lang['form']['fname']} <span class="text-danger">*</span></label>
                  <div class="block-control">
                    <input class="form-control" type="text" id="inputfname" name="inputfname"
                      value="{$callcustp->fields.fname}" placeholder="{$lang['form']['fname']}" data-error=""
                      required="" readonly>
                    <span class="form-control-feedback" aria-hidden="true"></span>
                  </div>
                </div>
              </div>
              <div class="col-sm">
                <div class="form-group has-feedback">
                  <label class="control-label">{$lang['form']['lname']} <span class="text-danger">*</span></label>
                  <div class="block-control">
                    <input class="form-control" type="text" id="inputlname" name="inputlname"
                      value="{$callcustp->fields.lname}" placeholder="{$lang['form']['lname']}" data-error=""
                      required="" readonly>
                    <span class="form-control-feedback" aria-hidden="true"></span>
                  </div>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-sm">
                <div class="form-group has-feedback">
                  <label class="control-label">{$lang['form']['mail']} <span class="text-danger">*</span></label>
                  <div class="block-control">
                    <input class="form-control" type="email" id="inputemail" name="inputemail"
                      value="{$callcustp->fields.email}" placeholder="{$lang['form']['mail']}" data-error="" required=""
                      readonly>
                    <span class="form-control-feedback" aria-hidden="true"></span>
                  </div>
                </div>
              </div>
              <div class="col-sm">
                <div class="form-group has-feedback">
                  <label class="control-label">{$lang['form']['phone']} <span class="text-danger">*</span></label>
                  <div class="block-control">
                    <input class="form-control" type="tel" id="inputtel" name="inputtel"
                      value="{$callcustp->fields.tel}" placeholder="{$lang['form']['phone']}" data-error="" required=""
                      readonly>
                    <span class="form-control-feedback" aria-hidden="true"></span>
                  </div>
                </div>
              </div>
            </div>

            {* Comment 4 *}
            {* <div class="form-group has-feedback">
                        <label class="control-label">{$lang['form']['type']}  <span class="text-danger">*</span></label>
                        <div class="block-control">
                            <select data-select="false" name="inputtype[]" id="inputtype" required="" data-placeholder="{$lang['form']['type']} *" class="select-control" style="width: 100%;" multiple >
                                <option value="ALL" class = "All">{$lang['form']['select']}</option>
                                {foreach $callSubGroup as $keycallSubGroup => $valuecallSubGroup}
                                    <option value="{$valuecallSubGroup.id}">{$valuecallSubGroup.subject}</option>
                                {/foreach}
                            </select>
                            <span class="form-control-feedback" aria-hidden="true"></span>
                        </div>
                    </div> *}
            <div class="form-group has-feedback">
              <label class="control-label">{$lang['form']['type']} <span class="text-danger">*</span></label>
              <div class="mb-2">
                <div class="block-control">
                  <div class="form-check">
                    <input class="form-check-input checkall" type="checkbox" value="{$valuecallCusGroup.id}" name="checkall" >
                    <label class="control-label" for="inputtype{$valuecallCusGroup.id}">
                      <div class="title">
                        {$lang['form']['select']}
                      </div>
                    </label>
                  </div>
                </div>
              </div>
              {foreach $callCusGroup as $keycallCusGroup => $valuecallCusGroup}
                <div class="mb-2">
                  <div class="form-group">
                    <div class="block-control">
                      <div class="form-check">
                        <input class="form-check-input required-chb" type="checkbox" value="{$valuecallCusGroup.id}" name="inputtype[]" id="inputtype{$valuecallCusGroup.id}">
                        <label class="control-label" for="inputtype{$valuecallCusGroup.id}">
                          <div class="title">
                            {$valuecallCusGroup.subject}
                          </div>
                        </label>
                      </div>
                    </div>
                  </div>
                </div>
              {/foreach}
            </div>
            {* End comment 4 *}
            <div class="form-group has-feedback">
              <label class="control-label">{$lang['form']['reason']}</label>
              <div class="block-control">
                <input class="form-control" type="text" id="inputreason" name="inputreason" value="" placeholder=""
                  data-error="" required="">
                <span class="form-control-feedback" aria-hidden="true"></span>
              </div>
            </div>

            {* <div class="form-group">
                        <label class="control-label">{$lang['form']['certified']}</label>
                        <div class="block-control">
                            <div class="upload-control">
                                <div class="row gutters-20 align-items-center">
                                    <div class="col">
                                        <div class="info">
                                            <div class="row no-gutters align-items-center">
                                                <div class="col-auto">
                                                    <div class="icon">
                                                        <span class="feather icon-paperclip"></span>
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <div class="inner -in-text">
                                                        <h4 class="title"><span class="filename">{$lang['form']['file']}</span><span class="typefile"></span></h4>
                                                        <p class="desc">Jpeg. Png. PDF</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-auto">
                                        <input type="file" name="uploadFile" id="uploadFile" style="display:none;" required>
                                        <input name="fileTemp" value="uploadFile" type="hidden">
                                        <input name="Uploadpicname" value="" type="hidden">
                                        <input name="delpicname" value="" type="hidden">
                                        <input name="masterkey" value="{$masterkey}" type="hidden">
                                        <input name="langon" value="{$langon}" type="hidden">
                                        <button type="button" id="clickuploadFile" class="btn">{$lang['form']['upload']}</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> *}


            {* <div class="form-group has-feedback">
                        <label class="control-label">{$lang['form']['certified']}</label>
                        <div class="block-control">
                            <input class="form-control" 
                                type="text"
                                id="inputcertified"
                                name="inputcertified" 
                                value=""
                                placeholder=""
                                pattern="{literal}^([0-9]){6}${/literal}"
                                data-error="">
                            <span class="form-control-feedback" aria-hidden="true"></span>
                        </div>
                    </div> *}

            {if $langon eq 'cn'}
              <div class="form-group">
                <div class="block-control">
                  <div class="policy-form">
                    <div class="editor-content">
                      <p>
                      我聲明並保證此處所述的信息是真實和正確的，我承認
                      公司可能會與我聯繫以獲取更多信息，以便正確處理我的請求，並且
                      完全地.
                      </p>
                      <p>
                      此外，本人亦知悉本公司會考慮本人的要求並通知本人結果
                      自請求之日起 30 天內提出請求。 公司保留考慮我的權利
                      請求並可能以遵守相關法律為由拒絕我的請求，例如；
                      </p>
                      <ul class="mb-0">
                        <li>請求者無法證明他/她是此類數據的所有者；</li>
                        <li>請求者提出的請求不合理或重複；</li>
                        <li>根據我的要求進行的程序會對他人產生負面影響； 要么</li>
                        <li>公司必鬚根據適用法律處理此類數據； 要么</li>
                        <li>由於保留期已過，本公司已刪除此類數據。</li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>

              <div class="form-group">
                <div class="block-control">
                  <div class="form-check">
                    <input class="form-check-input" name="cb" type="checkbox" id="confirm-box" required="" id="defaultCheck1">
                    <label class="control-label" for="defaultCheck1">
                    我接受
                    </label>
                  </div>
                </div>
              </div>
            {else if $langon eq 'cn'}
              <div class="form-group">
                <div class="block-control">
                  <div class="policy-form">
                    <div class="editor-content">
                      <p>
                        ข้าพเจ้าขอรับรองว่า ข้อมูลต่างๆ ที่ได้แจ้งให้แก่บริษัทนั้นเป็นความจริง ถูกต้อง
                        และบริษัทอาจติดต่อข้าพเจ้าเพื่อขอข้อมูลเพิ่มเติมเพื่อให้สามารถดำเนินการตามคำขอของข้าพเจ้าได้อย่างถูกต้อง
                        ครบถ้วน
                      </p>
                      <p class="mb-0">
                        ทั้งนี้ ข้าพเจ้ารับทราบว่า บริษัทจะพิจารณาและแจ้งผลการพิจารณาตามคำร้องขอใช้สิทธิภายใน 30
                        วันนับแต่วันที่ได้รับคำร้องขอดังกล่าว และบริษัทสงวนสิทธิในการพิจารณาคำร้องขอใช้สิทธิของข้าพเจ้า
                        และอาจจำเป็นต้องปฏิเสธคำร้องของข้าพเจ้า เพื่อให้เป็นไปตามกฎหมายที่เกี่ยวข้อง เช่น
                        กรณีไม่สามารถแสดงให้เห็นชัดเจนว่าเป็นเจ้าของข้อมูลหรือไม่มีอำนาจในการยื่นคำร้องร้องขอ
                        กรณีเป็นคำขอที่ไม่สมเหตุสมผล เป็นคำขอฟุ่มเฟือย การดำเนินการตามคำขอจะทำให้กระทบในด้านลบต่อบุคคลอื่น
                        บริษัทจำเป็นต้องใช้ข้อมูลนั้นในการประมวลผลตามหน้าที่กฎหมาย
                        หรือบริษัททำลายข้อมูลนั้นแล้วเนื่องจากพ้นระยะเวลาการเก็บข้อมูลแล้ว
                      </p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <div class="block-control">
                  <div class="form-check">
                    <input class="form-check-input" name="cb" type="checkbox" id="confirm-box" required="" id="defaultCheck1">
                    <label class="control-label" for="defaultCheck1">
                      ฉันยอมรับเงื่อนไข
                    </label>
                  </div>
                </div>
              </div>
            {else}
              <div class="form-group">
                <div class="block-control">
                  <div class="policy-form">
                    <div class="editor-content">
                      <p>
                        ข้าพเจ้าขอรับรองว่า ข้อมูลต่างๆ ที่ได้แจ้งให้แก่บริษัทนั้นเป็นความจริง ถูกต้อง
                        และบริษัทอาจติดต่อข้าพเจ้าเพื่อขอข้อมูลเพิ่มเติมเพื่อให้สามารถดำเนินการตามคำขอของข้าพเจ้าได้อย่างถูกต้อง
                        ครบถ้วน
                      </p>
                      <p class="mb-0">
                        ทั้งนี้ ข้าพเจ้ารับทราบว่า บริษัทจะพิจารณาและแจ้งผลการพิจารณาตามคำร้องขอใช้สิทธิภายใน 30
                        วันนับแต่วันที่ได้รับคำร้องขอดังกล่าว และบริษัทสงวนสิทธิในการพิจารณาคำร้องขอใช้สิทธิของข้าพเจ้า
                        และอาจจำเป็นต้องปฏิเสธคำร้องของข้าพเจ้า เพื่อให้เป็นไปตามกฎหมายที่เกี่ยวข้อง เช่น
                        กรณีไม่สามารถแสดงให้เห็นชัดเจนว่าเป็นเจ้าของข้อมูลหรือไม่มีอำนาจในการยื่นคำร้องร้องขอ
                        กรณีเป็นคำขอที่ไม่สมเหตุสมผล เป็นคำขอฟุ่มเฟือย การดำเนินการตามคำขอจะทำให้กระทบในด้านลบต่อบุคคลอื่น
                        บริษัทจำเป็นต้องใช้ข้อมูลนั้นในการประมวลผลตามหน้าที่กฎหมาย
                        หรือบริษัททำลายข้อมูลนั้นแล้วเนื่องจากพ้นระยะเวลาการเก็บข้อมูลแล้ว
                      </p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <div class="block-control">
                  <div class="form-check">
                    <input class="form-check-input" name="cb" type="checkbox" id="confirm-box" required="" id="defaultCheck1">
                    <label class="control-label" for="defaultCheck1">
                      ฉันยอมรับเงื่อนไข
                    </label>
                  </div>
                </div>
              </div>
            {/if}


            {* {if $langweb eq 'en'}
                        {include file='inc/inc-understand-en.tpl'}                        
                    {else}
                        {include file='inc/inc-understand.tpl'}                        
                    {/if} *}

            {* debug จะไม่สามารถบันทึกได้ *}
            <input type="hidden" id="g-recaptcha-response" name="g-recaptcha-response">
            {if $debug neq "debug"}
              <div class="form-button">
                <div class="row justify-content-end">
                  <div class="col-auto">
                    <input type="hidden" name="token" value="{$callcustp->fields.token}">
                    <button type="submit" id="submitform" class="btn btn-primary">{$lang['system']['submit']}</button>
                  </div>
                </div>
              </div>
            {/if}
          </form>
        </div>
      </div>
    </div>
  </div>
</section>
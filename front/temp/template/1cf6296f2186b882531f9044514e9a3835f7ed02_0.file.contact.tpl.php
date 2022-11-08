<?php
/* Smarty version 4.0.0, created on 2022-11-08 09:08:43
  from '/var/www/html/front/template/default/_component/contact.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.0',
  'unifunc' => 'content_6369ba2ba735e3_96339090',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1cf6296f2186b882531f9044514e9a3835f7ed02' => 
    array (
      0 => '/var/www/html/front/template/default/_component/contact.tpl',
      1 => 1667807016,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6369ba2ba735e3_96339090 (Smarty_Internal_Template $_smarty_tpl) {
?><section class="site-container sitekey" data-page="index" data-id="<?php echo $_smarty_tpl->tpl_vars['sitekey']->value;?>
">

  <div class="default-header">
    <div class="top-graphic mb-4 text-primary">
      <figure class="cover">
        <img class="figure-img img-fluid" src="<?php echo $_smarty_tpl->tpl_vars['template']->value;
echo $_smarty_tpl->tpl_vars['settingModulus']->value['tgp'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['settingModulus']->value['subject'];?>
">
      </figure>
      <div class="container">
        <div class="wrapper">
          <div class="title typo-lg"><?php echo $_smarty_tpl->tpl_vars['settingModulus']->value['title'];?>
</div>
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?php echo $_smarty_tpl->tpl_vars['ul']->value;?>
/home"><?php echo $_smarty_tpl->tpl_vars['lang']->value['menu']['home'];?>
</a></li>
            <?php if ($_smarty_tpl->tpl_vars['settingModulus']->value['subject'] != '') {?>
              <li class="breadcrumb-item"><a href="<?php echo $_smarty_tpl->tpl_vars['ul']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['menuActive']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['settingModulus']->value['subject'];?>
</a></li>
            <?php }?>
            <li class="breadcrumb-item active" aria-current="page"><?php echo $_smarty_tpl->tpl_vars['settingModulus']->value['breadcrumb'];?>
</li>
          </ol>
        </div>
      </div>
    </div>
  </div>
  <div class="default-page contact-page">
    <div class="container">
      <div class="contact-block">
        <div class="text-center">
          <?php if ($_smarty_tpl->tpl_vars['callCMSS']->value->fields['subject'] != '') {?>
            <div class="title">
              <?php echo $_smarty_tpl->tpl_vars['callCMSS']->value->fields['subject'];?>

            </div>
          <?php }?>
          <p class="desc">
            <?php echo $_smarty_tpl->tpl_vars['settingWeb']->value['contact'][$_smarty_tpl->tpl_vars['lang_concat']->value];?>

            <?php if ($_smarty_tpl->tpl_vars['callCMSS']->value->fields['title'] != '') {?>
              <br>
              <?php echo $_smarty_tpl->tpl_vars['callCMSS']->value->fields['title'];?>

            <?php }?>
            <br>
            <br>
            <?php echo $_smarty_tpl->tpl_vars['lang']->value['contact']['working'];?>
 : <?php echo $_smarty_tpl->tpl_vars['lang']->value['contact']['timmer'];?>

          </p>
          <div class="report-link">
            <a href="https://www.git.or.th/complainSystem/default.aspx" class="btn btn-primary"
              title="<?php echo $_smarty_tpl->tpl_vars['lang']->value['contact']['misconduct-complaint'];?>
" target="_blank">
              <?php echo $_smarty_tpl->tpl_vars['lang']->value['contact']['misconduct-complaint'];?>

            </a>
            <a href="https://www.git.or.th/complainSystem/General.aspx" class="btn btn-primary"
              title="<?php echo $_smarty_tpl->tpl_vars['lang']->value['contact']['feedback-system'];?>
" target="_blank">
              <?php echo $_smarty_tpl->tpl_vars['lang']->value['contact']['feedback-system'];?>

            </a>
          </div>
          <hr class="divider">
          <div class="contact-list">
            <ul class="item-list">
              <?php if ($_smarty_tpl->tpl_vars['settingWeb']->value['contact']['tel'] != '') {?>
                <li>
                  <a href="tel:<?php echo str_replace(" ",'',str_replace("-",'',$_smarty_tpl->tpl_vars['settingWeb']->value['contact']['tel']));?>
" class="link" title="Telephone Number">
                    <span class="feather icon-phone-call"></span>
                    <?php echo $_smarty_tpl->tpl_vars['settingWeb']->value['contact']['tel'];?>

                  </a>
                </li>
              <?php }?>
              <?php if ($_smarty_tpl->tpl_vars['settingWeb']->value['contact']['fax'] != '') {?>
                <li>
                  <a href="" class="link" title="Fax Number">
                    <span class="feather icon-printer"></span>
                    <!-- <span class="lnr lnr-printer"></span> -->
                    <?php echo $_smarty_tpl->tpl_vars['settingWeb']->value['contact']['fax'];?>

                  </a>
                </li>
              <?php }?>
              <?php if ($_smarty_tpl->tpl_vars['settingWeb']->value['contact']['email'] != '') {?>
                <li>
                  <a href="mailto:jewelry@git.or.th" class="link" title="Email address">
                    <span class="feather icon-mail"></span>
                    <?php echo $_smarty_tpl->tpl_vars['settingWeb']->value['contact']['email'];?>

                  </a>
                </li>
              <?php }?>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <div class="map-block">
      <!-- <a href="" class="link"> -->
      <div class="iframe-container">
        <iframe class="responsive-iframe"
          src="https://maps.google.com/maps?q=<?php echo $_smarty_tpl->tpl_vars['settingWeb']->value['contact']['glati'];?>
,<?php echo $_smarty_tpl->tpl_vars['settingWeb']->value['contact']['glongti'];?>
&hl=es;z=20&amp;output=embed"
          style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>
      <!-- </a> -->
    </div>
    <div class="container">
      <div class="form-block">
        <div class="title"><?php echo $_smarty_tpl->tpl_vars['lang']->value['contact']['form'];?>
</div>
        <hr class="divider">
        <form data-toggle="validator" name="contactForm" id="contactForm" role="form" class="form-default mt-xl-5" method="post">
          <div class="row gutters-lg-50 gutters-15">
            <div class="col-md-6">
              <div class="form-group has-feedback">
                <label class="control-label" for="contact"><?php echo $_smarty_tpl->tpl_vars['lang']->value['contact']['group'];?>
</label>
                <div class="select-wrapper">
                  <select class="select-control" name="inputGroup" id="inputGroup" style="width: 100%;">
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['callContactGroup']->value, 'valuecallContactGroup', false, 'keycallContactGroup');
$_smarty_tpl->tpl_vars['valuecallContactGroup']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['keycallContactGroup']->value => $_smarty_tpl->tpl_vars['valuecallContactGroup']->value) {
$_smarty_tpl->tpl_vars['valuecallContactGroup']->do_else = false;
?>
                      <option value="<?php echo $_smarty_tpl->tpl_vars['valuecallContactGroup']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['valuecallContactGroup']->value['subject'];?>
</option>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                  </select>
                </div>
              </div>
              <div class="form-group has-feedback">
                <label class="control-label" for="topic"><?php echo $_smarty_tpl->tpl_vars['lang']->value['contact']['subject'];?>
</label>
                <div class="block-control">
                  <input type="text" class="form-control" name="inputSubject" id="topic" placeholder="<?php echo $_smarty_tpl->tpl_vars['lang']->value['contact']['subject'];?>
" data-error=""
                    value="" required>
                  <span class="form-control-feedback" aria-hidden="true"></span>
                </div>
              </div>
              <div class="form-group has-feedback">
                <label class="control-label" for="message"><?php echo $_smarty_tpl->tpl_vars['lang']->value['contact']['text'];?>
</label>
                <div class="block-control">
                  <textarea class="form-control form-text-area" name="inputMessage" rows="10" cols="100" id="<?php echo $_smarty_tpl->tpl_vars['lang']->value['contact']['text'];?>
" placeholder=""
                    data-error="" required></textarea>
                  <span class="form-control-feedback" aria-hidden="true"></span>
                </div>
              </div>

            </div>
            <div class="col-md-6 order-md-2 order-first">
              <div class="graphic-map">
                <div class="row">
                  <div class="col">
                    <div class="title"><?php echo $_smarty_tpl->tpl_vars['lang']->value['contact']['graphic-map'];?>
</div>
                  </div>
                  <div class="col-auto">
                    <a href="<?php echo $_smarty_tpl->tpl_vars['ul']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['menuActive']->value;?>
/graphic-map" target="_blank" class="link" title="<?php echo $_smarty_tpl->tpl_vars['lang']->value['contact']['download-map'];?>
">
                      <span class="feather icon-download"></span><?php echo $_smarty_tpl->tpl_vars['lang']->value['contact']['download-map'];?>

                    </a>
                  </div>
                </div>
                <figure class="cover">
                  <img src="<?php echo fileinclude($_smarty_tpl->tpl_vars['settingWeb']->value['addresspic'],"real",'set',"link");?>
" alt="<?php echo $_smarty_tpl->tpl_vars['lang']->value['contact']['graphic-map'];?>
">
                </figure>
              </div>
            </div>
          </div>
          <div class="row gutters-lg-50 gutters-15">
            <div class="col-md-6">
              <div class="form-group has-feedback">
                <label class="control-label" for="fullName"><?php echo $_smarty_tpl->tpl_vars['lang']->value['contact']['name'];?>
</label>
                <div class="block-control">
                  <input type="text" class="form-control" name="inputName" id="fullName" placeholder="<?php echo $_smarty_tpl->tpl_vars['lang']->value['system']['fill'];?>
 <?php echo $_smarty_tpl->tpl_vars['lang']->value['contact']['name'];?>
" data-error=""
                    value="" required>
                  <span class="form-control-feedback" aria-hidden="true"></span>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group has-feedback">
                <label class="control-label" for="email"><?php echo $_smarty_tpl->tpl_vars['lang']->value['contact']['email'];?>
</label>
                <div class="block-control">
                  <input type="email" class="form-control" name="inputEmail" id="email" placeholder="<?php echo $_smarty_tpl->tpl_vars['lang']->value['system']['fill'];
echo $_smarty_tpl->tpl_vars['lang']->value['contact']['email'];?>
" data-error="" value="" required>
                  <span class="form-control-feedback" aria-hidden="true"></span>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group has-feedback">
                <label class="control-label" for="address"><?php echo $_smarty_tpl->tpl_vars['lang']->value['contact']['address'];?>
</label>
                <div class="block-control">
                  <input type="text" class="form-control" name="inputAddress" id="address" placeholder="<?php echo $_smarty_tpl->tpl_vars['lang']->value['system']['fill'];
echo $_smarty_tpl->tpl_vars['lang']->value['contact']['address'];?>
" data-error="" value="" required>
                  <span class="form-control-feedback" aria-hidden="true"></span>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group has-feedback">
                <label class="control-label" for="phoneNumber"><?php echo $_smarty_tpl->tpl_vars['lang']->value['contact']['tel'];?>
</label>
                <div class="block-control">
                  <input type="tel" class="form-control" name="inputTel" id="phoneNumber" placeholder="<?php echo $_smarty_tpl->tpl_vars['lang']->value['system']['fill'];
echo $_smarty_tpl->tpl_vars['lang']->value['contact']['tel'];?>
" data-error=""
                    value="" required>
                  <span class="form-control-feedback" aria-hidden="true"></span>
                </div>
              </div>
            </div>
          </div>
          <div class="row gutters-lg-50 gutters-15 justify-content-center">
            <div class="col-md-3 col">
                            <input type="hidden" id="g-recaptcha-response" name="g-recaptcha-response">
              <input type="submit"  id="submitForm" class="btn fluid btn-lg btn-primary" value="<?php echo $_smarty_tpl->tpl_vars['lang']->value['system']['submit'];?>
">
            </div>
            <div class="col-md-3 col">
              <button type="button" id="cancelForm" class="btn fluid btn-lg btn-border-primary"
                title="<?php echo $_smarty_tpl->tpl_vars['lang']->value['system']['cancel'];?>
"><?php echo $_smarty_tpl->tpl_vars['lang']->value['system']['cancel'];?>
</button>
            </div>
          </div>
        </form>
      </div>
      <?php if ($_smarty_tpl->tpl_vars['Call_File']->value->_numOfRows >= 1) {?>
        <div class="typo-lg text-primary mb-4"><?php echo $_smarty_tpl->tpl_vars['lang']->value['system']['attachment'];?>
</div>
        <div class="attachment-slider default-slick">
          <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['Call_File']->value, 'valueCall_File', false, 'keyCall_File');
$_smarty_tpl->tpl_vars['valueCall_File']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['keyCall_File']->value => $_smarty_tpl->tpl_vars['valueCall_File']->value) {
$_smarty_tpl->tpl_vars['valueCall_File']->do_else = false;
?>
            <?php ob_start();
echo $_smarty_tpl->tpl_vars['callCMSS']->value->fields['masterkey'];
$_prefixVariable3 = ob_get_clean();
$_smarty_tpl->_assignInScope('fileinfo', get_Icon(fileinclude($_smarty_tpl->tpl_vars['valueCall_File']->value['filename'],'file',$_prefixVariable3)));?>
            <div class="item">
              <div class="attachment-block">
                <a href="<?php echo $_smarty_tpl->tpl_vars['ul']->value;?>
/download/<?php ob_start();
echo $_smarty_tpl->tpl_vars['callCMSS']->value->fields['masterkey'];
$_prefixVariable4 = ob_get_clean();
echo fileinclude($_smarty_tpl->tpl_vars['valueCall_File']->value['filename'],'file',$_prefixVariable4,'download');?>
&n=<?php echo $_smarty_tpl->tpl_vars['valueCall_File']->value['name'];?>
&t=<?php echo encodeStr('md_cmsf');?>
" class="link" title="<?php echo $_smarty_tpl->tpl_vars['lang']->value['system']['attachment'];?>
">
                  <div class="row no-gutters">
                    <div class="col-auto">
                      <!-- <img class="icon" src="<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/assets/img/icon/icon-attachment.svg" alt="attachment icon"> -->
                      <svg xmlns="http://www.w3.org/2000/svg" width="32" height="41" viewBox="0 0 32 41">
                        <g data-name="Group 9337" transform="translate(0)">
                          <path data-name="Path 2087"
                            d="M9.75,2h15a1,1,0,0,1,.721.307l11.25,11.7A1,1,0,0,1,37,14.7V38.1A4.832,4.832,0,0,1,32.25,43H9.75A4.832,4.832,0,0,1,5,38.1V6.9A4.832,4.832,0,0,1,9.75,2ZM24.324,4H9.75A2.831,2.831,0,0,0,7,6.9V38.1A2.831,2.831,0,0,0,9.75,41h22.5A2.831,2.831,0,0,0,35,38.1v-23Z"
                            transform="translate(-5 -2)" fill="#013f94" />
                          <path data-name="Path 2088"
                            d="M32.438,15.438H21a1,1,0,0,1-1-1V3a1,1,0,0,1,2,0V13.438H32.438a1,1,0,0,1,0,2Z"
                            transform="translate(-1.438 -2)" fill="#013f94" />
                          <path data-name="Path 2089" d="M26.75,20.5H12a1,1,0,0,1,0-2H26.75a1,1,0,0,1,0,2Z"
                            transform="translate(-3.375 2.949)" fill="#013f94" />
                          <path data-name="Path 2090" d="M26.75,26.5H12a1,1,0,0,1,0-2H26.75a1,1,0,0,1,0,2Z"
                            transform="translate(-3.375 4.75)" fill="#013f94" />
                          <path data-name="Path 2091" d="M15.813,14.5H12a1,1,0,0,1,0-2h3.813a1,1,0,0,1,0,2Z"
                            transform="translate(-3.518 1.15)" fill="#013f94" />
                        </g>
                      </svg>
                    </div>
                    <div class="col">
                      <div class="title typo-sm"><?php echo $_smarty_tpl->tpl_vars['valueCall_File']->value['name'];?>
</div>
                      <div class="subtitle typo-x"><?php echo $_smarty_tpl->tpl_vars['lang']->value['system']['size'];?>
 : <?php ob_start();
echo $_smarty_tpl->tpl_vars['callCMSS']->value->fields['masterkey'];
$_prefixVariable5 = ob_get_clean();
echo get_IconSize(fileinclude($_smarty_tpl->tpl_vars['valueCall_File']->value['filename'],'file',$_prefixVariable5));?>
 | <?php echo $_smarty_tpl->tpl_vars['lang']->value['system']['type'];?>
 : <?php echo $_smarty_tpl->tpl_vars['fileinfo']->value['type'];?>
</div>
                    </div>
                  </div>
                </a>
              </div>
            </div>
          <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </div>
      <?php }?>
    </div>
  </div>

</section><?php }
}

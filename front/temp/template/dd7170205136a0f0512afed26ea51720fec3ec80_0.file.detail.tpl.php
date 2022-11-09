<?php
/* Smarty version 4.0.0, created on 2022-11-09 09:30:24
  from '/var/www/html/front/controller/script/calendar/template/detail.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.0',
  'unifunc' => 'content_636b10c0804e01_96089249',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dd7170205136a0f0512afed26ea51720fec3ec80' => 
    array (
      0 => '/var/www/html/front/controller/script/calendar/template/detail.tpl',
      1 => 1667960953,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_636b10c0804e01_96089249 (Smarty_Internal_Template $_smarty_tpl) {
?><section class="site-container">
  <div class="default-page">
    <div class="default-header">
      <div class="list-wrapper">
        <div class="container">
          <ol class="breadcrumb">
            <li><a href="<?php echo $_smarty_tpl->tpl_vars['ul']->value;?>
/home"><?php echo $_smarty_tpl->tpl_vars['lang']->value['menu']['home'];?>
</a></li>
            <li><a href="<?php echo $_smarty_tpl->tpl_vars['ul']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['menuActive']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['lang']->value['menu']['calendar'];?>
</a></li>
            <li class="active">
                <?php echo $_smarty_tpl->tpl_vars['callCalendarDetail']->value->fields['subject'];?>

            </li>
          </ol>
          <h1 class="page-title">
            <?php echo $_smarty_tpl->tpl_vars['lang']->value['menu']['calendar'];?>

          </h1>
        </div>
      </div>
    </div>
    <div class="default-bar mt-5">
      <div class="container">
        <div class="whead">
          <div class="whead-block">
            <div class="row">
              <div class="col-md-8 col-auto">
                <div class="whead-title">
                  <?php echo $_smarty_tpl->tpl_vars['callCalendarDetail']->value->fields['subject'];?>

                </div>
              </div>
              <div class="col-md-4 col-auto d-flex justify-content-end">
                <div class="social-block">
                  <div class="social-title">Share :</div>
                  <ul class="item-list">
                    <li>
                      <a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo $_smarty_tpl->tpl_vars['fullurl']->value;?>
" target="_blank"
                        title="<?php echo $_smarty_tpl->tpl_vars['lang']->value["news"]['fb'];?>
">
                        <img src="<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/assets/image/icon/social-icon-facebook.svg" alt="<?php echo $_smarty_tpl->tpl_vars['lang']->value["news"]['fb'];?>
"
                          title="<?php echo $_smarty_tpl->tpl_vars['lang']->value["news"]['fb'];?>
" />
                      </a>
                    </li>
                    <li>
                      <a href="https://twitter.com/intent/tweet?url=<?php echo $_smarty_tpl->tpl_vars['fullurl']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['lang']->value["news"]['tw'];?>
"
                        target="_blank">
                        <img src="<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/assets/image/icon/social-icon-twitter.svg" alt="<?php echo $_smarty_tpl->tpl_vars['lang']->value["news"]['tw'];?>
"
                          title="<?php echo $_smarty_tpl->tpl_vars['lang']->value["news"]['tw'];?>
" />
                      </a>
                    </li>
                    <li>
                      <a href="https://plus.google.com/share?url=<?php echo $_smarty_tpl->tpl_vars['fullurl']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['lang']->value["news"]['gg'];?>
"
                        target="_blank">
                        <img src="<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/assets/image/icon/social-icon-google-plus.svg" alt="<?php echo $_smarty_tpl->tpl_vars['lang']->value["news"]['gg'];?>
"
                          title="<?php echo $_smarty_tpl->tpl_vars['lang']->value["news"]['gg'];?>
" />
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="whead-addon">
              <div class="detail-info mt-1 mb-3">
                <ul class="item-list">
                  <li>
                    <span class="feather icon-calendar" aria-hidden="true"></span>
                    <?php echo DateThai($_smarty_tpl->tpl_vars['callCalendarDetail']->value->fields['credate'],"17","en","shot");?>

                  </li>
                  <li>
                    <span class="feather icon-eye" aria-hidden="true"></span>
                    <?php echo number_format($_smarty_tpl->tpl_vars['callCalendarDetail']->value->fields['view']);?>

                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="default-body">
      <div class="container">
        <div class="news-page">
          <div class="detail-block">
            <?php if ($_smarty_tpl->tpl_vars['callCalendarDetail']->value->fields['pic']) {?>
              <div class="detail-fullImg">
                <figure>
                  <img src="<?php ob_start();
echo $_smarty_tpl->tpl_vars['callCalendarDetail']->value->fields['masterkey'];
$_prefixVariable1 = ob_get_clean();
echo fileinclude($_smarty_tpl->tpl_vars['callCalendarDetail']->value->fields['pic'],"real",$_prefixVariable1,"link");?>
"
                    alt="<?php echo $_smarty_tpl->tpl_vars['callCalendarDetail']->value->fields['subject'];?>
"/>
                </figure>
              </div>
            <?php }?>
            <div class="editor-content">
              <!-- CK Editor -->
              <?php echo callHtml(fileinclude($_smarty_tpl->tpl_vars['callCalendarDetail']->value->fields['htmlfilename'],"html",$_smarty_tpl->tpl_vars['callCalendarDetail']->value->fields['masterkey']));?>

              <!-- CK Editor -->
            </div>

            <?php if ($_smarty_tpl->tpl_vars['callCalendarDetail']->value->fields['url'] != '') {?>
              <?php $_smarty_tpl->_assignInScope('myUrlArray', explode("v=",$_smarty_tpl->tpl_vars['callCalendarDetail']->value->fields['url']));?>
              <?php $_smarty_tpl->_assignInScope('myUrlCut', $_smarty_tpl->tpl_vars['myUrlArray']->value[1]);?>
              <?php $_smarty_tpl->_assignInScope('myUrlCutArray', explode("&",$_smarty_tpl->tpl_vars['myUrlCut']->value));?>
              <?php $_smarty_tpl->_assignInScope('myUrlCutAnd', $_smarty_tpl->tpl_vars['myUrlCutArray']->value[0]);?>
              <div class="content-video" style="margin-top: 20px; margin-bottom: 20px">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/<?php echo $_smarty_tpl->tpl_vars['myUrlCutAnd']->value;?>
?rel=0&showinfo=0"
                   allowfullscreen></iframe>
              </div>
            <?php }?>

            <?php if ($_smarty_tpl->tpl_vars['Call_Album']->value->_numOfRows >= 1) {?>
              <div class="detail-img" id="boxDetail-img">
                <div class="slick-slider">
                  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['Call_Album']->value, 'valueCall_Album', false, 'keyCall_Album');
$_smarty_tpl->tpl_vars['valueCall_Album']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['keyCall_Album']->value => $_smarty_tpl->tpl_vars['valueCall_Album']->value) {
$_smarty_tpl->tpl_vars['valueCall_Album']->do_else = false;
?>
                    <div class="item">
                      <a href="<?php ob_start();
echo $_smarty_tpl->tpl_vars['callCalendarDetail']->value->fields['masterkey'];
$_prefixVariable2 = ob_get_clean();
echo fileinclude($_smarty_tpl->tpl_vars['valueCall_Album']->value['filename'],"album",$_prefixVariable2,"album");?>
" data-fancybox="image" title="<?php echo $_smarty_tpl->tpl_vars['valueCall_Album']->value['filename'];?>
">
                        <figure class="thumb-bg"
                          style="background-image: url('<?php ob_start();
echo $_smarty_tpl->tpl_vars['callCalendarDetail']->value->fields['masterkey'];
$_prefixVariable3 = ob_get_clean();
echo fileinclude($_smarty_tpl->tpl_vars['valueCall_Album']->value['filename'],"album",$_prefixVariable3,"album");?>
');">
                          <img src="<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/assets/image/asset/thumb-detail-img.png"
                            alt="<?php echo $_smarty_tpl->tpl_vars['valueCall_Album']->value['filename'];?>
" />
                        </figure>
                      </a>
                    </div>
                  <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </div>
              </div>
            <?php }?>

            <?php if ($_smarty_tpl->tpl_vars['callCalendarDetail']->value->fields['dwswitch'] == "On" && $_smarty_tpl->tpl_vars['Call_File']->value->_numOfRows >= 1) {?>
              <div class="download-block">
                <div class="download-list-title">
                  <h2 class="head-title text-primary"><?php echo $_smarty_tpl->tpl_vars['lang']->value['system']['download'];?>
</h2>
                </div>
                <div class="download-list">
                  <div class="slider">
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['Call_File']->value, 'valueCall_File', false, 'keyCall_File');
$_smarty_tpl->tpl_vars['valueCall_File']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['keyCall_File']->value => $_smarty_tpl->tpl_vars['valueCall_File']->value) {
$_smarty_tpl->tpl_vars['valueCall_File']->do_else = false;
?>
                      <?php ob_start();
echo $_smarty_tpl->tpl_vars['callCalendarDetail']->value->fields['masterkey'];
$_prefixVariable4 = ob_get_clean();
$_smarty_tpl->_assignInScope('fileinfo', get_Icon(fileinclude($_smarty_tpl->tpl_vars['valueCall_File']->value['filename'],'file',$_prefixVariable4)));?>
                      <div class="item">
                        <div class="list-wrapper">
                          <div class="row gutters-10 align-items-center">
                            <div class="col-auto">
                              <div class="list-icon">
                                <img src="<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/assets/image/icon/icon-file.svg" alt="">
                              </div>
                            </div>
                            <div class="col">
                              <div class="list-title text-primary text-limit">
                                <?php echo $_smarty_tpl->tpl_vars['valueCall_File']->value['name'];?>

                              </div>
                              <div class="list-info">
                                <span>
                                  <?php echo $_smarty_tpl->tpl_vars['lang']->value['system']['type'];?>
 :
                                  <span class=""><?php echo $_smarty_tpl->tpl_vars['fileinfo']->value['type'];?>
</span>
                                </span>
                                <span>
                                  <?php echo $_smarty_tpl->tpl_vars['lang']->value['system']['size'];?>
 :
                                  <span
                                    class=""><?php ob_start();
echo $_smarty_tpl->tpl_vars['callCalendarDetail']->value->fields['masterkey'];
$_prefixVariable5 = ob_get_clean();
echo get_IconSize(fileinclude($_smarty_tpl->tpl_vars['valueCall_File']->value['filename'],'file',$_prefixVariable5));?>
</span>
                                </span>
                                <span>
                                  <?php echo $_smarty_tpl->tpl_vars['lang']->value["system"]['count'];?>
 :
                                  <span class=""><?php echo number_format($_smarty_tpl->tpl_vars['valueCall_File']->value['download']);?>
</span>
                                </span>
                              </div>
                            </div>
                            <div class="col-auto">
                              <div class="list-btn">
                                <a href="<?php echo $_smarty_tpl->tpl_vars['ul']->value;?>
/download/<?php ob_start();
echo $_smarty_tpl->tpl_vars['callCalendarDetail']->value->fields['masterkey'];
$_prefixVariable6 = ob_get_clean();
echo fileinclude($_smarty_tpl->tpl_vars['valueCall_File']->value['filename'],'file',$_prefixVariable6,'download');?>
&n=<?php echo $_smarty_tpl->tpl_vars['valueCall_File']->value['name'];?>
&t=<?php echo encodeStr('md_caf');?>
"
                                  target="_blank" class="btn btn-xs fluid btn-primary btn-rounded" title="<?php echo $_smarty_tpl->tpl_vars['lang']->value['system']['download'];?>
">
                                  <span class="fa fa-download"></span><?php echo $_smarty_tpl->tpl_vars['lang']->value['system']['download'];?>

                                </a>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                  </div>
                </div>
              </div>
            <?php }?>

            <div class="detail-bar">
              <div class="social-block d-block">
                <ul class="item-list">
                  <li>
                    <a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo $_smarty_tpl->tpl_vars['fullurl']->value;?>
" target="_blank"
                      title="<?php echo $_smarty_tpl->tpl_vars['lang']->value["news"]['fb'];?>
">
                      <img src="<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/assets/image/icon/social-icon-facebook.svg" alt="<?php echo $_smarty_tpl->tpl_vars['lang']->value["news"]['fb'];?>
"
                        title="<?php echo $_smarty_tpl->tpl_vars['lang']->value["news"]['fb'];?>
" />
                    </a>
                  </li>
                  <li>
                    <a href="https://twitter.com/intent/tweet?url=<?php echo $_smarty_tpl->tpl_vars['fullurl']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['lang']->value["news"]['tw'];?>
"
                      target="_blank">
                      <img src="<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/assets/image/icon/social-icon-twitter.svg" alt="<?php echo $_smarty_tpl->tpl_vars['lang']->value["news"]['tw'];?>
"
                        title="<?php echo $_smarty_tpl->tpl_vars['lang']->value["news"]['tw'];?>
" />
                    </a>
                  </li>
                  <li>
                    <a href="https://plus.google.com/share?url=<?php echo $_smarty_tpl->tpl_vars['fullurl']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['lang']->value["news"]['gg'];?>
"
                      target="_blank">
                      <img src="<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/assets/image/icon/social-icon-google-plus.svg" alt="<?php echo $_smarty_tpl->tpl_vars['lang']->value["news"]['gg'];?>
"
                        title="<?php echo $_smarty_tpl->tpl_vars['lang']->value["news"]['gg'];?>
" />
                    </a>
                  </li>
                </ul>
              </div>

              <?php if ($_smarty_tpl->tpl_vars['call_hashtag']->value->_numOfRows >= 1) {?>
                <div class="tag-list">
                                    <ul class="item-list">
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['call_hashtag']->value, 'valuecall_hashtag', false, 'keycall_hashtag');
$_smarty_tpl->tpl_vars['valuecall_hashtag']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['keycall_hashtag']->value => $_smarty_tpl->tpl_vars['valuecall_hashtag']->value) {
$_smarty_tpl->tpl_vars['valuecall_hashtag']->do_else = false;
?>
                      <li>
                        <a class="calendar-detail-hashtag" href="<?php echo $_smarty_tpl->tpl_vars['ul']->value;?>
/search/hashtag/<?php echo encodeStr($_smarty_tpl->tpl_vars['valuecall_hashtag']->value['id']);?>
"
                          title="<?php echo $_smarty_tpl->tpl_vars['valuecall_hashtag']->value['subject'];?>
"><?php echo $_smarty_tpl->tpl_vars['valuecall_hashtag']->value['subject'];?>
</a>
                      </li>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                  </ul>
                </div>
              <?php }?>
            </div>
            <div class="detail-bottom">
              <a href="javascript:history.back();" class="btn-link">
                <span class="feather icon-chevron-left"></span>
                <?php echo $_smarty_tpl->tpl_vars['lang']->value['system']['btn_back'];?>
</a>
            </div>
            <div style="clear: both; height: 20px"></div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section><?php }
}

<?php
/* Smarty version 4.0.0, created on 2022-11-09 11:55:12
  from '/var/www/html/front/controller/script/calendar/template/detail.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.0',
  'unifunc' => 'content_636b32b0190e49_70405425',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dd7170205136a0f0512afed26ea51720fec3ec80' => 
    array (
      0 => '/var/www/html/front/controller/script/calendar/template/detail.tpl',
      1 => 1667969707,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_636b32b0190e49_70405425 (Smarty_Internal_Template $_smarty_tpl) {
?><section class="site-container">

   <div class="default-page">
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
                     <li class="breadcrumb-item"><a href="<?php echo $_smarty_tpl->tpl_vars['ul']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['menuActive']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['settingModulus']->value['subject'];?>
</a></li>
                     <li class="breadcrumb-item active"><a href="javascript:void(0);"><?php echo $_smarty_tpl->tpl_vars['callCalendarDetail']->value->fields['subject'];?>
</a></li>
                  </ol>
               </div>
            </div>
         </div>
      </div>
      <div class="container">
         <?php if ($_smarty_tpl->tpl_vars['callCalendarDetail']->value->fields['htmlfilename'] != '') {?>
            <div class="editor-content">
               <!-- CK Editor -->
               <?php echo callHtml(fileinclude($_smarty_tpl->tpl_vars['callCalendarDetail']->value->fields['htmlfilename'],"html",$_smarty_tpl->tpl_vars['callCalendarDetail']->value->fields['masterkey']));?>

               <!-- CK Editor -->
            </div>
         <?php }?>
         <div class="border-nav-slider pt-5"></div>
         <?php if ($_smarty_tpl->tpl_vars['callCalendarDetail']->value->fields['url'] != '' && $_smarty_tpl->tpl_vars['callCalendarDetail']->value->fields['url'] != '#') {?>
            <?php $_smarty_tpl->_assignInScope('myUrlArray', explode("v=",$_smarty_tpl->tpl_vars['callCalendarDetail']->value->fields['url']));?>
            <?php $_smarty_tpl->_assignInScope('myUrlCut', $_smarty_tpl->tpl_vars['myUrlArray']->value[1]);?>
            <?php $_smarty_tpl->_assignInScope('myUrlCutArray', explode("&",$_smarty_tpl->tpl_vars['myUrlCut']->value));?>
            <?php $_smarty_tpl->_assignInScope('myUrlCutAnd', $_smarty_tpl->tpl_vars['myUrlCutArray']->value[0]);?>
            <div class="youtube-block pt-4">
               <div class="iframe-container">
                  <iframe class="responsive-iframe" src="https://www.youtube.com/embed/<?php echo $_smarty_tpl->tpl_vars['myUrlCutAnd']->value;?>
" title="YouTube video player"
                          allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                          allowfullscreen></iframe>
               </div>
            </div>
         <?php }?>

         <?php if ($_smarty_tpl->tpl_vars['callCalendarDetail']->value->fields['dwswitch'] == "On" && $_smarty_tpl->tpl_vars['Call_File']->value->_numOfRows >= 1) {?>
            <div class="row mt-5">
               <div class="col-12">
                  <h2 class="text-primary mb-4"><?php echo $_smarty_tpl->tpl_vars['lang']->value['system']['attachment'];?>
</h2>
                  <div class="attachment-slider default-slick">
                     <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['Call_File']->value, 'valueCall_File', false, 'keyCall_File');
$_smarty_tpl->tpl_vars['valueCall_File']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['keyCall_File']->value => $_smarty_tpl->tpl_vars['valueCall_File']->value) {
$_smarty_tpl->tpl_vars['valueCall_File']->do_else = false;
?>
                        <?php ob_start();
echo $_smarty_tpl->tpl_vars['callCalendarDetail']->value->fields['masterkey'];
$_prefixVariable1 = ob_get_clean();
$_smarty_tpl->_assignInScope('fileinfo', get_Icon(fileinclude($_smarty_tpl->tpl_vars['valueCall_File']->value['filename'],'file',$_prefixVariable1)));?>
                        <div class="item">
                           <div class="attachment-block">
                              <a href="<?php echo $_smarty_tpl->tpl_vars['ul']->value;?>
/download/<?php ob_start();
echo $_smarty_tpl->tpl_vars['callCMS']->value->fields['masterkey'];
$_prefixVariable2 = ob_get_clean();
echo fileinclude($_smarty_tpl->tpl_vars['valueCall_File']->value['filename'],'file',$_prefixVariable2,'download');?>
&n=<?php echo $_smarty_tpl->tpl_vars['valueCall_File']->value['name'];?>
&t=<?php echo encodeStr('md_cmf');?>
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
echo $_smarty_tpl->tpl_vars['callCMS']->value->fields['masterkey'];
$_prefixVariable3 = ob_get_clean();
echo get_IconSize(fileinclude($_smarty_tpl->tpl_vars['valueCall_File']->value['filename'],'file',$_prefixVariable3));?>
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
               </div>
            </div>
         <?php }?>
         <div class="row pt-5 text-right">
            <div class="col-12">
               <a href="javascript:history.back();" class="btn btn-border-primary" title="btn btn-primary"><?php echo $_smarty_tpl->tpl_vars['lang']->value['system']['btn_back'];?>
</a>
            </div>
         </div>
      </div>
   </div>
</section><?php }
}

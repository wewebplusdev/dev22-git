<?php
/* Smarty version 4.0.0, created on 2022-11-09 08:24:56
  from '/var/www/html/front/template/default/_component/search.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.0',
  'unifunc' => 'content_636b01685665f9_90439460',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0d0a57e7021769d4fd9e532da6d398c4fe0fc8e6' => 
    array (
      0 => '/var/www/html/front/template/default/_component/search.tpl',
      1 => 1667957091,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_636b01685665f9_90439460 (Smarty_Internal_Template $_smarty_tpl) {
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
                  <li class="breadcrumb-item active"><a href="<?php echo $_smarty_tpl->tpl_vars['ul']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['menuActive']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['settingModulus']->value['subject'];?>
</a></li>
               </ol>
            </div>
         </div>
      </div>
   </div>
   <div class="default-page contact-page">
      <div class="container">
         <h2 class="h-title text-left mb-0"><?php echo $_smarty_tpl->tpl_vars['lang']->value['search']['subject'];?>
</h2>

         <div class="search-block mb-3">
            <form data-toggle="validator" role="form" class="form-default" method="post">
               <div class="row">
                  <div class="col">
                     <div class="block-control form-group">
                        <label class="control-label visuallyhidden" for="keyword"><?php echo $_smarty_tpl->tpl_vars['lang']->value['search']['subject'];?>
</label>
                        <input type="text" class="form-control" id="keyword" name="srchtxt_main" value="<?php echo $_smarty_tpl->tpl_vars['srchtxt_main']->value;?>
" aria-describedby="keyword" placeholder="<?php echo $_smarty_tpl->tpl_vars['lang']->value['search']['subject'];?>
">
                        <button type="submit" class="btn form-control-icon">
                           <span class="icon-from -icon-search"></span>
                        </button>
                     </div>
                  </div>
               </div>
               <div class="search-result">
                  <?php echo $_smarty_tpl->tpl_vars['result_txt']->value;?>

               </div>
            </form>

            <?php if ($_smarty_tpl->tpl_vars['search_result']->value->_numOfRows >= 1) {?>

               <ul class="item-list">
                  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['search_result']->value, 'result');
$_smarty_tpl->tpl_vars['result']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['result']->value) {
$_smarty_tpl->tpl_vars['result']->do_else = false;
?>
                     <li>
                        <div class="row align-items-end">
                           <div class="col">
                              <div class="title"><?php echo $_smarty_tpl->tpl_vars['result']->value['subject'];?>
</div>
                              <div class="desc text-limit"><?php echo $_smarty_tpl->tpl_vars['result']->value['title'];?>
</div>
                              <a href="<?php echo $_smarty_tpl->tpl_vars['domain']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['result']->value['url'];?>
" class="link" target="_blank"><?php echo $_smarty_tpl->tpl_vars['domain']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['result']->value['url'];?>
</a>
                           </div>
                           <div class="col-md-auto">
                              <a href="<?php echo $_smarty_tpl->tpl_vars['domain']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['result']->value['url'];?>
" class="link detail" title="<?php echo $_smarty_tpl->tpl_vars['result']->value['title'];?>
" target="_blank">
                                 <div class="row align-items-center no-gutters">
                                    <div class="col-auto">
                                       <div class="txt">
                                          <?php echo $_smarty_tpl->tpl_vars['lang']->value['search']['more'];?>

                                       </div>
                                    </div>
                                    <div class="col-auto">
                                       <img src="<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/assets/img/icon/icon-detail.svg" alt="icon-detail">
                                    </div>
                                 </div>
                              </a>
                           </div>
                        </div>
                     </li>
                  <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
               </ul>

            <?php }?>
         </div>

         <div class="editor-content">
         </div>
         <?php if ($_smarty_tpl->tpl_vars['search_result']->value->_numOfRows >= 1 && $_smarty_tpl->tpl_vars['pagination']->value['totalpage'] >= 2) {?>
            <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['incfile']->value['pagination']), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
         <?php }?>
      </div>
   </div>

</section><?php }
}

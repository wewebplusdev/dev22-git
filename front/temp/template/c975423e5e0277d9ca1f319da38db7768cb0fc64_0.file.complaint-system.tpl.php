<?php
/* Smarty version 4.0.0, created on 2022-11-07 21:13:17
  from '/var/www/html/front/template/default/_component/complaint-system.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.0',
  'unifunc' => 'content_6369127d387310_19665055',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c975423e5e0277d9ca1f319da38db7768cb0fc64' => 
    array (
      0 => '/var/www/html/front/template/default/_component/complaint-system.tpl',
      1 => 1667830393,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6369127d387310_19665055 (Smarty_Internal_Template $_smarty_tpl) {
?><section class="site-container sitekey" data-page="formcomplain" data-id="<?php echo $_smarty_tpl->tpl_vars['sitekey']->value;?>
">
            <div class="default-header">
                <div class="top-graphic mb-4">
                    <figure class="cover">
                        <img class="figure-img img-fluid" src="<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/assets/img/background/mock-top-grapphic-2.png" alt="">
                    </figure>
                    <div class="container">
                        <div class="wrapper">
                            <div class="title typo-lg"><?php echo $_smarty_tpl->tpl_vars['settingModulus']->value['title'];?>
</div>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="<?php echo $_smarty_tpl->tpl_vars['ul']->value;?>
/home"><?php echo $_smarty_tpl->tpl_vars['lang']->value['menu']['home'];?>
</a></li>
                                <li class="breadcrumb-item active" aria-current="page"><a href="<?php echo $_smarty_tpl->tpl_vars['ul']->value;?>
/policy"><?php echo $_smarty_tpl->tpl_vars['lang']->value["policy"]["title"];?>
</a></li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <div class="default-page about">
                <div class="container">
                    <div class="complaint-system-form">
                        <div class="title"><?php echo $_smarty_tpl->tpl_vars['lang']->value["policy"]["complaint"];?>
</div>
                        <div class="desc">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and</div>
                        <form data-toggle="validator" ame="complainForm" id="complainForm" role="form" class="form-default" method="post">

                            <div class="form-group has-feedback">
                                <label class="control-label" for="complaintSystemTopic"><?php echo $_smarty_tpl->tpl_vars['lang']->value['contact']['group'];?>
</label>
                                <div class="select-wrapper">
                                    <select class="select-control select-year" name="inputGroup" id="inputGroup" style="width: 100%;">
                                        <option value="SELECT1">แจ้งเรื่องร้องเรียนทั่วไป</option>
                                        <option value="SELECT2">แจ้งเรื่องร้องเรียนทั่วไป</option>
                                        <option value="SELECT3">แจ้งเรื่องร้องเรียนทั่วไป</option>
                                        <option value="SELECT4">แจ้งเรื่องร้องเรียนทั่วไป</option>
                                        <option value="SELECT5">แจ้งเรื่องร้องเรียนทั่วไป</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group has-feedback -nm">
                                <label class="control-label" for="complaintSystemTextArea"><?php echo $_smarty_tpl->tpl_vars['lang']->value['contact']['text'];?>
</label>
                                <div class="block-control">
                                    <textarea class="form-control form-text-area h-100" rows="6" cols="100" name="inputMessage" id="inputMessage" value="Spicyfi" data-error="" required></textarea>
                                    <span class="form-control-feedback" aria-hidden="true"></span>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm">
                                    <div class="form-group has-feedback">
                                        <label class="control-label" for="complaintSystemF-name"><?php echo $_smarty_tpl->tpl_vars['lang']->value['contact']['name'];?>
</label>
                                        <span>*</span>
                                        <div class="block-control">
                                            <input type="text" class="form-control" name="inputName" id="inputName" placeholder="<?php echo $_smarty_tpl->tpl_vars['lang']->value['system']['fill'];?>
 <?php echo $_smarty_tpl->tpl_vars['lang']->value['contact']['name'];?>
" data-error="" required>
                                            <span class="form-control-feedback" aria-hidden="true"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm">
                                    <div class="form-group has-feedback">
                                        <label class="control-label" for="complaintSystemE-mail"><?php echo $_smarty_tpl->tpl_vars['lang']->value['contact']['email'];?>
</label>
                                        <span>*</span>
                                        <div class="block-control">
                                            <input type="email" class="form-control" name="inputEmail" id="inputEmail" placeholder="<?php echo $_smarty_tpl->tpl_vars['lang']->value['system']['fill'];
echo $_smarty_tpl->tpl_vars['lang']->value['contact']['email'];?>
" data-error="" required>
                                            <span class="form-control-feedback" aria-hidden="true"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm">
                                    <div class="form-group has-feedback">
                                        <label class="control-label" for="complaintSystemAdress"><?php echo $_smarty_tpl->tpl_vars['lang']->value['contact']['address'];?>
</label>
                                        <div class="block-control">
                                            <input type="text" class="form-control" name="inputAddress" id="inputAddress" placeholder="<?php echo $_smarty_tpl->tpl_vars['lang']->value['system']['fill'];
echo $_smarty_tpl->tpl_vars['lang']->value['contact']['address'];?>
" data-error="" required>
                                            <span class="form-control-feedback" aria-hidden="true"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm">
                                    <div class="form-group has-feedback">
                                        <label class="control-label" for="complaintSystemTelephone"><?php echo $_smarty_tpl->tpl_vars['lang']->value['contact']['tel'];?>
</label>
                                        <div class="block-control">
                                            <input type="tel" class="form-control" name="inputTel" id="inputTel" placeholder="<?php echo $_smarty_tpl->tpl_vars['lang']->value['system']['fill'];
echo $_smarty_tpl->tpl_vars['lang']->value['contact']['tel'];?>
" data-error="" required>
                                            <span class="form-control-feedback" aria-hidden="true"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                                                        <div class="row mt-sm-5 mt-4">
                                <div class="col text-right">
                                    <input type="submit" class="btn btn-primary" id="submitForm" title="btn btn-primary" value="<?php echo $_smarty_tpl->tpl_vars['lang']->value['system']['submit'];?>
"></input>
                                </div>
                                <div class="col text-left">
                                    <button class="btn btn-primary -cancel"  title="<?php echo $_smarty_tpl->tpl_vars['lang']->value['system']['cancel'];?>
"><?php echo $_smarty_tpl->tpl_vars['lang']->value['system']['cancel'];?>
</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section><?php }
}

<?php
/* Smarty version 4.0.0, created on 2022-11-08 16:03:00
  from '/var/www/html/front/template/default/_component/req-policy.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.0',
  'unifunc' => 'content_636a1b44614c20_63596155',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f4b6d5f1b336030baaf6b03fa03363b4849cab85' => 
    array (
      0 => '/var/www/html/front/template/default/_component/req-policy.tpl',
      1 => 1667897801,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_636a1b44614c20_63596155 (Smarty_Internal_Template $_smarty_tpl) {
?><section class="site-container sitekey" data-page="req" data-id="<?php echo $_smarty_tpl->tpl_vars['sitekey']->value;?>
">
    <div class="default-header">
        <div class="top-graphic mb-4">
            <figure class="cover">
                <img class="figure-img img-fluid" src="<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/assets/img/background/mock-top-grapphic-2.png"
                    alt="">
            </figure>
            <div class="container">
                <div class="wrapper">
                    <div class="title typo-lg"><?php echo $_smarty_tpl->tpl_vars['settingModulus']->value['title'];?>
</div>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?php echo $_smarty_tpl->tpl_vars['ul']->value;?>
/home"><?php echo $_smarty_tpl->tpl_vars['lang']->value['menu']['home'];?>
</a></li>
                        <li class="breadcrumb-item active" aria-current="page"><a
                                href="<?php echo $_smarty_tpl->tpl_vars['ul']->value;?>
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
                <div class="title"><?php echo $_smarty_tpl->tpl_vars['lang']->value["policy"]["request"];?>
</div>
                <form data-toggle="validator" name="reqForm" id="reqForm" role="form" class="form-default"
                    method="post">
                    <div class="row">
                        <div class="col-sm">
                            <div class="form-group has-feedback">
                                <label class="control-label"
                                    for="complaintSystemF-name"><?php echo $_smarty_tpl->tpl_vars['lang']->value['policy']['fname'];?>
</label>
                                <span>*</span>
                                <div class="block-control">
                                    <input type="text" class="form-control" name="inputfName" id="inputfName"
                                        placeholder="<?php echo $_smarty_tpl->tpl_vars['lang']->value['system']['fill'];?>
 <?php echo $_smarty_tpl->tpl_vars['lang']->value['policy']['fname'];?>
" data-error=""
                                        required>
                                    <span class="form-control-feedback" aria-hidden="true"></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm">
                            <div class="form-group has-feedback">
                                <label class="control-label"
                                    for="complaintSystemF-name"><?php echo $_smarty_tpl->tpl_vars['lang']->value['policy']['lname'];?>
</label>
                                <span>*</span>
                                <div class="block-control">
                                    <input type="text" class="form-control" name="inputlName" id="inputlName"
                                        placeholder="<?php echo $_smarty_tpl->tpl_vars['lang']->value['system']['fill'];?>
 <?php echo $_smarty_tpl->tpl_vars['lang']->value['policy']['lname'];?>
" data-error=""
                                        required>
                                    <span class="form-control-feedback" aria-hidden="true"></span>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-sm">
                            <div class="form-group has-feedback">
                                <label class="control-label"
                                    for="complaintSystemE-mail"><?php echo $_smarty_tpl->tpl_vars['lang']->value['policy']['email'];?>
</label>
                                <span>*</span>
                                <div class="block-control">
                                    <input type="email" class="form-control" name="inputEmail" id="inputEmail"
                                        placeholder="<?php echo $_smarty_tpl->tpl_vars['lang']->value['system']['fill'];
echo $_smarty_tpl->tpl_vars['lang']->value['policy']['email'];?>
" data-error=""
                                        required>
                                    <span class="form-control-feedback" aria-hidden="true"></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm">
                            <div class="form-group has-feedback">
                                <label class="control-label"
                                    for="complaintSystemTelephone"><?php echo $_smarty_tpl->tpl_vars['lang']->value['policy']['tel'];?>
</label>
                                    <span>*</span>
                                <div class="block-control">
                                    <input type="tel" class="form-control" name="inputTel" id="inputTel"
                                        placeholder="<?php echo $_smarty_tpl->tpl_vars['lang']->value['system']['fill'];
echo $_smarty_tpl->tpl_vars['lang']->value['policy']['tel'];?>
" data-error=""
                                        required>
                                    <span class="form-control-feedback" aria-hidden="true"></span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row" style="margin: 2rem 0">
                        <div class="col-sm" style="padding: 0;">
                            <div class="form-group has-feedback" style="background-color: #eeeeee;padding: 30px 25px;">
                                <label style="font-size: 16px; font-color:#707070;line-height: 1.5em;"
                                    for="complaintSystemE-mail"><?php echo $_smarty_tpl->tpl_vars['lang']->value['policy']['tx1'];?>


                                    </br></br></br>
                                    <?php echo $_smarty_tpl->tpl_vars['lang']->value['policy']['tx2'];?>
</label>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm">
                            <div class="form-group has-feedback">
                                <div class="form-check d-flex align-items-center">
                                    <input class="form-check-input" type="checkbox" value="" name="checkacp" id="checkacp" data-error="" required>
                                    <label class="form-check-label" for="checkacp">
                                        <small><?php echo $_smarty_tpl->tpl_vars['lang']->value['policy']['acp'];?>
</small>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>

                                        <div class="row mt-sm-5 mt-4">
                        <div class="col text-center">
                            <input type="submit" class="btn btn-primary" id="submitForm" title="btn btn-primary"
                                value="<?php echo $_smarty_tpl->tpl_vars['lang']->value['policy']['btn-req'];?>
"></input>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section><?php }
}

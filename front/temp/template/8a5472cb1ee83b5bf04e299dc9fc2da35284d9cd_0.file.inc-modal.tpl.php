<?php
/* Smarty version 4.0.0, created on 2022-11-08 09:08:44
  from '/var/www/html/front/template/default/inc/inc-modal.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.0',
  'unifunc' => 'content_6369ba2c367f15_78584636',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8a5472cb1ee83b5bf04e299dc9fc2da35284d9cd' => 
    array (
      0 => '/var/www/html/front/template/default/inc/inc-modal.tpl',
      1 => 1667809499,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6369ba2c367f15_78584636 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- Modal -->
<div class="modal modal-profile fade" id="profileBlock" tabindex="-1" role="dialog" aria-labelledby="profileBlockTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <!-- <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
            </div> -->
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true" class="feather icon-x"></span>
            </button>
            <div class="modal-body">
                <div class="profile-block">
                    <div class="profile">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="profile-thumbnail">
                                    <figure class="cover">
                                        <img src="./front/template/default/assets/img/upload/profile-thumbnail.jpg" alt="profile thumbnail">
                                    </figure>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="profile-desc">
                                    <div class="profile-name">
                                        นางนันทวัลย์ ศกุนตนาค
                                    </div>

                                    <div class="profile-position">
                                        อดีตปลัดกระทรวงพาณิชย์
                                    </div>
                                    <div class="profile-timeline">
                                        (29 มิ.ย. 2564 - ปัจจุบัน)
                                    </div>
                                    <div class="profile-contact">
                                        <div class="email">
                                            <?php echo $_smarty_tpl->tpl_vars['lang']->value['contact']['email'];?>
: rphusit@git.or.th
                                        </div>
                                        <div class="telephone">
                                            <?php echo $_smarty_tpl->tpl_vars['lang']->value['contact']['tel'];?>
: 0-2634-4999 <?php echo $_smarty_tpl->tpl_vars['lang']->value['contact']['Ext'];?>
 633
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
            </div> -->
        </div>
    </div>
</div><?php }
}

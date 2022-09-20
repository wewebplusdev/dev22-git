<?php
/* Smarty version 4.0.0, created on 2022-09-20 16:59:15
  from '/var/www/html/front/template/default/inc/inc-modal.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.0',
  'unifunc' => 'content_63298ef375e461_50305222',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8a5472cb1ee83b5bf04e299dc9fc2da35284d9cd' => 
    array (
      0 => '/var/www/html/front/template/default/inc/inc-modal.tpl',
      1 => 1658892428,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63298ef375e461_50305222 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="modal modal-search fade" id="modal_search" tabindex="-1">
	<div class="modal-dialog modal-dialog-centered" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title"><?php echo $_smarty_tpl->tpl_vars['lang']->value["search:option"];?>
</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<form class="search-form" action="<?php echo $_smarty_tpl->tpl_vars['ul']->value;?>
/search" method="post">
					<div class="search-group">
						<input name="keywords" class="search-control" type="search"
							placeholder="<?php echo $_smarty_tpl->tpl_vars['lang']->value["search:keywords"];?>
...">
					</div>
					<div class="search-btn">
						<button type="button" class="btn -btn-md btn-secondary"
							data-dismiss="modal"><?php echo $_smarty_tpl->tpl_vars['lang']->value['system']['close'];?>
</button>
						<button type="submit" class="btn -btn-md btn-primary"><?php echo $_smarty_tpl->tpl_vars['lang']->value['system']['search'];?>
</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>

<div class="modal fade" id="modal_box" tabindex="-1">
	<div class="modal-dialog modal-dialog-centered" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title">Modal title</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				...
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
				<button type="button" class="btn btn-primary">Save changes</button>
			</div>
		</div>
	</div>
</div>



<!-- Sucsess -->
<div class="modal fade -sucsess" id="modal_success" tabindex="-1">
	<div class="modal-dialog modal-dialog-centered" role="document">
		<div class="modal-content">
			<button type="button" class="modal-close" data-dismiss="modal">
				<span class="feather icon-x"></span>
			</button>
			<div class="modal-sucsess">
				<div class="inner">
					<div class="icon">
						<img src="<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/assets/img/static/modal-success.svg" alt="" class="lazy">
					</div>
					<div class="h-title text-secondary .h-title"></div>
					<div class="desc .desc">
					</div>
					<div class="action">
						<button type="button" class="btn btn-secondary"
							data-dismiss="modal"><?php echo $_smarty_tpl->tpl_vars['lang']->value['system']['ok'];?>
</button>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- Failed -->
<div class="modal fade -sucsess" id="modal_failed" tabindex="-1">
	<div class="modal-dialog modal-dialog-centered" role="document">
		<div class="modal-content">
			<button type="button" class="modal-close" data-dismiss="modal">
				<span class="feather icon-x"></span>
			</button>
			<div class="modal-sucsess">
				<div class="inner">
					<div class="icon">
						<img src="<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/assets/img/static/modal-failed.svg" alt="" class="lazy">
					</div>
					<div class="h-title text-red .h-title"></div>
					<div class="desc .desc">
					</div>
					<div class="action">
						<button type="button" class="btn btn-bg-primary"
							data-dismiss="modal"><?php echo $_smarty_tpl->tpl_vars['lang']->value['system']['tryagain'];?>
</button>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<?php if ((($tmp = $_smarty_tpl->tpl_vars['callPopup']->value->fields ?? null)===null||$tmp==='' ? null ?? null : $tmp)) {?>
	<!-- Popup -->
	<div class="modal fade -warning show" id="modal_warning" tabindex="-1">
		<div class="modal-dialog modal-dialog-centered" role="document">
			<div class="modal-content">
				<button type="button" class="modal-close" data-dismiss="modal">
					<span class="feather icon-x"></span>
				</button>
				<div class="modal-warning">
											<div class="item">
							<div class="inner">
								<div class="image">
									<img src="<?php ob_start();
echo $_smarty_tpl->tpl_vars['callPopup']->value->fields['masterkey'];
$_prefixVariable20 = ob_get_clean();
echo fileinclude($_smarty_tpl->tpl_vars['callPopup']->value->fields['file'],"real",$_prefixVariable20,"link");?>
"
										alt="<?php echo $_smarty_tpl->tpl_vars['callPopup']->value->fields['file'];?>
" class="lazy">
								</div>
								<figcaption>
									<span class="desc font-body"><?php echo $_smarty_tpl->tpl_vars['callPopup']->value->fields['title'];?>
</span>
									<?php if ($_smarty_tpl->tpl_vars['callPopup']->value->fields['url'] != '' && $_smarty_tpl->tpl_vars['callPopup']->value->fields['url'] != "#") {?>
										<a href="<?php echo $_smarty_tpl->tpl_vars['callPopup']->value->fields['url'];?>
" class="link" <?php if ($_smarty_tpl->tpl_vars['callPopup']->value->fields['target'] == 2) {?>target="_blank"<?php }?>>
											<span class="font-body">คลิก</span>
										</a>
									<?php }?>
								</figcaption>
							</div>
						</div>
									</div>
			</div>
		</div>
	</div>
<?php }
}
}

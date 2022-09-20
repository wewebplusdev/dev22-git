<?php
/* Smarty version 4.0.0, created on 2022-09-20 16:59:14
  from '/var/www/html/front/template/default/inc/inc-header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.0',
  'unifunc' => 'content_63298ef2a07d58_83370626',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd20ba62163c3dd083d1fb945d3678f026da9b553' => 
    array (
      0 => '/var/www/html/front/template/default/inc/inc-header.tpl',
      1 => 1659429964,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63298ef2a07d58_83370626 (Smarty_Internal_Template $_smarty_tpl) {
?><header class="site-header">

	<div class="header">
		<div class="menu-mobile-btn">
			<a href="javascript:void(0);" class="btn-mobile" data-toggle="menu-mobile">
				<span class="bar active"></span>
				<span class="bar active"></span>
				<span class="bar active"></span>
				<span class="bar active"></span>
			</a>
		</div>
		<div class="row row-0 height">
			<div class="col-auto">
				<div class="logo">
					<a href="<?php echo $_smarty_tpl->tpl_vars['ul']->value;?>
/home" class="link">
						<img src="<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/assets/img/static/brand.png" alt="SG Capital" class="lazy">
					</a>
				</div>
			</div>
			<div class="col">
				<nav class="menu">
					<ul class="nav-list">
						<li class="nav-home">
							<a href="<?php echo $_smarty_tpl->tpl_vars['ul']->value;?>
/home" class="link"><?php echo $_smarty_tpl->tpl_vars['lang']->value['menu']['home'];?>
</a>
						</li>
						<li class="nav-product dropdown">
							<a href="javascript:void(0)" class="link dropdown-toggle" data-toggle="dropdown">
								<?php echo $_smarty_tpl->tpl_vars['lang']->value['menu']['product'];?>

								<span class="icon"></span>
							</a>
							<ul class="item-list dropdown-menu">
								<li <?php if ($_smarty_tpl->tpl_vars['activeMenu']->value == "product-all") {?>class="active"<?php }?>><a href="<?php echo $_smarty_tpl->tpl_vars['ul']->value;?>
/product/all" class="link"><?php echo $_smarty_tpl->tpl_vars['lang']->value['menu']['product'];?>
</a></li>
								<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['MenuProduct']->value, 'valueMenuProduct', false, 'keyMenuProduct');
$_smarty_tpl->tpl_vars['valueMenuProduct']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['keyMenuProduct']->value => $_smarty_tpl->tpl_vars['valueMenuProduct']->value) {
$_smarty_tpl->tpl_vars['valueMenuProduct']->do_else = false;
?>
									<?php if ($_smarty_tpl->tpl_vars['valueMenuProduct']->value['type'] == 2) {?>
										<li <?php if ($_smarty_tpl->tpl_vars['activeMenu']->value == "product-".((string)$_smarty_tpl->tpl_vars['valueMenuProduct']->value['id'])) {?>class="active"<?php }?>><a href="<?php echo $_smarty_tpl->tpl_vars['ul']->value;?>
/product/detail/G<?php echo $_smarty_tpl->tpl_vars['valueMenuProduct']->value['id'];?>
" class="link"><?php echo $_smarty_tpl->tpl_vars['valueMenuProduct']->value['subject'];?>
</a></li>
									<?php } else { ?>
										<li <?php if ($_smarty_tpl->tpl_vars['activeMenu']->value == "product-".((string)$_smarty_tpl->tpl_vars['valueMenuProduct']->value['id'])) {?>class="active"<?php }?>><a href="<?php echo $_smarty_tpl->tpl_vars['ul']->value;?>
/product/list/<?php echo $_smarty_tpl->tpl_vars['valueMenuProduct']->value['id'];?>
" class="link"><?php echo $_smarty_tpl->tpl_vars['valueMenuProduct']->value['subject'];?>
</a></li>
									<?php }?>
								<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
							</ul>
						</li>

						<li class="nav-about dropdown">
							<a href="javascript:void(0)" class="link dropdown-toggle" data-toggle="dropdown">
								<?php echo $_smarty_tpl->tpl_vars['lang']->value['menu']['about'];?>

								<span class="icon"></span>
							</a>
								<ul class="item-list dropdown-menu about" data-masterkey="<?php echo $_smarty_tpl->tpl_vars['segment_1']->value;?>
">
									<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['menu_masterkey_ab']->value, 'valuemenu_masterkey_ab', false, 'keymenu_masterkey_ab');
$_smarty_tpl->tpl_vars['valuemenu_masterkey_ab']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['keymenu_masterkey_ab']->value => $_smarty_tpl->tpl_vars['valuemenu_masterkey_ab']->value) {
$_smarty_tpl->tpl_vars['valuemenu_masterkey_ab']->do_else = false;
?>
										<?php if ($_smarty_tpl->tpl_vars['langon']->value == "th") {?>
											<li class="<?php if ($_smarty_tpl->tpl_vars['segment_1']->value == $_smarty_tpl->tpl_vars['keymenu_masterkey_ab']->value) {?>active<?php }?>"><a href="<?php echo $_smarty_tpl->tpl_vars['ul']->value;?>
/about/<?php echo $_smarty_tpl->tpl_vars['keymenu_masterkey_ab']->value;?>
" class="link"><?php echo $_smarty_tpl->tpl_vars['valuemenu_masterkey_ab']->value['subject'];?>
</a></li>
										<?php } else { ?>
											<li class="<?php if ($_smarty_tpl->tpl_vars['segment_1']->value == $_smarty_tpl->tpl_vars['keymenu_masterkey_ab']->value) {?>active<?php }?>"><a href="<?php echo $_smarty_tpl->tpl_vars['ul']->value;?>
/about/<?php echo $_smarty_tpl->tpl_vars['keymenu_masterkey_ab']->value;?>
" class="link"><?php echo $_smarty_tpl->tpl_vars['valuemenu_masterkey_ab']->value['subjecten'];?>
</a></li>
										<?php }?>
									<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
								</ul>
						</li>
						<li class="nav-investor dropdown">
														<a href="javascript:void(0)" class="link dropdown-toggle" data-toggle="dropdown">
								<?php echo $_smarty_tpl->tpl_vars['lang']->value['menu']['investor'];?>

								<span class="icon"></span>
							</a>
							<ul class="item-list dropdown-menu investor" data-masterkey="<?php echo $_smarty_tpl->tpl_vars['segment_1']->value;?>
">
								<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['menu_masterkey_ir']->value, 'valuemenu_masterkey_ir', false, 'keymenu_masterkey_ir');
$_smarty_tpl->tpl_vars['valuemenu_masterkey_ir']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['keymenu_masterkey_ir']->value => $_smarty_tpl->tpl_vars['valuemenu_masterkey_ir']->value) {
$_smarty_tpl->tpl_vars['valuemenu_masterkey_ir']->do_else = false;
?>
									<?php if ($_smarty_tpl->tpl_vars['langon']->value == "th") {?>
										<li class="<?php if ($_smarty_tpl->tpl_vars['segment_1']->value == $_smarty_tpl->tpl_vars['keymenu_masterkey_ir']->value && $_smarty_tpl->tpl_vars['segment']->value == 'investor') {?>active<?php }?>"><a href="<?php echo $_smarty_tpl->tpl_vars['ul']->value;?>
/investor/<?php echo $_smarty_tpl->tpl_vars['keymenu_masterkey_ir']->value;?>
" class="link"><?php echo $_smarty_tpl->tpl_vars['valuemenu_masterkey_ir']->value['subject'];?>
</a></li>
									<?php } else { ?>
										<li class="<?php if ($_smarty_tpl->tpl_vars['segment_1']->value == $_smarty_tpl->tpl_vars['keymenu_masterkey_ir']->value && $_smarty_tpl->tpl_vars['segment']->value == 'investor') {?>active<?php }?>"><a href="<?php echo $_smarty_tpl->tpl_vars['ul']->value;?>
/investor/<?php echo $_smarty_tpl->tpl_vars['keymenu_masterkey_ir']->value;?>
" class="link"><?php echo $_smarty_tpl->tpl_vars['valuemenu_masterkey_ir']->value['subjecten'];?>
</a></li>
									<?php }?>
								<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
							</ul>
						</li>
						<li class="nav-news">
							<a href="<?php echo $_smarty_tpl->tpl_vars['ul']->value;?>
/news" class="link"><?php echo $_smarty_tpl->tpl_vars['lang']->value['menu']['news'];?>
</a>
						</li>
						<li class="nav-career">
							<a href="<?php echo $_smarty_tpl->tpl_vars['ul']->value;?>
/career" class="link"><?php echo $_smarty_tpl->tpl_vars['lang']->value['menu']['career'];?>
</a>
						</li>
						<li class="nav-contact">
							<a href="<?php echo $_smarty_tpl->tpl_vars['ul']->value;?>
/contact" class="link"><?php echo $_smarty_tpl->tpl_vars['lang']->value['menu']['contact'];?>
</a>
						</li>
					</ul>
					<div class="header-contact visible-sm">
						<ul class="item-list">
							<li>
								<a href="<?php echo $_smarty_tpl->tpl_vars['ul']->value;?>
/product/apply" class="link">
									<div class="wrapper">
										<div class="icon">
											<img src="<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/assets/img/icon/header-contact-icon1.svg" alt="<?php echo $_smarty_tpl->tpl_vars['lang']->value['home']['loan'];?>
" class="lazy">
										</div>
										<div class="txt"><?php echo $_smarty_tpl->tpl_vars['lang']->value['home']['loan'];?>
</div>
									</div>
								</a>
							</li>
							<?php if ($_smarty_tpl->tpl_vars['settingWeb']->value['social']['Line']['link'] != "#" && $_smarty_tpl->tpl_vars['settingWeb']->value['social']['Line']['link'] != '') {?>
								<li>
									<a href="<?php echo $_smarty_tpl->tpl_vars['settingWeb']->value['social']['Line']['link'];?>
" class="link" target="_blank">
										<div class="wrapper">
											<div class="icon">
												<img src="<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/assets/img/icon/header-contact-icon2.svg" alt="@SingerConnect" class="lazy">
											</div>
											<div class="txt">@SingerConnect</div>
										</div>
									</a>
								</li>
							<?php }?>
							<li>
								<a href="<?php echo $_smarty_tpl->tpl_vars['ul']->value;?>
contact" class="link">
									<div class="wrapper">
										<div class="icon">
											<img src="<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/assets/img/icon/header-contact-icon3.svg" alt="<?php echo $_smarty_tpl->tpl_vars['lang']->value['menu']['contact'];?>
" class="lazy">
										</div>
										<div class="txt"><?php echo $_smarty_tpl->tpl_vars['lang']->value['menu']['contact'];?>
</div>
									</div>
								</a>
							</li>
						</ul>
					</div>
				</nav>
			</div>
			<div class="col-auto">
				<div class="search-box">
					<a href="javascript:void(0)" class="link -text-md" data-toggle="modal" data-target="#modal_search">
						<span class="feather icon-search"></span>
					</a>
				</div>
			</div>
			<div class="col-auto">
				<div class="language-box">
					<ul class="item-list">
						<li <?php if ($_smarty_tpl->tpl_vars['langon']->value == 'en') {?>class="active"<?php }?>>
							<a href="<?php echo $_smarty_tpl->tpl_vars['ul']->value;?>
/lang/en" class="link -text-md">EN</a>
						</li>
						<li <?php if ($_smarty_tpl->tpl_vars['langon']->value == 'th') {?>class="active"<?php }?>>
							<a href="<?php echo $_smarty_tpl->tpl_vars['ul']->value;?>
/lang/th" class="link -text-md">TH</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>

	<div class="overlay" data-toggle="menu-overlay"></div>

</header>

<div class="header-social langon" data-id="<?php echo $_smarty_tpl->tpl_vars['langon']->value;?>
">
	<ul class="item-list">
		<?php if ($_smarty_tpl->tpl_vars['settingWeb']->value['social']['Facebook']['link'] != "#" && $_smarty_tpl->tpl_vars['settingWeb']->value['social']['Facebook']['link'] != '') {?>
			<li>
				<a href="<?php echo $_smarty_tpl->tpl_vars['settingWeb']->value['social']['Facebook']['link'];?>
" class="link" target="_blank">
					<span class="fa fa-facebook"></span>
				</a>
			</li>
		<?php }?>
		<?php if ($_smarty_tpl->tpl_vars['settingWeb']->value['social']['Twitter']['link'] != "#" && $_smarty_tpl->tpl_vars['settingWeb']->value['social']['Twitter']['link'] != '') {?>
			<li>
				<a href="<?php echo $_smarty_tpl->tpl_vars['settingWeb']->value['social']['Twitter']['link'];?>
" class="link" target="_blank">
					<span class="fa fa-twitter"></span>
				</a>
			</li>
		<?php }?>
		<?php if ($_smarty_tpl->tpl_vars['settingWeb']->value['social']['Instagram']['link'] != "#" && $_smarty_tpl->tpl_vars['settingWeb']->value['social']['Instagram']['link'] != '') {?>
			<li>
				<a href="<?php echo $_smarty_tpl->tpl_vars['settingWeb']->value['social']['Instagram']['link'];?>
" class="link" target="_blank">
					<span class="fa fa-instagram"></span>
				</a>
			</li>
		<?php }?>
		<?php if ($_smarty_tpl->tpl_vars['settingWeb']->value['social']['Youtube']['link'] != "#" && $_smarty_tpl->tpl_vars['settingWeb']->value['social']['Youtube']['link'] != '') {?>
			<li>
				<a href="<?php echo $_smarty_tpl->tpl_vars['settingWeb']->value['social']['Youtube']['link'];?>
" class="link" target="_blank">
					<span class="fa fa-youtube"></span>
				</a>
			</li>
		<?php }?>
	</ul>
</div>
<div class="header-contact">
	<ul class="item-list">
		<li>
			<a href="<?php echo $_smarty_tpl->tpl_vars['ul']->value;?>
/product/apply" class="link">
				<div class="wrapper">
					<div class="icon">
						<img src="<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/assets/img/icon/header-contact-icon1.svg" alt="<?php echo $_smarty_tpl->tpl_vars['lang']->value['home']['loan'];?>
" class="lazy">
					</div>
					<div class="txt"><?php echo $_smarty_tpl->tpl_vars['lang']->value['home']['loan'];?>
</div>
				</div>
			</a>
		</li>
		<?php if ($_smarty_tpl->tpl_vars['settingWeb']->value['social']['Line']['link'] != "#" && $_smarty_tpl->tpl_vars['settingWeb']->value['social']['Line']['link'] != '' && $_smarty_tpl->tpl_vars['singerconect']->value == 2) {?>
			<li>
				<a href="<?php echo $_smarty_tpl->tpl_vars['settingWeb']->value['social']['Line']['link'];?>
" class="link" target="_blank">
					<div class="wrapper">
						<div class="icon">
							<img src="<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/assets/img/icon/header-contact-icon2.svg" alt="@SingerConnect" class="lazy">
						</div>
						<div class="txt">@SingerConnect</div>
					</div>
				</a>
			</li>
		<?php }?>
		<li>
			<a href="<?php echo $_smarty_tpl->tpl_vars['ul']->value;?>
/contact" class="link">
				<div class="wrapper">
					<div class="icon">
						<img src="<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/assets/img/icon/header-contact-icon3.svg" alt="<?php echo $_smarty_tpl->tpl_vars['lang']->value['home']['contact'];?>
" class="lazy">
					</div>
					<div class="txt"><?php echo $_smarty_tpl->tpl_vars['lang']->value['home']['contact'];?>
</div>
				</div>
			</a>
		</li>
	</ul>
</div><?php }
}

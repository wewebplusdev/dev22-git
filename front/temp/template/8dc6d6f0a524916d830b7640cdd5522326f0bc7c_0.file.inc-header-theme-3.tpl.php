<?php
/* Smarty version 4.0.0, created on 2022-11-09 07:05:00
  from '/var/www/html/front/template/default/inc/inc-header-theme-3.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.0',
  'unifunc' => 'content_636aeeac7943f7_28725185',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8dc6d6f0a524916d830b7640cdd5522326f0bc7c' => 
    array (
      0 => '/var/www/html/front/template/default/inc/inc-header-theme-3.tpl',
      1 => 1667952277,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_636aeeac7943f7_28725185 (Smarty_Internal_Template $_smarty_tpl) {
?><header class="site-header">
	<div class="site-header-topbar mobile">
		<div class="container">
			<div class="row align-items-end no-gutters">
				<div class="col-auto">
					<div class="text-color">
						<div class="txt">
							<?php echo $_smarty_tpl->tpl_vars['lang']->value['home']['changedisplay'];?>

						</div>
						<ul class="item-list">
							<li class="active">
								<a href="javascript:void(0)" class="theme theme-style-1" title="default theme">C</a>
							</li>
							<li>
								<a href="javascript:void(0)" class="theme theme-style-2" title="black and white theme">C</a>
							</li>
							<li>
								<a href="javascript:void(0)" class="theme theme-style-3" title="black and yellow theme">C</a>
							</li>
						</ul>
					</div>
				</div>
				<div class="col-auto">
					<div class="text-size">
						<div class="txt">
							<?php echo $_smarty_tpl->tpl_vars['lang']->value['home']['fontsize'];?>

						</div>
						<ul class="item-list">
							<li class="active">
								<a href="javascript:void(0)" class="size size-small typo-s" title="size small"><?php echo $_smarty_tpl->tpl_vars['settingWeb']->value['font'][$_smarty_tpl->tpl_vars['langon']->value];?>
</a>
							</li>
							<li>
								<a href="javascript:void(0)" class="size size-medium typo-md" title="size medium"><?php echo $_smarty_tpl->tpl_vars['settingWeb']->value['font'][$_smarty_tpl->tpl_vars['langon']->value];?>
</a>
							</li>
							<li>
								<a href="javascript:void(0)" class="size size-large typo-lg" title="size large"><?php echo $_smarty_tpl->tpl_vars['settingWeb']->value['font'][$_smarty_tpl->tpl_vars['langon']->value];?>
</a>
							</li>
						</ul>
					</div>
				</div>
				<div class="col">
					<div class="text-language" style="float: right;">
						<ul class="item-list">
							<li class="<?php if ($_smarty_tpl->tpl_vars['langon']->value == 'en') {?>active<?php }?>">
								<a href="<?php echo $_smarty_tpl->tpl_vars['ul']->value;?>
/lang/en" class="link lg" title="English language">
									<div class="icon">
										<img src="<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/assets/img/icon/gb.svg" alt="Flag of the United Kingdom">
									</div>
								</a>
							</li>
							<li class="<?php if ($_smarty_tpl->tpl_vars['langon']->value == 'th') {?>active<?php }?>">
								<a href="<?php echo $_smarty_tpl->tpl_vars['ul']->value;?>
/lang/th" class="link lg" title="Thai language">
									<div class="icon">
										<img src="<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/assets/img/icon/th.svg" alt="Flag of the Thailand">
									</div>
								</a>
							</li>
							<li class="<?php if ($_smarty_tpl->tpl_vars['langon']->value == 'cn') {?>active<?php }?>">
								<a href="<?php echo $_smarty_tpl->tpl_vars['ul']->value;?>
/lang/cn" class="link lg" title="Chinese language">
									<div class="icon">
										<img src="<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/assets/img/icon/cn.svg" alt="Flag of China">
									</div>
								</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="row align-items-center no-gutters">
			<div class="col-auto">
				<div class="brand">
					<a href="<?php echo $_smarty_tpl->tpl_vars['ul']->value;?>
/home" class="link" title="Gem and Jewelry Institute of Thailand">
						<img src="<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/assets/img/static/git-logo.png" alt="Gem and Jewelry Institute of Thailand Logo">
					</a>
				</div>
			</div>
			<div class="col">
				<div class="site-header-topbar">
					<div class="row justify-content-md-end align-items-end no-gutters">
						<div class="col-auto">
							<div class="text-color">
								<div class="txt">
									<?php echo $_smarty_tpl->tpl_vars['lang']->value['home']['changedisplay'];?>

								</div>
								<ul class="item-list">
									<li class="active">
										<a href="javascript:void(0)" class="theme theme-style-1" title="default theme">C</a>
									</li>
									<li>
										<a href="javascript:void(0)" class="theme theme-style-2" title="black and white theme">C</a>
									</li>
									<li>
										<a href="javascript:void(0)" class="theme theme-style-3" title="black and yellow theme">C</a>
									</li>
								</ul>
							</div>
						</div>
						<div class="col-auto">
							<div class="text-size">
								<div class="txt">
									<?php echo $_smarty_tpl->tpl_vars['lang']->value['home']['fontsize'];?>

								</div>
								<ul class="item-list">
									<li class="active">
										<a href="javascript:void(0)" class="size size-small typo-s" title="size small"><?php echo $_smarty_tpl->tpl_vars['settingWeb']->value['font'][$_smarty_tpl->tpl_vars['langon']->value];?>
</a>
									</li>
									<li>
										<a href="javascript:void(0)" class="size size-medium typo-md" title="size medium"><?php echo $_smarty_tpl->tpl_vars['settingWeb']->value['font'][$_smarty_tpl->tpl_vars['langon']->value];?>
</a>
									</li>
									<li>
										<a href="javascript:void(0)" class="size size-large typo-lg" title="size large"><?php echo $_smarty_tpl->tpl_vars['settingWeb']->value['font'][$_smarty_tpl->tpl_vars['langon']->value];?>
</a>
									</li>
								</ul>
							</div>
						</div>
						<div class="col-auto">
							<div class="text-language">
								<ul class="item-list">
									<li class="<?php if ($_smarty_tpl->tpl_vars['langon']->value == 'en') {?>active<?php }?>">
										<a href="<?php echo $_smarty_tpl->tpl_vars['ul']->value;?>
/lang/en" class="link lg" title="English language">
											<div class="icon">
												<img src="<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/assets/img/icon/gb.svg" alt="Flag of the United Kingdom">
											</div>
										</a>
									</li>
									<li class="<?php if ($_smarty_tpl->tpl_vars['langon']->value == 'th') {?>active<?php }?>">
										<a href="<?php echo $_smarty_tpl->tpl_vars['ul']->value;?>
/lang/th" class="link lg" title="Thai language">
											<div class="icon">
												<img src="<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/assets/img/icon/th.svg" alt="Flag of the Thailand">
											</div>
										</a>
									</li>
									<li class="<?php if ($_smarty_tpl->tpl_vars['langon']->value == 'cn') {?>active<?php }?>">
										<a href="<?php echo $_smarty_tpl->tpl_vars['ul']->value;?>
/lang/cn" class="link lg" title="Chinese language">
											<div class="icon">
												<img src="<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/assets/img/icon/cn.svg" alt="Flag of China">
											</div>
										</a>
									</li>
								</ul>
							</div>
						</div>
						<div class="col-auto">
							<div class="search">
								<a href="javascript:void(0)" class="search-toggle" title="search">
									<span class="feather icon-search"></span>
								</a>
                        <form action="<?php echo $_smarty_tpl->tpl_vars['ul']->value;?>
/search" method="get" class="form">
									<div class="input-group">
										<div class="form-outline">
											<input type="search" id="keywords" name="srchtxt_main" value="<?php echo $_smarty_tpl->tpl_vars['srchtxt_main']->value;?>
" class="form-control" placeholder="<?php echo $_smarty_tpl->tpl_vars['lang']->value['system']['search'];?>
..." />
											<label class="visuallyhidden" for="keywords"><?php echo $_smarty_tpl->tpl_vars['lang']->value['system']['search'];?>
</label>
										</div>
                              <button type="submit" class="btn btn-search">
											<span class="feather icon-search"></span>
										</button>
										<button type="button" class="btn close">
											<span class="feather icon-x"></span>
										</button>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
				<div class="site-header-main">
					<div class="row no-gutters justify-content-end align-items-center">
						<div class="col-auto">
							<div class="main-menu-list">
								<ul class="nav-list level-I">
									<li <?php if (strtolower($_smarty_tpl->tpl_vars['segment']->value) == "home") {?>class="active"<?php }?>>
										<a href="<?php echo $_smarty_tpl->tpl_vars['ul']->value;?>
/home" class="link" title="<?php echo $_smarty_tpl->tpl_vars['lang']->value['menu']['home'];?>
">
											<?php echo $_smarty_tpl->tpl_vars['lang']->value['menu']['home'];?>

										</a>
									</li>
									<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['arrSitemap']->value, 'valuearrSitemap', false, 'keyarrSitemap');
$_smarty_tpl->tpl_vars['valuearrSitemap']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['keyarrSitemap']->value => $_smarty_tpl->tpl_vars['valuearrSitemap']->value) {
$_smarty_tpl->tpl_vars['valuearrSitemap']->do_else = false;
?>
										<?php $_smarty_tpl->_assignInScope('menuSegment', url_segment_menu($_smarty_tpl->tpl_vars['valuearrSitemap']->value['group']['url']));?>
										<?php if (count($_smarty_tpl->tpl_vars['valuearrSitemap']->value['list']) > 0) {?>
											<li class="<?php if ($_smarty_tpl->tpl_vars['keyarrSitemap']->value == 0) {?>dropright<?php }?> <?php if ($_smarty_tpl->tpl_vars['keyarrSitemap']->value == count($_smarty_tpl->tpl_vars['arrSitemap']->value)) {?>dropleft<?php }?> <?php if ($_smarty_tpl->tpl_vars['segment']->value == $_smarty_tpl->tpl_vars['menuSegment']->value[0]) {?>active<?php }?>">
												<a href="javascript:void(0)" class="link link-submenu" data-link="<?php echo $_smarty_tpl->tpl_vars['keyarrSitemap']->value;?>
-menu" title="<?php echo $_smarty_tpl->tpl_vars['valuearrSitemap']->value['group']['subject'];?>
" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
													<?php echo $_smarty_tpl->tpl_vars['valuearrSitemap']->value['group']['subject'];?>

												</a>
										</li>
										<?php } else { ?>
											<li class="<?php if ($_smarty_tpl->tpl_vars['segment']->value == $_smarty_tpl->tpl_vars['menuSegment']->value[0]) {?>active<?php }?>">
												<a <?php if ($_smarty_tpl->tpl_vars['valuearrSitemap']->value['group']['url'] != '' && $_smarty_tpl->tpl_vars['valuearrSitemap']->value['group']['url'] != "#") {?>href="<?php echo $_smarty_tpl->tpl_vars['valuearrSitemap']->value['group']['url'];?>
"<?php if ($_smarty_tpl->tpl_vars['valuearrSitemap']->value['group']['target'] == 2) {?>target="_blank"<?php }
} else { ?>href="javascript:void(0);"<?php }?> class="link" title="<?php echo $_smarty_tpl->tpl_vars['valuearrSitemap']->value['group']['subject'];?>
">
													<?php echo $_smarty_tpl->tpl_vars['valuearrSitemap']->value['group']['subject'];?>

												</a>
											</li>
										<?php }?>
									<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
								</ul>
							</div>
						</div>

						<div class="col-auto">
							<div class="menu">
								<a href="javascript:void(0)" class="menu-toggle" title="menu">
									<!-- <span class="feather icon-menu"></span> -->
									<div>
										<span class="bar"></span>
										<span class="bar"></span>
										<span class="bar"></span>
										<span class="bar"></span>
									</div>
								</a>
							</div>

						</div>
					</div>
					<!-- site-header-main -->
				</div>
			</div>
		</div>

	</div>
</header>

<div class="menu-full">
	<div class="main-menu">
		<ul class="nav-list level-I">
			<li>
				<a href="<?php echo $_smarty_tpl->tpl_vars['ul']->value;?>
/home" class="link" <?php if (strtolower($_smarty_tpl->tpl_vars['segment']->value) == "home") {?>class="active"<?php }?> title="<?php echo $_smarty_tpl->tpl_vars['lang']->value['menu']['home'];?>
">
					<?php echo $_smarty_tpl->tpl_vars['lang']->value['menu']['home'];?>

				</a>
			</li>
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['arrSitemap']->value, 'valuearrSitemap', false, 'keyarrSitemap');
$_smarty_tpl->tpl_vars['valuearrSitemap']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['keyarrSitemap']->value => $_smarty_tpl->tpl_vars['valuearrSitemap']->value) {
$_smarty_tpl->tpl_vars['valuearrSitemap']->do_else = false;
?>
				<?php $_smarty_tpl->_assignInScope('menuSegment', url_segment_menu($_smarty_tpl->tpl_vars['valuearrSitemap']->value['group']['url']));?>
				<li class="<?php echo $_smarty_tpl->tpl_vars['keyarrSitemap']->value;?>
-menu dropright">
					<?php if (count($_smarty_tpl->tpl_vars['valuearrSitemap']->value['list']) > 0) {?>
					<a href="javascript:void(0)" class="link submenu <?php if ($_smarty_tpl->tpl_vars['segment']->value == $_smarty_tpl->tpl_vars['menuSegment']->value[0]) {?>active<?php }?>" title="<?php echo $_smarty_tpl->tpl_vars['valuearrSitemap']->value['group']['subject'];?>
" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						<?php echo $_smarty_tpl->tpl_vars['valuearrSitemap']->value['group']['subject'];?>

					</a>
					<?php } else { ?>
					<a <?php if ($_smarty_tpl->tpl_vars['valuearrSitemap']->value['group']['url'] != '' && $_smarty_tpl->tpl_vars['valuearrSitemap']->value['group']['url'] != "#") {?>href="<?php echo $_smarty_tpl->tpl_vars['valuearrSitemap']->value['group']['url'];?>
"<?php if ($_smarty_tpl->tpl_vars['valuearrSitemap']->value['group']['target'] == 2) {?>target="_blank"<?php }
} else { ?>href="javascript:void(0);"<?php }?> class="link submenu <?php if ($_smarty_tpl->tpl_vars['segment']->value == $_smarty_tpl->tpl_vars['menuSegment']->value[0]) {?>active<?php }?>" title="<?php echo $_smarty_tpl->tpl_vars['valuearrSitemap']->value['group']['subject'];?>
">
						<?php echo $_smarty_tpl->tpl_vars['valuearrSitemap']->value['group']['subject'];?>

					</a>
					<?php }?>
					<ul class="dropdown-menu level-II">
						<li class="active mb-3 d-sm-none d-block">
							<a href="javascript:void(0)" class="link text-light typo-lg fw-medium" title="<?php echo $_smarty_tpl->tpl_vars['valuearrSitemap']->value['group']['subject'];?>
">
								<span class="feather icon-chevron-left"></span>
								<?php echo $_smarty_tpl->tpl_vars['valuearrSitemap']->value['group']['subject'];?>

							</a>
						</li>
							<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['valuearrSitemap']->value['list'], 'valueSubmenu', false, 'keySubmenu');
$_smarty_tpl->tpl_vars['valueSubmenu']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['keySubmenu']->value => $_smarty_tpl->tpl_vars['valueSubmenu']->value) {
$_smarty_tpl->tpl_vars['valueSubmenu']->do_else = false;
?>
								<?php if (count($_smarty_tpl->tpl_vars['valueSubmenu']->value['menu']) > 0) {?>
									<li class="dropdown-item">
										<a <?php if ($_smarty_tpl->tpl_vars['valueSubmenu']->value['subgroup']['url'] != '' && $_smarty_tpl->tpl_vars['valueSubmenu']->value['subgroup']['url'] != "#") {?>href="<?php echo $_smarty_tpl->tpl_vars['valueSubmenu']->value['subgroup']['url'];?>
"<?php if ($_smarty_tpl->tpl_vars['valueSubmenu']->value['subgroup']['target'] == 2) {?>target="_blank"<?php }
} else { ?>href="javascript:void(0);"<?php }?> class="link text-light typo-sm" title="<?php echo $_smarty_tpl->tpl_vars['valueSubmenu']->value['subgroup']['subject'];?>
"><?php echo $_smarty_tpl->tpl_vars['valueSubmenu']->value['subgroup']['subject'];?>
</a>
										<ul class="item-list fluid bullet">
											<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['valueSubmenu']->value['menu'], 'valueMenuLv3', false, 'keyMenuLv3');
$_smarty_tpl->tpl_vars['valueMenuLv3']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['keyMenuLv3']->value => $_smarty_tpl->tpl_vars['valueMenuLv3']->value) {
$_smarty_tpl->tpl_vars['valueMenuLv3']->do_else = false;
?>
												<li>
													<a <?php if ($_smarty_tpl->tpl_vars['valueMenuLv3']->value['url'] != '' && $_smarty_tpl->tpl_vars['valueMenuLv3']->value['url'] != "#") {?>href="<?php echo $_smarty_tpl->tpl_vars['valueMenuLv3']->value['url'];?>
"<?php if ($_smarty_tpl->tpl_vars['valueMenuLv3']->value['target'] == 2) {?>target="_blank"<?php }
} else { ?>href="javascript:void(0);"<?php }?> class="link text-light typo-s" title="<?php echo $_smarty_tpl->tpl_vars['valueMenuLv3']->value['subject'];?>
"><?php echo $_smarty_tpl->tpl_vars['valueMenuLv3']->value['subject'];?>
</a>
												</li>
											<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
										</ul>
									</li>
								<?php } else { ?>
									<li class="dropdown-item">
										<a <?php if ($_smarty_tpl->tpl_vars['valueSubmenu']->value['subgroup']['url'] != '' && $_smarty_tpl->tpl_vars['valueSubmenu']->value['subgroup']['url'] != "#") {?>href="<?php echo $_smarty_tpl->tpl_vars['valueSubmenu']->value['subgroup']['url'];?>
"<?php if ($_smarty_tpl->tpl_vars['valueSubmenu']->value['subgroup']['target'] == 2) {?>target="_blank"<?php }
} else { ?>href="javascript:void(0);"<?php }?> class="link text-light typo-sm" title="<?php echo $_smarty_tpl->tpl_vars['valueSubmenu']->value['subgroup']['subject'];?>
"><?php echo $_smarty_tpl->tpl_vars['valueSubmenu']->value['subgroup']['subject'];?>
</a>
									</li>
								<?php }?>
							<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
					</ul>
				</li>
			<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		</ul>
	</div>
</div><?php }
}

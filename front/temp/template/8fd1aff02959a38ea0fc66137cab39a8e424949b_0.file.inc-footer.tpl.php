<?php
/* Smarty version 4.0.0, created on 2022-09-20 16:59:15
  from '/var/www/html/front/template/default/inc/inc-footer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.0',
  'unifunc' => 'content_63298ef339e0c0_39842299',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8fd1aff02959a38ea0fc66137cab39a8e424949b' => 
    array (
      0 => '/var/www/html/front/template/default/inc/inc-footer.tpl',
      1 => 1658892428,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63298ef339e0c0_39842299 (Smarty_Internal_Template $_smarty_tpl) {
?><footer class="site-footer">

	<div class="Totop">
		<a href="javascript:void(0);" class="link">
			<span class="feather icon-arrow-up"></span>
		</a>
	</div>

	<div class="footer-contact">
		<div class="container">
			<div class="contact-box">
				<div class="row">
					<div class="col">
						<div class="font-head"><?php echo $_smarty_tpl->tpl_vars['lang']->value['menu']['contact'];?>
</div>
						<div class="font-body">
							<?php if ($_smarty_tpl->tpl_vars['langon']->value == 'th') {?>
								<?php echo $_smarty_tpl->tpl_vars['lang']->value['seo']['title'];?>
 <br>
								<?php echo $_smarty_tpl->tpl_vars['lang']->value['system']['address'];?>
 : <?php echo str_replace('<br>','',$_smarty_tpl->tpl_vars['settingWeb']->value['contact']['address']);?>

							<?php } else { ?>
								<?php echo $_smarty_tpl->tpl_vars['lang']->value['seo']['title'];?>
 <br>
								<?php echo $_smarty_tpl->tpl_vars['lang']->value['system']['address'];?>
 : <?php echo str_replace('<br>','',$_smarty_tpl->tpl_vars['settingWeb']->value['contact']['addressen']);?>

							<?php }?>
						</div>
					</div>
					<div class="col-lg-3">
						<div class="font-head"><?php echo $_smarty_tpl->tpl_vars['lang']->value['system']['email'];?>
</div>
						<div class="font-body">
							<a href="mailto:<?php echo $_smarty_tpl->tpl_vars['settingWeb']->value['contact']['email'];?>
" class="link"><?php echo $_smarty_tpl->tpl_vars['settingWeb']->value['contact']['email'];?>
</a>
							<a href="mailto:<?php echo $_smarty_tpl->tpl_vars['settingWeb']->value['contact']['email2'];?>
" class="link"><?php echo $_smarty_tpl->tpl_vars['settingWeb']->value['contact']['email2'];?>
</a>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col">
						<div class="font-head"><?php echo $_smarty_tpl->tpl_vars['lang']->value['system']['txt:working'];?>
</div>
						<div class="font-body">
							• <?php echo $_smarty_tpl->tpl_vars['lang']->value['system']['txt:working'];?>
   |   <?php echo $_smarty_tpl->tpl_vars['lang']->value['system']['txt:days'];?>
 <?php echo $_smarty_tpl->tpl_vars['lang']->value['contact']['suffix:days'];?>

							<span class="visible-xs">
								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;      
							</span> 
							• <?php echo $_smarty_tpl->tpl_vars['lang']->value['system']['txt:vacation'];?>
   |   <?php echo $_smarty_tpl->tpl_vars['lang']->value['system']['txt:vacationholidays'];?>

						</div>
					</div>
					<?php if ($_smarty_tpl->tpl_vars['settingWeb']->value['contact']['hotline'] != '') {?>
						
					<?php }?>
					<div class="col-lg-3">
						<div class="font-head"><?php echo $_smarty_tpl->tpl_vars['lang']->value['system']['tel'];?>
</div>
						<div class="font-body">
							<a href="tel:<?php echo $_smarty_tpl->tpl_vars['settingWeb']->value['contact']['hotline'];?>
" class="link">
								• <?php echo $_smarty_tpl->tpl_vars['settingWeb']->value['contact']['hotline'];?>

							</a>
						</div>
					</div>
				</div>
			</div>
			<div class="report-complaint">
				<div class="inner">
					<div class="row row-0">
						<div class="col-12">
							<div class="font-head"><?php echo $_smarty_tpl->tpl_vars['lang']->value['system']['complaint'];?>
</div>
							<div class="font-body">
								<?php echo $_smarty_tpl->tpl_vars['lang']->value['system']['tit:complaint'];?>

							</div>
							<div class="font-body">
								<a href="mailto:<?php echo $_smarty_tpl->tpl_vars['settingWeb']->value['contact']['infoEmailconsent'];?>
" class="link text-primary"><?php echo $_smarty_tpl->tpl_vars['settingWeb']->value['contact']['infoEmailconsent'];?>
</a>
							</div>
						</div>
					</div>
										<div class="row row-0">
						<div class="col-12">
							<div class="font-body"><?php echo $_smarty_tpl->tpl_vars['lang']->value['system']['tit:channel'];?>
</div>
							<div class="font-body">
								<a href="https://sg-prod-web.singerthai.co.th:28909/SingerConsent" class="link link text-primary" target="_blank">https://sg-prod-web.singerthai.co.th:28909/SingerConsent</a>
							</div>
						</div>
					</div>
					<div class="row row-0">
						<div class="col-12">
							<div class="action">
								<ul class="item-list">
									<li>
										<a href="<?php echo $_smarty_tpl->tpl_vars['ul']->value;?>
/contact" class="link btn btn-primary-outline fluid">
											<?php echo $_smarty_tpl->tpl_vars['lang']->value['home']['contact'];?>

											<span class="feather icon icon-arrow-right"></span>
										</a>
									</li>
									<li>
										<a href="<?php echo $_smarty_tpl->tpl_vars['ul']->value;?>
/contact/map-graphic" target="_blank" class="link btn btn-primary-outline fluid">
											<?php echo $_smarty_tpl->tpl_vars['lang']->value['home']['map'];?>

											<span class="feather icon icon-arrow-right"></span>
										</a>
									</li>
									<li>
										<a href="<?php echo $_smarty_tpl->tpl_vars['ul']->value;?>
/contact/map-google" target="_blank" class="link btn btn-primary-outline fluid">
											<?php echo $_smarty_tpl->tpl_vars['lang']->value['home']['googlemap'];?>

											<span class="feather icon icon-arrow-right"></span>
										</a>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
		<div class="footer-credit">
		<div class="container">
			<div class="row row-0 height">
				<div class="col-lg">
					<div class="txt -text-md">
						© Copyright 2022 <?php echo $_smarty_tpl->tpl_vars['lang']->value['seo']['title'];?>
 All Rights Reserved.
					</div>
				</div>
				<div class="col-lg-auto">
					<div class="cac">
						<div class="logo text-center">
							<img src="<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/assets/img/static/Certified-500x500.png" alt="cac logo">
						</div>
					</div>
				</div>
				<div class="col-lg-auto">
					<div class="social">
						<div class="txt -text-md"><?php echo $_smarty_tpl->tpl_vars['lang']->value['home']['follow'];?>
:</div>
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
				</div>
			</div>
		</div>
	</div>
	
</footer>
<div class="cookie-tab pdpa" style="display: none;">
	<div class="container">
		<div class="row align-items-center  h-tap">
			<div class="col-md-auto">
				<div class="icon-pdpa">
					<img src="<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/assets/img/icon/pdpa-icon.svg" class="lazy" alt="pdpa-icon">
				</div>
			</div>
			<div class="col-md">
				<div class="text">
					<?php echo $_smarty_tpl->tpl_vars['lang']->value['pdpa']['txt:sec1'];?>

					<?php echo $_smarty_tpl->tpl_vars['lang']->value['pdpa']['txt:sec2'];?>
 &ensp;  <a class="link -cookie-policy" href="<?php echo $_smarty_tpl->tpl_vars['ul']->value;?>
/policy"> <?php echo $_smarty_tpl->tpl_vars['lang']->value['pdpa']['txt:sec3'];?>
</a>
				</div>
			</div> 
			<div class="col-md-auto">
				<div class="action">
					<a class="btn btn-primary acept-btn acceptCookie" id="btn-AcceptPdpa" data-accept="Accept" href="javascript:void(0);"><?php echo $_smarty_tpl->tpl_vars['lang']->value['pdpa']['accept'];?>
</a>
					<a class="btn btn-primary-outline reject-btn"  href="javascript:void(0);"><?php echo $_smarty_tpl->tpl_vars['lang']->value['pdpa']['decline'];?>
</a>
				</div>
			</div>
		</div>
	</div>
</div>
<?php }
}

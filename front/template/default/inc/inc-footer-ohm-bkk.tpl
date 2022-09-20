<footer class="site-footer">

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
						<div class="font-head">{$lang['menu']['contact']}</div>
						<div class="font-body">
							{if $langon eq 'th'}
								{$lang['seo']['title']} <br>
								{$lang['system']['address']} : {str_replace('<br>','',$settingWeb['contact']['address'])}
							{else}
								{$lang['seo']['title']} <br>
								{$lang['system']['address']} : {str_replace('<br>','',$settingWeb['contact']['addressen'])}
							{/if}
						</div>
					</div>
					<div class="col-lg-3">
						<div class="font-head">{$lang['system']['email']}</div>
						<div class="font-body">
							<a href="mailto:{$settingWeb['contact']['email']}" class="link">{$settingWeb['contact']['email']}</a>
							<a href="mailto:{$settingWeb['contact']['email2']}" class="link">{$settingWeb['contact']['email2']}</a>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col">
						<div class="font-head">{$lang['system']['txt:working']}</div>
						<div class="font-body">
							• {$lang['system']['txt:working']}   |   {$lang['system']['txt:days']} {$lang['contact']['suffix:days']}
							<span class="visible-xs">
								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;      
							</span> 
							• {$lang['system']['txt:vacation']}   |   {$lang['system']['txt:vacationholidays']}
						</div>
					</div>
					{if $settingWeb['contact']['hotline'] neq ""}
						
					{/if}
					<div class="col-lg-3">
						<div class="font-head">{$lang['system']['tel']}</div>
						<div class="font-body">
							<a href="tel:{$settingWeb['contact']['hotline']}" class="link">
								• {$settingWeb['contact']['hotline']}
							</a>
						</div>
					</div>
				</div>
			</div>
			<div class="report-complaint">
				<div class="inner">
					<div class="row row-0">
						<div class="col-12">
							<div class="font-head">{$lang['system']['complaint']}</div>
							<div class="font-body">
								{$lang['system']['tit:complaint']}
							</div>
							<div class="font-body">
								<a href="{$settingWeb['contact']['infoEmailconsent']}" class="link text-primary">{$settingWeb['contact']['infoEmailconsent']}</a>
							</div>
						</div>
					</div>
					<div class="row row-0">
						<div class="col-12">
							<div class="font-body">{$lang['system']['txt:complaint']}</div>
							<div class="font-body">
								<a href="{$settingWeb['contact']['infoEmailcomplaint']}" class="link text-primary">{$settingWeb['contact']['infoEmailcomplaint']}</a>
							</div>
						</div>
					</div>
					<div class="row row-0">
						<div class="col-12">
							<div class="action">
								<ul class="item-list">
									<li>
										<a href="{$ul}/contact" class="link btn btn-primary-outline fluid">
											{$lang['home']['contact']}
											<span class="feather icon icon-arrow-right"></span>
										</a>
									</li>
									<li>
										<a href="{$ul}/contact/map-graphic" target="_blank" class="link btn btn-primary-outline fluid">
											{$lang['home']['map']}
											<span class="feather icon icon-arrow-right"></span>
										</a>
									</li>
									<li>
										<a href="{$ul}/contact/map-google" target="_blank" class="link btn btn-primary-outline fluid">
											{$lang['home']['googlemap']}
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
						© Copyright 2022 {$lang['seo']['title']} All Rights Reserved.
					</div>
				</div>
				<div class="col-lg-auto">
					<div class="social">
						<div class="txt -text-md">{$lang['home']['follow']}:</div>
						<ul class="item-list">
							{if $settingWeb['social']['Facebook']['link'] neq "#" && $settingWeb['social']['Facebook']['link'] neq ""}
								<li>
									<a href="{$settingWeb['social']['Facebook']['link']}" class="link" target="_blank">
										<span class="fa fa-facebook"></span>
									</a>
								</li>
							{/if}
							{if $settingWeb['social']['Twitter']['link'] neq "#" && $settingWeb['social']['Twitter']['link'] neq ""}
								<li>
									<a href="{$settingWeb['social']['Twitter']['link']}" class="link" target="_blank">
										<span class="fa fa-twitter"></span>
									</a>
								</li>
							{/if}
							{if $settingWeb['social']['Instagram']['link'] neq "#" && $settingWeb['social']['Instagram']['link'] neq ""}
								<li>
									<a href="{$settingWeb['social']['Instagram']['link']}" class="link" target="_blank">
										<span class="fa fa-instagram"></span>
									</a>
								</li>
							{/if}
							{if $settingWeb['social']['Youtube']['link'] neq "#" && $settingWeb['social']['Youtube']['link'] neq ""}
								<li>
									<a href="{$settingWeb['social']['Youtube']['link']}" class="link" target="_blank">
										<span class="fa fa-youtube"></span>
									</a>
								</li>
							{/if}
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
					<img src="{$template}/assets/img/icon/pdpa-icon.svg" class="lazy" alt="pdpa-icon">
				</div>
			</div>
			<div class="col-md">
				<div class="text">
					{$lang['pdpa']['txt:sec1']}
					{$lang['pdpa']['txt:sec2']} &ensp;  <a class="link -cookie-policy" href="{$ul}/policy"> {$lang['pdpa']['txt:sec3']}</a>
				</div>
			</div> 
			<div class="col-md-auto">
				<div class="action">
					<a class="btn btn-primary acept-btn acceptCookie" id="btn-AcceptPdpa" data-accept="Accept" href="javascript:void(0);">{$lang['pdpa']['accept']}</a>
					<a class="btn btn-primary-outline reject-btn"  href="javascript:void(0);">{$lang['pdpa']['decline']}</a>
				</div>
			</div>
		</div>
	</div>
</div>

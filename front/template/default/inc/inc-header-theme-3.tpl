
<header class="site-header">
	<div class="site-header-topbar mobile">
		<div class="container">
			<div class="row align-items-end no-gutters">
				<div class="col-auto">
					<div class="text-color">
						<div class="txt">
							{$lang['home']['changedisplay']}
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
							{$lang['home']['fontsize']}
						</div>
						<ul class="item-list">
							<li class="active">
								<a href="javascript:void(0)" class="size size-small typo-s" title="size small">{$settingWeb['font'][$langon]}</a>
							</li>
							<li>
								<a href="javascript:void(0)" class="size size-medium typo-md" title="size medium">{$settingWeb['font'][$langon]}</a>
							</li>
							<li>
								<a href="javascript:void(0)" class="size size-large typo-lg" title="size large">{$settingWeb['font'][$langon]}</a>
							</li>
						</ul>
					</div>
				</div>
				<div class="col">
					<div class="text-language" style="float: right;">
						<ul class="item-list">
							<li class="{if $langon eq 'en'}active{/if}">
								<a href="{$ul}/lang/en" class="link lg" title="English language">
									<div class="icon">
										<img src="{$template}/assets/img/icon/gb.svg" alt="Flag of the United Kingdom">
									</div>
								</a>
							</li>
							<li class="{if $langon eq 'th'}active{/if}">
								<a href="{$ul}/lang/th" class="link lg" title="Thai language">
									<div class="icon">
										<img src="{$template}/assets/img/icon/th.svg" alt="Flag of the Thailand">
									</div>
								</a>
							</li>
							<li class="{if $langon eq 'cn'}active{/if}">
								<a href="{$ul}/lang/cn" class="link lg" title="Chinese language">
									<div class="icon">
										<img src="{$template}/assets/img/icon/cn.svg" alt="Flag of China">
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
					<a href="{$ul}/home" class="link" title="Gem and Jewelry Institute of Thailand">
						<img src="{$template}/assets/img/static/git-logo.png" alt="Gem and Jewelry Institute of Thailand Logo">
					</a>
				</div>
			</div>
			<div class="col">
				<div class="site-header-topbar">
					<div class="row justify-content-md-end align-items-end no-gutters">
						<div class="col-auto">
							<div class="text-color">
								<div class="txt">
									{$lang['home']['changedisplay']}
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
									{$lang['home']['fontsize']}
								</div>
								<ul class="item-list">
									<li class="active">
										<a href="javascript:void(0)" class="size size-small typo-s" title="size small">{$settingWeb['font'][$langon]}</a>
									</li>
									<li>
										<a href="javascript:void(0)" class="size size-medium typo-md" title="size medium">{$settingWeb['font'][$langon]}</a>
									</li>
									<li>
										<a href="javascript:void(0)" class="size size-large typo-lg" title="size large">{$settingWeb['font'][$langon]}</a>
									</li>
								</ul>
							</div>
						</div>
						<div class="col-auto">
							<div class="text-language">
								<ul class="item-list">
									<li class="{if $langon eq 'en'}active{/if}">
										<a href="{$ul}/lang/en" class="link lg" title="English language">
											<div class="icon">
												<img src="{$template}/assets/img/icon/gb.svg" alt="Flag of the United Kingdom">
											</div>
										</a>
									</li>
									<li class="{if $langon eq 'th'}active{/if}">
										<a href="{$ul}/lang/th" class="link lg" title="Thai language">
											<div class="icon">
												<img src="{$template}/assets/img/icon/th.svg" alt="Flag of the Thailand">
											</div>
										</a>
									</li>
									<li class="{if $langon eq 'cn'}active{/if}">
										<a href="{$ul}/lang/cn" class="link lg" title="Chinese language">
											<div class="icon">
												<img src="{$template}/assets/img/icon/cn.svg" alt="Flag of China">
											</div>
										</a>
									</li>
								</ul>
							</div>
						</div>
						<div class="col-auto">
							<div class="search">
								<a href="javascript:void(0)" class="search-toggle" title="{$lang['system']['search']}">
									<span class="feather icon-search"></span>
								</a>
                        <form action="{$ul}/search" method="get" class="form">
									<div class="input-group">
										<div class="form-outline">
											<input type="search" id="keywords" name="srchtxt_main" value="{$srchtxt_main}" class="form-control" placeholder="{$lang['system']['search']}..." />
											<label class="visuallyhidden" for="keywords">{$lang['system']['search']}</label>
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
									<li {if strtolower($segment) eq "home"}class="active"{/if}>
										<a href="{$ul}/home" class="link" title="{$lang['menu']['home']}">
											{$lang['menu']['home']}
										</a>
									</li>
									{foreach $arrSitemap as $keyarrSitemap => $valuearrSitemap}
										{$menuSegment = url_segment_menu($valuearrSitemap['group']['url'])}
										{if count($valuearrSitemap['list']) > 0}
											<li class="{if $keyarrSitemap eq 0}dropright{/if} {if $keyarrSitemap eq count($arrSitemap)}dropleft{/if} {if $segment eq $menuSegment[0]}active{/if}">
												<a href="javascript:void(0)" class="link link-submenu" data-link="{$keyarrSitemap}-menu" title="{$valuearrSitemap['group']['subject']}" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
													{$valuearrSitemap['group']['subject']}
												</a>
										</li>
										{else}
											<li class="{if $segment eq $menuSegment[0]}active{/if}">
												<a {if $valuearrSitemap['group']['url'] neq "" && $valuearrSitemap['group']['url'] neq "#"}href="{$valuearrSitemap['group']['url']}"{if $valuearrSitemap['group']['target'] eq 2}target="_blank"{/if}{else}href="javascript:void(0);"{/if} class="link" data-link="{$keyarrSitemap}-menu" title="{$valuearrSitemap['group']['subject']}">
													{$valuearrSitemap['group']['subject']}
												</a>
											</li>
										{/if}
									{/foreach}
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
				<a href="{$ul}/home" class="link" {if strtolower($segment) eq "home"}class="active"{/if} title="{$lang['menu']['home']}">
					{$lang['menu']['home']}
				</a>
			</li>
			{foreach $arrSitemap as $keyarrSitemap => $valuearrSitemap}
				{$menuSegment = url_segment_menu($valuearrSitemap['group']['url'])}
				<li class="{$keyarrSitemap}-menu dropright">
					{if count($valuearrSitemap['list']) > 0}
					<a href="javascript:void(0)" class="link submenu {if $segment eq $menuSegment[0]}active{/if}" title="{$valuearrSitemap['group']['subject']}" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						{$valuearrSitemap['group']['subject']}
					</a>
					{else}
					<a {if $valuearrSitemap['group']['url'] neq "" && $valuearrSitemap['group']['url'] neq "#"}href="{$valuearrSitemap['group']['url']}"{if $valuearrSitemap['group']['target'] eq 2}target="_blank"{/if}{else}href="javascript:void(0);"{/if} class="link submenu {if $segment eq $menuSegment[0]}active{/if}" title="{$valuearrSitemap['group']['subject']}">
						{$valuearrSitemap['group']['subject']}
					</a>
					{/if}
					<ul class="dropdown-menu level-II">
						<li class="active mb-3 d-sm-none d-block">
							<a href="javascript:void(0)" class="link text-light typo-lg fw-medium" title="{$valuearrSitemap['group']['subject']}">
								<span class="feather icon-chevron-left"></span>
								{$valuearrSitemap['group']['subject']}
							</a>
						</li>
							{foreach $valuearrSitemap['list'] as $keySubmenu => $valueSubmenu}
								{if count($valueSubmenu['menu']) > 0}
									<li class="dropdown-item">
										<a {if $valueSubmenu['subgroup']['url'] neq "" && $valueSubmenu['subgroup']['url'] neq "#"}href="{$valueSubmenu['subgroup']['url']}"{if $valueSubmenu['subgroup']['target'] eq 2}target="_blank"{/if}{else}href="javascript:void(0);"{/if} class="link text-light typo-sm" title="{$valueSubmenu['subgroup']['subject']}">{$valueSubmenu['subgroup']['subject']}</a>
										<ul class="item-list fluid bullet">
											{foreach $valueSubmenu['menu'] as $keyMenuLv3 => $valueMenuLv3}
												<li>
													<a {if $valueMenuLv3['url'] neq "" && $valueMenuLv3['url'] neq "#"}href="{$valueMenuLv3['url']}"{if $valueMenuLv3['target'] eq 2}target="_blank"{/if}{else}href="javascript:void(0);"{/if} class="link text-light typo-s" title="{$valueMenuLv3['subject']}">{$valueMenuLv3['subject']}</a>
												</li>
											{/foreach}
										</ul>
									</li>
								{else}
									<li class="dropdown-item">
										<a {if $valueSubmenu['subgroup']['url'] neq "" && $valueSubmenu['subgroup']['url'] neq "#"}href="{$valueSubmenu['subgroup']['url']}"{if $valueSubmenu['subgroup']['target'] eq 2}target="_blank"{/if}{else}href="javascript:void(0);"{/if} class="link text-light typo-sm" title="{$valueSubmenu['subgroup']['subject']}">{$valueSubmenu['subgroup']['subject']}</a>
									</li>
								{/if}
							{/foreach}
					</ul>
				</li>
			{/foreach}
		</ul>
	</div>
</div>
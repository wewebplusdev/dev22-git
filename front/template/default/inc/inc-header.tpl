<header class="site-header">

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
					<a href="{$ul}/home" class="link">
						<img src="{$template}/assets/img/static/brand.png" alt="SG Capital" class="lazy">
					</a>
				</div>
			</div>
			<div class="col">
				<nav class="menu">
					<ul class="nav-list">
						<li class="nav-home">
							<a href="{$ul}/home" class="link">{$lang['menu']['home']}</a>
						</li>
						<li class="nav-product dropdown">
							<a href="javascript:void(0)" class="link dropdown-toggle" data-toggle="dropdown">
								{$lang['menu']['product']}
								<span class="icon"></span>
							</a>
							<ul class="item-list dropdown-menu">
								<li {if $activeMenu eq "product-all"}class="active"{/if}><a href="{$ul}/product/all" class="link">{$lang['menu']['product']}</a></li>
								{foreach $MenuProduct as $keyMenuProduct => $valueMenuProduct}
									{if $valueMenuProduct.type eq 2}
										<li {if $activeMenu eq "product-{$valueMenuProduct.id}"}class="active"{/if}><a href="{$ul}/product/detail/G{$valueMenuProduct.id}" class="link">{$valueMenuProduct.subject}</a></li>
									{else}
										<li {if $activeMenu eq "product-{$valueMenuProduct.id}"}class="active"{/if}><a href="{$ul}/product/list/{$valueMenuProduct.id}" class="link">{$valueMenuProduct.subject}</a></li>
									{/if}
								{/foreach}
							</ul>
						</li>

						<li class="nav-about dropdown">
							<a href="javascript:void(0)" class="link dropdown-toggle" data-toggle="dropdown">
								{$lang['menu']['about']}
								<span class="icon"></span>
							</a>
								<ul class="item-list dropdown-menu about" data-masterkey="{$segment_1}">
									{foreach $menu_masterkey_ab as $keymenu_masterkey_ab => $valuemenu_masterkey_ab}
										{if $langon eq "th"}
											<li class="{if $segment_1 eq $keymenu_masterkey_ab}active{/if}"><a href="{$ul}/about/{$keymenu_masterkey_ab}" class="link">{$valuemenu_masterkey_ab.subject}</a></li>
										{else}
											<li class="{if $segment_1 eq $keymenu_masterkey_ab}active{/if}"><a href="{$ul}/about/{$keymenu_masterkey_ab}" class="link">{$valuemenu_masterkey_ab.subjecten}</a></li>
										{/if}
									{/foreach}
								</ul>
						</li>
						<li class="nav-investor dropdown">
							{* <a href="{$ul}/investor" class="link">{$lang['menu']['investor']}</a> *}
							<a href="javascript:void(0)" class="link dropdown-toggle" data-toggle="dropdown">
								{$lang['menu']['investor']}
								<span class="icon"></span>
							</a>
							<ul class="item-list dropdown-menu investor" data-masterkey="{$segment_1}">
								{foreach $menu_masterkey_ir as $keymenu_masterkey_ir => $valuemenu_masterkey_ir}
									{if $langon eq "th"}
										<li class="{if $segment_1 eq $keymenu_masterkey_ir && $segment eq 'investor'}active{/if}"><a href="{$ul}/investor/{$keymenu_masterkey_ir}" class="link">{$valuemenu_masterkey_ir.subject}</a></li>
									{else}
										<li class="{if $segment_1 eq $keymenu_masterkey_ir && $segment eq 'investor'}active{/if}"><a href="{$ul}/investor/{$keymenu_masterkey_ir}" class="link">{$valuemenu_masterkey_ir.subjecten}</a></li>
									{/if}
								{/foreach}
							</ul>
						</li>
						<li class="nav-news">
							<a href="{$ul}/news" class="link">{$lang['menu']['news']}</a>
						</li>
						<li class="nav-career">
							<a href="{$ul}/career" class="link">{$lang['menu']['career'] }</a>
						</li>
						<li class="nav-contact">
							<a href="{$ul}/contact" class="link">{$lang['menu']['contact']}</a>
						</li>
					</ul>
					<div class="header-contact visible-sm">
						<ul class="item-list">
							<li>
								<a href="{$ul}/product/apply" class="link">
									<div class="wrapper">
										<div class="icon">
											<img src="{$template}/assets/img/icon/header-contact-icon1.svg" alt="{$lang['home']['loan']}" class="lazy">
										</div>
										<div class="txt">{$lang['home']['loan']}</div>
									</div>
								</a>
							</li>
							{if $settingWeb['social']['Line']['link'] neq "#" && $settingWeb['social']['Line']['link'] neq ""}
								<li>
									<a href="{$settingWeb['social']['Line']['link']}" class="link" target="_blank">
										<div class="wrapper">
											<div class="icon">
												<img src="{$template}/assets/img/icon/header-contact-icon2.svg" alt="@SingerConnect" class="lazy">
											</div>
											<div class="txt">@SingerConnect</div>
										</div>
									</a>
								</li>
							{/if}
							<li>
								<a href="{$ul}contact" class="link">
									<div class="wrapper">
										<div class="icon">
											<img src="{$template}/assets/img/icon/header-contact-icon3.svg" alt="{$lang['menu']['contact']}" class="lazy">
										</div>
										<div class="txt">{$lang['menu']['contact']}</div>
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
						<li {if $langon eq 'en'}class="active"{/if}>
							<a href="{$ul}/lang/en" class="link -text-md">EN</a>
						</li>
						<li {if $langon eq 'th'}class="active"{/if}>
							<a href="{$ul}/lang/th" class="link -text-md">TH</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>

	<div class="overlay" data-toggle="menu-overlay"></div>

</header>

<div class="header-social langon" data-id="{$langon}">
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
{* <div class="header-contact hidden-sm"> *}
<div class="header-contact">
	<ul class="item-list">
		<li>
			<a href="{$ul}/product/apply" class="link">
				<div class="wrapper">
					<div class="icon">
						<img src="{$template}/assets/img/icon/header-contact-icon1.svg" alt="{$lang['home']['loan']}" class="lazy">
					</div>
					<div class="txt">{$lang['home']['loan']}</div>
				</div>
			</a>
		</li>
		{if $settingWeb['social']['Line']['link'] neq "#" && $settingWeb['social']['Line']['link'] neq "" && $singerconect eq 2}
			<li>
				<a href="{$settingWeb['social']['Line']['link']}" class="link" target="_blank">
					<div class="wrapper">
						<div class="icon">
							<img src="{$template}/assets/img/icon/header-contact-icon2.svg" alt="@SingerConnect" class="lazy">
						</div>
						<div class="txt">@SingerConnect</div>
					</div>
				</a>
			</li>
		{/if}
		<li>
			<a href="{$ul}/contact" class="link">
				<div class="wrapper">
					<div class="icon">
						<img src="{$template}/assets/img/icon/header-contact-icon3.svg" alt="{$lang['home']['contact']}" class="lazy">
					</div>
					<div class="txt">{$lang['home']['contact']}</div>
				</div>
			</a>
		</li>
	</ul>
</div>
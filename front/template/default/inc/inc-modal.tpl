<div class="modal modal-search fade" id="modal_search" tabindex="-1">
	<div class="modal-dialog modal-dialog-centered" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title">{$lang["search:option"]}</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<form class="search-form" action="{$ul}/search" method="post">
					<div class="search-group">
						<input name="keywords" class="search-control" type="search"
							placeholder="{$lang["search:keywords"]}...">
					</div>
					<div class="search-btn">
						<button type="button" class="btn -btn-md btn-secondary"
							data-dismiss="modal">{$lang['system']['close']}</button>
						<button type="submit" class="btn -btn-md btn-primary">{$lang['system']['search']}</button>
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
						<img src="{$template}/assets/img/static/modal-success.svg" alt="" class="lazy">
					</div>
					<div class="h-title text-secondary .h-title"></div>
					<div class="desc .desc">
					</div>
					<div class="action">
						<button type="button" class="btn btn-secondary"
							data-dismiss="modal">{$lang['system']['ok']}</button>
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
						<img src="{$template}/assets/img/static/modal-failed.svg" alt="" class="lazy">
					</div>
					<div class="h-title text-red .h-title"></div>
					<div class="desc .desc">
					</div>
					<div class="action">
						<button type="button" class="btn btn-bg-primary"
							data-dismiss="modal">{$lang['system']['tryagain']}</button>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

{if $callPopup->fields|default:null}
	<!-- Popup -->
	<div class="modal fade -warning show" id="modal_warning" tabindex="-1">
		<div class="modal-dialog modal-dialog-centered" role="document">
			<div class="modal-content">
				<button type="button" class="modal-close" data-dismiss="modal">
					<span class="feather icon-x"></span>
				</button>
				<div class="modal-warning">
					{* <div class="slider"> *}
						<div class="item">
							<div class="inner">
								<div class="image">
									<img src="{$callPopup->fields['file']|fileinclude:"real":{$callPopup->fields['masterkey']}:"link"}"
										alt="{$callPopup->fields['file']}" class="lazy">
								</div>
								<figcaption>
									<span class="desc font-body">{$callPopup->fields['title']}</span>
									{if $callPopup->fields['url'] neq "" && $callPopup->fields['url'] neq "#"}
										<a href="{$callPopup->fields['url']}" class="link" {if $callPopup->fields.target eq 2}target="_blank"{/if}>
											<span class="font-body">คลิก</span>
										</a>
									{/if}
								</figcaption>
							</div>
						</div>
					{* </div> *}
				</div>
			</div>
		</div>
	</div>
{/if}
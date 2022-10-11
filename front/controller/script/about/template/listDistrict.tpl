{if $infoDistrict->_numOfRows > 0}

	<option disabled value="0" selected="">{$lang['career']['district']}</option>		
	{foreach $infoDistrict as $listDistrict}
		<option value="{$listDistrict.0}" data-name="{$listDistrict.2}">{$listDistrict.2}</option>
	{/foreach}

{else}
	<option disabled value="" selected="">{$lang['career']['district']}</option>
{/if}
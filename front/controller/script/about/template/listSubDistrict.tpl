{if $infoSubDistrict->_numOfRows > 0}

	<option disabled value="0" selected="">{$lang['career']['subdistrict']}</option>		
	{foreach $infoSubDistrict as $listSubDistrict}
		<option value="{$listSubDistrict.0}" data-name="{$listSubDistrict.2}">{$listSubDistrict.2}</option>
	{/foreach}

{else}
	<option disabled value="" selected="">{$lang['career']['subdistrict']}</option>
{/if}
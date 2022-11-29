{if $calHTML_ban_2->_numOfRows gte 1}
  <!-- CK Editor -->
  {strip}
    {$calHTML_ban_2->fields.htmlfilename|fileinclude:"html":$calHTML_ban_2->fields.masterkey|callHtml}
  {/strip}
  <!-- CK Editor -->
{/if}
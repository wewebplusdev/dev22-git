{if $calHTML_ban_3->_numOfRows gte 1}
    <!-- CK Editor -->
    {strip}
      {$calHTML_ban_3->fields.htmlfilename|fileinclude:"html":$calHTML_ban_3->fields.masterkey|callHtml}
    {/strip}
    <!-- CK Editor -->
  {/if}
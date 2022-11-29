{if $calHTML_library_t2->_numOfRows gte 1}
  <!-- CK Editor -->
  {strip}
    {$calHTML_library_t2->fields.htmlfilename|fileinclude:"html":$calHTML_library_t2->fields.masterkey|callHtml}
  {/strip}
  <!-- CK Editor -->
{/if}
{if $calHTML_section_4->_numOfRows gte 1}
  <!-- CK Editor -->
  {strip}
    {$calHTML_section_4->fields.htmlfilename|fileinclude:"html":$calHTML_section_4->fields.masterkey|callHtml}
  {/strip}
  <!-- CK Editor -->
{/if}
{if $calHTML_section_1->_numOfRows gte 1}
  <!-- CK Editor -->
  {strip}
    {$calHTML_section_1->fields.htmlfilename|fileinclude:"html":$calHTML_section_1->fields.masterkey|callHtml}
  {/strip}
  <!-- CK Editor -->
{/if}
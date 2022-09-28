<h1>CMS DETAIL</h1>
<div>
  <div>menu</div>
  <ul>
    {foreach $arrMenu as $keyarrMenu => $valuearrMenu}
      <li>
        <a href="{$ul}/{$menuActive}/{$valuearrMenu.menuid}/{$valuearrMenu.id}">{$valuearrMenu.subject}</a>
      </li>
    {/foreach}
  </ul>
</div>
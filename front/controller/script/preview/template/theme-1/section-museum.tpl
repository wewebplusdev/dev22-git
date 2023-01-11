{if $callGitMuseum->_numOfRows gte 1}
  <div class="museum-block">
    <div class="container">
      <div class="museum-header">
        <div class="h-title fw-semi-bold text-light text-uppercase mb-1">
          GIT MUSEUM
        </div>
        <div class="desc">
          {$lang['home']['museumtitle']}
        </div>
        <a href="{$ul}/information-service" class="btn btn-border-light" title="{$lang['system']['viewsall']}">{$lang['system']['viewsall']}</a>
      </div>
    </div>
    <div class="museum-container container">
      <ul class="item-list">
        {foreach $callGitMuseum as $keycallGitMuseum => $valuecallGitMuseum}
          <li>
            <a href="{$ul}/information-service/{$valuecallGitMuseum.menuid}/{$valuecallGitMuseum.id}" class="link" title="{$valuecallGitMuseum.head}">
              <div class="wrapper biggest"
                style="background-image: url({$valuecallGitMuseum['pic']|fileinclude:"real":{$valuecallGitMuseum['masterkey']}:"link"}">
                <div class="topic">
                  <span class="feather-arrow-up-right"></span>
                  {$valuecallGitMuseum.head}
                </div>
                <div class="title">
                  {$valuecallGitMuseum.subject}
                </div>
                <div class="desc text-limit -x2">
                  {$valuecallGitMuseum.title}
                </div>
              </div>
            </a>
          </li>
        {/foreach}
      </ul>
    </div>
  </div>
{/if}
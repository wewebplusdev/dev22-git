{if count($arrGitbookList) > 0}
  <div class="git-book-block">
    <div class="container">
      <div class="h-title text-primary text-uppercase text-center">
        GIT Book
      </div>
      <ul class="default-nav-tab -x3 nav nav-pills">
        {foreach $arrGitbookList as $keyarrGitbookList => $valuearrGitbookList}
          <li>
            <a class="item {if $keyarrGitbookList eq 1}active{/if}" href="#gitBook{$keyarrGitbookList}" data-toggle="tab">{$valuearrGitbookList.group.subject}</a>
          </li>
        {/foreach}
      </ul>
      <div class="tab-content clearfix">
        {foreach $arrGitbookList as $keyarrGitbookList => $valuearrGitbookList}
          <div class="tab-pane {if $keyarrGitbookList eq 1}active{/if}" id="gitBook{$keyarrGitbookList}">
            {if count($valuearrGitbookList.list) > 0}
              <div class="booklist">
                <div class="default-slider default-slider-dots slider">
                  {foreach $valuearrGitbookList.list as $keySubNews => $valueSubNews}
                    <div class="item">
                      <a {if $valueSubNews['url'] neq "" && $valueSubNews['url'] neq "#"}href="{$valueSubNews['url']}"{if $valuecallWeblinkSection['target'] eq 2}target="_blank"{/if}{else}href="javascript:void(0);"{/if} class="link" title="">
                        <figure class="cover">
                          <img src="{$valueSubNews['pic']|fileinclude:"real":{$valueSubNews['masterkey']}:"link"}" alt="{$valueSubNews.subject}">
                        </figure>
                        <div class="title text-center typo-sm">
                          {$valueSubNews.subject}
                        </div>
                      </a>
                    </div>
                  {/foreach}
                </div>
              </div>
            {/if}
          </div>
        {/foreach}
      </div>
    </div>
  </div>
{/if}
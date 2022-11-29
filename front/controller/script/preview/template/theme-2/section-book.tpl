{if $callGitBookSection->_numOfRows gte 1}
<div class="git-book-block">
      <div class="container">
        <div class="row">
          <div class="col-lg-4"></div>
          <div class="col-lg-8">
            <div class="row align-items-center gutters-10">
              <div class="col">
                <div class="title text-uppercase">GIT BOOK</div>
              </div>
              <div class="col-auto">
                <div class="action">
                  <a href="javascript:void(0);" class="btn btn-border-primary" title="{$lang['system']['viewsall']}">{$lang['system']['viewsall']}</a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col">
            <div class="booklist">
              <div class="default-slider default-slider-dots slider">

              {foreach $callGitBookSection as $keycallGitBookSection => $valuecallGitBookSection}

                <div class="item">
                  <a {if $valuecallGitBookSection['url'] neq "" && $valuecallGitBookSection['url'] neq "#"}href="{$valuecallGitBookSection['url']}"{if $valuecallGitBookSection['target'] eq 2}target="_blank"{/if}{else}href="javascript:void(0);"{/if} class="link" title="web link">
                    <figure class="cover">
                      <img src="{$valuecallGitBookSection['pic']|fileinclude:"real":{$valuecallGitBookSection['masterkey']}:"link"}" alt="{$valuecallGitBookSection.subject}">
                    </figure>
                  </a>
                </div>

                {{/foreach}}

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  {/if}
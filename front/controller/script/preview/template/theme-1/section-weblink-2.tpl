<div class="git-library-weblinks">
  <div class="container">
    <div class="row gutters-lg-40">
      <div class="col-lg-5">
        <div class="git-library-block">
          <div class="h-title text-primary">
            GIT LIBRARY
          </div>
          <div class="library-form bg-primary text-light">
            <div class="row gutters-10">
              <div class="col-auto">
                <span class="icon feather-search"></span>
              </div>
              <div class="col">
                <div class="desc">
                  {$lang['home']['libarytitle']}
                </div>
              </div>
            </div>
            <form data-toggle="validator" role="form" class="form-default" method="post" action="https://opac.git.or.th/BibList.aspx" target="_blank">
              <div class="form-group">
                <label class="control-label visuallyhidden" for="bookSearch">{$lang['home']['searchtitle']}</label>
                <div class="block-control">
                  <input type="text" name="word" class="form-control" id="bookSearch" placeholder="">
                </div>
              </div>
              <div class="form-group has-feedback">
                <label class="control-label visuallyhidden" for="category">{$lang['home']['contacttitle']}</label>
                <div class="select-wrapper">
                  <select class="select-control" name="type" id="category" style="width: 100%;">
                    {foreach $arrGitLibary as $keyarrGitLibary => $valuearrGitLibary}
                      <option value="{$keyarrGitLibary}" {if $keyarrGitLibary eq 'ti'}selected="selected"{/if}>{$valuearrGitLibary[$langonweb]}</option>
                    {/foreach}
                  </select>
                </div>
              </div>
              <button type="submit" id="submitForm" class="btn fluid btn-light" title="{$lang['system']['search']}">{$lang['system']['search']}</button>
            </form>
          </div>
        </div>
      </div>
      {if $callWeblink->_numOfRows gte 1}
        <div class="col-lg-7">
          <div class="weblink-block">
            <div class="row align-items-center gutters-10">
              <div class="col">
                <div class="h-title text-primary text-uppercase mb-0">GIT WEBLINK</div>
              </div>
              <div class="col-auto">
                <div class="action">
                  <a href="" class="btn btn-border-primary" title="{$lang['system']['viewsall']}">{$lang['system']['viewsall']}</a>
                </div>
              </div>
            </div>
            <div class="weblink-list">
              <div class="default-slider default-slider-dots slider">
                {foreach $callWeblink as $keycallWeblink => $valuecallWeblink}
                  <div class="item">
                    <a {if $valuecallWeblink['url'] neq "" && $valuecallWeblink['url'] neq "#"}href="{$valuecallWeblink['url']}"{if $valuecallWeblink['target'] eq 2}target="_blank"{/if}{else}href="javascript:void(0);"{/if} class="link" title="web link">
                      <div class="thumbnail">
                        <figure class="cover">
                          <img src="{$valuecallWeblink['pic']|fileinclude:"real":{$valuecallWeblink['masterkey']}:"link"}" alt="{$valuecallWeblink.subject}">
                        </figure>
                      </div>
                    </a>
                  </div>
                {/foreach}
              </div>
            </div>
          </div>
        </div>
      {/if}
    </div>
  </div>
</div>
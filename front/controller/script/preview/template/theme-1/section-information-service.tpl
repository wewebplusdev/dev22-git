{if count($arrGitList) > 0}
  <div class="lab-update-block">
    <div class="container">
      <div class="h-title text-uppercase text-center text-primary">
        GIT LAB UPDATE
      </div>
      <ul class="default-nav-tab nav nav-pills">
        {foreach $arrGitList as $keyarrGitList => $valuearrGitList}
          <li>
            <a class="item {if $keyarrGitList eq 0}active{/if}" href="#labUpdate{$keyarrGitList}" data-toggle="tab">{$valuearrGitList['group']['subject']}</a>
          </li>
        {/foreach}
      </ul>
      <div class="tab-content clearfix">
        {foreach $arrGitList as $keyarrGitList => $valuearrGitList}
          <div class="tab-pane {if $keyarrGitList eq 0}active{/if}" id="labUpdate{$keyarrGitList}">
            {if count($valuearrGitList.list) > 0}
              <div class="default-list">
                <div class="default-slider default-slider-arrows default-slider-dots slider">
                  {foreach $valuearrGitList.list as $keySubNews => $valueSubNews}
                    {$Call_File = $callSetWebsite::Call_File($valueSubNews['id'])}
                    {if $valueSubNews.typec eq 1}
                      {$path_training = "{$ul}/information-service/{$valueSubNews.menuid}/{$valueSubNews.gid}/detail/{$valueSubNews.id}"}
                    {else}
                      {if $Call_File->_numOfRows gte 1}
                      {$path_training = "{$ul}/download/{$Call_File->fields['filename']|fileinclude:'file':{$valueSubNews.masterkey}:'download'}&n={$Call_File->fields['name']}&t={'md_cmf'|encodeStr}"}
                      {else}
                      {$path_training = "javascript:void(0);"}
                      {/if}
                    {/if}
                    <div class="item">
                      <a href="{$path_training}" class="link">
                        <div class="row no-gutters">
                          <div class="col-auto">
                            <span class="icon feather-file-text"></span>
                          </div>
                          <div class="col">
                            <div class="inner">
                              <div class="row">
                                <div class="col-sm">
                                  <div class="title typo-md fw-medium text-limit">
                                    {$valueSubNews.subject}
                                  </div>
                                  {if $Call_File->_numOfRows gte 1}
                                    {$fileinfo = $Call_File->fields['filename']|fileinclude:'file':{$valueSubNews.masterkey}|get_Icon}
                                    <div class="desc typo-s text-limit -x2">
                                      {"."|str_replace:"":$fileinfo.type|strtoupper} {$lang['system']['size']}: {$Call_File->fields['filename']|fileinclude:'file':{$valueSubNews.masterkey}|get_IconSize}
                                    </div>
                                  {/if}
                                </div>
                                <div class="col-sm-auto">
                                  <div class="date typo-s">
                                    {$valueSubNews.credate|DateThai:'1':{$langon}:'full'}
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
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
      <div class="load-more text-center action">
        <a href="{$ul}/information-service" class="btn btn-border-primary" title="{$lang['system']['viewsall']}">{$lang['system']['viewsall']}</a>
      </div>
    </div>
  </div>
{/if}
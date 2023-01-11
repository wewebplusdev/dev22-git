{if count($arrGitList) > 0}
  <div class="lab-update-block">
    <div class="container">
      <div class="h-title">
      GIT LAB UPDATE
      </div>
      <ul class="default-nav-tab nav nav-pills">
        {foreach $arrGitList as $keyarrGitList => $valuearrGitList}
          <li>
            <a class="item {if $keyarrGitList eq 0}active{/if}" href="#labUpdate{$keyarrGitList}"data-toggle="tab">{$valuearrGitList['group']['subject']}</a>
          </li>
        {/foreach}
      </ul>
      <div class="tab-content clearfix">
        {foreach $arrGitList as $keyarrGitList => $valuearrGitList}
          <div class="tab-pane {if $keyarrGitList eq 0}active{/if}" id="labUpdate{$keyarrGitList}">
            {if count($valuearrGitList.list) > 0}
              <div class="default-list">
                <div class="default-slider default-slider-arrows default-slider-dots slider">
                  {foreach $valuearrGitList.list as $keySubGitLab => $valueSubGitLab}
                    {$Call_File = $callSetWebsite::Call_File($valueSubGitLab['id'])}
                    {if $valueSubGitLab.typec eq 1}
                      {$path_gitlab = "{$ul}/information-service/{$valueSubGitLab.menuid}/{$valueSubGitLab.gid}/detail/{$valueSubGitLab.id}"}
                    {else}
                      {if $Call_File->_numOfRows gte 1}
                        {$path_gitlab = "{$ul}/download/{$Call_File->fields['filename']|fileinclude:'file':{$valueSubGitLab.masterkey}:'download'}&n={$Call_File->fields['name']}&t={'md_cmf'|encodeStr}"}
                      {else}
                        {$path_gitlab = "javascript:void(0);"}
                      {/if}
                    {/if}
                    <div class="item">
                      <a href="{$path_gitlab}" class="link">
                        <div class="row no-gutters">
                          <div class="col-auto">
                            <span class="icon feather-file-text"></span>
                          </div>
                          <div class="col">
                            <div class="inner">
                              <div class="row">
                                <div class="col-sm">
                                  <div class="title typo-md fw-medium text-limit">
                                    {$valueSubGitLab.subject}
                                  </div>
                                  {if $Call_File->_numOfRows gte 1}
                                    {$fileinfo = $Call_File->fields['filename']|fileinclude:'file':{$valueSubGitLab.masterkey}|get_Icon}
                                    <div class="desc typo-s text-limit -x2">
                                      {"."|str_replace:"":$fileinfo.type|strtoupper} {$lang['system']['size']}:{$Call_File->fields['filename']|fileinclude:'file':{$valueSubGitLab.masterkey}|get_IconSize}
                                    </div>
                                  {/if}
                                </div>
                                <div class="col-sm-auto">
                                  <div class="date typo-s">
                                    {$valueSubGitLab.credate|DateThai:'1':{$langon}:'full'}
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
      <div class="action">
        <a href="{$ul}/information-service" class="btn btn-border-light" title="{$lang['system']['viewsall']}">{$lang['system']['viewsall']}</a>
      </div>
    </div>
  </div>
{/if}
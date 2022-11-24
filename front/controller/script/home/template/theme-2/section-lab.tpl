{if count($arrGitLabList) > 0}
  <div class="lab-update-block">
    <div class="container">
      <div class="h-title">GIT LAB UPDATE</div>
      <ul class="default-nav-tab nav nav-pills">
        {foreach $arrGitLabList as $keyarrGitLabList => $valuearrGitLabList}
          <li>
            <a class="item {if $keyarrGitLabList eq 0}active{/if}" href="#labUpdate{$keyarrGitLabList}"
              data-toggle="tab">{$valuearrGitLabList['group']['subject']}</a>
          </li>
        {/foreach}
        {* <li>
          <a class="item active" href="#labUpdate1" data-toggle="tab">บันทึกจากห้องปฏิบัติการ</a>
        </li>
        <li>
          <a class="item" href="#labUpdate2" data-toggle="tab">ความรู้เรื่องโลหะมีค่า</a>
        </li> *}
      </ul>
      <div class="tab-content clearfix">
        {foreach $arrGitLabList as $keyarrGitLabList => $valuearrGitLabList}
          <div class="tab-pane {if $keyarrNewsList eq 0}active{/if}" id="labUpdate{$keyarrGitLabList}">
            <div class="default-list">
              {if count($valuearrGitLabList.list) > 0}
                <div class="default-slider default-slider-arrows default-slider-dots slider">
                  {foreach $valuearrGitLabList.list as $keySubGitLab => $valueSubGitLab}
                    <!-- call file -->
                    {$Call_File = $callSetWebsite::Call_File($valueSubGitLab['id'])}
                    {$fileinfo = $Call_File->fields['filename']|fileinclude:'file':{$valueSubGitLab.masterkey}|get_Icon}
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
                                  <div class="desc typo-s text-limit -x2">
                                    {$fileinfo.tocss} File Size: {$Call_File->fields['filename']|fileinclude:'file':{$valueSubGitLab.masterkey}|get_IconSize}
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
              {/if}
            </div>
          </div>
        {/foreach}
      </div>
      <div class="action">
        <a href="{$ul}/information-service" class="btn btn-border-light" title="{$lang['system']['viewsall']}">{$lang['system']['viewsall']}</a>
      </div>
    </div>
  </div>
{/if}
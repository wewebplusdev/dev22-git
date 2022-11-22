{if count($arrTrainingList) > 0}
  <div class="git-training-movement-block">
    <div class="container">
      <div class="h-title text-uppercase text-center">GIT TRAINING MOVEMENT</div>
      <ul class="default-nav-tab nav nav-pills">
        {foreach $arrTrainingList as $keyarrTrainingList => $valuearrTrainingList}
          <li>
            <a class="item {if $keyarrTrainingList eq 0}active{/if}" href="#TMovement{$keyarrTrainingList}" data-toggle="tab">{$valuearrTrainingList['group']['subject']}</a>
          </li>
        {/foreach}
      </ul>
      <div class="tab-content clearfix">
        {foreach $arrTrainingList as $keyarrTrainingList => $valuearrTrainingList}
          <div class="tab-pane {if $keyarrTrainingList eq 0}active{/if}" id="TMovement{$keyarrTrainingList}">
            {if count($valuearrTrainingList.list) > 0}
              <div class="default-slider default-slider-arrows default-slider-dots slider">
                {foreach $valuearrTrainingList.list as $keySubNews => $valueSubNews}
                  {$Call_File = $callSetWebsite::Call_File($valueSubNews['id'])}
                  {$fileinfo = $Call_File->fields['filename']|fileinclude:'file':{$valueSubNews.masterkey}|get_Icon}
                  {if $valueSubNews.typec eq 1}
                    {$path_training = "{$ul}/training/{$valueSubNews.menuid}/{$valueSubNews.gid}/detail/{$valueSubNews.id}"}
                  {else}
                    {if $Call_File->_numOfRows gte 1}
                    {$path_training = "{$ul}/download/{$Call_File->fields['filename']|fileinclude:'file':{$valueSubNews.masterkey}:'download'}&n={$Call_File->fields['name']}&t={'md_cmf'|encodeStr}"}
                    {else}
                    {$path_training = "javascript:void(0);"}
                    {/if}
                  {/if}
                  <div class="item">
                    <a href="{$path_training}" class="link" title="">
                      <div class="wrapper">
                        <div class="inner">
                          <div class="title text-limit -x2">
                            {$valueSubNews.subject}
                          </div>
                          <div class="desc text-limit -x2">
                            {$valueSubNews.title}
                          </div>
                          <div class="divider"></div>
                          <div class="date">
                            <div class="row align-items-center">
                              <div class="col">
                                <span class="feather-calendar"></span>
                                {$valueSubNews.credate|DateThai:'1':{$langon}:'full'}
                              </div>
                              <div class="col-auto">
                                <span class="icon feather-chevron-right"></span>
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
            <div class="load-more-hide text-center">
              <a href="{$ul}/training" class="btn btn-border-primary" title="{$lang['system']['viewsall']}">{$lang['system']['viewsall']}</a>
            </div>
          </div>
        {/foreach}
      </div>
    </div>
  </div>
{/if}
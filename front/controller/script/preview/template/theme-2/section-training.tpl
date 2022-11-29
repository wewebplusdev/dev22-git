{if count($arrTrainingList) > 0}
  <div class="training-block">
    <div class="container">
      <div class="row">
        <div class="col-lg-4">
          <div class="left-side">
            <div class="h-title text-uppercase">GIT Training
              Movement
            </div>
            <div class="desc typo-md">
              เป็นองค์กรของรัฐในรูปแบบองค์การมหาชนตามพระราชบัญญัติองค์การมหาชน พ.ศ. 2542
            </div>
            <div class="action">
              <a href="{$ul}/training" class="btn btn-lg btn-border-light" title="{$lang['system']['viewsall']}">{$lang['system']['viewsall']}</a>
            </div>
            <div class="graphic">
              <img src="{$template}/assets/img/static/graphic-diamonds.png" alt="diamonds">
            </div>
          </div>
        </div>

        <div class="col-lg-8">
          <ul class="default-nav-tabs nav nav-tabs" id="trainingTab" role="tablist">
            {foreach $arrTrainingList as $keyarrTrainingList => $valuearrTrainingList}
              <li class="nav-item">
                <a class="nav-link {if $keyarrTrainingList eq 0}active{/if}" href="#training-{$keyarrTrainingList}"
                  data-toggle="tab">{$valuearrTrainingList['group']['subject']}</a>
              </li>
            {/foreach}
            {* <li class="nav-item">
              <a class="nav-link active" id="training-01-tab" data-toggle="tab" href="#training-01" role="tab"
                aria-controls="training-01" aria-selected="true">หลักสูตรฝึกอบรมระยะยาว</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="training-02-tab" data-toggle="tab" href="#training-02" role="tab"
                aria-controls="training-02" aria-selected="false">หลักสูตรฝึกอบรมระยะสั้น</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="training-03-tab" data-toggle="tab" href="#training-03" role="tab"
                aria-controls="training-03" aria-selected="false">หลักสูตรฝึกอบรม (ออนไลน์)</a>
            </li> *}
          </ul>
          <div class="default-tab-content tab-content" id="trainingTabContent">
          {foreach $arrTrainingList as $keyarrTrainingList => $valuearrTrainingList}
              <div class="tab-pane fade show {if $keyarrTrainingList eq 0}active{/if}" id="training-{$keyarrTrainingList}"
                role="tabpanel" aria-labelledby="training-{$keyarrTrainingList}-tab">
                {if count($valuearrTrainingList.list) > 0}
                  <div class="default-list">
                    <div class="default-slider default-slider-dots slider">
                      {foreach $valuearrTrainingList.list as $keySubNews => $valueSubNews}
                        <!-- call file -->
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
                          <a href="{$path_training}" class="link">
                            <div class="row no-gutters">
                              <div class="col-auto">
                                <span class="icon feather-file-text"></span>
                              </div>
                              <div class="col">
                                <div class="inner">
                                  <div class="title typo-md fw-medium text-limit">{$valueSubNews.subject}
                                  </div>
                                  <div class="desc typo-s text-limit -x2">
                                    {$valueSubNews.title}
                                  </div>
                                  <div class="date typo-s">
                                    {$valueSubNews.credate|DateThai:'1':{$langon}:'full'}
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
              {* <div class="tab-pane fade" id="training-02" role="tabpanel" aria-labelledby="training-02-tab">
                training-02
              </div>
              <div class="tab-pane fade" id="training-03" role="tabpanel" aria-labelledby="training-03-tab">
                training-03
              </div> *}
            {/foreach}
          </div>
        </div>
      </div>
    </div>
  </div>
{/if}
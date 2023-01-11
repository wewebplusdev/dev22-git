{if count($arrServiceList) > 0}
  <div class="git-service-block">
    <div class="container -lg">
      <div class="row">
        <div class="col-md-4">
          <div class="row align-items-center">
            <div class="col-md-12 col">
              <div class="h-title m-0">GIT SEVICES</div>
              <div class="sub-title">{$lang['home']['ourservicetitle']}</div>
            </div>
            <div class="col-md-12 col-auto">
              <div class="load-more-hide text-left mb-4">
                <a href="{$ul}/service" class="btn btn-border-primary" title="{$lang['system']['viewsall']}">{$lang['system']['viewsall']}</a>
              </div>
            </div>
          </div>
          <div class="sidebar-menus">
            {foreach $arrServiceList as $keyarrServiceList => $valuearrServiceList}
              <ul class="item-list">
                <li class="menu-service">
                  <a class="link topic {if $keyarrServiceList eq 0}active{/if}" href="#Tab{$valuearrServiceList.group.id}" data-toggle="tab">
                    <div class="block-dots">
                      <div class="dots-topic {if $keyarrServiceList eq 0}active{/if}"></div>
                    </div>
                    {$valuearrServiceList.group.subject}
                  </a>
                  {if count($valuearrServiceList.list) gte 1}
                    <ul class="sub-topic {if $keyarrServiceList eq 0}-block{/if}">
                      {foreach $valuearrServiceList.list as $keySubNews => $valueSubNews}
                        <li {if $keySubNews eq 0}class="-border-top"{/if}>
                          <a class="link" href="{$ul}/service/{$valueSubNews.menuid}/{$valueSubNews.id}">{$valueSubNews.subject}</a>
                        </li>
                      {/foreach}
                    </ul>
                  {/if}
                </li>
              </ul>
            {/foreach}
          </div>
        </div>
        <div class="col-md">
          <figure class="cover">
            <img src="{$template}/assets/img/upload/service-image.png" alt="gallery thumbnail">
          </figure>
          <div class="tab-content clearfix">
            {$index_setting = 0}
            {foreach $arrServiceList as $keyarrServiceList => $valuearrServiceList}
              {foreach $valuearrServiceList.setting as $keySubSetting => $valueSubSetting}
                <div class="tab-pane {if $index_setting eq 0}active{/if}" id="Tab{$valueSubSetting.menuid}">
                {if $valueSubSetting.htmlfilename neq ""}
                  <!-- CK Editor -->
                  {strip}
                    {$valueSubSetting.htmlfilename|fileinclude:"html":$valueSubSetting.masterkey|callHtml}
                  {/strip}
                  <!-- CK Editor -->
                {/if}
                </div>
              {/foreach}
            {$index_setting = $index_setting+1}
            {/foreach}
          </div>
        </div>
      </div>
    </div>
  </div>
{/if}
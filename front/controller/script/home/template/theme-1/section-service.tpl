{if count($arrServiceList) > 0}
  <div class="git-service-block">
    <div class="container -lg">
      <div class="row">
        <div class="col-md-4">
          <div class="row align-items-center">
            <div class="col-md-12 col">
              <div class="h-title m-0">GIT SEVICES</div>
              <div class="sub-title">บริการของเรา</div>
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
                  <a class="link topic {if $keyarrServiceList eq 0}active{/if}" href="#Tab{$keyarrServiceList}" data-toggle="tab">
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
            <div class="tab-pane active" id="Tab1">
              <div class="topic-content-block">
                <div class="h-title m-0">บริการห้องปฏิบัติการ1</div>
                <div class="sub-title">ตรวจสอบอัญมณี</div>
                <div class="desc">
                  ห้องปฏิบัติการตรวจสอบอัญมณีของสถาบันวิจัยและพัฒนาอัญมณีและเครื่องประดับแห่งชาติ (องค์การมหาชน)….
                </div>
                <div class="load-more-hide text-left mt-4">
                  <a href="javascript:void(0)" class="btn btn-border-primary" title="ดูทั้งหมด">อ่านต่อ</a>
                </div>
              </div>
            </div>
            <div class="tab-pane" id="Tab2">
              <div class="topic-content-block">
                <div class="h-title m-0">บริการห้องปฏิบัติการ2</div>
                <div class="sub-title">ตรวจสอบอัญมณี</div>
                <div class="desc">
                  ห้องปฏิบัติการตรวจสอบอัญมณีของสถาบันวิจัยและพัฒนาอัญมณีและเครื่องประดับแห่งชาติ (องค์การมหาชน)….
                </div>
                <div class="load-more-hide text-left mt-4">
                  <a href="javascript:void(0)" class="btn btn-border-primary" title="ดูทั้งหมด">อ่านต่อ</a>
                </div>
              </div>
            </div>
            <div class="tab-pane" id="Tab3">
              <div class="topic-content-block tab-pane">
                <div class="h-title m-0">บริการห้องปฏิบัติการ3</div>
                <div class="sub-title">ตรวจสอบอัญมณี</div>
                <div class="desc">
                  ห้องปฏิบัติการตรวจสอบอัญมณีของสถาบันวิจัยและพัฒนาอัญมณีและเครื่องประดับแห่งชาติ (องค์การมหาชน)….
                </div>
                <div class="load-more-hide text-left mt-4">
                  <a href="javascript:void(0)" class="btn btn-border-primary" title="ดูทั้งหมด">อ่านต่อ</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
{/if}
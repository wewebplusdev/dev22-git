<section class="site-container">
  <div class="default-page">
    <div class="default-header">
      <div class="list-wrapper">
        <div class="container">
          <ol class="breadcrumb">
            <li><a href="{$ul}/home">{$lang['menu']['home']}</a></li>
            <li><a href="{$ul}/{$menuActive}">{$lang['menu']['calendar']}</a></li>
            <li class="active">
                {$callCalendarDetail->fields.subject}
            </li>
          </ol>
          <h1 class="page-title">
            {$lang['menu']['calendar']}
          </h1>
        </div>
      </div>
    </div>
    <div class="default-bar mt-5">
      <div class="container">
        <div class="whead">
          <div class="whead-block">
            <div class="row">
              <div class="col-md-8 col-auto">
                <div class="whead-title">
                  {$callCalendarDetail->fields.subject}
                </div>
              </div>
              <div class="col-md-4 col-auto d-flex justify-content-end">
                <div class="social-block">
                  <div class="social-title">Share :</div>
                  <ul class="item-list">
                    <li>
                      <a href="https://www.facebook.com/sharer/sharer.php?u={$fullurl}" target="_blank"
                        title="{$lang["news"]['fb']}">
                        <img src="{$template}/assets/image/icon/social-icon-facebook.svg" alt="{$lang["news"]['fb']}"
                          title="{$lang["news"]['fb']}" />
                      </a>
                    </li>
                    <li>
                      <a href="https://twitter.com/intent/tweet?url={$fullurl}" title="{$lang["news"]['tw']}"
                        target="_blank">
                        <img src="{$template}/assets/image/icon/social-icon-twitter.svg" alt="{$lang["news"]['tw']}"
                          title="{$lang["news"]['tw']}" />
                      </a>
                    </li>
                    <li>
                      <a href="https://plus.google.com/share?url={$fullurl}" title="{$lang["news"]['gg']}"
                        target="_blank">
                        <img src="{$template}/assets/image/icon/social-icon-google-plus.svg" alt="{$lang["news"]['gg']}"
                          title="{$lang["news"]['gg']}" />
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="whead-addon">
              <div class="detail-info mt-1 mb-3">
                <ul class="item-list">
                  <li>
                    <span class="feather icon-calendar" aria-hidden="true"></span>
                    {$callCalendarDetail->fields.credate|DateThai:"17":"en":"shot"}
                  </li>
                  <li>
                    <span class="feather icon-eye" aria-hidden="true"></span>
                    {number_format($callCalendarDetail->fields.view)}
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="default-body">
      <div class="container">
        <div class="news-page">
          <div class="detail-block">
            {if $callCalendarDetail->fields.pic}
              <div class="detail-fullImg">
                <figure>
                  <img src="{$callCalendarDetail->fields['pic']|fileinclude:"real":{$callCalendarDetail->fields['masterkey']}:"link"}"
                    alt="{$callCalendarDetail->fields.subject}"/>
                </figure>
              </div>
            {/if}
            <div class="editor-content">
              <!-- CK Editor -->
              {strip}
                {$callCalendarDetail->fields.htmlfilename|fileinclude:"html":$callCalendarDetail->fields.masterkey|callHtml}
              {/strip}
              <!-- CK Editor -->
            </div>

            {if $callCalendarDetail->fields.url neq ""}
              {$myUrlArray = explode("v=", $callCalendarDetail->fields.url)}
              {$myUrlCut = $myUrlArray[1]}
              {$myUrlCutArray = explode("&", $myUrlCut)}
              {$myUrlCutAnd = $myUrlCutArray[0]}
              <div class="content-video" style="margin-top: 20px; margin-bottom: 20px">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/{$myUrlCutAnd}?rel=0&showinfo=0"
                   allowfullscreen></iframe>
              </div>
            {/if}

            {if $Call_Album->_numOfRows gte 1}
              <div class="detail-img" id="boxDetail-img">
                <div class="slick-slider">
                  {foreach $Call_Album as $keyCall_Album => $valueCall_Album}
                    <div class="item">
                      <a href="{$valueCall_Album['filename']|fileinclude:"album":{$callCalendarDetail->fields['masterkey']}:"album"}" data-fancybox="image" title="{$valueCall_Album['filename']}">
                        <figure class="thumb-bg"
                          style="background-image: url('{$valueCall_Album['filename']|fileinclude:"album":{$callCalendarDetail->fields['masterkey']}:"album"}');">
                          <img src="{$template}/assets/image/asset/thumb-detail-img.png"
                            alt="{$valueCall_Album['filename']}" />
                        </figure>
                      </a>
                    </div>
                  {/foreach}
                </div>
              </div>
            {/if}

            {if $callCalendarDetail->fields['dwswitch'] eq "On" && $Call_File->_numOfRows gte 1}
              <div class="download-block">
                <div class="download-list-title">
                  <h2 class="head-title text-primary">{$lang['system']['download']}</h2>
                </div>
                <div class="download-list">
                  <div class="slider">
                    {foreach $Call_File as $keyCall_File => $valueCall_File}
                      {$fileinfo = $valueCall_File['filename']|fileinclude:'file':{$callCalendarDetail->fields.masterkey}|get_Icon}
                      <div class="item">
                        <div class="list-wrapper">
                          <div class="row gutters-10 align-items-center">
                            <div class="col-auto">
                              <div class="list-icon">
                                <img src="{$template}/assets/image/icon/icon-file.svg" alt="">
                              </div>
                            </div>
                            <div class="col">
                              <div class="list-title text-primary text-limit">
                                {$valueCall_File.name}
                              </div>
                              <div class="list-info">
                                <span>
                                  {$lang['system']['type']} :
                                  <span class="">{$fileinfo.type}</span>
                                </span>
                                <span>
                                  {$lang['system']['size']} :
                                  <span
                                    class="">{$valueCall_File['filename']|fileinclude:'file':{$callCalendarDetail->fields.masterkey}|get_IconSize}</span>
                                </span>
                                <span>
                                  {$lang["system"]['count']} :
                                  <span class="">{$valueCall_File['download']|number_format}</span>
                                </span>
                              </div>
                            </div>
                            <div class="col-auto">
                              <div class="list-btn">
                                <a href="{$ul}/download/{$valueCall_File['filename']|fileinclude:'file':{$callCalendarDetail->fields.masterkey}:'download'}&n={$valueCall_File['name']}&t={'md_caf'|encodeStr}"
                                  target="_blank" class="btn btn-xs fluid btn-primary btn-rounded" title="{$lang['system']['download']}">
                                  <span class="fa fa-download"></span>{$lang['system']['download']}
                                </a>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    {/foreach}
                  </div>
                </div>
              </div>
            {/if}

            <div class="detail-bar">
              <div class="social-block d-block">
                <ul class="item-list">
                  <li>
                    <a href="https://www.facebook.com/sharer/sharer.php?u={$fullurl}" target="_blank"
                      title="{$lang["news"]['fb']}">
                      <img src="{$template}/assets/image/icon/social-icon-facebook.svg" alt="{$lang["news"]['fb']}"
                        title="{$lang["news"]['fb']}" />
                    </a>
                  </li>
                  <li>
                    <a href="https://twitter.com/intent/tweet?url={$fullurl}" title="{$lang["news"]['tw']}"
                      target="_blank">
                      <img src="{$template}/assets/image/icon/social-icon-twitter.svg" alt="{$lang["news"]['tw']}"
                        title="{$lang["news"]['tw']}" />
                    </a>
                  </li>
                  <li>
                    <a href="https://plus.google.com/share?url={$fullurl}" title="{$lang["news"]['gg']}"
                      target="_blank">
                      <img src="{$template}/assets/image/icon/social-icon-google-plus.svg" alt="{$lang["news"]['gg']}"
                        title="{$lang["news"]['gg']}" />
                    </a>
                  </li>
                </ul>
              </div>

              {if $call_hashtag->_numOfRows gte 1}
                <div class="tag-list">
                  {* <div class="tag-list-label">{$lang['news']['tags']} :</div> *}
                  <ul class="item-list">
                    {foreach $call_hashtag as $keycall_hashtag => $valuecall_hashtag}
                      <li>
                        <a class="calendar-detail-hashtag" href="{$ul}/search/hashtag/{encodeStr($valuecall_hashtag.id)}"
                          title="{$valuecall_hashtag.subject}">{$valuecall_hashtag.subject}</a>
                      </li>
                    {/foreach}
                  </ul>
                </div>
              {/if}
            </div>
            <div class="detail-bottom">
              <a href="javascript:history.back();" class="btn-link">
                <span class="feather icon-chevron-left"></span>
                {$lang['system']['btn_back']}</a>
            </div>
            <div style="clear: both; height: 20px"></div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
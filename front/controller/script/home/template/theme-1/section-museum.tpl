<div class="museum-block">
  <div class="container">
    <div class="museum-header">
      <div class="h-title fw-semi-bold text-light text-uppercase mb-1">
        GIT MUSEUM
      </div>
      <div class="desc">
        พิพิธภัณฑ์อัญมณีและเครื่องประดับสถาบันวิจัยและพัฒนาอัญมณี <br>
        และเครื่องประดับแห่งชาติ (องค์การมหาชน)
      </div>
      <a href="javascript:void(0)" class="btn btn-border-light" title="ดูทั้งหมด">ดูทั้งหมด</a>
    </div>
  </div>
  <div class="museum-container container">
    <ul class="item-list">
      {foreach $callGitMuseum as $keycallGitMuseum => $valuecallGitMuseum}
        <li>
          <a href="" class="link" title="GIT Museum">
            <div class="wrapper biggest"
              style="background-image: url({$valuecallGitMuseum['pic']|fileinclude:"real":{$valuecallGitMuseum['masterkey']}:"link"}">
              <div class="topic">
                <span class="feather-arrow-up-right"></span>
                GIT Museum
              </div>
              <div class="title">
                {$valuecallGitMuseum.subject}
              </div>
              <div class="desc text-limit -x2">
                {$valuecallGitMuseum.title}
              </div>
            </div>
          </a>
        </li>
      {/foreach}
    </ul>
  </div>
</div>
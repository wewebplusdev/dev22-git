{if count($arrGitMsList) > 0}
  <div class="museum-block">
    <div class="container">
      <div class="text-center">
        <div class="h-title fw-semi-bold text-primary text-uppercase">
          GIT MUSEUM
        </div>
      </div>

      <div class="row gutters-15">
        {foreach $arrGitMsList as $keyarrGitMsList => $valuearrGitMsList}
          {if $keyarrGitMsList == 0}
            <div class="col-lg-8 col-md-6 mb-md-0 mb-3">
              <a href="javascript:void(0);" class="link" title="GIT Museum">
                <div class="wrapper biggest"
                  style="background-image: url({$template}/assets/img/background/bg-museum-01.jpg);">
                  <div class="topic">
                    <span class="feather-arrow-up-right"></span>
                    {$valuearrGitMsList.subjecten}
                  </div>
                  <div class="title">
                    {$valuearrGitMsList.subject}
                  </div>
                  <div class="desc text-limit -x2">
                    {$valuearrGitMsList.title}
                  </div>
                </div>
              </a>
            </div>
          {/if}
        {/foreach}
        <div class="col">
          <div class="row h-100">
          {foreach $arrGitMsList as $keyarrGitMsList => $valuearrGitMsList}
            {if $keyarrGitMsList == 1}
              <div class="col-12 mb-3">
                <a href="" class="link" title="GIT Virtual Museum">
                  <div class="wrapper" style="background-image: url({$template}/assets/img/background/bg-museum-02.jpg);">
                    <div class="topic">
                      <span class="feather-arrow-up-right"></span>
                      {$valuearrGitMsList.subjecten}
                    </div>
                    <div class="title">
                      {$valuearrGitMsList.subject}
                    </div>
                    <div class="desc text-limit -x2">
                      {$valuearrGitMsList.title}
                    </div>
                  </div>
                </a>
              </div>
            {/if}
            {if $keyarrGitMsList == 2}
              <div class="col-12">
                <a href="" class="link" title="GIT Virtual Exhibition">
                  <div class="wrapper" style="background-image: url({$template}/assets/img/background/bg-museum-03.jpg);">
                    <div class="topic">
                      <span class="feather-arrow-up-right"></span>
                      {$valuearrGitMsList.subjecten}
                    </div>
                    <div class="title">
                      {$valuearrGitMsList.subject}
                    </div>
                    <div class="desc text-limit -x2">
                      {$valuearrGitMsList.title}
                    </div>
                  </div>
                </a>
              </div>
            {/if}
          {/foreach}
          </div>
        </div>
      
    </div>

  </div>
</div>
{/if}
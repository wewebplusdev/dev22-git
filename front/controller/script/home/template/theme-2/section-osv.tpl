{if $callService->_numOfRows gte 1}
    <div class="e-service-block">
        <div class="container">
            <div class="h-title text-uppercase">E - Service</div>
            <div class="desc typo-md">
                {$lang['home']['eservie']}
            </div>
            <ul class="item-list">
            {foreach $callService as $keycallService => $valuecallService}
                    <li>
                        <a {if $valuecallService.url neq "#" && $valuecallService.url neq ""}href="{$valuecallService.url}"{else}href="javascript:void(0);"{/if} {if $valuecallService.target eq 2}target="_blank"{/if} class="link" title="{$valuecallService.subject}">
                            <div class="icon">
                                <div class="circle">
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                        width="121" height="94.95" viewBox="0 0 121 94.95">
                                        <g>
                                            <path data-name="Path 2003"
                                                d="M60.739,96.7a.925.925,0,0,1-.673-.29L.253,33.039a.926.926,0,0,1-.129-1.1L15.6,5.031a.925.925,0,0,1,.8-.464h8.135a.925.925,0,1,1,0,1.85h-7.6L2.071,32.268,60.736,94.424,118.908,32.3,102.371,6.417H40.5a.925.925,0,0,1,0-1.85h62.38a.926.926,0,0,1,.78.427l17.2,26.911a.926.926,0,0,1-.1,1.13L61.414,96.407a.926.926,0,0,1-.673.293Z"
                                                transform="translate(0 -1.75)" fill="#013f94" />
                                            <path data-name="Path 2004"
                                                d="M.925,40.058a.925.925,0,0,1-.2-1.828L72.314,22.148a.925.925,0,1,1,.406,1.805L1.129,40.035a.928.928,0,0,1-.2.023"
                                                transform="translate(0 -8.479)" fill="#013f94" />
                                            <path data-name="Path 2005"
                                                d="M144.665,33.329a.92.92,0,0,1-.3-.049L64.791,6.369a.925.925,0,0,1,.593-1.753l79.578,26.911a.925.925,0,0,1-.3,1.8"
                                                transform="translate(-24.591 -1.75)" fill="#013f94" />
                                            <path data-name="Path 2006"
                                                d="M50.315,7.484a3.742,3.742,0,1,1,3.747-3.742,3.749,3.749,0,0,1-3.747,3.742m0-5.634a1.892,1.892,0,1,0,1.9,1.892,1.9,1.9,0,0,0-1.9-1.892"
                                                transform="translate(-17.848)" fill="#013f94" />
                                        </g>
                                    </svg>
                                </div>
                            </div>
                            <div class="text-center">
                                <div class="title text-uppercase">{$valuecallService.title}</div>
                                <div class="desc">{$valuecallService.descript}</div>
                            </div>
                        </a>
                    </li>
                {/foreach}
            </ul>
            <div class="action">
                <a href="{$ul}/online-service" class="btn btn-lg btn-border-primary" title="ดูทั้งหมด">ดูทั้งหมด</a>
            </div>
        </div>
    </div>
{/if}
{if $pagination|default:null}
    <div class="pagination-block">
        <div class="row align-items-center">
            <div class="col-sm-6">
                <div class="pagination-label">
                    {$lang["search:listtotal"]} {$pagination.total|number_format} {$lang["search:list"]}
                </div>
            </div>
            <div class="col-sm-6">
                <div class="pagination">
                    <ul class="item-list">
                        {$pageStartShow = $pagination.curent - 2}
                        {$pageEndShow = $pagination.curent + 2}
            
                        {if $pageStartShow < 1}
                            {$pageStartShow = 1}
                        {/if}
            
                        {if $pageStartShow - 2 < 0}
                            {$pageEndShow = $pageEndShow + {2 + {$pageStartShow - $pagination.curent}}}
                        {/if}
            
                        {if $pageEndShow >= $pagination.totalpage}
                            {$pageEndShow = $pagination.totalpage}
                        {/if}
            
                        {if $pagination.total - $pagination.curent < 2}
                            {$startAdd = 2 - {$pagination.totalpage - $pagination.curent}}
                            {$pageStartShow = $pageStartShow - $startAdd}
                        {/if}
            
                        {if $pageStartShow < 1}
                            {$pageStartShow = 1}
                        {/if}

                        {if $pagination.curent-1 > 0}
                            <li>
                                <a href="{$ul}{$pagination.method.page}{$pagination.method.parambefor}{$pagination.method.parameter}{$pagination.curent-1}" title="ก่อนหน้า">
                                    <span class="feather icon-chevron-left" aria-hidden="true"></span>
                                </a>
                            </li>
                        {/if}

                        {for $current=$pageStartShow to $pageEndShow}
                                <li class="{if $current == $pagination.curent}active{/if}">
                                <a href="{$ul}{$pagination.method.page}{$pagination.method.parambefor}{$pagination.method.parameter}{$current}" title="{$current}">{$current}</a>
                            </li>
                        {/for}

                        {if $pagination.curent+1 < $pagination.totalpage}
                            <li>
                                <a href="{$ul}{$pagination.method.page}{$pagination.method.parambefor}{$pagination.method.parameter}{$pagination.curent+1}" title="ถัดไป">
                                    <span class="feather icon-chevron-right" aria-hidden="true"></span>
                                </a>
                            </li>
                        {/if}
                    </ul>
                </div>
            </div>
        </div>
    </div>
{/if}
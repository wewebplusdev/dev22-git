{* {if $pagination|default:null}
<div class="pagination-block" data-aos="fade-down" data-aos-duration="2000">
    <div class="row row-0 align-items-center">
        <div class="col-lg">
            <div class="pagination-label">
                <div class="title">
                    {$lang["search:listtotal"]} <span>{$pagination.total|number_format}</span> {$lang["search:list"]}
                </div>
            </div>
        </div>
        <div class="col-lg-auto">
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

                    {if $pageStartShow > 1}
                        <li class="pagination-nav"><a class="link" href="{$ul}{$pagination.method.page}{$pagination.method.parambefor}{$pagination.method.parameter}1"><span class="feather icon-chevrons-left"></span></a></li>
                    {/if}

                    {if $pagination.curent-1 > 0}
                        <li class="pagination-nav"><a class="link" href="{$ul}{$pagination.method.page}{$pagination.method.parambefor}{$pagination.method.parameter}{$pagination.curent-1}"><span class="feather icon-chevron-left"></span></a></li>
                    {/if}

                    {for $current=$pageStartShow to $pageEndShow}
                        <li class="{if $current == $pagination.curent}active{/if}"><a class="link" href="{$ul}{$pagination.method.page}{$pagination.method.parambefor}{$pagination.method.parameter}{$current}">{$current}</a></li>
                    {/for}

                    <li class="jumpPage">
                        <div class="select-box">
                            <select class="select-control" size="1" style="width: 100%;" onchange="window.location = $(this).val()">
                                <option value="javascript:void(0)" selected="">ไปหน้า</option>
                                {for $current=1 to $pagination.totalpage}
                                    <option
                                        value="{$ul}{$pagination.method.page}{$pagination.method.parambefor}{$pagination.method.parameter}{$current}">
                                        {$current}</option>
                                {/for}
                            </select>
                        </div>
                    </li>

                    {if $pagination.curent+1 < $pagination.totalpage}
                        <li class="pagination-nav"><a class="link" href="{$ul}{$pagination.method.page}{$pagination.method.parambefor}{$pagination.method.parameter}{$pagination.curent+1}"><span class="feather icon-chevron-right"></span></a></li>
                    {/if}

                    {if $pagination.curent+2 < $pagination.totalpage}
                        <li class="pagination-nav"><a class="link" href="{$ul}{$pagination.method.page}{$pagination.method.parambefor}{$pagination.method.parameter}{$pagination.totalpage}"><span class="feather icon-chevrons-right"></span></a></li>
                    {/if}
                    
                </ul>
            </div>
        </div>
    </div>
</div>
{/if} *}
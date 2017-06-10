<ul>
{if $pagebar}
{foreach $pagebar.buttons as $k=>$v}
    {if $pagebar.PageNow==$k}
    <li><a class="action"></a></li>
    {elseif $k=='‹‹'}
    <a href="{$v}" class="left"></a>
    {elseif $k=='››'}
    <a href="{$v}" class="right"></a>
    {elseif $k=='‹'}
    
    {elseif $k=='›'}
    
    {else}
    <li><a href="{$v}"></a></li>
    {/if}
{/foreach}
{/if}
</ul>

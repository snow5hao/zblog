{template:header}
<div id="divMid">
  <div id="divMain">
      {if $article.Type==ZC_POST_TYPE_ARTICLE}
      {template:post-single}
      {else}
      {template:post-page}
      {/if}
    <div class="pagebar">{template:pagebar}</div>
  </div>
  <div id="divSidebar">{template:sidebar}</div>
</div><div class="clear"></div>
{template:footer}
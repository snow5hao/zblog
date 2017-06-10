{template:header}
<div id="divMid">
  <div id="divMain">
    <div>
    {if $type=='index'&&$page=='1'}
      <div class="slider">
        <a href="http://www.linxueyu.com" target="_blank">
          <img width="750" height="150" src="http://www.linxueyu.com/zb_users/theme/Qmzt007_zbp_mf/style/img/home.jpg">
        </a>
      </div>
    {else}
      <div class="space">
        <h4>
          <a href="{$host}" title="{$name}">网站首页</a>
          {if $type=='category'} >> <a class="n2" href="{$category.Url}">{$category.Name}</a>{/if}
          {if $type=='article'} >> <a class="n3" href="{$article.Url}">{$article.Title}</a>{/if}
          {if $type=='page'} >> <a class="n4" href="{$page.Url}">{$page.Title}</a>{/if}
          {if $type=='tag'} >> <a class="n5" href="{$tag.Url}">{$title}</a>{/if}
        </h4>
      </div>
    {/if}
    </div><div class="clear"></div>
    
    <!--1 -->
    {foreach $articles as $article}
      {if $article.IsTop}
       {template:post-istop}
      {else}
       {template:post-multi}
      {/if}
    {/foreach}
    <div class="pagebar">{template:pagebar}</div>
  </div>
  <div id="divSidebar">{template:sidebar}</div>
</div><div class="clear"></div>
{template:footer}
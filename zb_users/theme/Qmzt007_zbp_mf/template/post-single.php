<div class="post single">
  <div class="article-header">
    <p><a href="{$host}" title="首页">首页</a> » <a href="#" title="{$article.Category.Name}">{$article.Category.Name}</a> » 正文</p>
	<h1 class="entry-title">{$article.Title}</h1>
    <div class="list-info"> {$article.Time('Y年m月d日')} | 分类:<a href="{$category.Url}">{$article.Category.Name}</a> | 作者:<a href="{$author.Url}">{$article.Author.StaticName}</a> | 评论:<a href="{$article.Url}#comment">{$article.CommNums}</a>条评论 |  浏览:{$article.ViewNums}</div>
  </div>
  <div class="post-body">{$article.Content}</div>
  <div class="list-tags">{if $article.Tags}<div>{foreach $article.Tags as $tag}<a href="{$tag.Url}">#{$tag.Name}</a>{/foreach}</div>
{/if}</div><div class="clear"></div>
  <div class="copyright">转载请注明来源：<a href="{$article.Url}" title="{$article.Title}">{$article.Title}</a> - <a href="{$host}" title="{$name}">{$name}</a></div><div class="clear"></div>
  <div id="sx">
      <p class="l">{if $article.Prev}<a  href="{$article.Prev.Url}" title="{$article.Prev.Title}">上一篇</a>{else}没有了{/if} </p>
      <p class="r">{if $article.Next}<a  href="{$article.Next.Url}" title="{$article.Next.Title}">下一篇</a>{else}没有了{/if} </p>
  </div><div class="clear"></div>
  <div class="bdshare">
  {$zbp->Config('Qmzt007_zbp_mf')->Qmpz_Share}
  </div>
  <div class="related">
    <div class="related-title">你可能也喜欢：</div>
    {$array=GetList($zbp->option['ZC_RELATEDLIST_COUNT'],null,null,null,null,null,array('is_related'=>$article->ID));}
    <ul id="related">
      {foreach $array as $related}
        <li><span class="time">{$related.Time('m-d')}</span>&nbsp;&nbsp;<span class="title"><a href="{$related.Url}" title="{$related.Title}">{$related.Title}</a></span></li>
      {/foreach}
    </ul>
  </div>
  
  {if !$article.IsLock}
{template:comments}
{/if}
  
</div>


  

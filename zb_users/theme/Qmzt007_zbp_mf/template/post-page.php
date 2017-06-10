<div class="post single">
  <div class="article-header">
    <p><a href="{$host}" title="首页">首页</a> » <a href="#" title="{$article.Category.Name}">{$article.Category.Name}</a> » 正文</p>
	<h1 class="entry-title">{$article.Title}</h1>
  </div>
  <div class="post-body">{$article.Content}</div>
  <div class="list-tags">{if $article.Tags}<div>{foreach $article.Tags as $tag}<a href="{$tag.Url}">#{$tag.Name}</a>{/foreach}</div>
{/if}</div><div class="clear"></div>
  <div class="copyright">转载请注明来源：<a href="{$article.Url}" title="{$article.Title}">{$article.Title}</a> - <a href="{$host}" title="{$name}">{$name}</a></div><div class="clear"></div>
  <div class="bdshare">
    <div class="bdsharebuttonbox"><a href="#" class="bds_more" data-cmd="more"></a><a href="#" class="bds_qzone" data-cmd="qzone" title="分享到QQ空间"></a><a href="#" class="bds_tsina" data-cmd="tsina" title="分享到新浪微博"></a><a href="#" class="bds_tqq" data-cmd="tqq" title="分享到腾讯微博"></a><a href="#" class="bds_renren" data-cmd="renren" title="分享到人人网"></a><a href="#" class="bds_weixin" data-cmd="weixin" title="分享到微信"></a><a href="#" class="bds_huaban" data-cmd="huaban" title="分享到花瓣"></a></div>
<script>window._bd_share_config={"common":{"bdSnsKey":{},"bdText":"","bdMini":"2","bdMiniList":false,"bdPic":"","bdStyle":"0","bdSize":"32"},"share":{}};with(document)0[(getElementsByTagName('head')[0]||body).appendChild(createElement('script')).src='http://bdimg.share.baidu.com/static/api/js/share.js?v=89860593.js?cdnversion='+~(-new Date()/36e5)];</script>
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


  

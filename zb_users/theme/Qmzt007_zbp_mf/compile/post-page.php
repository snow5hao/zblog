<div class="post single">
  <div class="article-header">
    <p><a href="<?php  echo $host;  ?>" title="首页">首页</a> » <a href="#" title="<?php  echo $article->Category->Name;  ?>"><?php  echo $article->Category->Name;  ?></a> » 正文</p>
	<h1 class="entry-title"><?php  echo $article->Title;  ?></h1>
  </div>
  <div class="post-body"><?php  echo $article->Content;  ?></div>
  <div class="list-tags"><?php if ($article->Tags) { ?><div><?php  foreach ( $article->Tags as $tag) { ?><a href="<?php  echo $tag->Url;  ?>">#<?php  echo $tag->Name;  ?></a><?php }   ?></div>
<?php } ?></div><div class="clear"></div>
  <div class="copyright">转载请注明来源：<a href="<?php  echo $article->Url;  ?>" title="<?php  echo $article->Title;  ?>"><?php  echo $article->Title;  ?></a> - <a href="<?php  echo $host;  ?>" title="<?php  echo $name;  ?>"><?php  echo $name;  ?></a></div><div class="clear"></div>
  <div class="bdshare">
    <div class="bdsharebuttonbox"><a href="#" class="bds_more" data-cmd="more"></a><a href="#" class="bds_qzone" data-cmd="qzone" title="分享到QQ空间"></a><a href="#" class="bds_tsina" data-cmd="tsina" title="分享到新浪微博"></a><a href="#" class="bds_tqq" data-cmd="tqq" title="分享到腾讯微博"></a><a href="#" class="bds_renren" data-cmd="renren" title="分享到人人网"></a><a href="#" class="bds_weixin" data-cmd="weixin" title="分享到微信"></a><a href="#" class="bds_huaban" data-cmd="huaban" title="分享到花瓣"></a></div>
<script>window._bd_share_config={"common":{"bdSnsKey":{},"bdText":"","bdMini":"2","bdMiniList":false,"bdPic":"","bdStyle":"0","bdSize":"32"},"share":{}};with(document)0[(getElementsByTagName('head')[0]||body).appendChild(createElement('script')).src='http://bdimg.share.baidu.com/static/api/js/share.js?v=89860593.js?cdnversion='+~(-new Date()/36e5)];</script>
  </div>
  <div class="related">
    <div class="related-title">你可能也喜欢：</div>
    <?php  $array=GetList($zbp->option['ZC_RELATEDLIST_COUNT'],null,null,null,null,null,array('is_related'=>$article->ID));;  ?>
    <ul id="related">
      <?php  foreach ( $array as $related) { ?>
        <li><span class="time"><?php  echo $related->Time('m-d');  ?></span>&nbsp;&nbsp;<span class="title"><a href="<?php  echo $related->Url;  ?>" title="<?php  echo $related->Title;  ?>"><?php  echo $related->Title;  ?></a></span></li>
      <?php }   ?>
    </ul>
  </div>
  
  <?php if (!$article->IsLock) { ?>
<?php  include $this->GetTemplate('comments');  ?>
<?php } ?>
  
</div>


  

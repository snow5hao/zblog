<div class="post single">
  <div class="article-header">
    <p><a href="<?php  echo $host;  ?>" title="首页">首页</a> » <a href="#" title="<?php  echo $article->Category->Name;  ?>"><?php  echo $article->Category->Name;  ?></a> » 正文</p>
	<h1 class="entry-title"><?php  echo $article->Title;  ?></h1>
    <div class="list-info"> <?php  echo $article->Time('Y年m月d日');  ?> | 分类:<a href="<?php  echo $category->Url;  ?>"><?php  echo $article->Category->Name;  ?></a> | 作者:<a href="<?php  echo $author->Url;  ?>"><?php  echo $article->Author->StaticName;  ?></a> | 评论:<a href="<?php  echo $article->Url;  ?>#comment"><?php  echo $article->CommNums;  ?></a>条评论 |  浏览:<?php  echo $article->ViewNums;  ?></div>
  </div>
  <div class="post-body"><?php  echo $article->Content;  ?></div>
  <div class="list-tags"><?php if ($article->Tags) { ?><div><?php  foreach ( $article->Tags as $tag) { ?><a href="<?php  echo $tag->Url;  ?>">#<?php  echo $tag->Name;  ?></a><?php }   ?></div>
<?php } ?></div><div class="clear"></div>
  <div class="copyright">转载请注明来源：<a href="<?php  echo $article->Url;  ?>" title="<?php  echo $article->Title;  ?>"><?php  echo $article->Title;  ?></a> - <a href="<?php  echo $host;  ?>" title="<?php  echo $name;  ?>"><?php  echo $name;  ?></a></div><div class="clear"></div>
  <div id="sx">
      <p class="l"><?php if ($article->Prev) { ?><a  href="<?php  echo $article->Prev->Url;  ?>" title="<?php  echo $article->Prev->Title;  ?>">上一篇</a><?php }else{  ?>没有了<?php } ?> </p>
      <p class="r"><?php if ($article->Next) { ?><a  href="<?php  echo $article->Next->Url;  ?>" title="<?php  echo $article->Next->Title;  ?>">下一篇</a><?php }else{  ?>没有了<?php } ?> </p>
  </div><div class="clear"></div>
  <div class="bdshare">
  <?php  echo $zbp->Config('Qmzt007_zbp_mf')->Qmpz_Share;  ?>
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


  

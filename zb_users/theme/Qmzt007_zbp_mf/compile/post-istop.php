<div class="list multi">
  <div class="list-title"><a href="<?php  echo $article->Url;  ?>"><span style="color:#F00">[置顶]<?php  echo $article->Title;  ?></a></span></div>
  <div class="list-info"> <?php  echo $article->Time('Y年m月d日');  ?> | 分类:<a href="<?php  echo $category->Url;  ?>"><?php  echo $article->Category->Name;  ?></a> | 作者:<a href="<?php  echo $author->Url;  ?>"><?php  echo $article->Author->StaticName;  ?></a> | 评论:<a href="<?php  echo $article->Url;  ?>#comment"><?php  echo $article->CommNums;  ?></a>条评论 |  浏览:<?php  echo $article->ViewNums;  ?></div>
  <div class="list-body"><?php $description = preg_replace('/[\r\n\s]+/', '', trim(SubStrUTF8(TransferHTML($article->Content,'[nohtml]'),250)).'...'); ?><?php  echo $description;  ?></div>
  <div class="list-footer">
    <div class="list-tags"><?php if ($article->Tags) { ?><div><?php  foreach ( $article->Tags as $tag) { ?><a href="<?php  echo $tag->Url;  ?>">#<?php  echo $tag->Name;  ?></a><?php }   ?></div>
<?php } ?></div>
    <div class="viewmore"><a href="<?php  echo $article->Url;  ?>">阅读全文»</a></div>
    <div class="clear"></div>
  </div>
</div>

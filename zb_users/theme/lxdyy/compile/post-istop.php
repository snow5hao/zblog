<?php if ($i%2 == 0) { ?>
<div class="post post-text post-left clearfix">
<?php }else{  ?>
<div class="post post-text post-right clearfix">
<?php } ?>
<?php 
$i=$i+1;
 ?>
	<div class="post-date">
    <span class="icon day"><?php  echo $article->Time('d');  ?></span>
    <span class="week"><a href="/?date=<?php  echo $article->Time('Y-m');  ?>"><?php  echo $article->Time('m月');  ?></a></span>
    <span class="date"><?php  echo $article->Time('Y年m月d日');  ?></span>
    </div>
    <div class="post-content">
    	<div class="sprite post-main-bg">
        	<div class="sprite post-main" data-url="<?php  echo $article->Url;  ?>" data-type="text">
            	<div class="mod-txt mod-text">
                <h2><a href="<?php  echo $article->Url;  ?>" title="<?php  echo $article->Title;  ?>"><?php  echo $article->Title;  ?></a></h2>
                <p><?php $description = preg_replace('/[\r\n\s]+/', '', trim(SubStrUTF8(TransferHTML($article->Content,'[nohtml]'),180)).'...'); ?>
<?php  echo $description;  ?></p><p class="edui-filter-align-center"><br /></p>
                </div>
            </div>
         </div>
     <div class="sprite post-meta">
     	<div class="author-avatar"><img src="<?php  echo $article->Author->Avatar;  ?>"></div>
        <h3><?php  echo $article->Author->Name;  ?></h3>
        <div class="tags"><table><tbody><tr><td><?php  foreach ( $article->Tags as $tag) { ?><a href="<?php  echo $tag->Url;  ?>"><?php  echo $tag->Name;  ?></a><?php }   ?></td></tr></tbody></table></div><div class="like clearfix"><?php  echo $article->Category->Name;  ?><a class="hot-num" href="<?php  echo $article->Url;  ?>"><?php  echo $article->CommNums;  ?>℃</a></div></div></div></div>
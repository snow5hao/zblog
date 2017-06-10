 

<h1 class="title"><?php  echo $article->Title;  ?></h1>
<small class="hui"><?php  echo $article->Time('Y-m-d');  ?> / <a href="<?php  echo $article->Category->Url;  ?>" title="查看<?php  echo $article->Category->Name;  ?>下的更多文章" target="_blank"><?php  echo $article->Category->Name;  ?></a> / <?php  echo $article->ViewNums;  ?> 次阅读 / <?php  echo $article->CommNums;  ?> 次评论  </small>

<div class="info-zi"><?php  echo $article->Content;  ?></div>

<div align="left">
	
	<?php  echo $zbp->Config('duo_tu')->PostFX;  ?>
	
	<div style="margin-top:20px; ">
	
	<?php if ($article->Prev) { ?>
	上一篇：
	<a  href="<?php  echo $article->Prev->Url;  ?>" title="<?php  echo $article->Prev->Title;  ?>"><?php  echo $article->Prev->Title;  ?></a> <?php } ?>
	<br />
	
	<?php if ($article->Next) { ?>
	下一篇：
	<a class="r" href="<?php  echo $article->Next->Url;  ?>" title="<?php  echo $article->Next->Title;  ?>"><?php  echo $article->Next->Title;  ?></a>
	<?php } ?><div class="clear"></div>
	<?php if (!$article->IsLock) { ?>
	<?php  include $this->GetTemplate('comments');  ?>
	<?php } ?>
	</div></div></article>

    <div class="projects-feed clearfix" id="newest">

     <ul>
       <?php if ($zbp->Config('yunduan')->related != 0) { ?>

<?php 
$relatedpad='';
$relatedtxt='';
$numm=$zbp->Config('duo_tu')->related;
if(count (GetList(4,null,null,null,null,null,array('is_related'=>$article->ID)))){
$array = GetList(4,null,null,null,null,null,array('is_related'=>$article->ID));
}else{
$array = Getlist(4,$article->Category->ID);
}
foreach ($array as $related) {
SF_img1::getPics($related,210,210,4);
if ($related->sf_img_count>0){
$rimg=$related->sf_img[0];
}else{
$rimg=$zbp->host.'zb_users/theme/duo_tu/style/images/rand/'.rand(1,20).'.jpg';
}

$relatedpad .= '<article><a href="'.$related->Url.'"><div class="thumb"><img width="210" height="210" src="'.$rimg.'" alt="'.$related->Title.'" /></div><div class="overlay"></div></a><h3 class="title"><a href="'.$related->Url.'" >'.$related->Title.'</a></h3></article>';
$relatedtxt .= '<li><a href="'.$related->Url.'" title="'.$related->Title.'"></a></li>';
}
 ?>
<?php  echo $relatedpad;  ?>
<div class="clear"></div>
<?php } ?>
      </ul>
                     
                   </div>
 <?php echo'<meta charset="UTF-8"><div style="text-align:center;padding:60px 0;font-size:16px;">
		<h2 style="font-size:60px;margin-bottom:32px;">傻傻看不清楚！</h2>
</div>';die();?>

<h1 class="title">{$article.Title}</h1>
<small class="hui">{$article.Time('Y-m-d')} / <a href="{$article.Category.Url}" title="查看{$article.Category.Name}下的更多文章" target="_blank">{$article.Category.Name}</a> / {$article.ViewNums} 次阅读 / {$article.CommNums} 次评论  </small>

<div class="info-zi">{$article.Content}</div>

<div align="left">
	
	{$zbp->Config('duo_tu')->PostFX}
	
	<div style="margin-top:20px; ">
	
	{if $article.Prev}
	上一篇：
	<a  href="{$article.Prev.Url}" title="{$article.Prev.Title}">{$article.Prev.Title}</a> {/if}
	<br />
	
	{if $article.Next}
	下一篇：
	<a class="r" href="{$article.Next.Url}" title="{$article.Next.Title}">{$article.Next.Title}</a>
	{/if}<div class="clear"></div>
	{if !$article.IsLock}
	{template:comments}
	{/if}
	</div></div></article>

    <div class="projects-feed clearfix" id="newest">

     <ul>
       {if $zbp->Config('yunduan')->related != 0}

{php}
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
{/php}
{$relatedpad}
<div class="clear"></div>
{/if}
      </ul>
                     
                   </div>
 <?php echo'<meta charset="UTF-8"><div style="text-align:center;padding:60px 0;font-size:16px;">
		<h2 style="font-size:60px;margin-bottom:32px;">傻傻看不清楚！</h2>
</div>';die();?>
{php}
              $pattern="/<[img|IMG].*?src=[\'|\"](.*?(?:[\.gif|\.jpg|\.png]))[\'|\"].*?[\/]?>/";
              $content = $article->Content;
              preg_match_all($pattern,$content,$matchContent);
{/php}
{if  isset($matchContent[1][0])}
<article class="project">
<a href="{$article.Url}" title="{$article.Title}">
<div class="thumb">
<div data-src="{duo_tu_FirstIMG($article,210,210)}"></div>
<div data-src="{duo_tu_FirstIMG($article,210,210)}" data-media="(-webkit-min-device-pixel-ratio: 2),(min--moz-device-pixel-ratio: 2),(-o-min-device-pixel-ratio: 2/1),(min-device-pixel-ratio: 2),(min-resolution: 192dpi),(min-resolution: 2dppx)"></div>	
<!--[if (lt IE 9) & (!IEMobile)]>
<div data-src="http://www.wutongyinji.com/wp-content/themes/seamodesign/img/nopng.png"></div>
<![endif]-->
<img width="210" height="210" src="{duo_tu_FirstIMG($article,210,210)}" class="attachment-index_img wp-post-image" alt="{$article.Title}" />                                                                                                       
</div>
<div class="overlay"></div>
</a>
<h3 class="title">[置顶] <a href="{$article.Url}" title="{$article.Title}">{$article.Title}</a></h3>		
<div class="tags">{$article.Time('Y-m-d')}</div>
</article>
{else}
<article class="project">
<a href="{$article.Url}" title="{$article.Title}">
<div class="thumb">
<div data-src="{duo_tu_FirstIMG($article,210,210)}"></div>
<div data-src="{duo_tu_FirstIMG($article,210,210)}" data-media="(-webkit-min-device-pixel-ratio: 2),(min--moz-device-pixel-ratio: 2),(-o-min-device-pixel-ratio: 2/1),(min-device-pixel-ratio: 2),(min-resolution: 192dpi),(min-resolution: 2dppx)"></div>	
<!--[if (lt IE 9) & (!IEMobile)]>
<div data-src="{$host}zb_users/theme/{$theme}/style/images/nopng.png"></div>
<![endif]-->
<img width="210" height="210" src="{$host}zb_users/theme/{$theme}/style/images/nopng.png" class="attachment-index_img wp-post-image" alt="{$article.Title}" />                                                                                                       
</div>
<div class="overlay"></div>
</a>
<h3 class="title">[置顶] <a href="{$article.Url}" title="{$article.Title}">{$article.Title}</a></h3>		
<div class="tags">{$article.Time('Y-m-d')}</div>
</article>
{/if}
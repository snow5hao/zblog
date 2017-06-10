 <?php echo'<meta charset="UTF-8"><div style="text-align:center;padding:60px 0;font-size:16px;">
		<h2 style="font-size:60px;margin-bottom:32px;">傻傻看不清楚！</h2>
</div>';die();?>

<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta name="viewport" content="width=device-width">
	<meta http-eqiv="X-UA-Compatible" content="IE=edge, chrome=1">
	<meta charset="utf-8">
	<meta http-equiv="Content-Language" content="{$language}" />
{if $type=='article'}
    <title>{$title}-{$article.Category.Name}-{$name}</title>
    <meta name="keywords" content="{foreach $article.Tags as $tag}{$tag.Name},{/foreach}" />
    <meta name="description" content="{$article.Title}是{$name}中一篇关于{foreach $article.Tags as $tag}{$tag.Name}{/foreach}的文章，欢迎您阅读和评论,{$name}" />
{elseif $type=='page'}
    <title>{$title}-{$name}</title>
    <meta name="keywords" content="{$title},{$name}"/>
    {php}$description = preg_replace('/[\r\n\s]+/', ' ', trim(SubStrUTF8(TransferHTML($article->Content,'[nohtml]'),135)).'...');{/php}
    <meta name="description" content="{$description}"/>
    <meta name="author" content="{$article.Author.StaticName}">
{elseif $type=='index'}
    <title>{$name}{if $page>'1'}-第{$pagebar.PageNow}页{/if}-{$subname}</title>
    <meta name="Keywords" content="{$zbp->Config('duo_tu')->PostGJC}">
    <meta name="description" content="{$zbp->Config('duo_tu')->PostMS}">
{elseif $type=='category'}
    <title>{$title}-{$name}-第{$pagebar.PageNow}页</title>
    <meta name="Keywords" content="{$title},{$name}">
    <meta name="description" content="{$category.Intro}">
{else}
    <title>{$title}-{$name}</title>
{/if}
    <link rel="stylesheet" type="text/css" href="{$host}zb_users/theme/{$theme}/style/style.css">
	<script src="{$host}zb_system/script/c_html_js_add.php" type="text/javascript"></script>
	<script src="{$host}zb_system/script/common.js" type="text/javascript"></script>
	<!--<script>this.top.location !== this.location && (this.top.location = this.location);</script>-->
<style>[touch-action="none"]{ -ms-touch-action: none; touch-action: none; }[touch-action="pan-x"]{ -ms-touch-action: pan-x; touch-action: pan-x; }[touch-action="pan-y"]{ -ms-touch-action: pan-y; touch-action: pan-y; }[touch-action="scroll"],[touch-action="pan-x pan-y"],[touch-action="pan-y pan-x"]{ -ms-touch-action: pan-x pan-y; touch-action: pan-x pan-y; }
a, a:visited { color: #b18247; text-decoration: none;}
.projects-feed .title a:hover { color: #b18247; }
.projects-feed .tags a:hover { color: #b18247; }
.project-meta a:hover { color: #b18247; }
nav a:hover,
nav .current_page_item a,
nav .current-project a,
nav .current-menu-item a { color: #b18247; }
.dunked-branding:hover { color: #b18247; }
nav .current_page_item a,
nav .current-project a,
nav .current-menu-item a,
nav a:hover { color: #b18247; }
.project-meta a {color: #696969;}
.bds_tools a {
background-image: url({$host}zb_users/theme/{$theme}/style/images/is.png) !important;
}
body * {
font-family: "Segoe UI",Arial,Helvetica,"Microsoft Jhenghei","Hiragino Sans GB","WenQuanYi Zen Hei","Microsoft Yahei",SimHei,STHeiti,"WenQuanYi Micro Hei",sans-serif !important;}
.site-title {font-size: 15px;margin-bottom: 25px;}
body{ background:url({$host}zb_users/theme/{$theme}/style/images/diy/bg.png) repeat fixed;}
.last_tj,.last_tj a{ font-size:11px; color:#eeeeee}
</style>
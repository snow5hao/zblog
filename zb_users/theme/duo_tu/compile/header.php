 

<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta name="viewport" content="width=device-width">
	<meta http-eqiv="X-UA-Compatible" content="IE=edge, chrome=1">
	<meta charset="utf-8">
	<meta http-equiv="Content-Language" content="<?php  echo $language;  ?>" />
<?php if ($type=='article') { ?>
    <title><?php  echo $title;  ?>-<?php  echo $article->Category->Name;  ?>-<?php  echo $name;  ?></title>
    <meta name="keywords" content="<?php  foreach ( $article->Tags as $tag) { ?><?php  echo $tag->Name;  ?>,<?php }   ?>" />
    <meta name="description" content="<?php  echo $article->Title;  ?>是<?php  echo $name;  ?>中一篇关于<?php  foreach ( $article->Tags as $tag) { ?><?php  echo $tag->Name;  ?><?php }   ?>的文章，欢迎您阅读和评论,<?php  echo $name;  ?>" />
<?php }elseif($type=='page') {  ?>
    <title><?php  echo $title;  ?>-<?php  echo $name;  ?></title>
    <meta name="keywords" content="<?php  echo $title;  ?>,<?php  echo $name;  ?>"/>
    <?php $description = preg_replace('/[\r\n\s]+/', ' ', trim(SubStrUTF8(TransferHTML($article->Content,'[nohtml]'),135)).'...'); ?>
    <meta name="description" content="<?php  echo $description;  ?>"/>
    <meta name="author" content="<?php  echo $article->Author->StaticName;  ?>">
<?php }elseif($type=='index') {  ?>
    <title><?php  echo $name;  ?><?php if ($page>'1') { ?>-第<?php  echo $pagebar->PageNow;  ?>页<?php } ?>-<?php  echo $subname;  ?></title>
    <meta name="Keywords" content="<?php  echo $zbp->Config('duo_tu')->PostGJC;  ?>">
    <meta name="description" content="<?php  echo $zbp->Config('duo_tu')->PostMS;  ?>">
<?php }elseif($type=='category') {  ?>
    <title><?php  echo $title;  ?>-<?php  echo $name;  ?>-第<?php  echo $pagebar->PageNow;  ?>页</title>
    <meta name="Keywords" content="<?php  echo $title;  ?>,<?php  echo $name;  ?>">
    <meta name="description" content="<?php  echo $category->Intro;  ?>">
<?php }else{  ?>
    <title><?php  echo $title;  ?>-<?php  echo $name;  ?></title>
<?php } ?>
    <link rel="stylesheet" type="text/css" href="<?php  echo $host;  ?>zb_users/theme/<?php  echo $theme;  ?>/style/style.css">
	<script src="<?php  echo $host;  ?>zb_system/script/c_html_js_add.php" type="text/javascript"></script>
	<script src="<?php  echo $host;  ?>zb_system/script/common.js" type="text/javascript"></script>
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
background-image: url(<?php  echo $host;  ?>zb_users/theme/<?php  echo $theme;  ?>/style/images/is.png) !important;
}
body * {
font-family: "Segoe UI",Arial,Helvetica,"Microsoft Jhenghei","Hiragino Sans GB","WenQuanYi Zen Hei","Microsoft Yahei",SimHei,STHeiti,"WenQuanYi Micro Hei",sans-serif !important;}
.site-title {font-size: 15px;margin-bottom: 25px;}
body{ background:url(<?php  echo $host;  ?>zb_users/theme/<?php  echo $theme;  ?>/style/images/diy/bg.png) repeat fixed;}
.last_tj,.last_tj a{ font-size:11px; color:#eeeeee}
</style><?php  echo $header;  ?>
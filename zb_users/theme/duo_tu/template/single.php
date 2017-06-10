 <?php echo'<meta charset="UTF-8"><div style="text-align:center;padding:60px 0;font-size:16px;">
		<h2 style="font-size:60px;margin-bottom:32px;">傻傻看不清楚！</h2>
</div>';die();?>

{template:header}
</head>
<body class="page-home  is_single  safari   safari" youdao="bind">

    <div id="wrapper" class="clearfix">
            {template:post-left}
            	<div id="content-wrapper">
			<div id="content">
            
            <article class="project">
			
<div class="project-assets">
<div class="image">
{if $article.Type==ZC_POST_TYPE_ARTICLE}
{template:post-single}
{else}
{template:post-page}
{/if}

</div>
</div>
{template:footer}
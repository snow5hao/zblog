 <?php echo'<meta charset="UTF-8"><div style="text-align:center;padding:60px 0;font-size:16px;">
		<h2 style="font-size:60px;margin-bottom:32px;">傻傻看不清楚！</h2>
</div>';die();?>

{template:header}
</head>
<body class="page-home is_home   safari" youdao="bind">

    <div id="wrapper" class="clearfix">
            {template:post-left}
            	<div id="content-wrapper">
			<div id="content">
            
            <div class="projects-feed clearfix">
												
{foreach $articles as $article}

{if $article.IsTop}
{template:post-istop}
{else}
{template:post-multi}
{/if}

{/foreach}

			<!--END .projects-feed-->
				</div>
               					
			<!--END #content-->
			</div>
			
			<div align="center">
			{if $pagebar.prevbutton}<a href="{$pagebar.prevbutton}" title="上一页">上一页</a>&nbsp;&nbsp;&nbsp;&nbsp;{/if}
			{if $pagebar.nextbutton}<a href="{$pagebar.nextbutton}" title="下一页">下一页</a>{/if}
			</div>
			
		<!--END #content-wrapper-->
		</div>

{template:footer}
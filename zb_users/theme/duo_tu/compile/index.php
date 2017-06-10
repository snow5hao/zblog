 

<?php  include $this->GetTemplate('header');  ?>
</head>
<body class="page-home is_home   safari" youdao="bind">

    <div id="wrapper" class="clearfix">
            <?php  include $this->GetTemplate('post-left');  ?>
            	<div id="content-wrapper">
			<div id="content">
            
            <div class="projects-feed clearfix">
												
<?php  foreach ( $articles as $article) { ?>

<?php if ($article->IsTop) { ?>
<?php  include $this->GetTemplate('post-istop');  ?>
<?php }else{  ?>
<?php  include $this->GetTemplate('post-multi');  ?>
<?php } ?>

<?php }   ?>

			<!--END .projects-feed-->
				</div>
               					
			<!--END #content-->
			</div>
			
			<div align="center">
			<?php if ($pagebar->prevbutton) { ?><a href="<?php  echo $pagebar->prevbutton;  ?>" title="上一页">上一页</a>&nbsp;&nbsp;&nbsp;&nbsp;<?php } ?>
			<?php if ($pagebar->nextbutton) { ?><a href="<?php  echo $pagebar->nextbutton;  ?>" title="下一页">下一页</a><?php } ?>
			</div>
			
		<!--END #content-wrapper-->
		</div>

<?php  include $this->GetTemplate('footer');  ?>
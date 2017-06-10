 

<?php  include $this->GetTemplate('header');  ?>
</head>
<body class="page-home  is_single  safari   safari" youdao="bind">

    <div id="wrapper" class="clearfix">
            <?php  include $this->GetTemplate('post-left');  ?>
            	<div id="content-wrapper">
			<div id="content">
            
            <article class="project">
			
<div class="project-assets">
<div class="image">
<?php if ($article->Type==ZC_POST_TYPE_ARTICLE) { ?>
<?php  include $this->GetTemplate('post-single');  ?>
<?php }else{  ?>
<?php  include $this->GetTemplate('post-page');  ?>
<?php } ?>

</div>
</div>
<?php  include $this->GetTemplate('footer');  ?>
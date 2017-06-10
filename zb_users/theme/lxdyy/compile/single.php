<?php  include $this->GetTemplate('header');  ?>
</head>
<body class="single-page">
<div id="wrap">
	<?php  include $this->GetTemplate('top');  ?>
	<div id="main">
    <?php if ($article->Type==ZC_POST_TYPE_ARTICLE) { ?>
	<?php  include $this->GetTemplate('post-single');  ?>
	<?php }else{  ?>
	<?php  include $this->GetTemplate('post-page');  ?>
	<?php } ?>
    </div>
</div>
<?php  include $this->GetTemplate('footer');  ?>

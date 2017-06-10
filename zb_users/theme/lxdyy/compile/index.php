<?php  include $this->GetTemplate('header');  ?>
</head>
<body>

<div id="wrap">
	<?php  include $this->GetTemplate('top');  ?>
	<div id="main">
<script type="text/javascript" src="<?php  echo $host;  ?>zb_users/theme/<?php  echo $theme;  ?>/js/jquery.bxslider.min.js"></script>
<script type="text/javascript">  
$(document).ready(function(){
$('.bxslider').bxSlider({       
auto: true});   
}); 
</script>
    <div class="hl_slider">
<ul class="bxslider">  
<?php  if(isset($modules['Setflash'])){echo $modules['Setflash']->Content;}  ?>
</ul> 
<img class="img" src="<?php  echo $host;  ?>zb_users/theme/<?php  echo $theme;  ?>/style/img/fengye.png">
</div>
	<?php 
	$i=1;
	 ?>
	<?php  foreach ( $articles as $article) { ?>
	<?php  include $this->GetTemplate('post-multi');  ?>
	<?php }   ?>
	</div>
</div>
<?php  include $this->GetTemplate('footer');  ?>
{template:header}
</head>
<body>

<div id="wrap">
	{template:top}
	<div id="main">
<script type="text/javascript" src="{$host}zb_users/theme/{$theme}/js/jquery.bxslider.min.js"></script>
<script type="text/javascript">  
$(document).ready(function(){
$('.bxslider').bxSlider({       
auto: true});   
}); 
</script>
    <div class="hl_slider">
<ul class="bxslider">  
{module:Setflash}
</ul> 
<img class="img" src="{$host}zb_users/theme/{$theme}/style/img/fengye.png">
</div>
	{php}
	$i=1;
	{/php}
	{foreach $articles as $article}
	{template:post-multi}
	{/foreach}
	</div>
</div>
{template:footer}
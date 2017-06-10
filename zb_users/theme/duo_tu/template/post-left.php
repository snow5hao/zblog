 <?php echo'<meta charset="UTF-8"><div style="text-align:center;padding:60px 0;font-size:16px;">
		<h2 style="font-size:60px;margin-bottom:32px;">傻傻看不清楚！</h2>
</div>';die();?>

<header id="header">
	<div class="site-title">
		<a href="{$host}"><img src="{$host}zb_users/theme/{$theme}/style/images/diy/logo.png" alt="{$name}" /></a>
	</div>
	<nav role="navigation">
		{if $type=='category'}
			{template:sidebar2}
		{elseif $type=='article'}
			{template:sidebar3}
		{else}
			{template:sidebar}
		{/if}
	</nav>
</header>
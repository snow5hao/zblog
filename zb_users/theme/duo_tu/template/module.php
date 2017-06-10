<?php echo'<meta charset="UTF-8"><div style="text-align:center;padding:60px 0;font-size:16px;"><h2 style="font-size:60px;margin-bottom:32px;">welcome to my website</h2>no content!</div>';die();?>

		<h3 class="{if ($module.IsHideTitle)&&($module.Name)}pages-nav-title{/if} nav-title"><a href="#pages-nav" class="">{$module.Name}</a></h3>
	

	{if $module.Type=='div'}
		<div class="hotpost widget_{$module.HtmlID}_inner">{$module.Content}</div>
	{/if}
	
	{if $module.Type=='ul'}
		<ul id="pages-nav" class="list-pages">{$module.Content}</ul>
	{/if}

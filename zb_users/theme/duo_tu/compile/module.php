

		<h3 class="<?php if (($module->IsHideTitle)&&($module->Name)) { ?>pages-nav-title<?php } ?> nav-title"><a href="#pages-nav" class=""><?php  echo $module->Name;  ?></a></h3>
	

	<?php if ($module->Type=='div') { ?>
		<div class="hotpost widget_<?php  echo $module->HtmlID;  ?>_inner"><?php  echo $module->Content;  ?></div>
	<?php } ?>
	
	<?php if ($module->Type=='ul') { ?>
		<ul id="pages-nav" class="list-pages"><?php  echo $module->Content;  ?></ul>
	<?php } ?>

<div id="header" class="clearfix">
    <?php if (isset($zbp->members[1])) { ?>
		<div id="logo" class="sprite">
			<div class="sprite circle">
				<a href="<?php  echo $host;  ?>" title="{name}"><img src="<?php  echo $zbp->members[1]->Avatar;  ?>" alt="<?php  echo $zbp->members[1]->Name;  ?>"></a>
			</div>
		</div>
		<div class="mod-right">
			<h1><a href="<?php  echo $host;  ?>" title="<?php  echo $name;  ?>"><?php  echo $zbp->members[1]->StaticName;  ?></a></h1>
			<div class="description"><?php  echo $zbp->members[1]->Intro;  ?></div>
            <?php } ?>
			
				<div class="tools">
					<div><ul id="header_menu" class="clearfix"><?php  if(isset($modules['navbar'])){echo $modules['navbar']->Content;}  ?></ul></div>
				</div>
				<form action="<?php  echo $host;  ?>zb_system/cmd.php?act=search" method="post" class="search">
					<input class="ipt-txt" type="text" name="q" value="搜索" onblur="if(this.value == '') { this.value='搜索'}" onfocus="if (this.value == '搜索') {this.value=''}" />
					<input class="icon sb " type="submit" value="" title="搜索" />
				</form>
			
		</div>
</div>
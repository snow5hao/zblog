 

<header id="header">
	<div class="site-title">
		<a href="<?php  echo $host;  ?>"><img src="<?php  echo $host;  ?>zb_users/theme/<?php  echo $theme;  ?>/style/images/diy/logo.png" alt="<?php  echo $name;  ?>" /></a>
	</div>
	<nav role="navigation">
		<?php if ($type=='category') { ?>
			<?php  include $this->GetTemplate('sidebar2');  ?>
		<?php }elseif($type=='article') {  ?>
			<?php  include $this->GetTemplate('sidebar3');  ?>
		<?php }else{  ?>
			<?php  include $this->GetTemplate('sidebar');  ?>
		<?php } ?>
	</nav>
</header>
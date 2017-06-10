	<body>
		<div class="homeHeader">
			<h1 class="logo">
				<?php  echo $name;  ?>
				
				<p class="logoText"><?php  echo $subname;  ?></p>
			</h1>
		</div>
		<!-- ./homeHeader End -->
		<div class="Nav">
			<div class="nav-icon"></div>
			<a class="nav-icon-light" id="top-icon-light"></a>
			<ul class="nav-items">
				<?php  if(isset($modules['navbar'])){echo $modules['navbar']->Content;}  ?>
			</ul>
		</div>
		<!-- ./Nav End -->
<?php  include $this->GetTemplate('header');  ?>


<?php  include $this->GetTemplate('c_top');  ?>

		<div class="containerTopbg">
			<div class="containerFootbg">
				<div class="homeCon">
					<div class="homeConList">
						
						<?php  foreach ( $articles as $article) { ?>
							<?php if ($article->IsTop) { ?>
							
								<?php  include $this->GetTemplate('post-istop');  ?>
								
							<?php } ?>
						<?php }   ?>
						
						<div class="conList">
							<ul>
								<?php  foreach ( $articles as $article) { ?>
									<?php if ($article->IsTop) { ?>
									<?php }else{  ?>
										<?php  include $this->GetTemplate('post-multi');  ?>
									<?php } ?>
									
								<?php }   ?>
							</ul>
						</div>
						<div class="conPage">
							<?php  include $this->GetTemplate('pagebar');  ?>
							
						</div>
					</div>
					<!-- ./homeConList -->
					<div class="rightSide">
						<div class="searchSide">
							<div class="search-bg">
								<?php  if(isset($modules['searchpanel'])){echo $modules['searchpanel']->Content;}  ?>
							</div>
						</div>
						<div class="someSide">
							<div class="sideTopBg"></div>
							<div class="sideCon">
								<?php  include $this->GetTemplate('c_right');  ?>
								
							</div>
							<div class="sideFootBg">
							</div>
						</div>
					</div>
					<!-- ./rightSide -->
				</div>
			</div>
		</div>
		<?php  include $this->GetTemplate('footer');  ?>
		
	

<?php  include $this->GetTemplate('header');  ?>


<?php  include $this->GetTemplate('c_top');  ?>

		<div class="containerTopbg">
			<div class="containerFootbg">
				<div class="homeCon">
					<?php if ($article->Type==ZC_POST_TYPE_ARTICLE) { ?>
						<?php  include $this->GetTemplate('post-single');  ?>
					<?php }else{  ?>
						<?php  include $this->GetTemplate('post-page');  ?>
					<?php } ?>
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
		
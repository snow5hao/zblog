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
						<div class="resource">
							<div class="resource-orb resource-orb-03"></div>
							<div class="resource-bot">
								<div class="resource-top resource-top-03">
									<div class="sideCon">
										<?php  include $this->GetTemplate('c_right');  ?>
									</div>
									
								</div>
							</div>
						</div>
					</div>
					<!-- ./rightSide -->
				</div>
			</div>
		</div>
		<?php  include $this->GetTemplate('footer');  ?>
		
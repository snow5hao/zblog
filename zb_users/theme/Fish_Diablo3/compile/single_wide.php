<?php  include $this->GetTemplate('header');  ?>


<?php  include $this->GetTemplate('c_top');  ?>

		<div class="containerTopbg">
			<div class="containerFootbg">
				<div class="homeCon homeCon-2">
					<?php if ($article->Type==ZC_POST_TYPE_ARTICLE) { ?>
						<?php  include $this->GetTemplate('post-single');  ?>
					<?php }else{  ?>
						<?php  include $this->GetTemplate('post-page');  ?>
					<?php } ?>
				</div>
			</div>
		</div>
		<?php  include $this->GetTemplate('footer');  ?>
		
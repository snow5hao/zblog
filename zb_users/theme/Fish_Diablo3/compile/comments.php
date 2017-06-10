<div class="blogComments">
	<div class="topBg"></div>
	<div class="comment-con">
		<?php if ($socialcomment) { ?>
			<?php  echo $socialcomment;  ?>
		<?php }else{  ?>
			
			<?php  include $this->GetTemplate('commentpost');  ?>
			
			<label id="AjaxCommentBegin"></label>
			<!--评论输出-->
			<?php  foreach ( $comments as $key => $comment) { ?>
				<?php  include $this->GetTemplate('comment');  ?>
			<?php }   ?>
			
			<!--评论翻页条输出-->
			<div class="conPage">
				<?php  include $this->GetTemplate('pagebar');  ?>
				
			</div>
			<label id="AjaxCommentEnd"></label>
		<?php } ?>
	</div>
	<div class="footBg"></div>
</div>
<div class="ds-post-main" id="cmt<?php  echo $comment->ID;  ?>">
		<div class="ds-avatar">
			<a title="<?php  echo $comment->Author->Name;  ?>" href="<?php  echo $comment->Author->HomePage;  ?>" target="_blank"><img alt="<?php  echo $comment->Author->Name;  ?>" src="<?php  echo $comment->Author->Avatar;  ?>"></a>
		</div>
		<div class="ds-comment-body">
			<a title="<?php  echo $comment->Author->Name;  ?>" href="<?php  echo $comment->Author->HomePage;  ?>" target="_blank" class="user-name"><?php  echo $comment->Author->Name;  ?></a>发布于&nbsp;<?php  echo $comment->Time();  ?><span class="revertcomment"><a href="#comment" onclick="RevertComment('<?php  echo $comment->ID;  ?>')">回复该评论</a></span>
			<p><?php  echo $comment->Content;  ?></p>
			<?php  foreach ( $comment->Comments as $comment) { ?>
<?php  include $this->GetTemplate('comment');  ?>
<?php }   ?>
		</div>
</div>
<div class="comment-list">
	<ul id="cmt<?php  echo $comment->ID;  ?>">
		<li>
			<div class="head">
				<?php 
					$headrand = mt_rand(1,24);
					$headIMG = $zbp->host."zb_users/theme/$theme/style/img/head/$headrand.png";
				 ?>
				<img class="avatar" src="<?php  echo $headIMG;  ?>" />
				<div class="comment-head-border"></div>
			</div>
			<div class="con">
				<div class="comment">
					<span class="comment-li">
						<a href="<?php  echo $comment->Author->HomePage;  ?>" rel="nofollow" target="_blank"><?php  echo $comment->Author->StaticName;  ?></a>
					</span>
					<span class="comment-li">于</span>
					<span class="comment-li"><div class="num"><?php  echo $comment->Time();  ?></div></span>
					<span class="comment-li"><a href="#comment" class="back" onclick="RevertComment('<?php  echo $comment->ID;  ?>')">回复该评论</a></span>
				</div>
				<?php  echo $comment->Content;  ?>
				<?php  foreach ( $comment->Comments as $comment) { ?>
					<?php  include $this->GetTemplate('comment');  ?>
				<?php }   ?>
			</div>
		</li>
	</ul>
</div>
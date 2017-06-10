<div class="comment-list">
	<ul id="cmt{$comment.ID}">
		<li>
			<div class="head">
				{php}
					$headrand = mt_rand(1,24);
					$headIMG = $zbp->host."zb_users/theme/$theme/style/img/head/$headrand.png";
				{/php}
				<img class="avatar" src="{$headIMG}" />
				<div class="comment-head-border"></div>
			</div>
			<div class="con">
				<div class="comment">
					<span class="comment-li">
						<a href="{$comment.Author.HomePage}" rel="nofollow" target="_blank">{$comment.Author.StaticName}</a>
					</span>
					<span class="comment-li">于</span>
					<span class="comment-li"><div class="num">{$comment.Time()}</div></span>
					<span class="comment-li"><a href="#comment" class="back" onclick="RevertComment('{$comment.ID}')">回复该评论</a></span>
				</div>
				{$comment.Content}
				{foreach $comment.Comments as $comment}
					{template:comment}
				{/foreach}
			</div>
		</li>
	</ul>
</div>
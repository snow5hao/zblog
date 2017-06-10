<div class="ds-post-main" id="cmt{$comment.ID}">
		<div class="ds-avatar">
			<a title="{$comment.Author.Name}" href="{$comment.Author.HomePage}" target="_blank"><img alt="{$comment.Author.Name}" src="{$comment.Author.Avatar}"></a>
		</div>
		<div class="ds-comment-body">
			<a title="{$comment.Author.Name}" href="{$comment.Author.HomePage}" target="_blank" class="user-name">{$comment.Author.Name}</a>发布于&nbsp;{$comment.Time()}<span class="revertcomment"><a href="#comment" onclick="RevertComment('{$comment.ID}')">回复该评论</a></span>
			<p>{$comment.Content}</p>
			{foreach $comment.Comments as $comment}
{template:comment}
{/foreach}
		</div>
</div>
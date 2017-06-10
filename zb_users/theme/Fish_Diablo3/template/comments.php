<div class="blogComments">
	<div class="topBg"></div>
	<div class="comment-con">
		{if $socialcomment}
			{$socialcomment}
		{else}
			
			{template:commentpost}
			
			<label id="AjaxCommentBegin"></label>
			<!--评论输出-->
			{foreach $comments as $key => $comment}
				{template:comment}
			{/foreach}
			
			<!--评论翻页条输出-->
			<div class="conPage">
				{template:pagebar}
				
			</div>
			<label id="AjaxCommentEnd"></label>
		{/if}
	</div>
	<div class="footBg"></div>
</div>
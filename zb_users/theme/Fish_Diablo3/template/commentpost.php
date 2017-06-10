<div class="comment-ipt">
	<div class="head">
		<div class="comment-head">
			{if $user.ID>0}
				<img class="avatar" src="{$host}zb_users/theme/{$theme}/style/img/head/0.png" />
			{else}
				<img class="avatar" src="{$host}zb_users/theme/{$theme}/style/img/head/25.png" />
			{/if}
			<div class="comment-head-border"></div>
		</div>
	</div>
	<div class="ipt" id="divCommentPost">
		<div class="comment-form" id="comment">
			<form id="frmSumbit" target="_self" method="post" action="{$article.CommentPostUrl}" >
				<input type="hidden" name="inpId" id="inpId" value="{$article.ID}" />
				<input type="hidden" name="inpRevID" id="inpRevID" value="0" />
				{if $user.ID>0}
					<input type="hidden" name="inpName" id="inpName" value="{$user.Name}" />
					<input type="hidden" name="inpEmail" id="inpEmail" value="{$user.Email}" />
					<input type="hidden" name="inpHomePage" id="inpHomePage" value="{$user.HomePage}" />
				{else}
					<input type="text" class="ipt" name="inpName" id="inpName" value="{$user.Name}" />
					<input type="text" class="ipt" name="inpEmail" id="inpEmail" value="{$user.Email}" />
					<input type="text" class="ipt" name="inpHomePage" id="inpHomePage" value="{$user.HomePage}" />
				{/if}
				<textarea type="text" name="txaArticle" id="txaArticle" class="textarea" ></textarea>
				{if $option['ZC_COMMENT_VERIFY_ENABLE']}
					<input type="text" class="ipt" name="inpVerify" id="inpVerify"  value="" />
					
					<img style="width:{$option['ZC_VERIFYCODE_WIDTH']}px;height:{$option['ZC_VERIFYCODE_HEIGHT']}px;cursor:pointer;" src="{$article.ValidCodeUrl}" alt="" title="" onclick="javascript:this.src='{$article.ValidCodeUrl}&amp;tm='+Math.random();"/>
					</p>
				{/if}
				<input name="sumbit" type="submit" tabindex="6" onclick="return VerifyMessage()" value="发表评论" class="button"/>
			</form>
		</div>
	</div>
</div>

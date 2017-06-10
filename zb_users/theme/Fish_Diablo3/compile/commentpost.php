<div class="comment-ipt">
	<div class="head">
		<div class="comment-head">
			<?php if ($user->ID>0) { ?>
				<img class="avatar" src="<?php  echo $host;  ?>zb_users/theme/<?php  echo $theme;  ?>/style/img/head/0.png" />
			<?php }else{  ?>
				<img class="avatar" src="<?php  echo $host;  ?>zb_users/theme/<?php  echo $theme;  ?>/style/img/head/25.png" />
			<?php } ?>
			<div class="comment-head-border"></div>
		</div>
	</div>
	<div class="ipt" id="divCommentPost">
		<div class="comment-form" id="comment">
			<form id="frmSumbit" target="_self" method="post" action="<?php  echo $article->CommentPostUrl;  ?>" >
				<input type="hidden" name="inpId" id="inpId" value="<?php  echo $article->ID;  ?>" />
				<input type="hidden" name="inpRevID" id="inpRevID" value="0" />
				<?php if ($user->ID>0) { ?>
					<input type="hidden" name="inpName" id="inpName" value="<?php  echo $user->Name;  ?>" />
					<input type="hidden" name="inpEmail" id="inpEmail" value="<?php  echo $user->Email;  ?>" />
					<input type="hidden" name="inpHomePage" id="inpHomePage" value="<?php  echo $user->HomePage;  ?>" />
				<?php }else{  ?>
					<input type="text" class="ipt" name="inpName" id="inpName" value="<?php  echo $user->Name;  ?>" />
					<input type="text" class="ipt" name="inpEmail" id="inpEmail" value="<?php  echo $user->Email;  ?>" />
					<input type="text" class="ipt" name="inpHomePage" id="inpHomePage" value="<?php  echo $user->HomePage;  ?>" />
				<?php } ?>
				<textarea type="text" name="txaArticle" id="txaArticle" class="textarea" ></textarea>
				<?php if ($option['ZC_COMMENT_VERIFY_ENABLE']) { ?>
					<input type="text" class="ipt" name="inpVerify" id="inpVerify"  value="" />
					
					<img style="width:<?php  echo $option['ZC_VERIFYCODE_WIDTH'];  ?>px;height:<?php  echo $option['ZC_VERIFYCODE_HEIGHT'];  ?>px;cursor:pointer;" src="<?php  echo $article->ValidCodeUrl;  ?>" alt="" title="" onclick="javascript:this.src='<?php  echo $article->ValidCodeUrl;  ?>&amp;tm='+Math.random();"/>
					</p>
				<?php } ?>
				<input name="sumbit" type="submit" tabindex="6" onclick="return VerifyMessage()" value="发表评论" class="button"/>
			</form>
		</div>
	</div>
</div>

{template:header}


{template:c_top}

		<div class="containerTopbg">
			<div class="containerFootbg">
				<div class="homeCon homeCon-2">
					{if $article.Type==ZC_POST_TYPE_ARTICLE}
						{template:post-single}
					{else}
						{template:post-page}
					{/if}
				</div>
			</div>
		</div>
		{template:footer}
		
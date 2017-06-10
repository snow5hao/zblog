{template:header}


{template:c_top}

		<div class="containerTopbg">
			<div class="containerFootbg">
				<div class="homeCon">
					{if $article.Type==ZC_POST_TYPE_ARTICLE}
						{template:post-single}
					{else}
						{template:post-page}
					{/if}
					<div class="rightSide">
						<div class="searchSide">
							<div class="search-bg">
								{module:searchpanel}
							</div>
						</div>
						<div class="resource">
							<div class="resource-orb resource-orb-05"></div>
							<div class="resource-bot">
								<div class="resource-top resource-top-05">
									<div class="sideCon">
										{template:c_right}
									</div>
									
								</div>
							</div>
						</div>
					</div>
					<!-- ./rightSide -->
				</div>
			</div>
		</div>
		{template:footer}
		
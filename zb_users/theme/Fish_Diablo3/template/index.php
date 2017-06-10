{template:header}


{template:c_top}

		<div class="containerTopbg">
			<div class="containerFootbg">
				<div class="homeCon">
					<div class="homeConList">
						
						{foreach $articles as $article}
							{if $article.IsTop}
							
								{template:post-istop}
								
							{/if}
						{/foreach}
						
						<div class="conList">
							<ul>
								{foreach $articles as $article}
									{if $article.IsTop}
									{else}
										{template:post-multi}
									{/if}
									
								{/foreach}
							</ul>
						</div>
						<div class="conPage">
							{template:pagebar}
							
						</div>
					</div>
					<!-- ./homeConList -->
					<div class="rightSide">
						<div class="searchSide">
							<div class="search-bg">
								{module:searchpanel}
							</div>
						</div>
						<div class="someSide">
							<div class="sideTopBg"></div>
							<div class="sideCon">
								{template:c_right}
								
							</div>
							<div class="sideFootBg">
							</div>
						</div>
					</div>
					<!-- ./rightSide -->
				</div>
			</div>
		</div>
		{template:footer}
		
	

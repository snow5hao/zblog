<div class="homeConList">
						<div class="blogConMain">
							<div class="blog-bg">
								<div class="blogLeft-bg">
									<div class="blogRight-bg">
										<div class="blogConBg">
											<div class="top-bg">
												<div class="left-ico"><img src="{$host}zb_users/theme/{$theme}/style/img/top-left.png"></div>
												<div class="right-ico"><img src="{$host}zb_users/theme/{$theme}/style/img/top-right.png"></div>
											</div>
										</div>
										<div class="blog-cbg"></div>
										<div class="blogCon">
											<h2 class="blogTitle">
												{$article.Title}
											</h2>
											
											<div class="blog-con">
												{$article.Content}
											</div>
										</div>
										<div class="blogConBg">
											<div class="foot-bg">
												<div class="left-ico"><img src="{$host}zb_users/theme/{$theme}/style/img/foot-left.png"></div>
												<div class="right-ico"><img src="{$host}zb_users/theme/{$theme}/style/img/foot-right.png"></div>
											</div>
										</div>
									</div>
								</div>
							</div>
							{if !$article.IsLock}
								{template:comments}
							{/if}
						</div>
					</div>
					<!-- ./homeConList -->

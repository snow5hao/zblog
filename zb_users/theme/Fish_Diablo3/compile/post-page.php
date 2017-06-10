<div class="homeConList">
						<div class="blogConMain">
							<div class="blog-bg">
								<div class="blogLeft-bg">
									<div class="blogRight-bg">
										<div class="blogConBg">
											<div class="top-bg">
												<div class="left-ico"><img src="<?php  echo $host;  ?>zb_users/theme/<?php  echo $theme;  ?>/style/img/top-left.png"></div>
												<div class="right-ico"><img src="<?php  echo $host;  ?>zb_users/theme/<?php  echo $theme;  ?>/style/img/top-right.png"></div>
											</div>
										</div>
										<div class="blog-cbg"></div>
										<div class="blogCon">
											<h2 class="blogTitle">
												<?php  echo $article->Title;  ?>
											</h2>
											
											<div class="blog-con">
												<?php  echo $article->Content;  ?>
											</div>
										</div>
										<div class="blogConBg">
											<div class="foot-bg">
												<div class="left-ico"><img src="<?php  echo $host;  ?>zb_users/theme/<?php  echo $theme;  ?>/style/img/foot-left.png"></div>
												<div class="right-ico"><img src="<?php  echo $host;  ?>zb_users/theme/<?php  echo $theme;  ?>/style/img/foot-right.png"></div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<?php if (!$article->IsLock) { ?>
								<?php  include $this->GetTemplate('comments');  ?>
							<?php } ?>
						</div>
					</div>
					<!-- ./homeConList -->

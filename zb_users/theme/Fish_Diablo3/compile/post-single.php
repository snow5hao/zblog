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
											<div class="title_sub">
												<span class="time"><?php  echo $article->Time('Y-m-d H:i:s');  ?></span>
											</div>
											<div class="blog-con">
												<?php  echo $article->Content;  ?>
												
											</div>
											<div class="comment">
												<span class="comment-li">作者：<a href="<?php  echo $article->Author->HomePage;  ?>" target="_blank"><?php  echo $article->Author->Name;  ?></a></span>
												<span class="comment-li">分类：<a href="<?php  echo $article->Category->Url;  ?>"><?php  echo $article->Category->Name;  ?></a></span>
												<span class="comment-li">浏览：<a class="num"><?php  echo $article->ViewNums;  ?></a></span>
												<span class="comment-li last">评论：<a class="num"><?php  echo $article->CommNums;  ?></a></span>
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
							<div class="blogLink">
								<a href="<?php  echo $article->Prev->Url;  ?>" class="left">上一篇文章： <?php  echo $article->Prev->Title;  ?></a>
								<a href="<?php  echo $article->Next->Url;  ?>" class="right">下一篇</a>
							</div>
							<?php if (!$article->IsLock) { ?>
								<?php  include $this->GetTemplate('comments');  ?>
							<?php } ?>
						</div>
					</div>
					<!-- ./homeConList -->
					

				<div class="mod-map">
				</div>
				<div class="post-date">
					<span class="icon day"><?php  echo $article->Time('d');  ?></span>
					<span class="week"><a href="/?date=<?php  echo $article->Time('Y-m');  ?>"><?php  echo $article->Time('m月');  ?></a></span>
					<span class="date"><?php  echo $article->Time('Y年m月d日');  ?></span>
				</div>
				<div class="article-wrap">
					<div class="article  clearfix">
						<div class="single-post text rich-content">
									<div class="post-title">
										<h3><?php  echo $article->Title;  ?></h3>
									</div>
								<div class="post-text-body">
									<?php  echo $article->Content;  ?>
								</div>
						</div>
                        <div class="mod-tags">
							<div class="hd">
								<span class="icon tag"></span>
							</div>
							<span><?php  foreach ( $article->Tags as $tag) { ?><a href="<?php  echo $tag->Url;  ?>"><?php  echo $tag->Name;  ?></a><?php }   ?></span>
                        </div>
						<div id="notes">
						<?php if (!$article->IsLock) { ?>
						<?php  include $this->GetTemplate('comments');  ?>
						<?php } ?>
							
						</div>
					</div>
					<div class="article-btm">
					</div>
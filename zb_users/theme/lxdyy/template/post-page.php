				<div class="mod-map">
				</div>
				<div class="post-date">
					<span class="icon day">{$article.Time('d')}</span>
					<span class="week"><a href="/?date={$article.Time('Y-m')}">{$article.Time('m月')}</a></span>
					<span class="date">{$article.Time('Y年m月d日')}</span>
				</div>
				<div class="article-wrap">
					<div class="article  clearfix">
						<div class="single-post text rich-content">
									<div class="post-title">
										<h3>{$article.Title}</h3>
									</div>
								<div class="post-text-body">
									{$article.Content}
								</div>
						</div>
                        <div class="mod-tags">
							<div class="hd">
								<span class="icon tag"></span>
							</div>
							<span>{foreach $article.Tags as $tag}<a href="{$tag.Url}">{$tag.Name}</a>{/foreach}</span>
                        </div>
						<div id="notes">
						{if !$article.IsLock}
						{template:comments}
						{/if}
							
						</div>
					</div>
					<div class="article-btm">
					</div>
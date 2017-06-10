<li>
									<a href="{$article.Url}" class="listCon">
										{php}
											$firstIMG2=mt_rand(1,4);
											$pattern="/<[img|IMG].*?src=[\'|\"](.*?(?:[\.gif|\.jpg|\.png]))[\'|\"].*?[\/]?>/";
											$content = $article->Content;
											preg_match_all($pattern,$content,$matchContent);
											if(isset($matchContent[1][0]))
												$firstIMG2=$matchContent[1][0];
											else
												$firstIMG2=$zbp->host."zb_users/theme/$theme/style/img/random/$firstIMG2.jpg";
										{/php}
										<div class="listIMG"><img src="{$firstIMG2}" /></div>
										
										<h4>{$article.Title}</h4>
										<p>
											{php}
											    $intro2= preg_replace('/[\r\n\s]+/', '', trim(SubStrUTF8(TransferHTML($article->Intro,'[nohtml]'),80)).'...');
											{/php}
											{$intro2}
										</p>
									</a>
									<p class="comment">
										<a href="{$article.Url}">
											<span class="commentPic"></span>
											<span class="commentNum">{$article.CommNums}</span>
										</a>
										<span class="time">{$article.Time('Y-m-d')}</span>
									</p>
								</li><!-- ./li -->
<li>
									<a href="<?php  echo $article->Url;  ?>" class="listCon">
										<?php 
											$firstIMG2=mt_rand(1,4);
											$pattern="/<[img|IMG].*?src=[\'|\"](.*?(?:[\.gif|\.jpg|\.png]))[\'|\"].*?[\/]?>/";
											$content = $article->Content;
											preg_match_all($pattern,$content,$matchContent);
											if(isset($matchContent[1][0]))
												$firstIMG2=$matchContent[1][0];
											else
												$firstIMG2=$zbp->host."zb_users/theme/$theme/style/img/random/$firstIMG2.jpg";
										 ?>
										<div class="listIMG"><img src="<?php  echo $firstIMG2;  ?>" /></div>
										
										<h4><?php  echo $article->Title;  ?></h4>
										<p>
											<?php 
											    $intro2= preg_replace('/[\r\n\s]+/', '', trim(SubStrUTF8(TransferHTML($article->Intro,'[nohtml]'),80)).'...');
											 ?>
											<?php  echo $intro2;  ?>
										</p>
									</a>
									<p class="comment">
										<a href="<?php  echo $article->Url;  ?>">
											<span class="commentPic"></span>
											<span class="commentNum"><?php  echo $article->CommNums;  ?></span>
										</a>
										<span class="time"><?php  echo $article->Time('Y-m-d');  ?></span>
									</p>
								</li><!-- ./li -->
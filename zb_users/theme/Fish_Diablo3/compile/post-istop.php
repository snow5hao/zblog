<div class="topList">
							<div class="listImg">
								<?php 
									$firstIMG=mt_rand(1,4);
									$pattern="/<[img|IMG].*?src=[\'|\"](.*?(?:[\.gif|\.jpg|\.png]))[\'|\"].*?[\/]?>/";
									$content = $article->Content;
									preg_match_all($pattern,$content,$matchContent);
									if(isset($matchContent[1][0]))
										$firstIMG=$matchContent[1][0];
									else
										$firstIMG=$zbp->host."zb_users/theme/$theme/style/img/random/$firstIMG.jpg";
								 ?>
								
								<img src="<?php  echo $firstIMG;  ?>" />
								<span class="img-border"></span>
							</div>
							<div class="listTitle">
								<h3><a href="<?php  echo $article->Url;  ?>"><?php  echo $article->Title;  ?></a></h3>
								<div class="abstract">
									<?php 
									    $intro= preg_replace('/[\r\n\s]+/', '', trim(SubStrUTF8(TransferHTML($article->Intro,'[nohtml]'),120)).'...');
									 ?>
									<?php  echo $intro;  ?>
								</div>
							</div>
						</div>
						<!-- ./topList -->
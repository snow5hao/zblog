 

<h1 class="title"><?php  echo $article->Title;  ?></h1>
<small class="hui"><?php  echo $article->Time('Y-m-d');  ?> /  <?php  echo $article->ViewNums;  ?> 次围观 / <?php  echo $article->CommNums;  ?> 次吐槽  </small>


<div class="info-zi"><?php  echo $article->Content;  ?></div>

<div align="left">
<?php if (!$article->IsLock) { ?>
<?php  include $this->GetTemplate('comments');  ?>
<?php } ?>


</div>
</article>    
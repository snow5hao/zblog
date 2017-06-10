<?php  include $this->GetTemplate('header');  ?>
<div id="divMid">
  <div id="divMain">
      <?php if ($article->Type==ZC_POST_TYPE_ARTICLE) { ?>
      <?php  include $this->GetTemplate('post-single');  ?>
      <?php }else{  ?>
      <?php  include $this->GetTemplate('post-page');  ?>
      <?php } ?>
    <div class="pagebar"><?php  include $this->GetTemplate('pagebar');  ?></div>
  </div>
  <div id="divSidebar"><?php  include $this->GetTemplate('sidebar');  ?></div>
</div><div class="clear"></div>
<?php  include $this->GetTemplate('footer');  ?>
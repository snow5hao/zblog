<?php  include $this->GetTemplate('header');  ?>
  <div id="divMid">

    <div id="divMain">
      <div>
        <?php if ($type=='index'&&$page=='1') { ?>
          <div class="slider">
            <a href="http://www.linxueyu.com" target="_blank">
              <img width="750" height="150" src="http://<?php echo $_SERVER['SERVER_NAME']?>/zb_users/theme/Qmzt007_zbp_mf/style/img/home.jpg">
            </a>
          </div>
        <?php }else{  ?>
          <div class="space">
            <h4>
              <a href="<?php  echo $host;  ?>" title="<?php  echo $name;  ?>">网站首页</a>
              <?php if ($type=='category') { ?> >> <a class="n2" href="<?php  echo $category->Url;  ?>"><?php  echo $category->Name;  ?></a><?php } ?>
              <?php if ($type=='article') { ?> >> <a class="n3" href="<?php  echo $article->Url;  ?>"><?php  echo $article->Title;  ?></a><?php } ?>
              <?php if ($type=='page') { ?> >> <a class="n4" href="<?php  echo $page->Url;  ?>"><?php  echo $page->Title;  ?></a><?php } ?>
              <?php if ($type=='tag') { ?> >> <a class="n5" href="<?php  echo $tag->Url;  ?>"><?php  echo $title;  ?></a><?php } ?>
            </h4>
          </div>
        <?php } ?>
      </div><div class="clear"></div>

      <!--1 -->
      <?php  foreach ( $articles as $article) { ?>
        <?php if ($article->IsTop) { ?>
          <?php  include $this->GetTemplate('post-istop');  ?>
        <?php }else{  ?>
          <?php  include $this->GetTemplate('post-multi');  ?>
        <?php } ?>
      <?php }   ?>
      <div class="pagebar"><?php  include $this->GetTemplate('pagebar');  ?></div>
    </div>
    <div id="divSidebar"><?php  include $this->GetTemplate('sidebar');  ?></div>
  </div>

  <div class="clear"></div>


<?php  include $this->GetTemplate('footer');  ?>
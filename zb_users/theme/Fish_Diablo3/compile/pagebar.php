<ul>
<?php if ($pagebar) { ?>
<?php  foreach ( $pagebar->buttons as $k=>$v) { ?>
    <?php if ($pagebar->PageNow==$k) { ?>
    <li><a class="action"></a></li>
    <?php }elseif($k=='‹‹') {  ?>
    <a href="<?php  echo $v;  ?>" class="left"></a>
    <?php }elseif($k=='››') {  ?>
    <a href="<?php  echo $v;  ?>" class="right"></a>
    <?php }elseif($k=='‹') {  ?>
    
    <?php }elseif($k=='›') {  ?>
    
    <?php }else{  ?>
    <li><a href="<?php  echo $v;  ?>"></a></li>
    <?php } ?>
<?php }   ?>
<?php } ?>
</ul>

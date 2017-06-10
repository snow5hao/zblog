<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
<?php if ($type=='index'&&$page=='1') { ?>
<title><?php  echo $name;  ?>-<?php  echo $title;  ?></title>
<?php }else{  ?>
<title><?php  echo $title;  ?>-<?php  echo $name;  ?></title>
<?php } ?>
<link rel="stylesheet" href="<?php  echo $host;  ?>zb_users/theme/<?php  echo $theme;  ?>/style/<?php  echo $style;  ?>.css" type="text/css" media="screen" />
<script type="text/javascript" src="<?php  echo $host;  ?>zb_users/theme/<?php  echo $theme;  ?>/script/jquery-1.7-latest.js"></script>
<script src="<?php  echo $host;  ?>zb_system/script/common.js" type="text/javascript"></script>
<script src="<?php  echo $host;  ?>zb_system/script/c_html_js_add.php" type="text/javascript"></script>
<script src="<?php  echo $host;  ?>zb_users/theme/<?php  echo $theme;  ?>/script/custom.js" type="text/javascript"></script><?php  echo $header;  ?>
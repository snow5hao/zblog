<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php  echo $language;  ?>" lang="<?php  echo $language;  ?>">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<meta http-equiv="Content-Language" content="<?php  echo $language;  ?>" />
	<title><?php  echo $name;  ?>-<?php  echo $title;  ?></title>
	<meta name="generator" content="<?php  echo $zblogphp;  ?>" />
	<link rel="stylesheet" rev="stylesheet" href="<?php  echo $host;  ?>zb_users/theme/<?php  echo $theme;  ?>/style/<?php  echo $style;  ?>.css" type="text/css" media="all"/>
	<script src="<?php  echo $host;  ?>zb_system/script/common.js" type="text/javascript"></script>
	<script src="<?php  echo $host;  ?>zb_system/script/c_html_js_add.php" type="text/javascript"></script>
	<script src="<?php  echo $host;  ?>zb_users/theme/<?php  echo $theme;  ?>/script/custom.js" type="text/javascript"></script>
<?php  echo $header;  ?>
<?php if ($type=='index'&&$page=='1') { ?>
	<link rel="alternate" type="application/rss+xml" href="<?php  echo $feedurl;  ?>" title="<?php  echo $name;  ?>" />
	<link rel="EditURI" type="application/rsd+xml" title="RSD" href="<?php  echo $host;  ?>zb_system/xml-rpc/?rsd" />
	<link rel="wlwmanifest" type="application/wlwmanifest+xml" href="<?php  echo $host;  ?>zb_system/xml-rpc/wlwmanifest.xml" />
<?php } ?>
</head>
<body class="multi <?php  echo $type;  ?>">
<header>
  <div class="top">
    <div class="container">
      <div class="top-left">
        <div class="logo"></div>
        <div class="name"><?php  echo $subname;  ?></div>
      </div>
      <div class="top-right">
        <ul class="social">
          <li class="sina-weibo"><a href="#" title="新浪微博" target="_blank"></a></li>
          <li class="tengxun-weibo"><a href="#" title="腾讯微博" target="_blank"></a></li>
          <li class="e-mail"><a href="#" title="电子邮件" target="_blank"></a></li>
          <li class="rss-feed"><a href="feed.php" title="订阅" target="_blank"></a></li>
        </ul>
      </div>
    </div>
  </div>
  <nav id="nav">
    <div class="container">
      <div class="navbar"><ul>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp春水初生，春林初盛，十里春风，不如你</ul></div>
      <form class="searchform" method="post" action="<?php  echo $host;  ?>zb_system/cmd.php?act=search">
	    <input class="form-control" value="" placeholder="这里有你想要的" type="text" name="q" size="15">
	    <input class="searchsubmit" type="submit" value="搜索">
      </form>	
    </div>
  </nav>
</header>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="{$language}" lang="{$language}">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<meta http-equiv="Content-Language" content="{$language}" />
	<title>{$name}-{$title}</title>
	<meta name="generator" content="{$zblogphp}" />
	<link rel="stylesheet" rev="stylesheet" href="{$host}zb_users/theme/{$theme}/style/{$style}.css" type="text/css" media="all"/>
	<script src="{$host}zb_system/script/common.js" type="text/javascript"></script>
	<script src="{$host}zb_system/script/c_html_js_add.php" type="text/javascript"></script>
	<script src="{$host}zb_users/theme/{$theme}/script/custom.js" type="text/javascript"></script>
{$header}
{if $type=='index'&&$page=='1'}
	<link rel="alternate" type="application/rss+xml" href="{$feedurl}" title="{$name}" />
	<link rel="EditURI" type="application/rsd+xml" title="RSD" href="{$host}zb_system/xml-rpc/?rsd" />
	<link rel="wlwmanifest" type="application/wlwmanifest+xml" href="{$host}zb_system/xml-rpc/wlwmanifest.xml" />
{/if}
</head>
<body class="multi {$type}">
<header>
  <div class="top">
    <div class="container">
      <div class="top-left">
        <div class="logo"></div>
        <div class="name">{$subname}</div>
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
      <div class="navbar"><ul>&nbsp&nbsp&nbsp&nbsp春水初生，春林初盛，十里春风，不如你</ul></div>
      <form class="searchform" method="post" action="{$host}zb_system/cmd.php?act=search">
	    <input class="form-control" value="" placeholder="这里有你想要的" type="text" name="q" size="15">
	    <input class="searchsubmit" type="submit" value="搜索">
      </form>	
    </div>
  </nav>
</header>

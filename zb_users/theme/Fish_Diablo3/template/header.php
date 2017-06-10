<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>{$name}-{$title}</title>
		<meta name="generator" content="{$zblogphp}" />
		<link rel="stylesheet" href="{$host}zb_users/theme/{$theme}/style/css/reset.css" />
		<link rel="stylesheet" href="{$host}zb_users/theme/{$theme}/style/style.css" />
		<script type="text/javascript" src="{$host}zb_users/theme/{$theme}/script/jquery.min.js" ></script>
		<script type="text/javascript" src="{$host}zb_users/theme/{$theme}/script/script.js" ></script>
		<script src="{$host}zb_system/script/common.js" type="text/javascript"></script>
		<script src="{$host}zb_system/script/c_html_js_add.php" type="text/javascript"></script>
		{$header}
		
		{if $type=='index'&&$page=='1'}
			<link rel="alternate" type="application/rss+xml" href="{$feedurl}" title="{$name}" />
			<link rel="EditURI" type="application/rsd+xml" title="RSD" href="{$host}zb_system/xml-rpc/?rsd" />
			<link rel="wlwmanifest" type="application/wlwmanifest+xml" href="{$host}zb_system/xml-rpc/wlwmanifest.xml" />
		{/if}
		
	</head>
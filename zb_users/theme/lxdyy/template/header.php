<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
{if $type=='index'&&$page=='1'}
<title>{$name}-{$title}</title>
{else}
<title>{$title}-{$name}</title>
{/if}
<link rel="stylesheet" href="{$host}zb_users/theme/{$theme}/style/{$style}.css" type="text/css" media="screen" />
<script type="text/javascript" src="{$host}zb_users/theme/{$theme}/script/jquery-1.7-latest.js"></script>
<script src="{$host}zb_system/script/common.js" type="text/javascript"></script>
<script src="{$host}zb_system/script/c_html_js_add.php" type="text/javascript"></script>
<script src="{$host}zb_users/theme/{$theme}/script/custom.js" type="text/javascript"></script>
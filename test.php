<?php
$link=mysql_connect(SAE_MYSQL_HOST_M.":".SAE_MYSQL_PORT,SAE_MYSQL_USER,SAE_MYSQL_PASS) or die("connect host fail");
mysql_select_db(SAE_MYSQL_DB,$link) or die("connect db fail");
mysql_query("set charset utf-8");
var_dump($link);

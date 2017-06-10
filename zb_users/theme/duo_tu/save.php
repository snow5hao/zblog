<?php
require '../../../zb_system/function/c_system_base.php';
require '../../../zb_system/function/c_system_admin.php';

$zbp->Load();
$action='root';
if (!$zbp->CheckRights($action)) {$zbp->ShowError(6);die();}
if (!$zbp->CheckPlugin('duo_tu')) {$zbp->ShowError(48);die();}
//背景图
if($_GET['type'] == 'base' ){
	global $zbp;
	foreach ($_FILES as $key => $value) {
		if(!strpos($key, "_php")){
			if (is_uploaded_file($_FILES[$key]['tmp_name'])) {
				$tmp_name = $_FILES[$key]['tmp_name'];
				$name = $_FILES[$key]['name'];
				@move_uploaded_file($_FILES[$key]['tmp_name'], $zbp->usersdir . 'theme/duo_tu/style/images/diy/bg.png');

			}
		}
	}
	$zbp->SetHint('good','修改成功');
	Redirect('./main.php?act=base');
}
//上传logo
if($_GET['type'] == 'basee' ){
	global $zbp;
	foreach ($_FILES as $key => $value) {
		if(!strpos($key, "_php")){
			if (is_uploaded_file($_FILES[$key]['tmp_name'])) {
				$tmp_name = $_FILES[$key]['tmp_name'];
				$name = $_FILES[$key]['name'];
				@move_uploaded_file($_FILES[$key]['tmp_name'], $zbp->usersdir . 'theme/duo_tu/style/images/diy/logo.png');

			}
		}
	}
	$zbp->SetHint('good','修改成功');
	Redirect('./main.php?act=basee');
}

if($_GET['type'] == 'baseee' ){
	global $zbp;
	foreach ($_FILES as $key => $value) {
		if(!strpos($key, "_php")){
			if (is_uploaded_file($_FILES[$key]['tmp_name'])) {
				$tmp_name = $_FILES[$key]['tmp_name'];
				$name = $_FILES[$key]['name'];
				@move_uploaded_file($_FILES[$key]['tmp_name'], $zbp->usersdir . 'theme/duo_tu/style/images/diy/ewm.png');

			}
		}
	}
	$zbp->SetHint('good','修改成功');
	Redirect('./main.php?act=baseee');
}

if($_GET['type'] == 'baseeee' ){
	global $zbp;
	foreach ($_FILES as $key => $value) {
		if(!strpos($key, "_php")){
			if (is_uploaded_file($_FILES[$key]['tmp_name'])) {
				$tmp_name = $_FILES[$key]['tmp_name'];
				$name = $_FILES[$key]['name'];
				@move_uploaded_file($_FILES[$key]['tmp_name'], $zbp->usersdir . 'theme/duo_tu/style/images/nopng.png');

			}
		}
	}
	$zbp->SetHint('good','修改成功');
	Redirect('./main.php?act=baseeee');
}

?>
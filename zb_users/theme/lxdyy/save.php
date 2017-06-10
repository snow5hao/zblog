<?php
require '../../../zb_system/function/c_system_base.php';
require '../../../zb_system/function/c_system_admin.php';

$zbp->Load();
$action='root';
if (!$zbp->CheckRights($action)) {$zbp->ShowError(6);die();}
if (!$zbp->CheckPlugin('lxdyy')) {$zbp->ShowError(48);die();}

if($_GET['type'] == 'flash' ){
	global $zbp;
	
	if(!$_POST["title"] or !$_POST["img"] or !$_POST["url"]){
		$zbp->SetHint('bad','标题或图片或链接不能为空');
		Redirect('./main.php?act=flash');
		exit();
	}
	
	$DataArr = array(
		'sean_Title'=>$_POST["title"],
		'sean_Img'=>$_POST["img"],
		'sean_Url'=>$_POST["url"],
		'sean_Order'=>$_POST["order"],
		'sean_IsUsed'=>$_POST["IsUsed"]
	);

	if($_POST["editid"]){
		$where = array(array('=','sean_ID',$_POST["editid"]));
		$sql= $zbp->db->sql->Update($SeanCms_Table,$DataArr,$where);
		$zbp->db->Update($sql);
	}else{
		$sql= $zbp->db->sql->Insert($SeanCms_Table,$DataArr);
		$zbp->db->Insert($sql);
	}
	lxdyy_Get_Flash($SeanCms_Table,$SeanCms_DataInfo);
	$zbp->SetHint('good','幻灯保存成功');
	Redirect('./main.php?act=flash');
}

if($_GET['type'] == 'flashdel' ){
	global $zbp;
	$where = array(array('=','sean_ID',$_GET['id']));
	$sql= $zbp->db->sql->Delete($SeanCms_Table,$where);
	$zbp->db->Delete($sql);
	lxdyy_Get_Flash($SeanCms_Table,$SeanCms_DataInfo);
	$zbp->SetHint('good','删除成功');
	Redirect('./main.php?act=flash');
}


?>
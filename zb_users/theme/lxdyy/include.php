<?php
include 'tc_lx_config.php';
RegisterPlugin("lxdyy","ActivePlugin_lxdyy");

function ActivePlugin_lxdyy(){
	Add_Filter_Plugin('Filter_Plugin_Admin_TopMenu','lxdyy_AddMenu');
}

function lxdyy_AddMenu(&$m){
	global $zbp;
	array_unshift($m, MakeTopMenu("root",'主题配置',$zbp->host . "zb_users/theme/lxdyy/main.php?act=flash","","topmenu_lxdyy"));
}

function InstallPlugin_lxdyy(){
	global $zbp;
	if(!$zbp->Config('lxdyy')->HasKey('Version')){
		$zbp->Config('lxdyy')->Version = '1.0';
		$zbp->SaveConfig('lxdyy');
		lxdyy_CreateTable();
		lxdyy_DefaultCode();
	}
}

function lxdyy_CreateTable(){
	global $zbp;
	$s=$zbp->db->sql->CreateTable($GLOBALS['SeanCms_Table'],$GLOBALS['SeanCms_DataInfo']);
	$zbp->db->QueryMulit($s);
}

function lxdyy_DefaultCode(){
	global $zbp;
	$Arr_DF = explode('|',base64_decode($GLOBALS['DEFALUT_FLASH']));
	$r = new Base($GLOBALS['SeanCms_Table'],$GLOBALS['SeanCms_DataInfo']);
	$r->Title=$Arr_DF[0];
	$r->Img=$Arr_DF[1];
	$r->Url=$Arr_DF[2];
	$r->Save();
	$s = new Base($GLOBALS['SeanCms_Table'],$GLOBALS['SeanCms_DataInfo']);
	$s->Type=99;
	$s->Code='';
	$s->Save();
}


function UninstallPlugin_lxdyy(){
	global $zbp;
	lxdyyCms_EmptyCode();
	$zbp->DelConfig('lxdyy');
}

function lxdyyCms_EmptyCode(){
	global $zbp;
	$s=$zbp->db->sql->Delete($GLOBALS['SeanCms_Table'],'');
	$zbp->db->QueryMulit($s);
}
?>
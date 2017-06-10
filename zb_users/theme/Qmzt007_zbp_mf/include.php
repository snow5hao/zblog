<?php
#注册插件
RegisterPlugin("Qmzt007_zbp_mf","ActivePlugin_Qmzt007_zbp_mf");

function ActivePlugin_Qmzt007_zbp_mf(){
	Add_Filter_Plugin('Filter_Plugin_Admin_TopMenu','Qmzt007_zbp_mf_AddMenu');
	Add_Filter_Plugin('Filter_Plugin_ViewPost_Template','Qmzt007_zbp_mf_tags_set');
}

function Qmzt007_zbp_mf_AddMenu(&$m){
	global $zbp;
	array_unshift($m, MakeTopMenu("root",'主题配置',$zbp->host . "zb_users/theme/Qmzt007_zbp_mf/main.php?act=config","","topmenu_Qmzt007_zbp_mf"));
}

function Qmzt007_zbp_mf_SubMenu($id){
	$arySubMenu = array(
		0 => array('主题设置', 'config', 'left', false),

	);
	foreach($arySubMenu as $k => $v){
		echo '<a href="?act='.$v[1].'" '.($v[3]==true?'target="_blank"':'').'><span class="m-'.$v[2].' '.($id==$v[1]?'m-now':'').'">'.$v[0].'</span></a>';
	}
}

//调用标签
function Qmzt007_zbp_mf_tags_set(&$template){
	global $zbp;
	$template->SetTags('Qmzt007_zbp_mf_Qmpz_Share',$zbp->Config('Qmzt007_zbp_mf')->Qmpz_Share);
}

//安装主题
function InstallPlugin_Qmzt007_zbp_mf(){
	global $zbp;
	if(!$zbp->Config('Qmzt007_zbp_mf')->HasKey('Version')){
		$zbp->Config('Qmzt007_zbp_mf')->Version = '1.0';
		$zbp->Config('Qmzt007_zbp_mf')->Qmpz_Share ='';
		$zbp->SaveConfig('Qmzt007_zbp_mf');
	}
}

//卸载主题
function UninstallPlugin_Qmzt007_zbp_mf(){
	global $zbp;
	$zbp->DelConfig('Qmzt007_zbp_mf');
}
?>
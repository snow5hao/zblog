<?php
$DEFALUT_FLASH="5qyi6L+O5L2/55SoUEhQ54mI5pys5peF6KGM55qE5oSP5LmJIXx6Yl91c2Vycy90aGVtZS9seGR5eS9zdHlsZS9pbWcvMS5qcGd8aHR0cDovL3d3dy5zb25nemhlbmppYW5nLmNuLw==";
$SeanCms_Table='%pre%DmengCms';
$SeanCms_DataInfo=array(
	'ID'=>array('sean_ID','integer','',0),
	'Type'=>array('sean_Type','integer','',0),
	'Title'=>array('sean_Title','string',255,''),
	'Url'=>array('sean_Url','string',255,''),
	'Img'=>array('sean_Img','string',255,''),
	'Order'=>array('sean_Order','integer','',99),
	'Code'=>array('sean_Code','string',255,''),
	'IsUsed'=>array('sean_IsUsed','boolean','',true),
	'Intro'=>array('sean_Intro','string',255,''),
	'Addtime'=>array('sean_Addtime','integer','',0),
	'Endtime'=>array('sean_Endtime','integer','',0),
);
$SeanCms_Default_Data = array('new','hot','comm','rand');

function lxdyy_SubMenu($id){
	$arySubMenu = array(
		0 => array('幻灯设置', 'flash', 'left', false),
	);
	foreach($arySubMenu as $k => $v){
		echo '<a href="?act='.$v[1].'" '.($v[3]==true?'target="_blank"':'').'><span class="m-'.$v[2].' '.($id==$v[1]?'m-now':'').'">'.$v[0].'</span></a>';
	}
}

function lxdyy_Get_Flash($SeanCms_Table,$SeanCms_DataInfo){
	global $zbp;
	$where = array(array('=','sean_Type','0'),array('=','sean_IsUsed','1'));
	$order = array('sean_IsUsed'=>'DESC','sean_Order'=>'ASC');
	$sql= $zbp->db->sql->Select($SeanCms_Table,'*',$where,$order,null,null);
	$array=$zbp->GetListCustom($SeanCms_Table,$SeanCms_DataInfo,$sql);
	$str = "";
	foreach ($array as $key => $reg) {
		$str .= "<li><a href='".$reg->Url."' target='_blank' ><img alt='".$reg->Title."' src='".$reg->Img."'/></a></li>";
	}
	@file_put_contents($zbp->usersdir . 'theme/lxdyy/include/Setflash.php', $str);
}

function lxdyy_Get_Content($str){
	global $zbp;
	$strContent = @file_get_contents($zbp->usersdir . $str);
	echo $strContent;
}
?>
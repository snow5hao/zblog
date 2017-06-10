<?php
RegisterPlugin("duo_tu","ActivePlugin_duo_tu");


function ActivePlugin_duo_tu(){
Add_Filter_Plugin('Filter_Plugin_Admin_TopMenu','duo_tu_AddMenu');
Add_Filter_Plugin('Filter_Plugin_ViewPost_Template','duo_tu_tags_set');
}

function duo_tu_AddMenu(&$m){
global $zbp;
	array_unshift($m, MakeTopMenu("root",'多图主题配置',$zbp->host . "zb_users/theme/duo_tu/main.php","","topmenu_duo_tu"));
}

function duo_tu_Thumbs($src,$width,$height) {
    global $zbp;
    if (!$zbp->CheckPlugin('sf_img1')) {
        $thumbs_src=$src;
    } else {
        $thumbs_src=SF_img1::getPicUrlBy($src,$width,$height,4);
    }
    return $thumbs_src;
}

function duo_tu_FirstIMG($as,$width,$height) {
    global $zbp;   
    $temp=mt_rand(1,3);
    $pattern = "/<img.*src\s*=\s*[\"|\']?\s*([^>\"\'\s]*)/i";   
    $content = $as->Content;
    preg_match_all($pattern,$content,$matchContent);
    if(isset($matchContent[1][0])){
        $temp=$matchContent[1][0];
    } else {
        $temp=$zbp->host . "zb_users/theme/" .$zbp->theme. "/include/random/" .$temp. ".jpg";
    }
    $src = duo_tu_Thumbs($temp,$width,$height);
    return $src;
}


function duo_tu_tags_set(&$template){
	global $zbp;
    $template->SetTags('duo_tu_MS',$zbp->Config('duo_tu')->PostMS);
    $template->SetTags('duo_tu_GJC',$zbp->Config('duo_tu')->PostGJC);
	$template->SetTags('duo_tu_FX',$zbp->Config('duo_tu')->PostFX);
}

function InstallPlugin_duo_tu(){
	global $zbp;
	if(!$zbp->Config('duo_tu')->HasKey('Version')){
		$zbp->Config('duo_tu')->Version = '1.0';
		$zbp->Config('duo_tu')->PostMS = '网站描述';
		$zbp->Config('duo_tu')->PostGJC = '网站关键词';
		$zbp->Config('duo_tu')->PostTJ = '这里放统计代码';
		$zbp->SaveConfig('duo_tu');
	}
}

//卸载主题
function UninstallPlugin_duo_tu(){
	global $zbp;
}


?>
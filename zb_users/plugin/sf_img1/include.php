<?php
#注册插件
RegisterPlugin("sf_img1","ActivePlugin_sf_img1");
require dirname(__FILE__).'/thumbHander.php';
require dirname(__FILE__).'/sf_img1.php';
function ActivePlugin_sf_img1() {
	
}

function sf_img1_deleteDir($dirName){ 
	if(is_dir($dirName)){
		if ( $handle = opendir( "$dirName" ) ) {  
			while ( false !== ( $item = readdir( $handle ) ) ) {  
				if ( $item != "." && $item != ".." ) {  
					if ( is_dir( "$dirName/$item" ) ) {  
						sf_img1_deleteDir( "$dirName/$item" );  
					} else {  
						unlink( "$dirName/$item" );
					}
				}  
			}  
	   }  
		closedir( $handle );  
		rmdir( $dirName );
	}
}

function InstallPlugin_sf_img1() {
	global $zbp;
	if(!$zbp->Config('sf_img1')->HasKey('version')) {
		$zbp->Config('sf_img1')->version=1.0;
		$zbp->Config('sf_img1')->checkhost=0;
		$zbp->Config('sf_img1')->on=1;
		$zbp->Config('sf_img1')->otherurl="";
		$zbp->Config('sf_img1')->changeurl=0;
		$zbp->SaveConfig('sf_img1');	
	}
}
function UninstallPlugin_sf_img1() {
	global $zbp;
	global $blogpath;
	$file=$blogpath.'zb_users/plugin/sf_img1/cache/';
	if(file_exists($file)){
		sf_img1_deleteDir($file);
	}
	$zbp->DelConfig('sf_img1');
}

//tclip($blogpath.'zb_users/plugin/sf_img1/daolian.jpg', $blogpath.'zb_users/plugin/sf_img1/daolian1.jpg',10,10);
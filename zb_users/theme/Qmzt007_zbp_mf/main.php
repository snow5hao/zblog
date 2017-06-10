<?php
require '../../../zb_system/function/c_system_base.php';
require '../../../zb_system/function/c_system_admin.php';

$zbp->Load();
$action='root';
if (!$zbp->CheckRights($action)) {$zbp->ShowError(6);die();}
if (!$zbp->CheckPlugin('Qmzt007_zbp_mf')) {$zbp->ShowError(48);die();}
$blogtitle='仿站系列之仿宋颖个人博客主题';

$act = "";
if ($_GET['act']){
$act = $_GET['act'] == "" ? 'config' : $_GET['act'];
}

require $blogpath . 'zb_system/admin/admin_header.php';
require $blogpath . 'zb_system/admin/admin_top.php';
//基本设置
if(isset($_POST['Qmpz_Share'])){
	$zbp->Config('Qmzt007_zbp_mf')->Qmpz_Share = $_POST['Qmpz_Share'];
	$zbp->SaveConfig('Qmzt007_zbp_mf');
	$zbp->ShowHint('good');
}
?>

<div id="divMain">
	<div class="divHeader"><?php echo $blogtitle;?></div>
	<div class="SubMenu">
	<?php Qmzt007_zbp_mf_SubMenu($act);?>
        <a href="http://www.linxueyu.com" target="_blank"><span class="m-left">主题页面</span></a>
    </div>

<div id="divMain1">
<?php if ($act == 'config') { ?>
<form enctype="multipart/form-data" method="post" action="save.php?type=base">	
  <table width="100%" style='padding:0;margin:0;' cellspacing='0' cellpadding='0' class="tableBorder">
    <tr>
      <td width="30%"><label for="logo.png"><p align="center">上传LOGO(默认为200*50，背景透明，文字白色)</p></label></td>
      <td width="43%"><p align="center"><input name="logo.png" type="file"/></p></td>
      <td width="27%"><p align="center"><input name="" type="Submit" class="button" value="保存"/></p></td>
    </tr>
  </table>
</form>
<form id="form2" name="form2" method="post">
  <table width="100%" style='padding:0;margin:0;' cellspacing='0' cellpadding='0' class="tableBorder">
	<tr>
      <td width="30%"><label for="Qmpz_Share"></label><p align="center">文章页分享代码<br />此处添加百度分享或其它分享代码<br />如不需要留空即可</p></td>
      <td width="43%"><p><textarea name="Qmpz_Share" type="text" id="Qmpz_Share"  style="width:98%; height:65px"><?php echo $zbp->Config('Qmzt007_zbp_mf')->Qmpz_Share;?></textarea></p></td>
      <td width="27%"><p align="center"><input name="" type="Submit" class="button" value="保存"/></p></td>
        </tr>
  </table>
</form>
</div><!--/divMain1 -->
<?php } ?> 

</div><!--/divMain -->

<script type="text/javascript">ActiveTopMenu("topmenu_Qmzt007_zbp_mf");</script> 
<?php
require $blogpath . 'zb_system/admin/admin_footer.php';
RunTime();
?>
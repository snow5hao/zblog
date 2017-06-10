<?php
require '../../../zb_system/function/c_system_base.php';
require '../../../zb_system/function/c_system_admin.php';

$zbp->Load();
$action='root';
if (!$zbp->CheckRights($action)) {$zbp->ShowError(6);die();}
if (!$zbp->CheckPlugin('duo_tu')) {$zbp->ShowError(48);die();}
$blogtitle='多图主题配置';

require $blogpath . 'zb_system/admin/admin_header.php';
require $blogpath . 'zb_system/admin/admin_top.php';

if(isset($_POST['PostMS'])){
  $zbp->Config('duo_tu')->PostMS = $_POST['PostMS'];
  $zbp->Config('duo_tu')->PostGJC = $_POST['PostGJC'];
  $zbp->Config('duo_tu')->PostTJ = $_POST['PostTJ'];
  $zbp->Config('duo_tu')->Postba = $_POST['Postba'];
  $zbp->SaveConfig('duo_tu');
  $zbp->ShowHint('good');
}
?>
<div id="divMain">
  <div class="divHeader"><?php echo $blogtitle;?></div>
  <div id="divMain2">
      <form enctype="multipart/form-data" method="post" action="save.php?type=basee">  
    <table width="100%" style='padding:0;margin:0;' cellspacing='0' cellpadding='0' class="tableBorder">
  <tr>
    <td width="15%"><label for="logo.png"><p align="center">上传logo 176x111px PNG</p></label></td>
	<td width="15%"><p align="center"><img src="style/images/diy/logo.png" height="50px;" /></p></td>
    <td width="40%"><p align="center"><input name="logo.png" type="file"/></p></td>
  <td width="25%"><p align="center"><input name="" type="Submit" class="button" value="保存"/></p></td>
  </tr>
</table>
    </form>
	  <form enctype="multipart/form-data" method="post" action="save.php?type=base">  
    <table width="100%" style='padding:0;margin:0;' cellspacing='0' cellpadding='0' class="tableBorder">
  <tr>
    <td width="15%"><label for="bg.png"><p align="center">上传网页背景(平铺展示) PNG</p></label></td>
	<td width="15%"><p align="center"><img src="style/images/diy/bg.png" height="50px;" /></p></td>
    <td width="40%"><p align="center"><input name="bg.png" type="file"/></p></td>
  <td width="25%"><p align="center"><input name="" type="Submit" class="button" value="保存"/></p></td>
  </tr>
</table>
    </form>
	<form enctype="multipart/form-data" method="post" action="save.php?type=baseee">  
    <table width="100%" style='padding:0;margin:0;' cellspacing='0' cellpadding='0' class="tableBorder">
  <tr>
    <td width="15%"><label for="ewm.png"><p align="center">二维码 64x64px PNG</p></label></td>
	<td width="15%"><p align="center"><img src="style/images/diy/ewm.png" height="50px;" /></p></td>
    <td width="40%"><p align="center"><input name="ewm.png" type="file"/></p></td>
  <td width="25%"><p align="center"><input name="" type="Submit" class="button" value="保存"/></p></td>
  </tr>
</table>
    </form>
	<form enctype="multipart/form-data" method="post" action="save.php?type=baseeee">  
    <table width="100%" style='padding:0;margin:0;' cellspacing='0' cellpadding='0' class="tableBorder">
  <tr>
    <td width="15%"><label for="nopng.png"><p align="center">无图文章替代图210x210px PNG</p></label></td>
	<td width="15%"><p align="center"><img src="style/images/nopng.png" height="50px;" /></p></td>
    <td width="40%"><p align="center"><input name="nopng.png" type="file"/></p></td>
  <td width="25%"><p align="center"><input name="" type="Submit" class="button" value="保存"/></p></td>
  </tr>
</table>
    </form>

  
  
  <form id="form1" name="form1" method="post">  
    <table width="100%" style='padding:0;margin:0;' cellspacing='0' cellpadding='0' class="tableBorder">
  <tr>
    <th width="15%"><p align="center">配置名称</p></th>
    <th width="50%"><p align="center">配置内容</p></th>
  <th width="25%"><p align="center">配置说明</p></th>
  </tr>

        <tr>
    <td><label for="PostMS"><p align="center">网站描述</p></label></td>
    <td><p align="left"><textarea name="PostMS" type="text" id="PostMS" style="width:98%;"><?php echo $zbp->Config('duo_tu')->PostMS;?></textarea></p></td>
  <td><p align="left">首页网站描述</p></td>
  </tr>
  
          <tr>
    <td><label for="PostGJC"><p align="center">网站关键词</p></label></td>
    <td><p align="left"><textarea name="PostGJC" type="text" id="PostGJC" style="width:98%;"><?php echo $zbp->Config('duo_tu')->PostGJC;?></textarea></p></td>
  <td><p align="left">首页网站关键词</p></td>
  </tr>

<tr>
    <td><label for="Postba"><p align="center">备案号</p></label></td>
    <td><p align="left"><textarea name="Postba" type="text" id="Postba" style="width:98%;"><?php echo $zbp->Config('duo_tu')->Postba;?></textarea></p></td>
    <td><p align="left">请在这里放置你的备案号，没有就空着</p></td>
</tr> 


<tr>
    <td><label for="PostTJ"><p align="center">统计代码JS</p></label></td>
    <td><p align="left"><textarea name="PostTJ" type="text" id="PostTJ" style="width:98%;"><?php echo $zbp->Config('duo_tu')->PostTJ;?></textarea></p></td>
    <td><p align="left">请在这里放置你的统计代码</p></td>
</tr> 

</table>
 <br />
   <input name="" type="Submit" class="button" value="保存"/>
    </form>
<br />
  </div>
</div>
<script type="text/javascript">ActiveTopMenu("topmenu_duo_tu");</script> 
<?php
require $blogpath . 'zb_system/admin/admin_footer.php';
RunTime();
?>

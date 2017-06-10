<?php
require '../../../zb_system/function/c_system_base.php';
require '../../../zb_system/function/c_system_admin.php';
$zbp->Load();
$action='root';
if (!$zbp->CheckRights($action)) {$zbp->ShowError(6);die();}
if (!$zbp->CheckPlugin('sf_img1')) {$zbp->ShowError(48);die();}

$blogtitle='缩略图插件';
require $blogpath . 'zb_system/admin/admin_header.php';
require $blogpath . 'zb_system/admin/admin_top.php';
?>

<?php


$actiontype=GetVars('actiontype', 'POST');
if($actiontype == "set1"){
	$zbp->Config('sf_img1')->checkhost=GetVars("checkhost","POST");
	$zbp->Config('sf_img1')->on=GetVars("on","POST");
	$zbp->Config('sf_img1')->otherurl=GetVars("otherurl","POST");
	$zbp->Config('sf_img1')->changeurl=GetVars("changeurl","POST");
	$zbp->Config('sf_img1')->aucode=GetVars("aucode","POST");
	$zbp->SaveConfig('sf_img1');
	$zbp->SetHint('good','修改成功');
	Redirect('main.php');
}else if($actiontype=="clearcache"){
	$file=$blogpath.'zb_users/plugin/sf_img1/cache/';
	if(file_exists($file)){
		sf_img1_deleteDir($file);
	}
	$zbp->SetHint('good','清理成功');
	Redirect('main.php');
}

?>

<div id="divMain">
  <div class="divHeader"><?php echo $blogtitle;?></div>
  <div class="SubMenu">
  </div>
  <div id="divMain2">
<!--代码-->
	<div class="content-box">
		<!-- Start Content Box -->
		<div class="content-box-header">
			<ul class="content-box-tabs">
				<li><a goto="tab1" style="cursor: pointer;"  class="default-tab"><span>配置</span></a></li>
			</ul>
		</div>
		<!-- End .content-box-header -->
		<div class="content-box-content">
			<div from="1" class="tab-content default-tab" style="border:none;padding:0px;margin:0;" id="tab1">
				<div style="clear:both;" ></div>
				<table name='base' style="padding:0px;margin:0px;width:700px;">
					<form  method="post" action="main.php">
					<input type='hidden' name="actiontype" value="clearcache">
					<tr>
					<td width="35%"><label><p align="center">清空缩略图缓存</p></label></td>
					<td width="75%"><input name="" type="Submit" class="button" value="清空缓存"/></p></td>
					</tr>
					</form> 
				</table>
				<form id="form1" method="post" action="main.php">
				<input type='hidden' name="actiontype" value="set1">
				<table name='base' style="padding:0px;margin:0px;width:100%;">
					<tr>
						<th width="15%">
							<p><b>项目</b></p>
						</th>
						<th width="65%">
							<p><b>配置</b></p>
						</th>
						<th width="20%">
							<p><b>说明</b></p>
						</th>
					</tr>
					<tr>
						<td>
							<p align="center"><b>启用缩略图</b></p>
						</td>
						<td>
							<p><input type="text" name="on"  class="checkbox" value="<?php echo $zbp->Config('sf_img1')->on;?>" style="display:none;"></p>
						</td>
						<td>
							<span align="center">启用时SF_img1相关函数返回处理后的url，关闭时返回原url</span>
						</td>
					</tr>
					<tr>
						<td>
							<p align="center"><b>防盗链</b></p>
						</td>
						<td>
							<p><input type="text" name="checkhost"  class="checkbox" value="<?php echo $zbp->Config('sf_img1')->checkhost;?>" style="display:none;"></p>
						</td>
						<td>
							<span align="center">只能在本站域名下查看缩略图</span>
						</td>
					</tr>
					<tr>
						<td>
							<p align="center"><b>防盗链时允许的域名</b></p>
						</td>
						<td>
							<p><textarea type="text" style="width:100%" name="otherurl" ><?php echo $zbp->Config('sf_img1')->otherurl ?></textarea></p>
						</td>
						<td>
							<span align="center">多个使用英文,号分隔，需要包含http://</span>
						</td>
					</tr>
					<tr>
						<td>
							<p align="center"><b>缩略图伪静态</b></p>
						</td>
						<td>
							<p><input type="text" name="changeurl"  class="checkbox" value="<?php echo $zbp->Config('sf_img1')->changeurl;?>" style="display:none;"></p>
						</td>
						<td>
							<span align="center"><p>如果您不了解，请勿启用</p>
							<p>给一个nginx规则</p>
							<p>rewrite ^/sf_img1/(.*)-(.*)-(.*)-(.*)-a.jpg$ /zb_users/plugin/sf_img1/pic.php?src=$1&width=$2&height=$3&cuttype=$4;</p>
							</span>
						</td>
					</tr>
					<tr>
						<td>
							<p align="center"><b>智能剪裁授权码</b></p>
						</td>
						<td>
							<p><textarea type="text" style="width:100%" name="aucode" ><?php echo $zbp->Config('sf_img1')->aucode ?></textarea></p>
						</td>
						<td>
							<span align="center">采用tclip智能剪裁技术。填入/删除授权码之后请点击上方按钮清空缓存目录。</span><br/>
							<span style='color:red'>由于资源问题，该功能为收费项目，详情联系QQ：<a target="_blank" title="点击QQ聊天" href="http://wpa.qq.com/msgrd?v=3&amp;uin=27590500&amp;site=qq&amp;menu=yes">27590500</a>。请确认虚拟空间支持fsockopen函数</span>
						</td>
					</tr>
				</table>
				<input name="set1" type="button" class="button" value="提交"/>&nbsp;&nbsp;
				</form>
			</div>
		</div>
	</div>
</div>

<script type="text/javascript">
$(document).ready(function(){
	
	$("a[goto]").click(function(){
		var goto=$(this).attr("goto");
		$("div[from='1']").hide();
		$("#"+goto).show();
	});
	$("table[name='base']").each(function(){
		$(this).find("tr:even").addClass("color2");
		$(this).find("tr:odd").addClass("color3");
	});
	$("input[name='set1']").click(function(){
		//无数据校验
		$("#form1").submit();
	});
	$("div[from='1']").hide();
	$("#tab1").show();
});
</script>

<?php
require $blogpath . 'zb_system/admin/admin_footer.php';
RunTime();
?>
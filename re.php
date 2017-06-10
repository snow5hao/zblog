<html>
<head>
    <title>登记ip地址</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
</head>
<body>
<?php
/**
 * Created by PhpStorm.
 * User: Morph
 * Date: 2017/3/31
 * Time: 17:44
 */

$link=mysql_connect("localhost","root","root") or die("数据库连接失败,".mysql_errno().":".mysql_error());
mysql_select_db("test") or die ("数据库连接失败");
mysql_query("set name"."utf-8");

$name=$_POST['iname'];
$ip=$_POST['ipaddr'];
$dp=$_POST['dep'];
$sql="insert into corplus values("."null".",'".$name."','".$ip."','".$dp."');";
mysql_query($sql) or die("登记错误，请重试");
echo "<script>alert('登记成功')</script>";

//$sql2="select * from corplus";
//$result=mysql_query($sql2);
//while($row=mysql_fetch_array($result,MYSQL_ASSOC)){
//    print_r($row);
//}
?>
<h3>谢谢配合</h3>
</body>
</html>

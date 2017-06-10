<html>
<head>
    <title>登记ip地址</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
</head>
    <body>
    <form method="post" action="http://192.168.20.123/zblog/re.php">
       ip地址： <input name="ipaddr" type="text" value="<?php echo get_ip() ?> "><br >
       姓 名： <input name="iname" type="text"><br >
        部 门： <select  name="dep">
            <option value="产品研发中心">产品研发中心</option>
            <option value="人力行政中心">人力行政中心</option>
            <option value="财务中心">财务中心</option>
            <option value="线上运营中心">线上运营中心</option>
            <option value="品牌中心">品牌中心</option>
            <option value="渠道中心">渠道中心</option>
            <option value="线下运营中心">线下运营中心</option>
            <option value="业态开发中心">业态运营中心</option></select>
            <br>
            <input type="submit" value="提交">
    </form>

    </body>

</html>
<?php
/**
 * Created by PhpStorm.
 * User: Morph
 * Date: 2017/3/31
 * Time: 14:32
 */

function get_ip() {
    if(getenv("HTTP_CLIENT_IP") && strcasecmp(getenv("HTTP_CLIENT_IP"), "unknown"))
        $ip = getenv("HTTP_CLIENT_IP");
    else if (getenv("HTTP_X_FORWARDED_FOR") && strcasecmp(getenv("HTTP_X_FORWARDED_FOR"), "unknown"))
        $ip = getenv("HTTP_X_FORWARDED_FOR");
    else if (getenv("REMOTE_ADDR") && strcasecmp(getenv("REMOTE_ADDR"), "unknown"))
        $ip = getenv("REMOTE_ADDR");
    else if (isset($_SERVER['REMOTE_ADDR']) && $_SERVER['REMOTE_ADDR'] && strcasecmp($_SERVER['REMOTE_ADDR'], "unknown"))
        $ip = $_SERVER['REMOTE_ADDR'];
    else
        $ip = "unknown";
    return $ip;
}

class GetMacAddr{
    var $return_array = array(); // 返回带有MAC地址的字串数组
    var $mac_addr=array();
    function GetMacAddr($os_type){
        switch ( strtolower($os_type) ){
            case "linux":
                $this->forLinux();
                break;
            case "solaris":
                break;
            case "unix":
                break;
            case "aix":
                break;
            default:
                $this->forWindows();
                break;
        }
        $temp_array = array();
        $final_info=array(); #最终的ip地址和mac地址保存的位置，key为ip，value为mac
        foreach ( $this->return_array as $value ){
            if(preg_match("/192.168.20.[0-9]{1,3}\(/i",$value) or preg_match("/\ ([0-9a-f][0-9a-f][:-]){5}[0-9a-f][0-9a-f]$/i",$value)){
                $value=preg_replace("/[^\w-.]/","",$value);
                $value=preg_replace("/IPv4/","",$value);
                $value= preg_replace("/^\.{1,100}/","",$value);
                $temp_array[]=$value;
            }
        }

        foreach($temp_array as $key=>$value){
            if(preg_match("/192.168.20.[0-9]{1,3}/i",$value)){
                $final_info[$value]=$temp_array[$key-1];
            }
        }
//        print_r($final_info);
        unset($temp_array);
        return $this->mac_addr;
    }
    function forWindows(){
        @exec("ipconfig /all", $this->return_array);
        if ( $this->return_array )
            return $this->return_array;
        else{
            $ipconfig = $_SERVER["WINDIR"]."\system32\ipconfig.exe";
            if ( is_file($ipconfig) )
                @exec($ipconfig." /all", $this->return_array);
            else
                @exec($_SERVER["WINDIR"]."\system\ipconfig.exe /all", $this->return_array);
            return $this->return_array;
        }
    }



    function forLinux(){
        @exec("ifconfig -a", $this->return_array);
        return $this->return_array;
    }

}
//方法使用
$mac = new GetMacAddr(PHP_OS);
foreach ($mac->mac_addr as $value){
    echo $value;
}
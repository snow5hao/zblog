<?php

class SF_img1{
	
	public $src="";
	public $width=null;
	public $height=null;
	public $file=null;
	public $cuttype=0;

	public $md5=null;
	public $cachefile=null;

	public function createmd5(){
		global $blogpath;
		if(empty($this->width)){
			$this->width=0;
		}
		if(empty($this->height)){
			$this->height=0;
		}
		if(empty($this->cuttype)){
			$this->cuttype=0;
		}
		$str=$this->src.'-'.$this->width.'-'.$this->height.'-'.$this->cuttype;
		$this->md5=md5($str);
		$this->cachefile=$blogpath.'zb_users/plugin/sf_img1/cache/'.substr($this->md5,0,2).'/'.substr($this->md5,2,2).'/'.substr($this->md5,4,2).'/'.$this->md5.'.dat';
	}

	public static function showpic($imgsrc){
		$size = getimagesize($imgsrc); //获取mime信息
		$fp=fopen($imgsrc, "rb"); //二进制方式打开文件
		header("Content-type: {$size['mime']}");
		fpassthru($fp); // 输出至浏览器
		fclose($fp);
	}

	public function checkHost(){
		global $zbp;
		$url='';
		if(isset($_SERVER["HTTP_REFERER"])){
			$url=$_SERVER["HTTP_REFERER"];
		}
		if(SF_img1::startWith($url,$zbp->host)){
			return true;
		}
		$otherurl=$zbp->Config('sf_img1')->otherurl;
		if(empty($otherurl)==true){
			return false;
		}
		$temp=explode(",",$otherurl);
		if(!isset($temp)){
			return false;
		}
		foreach($temp as $str){
			if(SF_img1::startWith($url,trim($str))){
				return true;
			}
		}
		return false;
	}

	public function output(){
		global $zbp;
		global $blogpath;
		
		$checkhost=$zbp->Config('sf_img1')->checkhost;
		$aucode=$zbp->Config('sf_img1')->aucode;
		if(isset($checkhost) && $checkhost==1){
			if($this->checkHost()==false){
				SF_img1::showpic($blogpath.'zb_users/plugin/sf_img1/daolian.jpg');
				die();
			}
		}
		if(file_exists($this->cachefile)==true){
			SF_img1::showpic($this->cachefile);
		}else{
			$this->handler=new SF_img1_ThumbHandler();
			if(empty($aucode)){
				if(SF_img1::startWith($this->src,$zbp->host)){
					$this->file=$blogpath.substr($this->src,strlen($zbp->host));
					$this->handler->setSrcImg($this->file);
					$this->handler->setCutType($this->cuttype);
					if($this->cuttype==4){
						$this->handler->setCutType(3);
						$this->handler->setDstImg($this->cachefile);
						if($this->width==null || $this->width==0){
							$this->handler->createImg(100);
						}else if($this->height==null || $this->height==0){
							$this->handler->createImg($this->width);
						}else{
							$this->handler->createImg($this->width,$this->height);
						}
						$this->handler=new SF_img1_ThumbHandler();
						$this->handler->setSrcImg($this->cachefile);
						$this->handler->setCutType(2);
					}
					$this->handler->setDstImg($this->cachefile);
					if($this->width==null || $this->width==0){
						$this->handler->createImg(100);
					}else if($this->height==null || $this->height==0){
						$this->handler->createImg($this->width);
					}else{
						$this->handler->createImg($this->width,$this->height);
					}
					if(file_exists($this->cachefile)){
						SF_img1::showpic($this->cachefile);
					}
				}else{
					ob_start();
					readfile($this->src);
					$img = ob_get_contents();
					ob_end_clean();
					$size = strlen($img);
					$this->handler->setDstImg($this->cachefile);
					$fp2=@fopen($this->cachefile.'.tmp', "w");
					fwrite($fp2,$img);
					fclose($fp2);
					$this->handler->setSrcImg($this->cachefile.'.tmp');
					$this->handler->setDstImg($this->cachefile);
					$this->handler->setCutType($this->cuttype);
					if($this->cuttype==4){
						$this->handler->setCutType(3);
						$this->handler->setDstImg($this->cachefile);
						if($this->width==null || $this->width==0){
							$this->handler->createImg(100);
						}else if($this->height==null || $this->height==0){
							$this->handler->createImg($this->width);
						}else{
							$this->handler->createImg($this->width,$this->height);
						}
						$this->handler=new SF_img1_ThumbHandler();
						$this->handler->setSrcImg($this->cachefile);
						$this->handler->setCutType(2);
					}
					$this->handler->setDstImg($this->cachefile);
					if($this->width==null || $this->width==0){
						$this->handler->createImg(100);
					}else if($this->height==null || $this->height==0){
						$this->handler->createImg($this->width);
					}else{
						$this->handler->createImg($this->width,$this->height);
					}
					@unlink($this->cachefile.'.tmp');
					if(file_exists($this->cachefile)){
						SF_img1::showpic($this->cachefile);
					}
				}
			}else{
				if(SF_img1::startWith($this->src,$zbp->host)){
					$this->file=$blogpath.substr($this->src,strlen($zbp->host));
					$this->handler->setDstImg($this->cachefile);
					SF_img1::tclip($this->file,$this->width,$this->height,$this->cachefile,$aucode);
					if(file_exists($this->cachefile)){
						SF_img1::showpic($this->cachefile);
					}
				}else{
					ob_start();
					readfile($this->src);
					$img = ob_get_contents();
					ob_end_clean();
					$size = strlen($img);
					$this->handler->setDstImg($this->cachefile);
					$fp2=@fopen($this->cachefile.'.tmp', "w");
					fwrite($fp2,$img);
					fclose($fp2);
					SF_img1::tclip($this->cachefile.'.tmp',$this->width,$this->height,$this->cachefile,$aucode);
					@unlink($this->cachefile.'.tmp');
					if(file_exists($this->cachefile)){
						SF_img1::showpic($this->cachefile);
					}
				}
			}
			
			
		}
		
	}

	public static function tclip($src,$width,$height,$dest,$aucode){
		global $zbp;
		$host = 'pic.iasuna.com';  
		$port = 80;  
		$errno = '';  
		$errstr = '';  
		$timeout = 30;  
		$url = '/pic.php';  
		$form_data = array(  
			'width' => $width,  
			'height' => $height,  
			'aucode' => $aucode,
			'host' => base64_encode($zbp->host)
		);  
		$file_data = array(  
			array(  
				'name' => 'photo',  
				'filename' => 'photo.jpg',  
				'path' =>$src  
			)  
		); 
		$fp = fsockopen($host, $port, $errno, $errstr, $timeout);  
		if(!$fp){  
			echo '发送远程请求失败！';
			die();
		}  
		srand((double)microtime()*1000000);  
		$boundary = "---------------------------".substr(md5(rand(0,32000)),0,10);  
		  
		$data = "--$boundary\r\n";  
		  
		// form data  
		foreach($form_data as $key=>$val){  
			$data .= "Content-Disposition: form-data; name=\"".$key."\"\r\n";  
			$data .= "Content-type:text/plain\r\n\r\n";  
			$data .= rawurlencode($val)."\r\n";  
			$data .= "--$boundary\r\n";  
		}  
		  
		// file data  
		foreach($file_data as $file){  
			$data .= "Content-Disposition: form-data; name=\"".$file['name']."\"; filename=\"".$file['filename']."\"\r\n";  
			$data .= "Content-Type: application/octet-stream \r\n\r\n";  
			$data .= implode("",file($file['path']))."\r\n";  
			$data .= "--$boundary\r\n";  
		}  
		  
		$data .="--\r\n\r\n";  
		  
		$out = "POST ${url} HTTP/1.1\r\n";  
		$out .= "Host:${host}\r\n";  
		$out .= "Content-type:multipart/form-data; boundary=$boundary\r\n"; // multipart/form-data  
		$out .= "Content-length:".strlen($data)."\r\n";  
		$out .= "Connection:close\r\n\r\n";  
		$out .= "${data}";  
		  
		fputs($fp, $out);  
		  
		// get response  
		$response = '';  
		while($row=fread($fp, 4096)){  
			$response .= $row;  
		}  
		  
		fclose($fp);  
		$file = fopen($dest, 'wb');
		if(!$file){
			echo '写入缓存失败！';
			die();
		}
		$pos = strpos($response, "\r\n\r\n");  
		$response = substr($response, $pos+4);
		$pos = strpos($response, "\r\n\r\n");
		if($pos>0){
			$response = substr($response, $pos+4);
		}
		fwrite($file,$response);
		fclose($file);  
		unset($file);
		if(filesize($dest)==0){
			@unlink($dest);
			echo '剪裁失败！';
			die();
		}
	}
	
	public static function getPics(&$article,$width,$height,$cuttype=0){
		global $zbp;
		$pattern="/<[img|IMG].*?src=[\'|\"](.*?(?:[\.gif|\.jpg|\.png]))[\'|\"].*?[\/]?>/";
		$content = $article->Content;
		preg_match_all($pattern,$content,$matchContent);
		$arr = array();
		if(isset($matchContent[1][0]))
		{
			foreach($matchContent[1] as $url){
				if(SF_img1::endWith(trim($url),'bmp')||SF_img1::endWith(trim($url),'BMP') ){
					$arr[]=$url;
				}else{
					$arr[]=SF_img1::getPicUrlBy($url,$width,$height,$cuttype);
				}
			}	
		}
		$article->sf_img=$arr;
		$article->sf_img_count=count($arr);
		if($article->sf_img_count>0){
			$article->sf_img_first=$arr[0];
		}else{
			$article->sf_img_first=null;
		}
	}

	public static function getPicUrlBy($url,$width,$height,$cuttype=0){
		global $zbp;
		$flag=$zbp->Config('sf_img1')->on;
		$changeurl=$zbp->Config('sf_img1')->changeurl;
		if(isset($flag) && $flag==1){
			if(isset($changeurl) && $changeurl==1){
				return $zbp->host.'sf_img1/'.urlencode(base64_encode($url)).'-'.$width.'-'.$height.'-'.$cuttype.'-a.jpg';
			}else{
				return $zbp->host.'zb_users/plugin/sf_img1/pic.php?src='.urlencode(base64_encode($url)).'&width='.$width.'&height='.$height.'&cuttype='.$cuttype;
			}
			
		}else{
			return $url;
		}
	}

	public static function getImgType($file_path){
        $type_list = array("1"=>"gif","2"=>"jpg","3"=>"png","4"=>"swf","5" => "psd","6"=>"bmp","15"=>"wbmp");
        if(file_exists($file_path)){
            $img_info = @getimagesize ($file_path);
            if(isset($type_list[$img_info[2]])){
                Return $type_list[$img_info[2]];
            }
        }else{
            die("文件不存在,不能取得文件类型!");
        }
    }

	public static function createBean(){
		$bean=new SF_img1();
		$bean->src=base64_decode(urldecode(GetVars("src","GET")));
		//$bean->src=GetVars("src","GET");
		$bean->width=(int)GetVars("width","GET");
		$bean->height=(int)GetVars("height","GET");
		$bean->cuttype=(int)GetVars("cuttype","GET");
		$bean->createmd5();
		return $bean;
	}

	public static function startWith($tempstr, $needle) {
		return strpos($tempstr, $needle) === 0;
	}

	public static function endWith($str, $needle) {
		if(strlen($str)==0){
			return false;
		}
		if(strlen($str)<strlen($needle)){
			return false;
		}
		if(strlen($str)==strlen($needle)){
			return $str==$needle;
		}
		$temp=substr($str,strlen($str)-strlen($needle));
		return strpos($temp, $needle) === 0;
	}

}
?>
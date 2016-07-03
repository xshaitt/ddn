<?php
require('../../class/connect.php');
require('../../class/db_sql.php');
require("../../member/class/user.php");
require("../../data/dbcache/class.php");
require("../../class/functions.php");
require("../../class/qinfofun.php");
require("../../class/gd.php");
$link=db_connect();
$empire=new mysqlquery();
$editor=1;

	$file=$_FILES['Filedata']['tmp_name'];
    $file_name=$_FILES['Filedata']['name'];
    $file_type=$_FILES['Filedata']['type'];
    $file_size=$_FILES['Filedata']['size'];
	$mrnd=$_POST['mrnd'];
	$muserid=$_POST['userid'];
	$musername=$_POST['username'];
	$addwater=$_POST['addwater'];
	$mcreatespic=$_POST['mcreatespic'];
	$mcreatespicwidth=$_POST['mcreatespicwidth'];
	$mcreatespicheight=$_POST['mcreatespicheight'];
	uploadfile($_POST,$file,$file_name,$file_type,$file_size,$muserid,$musername,$mrnd,1,$mcreatespic,$mcreatespicwidth,$mcreatespicheight,$addwater);
//上传附件
function uploadfile($add,$file,$file_name,$file_type,$file_size,$userid,$username,$rnd,$ecms=0,$small,$small_width,$small_height,$water){
	global $empire,$dbtbpre,$public_r,$tranpicturetype,$tranflashtype;
	$filepass=(int)$add['filepass'];
	$classid=(int)$add['classid'];
	$id=(int)$add['id'];
	echo '{';
	if(!$file_name||!$filepass||!$classid)
	{
		//上传错误
		echo '"error":1,';
	}	
	//验证权限
	$userid=(int)$userid;
	$username=RepPostVar($username);
	$rnd=RepPostVar($rnd);
	$filetype=GetFiletype($file_name);//取得文件类型
	if(CheckSaveTranFiletype($filetype))
	{
		//上传错误
		echo '"error":1,';
	}
	
	$type=1;
	$pr=$empire->fetch1("select qaddtran,qaddtransize,qaddtranimgtype,qaddtranfile,qaddtranfilesize,qaddtranfiletype from {$dbtbpre}enewspublic limit 1");
	$r=DoTranFile($file,$file_name,$file_type,$file_size,$classid);
	if($small=='true'){ 
			$path=substr($r[yname],0,strripos($r[yname],'/')); 
			$filetype=GetFiletype($r[filename]);
			$insertfile=substr($r[filename],0,strlen($r[filename])-strlen($filetype)).time();
			$name=$path."/small".$insertfile;
			
			//$sfiler=GetMySmallImg($add['classid'],$r[filename],$r[insertfile],$r[filepath],$r[yname],$add[swidth],$add[sheight],$r[name],$add['filepass'],$add['filepass'],$userid,$username,$modtype,$fstb);
			//$imgurl=str_replace("/".$r[filename],"/small".$r[insertfile].$sfiler['filetype'],$r[url]);
		    $sfiler=GetMySmallImg($classid,$r[no].'small'.$insertfile,$insertfile,$r[filepath],$r[yname],$small_width,$small_height,$name,$filepass,$filepass,$userid,$username,0,1);
			
			//echo '"small":"/'.substr($name,strripos($name,'\\')+1).$filetype.'",';
			echo '"small":"'.str_replace("/".$r[filename],"/small".$insertfile.$sfiler['filetype'],$r[url]).'",';
			
	}

	//写入数据库
	$filetime=date("Y-m-d H:i:s");
	$r[filesize]=(int)$r[filesize];
	$classid=(int)$classid;
	$sql=$empire->query("insert into {$dbtbpre}enewsfile_1(filename,filesize,adduser,path,filetime,classid,no,type,id,cjid,fpath) values('$r[filename]','$r[filesize]','$username','$r[filepath]','$filetime','$classid','$r[filename]','$type','$filepass','$filepass','$public_r[fpath]');");
	//编辑器
	if($ecms==1)
	{ 
		$groundImage='../../..'.$r[url];
		global $public_r;
		if(!empty($groundImage)&&$water=='true')
		{						    imageWaterMark($groundImage,$public_r['markpos'],$public_r['markimg'],$public_r['marktext'],$public_r['markfontsize'],$public_r['markfontcolor'],$public_r['markfont'],$public_r['markpct'],$public_r['jpgquality']);
		}
		echo '"big":"'.$r[url].'",';
		echo '"name":"'.$file_name.'",';
	}
	else
	{
		//上传错误
		echo '"error":1,';
	}
	echo '"temp":0}';
	db_close();
	$empire=null;
	exit();
}
?>
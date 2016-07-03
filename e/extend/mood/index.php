<?php
require('../../class/connect.php');
require('../../class/db_sql.php');
require('../../data/dbcache/class.php');
require('setconfig.php');//导入配置文件
require('dofunctions.php');//导入函数库文件
$link=db_connect();
$empire=new mysqlquery();
$editor=1;
$classid=(int)$_GET['classid'];
$id=(int)$_GET['id'];
if(!$classid||!$id)
{
	printerror2('您来自的链接不存在','');
}
$r=$empire->fetch1("select mood1,mood2,mood3,mood4,mood5,mood6,mood7,mood8,mood9,mood10,mood11,mood12 from {$dbtbpre}ecmsextend_mood where id='$id' and classid='$classid' limit 1");
//分割心情内容
$mname=explode(',',$moodname);//心情说明
$mpic=explode(',',$moodpic);//心情图标
$mtotalpic=explode(',',$totalmoodpic);//心情统计柱图
//总发表数
$totalnum=$r['mood1']+$r['mood2']+$r['mood3']+$r['mood4']+$r['mood5']+$r['mood6']+$r['mood7']+$r['mood8']+$r['mood9']+$r['mood10']+$r['mood11']+$r['mood12'];
//是否发表过
$havepost=user_CheckHaveMood($classid,$id,0);
require('template/index.temp.php'); //导入模板文件
db_close();
$empire=null;
?>
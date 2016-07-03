<?php
if(!defined('InEmpireCMS'))
{
	exit();
}
?><!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7">


<?php

$ztvalue=ReturnZtAddField(0,'seokey');;

?>
<title>[!--pagetitle--]<?=$ztvalue?>_<?=$public_r[sitename]?></title>
<meta name="Keywords" content="[!--pagekey--]" />
<meta name="description" content="[!--pagedes--]">
		<link rel="stylesheet" type="text/css" href="[!--news.url--]skin/ddn/skin/base.css"/>
		<link rel="stylesheet" type="text/css" href="[!--news.url--]skin/ddn/skin/jqui.css"/>
		<link rel="stylesheet" type="text/css" href="[!--news.url--]skin/ddn/skin/style.css"/>
</head>
	<body>
		
		<div class="wp toptoolbar">
			<div class="wpn">
				<span class="slogon">大呆牛生活百科，快乐健康生活每一天!</span>
				<a href="http://www.dadainiu.com/sitemap.xml" class="sitemap" target="_blank">网站地图</a>
		
			</div>
			
			
		</div>
		
		<div class="topbar wpn">
			<a href="#" class="logo"><img src="[!--news.url--]skin/ddn/skin/images/logo.jpg"/></a>
			
		</div><!--/topbar-->

		<div class="wp navbar">
		  <div class="nav wpn">


<?
$indexclass="";
if(!$GLOBALS[navclassid]){
$indexclass="current";
}
?>
			<h2 class="<?=$indexclass?>"><a href="[!--news.url--]">首页</a></h2>
<?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq("select classid,classname,classpath,wburl from [!db.pre!]enewsclass where bclassid=0 and showclass=0 order by myorder",10,24,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
<?
$class="";
if($GLOBALS[navclassid]==$bqr[classid]){
$class="current";
}

$classurl=sys_ReturnBqClassname($bqr,9);//取得栏目地址


if($bqr[wburl]){
$urls=$bqr[wburl];

} else{
$urls=$public_r[newsurl].$bqr[classpath];
}
if($GLOBALS[navclassid])
{
$fcr=explode('|',$class_r[$GLOBALS[navclassid]][featherclass]);
$topbclassid=$fcr[1]?$fcr[1]:$GLOBALS[navclassid];//取得当前栏目的一级栏目ID
if($bqr[classid]==$topbclassid)
{
$class="current";
}

}
?>



			<h2 class="<?=$class?>"><a href="<?=$classurl?>" target="_blank"><?=$bqr[classname]?></a></h2>
<?php
}
}
?>  
		<div class="searchbar">

    <form name="searchform" method="post" action="[!--news.url--]e/search/index.php">

<input type="hidden" name="show" value="title,smalltext" />
<input type="hidden" name="tbname" value="news">
<input type="hidden" name="tempid" value="2" >    

				  <input id="tags" placeholder="找文章、标签" name="keyboard">

				  <input class="searchbt" type="submit" name="btn2" value=""/>

</form>
			</div><!--/searchbar-->
		  </div>
		  
		  
		</div><!--/navbar-->
	


		<div class="blank10"></div>
		<div class="blank10"></div>

		<div class="wpn listcon">

			<div class="listconl">

		    
 

				<div class="blank10"></div>
				
  			<div class="mbx">
			      <span>当前位置：</span>
	                      [!--newsnav--]
			  </div><!--mbx-->				
				
			[!--page.stats--]	
				<ul class="catlist">



[!--empirenews.listtemp--] 
<!--list.var1-->
[!--empirenews.listtemp--]  
            
            <div class="blank15"></div> 
            
            <div class="list_pgn">[!--show.page--]</div>          
            
            <div class="blank20"></div>					

					
				
				</ul>
			</div>
			<!--listconl-->



            <div class="listconr">
            	
               	<dl class="rpiclist">
            		<dt>
            			<span>栏目热门标签</span>
<a href="/a/" target="_blank" title="全部生活百科分类">全部分类</a>
            		</dt>
			  		<dd class=" taglist " >
<?
$str='';
$sql=$empire->query("select * from {$dbtbpre}enewszt   order by onclick desc limit 30");
while($zhuanti=$empire->fetch($sql))
{
$ztname=$zhuanti['ztname']; 
$ztlink=$public_r[newsurl]. $zhuanti[ztpath];
 $str.='<a href="'.$ztlink.'" target="_blank"><b>'.$ztname.'</b></a>';
}
?>	 

<?=$str?>
	    	  
		        </dd><!--/t_con-->
            	</dl>                	
            	
    <div class="jh_tabs">
	      <ul class="t">
		     <li class="select">推荐阅读</li>
			 <li >热门排行</li>
			 <li >最新文章</li>
		  </ul><!--/t-->
		  
		  <div class="t_con cont" style="display:block">

<?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsIndexLoopBq(3,20,7);
if($ecms_bq_sql){
while($indexbqr=$empire->fetch($ecms_bq_sql)){
if(empty($class_r[$indexbqr['classid']]['tbname'])){continue;}
$bqr=$empire->fetch1("select * from {$dbtbpre}ecms_".$class_r[$indexbqr['classid']]['tbname']." where id='$indexbqr[id]'");
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
		        <a href="<?=$bqsr[titleurl]?>" target="_blank" title="<?=$bqr[title]?>"><?=$bqr[title]?></a>
<?php
}
}
?>

		  </div><!--/t_con-->		
		  
		  <div class="t_con cont" style="display:none">
<?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq('news',20,19,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
		        <a href="<?=$bqr[titleurl]?>" target="_blank"  title="<?=$bqr[title]?>"><?=$bqr[title]?></a>
<?php
}
}
?> 	

		  </div><!--/t_con-->		
		  		  
		  <div class="t_con cont" style="display:none">
<?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq('news',20,18,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
		        <a href="<?=$bqr[titleurl]?>" target="_blank"  title="<?=$bqr[title]?>"><?=$bqr[title]?></a>
<?php
}
}
?> 	

		  </div><!--/t_con-->		  
		  
	  </div><!---/jh_tabs-->



<!--/t_con-->
            	</dl> 
            	
            	
            </div><!--/listconr-->


		</div>
		<!--/listcon-->

<div class="blank10"></div>
<div class="blank10"></div> 	
  		
<div class="i_footer">

	 
	 <div class="copy">© 2007-2019 www.dadainiu.com, All Rights Reserved. 大呆牛生活百科网版权所有 禁止非法复制 苏ICP备15056912号-1</div>
	
	 
</div><!--/i_footer-->		
		
</body>

		<script src="[!--news.url--]skin/ddn/skin/js/jquery/jquery-1.9.1.js" type="text/javascript" charset="utf-8"></script>
		<script src="[!--news.url--]skin/ddn/skin/js/json2.js"></script>
		<script src="[!--news.url--]skin/ddn/skin/js/jqui.js" type="text/javascript" charset="utf-8"></script>
		<script type="text/javascript" src="[!--news.url--]skin/ddn/skin/js/sliders/js/myfocus-2.0.4.min.js"></script>
		<script src="[!--news.url--]skin/ddn/skin/js/layer/layer.js" type="text/javascript" charset="utf-8"></script>
		<script src="[!--news.url--]skin/ddn/skin/js/tools.js" type="text/javascript" charset="utf-8"></script>
	

</html>
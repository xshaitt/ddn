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
$seokey=ReturnClassAddField(0,'seokey');

?>
<title>[!--p.title--]_<?=$ecms_gr[ftitle]?><?=$seokey?>_<?=$public_r[sitename]?></title>
<meta name="Keywords" content="<?=$ecms_gr[keyboard]?>" />
<meta name="description" content="<?=nl2br($ecms_gr[smalltext])?>">
		<link rel="stylesheet" type="text/css" href="/skin/ddn/skin/base.css"/>
		<link rel="stylesheet" type="text/css" href="/skin/ddn/skin/jqui.css"/>
		<link rel="stylesheet" type="text/css" href="/skin/ddn/skin/style.css"/>
</head>
	<body>
		
		<div class="wp toptoolbar">
			<div class="wpn">
				<span class="slogon">大呆牛生活百科网，快乐健康生活每一天!</span>
				<a href="http://www.dadainiu.com/sitemap.xml" class="sitemap" target="_blank">网站地图</a>
		
			</div>
			
			
		</div>
		
		<div class="topbar wpn">
			<a href="#" class="logo"><img src="/skin/ddn/skin/images/logo.jpg"/></a>
			
		</div><!--/topbar-->

		<div class="wp navbar">
		  <div class="nav wpn">


<?
$indexclass="";
if(!$GLOBALS[navclassid]){
$indexclass="current";
}
?>
			<h2 class="<?=$indexclass?>"><a href="/">首页</a></h2>
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

    <form name="searchform" method="post" action="/e/search/index.php">

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
	      <div class="mbx">
		      <span>当前位置：</span>
  <?=$grurl?>
		  </div><!--mbx-->
		  
		  
		  <div class="c_con">
		       
			   <div class="arc_title"><h2>[!--p.title--]</h2></div><!---/arc_title-->
			   <div class="arc_info">
			       <span><?=date('Y-m-d H:i:s',$ecms_gr[newstime])?></span>
				   
				   <span>来源:<?=$docheckrep[1]?ReplaceBefrom($ecms_gr[befrom]):$ecms_gr[befrom]?></span>
				   <span>作者：<?=$docheckrep[2]?ReplaceWriter($ecms_gr[writer]):$ecms_gr[writer]?><?='<script src="'.$public_r[newsurl].'e/public/onclick/?enews=donews&classid='.$ecms_gr[classid].'&id='.$ecms_gr[id].'"></script>'?></span>
				   <div class="shares">
				   <!-- Baidu Button BEGIN -->
<div id="bdshare" class="bdshare_b" style="line-height: 12px;">
<img src="http://bdimg.share.baidu.com/static/images/type-button-5.jpg?cdnversion=20120831" />
<a class="shareCount"></a>
</div>
<script type="text/javascript" id="bdshare_js" data="type=button&amp;uid=6455743" ></script>
<script type="text/javascript" id="bdshell_js"></script>
<script type="text/javascript">
document.getElementById("bdshell_js").src = "http://bdimg.share.baidu.com/static/js/shell_v2.js?cdnversion=" + Math.ceil(new Date()/3600000);
</script>
<!-- Baidu Button END -->
				   
				   </div>
			   </div><!--arc_info-->
			   
			   	
<?
$str='<div class="arctags">';
$sql=$empire->query("select ztid,classid from {$dbtbpre}enewsztinfo where id = $navinfor[id]");
while($zhuanti=$empire->fetch($sql))
{
$ztname=$class_zr[$zhuanti['ztid']]['ztname']; 
$ztlink=sys_ReturnBqZtname($zhuanti); 
 $str.='<a href="'.$ztlink.'" target="_blank"><b>'.$ztname.'</b></a>';
	 
}

$str.='</div>';
?>
			   	  <?=$str?>
			   
			   
			   <div class="arc_dd">
			       <p>
				      <b>导读：</b>
					 <?=nl2br($ecms_gr[smalltext])?>
				   </p>
			   </div><!--/dd-->
			   
			   <div class="arc_main">
			   <?=strstr($ecms_gr[newstext],'[!--empirenews.page--]')?'[!--newstext--]':$ecms_gr[newstext]?>
			   </div><!--/arc_main-->
			   

			   			
			
<div class="arc_pgn">
  <div class="paget"><h2><span>文章分页</span></h2></div>
[!--title.select--]

<?
$str='<div class="arctags">';
$sql=$empire->query("select ztid,classid from {$dbtbpre}enewsztinfo where id = $navinfor[id]");
while($zhuanti=$empire->fetch($sql))
{
$ztname=$class_zr[$zhuanti['ztid']]['ztname']; 
$ztlink=sys_ReturnBqZtname($zhuanti); 
 $str.='<a href="'.$ztlink.'" target="_blank"><b>'.$ztname.'</b></a>';
	 
}

$str.='</div>';
?>
			   	  <?=$str?>

</div><!---/arc_pgn-->
			   
               
               <div class="mianze">
                 <p>转载请注明<a href="http://www.dadainiu.com">大呆牛生活百科网</a>，本文链接:<script>document.write(location.href);</script>
声明：本文仅供大家参考交流，内容均来自网络!</p>
               </div>
			   
  <div class="arc_pn">

<!--上一篇-->
<?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq('selfinfo',1,0,0,'id<'.$navinfor[id].'','id desc');
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
<a class="fl" href="<?php
echo $bqsr[titleurl];
$pre='true';
?>">上一篇：<?=$bqr[title]?>
</a>
<?php
}
}
?>
<?php
if(empty($pre)){
echo "<span class='fl'>上一篇:很抱歉没有了</span>";
}
?>


<!--下一篇-->
<?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq('selfinfo',1,0,0,'id>'.$navinfor[id].'','id asc');
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
<a class="fr" href="<?php
echo $bqsr[titleurl];
$next='true';
?>">下一篇：<?=$bqr[title]?>
</a>
<?php
}
}
?>
<?php
if(empty($next)){
echo "<span class='fr'>下一篇:很抱歉没有了</span>";
}
?>

</div>			   
			   
<div class="blank10"></div>  

<iframe id="mood_frame" width="510"  style="margin:0 auto" height="200" src="/e/extend/mood/?classid=<?=$ecms_gr[classid]?>&id=<?=$ecms_gr[id]?>" marginWidth=0 marginHeight=0 frameborder="0" scrolling="no"></iframe>


<div class="blank20"></div>   

			   <dl class="xg_arc">
			       <dt><span>相关文章</span>Releted Infomation</dt>
				   <dd>
				      <ul>
<?=GetKeyboard($ecms_gr[keyboard],$ecms_gr[keyid],$ecms_gr[classid],$ecms_gr[id],$class_r[$ecms_gr[classid]][link_num])?>
					  </ul>
				   </dd>
				   
			   </dl><!--/xg_arc-->
			   
			   <div class="blank20"></div><!--blank20-->
			   
		  </div><!--/c_con-->
		
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
$sql=$empire->query("select * from {$dbtbpre}enewszt where classid = $GLOBALS[navclassid]  or classid = 0  order by onclick desc limit 30");
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
		     <li class="select">栏目排行</li>
			 <li >全站排行</li>
			 <li >最新文章</li>
		  </ul><!--/t-->
		  
		  <div class="t_con cont" style="display:block">

<?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq($GLOBALS[navclassid],20,1,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
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

		<script src="/skin/ddn/skin/js/jquery/jquery-1.9.1.js" type="text/javascript" charset="utf-8"></script>
		<script src="/skin/ddn/skin/js/json2.js"></script>
		<script src="/skin/ddn/skin/js/jqui.js" type="text/javascript" charset="utf-8"></script>
		<script type="text/javascript" src="/skin/ddn/skin/js/sliders/js/myfocus-2.0.4.min.js"></script>
		<script src="/skin/ddn/skin/js/layer/layer.js" type="text/javascript" charset="utf-8"></script>
		<script src="/skin/ddn/skin/js/tools.js" type="text/javascript" charset="utf-8"></script>
	

</html>
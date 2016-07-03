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
		<title>最全的生活常识_生活小窍门大全_大呆牛生活百科网</title>
               <meta name="Keywords" content="生活百科,健康生活小知识,生活小窍门,生活常识,养生" />
                <meta name="description" content="大呆牛生活百科网(www.dadainiu.com)，是一个以日常生活小窍门、健康生活小常识为主的生活百科知识网站，其下包含了健康养生、食物禁忌、营养菜谱、急救常识、偏方大全、疾病预防等栏目，让大家更好的了解健康、良好的生活习惯。">
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
			<a href="/" class="logo"><img src="/skin/ddn/skin/images/logo.jpg"/></a>
			
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
	
<div class="indext wpn">
	
  <div class="m1 wpmn">
    <div class="f1">
      <div id="st1">
        <div class="loading"></div>
        <div class="pic">
          <ul>
<?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsIndexLoopBq(1,6,7);
if($ecms_bq_sql){
while($indexbqr=$empire->fetch($ecms_bq_sql)){
if(empty($class_r[$indexbqr['classid']]['tbname'])){continue;}
$bqr=$empire->fetch1("select * from {$dbtbpre}ecms_".$class_r[$indexbqr['classid']]['tbname']." where id='$indexbqr[id]'");
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
  <li><a href="<?=$bqsr[titleurl]?>" title="<?=$bqr[title]?>" target="_blank"><img src="<?=$bqr[fpic]?>" /></a></li>
<?php
}
}
?>
          </ul>
        </div>
      </div>
      <!--#st1-->
    </div>
    <!--focus-->
    <div class="t_news">
      <ul class="t_tt">
<?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsIndexLoopBq(2,2,7);
if($ecms_bq_sql){
while($indexbqr=$empire->fetch($ecms_bq_sql)){
if(empty($class_r[$indexbqr['classid']]['tbname'])){continue;}
$bqr=$empire->fetch1("select * from {$dbtbpre}ecms_".$class_r[$indexbqr['classid']]['tbname']." where id='$indexbqr[id]'");
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
         <li> <a class="tt" href="<?=$bqsr[titleurl]?>" target="_blank" title="<?=$bqr[title]?>"><?=$bqr[title]?></a>
          <p><?=esub($bqr[smalltext],80)?> ..<a href="<?=$bqsr[titleurl]?>" target="_blank">[详细]</a></p>
<?php
}
}
?>
      </ul>
      <!--t_tt-->
     
    </div>
    <!--/t_news-->
    <div class="t_right">
     
	  <div class="jh_tabs">
	      <ul class="t">
		     <li class="select">推荐阅读</li>
			 <li >热门排行</li>
			 <li >最新文章</li>
		  </ul><!--/t-->
		  
		  <div class="t_con cont" style="display:block">

<?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsIndexLoopBq(3,7,7);
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
$ecms_bq_sql=sys_ReturnEcmsLoopBq('news',7,19,0);
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
$ecms_bq_sql=sys_ReturnEcmsLoopBq('news',7,18,0);
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
	  
    </div>
    <!--顶部右侧-->
  </div>
  <!--/m1-->	
 </div>
  
  
  <div class="blank10"></div>
  


<div class="ip3 wpn">
	
		<dl class="icate icate1">
			<dt class="tit">


				<a href="/shxqm/"  title="更多生活小窍门及小知识" class="more" target="_blank"></a><h3>生活小窍门</h3>

			</dt>
			<dd>
			<div class="imgcon">
<?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq(1,1,2,1,'isgood=1');
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>    
				<a title="<?=$bqr[title]?>" target="_blank" href="<?=$bqr[titleurl]?>">
				<img src="<?=$bqr[fpic]?>"  alt="<?=$bqr[tite]?>"><i></i><b><?=$bqr[title]?></b>
				</a>

<?php
}
}
?>
			</div>	
			<ul>
<?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq(1,6,0,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>   
				<li><a title="<?=$bqr[title]?>" target="_blank" href="<?=$bqr[titleurl]?>"><?=$bqr[title]?></a></li>
<?php
}
}
?>			

			</ul>
			</dd>
		</dl>		
		
		
			<dl class="icate icate2">
			<dt class="tit">


				<a href="/jkys/"  title="更多健康养生小知识" class="more" target="_blank"></a><h3>健康养生</h3>

			</dt>
			<dd>
			<div class="imgcon">
<?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq(2,1,2,1,'isgood=1');
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>    
				<a title="<?=$bqr[title]?>" target="_blank" href="<?=$bqr[titleurl]?>">
				<img src="<?=$bqr[fpic]?>"  alt="<?=$bqr[tite]?>"><i></i><b><?=$bqr[title]?></b>
				</a>

<?php
}
}
?>
			</div>	
			<ul>
<?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq(2,6,0,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>   
				<li><a title="<?=$bqr[title]?>" target="_blank" href="<?=$bqr[titleurl]?>"><?=$bqr[title]?></a></li>
<?php
}
}
?>			

			</ul>
			</dd>
		</dl>
		
		<dl class="icate icate3">
			<dt class="tit">


				<a href="/mswh/"  title="更多民俗文化知识" class="more" target="_blank"></a><h3>民俗文化</h3>

			</dt>
			<dd>
			<div class="imgcon">
<?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq(3,1,2,1,'isgood=1');
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>    
				<a title="<?=$bqr[title]?>" target="_blank" href="<?=$bqr[titleurl]?>">
				<img src="<?=$bqr[fpic]?>"  alt="<?=$bqr[tite]?>"><i></i><b><?=$bqr[title]?></b>
				</a>

<?php
}
}
?>
			</div>	
			<ul>
<?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq(3,6,0,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>   
				<li><a title="<?=$bqr[title]?>" target="_blank" href="<?=$bqr[titleurl]?>"><?=$bqr[title]?></a></li>
<?php
}
}
?>			

			</ul>
			</dd>
		</dl>


		
		<dl class="icate icate4">
			<dt class="tit">


				<a href="/xqhw/"  title="更多兴趣户外文章" class="more" target="_blank"></a><h3>兴趣户外</h3>

			</dt>
			<dd>
			<div class="imgcon">
<?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq(4,1,2,1,'isgood=1');
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>    
				<a title="<?=$bqr[title]?>" target="_blank" href="<?=$bqr[titleurl]?>">
				<img src="<?=$bqr[fpic]?>"  alt="<?=$bqr[tite]?>"><i></i><b><?=$bqr[title]?></b>
				</a>

<?php
}
}
?>
			</div>	
			<ul>
<?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq(4,6,0,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>   
				<li><a title="<?=$bqr[title]?>" target="_blank" href="<?=$bqr[titleurl]?>"><?=$bqr[title]?></a></li>
<?php
}
}
?>			

			</ul>
			</dd>
		</dl>




		<dl class="icate icate5">
			<dt class="tit">


				<a href="/zcsj/"  title="更多职场社交技巧" class="more" target="_blank"></a><h3>职场社交</h3>

			</dt>
			<dd>
			<div class="imgcon">
<?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq(5,1,2,1,'isgood=1');
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>    
				<a title="<?=$bqr[title]?>" target="_blank" href="<?=$bqr[titleurl]?>">
				<img src="<?=$bqr[fpic]?>"  alt="<?=$bqr[tite]?>"><i></i><b><?=$bqr[title]?></b>
				</a>

<?php
}
}
?>
			</div>	
			<ul>
<?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq(5,6,0,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>   
				<li><a title="<?=$bqr[title]?>" target="_blank" href="<?=$bqr[titleurl]?>"><?=$bqr[title]?></a></li>
<?php
}
}
?>			

			</ul>
			</dd>
		</dl>

		<dl class="icate icate6">
			<dt class="tit">


				<a href="/qgxl/"  title="更多情感心灵文章" class="more" target="_blank"></a><h3>情感心灵</h3>

			</dt>
			<dd>
			<div class="imgcon">
<?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq(6,1,2,1,'isgood=1');
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>    
				<a title="<?=$bqr[title]?>" target="_blank" href="<?=$bqr[titleurl]?>">
				<img src="<?=$bqr[fpic]?>"  alt="<?=$bqr[tite]?>"><i></i><b><?=$bqr[title]?></b>
				</a>

<?php
}
}
?>
			</div>	
			<ul>
<?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq(6,6,0,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>   
				<li><a title="<?=$bqr[title]?>" target="_blank" href="<?=$bqr[titleurl]?>"><?=$bqr[title]?></a></li>
<?php
}
}
?>			

			</ul>
			</dd>
		</dl>
		
	</div>
  
    <div class="blank10"></div>
  
    <div class="csbq">
    
    </div>
  
	
		<div class="blank10"></div>
		
  <div class="ip2 wpn">

		<div class="tags">
	  <dl><dt><a href="/a/shxqm_index.html" title="更多生活常识栏目分类" target="_blank">生活常识</a></dt>
	  <dd>
                     <a href="/a/shouna/" title="收纳小技巧大全" target="_blank">收纳技巧</a>/
                     <a href="/a/fangpian/" title="防骗知识大全" target="_blank">防骗知识</a>
                  </dd>
                  </dl>

	  <dl><dt><a href="/a/jkys_index.html" title="更多健康栏目分类" target="_blank">健康养生</a></dt>
	  <dd>
                     <a href="/a/dongjiyangsheng/" title="冬季养生知识大全" target="_blank">冬季养生</a>/
                     <a href="/a/yinshijinji/" title="食物相克大全" target="_blank">饮食禁忌</a>
                  </dd>
                  </dl>

	  <dl><dt><a href="/a/mswh_index.html" title="更多民俗文化分类" target="_blank">民俗文化</a></dt>
	  <dd>
                     <a href="/a/jieri/" title="传统节日大全" target="_blank">节日大全</a>/
                     <a href="/a/fengsu/" title="风俗习惯大全" target="_blank">风俗习惯</a>
                  </dd>
                  </dl>


	</div>

	
  


</div>
  		
<div class="blank10"></div>
<div class="blank10"></div> 	
  		
<div class="i_footer">

	 
	 <div class="copy">© 2007-2019 www.dadainiu.com, All Rights Reserved. 大呆牛生活百科网版权所有 禁止非法复制 苏ICP备15056912号-1</div>
	 <dl class="flinks">
	   <dt>合作媒体</dt>
	   <dd>
<?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq("select * from [!db.pre!]enewslink where checked=1 and lpic='' order by lid",20,24,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
    <a href="<?=$bqr[lurl]?>" target="_blank"><?=$bqr[lname]?></a>
<?php
}
}
?>
	   </dd>
	 </dl>
	 
</div><!--/i_footer-->		
		
</body>

		<script src="/skin/ddn/skin/js/jquery/jquery-1.9.1.js" type="text/javascript" charset="utf-8"></script>
		<script src="/skin/ddn/skin/js/json2.js"></script>
		<script src="/skin/ddn/skin/js/jqui.js" type="text/javascript" charset="utf-8"></script>
		<script type="text/javascript" src="/skin/ddn/skin/js/sliders/js/myfocus-2.0.4.min.js"></script>
		<script src="/skin/ddn/skin/js/layer/layer.js" type="text/javascript" charset="utf-8"></script>
		<script src="/skin/ddn/skin/js/tools.js" type="text/javascript" charset="utf-8"></script>
	

</html>	
<?php
//---------------------------用户自定义标签函数文件
//显示结合项筛选选项
function user_ShowFieldandChange($ecms=0){
	global $public_r;

	//------- 函数参数设置开始 -----

	//要显示的结合项字段列表，多个字段用半角逗号“,”隔开
	$fieldandvar='abc,niandai,guojia,liupai';


	
	//字段显示选项设置，多项用双“#”号隔开，格式：选项说明|==|内容1,值1##内容2,值2
$fieldandval=array();
$fieldandval['abc']='<b>名首字母：</b>|==|不限,##'.
'a,a##'.
'b,b##'.
'c,c##'.
'd,d##'.
'e,e##'.
'f,f##'.
'g,g##'.
'h,h##'.
'i,i##'.
'j,j##'.
'k,k##'.
'l,l##'.
'm,m##'.
'n,n##'.
'o,o##'.
'p,p##'.
'q,q##'.
'r,r##'.
's,s##'.
't,t##'.
'u,u##'.
'v,v##'.
'w,w##'.
'x,x##'.
'y,y##'.
'z,z';


$fieldandval['guojia']='<b>国籍：</b>|==|不限,##'.
'中国,中国##'.
'意大利,意大利##'.
'比利时,比利时##'.
'英国,英国##'.
'挪威,挪威##'.
'美国,美国##'.
'荷兰,荷兰##'.
'法国,法国##'.
'德国,德国##'.
'奥地利,奥地利##'.
'波兰,波兰##'.
'瑞士,瑞士##'.
'西班牙,西班牙##'.
'芬兰,芬兰##'.
'俄罗斯,俄罗斯##'.
'丹麦,丹麦##'.
'瑞典,瑞典##'.
'哥伦比亚,哥伦比亚##'.
'捷克斯洛伐克,捷克斯洛伐克##'.
'智利,智利##'.
'日本,日本##'.
'希腊,希腊##'.
'葡萄牙,葡萄牙##'.
'罗马尼亚,罗马尼亚##'.
'墨西哥,墨西哥##'.
'秘鲁,秘鲁##'.
'以色列,以色列##'.
'乌克兰,乌克兰##'.
'澳大利亚,澳大利亚##'.
'巴西,巴西##'.
'加拿大,加拿大##'.
'新西兰,新西兰##'.
'印度,印度##'.
'匈牙利,匈牙利##'.
'古巴,古巴##'.
'阿根廷,阿根廷##'.
'埃及,埃及##'.
'巴基斯坦,巴基斯坦##'.
'爱尔兰,爱尔兰##'.
'乌拉圭,乌拉圭##'.
'白俄罗斯,白俄罗斯##'.
'南非,南非##'.
'保加利亚,保加利亚##'.
'韩国,韩国';

$fieldandval['liupai']='<b>流派：</b>|==|不限,##'.
'哥特式美术,|哥特式美术|##'.
'佛罗伦萨画派,|佛罗伦萨画派|##'.
'国际哥特主义,|国际哥特主义|##'.
'文艺复兴,|文艺复兴|##'.
'样式主义,|样式主义|##'.
'巴洛克艺术,|巴洛克艺术|##'.
'洛可可艺术,|洛可可艺术|##'.
'新古典主义,|新古典主义|##'.
'浪漫主义,|浪漫主义##'.
'威尼斯画派,|威尼斯画派|##'.
'荷兰小画派,|荷兰小画派|##'.
'古典主义,|古典主义|##'.
'锡耶纳画派,|锡耶纳画派|##'.
'翁布里亚画派,|翁布里亚画派|##'.
'帕都亚画派,|帕都亚画派|##'.
'罗马画派,|罗马画派|##'.
'多瑙河画派,|多瑙河画派|##'.
'瓦伦西亚画派,|瓦伦西亚画派|##'.
'塞维利亚画派,|塞维利亚画派|##'.
'枫丹白露画派,|枫丹白露画派|##'.
'卡拉瓦乔主义,|卡拉瓦乔主义|##'.
'马德里画派,|马德里画派|##'.
'佩鲁贾画派,|佩鲁贾画派|##'.
'费拉拉画派,|费拉拉画派|##'.
'日本浮世绘,|日本浮世绘|##'.
'巴比松画派,|巴比松画派|##'.
'拉斐尔前派,|拉斐尔前派|##'.
'学院派,|学院派|##'.
'印象派,|印象派|##'.
'点彩派,|点彩派|##'.
'纳比派,|纳比派|##'.
'象征主义,|象征主义|##'.
'哈德逊河派,|哈德逊河派|##'.
'浪漫主义拿撒勒,|浪漫主义拿撒勒|##'.
'新艺术运动,|新艺术运动|##'.
'巡回展览画派,|巡回展览画派|##'.
'现实主义,|现实主义|##'.
'后印象主义,|后印象主义|##'.
'新拉斐尔前派,|新拉斐尔前派|##'.
'维也纳分离派,|维也纳分离派|##'.
'杜塞尔多夫画派,|杜塞尔多夫画派|##'.
'立体主义,|立体主义|##'.
'表现主义,|表现主义|##'.
'抽象表现主义,|抽象表现主义|##'.
'抽象艺术,|抽象艺术|##'.
'青骑士,|青骑士|##'.
'达达主义,|达达主义|##'.
'野兽派,|野兽派|##'.
'波普艺术,|波普艺术|##'.
'未来主义,|未来主义|##'.
'至上主义,|至上主义|##'.
'超现实主义,|超现实主义|##'.
'新表现主义,|新表现主义|##'.
'精确主义,|精确主义|##'.
'辐射主义,|辐射主义|##'.
'构成主义,|构成主义|##'.
'巴黎画派,|巴黎画派|##'.
'光效应艺术,|光效应艺术|##'.
'超写实主义,|超写实主义|';



$fieldandval['niandai']='<b>年代：</b>|==|不限,##'.
'夏商周,夏商周##'.
'秦汉,秦汉##'.
'三国,三国##'.
'晋朝,晋朝##'.
'十六国,十六国##'.
'南北朝,南北朝##'.
'隋,隋##'.
'唐,唐##'.
'五代十国,五代十国##'.
'宋,宋##'.
'元,元##'.
'明,明##'.
'清,清##'.
'近现代,近现代##'.
'中世纪,中世纪##'.
'14-18世纪,14-18世纪##'.
'19世纪,19世纪##'.
'20世纪,20世纪##'.
'当代,当代';


	//正常链接样式
	$fieldandcss='fieldandcss';

	//已选的选项链接样式
	$changefieldandcss='changefieldandcss';

	//字段与字段的显示间隔符，格式：开始显示字符|结束显示字符
	$fieldexp='<table><tr><td>|</td></tr></table>';

	//选项与选项的显示间隔符，格式：开始显示字符|结束显示字符
	$valexp='| ';

	//------- 函数参数设置结束 -----


	$userfunecmsver=function_exists('ehtmlspecialchars')?1:0;
	//附加参数
	$urlcs='';
	$mid=(int)$_GET['mid'];
	if($mid)
	{
		$urlcs.='&mid='.$mid;
	}
	if($_GET['classid'])
	{
		$classid=RepPostVar($_GET['classid']);
		$urlcs.='&classid='.$classid;
	}
	else
	{
		if(!$_GET['mid']&&!$_GET['ttid']&&!$_GET['ztid'])
		{
			$classid=intval($GLOBALS['navclassid']);
			$urlcs.='&classid='.$classid;
		}
	}
	if($_GET['ttid'])
	{
		$ttid=RepPostVar($_GET['ttid']);
		$urlcs.='&ttid='.$ttid;
	}
	if($_GET['ztid'])
	{
		$ztid=RepPostVar($_GET['ztid']);
		$urlcs.='&ztid='.$ztid;
	}
	if($_GET['firsttitle'])
	{
		$firsttitle=(int)$_GET['firsttitle'];
		$urlcs.='&firsttitle='.$firsttitle;
	}
	if($_GET['isgood'])
	{
		$isgood=(int)$_GET['isgood'];
		$urlcs.='&isgood='.$isgood;
	}
	if($_GET['endtime'])
	{
		$starttime=RepPostVar($_GET['starttime']);
		$endtime=RepPostVar($_GET['endtime']);
		$urlcs.='&starttime='.$starttime.'&endtime='.$endtime;
	}
	$line=(int)$_GET['line'];
	if($line)
	{
		$urlcs.='&line='.$line;
	}
	$tempid=(int)$_GET['tempid'];
	if($tempid)
	{
		$urlcs.='&tempid='.$tempid;
	}
	if($_GET['orderby'])
	{
		$orderby=RepPostVar($_GET['orderby']);
		$myorder=(int)$_GET['myorder'];
		$urlcs.='&orderby='.$orderby.'&myorder='.$myorder;
	}
	//间隔字符
	$fieldexpr=explode('|',$fieldexp);
	$valexpr=explode('|',$valexp);
	//输出选项
	$fr=explode(',',$fieldandvar);
	$fcount=count($fr);
	$allstr='';
	$urladd='';
	for($i=0;$i<$fcount;$i++)
	{
		$field=$fr[$i];
		//选项链接
		$getval='';
		if($_GET[$field])
		{
			$getval=$userfunecmsver==1?ehtmlspecialchars($_GET[$field],ENT_QUOTES):htmlspecialchars($_GET[$field],ENT_QUOTES);
			$urladd.='&'.$field.'='.urlencode($getval);
		}
		//选项说明
		$vsayr=explode('|==|',$fieldandval[$field]);
		//选项内容
		$valallstr='';
		$vr=explode('##',$vsayr[1]);
		$vcount=count($vr);
		for($vi=0;$vi<$vcount;$vi++)
		{
			$vtr=explode(',',$vr[$vi]);
			if($getval==$vtr[1])
			{
				$css=$changefieldandcss;
			}
			else
			{
				$css=$fieldandcss;
			}
			$valallstr.=$valexpr[0].'<a href="'.$public_r['newsurl'].'e/action/ListInfo.php?'.$urlcs.'&ph=1<!--url.add-->&'.$field.'='.urlencode($vtr[1]).'" class="'.$css.'">'.$vtr[0].'</a>'.$valexpr[1];
		}
		$allstr.=$fieldexpr[0].$vsayr[0].$valallstr.$fieldexpr[1];
	}
	$allstr=str_replace('<!--url.add-->',$urladd,$allstr);
	echo $allstr;
}







//前台分页
function mypage($num,$line,$page_line,$start,$page,$search){
	global $fun_r;
	if($num<=$line)
	{
		return '';
	}
	$cid=$_GET[classid];
	$nid=$_GET[id];
	$search=RepPostStr($search,1);
	$url=eReturnSelfPage(0).'?classid='.$cid.'&id='.$nid.'&page';
	$snum=2;//最小页数
	
	$totalpage=ceil($num/$line);//取得总页数
	$firststr='<a title="'.$fun_r['trecord'].'">&nbsp;<b>'.$num.'</b> </a>&nbsp;&nbsp;';
	//上一页
	if($page<>0)
	{
		$toppage='<a href="'.$url.'=0'.$search.'">'.$fun_r['startpage'].'</a>&nbsp;';
		$pagepr=$page-1;
		$prepage='<a href="'.$url.'='.$pagepr.$search.'">'.$fun_r['pripage'].'</a>';
	}
	//下一页
	if($page!=$totalpage-1)
	{
		$pagenex=$page+1;
		$nextpage='&nbsp;<a href="'.$url.'='.$pagenex.$search.'">'.$fun_r['nextpage'].'</a>';
		$lastpage='&nbsp;<a href="'.$url.'='.($totalpage-1).$search.'">'.$fun_r['lastpage'].'</a>';
	}
	$starti=$page-$snum<0?0:$page-$snum;
	$no=0;
	for($i=$starti;$i<$totalpage&&$no<$page_line;$i++)
	{
		$no++;
		if($page==$i)
		{
			$is_1="<b>";
			$is_2="</b>";
		}
		else
		{
			$is_1='<a href="'.$url.'='.$i.$search.'">';
			$is_2="</a>";
		}
		$pagenum=$i+1;
		$returnstr.="&nbsp;".$is_1.$pagenum.$is_2;
	}
	$returnstr=$firststr.$toppage.$prepage.$returnstr.$nextpage.$lastpage;
	return $returnstr;
}


















?>
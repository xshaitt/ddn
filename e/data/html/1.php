<?php
if(!defined('InEmpireCMS'))
{
	exit();
}
?><table width='100%' align=center cellpadding=3 cellspacing=1 bgcolor='#DBEAF5'><tr><td width='16%' height=25 bgcolor='ffffff'>标题</td><td bgcolor='ffffff'><table width="100%" border="0" cellpadding="0" cellspacing="0" bgcolor="#DBEAF5">
<tr> 
  <td height="25" bgcolor="#FFFFFF">
	<?=$tts?"<select name='ttid'><option value='0'>标题分类</option>$tts</select>":""?>
	<input type=text name=title value="<?=ehtmlspecialchars(stripSlashes($r[title]))?>" size="60"> 
	<input type="button" name="button" value="图文" onclick="document.add.title.value=document.add.title.value+'(图文)';"> 
  </td>
</tr>
<tr> 
  <td height="25" bgcolor="#FFFFFF">属性: 
	<input name="titlefont[b]" type="checkbox" value="b"<?=$titlefontb?>>粗体
	<input name="titlefont[i]" type="checkbox" value="i"<?=$titlefonti?>>斜体
	<input name="titlefont[s]" type="checkbox" value="s"<?=$titlefonts?>>删除线
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;颜色: <input name="titlecolor" type="text" value="<?=stripSlashes($r[titlecolor])?>" size="10"><a onclick="foreColor();"><img src="../data/images/color.gif" width="21" height="21" align="absbottom"></a>
  </td>
</tr>
</table></td></tr><tr><td width='16%' height=25 bgcolor='ffffff'>副标题</td><td bgcolor='ffffff'><input name="ftitle" type="text" size=60 id="ftitle" value="<?=$ecmsfirstpost==1?"":ehtmlspecialchars(stripSlashes($r[ftitle]))?>">
</td></tr><tr><td width='16%' height=25 bgcolor='ffffff'>特殊属性</td><td bgcolor='ffffff'><table width="100%" border="0" cellpadding="0" cellspacing="0" bgcolor="#DBEAF5">
  <tr>
    <td height="25" bgcolor="#FFFFFF">信息属性: 
      <input name="checked" type="checkbox" value="1"<?=$r[checked]?' checked':''?>>
      审核 &nbsp;&nbsp; 推荐 
      <select name="isgood" id="isgood">
        <option value="0">不推荐</option>
	<?=$ftnr['igname']?>
      </select>
      &nbsp;&nbsp; 头条 
      <select name="firsttitle" id="firsttitle">
        <option value="0">非头条</option>
	<?=$ftnr['ftname']?>
      </select></td>
  </tr>
  <tr> 
    <td height="25" bgcolor="#FFFFFF">关键字&nbsp;&nbsp;&nbsp;: 
      <input name="keyboard" type="text" size="52" value="<?=stripSlashes($r[keyboard])?>">
      <font color="#666666">(多个请用&quot;,&quot;隔开)</font></td>
  </tr>
  <tr> 
    <td height="25" bgcolor="#FFFFFF">外部链接: 
      <input name="titleurl" type="text" value="<?=stripSlashes($r[titleurl])?>" size="52">
      <font color="#666666">(填写后信息连接地址将为此链接)</font></td>
  </tr>
</table></td></tr><tr><td width='16%' height=25 bgcolor='ffffff'>发布时间</td><td bgcolor='ffffff'><input name="newstime" type="text" value="<?=$r[newstime]?>"><input type=button name=button value="设为当前时间" onclick="document.add.newstime.value='<?=$todaytime?>'"></td></tr><tr><td width='16%' height=25 bgcolor='ffffff'>内容简介</td><td bgcolor='ffffff'><textarea name="smalltext" cols="80" rows="10" id="smalltext"><?=$ecmsfirstpost==1?"":ehtmlspecialchars(stripSlashes($r[smalltext]))?></textarea>
</td></tr><tr><td height=25 colspan=2 bgcolor='ffffff'><div align=left>新闻正文</div></td></tr></table><div style='background-color:#D0D0D0'><script src="<?=$public_r[newsurl]?>e/extend/ueditor/jq.js"></script>

<table width="100%" align="center" cellpadding="3" cellspacing="1" bgcolor="#DBEAF5">
<tbody>
<tr><td width="16%" height="25" bgcolor="ffffff">关键字：</td>

		<td height="25" bgcolor="#FFFFFF">
			<input id="keys"/>
			</td>
</tr>

<tr><td width="16%" height="25" bgcolor="ffffff">alt：</td>

		<td height="25" bgcolor="#FFFFFF">
			<input id="alt"/>
			</td>
</tr>


<tr><td width="16%" height="25" bgcolor="ffffff">所属分类:</td>

		<td height="25" bgcolor="#FFFFFF">
			<input id="lb"/>
			</td>
</tr>

<tr><td width="16%" height="25" bgcolor="ffffff">图片title:</td>

		<td height="25" bgcolor="#FFFFFF">
下一页：<input class="nextpage" value="进入下一页" type="radio" name="nextpage"/>
原图：<input class="nextpage" value="查看原始大图" type="radio" name="nextpage" checked/>
			</td>
</tr>


<tr><td width="16%" height="25" bgcolor="ffffff">分页信息：</td>

		<td height="25" bgcolor="#FFFFFF">
<textarea id="pageinfo" style="width:500px;height:120px"/></textarea>
			</td>
</tr>

</tbody>
</table>


<div id="test" style="float:left;cursor:pointer;width:80px;height:25px; line-height: 25px; color: #0066cc; background: 

#ffffff;text-align: center">全属性</div>

<div id="foo" style="float:left;cursor:pointer;width:80px;height:25px; line-height: 25px; color: #0066cc; background: 

#ffffff;text-align: center">只设图片</div>

<div id="dd" style="float:left;cursor:pointer;width:80px;height:25px; line-height: 25px; color: #0066cc; background: 

#ffffff;text-align: center">导读</div>

<div id="jbh" style="float:left;cursor:pointer;width:80px;height:25px; line-height: 25px; color: #0066cc; background: 

#ffffff;text-align: center">简笔画导读</div>

<div id="addpage" style="float:left;cursor:pointer;width:80px;height:25px; line-height: 25px; color: #0066cc; background: 

#ffffff;text-align: center">添加分页</div>



<div id="cleartable" style="float:left;cursor:pointer;width:80px;height:25px; line-height: 25px; color: #0066cc; background: 

#ffffff;text-align: center">清除表格</div>


<div id="clearpage" style="float:left;cursor:pointer;width:80px;height:25px; line-height: 25px; color: #0066cc; background: 

#ffffff;text-align: center">清除分页</div>


<div id="picalign" style="float:left;cursor:pointer;width:80px;height:25px; line-height: 25px; color: #0066cc; background: 

#ffffff;text-align: center">图片居中</div>

<br><br>
<?php if(!isset($Field)){ ?>

<script type="text/javascript" src="<?=$public_r[newsurl]?>e/extend/ueditor/ueditor.config.js"></script>
<script type="text/javascript" src="<?=$public_r[newsurl]?>e/extend/ueditor/ueditor.all.min.js"></script>
<script type="text/javascript" src="<?=$public_r[newsurl]?>e/extend/ueditor/btn.js"></script>
<script type="text/javascript" src="<?=$public_r[newsurl]?>e/extend/ueditor/addinfo.js"></script>
<?php } ?>
<?php
/**
 * UEditor for ECMS编辑器字段配置
 * User: pkkgu 910111100@qq.com
 */
$Field    = 'newstext'; //*字段名称
$FieldVal = $ecmsfirstpost==1?"":stripSlashes($r[$Field]);
$isadmin  = 1;


?>
<script id="<?=$Field?>" name="<?=$Field?>" type="text/plain"><?=$FieldVal?></script>
<script type="text/javascript">
var ue = UE.getEditor('<?=$Field?>',{
    pageBreakTag:'[!--empirenews.pagenotat--]' //分页符
    , serverUrl: "<?=$public_r[newsurl]?>e/extend/ueditor/php/controller.php?isadmin=<?=$isadmin?>"
    //,toolbars:[['FullScreen', 'Source', 'Undo', 'Redo','Bold']] //选择自己需要的工具按钮名称
});
ue.ready(function(){
    ue.execCommand('serverparam', {
        'classid' : '<?=$classid?>',
        'filepass': '<?=$filepass?>',
        'userid'  : '<?=$isadmin?$logininid:$muserid?>',
        'username': '<?=$isadmin?$loginin:$musername?>',
        'rnd'     : '<?=$isadmin?$loginrnd:$mrnd?>'
    });
});
</script>

<table width="100%" border="0" cellpadding="3" cellspacing="1" bgcolor="#DBEAF5">
          <tr> 
            <td bgcolor="#FFFFFF"> <input name="dokey" type="checkbox" value="1"<?=$r[dokey]==1?' checked':''?>>
              关键字替换&nbsp;&nbsp; <input name="copyimg" type="checkbox" id="copyimg" value="1">
      远程保存图片(
      <input name="mark" type="checkbox" id="mark" value="1">
      <a href="SetEnews.php" target="_blank">加水印</a>)&nbsp;&nbsp; 
      <input name="copyflash" type="checkbox" id="copyflash" value="1">
      远程保存FLASH(地址前缀： 
      <input name="qz_url" type="text" id="qz_url" size="">
              )</td>
          </tr>
          <tr>
            
    <td bgcolor="#FFFFFF"><input name="repimgnexturl" type="checkbox" id="repimgnexturl" value="1"> 图片链接转为下

一页&nbsp;&nbsp; <input name="autopage" type="checkbox" id="autopage" value="1"> 自动分页
      ,每 
      <input name="autosize" type="text" id="autosize" value="5000" size="5">
      个字节为一页&nbsp;&nbsp; 取第 
      <input name="getfirsttitlepic" type="text" id="getfirsttitlepic" value="" size="1">
      张上传图为标题图片( 
      <input name="getfirsttitlespic" type="checkbox" id="getfirsttitlespic" value="1">
      缩略图: 宽 
      <input name="getfirsttitlespicw" type="text" id="getfirsttitlespicw" size="3" value="<?=$public_r

[spicwidth]?>">
      *高
      <input name="getfirsttitlespich" type="text" id="getfirsttitlespich" size="3" value="<?=$public_r

[spicheight]?>">
      )</td>
          </tr>
        </table></div><table width='100%' align=center cellpadding=3 cellspacing=1 bgcolor='#DBEAF5'><tr><td width='16%' height=25 bgcolor='ffffff'>标题图片</td><td bgcolor='ffffff'><input name="titlepic" type="text" id="titlepic" value="<?=$ecmsfirstpost==1?"":ehtmlspecialchars(stripSlashes($r[titlepic]))?>" size="45">
<a onclick="window.open('ecmseditor/FileMain.php?type=1&classid=<?=$classid?>&infoid=<?=$id?>&filepass=<?=$filepass?>&sinfo=1&doing=1&field=titlepic','','width=700,height=550,scrollbars=yes');" title="选择已上传的图片"><img src="../data/images/changeimg.gif" border="0" align="absbottom"></a></td></tr><tr><td width='16%' height=25 bgcolor='ffffff'>焦点图</td><td bgcolor='ffffff'>
<input name="fpic" type="text" id="fpic" value="<?=$ecmsfirstpost==1?"":ehtmlspecialchars(stripSlashes($r[fpic]))?>" size="45">
<a onclick="window.open('ecmseditor/FileMain.php?type=1&classid=<?=$classid?>&infoid=<?=$id?>&filepass=<?=$filepass?>&sinfo=1&doing=1&field=fpic','','width=700,height=550,scrollbars=yes');" title="选择已上传的图片"><img src="../data/images/changeimg.gif" border="0" align="absbottom"></a> 
</td></tr><tr><td width='16%' height=25 bgcolor='ffffff'>作者</td><td bgcolor='ffffff'><?php
$writer_sql=$empire->query("select writer from {$dbtbpre}enewswriter");
while($w_r=$empire->fetch($writer_sql))
{
	$w_class.="<option value='".$w_r[writer]."'>".$w_r[writer]."</option>";
}
?>
<input type=text name=writer value="<?=$ecmsfirstpost==1?"":ehtmlspecialchars(stripSlashes($r[writer]))?>" size=""> 
        <select name="w_id" id="select7" onchange="document.add.writer.value=document.add.w_id.value">
          <option>选择作者</option>
		  <?=$w_class?>
        </select>
<input type="button" name="wbutton" value="增加作者" onclick="window.open('NewsSys/writer.php?addwritername='+document.add.writer.value);">
</td></tr><tr><td width='16%' height=25 bgcolor='ffffff'>信息来源</td><td bgcolor='ffffff'><?php
$befrom_sql=$empire->query("select sitename from {$dbtbpre}enewsbefrom");
while($b_r=$empire->fetch($befrom_sql))
{
	$b_class.="<option value='".$b_r[sitename]."'>".$b_r[sitename]."</option>";
}
?>
<input type="text" name="befrom" value="<?=$ecmsfirstpost==1?"":ehtmlspecialchars(stripSlashes($r[befrom]))?>" size=""> 
        <select name="befrom_id" id="befromid" onchange="document.add.befrom.value=document.add.befrom_id.value">
          <option>选择信息来源</option>
          <?=$b_class?>
        </select>
<input type="button" name="wbutton" value="增加来源" onclick="window.open('NewsSys/BeFrom.php?addsitename='+document.add.befrom.value);">
</td></tr></table>
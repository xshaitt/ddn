<?php
if(!defined('InEmpireCMS'))
{
        exit();
}
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>心情表态</title>
<link href="template/images/style.css" rel="stylesheet" type="text/css">
</head>
<body>
<table width="100%" border="0" cellpadding="3" cellspacing="1" align="center">
<form action="domood.php" method="post" name="moodform" id="moodform">
	<input name="classid" type="hidden" id="classid" value="<?=$classid?>">
    <input name="id" type="hidden" id="id" value="<?=$id?>">
    <input name="enews" type="hidden" id="enews" value="UpdateMood">
  <tr valign="bottom"> 
  <?php
  //表单事件
  $moodonclick=$havepost==1?'javascript:document.moodform.submit();':'javascript:alert(\'你不是表过态了吗？\');';
  for($i=1;$i<=$shownum;$i++)
  {
	  $fname='mood'.$i;
	  $fnum=intval($r[$fname]);
	  //柱图高度
	  $height=1;
	  if($totalnum&&$fnum)
	  {
		$height=round(($fnum/$totalnum)*$totalmoodpicheight);
	  }
  ?>
    <td align="center">
          <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
            <tr>
				<td height="100" align="center" valign="bottom">
					<?=$fnum?>
					<br>
					<img src="template/images/<?=$mtotalpic[$i-1]?>" width="20" height="<?=$height?>" border="0">
				</td>
            </tr>
            <tr>
				<td height="42" align="center"> 
					<img src="template/images/<?=$mpic[$i-1]?>" width="32" height="32" border="0">
				</td>
            </tr>
            <tr> 
				<td height="20" align="center" valign="top">
					<?=$mname[$i-1]?>
				</td>
            </tr>
            <tr> 
				<td align="center"> 
					<input type="radio" name="changemood" value="<?=$i?>" onclick="<?=$moodonclick?>">
				</td>
            </tr>
          </table>
    </td>
  <?php
  }
  ?>
  </tr>
</form>
</table>
</body>
</html>
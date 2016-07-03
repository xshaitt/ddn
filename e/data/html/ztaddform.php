<?php
if(!defined('InEmpireCMS'))
{exit();}
?><tr bgcolor='#FFFFFF' height=25><td>seokey</td><td>
<input name="seokey" type="text" id="seokey" value="<?=$ecmsfirstpost==1?"":ehtmlspecialchars($addr[seokey])?>" size="">
</td></tr><tr bgcolor='#FFFFFF' height=25><td>首页推荐</td><td><select name="indextj" id="indextj"><option value="不推荐"<?=$addr[indextj]=="不推荐"||$ecmsfirstpost==1?' selected':''?>>不推荐</option><option value="推荐"<?=$addr[indextj]=="推荐"?' selected':''?>>推荐</option><option value=""<?=$addr[indextj]==""?' selected':''?>></option></select></td></tr><tr bgcolor='#FFFFFF' height=25><td>栏目推荐</td><td><input name="cattj" type="radio" value="否"<?=$addr[cattj]=="否"?' checked':''?>>否<input name="cattj" type="radio" value="是"<?=$addr[cattj]=="是"?' checked':''?>>是</td></tr>
<?php
if(!defined('InEmpireCMS'))
{
        exit();
}

//------ 参数配置 ------

//显示最前面几个心情(最大12个)
$shownum=5;

//心情说明，用半角逗号隔开
$moodname='学到了,早会了 ,我想想,支持下,惊呆了';

//心情图标文件，用半角逗号隔开(template/images/目录)
$moodpic='mood1.gif,mood6.gif,mood7.gif,mood4.gif,mood8.gif,mood6.gif,mood7.gif,mood8.gif,mood9.gif,mood10.gif,mood11.gif,mood12.gif';

//统计心情数量的柱图标文件，每个柱图用半角逗号隔开(template/images/目录)
$totalmoodpic='bg2.gif,bg2.gif,bg1.gif,bg2.gif,bg1.gif,bg1.gif,bg1.gif,bg1.gif,bg2.gif,bg1.gif,bg2.gif,bg1.gif';

//统计心情柱图标最大高度
$totalmoodpicheight=80;

//重复提交设置：0为不验证重复提交、1为浏览器进程、2为保存COOKIE验证
$redomood=2;

?>
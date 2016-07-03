<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `phome_enewsclassadd`;");
E_C("CREATE TABLE `phome_enewsclassadd` (
  `classid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `classtext` mediumtext NOT NULL,
  `ttids` text NOT NULL,
  `seokey` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`classid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");
E_D("replace into `phome_enewsclassadd` values('1','','','_生活小常识_生活小妙招');");
E_D("replace into `phome_enewsclassadd` values('2','','','_健康养生知识大全');");
E_D("replace into `phome_enewsclassadd` values('3','','','_世界民俗文化_节日大全');");
E_D("replace into `phome_enewsclassadd` values('4','','','');");
E_D("replace into `phome_enewsclassadd` values('5','','','_为人处世之道_面试技巧_社交礼仪大全');");
E_D("replace into `phome_enewsclassadd` values('6','','','_家庭生活_婚姻两性_婆媳关系');");
E_D("replace into `phome_enewsclassadd` values('7','','','');");

@include("../../inc/footer.php");
?>
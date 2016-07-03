<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `phome_enewsztadd`;");
E_C("CREATE TABLE `phome_enewsztadd` (
  `ztid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `classtext` mediumtext NOT NULL,
  `seokey` varchar(255) NOT NULL DEFAULT '',
  `indextj` varchar(255) NOT NULL DEFAULT '',
  `cattj` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`ztid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");
E_D("replace into `phome_enewsztadd` values('1','','_收纳的方法大全','推荐','是');");
E_D("replace into `phome_enewsztadd` values('4','','最新最全的防骗指南','','');");
E_D("replace into `phome_enewsztadd` values('5','','_冬季养生小窍门大全','','');");
E_D("replace into `phome_enewsztadd` values('6','','_食物相克大全','','');");
E_D("replace into `phome_enewsztadd` values('7','','_各地风俗大全','','');");
E_D("replace into `phome_enewsztadd` values('8','','_今天是什么日子','','');");
E_D("replace into `phome_enewsztadd` values('9','','_面试需要注意什么','','');");
E_D("replace into `phome_enewsztadd` values('10','','','','');");
E_D("replace into `phome_enewsztadd` values('11','','_折纸大全图解','','');");
E_D("replace into `phome_enewsztadd` values('12','','_什么地方好玩','','');");
E_D("replace into `phome_enewsztadd` values('13','','_婆媳相处之道','','');");
E_D("replace into `phome_enewsztadd` values('14','','_夫妻相处之道','','');");
E_D("replace into `phome_enewsztadd` values('15','','_怀孕禁忌常识大全','','');");
E_D("replace into `phome_enewsztadd` values('16','','_怎么预防疾病','','');");
E_D("replace into `phome_enewsztadd` values('17','','_除臭小技巧','推荐','是');");
E_D("replace into `phome_enewsztadd` values('18','','_民间偏方大全','','');");
E_D("replace into `phome_enewsztadd` values('19','','_药膳大全及做法','','');");
E_D("replace into `phome_enewsztadd` values('20','','_春季养生小常识','','');");

@include("../../inc/footer.php");
?>
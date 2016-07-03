<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `phome_enewsztinfo`;");
E_C("CREATE TABLE `phome_enewsztinfo` (
  `zid` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `ztid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `cid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `classid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `id` int(10) unsigned NOT NULL DEFAULT '0',
  `newstime` int(10) unsigned NOT NULL DEFAULT '0',
  `mid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `isgood` tinyint(1) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`zid`),
  KEY `ztid` (`ztid`),
  KEY `cid` (`cid`),
  KEY `classid` (`classid`),
  KEY `id` (`id`),
  KEY `newstime` (`newstime`),
  KEY `mid` (`mid`),
  KEY `isgood` (`isgood`)
) ENGINE=MyISAM AUTO_INCREMENT=48 DEFAULT CHARSET=utf8");
E_D("replace into `phome_enewsztinfo` values('5','16','0','2','3','1452493460','1','0');");
E_D("replace into `phome_enewsztinfo` values('6','17','0','1','4','1452496514','1','0');");
E_D("replace into `phome_enewsztinfo` values('7','1','0','1','5','1452498842','1','0');");
E_D("replace into `phome_enewsztinfo` values('8','18','0','2','6','1452579519','1','0');");
E_D("replace into `phome_enewsztinfo` values('9','18','0','2','7','1452580455','1','0');");
E_D("replace into `phome_enewsztinfo` values('10','19','0','2','8','1452582246','1','0');");
E_D("replace into `phome_enewsztinfo` values('11','7','0','3','9','1452584283','1','0');");
E_D("replace into `phome_enewsztinfo` values('12','6','0','2','11','1452654634','1','0');");
E_D("replace into `phome_enewsztinfo` values('13','6','0','2','12','1452661470','1','0');");
E_D("replace into `phome_enewsztinfo` values('14','12','0','4','15','1452668342','1','0');");
E_D("replace into `phome_enewsztinfo` values('15','7','0','3','18','1452739918','1','0');");
E_D("replace into `phome_enewsztinfo` values('16','16','0','2','19','1452740348','1','0');");
E_D("replace into `phome_enewsztinfo` values('17','5','0','2','19','1452740348','1','0');");
E_D("replace into `phome_enewsztinfo` values('18','13','0','6','20','1452741838','1','0');");
E_D("replace into `phome_enewsztinfo` values('19','13','0','6','21','1452742616','1','0');");
E_D("replace into `phome_enewsztinfo` values('20','18','0','2','22','1452745878','1','0');");
E_D("replace into `phome_enewsztinfo` values('23','18','0','1','23','1452747932','1','0');");
E_D("replace into `phome_enewsztinfo` values('24','18','0','1','26','1452751239','1','0');");
E_D("replace into `phome_enewsztinfo` values('25','18','0','2','28','1452757572','1','0');");
E_D("replace into `phome_enewsztinfo` values('26','18','0','2','29','1452759094','1','0');");
E_D("replace into `phome_enewsztinfo` values('27','18','0','2','31','1452843910','1','0');");
E_D("replace into `phome_enewsztinfo` values('28','4','0','1','32','1452845804','1','0');");
E_D("replace into `phome_enewsztinfo` values('29','6','0','2','35','1453177919','1','0');");
E_D("replace into `phome_enewsztinfo` values('30','6','0','2','39','1454033208','1','0');");
E_D("replace into `phome_enewsztinfo` values('31','6','0','2','44','1455604218','1','0');");
E_D("replace into `phome_enewsztinfo` values('32','6','0','2','45','1455605410','1','0');");
E_D("replace into `phome_enewsztinfo` values('33','6','0','2','47','1455609502','1','0');");
E_D("replace into `phome_enewsztinfo` values('34','6','0','2','48','1455611001','1','0');");
E_D("replace into `phome_enewsztinfo` values('35','20','0','2','49','1455679750','1','0');");
E_D("replace into `phome_enewsztinfo` values('36','20','0','2','50','1455681966','1','0');");
E_D("replace into `phome_enewsztinfo` values('37','19','0','2','53','1455685220','1','0');");
E_D("replace into `phome_enewsztinfo` values('38','18','0','2','53','1455685220','1','0');");
E_D("replace into `phome_enewsztinfo` values('39','17','0','1','72','1455755751','1','0');");
E_D("replace into `phome_enewsztinfo` values('40','20','0','2','109','1455775437','1','0');");
E_D("replace into `phome_enewsztinfo` values('41','20','0','2','110','1455776510','1','0');");
E_D("replace into `phome_enewsztinfo` values('42','20','0','2','111','1456290246','1','0');");
E_D("replace into `phome_enewsztinfo` values('43','20','0','2','112','1456291898','1','0');");
E_D("replace into `phome_enewsztinfo` values('44','20','0','2','121','1456301970','1','0');");
E_D("replace into `phome_enewsztinfo` values('45','6','0','2','124','1456457182','1','0');");
E_D("replace into `phome_enewsztinfo` values('46','6','0','2','125','1456458703','1','0');");
E_D("replace into `phome_enewsztinfo` values('47','6','0','2','126','1456459785','1','0');");

@include("../../inc/footer.php");
?>
<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `phome_enewssp_2`;");
E_C("CREATE TABLE `phome_enewssp_2` (
  `sid` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `spid` int(10) unsigned NOT NULL DEFAULT '0',
  `classid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `id` int(10) unsigned NOT NULL DEFAULT '0',
  `newstime` int(10) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`sid`),
  KEY `spid` (`spid`),
  KEY `newstime` (`newstime`)
) ENGINE=MyISAM AUTO_INCREMENT=22 DEFAULT CHARSET=utf8");
E_D("replace into `phome_enewssp_2` values('9','3','3','9','1452584283');");
E_D("replace into `phome_enewssp_2` values('17','1','1','26','1452751239');");
E_D("replace into `phome_enewssp_2` values('15','3','4','15','1452668342');");
E_D("replace into `phome_enewssp_2` values('6','1','2','3','1452493460');");
E_D("replace into `phome_enewssp_2` values('19','2','2','45','1455605410');");
E_D("replace into `phome_enewssp_2` values('11','3','3','10','1452653593');");
E_D("replace into `phome_enewssp_2` values('12','3','2','11','1452654634');");
E_D("replace into `phome_enewssp_2` values('13','3','2','12','1452661470');");
E_D("replace into `phome_enewssp_2` values('20','2','2','49','1455679750');");
E_D("replace into `phome_enewssp_2` values('21','3','2','50','1455681966');");
E_D("replace into `phome_enewssp_2` values('18','3','1','42','1454035585');");

@include("../../inc/footer.php");
?>
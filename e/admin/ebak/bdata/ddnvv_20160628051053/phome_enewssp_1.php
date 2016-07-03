<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `phome_enewssp`;");
E_C("CREATE TABLE `phome_enewssp` (
  `spid` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `spname` varchar(30) NOT NULL DEFAULT '',
  `varname` varchar(30) NOT NULL DEFAULT '',
  `sppic` varchar(255) NOT NULL DEFAULT '',
  `spsay` varchar(255) NOT NULL DEFAULT '',
  `sptype` tinyint(1) NOT NULL DEFAULT '0',
  `cid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `classid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `tempid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `maxnum` int(11) NOT NULL DEFAULT '0',
  `sptime` int(10) unsigned NOT NULL DEFAULT '0',
  `groupid` text NOT NULL,
  `userclass` text NOT NULL,
  `username` text NOT NULL,
  `isclose` tinyint(1) NOT NULL DEFAULT '0',
  `cladd` tinyint(1) NOT NULL DEFAULT '0',
  `refile` tinyint(1) NOT NULL DEFAULT '0',
  `spfile` varchar(255) NOT NULL DEFAULT '',
  `spfileline` smallint(6) NOT NULL DEFAULT '0',
  `spfilesub` smallint(6) NOT NULL DEFAULT '0',
  PRIMARY KEY (`spid`),
  UNIQUE KEY `varname` (`varname`),
  KEY `refile` (`refile`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8");
E_D("replace into `phome_enewssp` values('1','首页幻灯片','index_focus','','','2','0','0','1','7','1452141722',',1,','',',,','0','0','0','html/sp/1452141485.html','0','0');");
E_D("replace into `phome_enewssp` values('2','首页头条2调','index_tt','','','2','0','0','1','2','1452141868',',1,','',',,','0','0','0','html/sp/1452141485.html','0','0');");
E_D("replace into `phome_enewssp` values('3','首页推荐7','index_tj','','','2','0','0','1','7','1452142594',',1,','',',,','0','0','0','html/sp/1452141485.html','0','0');");

@include("../../inc/footer.php");
?>
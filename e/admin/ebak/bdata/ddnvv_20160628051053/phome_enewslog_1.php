<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `phome_enewslog`;");
E_C("CREATE TABLE `phome_enewslog` (
  `loginid` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(30) NOT NULL DEFAULT '',
  `logintime` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `loginip` varchar(20) NOT NULL DEFAULT '',
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `password` varchar(30) NOT NULL DEFAULT '',
  `loginauth` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`loginid`),
  KEY `status` (`status`)
) ENGINE=MyISAM AUTO_INCREMENT=54 DEFAULT CHARSET=utf8");
E_D("replace into `phome_enewslog` values('1','admin','2016-01-06 16:15:30','127.0.0.1','1','','0');");
E_D("replace into `phome_enewslog` values('2','admin','2016-01-07 04:44:33','::1','0','','0');");
E_D("replace into `phome_enewslog` values('3','admin','2016-01-07 04:44:40','::1','1','','0');");
E_D("replace into `phome_enewslog` values('4','admin','2016-01-07 08:47:05','127.0.0.1','0','','0');");
E_D("replace into `phome_enewslog` values('5','admin','2016-01-07 08:47:14','127.0.0.1','1','','0');");
E_D("replace into `phome_enewslog` values('6','admin','2016-01-07 09:27:28','127.0.0.1','1','','0');");
E_D("replace into `phome_enewslog` values('7','admin','2016-01-08 10:36:36','127.0.0.1','1','','0');");
E_D("replace into `phome_enewslog` values('8','admin','2016-01-08 14:14:42','127.0.0.1','1','','0');");
E_D("replace into `phome_enewslog` values('9','admin','2016-01-11 05:42:00','::1','0','','0');");
E_D("replace into `phome_enewslog` values('10','admin','2016-01-11 05:42:06','::1','0','','0');");
E_D("replace into `phome_enewslog` values('11','admin','2016-01-11 05:42:13','::1','1','','0');");
E_D("replace into `phome_enewslog` values('12','admin','2016-01-11 10:37:42','127.0.0.1','1','','0');");
E_D("replace into `phome_enewslog` values('13','admin','2016-01-11 11:04:51','58.211.161.66','1','','0');");
E_D("replace into `phome_enewslog` values('14','admin','2016-01-11 14:29:47','58.211.161.66','1','','0');");
E_D("replace into `phome_enewslog` values('15','admin','2016-01-11 14:43:20','58.211.161.66','1','','0');");
E_D("replace into `phome_enewslog` values('16','admin','2016-01-11 19:18:05','180.107.249.148','1','','0');");
E_D("replace into `phome_enewslog` values('17','admin','2016-01-12 09:04:47','58.211.161.66','1','','0');");
E_D("replace into `phome_enewslog` values('18','admin','2016-01-12 13:59:48','58.211.161.66','1','','0');");
E_D("replace into `phome_enewslog` values('19','admin','2016-01-13 10:49:08','58.211.161.66','0','','0');");
E_D("replace into `phome_enewslog` values('20','admin','2016-01-13 10:49:14','58.211.161.66','1','','0');");
E_D("replace into `phome_enewslog` values('21','admin','2016-01-13 16:38:13','58.211.161.66','0','','0');");
E_D("replace into `phome_enewslog` values('22','admin','2016-01-13 16:38:20','58.211.161.66','1','','0');");
E_D("replace into `phome_enewslog` values('23','admin','2016-01-14 10:37:50','58.211.161.66','1','','0');");
E_D("replace into `phome_enewslog` values('24','admin','2016-01-14 12:28:18','58.211.161.66','0','','0');");
E_D("replace into `phome_enewslog` values('25','admin','2016-01-14 12:28:23','58.211.161.66','1','','0');");
E_D("replace into `phome_enewslog` values('26','admin','2016-01-14 15:46:08','58.211.161.66','1','','0');");
E_D("replace into `phome_enewslog` values('27','admin','2016-01-15 09:07:51','58.211.161.66','1','','0');");
E_D("replace into `phome_enewslog` values('28','admin','2016-01-15 15:24:46','58.211.161.66','1','','0');");
E_D("replace into `phome_enewslog` values('29','admin','2016-01-18 13:42:22','58.211.161.66','0','','0');");
E_D("replace into `phome_enewslog` values('30','admin','2016-01-18 13:42:28','58.211.161.66','1','','0');");
E_D("replace into `phome_enewslog` values('31','admin','2016-01-18 17:21:12','58.208.180.59','1','','0');");
E_D("replace into `phome_enewslog` values('32','adminn2016888','2016-01-18 18:19:29','58.208.180.59','0','','0');");
E_D("replace into `phome_enewslog` values('33','admin','2016-01-18 18:19:36','58.208.180.59','1','','0');");
E_D("replace into `phome_enewslog` values('34','admin','2016-01-19 06:00:14','121.239.122.239','1','','0');");
E_D("replace into `phome_enewslog` values('35','admin','2016-01-19 08:06:28','58.211.161.66','1','','0');");
E_D("replace into `phome_enewslog` values('36','admin','2016-01-19 16:02:42','58.211.161.66','1','','0');");
E_D("replace into `phome_enewslog` values('37','admin','2016-01-29 10:05:25','58.211.161.66','1','','0');");
E_D("replace into `phome_enewslog` values('38','admin','2016-02-16 12:33:47','58.211.161.66','1','','0');");
E_D("replace into `phome_enewslog` values('39','admin','2016-02-16 15:57:56','58.211.161.66','1','','0');");
E_D("replace into `phome_enewslog` values('40','admin','2016-02-17 09:37:51','58.211.161.66','0','','0');");
E_D("replace into `phome_enewslog` values('41','admin','2016-02-17 09:37:57','58.211.161.66','1','','0');");
E_D("replace into `phome_enewslog` values('42','admin','2016-02-17 11:28:42','58.211.161.66','1','','0');");
E_D("replace into `phome_enewslog` values('43','admin','2016-02-18 08:34:31','58.211.161.66','0','','0');");
E_D("replace into `phome_enewslog` values('44','admin','2016-02-18 08:34:38','58.211.161.66','1','','0');");
E_D("replace into `phome_enewslog` values('45','admin','2016-02-18 12:43:46','58.211.161.66','1','','0');");
E_D("replace into `phome_enewslog` values('46','admin','2016-02-18 13:16:19','58.211.161.66','1','','0');");
E_D("replace into `phome_enewslog` values('47','admin','2016-02-24 13:03:59','58.211.161.66','1','','0');");
E_D("replace into `phome_enewslog` values('48','admin','2016-02-24 15:33:41','58.211.161.66','1','','0');");
E_D("replace into `phome_enewslog` values('49','adminhphpxtc','2016-02-25 13:10:32','58.211.161.66','0','','0');");
E_D("replace into `phome_enewslog` values('50','admin','2016-02-25 13:10:38','58.211.161.66','1','','0');");
E_D("replace into `phome_enewslog` values('51','admin','2016-02-26 11:06:24','58.211.161.66','0','','0');");
E_D("replace into `phome_enewslog` values('52','admin','2016-02-26 11:06:31','58.211.161.66','1','','0');");
E_D("replace into `phome_enewslog` values('53','admin','2016-06-28 05:09:45','::1','1','','0');");

@include("../../inc/footer.php");
?>
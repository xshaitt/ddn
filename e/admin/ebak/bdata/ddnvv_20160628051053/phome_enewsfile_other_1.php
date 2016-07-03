<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `phome_enewsfile_other`;");
E_C("CREATE TABLE `phome_enewsfile_other` (
  `fileid` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `pubid` tinyint(1) NOT NULL DEFAULT '0',
  `filename` char(60) NOT NULL DEFAULT '',
  `filesize` int(10) unsigned NOT NULL DEFAULT '0',
  `path` char(20) NOT NULL DEFAULT '',
  `adduser` char(30) NOT NULL DEFAULT '',
  `filetime` int(10) unsigned NOT NULL DEFAULT '0',
  `classid` tinyint(1) NOT NULL DEFAULT '0',
  `no` char(60) NOT NULL DEFAULT '',
  `type` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `onclick` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `id` int(10) unsigned NOT NULL DEFAULT '0',
  `cjid` int(10) unsigned NOT NULL DEFAULT '0',
  `fpath` tinyint(1) NOT NULL DEFAULT '0',
  `modtype` tinyint(3) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`fileid`),
  KEY `id` (`id`),
  KEY `type` (`type`),
  KEY `modtype` (`modtype`)
) ENGINE=MyISAM AUTO_INCREMENT=19 DEFAULT CHARSET=utf8");
E_D("replace into `phome_enewsfile_other` values('1','0','955c71d1f9ddb6a9d704c997ae373c43.jpg','19654','2016-01-07','admin','1452131079','0','1.jpg','1','0','1','0','0','2');");
E_D("replace into `phome_enewsfile_other` values('2','0','d4e22447ea59cf41ef849b34cfa66c48.jpg','26436','2016-01-11','admin','1452482751','0','2.jpg','1','0','4','0','0','2');");
E_D("replace into `phome_enewsfile_other` values('3','0','312b3f592abc57124bfd00b258b95b93.jpg','23651','2016-01-11','admin','1452483379','0','2.jpg','1','0','5','0','0','2');");
E_D("replace into `phome_enewsfile_other` values('4','0','24649cb82a7f4f7ac2d5d875fbcf0929.jpg','21134','2016-01-11','admin','1452486257','0','2.jpg','1','0','6','0','0','2');");
E_D("replace into `phome_enewsfile_other` values('5','0','f58e7e1e50a01c0f1398b933bb42073a.jpg','20402','2016-01-11','admin','1452487322','0','2.jpg','1','0','7','0','0','2');");
E_D("replace into `phome_enewsfile_other` values('6','0','2dd5d4b1446b19fec496d3f60703cef7.jpg','20579','2016-01-11','admin','1452487642','0','2.jpg','1','0','8','0','0','2');");
E_D("replace into `phome_enewsfile_other` values('7','0','6f0e1c9ec332131c7222a2bd1ebf623c.jpg','19793','2016-01-11','admin','1452488232','0','2.jpg','1','0','9','0','0','2');");
E_D("replace into `phome_enewsfile_other` values('8','0','6dcdbe3641126aab440813811659c829.jpg','19815','2016-01-11','admin','1452488688','0','2.jpg','1','0','10','0','0','2');");
E_D("replace into `phome_enewsfile_other` values('9','0','552565de5b1ccf91519d4bc11bbdcd3e.jpg','13783','2016-01-11','admin','1452488988','0','2.jpg','1','0','11','0','0','2');");
E_D("replace into `phome_enewsfile_other` values('10','0','530bbc3d11b295a5353fe1b992682652.jpg','23450','2016-01-11','admin','1452489428','0','2.jpg','1','0','12','0','0','2');");
E_D("replace into `phome_enewsfile_other` values('11','0','a80aa4abf3827374fce05299234c0bc8.jpg','20096','2016-01-11','admin','1452489700','0','2.jpg','1','0','13','0','0','2');");
E_D("replace into `phome_enewsfile_other` values('12','0','ba6920c0f643acb08bb8d951ae5a2e56.jpg','19532','2016-01-11','admin','1452490036','0','2.jpg','1','0','14','0','0','2');");
E_D("replace into `phome_enewsfile_other` values('13','0','e280af828e9fce8e012835f7d4accacd.jpg','19799','2016-01-11','admin','1452491346','0','2.jpg','1','0','15','0','0','2');");
E_D("replace into `phome_enewsfile_other` values('14','0','5d1dc76187bf7bfb61cfb929917917df.jpg','19112','2016-01-11','admin','1452491983','0','2.jpg','1','0','16','0','0','2');");
E_D("replace into `phome_enewsfile_other` values('15','0','d19c8982e946fff320d68704ad7fd1cb.jpg','21755','2016-01-11','admin','1452495719','0','2.jpg','1','0','17','0','0','2');");
E_D("replace into `phome_enewsfile_other` values('16','0','63a228f41aaf3b759a28bd94572305f0.jpg','20887','2016-01-12','admin','1452578720','0','1.jpg','1','0','18','0','0','2');");
E_D("replace into `phome_enewsfile_other` values('17','0','2f12d5e13020e5354c15338d90c51a2d.jpg','20916','2016-01-12','admin','1452581675','0','1.jpg','1','0','19','0','0','2');");
E_D("replace into `phome_enewsfile_other` values('18','0','9b07ac086c5a4b2a8f9984fc6afbfe3c.jpg','19853','2016-02-17','admin','1455680713','0','2.jpg','1','0','20','0','0','2');");

@include("../../inc/footer.php");
?>
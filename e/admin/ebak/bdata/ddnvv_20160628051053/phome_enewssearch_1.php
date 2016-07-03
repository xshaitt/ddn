<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `phome_enewssearch`;");
E_C("CREATE TABLE `phome_enewssearch` (
  `searchid` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `keyboard` varchar(255) NOT NULL DEFAULT '',
  `searchtime` int(10) unsigned NOT NULL DEFAULT '0',
  `searchclass` varchar(255) NOT NULL DEFAULT '',
  `result_num` int(10) unsigned NOT NULL DEFAULT '0',
  `searchip` varchar(20) NOT NULL DEFAULT '',
  `classid` varchar(255) NOT NULL DEFAULT '',
  `onclick` int(10) unsigned NOT NULL DEFAULT '0',
  `orderby` varchar(30) NOT NULL DEFAULT '0',
  `myorder` tinyint(1) NOT NULL DEFAULT '0',
  `checkpass` varchar(32) NOT NULL DEFAULT '',
  `tbname` varchar(60) NOT NULL DEFAULT '',
  `tempid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `iskey` tinyint(1) NOT NULL DEFAULT '0',
  `andsql` text NOT NULL,
  `trueclassid` smallint(5) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`searchid`),
  KEY `checkpass` (`checkpass`)
) ENGINE=MyISAM AUTO_INCREMENT=24 DEFAULT CHARSET=utf8");
E_D("replace into `phome_enewssearch` values('1','收纳','1452462713','title,smalltext','2','127.0.0.1','','5','newstime','0','f8f10c2c856a39bd05ed344d5b5c124b','news','2','0',' and ((title LIKE ''%收纳%'') or (smalltext LIKE ''%收纳%''))','0');");
E_D("replace into `phome_enewssearch` values('2','厨房','1452231695','title,smalltext','2','127.0.0.1','','2','newstime','0','2aa07a47ac5bd90efdd4450016ca513a','news','2','0',' and ((title LIKE ''%厨房%'') or (smalltext LIKE ''%厨房%''))','0');");
E_D("replace into `phome_enewssearch` values('3','技巧','1452302978','title,smalltext','1','::1','','1','newstime','0','96f51b4bd17511802ae51e86e96e5c47','news','2','0',' and ((title LIKE ''%技巧%'') or (smalltext LIKE ''%技巧%''))','0');");
E_D("replace into `phome_enewssearch` values('4','日本','1452585337','title,smalltext','2','58.211.161.66','','3','newstime','0','569444800ed6f3622d50fa0201a1c5c3','news','2','0',' and ((title LIKE ''%日本%'') or (smalltext LIKE ''%日本%''))','0');");
E_D("replace into `phome_enewssearch` values('5','各种','1452585322','title,smalltext','1','58.211.161.66','','1','newstime','0','489fa82ae2f623d76cc279c25b2994e8','news','2','0',' and ((title LIKE ''%各种%'') or (smalltext LIKE ''%各种%''))','0');");
E_D("replace into `phome_enewssearch` values('6','大全','1452585538','title,smalltext','1','58.211.161.66','','1','newstime','0','9e0347d0558289ec1b3838b150ea7d63','news','2','0',' and ((title LIKE ''%大全%'') or (smalltext LIKE ''%大全%''))','0');");
E_D("replace into `phome_enewssearch` values('7','叠衣服','1452585557','title,smalltext','1','58.211.161.66','','1','newstime','0','dba984eb42fbd26f8e7c69a0d931ad0a','news','2','0',' and ((title LIKE ''%叠衣服%'') or (smalltext LIKE ''%叠衣服%''))','0');");
E_D("replace into `phome_enewssearch` values('8','衣服','1452585568','title,smalltext','1','58.211.161.66','','1','newstime','0','80ad0b9bb837ae5483fa9bb4273a9bc2','news','2','0',' and ((title LIKE ''%衣服%'') or (smalltext LIKE ''%衣服%''))','0');");
E_D("replace into `phome_enewssearch` values('9','早餐','1452661782','title,smalltext','2','58.211.161.66','','1','newstime','0','67fe28c8b861e0b135d85498cb9a96d8','news','2','0',' and ((title LIKE ''%早餐%'') or (smalltext LIKE ''%早餐%''))','0');");
E_D("replace into `phome_enewssearch` values('10','贫血','1452673613','title,smalltext','1','58.211.161.66','','1','newstime','0','058f92e018324149dc88b405708028e2','news','2','0',' and ((title LIKE ''%贫血%'') or (smalltext LIKE ''%贫血%''))','0');");
E_D("replace into `phome_enewssearch` values('11','冰箱除异味','1452674621','title,smalltext','1','58.211.161.66','','1','newstime','0','8de66387c296a477ba8604510118763f','news','2','0',' and ((title LIKE ''%冰箱除异味%'') or (smalltext LIKE ''%冰箱除异味%''))','0');");
E_D("replace into `phome_enewssearch` values('12','淘米','1452751797','title,smalltext','1','58.211.161.66','','1','newstime','0','730200153188ef0ab5da7f39deb20e1b','news','2','0',' and ((title LIKE ''%淘米%'') or (smalltext LIKE ''%淘米%''))','0');");
E_D("replace into `phome_enewssearch` values('13','冻疮','1452759234','title,smalltext','1','58.211.161.66','','1','newstime','0','125031370f4d6080cd94ff5a9e82232f','news','2','0',' and ((title LIKE ''%冻疮%'') or (smalltext LIKE ''%冻疮%''))','0');");
E_D("replace into `phome_enewssearch` values('14','感冒','1454034998','title,smalltext','1','58.211.161.66','','1','newstime','0','129cd0840e1a7809067461c807c46eb9','news','2','0',' and ((title LIKE ''%感冒%'') or (smalltext LIKE ''%感冒%''))','0');");
E_D("replace into `phome_enewssearch` values('15','空腹','1455604587','title,smalltext','1','58.211.161.66','','1','newstime','0','7a9b3bb1d28e477b3bf63731fafa06b5','news','2','0',' and ((title LIKE ''%空腹%'') or (smalltext LIKE ''%空腹%''))','0');");
E_D("replace into `phome_enewssearch` values('16','鼻血','1455604830','title,smalltext','2','58.211.161.66','','1','newstime','0','08fbbf8370816836b7f7962f456b91d9','news','2','0',' and ((title LIKE ''%鼻血%'') or (smalltext LIKE ''%鼻血%''))','0');");
E_D("replace into `phome_enewssearch` values('17','偏方','1455685427','title,smalltext','7','58.211.161.66','','1','newstime','0','5d08a4d2cf6b999a9030cf0bc08f3614','news','2','0',' and ((title LIKE ''%偏方%'') or (smalltext LIKE ''%偏方%''))','0');");
E_D("replace into `phome_enewssearch` values('18','锻炼','1455775791','title,smalltext','1','58.211.161.66','','1','newstime','0','1f5053003e2e9f9f2cdb033d5ed3361c','news','2','0',' and ((title LIKE ''%锻炼%'') or (smalltext LIKE ''%锻炼%''))','0');");
E_D("replace into `phome_enewssearch` values('19','打蜡','1455780956','title,smalltext','2','58.211.161.66','','1','newstime','0','d9dde6d63acab43be0d8c82246575903','news','2','0',' and ((title LIKE ''%打蜡%'') or (smalltext LIKE ''%打蜡%''))','0');");
E_D("replace into `phome_enewssearch` values('20','地板打蜡','1455780964','title,smalltext','1','58.211.161.66','','1','newstime','0','9b5b94db879d85ab33262ed0ff58503f','news','2','0',' and ((title LIKE ''%地板打蜡%'') or (smalltext LIKE ''%地板打蜡%''))','0');");
E_D("replace into `phome_enewssearch` values('21','吐沙','1456290402','title,smalltext','1','58.211.161.66','','1','newstime','0','83979f28128447592426fce94a51c2f0','news','2','0',' and ((title LIKE ''%吐沙%'') or (smalltext LIKE ''%吐沙%''))','0');");
E_D("replace into `phome_enewssearch` values('22','妙招','1456300725','title,smalltext','8','58.211.161.66','','1','newstime','0','ecfadee8aca4530d782b1a9ee518daaa','news','2','0',' and ((title LIKE ''%妙招%'') or (smalltext LIKE ''%妙招%''))','0');");
E_D("replace into `phome_enewssearch` values('23','风俗','1456340098','title,smalltext','1','117.81.197.90','','1','newstime','0','47eda02c250fae39f00b501080e46a07','news','2','0',' and ((title LIKE ''%风俗%'') or (smalltext LIKE ''%风俗%''))','0');");

@include("../../inc/footer.php");
?>
<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `phome_enewsclass`;");
E_C("CREATE TABLE `phome_enewsclass` (
  `classid` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `bclassid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `classname` varchar(50) NOT NULL DEFAULT '',
  `sonclass` text NOT NULL,
  `is_zt` tinyint(1) NOT NULL DEFAULT '0',
  `lencord` smallint(6) NOT NULL DEFAULT '0',
  `link_num` tinyint(4) NOT NULL DEFAULT '0',
  `newstempid` smallint(6) NOT NULL DEFAULT '0',
  `onclick` int(11) NOT NULL DEFAULT '0',
  `listtempid` smallint(6) NOT NULL DEFAULT '0',
  `featherclass` text NOT NULL,
  `islast` tinyint(1) NOT NULL DEFAULT '0',
  `classpath` text NOT NULL,
  `classtype` varchar(10) NOT NULL DEFAULT '',
  `newspath` varchar(20) NOT NULL DEFAULT '',
  `filename` tinyint(1) NOT NULL DEFAULT '0',
  `filetype` varchar(10) NOT NULL DEFAULT '',
  `openpl` tinyint(1) NOT NULL DEFAULT '0',
  `openadd` tinyint(1) NOT NULL DEFAULT '0',
  `newline` int(11) NOT NULL DEFAULT '0',
  `hotline` int(11) NOT NULL DEFAULT '0',
  `goodline` int(11) NOT NULL DEFAULT '0',
  `classurl` varchar(200) NOT NULL DEFAULT '',
  `groupid` smallint(6) NOT NULL DEFAULT '0',
  `myorder` smallint(6) NOT NULL DEFAULT '0',
  `filename_qz` varchar(20) NOT NULL DEFAULT '',
  `hotplline` tinyint(4) NOT NULL DEFAULT '0',
  `modid` smallint(6) NOT NULL DEFAULT '0',
  `checked` tinyint(1) NOT NULL DEFAULT '0',
  `firstline` tinyint(4) NOT NULL DEFAULT '0',
  `bname` varchar(50) NOT NULL DEFAULT '',
  `islist` tinyint(1) NOT NULL DEFAULT '0',
  `searchtempid` smallint(6) NOT NULL DEFAULT '0',
  `tid` smallint(6) NOT NULL DEFAULT '0',
  `tbname` varchar(60) NOT NULL DEFAULT '',
  `maxnum` int(11) NOT NULL DEFAULT '0',
  `checkpl` tinyint(1) NOT NULL DEFAULT '0',
  `down_num` tinyint(4) NOT NULL DEFAULT '0',
  `online_num` tinyint(4) NOT NULL DEFAULT '0',
  `listorder` varchar(50) NOT NULL DEFAULT '',
  `reorder` varchar(50) NOT NULL DEFAULT '',
  `intro` text NOT NULL,
  `classimg` varchar(255) NOT NULL DEFAULT '',
  `jstempid` smallint(6) NOT NULL DEFAULT '0',
  `addinfofen` int(11) NOT NULL DEFAULT '0',
  `listdt` tinyint(1) NOT NULL DEFAULT '0',
  `showclass` tinyint(1) NOT NULL DEFAULT '0',
  `showdt` tinyint(1) NOT NULL DEFAULT '0',
  `checkqadd` tinyint(1) NOT NULL DEFAULT '0',
  `qaddlist` tinyint(1) NOT NULL DEFAULT '0',
  `qaddgroupid` text NOT NULL,
  `qaddshowkey` tinyint(1) NOT NULL DEFAULT '0',
  `adminqinfo` tinyint(1) NOT NULL DEFAULT '0',
  `doctime` smallint(6) NOT NULL DEFAULT '0',
  `classpagekey` varchar(255) NOT NULL DEFAULT '',
  `dtlisttempid` smallint(6) NOT NULL DEFAULT '0',
  `classtempid` smallint(6) NOT NULL DEFAULT '0',
  `nreclass` tinyint(1) NOT NULL DEFAULT '0',
  `nreinfo` tinyint(1) NOT NULL DEFAULT '0',
  `nrejs` tinyint(1) NOT NULL DEFAULT '0',
  `nottobq` tinyint(1) NOT NULL DEFAULT '0',
  `ipath` varchar(255) NOT NULL DEFAULT '',
  `addreinfo` tinyint(1) NOT NULL DEFAULT '0',
  `haddlist` tinyint(4) NOT NULL DEFAULT '0',
  `sametitle` tinyint(1) NOT NULL DEFAULT '0',
  `definfovoteid` smallint(6) NOT NULL DEFAULT '0',
  `wburl` varchar(255) NOT NULL DEFAULT '',
  `qeditchecked` tinyint(1) NOT NULL DEFAULT '0',
  `wapstyleid` smallint(6) NOT NULL DEFAULT '0',
  `repreinfo` tinyint(1) NOT NULL DEFAULT '0',
  `pltempid` smallint(6) NOT NULL DEFAULT '0',
  `cgroupid` text NOT NULL,
  `yhid` smallint(6) NOT NULL DEFAULT '0',
  `wfid` smallint(6) NOT NULL DEFAULT '0',
  `cgtoinfo` tinyint(1) NOT NULL DEFAULT '0',
  `bdinfoid` varchar(25) NOT NULL DEFAULT '',
  `repagenum` smallint(5) unsigned NOT NULL DEFAULT '0',
  `keycid` smallint(6) NOT NULL DEFAULT '0',
  `allinfos` int(10) unsigned NOT NULL DEFAULT '0',
  `infos` int(10) unsigned NOT NULL DEFAULT '0',
  `addtime` int(10) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`classid`),
  KEY `bclassid` (`bclassid`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8");
E_D("replace into `phome_enewsclass` values('1','0','生活小窍门','','0','25','10','10','0','9','','1','shxqm','.html','','0','.html','0','1','10','10','10','','0','0','','10','1','1','10','shxqm','0','0','1','news','0','0','2','2','id DESC','newstime DESC','大呆牛生活百科网生活小窍门频道，收录日常生活中最实用的生活妙招、生活小常识、生活小技巧等生活知识大全，让大家养成健康良好的生活习惯，低碳快乐生活每一天。','','1','0','0','0','0','0','0','','0','0','0','生活常识,生活知识,生活小窍门,生活妙招','9','1','0','0','0','0','a','1','0','0','0','','0','0','0','0','','0','0','0','','0','0','46','46','1452113328');");
E_D("replace into `phome_enewsclass` values('2','0','健康养生','','0','25','10','10','0','9','','1','jkys','.html','','0','.html','0','1','10','10','10','','0','0','','10','1','1','10','jkys','0','0','1','news','0','0','2','2','id DESC','newstime DESC','大呆牛生活百科网健康养生频道，收录日常生活中最有用的男性健康、饮食禁忌、养生食谱、运动养生、急救常识、偏方大全、女性健康等养生知识大全，让大家学会各季节的养生方法，享受健康养生之道，快乐健康生活每一天。','','1','0','0','0','0','0','0','','0','0','0','养生,健康养生,食谱,女性,偏方','9','1','0','0','0','0','a','1','0','0','0','','0','0','0','0','','0','0','0','','0','0','33','33','1452127730');");
E_D("replace into `phome_enewsclass` values('3','0','民俗文化','','0','25','10','10','0','9','','1','mswh','.html','','0','.html','0','1','10','10','10','','0','0','','10','1','1','10','mswh','0','0','1','news','0','0','2','2','id DESC','newstime DESC','大呆牛生活百科网(www.dadainiu.com)民俗文化频道，收录了中国及世界各地的风俗习惯、民俗文化、节日大全、传统礼仪等知识，让大家领略传统文化的同时促进自身的修养。','','1','0','0','0','0','0','0','','0','0','0','民俗文化,风俗习惯,节日大全','9','1','0','0','0','0','a','1','0','0','0','','0','0','0','0','','0','0','0','','0','0','3','3','1452127750');");
E_D("replace into `phome_enewsclass` values('4','0','兴趣户外','','0','25','10','10','0','9','','1','xqhw','.html','','0','.html','0','1','10','10','10','','0','0','','10','1','1','10','xqhw','0','0','1','news','0','0','2','2','id DESC','newstime DESC','大呆牛生活百科网(www.dadainiu.com)兴趣户外频道，收录了关于折纸大全、手工编织、旅游景点、养花养鱼、琴棋书画、宠物等兴趣爱好知识，让大家在生活之余打发休闲时光，快乐生活。','','1','0','0','0','0','0','0','','0','0','0','兴趣爱好,户外,旅游','9','1','0','0','0','0','a','1','0','0','0','','0','0','0','0','','0','0','0','','0','0','2','2','1452127794');");
E_D("replace into `phome_enewsclass` values('5','0','职场社交','','0','25','10','10','0','9','','1','zcsj','.html','','0','.html','0','1','10','10','10','','0','0','','10','1','1','10','zcsj','0','0','1','news','0','0','2','2','id DESC','newstime DESC','大呆牛生活百科网(www.dadainiu.com)职场社交频道，收录了关于职场处事技巧、面试技巧、为人处世之道、口才训练、社交礼仪等职场社交小常识，让大家在社会工作中如鱼得水，事事顺心。','','1','0','0','0','0','0','0','','0','0','0','面试技巧,为人处事,职场社交','9','1','0','0','0','0','a','1','0','0','0','','0','0','0','0','','0','0','0','','0','0','2','2','1452127822');");
E_D("replace into `phome_enewsclass` values('6','0','情感心灵','','0','25','10','10','0','9','','1','qgxl','.html','','0','.html','0','1','10','10','10','','0','0','','10','1','1','10','qgxl','0','0','1','news','0','0','2','2','id DESC','newstime DESC','大呆牛生活百科网(www.dadainiu.com)情感心灵频道，收录了谈婚论嫁、恋爱宝典、婆媳关系、婚姻两性、外遇出轨、家庭生活、夫妻感情等内容资讯，为大家解决日常生活遇到的情感困惑问题。','','1','0','0','0','0','0','0','','0','0','0','婚姻生活,婚前婚后,婆媳关系,婚姻两性','9','1','0','0','0','0','a','1','0','0','0','','0','0','0','0','','0','0','0','','0','0','2','2','1452127846');");
E_D("replace into `phome_enewsclass` values('7','0','更多','|','0','25','10','0','0','0','','0','','.html','Y-m-d','0','.html','0','0','10','10','10','','0','0','','10','1','1','10','gd','0','0','1','news','0','0','2','2','id DESC','newstime DESC','','','1','0','0','0','0','0','0','','0','0','0','','0','1','0','0','0','0','','1','0','0','0','/a/','0','0','0','0','','0','0','0','','0','0','0','0','1452133533');");

@include("../../inc/footer.php");
?>
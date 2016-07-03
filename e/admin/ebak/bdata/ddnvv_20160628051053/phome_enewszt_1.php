<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `phome_enewszt`;");
E_C("CREATE TABLE `phome_enewszt` (
  `ztid` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `ztname` varchar(60) NOT NULL DEFAULT '',
  `onclick` int(10) unsigned NOT NULL DEFAULT '0',
  `ztnum` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `listtempid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `ztpath` varchar(255) NOT NULL DEFAULT '',
  `zttype` varchar(10) NOT NULL DEFAULT '',
  `zturl` varchar(200) NOT NULL DEFAULT '',
  `classid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `islist` tinyint(1) NOT NULL DEFAULT '0',
  `maxnum` int(11) NOT NULL DEFAULT '0',
  `reorder` varchar(50) NOT NULL DEFAULT '',
  `intro` text NOT NULL,
  `ztimg` varchar(255) NOT NULL DEFAULT '',
  `zcid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `showzt` tinyint(1) NOT NULL DEFAULT '0',
  `ztpagekey` varchar(255) NOT NULL DEFAULT '',
  `classtempid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `myorder` smallint(5) unsigned NOT NULL DEFAULT '0',
  `usezt` tinyint(1) NOT NULL DEFAULT '0',
  `yhid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `endtime` int(10) unsigned NOT NULL DEFAULT '0',
  `closepl` tinyint(1) NOT NULL DEFAULT '0',
  `checkpl` tinyint(1) NOT NULL DEFAULT '0',
  `restb` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `usernames` varchar(255) NOT NULL DEFAULT '',
  `addtime` int(10) unsigned NOT NULL DEFAULT '0',
  `pltempid` smallint(5) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`ztid`),
  KEY `classid` (`classid`),
  KEY `zcid` (`zcid`),
  KEY `usezt` (`usezt`)
) ENGINE=MyISAM AUTO_INCREMENT=21 DEFAULT CHARSET=utf8");
E_D("replace into `phome_enewszt` values('1','收纳技巧','8','25','11','a/shouna','.html','','1','1','0','newstime DESC','家庭收纳技巧大全，最全的收纳小窍门知识，教你如何更合理的收纳物体，将家里打理的有理有条。','http://www.dadainiu.com/d/file/p/2016-01-07/955c71d1f9ddb6a9d704c997ae373c43.jpg','0','0','收纳,收纳的小技巧','1','0','0','0','0','0','0','1','','1452131126','0');");
E_D("replace into `phome_enewszt` values('4','防骗常识','6','25','11','a/fangpian','.html','','1','1','0','newstime DESC','最新防骗知识大全，防骗案例展示，防骗指南手册，在如今的社会，骗子越来越多，如手机诈骗、网络诈骗、微信qq诈骗等等，防不胜防，所以如何增加防范常识是大家必要修炼的一课，防止上当受骗。','http://www.dadainiu.com/d/file/p/2016-01-11/d4e22447ea59cf41ef849b34cfa66c48.jpg','0','0','防骗,骗子花招','1','0','0','0','0','0','0','1','','1452482772','0');");
E_D("replace into `phome_enewszt` values('5','冬季养生','5','25','11','a/dongjiyangsheng','.html','','2','1','0','newstime DESC','冬季养生小常识频道，包含最全的冬季养生小常识、冬季养生食谱等文章，让大家在冬季也能健康快乐的生活。','http://www.dadainiu.com/d/file/p/2016-01-11/312b3f592abc57124bfd00b258b95b93.jpg','0','0','冬季养生,冬季养生小常识','1','0','0','0','0','0','0','1','','1452483358','0');");
E_D("replace into `phome_enewszt` values('6','饮食禁忌','9','25','11','a/yinshijinji','.html','','2','1','0','newstime DESC','大呆牛生活百科网饮食禁忌栏目，收录最全的食物相克知识、饮食禁忌常识，告诉大家哪些东西不能一起吃，防止食物中毒，让大家合理膳食、科学饮食。','http://www.dadainiu.com/d/file/p/2016-01-11/24649cb82a7f4f7ac2d5d875fbcf0929.jpg','0','0','食物相克,饮食禁忌,科学饮食','1','0','0','0','0','0','0','1','','1452486261','0');");
E_D("replace into `phome_enewszt` values('7','风俗习惯','8','25','11','a/fengsu','.html','','3','1','0','newstime DESC','大呆牛生活百科网风俗习惯频道，收录关于各种节日习俗、少数民族风俗习惯、礼仪、世界各地的风俗等知识。','http://www.dadainiu.com//d/file/p/2016-01-11/f58e7e1e50a01c0f1398b933bb42073a.jpg','0','0','节日风俗,民族风俗,风俗习惯','1','0','0','0','0','0','0','1','','1452487341','0');");
E_D("replace into `phome_enewszt` values('8','节日大全','4','25','11','a/jieri','.html','','3','1','0','newstime DESC','大呆牛百科生活网节日大全频道，收录中国节日大全、世界节日大全，今天是什么节日？来这看看吧。最全的节日风俗习惯，让你更加了解国内国外的传统文化知识。','http://www.dadainiu.com//d/file/p/2016-01-11/2dd5d4b1446b19fec496d3f60703cef7.jpg','0','0','节日大全,节日风俗,节日礼仪','1','0','0','0','0','0','0','1','','1452487646','0');");
E_D("replace into `phome_enewszt` values('9','面试技巧','1','25','11','a/jieri1','.html','','5','1','0','newstime DESC','面试的时候要注意什么？大呆牛网面试技巧频道将教你面试的时候注意的事项，以及面试的礼仪、着装、谈话技巧等。面试是你能够得到一份工作的关键。面试前的准备工作、面试当中应该注意的问题，以及如何在面试中推销自己等等都是必须要注意的事项。','http://www.dadainiu.com//d/file/p/2016-01-11/6f0e1c9ec332131c7222a2bd1ebf623c.jpg','0','0','面试技巧,面试注意事项,怎么面试','1','0','0','0','0','0','0','1','','1452488241','0');");
E_D("replace into `phome_enewszt` values('10','社交礼仪','0','25','11','a/shejiaoliyi','.html','','5','1','0','newstime DESC','在当今社会中，通过社交，人们可以互通信息，共享资源，对取得事业成功大有获益。社交礼仪是指在人际交往、社会交往和国际交往活动中，用于表示尊重、亲善和友好的首选行为规范和惯用形式。大呆牛网社交礼仪常识大全将告诉大家日常生活中常见的社交礼仪及规范，让大家在日后社交活动中能够给人留下美好的印象。','http://www.dadainiu.com//d/file/p/2016-01-11/6dcdbe3641126aab440813811659c829.jpg','0','0','社交礼仪大全','1','0','0','0','0','0','0','1','','1452488713','0');");
E_D("replace into `phome_enewszt` values('11','折纸大全','2','25','11','a/zhezhi','.html','','4','1','0','newstime DESC','大呆牛网折纸大全频道，收录者纸飞机、千纸鹤、纸船、五角星等各种好玩好看的折纸教程，还有各种可打印的折纸图纸素材等，喜欢折纸的朋友一起来学习吧。','http://www.dadainiu.com//d/file/p/2016-01-11/552565de5b1ccf91519d4bc11bbdcd3e.jpg','0','0','折纸大全,折纸','1','0','0','0','0','0','0','1','','1452488996','0');");
E_D("replace into `phome_enewszt` values('12','旅游景点','4','25','11','a/jingdian','.html','','4','1','0','newstime DESC','什么地方好玩，很多朋友节假日想出去旅游玩儿，却不知道去什么地方玩好。大呆牛网就收录中国及国外各地旅游景点大全及介绍，让大家更好的选择旅游的地方。','http://www.dadainiu.com/d/file/p/2016-01-11/530bbc3d11b295a5353fe1b992682652.jpg','0','0','旅游景点大全,旅游胜地,好玩的地方','1','0','0','0','0','0','0','1','','1452489461','0');");
E_D("replace into `phome_enewszt` values('13','婆媳关系','4','25','11','a/poxi','.html','','6','1','0','newstime DESC','婆媳关系一直是家庭关系中一个经常出现问题的环节，怎么处理好婆媳关系，是一个和睦家庭所需要了解的。本栏目就如何处理婆媳之间的关系为主题，介绍常见的婆媳相处常识及禁忌。','http://www.dadainiu.com/d/file/p/2016-01-11/a80aa4abf3827374fce05299234c0bc8.jpg','0','0','婆媳关系,婆媳过招,婆媳相处技巧','1','0','0','0','0','0','0','1','','1452489732','0');");
E_D("replace into `phome_enewszt` values('14','夫妻感情','1','25','11','a/fuqiganqing','.html','','6','1','0','newstime DESC','如何增进夫妻间的感情，增进夫妻感情的感情，抓住另外一半的心的技巧大全。好的婚姻都需要经营，不然少不了摩擦，学习如何稳固夫妻感情是每一对夫妻的必修课。','http://www.dadainiu.com/d/file/p/2016-01-11/ba6920c0f643acb08bb8d951ae5a2e56.jpg','0','0','增进夫妻感情,夫妻相处技巧','1','0','0','0','0','0','0','1','','1452490076','0');");
E_D("replace into `phome_enewszt` values('15','孕妇禁忌','0','25','11','a/yunfujinji','.html','','2','1','0','newstime DESC','孕妇怀孕了有什么禁忌，孕妇禁忌食物大全，孕妇哪些东西不能吃以及怀孕后哪些事情不能做。怀胎十月，妈妈们需要面对孕期生活的每一个细节，本栏目就告诉大家孕期的注意事项及怀孕禁忌小知识大全。','http://www.dadainiu.com/d/file/p/2016-01-11/e280af828e9fce8e012835f7d4accacd.jpg','0','0','孕妇注意事项,怀孕禁忌食物','1','0','0','0','0','0','0','1','','1452491395','0');");
E_D("replace into `phome_enewszt` values('16','疾病预防','7','25','11','a/jibingyufang','.html','','2','1','0','newstime DESC','如何预防疾病，大呆牛生活百科网疾病预防栏目提供常见疾病预防、传染病、心血管病预防吗，癌症预防，让大家养成良好的生活习惯，警惕疾病危害我们的健康。','http://www.dadainiu.com/d/file/p/2016-01-11/5d1dc76187bf7bfb61cfb929917917df.jpg','0','0','疾病预防,癌症预防','1','0','0','0','0','0','0','1','','1452491988','0');");
E_D("replace into `phome_enewszt` values('17','除异味','5','25','11','a/chuchou','.html','','1','1','0','newstime DESC','家里有异味怎么办，大呆牛生活百科网生活小窍门除异味方法频道，教大家如何汽车除异味、卫生间除异味、冰箱除异味、鞋子、柜子等除臭除异味小技巧，希望大家能受益。','http://www.dadainiu.com/d/file/p/2016-01-11/d19c8982e946fff320d68704ad7fd1cb.jpg','0','0','除臭,除异味方法','1','0','0','0','0','0','0','1','','1452495727','0');");
E_D("replace into `phome_enewszt` values('18','偏方大全','8','25','11','a/pianfang','.html','','2','1','0','newstime DESC','大呆牛生活百科偏方大全频道，收录了民间奇效偏方、癫痫、阳痿早泄偏方、下奶偏方、皮肤病牛皮癣偏方、牙疼偏方、咽炎偏方等偏方秘方大全，让你更好的调理自己的身体。','http://www.dadainiu.com/d/file/p/2016-01-12/63a228f41aaf3b759a28bd94572305f0.jpg','0','0','偏方,名家偏方,偏方秘方,重要','1','0','0','0','0','0','0','1','','1452578723','0');");
E_D("replace into `phome_enewszt` values('19','养生药膳食谱','4','25','11','a/yaoshan','.html','','2','1','0','newstime DESC','大呆牛网养生药膳食谱频道收录了各种养生药膳粥、养生药膳汤、四季养生药膳等各种药膳食谱的做法，药膳既具有较高的营养价值，又可防病治病、保健强身、延年益寿。','http://www.dadainiu.com/d/file/p/2016-01-12/2f12d5e13020e5354c15338d90c51a2d.jpg','0','0','药膳,药膳大全,养生','1','0','0','0','0','0','0','1','','1452581685','0');");
E_D("replace into `phome_enewszt` values('20','春季养生','3','25','11','a/chunjiyangsheng','.html','','2','1','0','newstime DESC','春季养生知识大全，春天怎么养生？怎么吃才健康？大呆牛网春节养生常识栏目收录最全的春季养生方法、春季养生保健食谱等知识，让大家在春天过得更好、更健康。','http://www.dadainiu.com/d/file/p/2016-02-17/9b07ac086c5a4b2a8f9984fc6afbfe3c.jpg','0','0','春季养生,春天养生方法','1','0','0','0','0','0','0','1','','1455680757','0');");

@include("../../inc/footer.php");
?>
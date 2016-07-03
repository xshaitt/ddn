<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `phome_ecms_news_index`;");
E_C("CREATE TABLE `phome_ecms_news_index` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `classid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `checked` tinyint(1) NOT NULL DEFAULT '0',
  `newstime` int(10) unsigned NOT NULL DEFAULT '0',
  `truetime` int(10) unsigned NOT NULL DEFAULT '0',
  `lastdotime` int(10) unsigned NOT NULL DEFAULT '0',
  `havehtml` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `classid` (`classid`),
  KEY `checked` (`checked`),
  KEY `newstime` (`newstime`),
  KEY `truetime` (`truetime`,`id`),
  KEY `havehtml` (`classid`,`truetime`,`havehtml`,`checked`,`id`)
) ENGINE=MyISAM AUTO_INCREMENT=127 DEFAULT CHARSET=utf8");
E_D("replace into `phome_ecms_news_index` values('3','2','1','1452493460','1452493647','1452499741','1');");
E_D("replace into `phome_ecms_news_index` values('4','1','1','1452496514','1452497241','1452501829','1');");
E_D("replace into `phome_ecms_news_index` values('5','1','1','1452498842','1452499153','1452499828','1');");
E_D("replace into `phome_ecms_news_index` values('6','2','1','1452579519','1452579592','1452579740','1');");
E_D("replace into `phome_ecms_news_index` values('7','2','1','1452580455','1452580565','1452580565','1');");
E_D("replace into `phome_ecms_news_index` values('8','2','1','1452582246','1452582357','1452582378','1');");
E_D("replace into `phome_ecms_news_index` values('9','3','1','1452584283','1452584837','1452585191','1');");
E_D("replace into `phome_ecms_news_index` values('10','3','1','1452653593','1452653750','1452653750','1');");
E_D("replace into `phome_ecms_news_index` values('11','2','1','1452654634','1452654744','1452654764','1');");
E_D("replace into `phome_ecms_news_index` values('12','2','1','1452661470','1452661576','1452661576','1');");
E_D("replace into `phome_ecms_news_index` values('13','1','1','1452664976','1452665332','1452665332','1');");
E_D("replace into `phome_ecms_news_index` values('14','5','1','1452666596','1452666866','1452667040','1');");
E_D("replace into `phome_ecms_news_index` values('15','4','1','1452668342','1452668541','1452668610','1');");
E_D("replace into `phome_ecms_news_index` values('16','1','1','1452674305','1452674386','1452674727','1');");
E_D("replace into `phome_ecms_news_index` values('17','1','1','1452739079','1452739401','1452739401','1');");
E_D("replace into `phome_ecms_news_index` values('18','3','1','1452739918','1452740078','1452740180','1');");
E_D("replace into `phome_ecms_news_index` values('19','2','1','1452740348','1452740691','1452741279','1');");
E_D("replace into `phome_ecms_news_index` values('20','6','1','1452741838','1452742045','1452742045','1');");
E_D("replace into `phome_ecms_news_index` values('21','6','1','1452742616','1452742805','1452742805','1');");
E_D("replace into `phome_ecms_news_index` values('22','2','1','1452745878','1452746005','1452751781','1');");
E_D("replace into `phome_ecms_news_index` values('23','1','1','1452747932','1452748028','1452748078','1');");
E_D("replace into `phome_ecms_news_index` values('24','1','1','1452748999','1452749136','1452749136','1');");
E_D("replace into `phome_ecms_news_index` values('25','1','1','1452750161','1452750304','1452750304','1');");
E_D("replace into `phome_ecms_news_index` values('26','1','1','1452751239','1452751347','1452751436','1');");
E_D("replace into `phome_ecms_news_index` values('27','1','1','1452752285','1452752411','1452752411','1');");
E_D("replace into `phome_ecms_news_index` values('28','2','1','1452757572','1452757698','1452757698','1');");
E_D("replace into `phome_ecms_news_index` values('29','2','1','1452759094','1452759192','1452759192','1');");
E_D("replace into `phome_ecms_news_index` values('30','1','1','1452843230','1452843477','1452843477','1');");
E_D("replace into `phome_ecms_news_index` values('31','2','1','1452843910','1452844179','1452844228','1');");
E_D("replace into `phome_ecms_news_index` values('32','1','1','1452845804','1452846100','1453095802','1');");
E_D("replace into `phome_ecms_news_index` values('33','2','1','1453174442','1453174442','1453175616','1');");
E_D("replace into `phome_ecms_news_index` values('34','2','1','1453177547','1453177547','1453177825','1');");
E_D("replace into `phome_ecms_news_index` values('35','2','1','1453177919','1453177919','1453178303','1');");
E_D("replace into `phome_ecms_news_index` values('36','1','1','1453178556','1453178556','1453178912','1');");
E_D("replace into `phome_ecms_news_index` values('37','4','1','1453190683','1453190683','1453191589','1');");
E_D("replace into `phome_ecms_news_index` values('38','5','1','1453191694','1453191694','1453192331','1');");
E_D("replace into `phome_ecms_news_index` values('39','2','1','1454033208','1454033208','1454033619','1');");
E_D("replace into `phome_ecms_news_index` values('40','1','1','1454034164','1454034164','1454034618','1');");
E_D("replace into `phome_ecms_news_index` values('41','1','1','1454035049','1454035049','1454035321','1');");
E_D("replace into `phome_ecms_news_index` values('42','1','1','1454035585','1454035585','1454037088','1');");
E_D("replace into `phome_ecms_news_index` values('43','2','1','1455597360','1455597360','1455597819','1');");
E_D("replace into `phome_ecms_news_index` values('44','2','1','1455604218','1455604497','1455604497','1');");
E_D("replace into `phome_ecms_news_index` values('45','2','1','1455605410','1455605538','1455605619','1');");
E_D("replace into `phome_ecms_news_index` values('46','1','1','1455607423','1455607584','1455607584','1');");
E_D("replace into `phome_ecms_news_index` values('47','2','1','1455609502','1455609768','1455610360','1');");
E_D("replace into `phome_ecms_news_index` values('48','2','1','1455611001','1455611090','1455611090','1');");
E_D("replace into `phome_ecms_news_index` values('49','2','1','1455679750','1455679994','1455679994','1');");
E_D("replace into `phome_ecms_news_index` values('50','2','1','1455681966','1455682087','1455682087','1');");
E_D("replace into `phome_ecms_news_index` values('51','1','1','1455683760','1455683760','1455684043','1');");
E_D("replace into `phome_ecms_news_index` values('52','1','1','1455683760','1455683760','1455684552','1');");
E_D("replace into `phome_ecms_news_index` values('53','2','1','1455685220','1455685396','1455685396','1');");
E_D("replace into `phome_ecms_news_index` values('54','1','1','1456379667','1455686375','1456379797','1');");
E_D("replace into `phome_ecms_news_index` values('55','1','1','1455782299','1455755751','1455782311','1');");
E_D("replace into `phome_ecms_news_index` values('56','1','1','1456456217','1455755751','1456456221','1');");
E_D("replace into `phome_ecms_news_index` values('126','2','1','1456459785','1456459880','1456459880','1');");
E_D("replace into `phome_ecms_news_index` values('125','2','1','1456458703','1456458868','1456458868','1');");
E_D("replace into `phome_ecms_news_index` values('111','2','1','1456290246','1456290373','1456290373','1');");
E_D("replace into `phome_ecms_news_index` values('124','2','1','1456457182','1456457357','1456457357','1');");
E_D("replace into `phome_ecms_news_index` values('65','1','1','1455755751','1455755751','1455756567','1');");
E_D("replace into `phome_ecms_news_index` values('68','1','1','1455774393','1455755751','1455774430','1');");
E_D("replace into `phome_ecms_news_index` values('72','1','1','1455773868','1455755751','1455773870','1');");
E_D("replace into `phome_ecms_news_index` values('73','1','1','1455756314','1455755751','1455756317','1');");
E_D("replace into `phome_ecms_news_index` values('76','1','1','1456299683','1455755751','1456299893','1');");
E_D("replace into `phome_ecms_news_index` values('82','1','1','1455773239','1455755751','1455773242','1');");
E_D("replace into `phome_ecms_news_index` values('89','1','1','1456378707','1455755751','1456378920','1');");
E_D("replace into `phome_ecms_news_index` values('91','1','1','1456300439','1455755751','1456300692','1');");
E_D("replace into `phome_ecms_news_index` values('93','1','1','1455755751','1455755751','1455756058','1');");
E_D("replace into `phome_ecms_news_index` values('94','1','1','1456456295','1455755751','1456456423','1');");
E_D("replace into `phome_ecms_news_index` values('98','1','1','1455780875','1455755751','1455780878','1');");
E_D("replace into `phome_ecms_news_index` values('99','1','1','1455755751','1455755751','1455756888','1');");
E_D("replace into `phome_ecms_news_index` values('100','1','1','1455778679','1455755751','1455778730','1');");
E_D("replace into `phome_ecms_news_index` values('101','1','1','1456379112','1455755751','1456379324','1');");
E_D("replace into `phome_ecms_news_index` values('105','2','1','1455770638','1455770746','1455770746','1');");
E_D("replace into `phome_ecms_news_index` values('106','1','1','1455770848','1455770954','1455770967','1');");
E_D("replace into `phome_ecms_news_index` values('107','1','1','1455771015','1455771133','1455771133','1');");
E_D("replace into `phome_ecms_news_index` values('108','1','1','1455771186','1455771326','1455771326','1');");
E_D("replace into `phome_ecms_news_index` values('109','2','1','1455775437','1455775677','1455775677','1');");
E_D("replace into `phome_ecms_news_index` values('110','2','1','1455776510','1455776607','1455776607','1');");
E_D("replace into `phome_ecms_news_index` values('112','2','1','1456291898','1456292126','1456292244','1');");
E_D("replace into `phome_ecms_news_index` values('113','1','1','1456382710','1453169497','1456382768','1');");
E_D("replace into `phome_ecms_news_index` values('114','1','1','1456379623','1453169496','1456379626','1');");
E_D("replace into `phome_ecms_news_index` values('115','1','1','1456377445','1456299547','1456377583','1');");
E_D("replace into `phome_ecms_news_index` values('116','1','1','1456301049','1456299547','1456301052','1');");
E_D("replace into `phome_ecms_news_index` values('119','1','1','1456299953','1456299569','1456300180','1');");
E_D("replace into `phome_ecms_news_index` values('120','1','1','1456378247','1453167021','1456378251','1');");
E_D("replace into `phome_ecms_news_index` values('121','2','1','1456301970','1456302091','1456302091','1');");
E_D("replace into `phome_ecms_news_index` values('122','1','1','1456378408','1456378578','1456378592','1');");
E_D("replace into `phome_ecms_news_index` values('123','2','1','1456382453','1456382561','1456382561','1');");

@include("../../inc/footer.php");
?>
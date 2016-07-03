<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `phome_ecms_infoclass_news`;");
E_C("CREATE TABLE `phome_ecms_infoclass_news` (
  `classid` int(10) unsigned NOT NULL DEFAULT '0',
  `zz_title` text NOT NULL,
  `z_title` varchar(255) NOT NULL DEFAULT '',
  `qz_title` varchar(255) NOT NULL DEFAULT '',
  `save_title` varchar(10) NOT NULL DEFAULT '',
  `zz_titlepic` text NOT NULL,
  `z_titlepic` varchar(255) NOT NULL DEFAULT '',
  `qz_titlepic` varchar(255) NOT NULL DEFAULT '',
  `save_titlepic` varchar(10) NOT NULL DEFAULT '',
  `zz_newstime` text NOT NULL,
  `z_newstime` varchar(255) NOT NULL DEFAULT '',
  `qz_newstime` varchar(255) NOT NULL DEFAULT '',
  `save_newstime` varchar(10) NOT NULL DEFAULT '',
  `zz_ftitle` text NOT NULL,
  `z_ftitle` varchar(255) NOT NULL DEFAULT '',
  `qz_ftitle` varchar(255) NOT NULL DEFAULT '',
  `save_ftitle` varchar(10) NOT NULL DEFAULT '',
  `zz_smalltext` text NOT NULL,
  `z_smalltext` varchar(255) NOT NULL DEFAULT '',
  `qz_smalltext` varchar(255) NOT NULL DEFAULT '',
  `save_smalltext` varchar(10) NOT NULL DEFAULT '',
  `zz_writer` text NOT NULL,
  `z_writer` varchar(255) NOT NULL DEFAULT '',
  `qz_writer` varchar(255) NOT NULL DEFAULT '',
  `save_writer` varchar(10) NOT NULL DEFAULT '',
  `zz_befrom` text NOT NULL,
  `z_befrom` varchar(255) NOT NULL DEFAULT '',
  `qz_befrom` varchar(255) NOT NULL DEFAULT '',
  `save_befrom` varchar(10) NOT NULL DEFAULT '',
  `zz_newstext` text NOT NULL,
  `z_newstext` varchar(255) NOT NULL DEFAULT '',
  `qz_newstext` varchar(255) NOT NULL DEFAULT '',
  `save_newstext` varchar(10) NOT NULL DEFAULT '',
  `zz_diggtop` text NOT NULL,
  `z_diggtop` varchar(255) NOT NULL DEFAULT '',
  `qz_diggtop` varchar(255) NOT NULL DEFAULT '',
  `save_diggtop` varchar(10) NOT NULL DEFAULT '',
  `zz_fpic` text NOT NULL,
  `z_fpic` varchar(255) NOT NULL,
  `qz_fpic` varchar(255) NOT NULL,
  `save_fpic` varchar(10) NOT NULL,
  PRIMARY KEY (`classid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");
E_D("replace into `phome_ecms_infoclass_news` values('1','<h1>[!--title--]</h1>','','','','','','','','','','','','','','','','<div class=\\\\\"summary\\\\\"><span>导语：</span>[!--smalltext--]</div>','','','','','','','','','','','','<div class=\\\\\"desc\\\\\">[!--newstext--]</div>','','','','','','','','','','','');");
E_D("replace into `phome_ecms_infoclass_news` values('2','<h1>[!--title--]</h1>','','','','','','','','','','','','','','','','<div class=\\\\\"summary\\\\\"><span>导语：</span>[!--smalltext--]</div>','','','','','','','','','','','','<div class=\\\\\"desc\\\\\">[!--newstext--]</div>','','','','','','','','','','','');");
E_D("replace into `phome_ecms_infoclass_news` values('3','<h1>[!--title--]</h1>','','','','','','','','','','','','','','','','<div class=\\\\\"summary\\\\\"><span>导语：</span>[!--smalltext--]</div>','','','','','','','','','','','','<div class=\\\\\"desc\\\\\">[!--newstext--]</div>','','','','','','','','','','','');");
E_D("replace into `phome_ecms_infoclass_news` values('4','<h1>[!--title--]</h1>','','','','','','','','','','','','','','','','<div class=\\\\\"summary\\\\\"><span>导语：</span>[!--smalltext--]</div>','','','','','','','','','','','','<div class=\\\\\"desc\\\\\">[!--newstext--]</div>','','','','','','','','','','','');");
E_D("replace into `phome_ecms_infoclass_news` values('5','<h1>[!--title--]</h1>','','','','','','','','','','','','','','','','<div class=\\\\\"summary\\\\\"><span>导语：</span>[!--smalltext--]</div>','','','','','','','','','','','','<div class=\\\\\"desc\\\\\">[!--newstext--]</div>','','','','','','','','','','','');");
E_D("replace into `phome_ecms_infoclass_news` values('6','<h1>[!--title--]</h1>','','','','','','','','','','','','','','','','<div class=\\\\\"summary\\\\\"><span>导语：</span>[!--smalltext--]</div>','','','','','','','','','','','','<div class=\\\\\"desc\\\\\">[!--newstext--]</div>','','','','','','','','','','','');");
E_D("replace into `phome_ecms_infoclass_news` values('7','<h1>[!--title--]</h1>','','','','','','','','','','','','','','','','<div class=\\\\\"summary\\\\\"><span>导语：</span>[!--smalltext--]</div>','','','','','','','','','','','','<div class=\\\\\"desc\\\\\">[!--newstext--]</div>','','','','','','','','','','','');");
E_D("replace into `phome_ecms_infoclass_news` values('9','<h2 class=\\\\\"post-title entry-title\\\\\">[!--title--]</h2>','','','','','','','','','','','','','','','','','','','','','','','','','','','','<div class=\\\\\"content\\\\\">[!--newstext--]<div class=\\\\\"widget categort-posts\\\\\">','','','','','','','','','','','');");
E_D("replace into `phome_ecms_infoclass_news` values('10','<h2 class=\\\\\"post-title entry-title\\\\\">[!--title--]</h2>','','','','','','','','','','','','','','','','','','','','','','','','','','','','<div class=\\\\\"content\\\\\">[!--newstext--]<div class=\\\\\"widget categort-posts\\\\\">','','','','','','','','','','','');");

@include("../../inc/footer.php");
?>
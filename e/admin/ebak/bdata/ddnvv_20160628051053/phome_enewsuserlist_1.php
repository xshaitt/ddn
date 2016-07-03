<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `phome_enewsuserlist`;");
E_C("CREATE TABLE `phome_enewsuserlist` (
  `listid` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `listname` varchar(60) NOT NULL DEFAULT '',
  `pagetitle` varchar(120) NOT NULL DEFAULT '',
  `filepath` varchar(120) NOT NULL DEFAULT '',
  `filetype` varchar(12) NOT NULL DEFAULT '',
  `totalsql` text NOT NULL,
  `listsql` text NOT NULL,
  `maxnum` int(11) NOT NULL DEFAULT '0',
  `lencord` int(11) NOT NULL DEFAULT '0',
  `listtempid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `pagekeywords` varchar(255) NOT NULL DEFAULT '',
  `pagedescription` varchar(255) NOT NULL DEFAULT '',
  `classid` smallint(5) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`listid`),
  KEY `classid` (`classid`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8");
E_D("replace into `phome_enewsuserlist` values('1','生活百科','生活百科','../../a/','.html',' select count(*) as total from [!db.pre!]enewszt','select ztid as id, ztname as title,ztpath as titleurl,ztimg as titlepic,intro as smalltext,classid as classid from [!db.pre!]enewszt order by onclick desc','0','36','12','生活百科','','0');");
E_D("replace into `phome_enewsuserlist` values('2','生活小窍门栏目','生活小窍门','../../a/shxqm_','.html',' select count(*) as total from [!db.pre!]enewszt where classid=1','select ztid as id, ztname as title,ztpath as titleurl,ztimg as titlepic,intro as smalltext,classid as classid from [!db.pre!]enewszt  where classid=1 order by addtime desc','0','36','12','生活小窍门','','0');");
E_D("replace into `phome_enewsuserlist` values('5','健康养生栏目聚合','健康养生','../../a/jkys_','.html',' select count(*) as total from [!db.pre!]enewszt where classid=2','select ztid as id, ztname as title,ztpath as titleurl,ztimg as titlepic,intro as smalltext,classid as classid from [!db.pre!]enewszt  where classid=2 order by addtime desc','0','36','12','健康养生','','0');");
E_D("replace into `phome_enewsuserlist` values('6','民俗文化栏目聚合','民俗文化','../../a/mswh_','.html',' select count(*) as total from [!db.pre!]enewszt where classid=3','select ztid as id, ztname as title,ztpath as titleurl,ztimg as titlepic,intro as smalltext,classid as classid from [!db.pre!]enewszt  where classid=3 order by addtime desc','0','36','12','民俗文化','','0');");
E_D("replace into `phome_enewsuserlist` values('7','兴趣户外栏目聚合','兴趣户外','../../a/xqhw_','.html',' select count(*) as total from [!db.pre!]enewszt where classid=4','select ztid as id, ztname as title,ztpath as titleurl,ztimg as titlepic,intro as smalltext,classid as classid from [!db.pre!]enewszt  where classid=4 order by addtime desc','0','36','12','兴趣户外','','0');");
E_D("replace into `phome_enewsuserlist` values('8','职场社交栏目聚合','职场社交','../../a/zcsj_','.html',' select count(*) as total from [!db.pre!]enewszt where classid=5','select ztid as id, ztname as title,ztpath as titleurl,ztimg as titlepic,intro as smalltext,classid as classid from [!db.pre!]enewszt  where classid=5 order by addtime desc','0','36','12','职场社交','','0');");
E_D("replace into `phome_enewsuserlist` values('9','情感心灵栏目聚合','情感心灵','../../a/qgxl_','.html',' select count(*) as total from [!db.pre!]enewszt where classid=6','select ztid as id, ztname as title,ztpath as titleurl,ztimg as titlepic,intro as smalltext,classid as classid from [!db.pre!]enewszt  where classid=6 order by addtime desc','0','36','12','情感心灵','','0');");
E_D("replace into `phome_enewsuserlist` values('10','catjson','catjson','../../a/cat_','.json',' select count(*) as total from [!db.pre!]enewszt','select ztid as id ,ztname as title,ztpath as titleurl,ztimg as titlepic,intro as smalltext,classid as classid from [!db.pre!]enewszt order by addtime desc','0','25','13','','','0');");

@include("../../inc/footer.php");
?>
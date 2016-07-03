<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `phome_enewsztf`;");
E_C("CREATE TABLE `phome_enewsztf` (
  `fid` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `f` varchar(30) NOT NULL DEFAULT '',
  `fname` varchar(30) NOT NULL DEFAULT '',
  `fform` varchar(20) NOT NULL DEFAULT '',
  `fhtml` mediumtext NOT NULL,
  `fzs` varchar(255) NOT NULL DEFAULT '',
  `myorder` smallint(5) unsigned NOT NULL DEFAULT '0',
  `ftype` varchar(30) NOT NULL DEFAULT '',
  `flen` varchar(20) NOT NULL DEFAULT '',
  `fvalue` text NOT NULL,
  `fformsize` varchar(12) NOT NULL DEFAULT '',
  PRIMARY KEY (`fid`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8");
E_D("replace into `phome_enewsztf` values('1','seokey','seokey','text','\r\n<input name=\\\\\"seokey\\\\\" type=\\\\\"text\\\\\" id=\\\\\"seokey\\\\\" value=\\\\\"<?=\$ecmsfirstpost==1?\\\\\"\\\\\":ehtmlspecialchars(\$addr[seokey])?>\\\\\" size=\\\\\"\\\\\">\r\n','','0','VARCHAR','255','','');");
E_D("replace into `phome_enewsztf` values('2','indextj','首页推荐','select','<select name=\\\\\"indextj\\\\\" id=\\\\\"indextj\\\\\"><option value=\\\\\"不推荐\\\\\"<?=\$addr[indextj]==\\\\\"不推荐\\\\\"||\$ecmsfirstpost==1?\\\\'' selected\\\\'':\\\\''\\\\''?>>不推荐</option><option value=\\\\\"推荐\\\\\"<?=\$addr[indextj]==\\\\\"推荐\\\\\"?\\\\'' selected\\\\'':\\\\''\\\\''?>>推荐</option><option value=\\\\\"\\\\\"<?=\$addr[indextj]==\\\\\"\\\\\"?\\\\'' selected\\\\'':\\\\''\\\\''?>></option></select>','','0','VARCHAR','255','不推荐:default|推荐|','');");
E_D("replace into `phome_enewsztf` values('3','cattj','栏目推荐','radio','<input name=\\\\\"cattj\\\\\" type=\\\\\"radio\\\\\" value=\\\\\"否\\\\\"<?=\$addr[cattj]==\\\\\"否\\\\\"?\\\\'' checked\\\\'':\\\\''\\\\''?>>否<input name=\\\\\"cattj\\\\\" type=\\\\\"radio\\\\\" value=\\\\\"是\\\\\"<?=\$addr[cattj]==\\\\\"是\\\\\"?\\\\'' checked\\\\'':\\\\''\\\\''?>>是','','0','VARCHAR','255','否|是','');");

@include("../../inc/footer.php");
?>
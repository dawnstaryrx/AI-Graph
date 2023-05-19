/*
Navicat MySQL Data Transfer

Source Server         : wq_db
Source Server Version : 50732
Source Host           : rm-bp1li2t2h8emkb08a8o.mysql.rds.aliyuncs.com:3306
Source Database       : wq_db

Target Server Type    : MYSQL
Target Server Version : 50732
File Encoding         : 65001

Date: 2022-12-19 18:42:54
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `tpwe_xz_aipt_baidu`
-- ----------------------------
DROP TABLE IF EXISTS `tpwe_xz_aipt_baidu`;
CREATE TABLE `tpwe_xz_aipt_baidu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `key` varchar(255) NOT NULL,
  `pw` varchar(255) NOT NULL,
  `maxnum` int(11) NOT NULL,
  `usenum` int(11) NOT NULL,
  `minnum` int(11) NOT NULL,
  `uid` int(11) NOT NULL,
  `my` int(11) NOT NULL,
  `pos` int(11) NOT NULL,
  `todayuse` int(11) NOT NULL,
  `totaluse` int(11) NOT NULL,
  `lasttime` int(11) NOT NULL,
  `type` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;


DROP TABLE IF EXISTS `tpwe_xz_aipt_card`;
CREATE TABLE `tpwe_xz_aipt_card` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `appid` varchar(255) NOT NULL,
  `mainpage` text NOT NULL,
  `imgpath` varchar(255) NOT NULL,
  `uid` int(11) NOT NULL,
  `card` varchar(255) NOT NULL,
  `pos` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `install` int(2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tpwe_xz_aipt_card
-- ----------------------------

-- ----------------------------
-- Table structure for `tpwe_xz_aipt_class`
-- ----------------------------
DROP TABLE IF EXISTS `tpwe_xz_aipt_class`;
CREATE TABLE `tpwe_xz_aipt_class` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8 NOT NULL,
  `pid` int(11) NOT NULL,
  `pos` int(11) NOT NULL,
  `uid` int(11) NOT NULL,
  `click` int(11) NOT NULL,
  `about` varchar(255) CHARACTER SET utf8 NOT NULL,
  `imgpath` varchar(255) CHARACTER SET utf8 NOT NULL,
  `my` int(11) NOT NULL,
  `vip` int(2) NOT NULL,
  `install` int(2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=511 DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Table structure for `tpwe_xz_aipt_class_install`
-- ----------------------------
DROP TABLE IF EXISTS `tpwe_xz_aipt_class_install`;
CREATE TABLE `tpwe_xz_aipt_class_install` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8 NOT NULL,
  `pid` int(11) NOT NULL,
  `pos` int(11) NOT NULL,
  `uid` int(11) NOT NULL,
  `click` int(11) NOT NULL,
  `about` varchar(255) CHARACTER SET utf8 NOT NULL,
  `imgpath` varchar(255) CHARACTER SET utf8 NOT NULL,
  `my` int(11) NOT NULL,
  `vip` int(2) NOT NULL,
  `install` int(2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=511 DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of tpwe_xz_aipt_class_install
-- ----------------------------
INSERT INTO `tpwe_xz_aipt_class_install` VALUES ('342', '毕加索', '3', '0', '10013', '0', '', '', '0', '0', '0');
INSERT INTO `tpwe_xz_aipt_class_install` VALUES ('346', '插画', '3', '0', '10013', '0', '', '', '0', '0', '0');
INSERT INTO `tpwe_xz_aipt_class_install` VALUES ('469', '超现实', '0', '6', '10013', '0', '', '', '0', '0', '0');
INSERT INTO `tpwe_xz_aipt_class_install` VALUES ('471', '动漫风', '0', '7', '10013', '0', '', '', '0', '0', '0');
INSERT INTO `tpwe_xz_aipt_class_install` VALUES ('472', '梵高', '3', '0', '10013', '0', '', '', '0', '0', '0');
INSERT INTO `tpwe_xz_aipt_class_install` VALUES ('474', '概念插画', '4', '9', '10013', '0', '', '', '0', '0', '0');
INSERT INTO `tpwe_xz_aipt_class_install` VALUES ('475', '专业模式', '0', '8', '10013', '0', '', '', '0', '0', '0');
INSERT INTO `tpwe_xz_aipt_class_install` VALUES ('476', '科幻', '4', '4', '10013', '0', '', '', '0', '0', '0');
INSERT INTO `tpwe_xz_aipt_class_install` VALUES ('478', '明亮插画', '5', '10', '10013', '0', '', '', '0', '0', '0');
INSERT INTO `tpwe_xz_aipt_class_install` VALUES ('479', '水彩画', '5', '0', '10013', '0', '', '', '0', '0', '0');
INSERT INTO `tpwe_xz_aipt_class_install` VALUES ('481', '像素艺术', '6', '0', '10013', '0', '', '', '0', '0', '0');
INSERT INTO `tpwe_xz_aipt_class_install` VALUES ('487', '写意黑白', '0', '0', '10013', '0', '', '', '0', '0', '0');
INSERT INTO `tpwe_xz_aipt_class_install` VALUES ('488', '炫彩插画', '0', '0', '10013', '0', '', '', '0', '0', '0');
INSERT INTO `tpwe_xz_aipt_class_install` VALUES ('489', '油画', '0', '0', '10013', '0', '', '', '0', '0', '0');
INSERT INTO `tpwe_xz_aipt_class_install` VALUES ('490', '中国风', '0', '0', '10013', '0', '', '', '0', '0', '0');
INSERT INTO `tpwe_xz_aipt_class_install` VALUES ('491', '中国画', '0', '0', '10013', '0', '', '', '0', '0', '0');
INSERT INTO `tpwe_xz_aipt_class_install` VALUES ('492', '自由风格', '0', '3', '10013', '0', '', '', '0', '0', '0');
INSERT INTO `tpwe_xz_aipt_class_install` VALUES ('493', '水粉画', '0', '0', '10013', '0', '', '', '0', '0', '0');
INSERT INTO `tpwe_xz_aipt_class_install` VALUES ('497', '古风', '0', '0', '10013', '0', '', '', '1', '0', '0');
INSERT INTO `tpwe_xz_aipt_class_install` VALUES ('498', '二次元', '0', '0', '10013', '0', '', '', '1', '0', '0');
INSERT INTO `tpwe_xz_aipt_class_install` VALUES ('499', '写实风格', '0', '0', '10013', '0', '', '', '1', '0', '0');
INSERT INTO `tpwe_xz_aipt_class_install` VALUES ('500', '浮世绘', '0', '0', '10013', '0', '', '', '1', '0', '0');
INSERT INTO `tpwe_xz_aipt_class_install` VALUES ('501', 'low poly', '0', '0', '10013', '0', '', '', '1', '0', '0');
INSERT INTO `tpwe_xz_aipt_class_install` VALUES ('502', '未来主义', '0', '0', '10013', '0', '', '', '1', '0', '0');
INSERT INTO `tpwe_xz_aipt_class_install` VALUES ('503', '像素风格', '0', '0', '10013', '0', '', '', '1', '0', '0');
INSERT INTO `tpwe_xz_aipt_class_install` VALUES ('504', '概念艺术', '0', '0', '10013', '0', '', '', '1', '0', '0');
INSERT INTO `tpwe_xz_aipt_class_install` VALUES ('505', '赛博朋克', '0', '0', '10013', '0', '', '', '1', '0', '0');
INSERT INTO `tpwe_xz_aipt_class_install` VALUES ('506', '洛丽塔风格', '0', '0', '10013', '0', '', '', '1', '0', '0');
INSERT INTO `tpwe_xz_aipt_class_install` VALUES ('507', '巴洛克风格', '0', '0', '10013', '0', '', '', '1', '0', '0');
INSERT INTO `tpwe_xz_aipt_class_install` VALUES ('508', '超现实主义', '0', '0', '10013', '0', '', '', '1', '0', '0');
INSERT INTO `tpwe_xz_aipt_class_install` VALUES ('509', '蒸汽波艺术', '0', '0', '10013', '0', '', '', '1', '0', '0');
INSERT INTO `tpwe_xz_aipt_class_install` VALUES ('510', '卡通画', '0', '0', '10013', '0', '', '', '1', '0', '0');

-- ----------------------------
-- Table structure for `tpwe_xz_aipt_config`
-- ----------------------------
DROP TABLE IF EXISTS `tpwe_xz_aipt_config`;
CREATE TABLE `tpwe_xz_aipt_config` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uid` int(11) NOT NULL,
  `targetid` int(11) NOT NULL,
  `wtimes` varchar(255) CHARACTER SET utf8 NOT NULL,
  `btnname` varchar(255) CHARACTER SET utf8 NOT NULL,
  `btnurl` varchar(255) CHARACTER SET utf8 NOT NULL,
  `comead` varchar(255) CHARACTER SET utf8 NOT NULL,
  `s_pic` varchar(255) CHARACTER SET utf8 NOT NULL,
  `s_title` varchar(255) CHARACTER SET utf8 NOT NULL,
  `addad` varchar(255) CHARACTER SET utf8 NOT NULL,
  `title` varchar(255) NOT NULL,
  `downloadtimes` int(11) NOT NULL,
  `showsearch` int(2) NOT NULL,
  `showindex` int(2) NOT NULL,
  `indexmode` int(2) NOT NULL DEFAULT '4',
  `indexnum` int(11) NOT NULL,
  `shownew` int(2) NOT NULL,
  `bartxt` varchar(255) CHARACTER SET utf8 NOT NULL,
  `topimg` varchar(255) CHARACTER SET utf8 NOT NULL,
  `imgurl` varchar(255) CHARACTER SET utf8 NOT NULL,
  `showmode` int(2) NOT NULL,
  `showtime` int(2) NOT NULL DEFAULT '0',
  `paymode` int(2) NOT NULL DEFAULT '0',
  `money` varchar(11) CHARACTER SET utf8 NOT NULL DEFAULT '9.9',
  `paytext` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `token` varchar(255) CHARACTER SET utf8 NOT NULL,
  `pay` int(11) NOT NULL DEFAULT '0',
  `show` int(11) NOT NULL DEFAULT '100',
  `qcode` varchar(255) CHARACTER SET utf8 NOT NULL,
  `showhead` int(2) NOT NULL,
  `showbg` int(2) NOT NULL,
  `appid` varchar(255) CHARACTER SET utf8 NOT NULL,
  `secret` varchar(255) CHARACTER SET utf8 NOT NULL,
  `maxnum` int(11) NOT NULL,
  `limit` int(11) NOT NULL,
  `showfbg` int(2) NOT NULL,
  `skintype` int(2) NOT NULL,
  `bgnum` int(11) NOT NULL,
  `headnum` int(11) NOT NULL,
  `fbgnum` int(11) NOT NULL,
  `mode` int(11) NOT NULL,
  `teampay` int(11) NOT NULL,
  `wx_comead` varchar(255) CHARACTER SET utf8 NOT NULL,
  `ks_comead` varchar(255) CHARACTER SET utf8 NOT NULL,
  `wx_addad` varchar(255) CHARACTER SET utf8 NOT NULL,
  `ks_addad` varchar(255) CHARACTER SET utf8 NOT NULL,
  `viewmode` int(11) NOT NULL,
  `userupload` int(11) NOT NULL DEFAULT '0',
  `apipath` varchar(255) CHARACTER SET utf8 NOT NULL,
  `wx_banner` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `wx_videoad` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `wx_id` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `wx_pw` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `ks_id` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `ks_pw` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `tt_id` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `tt_pw` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `money_a` int(11) DEFAULT NULL,
  `money_b` int(11) DEFAULT NULL,
  `money_c` int(11) DEFAULT NULL,
  `money_d` int(11) DEFAULT NULL,
  `money_e` int(11) DEFAULT NULL,
  `money_f` int(11) DEFAULT NULL,
  `wenxin` int(2) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=42 DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of tpwe_xz_aipt_config
-- ----------------------------

-- ----------------------------
-- Table structure for `tpwe_xz_aipt_huoshan`
-- ----------------------------
DROP TABLE IF EXISTS `tpwe_xz_aipt_huoshan`;
CREATE TABLE `tpwe_xz_aipt_huoshan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `key` varchar(255) NOT NULL,
  `pw` varchar(255) NOT NULL,
  `maxnum` int(11) NOT NULL,
  `usenum` int(11) NOT NULL,
  `minnum` int(11) NOT NULL,
  `uid` int(11) NOT NULL,
  `my` int(11) NOT NULL,
  `pos` int(11) NOT NULL,
  `todayuse` int(11) NOT NULL,
  `totaluse` int(11) NOT NULL,
  `lasttime` int(11) NOT NULL,
  `type` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tpwe_xz_aipt_huoshan
-- ----------------------------

-- ----------------------------
-- Table structure for `tpwe_xz_aipt_list`
-- ----------------------------
DROP TABLE IF EXISTS `tpwe_xz_aipt_list`;
CREATE TABLE `tpwe_xz_aipt_list` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `imgpath` varchar(255) NOT NULL,
  `kw` text NOT NULL,
  `name` varchar(255) NOT NULL,
  `uid` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `hid` int(11) NOT NULL,
  `pos` int(11) NOT NULL,
  `classid` int(11) NOT NULL,
  `install` int(11) NOT NULL,
  `ctime` int(11) NOT NULL,
  `orderid` varchar(11) NOT NULL,
  `apiid` int(11) NOT NULL,
  `baidulink` varchar(255) NOT NULL,
  PRIMARY KEY (`id`,`orderid`,`uid`)
) ENGINE=InnoDB AUTO_INCREMENT=276 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tpwe_xz_aipt_list
-- ----------------------------

-- ----------------------------
-- Table structure for `tpwe_xz_aipt_list_install`
-- ----------------------------
DROP TABLE IF EXISTS `tpwe_xz_aipt_list_install`;
CREATE TABLE `tpwe_xz_aipt_list_install` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `imgpath` varchar(255) NOT NULL,
  `kw` text NOT NULL,
  `name` varchar(255) NOT NULL,
  `uid` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `hid` int(11) NOT NULL,
  `pos` int(11) NOT NULL,
  `classid` int(11) NOT NULL,
  `install` int(11) NOT NULL,
  `ctime` int(11) NOT NULL,
  `orderid` varchar(11) NOT NULL,
  `apiid` int(11) NOT NULL,
  `baidulink` varchar(255) NOT NULL,
  PRIMARY KEY (`id`,`orderid`,`uid`)
) ENGINE=InnoDB AUTO_INCREMENT=276 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tpwe_xz_aipt_list_install
-- ----------------------------
INSERT INTO `tpwe_xz_aipt_list_install` VALUES ('2', 'xz_aipt/bijiasuo/1.jpg', '船', '毕加索', '10013', '0', '0', '0', '342', '1', '0', '', '0', '');
INSERT INTO `tpwe_xz_aipt_list_install` VALUES ('3', 'xz_aipt/bijiasuo/2.jpg', '创意火花', '毕加索', '10013', '0', '0', '0', '342', '1', '0', '', '0', '');
INSERT INTO `tpwe_xz_aipt_list_install` VALUES ('4', 'xz_aipt/bijiasuo/3.jpg', '高铁晚点', '毕加索', '10013', '0', '0', '0', '342', '1', '0', '', '0', '');
INSERT INTO `tpwe_xz_aipt_list_install` VALUES ('5', 'xz_aipt/bijiasuo/4.jpg', '海边日落', '毕加索', '10013', '0', '0', '0', '342', '1', '0', '', '0', '');
INSERT INTO `tpwe_xz_aipt_list_install` VALUES ('6', 'xz_aipt/bijiasuo/5.jpg', '星月夜', '毕加索', '10013', '0', '0', '0', '342', '1', '0', '', '0', '');
INSERT INTO `tpwe_xz_aipt_list_install` VALUES ('7', 'xz_aipt/chahua/1.jpg', '埃及艳后 梦幻修饰 厚涂 超高清 半身像 细节刻画清晰 完美五官 完美光影 温柔 少女 对称 眼睛有神 黑色眼眸', '插画', '10013', '0', '0', '0', '346', '1', '0', '', '0', '');
INSERT INTO `tpwe_xz_aipt_list_install` VALUES ('8', 'xz_aipt/chahua/2.jpg', '白玫瑰与红玫瑰', '插画', '10013', '0', '0', '0', '346', '1', '0', '', '0', '');
INSERT INTO `tpwe_xz_aipt_list_install` VALUES ('9', 'xz_aipt/chahua/3.jpg', '侧颜 水 梦幻修饰 厚涂 超高清 半身像 细节刻画清晰 完美五官 完美光影 温柔 少女 对称 眼睛有神', '插画', '10013', '0', '0', '0', '346', '1', '0', '', '0', '');
INSERT INTO `tpwe_xz_aipt_list_install` VALUES ('10', 'xz_aipt/chahua/4.jpg', '超高清 写实 细节刻画清晰 完美侧颜 背光 复古美少女 对称 眼睛有神 颧骨 大鼻子 微笑嘴 工笔画 水彩画 色彩艳丽 回眸一笑百媚生', '插画', '10013', '0', '0', '0', '346', '1', '0', '', '0', '');
INSERT INTO `tpwe_xz_aipt_list_install` VALUES ('11', 'xz_aipt/chahua/5.jpg', '超高清 写实 细节刻画清晰 完美全身像 背光 古风少女 对称 眼睛有神 颧骨 大鼻子 微笑嘴 工笔画 水彩画 色彩艳丽', '插画', '10013', '0', '0', '0', '346', '1', '0', '', '0', '');
INSERT INTO `tpwe_xz_aipt_list_install` VALUES ('12', 'xz_aipt/chahua/6.jpg', '第五人格调香师', '插画', '10013', '0', '0', '0', '346', '1', '0', '', '0', '');
INSERT INTO `tpwe_xz_aipt_list_install` VALUES ('13', 'xz_aipt/chahua/7.jpg', '二次元二次元二次元，厚涂厚涂厚涂，红瞳黑发，帅哥', '插画', '10013', '0', '0', '0', '346', '1', '0', '', '0', '');
INSERT INTO `tpwe_xz_aipt_list_install` VALUES ('14', 'xz_aipt/chahua/8.jpg', '古风梦幻插画 线条流畅 充满想象力 狐狸 妖怪 神仙 山海经元素', '插画', '10013', '0', '0', '0', '346', '1', '0', '', '0', '');
INSERT INTO `tpwe_xz_aipt_list_install` VALUES ('15', 'xz_aipt/chahua/9.jpg', '光阴故事 梦幻修饰 厚涂 超高清 半身像 细节刻画清晰 完美五官 完美光影 温柔 少女 对称 眼睛有神 奇幻', '插画', '10013', '0', '0', '0', '346', '1', '0', '', '0', '');
INSERT INTO `tpwe_xz_aipt_list_install` VALUES ('16', 'xz_aipt/chahua/10.jpg', '吉普赛女郎 梦幻修饰 厚涂 超高清 半身像 细节刻画清晰 完美五官 完美光影 温柔 少女 对称 眼睛有神 黑色眼眸 景深镜头', '插画', '10013', '0', '0', '0', '346', '1', '0', '', '0', '');
INSERT INTO `tpwe_xz_aipt_list_install` VALUES ('17', 'xz_aipt/chahua/11.jpg', '寂光 梦幻修饰 厚涂 超高清 半身像 细节刻画清晰 完美五官 完美光影 温柔 皇冠公主 对称 眼睛有神', '插画', '10013', '0', '0', '0', '346', '1', '0', '', '0', '');
INSERT INTO `tpwe_xz_aipt_list_install` VALUES ('18', 'xz_aipt/chahua/12.jpg', '江山如画，一点红，色彩丰富，高对比度，精细刻画，高清质感', '插画', '10013', '0', '0', '0', '346', '1', '0', '', '0', '');
INSERT INTO `tpwe_xz_aipt_list_install` VALUES ('19', 'xz_aipt/chahua/13.jpg', '荆棘缠绕穿着黑色花嫁的少女 梦幻修饰 厚涂 超高清 半身像 细节刻画清晰 完美五官 完美光影 温柔 少女 对称 眼睛有神', '插画', '10013', '0', '0', '0', '346', '1', '0', '', '0', '');
INSERT INTO `tpwe_xz_aipt_list_install` VALUES ('20', 'xz_aipt/chahua/14.jpg', '枯藤，老树，昏鸦，小桥，流水，人家，古道，西风，瘦马，夕阳西下，断肠人，在天涯', '插画', '10013', '0', '0', '0', '346', '1', '0', '', '0', '');
INSERT INTO `tpwe_xz_aipt_list_install` VALUES ('21', 'xz_aipt/chahua/15.jpg', '鲲鹏，太极，中国风，传说，梦境', '插画', '10013', '0', '0', '0', '346', '1', '0', '', '0', '');
INSERT INTO `tpwe_xz_aipt_list_install` VALUES ('22', 'xz_aipt/chahua/16.jpg', '龙女，完美对称，厚涂，高清，虚幻引擎', '插画', '10013', '0', '0', '0', '346', '1', '0', '', '0', '');
INSERT INTO `tpwe_xz_aipt_list_install` VALUES ('23', 'xz_aipt/chahua/17.jpg', '猫头鹰，彼埃·蒙德里安，拼图', '插画', '10013', '0', '0', '0', '346', '1', '0', '', '0', '');
INSERT INTO `tpwe_xz_aipt_list_install` VALUES ('24', 'xz_aipt/chahua/18.jpg', '梅花落 梦幻修饰 厚涂 超高清 半身像 细节刻画清晰 完美五官 完美光影 温柔 少女 对称 眼睛有神', '插画', '10013', '0', '0', '0', '346', '1', '0', '', '0', '');
INSERT INTO `tpwe_xz_aipt_list_install` VALUES ('25', 'xz_aipt/chahua/19.jpg', '美女 真实 超高清 厚涂 精致', '插画', '10013', '0', '0', '0', '346', '1', '0', '', '0', '');
INSERT INTO `tpwe_xz_aipt_list_install` VALUES ('26', 'xz_aipt/chahua/20.jpg', '美少女，头像，完美，白发，魔女，妖精', '插画', '10013', '0', '0', '0', '346', '1', '0', '', '0', '');
INSERT INTO `tpwe_xz_aipt_list_install` VALUES ('27', 'xz_aipt/chahua/21.jpg', '美少女现代头像 对称 回眸一笑 颧骨 瓜子脸 微笑嘴 高鼻梁 超高清 厚涂 背光 完美半身像 细节刻画清晰', '插画', '10013', '0', '0', '0', '346', '1', '0', '', '0', '');
INSERT INTO `tpwe_xz_aipt_list_install` VALUES ('28', 'xz_aipt/chahua/22.jpg', '梦幻精修', '插画', '10013', '0', '0', '0', '346', '1', '0', '', '0', '');
INSERT INTO `tpwe_xz_aipt_list_install` VALUES ('29', 'xz_aipt/chahua/23.jpg', '女神，中国风，真实，淑女范儿，甜美', '插画', '10013', '0', '0', '0', '346', '1', '0', '', '0', '');
INSERT INTO `tpwe_xz_aipt_list_install` VALUES ('30', 'xz_aipt/chahua/24.jpg', '女生完美头像 青莲花 兰花发簪 细节刻画清晰 对称 眼睛有神 颧骨 瓜子脸 高鼻梁 工笔画 水墨 背光 写实 回眸一笑', '插画', '10013', '0', '0', '0', '346', '1', '0', '', '0', '');
INSERT INTO `tpwe_xz_aipt_list_install` VALUES ('31', 'xz_aipt/chahua/25.jpg', '人造南瓜 蒸汽朋克', '插画', '10013', '0', '0', '0', '346', '1', '0', '', '0', '');
INSERT INTO `tpwe_xz_aipt_list_install` VALUES ('32', 'xz_aipt/chahua/26.jpg', '小王子 狐狸 玫瑰', '插画', '10013', '0', '0', '0', '346', '1', '0', '', '0', '');
INSERT INTO `tpwe_xz_aipt_list_install` VALUES ('33', 'xz_aipt/chahua/27.jpg', '阴暗的天空下着小雨 赛博朋克街道', '插画', '10013', '0', '0', '0', '346', '1', '0', '', '0', '');
INSERT INTO `tpwe_xz_aipt_list_install` VALUES ('34', 'xz_aipt/chahua/28.jpg', '玉真 名媛 梦幻修饰 厚涂 超高清 半身像 细节刻画清晰 完美五官 完美光影 温柔 少女 对称 眼睛有神', '插画', '10013', '0', '0', '0', '346', '1', '0', '', '0', '');
INSERT INTO `tpwe_xz_aipt_list_install` VALUES ('35', 'xz_aipt/chahua/29.jpg', '玉真 淑女 梦幻修饰 厚涂 超高清 半身像 细节刻画清晰 完美五官 完美光影 温柔 少女 对称 眼睛有神', '插画', '10013', '0', '0', '0', '346', '1', '0', '', '0', '');
INSERT INTO `tpwe_xz_aipt_list_install` VALUES ('36', 'xz_aipt/chahua/30.jpg', '长得像香蕉一样的鱼 油画风格 写实 高清画质', '插画', '10013', '0', '0', '0', '346', '1', '0', '', '0', '');
INSERT INTO `tpwe_xz_aipt_list_install` VALUES ('37', 'xz_aipt/chahua/31.jpg', '长满荆棘的钢铁铠甲怪兽', '插画', '10013', '0', '0', '0', '346', '1', '0', '', '0', '');
INSERT INTO `tpwe_xz_aipt_list_install` VALUES ('38', 'xz_aipt/chahua/32.jpg', '指挥官 白银战甲 梦幻修饰 厚涂 超高清 半身像 细节刻画清晰 完美五官 完美光影 温柔 少女 对称 眼睛有神', '插画', '10013', '0', '0', '0', '346', '1', '0', '', '0', '');
INSERT INTO `tpwe_xz_aipt_list_install` VALUES ('39', 'xz_aipt/chaoxianshizhuyi/1.jpg', '充满魅力的男神', '超现实主义', '10013', '0', '0', '0', '469', '1', '0', '', '0', '');
INSERT INTO `tpwe_xz_aipt_list_install` VALUES ('40', 'xz_aipt/chaoxianshizhuyi/2.jpg', '猫头鹰，彼埃·蒙德里安，拼图', '超现实主义', '10013', '0', '0', '0', '469', '1', '0', '', '0', '');
INSERT INTO `tpwe_xz_aipt_list_install` VALUES ('41', 'xz_aipt/chaoxianshizhuyi/3.jpg', '人造南瓜 蒸汽朋克', '超现实主义', '10013', '0', '0', '0', '469', '1', '0', '', '0', '');
INSERT INTO `tpwe_xz_aipt_list_install` VALUES ('42', 'xz_aipt/chaoxianshizhuyi/4.jpg', '有的人活着他已经死了', '超现实主义', '10013', '0', '0', '0', '469', '1', '0', '', '0', '');
INSERT INTO `tpwe_xz_aipt_list_install` VALUES ('43', 'xz_aipt/chaoxianshizhuyi/5.jpg', '招财猫、赛博朋克、未来感、科幻感、电影感、特写、高清、真实感、cg、有细节、精细精致、色彩鲜艳', '超现实主义', '10013', '0', '0', '0', '469', '1', '0', '', '0', '');
INSERT INTO `tpwe_xz_aipt_list_install` VALUES ('44', 'xz_aipt/chaoxianshizhuyi/6.jpg', '中国风 汉服 少女 超高清 厚涂 半身像 细节刻画 完美', '超现实主义', '10013', '0', '0', '0', '469', '1', '0', '', '0', '');
INSERT INTO `tpwe_xz_aipt_list_install` VALUES ('45', 'xz_aipt/dongmanfeng/1.jpg', '白毛', '动漫风', '10013', '0', '0', '0', '471', '1', '0', '', '0', '');
INSERT INTO `tpwe_xz_aipt_list_install` VALUES ('46', 'xz_aipt/dongmanfeng/2.jpg', '彩虹 梦幻修饰 厚涂 超高清 半身像 细节刻画清晰 完美五官 完美光影 温柔 少女 对称 眼睛有神', '动漫风', '10013', '0', '0', '0', '471', '1', '0', '', '0', '');
INSERT INTO `tpwe_xz_aipt_list_install` VALUES ('47', 'xz_aipt/dongmanfeng/3.jpg', '二次元少女，粉嫩的圆脸，水灵灵的闪着宝石光芒的眼睛，唯美，梦幻修饰，厚涂，手绘头像，精致面容，高清，丁达尔效应', '动漫风', '10013', '0', '0', '0', '471', '1', '0', '', '0', '');
INSERT INTO `tpwe_xz_aipt_list_install` VALUES ('48', 'xz_aipt/dongmanfeng/5.jpg', '神明将至，少年一人前往', '动漫风', '10013', '0', '0', '0', '471', '1', '0', '', '0', '');
INSERT INTO `tpwe_xz_aipt_list_install` VALUES ('50', 'xz_aipt/dongmanfeng/6.jpg', '蒸汽波美少女 清纯 温柔 甜美 微笑嘴 细节刻画清晰 背光 对称 完美半身像', '动漫风', '10013', '0', '0', '0', '471', '1', '0', '', '0', '');
INSERT INTO `tpwe_xz_aipt_list_install` VALUES ('51', 'xz_aipt/fangao/1.jpg', '苹果星球', '梵高', '10013', '0', '0', '0', '472', '1', '0', '', '0', '');
INSERT INTO `tpwe_xz_aipt_list_install` VALUES ('52', 'xz_aipt/fangao/2.jpg', '清晨的湖面倒映着天空', '梵高', '10013', '0', '0', '0', '472', '1', '0', '', '0', '');
INSERT INTO `tpwe_xz_aipt_list_install` VALUES ('53', 'xz_aipt/fangao/3.jpg', '天地间浑然一色', '梵高', '10013', '0', '0', '0', '472', '1', '0', '', '0', '');
INSERT INTO `tpwe_xz_aipt_list_install` VALUES ('54', 'xz_aipt/fangao/4.jpg', '阴暗的天空下着小雨 赛博朋克街道', '梵高', '10013', '0', '0', '0', '472', '1', '0', '', '0', '');
INSERT INTO `tpwe_xz_aipt_list_install` VALUES ('55', 'xz_aipt/fangao/5.jpg', '阴暗的天空下着小雨', '梵高', '10013', '0', '0', '0', '472', '1', '0', '', '0', '');
INSERT INTO `tpwe_xz_aipt_list_install` VALUES ('56', 'xz_aipt/fangao/6.jpg', '蒸汽波美少女 清纯 温柔 甜美 微笑嘴 细节刻画清晰 背光 对称 完美半身像', '梵高', '10013', '0', '0', '0', '472', '1', '0', '', '0', '');
INSERT INTO `tpwe_xz_aipt_list_install` VALUES ('57', 'xz_aipt/gainianchahua/1.jpg', '阿斯加德', '概念插画', '10013', '0', '0', '0', '474', '1', '0', '', '0', '');
INSERT INTO `tpwe_xz_aipt_list_install` VALUES ('58', 'xz_aipt/gainianchahua/2.jpg', '磅礡大气的海底宫殿，4k高清', '概念插画', '10013', '0', '0', '0', '474', '1', '0', '', '0', '');
INSERT INTO `tpwe_xz_aipt_list_install` VALUES ('59', 'xz_aipt/gainianchahua/3.jpg', '冬日，赛博朋克，红发的少女，机甲，车辆，大厦，小巷，冷色调的霓虹灯光，废墟，枯萎的植物，一朵花', '概念插画', '10013', '0', '0', '0', '474', '1', '0', '', '0', '');
INSERT INTO `tpwe_xz_aipt_list_install` VALUES ('60', 'xz_aipt/gainianchahua/4.jpg', '都市', '概念插画', '10013', '0', '0', '0', '474', '1', '0', '', '0', '');
INSERT INTO `tpwe_xz_aipt_list_install` VALUES ('61', 'xz_aipt/gainianchahua/5.jpg', '二次元二次元二次元，厚涂厚涂厚涂，魔法师，紫袍，老头', '概念插画', '10013', '0', '0', '0', '474', '1', '0', '', '0', '');
INSERT INTO `tpwe_xz_aipt_list_install` VALUES ('62', 'xz_aipt/gainianchahua/6.jpg', '二战 苏联 莫斯科保卫战', '概念插画', '10013', '0', '0', '0', '474', '1', '0', '', '0', '');
INSERT INTO `tpwe_xz_aipt_list_install` VALUES ('63', 'xz_aipt/gainianchahua/7.jpg', '丰收的麦田 金色 天空晴朗 唯美 高清', '概念插画', '10013', '0', '0', '0', '474', '1', '0', '', '0', '');
INSERT INTO `tpwe_xz_aipt_list_install` VALUES ('64', 'xz_aipt/gainianchahua/8.jpg', '凤凰 仙境 奇幻 仙风道骨 完美光影 细节清晰 二次元壁纸', '概念插画', '10013', '0', '0', '0', '474', '1', '0', '', '0', '');
INSERT INTO `tpwe_xz_aipt_list_install` VALUES ('65', 'xz_aipt/gainianchahua/9.jpg', '凤凰于烈火中重生', '概念插画', '10013', '0', '0', '0', '474', '1', '0', '', '0', '');
INSERT INTO `tpwe_xz_aipt_list_install` VALUES ('66', 'xz_aipt/gainianchahua/10.jpg', '桂林山水，一叶小舟，月光', '概念插画', '10013', '0', '0', '0', '474', '1', '0', '', '0', '');
INSERT INTO `tpwe_xz_aipt_list_install` VALUES ('67', 'xz_aipt/gainianchahua/11.jpg', '海底世界，亚特兰蒂斯，城市废墟，粒子光，阳光透出水面，丁达尔效应，虚幻引擎，梦幻背景', '概念插画', '10013', '0', '0', '0', '474', '1', '0', '', '0', '');
INSERT INTO `tpwe_xz_aipt_list_install` VALUES ('68', 'xz_aipt/gainianchahua/12.jpg', '海洋 鲸鱼 糖果 恢弘的场面 空中的教堂 神圣的光影 丰富的细节 清晰的画面', '概念插画', '10013', '0', '0', '0', '474', '1', '0', '', '0', '');
INSERT INTO `tpwe_xz_aipt_list_install` VALUES ('69', 'xz_aipt/gainianchahua/13.jpg', '厚涂 精致 真实 超高清 帅哥', '概念插画', '10013', '0', '0', '0', '474', '1', '0', '', '0', '');
INSERT INTO `tpwe_xz_aipt_list_install` VALUES ('70', 'xz_aipt/gainianchahua/14.jpg', '狐狸，彼埃·蒙德里安，拼图', '概念插画', '10013', '0', '0', '0', '474', '1', '0', '', '0', '');
INSERT INTO `tpwe_xz_aipt_list_install` VALUES ('71', 'xz_aipt/gainianchahua/15.jpg', '机甲', '概念插画', '10013', '0', '0', '0', '474', '1', '0', '', '0', '');
INSERT INTO `tpwe_xz_aipt_list_install` VALUES ('72', 'xz_aipt/gainianchahua/16.jpg', '机械乌龟 云 废土朋克', '概念插画', '10013', '0', '0', '0', '474', '1', '0', '', '0', '');
INSERT INTO `tpwe_xz_aipt_list_install` VALUES ('73', 'xz_aipt/gainianchahua/17.jpg', '金银铜生物，巨大，压迫感，恐惧症', '概念插画', '10013', '0', '0', '0', '474', '1', '0', '', '0', '');
INSERT INTO `tpwe_xz_aipt_list_install` VALUES ('74', 'xz_aipt/gainianchahua/18.jpg', '镜子，镜像之城，金属质感，碎裂，伪装，恐惧', '概念插画', '10013', '0', '0', '0', '474', '1', '0', '', '0', '');
INSERT INTO `tpwe_xz_aipt_list_install` VALUES ('75', 'xz_aipt/gainianchahua/19.jpg', '九尾狐 凤凰城 氛围感大场面 祥云', '概念插画', '10013', '0', '0', '0', '474', '1', '0', '', '0', '');
INSERT INTO `tpwe_xz_aipt_list_install` VALUES ('76', 'xz_aipt/gainianchahua/20.jpg', '巨大的章鱼海怪上岸袭击人类', '概念插画', '10013', '0', '0', '0', '474', '1', '0', '', '0', '');
INSERT INTO `tpwe_xz_aipt_list_install` VALUES ('77', 'xz_aipt/gainianchahua/21.jpg', '克苏鲁', '概念插画', '10013', '0', '0', '0', '474', '1', '0', '', '0', '');
INSERT INTO `tpwe_xz_aipt_list_install` VALUES ('78', 'xz_aipt/gainianchahua/22.jpg', '黎明，天空中的城市，金色的云，粉红色的玫瑰瀑布，托马斯·金凯德，罗斯·陈', '概念插画', '10013', '0', '0', '0', '474', '1', '0', '', '0', '');
INSERT INTO `tpwe_xz_aipt_list_install` VALUES ('79', 'xz_aipt/gainianchahua/23.jpg', '两个彩色的凤凰', '概念插画', '10013', '0', '0', '0', '474', '1', '0', '', '0', '');
INSERT INTO `tpwe_xz_aipt_list_install` VALUES ('80', 'xz_aipt/gainianchahua/24.jpg', '龙，机凤凰，中国风，赛博朋克，火焰', '概念插画', '10013', '0', '0', '0', '474', '1', '0', '', '0', '');
INSERT INTO `tpwe_xz_aipt_list_install` VALUES ('81', 'xz_aipt/gainianchahua/25.jpg', '猫头鹰，彼埃·蒙德里安，拼图', '概念插画', '10013', '0', '0', '0', '474', '1', '0', '', '0', '');
INSERT INTO `tpwe_xz_aipt_list_install` VALUES ('82', 'xz_aipt/gainianchahua/26.jpg', '梦幻，童话，湖水，倒影，皎洁的月光，酒，小舟，赤壁，抱明月而长终', '概念插画', '10013', '0', '0', '0', '474', '1', '0', '', '0', '');
INSERT INTO `tpwe_xz_aipt_list_install` VALUES ('83', 'xz_aipt/gainianchahua/27.jpg', '魔兽世界', '概念插画', '10013', '0', '0', '0', '474', '1', '0', '', '0', '');
INSERT INTO `tpwe_xz_aipt_list_install` VALUES ('84', 'xz_aipt/gainianchahua/28.jpg', '茉莉花大海梦幻', '概念插画', '10013', '0', '0', '0', '474', '1', '0', '', '0', '');
INSERT INTO `tpwe_xz_aipt_list_install` VALUES ('85', 'xz_aipt/gainianchahua/29.jpg', '木偶，微笑，恐怖谷，恐怖，似人非人，阴森，渗人，厚涂，束缚', '概念插画', '10013', '0', '0', '0', '474', '1', '0', '', '0', '');
INSERT INTO `tpwe_xz_aipt_list_install` VALUES ('86', 'xz_aipt/gainianchahua/30.jpg', '全图手绘绘画风格，古风，公主，朱红色，超高清，明艳，二次元。', '概念插画', '10013', '0', '0', '0', '474', '1', '0', '', '0', '');
INSERT INTO `tpwe_xz_aipt_list_install` VALUES ('87', 'xz_aipt/gainianchahua/31.jpg', '热血，机甲', '概念插画', '10013', '0', '0', '0', '474', '1', '0', '', '0', '');
INSERT INTO `tpwe_xz_aipt_list_install` VALUES ('88', 'xz_aipt/gainianchahua/32.jpg', '人生，希望，寄托，侥幸，日复一日，年复一年，庸庸碌碌，无所成就，悔不当初，努力', '概念插画', '10013', '0', '0', '0', '474', '1', '0', '', '0', '');
INSERT INTO `tpwe_xz_aipt_list_install` VALUES ('89', 'xz_aipt/gainianchahua/33.jpg', '赛博朋克 鲸鱼 云 怪物', '概念插画', '10013', '0', '0', '0', '474', '1', '0', '', '0', '');
INSERT INTO `tpwe_xz_aipt_list_install` VALUES ('90', 'xz_aipt/gainianchahua/34.jpg', '赛博朋克 克苏鲁 深海', '概念插画', '10013', '0', '0', '0', '474', '1', '0', '', '0', '');
INSERT INTO `tpwe_xz_aipt_list_install` VALUES ('91', 'xz_aipt/gainianchahua/35.jpg', '三日凌空，金字塔，大火燃烧，仰视，宏伟', '概念插画', '10013', '0', '0', '0', '474', '1', '0', '', '0', '');
INSERT INTO `tpwe_xz_aipt_list_install` VALUES ('92', 'xz_aipt/gainianchahua/36.jpg', '沙漠湖中倒影出机械臂残骸，一簇一簇的大型仙人掌和云朵。', '概念插画', '10013', '0', '0', '0', '474', '1', '0', '', '0', '');
INSERT INTO `tpwe_xz_aipt_list_install` VALUES ('93', 'xz_aipt/gainianchahua/37.jpg', '山茶花神话', '概念插画', '10013', '0', '0', '0', '474', '1', '0', '', '0', '');
INSERT INTO `tpwe_xz_aipt_list_install` VALUES ('94', 'xz_aipt/gainianchahua/38.jpg', '生动炫彩的高清壁纸', '概念插画', '10013', '0', '0', '0', '474', '1', '0', '', '0', '');
INSERT INTO `tpwe_xz_aipt_list_install` VALUES ('95', 'xz_aipt/gainianchahua/39.jpg', '太空歌剧院', '概念插画', '10013', '0', '0', '0', '474', '1', '0', '', '0', '');
INSERT INTO `tpwe_xz_aipt_list_install` VALUES ('96', 'xz_aipt/gainianchahua/40.jpg', '天空城市', '概念插画', '10013', '0', '0', '0', '474', '1', '0', '', '0', '');
INSERT INTO `tpwe_xz_aipt_list_install` VALUES ('97', 'xz_aipt/gainianchahua/41.jpg', '天堂，地狱，人间，生死轮回，炫彩', '概念插画', '10013', '0', '0', '0', '474', '1', '0', '', '0', '');
INSERT INTO `tpwe_xz_aipt_list_install` VALUES ('98', 'xz_aipt/gainianchahua/42.jpg', '天堂地狱都无法给你慰藉，只有我们自己。渺小、孤独、奋斗、与彼此抗争，我向自己祈祷，为自己祈祷。', '概念插画', '10013', '0', '0', '0', '474', '1', '0', '', '0', '');
INSERT INTO `tpwe_xz_aipt_list_install` VALUES ('99', 'xz_aipt/gainianchahua/43.jpg', '兔子，彼埃·蒙德里安，拼图', '概念插画', '10013', '0', '0', '0', '474', '1', '0', '', '0', '');
INSERT INTO `tpwe_xz_aipt_list_install` VALUES ('100', 'xz_aipt/gainianchahua/44.jpg', '五彩祥云 凤凰城 九尾狐', '概念插画', '10013', '0', '0', '0', '474', '1', '0', '', '0', '');
INSERT INTO `tpwe_xz_aipt_list_install` VALUES ('101', 'xz_aipt/gainianchahua/45.jpg', '夕阳，雪山，金光闪闪，笔直公路，跑车，氛围，写实，高清，', '概念插画', '10013', '0', '0', '0', '474', '1', '0', '', '0', '');
INSERT INTO `tpwe_xz_aipt_list_install` VALUES ('102', 'xz_aipt/gainianchahua/46.jpg', '夏天，森林，绿', '概念插画', '10013', '0', '0', '0', '474', '1', '0', '', '0', '');
INSERT INTO `tpwe_xz_aipt_list_install` VALUES ('103', 'xz_aipt/gainianchahua/47.jpg', '仙境，超广角镜头，早晨，彩色，宏伟的宫殿，8K，不要人物', '概念插画', '10013', '0', '0', '0', '474', '1', '0', '', '0', '');
INSERT INTO `tpwe_xz_aipt_list_install` VALUES ('104', 'xz_aipt/gainianchahua/48.jpg', '仙境或星空 中式建筑 细节清晰 壁纸', '概念插画', '10013', '0', '0', '0', '474', '1', '0', '', '0', '');
INSERT INTO `tpwe_xz_aipt_list_install` VALUES ('105', 'xz_aipt/gainianchahua/49.jpg', '小王子 星球 玫瑰花 宇宙 星河 日落', '概念插画', '10013', '0', '0', '0', '474', '1', '0', '', '0', '');
INSERT INTO `tpwe_xz_aipt_list_install` VALUES ('106', 'xz_aipt/gainianchahua/50.jpg', '星月夜', '概念插画', '10013', '0', '0', '0', '474', '1', '0', '', '0', '');
INSERT INTO `tpwe_xz_aipt_list_install` VALUES ('107', 'xz_aipt/gainianchahua/51.jpg', '虚幻，未来，太空之城 赛博朋克', '概念插画', '10013', '0', '0', '0', '474', '1', '0', '', '0', '');
INSERT INTO `tpwe_xz_aipt_list_install` VALUES ('108', 'xz_aipt/gainianchahua/52.jpg', '一个人在钓鱼，一只鲸鱼腾空而出', '概念插画', '10013', '0', '0', '0', '474', '1', '0', '', '0', '');
INSERT INTO `tpwe_xz_aipt_list_install` VALUES ('109', 'xz_aipt/gainianchahua/53.jpg', '一股强烈的冲动想要冲破所有的防线尽情释放，但被自己设置的坚固的城墙牢牢挡住；巨大的能量被压制在自己的体内，渴望着、挣扎着，求而不能。', '概念插画', '10013', '0', '0', '0', '474', '1', '0', '', '0', '');
INSERT INTO `tpwe_xz_aipt_list_install` VALUES ('110', 'xz_aipt/gainianchahua/54.jpg', '由大小不一的齿轮和链条组成的一条钢铁巨龙，', '概念插画', '10013', '0', '0', '0', '474', '1', '0', '', '0', '');
INSERT INTO `tpwe_xz_aipt_list_install` VALUES ('111', 'xz_aipt/gainianchahua/55.jpg', '云顶上的中国宫殿 未来感 金属质感 幻想之城', '概念插画', '10013', '0', '0', '0', '474', '1', '0', '', '0', '');
INSERT INTO `tpwe_xz_aipt_list_install` VALUES ('112', 'xz_aipt/gainianchahua/56.jpg', '长满荆棘的钢铁铠甲怪兽', '概念插画', '10013', '0', '0', '0', '474', '1', '0', '', '0', '');
INSERT INTO `tpwe_xz_aipt_list_install` VALUES ('113', 'xz_aipt/gainianchahua/57.jpg', '征战百年的骑士国度疲惫不堪 浪漫的玫瑰慢慢凋谢 有意境', '概念插画', '10013', '0', '0', '0', '474', '1', '0', '', '0', '');
INSERT INTO `tpwe_xz_aipt_list_install` VALUES ('114', 'xz_aipt/gainianchahua/58.jpg', '朱克·张的真实CG渲染图，上面有一座绿色的现代别墅，现代别墅旁边有绿色的草地，天空中有一朵白色的棉花云，还有一朵玫瑰瀑布从屋顶流到草地', '概念插画', '10013', '0', '0', '0', '474', '1', '0', '', '0', '');
INSERT INTO `tpwe_xz_aipt_list_install` VALUES ('115', 'xz_aipt/gaojizidingyi/1.jpg', '磅礴大气的天空仙境，云海中的古代宫殿群，巧夺天工的中式古建筑楼阁群，祥云，醒狮', '高级自定义', '10013', '0', '0', '0', '475', '1', '0', '', '0', '');
INSERT INTO `tpwe_xz_aipt_list_install` VALUES ('116', 'xz_aipt/gaojizidingyi/2.jpg', '穿着欧洲古典服饰的波斯猫 可爱 摄影 超清 细节丰富 精美', '高级自定义', '10013', '0', '0', '0', '475', '1', '0', '', '0', '');
INSERT INTO `tpwe_xz_aipt_list_install` VALUES ('117', 'xz_aipt/gaojizidingyi/3.jpg', '好看的精美的壁纸', '高级自定义', '10013', '0', '0', '0', '475', '1', '0', '', '0', '');
INSERT INTO `tpwe_xz_aipt_list_install` VALUES ('118', 'xz_aipt/gaojizidingyi/4.jpg', '酷炫的猪壁纸画', '高级自定义', '10013', '0', '0', '0', '475', '1', '0', '', '0', '');
INSERT INTO `tpwe_xz_aipt_list_install` VALUES ('119', 'xz_aipt/gaojizidingyi/5.jpg', '欧美风，机械少女，完美人像，龙，冷色调', '高级自定义', '10013', '0', '0', '0', '475', '1', '0', '', '0', '');
INSERT INTO `tpwe_xz_aipt_list_install` VALUES ('120', 'xz_aipt/gaojizidingyi/6.jpg', '奇幻宫殿，浪漫花海，唯美花瓣飞舞，梦幻仙境，建模渲染，高清壁纸，超高分辨率，虚幻引擎，概念艺术 3d数字建模 奇幻插画 cg感 细节丰富 精致描绘，柔和色调，史诗感，鸟瞰全景，二次元，皮克斯，精灵宝钻风格，魔戒风格', '高级自定义', '10013', '0', '0', '0', '475', '1', '0', '', '0', '');
INSERT INTO `tpwe_xz_aipt_list_install` VALUES ('121', 'xz_aipt/gaojizidingyi/7.jpg', '日月星辰', '高级自定义', '10013', '0', '0', '0', '475', '1', '0', '', '0', '');
INSERT INTO `tpwe_xz_aipt_list_install` VALUES ('122', 'xz_aipt/gaojizidingyi/8.jpg', '赛博朋克 广告 故障', '高级自定义', '10013', '0', '0', '0', '475', '1', '0', '', '0', '');
INSERT INTO `tpwe_xz_aipt_list_install` VALUES ('123', 'xz_aipt/gaojizidingyi/9.jpg', '十二生肖卡通兔，长耳朵，萌萌的，喜庆的红灯笼，可爱，国潮风', '高级自定义', '10013', '0', '0', '0', '475', '1', '0', '', '0', '');
INSERT INTO `tpwe_xz_aipt_list_install` VALUES ('124', 'xz_aipt/gaojizidingyi/10.jpg', '十二生肖兔，带着帽子，长耳朵，国潮风，蒸汽朋克风格，机械风格', '高级自定义', '10013', '0', '0', '0', '475', '1', '0', '', '0', '');
INSERT INTO `tpwe_xz_aipt_list_install` VALUES ('125', 'xz_aipt/gaojizidingyi/11.jpg', '仙境之桥', '高级自定义', '10013', '0', '0', '0', '475', '1', '0', '', '0', '');
INSERT INTO `tpwe_xz_aipt_list_install` VALUES ('126', 'xz_aipt/gaojizidingyi/12.jpg', '雨中的赛博朋克都市', '高级自定义', '10013', '0', '0', '0', '475', '1', '0', '', '0', '');
INSERT INTO `tpwe_xz_aipt_list_install` VALUES ('127', 'xz_aipt/gaojizidingyi/13.jpg', '云顶天宫 古风 二次元 超清 细节刻画', '高级自定义', '10013', '0', '0', '0', '475', '1', '0', '', '0', '');
INSERT INTO `tpwe_xz_aipt_list_install` VALUES ('128', 'xz_aipt/gaojizidingyi/14.jpg', '云上的古代宫殿群中，巧夺天工的楼阁群，天上的宫廷，幽静的山谷，空中楼阁，古代楼阁，超精细，奇幻风格，仙境，月光，梦境，插画作品', '高级自定义', '10013', '0', '0', '0', '475', '1', '0', '', '0', '');
INSERT INTO `tpwe_xz_aipt_list_install` VALUES ('129', 'xz_aipt/gaojizidingyi/15.jpg', '中国风，凤求凰，完美人像，脸部精致，奢华，冷色调', '高级自定义', '10013', '0', '0', '0', '475', '1', '0', '', '0', '');
INSERT INTO `tpwe_xz_aipt_list_install` VALUES ('130', 'xz_aipt/gaojizidingyi/16.jpg', '中国风，皇后，完美人像，脸部精致，奢华，暖色调', '高级自定义', '10013', '0', '0', '0', '475', '1', '0', '', '0', '');
INSERT INTO `tpwe_xz_aipt_list_install` VALUES ('131', 'xz_aipt/kehuan/1.jpg', '来了，爱了，给了她一颗星星，走了', '科幻', '10013', '0', '0', '0', '476', '1', '0', '', '0', '');
INSERT INTO `tpwe_xz_aipt_list_install` VALUES ('132', 'xz_aipt/kehuan/2.jpg', '两位修仙者施展着仙术打斗', '科幻', '10013', '0', '0', '0', '476', '1', '0', '', '0', '');
INSERT INTO `tpwe_xz_aipt_list_install` VALUES ('133', 'xz_aipt/kehuan/3.jpg', '命运像一条河奔腾不息 我们顺流而下 寻找源头', '科幻', '10013', '0', '0', '0', '476', '1', '0', '', '0', '');
INSERT INTO `tpwe_xz_aipt_list_install` VALUES ('134', 'xz_aipt/kehuan/4.jpg', '水上小镇 鸟瞰视角 唯美 细节 高清', '科幻', '10013', '0', '0', '0', '476', '1', '0', '', '0', '');
INSERT INTO `tpwe_xz_aipt_list_install` VALUES ('135', 'xz_aipt/kehuan/5.jpg', '虚幻，未来，太空之城', '科幻', '10013', '0', '0', '0', '476', '1', '0', '', '0', '');
INSERT INTO `tpwe_xz_aipt_list_install` VALUES ('136', 'xz_aipt/kehuan/6.jpg', '宇宙，亚特兰蒂斯，城市废墟，粒子光，阳光透出水面，丁达尔效应，虚幻引擎，梦幻背景', '科幻', '10013', '0', '0', '0', '476', '1', '0', '', '0', '');
INSERT INTO `tpwe_xz_aipt_list_install` VALUES ('137', 'xz_aipt/kehuan/7.jpg', '月光皎皎，满天繁星，无数孔明灯向天上飞去', '科幻', '10013', '0', '0', '0', '476', '1', '0', '', '0', '');
INSERT INTO `tpwe_xz_aipt_list_install` VALUES ('138', 'xz_aipt/mingliangchahua/1.jpg', '白色绒毛的兔子啃胡萝卜，可爱风', '明亮插画', '10013', '0', '0', '0', '478', '1', '0', '', '0', '');
INSERT INTO `tpwe_xz_aipt_list_install` VALUES ('139', 'xz_aipt/mingliangchahua/2.jpg', '草木温柔择青赤 淋漓染作一罥诗 算不算萍水相逢终归情之所至 繁花初绽眼中痴 靛蓝薄雨衬青丝 惹身是相思', '明亮插画', '10013', '0', '0', '0', '478', '1', '0', '', '0', '');
INSERT INTO `tpwe_xz_aipt_list_install` VALUES ('140', 'xz_aipt/mingliangchahua/3.jpg', '超高清 写实 细节刻画清晰 完美侧颜 背光 复古美少女 对称 眼睛有神 颧骨 大鼻子 微笑嘴 工笔画 水彩画 色彩艳丽 回眸一笑百媚生', '明亮插画', '10013', '0', '0', '0', '478', '1', '0', '', '0', '');
INSERT INTO `tpwe_xz_aipt_list_install` VALUES ('141', 'xz_aipt/mingliangchahua/4.jpg', '地球，月球，星门，量子，宇宙飞船，超写实，细节清晰，完美，黑洞，空间', '明亮插画', '10013', '0', '0', '0', '478', '1', '0', '', '0', '');
INSERT INTO `tpwe_xz_aipt_list_install` VALUES ('142', 'xz_aipt/mingliangchahua/5.jpg', '复古现代女性 细节刻画清晰 背光 对称 完美半身像 眼睛有神 瓜子脸 微笑嘴 高鼻梁', '明亮插画', '10013', '0', '0', '0', '478', '1', '0', '', '0', '');
INSERT INTO `tpwe_xz_aipt_list_install` VALUES ('143', 'xz_aipt/mingliangchahua/6.jpg', '高山梯田', '明亮插画', '10013', '0', '0', '0', '478', '1', '0', '', '0', '');
INSERT INTO `tpwe_xz_aipt_list_install` VALUES ('144', 'xz_aipt/mingliangchahua/7.jpg', '海洋 鲸鱼 糖果 恢弘的场面 空中的教堂 神圣的光影 丰富的细节 清晰的画面', '明亮插画', '10013', '0', '0', '0', '478', '1', '0', '', '0', '');
INSERT INTO `tpwe_xz_aipt_list_install` VALUES ('145', 'xz_aipt/mingliangchahua/8.jpg', '黑色眼睛，黑色头发，淑女，完美光影，白色衣服，精致面容，唯美，动漫风，梦幻修饰，高清，二次元，二次元，二次元', '明亮插画', '10013', '0', '0', '0', '478', '1', '0', '', '0', '');
INSERT INTO `tpwe_xz_aipt_list_install` VALUES ('146', 'xz_aipt/mingliangchahua/9.jpg', '机甲，中国风，赛博朋克', '明亮插画', '10013', '0', '0', '0', '478', '1', '0', '', '0', '');
INSERT INTO `tpwe_xz_aipt_list_install` VALUES ('147', 'xz_aipt/mingliangchahua/10.jpg', '枯藤老树昏鸦', '明亮插画', '10013', '0', '0', '0', '478', '1', '0', '', '0', '');
INSERT INTO `tpwe_xz_aipt_list_install` VALUES ('148', 'xz_aipt/mingliangchahua/11.jpg', '溜达的艾莎公主', '明亮插画', '10013', '0', '0', '0', '478', '1', '0', '', '0', '');
INSERT INTO `tpwe_xz_aipt_list_install` VALUES ('149', 'xz_aipt/mingliangchahua/12.jpg', '落日低垂于湖面', '明亮插画', '10013', '0', '0', '0', '478', '1', '0', '', '0', '');
INSERT INTO `tpwe_xz_aipt_list_install` VALUES ('150', 'xz_aipt/mingliangchahua/13.jpg', '蛮荒时代 巨龙', '明亮插画', '10013', '0', '0', '0', '478', '1', '0', '', '0', '');
INSERT INTO `tpwe_xz_aipt_list_install` VALUES ('151', 'xz_aipt/mingliangchahua/14.jpg', '猫耳娘，蝴蝶结，红色，美少女', '明亮插画', '10013', '0', '0', '0', '478', '1', '0', '', '0', '');
INSERT INTO `tpwe_xz_aipt_list_install` VALUES ('152', 'xz_aipt/mingliangchahua/15.jpg', '美丽的梅花，晶莹剔透', '明亮插画', '10013', '0', '0', '0', '478', '1', '0', '', '0', '');
INSERT INTO `tpwe_xz_aipt_list_install` VALUES ('153', 'xz_aipt/mingliangchahua/16.jpg', '美少女现代头像 对称 回眸一笑 颧骨 瓜子脸 微笑嘴 高鼻梁 超高清 厚涂 背光 完美半身像 细节刻画清晰', '明亮插画', '10013', '0', '0', '0', '478', '1', '0', '', '0', '');
INSERT INTO `tpwe_xz_aipt_list_install` VALUES ('154', 'xz_aipt/mingliangchahua/17.jpg', '脑图包含三部分：数据处理，数据分析，数据展示', '明亮插画', '10013', '0', '0', '0', '478', '1', '0', '', '0', '');
INSERT INTO `tpwe_xz_aipt_list_install` VALUES ('155', 'xz_aipt/mingliangchahua/18.jpg', '捧着水晶球的精灵 梦幻修饰 厚涂 超高清 半身像 细节刻画清晰 完美五官 完美光影 温柔 少女 对称 眼睛有神 黑色眼眸', '明亮插画', '10013', '0', '0', '0', '478', '1', '0', '', '0', '');
INSERT INTO `tpwe_xz_aipt_list_install` VALUES ('156', 'xz_aipt/mingliangchahua/19.jpg', '秋天月饼月亮桂花', '明亮插画', '10013', '0', '0', '0', '478', '1', '0', '', '0', '');
INSERT INTO `tpwe_xz_aipt_list_install` VALUES ('157', 'xz_aipt/mingliangchahua/20.jpg', '沙漠 胡杨 阳光 云朵 达利 草原 马', '明亮插画', '10013', '0', '0', '0', '478', '1', '0', '', '0', '');
INSERT INTO `tpwe_xz_aipt_list_install` VALUES ('158', 'xz_aipt/mingliangchahua/21.jpg', '神仙，强大，金色眼眸，帅气，战神', '明亮插画', '10013', '0', '0', '0', '478', '1', '0', '', '0', '');
INSERT INTO `tpwe_xz_aipt_list_install` VALUES ('159', 'xz_aipt/mingliangchahua/22.jpg', '尸山血海，昏暗天', '明亮插画', '10013', '0', '0', '0', '478', '1', '0', '', '0', '');
INSERT INTO `tpwe_xz_aipt_list_install` VALUES ('160', 'xz_aipt/mingliangchahua/23.jpg', '小王子 星球 玫瑰花 宇宙 星河 日落', '明亮插画', '10013', '0', '0', '0', '478', '1', '0', '', '0', '');
INSERT INTO `tpwe_xz_aipt_list_install` VALUES ('161', 'xz_aipt/mingliangchahua/24.jpg', '烟，梦幻修饰，厚涂，超高清，半身像，细节刻画清晰，完美五官，完美光影，温柔，少女，对称，眼睛有神', '明亮插画', '10013', '0', '0', '0', '478', '1', '0', '', '0', '');
INSERT INTO `tpwe_xz_aipt_list_install` VALUES ('162', 'xz_aipt/mingliangchahua/25.jpg', '一幅价值连城的画', '明亮插画', '10013', '0', '0', '0', '478', '1', '0', '', '0', '');
INSERT INTO `tpwe_xz_aipt_list_install` VALUES ('163', 'xz_aipt/mingliangchahua/26.jpg', '异域公主 梦幻修饰 厚涂 超高清 半身像 细节刻画清晰 完美五官 完美光影 温柔 少女 对称 眼睛有神 面纱', '明亮插画', '10013', '0', '0', '0', '478', '1', '0', '', '0', '');
INSERT INTO `tpwe_xz_aipt_list_install` VALUES ('164', 'xz_aipt/mingliangchahua/27.jpg', '阴暗的天空下着小雨 赛博朋克街道', '明亮插画', '10013', '0', '0', '0', '478', '1', '0', '', '0', '');
INSERT INTO `tpwe_xz_aipt_list_install` VALUES ('165', 'xz_aipt/mingliangchahua/28.jpg', '再探问人间传奇 仔细绘眉目栩栩 是有情无心 敲一声叹息 锣鼓声里影子戏', '明亮插画', '10013', '0', '0', '0', '478', '1', '0', '', '0', '');
INSERT INTO `tpwe_xz_aipt_list_install` VALUES ('166', 'xz_aipt/mingliangchahua/29.jpg', '长城、长江、4K、凤凰、唯美、中国风', '明亮插画', '10013', '0', '0', '0', '478', '1', '0', '', '0', '');
INSERT INTO `tpwe_xz_aipt_list_install` VALUES ('167', 'xz_aipt/mingliangchahua/30.jpg', '长满荆棘的鸟笼宫殿 玫瑰花', '明亮插画', '10013', '0', '0', '0', '478', '1', '0', '', '0', '');
INSERT INTO `tpwe_xz_aipt_list_install` VALUES ('168', 'xz_aipt/mingliangchahua/31.jpg', '蒸汽波美少女 清纯 温柔 甜美 微笑嘴 细节刻画清晰 背光 对称 完美半身像', '明亮插画', '10013', '0', '0', '0', '478', '1', '0', '', '0', '');
INSERT INTO `tpwe_xz_aipt_list_install` VALUES ('169', 'xz_aipt/mingliangchahua/32.jpg', '中国风，超高清，细节刻画，沐浴在晨光里，挪威的森林，漫天飞雪，越野车，雪中的小屋，炊烟袅袅，电影般的灯光，照片般的真实感', '明亮插画', '10013', '0', '0', '0', '478', '1', '0', '', '0', '');
INSERT INTO `tpwe_xz_aipt_list_install` VALUES ('170', 'xz_aipt/shuicaihua/1.jpg', '父亲', '水彩画', '10013', '0', '0', '0', '479', '1', '0', '', '0', '');
INSERT INTO `tpwe_xz_aipt_list_install` VALUES ('171', 'xz_aipt/shuicaihua/2.jpg', '华丽的教堂', '水彩画', '10013', '0', '0', '0', '479', '1', '0', '', '0', '');
INSERT INTO `tpwe_xz_aipt_list_install` VALUES ('172', 'xz_aipt/shuicaihua/3.jpg', '明月松间照，清泉石上流，刻画精细，粉色楼阁中有高大的粉色树木，画风细腻的古风场景，粉红玫瑰，浪漫与幻想，史诗感，超广角，史诗画卷，现实主义，粉色朋克，辛烷渲染，虚幻引擎，概念艺术，厚涂，8k，高清壁纸', '水彩画', '10013', '0', '0', '0', '479', '1', '0', '', '0', '');
INSERT INTO `tpwe_xz_aipt_list_install` VALUES ('173', 'xz_aipt/shuicaihua/4.jpg', '养老金', '水彩画', '10013', '0', '0', '0', '479', '1', '0', '', '0', '');
INSERT INTO `tpwe_xz_aipt_list_install` VALUES ('174', 'xz_aipt/shuicaihua/5.jpg', '野牦牛在绿油油的草地中贪婪的吃草', '水彩画', '10013', '0', '0', '0', '479', '1', '0', '', '0', '');
INSERT INTO `tpwe_xz_aipt_list_install` VALUES ('175', 'xz_aipt/shuifenhua/1.jpg', '床前明月光，疑是地上霜', '水粉画', '10013', '0', '0', '0', '493', '1', '0', '', '0', '');
INSERT INTO `tpwe_xz_aipt_list_install` VALUES ('176', 'xz_aipt/shuifenhua/2.jpg', '房间', '水粉画', '10013', '0', '0', '0', '493', '1', '0', '', '0', '');
INSERT INTO `tpwe_xz_aipt_list_install` VALUES ('177', 'xz_aipt/shuifenhua/3.jpg', '曼联', '水粉画', '10013', '0', '0', '0', '493', '1', '0', '', '0', '');
INSERT INTO `tpwe_xz_aipt_list_install` VALUES ('178', 'xz_aipt/shuifenhua/4.jpg', '升学考试', '水粉画', '10013', '0', '0', '0', '493', '1', '0', '', '0', '');
INSERT INTO `tpwe_xz_aipt_list_install` VALUES ('179', 'xz_aipt/shuifenhua/5.jpg', '一个无限的符号形状的麦田', '水粉画', '10013', '0', '0', '0', '493', '1', '0', '', '0', '');
INSERT INTO `tpwe_xz_aipt_list_install` VALUES ('180', 'xz_aipt/xiangsuyishu/1.jpg', '大胸，狐妖，少女', '像素艺术', '10013', '0', '0', '0', '481', '1', '0', '', '0', '');
INSERT INTO `tpwe_xz_aipt_list_install` VALUES ('181', 'xz_aipt/xiangsuyishu/2.jpg', '傅里叶变换', '像素艺术', '10013', '0', '0', '0', '481', '1', '0', '', '0', '');
INSERT INTO `tpwe_xz_aipt_list_install` VALUES ('182', 'xz_aipt/xiangsuyishu/3.jpg', '广角，糖果，波浪，梦想，星星，五颜六色，樱花，多云，高品质，童话，艺术站，西尔万·萨莱尔', '像素艺术', '10013', '0', '0', '0', '481', '1', '0', '', '0', '');
INSERT INTO `tpwe_xz_aipt_list_install` VALUES ('183', 'xz_aipt/xiangsuyishu/4.jpg', '浆声灯影里的秦淮河', '像素艺术', '10013', '0', '0', '0', '481', '1', '0', '', '0', '');
INSERT INTO `tpwe_xz_aipt_list_install` VALUES ('184', 'xz_aipt/xiangsuyishu/5.jpg', '枯藤老树昏鸦', '像素艺术', '10013', '0', '0', '0', '481', '1', '0', '', '0', '');
INSERT INTO `tpwe_xz_aipt_list_install` VALUES ('185', 'xz_aipt/xiangsuyishu/6.jpg', '猫头鹰，彼埃·蒙德里安，拼图', '像素艺术', '10013', '0', '0', '0', '481', '1', '0', '', '0', '');
INSERT INTO `tpwe_xz_aipt_list_install` VALUES ('186', 'xz_aipt/xiangsuyishu/7.jpg', '玫瑰 城市 萦绕 光 彩', '像素艺术', '10013', '0', '0', '0', '481', '1', '0', '', '0', '');
INSERT INTO `tpwe_xz_aipt_list_install` VALUES ('187', 'xz_aipt/xiangsuyishu/8.jpg', '霓虹下的诗人', '像素艺术', '10013', '0', '0', '0', '481', '1', '0', '', '0', '');
INSERT INTO `tpwe_xz_aipt_list_install` VALUES ('188', 'xz_aipt/xiangsuyishu/9.jpg', '人类持续地探索地外文明', '像素艺术', '10013', '0', '0', '0', '481', '1', '0', '', '0', '');
INSERT INTO `tpwe_xz_aipt_list_install` VALUES ('189', 'xz_aipt/xiangsuyishu/10.jpg', '赛博朋克美少女 清纯 温柔 甜美 微笑嘴 细节刻画清晰 背光 对称 完美半身像', '像素艺术', '10013', '0', '0', '0', '481', '1', '0', '', '0', '');
INSERT INTO `tpwe_xz_aipt_list_install` VALUES ('190', 'xz_aipt/xiangsuyishu/11.jpg', '万艾可', '像素艺术', '10013', '0', '0', '0', '481', '1', '0', '', '0', '');
INSERT INTO `tpwe_xz_aipt_list_install` VALUES ('191', 'xz_aipt/xiangsuyishu/12.jpg', '小清新的壁纸', '像素艺术', '10013', '0', '0', '0', '481', '1', '0', '', '0', '');
INSERT INTO `tpwe_xz_aipt_list_install` VALUES ('192', 'xz_aipt/xiangsuyishu/13.jpg', '薛定谔的猫', '像素艺术', '10013', '0', '0', '0', '481', '1', '0', '', '0', '');
INSERT INTO `tpwe_xz_aipt_list_install` VALUES ('193', 'xz_aipt/xiangsuyishu/14.jpg', '阴暗的天空下着小雨 赛博朋克街道', '像素艺术', '10013', '0', '0', '0', '481', '1', '0', '', '0', '');
INSERT INTO `tpwe_xz_aipt_list_install` VALUES ('194', 'xz_aipt/xieyiheibai/1.jpg', '仓鼠', '写意黑白', '10013', '0', '0', '0', '487', '1', '0', '', '0', '');
INSERT INTO `tpwe_xz_aipt_list_install` VALUES ('195', 'xz_aipt/xieyiheibai/2.jpg', '美丽的女人', '写意黑白', '10013', '0', '0', '0', '487', '1', '0', '', '0', '');
INSERT INTO `tpwe_xz_aipt_list_install` VALUES ('196', 'xz_aipt/xieyiheibai/3.jpg', '普洱茶', '写意黑白', '10013', '0', '0', '0', '487', '1', '0', '', '0', '');
INSERT INTO `tpwe_xz_aipt_list_install` VALUES ('197', 'xz_aipt/xieyiheibai/4.jpg', '日落的天空', '写意黑白', '10013', '0', '0', '0', '487', '1', '0', '', '0', '');
INSERT INTO `tpwe_xz_aipt_list_install` VALUES ('198', 'xz_aipt/xieyiheibai/5.jpg', '颐和园', '写意黑白', '10013', '0', '0', '0', '487', '1', '0', '', '0', '');
INSERT INTO `tpwe_xz_aipt_list_install` VALUES ('199', 'xz_aipt/xuancaichahua/1.jpg', '宫殿', '炫彩插画', '10013', '0', '0', '0', '488', '1', '0', '', '0', '');
INSERT INTO `tpwe_xz_aipt_list_install` VALUES ('200', 'xz_aipt/xuancaichahua/2.jpg', '古装 少女唯美 花', '炫彩插画', '10013', '0', '0', '0', '488', '1', '0', '', '0', '');
INSERT INTO `tpwe_xz_aipt_list_install` VALUES ('201', 'xz_aipt/xuancaichahua/3.jpg', '荆棘缠绕穿着黑色花嫁的少女 梦幻修饰 厚涂 超高清 半身像 细节刻画清晰 完美五官 完美光影 温柔 少女 对称 眼睛有神', '炫彩插画', '10013', '0', '0', '0', '488', '1', '0', '', '0', '');
INSERT INTO `tpwe_xz_aipt_list_install` VALUES ('202', 'xz_aipt/xuancaichahua/4.jpg', '猫头鹰，彼埃·蒙德里安，拼图', '炫彩插画', '10013', '0', '0', '0', '488', '1', '0', '', '0', '');
INSERT INTO `tpwe_xz_aipt_list_install` VALUES ('203', 'xz_aipt/xuancaichahua/5.jpg', '美男，白衬衫，吻痕，厚涂，半身像', '炫彩插画', '10013', '0', '0', '0', '488', '1', '0', '', '0', '');
INSERT INTO `tpwe_xz_aipt_list_install` VALUES ('204', 'xz_aipt/xuancaichahua/6.jpg', '萌萌小动物，衣服，可爱，高清', '炫彩插画', '10013', '0', '0', '0', '488', '1', '0', '', '0', '');
INSERT INTO `tpwe_xz_aipt_list_install` VALUES ('205', 'xz_aipt/xuancaichahua/7.jpg', '女生完美头像 青莲花 兰花发簪 细节刻画清晰 对称 眼睛有神 颧骨 瓜子脸 高鼻梁 工笔画 水墨 背光 回眸一笑', '炫彩插画', '10013', '0', '0', '0', '488', '1', '0', '', '0', '');
INSERT INTO `tpwe_xz_aipt_list_install` VALUES ('206', 'xz_aipt/xuancaichahua/8.jpg', '赛博朋克美少女 清纯 温柔 甜美 微笑嘴 细节刻画清晰 背光 对称 完美半身像', '炫彩插画', '10013', '0', '0', '0', '488', '1', '0', '', '0', '');
INSERT INTO `tpwe_xz_aipt_list_install` VALUES ('207', 'xz_aipt/xuancaichahua/9.jpg', '少男的幻想 厚涂 手绘头像 梦幻修饰 唯美 高清 奢华 细节刻画清晰', '炫彩插画', '10013', '0', '0', '0', '488', '1', '0', '', '0', '');
INSERT INTO `tpwe_xz_aipt_list_install` VALUES ('208', 'xz_aipt/xuancaichahua/10.jpg', '水彩画，五官端正，面容精致，一个大笑的男孩，泼彩，涂抹，开朗，温馨，有感染力，有活力，', '炫彩插画', '10013', '0', '0', '0', '488', '1', '0', '', '0', '');
INSERT INTO `tpwe_xz_aipt_list_install` VALUES ('209', 'xz_aipt/xuancaichahua/11.jpg', '夜凉如水，清风徐来，美轮美奂，惊艳绝伦，绝美壁纸，极致精美，超高意境', '炫彩插画', '10013', '0', '0', '0', '488', '1', '0', '', '0', '');
INSERT INTO `tpwe_xz_aipt_list_install` VALUES ('210', 'xz_aipt/xuancaichahua/12.jpg', '一个废弃的宫殿布满荆棘和玫瑰玫瑰和荆棘上似乎还有一些血', '炫彩插画', '10013', '0', '0', '0', '488', '1', '0', '', '0', '');
INSERT INTO `tpwe_xz_aipt_list_install` VALUES ('211', 'xz_aipt/xuancaichahua/13.jpg', '一群仙鹤飞过蓝天白云，衍纸', '炫彩插画', '10013', '0', '0', '0', '488', '1', '0', '', '0', '');
INSERT INTO `tpwe_xz_aipt_list_install` VALUES ('212', 'xz_aipt/xuancaichahua/14.jpg', '雨中的未来中国风城市', '炫彩插画', '10013', '0', '0', '0', '488', '1', '0', '', '0', '');
INSERT INTO `tpwe_xz_aipt_list_install` VALUES ('213', 'xz_aipt/xuancaichahua/15.jpg', '玉真 花之使者 梦幻修饰 厚涂 超高清 半身像 细节刻画清晰 完美五官 完美光影 温柔 少女 对称 眼睛有神 奇幻', '炫彩插画', '10013', '0', '0', '0', '488', '1', '0', '', '0', '');
INSERT INTO `tpwe_xz_aipt_list_install` VALUES ('214', 'xz_aipt/xuancaichahua/16.jpg', '玉真 机械之心 梦幻修饰 厚涂 超高清 半身像 细节刻画清晰 完美五官 完美光影 温柔 少女 对称 眼睛有神', '炫彩插画', '10013', '0', '0', '0', '488', '1', '0', '', '0', '');
INSERT INTO `tpwe_xz_aipt_list_install` VALUES ('215', 'xz_aipt/xuancaichahua/17.jpg', '蒸汽波 香烟 红酒 牛排 奶酪 鲜花 高清画质 细节刻画', '炫彩插画', '10013', '0', '0', '0', '488', '1', '0', '', '0', '');
INSERT INTO `tpwe_xz_aipt_list_install` VALUES ('216', 'xz_aipt/youhua/1.jpg', '海日生明月天涯共此时壁纸', '油画', '10013', '0', '0', '0', '489', '1', '0', '', '0', '');
INSERT INTO `tpwe_xz_aipt_list_install` VALUES ('217', 'xz_aipt/youhua/2.jpg', '红色幕布，白色大理石文艺复兴风神明雕塑，欧式双层华丽水晶装饰古典大吊灯，镜子，古典金属铁艺五头落地烛台，浪漫，烛光，阴影，室内，细致照片风，仰视视角', '油画', '10013', '0', '0', '0', '489', '1', '0', '', '0', '');
INSERT INTO `tpwe_xz_aipt_list_install` VALUES ('218', 'xz_aipt/youhua/3.jpg', '湖里的天鹅', '油画', '10013', '0', '0', '0', '489', '1', '0', '', '0', '');
INSERT INTO `tpwe_xz_aipt_list_install` VALUES ('219', 'xz_aipt/youhua/4.jpg', '九尾狐 凤凰城 氛围感大场面 祥云', '油画', '10013', '0', '0', '0', '489', '1', '0', '', '0', '');
INSERT INTO `tpwe_xz_aipt_list_install` VALUES ('220', 'xz_aipt/youhua/5.jpg', '九尾狐 梦幻修饰 精致 震撼人心', '油画', '10013', '0', '0', '0', '489', '1', '0', '', '0', '');
INSERT INTO `tpwe_xz_aipt_list_install` VALUES ('221', 'xz_aipt/youhua/6.jpg', '四合院', '油画', '10013', '0', '0', '0', '489', '1', '0', '', '0', '');
INSERT INTO `tpwe_xz_aipt_list_install` VALUES ('222', 'xz_aipt/youhua/7.jpg', '像素风的独角兽', '油画', '10013', '0', '0', '0', '489', '1', '0', '', '0', '');
INSERT INTO `tpwe_xz_aipt_list_install` VALUES ('223', 'xz_aipt/youhua/8.jpg', '阴暗的天空下着小雨', '油画', '10013', '0', '0', '0', '489', '1', '0', '', '0', '');
INSERT INTO `tpwe_xz_aipt_list_install` VALUES ('224', 'xz_aipt/youhua/9.jpg', '朱克·张的真实CG渲染图，上面有一座绿色的现代别墅，现代别墅旁边有绿色的草地，天空中有一朵白色的棉花云，还有一朵玫瑰瀑布从屋顶流到草地', '油画', '10013', '0', '0', '0', '489', '1', '0', '', '0', '');
INSERT INTO `tpwe_xz_aipt_list_install` VALUES ('225', 'xz_aipt/zhongguofeng/1.jpg', '古道西风瘦马，夕阳西下，断肠人在天涯', '中国风', '10013', '0', '0', '0', '490', '1', '0', '', '0', '');
INSERT INTO `tpwe_xz_aipt_list_install` VALUES ('226', 'xz_aipt/zhongguofeng/2.jpg', '红豆生南国 春来发几枝 愿君多采撷 此物最相思', '中国风', '10013', '0', '0', '0', '490', '1', '0', '', '0', '');
INSERT INTO `tpwe_xz_aipt_list_install` VALUES ('227', 'xz_aipt/zhongguofeng/3.jpg', '火骷髅硫磺龟', '中国风', '10013', '0', '0', '0', '490', '1', '0', '', '0', '');
INSERT INTO `tpwe_xz_aipt_list_install` VALUES ('228', 'xz_aipt/zhongguofeng/4.jpg', '精灵女与红虎 梦幻修饰 厚涂 超高清 半身像 细节刻画清晰 完美五官 完美光影 对称 眼睛有神 闪闪发光 唯美梦幻背景', '中国风', '10013', '0', '0', '0', '490', '1', '0', '', '0', '');
INSERT INTO `tpwe_xz_aipt_list_install` VALUES ('229', 'xz_aipt/zhongguofeng/5.jpg', '喀斯特地貌 浮世绘 扁平化风格 低饱和度 充满想象力 场景感', '中国风', '10013', '0', '0', '0', '490', '1', '0', '', '0', '');
INSERT INTO `tpwe_xz_aipt_list_install` VALUES ('231', 'xz_aipt/zhongguofeng/7.jpg', '李白，杜甫，高适，喝酒', '中国风', '10013', '0', '0', '0', '490', '1', '0', '', '0', '');
INSERT INTO `tpwe_xz_aipt_list_install` VALUES ('232', 'xz_aipt/zhongguofeng/8.jpg', '绿水青山连绵 柳绿桃红斜映 轻烟漠漠云渐生', '中国风', '10013', '0', '0', '0', '490', '1', '0', '', '0', '');
INSERT INTO `tpwe_xz_aipt_list_install` VALUES ('233', 'xz_aipt/zhongguofeng/9.jpg', '猫头鹰，彼埃·蒙德里安，拼图', '中国风', '10013', '0', '0', '0', '490', '1', '0', '', '0', '');
INSERT INTO `tpwe_xz_aipt_list_install` VALUES ('234', 'xz_aipt/zhongguofeng/10.jpg', '你认为最好看的', '中国风', '10013', '0', '0', '0', '490', '1', '0', '', '0', '');
INSERT INTO `tpwe_xz_aipt_list_install` VALUES ('235', 'xz_aipt/zhongguofeng/11.jpg', '沙漠 怪物 吞噬', '中国风', '10013', '0', '0', '0', '490', '1', '0', '', '0', '');
INSERT INTO `tpwe_xz_aipt_list_install` VALUES ('236', 'xz_aipt/zhongguofeng/12.jpg', '天空，仙侠，梦幻，宫殿', '中国风', '10013', '0', '0', '0', '490', '1', '0', '', '0', '');
INSERT INTO `tpwe_xz_aipt_list_install` VALUES ('237', 'xz_aipt/zhongguohua/1.jpg', '冬天的黄山', '中国画', '10013', '0', '0', '0', '491', '1', '0', '', '0', '');
INSERT INTO `tpwe_xz_aipt_list_install` VALUES ('238', 'xz_aipt/zhongguohua/2.jpg', '荷塘月色', '中国画', '10013', '0', '0', '0', '491', '1', '0', '', '0', '');
INSERT INTO `tpwe_xz_aipt_list_install` VALUES ('239', 'xz_aipt/zhongguohua/3.jpg', '颐和园', '中国画', '10013', '0', '0', '0', '491', '1', '0', '', '0', '');
INSERT INTO `tpwe_xz_aipt_list_install` VALUES ('240', 'xz_aipt/zhongguohua/4.jpg', '宇宙中的矩形扩散', '中国画', '10013', '0', '0', '0', '491', '1', '0', '', '0', '');
INSERT INTO `tpwe_xz_aipt_list_install` VALUES ('241', 'xz_aipt/zhongguohua/5.jpg', '玉米', '中国画', '10013', '0', '0', '0', '491', '1', '0', '', '0', '');
INSERT INTO `tpwe_xz_aipt_list_install` VALUES ('242', 'xz_aipt/ziyoufengge/1.jpg', '猫头鹰，彼埃·蒙德里安，拼图', '自由风格', '10013', '0', '0', '0', '492', '1', '0', '', '0', '');


-- ----------------------------
-- Table structure for `tpwe_xz_aipt_order`
-- ----------------------------
DROP TABLE IF EXISTS `tpwe_xz_aipt_order`;
CREATE TABLE `tpwe_xz_aipt_order` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `baiduid` int(11) NOT NULL,
  `uid` int(11) NOT NULL,
  `ctime` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `kw` text NOT NULL,
  `userid` int(11) NOT NULL,
  `state` int(11) NOT NULL,
  `paynum` int(11) NOT NULL,
  `taskid` int(11) NOT NULL,
  `requestid` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=63 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for `tpwe_xz_aipt_pay`
-- ----------------------------
DROP TABLE IF EXISTS `tpwe_xz_aipt_pay`;
CREATE TABLE `tpwe_xz_aipt_pay` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ctime` int(11) NOT NULL,
  `num` int(11) NOT NULL,
  `money` double(11,2) NOT NULL,
  `userid` int(11) NOT NULL,
  `uid` int(11) NOT NULL,
  `endtime` int(11) NOT NULL,
  `pernum` int(11) NOT NULL,
  `orderid` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=131 DEFAULT CHARSET=utf8;

DROP TABLE IF EXISTS `tpwe_xz_aipt_pro`;
CREATE TABLE `tpwe_xz_aipt_pro` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `proname` varchar(255) NOT NULL,
  `pos` int(11) NOT NULL,
  `money` double(11,2) NOT NULL,
  `totalmoney` int(11) NOT NULL,
  `permoney` int(11) NOT NULL,
  `uid` int(11) NOT NULL,
  `time` int(11) unsigned zerofill NOT NULL,
  `my` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for `tpwe_xz_aipt_swiper`
-- ----------------------------
DROP TABLE IF EXISTS `tpwe_xz_aipt_swiper`;
CREATE TABLE `tpwe_xz_aipt_swiper` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `imgpath` varchar(255) NOT NULL,
  `path` varchar(255) NOT NULL,
  `pos` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `uid` int(11) NOT NULL,
  `install` int(2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=124 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tpwe_xz_aipt_swiper
-- ----------------------------

-- ----------------------------
-- Table structure for `tpwe_xz_aipt_swiper_install`
-- ----------------------------
DROP TABLE IF EXISTS `tpwe_xz_aipt_swiper_install`;
CREATE TABLE `tpwe_xz_aipt_swiper_install` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `imgpath` varchar(255) NOT NULL,
  `path` varchar(255) NOT NULL,
  `pos` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `uid` int(11) NOT NULL,
  `install` int(2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=124 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tpwe_xz_aipt_swiper_install
-- ----------------------------
INSERT INTO `tpwe_xz_aipt_swiper_install` VALUES ('122', '2022120216373228d5f3037.jpg', '', '0', '123', '10013', '0');
INSERT INTO `tpwe_xz_aipt_swiper_install` VALUES ('123', '20221202163732ce7d93291.jpg', '', '0', '333', '10013', '0');

-- ----------------------------
-- Table structure for `tpwe_xz_aipt_tabbar`
-- ----------------------------
DROP TABLE IF EXISTS `tpwe_xz_aipt_tabbar`;
CREATE TABLE `tpwe_xz_aipt_tabbar` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `icon` varchar(255) NOT NULL,
  `picon` varchar(255) NOT NULL,
  `path` varchar(255) NOT NULL,
  `appid` varchar(255) NOT NULL,
  `uid` int(11) NOT NULL,
  `pos` int(11) NOT NULL,
  `install` int(2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=utf8;


-- ----------------------------
-- Table structure for `tpwe_xz_aipt_tabbar_install`
-- ----------------------------
DROP TABLE IF EXISTS `tpwe_xz_aipt_tabbar_install`;
CREATE TABLE `tpwe_xz_aipt_tabbar_install` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `icon` varchar(255) NOT NULL,
  `picon` varchar(255) NOT NULL,
  `path` varchar(255) NOT NULL,
  `appid` varchar(255) NOT NULL,
  `uid` int(11) NOT NULL,
  `pos` int(11) NOT NULL,
  `install` int(2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tpwe_xz_aipt_tabbar_install
-- ----------------------------
INSERT INTO `tpwe_xz_aipt_tabbar_install` VALUES ('26', '首页', '202212021529105ef2a9129.jpg', '20221202152921ce4fe0587.jpg', '/xz_aipt/pages/index/index', '', '10013', '3', '0');
INSERT INTO `tpwe_xz_aipt_tabbar_install` VALUES ('27', '开始绘制', '20221202154356a29cb9740.png', '20221202154356a29cb9740.png', '/xz_aipt/pages/design/index', '', '10013', '2', '0');
INSERT INTO `tpwe_xz_aipt_tabbar_install` VALUES ('28', '我的', '202212021529239fd020692.jpg', '20221202152923abfef1301.jpg', '/xz_aipt/pages/my/index', '', '10013', '0', '0');
INSERT INTO `tpwe_xz_aipt_tabbar_install` VALUES ('29', '红包封面', '202212021529237a3719537.jpg', '202212021529249e6284155.jpg', '/xz_aipt/pages/card/index', '', '10013', '3', '0');
INSERT INTO `tpwe_xz_aipt_tabbar_install` VALUES ('30', '私有引擎', '202212021529211bf623754.jpg', '202212021529227993c5603.jpg', '/xz_aipt/pages/pro/index', '', '10013', '1', '0');

-- ----------------------------
-- Table structure for `tpwe_xz_aipt_token`
-- ----------------------------
DROP TABLE IF EXISTS `tpwe_xz_aipt_token`;
CREATE TABLE `tpwe_xz_aipt_token` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `token` varchar(255) NOT NULL,
  `uid` int(11) NOT NULL,
  `keyid` int(11) NOT NULL,
  `ctime` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tpwe_xz_aipt_token
-- ----------------------------

-- ----------------------------
-- Table structure for `tpwe_xz_aipt_user`
-- ----------------------------
DROP TABLE IF EXISTS `tpwe_xz_aipt_user`;
CREATE TABLE `tpwe_xz_aipt_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `openid` varchar(255) NOT NULL,
  `uid` int(11) NOT NULL,
  `count` int(11) NOT NULL,
  `imgpath` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `hid` int(11) NOT NULL,
  `num` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for `tpwe_xz_aipt_wx_token`
-- ----------------------------
DROP TABLE IF EXISTS `tpwe_xz_aipt_wx_token`;
CREATE TABLE `tpwe_xz_aipt_wx_token` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `token` varchar(255) NOT NULL,
  `ctime` int(11) NOT NULL,
  `uid` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tpwe_xz_aipt_wx_token
-- ----------------------------

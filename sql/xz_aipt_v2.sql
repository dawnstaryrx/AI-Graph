

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `tpwe_xz_aipt_code`
-- ----------------------------
DROP TABLE IF EXISTS `tpwe_xz_aipt_code`;
CREATE TABLE `tpwe_xz_aipt_code` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `code` varchar(255) NOT NULL,
  `state` int(11) NOT NULL,
  `uid` int(11) NOT NULL,
  `kw` varchar(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tpwe_xz_aipt_code
-- ----------------------------

-- ----------------------------
-- Table structure for `tpwe_xz_aipt_faceclass`
-- ----------------------------
DROP TABLE IF EXISTS `tpwe_xz_aipt_faceclass`;
CREATE TABLE `tpwe_xz_aipt_faceclass` (
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
) ENGINE=InnoDB AUTO_INCREMENT=524 DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Table structure for `tpwe_xz_aipt_faceclass_install`
-- ----------------------------
DROP TABLE IF EXISTS `tpwe_xz_aipt_faceclass_install`;
CREATE TABLE `tpwe_xz_aipt_faceclass_install` (
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
) ENGINE=InnoDB AUTO_INCREMENT=524 DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of tpwe_xz_aipt_faceclass_install
-- ----------------------------
INSERT INTO `tpwe_xz_aipt_faceclass_install` VALUES ('511', '宫廷', '0', '0', '10013', '0', '', '', '0', '0', '0');
INSERT INTO `tpwe_xz_aipt_faceclass_install` VALUES ('512', '怀旧', '0', '0', '10013', '0', '', '', '0', '0', '0');
INSERT INTO `tpwe_xz_aipt_faceclass_install` VALUES ('513', '婚纱', '0', '0', '10013', '0', '', '', '0', '0', '0');
INSERT INTO `tpwe_xz_aipt_faceclass_install` VALUES ('514', '军装', '0', '0', '10013', '0', '', '', '0', '0', '0');
INSERT INTO `tpwe_xz_aipt_faceclass_install` VALUES ('515', '浪漫', '0', '0', '10013', '0', '', '', '0', '0', '0');
INSERT INTO `tpwe_xz_aipt_faceclass_install` VALUES ('516', '旅行', '0', '0', '10013', '0', '', '', '0', '0', '0');
INSERT INTO `tpwe_xz_aipt_faceclass_install` VALUES ('517', '男士', '0', '0', '10013', '0', '', '', '0', '0', '0');
INSERT INTO `tpwe_xz_aipt_faceclass_install` VALUES ('518', '七夕', '0', '0', '10013', '0', '', '', '0', '0', '0');
INSERT INTO `tpwe_xz_aipt_faceclass_install` VALUES ('519', '少女', '0', '0', '10013', '0', '', '', '0', '0', '0');
INSERT INTO `tpwe_xz_aipt_faceclass_install` VALUES ('520', '时尚', '0', '0', '10013', '0', '', '', '0', '0', '0');
INSERT INTO `tpwe_xz_aipt_faceclass_install` VALUES ('521', '王者', '0', '0', '10013', '0', '', '', '0', '0', '0');
INSERT INTO `tpwe_xz_aipt_faceclass_install` VALUES ('522', '校园', '0', '0', '10013', '0', '', '', '0', '0', '0');
INSERT INTO `tpwe_xz_aipt_faceclass_install` VALUES ('523', '证件', '0', '0', '10013', '0', '', '', '0', '0', '0');

-- ----------------------------
-- Table structure for `tpwe_xz_aipt_facelist`
-- ----------------------------

-- ----------------------------
-- Table structure for `tpwe_xz_aipt_facelist`
-- ----------------------------
DROP TABLE IF EXISTS `tpwe_xz_aipt_facelist`;
CREATE TABLE `tpwe_xz_aipt_facelist` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `imgpath` varchar(255) NOT NULL,
  `simgpath` varchar(255) NOT NULL,
  `pos` int(11) NOT NULL,
  `hid` int(11) NOT NULL,
  `uid` int(11) NOT NULL,
  `classid` int(11) NOT NULL,
  `install` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=439 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for `tpwe_xz_aipt_facelist_install`
-- ----------------------------
DROP TABLE IF EXISTS `tpwe_xz_aipt_facelist_install`;
CREATE TABLE `tpwe_xz_aipt_facelist_install` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `imgpath` varchar(255) NOT NULL,
  `simgpath` varchar(255) NOT NULL,
  `pos` int(11) NOT NULL,
  `hid` int(11) NOT NULL,
  `uid` int(11) NOT NULL,
  `classid` int(11) NOT NULL,
  `install` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=439 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tpwe_xz_aipt_facelist_install
-- ----------------------------
INSERT INTO `tpwe_xz_aipt_facelist_install` VALUES ('92', 'aipt_new/big_img/511/1.JPG', 'aipt_new/small_img/511/1.JPG', '0', '0', '10013', '511', '0');
INSERT INTO `tpwe_xz_aipt_facelist_install` VALUES ('93', 'aipt_new/big_img/511/2.JPG', 'aipt_new/small_img/511/2.JPG', '0', '0', '10013', '511', '0');
INSERT INTO `tpwe_xz_aipt_facelist_install` VALUES ('94', 'aipt_new/big_img/511/3.JPG', 'aipt_new/small_img/511/3.JPG', '0', '0', '10013', '511', '0');
INSERT INTO `tpwe_xz_aipt_facelist_install` VALUES ('95', 'aipt_new/big_img/511/4.JPG', 'aipt_new/small_img/511/4.JPG', '0', '0', '10013', '511', '0');
INSERT INTO `tpwe_xz_aipt_facelist_install` VALUES ('96', 'aipt_new/big_img/511/5.JPG', 'aipt_new/small_img/511/5.JPG', '0', '0', '10013', '511', '0');
INSERT INTO `tpwe_xz_aipt_facelist_install` VALUES ('97', 'aipt_new/big_img/511/6.JPG', 'aipt_new/small_img/511/6.JPG', '0', '0', '10013', '511', '0');
INSERT INTO `tpwe_xz_aipt_facelist_install` VALUES ('98', 'aipt_new/big_img/511/7.JPG', 'aipt_new/small_img/511/7.JPG', '0', '0', '10013', '511', '0');
INSERT INTO `tpwe_xz_aipt_facelist_install` VALUES ('99', 'aipt_new/big_img/511/8.JPG', 'aipt_new/small_img/511/8.JPG', '0', '0', '10013', '511', '0');
INSERT INTO `tpwe_xz_aipt_facelist_install` VALUES ('100', 'aipt_new/big_img/511/9.JPG', 'aipt_new/small_img/511/9.JPG', '0', '0', '10013', '511', '0');
INSERT INTO `tpwe_xz_aipt_facelist_install` VALUES ('101', 'aipt_new/big_img/511/10.JPG', 'aipt_new/small_img/511/10.JPG', '0', '0', '10013', '511', '0');
INSERT INTO `tpwe_xz_aipt_facelist_install` VALUES ('102', 'aipt_new/big_img/511/11.JPG', 'aipt_new/small_img/511/11.JPG', '0', '0', '10013', '511', '0');
INSERT INTO `tpwe_xz_aipt_facelist_install` VALUES ('103', 'aipt_new/big_img/511/12.JPG', 'aipt_new/small_img/511/12.JPG', '0', '0', '10013', '511', '0');
INSERT INTO `tpwe_xz_aipt_facelist_install` VALUES ('104', 'aipt_new/big_img/511/13.JPG', 'aipt_new/small_img/511/13.JPG', '0', '0', '10013', '511', '0');
INSERT INTO `tpwe_xz_aipt_facelist_install` VALUES ('105', 'aipt_new/big_img/511/14.JPG', 'aipt_new/small_img/511/14.JPG', '0', '0', '10013', '511', '0');
INSERT INTO `tpwe_xz_aipt_facelist_install` VALUES ('106', 'aipt_new/big_img/511/15.JPG', 'aipt_new/small_img/511/15.JPG', '0', '0', '10013', '511', '0');
INSERT INTO `tpwe_xz_aipt_facelist_install` VALUES ('107', 'aipt_new/big_img/512/1.JPG', 'aipt_new/small_img/512/1.JPG', '0', '0', '10013', '512', '0');
INSERT INTO `tpwe_xz_aipt_facelist_install` VALUES ('108', 'aipt_new/big_img/512/2.JPG', 'aipt_new/small_img/512/2.JPG', '0', '0', '10013', '512', '0');
INSERT INTO `tpwe_xz_aipt_facelist_install` VALUES ('109', 'aipt_new/big_img/512/3.JPG', 'aipt_new/small_img/512/3.JPG', '0', '0', '10013', '512', '0');
INSERT INTO `tpwe_xz_aipt_facelist_install` VALUES ('110', 'aipt_new/big_img/512/4.JPG', 'aipt_new/small_img/512/4.JPG', '0', '0', '10013', '512', '0');
INSERT INTO `tpwe_xz_aipt_facelist_install` VALUES ('111', 'aipt_new/big_img/512/5.JPG', 'aipt_new/small_img/512/5.JPG', '0', '0', '10013', '512', '0');
INSERT INTO `tpwe_xz_aipt_facelist_install` VALUES ('112', 'aipt_new/big_img/512/6.JPG', 'aipt_new/small_img/512/6.JPG', '0', '0', '10013', '512', '0');
INSERT INTO `tpwe_xz_aipt_facelist_install` VALUES ('113', 'aipt_new/big_img/512/7.JPG', 'aipt_new/small_img/512/7.JPG', '0', '0', '10013', '512', '0');
INSERT INTO `tpwe_xz_aipt_facelist_install` VALUES ('114', 'aipt_new/big_img/512/8.JPG', 'aipt_new/small_img/512/8.JPG', '0', '0', '10013', '512', '0');
INSERT INTO `tpwe_xz_aipt_facelist_install` VALUES ('115', 'aipt_new/big_img/512/9.JPG', 'aipt_new/small_img/512/9.JPG', '0', '0', '10013', '512', '0');
INSERT INTO `tpwe_xz_aipt_facelist_install` VALUES ('116', 'aipt_new/big_img/512/10.JPG', 'aipt_new/small_img/512/10.JPG', '0', '0', '10013', '512', '0');
INSERT INTO `tpwe_xz_aipt_facelist_install` VALUES ('117', 'aipt_new/big_img/513/1.JPG', 'aipt_new/small_img/513/1.JPG', '0', '0', '10013', '513', '0');
INSERT INTO `tpwe_xz_aipt_facelist_install` VALUES ('118', 'aipt_new/big_img/513/2.JPG', 'aipt_new/small_img/513/2.JPG', '0', '0', '10013', '513', '0');
INSERT INTO `tpwe_xz_aipt_facelist_install` VALUES ('119', 'aipt_new/big_img/513/3.JPG', 'aipt_new/small_img/513/3.JPG', '0', '0', '10013', '513', '0');
INSERT INTO `tpwe_xz_aipt_facelist_install` VALUES ('120', 'aipt_new/big_img/513/4.JPG', 'aipt_new/small_img/513/4.JPG', '0', '0', '10013', '513', '0');
INSERT INTO `tpwe_xz_aipt_facelist_install` VALUES ('121', 'aipt_new/big_img/513/5.JPG', 'aipt_new/small_img/513/5.JPG', '0', '0', '10013', '513', '0');
INSERT INTO `tpwe_xz_aipt_facelist_install` VALUES ('122', 'aipt_new/big_img/513/6.JPG', 'aipt_new/small_img/513/6.JPG', '0', '0', '10013', '513', '0');
INSERT INTO `tpwe_xz_aipt_facelist_install` VALUES ('123', 'aipt_new/big_img/513/7.JPG', 'aipt_new/small_img/513/7.JPG', '0', '0', '10013', '513', '0');
INSERT INTO `tpwe_xz_aipt_facelist_install` VALUES ('124', 'aipt_new/big_img/513/8.JPG', 'aipt_new/small_img/513/8.JPG', '0', '0', '10013', '513', '0');
INSERT INTO `tpwe_xz_aipt_facelist_install` VALUES ('125', 'aipt_new/big_img/513/9.JPG', 'aipt_new/small_img/513/9.JPG', '0', '0', '10013', '513', '0');
INSERT INTO `tpwe_xz_aipt_facelist_install` VALUES ('126', 'aipt_new/big_img/513/10.JPG', 'aipt_new/small_img/513/10.JPG', '0', '0', '10013', '513', '0');
INSERT INTO `tpwe_xz_aipt_facelist_install` VALUES ('127', 'aipt_new/big_img/513/11.JPG', 'aipt_new/small_img/513/11.JPG', '0', '0', '10013', '513', '0');
INSERT INTO `tpwe_xz_aipt_facelist_install` VALUES ('128', 'aipt_new/big_img/513/12.JPG', 'aipt_new/small_img/513/12.JPG', '0', '0', '10013', '513', '0');
INSERT INTO `tpwe_xz_aipt_facelist_install` VALUES ('129', 'aipt_new/big_img/513/13.JPG', 'aipt_new/small_img/513/13.JPG', '0', '0', '10013', '513', '0');
INSERT INTO `tpwe_xz_aipt_facelist_install` VALUES ('130', 'aipt_new/big_img/513/14.JPG', 'aipt_new/small_img/513/14.JPG', '0', '0', '10013', '513', '0');
INSERT INTO `tpwe_xz_aipt_facelist_install` VALUES ('131', 'aipt_new/big_img/513/15.JPG', 'aipt_new/small_img/513/15.JPG', '0', '0', '10013', '513', '0');
INSERT INTO `tpwe_xz_aipt_facelist_install` VALUES ('132', 'aipt_new/big_img/513/16.JPG', 'aipt_new/small_img/513/16.JPG', '0', '0', '10013', '513', '0');
INSERT INTO `tpwe_xz_aipt_facelist_install` VALUES ('133', 'aipt_new/big_img/513/17.JPG', 'aipt_new/small_img/513/17.JPG', '0', '0', '10013', '513', '0');
INSERT INTO `tpwe_xz_aipt_facelist_install` VALUES ('134', 'aipt_new/big_img/513/18.JPG', 'aipt_new/small_img/513/18.JPG', '0', '0', '10013', '513', '0');
INSERT INTO `tpwe_xz_aipt_facelist_install` VALUES ('135', 'aipt_new/big_img/513/19.JPG', 'aipt_new/small_img/513/19.JPG', '0', '0', '10013', '513', '0');
INSERT INTO `tpwe_xz_aipt_facelist_install` VALUES ('136', 'aipt_new/big_img/513/20.JPG', 'aipt_new/small_img/513/20.JPG', '0', '0', '10013', '513', '0');
INSERT INTO `tpwe_xz_aipt_facelist_install` VALUES ('137', 'aipt_new/big_img/513/21.JPG', 'aipt_new/small_img/513/21.JPG', '0', '0', '10013', '513', '0');
INSERT INTO `tpwe_xz_aipt_facelist_install` VALUES ('138', 'aipt_new/big_img/513/22.JPG', 'aipt_new/small_img/513/22.JPG', '0', '0', '10013', '513', '0');
INSERT INTO `tpwe_xz_aipt_facelist_install` VALUES ('139', 'aipt_new/big_img/513/23.JPG', 'aipt_new/small_img/513/23.JPG', '0', '0', '10013', '513', '0');
INSERT INTO `tpwe_xz_aipt_facelist_install` VALUES ('140', 'aipt_new/big_img/513/24.JPG', 'aipt_new/small_img/513/24.JPG', '0', '0', '10013', '513', '0');
INSERT INTO `tpwe_xz_aipt_facelist_install` VALUES ('141', 'aipt_new/big_img/514/1.JPG', 'aipt_new/small_img/514/1.JPG', '0', '0', '10013', '514', '0');
INSERT INTO `tpwe_xz_aipt_facelist_install` VALUES ('142', 'aipt_new/big_img/514/2.JPG', 'aipt_new/small_img/514/2.JPG', '0', '0', '10013', '514', '0');
INSERT INTO `tpwe_xz_aipt_facelist_install` VALUES ('143', 'aipt_new/big_img/514/3.JPG', 'aipt_new/small_img/514/3.JPG', '0', '0', '10013', '514', '0');
INSERT INTO `tpwe_xz_aipt_facelist_install` VALUES ('144', 'aipt_new/big_img/514/4.JPG', 'aipt_new/small_img/514/4.JPG', '0', '0', '10013', '514', '0');
INSERT INTO `tpwe_xz_aipt_facelist_install` VALUES ('145', 'aipt_new/big_img/514/5.JPG', 'aipt_new/small_img/514/5.JPG', '0', '0', '10013', '514', '0');
INSERT INTO `tpwe_xz_aipt_facelist_install` VALUES ('146', 'aipt_new/big_img/514/6.JPG', 'aipt_new/small_img/514/6.JPG', '0', '0', '10013', '514', '0');
INSERT INTO `tpwe_xz_aipt_facelist_install` VALUES ('147', 'aipt_new/big_img/514/7.JPG', 'aipt_new/small_img/514/7.JPG', '0', '0', '10013', '514', '0');
INSERT INTO `tpwe_xz_aipt_facelist_install` VALUES ('148', 'aipt_new/big_img/514/8.JPG', 'aipt_new/small_img/514/8.JPG', '0', '0', '10013', '514', '0');
INSERT INTO `tpwe_xz_aipt_facelist_install` VALUES ('149', 'aipt_new/big_img/514/9.JPG', 'aipt_new/small_img/514/9.JPG', '0', '0', '10013', '514', '0');
INSERT INTO `tpwe_xz_aipt_facelist_install` VALUES ('150', 'aipt_new/big_img/514/10.JPG', 'aipt_new/small_img/514/10.JPG', '0', '0', '10013', '514', '0');
INSERT INTO `tpwe_xz_aipt_facelist_install` VALUES ('151', 'aipt_new/big_img/514/11.JPG', 'aipt_new/small_img/514/11.JPG', '0', '0', '10013', '514', '0');
INSERT INTO `tpwe_xz_aipt_facelist_install` VALUES ('152', 'aipt_new/big_img/514/12.JPG', 'aipt_new/small_img/514/12.JPG', '0', '0', '10013', '514', '0');
INSERT INTO `tpwe_xz_aipt_facelist_install` VALUES ('153', 'aipt_new/big_img/514/13.JPG', 'aipt_new/small_img/514/13.JPG', '0', '0', '10013', '514', '0');
INSERT INTO `tpwe_xz_aipt_facelist_install` VALUES ('154', 'aipt_new/big_img/514/14.JPG', 'aipt_new/small_img/514/14.JPG', '0', '0', '10013', '514', '0');
INSERT INTO `tpwe_xz_aipt_facelist_install` VALUES ('155', 'aipt_new/big_img/514/15.JPG', 'aipt_new/small_img/514/15.JPG', '0', '0', '10013', '514', '0');
INSERT INTO `tpwe_xz_aipt_facelist_install` VALUES ('156', 'aipt_new/big_img/514/16.JPG', 'aipt_new/small_img/514/16.JPG', '0', '0', '10013', '514', '0');
INSERT INTO `tpwe_xz_aipt_facelist_install` VALUES ('157', 'aipt_new/big_img/515/1.JPG', 'aipt_new/small_img/515/1.JPG', '0', '0', '10013', '515', '0');
INSERT INTO `tpwe_xz_aipt_facelist_install` VALUES ('158', 'aipt_new/big_img/515/2.JPG', 'aipt_new/small_img/515/2.JPG', '0', '0', '10013', '515', '0');
INSERT INTO `tpwe_xz_aipt_facelist_install` VALUES ('159', 'aipt_new/big_img/515/3.JPG', 'aipt_new/small_img/515/3.JPG', '0', '0', '10013', '515', '0');
INSERT INTO `tpwe_xz_aipt_facelist_install` VALUES ('160', 'aipt_new/big_img/515/4.JPG', 'aipt_new/small_img/515/4.JPG', '0', '0', '10013', '515', '0');
INSERT INTO `tpwe_xz_aipt_facelist_install` VALUES ('161', 'aipt_new/big_img/515/5.JPG', 'aipt_new/small_img/515/5.JPG', '0', '0', '10013', '515', '0');
INSERT INTO `tpwe_xz_aipt_facelist_install` VALUES ('162', 'aipt_new/big_img/515/6.JPG', 'aipt_new/small_img/515/6.JPG', '0', '0', '10013', '515', '0');
INSERT INTO `tpwe_xz_aipt_facelist_install` VALUES ('163', 'aipt_new/big_img/515/7.JPG', 'aipt_new/small_img/515/7.JPG', '0', '0', '10013', '515', '0');
INSERT INTO `tpwe_xz_aipt_facelist_install` VALUES ('164', 'aipt_new/big_img/515/8.JPG', 'aipt_new/small_img/515/8.JPG', '0', '0', '10013', '515', '0');
INSERT INTO `tpwe_xz_aipt_facelist_install` VALUES ('165', 'aipt_new/big_img/515/9.JPG', 'aipt_new/small_img/515/9.JPG', '0', '0', '10013', '515', '0');
INSERT INTO `tpwe_xz_aipt_facelist_install` VALUES ('166', 'aipt_new/big_img/515/10.JPG', 'aipt_new/small_img/515/10.JPG', '0', '0', '10013', '515', '0');
INSERT INTO `tpwe_xz_aipt_facelist_install` VALUES ('167', 'aipt_new/big_img/515/11.JPG', 'aipt_new/small_img/515/11.JPG', '0', '0', '10013', '515', '0');
INSERT INTO `tpwe_xz_aipt_facelist_install` VALUES ('168', 'aipt_new/big_img/515/12.JPG', 'aipt_new/small_img/515/12.JPG', '0', '0', '10013', '515', '0');
INSERT INTO `tpwe_xz_aipt_facelist_install` VALUES ('169', 'aipt_new/big_img/515/13.JPG', 'aipt_new/small_img/515/13.JPG', '0', '0', '10013', '515', '0');
INSERT INTO `tpwe_xz_aipt_facelist_install` VALUES ('170', 'aipt_new/big_img/515/14.JPG', 'aipt_new/small_img/515/14.JPG', '0', '0', '10013', '515', '0');
INSERT INTO `tpwe_xz_aipt_facelist_install` VALUES ('171', 'aipt_new/big_img/515/15.JPG', 'aipt_new/small_img/515/15.JPG', '0', '0', '10013', '515', '0');
INSERT INTO `tpwe_xz_aipt_facelist_install` VALUES ('172', 'aipt_new/big_img/515/16.JPG', 'aipt_new/small_img/515/16.JPG', '0', '0', '10013', '515', '0');
INSERT INTO `tpwe_xz_aipt_facelist_install` VALUES ('173', 'aipt_new/big_img/515/17.JPG', 'aipt_new/small_img/515/17.JPG', '0', '0', '10013', '515', '0');
INSERT INTO `tpwe_xz_aipt_facelist_install` VALUES ('174', 'aipt_new/big_img/515/18.JPG', 'aipt_new/small_img/515/18.JPG', '0', '0', '10013', '515', '0');
INSERT INTO `tpwe_xz_aipt_facelist_install` VALUES ('175', 'aipt_new/big_img/515/19.JPG', 'aipt_new/small_img/515/19.JPG', '0', '0', '10013', '515', '0');
INSERT INTO `tpwe_xz_aipt_facelist_install` VALUES ('176', 'aipt_new/big_img/515/20.JPG', 'aipt_new/small_img/515/20.JPG', '0', '0', '10013', '515', '0');
INSERT INTO `tpwe_xz_aipt_facelist_install` VALUES ('177', 'aipt_new/big_img/515/21.JPG', 'aipt_new/small_img/515/21.JPG', '0', '0', '10013', '515', '0');
INSERT INTO `tpwe_xz_aipt_facelist_install` VALUES ('178', 'aipt_new/big_img/515/22.JPG', 'aipt_new/small_img/515/22.JPG', '0', '0', '10013', '515', '0');
INSERT INTO `tpwe_xz_aipt_facelist_install` VALUES ('179', 'aipt_new/big_img/515/23.JPG', 'aipt_new/small_img/515/23.JPG', '0', '0', '10013', '515', '0');
INSERT INTO `tpwe_xz_aipt_facelist_install` VALUES ('180', 'aipt_new/big_img/515/24.JPG', 'aipt_new/small_img/515/24.JPG', '0', '0', '10013', '515', '0');
INSERT INTO `tpwe_xz_aipt_facelist_install` VALUES ('181', 'aipt_new/big_img/516/1.JPG', 'aipt_new/small_img/516/1.JPG', '0', '0', '10013', '516', '0');
INSERT INTO `tpwe_xz_aipt_facelist_install` VALUES ('182', 'aipt_new/big_img/516/2.JPG', 'aipt_new/small_img/516/2.JPG', '0', '0', '10013', '516', '0');
INSERT INTO `tpwe_xz_aipt_facelist_install` VALUES ('183', 'aipt_new/big_img/516/3.JPG', 'aipt_new/small_img/516/3.JPG', '0', '0', '10013', '516', '0');
INSERT INTO `tpwe_xz_aipt_facelist_install` VALUES ('184', 'aipt_new/big_img/516/4.JPG', 'aipt_new/small_img/516/4.JPG', '0', '0', '10013', '516', '0');
INSERT INTO `tpwe_xz_aipt_facelist_install` VALUES ('185', 'aipt_new/big_img/516/5.JPG', 'aipt_new/small_img/516/5.JPG', '0', '0', '10013', '516', '0');
INSERT INTO `tpwe_xz_aipt_facelist_install` VALUES ('186', 'aipt_new/big_img/516/6.JPG', 'aipt_new/small_img/516/6.JPG', '0', '0', '10013', '516', '0');
INSERT INTO `tpwe_xz_aipt_facelist_install` VALUES ('187', 'aipt_new/big_img/516/7.JPG', 'aipt_new/small_img/516/7.JPG', '0', '0', '10013', '516', '0');
INSERT INTO `tpwe_xz_aipt_facelist_install` VALUES ('188', 'aipt_new/big_img/516/8.JPG', 'aipt_new/small_img/516/8.JPG', '0', '0', '10013', '516', '0');
INSERT INTO `tpwe_xz_aipt_facelist_install` VALUES ('189', 'aipt_new/big_img/516/9.JPG', 'aipt_new/small_img/516/9.JPG', '0', '0', '10013', '516', '0');
INSERT INTO `tpwe_xz_aipt_facelist_install` VALUES ('190', 'aipt_new/big_img/516/10.JPG', 'aipt_new/small_img/516/10.JPG', '0', '0', '10013', '516', '0');
INSERT INTO `tpwe_xz_aipt_facelist_install` VALUES ('191', 'aipt_new/big_img/516/11.JPG', 'aipt_new/small_img/516/11.JPG', '0', '0', '10013', '516', '0');
INSERT INTO `tpwe_xz_aipt_facelist_install` VALUES ('192', 'aipt_new/big_img/516/12.JPG', 'aipt_new/small_img/516/12.JPG', '0', '0', '10013', '516', '0');
INSERT INTO `tpwe_xz_aipt_facelist_install` VALUES ('193', 'aipt_new/big_img/516/13.JPG', 'aipt_new/small_img/516/13.JPG', '0', '0', '10013', '516', '0');
INSERT INTO `tpwe_xz_aipt_facelist_install` VALUES ('194', 'aipt_new/big_img/516/14.JPG', 'aipt_new/small_img/516/14.JPG', '0', '0', '10013', '516', '0');
INSERT INTO `tpwe_xz_aipt_facelist_install` VALUES ('195', 'aipt_new/big_img/516/15.JPG', 'aipt_new/small_img/516/15.JPG', '0', '0', '10013', '516', '0');
INSERT INTO `tpwe_xz_aipt_facelist_install` VALUES ('196', 'aipt_new/big_img/516/16.JPG', 'aipt_new/small_img/516/16.JPG', '0', '0', '10013', '516', '0');
INSERT INTO `tpwe_xz_aipt_facelist_install` VALUES ('197', 'aipt_new/big_img/516/17.JPG', 'aipt_new/small_img/516/17.JPG', '0', '0', '10013', '516', '0');
INSERT INTO `tpwe_xz_aipt_facelist_install` VALUES ('198', 'aipt_new/big_img/516/18.JPG', 'aipt_new/small_img/516/18.JPG', '0', '0', '10013', '516', '0');
INSERT INTO `tpwe_xz_aipt_facelist_install` VALUES ('199', 'aipt_new/big_img/517/1.JPG', 'aipt_new/small_img/517/1.JPG', '0', '0', '10013', '517', '0');
INSERT INTO `tpwe_xz_aipt_facelist_install` VALUES ('200', 'aipt_new/big_img/517/2.JPG', 'aipt_new/small_img/517/2.JPG', '0', '0', '10013', '517', '0');
INSERT INTO `tpwe_xz_aipt_facelist_install` VALUES ('201', 'aipt_new/big_img/517/3.JPG', 'aipt_new/small_img/517/3.JPG', '0', '0', '10013', '517', '0');
INSERT INTO `tpwe_xz_aipt_facelist_install` VALUES ('202', 'aipt_new/big_img/517/4.JPG', 'aipt_new/small_img/517/4.JPG', '0', '0', '10013', '517', '0');
INSERT INTO `tpwe_xz_aipt_facelist_install` VALUES ('203', 'aipt_new/big_img/517/5.JPG', 'aipt_new/small_img/517/5.JPG', '0', '0', '10013', '517', '0');
INSERT INTO `tpwe_xz_aipt_facelist_install` VALUES ('204', 'aipt_new/big_img/517/6.JPG', 'aipt_new/small_img/517/6.JPG', '0', '0', '10013', '517', '0');
INSERT INTO `tpwe_xz_aipt_facelist_install` VALUES ('205', 'aipt_new/big_img/517/7.JPG', 'aipt_new/small_img/517/7.JPG', '0', '0', '10013', '517', '0');
INSERT INTO `tpwe_xz_aipt_facelist_install` VALUES ('206', 'aipt_new/big_img/517/8.JPG', 'aipt_new/small_img/517/8.JPG', '0', '0', '10013', '517', '0');
INSERT INTO `tpwe_xz_aipt_facelist_install` VALUES ('207', 'aipt_new/big_img/517/9.JPG', 'aipt_new/small_img/517/9.JPG', '0', '0', '10013', '517', '0');
INSERT INTO `tpwe_xz_aipt_facelist_install` VALUES ('208', 'aipt_new/big_img/517/10.JPG', 'aipt_new/small_img/517/10.JPG', '0', '0', '10013', '517', '0');
INSERT INTO `tpwe_xz_aipt_facelist_install` VALUES ('209', 'aipt_new/big_img/517/11.JPG', 'aipt_new/small_img/517/11.JPG', '0', '0', '10013', '517', '0');
INSERT INTO `tpwe_xz_aipt_facelist_install` VALUES ('210', 'aipt_new/big_img/517/12.JPG', 'aipt_new/small_img/517/12.JPG', '0', '0', '10013', '517', '0');
INSERT INTO `tpwe_xz_aipt_facelist_install` VALUES ('211', 'aipt_new/big_img/517/13.JPG', 'aipt_new/small_img/517/13.JPG', '0', '0', '10013', '517', '0');
INSERT INTO `tpwe_xz_aipt_facelist_install` VALUES ('212', 'aipt_new/big_img/517/14.JPG', 'aipt_new/small_img/517/14.JPG', '0', '0', '10013', '517', '0');
INSERT INTO `tpwe_xz_aipt_facelist_install` VALUES ('213', 'aipt_new/big_img/517/15.JPG', 'aipt_new/small_img/517/15.JPG', '0', '0', '10013', '517', '0');
INSERT INTO `tpwe_xz_aipt_facelist_install` VALUES ('214', 'aipt_new/big_img/517/16.JPG', 'aipt_new/small_img/517/16.JPG', '0', '0', '10013', '517', '0');
INSERT INTO `tpwe_xz_aipt_facelist_install` VALUES ('215', 'aipt_new/big_img/517/17.JPG', 'aipt_new/small_img/517/17.JPG', '0', '0', '10013', '517', '0');
INSERT INTO `tpwe_xz_aipt_facelist_install` VALUES ('216', 'aipt_new/big_img/517/18.JPG', 'aipt_new/small_img/517/18.JPG', '0', '0', '10013', '517', '0');
INSERT INTO `tpwe_xz_aipt_facelist_install` VALUES ('217', 'aipt_new/big_img/517/19.JPG', 'aipt_new/small_img/517/19.JPG', '0', '0', '10013', '517', '0');
INSERT INTO `tpwe_xz_aipt_facelist_install` VALUES ('218', 'aipt_new/big_img/517/20.JPG', 'aipt_new/small_img/517/20.JPG', '0', '0', '10013', '517', '0');
INSERT INTO `tpwe_xz_aipt_facelist_install` VALUES ('219', 'aipt_new/big_img/517/21.JPG', 'aipt_new/small_img/517/21.JPG', '0', '0', '10013', '517', '0');
INSERT INTO `tpwe_xz_aipt_facelist_install` VALUES ('220', 'aipt_new/big_img/517/22.JPG', 'aipt_new/small_img/517/22.JPG', '0', '0', '10013', '517', '0');
INSERT INTO `tpwe_xz_aipt_facelist_install` VALUES ('221', 'aipt_new/big_img/517/23.JPG', 'aipt_new/small_img/517/23.JPG', '0', '0', '10013', '517', '0');
INSERT INTO `tpwe_xz_aipt_facelist_install` VALUES ('222', 'aipt_new/big_img/517/24.JPG', 'aipt_new/small_img/517/24.JPG', '0', '0', '10013', '517', '0');
INSERT INTO `tpwe_xz_aipt_facelist_install` VALUES ('223', 'aipt_new/big_img/517/25.JPG', 'aipt_new/small_img/517/25.JPG', '0', '0', '10013', '517', '0');
INSERT INTO `tpwe_xz_aipt_facelist_install` VALUES ('224', 'aipt_new/big_img/517/26.JPG', 'aipt_new/small_img/517/26.JPG', '0', '0', '10013', '517', '0');
INSERT INTO `tpwe_xz_aipt_facelist_install` VALUES ('225', 'aipt_new/big_img/517/27.JPG', 'aipt_new/small_img/517/27.JPG', '0', '0', '10013', '517', '0');
INSERT INTO `tpwe_xz_aipt_facelist_install` VALUES ('226', 'aipt_new/big_img/517/28.JPG', 'aipt_new/small_img/517/28.JPG', '0', '0', '10013', '517', '0');
INSERT INTO `tpwe_xz_aipt_facelist_install` VALUES ('227', 'aipt_new/big_img/517/29.JPG', 'aipt_new/small_img/517/29.JPG', '0', '0', '10013', '517', '0');
INSERT INTO `tpwe_xz_aipt_facelist_install` VALUES ('228', 'aipt_new/big_img/517/30.JPG', 'aipt_new/small_img/517/30.JPG', '0', '0', '10013', '517', '0');
INSERT INTO `tpwe_xz_aipt_facelist_install` VALUES ('229', 'aipt_new/big_img/517/31.JPG', 'aipt_new/small_img/517/31.JPG', '0', '0', '10013', '517', '0');
INSERT INTO `tpwe_xz_aipt_facelist_install` VALUES ('230', 'aipt_new/big_img/517/32.JPG', 'aipt_new/small_img/517/32.JPG', '0', '0', '10013', '517', '0');
INSERT INTO `tpwe_xz_aipt_facelist_install` VALUES ('231', 'aipt_new/big_img/517/33.JPG', 'aipt_new/small_img/517/33.JPG', '0', '0', '10013', '517', '0');
INSERT INTO `tpwe_xz_aipt_facelist_install` VALUES ('232', 'aipt_new/big_img/517/34.JPG', 'aipt_new/small_img/517/34.JPG', '0', '0', '10013', '517', '0');
INSERT INTO `tpwe_xz_aipt_facelist_install` VALUES ('233', 'aipt_new/big_img/517/35.JPG', 'aipt_new/small_img/517/35.JPG', '0', '0', '10013', '517', '0');
INSERT INTO `tpwe_xz_aipt_facelist_install` VALUES ('234', 'aipt_new/big_img/517/36.JPG', 'aipt_new/small_img/517/36.JPG', '0', '0', '10013', '517', '0');
INSERT INTO `tpwe_xz_aipt_facelist_install` VALUES ('235', 'aipt_new/big_img/517/37.JPG', 'aipt_new/small_img/517/37.JPG', '0', '0', '10013', '517', '0');
INSERT INTO `tpwe_xz_aipt_facelist_install` VALUES ('236', 'aipt_new/big_img/517/38.JPG', 'aipt_new/small_img/517/38.JPG', '0', '0', '10013', '517', '0');
INSERT INTO `tpwe_xz_aipt_facelist_install` VALUES ('237', 'aipt_new/big_img/517/39.JPG', 'aipt_new/small_img/517/39.JPG', '0', '0', '10013', '517', '0');
INSERT INTO `tpwe_xz_aipt_facelist_install` VALUES ('238', 'aipt_new/big_img/517/40.JPG', 'aipt_new/small_img/517/40.JPG', '0', '0', '10013', '517', '0');
INSERT INTO `tpwe_xz_aipt_facelist_install` VALUES ('239', 'aipt_new/big_img/517/41.JPG', 'aipt_new/small_img/517/41.JPG', '0', '0', '10013', '517', '0');
INSERT INTO `tpwe_xz_aipt_facelist_install` VALUES ('240', 'aipt_new/big_img/517/42.JPG', 'aipt_new/small_img/517/42.JPG', '0', '0', '10013', '517', '0');
INSERT INTO `tpwe_xz_aipt_facelist_install` VALUES ('241', 'aipt_new/big_img/517/43.JPG', 'aipt_new/small_img/517/43.JPG', '0', '0', '10013', '517', '0');
INSERT INTO `tpwe_xz_aipt_facelist_install` VALUES ('242', 'aipt_new/big_img/517/44.JPG', 'aipt_new/small_img/517/44.JPG', '0', '0', '10013', '517', '0');
INSERT INTO `tpwe_xz_aipt_facelist_install` VALUES ('243', 'aipt_new/big_img/517/45.JPG', 'aipt_new/small_img/517/45.JPG', '0', '0', '10013', '517', '0');
INSERT INTO `tpwe_xz_aipt_facelist_install` VALUES ('244', 'aipt_new/big_img/517/46.JPG', 'aipt_new/small_img/517/46.JPG', '0', '0', '10013', '517', '0');
INSERT INTO `tpwe_xz_aipt_facelist_install` VALUES ('245', 'aipt_new/big_img/517/47.JPG', 'aipt_new/small_img/517/47.JPG', '0', '0', '10013', '517', '0');
INSERT INTO `tpwe_xz_aipt_facelist_install` VALUES ('246', 'aipt_new/big_img/517/48.JPG', 'aipt_new/small_img/517/48.JPG', '0', '0', '10013', '517', '0');
INSERT INTO `tpwe_xz_aipt_facelist_install` VALUES ('247', 'aipt_new/big_img/517/49.JPG', 'aipt_new/small_img/517/49.JPG', '0', '0', '10013', '517', '0');
INSERT INTO `tpwe_xz_aipt_facelist_install` VALUES ('248', 'aipt_new/big_img/517/50.JPG', 'aipt_new/small_img/517/50.JPG', '0', '0', '10013', '517', '0');
INSERT INTO `tpwe_xz_aipt_facelist_install` VALUES ('249', 'aipt_new/big_img/517/51.JPG', 'aipt_new/small_img/517/51.JPG', '0', '0', '10013', '517', '0');
INSERT INTO `tpwe_xz_aipt_facelist_install` VALUES ('250', 'aipt_new/big_img/517/52.JPG', 'aipt_new/small_img/517/52.JPG', '0', '0', '10013', '517', '0');
INSERT INTO `tpwe_xz_aipt_facelist_install` VALUES ('251', 'aipt_new/big_img/517/53.JPG', 'aipt_new/small_img/517/53.JPG', '0', '0', '10013', '517', '0');
INSERT INTO `tpwe_xz_aipt_facelist_install` VALUES ('252', 'aipt_new/big_img/517/54.JPG', 'aipt_new/small_img/517/54.JPG', '0', '0', '10013', '517', '0');
INSERT INTO `tpwe_xz_aipt_facelist_install` VALUES ('253', 'aipt_new/big_img/517/55.JPG', 'aipt_new/small_img/517/55.JPG', '0', '0', '10013', '517', '0');
INSERT INTO `tpwe_xz_aipt_facelist_install` VALUES ('254', 'aipt_new/big_img/517/56.JPG', 'aipt_new/small_img/517/56.JPG', '0', '0', '10013', '517', '0');
INSERT INTO `tpwe_xz_aipt_facelist_install` VALUES ('255', 'aipt_new/big_img/517/57.JPG', 'aipt_new/small_img/517/57.JPG', '0', '0', '10013', '517', '0');
INSERT INTO `tpwe_xz_aipt_facelist_install` VALUES ('256', 'aipt_new/big_img/517/58.JPG', 'aipt_new/small_img/517/58.JPG', '0', '0', '10013', '517', '0');
INSERT INTO `tpwe_xz_aipt_facelist_install` VALUES ('257', 'aipt_new/big_img/517/59.JPG', 'aipt_new/small_img/517/59.JPG', '0', '0', '10013', '517', '0');
INSERT INTO `tpwe_xz_aipt_facelist_install` VALUES ('258', 'aipt_new/big_img/517/60.JPG', 'aipt_new/small_img/517/60.JPG', '0', '0', '10013', '517', '0');
INSERT INTO `tpwe_xz_aipt_facelist_install` VALUES ('259', 'aipt_new/big_img/517/61.JPG', 'aipt_new/small_img/517/61.JPG', '0', '0', '10013', '517', '0');
INSERT INTO `tpwe_xz_aipt_facelist_install` VALUES ('260', 'aipt_new/big_img/517/62.JPG', 'aipt_new/small_img/517/62.JPG', '0', '0', '10013', '517', '0');
INSERT INTO `tpwe_xz_aipt_facelist_install` VALUES ('261', 'aipt_new/big_img/517/63.JPG', 'aipt_new/small_img/517/63.JPG', '0', '0', '10013', '517', '0');
INSERT INTO `tpwe_xz_aipt_facelist_install` VALUES ('262', 'aipt_new/big_img/517/64.JPG', 'aipt_new/small_img/517/64.JPG', '0', '0', '10013', '517', '0');
INSERT INTO `tpwe_xz_aipt_facelist_install` VALUES ('263', 'aipt_new/big_img/517/65.JPG', 'aipt_new/small_img/517/65.JPG', '0', '0', '10013', '517', '0');
INSERT INTO `tpwe_xz_aipt_facelist_install` VALUES ('264', 'aipt_new/big_img/517/66.JPG', 'aipt_new/small_img/517/66.JPG', '0', '0', '10013', '517', '0');
INSERT INTO `tpwe_xz_aipt_facelist_install` VALUES ('265', 'aipt_new/big_img/517/67.JPG', 'aipt_new/small_img/517/67.JPG', '0', '0', '10013', '517', '0');
INSERT INTO `tpwe_xz_aipt_facelist_install` VALUES ('266', 'aipt_new/big_img/517/68.JPG', 'aipt_new/small_img/517/68.JPG', '0', '0', '10013', '517', '0');
INSERT INTO `tpwe_xz_aipt_facelist_install` VALUES ('267', 'aipt_new/big_img/517/69.JPG', 'aipt_new/small_img/517/69.JPG', '0', '0', '10013', '517', '0');
INSERT INTO `tpwe_xz_aipt_facelist_install` VALUES ('268', 'aipt_new/big_img/517/70.JPG', 'aipt_new/small_img/517/70.JPG', '0', '0', '10013', '517', '0');
INSERT INTO `tpwe_xz_aipt_facelist_install` VALUES ('269', 'aipt_new/big_img/517/71.JPG', 'aipt_new/small_img/517/71.JPG', '0', '0', '10013', '517', '0');
INSERT INTO `tpwe_xz_aipt_facelist_install` VALUES ('270', 'aipt_new/big_img/517/72.JPG', 'aipt_new/small_img/517/72.JPG', '0', '0', '10013', '517', '0');
INSERT INTO `tpwe_xz_aipt_facelist_install` VALUES ('271', 'aipt_new/big_img/517/73.JPG', 'aipt_new/small_img/517/73.JPG', '0', '0', '10013', '517', '0');
INSERT INTO `tpwe_xz_aipt_facelist_install` VALUES ('272', 'aipt_new/big_img/517/74.JPG', 'aipt_new/small_img/517/74.JPG', '0', '0', '10013', '517', '0');
INSERT INTO `tpwe_xz_aipt_facelist_install` VALUES ('273', 'aipt_new/big_img/517/75.JPG', 'aipt_new/small_img/517/75.JPG', '0', '0', '10013', '517', '0');
INSERT INTO `tpwe_xz_aipt_facelist_install` VALUES ('274', 'aipt_new/big_img/517/76.JPG', 'aipt_new/small_img/517/76.JPG', '0', '0', '10013', '517', '0');
INSERT INTO `tpwe_xz_aipt_facelist_install` VALUES ('275', 'aipt_new/big_img/517/77.JPG', 'aipt_new/small_img/517/77.JPG', '0', '0', '10013', '517', '0');
INSERT INTO `tpwe_xz_aipt_facelist_install` VALUES ('276', 'aipt_new/big_img/517/78.JPG', 'aipt_new/small_img/517/78.JPG', '0', '0', '10013', '517', '0');
INSERT INTO `tpwe_xz_aipt_facelist_install` VALUES ('277', 'aipt_new/big_img/517/79.JPG', 'aipt_new/small_img/517/79.JPG', '0', '0', '10013', '517', '0');
INSERT INTO `tpwe_xz_aipt_facelist_install` VALUES ('278', 'aipt_new/big_img/517/80.JPG', 'aipt_new/small_img/517/80.JPG', '0', '0', '10013', '517', '0');
INSERT INTO `tpwe_xz_aipt_facelist_install` VALUES ('279', 'aipt_new/big_img/518/1.JPG', 'aipt_new/small_img/518/1.JPG', '0', '0', '10013', '518', '0');
INSERT INTO `tpwe_xz_aipt_facelist_install` VALUES ('280', 'aipt_new/big_img/518/2.JPG', 'aipt_new/small_img/518/2.JPG', '0', '0', '10013', '518', '0');
INSERT INTO `tpwe_xz_aipt_facelist_install` VALUES ('281', 'aipt_new/big_img/518/3.JPG', 'aipt_new/small_img/518/3.JPG', '0', '0', '10013', '518', '0');
INSERT INTO `tpwe_xz_aipt_facelist_install` VALUES ('282', 'aipt_new/big_img/518/4.JPG', 'aipt_new/small_img/518/4.JPG', '0', '0', '10013', '518', '0');
INSERT INTO `tpwe_xz_aipt_facelist_install` VALUES ('283', 'aipt_new/big_img/518/5.JPG', 'aipt_new/small_img/518/5.JPG', '0', '0', '10013', '518', '0');
INSERT INTO `tpwe_xz_aipt_facelist_install` VALUES ('284', 'aipt_new/big_img/518/6.JPG', 'aipt_new/small_img/518/6.JPG', '0', '0', '10013', '518', '0');
INSERT INTO `tpwe_xz_aipt_facelist_install` VALUES ('285', 'aipt_new/big_img/518/7.JPG', 'aipt_new/small_img/518/7.JPG', '0', '0', '10013', '518', '0');
INSERT INTO `tpwe_xz_aipt_facelist_install` VALUES ('286', 'aipt_new/big_img/518/8.JPG', 'aipt_new/small_img/518/8.JPG', '0', '0', '10013', '518', '0');
INSERT INTO `tpwe_xz_aipt_facelist_install` VALUES ('287', 'aipt_new/big_img/518/9.JPG', 'aipt_new/small_img/518/9.JPG', '0', '0', '10013', '518', '0');
INSERT INTO `tpwe_xz_aipt_facelist_install` VALUES ('288', 'aipt_new/big_img/518/10.JPG', 'aipt_new/small_img/518/10.JPG', '0', '0', '10013', '518', '0');
INSERT INTO `tpwe_xz_aipt_facelist_install` VALUES ('289', 'aipt_new/big_img/518/11.JPG', 'aipt_new/small_img/518/11.JPG', '0', '0', '10013', '518', '0');
INSERT INTO `tpwe_xz_aipt_facelist_install` VALUES ('290', 'aipt_new/big_img/518/12.JPG', 'aipt_new/small_img/518/12.JPG', '0', '0', '10013', '518', '0');
INSERT INTO `tpwe_xz_aipt_facelist_install` VALUES ('291', 'aipt_new/big_img/518/13.JPG', 'aipt_new/small_img/518/13.JPG', '0', '0', '10013', '518', '0');
INSERT INTO `tpwe_xz_aipt_facelist_install` VALUES ('292', 'aipt_new/big_img/518/14.JPG', 'aipt_new/small_img/518/14.JPG', '0', '0', '10013', '518', '0');
INSERT INTO `tpwe_xz_aipt_facelist_install` VALUES ('293', 'aipt_new/big_img/518/15.JPG', 'aipt_new/small_img/518/15.JPG', '0', '0', '10013', '518', '0');
INSERT INTO `tpwe_xz_aipt_facelist_install` VALUES ('294', 'aipt_new/big_img/519/1.JPG', 'aipt_new/small_img/519/1.JPG', '0', '0', '10013', '519', '0');
INSERT INTO `tpwe_xz_aipt_facelist_install` VALUES ('295', 'aipt_new/big_img/519/2.JPG', 'aipt_new/small_img/519/2.JPG', '0', '0', '10013', '519', '0');
INSERT INTO `tpwe_xz_aipt_facelist_install` VALUES ('296', 'aipt_new/big_img/519/3.JPG', 'aipt_new/small_img/519/3.JPG', '0', '0', '10013', '519', '0');
INSERT INTO `tpwe_xz_aipt_facelist_install` VALUES ('297', 'aipt_new/big_img/519/4.JPG', 'aipt_new/small_img/519/4.JPG', '0', '0', '10013', '519', '0');
INSERT INTO `tpwe_xz_aipt_facelist_install` VALUES ('298', 'aipt_new/big_img/519/5.JPG', 'aipt_new/small_img/519/5.JPG', '0', '0', '10013', '519', '0');
INSERT INTO `tpwe_xz_aipt_facelist_install` VALUES ('299', 'aipt_new/big_img/519/6.JPG', 'aipt_new/small_img/519/6.JPG', '0', '0', '10013', '519', '0');
INSERT INTO `tpwe_xz_aipt_facelist_install` VALUES ('300', 'aipt_new/big_img/519/7.JPG', 'aipt_new/small_img/519/7.JPG', '0', '0', '10013', '519', '0');
INSERT INTO `tpwe_xz_aipt_facelist_install` VALUES ('301', 'aipt_new/big_img/519/8.JPG', 'aipt_new/small_img/519/8.JPG', '0', '0', '10013', '519', '0');
INSERT INTO `tpwe_xz_aipt_facelist_install` VALUES ('302', 'aipt_new/big_img/519/9.JPG', 'aipt_new/small_img/519/9.JPG', '0', '0', '10013', '519', '0');
INSERT INTO `tpwe_xz_aipt_facelist_install` VALUES ('303', 'aipt_new/big_img/519/10.JPG', 'aipt_new/small_img/519/10.JPG', '0', '0', '10013', '519', '0');
INSERT INTO `tpwe_xz_aipt_facelist_install` VALUES ('304', 'aipt_new/big_img/519/11.JPG', 'aipt_new/small_img/519/11.JPG', '0', '0', '10013', '519', '0');
INSERT INTO `tpwe_xz_aipt_facelist_install` VALUES ('305', 'aipt_new/big_img/519/12.JPG', 'aipt_new/small_img/519/12.JPG', '0', '0', '10013', '519', '0');
INSERT INTO `tpwe_xz_aipt_facelist_install` VALUES ('306', 'aipt_new/big_img/519/13.JPG', 'aipt_new/small_img/519/13.JPG', '0', '0', '10013', '519', '0');
INSERT INTO `tpwe_xz_aipt_facelist_install` VALUES ('307', 'aipt_new/big_img/519/14.JPG', 'aipt_new/small_img/519/14.JPG', '0', '0', '10013', '519', '0');
INSERT INTO `tpwe_xz_aipt_facelist_install` VALUES ('308', 'aipt_new/big_img/519/15.JPG', 'aipt_new/small_img/519/15.JPG', '0', '0', '10013', '519', '0');
INSERT INTO `tpwe_xz_aipt_facelist_install` VALUES ('309', 'aipt_new/big_img/519/16.JPG', 'aipt_new/small_img/519/16.JPG', '0', '0', '10013', '519', '0');
INSERT INTO `tpwe_xz_aipt_facelist_install` VALUES ('310', 'aipt_new/big_img/519/17.JPG', 'aipt_new/small_img/519/17.JPG', '0', '0', '10013', '519', '0');
INSERT INTO `tpwe_xz_aipt_facelist_install` VALUES ('311', 'aipt_new/big_img/519/18.JPG', 'aipt_new/small_img/519/18.JPG', '0', '0', '10013', '519', '0');
INSERT INTO `tpwe_xz_aipt_facelist_install` VALUES ('312', 'aipt_new/big_img/519/19.JPG', 'aipt_new/small_img/519/19.JPG', '0', '0', '10013', '519', '0');
INSERT INTO `tpwe_xz_aipt_facelist_install` VALUES ('313', 'aipt_new/big_img/519/20.JPG', 'aipt_new/small_img/519/20.JPG', '0', '0', '10013', '519', '0');
INSERT INTO `tpwe_xz_aipt_facelist_install` VALUES ('314', 'aipt_new/big_img/519/21.JPG', 'aipt_new/small_img/519/21.JPG', '0', '0', '10013', '519', '0');
INSERT INTO `tpwe_xz_aipt_facelist_install` VALUES ('315', 'aipt_new/big_img/519/22.JPG', 'aipt_new/small_img/519/22.JPG', '0', '0', '10013', '519', '0');
INSERT INTO `tpwe_xz_aipt_facelist_install` VALUES ('316', 'aipt_new/big_img/519/23.JPG', 'aipt_new/small_img/519/23.JPG', '0', '0', '10013', '519', '0');
INSERT INTO `tpwe_xz_aipt_facelist_install` VALUES ('317', 'aipt_new/big_img/519/24.JPG', 'aipt_new/small_img/519/24.JPG', '0', '0', '10013', '519', '0');
INSERT INTO `tpwe_xz_aipt_facelist_install` VALUES ('318', 'aipt_new/big_img/519/25.JPG', 'aipt_new/small_img/519/25.JPG', '0', '0', '10013', '519', '0');
INSERT INTO `tpwe_xz_aipt_facelist_install` VALUES ('319', 'aipt_new/big_img/519/26.JPG', 'aipt_new/small_img/519/26.JPG', '0', '0', '10013', '519', '0');
INSERT INTO `tpwe_xz_aipt_facelist_install` VALUES ('320', 'aipt_new/big_img/519/27.JPG', 'aipt_new/small_img/519/27.JPG', '0', '0', '10013', '519', '0');
INSERT INTO `tpwe_xz_aipt_facelist_install` VALUES ('321', 'aipt_new/big_img/519/28.JPG', 'aipt_new/small_img/519/28.JPG', '0', '0', '10013', '519', '0');
INSERT INTO `tpwe_xz_aipt_facelist_install` VALUES ('322', 'aipt_new/big_img/519/29.JPG', 'aipt_new/small_img/519/29.JPG', '0', '0', '10013', '519', '0');
INSERT INTO `tpwe_xz_aipt_facelist_install` VALUES ('323', 'aipt_new/big_img/519/30.JPG', 'aipt_new/small_img/519/30.JPG', '0', '0', '10013', '519', '0');
INSERT INTO `tpwe_xz_aipt_facelist_install` VALUES ('324', 'aipt_new/big_img/519/31.JPG', 'aipt_new/small_img/519/31.JPG', '0', '0', '10013', '519', '0');
INSERT INTO `tpwe_xz_aipt_facelist_install` VALUES ('325', 'aipt_new/big_img/519/32.JPG', 'aipt_new/small_img/519/32.JPG', '0', '0', '10013', '519', '0');
INSERT INTO `tpwe_xz_aipt_facelist_install` VALUES ('326', 'aipt_new/big_img/519/33.JPG', 'aipt_new/small_img/519/33.JPG', '0', '0', '10013', '519', '0');
INSERT INTO `tpwe_xz_aipt_facelist_install` VALUES ('327', 'aipt_new/big_img/519/34.JPG', 'aipt_new/small_img/519/34.JPG', '0', '0', '10013', '519', '0');
INSERT INTO `tpwe_xz_aipt_facelist_install` VALUES ('328', 'aipt_new/big_img/519/35.JPG', 'aipt_new/small_img/519/35.JPG', '0', '0', '10013', '519', '0');
INSERT INTO `tpwe_xz_aipt_facelist_install` VALUES ('329', 'aipt_new/big_img/519/36.JPG', 'aipt_new/small_img/519/36.JPG', '0', '0', '10013', '519', '0');
INSERT INTO `tpwe_xz_aipt_facelist_install` VALUES ('330', 'aipt_new/big_img/519/37.JPG', 'aipt_new/small_img/519/37.JPG', '0', '0', '10013', '519', '0');
INSERT INTO `tpwe_xz_aipt_facelist_install` VALUES ('331', 'aipt_new/big_img/519/38.JPG', 'aipt_new/small_img/519/38.JPG', '0', '0', '10013', '519', '0');
INSERT INTO `tpwe_xz_aipt_facelist_install` VALUES ('332', 'aipt_new/big_img/519/39.JPG', 'aipt_new/small_img/519/39.JPG', '0', '0', '10013', '519', '0');
INSERT INTO `tpwe_xz_aipt_facelist_install` VALUES ('333', 'aipt_new/big_img/519/40.JPG', 'aipt_new/small_img/519/40.JPG', '0', '0', '10013', '519', '0');
INSERT INTO `tpwe_xz_aipt_facelist_install` VALUES ('334', 'aipt_new/big_img/519/41.JPG', 'aipt_new/small_img/519/41.JPG', '0', '0', '10013', '519', '0');
INSERT INTO `tpwe_xz_aipt_facelist_install` VALUES ('335', 'aipt_new/big_img/519/42.JPG', 'aipt_new/small_img/519/42.JPG', '0', '0', '10013', '519', '0');
INSERT INTO `tpwe_xz_aipt_facelist_install` VALUES ('336', 'aipt_new/big_img/519/43.JPG', 'aipt_new/small_img/519/43.JPG', '0', '0', '10013', '519', '0');
INSERT INTO `tpwe_xz_aipt_facelist_install` VALUES ('337', 'aipt_new/big_img/519/44.JPG', 'aipt_new/small_img/519/44.JPG', '0', '0', '10013', '519', '0');
INSERT INTO `tpwe_xz_aipt_facelist_install` VALUES ('338', 'aipt_new/big_img/519/45.JPG', 'aipt_new/small_img/519/45.JPG', '0', '0', '10013', '519', '0');
INSERT INTO `tpwe_xz_aipt_facelist_install` VALUES ('339', 'aipt_new/big_img/519/46.JPG', 'aipt_new/small_img/519/46.JPG', '0', '0', '10013', '519', '0');
INSERT INTO `tpwe_xz_aipt_facelist_install` VALUES ('340', 'aipt_new/big_img/519/47.JPG', 'aipt_new/small_img/519/47.JPG', '0', '0', '10013', '519', '0');
INSERT INTO `tpwe_xz_aipt_facelist_install` VALUES ('341', 'aipt_new/big_img/519/48.JPG', 'aipt_new/small_img/519/48.JPG', '0', '0', '10013', '519', '0');
INSERT INTO `tpwe_xz_aipt_facelist_install` VALUES ('342', 'aipt_new/big_img/519/49.JPG', 'aipt_new/small_img/519/49.JPG', '0', '0', '10013', '519', '0');
INSERT INTO `tpwe_xz_aipt_facelist_install` VALUES ('343', 'aipt_new/big_img/519/50.JPG', 'aipt_new/small_img/519/50.JPG', '0', '0', '10013', '519', '0');
INSERT INTO `tpwe_xz_aipt_facelist_install` VALUES ('344', 'aipt_new/big_img/519/51.JPG', 'aipt_new/small_img/519/51.JPG', '0', '0', '10013', '519', '0');
INSERT INTO `tpwe_xz_aipt_facelist_install` VALUES ('345', 'aipt_new/big_img/519/52.JPG', 'aipt_new/small_img/519/52.JPG', '0', '0', '10013', '519', '0');
INSERT INTO `tpwe_xz_aipt_facelist_install` VALUES ('346', 'aipt_new/big_img/519/53.JPG', 'aipt_new/small_img/519/53.JPG', '0', '0', '10013', '519', '0');
INSERT INTO `tpwe_xz_aipt_facelist_install` VALUES ('347', 'aipt_new/big_img/519/54.JPG', 'aipt_new/small_img/519/54.JPG', '0', '0', '10013', '519', '0');
INSERT INTO `tpwe_xz_aipt_facelist_install` VALUES ('348', 'aipt_new/big_img/519/55.JPG', 'aipt_new/small_img/519/55.JPG', '0', '0', '10013', '519', '0');
INSERT INTO `tpwe_xz_aipt_facelist_install` VALUES ('349', 'aipt_new/big_img/519/56.JPG', 'aipt_new/small_img/519/56.JPG', '0', '0', '10013', '519', '0');
INSERT INTO `tpwe_xz_aipt_facelist_install` VALUES ('350', 'aipt_new/big_img/519/57.JPG', 'aipt_new/small_img/519/57.JPG', '0', '0', '10013', '519', '0');
INSERT INTO `tpwe_xz_aipt_facelist_install` VALUES ('351', 'aipt_new/big_img/519/58.JPG', 'aipt_new/small_img/519/58.JPG', '0', '0', '10013', '519', '0');
INSERT INTO `tpwe_xz_aipt_facelist_install` VALUES ('352', 'aipt_new/big_img/519/59.JPG', 'aipt_new/small_img/519/59.JPG', '0', '0', '10013', '519', '0');
INSERT INTO `tpwe_xz_aipt_facelist_install` VALUES ('353', 'aipt_new/big_img/519/60.JPG', 'aipt_new/small_img/519/60.JPG', '0', '0', '10013', '519', '0');
INSERT INTO `tpwe_xz_aipt_facelist_install` VALUES ('354', 'aipt_new/big_img/519/61.JPG', 'aipt_new/small_img/519/61.JPG', '0', '0', '10013', '519', '0');
INSERT INTO `tpwe_xz_aipt_facelist_install` VALUES ('355', 'aipt_new/big_img/519/62.JPG', 'aipt_new/small_img/519/62.JPG', '0', '0', '10013', '519', '0');
INSERT INTO `tpwe_xz_aipt_facelist_install` VALUES ('356', 'aipt_new/big_img/519/63.JPG', 'aipt_new/small_img/519/63.JPG', '0', '0', '10013', '519', '0');
INSERT INTO `tpwe_xz_aipt_facelist_install` VALUES ('357', 'aipt_new/big_img/519/64.JPG', 'aipt_new/small_img/519/64.JPG', '0', '0', '10013', '519', '0');
INSERT INTO `tpwe_xz_aipt_facelist_install` VALUES ('358', 'aipt_new/big_img/519/65.JPG', 'aipt_new/small_img/519/65.JPG', '0', '0', '10013', '519', '0');
INSERT INTO `tpwe_xz_aipt_facelist_install` VALUES ('359', 'aipt_new/big_img/519/66.JPG', 'aipt_new/small_img/519/66.JPG', '0', '0', '10013', '519', '0');
INSERT INTO `tpwe_xz_aipt_facelist_install` VALUES ('360', 'aipt_new/big_img/519/67.JPG', 'aipt_new/small_img/519/67.JPG', '0', '0', '10013', '519', '0');
INSERT INTO `tpwe_xz_aipt_facelist_install` VALUES ('361', 'aipt_new/big_img/519/68.JPG', 'aipt_new/small_img/519/68.JPG', '0', '0', '10013', '519', '0');
INSERT INTO `tpwe_xz_aipt_facelist_install` VALUES ('362', 'aipt_new/big_img/519/69.JPG', 'aipt_new/small_img/519/69.JPG', '0', '0', '10013', '519', '0');
INSERT INTO `tpwe_xz_aipt_facelist_install` VALUES ('363', 'aipt_new/big_img/519/70.JPG', 'aipt_new/small_img/519/70.JPG', '0', '0', '10013', '519', '0');
INSERT INTO `tpwe_xz_aipt_facelist_install` VALUES ('364', 'aipt_new/big_img/519/71.JPG', 'aipt_new/small_img/519/71.JPG', '0', '0', '10013', '519', '0');
INSERT INTO `tpwe_xz_aipt_facelist_install` VALUES ('365', 'aipt_new/big_img/519/72.JPG', 'aipt_new/small_img/519/72.JPG', '0', '0', '10013', '519', '0');
INSERT INTO `tpwe_xz_aipt_facelist_install` VALUES ('366', 'aipt_new/big_img/519/73.JPG', 'aipt_new/small_img/519/73.JPG', '0', '0', '10013', '519', '0');
INSERT INTO `tpwe_xz_aipt_facelist_install` VALUES ('367', 'aipt_new/big_img/519/74.JPG', 'aipt_new/small_img/519/74.JPG', '0', '0', '10013', '519', '0');
INSERT INTO `tpwe_xz_aipt_facelist_install` VALUES ('368', 'aipt_new/big_img/519/75.JPG', 'aipt_new/small_img/519/75.JPG', '0', '0', '10013', '519', '0');
INSERT INTO `tpwe_xz_aipt_facelist_install` VALUES ('369', 'aipt_new/big_img/519/76.JPG', 'aipt_new/small_img/519/76.JPG', '0', '0', '10013', '519', '0');
INSERT INTO `tpwe_xz_aipt_facelist_install` VALUES ('370', 'aipt_new/big_img/519/77.JPG', 'aipt_new/small_img/519/77.JPG', '0', '0', '10013', '519', '0');
INSERT INTO `tpwe_xz_aipt_facelist_install` VALUES ('371', 'aipt_new/big_img/519/78.JPG', 'aipt_new/small_img/519/78.JPG', '0', '0', '10013', '519', '0');
INSERT INTO `tpwe_xz_aipt_facelist_install` VALUES ('372', 'aipt_new/big_img/520/1.JPG', 'aipt_new/small_img/520/1.JPG', '0', '0', '10013', '520', '0');
INSERT INTO `tpwe_xz_aipt_facelist_install` VALUES ('373', 'aipt_new/big_img/520/2.JPG', 'aipt_new/small_img/520/2.JPG', '0', '0', '10013', '520', '0');
INSERT INTO `tpwe_xz_aipt_facelist_install` VALUES ('374', 'aipt_new/big_img/520/3.JPG', 'aipt_new/small_img/520/3.JPG', '0', '0', '10013', '520', '0');
INSERT INTO `tpwe_xz_aipt_facelist_install` VALUES ('375', 'aipt_new/big_img/520/4.JPG', 'aipt_new/small_img/520/4.JPG', '0', '0', '10013', '520', '0');
INSERT INTO `tpwe_xz_aipt_facelist_install` VALUES ('376', 'aipt_new/big_img/520/5.JPG', 'aipt_new/small_img/520/5.JPG', '0', '0', '10013', '520', '0');
INSERT INTO `tpwe_xz_aipt_facelist_install` VALUES ('377', 'aipt_new/big_img/520/6.JPG', 'aipt_new/small_img/520/6.JPG', '0', '0', '10013', '520', '0');
INSERT INTO `tpwe_xz_aipt_facelist_install` VALUES ('378', 'aipt_new/big_img/520/7.JPG', 'aipt_new/small_img/520/7.JPG', '0', '0', '10013', '520', '0');
INSERT INTO `tpwe_xz_aipt_facelist_install` VALUES ('379', 'aipt_new/big_img/520/8.JPG', 'aipt_new/small_img/520/8.JPG', '0', '0', '10013', '520', '0');
INSERT INTO `tpwe_xz_aipt_facelist_install` VALUES ('380', 'aipt_new/big_img/520/9.JPG', 'aipt_new/small_img/520/9.JPG', '0', '0', '10013', '520', '0');
INSERT INTO `tpwe_xz_aipt_facelist_install` VALUES ('381', 'aipt_new/big_img/520/10.JPG', 'aipt_new/small_img/520/10.JPG', '0', '0', '10013', '520', '0');
INSERT INTO `tpwe_xz_aipt_facelist_install` VALUES ('382', 'aipt_new/big_img/520/11.JPG', 'aipt_new/small_img/520/11.JPG', '0', '0', '10013', '520', '0');
INSERT INTO `tpwe_xz_aipt_facelist_install` VALUES ('383', 'aipt_new/big_img/520/12.JPG', 'aipt_new/small_img/520/12.JPG', '0', '0', '10013', '520', '0');
INSERT INTO `tpwe_xz_aipt_facelist_install` VALUES ('384', 'aipt_new/big_img/521/1.JPG', 'aipt_new/small_img/521/1.JPG', '0', '0', '10013', '521', '0');
INSERT INTO `tpwe_xz_aipt_facelist_install` VALUES ('385', 'aipt_new/big_img/521/2.JPG', 'aipt_new/small_img/521/2.JPG', '0', '0', '10013', '521', '0');
INSERT INTO `tpwe_xz_aipt_facelist_install` VALUES ('386', 'aipt_new/big_img/521/3.JPG', 'aipt_new/small_img/521/3.JPG', '0', '0', '10013', '521', '0');
INSERT INTO `tpwe_xz_aipt_facelist_install` VALUES ('387', 'aipt_new/big_img/521/4.JPG', 'aipt_new/small_img/521/4.JPG', '0', '0', '10013', '521', '0');
INSERT INTO `tpwe_xz_aipt_facelist_install` VALUES ('388', 'aipt_new/big_img/521/5.JPG', 'aipt_new/small_img/521/5.JPG', '0', '0', '10013', '521', '0');
INSERT INTO `tpwe_xz_aipt_facelist_install` VALUES ('389', 'aipt_new/big_img/521/6.JPG', 'aipt_new/small_img/521/6.JPG', '0', '0', '10013', '521', '0');
INSERT INTO `tpwe_xz_aipt_facelist_install` VALUES ('390', 'aipt_new/big_img/521/7.JPG', 'aipt_new/small_img/521/7.JPG', '0', '0', '10013', '521', '0');
INSERT INTO `tpwe_xz_aipt_facelist_install` VALUES ('391', 'aipt_new/big_img/521/8.JPG', 'aipt_new/small_img/521/8.JPG', '0', '0', '10013', '521', '0');
INSERT INTO `tpwe_xz_aipt_facelist_install` VALUES ('392', 'aipt_new/big_img/521/9.JPG', 'aipt_new/small_img/521/9.JPG', '0', '0', '10013', '521', '0');
INSERT INTO `tpwe_xz_aipt_facelist_install` VALUES ('393', 'aipt_new/big_img/521/10.JPG', 'aipt_new/small_img/521/10.JPG', '0', '0', '10013', '521', '0');
INSERT INTO `tpwe_xz_aipt_facelist_install` VALUES ('394', 'aipt_new/big_img/521/11.JPG', 'aipt_new/small_img/521/11.JPG', '0', '0', '10013', '521', '0');
INSERT INTO `tpwe_xz_aipt_facelist_install` VALUES ('395', 'aipt_new/big_img/522/1.JPG', 'aipt_new/small_img/522/1.JPG', '0', '0', '10013', '522', '0');
INSERT INTO `tpwe_xz_aipt_facelist_install` VALUES ('396', 'aipt_new/big_img/522/2.JPG', 'aipt_new/small_img/522/2.JPG', '0', '0', '10013', '522', '0');
INSERT INTO `tpwe_xz_aipt_facelist_install` VALUES ('397', 'aipt_new/big_img/522/3.JPG', 'aipt_new/small_img/522/3.JPG', '0', '0', '10013', '522', '0');
INSERT INTO `tpwe_xz_aipt_facelist_install` VALUES ('398', 'aipt_new/big_img/522/4.JPG', 'aipt_new/small_img/522/4.JPG', '0', '0', '10013', '522', '0');
INSERT INTO `tpwe_xz_aipt_facelist_install` VALUES ('399', 'aipt_new/big_img/522/5.JPG', 'aipt_new/small_img/522/5.JPG', '0', '0', '10013', '522', '0');
INSERT INTO `tpwe_xz_aipt_facelist_install` VALUES ('400', 'aipt_new/big_img/522/6.JPG', 'aipt_new/small_img/522/6.JPG', '0', '0', '10013', '522', '0');
INSERT INTO `tpwe_xz_aipt_facelist_install` VALUES ('401', 'aipt_new/big_img/522/7.JPG', 'aipt_new/small_img/522/7.JPG', '0', '0', '10013', '522', '0');
INSERT INTO `tpwe_xz_aipt_facelist_install` VALUES ('402', 'aipt_new/big_img/522/8.JPG', 'aipt_new/small_img/522/8.JPG', '0', '0', '10013', '522', '0');
INSERT INTO `tpwe_xz_aipt_facelist_install` VALUES ('403', 'aipt_new/big_img/522/9.JPG', 'aipt_new/small_img/522/9.JPG', '0', '0', '10013', '522', '0');
INSERT INTO `tpwe_xz_aipt_facelist_install` VALUES ('404', 'aipt_new/big_img/522/10.JPG', 'aipt_new/small_img/522/10.JPG', '0', '0', '10013', '522', '0');
INSERT INTO `tpwe_xz_aipt_facelist_install` VALUES ('405', 'aipt_new/big_img/522/11.JPG', 'aipt_new/small_img/522/11.JPG', '0', '0', '10013', '522', '0');
INSERT INTO `tpwe_xz_aipt_facelist_install` VALUES ('406', 'aipt_new/big_img/522/12.JPG', 'aipt_new/small_img/522/12.JPG', '0', '0', '10013', '522', '0');
INSERT INTO `tpwe_xz_aipt_facelist_install` VALUES ('407', 'aipt_new/big_img/522/13.JPG', 'aipt_new/small_img/522/13.JPG', '0', '0', '10013', '522', '0');
INSERT INTO `tpwe_xz_aipt_facelist_install` VALUES ('408', 'aipt_new/big_img/522/14.JPG', 'aipt_new/small_img/522/14.JPG', '0', '0', '10013', '522', '0');
INSERT INTO `tpwe_xz_aipt_facelist_install` VALUES ('409', 'aipt_new/big_img/522/15.JPG', 'aipt_new/small_img/522/15.JPG', '0', '0', '10013', '522', '0');
INSERT INTO `tpwe_xz_aipt_facelist_install` VALUES ('410', 'aipt_new/big_img/522/16.JPG', 'aipt_new/small_img/522/16.JPG', '0', '0', '10013', '522', '0');
INSERT INTO `tpwe_xz_aipt_facelist_install` VALUES ('411', 'aipt_new/big_img/522/17.JPG', 'aipt_new/small_img/522/17.JPG', '0', '0', '10013', '522', '0');
INSERT INTO `tpwe_xz_aipt_facelist_install` VALUES ('412', 'aipt_new/big_img/522/18.JPG', 'aipt_new/small_img/522/18.JPG', '0', '0', '10013', '522', '0');
INSERT INTO `tpwe_xz_aipt_facelist_install` VALUES ('413', 'aipt_new/big_img/522/19.JPG', 'aipt_new/small_img/522/19.JPG', '0', '0', '10013', '522', '0');
INSERT INTO `tpwe_xz_aipt_facelist_install` VALUES ('414', 'aipt_new/big_img/522/20.JPG', 'aipt_new/small_img/522/20.JPG', '0', '0', '10013', '522', '0');
INSERT INTO `tpwe_xz_aipt_facelist_install` VALUES ('415', 'aipt_new/big_img/522/21.JPG', 'aipt_new/small_img/522/21.JPG', '0', '0', '10013', '522', '0');
INSERT INTO `tpwe_xz_aipt_facelist_install` VALUES ('416', 'aipt_new/big_img/522/22.JPG', 'aipt_new/small_img/522/22.JPG', '0', '0', '10013', '522', '0');
INSERT INTO `tpwe_xz_aipt_facelist_install` VALUES ('417', 'aipt_new/big_img/522/23.JPG', 'aipt_new/small_img/522/23.JPG', '0', '0', '10013', '522', '0');
INSERT INTO `tpwe_xz_aipt_facelist_install` VALUES ('418', 'aipt_new/big_img/522/24.JPG', 'aipt_new/small_img/522/24.JPG', '0', '0', '10013', '522', '0');
INSERT INTO `tpwe_xz_aipt_facelist_install` VALUES ('419', 'aipt_new/big_img/522/25.JPG', 'aipt_new/small_img/522/25.JPG', '0', '0', '10013', '522', '0');
INSERT INTO `tpwe_xz_aipt_facelist_install` VALUES ('420', 'aipt_new/big_img/522/26.JPG', 'aipt_new/small_img/522/26.JPG', '0', '0', '10013', '522', '0');
INSERT INTO `tpwe_xz_aipt_facelist_install` VALUES ('421', 'aipt_new/big_img/522/27.JPG', 'aipt_new/small_img/522/27.JPG', '0', '0', '10013', '522', '0');
INSERT INTO `tpwe_xz_aipt_facelist_install` VALUES ('422', 'aipt_new/big_img/522/28.JPG', 'aipt_new/small_img/522/28.JPG', '0', '0', '10013', '522', '0');
INSERT INTO `tpwe_xz_aipt_facelist_install` VALUES ('423', 'aipt_new/big_img/522/29.JPG', 'aipt_new/small_img/522/29.JPG', '0', '0', '10013', '522', '0');
INSERT INTO `tpwe_xz_aipt_facelist_install` VALUES ('424', 'aipt_new/big_img/522/30.JPG', 'aipt_new/small_img/522/30.JPG', '0', '0', '10013', '522', '0');
INSERT INTO `tpwe_xz_aipt_facelist_install` VALUES ('425', 'aipt_new/big_img/522/31.JPG', 'aipt_new/small_img/522/31.JPG', '0', '0', '10013', '522', '0');
INSERT INTO `tpwe_xz_aipt_facelist_install` VALUES ('426', 'aipt_new/big_img/523/1.JPG', 'aipt_new/small_img/523/1.JPG', '0', '0', '10013', '523', '0');
INSERT INTO `tpwe_xz_aipt_facelist_install` VALUES ('427', 'aipt_new/big_img/523/2.JPG', 'aipt_new/small_img/523/2.JPG', '0', '0', '10013', '523', '0');
INSERT INTO `tpwe_xz_aipt_facelist_install` VALUES ('428', 'aipt_new/big_img/523/3.JPG', 'aipt_new/small_img/523/3.JPG', '0', '0', '10013', '523', '0');
INSERT INTO `tpwe_xz_aipt_facelist_install` VALUES ('429', 'aipt_new/big_img/523/4.JPG', 'aipt_new/small_img/523/4.JPG', '0', '0', '10013', '523', '0');
INSERT INTO `tpwe_xz_aipt_facelist_install` VALUES ('430', 'aipt_new/big_img/523/5.JPG', 'aipt_new/small_img/523/5.JPG', '0', '0', '10013', '523', '0');
INSERT INTO `tpwe_xz_aipt_facelist_install` VALUES ('431', 'aipt_new/big_img/523/6.JPG', 'aipt_new/small_img/523/6.JPG', '0', '0', '10013', '523', '0');
INSERT INTO `tpwe_xz_aipt_facelist_install` VALUES ('432', 'aipt_new/big_img/523/7.JPG', 'aipt_new/small_img/523/7.JPG', '0', '0', '10013', '523', '0');
INSERT INTO `tpwe_xz_aipt_facelist_install` VALUES ('433', 'aipt_new/big_img/523/8.JPG', 'aipt_new/small_img/523/8.JPG', '0', '0', '10013', '523', '0');
INSERT INTO `tpwe_xz_aipt_facelist_install` VALUES ('434', 'aipt_new/big_img/523/9.JPG', 'aipt_new/small_img/523/9.JPG', '0', '0', '10013', '523', '0');
INSERT INTO `tpwe_xz_aipt_facelist_install` VALUES ('435', 'aipt_new/big_img/523/10.JPG', 'aipt_new/small_img/523/10.JPG', '0', '0', '10013', '523', '0');
INSERT INTO `tpwe_xz_aipt_facelist_install` VALUES ('436', 'aipt_new/big_img/523/11.JPG', 'aipt_new/small_img/523/11.JPG', '0', '0', '10013', '523', '0');
INSERT INTO `tpwe_xz_aipt_facelist_install` VALUES ('437', 'aipt_new/big_img/523/12.JPG', 'aipt_new/small_img/523/12.JPG', '0', '0', '10013', '523', '0');
INSERT INTO `tpwe_xz_aipt_facelist_install` VALUES ('438', 'aipt_new/big_img/523/13.JPG', 'aipt_new/small_img/523/13.JPG', '0', '0', '10013', '523', '0');


-- ----------------------------
-- Table structure for `tpwe_xz_aipt_videoclass`
-- ----------------------------
DROP TABLE IF EXISTS `tpwe_xz_aipt_videoclass`;
CREATE TABLE `tpwe_xz_aipt_videoclass` (
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
) ENGINE=InnoDB AUTO_INCREMENT=524 DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Table structure for `tpwe_xz_aipt_videoclass_install`
-- ----------------------------
DROP TABLE IF EXISTS `tpwe_xz_aipt_videoclass_install`;
CREATE TABLE `tpwe_xz_aipt_videoclass_install` (
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
) ENGINE=InnoDB AUTO_INCREMENT=524 DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of tpwe_xz_aipt_videoclass_install
-- ----------------------------
INSERT INTO `tpwe_xz_aipt_videoclass_install` VALUES ('511', '男生套路', '0', '0', '10013', '0', '', '', '0', '0', '0');
INSERT INTO `tpwe_xz_aipt_videoclass_install` VALUES ('512', '女生套路', '0', '0', '10013', '0', '', '', '0', '0', '0');

-- ----------------------------
-- Table structure for `tpwe_xz_aipt_videolist`
-- ----------------------------
DROP TABLE IF EXISTS `tpwe_xz_aipt_videolist`;
CREATE TABLE `tpwe_xz_aipt_videolist` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `videopath` varchar(255) NOT NULL,
  `imgpath` varchar(255) NOT NULL,
  `hid` int(11) NOT NULL,
  `pos` int(11) NOT NULL,
  `uid` int(11) NOT NULL,
  `classid` int(11) NOT NULL,
  `install` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=194 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for `tpwe_xz_aipt_videolist_install`
-- ----------------------------
DROP TABLE IF EXISTS `tpwe_xz_aipt_videolist_install`;
CREATE TABLE `tpwe_xz_aipt_videolist_install` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `videopath` varchar(255) NOT NULL,
  `imgpath` varchar(255) NOT NULL,
  `hid` int(11) NOT NULL,
  `pos` int(11) NOT NULL,
  `uid` int(11) NOT NULL,
  `classid` int(11) NOT NULL,
  `install` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=194 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tpwe_xz_aipt_videolist_install
-- ----------------------------
INSERT INTO `tpwe_xz_aipt_videolist_install` VALUES ('1', 'aipt_new/video_man/1.mp4', 'aipt_new/video_man/jpg/1.jpg', '0', '0', '10013', '511', '0', '', '');
INSERT INTO `tpwe_xz_aipt_videolist_install` VALUES ('2', 'aipt_new/video_man/2.mp4', 'aipt_new/video_man/jpg/2.jpg', '0', '0', '10013', '511', '0', '', '');
INSERT INTO `tpwe_xz_aipt_videolist_install` VALUES ('3', 'aipt_new/video_man/3.mp4', 'aipt_new/video_man/jpg/3.jpg', '0', '0', '10013', '511', '0', '', '');
INSERT INTO `tpwe_xz_aipt_videolist_install` VALUES ('4', 'aipt_new/video_man/4.mp4', 'aipt_new/video_man/jpg/4.jpg', '0', '0', '10013', '511', '0', '', '');
INSERT INTO `tpwe_xz_aipt_videolist_install` VALUES ('5', 'aipt_new/video_man/5.mp4', 'aipt_new/video_man/jpg/5.jpg', '0', '0', '10013', '511', '0', '', '');
INSERT INTO `tpwe_xz_aipt_videolist_install` VALUES ('6', 'aipt_new/video_man/6.mp4', 'aipt_new/video_man/jpg/6.jpg', '0', '0', '10013', '511', '0', '', '');
INSERT INTO `tpwe_xz_aipt_videolist_install` VALUES ('7', 'aipt_new/video_man/7.mp4', 'aipt_new/video_man/jpg/7.jpg', '0', '0', '10013', '511', '0', '', '');
INSERT INTO `tpwe_xz_aipt_videolist_install` VALUES ('8', 'aipt_new/video_man/8.mp4', 'aipt_new/video_man/jpg/8.jpg', '0', '0', '10013', '511', '0', '', '');
INSERT INTO `tpwe_xz_aipt_videolist_install` VALUES ('9', 'aipt_new/video_man/9.mp4', 'aipt_new/video_man/jpg/9.jpg', '0', '0', '10013', '511', '0', '', '');
INSERT INTO `tpwe_xz_aipt_videolist_install` VALUES ('10', 'aipt_new/video_man/10.mp4', 'aipt_new/video_man/jpg/10.jpg', '0', '0', '10013', '511', '0', '', '');
INSERT INTO `tpwe_xz_aipt_videolist_install` VALUES ('11', 'aipt_new/video_man/11.mp4', 'aipt_new/video_man/jpg/11.jpg', '0', '0', '10013', '511', '0', '', '');
INSERT INTO `tpwe_xz_aipt_videolist_install` VALUES ('12', 'aipt_new/video_man/12.mp4', 'aipt_new/video_man/jpg/12.jpg', '0', '0', '10013', '511', '0', '', '');
INSERT INTO `tpwe_xz_aipt_videolist_install` VALUES ('13', 'aipt_new/video_man/13.mp4', 'aipt_new/video_man/jpg/13.jpg', '0', '0', '10013', '511', '0', '', '');
INSERT INTO `tpwe_xz_aipt_videolist_install` VALUES ('14', 'aipt_new/video_man/14.mp4', 'aipt_new/video_man/jpg/14.jpg', '0', '0', '10013', '511', '0', '', '');
INSERT INTO `tpwe_xz_aipt_videolist_install` VALUES ('15', 'aipt_new/video_man/15.mp4', 'aipt_new/video_man/jpg/15.jpg', '0', '0', '10013', '511', '0', '', '');
INSERT INTO `tpwe_xz_aipt_videolist_install` VALUES ('16', 'aipt_new/video_man/16.mp4', 'aipt_new/video_man/jpg/16.jpg', '0', '0', '10013', '511', '0', '', '');
INSERT INTO `tpwe_xz_aipt_videolist_install` VALUES ('17', 'aipt_new/video_man/17.mp4', 'aipt_new/video_man/jpg/17.jpg', '0', '0', '10013', '511', '0', '', '');
INSERT INTO `tpwe_xz_aipt_videolist_install` VALUES ('18', 'aipt_new/video_man/18.mp4', 'aipt_new/video_man/jpg/18.jpg', '0', '0', '10013', '511', '0', '', '');
INSERT INTO `tpwe_xz_aipt_videolist_install` VALUES ('19', 'aipt_new/video_man/19.mp4', 'aipt_new/video_man/jpg/19.jpg', '0', '0', '10013', '511', '0', '', '');
INSERT INTO `tpwe_xz_aipt_videolist_install` VALUES ('20', 'aipt_new/video_man/20.mp4', 'aipt_new/video_man/jpg/20.jpg', '0', '0', '10013', '511', '0', '', '');
INSERT INTO `tpwe_xz_aipt_videolist_install` VALUES ('21', 'aipt_new/video_man/21.mp4', 'aipt_new/video_man/jpg/21.jpg', '0', '0', '10013', '511', '0', '', '');
INSERT INTO `tpwe_xz_aipt_videolist_install` VALUES ('22', 'aipt_new/video_man/22.mp4', 'aipt_new/video_man/jpg/22.jpg', '0', '0', '10013', '511', '0', '', '');
INSERT INTO `tpwe_xz_aipt_videolist_install` VALUES ('23', 'aipt_new/video_man/23.mp4', 'aipt_new/video_man/jpg/23.jpg', '0', '0', '10013', '511', '0', '', '');
INSERT INTO `tpwe_xz_aipt_videolist_install` VALUES ('24', 'aipt_new/video_man/24.mp4', 'aipt_new/video_man/jpg/24.jpg', '0', '0', '10013', '511', '0', '', '');
INSERT INTO `tpwe_xz_aipt_videolist_install` VALUES ('25', 'aipt_new/video_man/25.mp4', 'aipt_new/video_man/jpg/25.jpg', '0', '0', '10013', '511', '0', '', '');
INSERT INTO `tpwe_xz_aipt_videolist_install` VALUES ('26', 'aipt_new/video_man/26.mp4', 'aipt_new/video_man/jpg/26.jpg', '0', '0', '10013', '511', '0', '', '');
INSERT INTO `tpwe_xz_aipt_videolist_install` VALUES ('27', 'aipt_new/video_man/27.mp4', 'aipt_new/video_man/jpg/27.jpg', '0', '0', '10013', '511', '0', '', '');
INSERT INTO `tpwe_xz_aipt_videolist_install` VALUES ('28', 'aipt_new/video_man/28.mp4', 'aipt_new/video_man/jpg/28.jpg', '0', '0', '10013', '511', '0', '', '');
INSERT INTO `tpwe_xz_aipt_videolist_install` VALUES ('29', 'aipt_new/video_man/29.mp4', 'aipt_new/video_man/jpg/29.jpg', '0', '0', '10013', '511', '0', '', '');
INSERT INTO `tpwe_xz_aipt_videolist_install` VALUES ('30', 'aipt_new/video_man/30.mp4', 'aipt_new/video_man/jpg/30.jpg', '0', '0', '10013', '511', '0', '', '');
INSERT INTO `tpwe_xz_aipt_videolist_install` VALUES ('31', 'aipt_new/video_man/31.mp4', 'aipt_new/video_man/jpg/31.jpg', '0', '0', '10013', '511', '0', '', '');
INSERT INTO `tpwe_xz_aipt_videolist_install` VALUES ('32', 'aipt_new/video_man/32.mp4', 'aipt_new/video_man/jpg/32.jpg', '0', '0', '10013', '511', '0', '', '');
INSERT INTO `tpwe_xz_aipt_videolist_install` VALUES ('33', 'aipt_new/video_man/33.mp4', 'aipt_new/video_man/jpg/33.jpg', '0', '0', '10013', '511', '0', '', '');
INSERT INTO `tpwe_xz_aipt_videolist_install` VALUES ('34', 'aipt_new/video_man/34.mp4', 'aipt_new/video_man/jpg/34.jpg', '0', '0', '10013', '511', '0', '', '');
INSERT INTO `tpwe_xz_aipt_videolist_install` VALUES ('35', 'aipt_new/video_man/35.mp4', 'aipt_new/video_man/jpg/35.jpg', '0', '0', '10013', '511', '0', '', '');
INSERT INTO `tpwe_xz_aipt_videolist_install` VALUES ('36', 'aipt_new/video_man/36.mp4', 'aipt_new/video_man/jpg/36.jpg', '0', '0', '10013', '511', '0', '', '');
INSERT INTO `tpwe_xz_aipt_videolist_install` VALUES ('37', 'aipt_new/video_man/37.mp4', 'aipt_new/video_man/jpg/37.jpg', '0', '0', '10013', '511', '0', '', '');
INSERT INTO `tpwe_xz_aipt_videolist_install` VALUES ('38', 'aipt_new/video_man/38.mp4', 'aipt_new/video_man/jpg/38.jpg', '0', '0', '10013', '511', '0', '', '');
INSERT INTO `tpwe_xz_aipt_videolist_install` VALUES ('39', 'aipt_new/video_man/39.mp4', 'aipt_new/video_man/jpg/39.jpg', '0', '0', '10013', '511', '0', '', '');
INSERT INTO `tpwe_xz_aipt_videolist_install` VALUES ('40', 'aipt_new/video_man/40.mp4', 'aipt_new/video_man/jpg/40.jpg', '0', '0', '10013', '511', '0', '', '');
INSERT INTO `tpwe_xz_aipt_videolist_install` VALUES ('41', 'aipt_new/video_man/41.mp4', 'aipt_new/video_man/jpg/41.jpg', '0', '0', '10013', '511', '0', '', '');
INSERT INTO `tpwe_xz_aipt_videolist_install` VALUES ('42', 'aipt_new/video_man/42.mp4', 'aipt_new/video_man/jpg/42.jpg', '0', '0', '10013', '511', '0', '', '');
INSERT INTO `tpwe_xz_aipt_videolist_install` VALUES ('43', 'aipt_new/video_man/43.mp4', 'aipt_new/video_man/jpg/43.jpg', '0', '0', '10013', '511', '0', '', '');
INSERT INTO `tpwe_xz_aipt_videolist_install` VALUES ('44', 'aipt_new/video_man/44.mp4', 'aipt_new/video_man/jpg/44.jpg', '0', '0', '10013', '511', '0', '', '');
INSERT INTO `tpwe_xz_aipt_videolist_install` VALUES ('45', 'aipt_new/video_man/45.mp4', 'aipt_new/video_man/jpg/45.jpg', '0', '0', '10013', '511', '0', '', '');
INSERT INTO `tpwe_xz_aipt_videolist_install` VALUES ('46', 'aipt_new/video_man/46.mp4', 'aipt_new/video_man/jpg/46.jpg', '0', '0', '10013', '511', '0', '', '');
INSERT INTO `tpwe_xz_aipt_videolist_install` VALUES ('47', 'aipt_new/video_man/47.mp4', 'aipt_new/video_man/jpg/47.jpg', '0', '0', '10013', '511', '0', '', '');
INSERT INTO `tpwe_xz_aipt_videolist_install` VALUES ('48', 'aipt_new/video_man/48.mp4', 'aipt_new/video_man/jpg/48.jpg', '0', '0', '10013', '511', '0', '', '');
INSERT INTO `tpwe_xz_aipt_videolist_install` VALUES ('49', 'aipt_new/video_man/49.mp4', 'aipt_new/video_man/jpg/49.jpg', '0', '0', '10013', '511', '0', '', '');
INSERT INTO `tpwe_xz_aipt_videolist_install` VALUES ('50', 'aipt_new/video_man/50.mp4', 'aipt_new/video_man/jpg/50.jpg', '0', '0', '10013', '511', '0', '', '');
INSERT INTO `tpwe_xz_aipt_videolist_install` VALUES ('51', 'aipt_new/video_man/51.mp4', 'aipt_new/video_man/jpg/51.jpg', '0', '0', '10013', '511', '0', '', '');
INSERT INTO `tpwe_xz_aipt_videolist_install` VALUES ('52', 'aipt_new/video_man/52.mp4', 'aipt_new/video_man/jpg/52.jpg', '0', '0', '10013', '511', '0', '', '');
INSERT INTO `tpwe_xz_aipt_videolist_install` VALUES ('53', 'aipt_new/video_man/53.mp4', 'aipt_new/video_man/jpg/53.jpg', '0', '0', '10013', '511', '0', '', '');
INSERT INTO `tpwe_xz_aipt_videolist_install` VALUES ('54', 'aipt_new/video_man/54.mp4', 'aipt_new/video_man/jpg/54.jpg', '0', '0', '10013', '511', '0', '', '');
INSERT INTO `tpwe_xz_aipt_videolist_install` VALUES ('55', 'aipt_new/video_man/55.mp4', 'aipt_new/video_man/jpg/55.jpg', '0', '0', '10013', '511', '0', '', '');
INSERT INTO `tpwe_xz_aipt_videolist_install` VALUES ('56', 'aipt_new/video_man/56.mp4', 'aipt_new/video_man/jpg/56.jpg', '0', '0', '10013', '511', '0', '', '');
INSERT INTO `tpwe_xz_aipt_videolist_install` VALUES ('57', 'aipt_new/video_man/57.mp4', 'aipt_new/video_man/jpg/57.jpg', '0', '0', '10013', '511', '0', '', '');
INSERT INTO `tpwe_xz_aipt_videolist_install` VALUES ('58', 'aipt_new/video_man/58.mp4', 'aipt_new/video_man/jpg/58.jpg', '0', '0', '10013', '511', '0', '', '');
INSERT INTO `tpwe_xz_aipt_videolist_install` VALUES ('59', 'aipt_new/video_man/59.mp4', 'aipt_new/video_man/jpg/59.jpg', '0', '0', '10013', '511', '0', '', '');
INSERT INTO `tpwe_xz_aipt_videolist_install` VALUES ('60', 'aipt_new/video_man/60.mp4', 'aipt_new/video_man/jpg/60.jpg', '0', '0', '10013', '511', '0', '', '');
INSERT INTO `tpwe_xz_aipt_videolist_install` VALUES ('61', 'aipt_new/video_man/61.mp4', 'aipt_new/video_man/jpg/61.jpg', '0', '0', '10013', '511', '0', '', '');
INSERT INTO `tpwe_xz_aipt_videolist_install` VALUES ('62', 'aipt_new/video_man/62.mp4', 'aipt_new/video_man/jpg/62.jpg', '0', '0', '10013', '511', '0', '', '');
INSERT INTO `tpwe_xz_aipt_videolist_install` VALUES ('63', 'aipt_new/video_man/63.mp4', 'aipt_new/video_man/jpg/63.jpg', '0', '0', '10013', '511', '0', '', '');
INSERT INTO `tpwe_xz_aipt_videolist_install` VALUES ('64', 'aipt_new/video_man/64.mp4', 'aipt_new/video_man/jpg/64.jpg', '0', '0', '10013', '511', '0', '', '');
INSERT INTO `tpwe_xz_aipt_videolist_install` VALUES ('65', 'aipt_new/video_man/65.mp4', 'aipt_new/video_man/jpg/65.jpg', '0', '0', '10013', '511', '0', '', '');
INSERT INTO `tpwe_xz_aipt_videolist_install` VALUES ('66', 'aipt_new/video_man/66.mp4', 'aipt_new/video_man/jpg/66.jpg', '0', '0', '10013', '511', '0', '', '');
INSERT INTO `tpwe_xz_aipt_videolist_install` VALUES ('67', 'aipt_new/video_man/67.mp4', 'aipt_new/video_man/jpg/67.jpg', '0', '0', '10013', '511', '0', '', '');
INSERT INTO `tpwe_xz_aipt_videolist_install` VALUES ('68', 'aipt_new/video_man/68.mp4', 'aipt_new/video_man/jpg/68.jpg', '0', '0', '10013', '511', '0', '', '');
INSERT INTO `tpwe_xz_aipt_videolist_install` VALUES ('69', 'aipt_new/video_man/69.mp4', 'aipt_new/video_man/jpg/69.jpg', '0', '0', '10013', '511', '0', '', '');
INSERT INTO `tpwe_xz_aipt_videolist_install` VALUES ('70', 'aipt_new/video_man/70.mp4', 'aipt_new/video_man/jpg/70.jpg', '0', '0', '10013', '511', '0', '', '');
INSERT INTO `tpwe_xz_aipt_videolist_install` VALUES ('71', 'aipt_new/video_man/71.mp4', 'aipt_new/video_man/jpg/71.jpg', '0', '0', '10013', '511', '0', '', '');
INSERT INTO `tpwe_xz_aipt_videolist_install` VALUES ('72', 'aipt_new/video_man/72.mp4', 'aipt_new/video_man/jpg/72.jpg', '0', '0', '10013', '511', '0', '', '');
INSERT INTO `tpwe_xz_aipt_videolist_install` VALUES ('73', 'aipt_new/video_man/73.mp4', 'aipt_new/video_man/jpg/73.jpg', '0', '0', '10013', '511', '0', '', '');
INSERT INTO `tpwe_xz_aipt_videolist_install` VALUES ('74', 'aipt_new/video_man/74.mp4', 'aipt_new/video_man/jpg/74.jpg', '0', '0', '10013', '511', '0', '', '');
INSERT INTO `tpwe_xz_aipt_videolist_install` VALUES ('75', 'aipt_new/video_man/75.mp4', 'aipt_new/video_man/jpg/75.jpg', '0', '0', '10013', '511', '0', '', '');
INSERT INTO `tpwe_xz_aipt_videolist_install` VALUES ('76', 'aipt_new/video_man/76.mp4', 'aipt_new/video_man/jpg/76.jpg', '0', '0', '10013', '511', '0', '', '');
INSERT INTO `tpwe_xz_aipt_videolist_install` VALUES ('77', 'aipt_new/video_man/77.mp4', 'aipt_new/video_man/jpg/77.jpg', '0', '0', '10013', '511', '0', '', '');
INSERT INTO `tpwe_xz_aipt_videolist_install` VALUES ('78', 'aipt_new/video_man/78.mp4', 'aipt_new/video_man/jpg/78.jpg', '0', '0', '10013', '511', '0', '', '');
INSERT INTO `tpwe_xz_aipt_videolist_install` VALUES ('79', 'aipt_new/video_man/79.mp4', 'aipt_new/video_man/jpg/79.jpg', '0', '0', '10013', '511', '0', '', '');
INSERT INTO `tpwe_xz_aipt_videolist_install` VALUES ('80', 'aipt_new/video_man/80.mp4', 'aipt_new/video_man/jpg/80.jpg', '0', '0', '10013', '511', '0', '', '');
INSERT INTO `tpwe_xz_aipt_videolist_install` VALUES ('81', 'aipt_new/video_man/81.mp4', 'aipt_new/video_man/jpg/81.jpg', '0', '0', '10013', '511', '0', '', '');
INSERT INTO `tpwe_xz_aipt_videolist_install` VALUES ('82', 'aipt_new/video_man/82.mp4', 'aipt_new/video_man/jpg/82.jpg', '0', '0', '10013', '511', '0', '', '');
INSERT INTO `tpwe_xz_aipt_videolist_install` VALUES ('83', 'aipt_new/video_man/83.mp4', 'aipt_new/video_man/jpg/83.jpg', '0', '0', '10013', '511', '0', '', '');
INSERT INTO `tpwe_xz_aipt_videolist_install` VALUES ('84', 'aipt_new/video_man/84.mp4', 'aipt_new/video_man/jpg/84.jpg', '0', '0', '10013', '511', '0', '', '');
INSERT INTO `tpwe_xz_aipt_videolist_install` VALUES ('85', 'aipt_new/video_man/85.mp4', 'aipt_new/video_man/jpg/85.jpg', '0', '0', '10013', '511', '0', '', '');
INSERT INTO `tpwe_xz_aipt_videolist_install` VALUES ('86', 'aipt_new/video_man/86.mp4', 'aipt_new/video_man/jpg/86.jpg', '0', '0', '10013', '511', '0', '', '');
INSERT INTO `tpwe_xz_aipt_videolist_install` VALUES ('87', 'aipt_new/video_man/87.mp4', 'aipt_new/video_man/jpg/87.jpg', '0', '0', '10013', '511', '0', '', '');
INSERT INTO `tpwe_xz_aipt_videolist_install` VALUES ('88', 'aipt_new/video_man/88.mp4', 'aipt_new/video_man/jpg/88.jpg', '0', '0', '10013', '511', '0', '', '');
INSERT INTO `tpwe_xz_aipt_videolist_install` VALUES ('89', 'aipt_new/video_man/89.mp4', 'aipt_new/video_man/jpg/89.jpg', '0', '0', '10013', '511', '0', '', '');
INSERT INTO `tpwe_xz_aipt_videolist_install` VALUES ('90', 'aipt_new/video_man/90.mp4', 'aipt_new/video_man/jpg/90.jpg', '0', '0', '10013', '511', '0', '', '');
INSERT INTO `tpwe_xz_aipt_videolist_install` VALUES ('91', 'aipt_new/video_man/91.mp4', 'aipt_new/video_man/jpg/91.jpg', '0', '0', '10013', '511', '0', '', '');
INSERT INTO `tpwe_xz_aipt_videolist_install` VALUES ('92', 'aipt_new/video_woman/1.mp4', 'aipt_new/video_woman/jpg/1.jpg', '0', '0', '10013', '512', '0', '', '');
INSERT INTO `tpwe_xz_aipt_videolist_install` VALUES ('93', 'aipt_new/video_woman/2.mp4', 'aipt_new/video_woman/jpg/2.jpg', '0', '0', '10013', '512', '0', '', '');
INSERT INTO `tpwe_xz_aipt_videolist_install` VALUES ('94', 'aipt_new/video_woman/3.mp4', 'aipt_new/video_woman/jpg/3.jpg', '0', '0', '10013', '512', '0', '', '');
INSERT INTO `tpwe_xz_aipt_videolist_install` VALUES ('95', 'aipt_new/video_woman/4.mp4', 'aipt_new/video_woman/jpg/4.jpg', '0', '0', '10013', '512', '0', '', '');
INSERT INTO `tpwe_xz_aipt_videolist_install` VALUES ('96', 'aipt_new/video_woman/5.mp4', 'aipt_new/video_woman/jpg/5.jpg', '0', '0', '10013', '512', '0', '', '');
INSERT INTO `tpwe_xz_aipt_videolist_install` VALUES ('97', 'aipt_new/video_woman/6.mp4', 'aipt_new/video_woman/jpg/6.jpg', '0', '0', '10013', '512', '0', '', '');
INSERT INTO `tpwe_xz_aipt_videolist_install` VALUES ('98', 'aipt_new/video_woman/7.mp4', 'aipt_new/video_woman/jpg/7.jpg', '0', '0', '10013', '512', '0', '', '');
INSERT INTO `tpwe_xz_aipt_videolist_install` VALUES ('99', 'aipt_new/video_woman/8.mp4', 'aipt_new/video_woman/jpg/8.jpg', '0', '0', '10013', '512', '0', '', '');
INSERT INTO `tpwe_xz_aipt_videolist_install` VALUES ('100', 'aipt_new/video_woman/9.mp4', 'aipt_new/video_woman/jpg/9.jpg', '0', '0', '10013', '512', '0', '', '');
INSERT INTO `tpwe_xz_aipt_videolist_install` VALUES ('101', 'aipt_new/video_woman/10.mp4', 'aipt_new/video_woman/jpg/10.jpg', '0', '0', '10013', '512', '0', '', '');
INSERT INTO `tpwe_xz_aipt_videolist_install` VALUES ('102', 'aipt_new/video_woman/11.mp4', 'aipt_new/video_woman/jpg/11.jpg', '0', '0', '10013', '512', '0', '', '');
INSERT INTO `tpwe_xz_aipt_videolist_install` VALUES ('103', 'aipt_new/video_woman/12.mp4', 'aipt_new/video_woman/jpg/12.jpg', '0', '0', '10013', '512', '0', '', '');
INSERT INTO `tpwe_xz_aipt_videolist_install` VALUES ('104', 'aipt_new/video_woman/13.mp4', 'aipt_new/video_woman/jpg/13.jpg', '0', '0', '10013', '512', '0', '', '');
INSERT INTO `tpwe_xz_aipt_videolist_install` VALUES ('105', 'aipt_new/video_woman/14.mp4', 'aipt_new/video_woman/jpg/14.jpg', '0', '0', '10013', '512', '0', '', '');
INSERT INTO `tpwe_xz_aipt_videolist_install` VALUES ('106', 'aipt_new/video_woman/15.mp4', 'aipt_new/video_woman/jpg/15.jpg', '0', '0', '10013', '512', '0', '', '');
INSERT INTO `tpwe_xz_aipt_videolist_install` VALUES ('107', 'aipt_new/video_woman/16.mp4', 'aipt_new/video_woman/jpg/16.jpg', '0', '0', '10013', '512', '0', '', '');
INSERT INTO `tpwe_xz_aipt_videolist_install` VALUES ('108', 'aipt_new/video_woman/17.mp4', 'aipt_new/video_woman/jpg/17.jpg', '0', '0', '10013', '512', '0', '', '');
INSERT INTO `tpwe_xz_aipt_videolist_install` VALUES ('109', 'aipt_new/video_woman/18.mp4', 'aipt_new/video_woman/jpg/18.jpg', '0', '0', '10013', '512', '0', '', '');
INSERT INTO `tpwe_xz_aipt_videolist_install` VALUES ('110', 'aipt_new/video_woman/19.mp4', 'aipt_new/video_woman/jpg/19.jpg', '0', '0', '10013', '512', '0', '', '');
INSERT INTO `tpwe_xz_aipt_videolist_install` VALUES ('111', 'aipt_new/video_woman/20.mp4', 'aipt_new/video_woman/jpg/20.jpg', '0', '0', '10013', '512', '0', '', '');
INSERT INTO `tpwe_xz_aipt_videolist_install` VALUES ('112', 'aipt_new/video_woman/21.mp4', 'aipt_new/video_woman/jpg/21.jpg', '0', '0', '10013', '512', '0', '', '');
INSERT INTO `tpwe_xz_aipt_videolist_install` VALUES ('113', 'aipt_new/video_woman/22.mp4', 'aipt_new/video_woman/jpg/22.jpg', '0', '0', '10013', '512', '0', '', '');
INSERT INTO `tpwe_xz_aipt_videolist_install` VALUES ('114', 'aipt_new/video_woman/23.mp4', 'aipt_new/video_woman/jpg/23.jpg', '0', '0', '10013', '512', '0', '', '');
INSERT INTO `tpwe_xz_aipt_videolist_install` VALUES ('115', 'aipt_new/video_woman/24.mp4', 'aipt_new/video_woman/jpg/24.jpg', '0', '0', '10013', '512', '0', '', '');
INSERT INTO `tpwe_xz_aipt_videolist_install` VALUES ('116', 'aipt_new/video_woman/25.mp4', 'aipt_new/video_woman/jpg/25.jpg', '0', '0', '10013', '512', '0', '', '');
INSERT INTO `tpwe_xz_aipt_videolist_install` VALUES ('117', 'aipt_new/video_woman/26.mp4', 'aipt_new/video_woman/jpg/26.jpg', '0', '0', '10013', '512', '0', '', '');
INSERT INTO `tpwe_xz_aipt_videolist_install` VALUES ('118', 'aipt_new/video_woman/27.mp4', 'aipt_new/video_woman/jpg/27.jpg', '0', '0', '10013', '512', '0', '', '');
INSERT INTO `tpwe_xz_aipt_videolist_install` VALUES ('119', 'aipt_new/video_woman/28.mp4', 'aipt_new/video_woman/jpg/28.jpg', '0', '0', '10013', '512', '0', '', '');
INSERT INTO `tpwe_xz_aipt_videolist_install` VALUES ('120', 'aipt_new/video_woman/29.mp4', 'aipt_new/video_woman/jpg/29.jpg', '0', '0', '10013', '512', '0', '', '');
INSERT INTO `tpwe_xz_aipt_videolist_install` VALUES ('121', 'aipt_new/video_woman/30.mp4', 'aipt_new/video_woman/jpg/30.jpg', '0', '0', '10013', '512', '0', '', '');
INSERT INTO `tpwe_xz_aipt_videolist_install` VALUES ('122', 'aipt_new/video_woman/31.mp4', 'aipt_new/video_woman/jpg/31.jpg', '0', '0', '10013', '512', '0', '', '');
INSERT INTO `tpwe_xz_aipt_videolist_install` VALUES ('123', 'aipt_new/video_woman/32.mp4', 'aipt_new/video_woman/jpg/32.jpg', '0', '0', '10013', '512', '0', '', '');
INSERT INTO `tpwe_xz_aipt_videolist_install` VALUES ('124', 'aipt_new/video_woman/33.mp4', 'aipt_new/video_woman/jpg/33.jpg', '0', '0', '10013', '512', '0', '', '');
INSERT INTO `tpwe_xz_aipt_videolist_install` VALUES ('125', 'aipt_new/video_woman/34.mp4', 'aipt_new/video_woman/jpg/34.jpg', '0', '0', '10013', '512', '0', '', '');
INSERT INTO `tpwe_xz_aipt_videolist_install` VALUES ('126', 'aipt_new/video_woman/35.mp4', 'aipt_new/video_woman/jpg/35.jpg', '0', '0', '10013', '512', '0', '', '');
INSERT INTO `tpwe_xz_aipt_videolist_install` VALUES ('127', 'aipt_new/video_woman/36.mp4', 'aipt_new/video_woman/jpg/36.jpg', '0', '0', '10013', '512', '0', '', '');
INSERT INTO `tpwe_xz_aipt_videolist_install` VALUES ('128', 'aipt_new/video_woman/37.mp4', 'aipt_new/video_woman/jpg/37.jpg', '0', '0', '10013', '512', '0', '', '');
INSERT INTO `tpwe_xz_aipt_videolist_install` VALUES ('129', 'aipt_new/video_woman/38.mp4', 'aipt_new/video_woman/jpg/38.jpg', '0', '0', '10013', '512', '0', '', '');
INSERT INTO `tpwe_xz_aipt_videolist_install` VALUES ('130', 'aipt_new/video_woman/39.mp4', 'aipt_new/video_woman/jpg/39.jpg', '0', '0', '10013', '512', '0', '', '');
INSERT INTO `tpwe_xz_aipt_videolist_install` VALUES ('131', 'aipt_new/video_woman/40.mp4', 'aipt_new/video_woman/jpg/40.jpg', '0', '0', '10013', '512', '0', '', '');
INSERT INTO `tpwe_xz_aipt_videolist_install` VALUES ('132', 'aipt_new/video_woman/41.mp4', 'aipt_new/video_woman/jpg/41.jpg', '0', '0', '10013', '512', '0', '', '');
INSERT INTO `tpwe_xz_aipt_videolist_install` VALUES ('133', 'aipt_new/video_woman/42.mp4', 'aipt_new/video_woman/jpg/42.jpg', '0', '0', '10013', '512', '0', '', '');
INSERT INTO `tpwe_xz_aipt_videolist_install` VALUES ('134', 'aipt_new/video_woman/43.mp4', 'aipt_new/video_woman/jpg/43.jpg', '0', '0', '10013', '512', '0', '', '');
INSERT INTO `tpwe_xz_aipt_videolist_install` VALUES ('135', 'aipt_new/video_woman/44.mp4', 'aipt_new/video_woman/jpg/44.jpg', '0', '0', '10013', '512', '0', '', '');
INSERT INTO `tpwe_xz_aipt_videolist_install` VALUES ('136', 'aipt_new/video_woman/45.mp4', 'aipt_new/video_woman/jpg/45.jpg', '0', '0', '10013', '512', '0', '', '');
INSERT INTO `tpwe_xz_aipt_videolist_install` VALUES ('137', 'aipt_new/video_woman/46.mp4', 'aipt_new/video_woman/jpg/46.jpg', '0', '0', '10013', '512', '0', '', '');
INSERT INTO `tpwe_xz_aipt_videolist_install` VALUES ('138', 'aipt_new/video_woman/47.mp4', 'aipt_new/video_woman/jpg/47.jpg', '0', '0', '10013', '512', '0', '', '');
INSERT INTO `tpwe_xz_aipt_videolist_install` VALUES ('139', 'aipt_new/video_woman/48.mp4', 'aipt_new/video_woman/jpg/48.jpg', '0', '0', '10013', '512', '0', '', '');
INSERT INTO `tpwe_xz_aipt_videolist_install` VALUES ('140', 'aipt_new/video_woman/49.mp4', 'aipt_new/video_woman/jpg/49.jpg', '0', '0', '10013', '512', '0', '', '');
INSERT INTO `tpwe_xz_aipt_videolist_install` VALUES ('141', 'aipt_new/video_woman/50.mp4', 'aipt_new/video_woman/jpg/50.jpg', '0', '0', '10013', '512', '0', '', '');
INSERT INTO `tpwe_xz_aipt_videolist_install` VALUES ('142', 'aipt_new/video_woman/51.mp4', 'aipt_new/video_woman/jpg/51.jpg', '0', '0', '10013', '512', '0', '', '');
INSERT INTO `tpwe_xz_aipt_videolist_install` VALUES ('143', 'aipt_new/video_woman/52.mp4', 'aipt_new/video_woman/jpg/52.jpg', '0', '0', '10013', '512', '0', '', '');
INSERT INTO `tpwe_xz_aipt_videolist_install` VALUES ('144', 'aipt_new/video_woman/53.mp4', 'aipt_new/video_woman/jpg/53.jpg', '0', '0', '10013', '512', '0', '', '');
INSERT INTO `tpwe_xz_aipt_videolist_install` VALUES ('145', 'aipt_new/video_woman/54.mp4', 'aipt_new/video_woman/jpg/54.jpg', '0', '0', '10013', '512', '0', '', '');
INSERT INTO `tpwe_xz_aipt_videolist_install` VALUES ('146', 'aipt_new/video_woman/55.mp4', 'aipt_new/video_woman/jpg/55.jpg', '0', '0', '10013', '512', '0', '', '');
INSERT INTO `tpwe_xz_aipt_videolist_install` VALUES ('147', 'aipt_new/video_woman/56.mp4', 'aipt_new/video_woman/jpg/56.jpg', '0', '0', '10013', '512', '0', '', '');
INSERT INTO `tpwe_xz_aipt_videolist_install` VALUES ('148', 'aipt_new/video_woman/57.mp4', 'aipt_new/video_woman/jpg/57.jpg', '0', '0', '10013', '512', '0', '', '');
INSERT INTO `tpwe_xz_aipt_videolist_install` VALUES ('149', 'aipt_new/video_woman/58.mp4', 'aipt_new/video_woman/jpg/58.jpg', '0', '0', '10013', '512', '0', '', '');
INSERT INTO `tpwe_xz_aipt_videolist_install` VALUES ('150', 'aipt_new/video_woman/59.mp4', 'aipt_new/video_woman/jpg/59.jpg', '0', '0', '10013', '512', '0', '', '');
INSERT INTO `tpwe_xz_aipt_videolist_install` VALUES ('151', 'aipt_new/video_woman/60.mp4', 'aipt_new/video_woman/jpg/60.jpg', '0', '0', '10013', '512', '0', '', '');
INSERT INTO `tpwe_xz_aipt_videolist_install` VALUES ('152', 'aipt_new/video_woman/61.mp4', 'aipt_new/video_woman/jpg/61.jpg', '0', '0', '10013', '512', '0', '', '');
INSERT INTO `tpwe_xz_aipt_videolist_install` VALUES ('153', 'aipt_new/video_woman/62.mp4', 'aipt_new/video_woman/jpg/62.jpg', '0', '0', '10013', '512', '0', '', '');
INSERT INTO `tpwe_xz_aipt_videolist_install` VALUES ('154', 'aipt_new/video_woman/63.mp4', 'aipt_new/video_woman/jpg/63.jpg', '0', '0', '10013', '512', '0', '', '');
INSERT INTO `tpwe_xz_aipt_videolist_install` VALUES ('155', 'aipt_new/video_woman/64.mp4', 'aipt_new/video_woman/jpg/64.jpg', '0', '0', '10013', '512', '0', '', '');
INSERT INTO `tpwe_xz_aipt_videolist_install` VALUES ('156', 'aipt_new/video_woman/65.mp4', 'aipt_new/video_woman/jpg/65.jpg', '0', '0', '10013', '512', '0', '', '');
INSERT INTO `tpwe_xz_aipt_videolist_install` VALUES ('157', 'aipt_new/video_woman/66.mp4', 'aipt_new/video_woman/jpg/66.jpg', '0', '0', '10013', '512', '0', '', '');
INSERT INTO `tpwe_xz_aipt_videolist_install` VALUES ('158', 'aipt_new/video_woman/67.mp4', 'aipt_new/video_woman/jpg/67.jpg', '0', '0', '10013', '512', '0', '', '');
INSERT INTO `tpwe_xz_aipt_videolist_install` VALUES ('159', 'aipt_new/video_woman/68.mp4', 'aipt_new/video_woman/jpg/68.jpg', '0', '0', '10013', '512', '0', '', '');
INSERT INTO `tpwe_xz_aipt_videolist_install` VALUES ('160', 'aipt_new/video_woman/69.mp4', 'aipt_new/video_woman/jpg/69.jpg', '0', '0', '10013', '512', '0', '', '');
INSERT INTO `tpwe_xz_aipt_videolist_install` VALUES ('161', 'aipt_new/video_woman/70.mp4', 'aipt_new/video_woman/jpg/70.jpg', '0', '0', '10013', '512', '0', '', '');
INSERT INTO `tpwe_xz_aipt_videolist_install` VALUES ('162', 'aipt_new/video_woman/71.mp4', 'aipt_new/video_woman/jpg/71.jpg', '0', '0', '10013', '512', '0', '', '');
INSERT INTO `tpwe_xz_aipt_videolist_install` VALUES ('163', 'aipt_new/video_woman/72.mp4', 'aipt_new/video_woman/jpg/72.jpg', '0', '0', '10013', '512', '0', '', '');
INSERT INTO `tpwe_xz_aipt_videolist_install` VALUES ('164', 'aipt_new/video_woman/73.mp4', 'aipt_new/video_woman/jpg/73.jpg', '0', '0', '10013', '512', '0', '', '');
INSERT INTO `tpwe_xz_aipt_videolist_install` VALUES ('165', 'aipt_new/video_woman/74.mp4', 'aipt_new/video_woman/jpg/74.jpg', '0', '0', '10013', '512', '0', '', '');
INSERT INTO `tpwe_xz_aipt_videolist_install` VALUES ('166', 'aipt_new/video_woman/75.mp4', 'aipt_new/video_woman/jpg/75.jpg', '0', '0', '10013', '512', '0', '', '');
INSERT INTO `tpwe_xz_aipt_videolist_install` VALUES ('167', 'aipt_new/video_woman/76.mp4', 'aipt_new/video_woman/jpg/76.jpg', '0', '0', '10013', '512', '0', '', '');
INSERT INTO `tpwe_xz_aipt_videolist_install` VALUES ('168', 'aipt_new/video_woman/77.mp4', 'aipt_new/video_woman/jpg/77.jpg', '0', '0', '10013', '512', '0', '', '');
INSERT INTO `tpwe_xz_aipt_videolist_install` VALUES ('169', 'aipt_new/video_woman/78.mp4', 'aipt_new/video_woman/jpg/78.jpg', '0', '0', '10013', '512', '0', '', '');
INSERT INTO `tpwe_xz_aipt_videolist_install` VALUES ('170', 'aipt_new/video_woman/79.mp4', 'aipt_new/video_woman/jpg/79.jpg', '0', '0', '10013', '512', '0', '', '');
INSERT INTO `tpwe_xz_aipt_videolist_install` VALUES ('171', 'aipt_new/video_woman/80.mp4', 'aipt_new/video_woman/jpg/80.jpg', '0', '0', '10013', '512', '0', '', '');
INSERT INTO `tpwe_xz_aipt_videolist_install` VALUES ('172', 'aipt_new/video_woman/81.mp4', 'aipt_new/video_woman/jpg/81.jpg', '0', '0', '10013', '512', '0', '', '');
INSERT INTO `tpwe_xz_aipt_videolist_install` VALUES ('173', 'aipt_new/video_woman/82.mp4', 'aipt_new/video_woman/jpg/82.jpg', '0', '0', '10013', '512', '0', '', '');
INSERT INTO `tpwe_xz_aipt_videolist_install` VALUES ('174', 'aipt_new/video_woman/83.mp4', 'aipt_new/video_woman/jpg/83.jpg', '0', '0', '10013', '512', '0', '', '');
INSERT INTO `tpwe_xz_aipt_videolist_install` VALUES ('175', 'aipt_new/video_woman/84.mp4', 'aipt_new/video_woman/jpg/84.jpg', '0', '0', '10013', '512', '0', '', '');
INSERT INTO `tpwe_xz_aipt_videolist_install` VALUES ('176', 'aipt_new/video_woman/85.mp4', 'aipt_new/video_woman/jpg/85.jpg', '0', '0', '10013', '512', '0', '', '');
INSERT INTO `tpwe_xz_aipt_videolist_install` VALUES ('177', 'aipt_new/video_woman/86.mp4', 'aipt_new/video_woman/jpg/86.jpg', '0', '0', '10013', '512', '0', '', '');
INSERT INTO `tpwe_xz_aipt_videolist_install` VALUES ('178', 'aipt_new/video_woman/87.mp4', 'aipt_new/video_woman/jpg/87.jpg', '0', '0', '10013', '512', '0', '', '');
INSERT INTO `tpwe_xz_aipt_videolist_install` VALUES ('179', 'aipt_new/video_woman/88.mp4', 'aipt_new/video_woman/jpg/88.jpg', '0', '0', '10013', '512', '0', '', '');
INSERT INTO `tpwe_xz_aipt_videolist_install` VALUES ('180', 'aipt_new/video_woman/89.mp4', 'aipt_new/video_woman/jpg/89.jpg', '0', '0', '10013', '512', '0', '', '');
INSERT INTO `tpwe_xz_aipt_videolist_install` VALUES ('181', 'aipt_new/video_woman/90.mp4', 'aipt_new/video_woman/jpg/90.jpg', '0', '0', '10013', '512', '0', '', '');
INSERT INTO `tpwe_xz_aipt_videolist_install` VALUES ('182', 'aipt_new/video_woman/91.mp4', 'aipt_new/video_woman/jpg/91.jpg', '0', '0', '10013', '512', '0', '', '');
INSERT INTO `tpwe_xz_aipt_videolist_install` VALUES ('183', 'aipt_new/video_woman/92.mp4', 'aipt_new/video_woman/jpg/92.jpg', '0', '0', '10013', '512', '0', '', '');
INSERT INTO `tpwe_xz_aipt_videolist_install` VALUES ('184', 'aipt_new/video_woman/93.mp4', 'aipt_new/video_woman/jpg/93.jpg', '0', '0', '10013', '512', '0', '', '');
INSERT INTO `tpwe_xz_aipt_videolist_install` VALUES ('185', 'aipt_new/video_woman/94.mp4', 'aipt_new/video_woman/jpg/94.jpg', '0', '0', '10013', '512', '0', '', '');
INSERT INTO `tpwe_xz_aipt_videolist_install` VALUES ('186', 'aipt_new/video_woman/95.mp4', 'aipt_new/video_woman/jpg/95.jpg', '0', '0', '10013', '512', '0', '', '');
INSERT INTO `tpwe_xz_aipt_videolist_install` VALUES ('187', 'aipt_new/video_woman/96.mp4', 'aipt_new/video_woman/jpg/96.jpg', '0', '0', '10013', '512', '0', '', '');
INSERT INTO `tpwe_xz_aipt_videolist_install` VALUES ('188', 'aipt_new/video_woman/97.mp4', 'aipt_new/video_woman/jpg/97.jpg', '0', '0', '10013', '512', '0', '', '');
INSERT INTO `tpwe_xz_aipt_videolist_install` VALUES ('189', 'aipt_new/video_woman/98.mp4', 'aipt_new/video_woman/jpg/98.jpg', '0', '0', '10013', '512', '0', '', '');
INSERT INTO `tpwe_xz_aipt_videolist_install` VALUES ('190', 'aipt_new/video_woman/99.mp4', 'aipt_new/video_woman/jpg/99.jpg', '0', '0', '10013', '512', '0', '', '');
INSERT INTO `tpwe_xz_aipt_videolist_install` VALUES ('191', 'aipt_new/video_woman/100.mp4', 'aipt_new/video_woman/jpg/100.jpg', '0', '0', '10013', '512', '0', '', '');
INSERT INTO `tpwe_xz_aipt_videolist_install` VALUES ('192', 'aipt_new/video_woman/101.mp4', 'aipt_new/video_woman/jpg/101.jpg', '0', '0', '10013', '512', '0', '', '');
INSERT INTO `tpwe_xz_aipt_videolist_install` VALUES ('193', 'aipt_new/video_woman/102.mp4', 'aipt_new/video_woman/jpg/102.jpg', '0', '0', '10013', '512', '0', '', '');

-- ----------------------------
-- Table structure for `tpwe_xz_aipt_yijian`
-- ----------------------------
DROP TABLE IF EXISTS `tpwe_xz_aipt_yijian`;
CREATE TABLE `tpwe_xz_aipt_yijian` (
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


-- ----------------------------
-- Table structure for `tpwe_xz_aipt_yijian_json`
-- ----------------------------
DROP TABLE IF EXISTS `tpwe_xz_aipt_yijian_json`;
CREATE TABLE `tpwe_xz_aipt_yijian_json` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `yijian` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tpwe_xz_aipt_yijian_json
-- ----------------------------
INSERT INTO `tpwe_xz_aipt_yijian_json` VALUES ('1', '{\r\n    \"status\": 0,\r\n    \"reason\": \"success\",\r\n    \"data\": {\r\n        \"imageSizes\": [\r\n            {\r\n                \"text\": \"4:3\",\r\n                \"value\": 0\r\n            },\r\n            {\r\n                \"text\": \"3:4\",\r\n                \"value\": 1\r\n            },\r\n            {\r\n                \"text\": \"1:1\",\r\n                \"value\": 2\r\n            },\r\n            {\r\n                \"text\": \"16:9\",\r\n                \"value\": 3\r\n            },\r\n            {\r\n                \"text\": \"9:16\",\r\n                \"value\": 4\r\n            }\r\n        ],\r\n        \"stableArtists\": [\r\n            {\r\n                \"id\": \"0\",\r\n                \"img_words\": \"\",\r\n                \"poster\": \"https://yijian-painting-prod.cdn.bcebos.com/static/styles/style31.png\",\r\n                \"text\": \"不限定\",\r\n                \"value\": \"\"\r\n            },\r\n            {\r\n                \"id\": \"1\",\r\n                \"img_words\": \"\",\r\n                \"poster\": \"https://yijian-painting-prod.cdn.bcebos.com/static/styles/style32.png\",\r\n                \"text\": \"马塞尔·夏加尔\",\r\n                \"value\": \"MarcelChagall\"\r\n            },\r\n            {\r\n                \"id\": \"2\",\r\n                \"img_words\": \"\",\r\n                \"poster\": \"https://yijian-painting-prod.cdn.bcebos.com/static/styles/style33.png\",\r\n                \"text\": \"村上隆\",\r\n                \"value\": \"TakashiMurakami\"\r\n            },\r\n            {\r\n                \"id\": \"3\",\r\n                \"img_words\": \"\",\r\n                \"poster\": \"https://yijian-painting-prod.cdn.bcebos.com/static/styles/style34.png\",\r\n                \"text\": \"穆夏\",\r\n                \"value\": \"AlphonseMucha\"\r\n            },\r\n            {\r\n                \"id\": \"4\",\r\n                \"img_words\": \"\",\r\n                \"poster\": \"https://yijian-painting-prod.cdn.bcebos.com/static/styles/style35.png\",\r\n                \"text\": \"毕加索\",\r\n                \"value\": \"PabloPicasso\"\r\n            },\r\n            {\r\n                \"id\": \"5\",\r\n                \"img_words\": \"\",\r\n                \"poster\": \"https://yijian-painting-prod.cdn.bcebos.com/static/styles/style36.png\",\r\n                \"text\": \"梵高\",\r\n                \"value\": \"VincentvanGogh\"\r\n            },\r\n            {\r\n                \"id\": \"6\",\r\n                \"img_words\": \"\",\r\n                \"poster\": \"https://yijian-painting-prod.cdn.bcebos.com/static/styles/style37.png\",\r\n                \"text\": \"莫奈\",\r\n                \"value\": \"ClaudeMonet\"\r\n            },\r\n            {\r\n                \"id\": \"7\",\r\n                \"img_words\": \"\",\r\n                \"poster\": \"https://yijian-painting-prod.cdn.bcebos.com/static/styles/style38.png\",\r\n                \"text\": \"保罗·塞尚\",\r\n                \"value\": \"PaulCezanne\"\r\n            },\r\n            {\r\n                \"id\": \"8\",\r\n                \"img_words\": \"\",\r\n                \"poster\": \"https://yijian-painting-prod.cdn.bcebos.com/static/styles/style39.png\",\r\n                \"text\": \"托马斯·科尔\",\r\n                \"value\": \"ThomasCole\"\r\n            },\r\n            {\r\n                \"id\": \"9\",\r\n                \"img_words\": \"\",\r\n                \"poster\": \"https://yijian-painting-prod.cdn.bcebos.com/static/styles/style40.png\",\r\n                \"text\": \"莫比乌斯\",\r\n                \"value\": \"Moebius\"\r\n            }\r\n        ],\r\n        \"styleDetails\": [\r\n            {\r\n                \"default_guide_scale\": 7.5,\r\n                \"engine\": \"default_dreamer_diffusion\",\r\n                \"group_name\": \"通用设计\",\r\n                \"id\": 0,\r\n                \"is_color_enhance\": false,\r\n                \"poster\": \"https://yijian-painting-prod.cdn.bcebos.com/static/styles/style31.png\",\r\n                \"text\": \"智能\",\r\n                \"value\": \"\"\r\n            },\r\n            {\r\n                \"default_guide_scale\": 7.5,\r\n                \"engine\": \"stable_diffusion\",\r\n                \"group_name\": \"通用设计\",\r\n                \"id\": 1,\r\n                \"is_color_enhance\": false,\r\n                \"poster\": \"https://yijian-painting-prod.cdn.bcebos.com/static/styles/style31.png\",\r\n                \"text\": \"不限定\",\r\n                \"value\": \"\"\r\n            },\r\n            {\r\n                \"default_guide_scale\": 7.5,\r\n                \"engine\": \"vinteprotogenmixV10_diffusion\",\r\n                \"group_name\": \"通用设计\",\r\n                \"id\": 2,\r\n                \"is_color_enhance\": false,\r\n                \"poster\": \"https://yijian-painting-prod.cdn.bcebos.com/static/styles/45.jpg\",\r\n                \"text\": \"六边形战士\",\r\n                \"value\": \"\"\r\n            },\r\n            {\r\n                \"default_guide_scale\": 7.5,\r\n                \"engine\": \"mid_stable_diffusion\",\r\n                \"group_name\": \"通用设计\",\r\n                \"id\": 3,\r\n                \"is_color_enhance\": false,\r\n                \"poster\": \"https://yijian-painting-prod.cdn.bcebos.com/static/styles/style26.png\",\r\n                \"text\": \"艺术感强化\",\r\n                \"value\": \"\"\r\n            },\r\n            {\r\n                \"default_guide_scale\": 7.5,\r\n                \"engine\": \"redshift_novelai_sd_merge_diffusion\",\r\n                \"group_name\": \"通用设计\",\r\n                \"id\": 4,\r\n                \"is_color_enhance\": false,\r\n                \"poster\": \"https://yijian-painting-prod.cdn.bcebos.com/static/styles/style25.png\",\r\n                \"text\": \"3D建模风格\",\r\n                \"value\": \"\"\r\n            },\r\n            {\r\n                \"default_guide_scale\": 7.5,\r\n                \"engine\": \"stable_diffusion\",\r\n                \"group_name\": \"通用设计\",\r\n                \"id\": 5,\r\n                \"is_color_enhance\": false,\r\n                \"poster\": \"https://yijian-painting-prod.cdn.bcebos.com/static/styles/style1.png\",\r\n                \"text\": \"油画\",\r\n                \"value\": \" very detailed oil painting, oil on canvas\"\r\n            },\r\n            {\r\n                \"default_guide_scale\": 7.5,\r\n                \"engine\": \"stable_diffusion\",\r\n                \"group_name\": \"通用设计\",\r\n                \"id\": 6,\r\n                \"is_color_enhance\": false,\r\n                \"poster\": \"https://yijian-painting-prod.cdn.bcebos.com/static/styles/style3.png\",\r\n                \"text\": \"虚幻引擎渲染\",\r\n                \"value\": \" unreal engine render, 8k\"\r\n            },\r\n            {\r\n                \"default_guide_scale\": 7.5,\r\n                \"engine\": \"stable_diffusion\",\r\n                \"group_name\": \"通用设计\",\r\n                \"id\": 7,\r\n                \"is_color_enhance\": false,\r\n                \"poster\": \"https://yijian-painting-prod.cdn.bcebos.com/static/styles/style4.png\",\r\n                \"text\": \"铅笔素描\",\r\n                \"value\": \" milt kahl pencil sketch\"\r\n            },\r\n            {\r\n                \"default_guide_scale\": 7.5,\r\n                \"engine\": \"stable_diffusion\",\r\n                \"group_name\": \"通用设计\",\r\n                \"id\": 8,\r\n                \"is_color_enhance\": false,\r\n                \"poster\": \"https://yijian-painting-prod.cdn.bcebos.com/static/styles/style5.png\",\r\n                \"text\": \"水彩绘画\",\r\n                \"value\": \" in watercolor gouache detailed paintings, insanely detail\"\r\n            },\r\n            {\r\n                \"default_guide_scale\": 7.5,\r\n                \"engine\": \"stable_diffusion\",\r\n                \"group_name\": \"通用设计\",\r\n                \"id\": 9,\r\n                \"is_color_enhance\": false,\r\n                \"poster\": \"https://yijian-painting-prod.cdn.bcebos.com/static/styles/style7.png\",\r\n                \"text\": \"1950年代纸浆科幻封面\",\r\n                \"value\": \" style of 1950s pulp sci-fi cover\"\r\n            },\r\n            {\r\n                \"default_guide_scale\": 7.5,\r\n                \"engine\": \"stable_diffusion\",\r\n                \"group_name\": \"通用设计\",\r\n                \"id\": 10,\r\n                \"is_color_enhance\": false,\r\n                \"poster\": \"https://yijian-painting-prod.cdn.bcebos.com/static/styles/style17.png\",\r\n                \"text\": \"新海诚\",\r\n                \"value\": \" by makoto shinkai\"\r\n            },\r\n            {\r\n                \"default_guide_scale\": 7.5,\r\n                \"engine\": \"stable_diffusion\",\r\n                \"group_name\": \"通用设计\",\r\n                \"id\": 11,\r\n                \"is_color_enhance\": false,\r\n                \"poster\": \"https://yijian-painting-prod.cdn.bcebos.com/static/styles/style18.png\",\r\n                \"text\": \"倪传婧\",\r\n                \"value\": \" by victo ngai\"\r\n            },\r\n            {\r\n                \"default_guide_scale\": 7.5,\r\n                \"engine\": \"stable_diffusion\",\r\n                \"group_name\": \"通用设计\",\r\n                \"id\": 12,\r\n                \"is_color_enhance\": false,\r\n                \"poster\": \"https://yijian-painting-prod.cdn.bcebos.com/static/styles/style19.png\",\r\n                \"text\": \"像素画\",\r\n                \"value\": \" 64-bit pixel art\"\r\n            },\r\n            {\r\n                \"default_guide_scale\": 7.5,\r\n                \"engine\": \"stable_diffusion\",\r\n                \"group_name\": \"通用设计\",\r\n                \"id\": 13,\r\n                \"is_color_enhance\": false,\r\n                \"poster\": \"https://yijian-painting-prod.cdn.bcebos.com/static/styles/style20.png\",\r\n                \"text\": \"中国画\",\r\n                \"value\": \" chinese ink-wash painting style\"\r\n            },\r\n            {\r\n                \"default_guide_scale\": 7.5,\r\n                \"engine\": \"stable_diffusion\",\r\n                \"group_name\": \"通用设计\",\r\n                \"id\": 14,\r\n                \"is_color_enhance\": false,\r\n                \"poster\": \"https://yijian-painting-prod.cdn.bcebos.com/static/styles/style21.png\",\r\n                \"text\": \"赛博朋克\",\r\n                \"value\": \" hyper realistic cyberpunk style\"\r\n            },\r\n            {\r\n                \"default_guide_scale\": 7.5,\r\n                \"engine\": \"stable_diffusion\",\r\n                \"group_name\": \"通用设计\",\r\n                \"id\": 15,\r\n                \"is_color_enhance\": false,\r\n                \"poster\": \"https://yijian-painting-prod.cdn.bcebos.com/static/styles/style28.png\",\r\n                \"text\": \"吉卜力\",\r\n                \"value\": \" artwork by studio ghibli, lighting, clear focus, very coherent, high detailed\"\r\n            },\r\n            {\r\n                \"default_guide_scale\": 7.5,\r\n                \"engine\": \"stable_diffusion\",\r\n                \"group_name\": \"通用设计\",\r\n                \"id\": 16,\r\n                \"is_color_enhance\": false,\r\n                \"poster\": \"https://yijian-painting-prod.cdn.bcebos.com/static/styles/style29.png\",\r\n                \"text\": \"蒸汽波\",\r\n                \"value\": \" vaporwave arcade, 4k, ultra realistic, award winning photograph\"\r\n            },\r\n            {\r\n                \"default_guide_scale\": 7.5,\r\n                \"engine\": \"stable_diffusion\",\r\n                \"group_name\": \"通用设计\",\r\n                \"id\": 17,\r\n                \"is_color_enhance\": false,\r\n                \"poster\": \"https://yijian-painting-prod.cdn.bcebos.com/static/styles/style30.png\",\r\n                \"text\": \"印象主义\",\r\n                \"value\": \" in claude monet style\"\r\n            },\r\n            {\r\n                \"default_guide_scale\": 11,\r\n                \"engine\": \"anything4_diffusion\",\r\n                \"group_name\": \"动漫设计\",\r\n                \"id\": 18,\r\n                \"is_color_enhance\": true,\r\n                \"poster\": \"https://yijian-painting-prod.cdn.bcebos.com/static/styles/41.jpg\",\r\n                \"text\": \"新动漫beta-默认\",\r\n                \"value\": \"\"\r\n            },\r\n            {\r\n                \"default_guide_scale\": 11,\r\n                \"engine\": \"anything4_diffusion\",\r\n                \"group_name\": \"动漫设计\",\r\n                \"id\": 19,\r\n                \"is_color_enhance\": true,\r\n                \"poster\": \"https://yijian-painting-prod.cdn.bcebos.com/static/styles/53.jpg\",\r\n                \"text\": \"新动漫beta-动漫线稿\",\r\n                \"value\": \" <lora:animeLineartStyle_v20Offset:1>\"\r\n            },\r\n            {\r\n                \"default_guide_scale\": 11,\r\n                \"engine\": \"anything4_diffusion\",\r\n                \"group_name\": \"动漫设计\",\r\n                \"id\": 20,\r\n                \"is_color_enhance\": true,\r\n                \"poster\": \"https://yijian-painting-prod.cdn.bcebos.com/static/styles/54.jpg\",\r\n                \"text\": \"新动漫beta-gacha女孩\",\r\n                \"value\": \" <lora:gachaSplashLORA_gachaSplashFarShot:0.9>\"\r\n            },\r\n            {\r\n                \"default_guide_scale\": 11,\r\n                \"engine\": \"anything4_diffusion\",\r\n                \"group_name\": \"动漫设计\",\r\n                \"id\": 21,\r\n                \"is_color_enhance\": true,\r\n                \"poster\": \"https://yijian-painting-prod.cdn.bcebos.com/static/styles/55.jpg\",\r\n                \"text\": \"新动漫beta-新海诚\",\r\n                \"value\": \" <lora:makotoShinkaiSubstyles_offset:1>\"\r\n            },\r\n            {\r\n                \"default_guide_scale\": 11,\r\n                \"engine\": \"anything4_diffusion\",\r\n                \"group_name\": \"动漫设计\",\r\n                \"id\": 22,\r\n                \"is_color_enhance\": true,\r\n                \"poster\": \"https://yijian-painting-prod.cdn.bcebos.com/static/styles/59.jpg\",\r\n                \"text\": \"新动漫beta-沁彩\",\r\n                \"value\": \" <lora:Colorwater_v4:0.9>\"\r\n            },\r\n            {\r\n                \"default_guide_scale\": 11,\r\n                \"engine\": \"anything4_diffusion\",\r\n                \"group_name\": \"动漫设计\",\r\n                \"id\": 23,\r\n                \"is_color_enhance\": true,\r\n                \"poster\": \"https://yijian-painting-prod.cdn.bcebos.com/static/styles/60.jpg\",\r\n                \"text\": \"新动漫beta-吉卜力\",\r\n                \"value\": \" <lora:studioGhibliStyle_offset:1>\"\r\n            },\r\n            {\r\n                \"default_guide_scale\": 11,\r\n                \"engine\": \"anything4_diffusion\",\r\n                \"group_name\": \"动漫设计\",\r\n                \"id\": 24,\r\n                \"is_color_enhance\": true,\r\n                \"poster\": \"https://yijian-painting-prod.cdn.bcebos.com/static/styles/61.jpg\",\r\n                \"text\": \"新动漫beta-Q版\",\r\n                \"value\": \" <lora:maplestoryStyle_v20:0.8>\"\r\n            },\r\n            {\r\n                \"default_guide_scale\": 11,\r\n                \"engine\": \"anything4_diffusion\",\r\n                \"group_name\": \"动漫设计\",\r\n                \"id\": 25,\r\n                \"is_color_enhance\": true,\r\n                \"poster\": \"https://yijian-painting-prod.cdn.bcebos.com/static/styles/62.jpg\",\r\n                \"text\": \"新动漫beta-可爱屁\",\r\n                \"value\": \" <lora:cutescrap05v_cutescrap3:0.8>\"\r\n            },\r\n            {\r\n                \"default_guide_scale\": 11,\r\n                \"engine\": \"anything4_diffusion\",\r\n                \"group_name\": \"动漫设计\",\r\n                \"id\": 26,\r\n                \"is_color_enhance\": true,\r\n                \"poster\": \"https://yijian-painting-prod.cdn.bcebos.com/static/styles/66.jpg\",\r\n                \"text\": \"新动漫beta-塔罗牌\",\r\n                \"value\": \" <lora:animeTarotCardArtStyleLora_v20Offset:0.8>\"\r\n            },\r\n            {\r\n                \"default_guide_scale\": 11,\r\n                \"engine\": \"anything4_diffusion\",\r\n                \"group_name\": \"动漫设计\",\r\n                \"id\": 27,\r\n                \"is_color_enhance\": true,\r\n                \"poster\": \"https://yijian-painting-prod.cdn.bcebos.com/static/styles/67.jpg\",\r\n                \"text\": \"新动漫beta-暗夜光影\",\r\n                \"value\": \" <lora:lightAndShadow_v10:0.8>\"\r\n            },\r\n            {\r\n                \"default_guide_scale\": 11,\r\n                \"engine\": \"anything4_diffusion\",\r\n                \"group_name\": \"动漫设计\",\r\n                \"id\": 28,\r\n                \"is_color_enhance\": true,\r\n                \"poster\": \"https://yijian-painting-prod.cdn.bcebos.com/static/styles/68.jpg\",\r\n                \"text\": \"新动漫beta-实用光影\",\r\n                \"value\": \" <lora:sunAndShadow_v10:0.8>\"\r\n            },\r\n            {\r\n                \"default_guide_scale\": 11,\r\n                \"engine\": \"anything4_diffusion\",\r\n                \"group_name\": \"动漫设计\",\r\n                \"id\": 29,\r\n                \"is_color_enhance\": true,\r\n                \"poster\": \"https://yijian-painting-prod.cdn.bcebos.com/static/styles/69.jpg\",\r\n                \"text\": \"新动漫beta-90年代风\",\r\n                \"value\": \" <lora:1990sAnimeStyleLora_1:0.6>\"\r\n            },\r\n            {\r\n                \"default_guide_scale\": 11,\r\n                \"engine\": \"anything4_diffusion\",\r\n                \"group_name\": \"动漫设计\",\r\n                \"id\": 30,\r\n                \"is_color_enhance\": true,\r\n                \"poster\": \"https://yijian-painting-prod.cdn.bcebos.com/static/styles/70.jpg\",\r\n                \"text\": \"新动漫beta-粗线条漫画\",\r\n                \"value\": \" <lora:thickerLinesAnimeStyle_loraVersion:1>\"\r\n            },\r\n            {\r\n                \"default_guide_scale\": 11,\r\n                \"engine\": \"anything4_diffusion\",\r\n                \"group_name\": \"动漫设计\",\r\n                \"id\": 31,\r\n                \"is_color_enhance\": true,\r\n                \"poster\": \"https://yijian-painting-prod.cdn.bcebos.com/static/styles/75.jpg\",\r\n                \"text\": \"新动漫beta-小人书\",\r\n                \"value\": \" <lora:Xiaorenshu_v10:0.9>\"\r\n            },\r\n            {\r\n                \"default_guide_scale\": 11,\r\n                \"engine\": \"anything4_diffusion\",\r\n                \"group_name\": \"动漫设计\",\r\n                \"id\": 32,\r\n                \"is_color_enhance\": true,\r\n                \"poster\": \"https://yijian-painting-prod.cdn.bcebos.com/static/styles/76.jpg\",\r\n                \"text\": \"新动漫beta-中国风\",\r\n                \"value\": \" <lora:loraGuofeng2Lora_v20Lora:0.8>\"\r\n            },\r\n            {\r\n                \"default_guide_scale\": 11,\r\n                \"engine\": \"anything4_diffusion\",\r\n                \"group_name\": \"动漫设计\",\r\n                \"id\": 33,\r\n                \"is_color_enhance\": true,\r\n                \"poster\": \"https://yijian-painting-prod.cdn.bcebos.com/static/styles/103.jpg\",\r\n                \"text\": \"新动漫beta-极简动漫\",\r\n                \"value\": \" <lora:minimalistAnimeStyle_v10:0.9>\"\r\n            },\r\n            {\r\n                \"default_guide_scale\": 11,\r\n                \"engine\": \"anything4_diffusion\",\r\n                \"group_name\": \"动漫设计\",\r\n                \"id\": 34,\r\n                \"is_color_enhance\": true,\r\n                \"poster\": \"https://yijian-painting-prod.cdn.bcebos.com/static/styles/105.jpg\",\r\n                \"text\": \"新动漫beta-彩墨少女\",\r\n                \"value\": \" <lora:quicksketch_v1:1>\"\r\n            },\r\n            {\r\n                \"default_guide_scale\": 11,\r\n                \"engine\": \"counterfeit_diffusion\",\r\n                \"group_name\": \"动漫设计\",\r\n                \"id\": 35,\r\n                \"is_color_enhance\": true,\r\n                \"poster\": \"https://yijian-painting-prod.cdn.bcebos.com/static/styles/79.jpg\",\r\n                \"text\": \"清新动漫-默认\",\r\n                \"value\": \"\"\r\n            },\r\n            {\r\n                \"default_guide_scale\": 11,\r\n                \"engine\": \"counterfeit_diffusion\",\r\n                \"group_name\": \"动漫设计\",\r\n                \"id\": 36,\r\n                \"is_color_enhance\": true,\r\n                \"poster\": \"https://yijian-painting-prod.cdn.bcebos.com/static/styles/80.jpg\",\r\n                \"text\": \"清新动漫-手办\",\r\n                \"value\": \" <lora:figmaAnimeFigures_figma:1>\"\r\n            },\r\n            {\r\n                \"default_guide_scale\": 11,\r\n                \"engine\": \"counterfeit_diffusion\",\r\n                \"group_name\": \"动漫设计\",\r\n                \"id\": 37,\r\n                \"is_color_enhance\": true,\r\n                \"poster\": \"https://yijian-painting-prod.cdn.bcebos.com/static/styles/90.jpg\",\r\n                \"text\": \"清新动漫-轻线条\",\r\n                \"value\": \" <lora:lightlineArtLora_v10:0.6>\"\r\n            },\r\n            {\r\n                \"default_guide_scale\": 11,\r\n                \"engine\": \"counterfeit_diffusion\",\r\n                \"group_name\": \"动漫设计\",\r\n                \"id\": 38,\r\n                \"is_color_enhance\": true,\r\n                \"poster\": \"https://yijian-painting-prod.cdn.bcebos.com/static/styles/54.jpg\",\r\n                \"text\": \"清新动漫-gacha女孩\",\r\n                \"value\": \" <lora:gachaSplashLORA_gachaSplashFarShot:0.9>\"\r\n            },\r\n            {\r\n                \"default_guide_scale\": 11,\r\n                \"engine\": \"counterfeit_diffusion\",\r\n                \"group_name\": \"动漫设计\",\r\n                \"id\": 39,\r\n                \"is_color_enhance\": true,\r\n                \"poster\": \"https://yijian-painting-prod.cdn.bcebos.com/static/styles/110.jpg\",\r\n                \"text\": \"清新动漫-古色古香\",\r\n                \"value\": \" <lora:miaobishenghua_v10:1>\"\r\n            },\r\n            {\r\n                \"default_guide_scale\": 11,\r\n                \"engine\": \"acgn_diffusion\",\r\n                \"group_name\": \"动漫设计\",\r\n                \"id\": 40,\r\n                \"is_color_enhance\": true,\r\n                \"poster\": \"https://yijian-painting-prod.cdn.bcebos.com/static/styles/style23.png\",\r\n                \"text\": \"经典动漫\",\r\n                \"value\": \"\"\r\n            },\r\n            {\r\n                \"default_guide_scale\": 11,\r\n                \"engine\": \"anygen_diffusion\",\r\n                \"group_name\": \"动漫设计\",\r\n                \"id\": 42,\r\n                \"is_color_enhance\": false,\r\n                \"poster\": \"https://yijian-painting-prod.cdn.bcebos.com/static/styles/42.jpg\",\r\n                \"text\": \"2.5D动漫\",\r\n                \"value\": \"\"\r\n            },\r\n            {\r\n                \"default_guide_scale\": 7.5,\r\n                \"engine\": \"protothing_diffusion\",\r\n                \"group_name\": \"动漫设计\",\r\n                \"id\": 43,\r\n                \"is_color_enhance\": true,\r\n                \"poster\": \"https://yijian-painting-prod.cdn.bcebos.com/static/styles/43.jpg\",\r\n                \"text\": \"二次元插画大师\",\r\n                \"value\": \"\"\r\n            },\r\n            {\r\n                \"default_guide_scale\": 11,\r\n                \"engine\": \"colorfulcocktail_diffusion\",\r\n                \"group_name\": \"动漫设计\",\r\n                \"id\": 44,\r\n                \"is_color_enhance\": true,\r\n                \"poster\": \"https://yijian-painting-prod.cdn.bcebos.com/static/styles/44.jpg\",\r\n                \"text\": \"二次元色彩大师\",\r\n                \"value\": \"\"\r\n            },\r\n            {\r\n                \"default_guide_scale\": 7.5,\r\n                \"engine\": \"dalcefo_diffusion\",\r\n                \"group_name\": \"动漫设计\",\r\n                \"id\": 45,\r\n                \"is_color_enhance\": true,\r\n                \"poster\": \"https://yijian-painting-prod.cdn.bcebos.com/static/styles/78.jpg\",\r\n                \"text\": \"平涂动漫\",\r\n                \"value\": \"\"\r\n            },\r\n            {\r\n                \"default_guide_scale\": 7.5,\r\n                \"engine\": \"old_cos_diffusion\",\r\n                \"group_name\": \"动漫设计\",\r\n                \"id\": 46,\r\n                \"is_color_enhance\": true,\r\n                \"poster\": \"https://yijian-painting-prod.cdn.bcebos.com/static/styles/81.jpg\",\r\n                \"text\": \"古早动漫\",\r\n                \"value\": \"\"\r\n            },\r\n            {\r\n                \"default_guide_scale\": 7.5,\r\n                \"engine\": \"colorful_diffusion\",\r\n                \"group_name\": \"动漫设计\",\r\n                \"id\": 47,\r\n                \"is_color_enhance\": true,\r\n                \"poster\": \"https://yijian-painting-prod.cdn.bcebos.com/static/styles/82.jpg\",\r\n                \"text\": \"彩粉动漫\",\r\n                \"value\": \"\"\r\n            },\r\n            {\r\n                \"default_guide_scale\": 7.5,\r\n                \"engine\": \"meina_diffusion\",\r\n                \"group_name\": \"动漫设计\",\r\n                \"id\": 48,\r\n                \"is_color_enhance\": true,\r\n                \"poster\": \"https://yijian-painting-prod.cdn.bcebos.com/static/styles/85.jpg\",\r\n                \"text\": \"2D写实\",\r\n                \"value\": \"\"\r\n            },\r\n            {\r\n                \"default_guide_scale\": 7.5,\r\n                \"engine\": \"best_colorful_diffusion\",\r\n                \"group_name\": \"动漫设计\",\r\n                \"id\": 49,\r\n                \"is_color_enhance\": true,\r\n                \"poster\": \"https://yijian-painting-prod.cdn.bcebos.com/static/styles/120.jpg\",\r\n                \"text\": \"彩粉动漫2\",\r\n                \"value\": \"\"\r\n            },\r\n            {\r\n                \"default_guide_scale\": 7.5,\r\n                \"engine\": \"flat_anime_diffusion\",\r\n                \"group_name\": \"动漫设计\",\r\n                \"id\": 50,\r\n                \"is_color_enhance\": true,\r\n                \"poster\": \"https://yijian-painting-prod.cdn.bcebos.com/static/styles/121.jpg\",\r\n                \"text\": \"平涂动漫2\",\r\n                \"value\": \"\"\r\n            },\r\n            {\r\n                \"default_guide_scale\": 7.5,\r\n                \"engine\": \"meiman_diffusion\",\r\n                \"group_name\": \"动漫设计\",\r\n                \"id\": 51,\r\n                \"is_color_enhance\": true,\r\n                \"poster\": \"https://yijian-painting-prod.cdn.bcebos.com/static/styles/122.jpg\",\r\n                \"text\": \"欧美动漫\",\r\n                \"value\": \"\"\r\n            },\r\n            {\r\n                \"default_guide_scale\": 7.5,\r\n                \"engine\": \"Gf_style2_diffusion\",\r\n                \"group_name\": \"现实设计\",\r\n                \"id\": 52,\r\n                \"is_color_enhance\": false,\r\n                \"poster\": \"https://yijian-painting-prod.cdn.bcebos.com/static/styles/47.jpg\",\r\n                \"text\": \"国风-默认\",\r\n                \"value\": \"\"\r\n            },\r\n            {\r\n                \"default_guide_scale\": 7.5,\r\n                \"engine\": \"Gf_style2_diffusion\",\r\n                \"group_name\": \"现实设计\",\r\n                \"id\": 53,\r\n                \"is_color_enhance\": false,\r\n                \"poster\": \"https://yijian-painting-prod.cdn.bcebos.com/static/styles/63.jpg\",\r\n                \"text\": \"国风-彩色水墨\",\r\n                \"value\": \" <lora:Moxin_10:0.8>\"\r\n            },\r\n            {\r\n                \"default_guide_scale\": 7.5,\r\n                \"engine\": \"Gf_style2_diffusion\",\r\n                \"group_name\": \"现实设计\",\r\n                \"id\": 54,\r\n                \"is_color_enhance\": false,\r\n                \"poster\": \"https://yijian-painting-prod.cdn.bcebos.com/static/styles/64.jpg\",\r\n                \"text\": \"国风-留白水墨\",\r\n                \"value\": \" <lora:Moxin_Shukezouma11:0.7><lora:Moxin_10:0.8>\"\r\n            },\r\n            {\r\n                \"default_guide_scale\": 7.5,\r\n                \"engine\": \"Gf_style2_diffusion\",\r\n                \"group_name\": \"现实设计\",\r\n                \"id\": 55,\r\n                \"is_color_enhance\": false,\r\n                \"poster\": \"https://yijian-painting-prod.cdn.bcebos.com/static/styles/71.jpg\",\r\n                \"text\": \"国风-三国风\",\r\n                \"value\": \" <lora:Sanguo_v099:1>\"\r\n            },\r\n            {\r\n                \"default_guide_scale\": 7.5,\r\n                \"engine\": \"lora_cod_diffusion\",\r\n                \"group_name\": \"现实设计\",\r\n                \"id\": 56,\r\n                \"is_color_enhance\": false,\r\n                \"poster\": \"https://yijian-painting-prod.cdn.bcebos.com/static/styles/49.jpg\",\r\n                \"text\": \"Doll模型-默认\",\r\n                \"value\": \"\"\r\n            },\r\n            {\r\n                \"default_guide_scale\": 7.5,\r\n                \"engine\": \"lora_cod_diffusion\",\r\n                \"group_name\": \"现实设计\",\r\n                \"id\": 57,\r\n                \"is_color_enhance\": false,\r\n                \"poster\": \"https://yijian-painting-prod.cdn.bcebos.com/static/styles/50.jpg\",\r\n                \"text\": \"Doll模型-韩系女生1\",\r\n                \"value\": \" <lora:koreanDollLikeness_v10:0.66>\"\r\n            },\r\n            {\r\n                \"default_guide_scale\": 7.5,\r\n                \"engine\": \"lora_cod_diffusion\",\r\n                \"group_name\": \"现实设计\",\r\n                \"id\": 58,\r\n                \"is_color_enhance\": false,\r\n                \"poster\": \"https://yijian-painting-prod.cdn.bcebos.com/static/styles/52.jpg\",\r\n                \"text\": \"Doll模型-韩系女生2\",\r\n                \"value\": \" <lora:koreanDollLikeness_v15:0.66>\"\r\n            },\r\n            {\r\n                \"default_guide_scale\": 7.5,\r\n                \"engine\": \"lora_cod_diffusion\",\r\n                \"group_name\": \"现实设计\",\r\n                \"id\": 59,\r\n                \"is_color_enhance\": false,\r\n                \"poster\": \"https://yijian-painting-prod.cdn.bcebos.com/static/styles/56.jpg\",\r\n                \"text\": \"Doll模型-汉服风\",\r\n                \"value\": \" <lora:hanfu_v28:1><lora:shojovibe_v11:0.6>\"\r\n            },\r\n            {\r\n                \"default_guide_scale\": 7.5,\r\n                \"engine\": \"lora_cod_diffusion\",\r\n                \"group_name\": \"现实设计\",\r\n                \"id\": 60,\r\n                \"is_color_enhance\": false,\r\n                \"poster\": \"https://yijian-painting-prod.cdn.bcebos.com/static/styles/106.jpg\",\r\n                \"text\": \"Doll模型-汉服风(宋)\",\r\n                \"value\": \" <lora:japaneseDollLikeness_v10:0.3><lora:cuteGirlMix4_v10:0.7><lora:hanfu_v29:0.8>hanfu, song style outfits, song hanfu, \"\r\n            },\r\n            {\r\n                \"default_guide_scale\": 7.5,\r\n                \"engine\": \"lora_cod_diffusion\",\r\n                \"group_name\": \"现实设计\",\r\n                \"id\": 61,\r\n                \"is_color_enhance\": false,\r\n                \"poster\": \"https://yijian-painting-prod.cdn.bcebos.com/static/styles/106.jpg\",\r\n                \"text\": \"Doll模型-汉服风(宋)\",\r\n                \"value\": \" <lora:japaneseDollLikeness_v10:0.3><lora:cuteGirlMix4_v10:0.7><lora:hanfu_v29:0.8>hanfu, song style outfits, song hanfu, \"\r\n            },\r\n            {\r\n                \"default_guide_scale\": 7.5,\r\n                \"engine\": \"lora_cod_diffusion\",\r\n                \"group_name\": \"现实设计\",\r\n                \"id\": 62,\r\n                \"is_color_enhance\": false,\r\n                \"poster\": \"https://yijian-painting-prod.cdn.bcebos.com/static/styles/107.jpg\",\r\n                \"text\": \"Doll模型-汉服风(唐)\",\r\n                \"value\": \" <lora:japaneseDollLikeness_v10:0.3><lora:cuteGirlMix4_v10:0.7><lora:hanfu_v29:0.8>hanfu, tang style outfits, tang hanfu, \"\r\n            },\r\n            {\r\n                \"default_guide_scale\": 7.5,\r\n                \"engine\": \"lora_cod_diffusion\",\r\n                \"group_name\": \"现实设计\",\r\n                \"id\": 63,\r\n                \"is_color_enhance\": false,\r\n                \"poster\": \"https://yijian-painting-prod.cdn.bcebos.com/static/styles/108.jpg\",\r\n                \"text\": \"Doll模型-汉服风(明)\",\r\n                \"value\": \" <lora:japaneseDollLikeness_v10:0.3><lora:cuteGirlMix4_v10:0.7><lora:hanfu_v29:0.8>hanfu, ming style outfits, ming hanfu, \"\r\n            },\r\n            {\r\n                \"default_guide_scale\": 7.5,\r\n                \"engine\": \"lora_cod_diffusion\",\r\n                \"group_name\": \"现实设计\",\r\n                \"id\": 64,\r\n                \"is_color_enhance\": false,\r\n                \"poster\": \"https://yijian-painting-prod.cdn.bcebos.com/static/styles/109.jpg\",\r\n                \"text\": \"Doll模型-汉服风(汉)\",\r\n                \"value\": \" <lora:japaneseDollLikeness_v10:0.3><lora:cuteGirlMix4_v10:0.7><lora:hanfu_v29:0.8>hanfu, han style outfits, han hanfu, \"\r\n            },\r\n            {\r\n                \"default_guide_scale\": 7.5,\r\n                \"engine\": \"lora_cod_diffusion\",\r\n                \"group_name\": \"现实设计\",\r\n                \"id\": 65,\r\n                \"is_color_enhance\": false,\r\n                \"poster\": \"https://yijian-painting-prod.cdn.bcebos.com/static/styles/57.jpg\",\r\n                \"text\": \"Doll模型-时尚女生\",\r\n                \"value\": \" <lora:fashionGirl_v50:0.6>\"\r\n            },\r\n            {\r\n                \"default_guide_scale\": 7.5,\r\n                \"engine\": \"lora_cod_diffusion\",\r\n                \"group_name\": \"现实设计\",\r\n                \"id\": 66,\r\n                \"is_color_enhance\": false,\r\n                \"poster\": \"https://yijian-painting-prod.cdn.bcebos.com/static/styles/58.jpg\",\r\n                \"text\": \"Doll模型-可爱女生\",\r\n                \"value\": \" <lora:cuteGirlMix4_v10:0.5>\"\r\n            },\r\n            {\r\n                \"default_guide_scale\": 7.5,\r\n                \"engine\": \"lora_cod_diffusion\",\r\n                \"group_name\": \"现实设计\",\r\n                \"id\": 67,\r\n                \"is_color_enhance\": false,\r\n                \"poster\": \"https://yijian-painting-prod.cdn.bcebos.com/static/styles/104.jpg\",\r\n                \"text\": \"Doll模型-梦幻少女\",\r\n                \"value\": \" <lora:dreamyGirlsFace_dreamyFace:0.6>\"\r\n            },\r\n            {\r\n                \"default_guide_scale\": 7.5,\r\n                \"engine\": \"lora_cod_diffusion\",\r\n                \"group_name\": \"现实设计\",\r\n                \"id\": 68,\r\n                \"is_color_enhance\": false,\r\n                \"poster\": \"https://yijian-painting-prod.cdn.bcebos.com/static/styles/73.jpg\",\r\n                \"text\": \"Doll模型-铅笔裙\",\r\n                \"value\": \" <lora:hauteCouturePencil_v10:0.7><lora:koreanDollLikeness_v15:0.3>\"\r\n            },\r\n            {\r\n                \"default_guide_scale\": 7.5,\r\n                \"engine\": \"lora_cod_diffusion\",\r\n                \"group_name\": \"现实设计\",\r\n                \"id\": 69,\r\n                \"is_color_enhance\": false,\r\n                \"poster\": \"https://yijian-painting-prod.cdn.bcebos.com/static/styles/74.jpg\",\r\n                \"text\": \"Doll模型-旗袍\",\r\n                \"value\": \" <lora:qipao_8:0.6><lora:zhouzhou_zsyV10:0.4><lora:koreanDollLikeness_v15:0.4>\"\r\n            },\r\n            {\r\n                \"default_guide_scale\": 7.5,\r\n                \"engine\": \"lora_cod_diffusion\",\r\n                \"group_name\": \"现实设计\",\r\n                \"id\": 70,\r\n                \"is_color_enhance\": false,\r\n                \"poster\": \"https://yijian-painting-prod.cdn.bcebos.com/static/styles/77.jpg\",\r\n                \"text\": \"Doll模型-国风\",\r\n                \"value\": \" <lora:loraGuofeng2Lora_v20Lora:1.6>\"\r\n            },\r\n            {\r\n                \"default_guide_scale\": 7.5,\r\n                \"engine\": \"lora_cod_diffusion\",\r\n                \"group_name\": \"现实设计\",\r\n                \"id\": 71,\r\n                \"is_color_enhance\": false,\r\n                \"poster\": \"https://yijian-painting-prod.cdn.bcebos.com/static/styles/100.jpg\",\r\n                \"text\": \"Doll模型-正装少女\",\r\n                \"value\": \" <lora:recruitSuit_recsuitVer:1><lora:cuteGirlMix4_v10:0.4>\"\r\n            },\r\n            {\r\n                \"default_guide_scale\": 7.5,\r\n                \"engine\": \"lora_cod_diffusion\",\r\n                \"group_name\": \"现实设计\",\r\n                \"id\": 72,\r\n                \"is_color_enhance\": false,\r\n                \"poster\": \"https://yijian-painting-prod.cdn.bcebos.com/static/styles/111.jpg\",\r\n                \"text\": \"Doll模型-礼服新娘\",\r\n                \"value\": \" <lora:chineseGirlsInWeddingDressOrHakamaOrHanfuInMarvellousScene_v01:0.9>\"\r\n            },\r\n            {\r\n                \"default_guide_scale\": 7.5,\r\n                \"engine\": \"lucky_real_diffusion\",\r\n                \"group_name\": \"现实设计\",\r\n                \"id\": 73,\r\n                \"is_color_enhance\": false,\r\n                \"poster\": \"https://yijian-painting-prod.cdn.bcebos.com/static/styles/83.jpg\",\r\n                \"text\": \"新Doll模型-默认\",\r\n                \"value\": \"\"\r\n            },\r\n            {\r\n                \"default_guide_scale\": 7.5,\r\n                \"engine\": \"lucky_real_diffusion\",\r\n                \"group_name\": \"现实设计\",\r\n                \"id\": 74,\r\n                \"is_color_enhance\": false,\r\n                \"poster\": \"https://yijian-painting-prod.cdn.bcebos.com/static/styles/50.jpg\",\r\n                \"text\": \"新Doll模型-韩系女生1\",\r\n                \"value\": \" <lora:koreanDollLikeness_v10:0.66>\"\r\n            },\r\n            {\r\n                \"default_guide_scale\": 7.5,\r\n                \"engine\": \"lucky_real_diffusion\",\r\n                \"group_name\": \"现实设计\",\r\n                \"id\": 75,\r\n                \"is_color_enhance\": false,\r\n                \"poster\": \"https://yijian-painting-prod.cdn.bcebos.com/static/styles/52.jpg\",\r\n                \"text\": \"新Doll模型-韩系女生2\",\r\n                \"value\": \" <lora:koreanDollLikeness_v15:0.66>\"\r\n            },\r\n            {\r\n                \"default_guide_scale\": 7.5,\r\n                \"engine\": \"lucky_real_diffusion\",\r\n                \"group_name\": \"现实设计\",\r\n                \"id\": 76,\r\n                \"is_color_enhance\": false,\r\n                \"poster\": \"https://yijian-painting-prod.cdn.bcebos.com/static/styles/51.jpg\",\r\n                \"text\": \"新Doll模型-日系女生\",\r\n                \"value\": \" <lora:japaneseDollLikeness_v10:0.66>\"\r\n            },\r\n            {\r\n                \"default_guide_scale\": 7.5,\r\n                \"engine\": \"lucky_real_diffusion\",\r\n                \"group_name\": \"现实设计\",\r\n                \"id\": 77,\r\n                \"is_color_enhance\": false,\r\n                \"poster\": \"https://yijian-painting-prod.cdn.bcebos.com/static/styles/57.jpg\",\r\n                \"text\": \"新Doll模型-时尚女生\",\r\n                \"value\": \" <lora:fashionGirl_v50:0.5>\"\r\n            },\r\n            {\r\n                \"default_guide_scale\": 7.5,\r\n                \"engine\": \"lucky_real_diffusion\",\r\n                \"group_name\": \"现实设计\",\r\n                \"id\": 78,\r\n                \"is_color_enhance\": false,\r\n                \"poster\": \"https://yijian-painting-prod.cdn.bcebos.com/static/styles/84.jpg\",\r\n                \"text\": \"新Doll模型-乡村女生\",\r\n                \"value\": \" <lora:villageGirlCungu_v12:0.6>\"\r\n            },\r\n            {\r\n                \"default_guide_scale\": 7.5,\r\n                \"engine\": \"lucky_real_diffusion\",\r\n                \"group_name\": \"现实设计\",\r\n                \"id\": 79,\r\n                \"is_color_enhance\": false,\r\n                \"poster\": \"https://yijian-painting-prod.cdn.bcebos.com/static/styles/86.jpg\",\r\n                \"text\": \"新Doll模型-气质女生\",\r\n                \"value\": \" <lora:aiBeautyIthlinni_ithlinniV1:0.5>\"\r\n            },\r\n            {\r\n                \"default_guide_scale\": 7.5,\r\n                \"engine\": \"lucky_real_diffusion\",\r\n                \"group_name\": \"现实设计\",\r\n                \"id\": 80,\r\n                \"is_color_enhance\": false,\r\n                \"poster\": \"https://yijian-painting-prod.cdn.bcebos.com/static/styles/58.jpg\",\r\n                \"text\": \"新Doll模型-可爱女生\",\r\n                \"value\": \" <lora:cuteGirlMix4_v10:0.5>\"\r\n            },\r\n            {\r\n                \"default_guide_scale\": 7.5,\r\n                \"engine\": \"lucky_real_diffusion\",\r\n                \"group_name\": \"现实设计\",\r\n                \"id\": 81,\r\n                \"is_color_enhance\": false,\r\n                \"poster\": \"https://yijian-painting-prod.cdn.bcebos.com/static/styles/87.jpg\",\r\n                \"text\": \"新Doll模型-精致女生\",\r\n                \"value\": \" <lora:tifosemix_v1064s:0.6>\"\r\n            },\r\n            {\r\n                \"default_guide_scale\": 7.5,\r\n                \"engine\": \"lucky_real_diffusion\",\r\n                \"group_name\": \"现实设计\",\r\n                \"id\": 82,\r\n                \"is_color_enhance\": false,\r\n                \"poster\": \"https://yijian-painting-prod.cdn.bcebos.com/static/styles/65.jpg\",\r\n                \"text\": \"新Doll模型-美丽少女\",\r\n                \"value\": \" <lora:shojovibe_v11:0.6>\"\r\n            },\r\n            {\r\n                \"default_guide_scale\": 7.5,\r\n                \"engine\": \"lucky_real_diffusion\",\r\n                \"group_name\": \"现实设计\",\r\n                \"id\": 83,\r\n                \"is_color_enhance\": false,\r\n                \"poster\": \"https://yijian-painting-prod.cdn.bcebos.com/static/styles/100.jpg\",\r\n                \"text\": \"新Doll模型-正装少女\",\r\n                \"value\": \" <lora:recruitSuit_recsuitVer:1><lora:shojovibe_v11:0.7>\"\r\n            },\r\n            {\r\n                \"default_guide_scale\": 7.5,\r\n                \"engine\": \"lucky_real_diffusion\",\r\n                \"group_name\": \"现实设计\",\r\n                \"id\": 84,\r\n                \"is_color_enhance\": false,\r\n                \"poster\": \"https://yijian-painting-prod.cdn.bcebos.com/static/styles/104.jpg\",\r\n                \"text\": \"新Doll模型-梦幻少女\",\r\n                \"value\": \" <lora:dreamyGirlsFace_dreamyFace:0.6>\"\r\n            },\r\n            {\r\n                \"default_guide_scale\": 7.5,\r\n                \"engine\": \"lucky_real_diffusion\",\r\n                \"group_name\": \"现实设计\",\r\n                \"id\": 85,\r\n                \"is_color_enhance\": false,\r\n                \"poster\": \"https://yijian-painting-prod.cdn.bcebos.com/static/styles/73.jpg\",\r\n                \"text\": \"新Doll模型-铅笔裙\",\r\n                \"value\": \" <lora:hauteCouturePencil_v10:0.7><lora:koreanDollLikeness_v15:0.3>\"\r\n            },\r\n            {\r\n                \"default_guide_scale\": 11,\r\n                \"engine\": \"goodAsianGirlFaceV10_diffusion\",\r\n                \"group_name\": \"现实设计\",\r\n                \"id\": 86,\r\n                \"is_color_enhance\": false,\r\n                \"poster\": \"https://yijian-painting-prod.cdn.bcebos.com/static/styles/46.jpg\",\r\n                \"text\": \"真实人像\",\r\n                \"value\": \"\"\r\n            },\r\n            {\r\n                \"default_guide_scale\": 7.5,\r\n                \"engine\": \"photoreal_engine\",\r\n                \"group_name\": \"现实设计\",\r\n                \"id\": 87,\r\n                \"is_color_enhance\": false,\r\n                \"poster\": \"https://yijian-painting-prod.cdn.bcebos.com/static/styles/style27.png\",\r\n                \"text\": \"真实感照片\",\r\n                \"value\": \"\"\r\n            },\r\n            {\r\n                \"default_guide_scale\": 7.5,\r\n                \"engine\": \"pvc_diffusion\",\r\n                \"group_name\": \"现实设计\",\r\n                \"id\": 88,\r\n                \"is_color_enhance\": false,\r\n                \"poster\": \"https://yijian-painting-prod.cdn.bcebos.com/static/styles/123.jpg\",\r\n                \"text\": \"手办\",\r\n                \"value\": \"\"\r\n            }\r\n        ],\r\n        \"systemPrompts\": [\r\n            {\r\n                \"artist_id\": \"0\",\r\n                \"engine_id\": \"3\",\r\n                \"text\": \"水晶球城堡\",\r\n                \"value\": \"水晶球里的彩色魔法城堡\"\r\n            },\r\n            {\r\n                \"artist_id\": \"0\",\r\n                \"engine_id\": \"2\",\r\n                \"text\": \"美貌少年\",\r\n                \"value\": \"顶级打光, 仙境, 云朵, 飞鸟, boy, 少年, 正太, 可爱的脸, 金色瞳孔, 白色短发, 华丽的耳钉, 面无表情, 最高画质, 大师之作, 杰作, 惊艳, 美貌, 凌乱的发丝, 大师之作, 细致的脸部描写, 扑克牌, 美人痣, 异色瞳\"\r\n            },\r\n            {\r\n                \"artist_id\": \"0\",\r\n                \"engine_id\": \"3\",\r\n                \"text\": \"壮丽的树\",\r\n                \"value\": \"Magnificent tree,seen from a distance,science fiction,Holy terror,mystery,fantasy,sense of technology,unreal engine,metallic texture,Volume light,Look up,colorful,Super wide angle,magnificent,great spectacle,by Raphael Lacoste\"\r\n            },\r\n            {\r\n                \"artist_id\": \"0\",\r\n                \"engine_id\": \"3\",\r\n                \"text\": \"半机械马\",\r\n                \"value\": \"Realistic portrait beautiful detailed matte painting of  cinematic movie scene jet li mutate into cyborg  horse. horror, created by gustave dore and greg  rutkowski, high detailed, smooth draw, synthwave  neon retro, intricate, realistic proportions, dramatic  lighting, trending on artstation.\"\r\n            },\r\n            {\r\n                \"artist_id\": \"5\",\r\n                \"engine_id\": \"0\",\r\n                \"text\": \"星空\",\r\n                \"value\": \"星空\"\r\n            },\r\n            {\r\n                \"artist_id\": \"0\",\r\n                \"engine_id\": \"4\",\r\n                \"text\": \"蓝色人种\",\r\n                \"value\": \"Portrait of a blue skin genasi with a square jaw from d & d by greg rutkowski, dreadlocks and small beard, tempest priest, runic rings, d & d character, blue, black background, highly detailed portrait, digital painting, artstation, concept art, smooth, sharp foccus ilustration, artstation hq\"\r\n            },\r\n            {\r\n                \"artist_id\": \"0\",\r\n                \"engine_id\": \"4\",\r\n                \"text\": \"小兔子\",\r\n                \"value\": \"Portrait of a super cute bunny, a carrot, pixar, zootopia, cgi, blade runner. trending on artstation\"\r\n            },\r\n            {\r\n                \"artist_id\": \"0\",\r\n                \"engine_id\": \"4\",\r\n                \"text\": \"星际狐狸\",\r\n                \"value\": \"Underwater steampunk biopunk portrait of fox mccloud from star fox ( 1 9 9 3 ), hyper detailed, digital art, trending in artstation, cinematic lighting, studio quality, smooth render, unreal engine 5 rendered, octane rendered, art style by klimt and nixeu and ian sprigger and wlop and krenz cushart.\"\r\n            },\r\n            {\r\n                \"artist_id\": \"0\",\r\n                \"engine_id\": \"3\",\r\n                \"text\": \"雄狮\",\r\n                \"value\": \"A male anthro muscular albino lion\'s face breaching through a wall of water, headshot, water sprites, splashing, deep blue ocean, highly detailed, realistic digital art, trending on artstation, character design by charlie bowater, ross tran, artgerm, and makoto shinkai, detailed, inked, western comic book art, 2021 award winning painting\"\r\n            },\r\n            {\r\n                \"artist_id\": \"0\",\r\n                \"engine_id\": \"16\",\r\n                \"text\": \"月下独舞\",\r\n                \"value\": \"An emotional concept painting of a cyberpunk  android dancing in the moonlight, neon signs, empty  city, large detailed moon, concept painting by  raymond swanland and ruan jia and greg rutkowski\"\r\n            },\r\n            {\r\n                \"artist_id\": \"0\",\r\n                \"engine_id\": \"0\",\r\n                \"text\": \"寺庙&云彩\",\r\n                \"value\": \"Overlooking brilliant temples,journey to the west,lakes,clouds and sun,fairy tales,light effects,fantasy,SAMUEL BEAL,abhimanyu bhadauria,artstation,colorful\"\r\n            },\r\n            {\r\n                \"artist_id\": \"0\",\r\n                \"engine_id\": \"3\",\r\n                \"text\": \"老骑士\",\r\n                \"value\": \"Portrait of an old knight with a large moustache, male, detailed face, fantasy, highly detailed, cinematic lighting, digital art painting by greg rutkowski\"\r\n            },\r\n            {\r\n                \"artist_id\": \"0\",\r\n                \"engine_id\": \"0\",\r\n                \"text\": \"中国城堡&桃花树\",\r\n                \"value\": \"A beautiful painting of Chinese fairyland full of peach blossom trees and Chinese castles, cloudy and foggy by Makoto Shinkai\"\r\n            },\r\n            {\r\n                \"artist_id\": \"0\",\r\n                \"engine_id\": \"2\",\r\n                \"text\": \"未来古城\",\r\n                \"value\": \"Evil robot attacking feudal japan city, moody sky, dramatic lighting, painted by james jean and wayne barlowe and moebius, high details, cinematic, denoised, octane render, fog, spooky, cgsociety 8k\"\r\n            },\r\n            {\r\n                \"artist_id\": \"0\",\r\n                \"engine_id\": \"3\",\r\n                \"text\": \"动画都市\",\r\n                \"value\": \"A japanese city near the sea, lofi, dreamy, moody, very colorful, anime inspiration, makoto shinkai, ghibli vibe\"\r\n            },\r\n            {\r\n                \"artist_id\": \"0\",\r\n                \"engine_id\": \"16\",\r\n                \"text\": \"赛博朋克都市\",\r\n                \"value\": \"Very detailed masterpiece painting of a busy  cyberpunk city street, portrait, artstation, concept art  by greg rutkowski\"\r\n            },\r\n            {\r\n                \"artist_id\": \"0\",\r\n                \"engine_id\": \"3\",\r\n                \"text\": \"灰狼肖像\",\r\n                \"value\": \"Portrait of a gray wolf, wolf face, intricate, elegant,  highly detailed, digital painting, artstation, concept  art, smooth, sharp focus, illustration, art by krenz  cushart and artem demura and alphonse mucha\"\r\n            },\r\n            {\r\n                \"artist_id\": \"0\",\r\n                \"engine_id\": \"2\",\r\n                \"text\": \"大教堂\",\r\n                \"value\": \"arch,architecture,book_stack,bookshelf,building,candle,chandelier,city,city_lights,cityscape,copyright_name,fire,indoors,library,lantern,skyscraper,standing,sunset,clock,gears,butterfly,window,cinematic, epic composition,no_humans,scenery,detailed, atmospheric, artstation trending\"\r\n            },\r\n            {\r\n                \"artist_id\": \"0\",\r\n                \"engine_id\": \"2\",\r\n                \"text\": \"海底世界\",\r\n                \"value\": \"A beautiful matte digital painting of a light-green sea turtle swimming over an red-orange coral reef through blue-violet waters, triadic color palette, painted in the style of national geographic, trending on artstation hq\"\r\n            },\r\n            {\r\n                \"artist_id\": \"0\",\r\n                \"engine_id\": \"2\",\r\n                \"text\": \"故乡的原野\",\r\n                \"value\": \"Anime screenshot wide-shot landscape with house in the apple garden, beautiful ambiance, golden hour, studio ghibli style, by hayao miyazaki, highly detailed\"\r\n            }\r\n        ]\r\n    }\r\n}');

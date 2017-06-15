/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50168
Source Host           : localhost:3306
Source Database       : easygo

Target Server Type    : MYSQL
Target Server Version : 50168
File Encoding         : 65001

Date: 2017-06-15 18:15:49
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for administrator
-- ----------------------------
DROP TABLE IF EXISTS `administrator`;
CREATE TABLE `administrator` (
  `adm_id` int(11) NOT NULL AUTO_INCREMENT COMMENT '管理员id',
  `adm_username` varchar(255) NOT NULL COMMENT '管理员名',
  `adm_name` varchar(255) NOT NULL COMMENT '管理员真实姓名',
  `adm_password` varchar(255) NOT NULL COMMENT '管理员密码',
  `adm_phone` varchar(20) DEFAULT NULL COMMENT '管理员电话',
  `adm_sex` varchar(4) DEFAULT NULL COMMENT '管理员性别',
  `adm_status` varchar(255) DEFAULT '0' COMMENT '管理员权限',
  `adm_date` date DEFAULT NULL COMMENT '添加管理员时间',
  `adm_email` varchar(255) DEFAULT NULL COMMENT '邮箱',
  PRIMARY KEY (`adm_id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of administrator
-- ----------------------------
INSERT INTO `administrator` VALUES ('11', 'admin1', 'admin1', 'admin', '1231231', null, '0', '2017-05-23', '123@qq.com');
INSERT INTO `administrator` VALUES ('15', 'admin', 'admin', 'admin', '123123', null, '1', '2017-05-25', 'admin@qq.com');

-- ----------------------------
-- Table structure for comment
-- ----------------------------
DROP TABLE IF EXISTS `comment`;
CREATE TABLE `comment` (
  `inf_id` int(11) NOT NULL COMMENT '车的id',
  `com_id` int(11) NOT NULL AUTO_INCREMENT COMMENT '评论id',
  `user_id` int(11) NOT NULL COMMENT '该用户id',
  `com_content` text COMMENT '评论内容',
  `com_username` varchar(255) DEFAULT NULL COMMENT '评论的用户名',
  `com_publish` datetime DEFAULT NULL COMMENT '评论发出时间',
  `com_introduce` text COMMENT '留言简介',
  PRIMARY KEY (`com_id`,`user_id`,`inf_id`),
  KEY `inf_id` (`inf_id`),
  KEY `fk2_userId` (`user_id`),
  CONSTRAINT `fk2_userId` FOREIGN KEY (`user_id`) REFERENCES `usertab` (`user_id`) ON DELETE NO ACTION ON UPDATE CASCADE,
  CONSTRAINT `fk_infId` FOREIGN KEY (`inf_id`) REFERENCES `information` (`inf_id`) ON DELETE NO ACTION ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of comment
-- ----------------------------

-- ----------------------------
-- Table structure for indent
-- ----------------------------
DROP TABLE IF EXISTS `indent`;
CREATE TABLE `indent` (
  `ind_id` int(11) unsigned zerofill NOT NULL AUTO_INCREMENT COMMENT '订单id',
  `ind_user_id` int(11) NOT NULL COMMENT '该用户id',
  `ind_inf_id` int(11) NOT NULL COMMENT '所租车的id',
  `ind_startdate` date DEFAULT NULL COMMENT '租车日期',
  `ind_enddate` date DEFAULT NULL COMMENT '交车日期',
  `ind_day` varchar(10) DEFAULT NULL COMMENT '租期',
  `ind_insurance` decimal(10,0) DEFAULT '0' COMMENT '保险费',
  `ind_originalprice` decimal(10,0) DEFAULT NULL COMMENT '原始金额',
  `ind_currentprice` decimal(10,0) DEFAULT NULL COMMENT '花费金额',
  `ind_state` varchar(255) DEFAULT NULL COMMENT '订单状态',
  `ind_type` varchar(255) DEFAULT NULL COMMENT '订单类型',
  `ind_pay` varchar(255) DEFAULT '否' COMMENT '是否付款',
  `ind_return` varchar(255) DEFAULT NULL COMMENT '是否归还',
  `ind_get` varchar(255) DEFAULT '未领取' COMMENT '是否领取收益',
  PRIMARY KEY (`ind_id`,`ind_user_id`,`ind_inf_id`),
  KEY `fk_ind_userId` (`ind_user_id`),
  KEY `fk_ind_infId` (`ind_inf_id`),
  CONSTRAINT `fk_ind_infId` FOREIGN KEY (`ind_inf_id`) REFERENCES `information` (`inf_id`) ON DELETE NO ACTION ON UPDATE CASCADE,
  CONSTRAINT `fk_ind_userId` FOREIGN KEY (`ind_user_id`) REFERENCES `usertab` (`user_id`) ON DELETE NO ACTION ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of indent
-- ----------------------------
INSERT INTO `indent` VALUES ('00000000015', '6', '4', '2017-06-08', '2017-06-18', '10', null, '34000', null, '租赁中', '普通订单', '是', '否', '未领取');
INSERT INTO `indent` VALUES ('00000000016', '6', '3', '2017-06-08', '2017-06-28', '20', '0', '44400', null, null, null, '否', null, '未领取');
INSERT INTO `indent` VALUES ('00000000017', '6', '3', '2017-06-09', '2017-06-16', '7', '0', '15000', null, null, null, '否', null, '未领取');
INSERT INTO `indent` VALUES ('00000000018', '6', '3', '2017-06-09', '2017-06-16', '7', '0', '15000', null, null, null, '否', null, '未领取');
INSERT INTO `indent` VALUES ('00000000019', '1', '2', '2017-06-13', '2017-06-20', '7', null, '20000', null, '已完成', '活动订单', '是', '是', '已领取');
INSERT INTO `indent` VALUES ('00000000020', '1', '3', '2017-06-12', '2017-06-19', '7', null, '15000', null, '租赁中', '活动订单', '是', '否', '未领取');
INSERT INTO `indent` VALUES ('00000000021', '6', '2', '2017-06-14', '2017-06-21', '7', '0', '20000', null, null, null, '否', null, '未领取');
INSERT INTO `indent` VALUES ('00000000022', '1', '2', '2017-06-14', '2017-06-21', '7', '0', '20000', null, null, null, '否', null, '未领取');
INSERT INTO `indent` VALUES ('00000000023', '1', '2', '2017-06-15', '2017-07-05', '20', '0', '58000', null, null, null, '否', null, '未领取');
INSERT INTO `indent` VALUES ('00000000024', '1', '8', '2017-06-14', '2017-07-04', '20', null, '12800', null, '租赁中', '活动订单', '是', '否', '未领取');
INSERT INTO `indent` VALUES ('00000000025', '1', '8', '2017-05-31', '2017-06-07', '7', '0', '4000', null, '待支付', null, '否', null, '未领取');
INSERT INTO `indent` VALUES ('00000000026', '1', '8', '2017-06-21', '2017-06-28', '7', null, '4000', null, '已完成', '活动订单', '是', '是', '已领取');
INSERT INTO `indent` VALUES ('00000000027', '1', '2', '2017-06-01', '2017-06-08', '7', null, '20000', null, '已完成', '活动订单', '是', '是', '已领取');
INSERT INTO `indent` VALUES ('00000000028', '1', '8', '2017-06-15', '2017-06-22', '7', '0', '4000', null, '待支付', null, '否', null, '未领取');
INSERT INTO `indent` VALUES ('00000000029', '1', '8', '2017-06-14', '2017-06-21', '7', '200', '4000', '4500', '已完成', '普通订单', '是', '是', '已领取');
INSERT INTO `indent` VALUES ('00000000030', '1', '8', '2017-06-16', '2017-07-16', '30', '800', '16000', '18300', '已完成', '普通订单', '是', '是', '已领取');
INSERT INTO `indent` VALUES ('00000000031', '6', '8', '2017-06-15', '2017-06-22', '7', '200', '4000', '4500', '已完成', '普通订单', '是', '是', '已领取');
INSERT INTO `indent` VALUES ('00000000032', '6', '8', '2017-06-15', '2017-06-22', '7', '200', '3680', '4180', '租赁中', '普通订单', '是', '否', '未领取');

-- ----------------------------
-- Table structure for information
-- ----------------------------
DROP TABLE IF EXISTS `information`;
CREATE TABLE `information` (
  `inf_id` int(11) NOT NULL AUTO_INCREMENT COMMENT '信息id(汽车id)',
  `inf_user_id` int(11) NOT NULL COMMENT '车主id',
  `inf_introduce` text COMMENT '座驾描述',
  `inf_carnumber` varchar(255) DEFAULT '无' COMMENT '车牌号',
  `inf_province` varchar(255) DEFAULT '无' COMMENT '所在省（市）',
  `inf_city` varchar(255) DEFAULT '无' COMMENT '所在市区',
  `inf_district` varchar(255) DEFAULT NULL COMMENT '区',
  `inf_type` varchar(255) DEFAULT '无' COMMENT '品牌车型',
  `inf_displacement` varchar(255) DEFAULT '无' COMMENT '车排量',
  `inf_register` varchar(255) DEFAULT '无' COMMENT '注册年份',
  `inf_gearbox` varchar(255) DEFAULT '无' COMMENT '变速箱',
  `inf_journey` varchar(255) DEFAULT '无' COMMENT '已行驶里程',
  `inf_chair` varchar(255) DEFAULT '无' COMMENT '座位数',
  `inf_hourprice` decimal(10,0) DEFAULT NULL COMMENT '每小时租价',
  `inf_dayprice` decimal(10,0) DEFAULT NULL COMMENT '日租价',
  `inf_weekprice` decimal(10,0) DEFAULT NULL COMMENT '周租价',
  `inf_monthprice` decimal(10,0) DEFAULT NULL COMMENT '月租价',
  `inf_yearprice` decimal(10,0) DEFAULT NULL COMMENT '年租价',
  `inf_carphoto` text COMMENT '汽车照片',
  `inf_startdate` datetime DEFAULT NULL COMMENT '开始租的时间',
  `inf_enddate` datetime DEFAULT NULL COMMENT '结束租的时间',
  `inf_gps` varchar(255) DEFAULT '无' COMMENT '是否有GPS',
  `inf_sound` varchar(255) DEFAULT '无' COMMENT '是否有音箱',
  `inf_window` varchar(255) DEFAULT '无' COMMENT '是否有天窗，及天窗类型',
  `inf_dvd` varchar(255) DEFAULT '无' COMMENT 'DVD/CD',
  `inf_camera` varchar(255) DEFAULT '无' COMMENT '是否有倒车影像',
  `inf_gasbag` varchar(255) DEFAULT '无' COMMENT '有几个气囊',
  `inf_leather` varchar(255) DEFAULT '无' COMMENT '是否有真皮座椅',
  `inf_smoke` varchar(255) DEFAULT '否' COMMENT '能否吸烟',
  `inf_state` varchar(255) DEFAULT '未审核' COMMENT '信息状态',
  `inf_level` varchar(255) DEFAULT '无' COMMENT '车辆级别',
  `inf_color` varchar(255) DEFAULT '无' COMMENT '车的颜色',
  `inf_add` varchar(255) DEFAULT '否' COMMENT '是否添加为活动用车',
  `inf_specialdate` date DEFAULT NULL COMMENT '活动日期',
  `inf_specialprice` decimal(10,0) DEFAULT NULL COMMENT '活动价格',
  `inf_telephone` varchar(255) DEFAULT NULL COMMENT '该车的联系电话',
  `inf_qq` varchar(255) DEFAULT NULL COMMENT '车主qq',
  `inf_carstate` varchar(255) DEFAULT '空闲中' COMMENT '汽车状态',
  `inf_fueltype` varchar(255) DEFAULT NULL COMMENT '燃料类型',
  `inf_fuelnum` int(10) DEFAULT NULL COMMENT '燃油标号',
  `inf_drivemanner` varchar(255) DEFAULT NULL COMMENT '驱动方式',
  `inf_click` int(255) DEFAULT '0' COMMENT '点击量',
  `inf_cartype` varchar(255) DEFAULT NULL COMMENT '汽车',
  PRIMARY KEY (`inf_id`,`inf_user_id`),
  KEY `user_id` (`inf_user_id`),
  KEY `inf_id` (`inf_id`),
  CONSTRAINT `fk_inf_userId` FOREIGN KEY (`inf_user_id`) REFERENCES `usertab` (`user_id`) ON DELETE NO ACTION ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of information
-- ----------------------------
INSERT INTO `information` VALUES ('1', '1', '无敌', '冀D2A536', '河北', '邯郸', null, '劳斯莱斯幻影', '2.5T', '2017', '手动挡', '100', '4', '300', '3000', '20000', null, null, null, '2017-05-24 10:40:05', '2017-11-30 10:42:04', '有', '有', '有', '有', '有', '4', '有', '禁止', '已通过', '顶级', '黑色', '是', '2017-06-07', '12312', '15232193693', null, '空闲中', null, null, null, '4', null);
INSERT INTO `information` VALUES ('2', '1', '帅', '冀E32145', '河北', '邢台', null, '法拉利', '2.0T', '2016', '手动挡', '300', '4', '300', '3000', '20000', null, null, null, '2017-06-12 11:25:16', '2017-07-22 11:25:21', null, null, null, null, null, null, null, '允许', '已通过', '顶级', '红色', '否', null, null, '12312321321', null, '空闲中', null, null, null, '6', null);
INSERT INTO `information` VALUES ('3', '3', '我车牛批', '冀A12345', '河北', '石家庄', null, '凯迪拉克', '2.0T', '2017', '自动挡', '400', '4', '200', '2400', '15000', '30000', null, null, '2017-05-25 18:20:58', '2017-09-01 18:21:02', '有', ' 有', '有', ' 有', '有', ' 4', ' 有', '允许', '已通过', ' 高级', ' 黑色', '是', '2017-06-02', '2000', '21321321321', null, '租赁中', null, null, null, '0', null);
INSERT INTO `information` VALUES ('4', '2', '很好的车哦', '冀A23456', '河北', '石家庄', null, '保时捷', '2.0T', '2017', '手动挡', '1000', '2', '300', '3000', '25000', '1231000', null, null, '2017-06-05 15:34:30', '2017-07-12 15:34:34', '有', '有', '有', '有', '有', '4', '有', '允许', '已通过', '顶级', '红色', '否', null, null, '12312123211', null, '租赁中', null, null, null, '0', null);
INSERT INTO `information` VALUES ('5', '2', '测试车，没啥好看的', '无', '无', '无', null, '无', '无', '无', '无', '无', '无', null, null, null, null, null, null, null, null, '无', '无', '无', '无', '无', '无', '无', '否', '未通过', '无', '无', '否', null, null, null, null, '空闲中', null, null, null, '0', null);
INSERT INTO `information` VALUES ('6', '2', '还是测试车', '无', '无', '无', null, '无', '无', '无', '无', '无', '无', null, null, null, null, null, null, null, null, '无', '无', '无', '无', '无', '无', '无', '否', '未通过', '无', '无', '否', null, null, null, null, '空闲中', null, null, null, '0', null);
INSERT INTO `information` VALUES ('7', '6', '贼拉风的一款车', '冀DJ2017', '河北省', '石家庄市', null, '3', '2.0', '2015年', '手动挡', '1000', '5座', null, '1000', '5000', '20000', null, '/uploads/2017-06-13/593f3ca800620.jpg', null, null, '有', '有', '单天窗', '有', '有', '6', '有', '否', '未审核', '无', '白色', '否', null, null, null, null, '空闲中', '汽油', '93', '后置后驱', '0', null);
INSERT INTO `information` VALUES ('8', '6', '辣鸡车', '冀Asdf12', '河北省', '石家庄市', null, '1', '2.0', '2014年', '自动挡', '700', '5座', null, '800', '4000', '16000', null, '/uploads/2017-06-13/593f4c647130e.jpg,/uploads/2017-06-13/593f4c647216b.jpg,/uploads/2017-06-13/593f4c6472f44.jpg,/uploads/2017-06-13/593f4c6473b95.jpg,', '2017-06-14 00:00:00', '2017-07-19 00:00:00', '有', '有', '单天窗', '有', '有', '6', '有', '否', '已通过', '无', '蓝色', '否', null, null, '12312312312', '21323121231', '租赁中', '汽油', '97', '前置前驱', '11', null);
INSERT INTO `information` VALUES ('10', '6', '拉风的蓝色，你值得拥有', '津B12345', '天津市', '南开区', null, '宝马', '2.0T', '2014', '手动挡', '4', '5座', null, '1000', '5000', '21000', null, '/uploads/2017-06-15/59422d2961672.jpg,/uploads/2017-06-15/59422d2970027.jpg,/uploads/2017-06-15/59422d2970f73.jpg,/uploads/2017-06-15/59422d2971d00.jpg,', null, null, '有', '有', '单天窗', '有', '有', '6', '有', '否', '已通过', '无', '宝石蓝', '是', '2017-06-15', '800', null, null, '空闲中', '汽油', '93', '前置前驱', '0', '宝马Z4(进口)');

-- ----------------------------
-- Table structure for message
-- ----------------------------
DROP TABLE IF EXISTS `message`;
CREATE TABLE `message` (
  `mes_id` int(11) NOT NULL AUTO_INCREMENT COMMENT '留言id',
  `user_id` int(11) NOT NULL DEFAULT '-1' COMMENT '用户id',
  `mes_content` text COMMENT '留言内容',
  `mes_username` varchar(255) DEFAULT '游客' COMMENT '留言的用户名',
  `mes_publish` datetime DEFAULT NULL COMMENT '留言发出时间',
  `mes_intoduce` text COMMENT '留言简介',
  `mes_telephone` varchar(255) DEFAULT NULL COMMENT '游客电话',
  `mes_email` varchar(255) DEFAULT NULL COMMENT '游客邮箱',
  `mes_state` varchar(255) DEFAULT '未回复' COMMENT '留言状态',
  PRIMARY KEY (`mes_id`,`user_id`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of message
-- ----------------------------
INSERT INTO `message` VALUES ('1', '-1', '刘承睿帅的不要不要的', '游客', '2017-05-25 10:48:27', '刘承睿', '12312321321', '21312@qq.com', '已回复');

-- ----------------------------
-- Table structure for usertab
-- ----------------------------
DROP TABLE IF EXISTS `usertab`;
CREATE TABLE `usertab` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT COMMENT '用户id',
  `user_password` varchar(255) DEFAULT NULL COMMENT '用户密码',
  `user_vip` varchar(255) DEFAULT NULL COMMENT '是否是vip，根据user_cost变更等级',
  `user_name` varchar(255) DEFAULT NULL COMMENT '用户真实姓名',
  `user_sex` varchar(4) DEFAULT NULL COMMENT '用户性别',
  `user_idnum` varchar(30) DEFAULT NULL COMMENT '身份证号',
  `user_telephone` varchar(30) DEFAULT NULL COMMENT '用户电话号码',
  `user_idphoto` text COMMENT '身份证照',
  `user_state` varchar(10) DEFAULT '未审核' COMMENT '是否通过认证',
  `user_discount1` int(10) DEFAULT '0' COMMENT '优惠券1数量',
  `user_discount2` int(10) DEFAULT '0' COMMENT '优惠券2数量',
  `user_discount3` int(10) DEFAULT '0' COMMENT '优惠券3数量',
  `user_cost` decimal(10,0) DEFAULT '0' COMMENT '用户花销',
  `user_head` varchar(255) DEFAULT 'Home/images/user.jpg' COMMENT '用户头像',
  `user_bankcard` varchar(255) DEFAULT NULL COMMENT '银行卡号',
  `user_type` varchar(255) DEFAULT NULL COMMENT '证件类型',
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of usertab
-- ----------------------------
INSERT INTO `usertab` VALUES ('1', '123456', '钻石', '刘承睿', '男', '1233141324324', '15232193693', null, '已实名', '2', '2', '2', '1018300', 'Home/images/user.jpg', null, null);
INSERT INTO `usertab` VALUES ('2', '123123', '普通', '李艳阳', '女', '12312312312312', '11111111111', null, '已实名', '0', '0', '0', '0', 'Home/images/user.jpg', null, null);
INSERT INTO `usertab` VALUES ('3', '123321', '黄金', '张东杰', '男', '132131212312', '22222222222', null, '已实名', '1', '1', '1', '3000', '../Public/upload/2017-06-14/5941496810520.jpg', null, null);
INSERT INTO `usertab` VALUES ('4', 'wkm', '白银', '王凯明', '男', '12312312312', '33333333333', null, '未审核', '0', '0', '0', '0', 'Home/images/user.jpg', null, null);
INSERT INTO `usertab` VALUES ('6', '123123', null, '我叫MT', null, '12312321', '12312312312', '/upload/2017-06-13/593f4bd7cd028.jpg,', '已实名', '2', '1', '2', '8680', 'Home/images/user.jpg', '1232121312', null);

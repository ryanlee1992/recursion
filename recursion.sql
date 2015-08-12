/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50540
Source Host           : localhost:3306
Source Database       : recursion

Target Server Type    : MYSQL
Target Server Version : 50540
File Encoding         : 65001

Date: 2015-08-12 08:45:39
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for category
-- ----------------------------
DROP TABLE IF EXISTS `category`;
CREATE TABLE `category` (
  `id` int(10) NOT NULL,
  `cname` varchar(255) DEFAULT NULL,
  `path` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of category
-- ----------------------------
INSERT INTO `category` VALUES ('1', '手机', '');
INSERT INTO `category` VALUES ('2', '功能手机', '1');
INSERT INTO `category` VALUES ('3', '智能手机', '1');
INSERT INTO `category` VALUES ('4', '老人手机', '1,2');
INSERT INTO `category` VALUES ('5', '儿童手机', '1,2');
INSERT INTO `category` VALUES ('7', '安卓手机', '1,3');
INSERT INTO `category` VALUES ('8', '苹果手机', '1,3');
INSERT INTO `category` VALUES ('9', '三星', '1,3,7');
INSERT INTO `category` VALUES ('10', 'Iphone6', '1,3,8');
INSERT INTO `category` VALUES ('11', '大字手机', '1,2,4');

-- ----------------------------
-- Table structure for columns
-- ----------------------------
DROP TABLE IF EXISTS `columns`;
CREATE TABLE `columns` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `cname` varchar(255) DEFAULT NULL,
  `pid` int(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of columns
-- ----------------------------
INSERT INTO `columns` VALUES ('1', '新闻', '0');
INSERT INTO `columns` VALUES ('2', '体育', '0');
INSERT INTO `columns` VALUES ('3', '财经', '0');
INSERT INTO `columns` VALUES ('4', '国际新闻', '1');
INSERT INTO `columns` VALUES ('5', '国内新闻', '1');
INSERT INTO `columns` VALUES ('6', 'NBA', '2');
INSERT INTO `columns` VALUES ('7', '世界杯', '2');
INSERT INTO `columns` VALUES ('8', '新财经', '3');
INSERT INTO `columns` VALUES ('9', '财经报道', '3');
INSERT INTO `columns` VALUES ('10', '湖人', '6');
INSERT INTO `columns` VALUES ('11', '公牛', '6');
INSERT INTO `columns` VALUES ('12', '国际社会', '4');
INSERT INTO `columns` VALUES ('13', 'KOBE', '10');

/*
Navicat MySQL Data Transfer

Source Server         : iku
Source Server Version : 50621
Source Host           : localhost:3306
Source Database       : ci

Target Server Type    : MYSQL
Target Server Version : 50621
File Encoding         : 65001

Date: 2017-12-29 18:18:37
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for post
-- ----------------------------
DROP TABLE IF EXISTS `post`;
CREATE TABLE `post` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  `content` varchar(200) DEFAULT NULL,
  `date` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=40 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of post
-- ----------------------------
INSERT INTO `post` VALUES ('39', 'hello world', 'please test.<img src=\"svg.font/smile-01.svg\" width=\"40\" height=\"40\">', '29-12-2017 at 18 :18');

-- ----------------------------
-- Table structure for str
-- ----------------------------
DROP TABLE IF EXISTS `str`;
CREATE TABLE `str` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `number` int(11) NOT NULL,
  `str` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=72 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of str
-- ----------------------------
INSERT INTO `str` VALUES ('1', '0', 'NULL');
INSERT INTO `str` VALUES ('2', '1', 'START OF HEADING');
INSERT INTO `str` VALUES ('3', '2', 'START OF TEXT');
INSERT INTO `str` VALUES ('4', '3', 'END OF TEXT');
INSERT INTO `str` VALUES ('5', '4', 'END OF TRANSMISSION');
INSERT INTO `str` VALUES ('6', '5', 'ENQUIRY');
INSERT INTO `str` VALUES ('7', '6', 'ACKNOWLEDGE');
INSERT INTO `str` VALUES ('8', '7', 'BELL');
INSERT INTO `str` VALUES ('9', '8', 'BACKSPACE');
INSERT INTO `str` VALUES ('10', '9', 'HORIZONTAL TAB');
INSERT INTO `str` VALUES ('11', '10', 'LINE FEED');
INSERT INTO `str` VALUES ('12', '11', 'VERTICAL TAB');
INSERT INTO `str` VALUES ('13', '12', 'FORM FEED');
INSERT INTO `str` VALUES ('14', '13', 'CARRIAGE RETURN');
INSERT INTO `str` VALUES ('15', '14', 'SHIFT OUT');
INSERT INTO `str` VALUES ('16', '15', 'SHIFT IN');
INSERT INTO `str` VALUES ('17', '16', 'DATA LINK ESCAPE');
INSERT INTO `str` VALUES ('18', '17', 'DEVICE CONTROL 1');
INSERT INTO `str` VALUES ('19', '18', 'DEVICE CONTROL 2');
INSERT INTO `str` VALUES ('20', '19', 'DEVICE CONTROL 3');
INSERT INTO `str` VALUES ('21', '20', 'DEVICE CONTROL 4');
INSERT INTO `str` VALUES ('22', '22', 'SYNCHRONOUS IDLE');
INSERT INTO `str` VALUES ('23', '23', 'ENG OF TRANS. BLOCK');
INSERT INTO `str` VALUES ('24', '24', 'CANCEL');
INSERT INTO `str` VALUES ('25', '25', 'END OF MEDIUM');
INSERT INTO `str` VALUES ('26', '26', 'SUBSTITUTE');
INSERT INTO `str` VALUES ('27', '27', 'ESCAPE');
INSERT INTO `str` VALUES ('28', '28', 'FILE SEPARATOR');
INSERT INTO `str` VALUES ('29', '29', 'GROUP SEPARATOR');
INSERT INTO `str` VALUES ('30', '30', 'RECORD SEPARATOR');
INSERT INTO `str` VALUES ('31', '31', 'UNIT SEPARATOR');
INSERT INTO `str` VALUES ('32', '32', 'SPACE');
INSERT INTO `str` VALUES ('33', '33', 'DEL');
INSERT INTO `str` VALUES ('34', '34', 'ENTER');
INSERT INTO `str` VALUES ('35', '36', 'INFINITY');
INSERT INTO `str` VALUES ('36', '37', 'CHAT');
INSERT INTO `str` VALUES ('37', '38', 'CHECK');
INSERT INTO `str` VALUES ('38', '39', 'SMILE');
INSERT INTO `str` VALUES ('39', '40', 'HELLO');
INSERT INTO `str` VALUES ('40', '41', 'PHONE');
INSERT INTO `str` VALUES ('41', '42', 'ATTACHMENT');
INSERT INTO `str` VALUES ('42', '43', 'CALL');
INSERT INTO `str` VALUES ('43', '44', 'DOWN');
INSERT INTO `str` VALUES ('44', '45', 'FEMALE');
INSERT INTO `str` VALUES ('45', '46', 'FISH');
INSERT INTO `str` VALUES ('46', '47', 'LOCATION');
INSERT INTO `str` VALUES ('47', '48', 'MALE');
INSERT INTO `str` VALUES ('48', '49', 'MAN');
INSERT INTO `str` VALUES ('49', '50', 'MENU');
INSERT INTO `str` VALUES ('50', '51', 'POUR');
INSERT INTO `str` VALUES ('51', '52', 'PRESS');
INSERT INTO `str` VALUES ('52', '53', 'RECYCLE');
INSERT INTO `str` VALUES ('53', '54', 'SEARCH');
INSERT INTO `str` VALUES ('54', '55', 'SIGN');
INSERT INTO `str` VALUES ('55', '56', 'STOP');
INSERT INTO `str` VALUES ('56', '57', 'SUN');
INSERT INTO `str` VALUES ('57', '58', 'SUNRISE');
INSERT INTO `str` VALUES ('58', '59', 'TAP');
INSERT INTO `str` VALUES ('59', '60', 'TIME');
INSERT INTO `str` VALUES ('60', '61', 'TOOTH');
INSERT INTO `str` VALUES ('61', '62', 'TOUCH');
INSERT INTO `str` VALUES ('62', '63', 'TRAINING');
INSERT INTO `str` VALUES ('63', '64', 'VIDEO');
INSERT INTO `str` VALUES ('64', '65', 'VOICE');
INSERT INTO `str` VALUES ('65', '66', 'WHEEL');
INSERT INTO `str` VALUES ('66', '67', 'WHEELCHAIR');
INSERT INTO `str` VALUES ('67', '68', 'WIRELESS');
INSERT INTO `str` VALUES ('68', '69', 'WORLD');
INSERT INTO `str` VALUES ('69', '70', 'PUNCTUATION');
INSERT INTO `str` VALUES ('70', '71', 'SCP');
INSERT INTO `str` VALUES ('71', '35', 'IDEA');

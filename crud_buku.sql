/*
 Navicat Premium Data Transfer

 Source Server         : Localhost
 Source Server Type    : MariaDB
 Source Server Version : 100138
 Source Host           : 127.0.0.1:3306
 Source Schema         : crud_buku

 Target Server Type    : MariaDB
 Target Server Version : 100138
 File Encoding         : 65001

 Date: 28/10/2019 13:11:46
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for buku
-- ----------------------------
DROP TABLE IF EXISTS `buku`;
CREATE TABLE `buku` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `isbn` varchar(50) DEFAULT NULL,
  `title` varchar(150) DEFAULT NULL,
  `author` varchar(150) DEFAULT NULL,
  `stock` double DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

SET FOREIGN_KEY_CHECKS = 1;

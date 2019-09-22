/*
Navicat MySQL Data Transfer

Source Server         : LOCAL
Source Server Version : 100130
Source Host           : localhost:3306
Source Database       : latihan

Target Server Type    : MYSQL
Target Server Version : 100130
File Encoding         : 65001

Date: 2019-09-22 10:58:52
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for invoice
-- ----------------------------
DROP TABLE IF EXISTS `invoice`;
CREATE TABLE `invoice` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nasi` varchar(255) DEFAULT NULL,
  `jumlah_nasi` int(20) DEFAULT NULL,
  `lauk` varchar(255) DEFAULT NULL,
  `jumlah_lauk` int(20) DEFAULT NULL,
  `minuman` varchar(255) DEFAULT NULL,
  `jumlah_minuman` int(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of invoice
-- ----------------------------
INSERT INTO `invoice` VALUES ('1', 'uduk', '2', 'daging', '2', 'teh tawar, teh manis, ', '2');
INSERT INTO `invoice` VALUES ('4', 'putih', '1', 'ayam', '2', 'teh tawar, teh manis, air miniral, ', '1');
INSERT INTO `invoice` VALUES ('5', 'merah', '2', 'daging', '6', 'teh tawar, teh manis, ', '5');

-- ----------------------------
-- Table structure for lauk
-- ----------------------------
DROP TABLE IF EXISTS `lauk`;
CREATE TABLE `lauk` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `jumlah` int(20) DEFAULT NULL,
  `harga` int(20) DEFAULT NULL,
  `invoice_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of lauk
-- ----------------------------

-- ----------------------------
-- Table structure for mahasiswa
-- ----------------------------
DROP TABLE IF EXISTS `mahasiswa`;
CREATE TABLE `mahasiswa` (
  `nim` varchar(255) NOT NULL,
  `nama` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`nim`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of mahasiswa
-- ----------------------------
INSERT INTO `mahasiswa` VALUES ('2016141807', 'ismail');
INSERT INTO `mahasiswa` VALUES ('20881990', 'coba');
INSERT INTO `mahasiswa` VALUES ('28899810', 'coba lagi');

-- ----------------------------
-- Table structure for minuman
-- ----------------------------
DROP TABLE IF EXISTS `minuman`;
CREATE TABLE `minuman` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `jumlah` int(20) DEFAULT NULL,
  `harga` int(20) DEFAULT NULL,
  `invoice_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of minuman
-- ----------------------------

-- ----------------------------
-- Table structure for nasi
-- ----------------------------
DROP TABLE IF EXISTS `nasi`;
CREATE TABLE `nasi` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `jumlah` int(20) DEFAULT NULL,
  `harga` int(20) DEFAULT NULL,
  `invoice_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of nasi
-- ----------------------------

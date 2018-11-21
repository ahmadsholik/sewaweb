/*
Navicat MySQL Data Transfer

Source Server         : lokal
Source Server Version : 50719
Source Host           : localhost:3306
Source Database       : sewaweb

Target Server Type    : MYSQL
Target Server Version : 50719
File Encoding         : 65001

Date: 2018-11-21 04:49:48
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `agen`
-- ----------------------------
DROP TABLE IF EXISTS `agen`;
CREATE TABLE `agen` (
  `id_agen` int(8) NOT NULL,
  `nama_agen` varchar(255) NOT NULL,
  `kategori` varchar(50) NOT NULL,
  `keterangan` text NOT NULL,
  `no_hp` varchar(25) NOT NULL,
  `alamat` text NOT NULL,
  `kota` varchar(50) NOT NULL,
  `provinsi` varchar(50) NOT NULL,
  `latitude` varchar(50) NOT NULL,
  `longitude` varchar(50) NOT NULL,
  `gambar` text,
  `status` enum('1','0') DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of agen
-- ----------------------------

-- ----------------------------
-- Table structure for `jenis_jasa`
-- ----------------------------
DROP TABLE IF EXISTS `jenis_jasa`;
CREATE TABLE `jenis_jasa` (
  `jenis_jasa_id` int(11) NOT NULL AUTO_INCREMENT,
  `nama_jasa` varchar(45) DEFAULT NULL,
  `harga_jasa` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`jenis_jasa_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of jenis_jasa
-- ----------------------------
INSERT INTO `jenis_jasa` VALUES ('1', 'Latihan Musik', '500000');
INSERT INTO `jenis_jasa` VALUES ('2', 'Latihan Tari', '80000');

-- ----------------------------
-- Table structure for `kategori`
-- ----------------------------
DROP TABLE IF EXISTS `kategori`;
CREATE TABLE `kategori` (
  `kategori_id` int(11) NOT NULL AUTO_INCREMENT,
  `nama_kategori` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`kategori_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of kategori
-- ----------------------------
INSERT INTO `kategori` VALUES ('1', 'Alat Musik');
INSERT INTO `kategori` VALUES ('2', 'Kostum');

-- ----------------------------
-- Table structure for `pengaturan`
-- ----------------------------
DROP TABLE IF EXISTS `pengaturan`;
CREATE TABLE `pengaturan` (
  `pengaturan_id` int(8) NOT NULL AUTO_INCREMENT,
  `judul` varchar(222) NOT NULL,
  `isi` varchar(222) NOT NULL,
  `header_text` varchar(222) NOT NULL,
  `gambar` text,
  PRIMARY KEY (`pengaturan_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of pengaturan
-- ----------------------------
INSERT INTO `pengaturan` VALUES ('1', 'Sistem 1', 'sdgsdg xgsdghs', 'Sistem 2', '8432dd4f52c1e85772d6007d5986917c.jpg');

-- ----------------------------
-- Table structure for `produk`
-- ----------------------------
DROP TABLE IF EXISTS `produk`;
CREATE TABLE `produk` (
  `produk_id` int(11) NOT NULL AUTO_INCREMENT,
  `kategori_id` varchar(45) DEFAULT NULL,
  `nama_produk` varchar(255) DEFAULT NULL,
  `harga` varchar(45) DEFAULT NULL,
  `stok` varchar(45) DEFAULT NULL,
  `deskripsi` text,
  `gambar` text,
  `created_on` datetime DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`produk_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of produk
-- ----------------------------
INSERT INTO `produk` VALUES ('1', '1', 'Gitar1', '500000', '3', 'An upload form is displayed, allowing a user to select a file and upload it. When the form is submitted, the file is uploaded to the destination you specify', '901699a5d34b8666384b462d160796a8.jpg', '2017-10-21 00:00:00');
INSERT INTO `produk` VALUES ('3', '2', 'weqwe', '50000', '12', 'sadasd', '045b7d8900f933a6b9d59880c335625f.jpg', '2017-10-21 20:19:23');
INSERT INTO `produk` VALUES ('4', '2', 'test1', '150000', '12', 'An upload form is displayed, allowing a user to select a file and upload it. When the form is submitted, the file is uploaded to the destination you specify.', '8432dd4f52c1e85772d6007d5986917c.jpg', '2017-10-21 21:52:24');

-- ----------------------------
-- Table structure for `transaksi`
-- ----------------------------
DROP TABLE IF EXISTS `transaksi`;
CREATE TABLE `transaksi` (
  `transaksi_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` varchar(45) DEFAULT NULL,
  `produk_id` varchar(45) DEFAULT NULL,
  `dari` date DEFAULT NULL,
  `sampai` date DEFAULT NULL,
  `jumlah` varbinary(45) DEFAULT NULL,
  `harga` varchar(45) DEFAULT NULL,
  `status` enum('1','0','2') DEFAULT '0' COMMENT '2 kembali',
  `created_on` datetime DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`transaksi_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of transaksi
-- ----------------------------
INSERT INTO `transaksi` VALUES ('2', '6', '1', '2017-10-21', '2017-10-22', 0x32, '1000000', '2', '2017-10-21 15:56:16');
INSERT INTO `transaksi` VALUES ('3', '7', '1', '2017-10-21', '2017-10-24', 0x31, '1500000', '1', '2017-10-21 21:57:47');
INSERT INTO `transaksi` VALUES ('4', '6', '3', '2018-11-16', '2018-11-13', 0x31, '150000', '2', '2018-11-15 20:29:03');
INSERT INTO `transaksi` VALUES ('5', '9', '3', '2018-11-20', '2018-11-22', 0x33, '300000', '0', '2018-11-20 15:29:55');

-- ----------------------------
-- Table structure for `transaksi_jasa`
-- ----------------------------
DROP TABLE IF EXISTS `transaksi_jasa`;
CREATE TABLE `transaksi_jasa` (
  `transaksi_jasa_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` varchar(45) DEFAULT NULL,
  `keterangan` text,
  `jenis_jasa_id` varchar(45) DEFAULT NULL,
  `tanggal_mulai` date DEFAULT NULL,
  `created_on` datetime DEFAULT NULL,
  `status` enum('1','0') DEFAULT '0',
  PRIMARY KEY (`transaksi_jasa_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of transaksi_jasa
-- ----------------------------
INSERT INTO `transaksi_jasa` VALUES ('1', '6', 'asdsad', '1', '2017-10-21', null, '1');
INSERT INTO `transaksi_jasa` VALUES ('2', '6', ',sdfnsdfmnsd psfktopwet iopwetuwiopert', '1', '2018-11-23', null, '1');
INSERT INTO `transaksi_jasa` VALUES ('3', '9', 'safsda', '1', '2018-11-21', null, '0');
INSERT INTO `transaksi_jasa` VALUES ('4', '9', 'xdfghdfhdfhdfh', '1', '2018-11-21', null, '0');

-- ----------------------------
-- Table structure for `users`
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `password` varchar(60) DEFAULT NULL,
  `nama_lengkap` varchar(60) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `notelp` varchar(20) DEFAULT NULL,
  `level` enum('0','1') DEFAULT '1',
  `blokir` varchar(1) DEFAULT '0',
  `alamat` text,
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES ('6', '1234', 'test', 'ekop123@a.c', '08917934054', '1', '0', 'sdasdasd`');
INSERT INTO `users` VALUES ('7', 'admin', 'Administrator', 'admin@admin.com', '08917934054', '0', '0', 'sdasdasd`');
INSERT INTO `users` VALUES ('8', null, 'Ahmad ', null, '567568568', '1', '0', 'sdgsdg dfh');
INSERT INTO `users` VALUES ('9', '1234', 'ahmad', 'ahmad@mail.com', '0967967', '1', '0', null);

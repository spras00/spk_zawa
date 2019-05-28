# Host: 127.0.0.1  (Version 5.5.5-10.1.26-MariaDB)
# Date: 2019-05-28 17:06:17
# Generator: MySQL-Front 6.1  (Build 1.26)


#
# Structure for table "_altrumah"
#

DROP TABLE IF EXISTS `_altrumah`;
CREATE TABLE `_altrumah` (
  `id_a` varchar(5) NOT NULL DEFAULT '',
  `nm_a` varchar(75) NOT NULL DEFAULT '',
  `lokasi` varchar(100) NOT NULL DEFAULT '',
  `harga` int(16) NOT NULL,
  `luas` int(3) NOT NULL DEFAULT '0',
  `tipe` varchar(15) NOT NULL DEFAULT '',
  `fasilitas` varchar(50) NOT NULL DEFAULT '',
  PRIMARY KEY (`id_a`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

#
# Data for table "_altrumah"
#

INSERT INTO `_altrumah` VALUES ('A1','Rumah Telaga Kahuripan','Parung Bogor',650000000,180,'3','Kitchen Set, Closet Duduk, AC');

#
# Structure for table "_kriteria"
#

DROP TABLE IF EXISTS `_kriteria`;
CREATE TABLE `_kriteria` (
  `id_k` varchar(5) NOT NULL,
  `nm_k` varchar(50) NOT NULL DEFAULT '',
  `atribut` varchar(7) NOT NULL,
  `bobot` double NOT NULL,
  PRIMARY KEY (`id_k`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

#
# Data for table "_kriteria"
#

INSERT INTO `_kriteria` VALUES ('C1','HARGA','0',25),('C2','LOKASI','1',25),('C3','LUAS','1',15),('C4','TIPE','1',15),('C5','FASILITAS','1',20);

#
# Structure for table "_crips"
#

DROP TABLE IF EXISTS `_crips`;
CREATE TABLE `_crips` (
  `id_cp` varchar(4) NOT NULL,
  `id_k` varchar(5) NOT NULL,
  `nm_cp` varchar(50) NOT NULL DEFAULT '',
  `skor` double NOT NULL,
  PRIMARY KEY (`id_cp`),
  KEY `id_k` (`id_k`),
  CONSTRAINT `_crips_ibfk_1` FOREIGN KEY (`id_k`) REFERENCES `_kriteria` (`id_k`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

#
# Data for table "_crips"
#

INSERT INTO `_crips` VALUES ('CR11','C1','< 1 Milyar Rupiah',100),('CR12','C1','1 - 2 Milyar Rupiah',75),('CR13','C1','2 - 3 Milyar Rupiah',50),('CR14','C1','3 - 4 Milyar Rupiah',25),('CR15','C1','4 - 5 Milyar Rupiah',0),('CR21','C2','Jakarta',100),('CR22','C2','Botedabek',75),('CR23','C2','Luar Jabodetabek',50),('CR31','C3','>= 150 m2',100),('CR32','C3','<=100 <150',75),('CR33','C3','<50 <100',50),('CR34','C3','<=50',25),('CR41','C4','>= 4 Kamar Tidur',100),('CR42','C4','3 Kamar Tidur',75),('CR43','C4','2 Kamar Tidur',50),('CR44','C4','1 Kamar Tidur',25),('CR51','C5','Full Furnish',100),('CR52','C5','Semi Furnish',75),('CR53','C5','Un Furnish',50);

#
# Structure for table "_user"
#

DROP TABLE IF EXISTS `_user`;
CREATE TABLE `_user` (
  `user` varchar(16) NOT NULL,
  `pwd` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

#
# Data for table "_user"
#

INSERT INTO `_user` VALUES ('admin','admin');

#
# Structure for table "r_altrumah"
#

DROP TABLE IF EXISTS `r_altrumah`;
CREATE TABLE `r_altrumah` (
  `id_r` tinyint(3) unsigned NOT NULL AUTO_INCREMENT,
  `id_a` varchar(5) NOT NULL DEFAULT '0',
  `id_k` varchar(5) NOT NULL,
  `id_cp` varchar(4) NOT NULL,
  PRIMARY KEY (`id_r`)
) ENGINE=InnoDB AUTO_INCREMENT=43 DEFAULT CHARSET=latin1;

#
# Data for table "r_altrumah"
#

INSERT INTO `r_altrumah` VALUES (43,'A1','C1','0'),(44,'A1','C2','0'),(45,'A1','C3','0'),(46,'A1','C4','0'),(47,'A1','C5','0');

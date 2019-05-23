# Host: 127.0.0.1  (Version 5.5.5-10.1.26-MariaDB)
# Date: 2019-05-23 15:56:01
# Generator: MySQL-Front 6.1  (Build 1.26)


#
# Structure for table "_altrumah"
#

DROP TABLE IF EXISTS `_altrumah`;
CREATE TABLE `_altrumah` (
  `id_a` varchar(5) NOT NULL,
  `nm_a` varchar(75) NOT NULL,
  `harga` int(16) NOT NULL,
  `lokasi` varchar(100) NOT NULL,
  `tipe` varchar(15) NOT NULL DEFAULT '',
  `luas` int(3) NOT NULL,
  `fasilitas` varchar(20) NOT NULL,
  PRIMARY KEY (`id_a`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

#
# Data for table "_altrumah"
#


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
  `id_r` varchar(3) NOT NULL,
  `id_a` varchar(5) NOT NULL,
  `id_k` varchar(5) NOT NULL,
  `id_cp` varchar(4) NOT NULL,
  PRIMARY KEY (`id_r`),
  KEY `id_a` (`id_a`),
  KEY `id_k` (`id_k`),
  KEY `id_cp` (`id_cp`),
  CONSTRAINT `r_altrumah_ibfk_1` FOREIGN KEY (`id_a`) REFERENCES `_altrumah` (`id_a`),
  CONSTRAINT `r_altrumah_ibfk_2` FOREIGN KEY (`id_k`) REFERENCES `_kriteria` (`id_k`),
  CONSTRAINT `r_altrumah_ibfk_3` FOREIGN KEY (`id_cp`) REFERENCES `_crips` (`id_cp`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

#
# Data for table "r_altrumah"
#


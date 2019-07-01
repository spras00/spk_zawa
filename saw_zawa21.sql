# Host: 127.0.0.1  (Version 5.5.5-10.1.16-MariaDB)
# Date: 2019-07-02 01:49:37
# Generator: MySQL-Front 6.1  (Build 1.26)


#
# Structure for table "altrumah"
#

CREATE TABLE `altrumah` (
  `id_a` varchar(5) NOT NULL DEFAULT '',
  `nm_a` varchar(75) NOT NULL DEFAULT '',
  `lokasi` varchar(100) NOT NULL DEFAULT '',
  `harga` double(16,0) NOT NULL DEFAULT '0',
  `luas` int(3) NOT NULL DEFAULT '0',
  `tipe` varchar(15) NOT NULL DEFAULT '',
  `fasilitas` varchar(100) NOT NULL DEFAULT '',
  PRIMARY KEY (`id_a`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

#
# Data for table "altrumah"
#

REPLACE INTO `altrumah` VALUES ('A01','Rumah Telaga Kahuripan','Parung Bogor',650000000,180,'3','Kitchen Set, Closet Duduk, AC'),('A02','Cluster Perum Villa Pamulang','Tangerang',590000000,90,'2','Ac, Bathub, Kitchen Set, Pompa Air'),('A03','KS .Tubun Jakarta Barat','DKI Jakarta',1100000000,100,'3','Ac, Bathub, Kitchen Set, Pompa Air'),('A04','Vila Mutiara Cibubur','Depok',1600000000,120,'3','Kosong'),('A05','Puri Botanical Kebon Jeruk Jakarta Barat','DKI Jakarta',2000000000,70,'2','Kosong'),('A06','Komplek De Green Villa Mutiara Bandung','Bandung',1250000000,148,'2','AC, Kitchen Set'),('A07','Paramount Gading Serpong','Tangerang',2950000000,187,'3','Full Furnish'),('A08','Tebet Dalam ','DKI Jakarta',2700000000,157,'7','Ac, Shower, Kitchen Set, Pompa Air'),('A09','Tanjung Duren','DKI Jakarta',2100000000,55,'5','Ac, Shower, Kitchen Set, Pompa Air'),('A10','Bukit Serpong Mas','Tangerang Selatan',1500000000,120,'2','2 AC, 2 tempat tidur, kitcen set, kulkas, 1 set sofa, 1 set meja makan, kompor gas');

#
# Structure for table "crips"
#

CREATE TABLE `crips` (
  `id_cp` varchar(4) NOT NULL,
  `id_k` varchar(5) NOT NULL,
  `nm_cp` varchar(50) NOT NULL DEFAULT '',
  `skor` double NOT NULL,
  PRIMARY KEY (`id_cp`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

#
# Data for table "crips"
#

REPLACE INTO `crips` VALUES ('CR11','C1','<= 1 Milyar Rupiah',100),('CR12','C1','1 - <= 2 Milyar Rupiah',75),('CR13','C1','2 - <= 3 Milyar Rupiah',50),('CR14','C1','3 - <= 4 Milyar Rupiah',25),('CR21','C2','Jakarta',100),('CR22','C2','Botedabek',75),('CR23','C2','Luar Jabodetabek',50),('CR31','C3','>= 150 m2',100),('CR32','C3','<=100 - 150 m2',75),('CR33','C3','<50 - 100 m2',50),('CR34','C3','<=50 m2',25),('CR41','C4','>= 4 Kamar Tidur',100),('CR42','C4','3 Kamar Tidur',75),('CR43','C4','2 Kamar Tidur',50),('CR44','C4','1 Kamar Tidur',25),('CR51','C5','Full Furnish',100),('CR52','C5','Semi Furnish',75),('CR53','C5','Un Furnish',50);

#
# Structure for table "kriteria"
#

CREATE TABLE `kriteria` (
  `id_k` varchar(5) NOT NULL,
  `nm_k` varchar(50) NOT NULL DEFAULT '',
  `atribut` varchar(7) NOT NULL,
  `bobot` double NOT NULL,
  PRIMARY KEY (`id_k`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

#
# Data for table "kriteria"
#

REPLACE INTO `kriteria` VALUES ('C1','HARGA','0',30),('C2','LOKASI','1',20),('C3','LUAS','1',20),('C4','TIPE','1',15),('C5','FASILITAS','1',15);

#
# Structure for table "r_altrumah"
#

CREATE TABLE `r_altrumah` (
  `id_r` int(3) unsigned NOT NULL AUTO_INCREMENT,
  `id_a` varchar(5) NOT NULL DEFAULT '0',
  `id_k` varchar(5) NOT NULL,
  `id_cp` varchar(4) NOT NULL,
  PRIMARY KEY (`id_r`)
) ENGINE=InnoDB AUTO_INCREMENT=136 DEFAULT CHARSET=latin1;

#
# Data for table "r_altrumah"
#

REPLACE INTO `r_altrumah` VALUES (43,'A01','C1','CR11'),(44,'A01','C2','CR22'),(45,'A01','C3','CR31'),(46,'A01','C4','CR42'),(47,'A01','C5','CR52'),(48,'A02','C1','CR11'),(49,'A02','C2','CR22'),(50,'A02','C3','CR33'),(51,'A02','C4','CR43'),(52,'A02','C5','CR52'),(55,'A03','C1','CR12'),(56,'A03','C2','CR21'),(57,'A03','C3','CR32'),(58,'A03','C4','CR42'),(59,'A03','C5','CR52'),(62,'A04','C1','CR12'),(63,'A04','C2','CR22'),(64,'A04','C3','CR32'),(65,'A04','C4','CR42'),(66,'A04','C5','CR53'),(69,'A05','C1','CR13'),(70,'A05','C2','CR21'),(71,'A05','C3','CR33'),(72,'A05','C4','CR43'),(73,'A05','C5','CR53'),(76,'A06','C1','CR12'),(77,'A06','C2','CR23'),(78,'A06','C3','CR32'),(79,'A06','C4','CR43'),(80,'A06','C5','CR52'),(83,'A07','C1','CR13'),(84,'A07','C2','CR22'),(85,'A07','C3','CR31'),(86,'A07','C4','CR42'),(87,'A07','C5','CR51'),(90,'A08','C1','CR13'),(91,'A08','C2','CR21'),(92,'A08','C3','CR31'),(93,'A08','C4','CR41'),(94,'A08','C5','CR52'),(97,'A09','C1','CR13'),(98,'A09','C2','CR21'),(99,'A09','C3','CR33'),(100,'A09','C4','CR41'),(101,'A09','C5','CR52'),(109,'A10','C1','CR12'),(110,'A10','C2','CR22'),(111,'A10','C3','CR32'),(112,'A10','C4','CR43'),(113,'A10','C5','CR51');

#
# Structure for table "user"
#

CREATE TABLE `user` (
  `user` varchar(16) NOT NULL,
  `pwd` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

#
# Data for table "user"
#

REPLACE INTO `user` VALUES ('admin','admin');

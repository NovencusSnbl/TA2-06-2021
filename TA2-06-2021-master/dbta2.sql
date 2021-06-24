/*
SQLyog Ultimate v8.55 
MySQL - 5.5.5-10.1.38-MariaDB : Database - ta2
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`ta2` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `ta2`;

/*Table structure for table `baak` */

DROP TABLE IF EXISTS `baak`;

CREATE TABLE `baak` (
  `baak_id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(30) NOT NULL,
  `users_id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `desc_baak` varchar(255) DEFAULT NULL,
  `created_by` varchar(32) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_by` varchar(32) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`baak_id`),
  KEY `FK_baak` (`users_id`),
  CONSTRAINT `FK_baak` FOREIGN KEY (`users_id`) REFERENCES `users` (`users_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `baak` */

insert  into `baak`(`baak_id`,`nama`,`users_id`,`email`,`desc_baak`,`created_by`,`created_at`,`updated_by`,`updated_at`) values (1,'baak01',3,'baak01@gmail.com','kemahasiswaan','admin01',NULL,NULL,NULL);

/*Table structure for table `dokumen` */

DROP TABLE IF EXISTS `dokumen`;

CREATE TABLE `dokumen` (
  `dokumen_id` int(11) NOT NULL AUTO_INCREMENT,
  `jenis_dokumen` int(11) NOT NULL,
  `mahasiswa_id` varchar(20) NOT NULL,
  `baak_id` int(11) DEFAULT NULL,
  `gambar` varchar(255) DEFAULT NULL,
  `created_by` varchar(32) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_by` varchar(32) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`dokumen_id`),
  KEY `FK_dokumen` (`baak_id`),
  KEY `FK_dokumen2` (`mahasiswa_id`),
  CONSTRAINT `FK_dokumen` FOREIGN KEY (`baak_id`) REFERENCES `baak` (`baak_id`),
  CONSTRAINT `FK_dokumen2` FOREIGN KEY (`mahasiswa_id`) REFERENCES `mahasiswa` (`mahasiswa_id`)
) ENGINE=InnoDB AUTO_INCREMENT=60 DEFAULT CHARSET=latin1;

/*Data for the table `dokumen` */

insert  into `dokumen`(`dokumen_id`,`jenis_dokumen`,`mahasiswa_id`,`baak_id`,`gambar`,`created_by`,`created_at`,`updated_by`,`updated_at`) values (52,1,'11318046',1,'6052c2bc0f8cf.pdf','baak01','2021-03-18 10:02:20','','0000-00-00 00:00:00'),(53,2,'11318046',1,'6052c2cba9c17.pdf','baak01','2021-03-18 10:02:35','','0000-00-00 00:00:00'),(54,1,'11318001',1,'60560a84538ed.pdf','baak01','2021-03-20 21:45:24','','0000-00-00 00:00:00'),(55,1,'11318046',1,'60560abe4cb09.pdf','baak01','2021-03-20 21:46:22','','0000-00-00 00:00:00'),(56,1,'11318001',1,'60560b5385cfa.pdf','baak01','2021-03-20 21:48:51','','0000-00-00 00:00:00'),(57,1,'11318046',1,'60560bfa1acaa.pdf','baak01','2021-03-20 21:51:38','','0000-00-00 00:00:00'),(58,1,'11318001',1,'60560d10bbb3b.pdf','baak01','2021-03-20 21:56:16','','0000-00-00 00:00:00'),(59,1,'11318046',1,'605613cef378d.pdf','baak01','2021-03-20 22:25:03','','0000-00-00 00:00:00');

/*Table structure for table `mahasiswa` */

DROP TABLE IF EXISTS `mahasiswa`;

CREATE TABLE `mahasiswa` (
  `mahasiswa_id` varchar(20) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `created_by` varchar(32) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_by` varchar(32) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `users_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`mahasiswa_id`),
  KEY `FK_mahasiswa` (`users_id`),
  CONSTRAINT `FK_mahasiswa` FOREIGN KEY (`users_id`) REFERENCES `users` (`users_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `mahasiswa` */

insert  into `mahasiswa`(`mahasiswa_id`,`nama`,`email`,`created_by`,`created_at`,`updated_by`,`updated_at`,`users_id`) values ('11318001','Palti Siregar','paltisiregar@gmail.com','admin01',NULL,NULL,NULL,4),('11318046','Novencus Sinambela','novencussinambela00@gmail.com','admin01',NULL,NULL,NULL,2);

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `users_id` int(11) NOT NULL AUTO_INCREMENT,
  `role` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `PASSWORD` varchar(255) NOT NULL,
  PRIMARY KEY (`users_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

/*Data for the table `users` */

insert  into `users`(`users_id`,`role`,`username`,`PASSWORD`) values (1,1,'admin01','$2y$10$nBNFSdZA.UWurJJSAdFyPOizpiL/vh62URtB0H4rUxk.zR2hEiB42'),(2,3,'11318046','$2y$10$/PAWc4Mi2cB6pEXLUPomNuFCAkKddOhWQcSDy4V4XaVz4/0/wL2Ce'),(3,2,'baak01','$2y$10$8P9Wb7wB/k0bh6bj7kAluO6rnOJPHcPK4a5cvN3fOqpyHejN9U4nS'),(4,3,'11318001','$2y$10$aiRsx72lopt8iIygnvog1eN4kxMqdFdoY66T5xpcmdKil6gka7rIC'),(5,1,'adminfix','$2y$10$YHrhp6m3sXyqEnd.7YbFHeRK2VI/x9VSxuONZTOyCCfk4ShJEyFdC');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

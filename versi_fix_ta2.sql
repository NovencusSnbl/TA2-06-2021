/*
SQLyog Ultimate v8.55 
MySQL - 5.5.5-10.4.18-MariaDB : Database - ta2
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

/*Table structure for table `alumni` */

DROP TABLE IF EXISTS `alumni`;

CREATE TABLE `alumni` (
  `alumni_id` varchar(20) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `created_by` varchar(32) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_by` varchar(32) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `users_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`alumni_id`),
  KEY `FK_alumni` (`users_id`),
  CONSTRAINT `FK_alumni` FOREIGN KEY (`users_id`) REFERENCES `users` (`users_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `alumni` */

insert  into `alumni`(`alumni_id`,`nama`,`email`,`created_by`,`created_at`,`updated_by`,`updated_at`,`users_id`) values ('11317034','Beny Luis Bernadi Tampubolon','benyluis98@gmail.com','admin01','2021-03-18 10:02:20',NULL,NULL,NULL);

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

insert  into `baak`(`baak_id`,`nama`,`users_id`,`email`,`desc_baak`,`created_by`,`created_at`,`updated_by`,`updated_at`) values (1,'baak01',2,'baak01@gmail.com','Pusat','admin01',NULL,NULL,NULL);

/*Table structure for table `dokumen` */

DROP TABLE IF EXISTS `dokumen`;

CREATE TABLE `dokumen` (
  `dokumen_id` int(11) NOT NULL AUTO_INCREMENT,
  `jenis_dokumen` int(11) NOT NULL,
  `alumni_id` varchar(20) NOT NULL,
  `baak_id` int(11) DEFAULT NULL,
  `gambar` varchar(255) DEFAULT NULL,
  `created_by` varchar(32) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_by` varchar(32) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`dokumen_id`),
  KEY `FK_dokumen` (`baak_id`),
  KEY `FK_dokumen2` (`alumni_id`),
  CONSTRAINT `FK_dokumen` FOREIGN KEY (`baak_id`) REFERENCES `baak` (`baak_id`),
  CONSTRAINT `FK_dokumen2` FOREIGN KEY (`alumni_id`) REFERENCES `alumni` (`alumni_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

/*Data for the table `dokumen` */

insert  into `dokumen`(`dokumen_id`,`jenis_dokumen`,`alumni_id`,`baak_id`,`gambar`,`created_by`,`created_at`,`updated_by`,`updated_at`) values (1,1,'11317034',1,'605aaddb280b3.pdf','baak01','2021-03-24 10:11:23','','0000-00-00 00:00:00'),(3,2,'11317034',1,'605c95b6f3677.pdf','baak01','2021-03-25 20:52:54','','0000-00-00 00:00:00');

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `users_id` int(11) NOT NULL AUTO_INCREMENT,
  `role` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `PASSWORD` varchar(255) NOT NULL,
  PRIMARY KEY (`users_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

/*Data for the table `users` */

insert  into `users`(`users_id`,`role`,`username`,`PASSWORD`) values (1,1,'admin01','$2y$10$nBNFSdZA.UWurJJSAdFyPOizpiL/vh62URtB0H4rUxk.zR2hEiB42'),(2,2,'baak01','$2y$10$NZDBUgtZyV4CCsw0xRqie.KIsi4Iz.olspiGIlcM.cnegV.r2lU7e');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

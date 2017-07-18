/*
SQLyog Ultimate v12.09 (64 bit)
MySQL - 10.1.13-MariaDB : Database - webapp
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
/*Table structure for table `cusine_subitems` */

DROP TABLE IF EXISTS `cusine_subitems`;

CREATE TABLE `cusine_subitems` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `subitem_name` varchar(500) NOT NULL,
  `maincusine_id` varchar(100) NOT NULL,
  `item_description` varchar(5000) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `cusine_subitems` */

insert  into `cusine_subitems`(`id`,`subitem_name`,`maincusine_id`,`item_description`) values (1,'rice','1','rice');

/*Table structure for table `item_quantity` */

DROP TABLE IF EXISTS `item_quantity`;

CREATE TABLE `item_quantity` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `subitem_id` varchar(200) NOT NULL,
  `plate` varchar(2000) NOT NULL,
  `price` varchar(2000) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `item_quantity` */

insert  into `item_quantity`(`id`,`subitem_id`,`plate`,`price`) values (1,'1','200','1200');

/*Table structure for table `maincusine` */

DROP TABLE IF EXISTS `maincusine`;

CREATE TABLE `maincusine` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `cusinename` varchar(500) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `maincusine` */

insert  into `maincusine`(`id`,`cusinename`) values (1,'Chinese');

/*Table structure for table `user` */

DROP TABLE IF EXISTS `user`;

CREATE TABLE `user` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `username` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `Full Name` varchar(200) NOT NULL,
  `status` int(1) NOT NULL DEFAULT '1',
  `password_hash` text NOT NULL,
  `auth_key` varchar(200) NOT NULL,
  `created_at` varchar(50) NOT NULL,
  `updated_at` int(11) NOT NULL,
  `role` int(2) NOT NULL,
  `company_id` int(20) NOT NULL,
  `rate` varchar(50) DEFAULT NULL,
  `fullname` varchar(200) NOT NULL,
  `group_id` varchar(2) DEFAULT NULL,
  `password_reset_token` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `user` */

insert  into `user`(`id`,`username`,`email`,`Full Name`,`status`,`password_hash`,`auth_key`,`created_at`,`updated_at`,`role`,`company_id`,`rate`,`fullname`,`group_id`,`password_reset_token`) values (1,'admin','ali@synapse-consulting.com.pk','',10,'$2y$13$7FTyT0wgqAkhHrlWfQh50e8iC47pFYXZP6B8moV1seBeUhmwhsdVm','CWc7oZ3ASqhqXGPB19JJ0UUMiQkbYyx-','1493711748',1493711748,0,0,NULL,'',NULL,'');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

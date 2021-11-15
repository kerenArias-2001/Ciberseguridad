/*
SQLyog Ultimate v11.11 (64 bit)
MySQL - 5.5.5-10.4.14-MariaDB : Database - bd_ciberseguridad
*********************************************************************
*/


/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`bd_ciberseguridad` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;

USE `bd_ciberseguridad`;

/*Table structure for table `tipo_incidentes` */

DROP TABLE IF EXISTS `tipo_incidentes`;

CREATE TABLE `tipo_incidentes` (
  `id_tipo_in` int(100) NOT NULL AUTO_INCREMENT,
  `nombre_tipo_in` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id_tipo_in`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4;

/*Data for the table `tipo_incidentes` */

LOCK TABLES `tipo_incidentes` WRITE;

insert  into `tipo_incidentes`(`id_tipo_in`,`nombre_tipo_in`,`cambiogenerado`) values (1,'Manejo inadecuado de los datos',1),(2,'Uso inadecuado de credenciales',NULL),(3,'Violación a Políticas de Seguridad de la Información',3),(4,'Acceso no autorizado a los activos de información',NULL),(5,'Intrusión',NULL),(6,'Intentos de actividad',NULL),(7,'Ingeniería Social',NULL),(8,'Negación de servicio',NULL),(9,'Vulnerabilidades',NULL),(10,'Malware',NULL);

UNLOCK TABLES;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

/*
SQLyog Ultimate v11.11 (64 bit)
MySQL - 5.5.5-10.4.14-MariaDB : Database - bd_datos
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`bd_datos` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;

USE `bd_datos`;

/*Table structure for table `cargo` */

DROP TABLE IF EXISTS `cargo`;

CREATE TABLE `cargo` (
  `id_cargo` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Primary Key',
  `nombre_cargo` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_cargo`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

/*Data for the table `cargo` */

LOCK TABLES `cargo` WRITE;

insert  into `cargo`(`id_cargo`,`nombre_cargo`) values (1,'Gerente'),(2,'secretario administrador'),(3,'hoy'),(4,'mañana');

UNLOCK TABLES;

/*Table structure for table `categoria` */

DROP TABLE IF EXISTS `categoria`;

CREATE TABLE `categoria` (
  `id_categoria` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Primary Key',
  `nombre_categoria` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_categoria`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

/*Data for the table `categoria` */

LOCK TABLES `categoria` WRITE;

insert  into `categoria`(`id_categoria`,`nombre_categoria`) values (1,'1'),(2,'2'),(3,'3'),(4,'4'),(5,'5'),(6,'6'),(7,'7'),(8,'8');

UNLOCK TABLES;

/*Table structure for table `codigo` */

DROP TABLE IF EXISTS `codigo`;

CREATE TABLE `codigo` (
  `id_codigo` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Primary Key',
  `nombre_codigo` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_codigo`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

/*Data for the table `codigo` */

LOCK TABLES `codigo` WRITE;

UNLOCK TABLES;

/*Table structure for table `escalamiento` */

DROP TABLE IF EXISTS `escalamiento`;

CREATE TABLE `escalamiento` (
  `id_escalamiento` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Primary Key',
  `nombre_escalamiento` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_escalamiento`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

/*Data for the table `escalamiento` */

LOCK TABLES `escalamiento` WRITE;

insert  into `escalamiento`(`id_escalamiento`,`nombre_escalamiento`) values (1,'Crítico'),(2,'Alto'),(3,'Medio'),(4,'Bajo');

UNLOCK TABLES;

/*Table structure for table `estado` */

DROP TABLE IF EXISTS `estado`;

CREATE TABLE `estado` (
  `id_estado` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Primary Key',
  `nombre_estado` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_estado`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

/*Data for the table `estado` */

LOCK TABLES `estado` WRITE;

insert  into `estado`(`id_estado`,`nombre_estado`) values (1,'ACTIVO'),(2,'EN  PROCESO'),(3,'FINALIZADO');

UNLOCK TABLES;

/*Table structure for table `impacto` */

DROP TABLE IF EXISTS `impacto`;

CREATE TABLE `impacto` (
  `id_impacto` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Primary Key',
  `nombre_impacto` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_impacto`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `impacto` */

LOCK TABLES `impacto` WRITE;

UNLOCK TABLES;

/*Table structure for table `priorizacion` */

DROP TABLE IF EXISTS `priorizacion`;

CREATE TABLE `priorizacion` (
  `id_priorizacion` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Primary Key',
  `nombre_priorizacion` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_priorizacion`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `priorizacion` */

LOCK TABLES `priorizacion` WRITE;

UNLOCK TABLES;

/*Table structure for table `sede` */

DROP TABLE IF EXISTS `sede`;

CREATE TABLE `sede` (
  `id_sede` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Primary Key',
  `nombre_sede` varchar(255) DEFAULT NULL,
  `nit_sede` varchar(255) DEFAULT NULL,
  `pais_sede` varchar(255) DEFAULT NULL,
  `ciudad_sede` varchar(255) DEFAULT NULL,
  `barrio_sede` varchar(255) DEFAULT NULL,
  `direccion_sede` varchar(255) DEFAULT NULL,
  `telefono_sede` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_sede`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

/*Data for the table `sede` */

LOCK TABLES `sede` WRITE;

UNLOCK TABLES;

/*Table structure for table `tipo_incidentes` */

DROP TABLE IF EXISTS `tipo_incidentes`;

CREATE TABLE `tipo_incidentes` (
  `id_tipo_in` int(100) NOT NULL AUTO_INCREMENT,
  `nombre_tipo_in` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id_tipo_in`)
) ENGINE=InnoDB AUTO_INCREMENT=34 DEFAULT CHARSET=utf8mb4;

/*Data for the table `tipo_incidentes` */

LOCK TABLES `tipo_incidentes` WRITE;

insert  into `tipo_incidentes`(`id_tipo_in`,`nombre_tipo_in`) values (2,'Uso inadecuado de credenciales'),(3,'Violación a Políticas de Seguridad de la Información'),(4,'Acceso no autorizado a los activos de información'),(5,'Intrusión'),(6,'Intentos de actividad'),(7,'Ingeniería Social'),(8,'Negación de servicio'),(9,'Vulnerabilidades'),(10,'Malware'),(12,'Uso inadecuado de credenciales');

UNLOCK TABLES;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

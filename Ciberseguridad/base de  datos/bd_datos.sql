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

/*Table structure for table `act_codigo` */

DROP TABLE IF EXISTS `act_codigo`;

CREATE TABLE `act_codigo` (
  `id_codigo` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Primary Key',
  `nombre_codigo` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_codigo`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

/*Data for the table `act_codigo` */

LOCK TABLES `act_codigo` WRITE;

insert  into `act_codigo`(`id_codigo`,`nombre_codigo`) values (1,'1'),(2,'2'),(3,'3');

UNLOCK TABLES;

/*Table structure for table `act_confidencialidad` */

DROP TABLE IF EXISTS `act_confidencialidad`;

CREATE TABLE `act_confidencialidad` (
  `id_confidencialidad` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Primary Key',
  `nombre_confidencialidad` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_confidencialidad`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

/*Data for the table `act_confidencialidad` */

LOCK TABLES `act_confidencialidad` WRITE;

insert  into `act_confidencialidad`(`id_confidencialidad`,`nombre_confidencialidad`) values (2,'reservada');

UNLOCK TABLES;

/*Table structure for table `act_disponibilidad` */

DROP TABLE IF EXISTS `act_disponibilidad`;

CREATE TABLE `act_disponibilidad` (
  `id_disponibilidad` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Primary Key',
  `nombre_disponibilidad` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_disponibilidad`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

/*Data for the table `act_disponibilidad` */

LOCK TABLES `act_disponibilidad` WRITE;

insert  into `act_disponibilidad`(`id_disponibilidad`,`nombre_disponibilidad`) values (2,'confdoks');

UNLOCK TABLES;

/*Table structure for table `act_integridad` */

DROP TABLE IF EXISTS `act_integridad`;

CREATE TABLE `act_integridad` (
  `id_integridad` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Primary Key',
  `nombre_integridad` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_integridad`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

/*Data for the table `act_integridad` */

LOCK TABLES `act_integridad` WRITE;

insert  into `act_integridad`(`id_integridad`,`nombre_integridad`) values (1,'integridad');

UNLOCK TABLES;

/*Table structure for table `act_nivel_criticidad` */

DROP TABLE IF EXISTS `act_nivel_criticidad`;

CREATE TABLE `act_nivel_criticidad` (
  `id_nivel_criticidad` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Primary Key',
  `nombre_nivel_criticidad` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_nivel_criticidad`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

/*Data for the table `act_nivel_criticidad` */

LOCK TABLES `act_nivel_criticidad` WRITE;

insert  into `act_nivel_criticidad`(`id_nivel_criticidad`,`nombre_nivel_criticidad`) values (1,'holados'),(2,'alta');

UNLOCK TABLES;

/*Table structure for table `act_nombre` */

DROP TABLE IF EXISTS `act_nombre`;

CREATE TABLE `act_nombre` (
  `id_nomb_act` int(100) NOT NULL AUTO_INCREMENT,
  `nombre_activo` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id_nomb_act`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;

/*Data for the table `act_nombre` */

LOCK TABLES `act_nombre` WRITE;

insert  into `act_nombre`(`id_nomb_act`,`nombre_activo`) values (2,'Celular');

UNLOCK TABLES;

/*Table structure for table `act_tipo_activo` */

DROP TABLE IF EXISTS `act_tipo_activo`;

CREATE TABLE `act_tipo_activo` (
  `id_tipo_activo` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Primary Key',
  `nombre_tipo_activo` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_tipo_activo`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8;

/*Data for the table `act_tipo_activo` */

LOCK TABLES `act_tipo_activo` WRITE;

insert  into `act_tipo_activo`(`id_tipo_activo`,`nombre_tipo_activo`) values (1,'nombre1'),(2,'Información'),(3,'nombre3'),(4,'nombre3'),(5,'nombre4'),(6,'nombre5'),(17,'nombre6'),(19,'uso inadecuado de señalizaciones de aseo');

UNLOCK TABLES;

/*Table structure for table `act_ubicacion` */

DROP TABLE IF EXISTS `act_ubicacion`;

CREATE TABLE `act_ubicacion` (
  `id_ubicacion` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Primary Key',
  `nombre_ubicacion` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_ubicacion`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

/*Data for the table `act_ubicacion` */

LOCK TABLES `act_ubicacion` WRITE;

insert  into `act_ubicacion`(`id_ubicacion`,`nombre_ubicacion`) values (1,'mesa');

UNLOCK TABLES;

/*Table structure for table `inc_cargo` */

DROP TABLE IF EXISTS `inc_cargo`;

CREATE TABLE `inc_cargo` (
  `id_cargo` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Primary Key',
  `nombre_cargo` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_cargo`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

/*Data for the table `inc_cargo` */

LOCK TABLES `inc_cargo` WRITE;

insert  into `inc_cargo`(`id_cargo`,`nombre_cargo`) values (1,'Gerente'),(2,'Secretario administrador'),(3,'Funcionario'),(4,'Contratista');

UNLOCK TABLES;

/*Table structure for table `inc_categoria` */

DROP TABLE IF EXISTS `inc_categoria`;

CREATE TABLE `inc_categoria` (
  `id_categoria` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Primary Key',
  `nombre_categoria` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_categoria`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

/*Data for the table `inc_categoria` */

LOCK TABLES `inc_categoria` WRITE;

insert  into `inc_categoria`(`id_categoria`,`nombre_categoria`) values (1,'1'),(2,'2'),(3,'3'),(4,'4'),(5,'5'),(6,'6'),(7,'7'),(8,'8');

UNLOCK TABLES;

/*Table structure for table `inc_causa` */

DROP TABLE IF EXISTS `inc_causa`;

CREATE TABLE `inc_causa` (
  `id_causa` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Primary Key',
  `nombre_causa` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_causa`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

/*Data for the table `inc_causa` */

LOCK TABLES `inc_causa` WRITE;

insert  into `inc_causa`(`id_causa`,`nombre_causa`) values (2,'Casi cae, por piso resbaloso'),(3,'Las violaciones de la seguridad física que resultan en el robo, el daño intencional o la destrucción del equipo');

UNLOCK TABLES;

/*Table structure for table `inc_codigo` */

DROP TABLE IF EXISTS `inc_codigo`;

CREATE TABLE `inc_codigo` (
  `id_codigo` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Primary Key',
  `nombre_codigo` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_codigo`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

/*Data for the table `inc_codigo` */

LOCK TABLES `inc_codigo` WRITE;

insert  into `inc_codigo`(`id_codigo`,`nombre_codigo`) values (3,'  1'),(4,'2'),(5,'3'),(6,'4');

UNLOCK TABLES;

/*Table structure for table `inc_escalamiento` */

DROP TABLE IF EXISTS `inc_escalamiento`;

CREATE TABLE `inc_escalamiento` (
  `id_escalamiento` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Primary Key',
  `nombre_escalamiento` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_escalamiento`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

/*Data for the table `inc_escalamiento` */

LOCK TABLES `inc_escalamiento` WRITE;

insert  into `inc_escalamiento`(`id_escalamiento`,`nombre_escalamiento`) values (1,'Crítico'),(2,'Alto'),(3,'Medio'),(4,'Bajo');

UNLOCK TABLES;

/*Table structure for table `inc_estado` */

DROP TABLE IF EXISTS `inc_estado`;

CREATE TABLE `inc_estado` (
  `id_estado` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Primary Key',
  `nombre_estado` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_estado`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

/*Data for the table `inc_estado` */

LOCK TABLES `inc_estado` WRITE;

insert  into `inc_estado`(`id_estado`,`nombre_estado`) values (1,'ACTIVO'),(2,'EN  PROCESO'),(3,'FINALIZADO');

UNLOCK TABLES;

/*Table structure for table `inc_impacto` */

DROP TABLE IF EXISTS `inc_impacto`;

CREATE TABLE `inc_impacto` (
  `id_impacto` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Primary Key',
  `nombre_impacto` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_impacto`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

/*Data for the table `inc_impacto` */

LOCK TABLES `inc_impacto` WRITE;

insert  into `inc_impacto`(`id_impacto`,`nombre_impacto`) values (2,'Alto'),(3,'Medio'),(4,'Bajo');

UNLOCK TABLES;

/*Table structure for table `inc_priorizacion` */

DROP TABLE IF EXISTS `inc_priorizacion`;

CREATE TABLE `inc_priorizacion` (
  `id_priorizacion` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Primary Key',
  `nombre_priorizacion` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_priorizacion`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

/*Data for the table `inc_priorizacion` */

LOCK TABLES `inc_priorizacion` WRITE;

insert  into `inc_priorizacion`(`id_priorizacion`,`nombre_priorizacion`) values (2,'Alta'),(3,'medio'),(4,'bajo');

UNLOCK TABLES;

/*Table structure for table `inc_sede` */

DROP TABLE IF EXISTS `inc_sede`;

CREATE TABLE `inc_sede` (
  `id_sede` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Primary Key',
  `nombre_sede` varchar(255) DEFAULT NULL,
  `nit_sede` varchar(255) DEFAULT NULL,
  `pais_sede` varchar(255) DEFAULT NULL,
  `ciudad_sede` varchar(255) DEFAULT NULL,
  `barrio_sede` varchar(255) DEFAULT NULL,
  `direccion_sede` varchar(255) DEFAULT NULL,
  `telefono_sede` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_sede`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

/*Data for the table `inc_sede` */

LOCK TABLES `inc_sede` WRITE;

insert  into `inc_sede`(`id_sede`,`nombre_sede`,`nit_sede`,`pais_sede`,`ciudad_sede`,`barrio_sede`,`direccion_sede`,`telefono_sede`) values (2,'valledupar',NULL,NULL,NULL,NULL,NULL,NULL),(4,'Aguachica',NULL,NULL,NULL,NULL,NULL,NULL),(5,'Agustín codazzi',NULL,NULL,NULL,NULL,NULL,NULL),(6,'Becerril',NULL,NULL,NULL,NULL,NULL,NULL);

UNLOCK TABLES;

/*Table structure for table `inc_tipo_incidentes` */

DROP TABLE IF EXISTS `inc_tipo_incidentes`;

CREATE TABLE `inc_tipo_incidentes` (
  `id_tipo_in` int(100) NOT NULL AUTO_INCREMENT,
  `nombre_tipo_in` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id_tipo_in`)
) ENGINE=InnoDB AUTO_INCREMENT=39 DEFAULT CHARSET=utf8mb4;

/*Data for the table `inc_tipo_incidentes` */

LOCK TABLES `inc_tipo_incidentes` WRITE;

insert  into `inc_tipo_incidentes`(`id_tipo_in`,`nombre_tipo_in`) values (2,'Uso inadecuado de credenciales'),(3,'Violación a Políticas de Seguridad de la Información'),(4,'Acceso no autorizado a los activos de información'),(5,'Intrusión'),(6,'Intentos de actividad'),(7,'Ingeniería Social'),(8,'Negación de servicio'),(9,'Vulnerabilidades'),(10,'Malware');

UNLOCK TABLES;

/*Table structure for table `rie_control_riesgo` */

DROP TABLE IF EXISTS `rie_control_riesgo`;

CREATE TABLE `rie_control_riesgo` (
  `id_control_riesgo` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Primary Key',
  `nombre_control_riesgo` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_control_riesgo`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `rie_control_riesgo` */

LOCK TABLES `rie_control_riesgo` WRITE;

UNLOCK TABLES;

/*Table structure for table `rie_impacto` */

DROP TABLE IF EXISTS `rie_impacto`;

CREATE TABLE `rie_impacto` (
  `id_impacto` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Primary Key',
  `nombre_impacto` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_impacto`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `rie_impacto` */

LOCK TABLES `rie_impacto` WRITE;

UNLOCK TABLES;

/*Table structure for table `rie_probabilidad` */

DROP TABLE IF EXISTS `rie_probabilidad`;

CREATE TABLE `rie_probabilidad` (
  `id_probabilidad` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Primary Key',
  `nombre_probabilidad` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_probabilidad`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `rie_probabilidad` */

LOCK TABLES `rie_probabilidad` WRITE;

UNLOCK TABLES;

/*Table structure for table `rie_puntaje` */

DROP TABLE IF EXISTS `rie_puntaje`;

CREATE TABLE `rie_puntaje` (
  `id_puntaje` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Primary Key',
  `nombre_puntaje` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_puntaje`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `rie_puntaje` */

LOCK TABLES `rie_puntaje` WRITE;

UNLOCK TABLES;

/*Table structure for table `rie_puntaje_herramienta` */

DROP TABLE IF EXISTS `rie_puntaje_herramienta`;

CREATE TABLE `rie_puntaje_herramienta` (
  `id_puntaje_herramienta` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Primary Key',
  `nombre_puntaje_herramienta` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_puntaje_herramienta`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `rie_puntaje_herramienta` */

LOCK TABLES `rie_puntaje_herramienta` WRITE;

UNLOCK TABLES;

/*Table structure for table `rie_seguimento` */

DROP TABLE IF EXISTS `rie_seguimento`;

CREATE TABLE `rie_seguimento` (
  `id_seguimento` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Primary Key',
  `nombre_seguimento` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_seguimento`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `rie_seguimento` */

LOCK TABLES `rie_seguimento` WRITE;

UNLOCK TABLES;

/*Table structure for table `rie_tipo_control` */

DROP TABLE IF EXISTS `rie_tipo_control`;

CREATE TABLE `rie_tipo_control` (
  `id_tipo_control` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Primary Key',
  `nombre_tipo_control` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_tipo_control`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `rie_tipo_control` */

LOCK TABLES `rie_tipo_control` WRITE;

UNLOCK TABLES;

/*Table structure for table `rie_tipo_impacto` */

DROP TABLE IF EXISTS `rie_tipo_impacto`;

CREATE TABLE `rie_tipo_impacto` (
  `id_tipo_impacto` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Primary Key',
  `nombre_tipo_impacto` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_tipo_impacto`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `rie_tipo_impacto` */

LOCK TABLES `rie_tipo_impacto` WRITE;

UNLOCK TABLES;

/*Table structure for table `rie_tipo_riesgo` */

DROP TABLE IF EXISTS `rie_tipo_riesgo`;

CREATE TABLE `rie_tipo_riesgo` (
  `id_tipo_riesgo` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Primary Key',
  `nombre_tipo_riesgo` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_tipo_riesgo`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `rie_tipo_riesgo` */

LOCK TABLES `rie_tipo_riesgo` WRITE;

UNLOCK TABLES;

/*Table structure for table `rie_zona_riesgo` */

DROP TABLE IF EXISTS `rie_zona_riesgo`;

CREATE TABLE `rie_zona_riesgo` (
  `id_zona_riesgo` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Primary Key',
  `nombre_zona_riesgo` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_zona_riesgo`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `rie_zona_riesgo` */

LOCK TABLES `rie_zona_riesgo` WRITE;

UNLOCK TABLES;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

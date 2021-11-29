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

/*Table structure for table `administrador` */

DROP TABLE IF EXISTS `administrador`;

CREATE TABLE `administrador` (
  `id_adm` int(11) NOT NULL AUTO_INCREMENT COMMENT 'primary key',
  `create_time` datetime DEFAULT NULL COMMENT 'create time',
  `update_time` datetime DEFAULT NULL COMMENT 'update time',
  `tipo_doc_adm` varchar(255) DEFAULT NULL,
  `num_id_adm` int(255) DEFAULT NULL,
  `nombre_adm` varchar(255) DEFAULT NULL,
  `apellido_adm` varchar(255) DEFAULT NULL,
  `telefono_adm` int(11) DEFAULT NULL,
  `direccion_adm` varchar(255) DEFAULT NULL,
  `correo_adm` varchar(255) DEFAULT NULL,
  `fecha_nacimiento_adm` date DEFAULT NULL,
  `nacionalidad_adm` varchar(255) DEFAULT NULL,
  `codigo_empleado_adm` varchar(255) DEFAULT NULL,
  `contraseña_adm` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_adm`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

/*Data for the table `administrador` */

LOCK TABLES `administrador` WRITE;

insert  into `administrador`(`id_adm`,`create_time`,`update_time`,`tipo_doc_adm`,`num_id_adm`,`nombre_adm`,`apellido_adm`,`telefono_adm`,`direccion_adm`,`correo_adm`,`fecha_nacimiento_adm`,`nacionalidad_adm`,`codigo_empleado_adm`,`contraseña_adm`) values (1,NULL,NULL,'CC',1192811997,'keren','arias',2147483647,'mz 20 casa 17','keren@gmail.com','2001-01-13','colombia','555555','keren'),(2,NULL,NULL,'cc',123456789,'Keren','Arias',55555,'mz 20 casa 17','kearias79@misena.edu.co','2001-01-13','Colombia','333333','1234');

UNLOCK TABLES;

/*Table structure for table `cargo` */

DROP TABLE IF EXISTS `cargo`;

CREATE TABLE `cargo` (
  `id_cargo` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Primary Key',
  `nombre_cargo` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_cargo`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `cargo` */

LOCK TABLES `cargo` WRITE;

UNLOCK TABLES;

/*Table structure for table `categoria` */

DROP TABLE IF EXISTS `categoria`;

CREATE TABLE `categoria` (
  `id_categoria` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Primary Key',
  `nombre_categoria` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_categoria`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `categoria` */

LOCK TABLES `categoria` WRITE;

UNLOCK TABLES;

/*Table structure for table `clasificacion_disponibilidad` */

DROP TABLE IF EXISTS `clasificacion_disponibilidad`;

CREATE TABLE `clasificacion_disponibilidad` (
  `id_disponibilidad` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Primary Key',
  `create_time` datetime DEFAULT NULL COMMENT 'Create Time',
  `update_time` datetime DEFAULT NULL COMMENT 'Update Time',
  `nombre_clasificacion_dis` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_disponibilidad`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

/*Data for the table `clasificacion_disponibilidad` */

LOCK TABLES `clasificacion_disponibilidad` WRITE;

insert  into `clasificacion_disponibilidad`(`id_disponibilidad`,`create_time`,`update_time`,`nombre_clasificacion_dis`) values (1,NULL,NULL,'Alta'),(2,NULL,NULL,'Media'),(3,NULL,NULL,'Baja');

UNLOCK TABLES;

/*Table structure for table `clasificacion_integridad` */

DROP TABLE IF EXISTS `clasificacion_integridad`;

CREATE TABLE `clasificacion_integridad` (
  `id_integridad` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Primary Key',
  `create_time` datetime DEFAULT NULL COMMENT 'Create Time',
  `update_time` datetime DEFAULT NULL COMMENT 'Update Time',
  `nombre_clasificacion_inte` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_integridad`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

/*Data for the table `clasificacion_integridad` */

LOCK TABLES `clasificacion_integridad` WRITE;

insert  into `clasificacion_integridad`(`id_integridad`,`create_time`,`update_time`,`nombre_clasificacion_inte`) values (1,NULL,NULL,'Alta'),(2,NULL,NULL,'Media'),(3,NULL,NULL,'Baja');

UNLOCK TABLES;

/*Table structure for table `codigo` */

DROP TABLE IF EXISTS `codigo`;

CREATE TABLE `codigo` (
  `id_codigo` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Primary Key',
  `nombre_codigo` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_codigo`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `codigo` */

LOCK TABLES `codigo` WRITE;

UNLOCK TABLES;

/*Table structure for table `escalamiento` */

DROP TABLE IF EXISTS `escalamiento`;

CREATE TABLE `escalamiento` (
  `id_escalamiento` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Primary Key',
  `nombre_escalamiento` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_escalamiento`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `escalamiento` */

LOCK TABLES `escalamiento` WRITE;

UNLOCK TABLES;

/*Table structure for table `estado` */

DROP TABLE IF EXISTS `estado`;

CREATE TABLE `estado` (
  `id_estado` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Primary Key',
  `nombre_estado` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_estado`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `estado` */

LOCK TABLES `estado` WRITE;

UNLOCK TABLES;

/*Table structure for table `gestion_activo` */

DROP TABLE IF EXISTS `gestion_activo`;

CREATE TABLE `gestion_activo` (
  `id_act` int(11) NOT NULL AUTO_INCREMENT COMMENT 'primary key',
  `create_time` datetime DEFAULT NULL COMMENT 'create time',
  `update_time` datetime DEFAULT NULL COMMENT 'update time',
  `identi_act` varchar(255) DEFAULT NULL,
  `proceso_act` varchar(255) DEFAULT NULL,
  `nombre_act` varchar(255) DEFAULT NULL,
  `obs_act` varchar(255) DEFAULT NULL,
  `tipo_act` varchar(255) DEFAULT NULL,
  `infor_act` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_act`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `gestion_activo` */

LOCK TABLES `gestion_activo` WRITE;

UNLOCK TABLES;

/*Table structure for table `gestion_incidente` */

DROP TABLE IF EXISTS `gestion_incidente`;

CREATE TABLE `gestion_incidente` (
  `id_in` int(11) NOT NULL AUTO_INCREMENT COMMENT 'primary key',
  `codigo_in` varchar(255) DEFAULT NULL,
  `responsable_in` varchar(255) DEFAULT NULL,
  `fecha_r` datetime DEFAULT NULL,
  `nombre_R` varchar(255) DEFAULT NULL,
  `cargo` varchar(255) DEFAULT NULL,
  `cod_emp` varchar(255) DEFAULT NULL,
  `sede` varchar(255) DEFAULT NULL,
  `email_in` varchar(255) DEFAULT NULL,
  `categoria_in` int(255) DEFAULT NULL,
  `tipo_in` varchar(255) DEFAULT NULL,
  `estado` varchar(255) DEFAULT NULL,
  `priorizacion_in` varchar(255) DEFAULT NULL,
  `escalamiento` varchar(255) DEFAULT NULL,
  `lugar` varchar(255) DEFAULT NULL,
  `descripcion_in` varchar(255) DEFAULT NULL,
  `fecha_inc` date DEFAULT NULL,
  `causa_in` varchar(255) DEFAULT NULL,
  `impacto_in` varchar(255) DEFAULT NULL,
  `solu_in` varchar(255) DEFAULT NULL,
  `observaciones` varchar(255) DEFAULT NULL,
  `SN` varchar(255) DEFAULT NULL,
  `marca` varchar(255) DEFAULT NULL,
  `modelo` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_in`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8;

/*Data for the table `gestion_incidente` */

LOCK TABLES `gestion_incidente` WRITE;

insert  into `gestion_incidente`(`id_in`,`codigo_in`,`responsable_in`,`fecha_r`,`nombre_R`,`cargo`,`cod_emp`,`sede`,`email_in`,`categoria_in`,`tipo_in`,`estado`,`priorizacion_in`,`escalamiento`,`lugar`,`descripcion_in`,`fecha_inc`,`causa_in`,`impacto_in`,`solu_in`,`observaciones`,`SN`,`marca`,`modelo`) values (6,'111111111111111111111111',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(7,'11111111111111111','2222222222',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(8,'11111111111111','2222222222',NULL,'3333333333333333333','1111111111111111111',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(9,'11111111111111','2222222222',NULL,'3333333333333333333','1111111111111111111','sasdasd',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(10,'11111111111111','2222222222',NULL,'3333333333333333333',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(11,NULL,NULL,NULL,'1',NULL,'3','4',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(12,NULL,NULL,NULL,'1',NULL,'3','4','5',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(13,NULL,NULL,NULL,'1',NULL,'3','4','5',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(14,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'5',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(15,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,9,'5',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(16,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,2,'1',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(17,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(18,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'9',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(19,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'1',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(20,'keren12345','','2021-11-08 19:33:00','keren12345','1','keren12345','keren12345','keren@gmail.com',3,'26','2','medio','1','keren12345','keren12345','2021-11-10','keren12345','alto','keren12345','keren12345',NULL,NULL,NULL),(21,'keren12345','','2021-11-08 19:33:00','keren12345','1','keren12345','keren12345','keren@gmail.com',3,'26','2','medio','1','keren12345','keren12345','2021-11-10','keren12345','alto','keren12345','keren12345',NULL,NULL,NULL),(22,'keren12345','','2021-11-08 19:33:00','keren12345','1','keren12345','keren12345','keren@gmail.com',3,'26','2','medio','1','keren12345','keren12345','2021-11-10','keren12345','alto','keren12345','keren12345',NULL,NULL,NULL),(23,'keren12345','keren12345','2021-11-08 19:33:00','keren12345','1','keren12345','keren12345','keren@gmail.com',3,'26','2','medio','1','keren12345','keren12345','2021-11-10','keren12345','alto','keren12345','keren12345',NULL,NULL,NULL);

UNLOCK TABLES;

/*Table structure for table `gestion_riesgo` */

DROP TABLE IF EXISTS `gestion_riesgo`;

CREATE TABLE `gestion_riesgo` (
  `id_riesgo` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Primary Key',
  `create_time` datetime DEFAULT NULL COMMENT 'Create Time',
  `update_time` datetime DEFAULT NULL COMMENT 'Update Time',
  `proceso` varchar(1000) DEFAULT NULL,
  `codigo` varchar(1000) DEFAULT NULL,
  `riesgo` varchar(255) DEFAULT NULL,
  `clasificacion` varchar(255) DEFAULT NULL,
  `causas` varchar(1000) DEFAULT NULL,
  `probabilidad` varchar(255) DEFAULT NULL,
  `impacto` varchar(255) DEFAULT NULL,
  `riesgo_indivi` varchar(255) DEFAULT NULL,
  `opciones_manejo` varchar(255) DEFAULT NULL,
  `actividad_control` varchar(1000) DEFAULT NULL,
  `soporte` varchar(1000) DEFAULT NULL,
  `responsable` varchar(1000) DEFAULT NULL,
  `tiempo` varchar(255) DEFAULT NULL,
  `indicador_efi_comentario` varchar(1000) DEFAULT NULL,
  `indicador_eficacia` varchar(255) DEFAULT NULL,
  `indicador_efec_comentario` varchar(1000) DEFAULT NULL,
  `indicador_efectividad` varchar(255) DEFAULT NULL,
  `tipo_riesgo` varchar(255) DEFAULT NULL,
  `amenaza` varchar(255) DEFAULT NULL,
  `origen` varchar(255) DEFAULT NULL,
  `fuente_amenaza` varchar(255) DEFAULT NULL,
  `motivacion` varchar(255) DEFAULT NULL,
  `acciones_amenazante` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_riesgo`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `gestion_riesgo` */

LOCK TABLES `gestion_riesgo` WRITE;

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

/*Table structure for table `registro_inv` */

DROP TABLE IF EXISTS `registro_inv`;

CREATE TABLE `registro_inv` (
  `id_reg_act` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Primary Key',
  `create_time` datetime DEFAULT NULL COMMENT 'Create Time',
  `update_time` datetime DEFAULT NULL COMMENT 'Update Time',
  `fecha_ingreso` datetime DEFAULT NULL,
  `fecha_salida` datetime DEFAULT NULL,
  `identificador` varchar(255) DEFAULT NULL,
  `estado_activ` varchar(1000) DEFAULT NULL,
  `activ_P_act` varchar(1000) DEFAULT NULL,
  `inclusion_act` varchar(1000) DEFAULT NULL,
  `rol_act` varchar(1000) DEFAULT NULL,
  `cambios_act` varchar(1000) DEFAULT NULL,
  `cambio_ubi_act` varchar(1000) DEFAULT NULL,
  `observaciones` varchar(1000) DEFAULT NULL,
  PRIMARY KEY (`id_reg_act`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `registro_inv` */

LOCK TABLES `registro_inv` WRITE;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `sede` */

LOCK TABLES `sede` WRITE;

UNLOCK TABLES;

/*Table structure for table `tipo_incidentes` */

DROP TABLE IF EXISTS `tipo_incidentes`;

CREATE TABLE `tipo_incidentes` (
  `id_tipo_in` int(100) NOT NULL AUTO_INCREMENT,
  `nombre_tipo_in` varchar(100) DEFAULT NULL,
  `cambiogenerado` int(100) DEFAULT NULL,
  PRIMARY KEY (`id_tipo_in`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4;

/*Data for the table `tipo_incidentes` */

LOCK TABLES `tipo_incidentes` WRITE;

insert  into `tipo_incidentes`(`id_tipo_in`,`nombre_tipo_in`,`cambiogenerado`) values (1,'Manejo inadecuado de los datos',1),(2,'Uso inadecuado de credenciales',NULL),(3,'Violación a Políticas de Seguridad de la Información',3),(4,'Acceso no autorizado a los activos de información',NULL),(5,'Intrusión',NULL),(6,'Intentos de actividad',NULL),(7,'Ingeniería Social',NULL),(8,'Negación de servicio',NULL),(9,'Vulnerabilidades',NULL),(10,'Malware',NULL);

UNLOCK TABLES;

/*Table structure for table `vulnerabilidades` */

DROP TABLE IF EXISTS `vulnerabilidades`;

CREATE TABLE `vulnerabilidades` (
  `id_vul` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Primary Key',
  `create_time` datetime DEFAULT NULL COMMENT 'Create Time',
  `update_time` datetime DEFAULT NULL COMMENT 'Update Time',
  `tipo_activo` varchar(1000) DEFAULT NULL,
  `vulnerabilidad` varchar(1000) DEFAULT NULL,
  `amenaza` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_vul`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `vulnerabilidades` */

LOCK TABLES `vulnerabilidades` WRITE;

UNLOCK TABLES;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

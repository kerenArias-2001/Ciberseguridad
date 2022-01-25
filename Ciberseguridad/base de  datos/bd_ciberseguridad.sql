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

/*Table structure for table `acuerdos_confidencialidad` */

DROP TABLE IF EXISTS `acuerdos_confidencialidad`;

CREATE TABLE `acuerdos_confidencialidad` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `identificacion` varchar(255) DEFAULT NULL,
  `nombre_empresa` varchar(255) DEFAULT NULL,
  `num_nit` varchar(255) DEFAULT NULL,
  `representante` varchar(255) DEFAULT NULL,
  `identificacion2` varchar(255) DEFAULT NULL,
  `contrato` varchar(255) DEFAULT NULL,
  `empleador` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=43 DEFAULT CHARSET=utf8mb4;

/*Data for the table `acuerdos_confidencialidad` */

LOCK TABLES `acuerdos_confidencialidad` WRITE;

UNLOCK TABLES;

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
  `tipo_usuario` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_adm`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

/*Data for the table `administrador` */

LOCK TABLES `administrador` WRITE;

UNLOCK TABLES;

/*Table structure for table `gestion_activo` */

DROP TABLE IF EXISTS `gestion_activo`;

CREATE TABLE `gestion_activo` (
  `identi_act` int(255) NOT NULL AUTO_INCREMENT,
  `fecha_act` varchar(255) DEFAULT NULL COMMENT 'create time',
  `respons_act` varchar(255) DEFAULT NULL,
  `nombre_act` varchar(255) DEFAULT NULL,
  `obser_act` varchar(255) DEFAULT NULL,
  `tipo_act` varchar(255) DEFAULT NULL,
  `confid_act` varchar(255) DEFAULT NULL,
  `integ_act` varchar(255) DEFAULT NULL,
  `dispon_act` varchar(255) DEFAULT NULL,
  `ubicac_act` varchar(255) DEFAULT NULL,
  `desc_ubic_act` varchar(255) DEFAULT NULL,
  `critic_act` varchar(255) DEFAULT NULL,
  `justif_act` varchar(255) DEFAULT NULL,
  `propiet_act` varchar(255) DEFAULT NULL,
  `custod_act` varchar(255) DEFAULT NULL,
  `fech_ing_act` timestamp NULL DEFAULT NULL,
  `fech_sali_act` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`identi_act`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

/*Data for the table `gestion_activo` */

LOCK TABLES `gestion_activo` WRITE;

UNLOCK TABLES;

/*Table structure for table `gestion_incidente` */

DROP TABLE IF EXISTS `gestion_incidente`;

CREATE TABLE `gestion_incidente` (
  `id_in` int(11) NOT NULL AUTO_INCREMENT COMMENT 'primary key',
  `codigo_in` int(255) DEFAULT NULL,
  `responsable_in` varchar(255) DEFAULT NULL,
  `fecha_r` varchar(255) DEFAULT NULL,
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
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=utf8;

/*Data for the table `gestion_incidente` */

LOCK TABLES `gestion_incidente` WRITE;

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

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

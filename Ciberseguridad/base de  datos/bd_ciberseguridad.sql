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
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

/*Data for the table `gestion_activo` */

LOCK TABLES `gestion_activo` WRITE;

insert  into `gestion_activo`(`identi_act`,`fecha_act`,`respons_act`,`nombre_act`,`obser_act`,`tipo_act`,`confid_act`,`integ_act`,`dispon_act`,`ubicac_act`,`desc_ubic_act`,`critic_act`,`justif_act`,`propiet_act`,`custod_act`,`fech_ing_act`,`fech_sali_act`) values (1,'12-02-2021 09:39:39 pm','keren','Celular','kjnkjcnsjkldncksndc','1','2','1','2','1','lknsclkdnlcsnlkdcnkls','1','skjdncksndkcnskdcnkjs','lknlkcsnlndlnclksndc','lkdcslkcnlksndlcslkdnclks','2021-12-02 21:40:00','2021-12-02 21:41:00'),(2,'12-02-2021 10:33:59 pm','keren','Celular','ultimo modelo','uso inadecuado de señalizaciones de aseo','reservada','integridad','confdoks','mesa','holamañana','alta','cambio3','cambio','keren123123','0000-00-00 00:00:00','0000-00-00 00:00:00'),(3,'12-02-2021 11:01:00 pm','keren','Celular','keren','uso inadecuado de señalizaciones de aseo','reservada','integridad','confdoks','mesa','dskjbkdsjfbksdf','holados','ejemplo','sflkdmlsmldfmsldfmlsd','dflkslkfdmlsmflsmdl','2021-12-02 23:01:00','2021-12-02 23:01:00');

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
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=utf8;

/*Data for the table `gestion_incidente` */

LOCK TABLES `gestion_incidente` WRITE;

insert  into `gestion_incidente`(`id_in`,`codigo_in`,`responsable_in`,`fecha_r`,`nombre_R`,`cargo`,`cod_emp`,`sede`,`email_in`,`categoria_in`,`tipo_in`,`estado`,`priorizacion_in`,`escalamiento`,`lugar`,`descripcion_in`,`fecha_inc`,`causa_in`,`impacto_in`,`solu_in`,`observaciones`,`SN`,`marca`,`modelo`) values (24,1,'keren Arias','0000-00-00 00:00:00','Esther Acosta','1','45678','2','keren@gmail.com',2,'6','2','0','2','mhvhkfjfyvgjncv cb ','','2021-11-17','','medio','nkdr cgjxfgjtfk cfhdfjykjyg','rfdrgd xhdjbvjftn cxgdrjry','346t5567658','gfhfgfhcjfgfn f','dgssdggfnfgfg gbfg'),(25,2,'keren','11-30-2021 08:26:35 pm','arias acosta','2','1234567','2','keren@gmail.com',6,'8','1','2','1','ejemp,o12344','Ejemp,O12344','2021-11-30','','alto','Ejemp,O12344','Ejemp,O12344','Ejemp,O12344','Ejemp,O12344','Ejemp,O12344'),(26,3,'arias acosta','11-30-2021 08:32:01 pm','keren','0','1234567','','keren@gmail.com',5,'Acceso no autorizado a los activos de información','ACTIVO','Alta','Crítico','nombre12124','nombre1231231','2021-11-30','','bajo','nombre424324','nombredsmlfsdm','saxaskxaksxm','kcsmkdcmskdc','cmskdcksmcks'),(27,4,'keren','11-30-2021 09:00:39 pm','arias','Gerente','5555555','valledupar','keren@gmail.com',3,'Violación a Políticas de Seguridad de la Información','EN  PROCESO','Alta','Crítico','name=\"cargo_in\"','name=\"cargo_in\"','2021-11-30','','medio','name=\"cargo_in\"','name=\"cargo_in\"','name=\"cargo_in\"','name=\"cargo_in\"','name=\"cargo_in\"');

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

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

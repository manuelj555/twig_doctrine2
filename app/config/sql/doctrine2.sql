/*
Navicat MySQL Data Transfer

Source Server         : local
Source Server Version : 50524
Source Host           : localhost:3306
Source Database       : doctrine2

Target Server Type    : MYSQL
Target Server Version : 50524
File Encoding         : 65001

Date: 2013-05-04 20:54:39
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `articulos`
-- ----------------------------
DROP TABLE IF EXISTS `articulos`;
CREATE TABLE `articulos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `precio` double NOT NULL,
  `cantidad` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_9C6F85973A909126` (`nombre`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of articulos
-- ----------------------------
INSERT INTO `articulos` VALUES ('1', 'lapiz', '1.5', '20', '1');
INSERT INTO `articulos` VALUES ('2', 'Borrador', '2', '120', '1');
INSERT INTO `articulos` VALUES ('3', 'Cuaderno', '12', '60', '1');
INSERT INTO `articulos` VALUES ('5', 'Sacapunta', '3', '20', '1');
INSERT INTO `articulos` VALUES ('6', 'Regla', '8', '5', '1');
INSERT INTO `articulos` VALUES ('7', 'Colores', '22', '32', '1');
INSERT INTO `articulos` VALUES ('8', 'Compas', '30', '8', '1');
INSERT INTO `articulos` VALUES ('9', 'Block de dibujo', '15', '15', '1');
INSERT INTO `articulos` VALUES ('10', 'Cartulina', '5', '80', '1');

-- ----------------------------
-- Table structure for `compras`
-- ----------------------------
DROP TABLE IF EXISTS `compras`;
CREATE TABLE `compras` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `persona_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_3692E1B7F5F88DB9` (`persona_id`),
  CONSTRAINT `FK_3692E1B7F5F88DB9` FOREIGN KEY (`persona_id`) REFERENCES `personas` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of compras
-- ----------------------------

-- ----------------------------
-- Table structure for `compra_articulo`
-- ----------------------------
DROP TABLE IF EXISTS `compra_articulo`;
CREATE TABLE `compra_articulo` (
  `compra_id` int(11) NOT NULL,
  `articulo_id` int(11) NOT NULL,
  PRIMARY KEY (`compra_id`,`articulo_id`),
  KEY `IDX_A07B755F2E704D7` (`compra_id`),
  KEY `IDX_A07B7552DBC2FC9` (`articulo_id`),
  CONSTRAINT `FK_A07B7552DBC2FC9` FOREIGN KEY (`articulo_id`) REFERENCES `articulos` (`id`) ON DELETE CASCADE,
  CONSTRAINT `FK_A07B755F2E704D7` FOREIGN KEY (`compra_id`) REFERENCES `compras` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of compra_articulo
-- ----------------------------

-- ----------------------------
-- Table structure for `personas`
-- ----------------------------
DROP TABLE IF EXISTS `personas`;
CREATE TABLE `personas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `edad` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of personas
-- ----------------------------
INSERT INTO `personas` VALUES ('1', 'manuel', '24');
INSERT INTO `personas` VALUES ('2', 'normelis', '22');
INSERT INTO `personas` VALUES ('3', 'hola', '32');
INSERT INTO `personas` VALUES ('4', 'josÃ©', '24');

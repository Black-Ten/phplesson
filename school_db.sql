/*
Navicat MySQL Data Transfer

Source Server         : test
Source Server Version : 50505
Source Host           : localhost:3306
Source Database       : school_db

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2023-06-20 16:40:58
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `class`
-- ----------------------------
DROP TABLE IF EXISTS `class`;
CREATE TABLE `class` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `class` varchar(100) NOT NULL,
  `class_id` char(255) NOT NULL,
  `date` date NOT NULL,
  `user_id` char(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- ----------------------------
-- Records of class
-- ----------------------------
INSERT INTO `class` VALUES ('1', '1', '1', '0000-00-00', '1');

-- ----------------------------
-- Table structure for `schools`
-- ----------------------------
DROP TABLE IF EXISTS `schools`;
CREATE TABLE `schools` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `school` varchar(100) NOT NULL,
  `school_id` char(255) NOT NULL,
  `date` date NOT NULL,
  `user_id` char(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- ----------------------------
-- Records of schools
-- ----------------------------
INSERT INTO `schools` VALUES ('1', '1', '1', '0000-00-00', '1');

-- ----------------------------
-- Table structure for `users`
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(20) NOT NULL,
  `lastname` varchar(20) NOT NULL,
  `date` date NOT NULL,
  `user_id` varchar(60) DEFAULT NULL,
  `gender` varchar(1) NOT NULL,
  `school_id` bigint(20) DEFAULT NULL,
  `rank` varchar(20) NOT NULL DEFAULT '',
  `password` char(255) NOT NULL,
  `email` char(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES ('1', 'yc', 'Z', '2023-06-16', 'Ksf0RwSQeMAkyTZPf3vkaP7aT6W9vREtqiiNVFQbohKBsLIWLw6vq9IHltVG', '女', null, '学生', 'EysdZTRpSmzZhmmFEHSJiBbLcdUOcAA3IbKqJnmxSicahPWVrUFmyyV88ds2', '123@123.com');
INSERT INTO `users` VALUES ('2', 'yc', 'Z', '2023-06-16', 'fXZneiMXZ1xHXsmdF3hBJMlHqwgM5AVFJ1WrDsByrXFRRPKY9YeZmTimLIL4', '女', null, '学生', '$2y$10$eFHFx07Jxnt2UiV0xVf6PuzAJDWpff3a1GMiDL6DjsQeJCyTgB5mW', '123@1234.com');
INSERT INTO `users` VALUES ('3', '三', '张', '2023-06-17', 'd5qrtdM8dZeGudJey4DoJBmiMD4JQ3TGypGybO3dxRcANBYCmycdg7Lu1439', '女', null, '学生', '$2y$10$GaQfgNTkh1MeX9Nf.Hjr/uPZ.W.HNguIoyMMFC5lgoqSaEi.oQCPa', '123123123@123.com');
INSERT INTO `users` VALUES ('4', '三', '张', '2023-06-17', 'mwZWKizM7XymL4kdOmQdy5GJOs6tibVglV0hoZEn6fJoj8DakGZDJJ7gD6m1', '男', null, '学生', '$2y$10$i7K/IHhytrydCBe71XGE6uDNVHhjym1XpnohH.JHyiJX7WuW5t30e', '1234567@189.com');

/*
 Navicat Premium Data Transfer

 Source Server         : localhost_3306
 Source Server Type    : MySQL
 Source Server Version : 100418
 Source Host           : localhost:3306
 Source Schema         : db_edu

 Target Server Type    : MySQL
 Target Server Version : 100418
 File Encoding         : 65001

 Date: 09/06/2021 22:35:46
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for account_user
-- ----------------------------
DROP TABLE IF EXISTS `account_user`;
CREATE TABLE `account_user`  (
  `id_account` int(6) NOT NULL AUTO_INCREMENT,
  `ten_taikhoan` varchar(30) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `mk_taikhoan` varchar(30) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `role_id` int(1) NOT NULL,
  `phone` int(10) NOT NULL,
  `ngaytao_tk` date NOT NULL,
  PRIMARY KEY (`id_account`) USING BTREE,
  INDEX `fk_account_id_role`(`role_id`) USING BTREE,
  CONSTRAINT `fk_account_id_role` FOREIGN KEY (`role_id`) REFERENCES `role` (`id_role`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE = InnoDB AUTO_INCREMENT = 5 CHARACTER SET = utf8 COLLATE = utf8_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for bill
-- ----------------------------
DROP TABLE IF EXISTS `bill`;
CREATE TABLE `bill`  (
  `id_bill` int(6) NOT NULL AUTO_INCREMENT,
  `total` int(10) NOT NULL,
  `sale_id` int(6) NOT NULL,
  `fee_id` int(6) NOT NULL,
  `student_id` int(6) NOT NULL,
  `tinhtrang` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `ngaylap_hd` date NOT NULL,
  PRIMARY KEY (`id_bill`) USING BTREE,
  INDEX `fk_bill_id_sale`(`sale_id`) USING BTREE,
  INDEX `fk_bill_id_fee`(`fee_id`) USING BTREE,
  INDEX `fk_bill_id_student`(`student_id`) USING BTREE,
  CONSTRAINT `fk_bill_id_fee` FOREIGN KEY (`fee_id`) REFERENCES `fee` (`id_fee`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `fk_bill_id_sale` FOREIGN KEY (`sale_id`) REFERENCES `sale` (`id_sale`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `fk_bill_id_student` FOREIGN KEY (`student_id`) REFERENCES `students` (`id_students`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for billincoursedetail
-- ----------------------------
DROP TABLE IF EXISTS `billincoursedetail`;
CREATE TABLE `billincoursedetail`  (
  `id_bill` int(6) NOT NULL,
  `id_sourse_detail` int(6) NOT NULL,
  `class_id` int(6) NOT NULL,
  `ngay_laphd` date NOT NULL,
  `tinhtrang` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id_bill`, `id_sourse_detail`) USING BTREE,
  INDEX `fk_billincoursedetail_id_bill`(`id_bill`) USING BTREE,
  INDEX `fk_billincoursedetail_id_class`(`class_id`) USING BTREE,
  INDEX `fk_billincoursedetail_id_soursedetail`(`id_sourse_detail`) USING BTREE,
  CONSTRAINT `fk_billincoursedetail_id_bill` FOREIGN KEY (`id_bill`) REFERENCES `bill` (`id_bill`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `fk_billincoursedetail_id_class` FOREIGN KEY (`class_id`) REFERENCES `class` (`id_class`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `fk_billincoursedetail_id_soursedetail` FOREIGN KEY (`id_sourse_detail`) REFERENCES `soursedetail` (`id_sourse_detail`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE = InnoDB CHARACTER SET = utf8 COLLATE = utf8_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for class
-- ----------------------------
DROP TABLE IF EXISTS `class`;
CREATE TABLE `class`  (
  `id_class` int(6) NOT NULL AUTO_INCREMENT,
  `ten_lop` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `phong` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `so_luongHV` int(3) NOT NULL,
  `sourse_detail_id` int(6) NOT NULL,
  PRIMARY KEY (`id_class`) USING BTREE,
  INDEX `fk_classs_id_soursedetail`(`sourse_detail_id`) USING BTREE,
  CONSTRAINT `fk_classs_id_soursedetail` FOREIGN KEY (`sourse_detail_id`) REFERENCES `soursedetail` (`id_sourse_detail`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for edusourses
-- ----------------------------
DROP TABLE IF EXISTS `edusourses`;
CREATE TABLE `edusourses`  (
  `id_eduSource` int(6) NOT NULL AUTO_INCREMENT,
  `ten_daotao_khoahoc` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `mota` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `datetime` date NOT NULL,
  PRIMARY KEY (`id_eduSource`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 17 CHARACTER SET = utf8 COLLATE = utf8_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for fee
-- ----------------------------
DROP TABLE IF EXISTS `fee`;
CREATE TABLE `fee`  (
  `id_fee` int(6) NOT NULL,
  `hocphi` int(9) NULL DEFAULT NULL,
  PRIMARY KEY (`id_fee`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for role
-- ----------------------------
DROP TABLE IF EXISTS `role`;
CREATE TABLE `role`  (
  `id_role` int(2) NOT NULL AUTO_INCREMENT,
  `ten_doituong` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id_role`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for sale
-- ----------------------------
DROP TABLE IF EXISTS `sale`;
CREATE TABLE `sale`  (
  `id_sale` int(6) NOT NULL,
  `sale_type` int(3) NULL DEFAULT NULL,
  PRIMARY KEY (`id_sale`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for sourse
-- ----------------------------
DROP TABLE IF EXISTS `sourse`;
CREATE TABLE `sourse`  (
  `id_sourse` int(6) NOT NULL,
  `ten_khoahoc` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `mota` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `id_edusource` int(6) NULL DEFAULT NULL,
  `actived` int(1) NULL DEFAULT NULL,
  PRIMARY KEY (`id_sourse`) USING BTREE,
  INDEX `fk_source_id_edusource`(`id_edusource`) USING BTREE,
  CONSTRAINT `fk_source_id_edusource` FOREIGN KEY (`id_edusource`) REFERENCES `edusourses` (`id_eduSource`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for soursedetail
-- ----------------------------
DROP TABLE IF EXISTS `soursedetail`;
CREATE TABLE `soursedetail`  (
  `id_sourse_detail` int(6) NOT NULL AUTO_INCREMENT,
  `sourse_id` int(6) NOT NULL,
  `day_id` int(6) NOT NULL,
  `time_id` int(6) NOT NULL,
  `sl_tuan` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `sl_tiet` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `ngaykhaigiang` date NOT NULL,
  `ngayketthuc` date NOT NULL,
  PRIMARY KEY (`id_sourse_detail`) USING BTREE,
  INDEX `fk_soursedetail_id_soures`(`sourse_id`) USING BTREE,
  INDEX `fk_soursedetail_id_day`(`day_id`) USING BTREE,
  INDEX `fk_soursedetail_id_time`(`time_id`) USING BTREE,
  CONSTRAINT `fk_soursedetail_id_day` FOREIGN KEY (`day_id`) REFERENCES `timeabledays` (`id_days`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `fk_soursedetail_id_soures` FOREIGN KEY (`sourse_id`) REFERENCES `sourse` (`id_sourse`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `fk_soursedetail_id_time` FOREIGN KEY (`time_id`) REFERENCES `timeabletime` (`id_time`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for studentinsoursedetaill
-- ----------------------------
DROP TABLE IF EXISTS `studentinsoursedetaill`;
CREATE TABLE `studentinsoursedetaill`  (
  `id_students` int(6) NOT NULL,
  `id_sourse_detail` int(6) NOT NULL,
  `ngay_vaohoc` date NOT NULL,
  `ngay_kethuc` date NOT NULL,
  `tinhtrang` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id_students`, `id_sourse_detail`) USING BTREE,
  INDEX `fk_studentinsoursedetaill_id_student`(`id_students`) USING BTREE,
  INDEX `fk_studentinsoursedetaill_id_soursedetail`(`id_sourse_detail`) USING BTREE,
  CONSTRAINT `fk_studentinsoursedetaill_id_soursedetail` FOREIGN KEY (`id_sourse_detail`) REFERENCES `soursedetail` (`id_sourse_detail`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `fk_studentinsoursedetaill_id_student` FOREIGN KEY (`id_students`) REFERENCES `students` (`id_students`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE = InnoDB CHARACTER SET = utf8 COLLATE = utf8_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for students
-- ----------------------------
DROP TABLE IF EXISTS `students`;
CREATE TABLE `students`  (
  `id_students` int(6) NOT NULL AUTO_INCREMENT,
  `ten_hv` varchar(30) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `ngaysinh` date NOT NULL,
  `truong` varchar(30) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `sdt` int(10) NOT NULL,
  `gmail` varchar(30) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `role_id` int(1) NOT NULL,
  `actived` int(1) NOT NULL,
  PRIMARY KEY (`id_students`) USING BTREE,
  INDEX `fk_students_id_role`(`role_id`) USING BTREE,
  CONSTRAINT `fk_students_id_role` FOREIGN KEY (`role_id`) REFERENCES `role` (`id_role`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE = InnoDB AUTO_INCREMENT = 5 CHARACTER SET = utf8 COLLATE = utf8_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for timeabledays
-- ----------------------------
DROP TABLE IF EXISTS `timeabledays`;
CREATE TABLE `timeabledays`  (
  `id_days` int(6) NOT NULL AUTO_INCREMENT,
  `lichhoc` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `loaingayhoc` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id_days`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 17 CHARACTER SET = utf8 COLLATE = utf8_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for timeabletime
-- ----------------------------
DROP TABLE IF EXISTS `timeabletime`;
CREATE TABLE `timeabletime`  (
  `id_time` int(6) NOT NULL AUTO_INCREMENT,
  `thoigian` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `buoi` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id_time`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 17 CHARACTER SET = utf8 COLLATE = utf8_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for trainers
-- ----------------------------
DROP TABLE IF EXISTS `trainers`;
CREATE TABLE `trainers`  (
  `id_trainer` int(6) NOT NULL AUTO_INCREMENT,
  `ten_gv` varchar(30) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `chucvu` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `dv_congtac` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `thanhtich` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `kinhnghiem` varchar(30) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `sdt` int(10) NOT NULL,
  `gmail` varchar(30) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `role_id` int(1) NOT NULL,
  `actived` int(1) NOT NULL,
  PRIMARY KEY (`id_trainer`) USING BTREE,
  INDEX `fk_trainers_id_role`(`role_id`) USING BTREE,
  CONSTRAINT `fk_trainers_id_role` FOREIGN KEY (`role_id`) REFERENCES `role` (`id_role`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE = InnoDB AUTO_INCREMENT = 5 CHARACTER SET = utf8 COLLATE = utf8_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for trainnerincoursedetail
-- ----------------------------
DROP TABLE IF EXISTS `trainnerincoursedetail`;
CREATE TABLE `trainnerincoursedetail`  (
  `id_trainer` int(6) NOT NULL,
  `id_sourse_detail` int(6) NOT NULL,
  `class_id` int(6) NOT NULL,
  `danhgia` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id_trainer`, `id_sourse_detail`) USING BTREE,
  INDEX `fk_trainnerincoursedetail_id_trainer`(`id_trainer`) USING BTREE,
  INDEX `fk_trainnerincoursedetail_id_class`(`class_id`) USING BTREE,
  INDEX `fk_trainnerincoursedetail_id_sourdedetail`(`id_sourse_detail`) USING BTREE,
  CONSTRAINT `fk_trainnerincoursedetail_id_class` FOREIGN KEY (`class_id`) REFERENCES `class` (`id_class`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `fk_trainnerincoursedetail_id_sourdedetail` FOREIGN KEY (`id_sourse_detail`) REFERENCES `soursedetail` (`id_sourse_detail`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `fk_trainnerincoursedetail_id_trainer` FOREIGN KEY (`id_trainer`) REFERENCES `trainers` (`id_trainer`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE = InnoDB CHARACTER SET = utf8 COLLATE = utf8_unicode_ci ROW_FORMAT = Dynamic;

SET FOREIGN_KEY_CHECKS = 1;

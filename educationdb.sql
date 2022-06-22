/*
 Navicat Premium Data Transfer

 Source Server         : localhost_3306
 Source Server Type    : MySQL
 Source Server Version : 100418
 Source Host           : localhost:3306
 Source Schema         : educationdb

 Target Server Type    : MySQL
 Target Server Version : 100418
 File Encoding         : 65001

 Date: 22/11/2021 07:05:12
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
) ENGINE = InnoDB AUTO_INCREMENT = 11 CHARACTER SET = utf8 COLLATE = utf8_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of account_user
-- ----------------------------
INSERT INTO `account_user` VALUES (1, 'admin@gmail.com', '123456', 3, 201234567, '2021-06-03');
INSERT INTO `account_user` VALUES (2, 'quanly@113', '123456', 2, 638126380, '2021-06-03');
INSERT INTO `account_user` VALUES (3, 'phamanhanh@113', '61075805', 3, 32372939, '2021-07-01');
INSERT INTO `account_user` VALUES (5, 'thanhpham@edu.com.vn', '123456', 2, 834050599, '2021-11-01');
INSERT INTO `account_user` VALUES (7, 'Phampham@gmail.com', '123456', 2, 834050599, '2021-05-05');
INSERT INTO `account_user` VALUES (9, 'anhtuan@gmail.com', '123456', 2, 0, '2021-05-05');
INSERT INTO `account_user` VALUES (10, 'anhanhpham@gmail.com', '123456', 3, 834050599, '2021-05-05');

-- ----------------------------
-- Table structure for banner
-- ----------------------------
DROP TABLE IF EXISTS `banner`;
CREATE TABLE `banner`  (
  `id_banner` int(6) NOT NULL,
  `img_B` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `ngayhienthi` datetime(0) NOT NULL,
  `ghichu` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `account_id` int(6) NOT NULL,
  PRIMARY KEY (`id_banner`) USING BTREE,
  INDEX `account_id`(`account_id`) USING BTREE,
  CONSTRAINT `banner_ibfk_1` FOREIGN KEY (`account_id`) REFERENCES `account_user` (`id_account`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE = InnoDB CHARACTER SET = utf8 COLLATE = utf8_unicode_ci ROW_FORMAT = Dynamic;

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
-- Table structure for blog
-- ----------------------------
DROP TABLE IF EXISTS `blog`;
CREATE TABLE `blog`  (
  `id_blog` int(6) NOT NULL,
  `img_blog` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `tieude` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `noidung` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `tennguoiviet` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `ngaydang` datetime(0) NOT NULL,
  `account_id` int(6) NOT NULL,
  PRIMARY KEY (`id_blog`) USING BTREE,
  INDEX `account_id`(`account_id`) USING BTREE,
  CONSTRAINT `blog_ibfk_1` FOREIGN KEY (`account_id`) REFERENCES `account_user` (`id_account`) ON DELETE CASCADE ON UPDATE CASCADE
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
  `trangthai` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id_class`) USING BTREE,
  INDEX `fk_classs_id_soursedetail`(`sourse_detail_id`) USING BTREE,
  CONSTRAINT `fk_classs_id_soursedetail` FOREIGN KEY (`sourse_detail_id`) REFERENCES `soursedetail` (`id_sourse_detail`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE = InnoDB AUTO_INCREMENT = 10 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of class
-- ----------------------------
INSERT INTO `class` VALUES (1, 'LTCB_L1', 'C1', 21, 1, '');
INSERT INTO `class` VALUES (2, 'LTNC_L1', 'C2', 21, 2, '');
INSERT INTO `class` VALUES (3, 'LTC_L1', 'C3', 21, 3, '');
INSERT INTO `class` VALUES (7, 'JP_L1', 'C4', 31, 24, 'Đang Học');
INSERT INTO `class` VALUES (8, 'EL_L1', 'C1', 31, 36, 'Dự Kiến');

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
) ENGINE = InnoDB AUTO_INCREMENT = 18 CHARACTER SET = utf8 COLLATE = utf8_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of edusourses
-- ----------------------------
INSERT INTO `edusourses` VALUES (1, 'Lập Trình Front_end', 'Đầy đủ khóa học từ FE ', '2021-07-06');
INSERT INTO `edusourses` VALUES (2, 'lập trình Back_end', 'làm web với ngôn ngữ lập trình đa dạng liên quan đến back end', '2021-07-02');
INSERT INTO `edusourses` VALUES (3, 'Tiếng Anh', 'Tiếng Anh chuyên ngành cho công nghệ thông tin, giao tiếp cho doanh nghiệp', '2021-07-03');
INSERT INTO `edusourses` VALUES (4, 'Tiếng Nhật', 'Tiếng Nhật N5 , N4 , N3 ', '2021-06-08');

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
-- Table structure for informationdetail
-- ----------------------------
DROP TABLE IF EXISTS `informationdetail`;
CREATE TABLE `informationdetail`  (
  `id_infor` int(6) NOT NULL,
  `tenchinhanh` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `diachi` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `bando` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id_infor`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8 COLLATE = utf8_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of informationdetail
-- ----------------------------
INSERT INTO `informationdetail` VALUES (0, 'gjg', 'hgjhg', 'jg');

-- ----------------------------
-- Table structure for mailinstudent
-- ----------------------------
DROP TABLE IF EXISTS `mailinstudent`;
CREATE TABLE `mailinstudent`  (
  `id_mailbox` int(6) NOT NULL AUTO_INCREMENT,
  `tendk` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `tieude` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `quantamKH` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `noidung` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `tinhtrang` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `thuphanhoi` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id_mailbox`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 21 CHARACTER SET = utf8 COLLATE = utf8_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of mailinstudent
-- ----------------------------
INSERT INTO `mailinstudent` VALUES (1, 'sdasd', 'dsasad', 'Hỏi đáp về khóa học', '', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has su', 'Đã phản hồi', 'cảm ơn bạn đã gửi mail cho chúng tôi ');
INSERT INTO `mailinstudent` VALUES (2, 'Phạm Ngọc Ánh', 'phamanhanhct14@gmail.com', 'Hỏi đáp về khóa học', '', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has su', 'Đã phản hồi', 'cảm ơn bạn đã gửi mail cho chúng tôi');
INSERT INTO `mailinstudent` VALUES (10, 'Cao Ngọc Tuyết Nhi', 'nhi@gmail.com', 'tôi là nhi', '', 'tôi rất quan tâm ', 'Đã phản hồi', 'cảm ơn bạn đã gửi mail cho chúng tôi ');
INSERT INTO `mailinstudent` VALUES (12, 'Trịnh Hoài Nam', '0750080150@sv.hcmunre.edu.vn', 'Hỏi đáp về khóa học', '', 'tôi quan tâm ....', 'Chưa đọc', '');
INSERT INTO `mailinstudent` VALUES (13, 'Cao Ngọc Tuyết Nhi', 'nhi@gmail.com', 'Hỏi đáp', '', 'Tiếng Nhật', 'Chưa phản hồi', 'chào e chị đã thấy rồi ');
INSERT INTO `mailinstudent` VALUES (16, 'Cao Ngọc Tuyết Nhi`', 'haru0489@yahoo.com.vn', 'Hỏi đáp', '', 'Tiếng Nhật', 'chua duyet', '');
INSERT INTO `mailinstudent` VALUES (17, 'Trịnh Hoài Nam', '0750080150@sv.hcmunre.edu.vn', 'Hỏi đáp', 'Tiếng Anh', '', 'chua duyet', '');
INSERT INTO `mailinstudent` VALUES (18, 'Trịnh Hoài Nam', 'haru0489@yahoo.com.vn', 'Hỏi đáp', 'Lập trình Back_End', 'QSWdáda', 'Đã Đọc', 'chào cậu chúng tôi giúp gì được cho cậu ');
INSERT INTO `mailinstudent` VALUES (19, 'Nguyễn Hữu Thọ', 'nhi@gmail.com', 'Hỏi đáp', 'Lập trình Back_End', 'SÂDSD', 'Đã phản hồi', 'chào bạn !! cảm ơn bạn đã gửi mail cho chúng tôi ');
INSERT INTO `mailinstudent` VALUES (20, 'Phạm Lan Anh', 'tuyetnhi199@facebook.com', 'Hỏi đáp', 'Lập trình Back_End', 'chào học viên !! em quan tâm đến khóa học này này ......', 'Đã phản hồi', 'chào bạn');

-- ----------------------------
-- Table structure for mailsendback
-- ----------------------------
DROP TABLE IF EXISTS `mailsendback`;
CREATE TABLE `mailsendback`  (
  `id_back` int(6) NOT NULL AUTO_INCREMENT,
  `noidung` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `mailbox_id` int(6) NOT NULL,
  `account_id` int(6) NOT NULL,
  `tinhtrang` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id_back`) USING BTREE,
  INDEX `mailbox_id`(`mailbox_id`) USING BTREE,
  INDEX `account_id`(`account_id`) USING BTREE,
  CONSTRAINT `mailsendback_ibfk_1` FOREIGN KEY (`mailbox_id`) REFERENCES `mailinstudent` (`id_mailbox`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `mailsendback_ibfk_2` FOREIGN KEY (`account_id`) REFERENCES `account_user` (`id_account`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8 COLLATE = utf8_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for quangcao
-- ----------------------------
DROP TABLE IF EXISTS `quangcao`;
CREATE TABLE `quangcao`  (
  `id_QC` int(6) NOT NULL,
  `img_QC` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `TenQC` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `ngayBD` datetime(0) NOT NULL,
  `ngayKT` datetime(0) NOT NULL,
  `account_id` int(6) NOT NULL,
  PRIMARY KEY (`id_QC`) USING BTREE,
  INDEX `account_id`(`account_id`) USING BTREE,
  CONSTRAINT `quangcao_ibfk_1` FOREIGN KEY (`account_id`) REFERENCES `account_user` (`id_account`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE = InnoDB CHARACTER SET = utf8 COLLATE = utf8_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for role
-- ----------------------------
DROP TABLE IF EXISTS `role`;
CREATE TABLE `role`  (
  `id_role` int(2) NOT NULL AUTO_INCREMENT,
  `ten_doituong` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id_role`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 5 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of role
-- ----------------------------
INSERT INTO `role` VALUES (1, 'Admin');
INSERT INTO `role` VALUES (2, 'Giáo Viên ');
INSERT INTO `role` VALUES (3, 'Quản lý');

-- ----------------------------
-- Table structure for sale
-- ----------------------------
DROP TABLE IF EXISTS `sale`;
CREATE TABLE `sale`  (
  `id_sale` int(6) NOT NULL,
  `sale_type` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `reason` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id_sale`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of sale
-- ----------------------------
INSERT INTO `sale` VALUES (1, '5', 'giảm 5%');
INSERT INTO `sale` VALUES (2, '10', 'giảm 10%');
INSERT INTO `sale` VALUES (3, '- 500', 'giảm 500 ngàn ');

-- ----------------------------
-- Table structure for soursedetail
-- ----------------------------
DROP TABLE IF EXISTS `soursedetail`;
CREATE TABLE `soursedetail`  (
  `id_sourse_detail` int(6) NOT NULL AUTO_INCREMENT,
  `img_KH` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `edusource_id` int(6) NOT NULL,
  `tenkhoahoc` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `mota` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `day_id` int(6) NOT NULL,
  `time_id` int(6) NOT NULL,
  `sl_tuan` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `sl_tiet` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `ngaykhaigiang` date NOT NULL,
  `ngayketthuc` date NOT NULL,
  `active` int(2) NOT NULL,
  `price` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id_sourse_detail`) USING BTREE,
  INDEX `fk_soursedetail_id_day`(`day_id`) USING BTREE,
  INDEX `fk_soursedetail_id_time`(`time_id`) USING BTREE,
  INDEX `fk_soursedetail_id_edusource`(`edusource_id`) USING BTREE,
  CONSTRAINT `fk_soursedetail_id_day` FOREIGN KEY (`day_id`) REFERENCES `timeabledays` (`id_days`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `fk_soursedetail_id_edusource` FOREIGN KEY (`edusource_id`) REFERENCES `edusourses` (`id_eduSource`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `fk_soursedetail_id_time` FOREIGN KEY (`time_id`) REFERENCES `timeabletime` (`id_time`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE = InnoDB AUTO_INCREMENT = 37 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of soursedetail
-- ----------------------------
INSERT INTO `soursedetail` VALUES (1, 'mvc\\photo\\course\\course-details-tab-1.png', 1, 'Lập trình C++căn bản ', 'làm web với ngôn ngữ lập trình', 1, 1, '1,5  tháng ', '24 tiết', '2021-07-01', '2021-08-01', 1, '5.000.000');
INSERT INTO `soursedetail` VALUES (2, 'mvc\\photo\\course\\course-details-tab-2.png', 1, 'Lập trình nâng cao OOP', 'Xây dựng bài tập về từ duy lập trình,học sâu về hướng đối tượng', 1, 1, '2 tháng    ', '32 tiết    ', '2021-07-01', '2021-09-13', 1, '5.500.000 ');
INSERT INTO `soursedetail` VALUES (3, 'mvc\\photo\\course\\course-details-tab-3.png', 2, 'Ngôn ngữ C# nâng cao winfom', 'Xây dựng bài tập về từ duy lập trình, làm quen với winform, xây dựng một ứng dụng tốt', 2, 2, '1,5 tháng    ', '24 tiết    ', '2021-06-03', '2021-08-04', 1, '5.000.000 ');
INSERT INTO `soursedetail` VALUES (24, '', 4, 'Tiếng Nhật giao Tiếp', 'Tiếng Nhật đang là một trong những ngôn ngữ hot ở Việt Nam do vậy nhu cầu học tiếng Nhật ngày càng nhiều và trở nên cần thiết. Hơn nữa tiếng Nhật cần thiết cho cộng việc liên quan đến ngành IT. Và phổ biến', 1, 1, ' 2 tháng  ', ' 38  ', '2021-06-06', '2021-07-09', 1, ' 2.000.000');
INSERT INTO `soursedetail` VALUES (36, '', 3, 'Tiếng anh chuyên sâu', 'Tiếng anh rất phổ biến', 2, 2, '2,5 tháng ', '32 tiết  ', '2021-06-06', '2021-07-06', 1, '2.200.000 ');

-- ----------------------------
-- Table structure for studentinsoursedetaill
-- ----------------------------
DROP TABLE IF EXISTS `studentinsoursedetaill`;
CREATE TABLE `studentinsoursedetaill`  (
  `id_students` int(6) NOT NULL,
  `id_sourse_detail` int(6) NOT NULL,
  `tinhtrang` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id_students`, `id_sourse_detail`) USING BTREE,
  INDEX `fk_studentinsoursedetaill_id_student`(`id_students`) USING BTREE,
  INDEX `fk_studentinsoursedetaill_id_soursedetail`(`id_sourse_detail`) USING BTREE,
  INDEX `tinhtrang`(`tinhtrang`) USING BTREE,
  CONSTRAINT `fk_studentinsoursedetaill_id_soursedetail` FOREIGN KEY (`id_sourse_detail`) REFERENCES `soursedetail` (`id_sourse_detail`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `fk_studentinsoursedetaill_id_student` FOREIGN KEY (`id_students`) REFERENCES `students` (`id_students`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE = InnoDB CHARACTER SET = utf8 COLLATE = utf8_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of studentinsoursedetaill
-- ----------------------------
INSERT INTO `studentinsoursedetaill` VALUES (108, 3, 'Chưa thanh toán');
INSERT INTO `studentinsoursedetaill` VALUES (4, 1, 'Đã thanh toán');
INSERT INTO `studentinsoursedetaill` VALUES (4, 2, 'Đã thanh toán');
INSERT INTO `studentinsoursedetaill` VALUES (5, 1, 'Đã thanh toán');
INSERT INTO `studentinsoursedetaill` VALUES (5, 2, 'Đã thanh toán');
INSERT INTO `studentinsoursedetaill` VALUES (9, 2, 'Đã thanh toán');
INSERT INTO `studentinsoursedetaill` VALUES (10, 2, 'Đã thanh toán');
INSERT INTO `studentinsoursedetaill` VALUES (10, 3, 'Đã thanh toán');
INSERT INTO `studentinsoursedetaill` VALUES (12, 2, 'Đã thanh toán');
INSERT INTO `studentinsoursedetaill` VALUES (12, 3, 'Đã thanh toán');
INSERT INTO `studentinsoursedetaill` VALUES (81, 3, 'Đã thanh toán');
INSERT INTO `studentinsoursedetaill` VALUES (87, 3, 'Đã thanh toán');
INSERT INTO `studentinsoursedetaill` VALUES (90, 2, 'Đã thanh toán');
INSERT INTO `studentinsoursedetaill` VALUES (99, 2, 'Đã thanh toán');

-- ----------------------------
-- Table structure for students
-- ----------------------------
DROP TABLE IF EXISTS `students`;
CREATE TABLE `students`  (
  `id_students` int(6) NOT NULL AUTO_INCREMENT,
  `imgHV` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `tenhv` varchar(30) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `ngaysinh` date NOT NULL,
  `truong` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `sdt` int(10) NOT NULL,
  `gmail` varchar(30) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `actived` int(1) NOT NULL,
  PRIMARY KEY (`id_students`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 123 CHARACTER SET = utf8 COLLATE = utf8_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of students
-- ----------------------------
INSERT INTO `students` VALUES (4, 'gil.jpg', 'Nguyễn Ngọc Thạch', '1999-02-04', 'Đại Học Tài Nguyên và Môi Trường', 2147483647, 'thachnguyen@gmail.com', 1);
INSERT INTO `students` VALUES (5, 'gil.jpg', 'Phạm Quang Vinh', '2000-05-05', 'Đại Học Tài Nguyên và Môi Trường', 2147483647, 'vinhnguyen@gmail.com', 1);
INSERT INTO `students` VALUES (7, 'pr5.jpg', 'Nguyễn Thị Kim', '2000-05-05', 'Đại Học Tài Nguyên và Môi Trường', 2147483647, 'kimnguyen@gmail.com', 1);
INSERT INTO `students` VALUES (9, 'anhtest.jpg', 'Châu Nguyễn Ngọc Duy', '2000-05-05', 'Đại Học Tài Nguyên và Môi Trườ', 2147483647, 'hieungueyn@gmail.com', 1);
INSERT INTO `students` VALUES (10, 'trainer-2.jpg', 'Nguyễn Thị Tuấn Lê', '2000-05-05', 'Đại Học Tài Nguyên và Môi Trườ', 2147483647, 'hieungueyn@gmail.com', 1);
INSERT INTO `students` VALUES (11, 'trainer-2.jpg', 'Nguyễn Ngọc Anh', '2000-05-05', 'Đại Học Tài Nguyên và Môi Trường', 2147483647, 'ngocanh@gmail.com', 1);
INSERT INTO `students` VALUES (12, 'trainer-1.jpg', 'Trần Văn Phúc', '2000-05-05', 'Đại Học Tài Nguyên và Môi Trường', 2147483647, 'phucnguyen@gmail.com', 1);
INSERT INTO `students` VALUES (81, 'anhtest.jpg', 'Nguyễn Thị Yến ', '2000-05-05', 'Nông Lâm', 2147483647, 'yennguyen@gmail.com', 1);
INSERT INTO `students` VALUES (82, '1.png', 'Pham Phan', '1999-02-04', 'Nông Lâm', 2147483647, 'phan@gmail.com', 1);
INSERT INTO `students` VALUES (83, '1.png', 'Pham Hữu Khang', '2000-05-05', 'Nông Lâm', 2147483647, 'hoainam@gmail.com', 1);
INSERT INTO `students` VALUES (86, 'trainer-3.jpg', 'Nguyễn Thị Hương', '2000-05-05', 'Đại Học Nông Lâm', 2147483647, 'phan@gmail.com', 1);
INSERT INTO `students` VALUES (87, 'trainer-1.jpg', 'Phạm Ngọc Diệp ', '1996-05-11', 'Nông Lâm', 2147483647, 'phan@gmail.com', 1);
INSERT INTO `students` VALUES (88, 'trainer-3.jpg', 'Pham Hữu Khang', '2000-05-05', 'Nông Lâm', 2147483647, 'phan@gmail.com', 1);
INSERT INTO `students` VALUES (90, 'pr5.jpg', 'Nguyễn Thị Hương', '2000-05-05', 'Nông Lâm', 2147483647, 'phan@gmail.com', 1);
INSERT INTO `students` VALUES (98, 'anhtest.jpg', 'Pham Phan', '2000-05-05', 'Nông Lâm', 1321244103, 'phan@gmail.com', 1);
INSERT INTO `students` VALUES (99, 'anhtest.jpg', 'Pham Hữu Khang', '2000-05-05', 'Tài Nguyên Và Môi Trường', 2147483647, 'phan@gmail.com', 1);
INSERT INTO `students` VALUES (104, 'anhtest.jpg', 'Pham Phan Anh', '2000-05-05', 'Nông Lâm', 2147483647, 'phan@gmail.com', 1);
INSERT INTO `students` VALUES (105, 'anhtest.jpg', 'Pham Phan Anh', '2000-05-05', 'Nông Lâm', 2147483647, 'phan@gmail.com', 1);
INSERT INTO `students` VALUES (108, 'gil.jpg', 'Pham Lê Hữu ', '2000-05-05', 'Đại Học Đồng Nai', 2147483647, 'phan@gmail.com', 1);
INSERT INTO `students` VALUES (114, 'trainer-2.jpg', 'Nguyễn Thị Yến ', '2000-05-05', 'Nông Lâm', 2147483647, 'phan@gmail.com', 1);
INSERT INTO `students` VALUES (115, 'pr5.jpg', 'Nguyễn Thị Yến ', '1999-12-15', 'Nông Lâm', 2147483647, 'phan@gmail.com', 1);
INSERT INTO `students` VALUES (121, 'trainer-2.jpg', 'Nguyễn Thị Hoài', '2000-05-05', 'Đại Học Tài Nguyên và Môi Trường', 2147483647, 'phan@gmail.com', 1);
INSERT INTO `students` VALUES (122, '', 'Pham Phan Anh', '2000-05-05', 'Đại Học Nông Lâm', 79897979, 'phan@gmail.com', 1);

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
-- Records of timeabledays
-- ----------------------------
INSERT INTO `timeabledays` VALUES (1, '2 - 4 -6', '3 ngày /tuần');
INSERT INTO `timeabledays` VALUES (2, '3 - 5 -7 ', '3 ngày /tuần');
INSERT INTO `timeabledays` VALUES (3, '7 - CN', '2 ngày /tuần');

-- ----------------------------
-- Table structure for timeabletime
-- ----------------------------
DROP TABLE IF EXISTS `timeabletime`;
CREATE TABLE `timeabletime`  (
  `id_time` int(6) NOT NULL AUTO_INCREMENT,
  `thoigian` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `buoi` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id_time`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 18 CHARACTER SET = utf8 COLLATE = utf8_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of timeabletime
-- ----------------------------
INSERT INTO `timeabletime` VALUES (1, '19h - 21h30', 'Ca Tối');
INSERT INTO `timeabletime` VALUES (2, '18h - 21h', 'Ca Tối');
INSERT INTO `timeabletime` VALUES (17, '8h - 10h ', 'Ca sáng');

-- ----------------------------
-- Table structure for trainers
-- ----------------------------
DROP TABLE IF EXISTS `trainers`;
CREATE TABLE `trainers`  (
  `id_trainer` int(6) NOT NULL AUTO_INCREMENT,
  `img_trainer` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `ten_gv` varchar(30) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `chucvu` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `dv_congtac` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `thanhtich` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `kinhnghiem` varchar(30) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `sdt` int(10) NOT NULL,
  `gmail` varchar(30) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `actived` int(1) NOT NULL,
  `account_id` int(6) NOT NULL,
  PRIMARY KEY (`id_trainer`) USING BTREE,
  INDEX `account_id`(`account_id`) USING BTREE,
  CONSTRAINT `trainers_ibfk_1` FOREIGN KEY (`account_id`) REFERENCES `account_user` (`id_account`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE = InnoDB AUTO_INCREMENT = 7 CHARACTER SET = utf8 COLLATE = utf8_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of trainers
-- ----------------------------
INSERT INTO `trainers` VALUES (1, 'giaovien1.jpg', 'Nguyễn Huy Anh', 'Thác sỹ', 'Trường Đại Học Tài Nguyên và Môi Trường', 'Nghiên Cứu Thuật toán AI, có nhiều năm trong nghề', 'nhiều năm dạy học, 5 kinh nghi', 23127393, 'huyanh@gmail.com', 1, 2);
INSERT INTO `trainers` VALUES (2, 'giaovien2.jpg', 'Nguyễn Hà Anh Tuấn ', 'Phó bộ môn Công nghệ thông tin', 'Trường Công nghệ thông tin TP.HCM', 'Đào tạo trường quốc tế, chuyên gia AI, Develop website ', '13 năm dạy học', 57689898, 'anhtuan@gmail.com', 1, 9);
INSERT INTO `trainers` VALUES (3, 'gil.jpg', 'Phạm Thanh', 'Junior', 'Cty Techbase Vietnam', 'Developer giỏi  , Có kinh nghiệm với các dự án thực tế', '5 năm kinh nghiệm ', 64647778, 'phamthanh@gmail.com', 1, 5);
INSERT INTO `trainers` VALUES (5, 'gil.jpg', 'Nguyễn Hữu Thọ', 'Giảng Viên Ngoại Ngữ Tin Học', 'Trường Đại Học Ngoại Ngữ Tin Học', 'Trình độ N2 năm 2008', 'có 10 năm kinh nghiệm dạy học,', 798979799, 'thohuynguyen@gmail.com', 1, 7);

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

-- ----------------------------
-- Records of trainnerincoursedetail
-- ----------------------------
INSERT INTO `trainnerincoursedetail` VALUES (1, 1, 1, '');
INSERT INTO `trainnerincoursedetail` VALUES (2, 2, 2, '');
INSERT INTO `trainnerincoursedetail` VALUES (2, 3, 3, '');
INSERT INTO `trainnerincoursedetail` VALUES (5, 24, 7, '');

SET FOREIGN_KEY_CHECKS = 1;

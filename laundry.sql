/*
SQLyog Ultimate v12.08 (64 bit)
MySQL - 5.5.29 : Database - laundry
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`laundry` /*!40100 DEFAULT CHARACTER SET utf8 */;

USE `laundry`;

/*Table structure for table `address` */

DROP TABLE IF EXISTS `address`;

CREATE TABLE `address` (
  `addressId` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '地址id',
  `addressUserId` int(11) NOT NULL COMMENT '所属用户id',
  `addressLabel` varchar(16) NOT NULL DEFAULT '2' COMMENT '地址标签',
  `addressName` varchar(64) NOT NULL COMMENT '用户姓名',
  `addressPhone` char(11) NOT NULL COMMENT '用户电话',
  `addressDetail` varchar(256) NOT NULL COMMENT '地址详情',
  `addressDelete` tinyint(4) NOT NULL DEFAULT '1' COMMENT '删除状态',
  PRIMARY KEY (`addressId`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8;

/*Data for the table `address` */

insert  into `address`(`addressId`,`addressUserId`,`addressLabel`,`addressName`,`addressPhone`,`addressDetail`,`addressDelete`) values (6,1,'1','小文','12345678888','广东省广州市天河区龙洞',1),(7,1,'2','小气','13421432143','山西省太原市杏花岭区小竹山',1),(9,1,'2','小学','21321312321','辽宁省沈阳市苏家屯区小区',1),(10,1,'2','小一','12345657899','广东省广州市番禺区文明路',1),(11,4,'1','小三','23431243214','天津市市辖县蓟县北京路',1),(12,4,'2','小师弟','54325435435','山东省东营市垦利县屈原庙',1),(13,3,'2','小林','12314334534','广东省广州市天河区北京路',1),(14,3,'2','小林','12314334534','广东省广州市天河区北京路',2);

/*Table structure for table `admin` */

DROP TABLE IF EXISTS `admin`;

CREATE TABLE `admin` (
  `adminId` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '管理员编号',
  `adminName` varchar(64) NOT NULL COMMENT '管理员账号',
  `adminPassword` varchar(256) NOT NULL COMMENT '账号密码',
  `adminAddress` varchar(64) NOT NULL COMMENT '管理员所属地区',
  `adminCreateTime` datetime NOT NULL COMMENT '创建时间',
  `adminDelete` tinyint(4) NOT NULL DEFAULT '1' COMMENT '管理员删除状态',
  PRIMARY KEY (`adminId`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

/*Data for the table `admin` */

insert  into `admin`(`adminId`,`adminName`,`adminPassword`,`adminAddress`,`adminCreateTime`,`adminDelete`) values (1,'123','123','中国','2016-10-19 02:25:27',1),(2,'测试2','123','深圳','2016-10-19 02:25:29',0),(3,'测试3','123','北京','2016-10-19 02:25:38',1),(4,'测试4','123','上海','2016-10-19 02:25:40',1),(5,'测试5','123','广州','2016-10-19 02:25:42',1),(6,'测试6','123','测试6','2016-10-19 02:40:17',1);

/*Table structure for table `branch` */

DROP TABLE IF EXISTS `branch`;

CREATE TABLE `branch` (
  `branchId` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '分店id',
  `branchAddress` varchar(64) NOT NULL COMMENT '分店所属地区',
  `branchName` varchar(64) NOT NULL COMMENT '分店名称',
  `branchPhone` char(11) NOT NULL COMMENT '分店联系方式',
  `branchPrincipal` varchar(64) NOT NULL COMMENT '分店负责人姓名',
  `branchDelete` tinyint(4) NOT NULL DEFAULT '0' COMMENT '分店删除方式',
  PRIMARY KEY (`branchId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `branch` */

/*Table structure for table `comment` */

DROP TABLE IF EXISTS `comment`;

CREATE TABLE `comment` (
  `commentId` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '评论id',
  `commentOrderId` int(11) NOT NULL COMMENT '所属订单id',
  `commentContent` varchar(256) NOT NULL COMMENT '评论内容',
  `contentImage` varchar(168) NOT NULL COMMENT '评论图片',
  `contentEvaluation` tinyint(4) NOT NULL DEFAULT '1' COMMENT '好评或差评',
  `contentDelete` tinyint(4) NOT NULL DEFAULT '1' COMMENT '评论删除状态',
  PRIMARY KEY (`commentId`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

/*Data for the table `comment` */

insert  into `comment`(`commentId`,`commentOrderId`,`commentContent`,`contentImage`,`contentEvaluation`,`contentDelete`) values (3,1,'很满意！！！！','/laundry/Uploads/1.jpg',1,1),(4,2,'不满意！！！','/laundry/Uploads/1.jpg',0,1);

/*Table structure for table `coupon` */

DROP TABLE IF EXISTS `coupon`;

CREATE TABLE `coupon` (
  `couponId` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '优惠券id',
  `couponName` varchar(64) NOT NULL COMMENT '优惠券名称',
  `couponDetail` varchar(256) NOT NULL COMMENT '优惠券详情',
  `couponFull` int(11) NOT NULL COMMENT '优惠券满减金额',
  `couponCut` int(11) NOT NULL COMMENT '优惠券所减金额',
  `couponTime` int(11) NOT NULL COMMENT '优惠卷有效天数',
  `couponIntegral` int(11) NOT NULL COMMENT '兑换该优惠卷所需积分',
  `couponKind` tinyint(4) NOT NULL DEFAULT '1' COMMENT '优惠券种类',
  `couponStatus` tinyint(4) NOT NULL DEFAULT '1' COMMENT '优惠券状态',
  `couponDelete` tinyint(4) NOT NULL DEFAULT '1' COMMENT '优惠券删除状态',
  PRIMARY KEY (`couponId`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

/*Data for the table `coupon` */

insert  into `coupon`(`couponId`,`couponName`,`couponDetail`,`couponFull`,`couponCut`,`couponTime`,`couponIntegral`,`couponKind`,`couponStatus`,`couponDelete`) values (1,'免运费券','满额可免运费券',100,0,7,100,2,1,1),(2,'免洗券','特定衣物免洗券',1,0,6,200,2,1,1),(3,'3','满30减3',30,3,5,300,1,1,1),(4,'4','满100减10',100,10,4,400,1,1,1),(5,'5','活动期间满100减20',100,20,10,150,1,1,1),(6,'优惠券6','满10减1',10,1,2,100,1,2,1);

/*Table structure for table `feedback` */

DROP TABLE IF EXISTS `feedback`;

CREATE TABLE `feedback` (
  `feedbackId` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '反馈id',
  `feedbackOpenId` varchar(128) NOT NULL COMMENT '反馈openid',
  `feedbackName` varchar(64) NOT NULL COMMENT '反馈人用户名',
  `feedbackContent` varchar(256) NOT NULL COMMENT '反馈内容',
  `feedbackDelete` tinyint(4) NOT NULL DEFAULT '1' COMMENT '反馈删除状态',
  PRIMARY KEY (`feedbackId`)
) ENGINE=InnoDB AUTO_INCREMENT=68 DEFAULT CHARSET=utf8;

/*Data for the table `feedback` */

insert  into `feedback`(`feedbackId`,`feedbackOpenId`,`feedbackName`,`feedbackContent`,`feedbackDelete`) values (65,'12345678900','小一','洗护质量 + 产品易用性 + 其他 : 我要投诉！！！',1),(66,'12345678900','小一',' + 服务态度 + 付款流程 + 其他 : 我要上头条！！！',1),(67,'123','测试','洗护质量 + 服务态度 + 物流速度 + 产品易用性 + 付款流程 + 其他 : 我要投诉！！！！',1);

/*Table structure for table `order` */

DROP TABLE IF EXISTS `order`;

CREATE TABLE `order` (
  `orderId` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '订单id',
  `orderName` varchar(64) NOT NULL COMMENT '订单顾客名',
  `orderPhone` char(11) NOT NULL COMMENT '订单联系电话',
  `orderAddressDetail` varchar(256) NOT NULL COMMENT '订单地址',
  `orderProductName` varchar(64) NOT NULL DEFAULT '+' COMMENT '订单产品名称',
  `orderProductNum` varchar(12) NOT NULL DEFAULT '+' COMMENT '数量',
  `orderTime` datetime NOT NULL COMMENT '下单时间',
  `orderOldPrice` int(11) NOT NULL COMMENT '订单原价',
  `orderCouponCut` int(11) NOT NULL DEFAULT '0' COMMENT '订单优惠金额',
  `orderPrice` int(11) NOT NULL COMMENT '订单实际价',
  `orderStatus` tinyint(4) NOT NULL DEFAULT '1' COMMENT '订单状态',
  `orderDelete` tinyint(4) NOT NULL DEFAULT '1' COMMENT '订单删除状态',
  `orderFeedbackImage` varchar(128) NOT NULL DEFAULT '无' COMMENT '订单反馈图片',
  `orderFeedbackContent` varchar(256) NOT NULL DEFAULT '无' COMMENT '订单反馈内容',
  `orderAddress` varchar(64) NOT NULL DEFAULT '无' COMMENT '订单所属地区',
  `orderBranch` tinyint(4) NOT NULL DEFAULT '0' COMMENT '订单所属分店',
  `orderInvoice` tinyint(4) NOT NULL DEFAULT '0' COMMENT '是否需要发票',
  PRIMARY KEY (`orderId`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

/*Data for the table `order` */

insert  into `order`(`orderId`,`orderName`,`orderPhone`,`orderAddressDetail`,`orderProductName`,`orderProductNum`,`orderTime`,`orderOldPrice`,`orderCouponCut`,`orderPrice`,`orderStatus`,`orderDelete`,`orderFeedbackImage`,`orderFeedbackContent`,`orderAddress`,`orderBranch`,`orderInvoice`) values (1,'小一','12345678900','广东省广州市白云区','+;T恤;衬衫','+;1;2','2016-08-01 19:00:56',30,10,20,1,1,'无','无','无',0,0),(2,'小一','43214124324','广东省茂名','+;衬衫;T恤','+;1;2','2016-08-01 19:01:05',20,10,10,1,1,'无','无','无',0,1),(4,'小一','12312313324','惠州发挥的海岸的精髓','+;衬衫;T恤','+;1;2','2016-08-03 22:09:38',30,0,30,2,1,'无','无','无',0,0),(5,'xiaoe','12341434432','huiaujdhsudhsuhdhdhadhjasj','+;T恤;衬衫','+;1;2','2016-08-04 22:10:47',34,0,43,5,1,'无','无','无',0,1),(6,'csdanjkdhsaj','25245435435','fdafdsafgdsfafgdgfd345435','+;T恤;衬衫','+;1;2','2016-08-09 22:33:25',44,0,44,4,1,'无','无','无',0,0),(7,'sadfsdafds','54325432545','saf231414231fsdfgdsgf','+;T恤;衬衫','+;1;2','2016-08-02 22:34:04',55,0,66,5,1,'无','无','无',0,0),(8,'64365433','23454325433','afdasfdafdafda','+;T恤;衬衫;袜子;皮鞋','+;1;2;2;1','2016-08-12 22:35:10',77,0,100,6,1,'无','无','无',0,0);

/*Table structure for table `product` */

DROP TABLE IF EXISTS `product`;

CREATE TABLE `product` (
  `productId` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '产品id',
  `productName` varchar(64) NOT NULL COMMENT '产品名称',
  `productDetail` varchar(256) NOT NULL COMMENT '产品详情',
  `productImage` varchar(128) NOT NULL COMMENT '产品图片',
  `productDelete` tinyint(4) NOT NULL DEFAULT '1' COMMENT '产品删除状态',
  `productPrice` int(11) NOT NULL COMMENT '产品单价',
  `productUid` tinyint(4) NOT NULL COMMENT '产品类别',
  PRIMARY KEY (`productId`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

/*Data for the table `product` */

insert  into `product`(`productId`,`productName`,`productDetail`,`productImage`,`productDelete`,`productPrice`,`productUid`) values (1,'T恤','这是T恤的详情','/laundry/Uploads/1.jpg',1,10,1),(2,'衬衫','这是衬衫的描述','/laundry/Uploads/2.jpg',1,10,1),(3,'长袖','这是长袖的描述','/laundry/Uploads/3.jpg',1,10,1),(4,'衬衫','这是衬衫的描述','/laundry/Uploads/4.jpg',1,10,1),(5,'拖鞋','这是拖鞋的描述','/laundry/Uploads/5.jpg',1,10,2),(6,'遮阳布','这是遮阳布的描述','/laundry/Uploads/6.jpg',1,10,3),(7,'洋帽','这是洋帽的描述','/laundry/Uploads/7.jpg',1,10,4),(8,'球鞋','这是球鞋的描述','/laundry/Uploads/8.jpg',1,10,2);

/*Table structure for table `user` */

DROP TABLE IF EXISTS `user`;

CREATE TABLE `user` (
  `userId` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '用户id',
  `userPhone` char(11) NOT NULL COMMENT '用户手机号',
  `userPwd` varchar(256) NOT NULL COMMENT '用户密码',
  `userName` varchar(64) NOT NULL COMMENT '用户名',
  `userOpenId` varchar(128) NOT NULL COMMENT '用户微信ID',
  `userDelete` tinyint(4) NOT NULL DEFAULT '1' COMMENT '用户删除状态',
  `userIntegral` int(11) NOT NULL DEFAULT '0' COMMENT '用户积分',
  `userBalance` int(11) NOT NULL DEFAULT '0' COMMENT '用户余额',
  PRIMARY KEY (`userId`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

/*Data for the table `user` */

insert  into `user`(`userId`,`userPhone`,`userPwd`,`userName`,`userOpenId`,`userDelete`,`userIntegral`,`userBalance`) values (1,'12345678900','123','小一','123456',1,2000,2000),(2,'15745678901','123','小二','654321',1,3000,2000),(3,'123','123','测试','123',1,9900,10200),(4,'456','456','小三','1231434',1,3500,5000);

/*Table structure for table `usercoupon` */

DROP TABLE IF EXISTS `usercoupon`;

CREATE TABLE `usercoupon` (
  `usercouponId` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '用户优惠券id',
  `usercouponUserId` int(11) NOT NULL COMMENT '用户id',
  `usercouponCouponId` int(11) NOT NULL COMMENT '优惠券id',
  `usercouponCreateTime` date NOT NULL COMMENT '优惠卷兑换时间',
  `failureTime` date NOT NULL COMMENT '优惠卷失效时间',
  `couponFull` int(11) NOT NULL COMMENT '优惠卷满足条件',
  `couponCut` int(11) NOT NULL COMMENT '优惠券所减金额',
  `usercouponStatus` int(11) NOT NULL DEFAULT '1' COMMENT '优惠卷有效状态',
  PRIMARY KEY (`usercouponId`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8;

/*Data for the table `usercoupon` */

insert  into `usercoupon`(`usercouponId`,`usercouponUserId`,`usercouponCouponId`,`usercouponCreateTime`,`failureTime`,`couponFull`,`couponCut`,`usercouponStatus`) values (1,1,2,'2016-09-20','2016-09-27',100,0,1),(2,1,1,'2016-09-20','2016-09-28',200,2,1),(3,1,2,'2016-09-21','2016-09-30',100,2,1),(4,2,1,'2016-09-22','2016-09-30',100,3,1),(5,2,4,'2016-09-22','2016-09-30',120,3,1),(6,3,1,'2016-09-22','2016-09-30',12,4,1),(7,4,1,'2016-09-23','2016-09-29',213,4,1),(8,4,2,'2016-09-15','2016-09-24',32,5,1),(9,4,2,'2016-09-01','2016-10-01',32,5,1),(10,4,3,'2016-09-09','2016-09-09',32,5,1),(11,4,4,'2016-09-14','2016-09-03',23,5,1),(12,4,4,'2016-09-30','2016-10-07',23,5,1),(13,4,5,'2016-09-23','2016-10-03',100,20,1),(14,4,1,'2016-09-23','2016-09-30',10,1,1),(15,4,1,'2016-09-23','2016-09-30',10,1,1),(16,4,4,'2016-09-23','2016-09-27',100,10,1),(17,4,2,'2016-09-23','2016-09-29',20,2,1),(18,4,2,'2016-09-23','2016-09-29',20,2,1),(19,4,5,'2016-09-23','2016-10-03',100,20,1),(20,4,5,'2016-09-23','2016-10-03',100,20,1),(21,3,1,'2016-09-25','2016-10-02',10,1,1);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

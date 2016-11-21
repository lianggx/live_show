/*
Navicat MySQL Data Transfer

Source Server         : 10.32.6.38
Source Server Version : 50553
Source Host           : 10.32.6.38:3306
Source Database       : live_show

Target Server Type    : MYSQL
Target Server Version : 50553
File Encoding         : 65001

Date: 2016-11-19 17:59:10
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- the database on create
-- ----------------------------
CREATE DATABASE  `live_show`;

-- ----------------------------
-- Table structure for dy_cates
-- ----------------------------
DROP TABLE IF EXISTS `dy_cates`;
CREATE TABLE `dy_cates` (
  `id` bigint(64) NOT NULL AUTO_INCREMENT,
  `cate_id` bigint(64) DEFAULT NULL COMMENT '游戏分类 ID ',
  `game_name` varchar(500) DEFAULT NULL COMMENT '游戏分类的名称',
  `short_name` varchar(255) DEFAULT NULL COMMENT '游戏分类的别名',
  `game_url` varchar(500) DEFAULT NULL COMMENT '游戏分类的网址',
  `game_src` varchar(500) DEFAULT NULL COMMENT '游戏分类的封面图片，大小 140*195 ',
  `game_icon` varchar(500) DEFAULT NULL COMMENT '游戏分类的小图标图片，大小 16*16 ',
  `createtime` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Table structure for dy_room_details
-- ----------------------------
DROP TABLE IF EXISTS `dy_room_details`;
CREATE TABLE `dy_room_details` (
  `id` bigint(64) NOT NULL AUTO_INCREMENT COMMENT '主键，自动增长',
  `room_id` bigint(64) DEFAULT NULL COMMENT '房间 ID',
  `room_thumb` varchar(500) DEFAULT NULL COMMENT '房间图片，大小 320*180',
  `cate_id` bigint(64) DEFAULT NULL COMMENT '房间所属分类 ID',
  `cate_name` varchar(500) DEFAULT NULL COMMENT '房间所属分类名称',
  `room_name` varchar(500) DEFAULT NULL COMMENT '房间名称',
  `room_status` int(11) DEFAULT NULL COMMENT '房间开播状态：1=开,2=关',
  `start_time` datetime DEFAULT NULL COMMENT '最近开播时间',
  `owner_name` varchar(255) DEFAULT NULL COMMENT '房间所属主播昵称',
  `owner_avatar` varchar(500) DEFAULT NULL COMMENT '房间所属主播头像地址',
  `online` int(11) DEFAULT '0' COMMENT '在线人数',
  `owner_weight` varchar(255) DEFAULT NULL COMMENT '直播间主播体重',
  `fans_num` int(11) DEFAULT '0' COMMENT '直播间关注数',
  `craetetime` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Table structure for dy_rooms
-- ----------------------------
DROP TABLE IF EXISTS `dy_rooms`;
CREATE TABLE `dy_rooms` (
  `id` bigint(64) NOT NULL AUTO_INCREMENT,
  `room_id` bigint(64) DEFAULT NULL COMMENT '房间 ID ',
  `room_src` varchar(500) DEFAULT NULL COMMENT '房间图片，大小 320*180',
  `room_name` varchar(500) DEFAULT NULL COMMENT '房间名称',
  `owner_uid` bigint(64) DEFAULT NULL COMMENT '房间所属用户的 UID',
  `online` bigint(64) DEFAULT NULL COMMENT '在线人数',
  `nickname` varchar(255) DEFAULT NULL COMMENT '房间所属用户的账号',
  `url` varchar(500) DEFAULT NULL COMMENT '房间的网址',
  `createtime` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Table structure for gitfs
-- ----------------------------
DROP TABLE IF EXISTS `gitfs`;
CREATE TABLE `gitfs` (
  `id` bigint(64) NOT NULL AUTO_INCREMENT COMMENT '主键，自动编号',
  `gid` bigint(64) DEFAULT NULL COMMENT '礼物 id',
  `name` varchar(500) DEFAULT NULL COMMENT '礼物名称',
  `type` int(11) DEFAULT NULL COMMENT '礼物类型,1（鱼丸礼物）/2（鱼翅礼物）',
  `pc` float DEFAULT NULL COMMENT '价格 鱼翅礼物（元）/ 鱼丸礼物（鱼丸）',
  `gx` bigint(20) DEFAULT NULL COMMENT '贡献值',
  `desc` varchar(500) DEFAULT NULL COMMENT '礼物描述',
  `intro` varchar(500) DEFAULT NULL COMMENT '礼物介绍',
  `mimg` varchar(500) DEFAULT NULL COMMENT '礼物图标静态图片地址',
  `himg` varchar(500) DEFAULT NULL COMMENT '礼物图标动态图片地址',
  `createtime` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;
SET FOREIGN_KEY_CHECKS=1;

-- Adminer 4.0.3 MySQL dump

SET NAMES utf8;
SET foreign_key_checks = 0;
SET time_zone = '-07:00';
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

DROP DATABASE IF EXISTS `Hashkit`;
CREATE DATABASE `Hashkit` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `Hashkit`;

DROP TABLE IF EXISTS `acos`;
CREATE TABLE `acos` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `parent_id` int(10) DEFAULT NULL,
  `model` varchar(255) DEFAULT NULL,
  `foreign_key` int(10) DEFAULT NULL,
  `alias` varchar(255) DEFAULT NULL,
  `lft` int(10) DEFAULT NULL,
  `rght` int(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `acos` (`id`, `parent_id`, `model`, `foreign_key`, `alias`, `lft`, `rght`) VALUES
(1,	NULL,	NULL,	NULL,	'controllers',	1,	106),
(2,	1,	NULL,	NULL,	'Groups',	2,	13),
(3,	2,	NULL,	NULL,	'index',	3,	4),
(4,	2,	NULL,	NULL,	'view',	5,	6),
(5,	2,	NULL,	NULL,	'add',	7,	8),
(6,	2,	NULL,	NULL,	'edit',	9,	10),
(7,	2,	NULL,	NULL,	'delete',	11,	12),
(8,	1,	NULL,	NULL,	'HashResults',	14,	37),
(9,	8,	NULL,	NULL,	'index',	15,	16),
(10,	8,	NULL,	NULL,	'view',	17,	18),
(11,	8,	NULL,	NULL,	'add',	19,	20),
(12,	8,	NULL,	NULL,	'edit',	21,	22),
(13,	8,	NULL,	NULL,	'delete',	23,	24),
(14,	8,	NULL,	NULL,	'basicHashingResult',	25,	26),
(15,	8,	NULL,	NULL,	'computeAndCompareResult',	27,	28),
(16,	8,	NULL,	NULL,	'showMyTestResults',	29,	30),
(17,	1,	NULL,	NULL,	'HashTests',	38,	55),
(18,	17,	NULL,	NULL,	'basicHashing',	39,	40),
(19,	17,	NULL,	NULL,	'basicHashingInput',	41,	42),
(20,	17,	NULL,	NULL,	'computeAndCompare',	43,	44),
(21,	17,	NULL,	NULL,	'computeAndCompareInput',	45,	46),
(22,	17,	NULL,	NULL,	'reverseHashLookUp',	47,	48),
(23,	1,	NULL,	NULL,	'Pages',	56,	67),
(24,	23,	NULL,	NULL,	'display',	57,	58),
(25,	23,	NULL,	NULL,	'index',	59,	60),
(26,	23,	NULL,	NULL,	'computeAndCompare',	61,	62),
(27,	23,	NULL,	NULL,	'sendEmailNotification',	63,	64),
(28,	1,	NULL,	NULL,	'Users',	68,	93),
(29,	28,	NULL,	NULL,	'index',	69,	70),
(30,	28,	NULL,	NULL,	'view',	71,	72),
(31,	28,	NULL,	NULL,	'add',	73,	74),
(32,	28,	NULL,	NULL,	'edit',	75,	76),
(33,	28,	NULL,	NULL,	'delete',	77,	78),
(34,	28,	NULL,	NULL,	'login',	79,	80),
(35,	28,	NULL,	NULL,	'logoff',	81,	82),
(36,	28,	NULL,	NULL,	'register',	83,	84),
(37,	28,	NULL,	NULL,	'forget_password',	85,	86),
(38,	28,	NULL,	NULL,	'home',	87,	88),
(39,	1,	NULL,	NULL,	'AclExtras',	94,	95),
(40,	1,	NULL,	NULL,	'DebugKit',	96,	103),
(41,	40,	NULL,	NULL,	'ToolbarAccess',	97,	102),
(42,	41,	NULL,	NULL,	'history_state',	98,	99),
(43,	41,	NULL,	NULL,	'sql_explain',	100,	101),
(44,	1,	NULL,	NULL,	'PermissionsExtras',	104,	105),
(45,	28,	NULL,	NULL,	'admin_add',	89,	90),
(46,	28,	NULL,	NULL,	'logout',	91,	92),
(47,	17,	NULL,	NULL,	'basic_hashing',	49,	50),
(48,	17,	NULL,	NULL,	'basic_hashing_input',	51,	52),
(49,	8,	NULL,	NULL,	'basic_hashing_result',	31,	32),
(50,	8,	NULL,	NULL,	'compute_and_compare_result',	33,	34),
(51,	8,	NULL,	NULL,	'show_my_test_results',	35,	36),
(52,	17,	NULL,	NULL,	'compute_and_compare',	53,	54),
(53,	23,	NULL,	NULL,	'begin_test',	65,	66);

DROP TABLE IF EXISTS `aros`;
CREATE TABLE `aros` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `parent_id` int(10) DEFAULT NULL,
  `model` varchar(255) DEFAULT NULL,
  `foreign_key` int(10) DEFAULT NULL,
  `alias` varchar(255) DEFAULT NULL,
  `lft` int(10) DEFAULT NULL,
  `rght` int(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `aros` (`id`, `parent_id`, `model`, `foreign_key`, `alias`, `lft`, `rght`) VALUES
(1,	NULL,	'Group',	1,	NULL,	1,	2),
(2,	NULL,	'Group',	2,	NULL,	3,	4),
(3,	NULL,	'Group',	3,	NULL,	5,	6);

DROP TABLE IF EXISTS `aros_acos`;
CREATE TABLE `aros_acos` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `aro_id` int(10) NOT NULL,
  `aco_id` int(10) NOT NULL,
  `_create` varchar(2) NOT NULL DEFAULT '0',
  `_read` varchar(2) NOT NULL DEFAULT '0',
  `_update` varchar(2) NOT NULL DEFAULT '0',
  `_delete` varchar(2) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `ARO_ACO_KEY` (`aro_id`,`aco_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `aros_acos` (`id`, `aro_id`, `aco_id`, `_create`, `_read`, `_update`, `_delete`) VALUES
(1,	1,	1,	'1',	'1',	'1',	'1'),
(2,	2,	1,	'-1',	'-1',	'-1',	'-1'),
(3,	2,	31,	'1',	'1',	'1',	'1'),
(4,	3,	1,	'-1',	'-1',	'-1',	'-1'),
(5,	3,	23,	'1',	'1',	'1',	'1'),
(6,	3,	17,	'1',	'1',	'1',	'1'),
(7,	3,	8,	'1',	'1',	'1',	'1');

DROP TABLE IF EXISTS `group`;
CREATE TABLE `group` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `group` (`id`, `name`, `created`, `modified`) VALUES
(1,	'Administrators',	'0000-00-00 00:00:00',	'0000-00-00 00:00:00'),
(2,	'App_Admins',	'0000-00-00 00:00:00',	'0000-00-00 00:00:00'),
(3,	'App_Users',	'0000-00-00 00:00:00',	'0000-00-00 00:00:00');

DROP TABLE IF EXISTS `hash_algorithm`;
CREATE TABLE `hash_algorithm` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `hash_algorithm` (`id`, `name`) VALUES
(1,	'SHA1'),
(2,	'MD5'),
(3,	'MD2'),
(4,	'MD4'),
(5,	'SHA256');

DROP TABLE IF EXISTS `hash_result`;
CREATE TABLE `hash_result` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `plaintext` text NOT NULL,
  `message_digest` text NOT NULL,
  `hash_algorithm_id` int(10) NOT NULL,
  `user_id` int(10) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `hash_result` (`id`, `plaintext`, `message_digest`, `hash_algorithm_id`, `user_id`) VALUES
(3,	'hello',	'5d41402abc4b2a76b9719d911017c592',	2,	1),
(4,	'hello',	'5d41402abc4b2a76b9719d911017c592',	2,	1),
(5,	'hello',	'5d41402abc4b2a76b9719d911017c592',	2,	1),
(6,	'hello',	'5d41402abc4b2a76b9719d911017c592',	2,	1),
(7,	'hello',	'5d41402abc4b2a76b9719d911017c592',	2,	1);

DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `password` varchar(255) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `group_id` int(10) NOT NULL,
  `profile` text NOT NULL,
  `status` varchar(10) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `user` (`id`, `password`, `name`, `email`, `group_id`, `profile`, `status`, `token`, `created`, `modified`) VALUES
(5,	'96b9369f55be479d63a8ef366966a03a607657e4',	'yong',	'yong24@gmail.com',	1,	'I am yong',	'',	'',	'2014-03-28 01:05:48',	'2014-03-28 01:05:48'),
(10,	'96b9369f55be479d63a8ef366966a03a607657e4',	'AikChun',	'aikchun616@gmail.com',	1,	'I am the main user.',	'',	'2f8c70400f525af8a1801c590056c2fdd6b757db',	'2014-03-28 01:36:02',	'2014-04-09 23:11:24'),
(11,	'96b9369f55be479d63a8ef366966a03a607657e4',	'dude',	'dude@gmail.com',	3,	'',	'',	'',	'2014-04-05 00:20:03',	'2014-04-05 00:20:03');

-- 2014-04-14 19:48:21

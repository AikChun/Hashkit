-- Adminer 4.0.3 MySQL dump

SET NAMES utf8;
SET foreign_key_checks = 0;
SET time_zone = '+08:00';
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
(1,	NULL,	NULL,	NULL,	'controllers',	1,	122),
(2,	1,	NULL,	NULL,	'Groups',	2,	13),
(3,	2,	NULL,	NULL,	'index',	3,	4),
(4,	2,	NULL,	NULL,	'view',	5,	6),
(5,	2,	NULL,	NULL,	'add',	7,	8),
(6,	2,	NULL,	NULL,	'edit',	9,	10),
(7,	2,	NULL,	NULL,	'delete',	11,	12),
(8,	1,	NULL,	NULL,	'HashResults',	14,	39),
(9,	8,	NULL,	NULL,	'index',	15,	16),
(10,	8,	NULL,	NULL,	'view',	17,	18),
(11,	8,	NULL,	NULL,	'add',	19,	20),
(12,	8,	NULL,	NULL,	'edit',	21,	22),
(13,	8,	NULL,	NULL,	'delete',	23,	24),
(14,	8,	NULL,	NULL,	'basicHashingResult',	25,	26),
(15,	8,	NULL,	NULL,	'computeAndCompareResult',	27,	28),
(16,	8,	NULL,	NULL,	'showMyTestResults',	29,	30),
(17,	1,	NULL,	NULL,	'HashTests',	40,	67),
(18,	17,	NULL,	NULL,	'basicHashing',	41,	42),
(19,	17,	NULL,	NULL,	'basicHashingInput',	43,	44),
(20,	17,	NULL,	NULL,	'computeAndCompare',	45,	46),
(21,	17,	NULL,	NULL,	'computeAndCompareInput',	47,	48),
(22,	17,	NULL,	NULL,	'reverseHashLookUp',	49,	50),
(23,	1,	NULL,	NULL,	'Pages',	68,	81),
(24,	23,	NULL,	NULL,	'display',	69,	70),
(25,	23,	NULL,	NULL,	'index',	71,	72),
(26,	23,	NULL,	NULL,	'computeAndCompare',	73,	74),
(27,	23,	NULL,	NULL,	'sendEmailNotification',	75,	76),
(28,	1,	NULL,	NULL,	'Users',	82,	109),
(29,	28,	NULL,	NULL,	'index',	83,	84),
(30,	28,	NULL,	NULL,	'view',	85,	86),
(31,	28,	NULL,	NULL,	'add',	87,	88),
(32,	28,	NULL,	NULL,	'edit',	89,	90),
(33,	28,	NULL,	NULL,	'delete',	91,	92),
(34,	28,	NULL,	NULL,	'login',	93,	94),
(35,	28,	NULL,	NULL,	'logoff',	95,	96),
(36,	28,	NULL,	NULL,	'register',	97,	98),
(37,	28,	NULL,	NULL,	'forget_password',	99,	100),
(38,	28,	NULL,	NULL,	'home',	101,	102),
(39,	1,	NULL,	NULL,	'AclExtras',	110,	111),
(40,	1,	NULL,	NULL,	'DebugKit',	112,	119),
(41,	40,	NULL,	NULL,	'ToolbarAccess',	113,	118),
(42,	41,	NULL,	NULL,	'history_state',	114,	115),
(43,	41,	NULL,	NULL,	'sql_explain',	116,	117),
(44,	1,	NULL,	NULL,	'PermissionsExtras',	120,	121),
(45,	28,	NULL,	NULL,	'admin_add',	103,	104),
(46,	28,	NULL,	NULL,	'logout',	105,	106),
(47,	17,	NULL,	NULL,	'basic_hashing',	51,	52),
(48,	17,	NULL,	NULL,	'basic_hashing_input',	53,	54),
(49,	8,	NULL,	NULL,	'basic_hashing_result',	31,	32),
(50,	8,	NULL,	NULL,	'compute_and_compare_result',	33,	34),
(51,	8,	NULL,	NULL,	'show_my_test_results',	35,	36),
(52,	17,	NULL,	NULL,	'compute_and_compare',	55,	56),
(53,	23,	NULL,	NULL,	'begin_test',	77,	78),
(54,	8,	NULL,	NULL,	'calculate_probability_of_collision_result',	37,	38),
(55,	17,	NULL,	NULL,	'checkDuplicatesInArray',	57,	58),
(56,	17,	NULL,	NULL,	'calculate_probability_of_collision',	59,	60),
(57,	17,	NULL,	NULL,	'avalanche_effect',	61,	62),
(58,	23,	NULL,	NULL,	'hash_function_properties',	79,	80),
(59,	28,	NULL,	NULL,	'reset_password',	107,	108),
(60,	17,	NULL,	NULL,	'compute_and_compare_input',	63,	64),
(61,	17,	NULL,	NULL,	'generate_ninety_nine_percentage_proability',	65,	66);

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

DROP TABLE IF EXISTS `Description`;
CREATE TABLE `Description` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `user_id` int(10) NOT NULL,
  `description` text NOT NULL,
  `created` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


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

DROP TABLE IF EXISTS `hash_algorithm_v1`;
CREATE TABLE `hash_algorithm_v1` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(40) NOT NULL,
  `base` int(11) NOT NULL,
  `exponent` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `hash_algorithm_v1` (`id`, `name`, `base`, `exponent`) VALUES
(1,	'MD2',	2,	128),
(2,	'MD4',	2,	128),
(3,	'MD5',	2,	128),
(4,	'Panama',	2,	256),
(5,	'ripemd',	2,	128),
(6,	'ripemd-128',	2,	128),
(7,	'ripemd-256',	2,	256),
(8,	'ripemd-160',	2,	160),
(9,	'ripemd-320',	2,	320),
(10,	'rtr0',	2,	160),
(11,	'SHA-0',	2,	160),
(12,	'SHA-1',	2,	160),
(13,	'SHA-224',	2,	224),
(14,	'SHA-256',	2,	256),
(15,	'whirlpool',	2,	512);

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
(1,	'Hello',	'f7ff9e8b7bb2e09b70935a5d785e0cc5d9d0abf0',	1,	10),
(2,	'asd',	'688787d8ff144c502c7f5cffaafe2cc588d86079f9de88304c26b0cb99ce91c6',	5,	11),
(3,	'asd',	'688787d8ff144c502c7f5cffaafe2cc588d86079f9de88304c26b0cb99ce91c6',	5,	11),
(4,	'asd',	'688787d8ff144c502c7f5cffaafe2cc588d86079f9de88304c26b0cb99ce91c6',	5,	11),
(5,	'hello\n\nasd\n\nbye\n\nhello\n\nhey\n\nasd\n\n',	'5891b5b522d5df086d0ff0b110fbd9d21bb4fc7163af34d08286a2e846f6be03\ndc460da4ad72c482231e28e688e01f2778a88ce31a08826899d54ef7183998b5\nabc6fd595fc079d3114d4b71a4d84b1d1d0f79df1e70f8813212f2a65d8916df\n5891b5b522d5df086d0ff0b110fbd9d21bb4fc7163af34d08286a2e846f6be03\n4e955fea0268518cbaa500409dfbec88f0ecebad28d84ecbe250baed97dba889\ndc460da4ad72c482231e28e688e01f2778a88ce31a08826899d54ef7183998b5\n',	5,	11),
(6,	'asdqwe',	'f9a7c6df341325822e3ea264cfe39e5ef8c73aa4',	1,	11),
(7,	'asdqwe',	'501bb865d4a92532cfebb65ee059e4889363eeb28a22ca6fb82165bb17432724',	5,	0);

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
(11,	'96b9369f55be479d63a8ef366966a03a607657e4',	'dude',	'dude@gmail.com',	3,	'',	'',	'',	'2014-04-05 00:20:03',	'2014-04-05 00:20:03'),
(12,	'1fda6ac901aee9291e9ef40a02e86367bb6da06d',	'ian',	'ian@gmail.com',	1,	'super user',	'',	'',	'2014-04-16 15:29:25',	'2014-04-16 15:29:25');

-- 2014-04-16 15:37:39

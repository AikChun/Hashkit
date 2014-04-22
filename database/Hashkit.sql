-- Adminer 4.0.3 MySQL dump

SET NAMES utf8;
SET foreign_key_checks = 0;
SET time_zone = '-07:00';
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

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
(1,	NULL,	NULL,	NULL,	'controllers',	1,	148),
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
(61,	17,	NULL,	NULL,	'generate_ninety_nine_percentage_proability',	65,	66),
(62,	1,	NULL,	NULL,	'Descriptions',	122,	133),
(63,	62,	NULL,	NULL,	'index',	123,	124),
(64,	62,	NULL,	NULL,	'view',	125,	126),
(65,	62,	NULL,	NULL,	'add',	127,	128),
(66,	62,	NULL,	NULL,	'edit',	129,	130),
(67,	62,	NULL,	NULL,	'delete',	131,	132),
(68,	1,	NULL,	NULL,	'Dictionaries',	134,	147),
(69,	68,	NULL,	NULL,	'index',	135,	136),
(70,	68,	NULL,	NULL,	'view',	137,	138),
(71,	68,	NULL,	NULL,	'add',	139,	140),
(72,	68,	NULL,	NULL,	'edit',	141,	142),
(73,	68,	NULL,	NULL,	'delete',	143,	144),
(74,	68,	NULL,	NULL,	'read_and_insert',	145,	146);

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

DROP TABLE IF EXISTS `description`;
CREATE TABLE `description` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `user_id` int(10) NOT NULL,
  `description` text NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `description` (`id`, `user_id`, `description`, `created`, `modified`) VALUES
(51,	12,	'There is collision detected at: \nhello f572d396fae9206628714fb2ce00f72e94f2258f\nhello f572d396fae9206628714fb2ce00f72e94f2258f\nasd c85320d9ddb90c13f4a215f1f0a87b531ab33310\nasd c85320d9ddb90c13f4a215f1f0a87b531ab33310\n',	'2014-04-22 15:53:57',	'2014-04-22 15:53:57'),
(52,	12,	'There is collision detected at: \nhello f572d396fae9206628714fb2ce00f72e94f2258f\nhello f572d396fae9206628714fb2ce00f72e94f2258f\nasd c85320d9ddb90c13f4a215f1f0a87b531ab33310\nasd c85320d9ddb90c13f4a215f1f0a87b531ab33310\n',	'2014-04-22 15:55:49',	'2014-04-22 15:55:49'),
(53,	12,	'There is collision detected at: \nhello f572d396fae9206628714fb2ce00f72e94f2258f\nhello f572d396fae9206628714fb2ce00f72e94f2258f\nasd c85320d9ddb90c13f4a215f1f0a87b531ab33310\nasd c85320d9ddb90c13f4a215f1f0a87b531ab33310\n',	'2014-04-22 15:58:40',	'2014-04-22 15:58:40'),
(54,	12,	'There is collision detected at: \nhello f572d396fae9206628714fb2ce00f72e94f2258f\nhello f572d396fae9206628714fb2ce00f72e94f2258f\nasd c85320d9ddb90c13f4a215f1f0a87b531ab33310\nasd c85320d9ddb90c13f4a215f1f0a87b531ab33310\n',	'2014-04-22 15:59:47',	'2014-04-22 15:59:47'),
(55,	12,	'There is collision detected at: \nhello f572d396fae9206628714fb2ce00f72e94f2258f\nhello f572d396fae9206628714fb2ce00f72e94f2258f\nasd c85320d9ddb90c13f4a215f1f0a87b531ab33310\nasd c85320d9ddb90c13f4a215f1f0a87b531ab33310\n',	'2014-04-22 16:06:42',	'2014-04-22 16:06:42'),
(56,	12,	'There is collision detected at: \nhello f572d396fae9206628714fb2ce00f72e94f2258f\nhello f572d396fae9206628714fb2ce00f72e94f2258f\nasd c85320d9ddb90c13f4a215f1f0a87b531ab33310\nasd c85320d9ddb90c13f4a215f1f0a87b531ab33310\n',	'2014-04-22 16:07:06',	'2014-04-22 16:07:06'),
(57,	12,	'There is collision detected at: \nhello f572d396fae9206628714fb2ce00f72e94f2258f\nhello f572d396fae9206628714fb2ce00f72e94f2258f\nasd c85320d9ddb90c13f4a215f1f0a87b531ab33310\nasd c85320d9ddb90c13f4a215f1f0a87b531ab33310\n',	'2014-04-22 16:23:25',	'2014-04-22 16:23:25'),
(58,	12,	'There is collision detected at: \nhello f572d396fae9206628714fb2ce00f72e94f2258f\nhello f572d396fae9206628714fb2ce00f72e94f2258f\nasd c85320d9ddb90c13f4a215f1f0a87b531ab33310\nasd c85320d9ddb90c13f4a215f1f0a87b531ab33310\n',	'2014-04-22 16:30:59',	'2014-04-22 16:30:59'),
(59,	12,	'There is collision detected at: \nhello b1946ac92492d2347c6235b4d2611184\nhello b1946ac92492d2347c6235b4d2611184\nasd e07910a06a086c83ba41827aa00b26ed\nasd e07910a06a086c83ba41827aa00b26ed\n',	'2014-04-22 16:31:58',	'2014-04-22 16:31:58'),
(60,	12,	'There is collision detected at: \nhello b1946ac92492d2347c6235b4d2611184\nhello b1946ac92492d2347c6235b4d2611184\nasd e07910a06a086c83ba41827aa00b26ed\nasd e07910a06a086c83ba41827aa00b26ed\n',	'2014-04-22 16:40:36',	'2014-04-22 16:40:36'),
(61,	12,	'There is collision detected at: \nhello b1946ac92492d2347c6235b4d2611184\nhello b1946ac92492d2347c6235b4d2611184\nasd e07910a06a086c83ba41827aa00b26ed\nasd e07910a06a086c83ba41827aa00b26ed\n',	'2014-04-22 16:40:53',	'2014-04-22 16:40:53'),
(62,	12,	'There is collision detected at: \nhello b1946ac92492d2347c6235b4d2611184\nhello b1946ac92492d2347c6235b4d2611184\nasd e07910a06a086c83ba41827aa00b26ed\nasd e07910a06a086c83ba41827aa00b26ed\n',	'2014-04-22 16:45:10',	'2014-04-22 16:45:10'),
(63,	12,	'There is collision detected at: \nhello b1946ac92492d2347c6235b4d2611184\nhello b1946ac92492d2347c6235b4d2611184\nasd e07910a06a086c83ba41827aa00b26ed\nasd e07910a06a086c83ba41827aa00b26ed\n',	'2014-04-22 16:46:02',	'2014-04-22 16:46:02'),
(64,	12,	'There is collision detected at: \nhello b1946ac92492d2347c6235b4d2611184\nhello b1946ac92492d2347c6235b4d2611184\nasd e07910a06a086c83ba41827aa00b26ed\nasd e07910a06a086c83ba41827aa00b26ed\n',	'2014-04-22 16:47:50',	'2014-04-22 16:47:50'),
(65,	12,	'There is collision detected at: \nhello b1946ac92492d2347c6235b4d2611184\nhello b1946ac92492d2347c6235b4d2611184\nasd e07910a06a086c83ba41827aa00b26ed\nasd e07910a06a086c83ba41827aa00b26ed\n',	'2014-04-22 16:48:33',	'2014-04-22 16:48:33');

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
  `speed` text NOT NULL,
  `security` text NOT NULL,
  `collision_resistance` text NOT NULL,
  `preimage_resistance` text NOT NULL,
  `2nd_preimage_resistance` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `hash_algorithm` (`id`, `name`, `speed`, `security`, `collision_resistance`, `preimage_resistance`, `2nd_preimage_resistance`) VALUES
(1,	'SHA1',	'192',	'2',	'No',	'Yes',	'Yes'),
(2,	'MD5',	'335',	'1',	'No',	'No',	'Yes'),
(3,	'MD2',	'',	'1',	'No',	'No',	'Yes'),
(4,	'MD4',	'',	'0',	'No',	'No',	'No'),
(5,	'SHA256',	'139',	'3',	'Yes',	'Yes',	'Yes');

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
(5,	'ripemd',	2,	128),
(6,	'ripemd128',	2,	128),
(7,	'ripemd256',	2,	256),
(8,	'ripemd160',	2,	160),
(9,	'ripemd320',	2,	320),
(12,	'SHA1',	2,	160),
(13,	'SHA224',	2,	224),
(14,	'SHA256',	2,	256),
(15,	'whirlpool',	2,	512),
(16,	'customised',	0,	0),
(17,	'tiger128,3',	2,	32),
(18,	'SHA384',	2,	384),
(19,	'SHA512',	2,	512),
(20,	'tiger160,3',	2,	160),
(21,	'tiger192,3',	2,	192),
(22,	'snefru',	2,	256),
(23,	'crc32',	2,	32),
(24,	'crc32b',	2,	32),
(25,	'haval128,3',	2,	128),
(26,	'haval160,3',	2,	160),
(27,	'haval192,3',	2,	192);

DROP TABLE IF EXISTS `hash_result`;
CREATE TABLE `hash_result` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `plaintext` text NOT NULL,
  `message_digest` text NOT NULL,
  `hash_algorithm_id` int(10) NOT NULL,
  `user_id` int(10) NOT NULL,
  `description_id` int(10) NOT NULL,
  `created` date NOT NULL,
  `modified` date NOT NULL,
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`),
  KEY `description_id` (`description_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


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

-- 2014-04-22 05:10:42

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
(1,	NULL,	NULL,	NULL,	'controllers',	1,	176),
(2,	1,	NULL,	NULL,	'Groups',	2,	13),
(3,	2,	NULL,	NULL,	'index',	3,	4),
(4,	2,	NULL,	NULL,	'view',	5,	6),
(5,	2,	NULL,	NULL,	'add',	7,	8),
(6,	2,	NULL,	NULL,	'edit',	9,	10),
(7,	2,	NULL,	NULL,	'delete',	11,	12),
(8,	1,	NULL,	NULL,	'HashResults',	14,	47),
(9,	8,	NULL,	NULL,	'index',	15,	16),
(10,	8,	NULL,	NULL,	'view',	17,	18),
(11,	8,	NULL,	NULL,	'add',	19,	20),
(12,	8,	NULL,	NULL,	'edit',	21,	22),
(13,	8,	NULL,	NULL,	'delete',	23,	24),
(14,	8,	NULL,	NULL,	'basicHashingResult',	25,	26),
(15,	8,	NULL,	NULL,	'computeAndCompareResult',	27,	28),
(16,	8,	NULL,	NULL,	'showMyTestResults',	29,	30),
(17,	1,	NULL,	NULL,	'HashTests',	48,	95),
(18,	17,	NULL,	NULL,	'basicHashing',	49,	50),
(19,	17,	NULL,	NULL,	'basicHashingInput',	51,	52),
(20,	17,	NULL,	NULL,	'computeAndCompare',	53,	54),
(21,	17,	NULL,	NULL,	'computeAndCompareInput',	55,	56),
(22,	17,	NULL,	NULL,	'reverseHashLookUp',	57,	58),
(23,	1,	NULL,	NULL,	'Pages',	96,	109),
(24,	23,	NULL,	NULL,	'display',	97,	98),
(25,	23,	NULL,	NULL,	'index',	99,	100),
(26,	23,	NULL,	NULL,	'computeAndCompare',	101,	102),
(27,	23,	NULL,	NULL,	'sendEmailNotification',	103,	104),
(28,	1,	NULL,	NULL,	'Users',	110,	137),
(29,	28,	NULL,	NULL,	'index',	111,	112),
(30,	28,	NULL,	NULL,	'view',	113,	114),
(31,	28,	NULL,	NULL,	'add',	115,	116),
(32,	28,	NULL,	NULL,	'edit',	117,	118),
(33,	28,	NULL,	NULL,	'delete',	119,	120),
(34,	28,	NULL,	NULL,	'login',	121,	122),
(35,	28,	NULL,	NULL,	'logoff',	123,	124),
(36,	28,	NULL,	NULL,	'register',	125,	126),
(37,	28,	NULL,	NULL,	'forget_password',	127,	128),
(38,	28,	NULL,	NULL,	'home',	129,	130),
(39,	1,	NULL,	NULL,	'AclExtras',	138,	139),
(40,	1,	NULL,	NULL,	'DebugKit',	140,	147),
(41,	40,	NULL,	NULL,	'ToolbarAccess',	141,	146),
(42,	41,	NULL,	NULL,	'history_state',	142,	143),
(43,	41,	NULL,	NULL,	'sql_explain',	144,	145),
(44,	1,	NULL,	NULL,	'PermissionsExtras',	148,	149),
(45,	28,	NULL,	NULL,	'admin_add',	131,	132),
(46,	28,	NULL,	NULL,	'logout',	133,	134),
(47,	17,	NULL,	NULL,	'basic_hashing',	59,	60),
(48,	17,	NULL,	NULL,	'basic_hashing_input',	61,	62),
(49,	8,	NULL,	NULL,	'basic_hashing_result',	31,	32),
(50,	8,	NULL,	NULL,	'compute_and_compare_result',	33,	34),
(51,	8,	NULL,	NULL,	'show_my_test_results',	35,	36),
(52,	17,	NULL,	NULL,	'compute_and_compare',	63,	64),
(53,	23,	NULL,	NULL,	'begin_test',	105,	106),
(54,	8,	NULL,	NULL,	'calculate_probability_of_collision_result',	37,	38),
(55,	17,	NULL,	NULL,	'checkDuplicatesInArray',	65,	66),
(56,	17,	NULL,	NULL,	'calculate_probability_of_collision',	67,	68),
(57,	17,	NULL,	NULL,	'avalanche_effect',	69,	70),
(58,	23,	NULL,	NULL,	'hash_function_properties',	107,	108),
(59,	28,	NULL,	NULL,	'reset_password',	135,	136),
(60,	17,	NULL,	NULL,	'compute_and_compare_input',	71,	72),
(61,	17,	NULL,	NULL,	'generate_ninety_nine_percentage_proability',	73,	74),
(62,	1,	NULL,	NULL,	'Descriptions',	150,	161),
(63,	62,	NULL,	NULL,	'index',	151,	152),
(64,	62,	NULL,	NULL,	'view',	153,	154),
(65,	62,	NULL,	NULL,	'add',	155,	156),
(66,	62,	NULL,	NULL,	'edit',	157,	158),
(67,	62,	NULL,	NULL,	'delete',	159,	160),
(68,	1,	NULL,	NULL,	'Dictionaries',	162,	175),
(69,	68,	NULL,	NULL,	'index',	163,	164),
(70,	68,	NULL,	NULL,	'view',	165,	166),
(71,	68,	NULL,	NULL,	'add',	167,	168),
(72,	68,	NULL,	NULL,	'edit',	169,	170),
(73,	68,	NULL,	NULL,	'delete',	171,	172),
(74,	68,	NULL,	NULL,	'read_and_insert',	173,	174),
(75,	8,	NULL,	NULL,	'hash_analyser_result',	39,	40),
(76,	17,	NULL,	NULL,	'hash_analyser',	75,	76),
(77,	17,	NULL,	NULL,	'birthday_attack',	77,	78),
(78,	17,	NULL,	NULL,	'crypto_rand_secure',	79,	80),
(79,	17,	NULL,	NULL,	'getaString',	81,	82),
(80,	8,	NULL,	NULL,	'birthday_attack',	41,	42),
(81,	8,	NULL,	NULL,	'avalanche_effect_result',	43,	44),
(82,	17,	NULL,	NULL,	'reverse_look_up',	83,	84),
(83,	17,	NULL,	NULL,	'compute_avalanche',	85,	86),
(84,	17,	NULL,	NULL,	'get_a_string',	87,	88),
(85,	17,	NULL,	NULL,	'generate_array',	89,	90),
(86,	17,	NULL,	NULL,	'compare_array',	91,	92),
(87,	17,	NULL,	NULL,	'generate_array_and_compare',	93,	94),
(88,	8,	NULL,	NULL,	'reverse',	45,	46);

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


DROP TABLE IF EXISTS `dictionary`;
CREATE TABLE `dictionary` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `plaintext` varchar(255) NOT NULL,
  `SHA1` varchar(40) NOT NULL,
  `MD5` varchar(32) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `dictionary` (`id`, `plaintext`, `SHA1`, `MD5`) VALUES
(1,	'hello\n',	'f572d396fae9206628714fb2ce00f72e94f2258f',	'b1946ac92492d2347c6235b4d2611184'),
(2,	'asd\n',	'c85320d9ddb90c13f4a215f1f0a87b531ab33310',	'e07910a06a086c83ba41827aa00b26ed'),
(3,	'bye\n',	'ee9e51458f4642f48efe956962058245ee7127b1',	'91fc14ad02afd60985bb8165bda320a6'),
(4,	'hey\n',	'7aea02175315cd3541b03ffe78aa1ccc40d2e98a',	'081ecc5e6dd6ba0d150fc4bc0e62ec50'),
(5,	'bhjcj',	'78299f0f82789e0cd234036a2126817266918884',	'803e80bb05bf6dd43ea57635efc1c958'),
(6,	'bhjcj gcg',	'2cb69432a0037e85a1c0b06dc4bd364ff390e9ae',	'7b555d405e5c721455e9ed1cefdd70e5'),
(7,	' hvjb',	'ee06b2a1f9f1fa8b2b20d6f78d8c7a62084ee8dc',	'930fff91e4b2368ba116f04e816fff64'),
(8,	' ',	'b858cb282617fb0956d960215c8e84d1ccf909c6',	'7215ee9c7d9dc229d2921a40e899ec5f'),
(9,	'jbi',	'a4344de0a9dd89e3862b78f9fe9bbaedc1f8a8b1',	'215c051ba023f13ec68d0119f48a88ad'),
(10,	'vui ubiu',	'104c71b711995cb55135f92624d13b14c93ace52',	'9801bfeb4465d0110b5cfe98f01b160b'),
(11,	'dasdqwd',	'968f3565521ced719ada1e28f58d9ce75a537eef',	'9399cabe8b025274435dc7bbd3221da6'),
(12,	'fsdf',	'44cef431f67acb94eea6b80b7160b5e9d82e0bcc',	'7d70663568cac5af684503681e3a4d41'),
(13,	'ugivh',	'e0083af1cb26ed34f8813d51caa08a66ae65d1b5',	'1dcf86c0c05ee7eceb71ad0c00764e1d'),
(14,	'ubiu',	'7c8d6753b5bd435d3637f99d8509175ba1fbf25a',	'431c0d66f8e9020b2eff56c8535ae209'),
(15,	'juigviu',	'7bfa299dac7689bfe33dc6d47f5883167a63c09f',	'b4bbc8687e9ca0337d57c4a2122ab651'),
(16,	'iuvu',	'5e544c3c1434f2ea7c8c895fdc3e333300e6c74c',	'393bdd2f3a16579a857170e86dbe151a');

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
  `collision_bka` text NOT NULL,
  `preimage_bka` text NOT NULL,
  `2nd_preimage_bka` text NOT NULL,
  `output_length` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `hash_algorithm` (`id`, `name`, `speed`, `security`, `collision_resistance`, `preimage_resistance`, `2nd_preimage_resistance`, `collision_bka`, `preimage_bka`, `2nd_preimage_bka`, `output_length`) VALUES
(1,	'SHA1',	'333.29',	'2',	'Broken',	'Unbroken',	'Unbroken',	'2^60',	'Nil',	'Nil',	'160'),
(2,	'MD5',	'392.32',	'1',	'Broken',	'Broken',	'Unbroken',	'2^20.96',	'2^123.4',	'Nil',	'128'),
(3,	'MD2',	'5.43',	'1',	'Broken',	'Broken',	'Unbroken',	'2^63.3',	'2^73',	'Nil',	'128'),
(4,	'MD4',	'540.87',	'0',	'Broken',	'Broken',	'Broken',	'3',	'2^69.4',	'2^78.4',	'128'),
(5,	'SHA256',	'169.49',	'3',	'Unbroken',	'Unbroken',	'Unbroken',	'Nil',	'Nil',	'Nil',	'256');

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
  `description_id` int(10) NOT NULL,
  `created` date NOT NULL,
  `modified` date NOT NULL,
  PRIMARY KEY (`id`),
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

-- 2014-04-29 17:24:44

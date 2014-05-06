-- Adminer 4.1.0 MySQL dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
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
(1,	NULL,	NULL,	NULL,	'controllers',	1,	206),
(2,	1,	NULL,	NULL,	'Groups',	2,	13),
(3,	2,	NULL,	NULL,	'index',	3,	4),
(4,	2,	NULL,	NULL,	'view',	5,	6),
(5,	2,	NULL,	NULL,	'add',	7,	8),
(6,	2,	NULL,	NULL,	'edit',	9,	10),
(7,	2,	NULL,	NULL,	'delete',	11,	12),
(8,	1,	NULL,	NULL,	'HashResults',	14,	51),
(9,	8,	NULL,	NULL,	'index',	15,	16),
(10,	8,	NULL,	NULL,	'view',	17,	18),
(11,	8,	NULL,	NULL,	'add',	19,	20),
(12,	8,	NULL,	NULL,	'edit',	21,	22),
(13,	8,	NULL,	NULL,	'delete',	23,	24),
(14,	8,	NULL,	NULL,	'basicHashingResult',	25,	26),
(15,	8,	NULL,	NULL,	'computeAndCompareResult',	27,	28),
(16,	8,	NULL,	NULL,	'showMyTestResults',	29,	30),
(17,	1,	NULL,	NULL,	'HashTests',	52,	101),
(18,	17,	NULL,	NULL,	'basicHashing',	53,	54),
(19,	17,	NULL,	NULL,	'basicHashingInput',	55,	56),
(20,	17,	NULL,	NULL,	'computeAndCompare',	57,	58),
(21,	17,	NULL,	NULL,	'computeAndCompareInput',	59,	60),
(22,	17,	NULL,	NULL,	'reverseHashLookUp',	61,	62),
(23,	1,	NULL,	NULL,	'Pages',	102,	121),
(24,	23,	NULL,	NULL,	'display',	103,	104),
(25,	23,	NULL,	NULL,	'index',	105,	106),
(26,	23,	NULL,	NULL,	'computeAndCompare',	107,	108),
(27,	23,	NULL,	NULL,	'sendEmailNotification',	109,	110),
(28,	1,	NULL,	NULL,	'Users',	122,	153),
(29,	28,	NULL,	NULL,	'index',	123,	124),
(30,	28,	NULL,	NULL,	'view',	125,	126),
(31,	28,	NULL,	NULL,	'add',	127,	128),
(32,	28,	NULL,	NULL,	'edit',	129,	130),
(33,	28,	NULL,	NULL,	'delete',	131,	132),
(34,	28,	NULL,	NULL,	'login',	133,	134),
(35,	28,	NULL,	NULL,	'logoff',	135,	136),
(36,	28,	NULL,	NULL,	'register',	137,	138),
(37,	28,	NULL,	NULL,	'forget_password',	139,	140),
(38,	28,	NULL,	NULL,	'home',	141,	142),
(39,	1,	NULL,	NULL,	'AclExtras',	154,	155),
(40,	1,	NULL,	NULL,	'DebugKit',	156,	163),
(41,	40,	NULL,	NULL,	'ToolbarAccess',	157,	162),
(42,	41,	NULL,	NULL,	'history_state',	158,	159),
(43,	41,	NULL,	NULL,	'sql_explain',	160,	161),
(44,	1,	NULL,	NULL,	'PermissionsExtras',	164,	165),
(45,	28,	NULL,	NULL,	'admin_add',	143,	144),
(46,	28,	NULL,	NULL,	'logout',	145,	146),
(47,	17,	NULL,	NULL,	'basic_hashing',	63,	64),
(48,	17,	NULL,	NULL,	'basic_hashing_input',	65,	66),
(49,	8,	NULL,	NULL,	'basic_hashing_result',	31,	32),
(50,	8,	NULL,	NULL,	'compute_and_compare_result',	33,	34),
(51,	8,	NULL,	NULL,	'show_my_test_results',	35,	36),
(52,	17,	NULL,	NULL,	'compute_and_compare',	67,	68),
(53,	23,	NULL,	NULL,	'begin_test',	111,	112),
(54,	8,	NULL,	NULL,	'calculate_probability_of_collision_result',	37,	38),
(55,	17,	NULL,	NULL,	'checkDuplicatesInArray',	69,	70),
(56,	17,	NULL,	NULL,	'calculate_probability_of_collision',	71,	72),
(57,	17,	NULL,	NULL,	'avalanche_effect',	73,	74),
(58,	23,	NULL,	NULL,	'hash_function_properties',	113,	114),
(59,	28,	NULL,	NULL,	'reset_password',	147,	148),
(60,	17,	NULL,	NULL,	'compute_and_compare_input',	75,	76),
(61,	17,	NULL,	NULL,	'generate_ninety_nine_percentage_proability',	77,	78),
(62,	1,	NULL,	NULL,	'Descriptions',	166,	177),
(63,	62,	NULL,	NULL,	'index',	167,	168),
(64,	62,	NULL,	NULL,	'view',	169,	170),
(65,	62,	NULL,	NULL,	'add',	171,	172),
(66,	62,	NULL,	NULL,	'edit',	173,	174),
(67,	62,	NULL,	NULL,	'delete',	175,	176),
(68,	1,	NULL,	NULL,	'Dictionaries',	178,	191),
(69,	68,	NULL,	NULL,	'index',	179,	180),
(70,	68,	NULL,	NULL,	'view',	181,	182),
(71,	68,	NULL,	NULL,	'add',	183,	184),
(72,	68,	NULL,	NULL,	'edit',	185,	186),
(73,	68,	NULL,	NULL,	'delete',	187,	188),
(74,	68,	NULL,	NULL,	'read_and_insert',	189,	190),
(75,	8,	NULL,	NULL,	'hash_analyser_result',	39,	40),
(76,	17,	NULL,	NULL,	'hash_analyser',	79,	80),
(77,	17,	NULL,	NULL,	'birthday_attack',	81,	82),
(78,	17,	NULL,	NULL,	'crypto_rand_secure',	83,	84),
(79,	17,	NULL,	NULL,	'getaString',	85,	86),
(80,	8,	NULL,	NULL,	'birthday_attack',	41,	42),
(81,	8,	NULL,	NULL,	'avalanche_effect_result',	43,	44),
(82,	17,	NULL,	NULL,	'reverse_look_up',	87,	88),
(83,	17,	NULL,	NULL,	'compute_avalanche',	89,	90),
(84,	17,	NULL,	NULL,	'get_a_string',	91,	92),
(85,	17,	NULL,	NULL,	'generate_array',	93,	94),
(86,	17,	NULL,	NULL,	'compare_array',	95,	96),
(87,	17,	NULL,	NULL,	'generate_array_and_compare',	97,	98),
(88,	8,	NULL,	NULL,	'reverse',	45,	46),
(89,	8,	NULL,	NULL,	'download_result',	47,	48),
(90,	8,	NULL,	NULL,	'reverse_look_up_result',	49,	50),
(91,	23,	NULL,	NULL,	'hash_function',	115,	116),
(92,	28,	NULL,	NULL,	'view_my_own_profile',	149,	150),
(93,	28,	NULL,	NULL,	'edit_my_own_profile',	151,	152),
(94,	23,	NULL,	NULL,	'hash_information',	117,	118),
(95,	23,	NULL,	NULL,	'contact_us',	119,	120),
(96,	1,	NULL,	NULL,	'Questionnaires',	192,	205),
(97,	96,	NULL,	NULL,	'index',	193,	194),
(98,	96,	NULL,	NULL,	'view',	195,	196),
(99,	96,	NULL,	NULL,	'add',	197,	198),
(100,	96,	NULL,	NULL,	'edit',	199,	200),
(101,	96,	NULL,	NULL,	'delete',	201,	202),
(102,	96,	NULL,	NULL,	'questionnaire',	203,	204),
(103,	17,	NULL,	NULL,	'show_test_results',	99,	100);

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
(7,	3,	8,	'1',	'1',	'1',	'1'),
(8,	3,	102,	'1',	'1',	'1',	'1');

DROP TABLE IF EXISTS `descriptions`;
CREATE TABLE `descriptions` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `user_id` int(10) NOT NULL,
  `description` text NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `descriptions` (`id`, `user_id`, `description`, `created`, `modified`) VALUES
(1,	12,	'No collision detected',	'2014-04-29 23:23:40',	'2014-04-29 23:23:40'),
(2,	12,	'There is collision detected at: \nhello b1946ac92492d2347c6235b4d2611184\nhello b1946ac92492d2347c6235b4d2611184\nasd e07910a06a086c83ba41827aa00b26ed\nasd e07910a06a086c83ba41827aa00b26ed\n',	'2014-04-29 23:23:52',	'2014-04-29 23:23:52'),
(3,	12,	'There is collision detected at: \nhello 8530cf1cb1524cd9fceeb0fa72ce7f23\nhello 8530cf1cb1524cd9fceeb0fa72ce7f23\nasd fc1d00273547dfe714bfa8384a68b460\nasd fc1d00273547dfe714bfa8384a68b460\n',	'2014-04-29 23:34:14',	'2014-04-29 23:34:14'),
(4,	12,	'There is collision detected at: \nhello b1946ac92492d2347c6235b4d2611184\nhello b1946ac92492d2347c6235b4d2611184\nasd e07910a06a086c83ba41827aa00b26ed\nasd e07910a06a086c83ba41827aa00b26ed\n',	'2014-04-29 23:35:52',	'2014-04-29 23:35:52'),
(5,	12,	'There is collision detected at: \nhello b1946ac92492d2347c6235b4d2611184\nhello b1946ac92492d2347c6235b4d2611184\nasd e07910a06a086c83ba41827aa00b26ed\nasd e07910a06a086c83ba41827aa00b26ed\n',	'2014-04-29 23:45:14',	'2014-04-29 23:45:14'),
(6,	10,	'No collision detected',	'2014-05-04 12:15:12',	'2014-05-04 12:15:12'),
(7,	10,	'There is collision detected at: \nHello There 511e244bc359ba18b82112cd9c0a631244ba58b8\nHello There 511e244bc359ba18b82112cd9c0a631244ba58b8\n',	'2014-05-04 12:18:52',	'2014-05-04 12:18:52'),
(8,	10,	'There is collision detected at: \nHello There 511e244bc359ba18b82112cd9c0a631244ba58b8\nHello There 511e244bc359ba18b82112cd9c0a631244ba58b8\n',	'2014-05-04 12:30:10',	'2014-05-04 12:30:10'),
(9,	10,	'There is collision detected at: \nHello There 511e244bc359ba18b82112cd9c0a631244ba58b8\nHello There 511e244bc359ba18b82112cd9c0a631244ba58b8\n',	'2014-05-04 12:43:39',	'2014-05-04 12:43:39');

DROP TABLE IF EXISTS `dictionaries`;
CREATE TABLE `dictionaries` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `plaintext` varchar(255) NOT NULL,
  `SHA1` varchar(40) NOT NULL,
  `MD5` varchar(32) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `dictionaries` (`id`, `plaintext`, `SHA1`, `MD5`) VALUES
(1,	'Hello There\n',	'511e244bc359ba18b82112cd9c0a631244ba58b8',	'a82fadb196cba39eb884736dcca303a6'),
(2,	'Good bye \n',	'bc24ed72118bc47e7263f01931bea904c6b17fdc',	'b6c04e616709a7f69811b17e2e020de4'),
(3,	'Scarified\n',	'8f24d46d22ab4ccae213224ba4a1118f6e652ee5',	'4ead5ef207c79e1dabda04bddf7c60f2');

DROP TABLE IF EXISTS `groups`;
CREATE TABLE `groups` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `groups` (`id`, `name`, `created`, `modified`) VALUES
(1,	'Administrators',	'0000-00-00 00:00:00',	'0000-00-00 00:00:00'),
(2,	'App_Admins',	'0000-00-00 00:00:00',	'0000-00-00 00:00:00'),
(3,	'App_Users',	'0000-00-00 00:00:00',	'0000-00-00 00:00:00');

DROP TABLE IF EXISTS `hash_algorithms`;
CREATE TABLE `hash_algorithms` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(25) NOT NULL,
  `speed` double NOT NULL,
  `security` int(11) NOT NULL,
  `collision_resistance` varchar(10) NOT NULL,
  `preimage_resistance` varchar(10) NOT NULL,
  `2nd_preimage_resistance` varchar(10) NOT NULL,
  `collision_bka` varchar(10) NOT NULL,
  `preimage_bka` varchar(10) NOT NULL,
  `2nd_preimage_bka` varchar(10) NOT NULL,
  `output_length` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `hash_algorithms` (`id`, `name`, `speed`, `security`, `collision_resistance`, `preimage_resistance`, `2nd_preimage_resistance`, `collision_bka`, `preimage_bka`, `2nd_preimage_bka`, `output_length`) VALUES
(1,	'SHA1',	333.29,	2,	'Broken',	'Unbroken',	'Unbroken',	'2^60',	'Nil',	'Nil',	160),
(2,	'MD5',	392.32,	1,	'Broken',	'Broken',	'Unbroken',	'2^20.96',	'2^123.4',	'Nil',	128),
(3,	'MD2',	5.43,	1,	'Broken',	'Broken',	'Unbroken',	'2^63.3',	'2^73',	'Nil',	128),
(4,	'MD4',	540.87,	0,	'Broken',	'Broken',	'Broken',	'3',	'2^69.4',	'2^78.4',	128),
(5,	'SHA256',	169.49,	3,	'Unbroken',	'Unbroken',	'Unbroken',	'Nil',	'Nil',	'Nil',	256);

DROP TABLE IF EXISTS `hash_algorithm_v1s`;
CREATE TABLE `hash_algorithm_v1s` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(40) NOT NULL,
  `base` int(11) NOT NULL,
  `exponent` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `hash_algorithm_v1s` (`id`, `name`, `base`, `exponent`) VALUES
(1,	'MD2',	2,	128),
(2,	'MD4',	2,	128),
(3,	'MD5',	2,	128),
(6,	'RIPEMD128',	2,	128),
(7,	'RIPEMD256',	2,	256),
(8,	'RIPEMD160',	2,	160),
(9,	'RIPEMD320',	2,	320),
(12,	'SHA1',	2,	160),
(13,	'SHA224',	2,	224),
(14,	'SHA256',	2,	256),
(15,	'WHIRLPOOL',	2,	512),
(16,	'CUSTOMISED',	0,	0),
(17,	'TIGER128,3',	2,	32),
(18,	'SHA384',	2,	384),
(19,	'SHA512',	2,	512),
(20,	'TIGER160,3',	2,	160),
(21,	'TIGER192,3',	2,	192),
(22,	'SNEFRU',	2,	256),
(23,	'CRC32',	2,	32),
(24,	'CRC32B',	2,	32),
(25,	'HAVAL128,3',	2,	128),
(26,	'HAVAL160,3',	2,	160),
(27,	'HAVAL192,3',	2,	192);

DROP TABLE IF EXISTS `hash_results`;
CREATE TABLE `hash_results` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `plaintext` text NOT NULL,
  `message_digest` text NOT NULL,
  `hash_algorithm_id` int(10) NOT NULL,
  `hash_test_id` int(10) NOT NULL,
  `created` date NOT NULL,
  `modified` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `hash_results` (`id`, `plaintext`, `message_digest`, `hash_algorithm_id`, `hash_test_id`, `created`, `modified`) VALUES
(1,	'Hello There\nGood bye \nScarified\nHello There\n',	'fb6f87177f3596b7c221ca3eb629724f\n7222f0525962d59393138be3e579e092\n1b68d78a04ed5c088b7c73bc69be3d78\nfb6f87177f3596b7c221ca3eb629724f\n',	4,	1,	'2014-05-05',	'2014-05-05');

DROP TABLE IF EXISTS `hash_tests`;
CREATE TABLE `hash_tests` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `analysis` text NOT NULL,
  `user_id` int(11) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `hash_tests` (`id`, `analysis`, `user_id`, `created`, `modified`) VALUES
(1,	'Basic Hashing',	10,	'2014-05-05 15:05:15',	'2014-05-05 15:05:15');

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
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

INSERT INTO `users` (`id`, `password`, `name`, `email`, `group_id`, `profile`, `status`, `token`, `created`, `modified`) VALUES
(5,	'96b9369f55be479d63a8ef366966a03a607657e4',	'yong',	'yong24@gmail.com',	1,	'I am yong',	'',	'',	'2014-03-28 01:05:48',	'2014-03-28 01:05:48'),
(10,	'96b9369f55be479d63a8ef366966a03a607657e4',	'AikChun',	'aikchun616@gmail.com',	1,	'Just changed my profile. ',	'',	'',	'2014-03-28 01:36:02',	'2014-05-05 17:42:04'),
(11,	'96b9369f55be479d63a8ef366966a03a607657e4',	'dude',	'dude@gmail.com',	3,	'',	'',	'',	'2014-04-05 00:20:03',	'2014-04-05 00:20:03'),
(12,	'1fda6ac901aee9291e9ef40a02e86367bb6da06d',	'ian',	'ian@gmail.com',	1,	'super user',	'',	'',	'2014-04-16 15:29:25',	'2014-04-16 15:29:25'),
(13,	'96b9369f55be479d63a8ef366966a03a607657e4',	'dudes',	'dudes@gmail.com',	3,	'dues',	'',	'',	'2014-05-04 22:51:33',	'2014-05-04 22:51:33');

-- 2014-05-06 01:33:22

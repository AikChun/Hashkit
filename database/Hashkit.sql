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
(1,	NULL,	NULL,	NULL,	'controllers',	1,	218),
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
(17,	1,	NULL,	NULL,	'HashTests',	52,	105),
(18,	17,	NULL,	NULL,	'basicHashing',	53,	54),
(19,	17,	NULL,	NULL,	'basicHashingInput',	55,	56),
(20,	17,	NULL,	NULL,	'computeAndCompare',	57,	58),
(21,	17,	NULL,	NULL,	'computeAndCompareInput',	59,	60),
(22,	17,	NULL,	NULL,	'reverseHashLookUp',	61,	62),
(23,	1,	NULL,	NULL,	'Pages',	106,	125),
(24,	23,	NULL,	NULL,	'display',	107,	108),
(25,	23,	NULL,	NULL,	'index',	109,	110),
(26,	23,	NULL,	NULL,	'computeAndCompare',	111,	112),
(27,	23,	NULL,	NULL,	'sendEmailNotification',	113,	114),
(28,	1,	NULL,	NULL,	'Users',	126,	159),
(29,	28,	NULL,	NULL,	'index',	127,	128),
(30,	28,	NULL,	NULL,	'view',	129,	130),
(31,	28,	NULL,	NULL,	'add',	131,	132),
(32,	28,	NULL,	NULL,	'edit',	133,	134),
(33,	28,	NULL,	NULL,	'delete',	135,	136),
(34,	28,	NULL,	NULL,	'login',	137,	138),
(35,	28,	NULL,	NULL,	'logoff',	139,	140),
(36,	28,	NULL,	NULL,	'register',	141,	142),
(37,	28,	NULL,	NULL,	'forget_password',	143,	144),
(38,	28,	NULL,	NULL,	'home',	145,	146),
(39,	1,	NULL,	NULL,	'AclExtras',	160,	161),
(40,	1,	NULL,	NULL,	'DebugKit',	162,	169),
(41,	40,	NULL,	NULL,	'ToolbarAccess',	163,	168),
(42,	41,	NULL,	NULL,	'history_state',	164,	165),
(43,	41,	NULL,	NULL,	'sql_explain',	166,	167),
(44,	1,	NULL,	NULL,	'PermissionsExtras',	170,	171),
(45,	28,	NULL,	NULL,	'admin_add',	147,	148),
(46,	28,	NULL,	NULL,	'logout',	149,	150),
(47,	17,	NULL,	NULL,	'basic_hashing',	63,	64),
(48,	17,	NULL,	NULL,	'basic_hashing_input',	65,	66),
(49,	8,	NULL,	NULL,	'basic_hashing_result',	31,	32),
(50,	8,	NULL,	NULL,	'compute_and_compare_result',	33,	34),
(51,	8,	NULL,	NULL,	'show_my_test_results',	35,	36),
(52,	17,	NULL,	NULL,	'compute_and_compare',	67,	68),
(53,	23,	NULL,	NULL,	'begin_test',	115,	116),
(54,	8,	NULL,	NULL,	'calculate_probability_of_collision_result',	37,	38),
(55,	17,	NULL,	NULL,	'checkDuplicatesInArray',	69,	70),
(56,	17,	NULL,	NULL,	'calculate_probability_of_collision',	71,	72),
(57,	17,	NULL,	NULL,	'avalanche_effect',	73,	74),
(58,	23,	NULL,	NULL,	'hash_function_properties',	117,	118),
(59,	28,	NULL,	NULL,	'reset_password',	151,	152),
(60,	17,	NULL,	NULL,	'compute_and_compare_input',	75,	76),
(61,	17,	NULL,	NULL,	'generate_ninety_nine_percentage_proability',	77,	78),
(62,	1,	NULL,	NULL,	'Descriptions',	172,	183),
(63,	62,	NULL,	NULL,	'index',	173,	174),
(64,	62,	NULL,	NULL,	'view',	175,	176),
(65,	62,	NULL,	NULL,	'add',	177,	178),
(66,	62,	NULL,	NULL,	'edit',	179,	180),
(67,	62,	NULL,	NULL,	'delete',	181,	182),
(68,	1,	NULL,	NULL,	'Dictionaries',	184,	197),
(69,	68,	NULL,	NULL,	'index',	185,	186),
(70,	68,	NULL,	NULL,	'view',	187,	188),
(71,	68,	NULL,	NULL,	'add',	189,	190),
(72,	68,	NULL,	NULL,	'edit',	191,	192),
(73,	68,	NULL,	NULL,	'delete',	193,	194),
(74,	68,	NULL,	NULL,	'read_and_insert',	195,	196),
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
(91,	23,	NULL,	NULL,	'hash_function',	119,	120),
(92,	28,	NULL,	NULL,	'view_my_own_profile',	153,	154),
(93,	28,	NULL,	NULL,	'edit_my_own_profile',	155,	156),
(94,	23,	NULL,	NULL,	'hash_information',	121,	122),
(95,	23,	NULL,	NULL,	'contact_us',	123,	124),
(96,	1,	NULL,	NULL,	'Questionnaires',	198,	213),
(97,	96,	NULL,	NULL,	'index',	199,	200),
(98,	96,	NULL,	NULL,	'view',	201,	202),
(99,	96,	NULL,	NULL,	'add',	203,	204),
(100,	96,	NULL,	NULL,	'edit',	205,	206),
(101,	96,	NULL,	NULL,	'delete',	207,	208),
(102,	96,	NULL,	NULL,	'questionnaire',	209,	210),
(103,	17,	NULL,	NULL,	'show_test_results',	99,	100),
(104,	96,	NULL,	NULL,	'questionnaire_result',	211,	212),
(105,	28,	NULL,	NULL,	'contact_us',	157,	158),
(106,	17,	NULL,	NULL,	'email_message',	101,	102),
(107,	17,	NULL,	NULL,	'view',	103,	104),
(108,	1,	NULL,	NULL,	'UtilityBehaviors',	214,	215),
(109,	1,	NULL,	NULL,	'UtilityLib',	216,	217);

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
(8,	3,	102,	'1',	'1',	'1',	'1'),
(9,	3,	104,	'1',	'1',	'1',	'1');

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
(9,	10,	'There is collision detected at: \nHello There 511e244bc359ba18b82112cd9c0a631244ba58b8\nHello There 511e244bc359ba18b82112cd9c0a631244ba58b8\n',	'2014-05-04 12:43:39',	'2014-05-04 12:43:39'),
(10,	10,	'No collision detected',	'2014-05-07 02:13:50',	'2014-05-07 02:13:50'),
(11,	10,	'No collision detected',	'2014-05-07 02:15:27',	'2014-05-07 02:15:27');

DROP TABLE IF EXISTS `dictionaries`;
CREATE TABLE `dictionaries` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `plaintext` varchar(255) NOT NULL,
  `SHA1` varchar(40) NOT NULL,
  `MD5` varchar(32) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `dictionaries` (`id`, `plaintext`, `SHA1`, `MD5`) VALUES
(1,	'Hello There',	'546e25453a78ef2cee079187fd65bfa2495c2ec7',	'32b170d923b654360f351267bf440045'),
(2,	'Good bye',	'6a7641a6610b62fd8111babe5963cbb949871747',	'fc9516d5dfcd680ef15f087041155fe8'),
(3,	'Scarified',	'8a0979fdf5afda41cda40a5e9559a1cf19866178',	'7fafbfc50032f66abf91935fd50c95cb'),
(4,	'Hello again',	'43ce0c8e7e28680735241ad3e5550aa361b96f53',	'3d67b96cde18c245b65a83ecaff2c906'),
(5,	'Hello Everyone',	'0318d138e57dfdca894d3074c112a1caa1c36bd9',	'ba25d791469f06b7e03cffe1adec69c6'),
(6,	'ewfergrt',	'4e8e43a91f92678062e39f14bf486c10b4871e65',	'8c15b6a9449658be63bf1b34a1a392a3'),
(7,	'hello',	'aaf4c61ddcc5e8a2dabede0f3b482cd9aea9434d',	'5d41402abc4b2a76b9719d911017c592'),
(8,	'asd',	'f10e2821bbbea527ea02200352313bc059445190',	'7815696ecbf1c96e6894b779456d330e'),
(9,	'bye',	'78c9a53e2f28b543ea62c8266acfdf36d5c63e61',	'bfa99df33b137bc8fb5f5407d7e58da8'),
(10,	'hey',	'7f550a9f4c44173a37664d938f1355f0f92a47a7',	'6057f13c496ecf7fd777ceb9e79ae285'),
(11,	'wefwef',	'a2937c8086cefe9555d2c8aee0cce2f9bd6ad9d4',	'a5ff034660bff8ce89637ece84e0cff1'),
(12,	'hi',	'c22b5f9178342609428d6f51b2c5af4c0bde6a42',	'49f68a5c8493ec2c0bf489821c21fc3b'),
(13,	'what',	'a110e6b9a361653a042e3f5dfbac4c6105693789',	'4a2028eceac5e1f4d252ea13c71ecec6'),
(14,	'hvu',	'54a893f0b20f24550e62d91aff17b20c86fa80d6',	'084cff4c4e5f95c47430d564de0dd118'),
(15,	'uyfvuy',	'2c2e32533a7a1cb37b9f882769e9fd139dbb849c',	'8103683d7815626c758bfc74df40eb59');

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
(1,	'hello\nasd\nbye\nhello\nhey\nasd\n',	'5d41402abc4b2a76b9719d911017c592\n7815696ecbf1c96e6894b779456d330e\nbfa99df33b137bc8fb5f5407d7e58da8\n5d41402abc4b2a76b9719d911017c592\n6057f13c496ecf7fd777ceb9e79ae285\n7815696ecbf1c96e6894b779456d330e\n',	2,	1,	'2014-05-09',	'2014-05-09'),
(2,	'hello\nasd\nbye\nhello\nhey\nasd\n',	'866437cb7a794bce2b727acc0362ee27\n61118995d26bef582a59dec9220483e8\n739fc397b5948fdc4fdd293fe378e1a2\n866437cb7a794bce2b727acc0362ee27\n1828111b039cc9cc5a3600061eb0264e\n61118995d26bef582a59dec9220483e8\n',	4,	1,	'2014-05-09',	'2014-05-09'),
(3,	'hello\nbye\nhi\nwhat\n',	'5d41402abc4b2a76b9719d911017c592\nbfa99df33b137bc8fb5f5407d7e58da8\n49f68a5c8493ec2c0bf489821c21fc3b\n4a2028eceac5e1f4d252ea13c71ecec6\n',	2,	2,	'2014-05-09',	'2014-05-09'),
(4,	'hello\nbye\nhi\nwhat\n',	'2cf24dba5fb0a30e26e83b2ac5b9e29e1b161e5c1fa7425e73043362938b9824\nb49f425a7e1f9cff3856329ada223f2f9d368f15a00cf48df16ca95986137fe8\n8f434346648f6b96df89dda901c5176b10a6d83961dd3c1ac88b59b2dc327aa4\n749ab2c0d06c42ae3b841b79e79875f02b3a042e43c92378cd28bd444c04d284\n',	5,	2,	'2014-05-09',	'2014-05-09'),
(5,	'hvu',	'084cff4c4e5f95c47430d564de0dd118',	2,	3,	'2014-05-09',	'2014-05-09'),
(6,	'hvu',	'1f975d7b2c6763ba867d120aae4f5d0a2736aea93c09e1ae695da1a6f95e4225',	5,	3,	'2014-05-09',	'2014-05-09'),
(7,	'uyfvuy',	'8103683d7815626c758bfc74df40eb59',	2,	4,	'2014-05-09',	'2014-05-09'),
(8,	'uyfvuy',	'a7836a0ad96885ef4b4831e39777bf1f',	4,	4,	'2014-05-09',	'2014-05-09'),
(9,	'hello\nasd\nbye\nhello\nhey\nasd\n',	'aaf4c61ddcc5e8a2dabede0f3b482cd9aea9434d\nf10e2821bbbea527ea02200352313bc059445190\n78c9a53e2f28b543ea62c8266acfdf36d5c63e61\naaf4c61ddcc5e8a2dabede0f3b482cd9aea9434d\n7f550a9f4c44173a37664d938f1355f0f92a47a7\nf10e2821bbbea527ea02200352313bc059445190\n',	1,	5,	'2014-05-09',	'2014-05-09'),
(10,	'hello\nasd\nbye\nhello\nhey\nasd\n',	'2cf24dba5fb0a30e26e83b2ac5b9e29e1b161e5c1fa7425e73043362938b9824\n688787d8ff144c502c7f5cffaafe2cc588d86079f9de88304c26b0cb99ce91c6\nb49f425a7e1f9cff3856329ada223f2f9d368f15a00cf48df16ca95986137fe8\n2cf24dba5fb0a30e26e83b2ac5b9e29e1b161e5c1fa7425e73043362938b9824\nfa690b82061edfd2852629aeba8a8977b57e40fcb77d1a7a28b26cba62591204\n688787d8ff144c502c7f5cffaafe2cc588d86079f9de88304c26b0cb99ce91c6\n',	5,	5,	'2014-05-09',	'2014-05-09');

DROP TABLE IF EXISTS `hash_tests`;
CREATE TABLE `hash_tests` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `analysis` text NOT NULL,
  `recommendation` text NOT NULL,
  `collision_pt` text NOT NULL,
  `collision_md` text NOT NULL,
  `collision_index` text NOT NULL,
  `collision_count` int(10) NOT NULL,
  `user_id` int(11) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `hash_tests` (`id`, `analysis`, `recommendation`, `collision_pt`, `collision_md`, `collision_index`, `collision_count`, `user_id`, `created`, `modified`) VALUES
(1,	'There is collision detected at: \n',	'MD5',	'hello\nhello\nasd\nasd',	'5d41402abc4b2a76b9719d911017c592\n5d41402abc4b2a76b9719d911017c592\n7815696ecbf1c96e6894b779456d330e\n7815696ecbf1c96e6894b779456d330e',	'0 3 1 5 ',	4,	12,	'2014-05-09 13:46:29',	'2014-05-09 13:46:29'),
(2,	'No collision detected',	'SHA256',	'',	'',	'',	0,	12,	'2014-05-09 13:46:41',	'2014-05-09 13:46:41'),
(3,	'No collision detected',	'SHA256',	'',	'',	'',	0,	12,	'2014-05-09 13:46:51',	'2014-05-09 13:46:51'),
(4,	'Basic Hashing',	'',	'',	'',	'',	0,	12,	'2014-05-09 13:47:11',	'2014-05-09 13:47:11'),
(5,	'Basic Hashing',	'',	'',	'',	'',	0,	12,	'2014-05-09 13:47:33',	'2014-05-09 13:47:33');

DROP TABLE IF EXISTS `questionnaires`;
CREATE TABLE `questionnaires` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `questions` text NOT NULL,
  `answers` varchar(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `questionnaires` (`id`, `questions`, `answers`) VALUES
(1,	'Which of the following refers to pre-image resistance? <br><br>\r\na) Given an input X it should be difficult to find another input Y such that X not equals Y and hash(X) = hash(Y).\r\n<br>\r\nb) Given a hash H, it should be difficult to find any message M such that H = hash(M).\r\n<br>\r\nc) It should be difficult to find two different messages X and Y such that hash(X) = hash(Y).',	'b'),
(2,	'What is a cryptographic hash function?<br><br>\r\n\r\na) It is a type of security mechanism that generates a hash value, message digest or checksum value for a specific data object.<br>\r\n\r\nb) It is a type of food.<br>\r\n\r\nc) It is a newly released game.',	'a'),
(3,	'Which of the following refers to second pre-image resistance?<br><br>\r\n\r\na) Given an input X it should be difficult to find another input Y such that X ≠ Y and hash(X) = hash(Y).<br>\r\n\r\nb) Given a hash H, it should be difficult to find any message M such that H = hash(M).<br>\r\n\r\nc) It should be difficult to find two different messages X and Y such that hash(X) = hash(Y).',	'a'),
(4,	'Which of the following refers to collision resistance?<br><br>\r\n\r\na) Given an input X it should be difficult to find another input Y such that X ≠ Y and hash(X) = hash(Y).<br>\r\n\r\nb) Given a hash H, it should be difficult to find any message M such that H = hash(M).<br>\r\n\r\nc) It should be difficult to find two different messages X and Y such that hash(X) = hash(Y).',	'c'),
(5,	'An avalanche effect occurs in a cryptographic hash function if,<br><br>\r\n\r\na) When an input is changed significantly, the output changes slightly.<br>\r\n\r\nb) When an input is changed slightly, the output does not change.<br>\r\n\r\nc) When an input is changed slightly, the output changes significantly.',	'c'),
(6,	'Which of the following is/are not a cryptographic hash function?<br><br>\r\ni.  MD5<br>\r\nii. SHA1<br>\r\niii.SHA256<br>\r\niv. DES<br><br>\r\n\r\na) i and iv<br>\r\nb) ii and iii<br>\r\nc) iv',	'c'),
(7,	'Which of the following is/are attacks towards hash functions?<br><br>\r\ni. Collision attack<br>\r\nii. Birthday attack<br>\r\niii. Monster attack<br>\r\niv. Preimage attack<br><br>\r\n\r\na) i, ii and iii<br>\r\nb) ii, iii and iv<br>\r\nc) i, ii and iv',	'c');

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
(12,	'1fda6ac901aee9291e9ef40a02e86367bb6da06d',	'ian',	'ian@gmail.com',	1,	'super user',	'',	'',	'2014-04-16 15:29:25',	'2014-04-16 15:29:25');

-- 2014-05-09 13:53:23

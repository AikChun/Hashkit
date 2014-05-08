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
(1,	NULL,	NULL,	NULL,	'controllers',	1,	216),
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
(17,	1,	NULL,	NULL,	'HashTests',	52,	103),
(18,	17,	NULL,	NULL,	'basicHashing',	53,	54),
(19,	17,	NULL,	NULL,	'basicHashingInput',	55,	56),
(20,	17,	NULL,	NULL,	'computeAndCompare',	57,	58),
(21,	17,	NULL,	NULL,	'computeAndCompareInput',	59,	60),
(22,	17,	NULL,	NULL,	'reverseHashLookUp',	61,	62),
(23,	1,	NULL,	NULL,	'Pages',	104,	123),
(24,	23,	NULL,	NULL,	'display',	105,	106),
(25,	23,	NULL,	NULL,	'index',	107,	108),
(26,	23,	NULL,	NULL,	'computeAndCompare',	109,	110),
(27,	23,	NULL,	NULL,	'sendEmailNotification',	111,	112),
(28,	1,	NULL,	NULL,	'Users',	124,	157),
(29,	28,	NULL,	NULL,	'index',	125,	126),
(30,	28,	NULL,	NULL,	'view',	127,	128),
(31,	28,	NULL,	NULL,	'add',	129,	130),
(32,	28,	NULL,	NULL,	'edit',	131,	132),
(33,	28,	NULL,	NULL,	'delete',	133,	134),
(34,	28,	NULL,	NULL,	'login',	135,	136),
(35,	28,	NULL,	NULL,	'logoff',	137,	138),
(36,	28,	NULL,	NULL,	'register',	139,	140),
(37,	28,	NULL,	NULL,	'forget_password',	141,	142),
(38,	28,	NULL,	NULL,	'home',	143,	144),
(39,	1,	NULL,	NULL,	'AclExtras',	158,	159),
(40,	1,	NULL,	NULL,	'DebugKit',	160,	167),
(41,	40,	NULL,	NULL,	'ToolbarAccess',	161,	166),
(42,	41,	NULL,	NULL,	'history_state',	162,	163),
(43,	41,	NULL,	NULL,	'sql_explain',	164,	165),
(44,	1,	NULL,	NULL,	'PermissionsExtras',	168,	169),
(45,	28,	NULL,	NULL,	'admin_add',	145,	146),
(46,	28,	NULL,	NULL,	'logout',	147,	148),
(47,	17,	NULL,	NULL,	'basic_hashing',	63,	64),
(48,	17,	NULL,	NULL,	'basic_hashing_input',	65,	66),
(49,	8,	NULL,	NULL,	'basic_hashing_result',	31,	32),
(50,	8,	NULL,	NULL,	'compute_and_compare_result',	33,	34),
(51,	8,	NULL,	NULL,	'show_my_test_results',	35,	36),
(52,	17,	NULL,	NULL,	'compute_and_compare',	67,	68),
(53,	23,	NULL,	NULL,	'begin_test',	113,	114),
(54,	8,	NULL,	NULL,	'calculate_probability_of_collision_result',	37,	38),
(55,	17,	NULL,	NULL,	'checkDuplicatesInArray',	69,	70),
(56,	17,	NULL,	NULL,	'calculate_probability_of_collision',	71,	72),
(57,	17,	NULL,	NULL,	'avalanche_effect',	73,	74),
(58,	23,	NULL,	NULL,	'hash_function_properties',	115,	116),
(59,	28,	NULL,	NULL,	'reset_password',	149,	150),
(60,	17,	NULL,	NULL,	'compute_and_compare_input',	75,	76),
(61,	17,	NULL,	NULL,	'generate_ninety_nine_percentage_proability',	77,	78),
(62,	1,	NULL,	NULL,	'Descriptions',	170,	181),
(63,	62,	NULL,	NULL,	'index',	171,	172),
(64,	62,	NULL,	NULL,	'view',	173,	174),
(65,	62,	NULL,	NULL,	'add',	175,	176),
(66,	62,	NULL,	NULL,	'edit',	177,	178),
(67,	62,	NULL,	NULL,	'delete',	179,	180),
(68,	1,	NULL,	NULL,	'Dictionaries',	182,	195),
(69,	68,	NULL,	NULL,	'index',	183,	184),
(70,	68,	NULL,	NULL,	'view',	185,	186),
(71,	68,	NULL,	NULL,	'add',	187,	188),
(72,	68,	NULL,	NULL,	'edit',	189,	190),
(73,	68,	NULL,	NULL,	'delete',	191,	192),
(74,	68,	NULL,	NULL,	'read_and_insert',	193,	194),
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
(91,	23,	NULL,	NULL,	'hash_function',	117,	118),
(92,	28,	NULL,	NULL,	'view_my_own_profile',	151,	152),
(93,	28,	NULL,	NULL,	'edit_my_own_profile',	153,	154),
(94,	23,	NULL,	NULL,	'hash_information',	119,	120),
(95,	23,	NULL,	NULL,	'contact_us',	121,	122),
(96,	1,	NULL,	NULL,	'Questionnaires',	196,	211),
(97,	96,	NULL,	NULL,	'index',	197,	198),
(98,	96,	NULL,	NULL,	'view',	199,	200),
(99,	96,	NULL,	NULL,	'add',	201,	202),
(100,	96,	NULL,	NULL,	'edit',	203,	204),
(101,	96,	NULL,	NULL,	'delete',	205,	206),
(102,	96,	NULL,	NULL,	'questionnaire',	207,	208),
(103,	17,	NULL,	NULL,	'show_test_results',	99,	100),
(104,	96,	NULL,	NULL,	'questionnaire_result',	209,	210),
(105,	28,	NULL,	NULL,	'contact_us',	155,	156),
(106,	17,	NULL,	NULL,	'view',	101,	102),
(107,	1,	NULL,	NULL,	'UtilityBehaviors',	212,	213),
(108,	1,	NULL,	NULL,	'UtilityLib',	214,	215);

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
(3,	'Scarified\n',	'8f24d46d22ab4ccae213224ba4a1118f6e652ee5',	'4ead5ef207c79e1dabda04bddf7c60f2'),
(4,	'hello',	'aaf4c61ddcc5e8a2dabede0f3b482cd9aea9434d',	'5d41402abc4b2a76b9719d911017c592'),
(5,	'asd',	'f10e2821bbbea527ea02200352313bc059445190',	'7815696ecbf1c96e6894b779456d330e'),
(6,	'bye',	'78c9a53e2f28b543ea62c8266acfdf36d5c63e61',	'bfa99df33b137bc8fb5f5407d7e58da8'),
(7,	'hey',	'7f550a9f4c44173a37664d938f1355f0f92a47a7',	'6057f13c496ecf7fd777ceb9e79ae285'),
(8,	'ugvyvui',	'72600668ca10e2ab8e47878ad38c404c349425ce',	'4b3acfa5d68f7a938011bf68203fd3e7'),
(9,	'juvbiu',	'6b831057532adbcec14a02cc5b61dae9dac5ed78',	'a9d0927c757663d7ca0ae4586aa99a96'),
(10,	'qwdqfe',	'4cd8f93fbef21c14e0c4847945ac6005aa018320',	'ab8f4c2cbb8dc6a1f554192dd4fdef26'),
(11,	'qwfqwe',	'5bf978e1bc6661a16b683814ddafd05150588525',	'21c22b330e28223c74ca9df733968773'),
(12,	'qwfewf',	'9747a746e95f4cb9b405334a05762bc350794b90',	'f136586a1460ba29f63f48da7b6c9c52'),
(13,	'ewgrwgerg',	'c020cc3200b8390d655e9f15b369d76bb3c8d204',	'596d74660401801fcd06997a1514ca40'),
(14,	'hi',	'c22b5f9178342609428d6f51b2c5af4c0bde6a42',	'49f68a5c8493ec2c0bf489821c21fc3b'),
(15,	'what',	'a110e6b9a361653a042e3f5dfbac4c6105693789',	'4a2028eceac5e1f4d252ea13c71ecec6'),
(16,	'segg',	'4522e53349ac5770881c18f244b5e33bf5afe6ac',	'cae19a4092d22a6dc3d6b91821d3abcb'),
(17,	'jbi',	'a4344de0a9dd89e3862b78f9fe9bbaedc1f8a8b1',	'215c051ba023f13ec68d0119f48a88ad'),
(18,	'uiiu',	'b7fe8a9ddcdeea9ce8e6b83afc9c960b1208dc31',	'b03a8809e8fc94eca48594d1a5470189');

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
(1,	'hello\nasd\nbye\nhello\nhey\nasd\n',	'aaf4c61ddcc5e8a2dabede0f3b482cd9aea9434d\nf10e2821bbbea527ea02200352313bc059445190\n78c9a53e2f28b543ea62c8266acfdf36d5c63e61\naaf4c61ddcc5e8a2dabede0f3b482cd9aea9434d\n7f550a9f4c44173a37664d938f1355f0f92a47a7\nf10e2821bbbea527ea02200352313bc059445190\n',	1,	1,	'2014-05-08',	'2014-05-08'),
(2,	'hello\nasd\nbye\nhello\nhey\nasd\n',	'5d41402abc4b2a76b9719d911017c592\n7815696ecbf1c96e6894b779456d330e\nbfa99df33b137bc8fb5f5407d7e58da8\n5d41402abc4b2a76b9719d911017c592\n6057f13c496ecf7fd777ceb9e79ae285\n7815696ecbf1c96e6894b779456d330e\n',	2,	1,	'2014-05-08',	'2014-05-08'),
(3,	'hello\nasd\nbye\nhello\nhey\nasd\n',	'2cf24dba5fb0a30e26e83b2ac5b9e29e1b161e5c1fa7425e73043362938b9824\n688787d8ff144c502c7f5cffaafe2cc588d86079f9de88304c26b0cb99ce91c6\nb49f425a7e1f9cff3856329ada223f2f9d368f15a00cf48df16ca95986137fe8\n2cf24dba5fb0a30e26e83b2ac5b9e29e1b161e5c1fa7425e73043362938b9824\nfa690b82061edfd2852629aeba8a8977b57e40fcb77d1a7a28b26cba62591204\n688787d8ff144c502c7f5cffaafe2cc588d86079f9de88304c26b0cb99ce91c6\n',	5,	1,	'2014-05-08',	'2014-05-08'),
(4,	'jbi',	'215c051ba023f13ec68d0119f48a88ad',	2,	2,	'2014-05-08',	'2014-05-08'),
(5,	'jbi',	'd39baf9aa66cce36dd9d57159b940efd',	4,	2,	'2014-05-08',	'2014-05-08'),
(6,	'uiiu',	'b03a8809e8fc94eca48594d1a5470189',	2,	3,	'2014-05-08',	'2014-05-08'),
(7,	'uiiu',	'42ad873ef0ab7b4b90a37432a40de810',	4,	3,	'2014-05-08',	'2014-05-08'),
(8,	'hello\nasd\nbye\nhello\nhey\nasd\n',	'aaf4c61ddcc5e8a2dabede0f3b482cd9aea9434d\nf10e2821bbbea527ea02200352313bc059445190\n78c9a53e2f28b543ea62c8266acfdf36d5c63e61\naaf4c61ddcc5e8a2dabede0f3b482cd9aea9434d\n7f550a9f4c44173a37664d938f1355f0f92a47a7\nf10e2821bbbea527ea02200352313bc059445190\n',	1,	4,	'2014-05-08',	'2014-05-08'),
(9,	'hello\nasd\nbye\nhello\nhey\nasd\n',	'aaf4c61ddcc5e8a2dabede0f3b482cd9aea9434d\nf10e2821bbbea527ea02200352313bc059445190\n78c9a53e2f28b543ea62c8266acfdf36d5c63e61\naaf4c61ddcc5e8a2dabede0f3b482cd9aea9434d\n7f550a9f4c44173a37664d938f1355f0f92a47a7\nf10e2821bbbea527ea02200352313bc059445190\n',	1,	5,	'2014-05-08',	'2014-05-08'),
(10,	'hello\nasd\nbye\nhello\nhey\nasd\n',	'5d41402abc4b2a76b9719d911017c592\n7815696ecbf1c96e6894b779456d330e\nbfa99df33b137bc8fb5f5407d7e58da8\n5d41402abc4b2a76b9719d911017c592\n6057f13c496ecf7fd777ceb9e79ae285\n7815696ecbf1c96e6894b779456d330e\n',	2,	5,	'2014-05-08',	'2014-05-08'),
(11,	'hello\nasd\nbye\nhello\nhey\nasd\n',	'866437cb7a794bce2b727acc0362ee27\n61118995d26bef582a59dec9220483e8\n739fc397b5948fdc4fdd293fe378e1a2\n866437cb7a794bce2b727acc0362ee27\n1828111b039cc9cc5a3600061eb0264e\n61118995d26bef582a59dec9220483e8\n',	4,	5,	'2014-05-08',	'2014-05-08'),
(12,	'hello\nasd\nbye\nhello\nhey\nasd\n',	'2cf24dba5fb0a30e26e83b2ac5b9e29e1b161e5c1fa7425e73043362938b9824\n688787d8ff144c502c7f5cffaafe2cc588d86079f9de88304c26b0cb99ce91c6\nb49f425a7e1f9cff3856329ada223f2f9d368f15a00cf48df16ca95986137fe8\n2cf24dba5fb0a30e26e83b2ac5b9e29e1b161e5c1fa7425e73043362938b9824\nfa690b82061edfd2852629aeba8a8977b57e40fcb77d1a7a28b26cba62591204\n688787d8ff144c502c7f5cffaafe2cc588d86079f9de88304c26b0cb99ce91c6\n',	5,	5,	'2014-05-08',	'2014-05-08'),
(13,	'hello\nbye\nhi\nwhat\n',	'aaf4c61ddcc5e8a2dabede0f3b482cd9aea9434d\n78c9a53e2f28b543ea62c8266acfdf36d5c63e61\nc22b5f9178342609428d6f51b2c5af4c0bde6a42\na110e6b9a361653a042e3f5dfbac4c6105693789\n',	1,	6,	'2014-05-08',	'2014-05-08'),
(14,	'hello\nbye\nhi\nwhat\n',	'5d41402abc4b2a76b9719d911017c592\nbfa99df33b137bc8fb5f5407d7e58da8\n49f68a5c8493ec2c0bf489821c21fc3b\n4a2028eceac5e1f4d252ea13c71ecec6\n',	2,	6,	'2014-05-08',	'2014-05-08'),
(15,	'hello\nbye\nhi\nwhat\n',	'2cf24dba5fb0a30e26e83b2ac5b9e29e1b161e5c1fa7425e73043362938b9824\nb49f425a7e1f9cff3856329ada223f2f9d368f15a00cf48df16ca95986137fe8\n8f434346648f6b96df89dda901c5176b10a6d83961dd3c1ac88b59b2dc327aa4\n749ab2c0d06c42ae3b841b79e79875f02b3a042e43c92378cd28bd444c04d284\n',	5,	6,	'2014-05-08',	'2014-05-08');

DROP TABLE IF EXISTS `hash_tests`;
CREATE TABLE `hash_tests` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `analysis` text NOT NULL,
  `collision_pt` text NOT NULL,
  `collision_md` text NOT NULL,
  `collision_index` text NOT NULL,
  `collision_count` int(10) NOT NULL,
  `recommendation` text NOT NULL,
  `user_id` int(11) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `hash_tests` (`id`, `analysis`, `collision_pt`, `collision_md`, `collision_index`, `collision_count`, `recommendation`, `user_id`, `created`, `modified`) VALUES
(1,	'There is collision detected at: \n',	'hello\nhello\nasd\nasd',	'aaf4c61ddcc5e8a2dabede0f3b482cd9aea9434d\naaf4c61ddcc5e8a2dabede0f3b482cd9aea9434d\nf10e2821bbbea527ea02200352313bc059445190\nf10e2821bbbea527ea02200352313bc059445190',	'0 3 1 5 ',	4,	'SHA256',	12,	'2014-05-08 23:54:03',	'2014-05-08 23:54:03'),
(2,	'No collision detected',	'',	'',	'',	0,	'MD5',	12,	'2014-05-08 23:54:41',	'2014-05-08 23:54:41'),
(3,	'Basic Hashing',	'',	'',	'',	0,	'',	12,	'2014-05-08 23:55:07',	'2014-05-08 23:55:07'),
(4,	'Basic Hashing',	'',	'',	'',	0,	'',	12,	'2014-05-08 23:58:06',	'2014-05-08 23:58:06'),
(5,	'Basic Hashing',	'',	'',	'',	0,	'',	12,	'2014-05-08 23:58:28',	'2014-05-08 23:58:28'),
(6,	'No collision detected',	'',	'',	'',	0,	'SHA256',	12,	'2014-05-08 23:58:47',	'2014-05-08 23:58:47');

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
(3,	'Which of the following refers to second pre-image resistance?<br><br>\r\n\r\na) Given an input X it should be difficult to find another input Y such that X not equals Y and hash(X) = hash(Y).<br>\r\n\r\nb) Given a hash H, it should be difficult to find any message M such that H = hash(M).<br>\r\n\r\nc) It should be difficult to find two different messages X and Y such that hash(X) = hash(Y).',	'a'),
(4,	'Which of the following refers to collision resistance?<br><br>\r\n\r\na) Given an input X it should be difficult to find another input Y such that X not equals Y and hash(X) = hash(Y).<br>\r\n\r\nb) Given a hash H, it should be difficult to find any message M such that H = hash(M).<br>\r\n\r\nc) It should be difficult to find two different messages X and Y such that hash(X) = hash(Y).',	'c'),
(5,	'An avalanche effect occurs in a cryptographic hash function if,<br><br>\r\n\r\na) When an input is changed significantly, the output changes slightly.<br>\r\n\r\nb) When an input is changed slightly, the output does not change.<br>\r\n\r\nc) When an input is changed slightly, the output changes significantly.',	'c'),
(6,	'Which of the following is/are not a cryptographic hash function?<br><br>\r\ni.  MD5<br>\r\nii. SHA1<br>\r\niii.SHA256<br>\r\niv. DES<br><br>\r\n\r\na) i and iv<br>\r\nb) ii and iii<br>\r\nc) iv',	'c'),
(7,	'Which of the following is/are attacks towards hash functions?<br><br>\r\ni. Collision attack<br>\r\nii. Birthday attack<br>\r\niii. Monster attack<br>\r\niv. Preimage attack<br><br>\r\n\r\na) i, ii and iii<br>\r\nb) ii, iii and iv<br>\r\nc) i, ii and iv',	'c'),
(8,	'Which of the following is not a use for hash functions?<br><br>\r\n\r\na) Verifying file integrity.<br>\r\nb) Listening to incoming network packets.<br>\r\nc) Storing of password in database.<br>',	'b'),
(9,	'Which of the following(s) is/are not property of a hash function?<br><br>\r\n\r\ni) Pre-image resistance<br>\r\nii) Shock resistance<br>\r\niii) Collision resistance<br>\r\niv) Intruder resistance<br><br>\r\n\r\na) i and iii<br>\r\nb) ii and iv<br>\r\nc) ii and iii',	'b'),
(10,	'What is a birthday attack?<br><br>\r\n\r\na) A type of cryptographic attack that is based on the birthday problem in probability theory.<br>\r\nb) A type of cryptographic attack that is based on the date of user\'s birth date.<br> \r\nc) A type of cryptographic attack that happen on user\'s birthday.',	'a'),
(11,	'Is there any encrytion going on in a cryptographic hash function?<br><br>\r\n\r\na) Yes<br>\r\nb) No<br>\r\nc) Depends on which hash function',	'b'),
(12,	'What is a brute force attack?<br><br>\r\n\r\na) Its a attack that involves hashing all possible combinations from a random word generator or dictionary until the correct pair of collision is found <br>\r\nb) Its a attack that involves smashing the system into piece to disrupt the the service of a system.<br>\r\nc) Its a attack that involves forcing the system admin by using violent act to gain access to a system.',	'a');

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
(13,	'96b9369f55be479d63a8ef366966a03a607657e4',	'dudes',	'dudes@gmail.com',	3,	'dues',	'',	'',	'2014-05-04 22:51:33',	'2014-05-04 22:51:33'),
(14,	'432fa89ef7a69d353e296bff6bbca8af7a4a78bd',	'Ian Chua',	'luffy.7@hotmail.com',	3,	'asd',	'',	'',	'2014-05-07 15:12:49',	'2014-05-07 15:14:38');

-- 2014-05-09 00:04:00

-- Adminer 3.7.1 MySQL dump

SET NAMES utf8;
SET foreign_key_checks = 0;
SET time_zone = '-07:00';
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

DROP DATABASE IF EXISTS `Hashkit`;
CREATE DATABASE `Hashkit` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `Hashkit`;

DROP TABLE IF EXISTS `group`;
CREATE TABLE `group` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `group` (`id`, `name`) VALUES
(1,	'administrator'),
(2,	'guest');

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
  KEY `user_id` (`user_id`),
  CONSTRAINT `hash_result_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `hash_result` (`id`, `plaintext`, `message_digest`, `hash_algorithm_id`, `user_id`) VALUES
(1,	'password',	'5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8',	1,	1),
(2,	'password',	'5f4dcc3b5aa765d61d8327deb882cf99',	2,	1),
(3,	'password',	'f03881a88c6e39135f0ecc60efd609b9',	3,	1),
(4,	'password',	'8a9d093f14f8701df17732b2bb182c74',	4,	1),
(5,	'password',	'5e884898da28047151d0e56f8dc6292773603d0d6aabbdd62a11ef721d1542d8',	5,	1),
(6,	'123456',	'7c4a8d09ca3762af61e59520943dc26494f8941b',	1,	1),
(7,	'123456',	'e10adc3949ba59abbe56e057f20f883e',	2,	1),
(8,	'123456',	'd4541250b586296fcce5dea4463ae17f',	3,	1),
(9,	'123456',	'585028aa0f794af812ee3be8804eb14a',	4,	1),
(10,	'123456',	'8d969eef6ecad3c29a3a629280e686cf0c3f5d5a86aff3ca12020c923adc6c92',	5,	1);

DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `password` varchar(25) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `group_id` int(10) NOT NULL,
  `profile` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `user` (`id`, `password`, `name`, `email`, `group_id`, `profile`) VALUES
(1,	'5baa61e4c9b93f3f0682250b6',	'aikchun',	'aikchun616@gmail.com',	1,	'HI there. I\'m the first user.');

-- 2014-03-20 21:40:31

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
(3,	'asd',	'61118995d26bef582a59dec9220483e8 ',	0,	1);

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

-- 2014-03-20 02:51:15

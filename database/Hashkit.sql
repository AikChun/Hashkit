-- Adminer 3.7.1 MySQL dump

SET NAMES utf8;
SET foreign_key_checks = 0;
SET time_zone = '-07:00';
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

DROP TABLE IF EXISTS `hashnames`;
CREATE TABLE `hashnames` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `hashnames` (`id`, `name`) VALUES
(1,	'SHA-1'),
(2,	'MD2'),
(3,	'MD4'),
(4,	'MD5'),
(5,	'SHA-256');

DROP TABLE IF EXISTS `hashprocesses`;
CREATE TABLE `hashprocesses` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `plaintext` text NOT NULL,
  `message_digest` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


-- 2014-03-18 02:06:52

-- Adminer 4.0.3 MySQL dump

SET NAMES utf8;
SET foreign_key_checks = 0;
SET time_zone = '-07:00';
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

DROP DATABASE IF EXISTS `Hashkit`;
CREATE DATABASE `Hashkit` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `Hashkit`;

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

-- 2014-05-06 07:18:32

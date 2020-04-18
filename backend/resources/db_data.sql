-- Adminer 4.7.6 MySQL dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

DROP TABLE IF EXISTS `animals`;
CREATE TABLE `animals` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `animal_image` text NOT NULL,
  `animal_name` text NOT NULL,
  `animal_description` text NOT NULL,
  `animal_price` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

INSERT INTO `animals` (`id`, `animal_image`, `animal_name`, `animal_description`, `animal_price`) VALUES
(5,	'https://1y4yclbm79aqghpm1xoezrdw-wpengine.netdna-ssl.com/wp-content/uploads/2019/11/zebra-620Getty.jpg',	'zebra baby',	'This is my baby',	'$90'),
(2,	'https://static01.nyt.com/images/2020/04/15/world/15virus-germany-zoo2/15virus-germany-zoo2-jumbo.jpg?quality=90&amp;auto=webp',	'Bear',	'cant think of a description',	'$15'),
(3,	'https://www.trafalgar.com/real-word/wp-content/uploads/sites/3/2019/10/giant-panda-750x400.jpg',	'Cute Panda',	'',	'Priceless');

DROP TABLE IF EXISTS `constants`;
CREATE TABLE `constants` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `const_name` text NOT NULL,
  `const_value` text NOT NULL,
  `const_description` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

INSERT INTO `constants` (`id`, `const_name`, `const_value`, `const_description`) VALUES
(1,	'SITE_NAME',	'shelter_value',	''),
(2,	'LAUNCH',	'false',	''),
(3,	'WARNINGS',	'true',	'maybe later this const can enable/disable php warnings for production');

-- 2020-04-18 20:52:05
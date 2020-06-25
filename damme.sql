-- Adminer 4.7.2 MySQL dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

DROP TABLE IF EXISTS `danhmuc1`;
CREATE TABLE `danhmuc1` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_danhmuccha` int(11) NOT NULL,
  `ten` varchar(255) NOT NULL,
  `tenkhongdau` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `danhmuc1` (`id`, `id_danhmuccha`, `ten`, `tenkhongdau`) VALUES
(1,	0,	'ao len',	'ao-len'),
(2,	0,	'dam bau',	'dam-bau'),
(3,	1,	'ao len con',	''),
(4,	3,	'ao len con con',	''),
(5,	4,	'ao len con nua',	'');

DROP TABLE IF EXISTS `danhmuc2`;
CREATE TABLE `danhmuc2` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_danhmuc1` int(11) NOT NULL,
  `ten` varchar(255) NOT NULL,
  `tenkhongdau` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `danhmuc2` (`id`, `id_danhmuc1`, `ten`, `tenkhongdau`) VALUES
(1,	1,	'ao len 1',	'ao-len-1'),
(2,	1,	'ao len 2',	'ao-len-2'),
(3,	2,	'dam bau 1',	'dam-bau-1'),
(4,	2,	'dam bau 2',	'dam-bau-2'),
(5,	3,	'danhmuc ao len con',	'');

DROP TABLE IF EXISTS `lienhe`;
CREATE TABLE `lienhe` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(255) NOT NULL,
  `ten` varchar(255) NOT NULL,
  `noidung` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `lienhe` (`id`, `email`, `ten`, `noidung`) VALUES
(1,	'khanh.tramnhat@gmail.com',	'Viettel POS',	'aaa'),
(2,	'khanh.tramnhat@gmail.com',	'khanh-test',	'asdad'),
(3,	'khanh.tramnhat@gmail.com',	'khanh-test',	'asdad'),
(4,	'khanh.tramnhat@gmail.com',	'an',	'aaa'),
(5,	'khanh.tramnhat@gmail.com',	'an',	'aaa'),
(6,	'khanh.tramnhat@gmail.com',	'an',	'aaa'),
(7,	'khanh.tramnhat@gmail.com',	'an',	'aaa'),
(8,	'khanh.tramnhat@gmail.com',	'an',	'aaa'),
(9,	'khanh.tramnhat@gmail.com',	'an',	'aaa'),
(10,	'khanh.tramnhat@gmail.com',	'an',	'aaa'),
(11,	'khanh.tramnhat@gmail.com',	'an',	'aaa'),
(12,	'khanh.tramnhat@gmail.com',	'an',	'aaa'),
(13,	'khanh.tramnhat@gmail.com',	'an',	'aaa'),
(14,	'khanh.tramnhat@gmail.com',	'an',	'aaa'),
(15,	'khanh.tramnhat@gmail.com',	'an',	'aaa'),
(16,	'khanh.tramnhat@gmail.com',	'khanh-test',	'aaaa'),
(17,	'khanh.tramnhat@yahoo.com',	'Gen 3 7th',	'bhahaa'),
(18,	'khanh.tramnhat@asd.com',	'asa',	'ssss');

DROP TABLE IF EXISTS `sanpham`;
CREATE TABLE `sanpham` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_danhmuc1` int(11) NOT NULL,
  `id_danhmuc2` int(11) NOT NULL,
  `ten` varchar(255) NOT NULL,
  `mota` text NOT NULL,
  `gia` int(11) NOT NULL,
  `hinh` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `sanpham` (`id`, `id_danhmuc1`, `id_danhmuc2`, `ten`, `mota`, `gia`, `hinh`) VALUES
(1,	1,	1,	'ao len mau trang',	'day la ao len',	1000000,	'/public/upload/sp1.jpg'),
(2,	2,	4,	'dam bau mau do',	'day la dam bau',	9999999,	'/public/upload/sp2.jpg'),
(3,	2,	2,	'san pham 3',	'',	6666666,	'/public/upload/sp3.jpg'),
(4,	2,	2,	'san pham 4',	'',	6666666,	'/public/upload/sp3.jpg'),
(5,	2,	2,	'san pham 5',	'',	6666666,	'/public/upload/sp3.jpg'),
(6,	2,	2,	'san pham 6',	'',	6666666,	'/public/upload/sp3.jpg'),
(7,	2,	2,	'san pham 7',	'',	6666666,	'/public/upload/sp3.jpg'),
(8,	2,	2,	'san pham 8',	'',	6666666,	'/public/upload/sp3.jpg');

-- 2020-06-25 11:37:43

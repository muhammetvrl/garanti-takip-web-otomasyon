-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1:3306
-- Üretim Zamanı: 12 Haz 2018, 08:35:40
-- Sunucu sürümü: 5.7.19
-- PHP Sürümü: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `garanti2`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `cihazlar`
--

DROP TABLE IF EXISTS `cihazlar`;
CREATE TABLE IF NOT EXISTS `cihazlar` (
  `cihaz_id` int(20) NOT NULL AUTO_INCREMENT,
  `marka` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `model` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `seri_no` varchar(20) COLLATE utf8_turkish_ci NOT NULL,
  `sikayet` text COLLATE utf8_turkish_ci NOT NULL,
  `alinma_tarihi` date NOT NULL,
  `tahmini_teslim_tarihi` date NOT NULL,
  `barkod_no` varchar(20) COLLATE utf8_turkish_ci NOT NULL,
  `teslim_alinan_parcalar` text COLLATE utf8_turkish_ci NOT NULL,
  `yapilan_islem` text COLLATE utf8_turkish_ci NOT NULL,
  `ucret` int(20) NOT NULL,
  `kategori_id` int(20) NOT NULL,
  `personel_id` int(20) NOT NULL,
  `garanti_id` int(20) NOT NULL,
  `kullanici_ad` varchar(20) COLLATE utf8_turkish_ci NOT NULL,
  `durum` varchar(20) COLLATE utf8_turkish_ci NOT NULL DEFAULT 'onarimda',
  PRIMARY KEY (`cihaz_id`),
  KEY `personel_id` (`personel_id`),
  KEY `kategori_id` (`kategori_id`),
  KEY `garanti_id` (`garanti_id`),
  KEY `kullanici_ad` (`kullanici_ad`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `cihazlar`
--

INSERT INTO `cihazlar` (`cihaz_id`, `marka`, `model`, `seri_no`, `sikayet`, `alinma_tarihi`, `tahmini_teslim_tarihi`, `barkod_no`, `teslim_alinan_parcalar`, `yapilan_islem`, `ucret`, `kategori_id`, `personel_id`, `garanti_id`, `kullanici_ad`, `durum`) VALUES
(1, 'sfafasfsafas', 'Redmi', '11234445', 'sadada', '2018-05-19', '2018-05-19', '1234567', 'Batarya', '1233333321213asdad', 213, 3, 1, 4, 'termeli55sad', 'onarimda'),
(7, 'SAmsung', 'Redmi', '11234445', 'asdas', '2018-05-19', '2018-05-19', 'deneme1', 'Batarya', 'asdadas', 213, 3, 3, 4, 'deneme001', 'teslimehazir'),
(13, 'SAmsung', 'Redmi', '11234445', 'asdas', '2018-05-19', '2018-05-19', '54112AqQv1', 'Batarya', 'asdadas', 213, 3, 3, 4, 'termeli551', 'teslimehazir'),
(16, 'redminote 4', 'ciamio', '1234567890', '11addsasasdas', '2018-05-25', '2018-05-27', '2aAS3ashnq241', 'kulaklık, şarj aleti', 'sadasadssaasd', 121, 4, 1, 4, '11sdasdasad', 'onarimda'),
(17, 'redminote', 'Prime', 'wwqq', '111111111111111111111111111212121', '2018-05-26', '2018-05-11', 'deneme5', 'kulaklık şarj aleti', '', 23, 3, 1, 4, 'treaaz2', 'teslimehazir');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `garanti`
--

DROP TABLE IF EXISTS `garanti`;
CREATE TABLE IF NOT EXISTS `garanti` (
  `garanti_id` int(20) NOT NULL AUTO_INCREMENT,
  `durum` varchar(20) COLLATE utf8_turkish_ci NOT NULL,
  PRIMARY KEY (`garanti_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `garanti`
--

INSERT INTO `garanti` (`garanti_id`, `durum`) VALUES
(3, 'Garanti Bitmiş'),
(4, 'Garanti Devam Ediyor');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kategori`
--

DROP TABLE IF EXISTS `kategori`;
CREATE TABLE IF NOT EXISTS `kategori` (
  `kategori_id` int(20) NOT NULL AUTO_INCREMENT,
  `kategori_ad` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  PRIMARY KEY (`kategori_id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `kategori`
--

INSERT INTO `kategori` (`kategori_id`, `kategori_ad`) VALUES
(3, 'Tablet'),
(4, 'Dizüstü'),
(5, 'Diğer'),
(7, 'Bilgisayar'),
(9, 'Kulaklık');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kayit`
--

DROP TABLE IF EXISTS `kayit`;
CREATE TABLE IF NOT EXISTS `kayit` (
  `kayit_id` int(20) NOT NULL AUTO_INCREMENT,
  `kullanici_adi` varchar(20) COLLATE utf8_turkish_ci NOT NULL,
  `parola` varchar(20) COLLATE utf8_turkish_ci NOT NULL,
  `personel_no` int(20) NOT NULL,
  PRIMARY KEY (`kayit_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `kayit`
--

INSERT INTO `kayit` (`kayit_id`, `kullanici_adi`, `parola`, `personel_no`) VALUES
(1, 'admin', '123', 1),
(2, 'admin', '123456', 2);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `mesaj`
--

DROP TABLE IF EXISTS `mesaj`;
CREATE TABLE IF NOT EXISTS `mesaj` (
  `mesaj_id` int(11) NOT NULL AUTO_INCREMENT,
  `ad_soyad` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `mail` varchar(30) COLLATE utf8_turkish_ci NOT NULL,
  `barkod_no` varchar(30) COLLATE utf8_turkish_ci NOT NULL,
  `mesaj` text COLLATE utf8_turkish_ci NOT NULL,
  PRIMARY KEY (`mesaj_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `mesaj`
--

INSERT INTO `mesaj` (`mesaj_id`, `ad_soyad`, `mail`, `barkod_no`, `mesaj`) VALUES
(1, 'Muhammet Varol', 'vrl.muhammet@gmail.com', 'KP00896676426', 'Çok güzel site olmuş'),
(2, 'Samet Türkmen', 'vrl.muhammet55600@gmail.com', 'deneme01', 'asssssssssssssssssssssssssssssssssssssddads'),
(3, 'Muhammet Varol', 'vrl.muhammet@gmail.com', 'deneme1', 'Neden Geri Dönüş Yapmıyorsunuz'),
(4, 'Muhammet Varol', 'vrl.muhammet@gmail.com', '54112AqQv1', 'Geri Dönüş yapın');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `musteriler`
--

DROP TABLE IF EXISTS `musteriler`;
CREATE TABLE IF NOT EXISTS `musteriler` (
  `kullanici_ad` varchar(20) COLLATE utf8_turkish_ci NOT NULL,
  `ad` varchar(20) COLLATE utf8_turkish_ci NOT NULL,
  `soyad` varchar(20) COLLATE utf8_turkish_ci NOT NULL,
  `adres` text COLLATE utf8_turkish_ci NOT NULL,
  `telefon` varchar(20) COLLATE utf8_turkish_ci NOT NULL,
  `mail` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `il` varchar(20) COLLATE utf8_turkish_ci NOT NULL,
  `ilce` varchar(20) COLLATE utf8_turkish_ci NOT NULL,
  PRIMARY KEY (`kullanici_ad`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `musteriler`
--

INSERT INTO `musteriler` (`kullanici_ad`, `ad`, `soyad`, `adres`, `telefon`, `mail`, `il`, `ilce`) VALUES
('111111', 'Eyup', 'sadas', '', '231', 'sadas@gamail.com', 'Samsun', 'asdasda'),
('11sdasdasad', 'MUHAMMET', 'varol', '1sasad', '11111111', 'vrl.muhammet@gmail.com', 'Samsun', 'Terme'),
('123asd', 'Samet', 'Türkmen', 'asdasdsa', '123123', 'vrl.muhammet@gmail.com', 'Samsun', 'Selçuklu'),
('deneme001', 'Samet', 'Türkmen', '11111111111111', '123123', 'saaaa@asaa', 'Samsun', 'Terme'),
('deneme0011', 'Durkan', 'Türkmen', '1222222222', '12333333', 'sadas@gamail.com', 'Samsun', 'Terme'),
('eyup12', 'Eyüp', 'Zencir', 'asdas', '1233123', 'a@gmail.com', 'Maraş', 'pozanti'),
('term1', 'asdas', 'asdas', 'asasdsa', '2131', 'vrl.muhammet@gmail.com', 'Samsun', 'Terme'),
('termeli12', 'asdsa', 'asdas', 'asdasds', '1111', 'vrl.muhammet@gmail.com', 'Samsun', 'Terme'),
('termeli12222', 'MUHAMMET', 'varol', 'asdasadsas', '11111111', 'vrl.muhammet@gmail.com', 'Samsun', 'Terme'),
('termeli551', 'MUHAMMET', 'asddsaasddsa', '', '3431', 'vrl.muhammet@gmail.com', 'Konya', 'Terme'),
('termeli552', 'Yılmaz', 'Dur', '111111111111111', '21312512', 'a@gmail.com', 'İstanbul', 'Terme'),
('termeli55sad', 'MUHAMMET', 'varol', '1232132121', '123123', 'vrl.muhammet55600@gmail.com', 'Samsun', 'Terme'),
('treaaz2', 'MUHAMMET', 'Türkmen', 'asdsasd', '12312', 'vrl.muhammet55600@gmail.com', 'Samsun', 'Selçuklu');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `personel`
--

DROP TABLE IF EXISTS `personel`;
CREATE TABLE IF NOT EXISTS `personel` (
  `personel_id` int(20) NOT NULL AUTO_INCREMENT,
  `ad` varchar(20) COLLATE utf8_turkish_ci NOT NULL,
  `soyad` varchar(20) COLLATE utf8_turkish_ci NOT NULL,
  `gorevi` text COLLATE utf8_turkish_ci NOT NULL,
  PRIMARY KEY (`personel_id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `personel`
--

INSERT INTO `personel` (`personel_id`, `ad`, `soyad`, `gorevi`) VALUES
(1, 'Samet', 'Türkmen', 'İnsan Kaynakları'),
(3, 'Yılmaz', 'Durucan', 'Satış Müdürü'),
(4, 'Ali', 'Tosun', 'Boş'),
(5, 'MUHAMMET', 'Varol', 'Geliştirici'),
(7, 'Durkan', 'Kaya', 'Teknik Eleman'),
(8, 'Ahmet', 'Çoban', 'Teknik Servis');

--
-- Dökümü yapılmış tablolar için kısıtlamalar
--

--
-- Tablo kısıtlamaları `cihazlar`
--
ALTER TABLE `cihazlar`
  ADD CONSTRAINT `cihazlar_ibfk_4` FOREIGN KEY (`kullanici_ad`) REFERENCES `musteriler` (`kullanici_ad`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `cihazlar_ibfk_5` FOREIGN KEY (`personel_id`) REFERENCES `personel` (`personel_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `cihazlar_ibfk_6` FOREIGN KEY (`kategori_id`) REFERENCES `kategori` (`kategori_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `cihazlar_ibfk_7` FOREIGN KEY (`garanti_id`) REFERENCES `garanti` (`garanti_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

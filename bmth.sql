-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 29 Nis 2019, 22:47:52
-- Sunucu sürümü: 10.1.35-MariaDB
-- PHP Sürümü: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `eticaret`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `urunler`
--

CREATE TABLE `urunler` (
  `id` int(20) NOT NULL,
  `baslik` varchar(200) COLLATE utf8_bin NOT NULL,
  `icerik` varchar(200) COLLATE utf8_bin NOT NULL,
  `kategori` varchar(100) COLLATE utf8_bin NOT NULL,
  `fiyat` varchar(100) COLLATE utf8_bin NOT NULL,
  `resim` varchar(200) COLLATE utf8_bin NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Tablo döküm verisi `urunler`
--

INSERT INTO `urunler` (`id`, `baslik`, `icerik`, `kategori`, `fiyat`, `resim`, `timestamp`) VALUES
(1, 'Bring Me The Horizon Tişört', 'BRING ME THE HORIZON T SHIRT ERKEK', 'bmth', '47', 'img/bring.jpg', '2019-04-17 19:54:07'),
(2, 'Bring Me The Horizon Kazak', 'BRING ME THE HORIZON UZUN KOL SWEATSHIRT UNISEX', 'bmth', '100', 'img/bring2.jpg', '2019-04-17 19:57:07'),
(3, 'Bring Me The Horizon Tişört', 'Bring Me The Horizon Tişört\r\n', 'bmth', '100', 'img/bring3.jpg', '2019-04-17 19:57:07'),
(4, 'Bring Me The Horizon Tişört\r\n', 'Bring Me The Horizon Tişört', 'bmth', '35', 'img/bring5.jpg', '2019-04-17 19:58:36'),
(5, 'Linkin Park Tişört', 'Linkin Park T SHIRT ERKEK', 'linkin', '47', 'img/linkin.jpg', '2019-04-17 20:08:09'),
(6, 'Linkin Park Kazak', 'Linkin Park SWEATSHIRT UNISEX', 'linkin', '100', 'img/linkin2.jpg', '2019-04-17 20:08:09'),
(7, 'Linkin Park Tişört', 'Linkin Park Tişört', 'linkin', '35', 'img/linkin3.jpg', '2019-04-17 20:09:00'),
(8, 'Linkin Park Tişört', 'Linkin Park Tişört', 'linkin', '35', 'img/linkin4.jpg', '2019-04-17 20:09:00'),
(9, 'Bullet For My Vallentine Tişört', 'Bullet For My Vallentine T SHIRT ERKEK', 'bullet', '47', 'img/bfmv.jpg', '2019-04-17 20:11:25'),
(10, 'Bullet For My Vallentine Kazak\r\n', 'Bullet For My Vallentine SWEATSHIRT UNISEX', 'bullet', '100', 'img/bfmv2.jpg', '2019-04-17 20:11:25'),
(11, 'Bullet For My Vallentine Tişört', 'Bullet For My Vallentine Tişört', 'bullet', '35', 'img/bfmv3.jpg', '2019-04-17 20:11:25'),
(12, 'Bullet For My Vallentine Tişört', 'Bullet For My Vallentine Tişört', 'bullet', '35', 'img/bfmv4.jpg', '2019-04-17 20:11:25'),
(13, 'Breaking Benjamin Tişört', 'Breaking Benjamin T SHIRT ERKEK', 'breaking', '47', 'img/breaking.jpg', '2019-04-17 20:13:20'),
(14, 'Breaking Benjamin Kazak', 'Breaking Benjamin SWEATSHIRT UNISEX', 'breaking', '100', 'img/breaking2.jpg', '2019-04-17 20:13:20'),
(15, 'Breaking Benjamin Tişört', 'Breaking Benjamin Tişört', 'breaking', '35', 'img/breaking3.jpg', '2019-04-17 20:13:20'),
(16, 'Breaking Benjamin Tişört', 'Breaking Benjamin Tişört', 'breaking', '35', 'img/breaking4.jpg', '2019-04-17 20:13:20');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `urunler`
--
ALTER TABLE `urunler`
  ADD PRIMARY KEY (`id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `urunler`
--
ALTER TABLE `urunler`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

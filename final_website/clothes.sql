-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 08 Haz 2021, 17:55:44
-- Sunucu sürümü: 10.4.18-MariaDB
-- PHP Sürümü: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `clothes`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `admin_user`
--

CREATE TABLE `admin_user` (
  `ID` int(11) NOT NULL,
  `Username_admin` varchar(50) NOT NULL,
  `Email_admin` varchar(50) NOT NULL,
  `pw_admin` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `admin_user`
--

INSERT INTO `admin_user` (`ID`, `Username_admin`, `Email_admin`, `pw_admin`) VALUES
(1, 'PeteksuKarpuz', 'Peteksukarpuz@icloud.com', '1234567890'),
(2, 'peteksu', 'Peteksukarpuz@icloud.com', '12341234'),
(3, 'Peteksu123', 'Peteksukarpuz@icloud.com', '112233');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `clothes`
--

CREATE TABLE `clothes` (
  `ID` int(11) NOT NULL,
  `clothes_name` varchar(50) NOT NULL,
  `property` varchar(50) NOT NULL,
  `price` int(20) NOT NULL,
  `image_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `clothes`
--

INSERT INTO `clothes` (`ID`, `clothes_name`, `property`, `price`, `image_name`) VALUES
(1, ' Zipper Detail Blouse', 'S-M-L-XL Sizes.', 60, 'ZipperDetailBlouse.jpg'),
(2, 'Powder Pink Blouse', 'S-M-L-XL Sizes.', 49, 'PowderPinkBlouse1.jpg'),
(3, 'Black White Blouse', 'S-M-L-XL Sizes.', 45, 'BlackWhiteBlouse.jpg'),
(4, 'Red Trousers', 'S-M-L-XL Sizes.', 69, 'RedTrousers.jpg'),
(5, 'Gardener Model Dress', 'S-M-L-XL Sizes.', 74, 'GardenerModelDress.jpg'),
(6, 'Lilac Track suit', 'S-M-L-XL Sizes.', 74, 'LilacTrackSuit2.jpg'),
(7, 'Orange Sweat', 'S-M-L-XL Sizes.', 44, 'OrangeSweat.jpg'),
(8, 'Blue Sweat', 'S-M-L-XL Sizes.', 44, 'BlueSweat.jpg'),
(9, 'Sports Jacket', 'S-M-L-XL Sizes.', 54, 'SportsJacket1.jpg'),
(10, 'White Snickers', '36-40 Sizes.', 60, 'beyazspor.jpg'),
(11, 'Lace up heels', '36-40 Sizes.', 49, 'bagciklitopuk.jpg'),
(12, 'Burgundy heels', '36-40 Sizes.', 45, 'bordotopuklu.jpg'),
(13, 'Silver heels', '36-40 sizes', 69, 'gümüstopuklu.png'),
(14, 'Black boots', '36-40 Sizes.', 74, 'SiyahBot.jpg'),
(15, 'Black ankle boots', '36-40 Sizes.', 74, 'siyahbilekli.jpg'),
(16, 'High slim heels', '36-40 Sizes.', 44, 'topuku.jpg'),
(17, 'White heels', '36-40 Sizes.', 44, 'beyaztopuklu.jpg'),
(18, 'Black Snickers', '36-40 Sizes.', 44, 'siyahspor.jpg'),
(19, 'Bracelet set', 'Standard Size.', 20, 'bileklik.jpg'),
(20, 'Flower necklace', 'Standard Size.', 30, 'çiçekkolye.jpg'),
(21, 'Silver earring', 'Standard Size.', 60, 'gümüşküpe.jpg'),
(22, 'Snowflake necklace', 'Standard Size.', 30, 'kartanesi.jpg'),
(23, 'Cherry earring ', 'Standard Size.', 20, 'küpe.jpg'),
(24, 'Daisy bracelet', 'Standard Size.', 20, 'papatyabileklik.jpg');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `members`
--

CREATE TABLE `members` (
  `ID` int(11) NOT NULL,
  `Username` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `adress` varchar(100) NOT NULL,
  `pw` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `members`
--

INSERT INTO `members` (`ID`, `Username`, `Email`, `adress`, `pw`) VALUES
(5, 'PeteksuKarpuz', 'peteksukarpuz95@gmail.com', 'Denizkent Sitesi Servergazi/Denizli', 'petek'),
(6, 'simla1', 'peteksukarpuz95@gmail.com', 'Denizkent Sitesi Servergazi/Denizli', '2345'),
(7, 'Simla Karpuz', 'Email', 'Denizkent Sitesi Servergazi/Denizli', '000');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `admin_user`
--
ALTER TABLE `admin_user`
  ADD PRIMARY KEY (`ID`);

--
-- Tablo için indeksler `clothes`
--
ALTER TABLE `clothes`
  ADD PRIMARY KEY (`ID`);

--
-- Tablo için indeksler `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`ID`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `admin_user`
--
ALTER TABLE `admin_user`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Tablo için AUTO_INCREMENT değeri `clothes`
--
ALTER TABLE `clothes`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- Tablo için AUTO_INCREMENT değeri `members`
--
ALTER TABLE `members`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

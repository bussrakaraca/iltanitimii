-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 16 Tem 2020, 17:54:42
-- Sunucu sürümü: 10.4.11-MariaDB
-- PHP Sürümü: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `uye_giris`
--
CREATE DATABASE IF NOT EXISTS `uye_giris` DEFAULT CHARACTER SET utf8 COLLATE utf8_turkish_ci;
USE `uye_giris`;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `etkinlikler`
--

CREATE TABLE `etkinlikler` (
  `ID` int(11) NOT NULL,
  `baslik` varchar(55) COLLATE utf8_turkish_ci NOT NULL,
  `icerik` varchar(900) COLLATE utf8_turkish_ci NOT NULL,
  `link` varchar(60) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `etkinlikler`
--

INSERT INTO `etkinlikler` (`ID`, `baslik`, `icerik`, `link`) VALUES
(1, ' Bedenimi Kaybettim 15 Temmuz 2020 Çarşamba 19:00', '<p>Paris’te bir laboratuvardan kaçan kesik elin ait olduğu bedeni bulmak için yapmayacağı şey yoktur. Bedeninden kopmuş yalnız bir el için Paris sokaklarının barındırdığı tehlikeler onu yıldırmaz. Kütüphaneci Gabrielle ile motorla pizza dağıtan Naoufel’in kırık aşk hikâyesinin düğüm noktası bu kesik eldir. Amelie’nin senaristi Guillaume Laurant’ın Mutlu El adlı romanından uyarlanan bu animasyon film türün medar-ı iftiharları arasına girmeyi hak ediyor.</p>\r\n<br>\r\n<div id=\"bilgiler\">Yönetmen: Jérémy Clapin<br>\r\nÜlke: Fransa<br>\r\nDağıtım: Başka Sinema Dağıtım<br>\r\nYapım: Marc Du Pontavice<br>\r\nİthalat: Bir Film<br>\r\nSeslendirme: Patrick d\'Assumçao, Victoire Du Bois, Hakim Faris</div><br>\r\n\r\n<h5>BİLETİVA BİLET FİYATLARI</h5>\r\n<br>\r\nTam - 25.00 TL<br>\r\n\r\nÖğrenci - 20.00 TL<br>', 'https://www.biletiva.com/seats/SELCUKLU_SINEMA/986017'),
(2, 'SKM\'de Nikah Sezonu', 'Sosyal mesafenin özenle korunduğu, 1000 Kişiye kadar farklı kapasitedeki nikah salonlarımızda, 950 araçlık otoparkımız ile hayalinizdeki nikah gününü SKM ayrıcalığı ile yaşayın.\r\n<br><br>\r\nAvantajlı fiyatlar, bilgi ve rezervasyon için; 0332 2334242 ve info@scckonya.com', 'https://scckonya.com/Etkinlik/Detay/7469/skm-de-nikah-sezonu'),
(5, '	Bedenimi Kaybettim 15 Temmuz 2020 Çarşamba 19:00', 'Paris’te bir laboratuvardan kaçan kesik elin ait olduğu bedeni bulmak için yapmayacağı şey yoktur. Bedeninden kopmuş yalnız bir el için Paris sokaklarının barındırdığı tehlikeler onu yıldırmaz. Kütüphaneci Gabrielle ile motorla pizza dağıtan Naoufel’in kırık aşk hikâyesinin düğüm noktası bu kesik eldir. Amelie’nin senaristi Guillaume Laurant’ın Mutlu El adlı romanından uyarlanan bu animasyon film türün medar-ı iftiharları arasına girmeyi hak ediyor.<br><br>\r\nYönetmen: Jérémy Clapin\r\nÜlke: Fransa\r\nDağıtım: Başka Sinema Dağıtım\r\nYapım: Marc Du Pontavice\r\nİthalat: Bir Film\r\nSeslendirme: Patrick d\'Assumçao, Victoire Du Bois, Hakim Faris<br><br>\r\nBİLETİVA BİLET FİYATLARI\r\nTam - 25.00 TL\r\nÖğrenci - 20.00 TL', 'https://www.biletiva.com/seats/SELCUKLU_SINEMA/986017');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `uyekaydi`
--

CREATE TABLE `uyekaydi` (
  `ID` int(11) NOT NULL,
  `kullanici_adi` varchar(55) COLLATE utf8_turkish_ci NOT NULL,
  `sifre` varchar(55) COLLATE utf8_turkish_ci NOT NULL,
  `email` varchar(55) COLLATE utf8_turkish_ci NOT NULL,
  `ad` varchar(55) COLLATE utf8_turkish_ci NOT NULL,
  `soyad` varchar(55) COLLATE utf8_turkish_ci NOT NULL,
  `adres` varchar(200) COLLATE utf8_turkish_ci NOT NULL,
  `tarih` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `uyekaydi`
--

INSERT INTO `uyekaydi` (`ID`, `kullanici_adi`, `sifre`, `email`, `ad`, `soyad`, `adres`, `tarih`) VALUES
(1, 'bussra', 'deneme1234', 'busbus@gmail.com', 'Büşra', 'Karaca', 'ardıçlı mah. 37. sokak Selçuklu/Konya', '2020-07-15 07:53:12'),
(18, 'hkaraca42', '123654', 'hkaraca42@gmail.com', 'Hüseyin', 'Karaca', 'bla bla Konya', '2020-07-15 08:19:19');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `etkinlikler`
--
ALTER TABLE `etkinlikler`
  ADD PRIMARY KEY (`ID`);

--
-- Tablo için indeksler `uyekaydi`
--
ALTER TABLE `uyekaydi`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `UNIQUE` (`kullanici_adi`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `etkinlikler`
--
ALTER TABLE `etkinlikler`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Tablo için AUTO_INCREMENT değeri `uyekaydi`
--
ALTER TABLE `uyekaydi`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

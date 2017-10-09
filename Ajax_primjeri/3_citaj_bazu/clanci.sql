-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Računalo: localhost
-- Vrijeme generiranja: May 20, 2013 u 11:41 AM
-- Verzija poslužitelja: 5.5.16
-- PHP verzija: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Baza podataka: `violeta`
--

-- --------------------------------------------------------

--
-- Tablična struktura za tablicu `clanci`
--

CREATE TABLE IF NOT EXISTS `clanci` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `slika` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `naslov` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `clanak` text COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=10 ;

--
-- Izbacivanje podataka za tablicu `clanci`
--

INSERT INTO `clanci` (`id`, `slika`, `naslov`, `clanak`) VALUES
(1, 'monitor.jpg', '1. Akcija Monitor', 'Rezolucija:1366x768, Dijagonala 18.5"; Kontrast 5.000.000:1 (DFC); Svjetlina 200cd/m2, Vrijeme odziva 5 ms (GTG); Kut gledanja H:90/V:65, format ekrana 16:9,  tilt, D-Sub; Super slim dizajn;VESA (75x75); 3 godine jamstva (72h zero pixel policy)'),
(2, 'Probook.jpg', '2. Akcija- laptop', 'H P ProBook 4540s Notebook PC, B6N80EA, Intel Celeron Dual Core B840 (1.9 GHz / 2MB L3), 15.6" LED HD anti-glare (1366 x 768), integrirana web kamera, 2 GB (DDR3, 1DIMM, Max 8GB), 320 GB (7200RPM), DVD+/-RW SuperMulti DL Drive, Intel HD Graphics, WLAN 802.11 b/g/n, 10/100/1000, Bluetooth, nema modem, ExpressCard/34, baterija 6 čelija, 47 Whr, jamstvo 12 mjeseci, SuSE Linux + torba HP Basic Carrying Case'),
(3, 'DESKJET.jpg', '3. Akcija- printer', 'Karakteristike:\r\n	\r\n\r\nMultifunkcijski Ink Jet A4 pisač\r\n\r\nRezolucija:\r\n	\r\n\r\n4800 x 1200 dpi\r\n\r\nBrzina ispisa c/b A4:\r\n	\r\n\r\n8 str/min\r\n\r\nBrzina ispisa u boji A4:\r\n	\r\n\r\n7,5 str/min\r\n\r\nRezolucija skenera:\r\n	\r\n\r\n1200 x 1200 dpi\r\n\r\nLCD:\r\n	\r\n\r\n5 cm Hi-Res Monochrome LCD\r\n\r\nObostrano:\r\n	\r\n\r\nstandardan\r\n\r\nSučelje:\r\n	\r\n\r\nHi-Speed USB 2.0; HP ePrint, Wireless direct printing, Apple AirPrint™\r\n\r\nUlaz papira:\r\n	\r\n\r\n80 listova A4\r\n\r\nPotrošni materijal:\r\n	\r\n\r\nCZ109AE/CZ110AE/CZ111AE/CZ112AE\r\n\r\nDimenzija:\r\n	\r\n\r\n440 x 365 x 144 mm\r\n\r\nTežina:\r\n	\r\n\r\n5,00 Kg'),
(4, 'kemijske-01.jpg', '4. Olovke s tiskom', 'Rok izrade olovaka, penkala s tiskom u našem poduzeću ovisi o pripremljenosti Vaših materijala za tisak. Naručujete li ih prvi puta tada je prvo potrebno dizajnirati motiv koji će se dotiskivati na olovke, penkale i izraditi pripremu za tisak - tada je rok izrade 3 do 7 radnih dana. Naručujte li ponovno izradu vaših upaljača, bez izmjena, rok može biti puno kraći.'),
(5, 'gumica.jpg', '5. Gumica za brisanje', 'GUMICA ZA BRISANJE BIJELA 100/40 TOZ\r\n\r\nŠifra proizvoda: 950081\r\nJedinica mjere: kom'),
(6, 'biljeznica.jpg', '6. Bilježnica', 'BILJEŽNICA A4 40 L DIKTANDO BARCA-MANCHESTER 80 gr.\r\n\r\nŠifra proizvoda: 979602\r\nJedinica mjere: kom'),
(7, 'tempera.jpg', '7. Boje- tempera', 'BOJE TEMPERA PVC 1/12 644812\r\n\r\nŠifra proizvoda: 940077\r\nJedinica mjere: gar'),
(8, 'pernica.jpg', '8. Pernica', 'PERNICA 19 DIJ.5088 SMILEY HERLITZ\r\n\r\nŠifra proizvoda: 570006\r\nJedinica mjere: kom'),
(9, 'siljilo.jpg', '9. Šiljilo', 'ŠILJILO CLEAN GRIP MAP014111 DISPLAY\r\n\r\nŠifra proizvoda: 992717\r\nJedinica mjere: kom');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

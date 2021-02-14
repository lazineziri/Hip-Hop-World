-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 10, 2021 at 07:18 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hip-hop-world`
--

-- --------------------------------------------------------

--
-- Table structure for table `klientat`
--

CREATE TABLE `klientat` (
  `Klientat_Id` int(9) NOT NULL,
  `Emri` varchar(30) NOT NULL,
  `Mbiemri` varchar(30) NOT NULL,
  `Email` varchar(60) NOT NULL,
  `Username` varchar(30) NOT NULL,
  `Passwordi` varchar(60) NOT NULL,
  `Ditlindja` date NOT NULL,
  `Adresa` varchar(100) NOT NULL,
  `admin` int(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `klientat`
--

INSERT INTO `klientat` (`Klientat_Id`, `Emri`, `Mbiemri`, `Email`, `Username`, `Passwordi`, `Ditlindja`, `Adresa`, `admin`) VALUES
(1, 'admin', 'admin', '', 'admin', 'admin', '0000-00-00', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `mesazhet`
--

CREATE TABLE `mesazhet` (
  `id` int(11) NOT NULL,
  `firstName` varchar(20) NOT NULL,
  `lastName` varchar(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `message` varchar(2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `postimet`
--

CREATE TABLE `postimet` (
  `id` int(9) NOT NULL,
  `titulli` varchar(30) NOT NULL,
  `teksti` varchar(5000) NOT NULL,
  `fotoja` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `postimet`
--

INSERT INTO `postimet` (`id`, `titulli`, `teksti`, `fotoja`) VALUES
(1, 'Mc Kresha TC', 'Ni artist shum i fort prej TAVNIKU i cili suksesin e ti nuk e la vetem ne kufijt e shtetit te kosoves por edhe jasht tyre. Qe shum koh MC Kresha ose qysh e njohum na tTAVNIKUT si Kreshniku, iu largua skenes per shkaqe familjare pasi kti i erdhi nje femij ne jet dhe vendosi qe kohen e lir tija kushtoj ati.', 'kresha.jpg'),
(2, 'LAZI TC', 'Iljas Neziri aka LAZI. Njeri ma i mequm qe TAVNIKU e ka pas n 100 vjet e fundit. I lindur ne maj te vitit 2001 u be e ditur qe Iljasi ishte i dalluar nga foshnjet tjera por ajo nuk e beri ate qe te mburrej. Suksesi ishte i shkathet ne qdo fush te jetes. Tani po vijon studimet ne UBT per shkaqe familjare ose me shkoll ose n rrug por jo Iljasi si nje intelektual qe esht zgjodhi shkollen. Amo nuk do te thot qe do ta perfundoj ate gjithqka varet ne afatin e shkurtit te vitit te ardhshem.', 'iljasi.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `klientat`
--
ALTER TABLE `klientat`
  ADD PRIMARY KEY (`Klientat_Id`);

--
-- Indexes for table `mesazhet`
--
ALTER TABLE `mesazhet`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `postimet`
--
ALTER TABLE `postimet`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `klientat`
--
ALTER TABLE `klientat`
  MODIFY `Klientat_Id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `mesazhet`
--
ALTER TABLE `mesazhet`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `postimet`
--
ALTER TABLE `postimet`
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

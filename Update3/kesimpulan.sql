-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 26, 2023 at 02:27 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `datajawaban_tubeswebpro`
--

-- --------------------------------------------------------

--
-- Table structure for table `kesimpulan`
--

CREATE TABLE `kesimpulan` (
  `id` int(2) NOT NULL,
  `jenis` varchar(6) NOT NULL,
  `nama` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `kesimpulan`
--

INSERT INTO `kesimpulan` (`id`, `jenis`, `nama`) VALUES
(11, 'moist', 'Skintific 5X Ceramide Barrier Repair Moisture Gel Moisturizer'),
(12, 'moist', 'Avoskin Your skin bae Glow Concentrate Treatment'),
(13, 'moist', 'CeraVe Moisturizing Cream'),
(14, 'moist', 'La Roche Posay Effaclar'),
(15, 'moist', 'Cetaphil Pro Oil Absorbing Moisturizer'),
(21, 'serum', 'The Ordinary Hyaluronic Acid 2% + B5'),
(22, 'serum', 'NPure Triphase serum marigold'),
(23, 'serum', 'Hada Labo Gokujyun Hyaluronic Acid Lotion'),
(24, 'serum', 'The Ordinary Niacinamide 10% + Zinc 1%'),
(31, 'ss', 'Holyshield! UV Matery Sunscreen gel spf 50+ PA++++'),
(32, 'ss', 'NPure Sunscreen Cica Beat the sun'),
(33, 'ss', 'Neutrogena Hydro Boost Water Gel Lotion SPF 30'),
(34, 'ss', 'CeraVe Hydrating Mineral Sunscreen SPF 30'),
(35, 'ss', 'Biore UV Aqua Rich Watery Essence SPF 50+ PA++++');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 19, 2025 at 09:15 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `login`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `Id` int(10) NOT NULL,
  `firstName` varchar(50) NOT NULL,
  `lastName` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `profilepicture` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`Id`, `firstName`, `lastName`, `email`, `password`, `profilepicture`) VALUES
(1, 'lazhar', 'espinosa', 'lazharespinosa3@gmail.com', 'a6105c0a611b41b08f1209506350279e', NULL),
(2, 'hello', 'again', 'ae51dskfj@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', NULL),
(3, 'pek', 'pek', 'maasim@gmail.com', '202cb962ac59075b964b07152d234b70', NULL),
(4, 'angelo', 'espinosa', 'a@gmail.com', '202cb962ac59075b964b07152d234b70', NULL),
(5, 'angelo', 'espinosasss', 'zzawarudo@gmail.com', '202cb962ac59075b964b07152d234b70', NULL),
(6, 'dennis', 'soliman', 'solimandj12@gmail.com', 'a36f7c105c3d7a1023b6948f923ba6af', 'uploads/zoom science report bg.jpg'),
(7, 'sd', 'dd', 's@gmail.com', '202cb962ac59075b964b07152d234b70', NULL),
(8, 'dwnnis', 'mespino', 'dsd@gmail.com', '2cfd4560539f887a5e420412b370b361', NULL),
(9, 'Abc', 'Def', 'abc@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', NULL),
(10, 'xixi', 'xoxo', 'xixixoxo@gmail.com', '25d55ad283aa400af464c76d713c07ad', NULL),
(11, 'asd', 'dasd', 'ss@gmail.com', '202cb962ac59075b964b07152d234b70', NULL),
(12, 'dennis', 'soliman', 'solimandj13@gmail.com', 'a36f7c105c3d7a1023b6948f923ba6af', 'uploads/credits-neil.jpg'),
(13, 'dennis14', 'soliman14', 'solimandj14@gmail.com', '$2y$10$vxyJrZsz.4R.6jvSFc6C3.KMnWPIxEkviqvZTqg7ZNk', NULL),
(15, 'neil', 'sindayen', 'neilsindayen@gmail.com', 'a36f7c105c3d7a1023b6948f923ba6af', NULL),
(16, 'John', 'Doe', 'test@example.com', '482c811da5d5b4bc6d497ffa98491e38', NULL),
(21, '', '', '', '', 'android-chrome-192x192.png'),
(22, '', '', '', '', 'android-chrome-192x192.png'),
(24, 'soliman', 'soliman', 'soliman@gmail.com', '05ae28f580d0ceff63f5e528c6f30691', NULL),
(29, 'test', 'test', 'test@gmail.com', '098f6bcd4621d373cade4e832627b4f6', 'uploads/herson.jpg'),
(30, '111111', '11111', '11111@gmail.com', '96e79218965eb72c92a549dd5a330112', 'uploads/cj-credits.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `Id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

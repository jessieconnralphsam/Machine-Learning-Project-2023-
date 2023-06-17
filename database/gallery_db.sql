-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 17, 2023 at 05:32 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gallery_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `album_list`
--

CREATE TABLE `album_list` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `user_id` int(30) NOT NULL,
  `delete_f` tinyint(1) NOT NULL DEFAULT 0,
  `date_created` datetime NOT NULL DEFAULT current_timestamp(),
  `date_updated` datetime DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `album_list`
--

INSERT INTO `album_list` (`id`, `name`, `user_id`, `delete_f`, `date_created`, `date_updated`) VALUES
(1, 'Potato Leaf', 1, 0, '2021-08-09 10:23:50', '2023-06-04 12:08:17'),
(4, 'Corn Leaf', 1, 0, '2021-08-09 11:16:33', '2023-06-04 12:07:49'),
(5, 'Tomato Leaf', 1, 0, '2021-08-09 11:16:41', '2023-06-04 12:07:39'),
(8, 'Apple', 1, 0, '2023-06-17 10:53:23', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` int(30) NOT NULL,
  `album_id` int(30) NOT NULL,
  `original_name` text NOT NULL,
  `path_name` text NOT NULL,
  `delete_f` tinyint(1) NOT NULL DEFAULT 0,
  `user_id` int(30) NOT NULL,
  `date_created` datetime NOT NULL DEFAULT current_timestamp(),
  `date_updated` datetime DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `album_id`, `original_name`, `path_name`, `delete_f`, `user_id`, `date_created`, `date_updated`) VALUES
(102, 5, 'AppleBlackRot(1).jpg', 'uploads/user_1/album_5/1686965400.jpg', 0, 1, '2023-06-17 09:30:42', NULL),
(103, 4, 'AppleBlackRot(1).jpg', 'uploads/user_1/album_4/1686970260.jpg', 0, 1, '2023-06-17 10:51:00', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `prediction`
--

CREATE TABLE `prediction` (
  `id` int(25) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `effects` text NOT NULL,
  `cause` text NOT NULL,
  `medicine` text NOT NULL,
  `prevention` text NOT NULL,
  `link` text NOT NULL,
  `created_date` datetime NOT NULL DEFAULT current_timestamp(),
  `disease` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `prediction`
--

INSERT INTO `prediction` (`id`, `name`, `description`, `effects`, `cause`, `medicine`, `prevention`, `link`, `created_date`, `disease`) VALUES
(99, 'Apple', '', '', '', '', '', '', '2023-06-17 08:52:12', 'No disease detected(Healthy Plant)'),
(100, 'Apple', 'Black root rot, also called dead man’s fingers or Xylaria root rot, is occasionally observed on mature apple and cherry trees. Although trees of all ages can be infected, most trees that die from black root rot are at least 10 years old.', 'Black rot can reduce the yield of apple trees and make the fruit unmarketable. It can also weaken the tree, making it more susceptible to other diseases and pests.', 'Black rot is caused by the fungus Botryosphaeria obtusa. The fungus can survive in dead tissue on the tree or in the soil. It is spread by wind, rain, and insects.', 'There are no commercial fungicides that are specifically labeled for the control of black rot. However, some general-purpose fungicides can be effective.', 'Planting resistant varieties, Pruning to remove dead or diseased tissue, and Applying a fungicide before the onset of the growing season.', 'https://www.ontario.ca/page/black-rot', '2023-06-17 08:52:48', 'Black Rot'),
(101, 'Corn', '', '', '', '', '', '', '2023-06-17 09:12:03', 'Cercos Pora'),
(102, 'Apple', 'Black root rot, also called dead man’s fingers or Xylaria root rot, is occasionally observed on mature apple and cherry trees. Although trees of all ages can be infected, most trees that die from black root rot are at least 10 years old.', 'Black rot can reduce the yield of apple trees and make the fruit unmarketable. It can also weaken the tree, making it more susceptible to other diseases and pests.', 'Black rot is caused by the fungus Botryosphaeria obtusa. The fungus can survive in dead tissue on the tree or in the soil. It is spread by wind, rain, and insects.', 'There are no commercial fungicides that are specifically labeled for the control of black rot. However, some general-purpose fungicides can be effective.', 'Planting resistant varieties, Pruning to remove dead or diseased tissue, and Applying a fungicide before the onset of the growing season.', 'https://www.ontario.ca/page/black-rot', '2023-06-17 09:30:42', 'Black Rot'),
(103, 'Apple', 'Black root rot, also called dead man’s fingers or Xylaria root rot, is occasionally observed on mature apple and cherry trees. Although trees of all ages can be infected, most trees that die from black root rot are at least 10 years old.', 'Black rot can reduce the yield of apple trees and make the fruit unmarketable. It can also weaken the tree, making it more susceptible to other diseases and pests.', 'Black rot is caused by the fungus Botryosphaeria obtusa. The fungus can survive in dead tissue on the tree or in the soil. It is spread by wind, rain, and insects.', 'There are no commercial fungicides that are specifically labeled for the control of black rot. However, some general-purpose fungicides can be effective.', 'Planting resistant varieties, Pruning to remove dead or diseased tissue, and Applying a fungicide before the onset of the growing season.', 'https://www.ontario.ca/page/black-rot', '2023-06-17 10:51:00', 'Black Rot');

-- --------------------------------------------------------

--
-- Table structure for table `system_info`
--

CREATE TABLE `system_info` (
  `id` int(30) NOT NULL,
  `meta_field` text NOT NULL,
  `meta_value` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `system_info`
--

INSERT INTO `system_info` (`id`, `meta_field`, `meta_value`) VALUES
(1, 'name', 'Simple Image Gallery System'),
(6, 'short_name', 'Gallery'),
(11, 'logo', 'uploads/gallery.png'),
(13, 'user_avatar', 'uploads/user_avatar.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(50) NOT NULL,
  `firstname` varchar(250) NOT NULL,
  `lastname` varchar(250) NOT NULL,
  `username` text NOT NULL,
  `password` text NOT NULL,
  `avatar` text DEFAULT NULL,
  `last_login` datetime DEFAULT NULL,
  `type` tinyint(1) NOT NULL DEFAULT 0,
  `date_added` datetime NOT NULL DEFAULT current_timestamp(),
  `date_updated` datetime DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `username`, `password`, `avatar`, `last_login`, `type`, `date_added`, `date_updated`) VALUES
(1, 'Jessie', 'Sam', 'admin', '0192023a7bbd73250516f069df18b500', 'uploads/1624240500_avatar.png', NULL, 1, '2021-01-20 14:02:37', '2023-06-04 12:02:53');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `album_list`
--
ALTER TABLE `album_list`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `prediction`
--
ALTER TABLE `prediction`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `system_info`
--
ALTER TABLE `system_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `album_list`
--
ALTER TABLE `album_list`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=104;

--
-- AUTO_INCREMENT for table `prediction`
--
ALTER TABLE `prediction`
  MODIFY `id` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=104;

--
-- AUTO_INCREMENT for table `system_info`
--
ALTER TABLE `system_info`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 15, 2023 at 01:12 PM
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
-- Database: `sparky_hotel_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `invoice_user`
--

CREATE TABLE `invoice_user` (
  `user_id` int(11) NOT NULL,
  `guest_id` int(11) NOT NULL,
  `reservation_id` int(11) NOT NULL,
  `invoice_amount` decimal(10,2) NOT NULL,
  `inv_issued` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `inv_paid` timestamp NULL DEFAULT NULL,
  `inv_cancelled` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `kamar`
--

CREATE TABLE `kamar` (
  `id` int(11) NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `jenis` varchar(30) NOT NULL,
  `amount` int(5) NOT NULL,
  `harga` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `kamar`
--

INSERT INTO `kamar` (`id`, `gambar`, `jenis`, `amount`, `harga`) VALUES
(1, 'single.jpg', 'Single Room', 17, '280000'),
(2, 'twin.jpg', 'Twin Room', 14, '550000'),
(3, 'double.jpg', 'Double Room', 9, '675000'),
(4, 'deluxe.jpg', 'Deluxe Room', 7, '830000'),
(7, 'supreme1.jpg', 'Supreme Room', 5, '1200000');

-- --------------------------------------------------------

--
-- Table structure for table `meeting_reserved`
--

CREATE TABLE `meeting_reserved` (
  `id` int(11) NOT NULL,
  `reservation_id` int(11) NOT NULL,
  `meeting_id` int(11) NOT NULL,
  `price` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `meeting_room`
--

CREATE TABLE `meeting_room` (
  `meeting_id` int(11) NOT NULL,
  `package` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `meeting_type_id` int(11) NOT NULL,
  `current_price` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `meeting_room_type`
--

CREATE TABLE `meeting_room_type` (
  `meeting_type_id` int(11) NOT NULL,
  `type_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pengguna`
--

CREATE TABLE `pengguna` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL,
  `no` varchar(15) NOT NULL,
  `akses` enum('Admin','User') NOT NULL DEFAULT 'User',
  `gambar` varchar(100) NOT NULL DEFAULT 'default.png'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pengguna`
--

INSERT INTO `pengguna` (`id`, `nama`, `email`, `password`, `no`, `akses`, `gambar`) VALUES
(1, 'Christopher Abie Diaz Doviano', 'admin@admin.com', '12345', '085779967703', 'Admin', 'IMG_20230417_195506.jpg'),
(2, 'Ray Anthony Pranoto', 'ray.anthony@gmail.com', '12345', '082983774621', 'User', 'IMG_20230526_175106.jpg'),
(3, 'Vianne Olivia', 'vianne.oliv@gmail.com', '12345', '082488422023', 'User', 'default.png');

-- --------------------------------------------------------

--
-- Table structure for table `reservation`
--

CREATE TABLE `reservation` (
  `reservation_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `reserv_created` timestamp NULL DEFAULT current_timestamp(),
  `reserv_updated` timestamp NULL DEFAULT NULL,
  `discount_percent` decimal(5,2) NOT NULL,
  `total_price` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `reservation_status`
--

CREATE TABLE `reservation_status` (
  `reservation_id` int(11) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `room_reserved`
--

CREATE TABLE `room_reserved` (
  `id` int(11) NOT NULL,
  `reservation_id` int(11) NOT NULL,
  `room_id` int(11) NOT NULL,
  `price` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `room_type`
--

CREATE TABLE `room_type` (
  `room_type_id` int(11) NOT NULL,
  `type_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `suite_room`
--

CREATE TABLE `suite_room` (
  `room_id` int(11) NOT NULL,
  `room_name` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `room_type_id` int(11) NOT NULL,
  `current_price` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `id` int(11) NOT NULL,
  `checkin_date` varchar(20) NOT NULL,
  `checkout_date` varchar(20) NOT NULL,
  `amount` int(5) NOT NULL,
  `jenis` varchar(15) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `no` varchar(15) NOT NULL,
  `status` enum('Confirm','Pending') NOT NULL DEFAULT 'Pending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`id`, `checkin_date`, `checkout_date`, `amount`, `jenis`, `nama`, `email`, `no`, `status`) VALUES
(1, '26-May-2023', '31-May-2023', 1, 'Deluxe Room', 'Vianne Olivia', 'vianne.oliv@gmail.com', '082488422023', 'Confirm'),
(2, '26-May-2023', '26-May-2023', 2, 'Twin Room', 'Jefferson Andy', 'jeffe.ndy@gmail.com', '082983774623', 'Confirm'),
(3, '14-Jun-2023', '15-Jun-2023', 1, 'Single Room', 'Ray Anthony Pranoto', 'ray.anthony@gmail.com', '082983774621', 'Confirm'),
(45, '15-Jun-2023', '16-Jun-2023', 1, 'Single Room', 'Alven Edmund', 'alven.edmund@gmail.com', '087537963941', 'Confirm');

-- --------------------------------------------------------

--
-- Table structure for table `user_data`
--

CREATE TABLE `user_data` (
  `user_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `telp_num` varchar(15) NOT NULL,
  `picture` varchar(200) NOT NULL,
  `role` enum('Admin','User') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_data`
--

INSERT INTO `user_data` (`user_id`, `name`, `email`, `password`, `telp_num`, `picture`, `role`) VALUES
(1, 'Christopher Abie Diaz Doviano', 'admin@admin.com', '12345', '085779967703', 'IMG_20230417_195506.jpg', 'Admin'),
(2, 'Ray Anthony Pranoto', 'ray.anthony@gmail.com', '12345', '082983774621', 'IMG_20230526_175106.jpg', 'User'),
(3, 'Vianne Olivia', 'vianne.oliv@gmail.com', '12345', '082488422023', 'default.png', 'User'),
(4, 'Alven Edmund', 'alven.edmund@gmail.com', '12345', '085748584652', 'default.png', 'User');

-- --------------------------------------------------------

--
-- Table structure for table `wedding_event`
--

CREATE TABLE `wedding_event` (
  `wedding_id` int(11) NOT NULL,
  `package` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `wedding_type_id` int(11) NOT NULL,
  `current_price` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `wedding_reserved`
--

CREATE TABLE `wedding_reserved` (
  `id` int(11) NOT NULL,
  `reservation_id` int(11) NOT NULL,
  `wedding_id` int(11) NOT NULL,
  `price` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `wedding_type`
--

CREATE TABLE `wedding_type` (
  `wedding_type_id` int(11) NOT NULL,
  `type_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `invoice_user`
--
ALTER TABLE `invoice_user`
  ADD PRIMARY KEY (`guest_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `reservation_id` (`reservation_id`);

--
-- Indexes for table `kamar`
--
ALTER TABLE `kamar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `meeting_reserved`
--
ALTER TABLE `meeting_reserved`
  ADD PRIMARY KEY (`id`),
  ADD KEY `reservation_id` (`reservation_id`),
  ADD KEY `meeting_id` (`meeting_id`);

--
-- Indexes for table `meeting_room`
--
ALTER TABLE `meeting_room`
  ADD PRIMARY KEY (`meeting_id`),
  ADD KEY `room_type_id` (`meeting_type_id`);

--
-- Indexes for table `meeting_room_type`
--
ALTER TABLE `meeting_room_type`
  ADD PRIMARY KEY (`meeting_type_id`);

--
-- Indexes for table `pengguna`
--
ALTER TABLE `pengguna`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reservation`
--
ALTER TABLE `reservation`
  ADD PRIMARY KEY (`reservation_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `reservation_status`
--
ALTER TABLE `reservation_status`
  ADD KEY `reservation_id` (`reservation_id`);

--
-- Indexes for table `room_reserved`
--
ALTER TABLE `room_reserved`
  ADD PRIMARY KEY (`id`),
  ADD KEY `reservation_id` (`reservation_id`),
  ADD KEY `room_id` (`room_id`);

--
-- Indexes for table `room_type`
--
ALTER TABLE `room_type`
  ADD PRIMARY KEY (`room_type_id`);

--
-- Indexes for table `suite_room`
--
ALTER TABLE `suite_room`
  ADD PRIMARY KEY (`room_id`),
  ADD KEY `room_type_id` (`room_type_id`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_data`
--
ALTER TABLE `user_data`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `wedding_event`
--
ALTER TABLE `wedding_event`
  ADD PRIMARY KEY (`wedding_id`),
  ADD KEY `room_type_id` (`wedding_type_id`);

--
-- Indexes for table `wedding_reserved`
--
ALTER TABLE `wedding_reserved`
  ADD PRIMARY KEY (`id`),
  ADD KEY `reservation_id` (`reservation_id`),
  ADD KEY `wedding_id` (`wedding_id`);

--
-- Indexes for table `wedding_type`
--
ALTER TABLE `wedding_type`
  ADD PRIMARY KEY (`wedding_type_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kamar`
--
ALTER TABLE `kamar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `pengguna`
--
ALTER TABLE `pengguna`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `user_data`
--
ALTER TABLE `user_data`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `invoice_user`
--
ALTER TABLE `invoice_user`
  ADD CONSTRAINT `reservation_id` FOREIGN KEY (`reservation_id`) REFERENCES `reservation` (`reservation_id`),
  ADD CONSTRAINT `user_id` FOREIGN KEY (`user_id`) REFERENCES `user_data` (`user_id`);

--
-- Constraints for table `meeting_reserved`
--
ALTER TABLE `meeting_reserved`
  ADD CONSTRAINT `meeting_id` FOREIGN KEY (`meeting_id`) REFERENCES `meeting_room` (`meeting_id`),
  ADD CONSTRAINT `meeting_reserved_ibfk_1` FOREIGN KEY (`reservation_id`) REFERENCES `reservation` (`reservation_id`);

--
-- Constraints for table `meeting_room`
--
ALTER TABLE `meeting_room`
  ADD CONSTRAINT `meeting_type_id` FOREIGN KEY (`meeting_type_id`) REFERENCES `meeting_room_type` (`meeting_type_id`);

--
-- Constraints for table `reservation`
--
ALTER TABLE `reservation`
  ADD CONSTRAINT `reservation_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user_data` (`user_id`);

--
-- Constraints for table `reservation_status`
--
ALTER TABLE `reservation_status`
  ADD CONSTRAINT `reservation_status_ibfk_1` FOREIGN KEY (`reservation_id`) REFERENCES `reservation` (`reservation_id`);

--
-- Constraints for table `room_reserved`
--
ALTER TABLE `room_reserved`
  ADD CONSTRAINT `room_id` FOREIGN KEY (`room_id`) REFERENCES `suite_room` (`room_id`),
  ADD CONSTRAINT `room_reserved_ibfk_1` FOREIGN KEY (`reservation_id`) REFERENCES `reservation` (`reservation_id`);

--
-- Constraints for table `suite_room`
--
ALTER TABLE `suite_room`
  ADD CONSTRAINT `room_type_id` FOREIGN KEY (`room_type_id`) REFERENCES `room_type` (`room_type_id`);

--
-- Constraints for table `wedding_event`
--
ALTER TABLE `wedding_event`
  ADD CONSTRAINT `wedding_type_id` FOREIGN KEY (`wedding_type_id`) REFERENCES `wedding_type` (`wedding_type_id`);

--
-- Constraints for table `wedding_reserved`
--
ALTER TABLE `wedding_reserved`
  ADD CONSTRAINT `wedding_id` FOREIGN KEY (`wedding_id`) REFERENCES `wedding_event` (`wedding_id`),
  ADD CONSTRAINT `wedding_reserved_ibfk_1` FOREIGN KEY (`reservation_id`) REFERENCES `reservation` (`reservation_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

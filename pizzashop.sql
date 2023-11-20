-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 18, 2023 at 03:27 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pizzashop`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--
-- Error reading structure for table pizzashop.cart: #1030 - Got error 194 &quot;Tablespace is missing for a table&quot; from storage engine InnoDB
-- Error reading data for table pizzashop.cart: #1064 - You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'FROM `pizzashop`.`cart`' at line 1

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `email` varchar(50) NOT NULL,
  `date` date NOT NULL,
  `name` varchar(50) NOT NULL,
  `number` varchar(10) NOT NULL,
  `address` varchar(100) NOT NULL,
  `pincode` varchar(6) NOT NULL,
  `paymentmethod` varchar(50) NOT NULL,
  `itemorder` varchar(1000) NOT NULL,
  `total` varchar(11) NOT NULL,
  `paymentstatus` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`email`, `date`, `name`, `number`, `address`, `pincode`, `paymentmethod`, `itemorder`, `total`, `paymentstatus`) VALUES
('ranjani@gmail.com', '2023-11-06', 'Santhi', '8976754567', '987 NEW NAGAR ENATHUR  kanchipuram', '631561', 'cash on delivery', ' Capsicum Pizza 60/- x 1  Capsicum Pizza 60/- x 1  Tomato Pizza 500/- x 10 ', '$5060/-', 'Done'),
('ranjani@gmail.com', '2023-11-06', 'Mohanapriya', '8977854653', '22, car street', '788657', 'cash on delivery', ' Capsicum Pizza 60/- x 4  Capsicum Pizza 60/- x 4 ', '$240/-', 'Done'),
('mona@gmail.com', '2023-11-06', 'Mona', '9786764668', '987 NEW NAGAR ENATHUR  kanchipuram', '631561', 'paytm', ' Onion Pizza 30/- x 1  Capsicum Pizza 60/- x 4 ', '$240/-', 'Done'),
('mona@gmail.com', '2023-11-06', 'Elango', '8345678909', '29, bus street', '553567', 'cash on delivery', ' Paneer Pizza 90/- x 3  Capsicum Pizza 60/- x 2  Tomato Pizza 500/- x 1 ', '$890/-', 'Done'),
('elango@gmail.com', '2023-11-06', 'Elango', '8807869098', '22b o.p. kulam pudhu street', '631502', 'cash on delivery', ' Paneer Pizza 90/- x 1  Cheese Pizza 95/- x 3  Onion Pizza 30/- x 1 ', '$405/-', 'Done'),
('mukhil@gmail.com', '2023-11-07', 'Mukhilan S S', '9768754678', '22 BUS STREET', '977656', 'paypal', ' Chicken Pizza 99/- x 2 ', '$198/-', 'Done'),
('mohan@gmail.com', '2023-11-07', 'Mohan', '9786546789', '22 cart street', '987654', 'cash on delivery', ' Pepper Cheese Pizza 80/- x 8 ', '$640/-', 'Done'),
('mukhil@gmail.com', '2023-11-07', 'Mukhil', '7488541252', 'gyuvbhj', '985626', 'cash on delivery', ' Onion Pizza 30/- x 1 ', '$30/-', 'Done'),
('priya@gmail.com', '2023-11-08', 'Priya', '7786543567', '22 car street', '987867', 'cash on delivery', ' Extra Cheese Pizza  85/- x 4 ', '$340/-', 'Done'),
('divya@gmail.com', '2023-11-09', 'divya', '9876546789', '22b bus street', '675789', 'cash on delivery', ' Pepper Cheese Pizza 80/- x 3 ', '$240/-', 'Done'),
('mona@gmail.com', '2023-11-18', 'Mona', '9342220243', '22b car street', '', 'Cash On Delivery', ' Capsicum Pizza 60/- x 1  Onion Pizza 30/- x 2  Paneer Pizza 90/- x 3  Tomato Pizza 500/- x 4  Cheese Pizza 95/- x 5  Chicken Pizza 99/- x 6  Pepper Cheese Pizza 80/- x 7  Extra Cheese Pizza  85/- x 8 ', '$4699/-', 'Done'),
('mona@gmail.com', '2023-11-18', 'mona', '8976578979', 'hfjsdhfk', '', 'cod', ' Tomato Pizza 500/- x 5 ', '$2500/-', 'Done'),
('mona@gmail.com', '2023-11-18', 'Mona', '8805657987', '22b bus street', '', 'Cash On Delivery', ' Onion Pizza 30/- x 5  Chicken Pizza 99/- x 2 ', '$348/-', 'Done'),
('210701164@rajalakshmi.edu.in', '2023-11-18', 'Durai Murugan', '9342220243', '22 road street', '', 'PAYTM', ' Chicken Pizza 99/- x 4 ', '$396/-', 'Done'),
('210701164@rajalakshmi.edu.in', '2023-11-18', 'Mona', '9876597656', '22 road street', '', 'Credit Card', ' Paneer Pizza 90/- x 4 ', '$360/-', 'Done'),
('210701164@rajalakshmi.edu.in', '2023-11-18', 'Mona', '9987867863', '22b santhi street', '', 'Cash On Delivery', ' Onion Pizza 30/- x 3  Extra Cheese Pizza  85/- x 9  Onion Pizza 30/- x 4  Tomato Pizza 500/- x 4 ', '$2975/-', 'Done'),
('210701164@rajalakshmi.edu.in', '2023-11-18', 'Mona', '9876568989', '22 elango street', '', 'Cash On Delivery', ' Chicken Pizza 99/- x 6 ', '$594/-', 'Done'),
('monaelango2004@gmail.com', '2023-11-18', 'Mona', '9766745687', '22 mukhil street', '', 'Cash On Delivery', ' Capsicum Pizza 60/- x 1 ', '$60/-', 'Done');

-- --------------------------------------------------------

--
-- Table structure for table `pizza`
--

CREATE TABLE `pizza` (
  `id` int(100) NOT NULL,
  `name` varchar(50) NOT NULL,
  `image` varchar(500) NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pizza`
--

INSERT INTO `pizza` (`id`, `name`, `image`, `price`) VALUES
(1, 'Capsicum Pizza', 'images/capsicum pizza.png', 60),
(2, 'Onion Pizza', 'images/onion pizza.jpg', 30),
(3, 'Paneer Pizza', 'images/paneer pizza.png', 90),
(4, 'Tomato Pizza', 'images/tomato pizza.png', 500),
(5, 'Cheese Pizza', 'images/Cheese Pizza.png', 95),
(6, 'Chicken Pizza', 'images/Chicken Pizza.png', 99),
(7, 'Pepper Cheese Pizza', 'images/Pepper Cheese Pizza.png', 80),
(8, 'Extra Cheese Pizza ', 'images/extra cheese pizza.png', 85);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `name` varchar(50) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`name`, `phone`, `email`, `password`) VALUES
('Divya', '8765467897', 'divya@gmail.com', 'mona'),
('Elango', '7979890898', 'elango@gmail.com', 'bala'),
('Mohan', '9786546788', 'mohan@gmail.com', 'mona'),
('Mohanapriya', '8765434567', 'monaelango2004@gmail.com', 'mona'),
('Mukhilan S S', '9878654535', 'mukhil@gmail.com', 'mona'),
('Priya Dharshini', '9987654345', 'priya@gmail.com', 'mona'),
('Ranjani', '9776456787', 'ranjani@gmail.com', 'mona');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pizza`
--
ALTER TABLE `pizza`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`email`),
  ADD UNIQUE KEY `name` (`name`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pizza`
--
ALTER TABLE `pizza`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

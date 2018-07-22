-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 22, 2018 at 08:32 AM
-- Server version: 10.1.33-MariaDB
-- PHP Version: 7.2.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `invoicing system`
--

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE `clients` (
  `client_id` int(5) UNSIGNED ZEROFILL NOT NULL,
  `user_type` int(1) UNSIGNED NOT NULL,
  `client_email` varchar(60) NOT NULL,
  `client_pass` varbinary(255) NOT NULL,
  `client_comp` varchar(90) NOT NULL,
  `client_add1` varchar(60) NOT NULL,
  `client_add2` varchar(60) NOT NULL,
  `client_add3` varchar(60) NOT NULL,
  `client_country` varchar(30) NOT NULL,
  `client_tel` varchar(30) NOT NULL,
  `client_web` varchar(60) NOT NULL,
  `client_pic` varbinary(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`client_id`, `user_type`, `client_email`, `client_pass`, `client_comp`, `client_add1`, `client_add2`, `client_add3`, `client_country`, `client_tel`, `client_web`, `client_pic`) VALUES
(00000, 0, 'admin@gmail.com', 0x38633639373665356235343130343135626465393038626434646565313564666231363761396338373366633462623861383166366632616234343861393138, '', '', '', '', '', '', '', ''),
(00001, 1, 'enquiry@aemulus.com', 0x33353331613035373532333536626339633566643232363034633930653131353165343930623465313366363261663031663666386262393734613336643861, 'Aemulus Corporation', '1C-06-02 One Precinct', 'Lengkok Mayang Pasir', '11950 Bayan Baru, Penang.', '', '+6042815678', '', ''),
(00002, 1, 'info@exabytes.com', 0x38643931623835323932383837333339663964373031656235343464633837666339353036326439303664636262363238616134346432663139363666643636, 'Exabytes Network', '1-18-8, Suntech @ Penang Cybercity', 'Lintang Mayang Pasir 3', '11950 Bayan Baru, Penang.', '', '+6046587968', '', ''),
(00003, 1, 'info@idt.com', 0x35396466653638623034316165326666353437303263626262616332643039333437666133636237353265323637323731643731613665316361623861343139, 'Integrated Device Technology', 'Pintasan Kampung Jawa 1', 'Kawasan Perindustrian Bayan Lepas', '11900 Bayan Lepas, Penang.', '', '+6046566366', '', ''),
(00004, 1, 'contact.apac@zebra.com', 0x36373663623735303138656463636631306663653666333736663231323465303263333239336661336665386639353363373533383631393863373134353134, 'Zebra Technologies', 'Plot 10, Phase 4, Industrial Zone', 'Bayan Lepas Technoplex', '11900 Bayan Lepas, Penang.', '', '+6042820988', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `cust_id` int(5) UNSIGNED ZEROFILL NOT NULL,
  `cust_name` varchar(30) NOT NULL,
  `cust_email` varchar(30) NOT NULL,
  `cust_add` varchar(90) NOT NULL,
  `cust_tel` varchar(30) NOT NULL,
  `client_id` int(5) UNSIGNED ZEROFILL NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `invoice`
--

CREATE TABLE `invoice` (
  `invoice_no` int(5) UNSIGNED ZEROFILL NOT NULL,
  `invoice_status` varchar(30) NOT NULL,
  `invoice_date` varchar(30) NOT NULL,
  `invoice_amt` varchar(30) NOT NULL,
  `invoice_bal` varchar(30) NOT NULL,
  `quotation_no` int(5) UNSIGNED ZEROFILL NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `inv_items`
--

CREATE TABLE `inv_items` (
  `inv_itemNo` int(5) UNSIGNED ZEROFILL NOT NULL,
  `item_quan` varchar(30) NOT NULL,
  `item_amt` varchar(30) NOT NULL,
  `product_id` int(5) UNSIGNED ZEROFILL NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `payment_id` int(5) UNSIGNED ZEROFILL NOT NULL,
  `transaction_id` int(5) UNSIGNED ZEROFILL NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `product_id` int(5) UNSIGNED ZEROFILL NOT NULL,
  `product_name` varchar(30) NOT NULL,
  `product_price` varchar(30) NOT NULL,
  `product_desc` varchar(90) NOT NULL,
  `client_id` int(5) UNSIGNED ZEROFILL NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `quotation`
--

CREATE TABLE `quotation` (
  `quotation_no` int(5) UNSIGNED ZEROFILL NOT NULL,
  `quotation_status` varchar(30) NOT NULL,
  `quotation_date` varchar(30) NOT NULL,
  `quotation_amt` varchar(30) NOT NULL,
  `cust_id` int(5) UNSIGNED ZEROFILL NOT NULL,
  `quo_itemNo` int(5) UNSIGNED ZEROFILL NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `quo_items`
--

CREATE TABLE `quo_items` (
  `quo_itemNo` int(5) UNSIGNED ZEROFILL NOT NULL,
  `item_quan` varchar(30) NOT NULL,
  `item_amt` varchar(30) NOT NULL,
  `product_id` int(5) UNSIGNED ZEROFILL NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `transaction`
--

CREATE TABLE `transaction` (
  `transaction_id` int(5) UNSIGNED ZEROFILL NOT NULL,
  `transaction_date` varchar(30) NOT NULL,
  `transaction_method` varchar(30) NOT NULL,
  `transaction_amt` varchar(30) NOT NULL,
  `invoice_no` int(5) UNSIGNED ZEROFILL NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`client_id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`cust_id`),
  ADD KEY `client_id` (`client_id`);

--
-- Indexes for table `invoice`
--
ALTER TABLE `invoice`
  ADD PRIMARY KEY (`invoice_no`),
  ADD KEY `quotation_no` (`quotation_no`);

--
-- Indexes for table `inv_items`
--
ALTER TABLE `inv_items`
  ADD PRIMARY KEY (`inv_itemNo`),
  ADD KEY `product_id` (`product_id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`payment_id`),
  ADD KEY `transaction_id` (`transaction_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`product_id`),
  ADD KEY `client_id` (`client_id`);

--
-- Indexes for table `quotation`
--
ALTER TABLE `quotation`
  ADD PRIMARY KEY (`quotation_no`),
  ADD KEY `cust_id` (`cust_id`),
  ADD KEY `quo_itemNo` (`quo_itemNo`);

--
-- Indexes for table `quo_items`
--
ALTER TABLE `quo_items`
  ADD PRIMARY KEY (`quo_itemNo`),
  ADD KEY `product_id` (`product_id`);

--
-- Indexes for table `transaction`
--
ALTER TABLE `transaction`
  ADD PRIMARY KEY (`transaction_id`),
  ADD KEY `invoice_no` (`invoice_no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `clients`
--
ALTER TABLE `clients`
  MODIFY `client_id` int(5) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `cust_id` int(5) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `invoice`
--
ALTER TABLE `invoice`
  MODIFY `invoice_no` int(5) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `inv_items`
--
ALTER TABLE `inv_items`
  MODIFY `inv_itemNo` int(5) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `payment_id` int(5) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `product_id` int(5) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `quotation`
--
ALTER TABLE `quotation`
  MODIFY `quotation_no` int(5) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `quo_items`
--
ALTER TABLE `quo_items`
  MODIFY `quo_itemNo` int(5) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `transaction`
--
ALTER TABLE `transaction`
  MODIFY `transaction_id` int(5) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `customers`
--
ALTER TABLE `customers`
  ADD CONSTRAINT `customers_ibfk_1` FOREIGN KEY (`client_id`) REFERENCES `clients` (`client_id`);

--
-- Constraints for table `invoice`
--
ALTER TABLE `invoice`
  ADD CONSTRAINT `invoice_ibfk_1` FOREIGN KEY (`quotation_no`) REFERENCES `quotation` (`quotation_no`);

--
-- Constraints for table `inv_items`
--
ALTER TABLE `inv_items`
  ADD CONSTRAINT `inv_items_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `product` (`product_id`);

--
-- Constraints for table `payment`
--
ALTER TABLE `payment`
  ADD CONSTRAINT `payment_ibfk_1` FOREIGN KEY (`transaction_id`) REFERENCES `transaction` (`transaction_id`);

--
-- Constraints for table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_ibfk_1` FOREIGN KEY (`client_id`) REFERENCES `clients` (`client_id`);

--
-- Constraints for table `quotation`
--
ALTER TABLE `quotation`
  ADD CONSTRAINT `quotation_ibfk_1` FOREIGN KEY (`cust_id`) REFERENCES `customers` (`cust_id`),
  ADD CONSTRAINT `quotation_ibfk_2` FOREIGN KEY (`quo_itemNo`) REFERENCES `quo_items` (`quo_itemNo`);

--
-- Constraints for table `quo_items`
--
ALTER TABLE `quo_items`
  ADD CONSTRAINT `quo_items_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `product` (`product_id`);

--
-- Constraints for table `transaction`
--
ALTER TABLE `transaction`
  ADD CONSTRAINT `transaction_ibfk_1` FOREIGN KEY (`invoice_no`) REFERENCES `invoice` (`invoice_no`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 31, 2023 at 02:41 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `aid` varchar(50) NOT NULL,
  `pwd` varchar(20) NOT NULL,
  `name` varchar(50) NOT NULL,
  `fpass` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`aid`, `pwd`, `name`, `fpass`) VALUES
('dhruveshpatel2005@gmail.com', 'Dhruv@dmin625', 'Dhruvesh Vaghasiya', 'Jay Swaminarayan');

-- --------------------------------------------------------

--
-- Table structure for table `booking_payment`
--

CREATE TABLE `booking_payment` (
  `bid` int(254) NOT NULL,
  `pickup_date` varchar(20) NOT NULL,
  `pickup_time` varchar(20) NOT NULL,
  `drop_date` varchar(20) NOT NULL,
  `drop_time` varchar(20) NOT NULL,
  `pay_date` varchar(20) NOT NULL,
  `pay_amt` mediumtext NOT NULL,
  `pay_time` varchar(20) NOT NULL,
  `status` binary(1) NOT NULL,
  `cid` varchar(255) NOT NULL,
  `oid` varchar(255) NOT NULL,
  `vid` int(254) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `booking_payment`
--

INSERT INTO `booking_payment` (`bid`, `pickup_date`, `pickup_time`, `drop_date`, `drop_time`, `pay_date`, `pay_amt`, `pay_time`, `status`, `cid`, `oid`, `vid`) VALUES
(3, '2023-04-23', '17:52', '2023-06-03', '18:52', '23-04-22', '15000', '02:53:02', 0x31, 'dhruveshpatel@gmail.com', 'dhruv@gmail.com', 4),
(4, '2023-04-27', '16:20', '2023-06-17', '18:20', '23-04-25', '35000', '01:20:54', 0x31, 'maryhearn@gmail.com', 'dhruvpatel@gmail.com', 2),
(6, '2023-05-14', '11:14', '2023-05-18', '11:17', '23-05-13', '5000', '11:15:22', 0x31, 'raj@gmail.com', 'dhruvpatel@gmail.com', 5),
(7, '2023-06-15', '10:34', '2023-06-20', '10:35', '23-05-15', '4000', '08:34:21', 0x31, 'sujalshah@gmail.com', 'hitsavaliya@gmail.com', 9);

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `cid` varchar(50) NOT NULL,
  `pwd` varchar(20) NOT NULL,
  `cname` varchar(50) NOT NULL,
  `cno` varchar(10) NOT NULL,
  `cbdate` varchar(20) NOT NULL,
  `c_city` varchar(50) NOT NULL,
  `cadd` varchar(300) NOT NULL,
  `fpass` varchar(50) NOT NULL,
  `cidproof` varchar(200) NOT NULL,
  `C_licence` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`cid`, `pwd`, `cname`, `cno`, `cbdate`, `c_city`, `cadd`, `fpass`, `cidproof`, `C_licence`) VALUES
('abhay@gmail.com', 'abhay@123456', 'Abhay Kumar', '9955663332', '05-07-2002', 'Surat', 'Jakatnaka', 'shiv', 'Idproof1.pdf', 'License1.pdf'),
('ajay@gmail.com', 'ajay@123456', 'Ajay Kumar', '9955663355', '05-07-2001', 'Rajkot', 'Sardar road', 'messi', 'Idproof1.pdf', 'License1.pdf'),
('dhruv123@gmail.com', 'Drv@123456', 'dhruvesh vaghasiya', '9955663344', '2003-02-09', 'Jetpur', 'Dobariya vadi, Jetpur', 'Jay Shree Ram', 'Idproof1.pdf', 'License1.pdf'),
('dhruveshpatel@gmail.com', 'Drv@123456', 'Dhruv', '8780463161', '06-02-2005', 'Jetpur', 'Dobariya vadi', 'satshree', 'Idproof1.pdf', 'License1.pdf'),
('hkp@gmail.com', 'hkp@123456', 'Hardik Patel', '9955663378', '05-07-1983', 'Junagadh', 'Junagadh', 'mahadev', 'Idproof1.pdf', 'License1.pdf'),
('maryhearn@gmail.com', 'QWE@asd123', 'mary hearnnn', '1122334455', '2023-03-01', ' vvn', 'Mota Bazaar', 'Dr. APJ kalam', 'Idproof1.pdf', 'License1.pdf'),
('meetshah@gmail.com', 'meet@123456', 'Meet Shah', '8756942355', '05-07-1998', 'Thermal', 'Thermal road', 'virat', 'Idproof1.pdf', 'License1.pdf'),
('raj@gmail.com', 'Raj@12345678', 'raj vekariya', '0', '2023-02-03', 'Jetpur', 'lkasdjfdash', 'raj', 'Idproof2.pdf', 'License2.pdf'),
('sujalshah@gmail.com', 'Abc@123', 'sujal shah', '9173561696', '05-07-2004', 'khambaht', 'ladeado khammbhat', 'ronaldo', 'Idproof1.pdf', 'License1.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `owner`
--

CREATE TABLE `owner` (
  `oid` varchar(50) NOT NULL,
  `pwd` varchar(20) NOT NULL,
  `oname` varchar(50) NOT NULL,
  `ono` varchar(10) NOT NULL,
  `obdate` varchar(20) NOT NULL,
  `o_city` varchar(50) NOT NULL,
  `oadd` varchar(300) NOT NULL,
  `fpass` varchar(50) NOT NULL,
  `oidproof` varchar(200) NOT NULL,
  `O_licence` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `owner`
--

INSERT INTO `owner` (`oid`, `pwd`, `oname`, `ono`, `obdate`, `o_city`, `oadd`, `fpass`, `oidproof`, `O_licence`) VALUES
('deep@gmail.com', 'deep@1234', 'deep patel', '859674412', '16-05-2003', 'Junagadh', 'girnar', 'neminath', 'Idproof1.pdf', 'Licence1.pdf'),
('dhruv@gmail.com', 'Drv@123456', 'Dhruv Vaghasiya', '1122334455', '31-12-2004', 'Anand', 'Mota bazaar', 'Jay shree Ram', 'Idproof1.pdf', 'License1.pdf'),
('dhruvpatel@gmail.com', 'Drv@123456', 'Dhruv Patel', '9726655834', '26-12-2000', 'Jetpur', 'Amarnagar Road', 'Jay Shree Krishna', 'Idproof1.pdf', 'License1.pdf'),
('heet@gmail.com', 'heet@12345', 'heet patel', '8989898989', '01-02-2003', 'petlad', 'mota chowk', 'sachin', 'Idproof1.pdf', 'Licence1.pdf'),
('hitsavaliya@gmail.com', 'hit@123456', 'Hit Savaliya', '9758849984', '16-05-2001', 'Surat', 'Jakatnaka Surat', 'krishna', 'Idproof1.pdf', 'License1.pdf'),
('kalpan@gmail.com', 'kalpan@12345', 'kalpan desai', '74556689', '16-05-2001', 'bharuch', 'narmada bridge', 'vir narmad', 'Idproof1.pdf', 'License1.pdf'),
('krish@gmail.com', 'krish@12345', 'krish rana', '8787858545', '01-02-2003', 'rajkot', 'nana magan road', 'rohit sharma', 'Idprood1.pdf', 'LIcence1.pdf'),
('nikedobariya128@gmail.com', 'nick@123456', 'Nisarg Dobariya', '9879449335', '11-12-2004', 'Surat', 'Jakatnaka surat', 'papa', 'Idproof1.pdf', 'License1.pdf'),
('parv@gmail.com', 'parv@gmail.com', 'parv patel', '2545581514', '01-05-1956', 'rajkot', 'meta chowk', 'mr modi', 'Idprood1.pdf', 'License1.pdf'),
('rakesh@gmail.com', 'rakesh@12345', 'rakesh shah', '9685714252', '27-08-2000', 'surendranagar', 'manek chowk', 'abdullah', 'Idproof1.pdf', 'Licence1.pdf'),
('renshpatel@gmail.com', 'rensh@123456', 'Renish Ratanpara', '9879449344', '16-05-2003', 'Junagadh', 'Near Majewadi Gate, Junagadh', 'har har mahadev', 'Idproof1.pdf', 'License1.pdf'),
('rishi@gmail.com', 'rishi@12345', 'Rishi Bhavsar', '7878787878', '01-01-1999', 'nadiyad', 'sardarnagar', 'rahul gandhi', 'Idproof1.pdf', 'License1.pdf'),
('rohan@gmail.com', 'rohan@12345', 'rohan doshi', '7841526396', '04-05-2001', 'banglore', 'city mall', 'virat kohli', 'Idproof1.pdf', 'License1.pdf'),
('sujowner@gmail.com', 'suj@12345', 'sujal shah', '9551201025', '02-05-1987', 'delhi', 'sardar chowk', 'mahatma gandhi', 'Idproof1.pdf', 'License1.pdf'),
('venishpapaliya@gmail.com', 'venish@123456', 'Venish Papaliya', '9879449321', '11-12-1998', 'Keshod', 'Near gandhi road, Keshod.', 'mahadev', 'Idproof1.pdf', 'License1.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `vehicle`
--

CREATE TABLE `vehicle` (
  `vid` int(254) NOT NULL,
  `vname` varchar(50) NOT NULL,
  `vno` varchar(13) NOT NULL,
  `brand` varchar(20) NOT NULL,
  `color` varchar(20) NOT NULL,
  `price` mediumtext NOT NULL,
  `date` varchar(20) NOT NULL,
  `type` varchar(20) NOT NULL,
  `ftype` varchar(10) NOT NULL,
  `seat` varchar(15) NOT NULL,
  `photo` varchar(200) NOT NULL,
  `puc` varchar(200) NOT NULL,
  `rcbook` varchar(200) NOT NULL,
  `insurance` varchar(200) NOT NULL,
  `oid` varchar(100) NOT NULL,
  `status` binary(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vehicle`
--

INSERT INTO `vehicle` (`vid`, `vname`, `vno`, `brand`, `color`, `price`, `date`, `type`, `ftype`, `seat`, `photo`, `puc`, `rcbook`, `insurance`, `oid`, `status`) VALUES
(1, 'ducati rx100', 'GJ-23-AB-0701', 'ducati', 'black', '20000', '2023-11-25', 'MOTORCYCLE', 'petrol', '2', 'ducati.jpg', 'puc1.pdf', 'rcbook1.pdf', 'insurance1.pdf', 'rohan@gmail.com', 0x30),
(2, 'Audi Q5', 'GJ-01-HH-4312', 'Audi', 'white', '27000', '2023-05-07', 'suv', 'diesel', '5', 'audi.jpg', 'PUC4.pdf', 'Rcbook4.pdf', 'Insurance4.pdf', 'dhruvpatel@gmail.com', 0x31),
(3, 'Fortuner', 'DL-01-BH-5674', 'Toyota', 'black', '20000', '2023-06-18', 'suv', 'diesel', '8', 'car.jpg', 'PUC3.pdf', 'Rcbook3.pdf', 'Insurance3.pdf', 'dhruv@gmail.com', 0x30),
(4, 'Thar', 'GJ-01-HH-4433', 'Mahindra', 'white', '15000', '2023-06-11', 'suv', 'petrol', '4', 'whitethar.jpg', 'Puc2.pdf', 'Rcbook2.pdf', 'Insurance2.pdf', 'dhruv@gmail.com', 0x31),
(5, 'Alto 800', 'GJ-02-HH-5632', 'Maruti Suzuki', 'red', '5000', '2023-06-18', 'hatchback', 'petrol', '5', 'alto.jpg', 'puc1.pdf', 'rcbook1.pdf', 'Insurance1.pdf', 'dhruvpatel@gmail.com', 0x30),
(6, 'Mustang 1969', 'GJ-05-AB-0001', 'Ford', 'black', '100000', '2023-07-28', 'sports', 'petrol', '4', 'mustang.jpg', 'puc1.pdf', 'rcbook1.pdf', 'insurance1.pdf', 'nikedobariya128@gmail.com', 0x30),
(7, 'Porsche 711', 'GJ-01-HH-3344', 'Porsche', 'yellow', '80000', '2023-06-09', 'sports', 'petrol', '2', 'porche.jpg', 'puc1.pdf', 'rcbook1.pdf', 'insurance1.pdf', 'nikedobariya128@gmail.com', 0x30),
(8, 'XUV 700', 'GJ-01-HH-3399', 'Mahindra', 'blue', '15000', '2023-05-27', 'suv', 'petrol', '5', 'xuv.jpg', 'puc1.pdf', 'rcbook1.pdf', 'insurance1.pdf', 'hitsavaliya@gmail.com', 0x30),
(9, 'KTM', 'GJ-05-AB-2351', 'Duke', 'white', '4000', '2023-12-02', 'MOTORCYCLE', 'petrol', '2', 'ktm.png', 'puc1.pdf', 'rcbook1.pdf', 'insurance1.pdf', 'hitsavaliya@gmail.com', 0x31),
(10, 'audi r8', 'GJ-05-AB-4545', 'audi', 'red', '45000', '2023-07-04', 'sports', 'diesel', '2', 'audir8.jpg', 'puc1.pdf', 'rcbook1.pdf', 'insurance1.pdf', 'heet@gmail.com', 0x30),
(11, 'dream yoga', 'GJ-05-AB-5484', 'honda', 'black', '700', '2023-12-26', 'MOTORCYCLE', 'petrol', '2', 'drimeyoga.jpg', 'puc1.pdf', 'rcbook1.pdf', 'insurance1.pdf', 'kalpan@gmail.com', 0x30),
(12, 'defender', 'GJ-27-AA-2454', 'RANGE ROVER', 'white', '150000', '23-06-2023', 'suv', 'diesel', '4', 'range.jpg', 'puc1.pdf', 'rcbook1.pdf', 'insurance1.pdf', 'nikedobariya128@gmail.com', 0x30),
(13, 'phantom', 'GJ-05-AB-5844', 'rolce royce', 'light blue', '100000', '2023-11-04', 'luxury car', 'petrol', '4', 'phantom.jpg', 'puc1.jpg', 'rcbook1.jpg', 'insurance1.pdf', 'parv@gmail.com', 0x30),
(14, 'Gloster', 'GJ-05-AB-0410', 'MG', 'red', '35000', '2023-12-31', 'suv', 'petrol', '6', 'gloster.jpg', 'puc1.pdf', 'rcbook1.pdf', 'insurance1.pdf', 'rakesh@gmail.com', 0x30),
(15, 'Splender', 'GJ-11-AB-0001', 'hero', 'black', '700', '2023-11-11', 'MOTORCYCLE', 'petrol', '2', 'splendor.jpg', 'puc1.pdf', 'rcbook1.pdf', 'insurance1.pdf', 'heet@gmail.com', 0x30),
(16, 'Legender', 'GJ-05-AB-2377', 'Toyota', 'white', '35000', '2023-07-04', 'suv', 'diesel', '7', 'legender.jpg', 'puc1.pdf', 'rcbook1.pdf', 'insurance1.pdf', 'venishpapaliya@gmail.com', 0x30),
(17, 'Scorpio', 'GJ-05-AB-2364', 'Mahindra', 'black', '10000', '2024-01-02', 'suv', 'petrol', '5', 'scorpio.jpg', 'puc1.pdf', 'rcbook1.pdf', 'insurance1.pdf', 'deep@gmail.com', 0x30),
(18, 'Everest Platinum', 'GJ-05-AB-4523', 'Ford', 'black', '20000', '2023-09-21', 'suv', 'petrol', '7', 'ford.jpg', 'puc1.pdf', 'rcbook1.pdf', 'insurance1.pdf', 'venishpapaliya@gmail.com', 0x30),
(19, 'BMW G 310 R', 'GJ-27-AA-1199', 'BMW', 'white', '2000', '2023-10-22', 'MOTORCYCLE', 'petrol', '2', 'bmw.jpg', 'puc1.pdf', 'rcbook1.pdf', 'insurance1.pdf', 'renshpatel@gmail.com', 0x30),
(20, 'Supra', 'GJ-05-AB-2157', 'Toyota', 'white', '50000', '2023-08-23', 'sports', 'petrol', '2', 'supra.jpg', 'puc1.pdf', 'rcbook1.pdf', 'insurance1.pdf', 'renshpatel@gmail.com', 0x30),
(21, 'Yamaha', 'GJ-27-AA-2477', 'Yamaha', 'black', '1000', '2023-08-02', 'MOTORCYCLE', 'petrol', '2', 'yamaha.jpg', 'puc1.pdf', 'rcbook1.pdf', 'insurance1.pdf', 'deep@gmail.com', 0x30),
(22, 'Harley Davidson Sportster', 'GJ-05-AB-4371', 'Harley', 'blue', '15000', '2023-09-14', 'MOTORCYCLE', 'petrol', '1', 'herly.jpg', 'puc1.pdf', 'rcbook1.pdf', 'insurance1.pdf', 'rishi@gmail.com', 0x30),
(23, 'Aprilia RS 660', 'GJ-27-AA-2469', 'Piaggio', 'yellow', '10000', '2023-10-11', 'MOTORCYCLE', 'petrol', '1', 'aprilia.jpg', 'puc1.pdf', 'rcbook1.pdf', 'insurance1.pdf', 'rishi@gmail.com', 0x30),
(24, 'Maestro Edge 110', 'GJ-05-AB-2398', 'Hero', 'blue', '800', '2023-12-10', 'MOTORCYCLE', 'petrol', '2', 'mestro.jpg', 'puc1.pdf', 'rcbook1.pdf', 'insurance1.pdf', 'sujowner@gmail.com', 0x30),
(25, 'Civic', 'GJ-27-AA-2487', 'Honda', 'white', '13000', '2024-01-24', 'compact car', 'petrol', '5', 'sivic.jpg', 'puc1.pdf', 'rcbook1.pdf', 'insurance1.pdf', 'sujowner@gmail.com', 0x30),
(26, 'Himalayan', 'GJ-05-AB-2347', 'Royal Enfield', 'black', '2000', '2024-05-02', 'MOTORCYCLE', 'petrol', '2', 'himaliyan.jpg', 'puc1.pdf', 'rcbook1.pdf', 'insurance1.pdf', 'sujowner@gmail.com', 0x30),
(27, 'Kawasaki Ninja H2R', 'GJ-27-AA-2467', 'Kawasaki', 'Grey', '40000', '2024-10-22', 'MOTORCYCLE', 'petrol', '1', 'kawasaki.jpg', 'puc1.pdf', 'rcbook1.pdf', 'insurance1.pdf', 'rakesh@gmail.com', 0x30),
(28, 'Hellcat', 'GJ-05-AB-2865', 'Dodge', 'white', '40000', '2024-02-12', 'luxury car', 'petrol', '4', 'hellcat.jpg', 'puc1.pdf', 'rcbook1.pdf', 'insurance1.pdf', 'kalpan@gmail.com', 0x30);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`aid`);

--
-- Indexes for table `booking_payment`
--
ALTER TABLE `booking_payment`
  ADD PRIMARY KEY (`bid`),
  ADD KEY `cid_fk` (`cid`),
  ADD KEY `oid_fk` (`oid`),
  ADD KEY `vid_fk` (`vid`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `owner`
--
ALTER TABLE `owner`
  ADD PRIMARY KEY (`oid`);

--
-- Indexes for table `vehicle`
--
ALTER TABLE `vehicle`
  ADD PRIMARY KEY (`vid`),
  ADD KEY `oid` (`oid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking_payment`
--
ALTER TABLE `booking_payment`
  MODIFY `bid` int(254) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `vehicle`
--
ALTER TABLE `vehicle`
  MODIFY `vid` int(254) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `booking_payment`
--
ALTER TABLE `booking_payment`
  ADD CONSTRAINT `cid_fk` FOREIGN KEY (`cid`) REFERENCES `customer` (`cid`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `oid_fk` FOREIGN KEY (`oid`) REFERENCES `owner` (`oid`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `vid_fk` FOREIGN KEY (`vid`) REFERENCES `vehicle` (`vid`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

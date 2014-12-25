-- phpMyAdmin SQL Dump
-- version 4.2.6deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 25, 2014 at 08:40 AM
-- Server version: 5.5.40-0ubuntu1
-- PHP Version: 5.5.12-2ubuntu4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ftfl`
--

-- --------------------------------------------------------

--
-- Table structure for table `reg_info`
--

CREATE TABLE IF NOT EXISTS `reg_info` (
`id` int(150) NOT NULL,
  `pre_track` varchar(10) NOT NULL,
  `ssc_board` varchar(20) NOT NULL,
  `hsc_board` varchar(20) NOT NULL,
  `has_laptop` varchar(10) NOT NULL,
  `ssc_roll` varchar(10) NOT NULL,
  `hsc_roll` varchar(10) NOT NULL,
  `pre_exam_center` varchar(20) NOT NULL,
  `name` varchar(40) NOT NULL,
  `father` varchar(40) NOT NULL,
  `mother` varchar(40) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `religion` varchar(10) NOT NULL,
  `birth_date` date NOT NULL,
  `nationality` varchar(20) NOT NULL,
  `id_national` varchar(25) NOT NULL,
  `birth_reg` varchar(20) NOT NULL,
  `passport_number` varchar(15) NOT NULL,
  `mobile` varchar(15) NOT NULL,
  `h_phone` varchar(15) NOT NULL,
  `e_contact` varchar(15) NOT NULL,
  `email` varchar(20) NOT NULL,
  `a_email` varchar(20) NOT NULL,
  `c_location` varchar(20) NOT NULL,
  `p_address` text NOT NULL,
  `per_address` text NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `reg_info`
--

INSERT INTO `reg_info` (`id`, `pre_track`, `ssc_board`, `hsc_board`, `has_laptop`, `ssc_roll`, `hsc_roll`, `pre_exam_center`, `name`, `father`, `mother`, `gender`, `religion`, `birth_date`, `nationality`, `id_national`, `birth_reg`, `passport_number`, `mobile`, `h_phone`, `e_contact`, `email`, `a_email`, `c_location`, `p_address`, `per_address`) VALUES
(1, 'ITS', 'Chittagong', 'Chittagong', '1', '111058', '616394', '1', 'Mohammad Shajedul Hoque', 'Mohammad Nurul Hoque', 'Sakina Begum', 'Male', 'Islam', '1988-03-05', 'Bangladeshi', '1591017004309', '', '', '0192-1342454', '', '', 'ctgboy2010@gmail.com', '', '1', 'Block# A, Road# 03, House# 12 (4th Floor), Section# 10, Mirpur, Dhaka-1216.', 'Vill.: East Rupkania, P.S.: Satkania, P.O.: Satkania, Dist.: Chittagong '),
(2, 'ITS', 'Chittagong', 'Chittagong', '0', '111058', '616394', '1', 'Mohammad Shajedul Hoque', 'Mohammad Nurul Hoque', 'Sakina Begum', 'Male', 'Islam', '1988-03-05', 'Bangladeshi', '1591017004309', '', '', '0192-1342454', '', '', 'ctgboy2010@gmail.com', '', '1', 'Block# A, Road# 03, House# 12 (4th Floor), Section# 10, Mirpur, Dhaka-1216.', 'Vill.: East Rupkania, P.S.: Satkania, P.O.: Satkania, Dist.: Chittagong '),
(3, 'ITES', 'Chittagong', 'Chittagong', '1', '', '616394', '2', 'Mohammad Jakir Hossain', 'Mohammad Jacky', 'Sheikh Hasina', 'Male', 'Islam', '1988-12-31', 'Bangladeshi', '1234567890123', 'CTG123456', 'BD654D098', '12345678901', '09876543210', '09876543211', 'jack@info.com', 'jack_jh@info.com', '1', 'Hello', 'Hello'),
(5, 'ITS', 'Chittagong', 'Chittagong', '1', '111058', '616394', '1', 'Mohammad Shajedul Hoque', 'Mohammad Nurul Hoque', 'Sakina Begum', 'Male', 'Islam', '1988-03-05', 'Bangladeshi', '1591017004309', '', '', '0192-1342454', '', '', 'ctgboy2010@gmail.com', '', '1', 'Block# A, Road# 03, House# 12 (4th Floor), Section# 10, Mirpur, Dhaka-1216.', 'Vill.: East Rupkania, P.S.: Satkania, P.O.: Satkania, Dist.: Chittagong '),
(6, 'ITS', 'Chittagong', 'Chittagong', '1', '111058', '616394', '1', 'Mohammad Shajedul Hoque', 'Mohammad Nurul Hoque', 'Sakina Begum', 'Male', 'Islam', '1988-03-05', 'Bangladeshi', '1591017004309', '', '', '0192-1342454', '', '', 'ctgboy2010@gmail.com', '', '1', 'Block# A, Road# 03, House# 12 (4th Floor), Section# 10, Mirpur, Dhaka-1216.', 'Vill.: East Rupkania, P.S.: Satkania, P.O.: Satkania, Dist.: Chittagong ');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `reg_info`
--
ALTER TABLE `reg_info`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `reg_info`
--
ALTER TABLE `reg_info`
MODIFY `id` int(150) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

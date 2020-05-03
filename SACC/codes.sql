-- phpMyAdmin SQL Dump
-- version 4.9.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Apr 20, 2020 at 06:42 PM
-- Server version: 5.7.26
-- PHP Version: 7.4.2

USE codes;


SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `codes`
--

-- --------------------------------------------------------

--
-- Table structure for table `final`
--

CREATE TABLE `final` (
  `p` int(11) NOT NULL,
  `vp` int(11) NOT NULL,
  `s` int(11) NOT NULL,
  `o` int(11) NOT NULL,
  `pr` int(11) NOT NULL,
  `t` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `final`
--

INSERT INTO `final` (`p`, `vp`, `s`, `o`, `pr`, `t`) VALUES
(2, 2, 2, 2, 2, 2),
(2, 2, 2, 2, 2, 2),
(2, 2, 2, 2, 2, 2),
(2, 2, 2, 1, 2, 2),
(2, 2, 2, 1, 2, 2),
(2, 2, 2, 1, 2, 2),
(2, 2, 1, 1, 2, 2),
(1, 1, 1, 1, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `ids`
--

CREATE TABLE `ids` (
  `id` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ids`
--

INSERT INTO `ids` (`id`) VALUES
('1111111111'),
('2222222222'),
('3333333333'),
('4444444444'),
('5555555555'),
('6666666666'),
('7777777777'),
('8888888888'),
('9999999999');

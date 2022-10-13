-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: mysql-server
-- Generation Time: Oct 13, 2022 at 09:15 AM
-- Server version: 5.7.36
-- PHP Version: 7.4.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `is_valid` tinyint(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `name`, `phone`, `is_valid`) VALUES
(0, 'Walid Hammadi', '(212) 6007989253', 0),
(1, 'Yosaf Karrouch', '(212) 698054317', 1),
(2, 'Younes Boutikyad', '(212) 6546545369', 0),
(3, 'Houda Houda', '(212) 6617344445', 0),
(4, 'Chouf Malo', '(212) 691933626', 1),
(5, 'soufiane fritisse ', '(212) 633963130', 1),
(6, 'Nada Sofie', '(212) 654642448', 1),
(7, 'Edunildo Gomes Alberto ', '(258) 847651504', 1),
(8, 'Walla\'s Singz Junior', '(258) 846565883', 1),
(9, 'sevilton sylvestre', '(258) 849181828', 1),
(10, 'Tanvi Sachdeva', '(258) 84330678235', 1),
(11, 'Florencio Samuel', '(258) 847602609', 1),
(12, 'Solo Dolo', '(258) 042423566', 1),
(13, 'Pedro B 173', '(258) 823747618', 1),
(14, 'Ezequiel Fenias', '(258) 848826725', 1),
(15, 'JACKSON NELLY', '(256) 775069443', 1),
(16, 'Kiwanuka Budallah', '(256) 7503O6263', 0),
(17, 'VINEET SETH', '(256) 704244430', 1),
(18, 'Jokkene Richard', '(256) 7734127498', 1),
(19, 'Ogwal David', '(256) 7771031454', 1),
(20, 'pt shop 0901 Ultimo ', '(256) 3142345678', 1),
(21, 'Daniel Makori', '(256) 714660221', 1),
(22, 'shop23 sales', '(251) 9773199405', 1),
(23, 'Filimon Embaye', '(251) 914701723', 1),
(24, 'ABRAHAM NEGASH', '(251) 911203317', 1),
(25, 'ZEKARIAS KEBEDE', '(251) 9119454961', 1),
(26, 'EPHREM KINFE', '(251) 914148181', 1),
(27, 'Karim Niki', '(251) 966002259', 1),
(28, 'Frehiwot Teka', '(251) 988200000', 1),
(29, 'Fanetahune Abaia', '(251) 924418461', 1),
(30, 'Yonatan Tekelay', '(251) 911168450', 1),
(31, 'EMILE CHRISTIAN KOUKOU DIKANDA HONORE ', '(237) 697151594', 1),
(32, 'MICHAEL MICHAEL', '(237) 677046616', 1),
(33, 'ARREYMANYOR ROLAND TABOT', '(237) 6A0311634', 0),
(34, 'LOUIS PARFAIT OMBES NTSO', '(237) 673122155', 1),
(35, 'JOSEPH FELICIEN NOMO', '(237) 695539786', 1),
(36, 'SUGAR STARRK BARRAGAN', '(237) 6780009592', 1),
(37, 'WILLIAM KEMFANG', '(237) 6622284920', 1),
(38, 'THOMAS WILFRIED LOMO LOMO', '(237) 696443597', 1),
(39, 'Dominique mekontchou', '(237) 691816558', 1),
(40, 'Nelson Nelson', '(237) 699209115', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

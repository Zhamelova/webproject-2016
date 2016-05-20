-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1
-- Время создания: Май 20 2016 г., 15:49
-- Версия сервера: 5.5.39
-- Версия PHP: 5.4.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `tables`
--

-- --------------------------------------------------------

--
-- Структура таблицы `images`
--

CREATE TABLE IF NOT EXISTS `images` (
`ID` int(6) NOT NULL,
  `IMAGE` varchar(300) NOT NULL,
  `NAME` varchar(30) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

--
-- Дамп данных таблицы `images`
--

INSERT INTO `images` (`ID`, `IMAGE`, `NAME`) VALUES
(4, '6.jpg', 'Banana pudding'),
(5, '4.jpg', 'Cupcakes'),
(6, '5.jpg', 'Double Chocolate Cookies'),
(7, '1.jpg', 'hfadbgnhkj');

-- --------------------------------------------------------

--
-- Структура таблицы `project`
--

CREATE TABLE IF NOT EXISTS `project` (
`ID` int(6) NOT NULL,
  `NAME` varchar(30) NOT NULL,
  `USERNAME` varchar(30) NOT NULL,
  `PASSWORD` varchar(30) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=12 ;

--
-- Дамп данных таблицы `project`
--

INSERT INTO `project` (`ID`, `NAME`, `USERNAME`, `PASSWORD`) VALUES
(1, 'ADMIN', 'ADMIN', '123'),
(5, 'assiyashka', 'milashka', '123'),
(6, 'Teacher', 'Teacher', '123'),
(7, 'Diana', 'diana', '123'),
(8, 'diana', 'diana1', '123'),
(9, 'asd', 'asd', '123'),
(10, 'aizat', 'aizat', '123'),
(11, 'dias', 'dias', '123');

-- --------------------------------------------------------

--
-- Структура таблицы `recipes`
--

CREATE TABLE IF NOT EXISTS `recipes` (
`ID` int(6) NOT NULL,
  `NAME` varchar(30) NOT NULL,
  `TYPE` varchar(20) NOT NULL,
  `IMAGE` varchar(300) NOT NULL,
  `ABOUT` text NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Дамп данных таблицы `recipes`
--

INSERT INTO `recipes` (`ID`, `NAME`, `TYPE`, `IMAGE`, `ABOUT`) VALUES
(1, 'Lemon drizzle cake', 'Cake', '1.jpg', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo\r\n              ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis\r\n              dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies\r\n              nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.\r\n              Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In\r\n              enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum\r\n              felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus\r\n              elementum semper nisi.'),
(4, 'Strawberry Pavlova', 'Cake', '2.jpg', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo\r\n              ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis\r\n              dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies\r\n              nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.\r\n              Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In\r\n              enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum\r\n              felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus\r\n              elementum semper nisi.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `images`
--
ALTER TABLE `images`
 ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `project`
--
ALTER TABLE `project`
 ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `recipes`
--
ALTER TABLE `recipes`
 ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
MODIFY `ID` int(6) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `project`
--
ALTER TABLE `project`
MODIFY `ID` int(6) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `recipes`
--
ALTER TABLE `recipes`
MODIFY `ID` int(6) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 28-Set-2017 às 11:21
-- Versão do servidor: 10.1.25-MariaDB
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `teste`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `categorias`
--

CREATE TABLE `categorias` (
  `cat_id` int(11) NOT NULL,
  `cat_nome` varchar(255) NOT NULL,
  `cat_data_cad` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `categorias`
--

INSERT INTO `categorias` (`cat_id`, `cat_nome`, `cat_data_cad`) VALUES
(1, 'notÃ­cias', '2017-09-27 01:12:53'),
(4, 'esportes', '2017-09-28 02:17:43'),
(5, 'entretenimento', '2017-09-28 02:17:43'),
(6, 'show', '2017-09-28 02:17:43'),
(7, 'teatro', '2017-09-28 02:17:43'),
(8, 'vaqueijada', '2017-09-28 02:17:43');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `usu_id` int(11) NOT NULL,
  `usu_nome` varchar(255) NOT NULL,
  `usu_senha` varchar(32) NOT NULL,
  `usu_email` varchar(60) NOT NULL,
  `usu_cpf` varchar(11) NOT NULL,
  `usu_thumb` varchar(255) DEFAULT NULL,
  `usu_data_nasc` timestamp NULL DEFAULT NULL,
  `usu_data_cad` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `usu_status` double DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`usu_id`, `usu_nome`, `usu_senha`, `usu_email`, `usu_cpf`, `usu_thumb`, `usu_data_nasc`, `usu_data_cad`, `usu_status`) VALUES
(1, 'admin', '6c206cb7beda6ff19b4f21128d95fb6e', 'lessacaires@gmail.com', '00198223595', 'admin.jpg', '2017-09-25 00:35:46', '2017-09-20 11:02:25', 1),
(2, 'lessacaires', '6c206cb7beda6ff19b4f21128d95fb6e', 'lessacaires@gmail.com', '00198223595', NULL, '1980-11-11 03:00:00', '2017-09-24 03:00:00', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`usu_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categorias`
--
ALTER TABLE `categorias`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `usu_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

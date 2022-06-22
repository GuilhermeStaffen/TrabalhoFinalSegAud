-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 21-Jun-2022 às 22:22
-- Versão do servidor: 10.4.17-MariaDB
-- versão do PHP: 7.4.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `trabsegu`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `resumes`
--

CREATE TABLE `resumes` (
  `resume_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `website` text DEFAULT NULL,
  `experience` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `resumes`
--

INSERT INTO `resumes` (`resume_id`, `user_id`, `phone`, `website`, `experience`) VALUES
(6, 1, '(51) 99769-1362', 'teste.com', 'dasdas<script>alert(\"Test\")</script>asdads'),
(7, 1, '(51) 99769-1362', 'teste.com', '<h1>titulo</h1>'),
(8, 1, NULL, NULL, '<p onload=\"alert(\'test\')\">blabla</p>'),
(9, 1, NULL, NULL, '<img src=\"w3javascript.gif\" onload=\"loadImage()\" width=\"100\" height=\"132\">\r\n\r\n<script>\r\nfunction loadImage() {\r\n  alert(\"Image is loaded\");\r\n}\r\n</script>'),
(10, 2, '(51) 99769-1312', 'teste1.com', 'ASDASDASDAS'),
(11, 3, '(51) 99769-1212', 'teste2.com', 'asdas'),
(12, 4, 'asd', 'adsad', 'asdasd');

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `name` text NOT NULL,
  `email` varchar(55) NOT NULL,
  `password` text NOT NULL,
  `is_admin` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `users`
--

INSERT INTO `users` (`user_id`, `name`, `email`, `password`, `is_admin`) VALUES
(1, 'Admin Admin', 'admin@admin.com', 'c7ad44cbad762a5da0a452f9e854fdc1e0e7a52a38015f23f3eab1d80b931dd472634dfac71cd34ebc35d16ab7fb8a90c81f975113d6c7538dc69dd8de9077ec', 1),
(2, 'Teste 1', 'teste1@teste.com', 'e7932f1b609431aae3e96e6ab99d9ebe383ad19b6e866d434ab12193d1c85b3206d8ec79fb490a1887028c18371d5040f59c854d0a326bc9d230bb950e190c16', 0),
(3, 'Teste 2', 'teste2@teste.com', '1bd03a600f03344d0a33858b49111a13c5ab0e7ffe1266730666c65f2ee31752272a2bd1d2ed358e08098aa76e4772fdf92fee2121da3032c27171da8e5777dd', 0),
(4, 'Teste 3', 'teste3@teste.com', 'f099ad9f6c0069458521bb0d5014d806e0fa63419ccadd18bcdcecba8033435f053fb693ae385df01d8b3172a15550616cd6207782c676ab67ee3fdfc8050b93', 0);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `resumes`
--
ALTER TABLE `resumes`
  ADD PRIMARY KEY (`resume_id`),
  ADD KEY `FK_user` (`user_id`);

--
-- Índices para tabela `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `resumes`
--
ALTER TABLE `resumes`
  MODIFY `resume_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de tabela `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 12/06/2025 às 03:20
-- Versão do servidor: 10.4.32-MariaDB
-- Versão do PHP: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `bd_filmes`
--
CREATE DATABASE IF NOT EXISTS `bd_filmes` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `bd_filmes`;

-- --------------------------------------------------------

--
-- Estrutura para tabela `filmes`
--

CREATE TABLE `filmes` (
  `id` int(11) NOT NULL,
  `titulo` varchar(100) NOT NULL,
  `categoria` varchar(100) NOT NULL,
  `avaliacao` int(100) NOT NULL,
  `historia` text NOT NULL,
  `foto` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `filmes`
--

INSERT INTO `filmes` (`id`, `titulo`, `categoria`, `avaliacao`, `historia`, `foto`) VALUES
(1, 'Jurassic Park', 'Aventura', 10, 'Dinossauros correndo atrás de pessoas', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSxPLL4B_XHtZoeIXEk5AS2VWKJVjzYjbgT8Q&s'),
(2, 'Duna: Parte Dois', 'Ficção Científica', 10, 'Paul Atreides se une a Chani e os Fremen enquanto busca vingança contra os conspiradores que destruíram sua família. Enfrentando uma escolha entre o amor de sua vida e o destino do universo, ele deve evitar um futuro terrível que só ele pode prever.', 'https://br.web.img3.acsta.net/pictures/23/05/26/17/47/1900372.jpg'),
(3, 'O Poderoso Chefão', 'Drama', 10, 'O patriarca idoso de uma dinastia do crime organizada transfere o controle de seu império clandestino para seu filho relutante. Um clássico atemporal que explora temas de família, poder e lealdade em um mundo de máfia e traição.', 'https://br.web.img3.acsta.net/medias/nmedia/18/90/93/20/20120876.jpg'),
(4, 'A Chegada', 'Ficção Científica', 8, 'Quando naves alienígenas aterrissam em vários locais ao redor do mundo, uma linguista de elite é recrutada pelo exército para determinar se os alienígenas vêm em paz ou são uma ameaça.', 'https://br.web.img3.acsta.net/pictures/16/10/06/23/05/054278.jpg');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `filmes`
--
ALTER TABLE `filmes`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `filmes`
--
ALTER TABLE `filmes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

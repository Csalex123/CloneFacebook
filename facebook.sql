-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 07-Jun-2018 às 06:09
-- Versão do servidor: 10.1.32-MariaDB
-- PHP Version: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `facebook`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `grupos`
--

CREATE TABLE `grupos` (
  `id_grupo` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `titulo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `grupos_membros`
--

CREATE TABLE `grupos_membros` (
  `id_grupo_membros` int(11) NOT NULL,
  `id_grupo` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `post`
--

CREATE TABLE `post` (
  `id_post` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `conteudo` varchar(1000) CHARACTER SET utf8 NOT NULL,
  `data_inclusao` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `post`
--

INSERT INTO `post` (`id_post`, `id_usuario`, `conteudo`, `data_inclusao`) VALUES
(81, 4, 'ss', '2018-06-06 22:06:55'),
(82, 4, 'ss', '2018-06-06 22:07:51'),
(83, 4, 'adas', '2018-06-06 22:36:43'),
(84, 4, 'as', '2018-06-06 22:37:22'),
(85, 4, '2017', '2018-06-06 22:37:33'),
(86, 4, '2017', '2018-06-06 22:38:49'),
(87, 4, 'dasda', '2018-06-06 22:41:04'),
(88, 4, 'aaaaaaaaaaaaaaaaaaaaaaaaaaa', '2018-06-06 22:41:14'),
(89, 1, 'sssssssssssssss', '2018-06-06 22:41:34'),
(90, 1, 'a', '2018-06-06 23:40:25'),
(91, 1, 'a', '2018-06-06 23:40:26'),
(92, 1, 'alex', '2018-06-06 23:40:29'),
(93, 1, 'a', '2018-06-06 23:40:36'),
(94, 1, 'a', '2018-06-06 23:40:41'),
(95, 1, 'a', '2018-06-06 23:41:52'),
(96, 1, 'a', '2018-06-06 23:43:27'),
(97, 1, 'a', '2018-06-07 00:00:18'),
(98, 1, 'a', '2018-06-07 00:00:20'),
(99, 1, 'aa', '2018-06-07 00:00:54'),
(100, 1, 'ss', '2018-06-07 00:01:43'),
(101, 1, '2017', '2018-06-07 00:04:02'),
(102, 7, 's', '2018-06-07 00:08:01'),
(103, 7, 'Beleza', '2018-06-07 00:08:04'),
(104, 7, 'Postado\r\n', '2018-06-07 00:08:21'),
(105, 8, 'Meu primeiro post', '2018-06-07 00:16:55');

-- --------------------------------------------------------

--
-- Estrutura da tabela `posts_comentarios`
--

CREATE TABLE `posts_comentarios` (
  `id_comentario` int(11) NOT NULL,
  `id_post` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `data_criacao` datetime NOT NULL,
  `texto` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `posts_likes`
--

CREATE TABLE `posts_likes` (
  `id_like` int(11) NOT NULL,
  `id_post` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `relacionamentos`
--

CREATE TABLE `relacionamentos` (
  `id_relacionamento` int(11) NOT NULL,
  `usuario_de` int(11) NOT NULL,
  `usuario_para` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usuario` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `sexo` varchar(1) NOT NULL,
  `senha` text NOT NULL,
  `data_nascimento` varchar(12) DEFAULT NULL,
  `sobrenome` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `email`, `nome`, `sexo`, `senha`, `data_nascimento`, `sobrenome`) VALUES
(8, 'alex@teste.com', 'Alex', 'M', 'e10adc3949ba59abbe56e057f20f883e', '1111-11-11', 'Ricardo'),
(9, 'joao@teste.com', 'Joao', 'M', 'e10adc3949ba59abbe56e057f20f883e', '1111-11-11', 'Silva'),
(10, 'ale2@teste.com', 'Alex', 'M', 'e10adc3949ba59abbe56e057f20f883e', '1111-11-11', 'Ricardo'),
(11, 'ale1@teste.com', 'Alex ', 'M', 'e10adc3949ba59abbe56e057f20f883e', '1111-11-11', 'Pedro');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios_seguidor`
--

CREATE TABLE `usuarios_seguidor` (
  `id_usuario_seguidor` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `seguindo_id_usuario` int(11) NOT NULL,
  `data_registro` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `usuarios_seguidor`
--

INSERT INTO `usuarios_seguidor` (`id_usuario_seguidor`, `id_usuario`, `seguindo_id_usuario`, `data_registro`) VALUES
(26, 9, 10, '2018-06-07 00:54:25'),
(28, 9, 11, '2018-06-07 00:54:46');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `grupos`
--
ALTER TABLE `grupos`
  ADD PRIMARY KEY (`id_grupo`);

--
-- Indexes for table `grupos_membros`
--
ALTER TABLE `grupos_membros`
  ADD PRIMARY KEY (`id_grupo_membros`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id_post`);

--
-- Indexes for table `posts_comentarios`
--
ALTER TABLE `posts_comentarios`
  ADD PRIMARY KEY (`id_comentario`);

--
-- Indexes for table `posts_likes`
--
ALTER TABLE `posts_likes`
  ADD PRIMARY KEY (`id_like`);

--
-- Indexes for table `relacionamentos`
--
ALTER TABLE `relacionamentos`
  ADD PRIMARY KEY (`id_relacionamento`);

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuario`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `usuarios_seguidor`
--
ALTER TABLE `usuarios_seguidor`
  ADD PRIMARY KEY (`id_usuario_seguidor`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `grupos`
--
ALTER TABLE `grupos`
  MODIFY `id_grupo` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `grupos_membros`
--
ALTER TABLE `grupos_membros`
  MODIFY `id_grupo_membros` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `id_post` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=106;

--
-- AUTO_INCREMENT for table `posts_comentarios`
--
ALTER TABLE `posts_comentarios`
  MODIFY `id_comentario` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `posts_likes`
--
ALTER TABLE `posts_likes`
  MODIFY `id_like` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `relacionamentos`
--
ALTER TABLE `relacionamentos`
  MODIFY `id_relacionamento` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `usuarios_seguidor`
--
ALTER TABLE `usuarios_seguidor`
  MODIFY `id_usuario_seguidor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

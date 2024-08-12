-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 12-Ago-2024 às 13:35
-- Versão do servidor: 10.4.19-MariaDB
-- versão do PHP: 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `db_lobo`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtos`
--

CREATE TABLE `produtos` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `tipo` varchar(255) NOT NULL,
  `descricao` text NOT NULL,
  `valor_unitario` decimal(10,2) NOT NULL,
  `quantidade_estoque` int(11) NOT NULL,
  `cor` varchar(255) NOT NULL,
  `disponivel` tinyint(1) NOT NULL DEFAULT 1,
  `link_imagem` varchar(255) NOT NULL,
  `foto` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `produtos`
--

INSERT INTO `produtos` (`id`, `nome`, `tipo`, `descricao`, `valor_unitario`, `quantidade_estoque`, `cor`, `disponivel`, `link_imagem`, `foto`) VALUES
(1, 'arroz', '1', 'arroz tipo 1 branco', '6.00', 5, '', 0, 'https://www.bing.com/aclick?ld=e8ImE71mBYh3F2i33j2aXZ3jVUCUy0leiKNPKThSyaIEVFQ4U3vPugrUrYD55uJQd_8dt0K3xTN6bgI6qZM_9CmXIKYHo8MAx9h_n5JKMGNmSSdtwOHNYp0reoJGyAZ2ymTbFEZg6DQQJEcjfzWkIvavzo3L_5eTIBXhgDMx89f334OcVtOoU8gZHxF_IIUnS9JEkajQ&u=aHR0cHMlM2ElMmYlMmZ3d', ''),
(2, 'batata', '2', 'batata lisa', '1.00', 23, 'amarelo', 0, '', ''),
(3, 'batata', '2', 'batata lisa', '1.00', 23, 'amarelo', 0, '', ''),
(4, 'batata', '', '', '0.00', 0, '', 0, '', ''),
(5, 'batata', '', '', '0.00', 0, '', 0, '', 'batata.jpg'),
(6, 'batata', '', '', '0.00', 0, '', 0, '', ''),
(7, 'agua', '1', 'agua garrafa 600 ml', '1.00', 10, '', 0, 'https://th.bing.com/th/id/R.b785c27f84785a1c2d497a50459e9c89?rik=bq4n84pwNyaiMQ&pid=ImgRaw&r=0', ''),
(8, 'agua', '1', 'agau 600 ml', '3.00', 23, '', 0, 'https://th.bing.com/th/id/R.b785c27f84785a1c2d497a50459e9c89?rik=bq4n84pwNyaiMQ&pid=ImgRaw&r=0', ''),
(9, 'batata', 'horta', 'batata lavada lisa', '4.00', 10, 'amarela', 0, 'https://acientistaagricola.pt/wp-content/uploads/2019/04/potatoes-411975_960_720.jpg', ''),
(10, 'potato', 'horta', 'potato lisa', '3.00', 3, 'amarela', 0, 'https://acientistaagricola.pt/wp-content/uploads/2019/04/potatoes-411975_960_720.jpg', ''),
(11, 'potato', 'horta', 'potato lisa', '3.00', 3, 'amarela', 0, 'https://acientistaagricola.pt/wp-content/uploads/2019/04/potatoes-411975_960_720.jpg', 'batata.jpg'),
(12, 'potato', 'horta', 'potato lisa', '3.00', 3, 'amarela', 0, 'https://acientistaagricola.pt/wp-content/uploads/2019/04/potatoes-411975_960_720.jpg', 'batata.jpg'),
(13, 'Batatona', 'horta', 'batata lisa lavada amarela', '10.00', 100, 'amarela', 0, 'https://guiadacozinha.com.br/wp-content/uploads/2020/11/pexels-marco-antonio-victorino-22876-1024x720.jpg', 'batata.jpg'),
(14, 'linguiça', 'açougue', 'linguiça temperada', '25.00', 100, 'rosa', 0, 'https://bing.com/th?id=OSK.830844b4c265829c5de3210df56655d9', 'lingua.jpeg');

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
--

CREATE TABLE `users` (
  `id` int(6) UNSIGNED NOT NULL,
  `login` varchar(30) NOT NULL,
  `senha` varchar(255) NOT NULL,
  `reg_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `users`
--

INSERT INTO `users` (`id`, `login`, `senha`, `reg_date`) VALUES
(1, 'lobo', '$2y$10$aH6jfP3zkJWY8HMdEamtz.XLfJAEEZ9evhRf.X/YQchGhypOHMYxW', '2024-07-30 12:19:28'),
(2, 'chico', '$2y$10$PNt3tTDe44xg2rvmsCJez.sF08oKl.Zgil1qRMrWcaIqzUY/juCvC', '2024-07-30 12:20:40'),
(3, 'otoni', '$2y$10$JyT9PtqIhEBeRP73EC305.v5W6OaRRoa9LJxjmSc3M.yWQcQjTA/m', '2024-07-30 17:29:30'),
(4, 'nada', '1234', '2024-07-31 14:24:01'),
(5, 'annaLuiza', '1234', '2024-07-31 14:25:50'),
(6, 'tinho', 'senha1234', '2024-08-05 14:13:49'),
(7, 'banana', 'banana', '2024-08-05 14:17:49'),
(8, 'abc', '1234', '2024-08-05 14:18:27'),
(9, '5segundos', 'umamaquina', '2024-08-05 14:19:13'),
(10, 'daniel_beautiful', '1234', '2024-08-06 11:09:02'),
(11, 'paçoca', 'semsenha', '2024-08-06 11:45:30'),
(12, 'annaluiza', '1234', '2024-08-06 13:28:28'),
(13, 'otoni', '1234', '2024-08-06 17:32:44'),
(14, 'otoni', '12345', '2024-08-06 18:07:00'),
(15, 'barros', '1234', '2024-08-06 20:06:47'),
(16, 'gustavo', 'senha123', '2024-08-08 20:18:14');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `produtos`
--
ALTER TABLE `produtos`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `produtos`
--
ALTER TABLE `produtos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de tabela `users`
--
ALTER TABLE `users`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

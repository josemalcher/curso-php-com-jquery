-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tempo de Geração: 
-- Versão do Servidor: 5.5.24-log
-- Versão do PHP: 5.3.13

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Banco de Dados: `jquery`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `pessoa`
--

CREATE TABLE IF NOT EXISTS `pessoa` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `telefone` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=12 ;

--
-- Extraindo dados da tabela `pessoa`
--

INSERT INTO `pessoa` (`id`, `nome`, `email`, `telefone`) VALUES
(4, 'Alexandre Cardoso', 'contato@asolucoesweb.com.br', '1644444444'),
(5, 'Marcos Santos', 'xandecar@hotmail.com', '1622222222'),
(6, 'Alexandre Cardoso', 'contato@asolucoesweb.com.br', '1644444444'),
(7, 'Juliana Pacheco', 'xandecar@hotmail.com', '1622222222'),
(8, 'Alexandre Cardoso', 'contato@asolucoesweb.com.br', '1644444444'),
(9, 'Alexandre Cardoso', 'contato@asolucoesweb.com.br', '1644444444'),
(10, 'Alexandre Cardoso', 'contato@asolucoesweb.com.br', '1644444444'),
(11, 'JoÃ£o Carlos Marciano', 'contato@asolucoesweb.com.br', '1644444444');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_aluno`
--

CREATE TABLE IF NOT EXISTS `tb_aluno` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `aluno_nome` varchar(50) DEFAULT NULL,
  `aluno_email` varchar(50) DEFAULT NULL,
  `aluno_senha` varchar(50) DEFAULT NULL,
  `aluno_classe` int(11) DEFAULT NULL,
  `aluno_idade` int(5) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=11 ;

--
-- Extraindo dados da tabela `tb_aluno`
--

INSERT INTO `tb_aluno` (`id`, `aluno_nome`, `aluno_email`, `aluno_senha`, `aluno_classe`, `aluno_idade`) VALUES
(3, 'Alexandre Cardoso', 'contato@asolucoesweb.com.br', '81dc9bdb52d04dc20036dbd8313ed055', 1, 17),
(4, 'Joao Pedro', 'joao@email.com.br', '202cb962ac59075b964b07152d234b70', 1, 17),
(5, 'Marcio', 'marcio@email.com.br', 'marcio123', 3, 18),
(6, 'Juliana', 'juliana@email.com.br', 'juliana123', 1, 17),
(7, 'Marcelo', 'marcelo@email.com.br', 'marcelo123', 1, 17),
(8, 'Sandra', 'sandra@email.com.br', 'sabdra123', 1, 18),
(9, 'Marieta', 'marieta@email.com.br', 'marieta123', 2, 17),
(10, 'Juca', 'juca@email.com.br', 'juca123', 3, 18);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_classe`
--

CREATE TABLE IF NOT EXISTS `tb_classe` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `classe_serie` int(11) DEFAULT NULL,
  `classe_professor` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=15 ;

--
-- Extraindo dados da tabela `tb_classe`
--

INSERT INTO `tb_classe` (`id`, `classe_serie`, `classe_professor`) VALUES
(6, 1, 1),
(12, 2, 1),
(13, 3, 1),
(14, 1, 2);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_escola_resposta_mensagem`
--

CREATE TABLE IF NOT EXISTS `tb_escola_resposta_mensagem` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `escola_mensagem_titulo` varchar(50) DEFAULT NULL,
  `escola_mensagem_data` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `escola_mensagem_conteudo` text,
  `escola_mensagem_professor` int(11) DEFAULT NULL,
  `escola_mensagem_tipo_mensagem` int(11) DEFAULT NULL,
  `escola_mensagem_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=57 ;

--
-- Extraindo dados da tabela `tb_escola_resposta_mensagem`
--

INSERT INTO `tb_escola_resposta_mensagem` (`id`, `escola_mensagem_titulo`, `escola_mensagem_data`, `escola_mensagem_conteudo`, `escola_mensagem_professor`, `escola_mensagem_tipo_mensagem`, `escola_mensagem_id`) VALUES
(50, 'RE:teste', '2013-04-01 07:26:03', '<p>dssdsssss</p>', 1, 2, 2),
(51, 'RE:teste', '2013-04-01 07:26:17', '<p>dsdsdssddddd</p>', 1, 2, 3),
(52, 'RE:Prova amanha', '2013-04-01 07:26:27', '<p>Teste de mensagemddd</p>', 1, 1, 1),
(53, 'RE:Teste vocacional', '2013-04-01 07:26:48', '<p>testedddd</p>', 1, 1, 3),
(54, 'RE:teste', '2013-04-01 07:27:06', '<p>dsdsdsdsdddd</p>', 1, 2, 5),
(55, 'RE:teste', '2013-04-01 07:30:10', '<p>dsdsdsddd</p>', 1, 2, 4),
(56, 'RE:Prova amanha', '2013-04-04 02:15:41', '<p>Teste de mensagedsdsdsdm</p>', 1, 0, 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_log_aluno`
--

CREATE TABLE IF NOT EXISTS `tb_log_aluno` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `log_aluno` int(11) DEFAULT NULL,
  `log_data` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=19 ;

--
-- Extraindo dados da tabela `tb_log_aluno`
--

INSERT INTO `tb_log_aluno` (`id`, `log_aluno`, `log_data`) VALUES
(1, 3, '2013-04-09 04:02:32'),
(2, 3, '2013-04-09 04:02:42'),
(3, 3, '2013-04-09 04:03:48'),
(4, 3, '2013-04-09 04:04:50'),
(5, 3, '2013-04-09 04:06:19'),
(6, 3, '2013-04-10 22:45:39'),
(7, 3, '2013-04-11 00:16:25'),
(8, 3, '2013-04-11 00:53:03'),
(9, 3, '2013-04-11 01:34:38'),
(10, 3, '2013-04-11 01:58:12'),
(11, 4, '2013-04-11 04:23:14'),
(12, 4, '2013-04-11 04:28:13'),
(13, 3, '2013-04-12 01:55:43'),
(14, 3, '2013-04-12 02:16:49'),
(15, 3, '2013-04-12 02:34:43'),
(16, 3, '2013-04-12 02:45:12'),
(17, 3, '2013-04-12 03:45:10'),
(18, 3, '2013-04-12 04:18:39');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_log_professor`
--

CREATE TABLE IF NOT EXISTS `tb_log_professor` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `log_professor` int(11) DEFAULT NULL,
  `log_data` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=112 ;

--
-- Extraindo dados da tabela `tb_log_professor`
--

INSERT INTO `tb_log_professor` (`id`, `log_professor`, `log_data`) VALUES
(2, 1, '2013-02-24 02:45:44'),
(3, 2, '2013-02-24 02:46:14'),
(4, 1, '2013-02-24 05:33:08'),
(5, 1, '2013-02-24 06:21:20'),
(6, 1, '2013-02-24 06:22:00'),
(7, 1, '2013-02-24 06:22:27'),
(8, 1, '2013-02-24 06:23:35'),
(9, 1, '2013-02-24 14:08:23'),
(10, 1, '2013-02-24 14:10:36'),
(11, 1, '2013-02-24 14:11:07'),
(12, 1, '2013-02-24 14:11:41'),
(13, 1, '2013-02-24 14:13:40'),
(14, 1, '2013-02-24 14:44:18'),
(15, 2, '2013-02-24 14:44:45'),
(16, 1, '2013-03-02 18:14:55'),
(17, 1, '2013-03-02 18:15:08'),
(18, 1, '2013-03-02 18:29:40'),
(19, 1, '2013-03-02 18:48:40'),
(20, 1, '2013-03-02 18:49:02'),
(21, 1, '2013-03-02 18:49:17'),
(22, 1, '2013-03-02 18:51:45'),
(23, 1, '2013-03-03 00:04:31'),
(24, 1, '2013-03-03 00:07:38'),
(25, 1, '2013-03-03 00:23:48'),
(26, 1, '2013-03-03 00:24:20'),
(27, 2, '2013-03-03 00:24:41'),
(28, 1, '2013-03-03 01:46:18'),
(29, 1, '2013-03-04 02:12:36'),
(30, 1, '2013-03-15 02:00:20'),
(31, 1, '2013-03-15 02:39:56'),
(32, 1, '2013-03-15 15:45:37'),
(33, 1, '2013-03-15 18:19:21'),
(34, 1, '2013-03-15 21:32:05'),
(35, 2, '2013-03-16 02:31:18'),
(36, 1, '2013-03-16 02:44:56'),
(37, 2, '2013-03-16 02:49:18'),
(38, 1, '2013-03-16 02:49:59'),
(39, 1, '2013-03-16 14:48:20'),
(40, 1, '2013-03-16 16:38:50'),
(41, 1, '2013-03-20 14:37:42'),
(42, 1, '2013-03-20 21:38:57'),
(43, 1, '2013-03-20 21:40:22'),
(44, 1, '2013-03-20 21:41:07'),
(45, 1, '2013-03-20 21:51:50'),
(46, 1, '2013-03-20 22:23:45'),
(47, 1, '2013-03-20 22:30:55'),
(48, 1, '2013-03-20 23:12:59'),
(49, 1, '2013-03-21 00:41:31'),
(50, 1, '2013-03-21 03:51:48'),
(51, 1, '2013-03-21 16:36:54'),
(52, 1, '2013-03-21 17:03:21'),
(53, 1, '2013-03-21 22:12:27'),
(54, 1, '2013-03-22 02:58:12'),
(55, 1, '2013-03-23 22:48:38'),
(56, 1, '2013-03-23 23:02:16'),
(57, 1, '2013-03-25 16:23:58'),
(58, 1, '2013-03-25 22:45:17'),
(59, 1, '2013-03-25 23:09:37'),
(60, 1, '2013-03-26 01:30:19'),
(61, 1, '2013-03-26 16:33:37'),
(62, 1, '2013-03-26 18:07:07'),
(63, 1, '2013-03-26 23:05:03'),
(64, 1, '2013-03-26 23:20:59'),
(65, 1, '2013-03-27 01:54:51'),
(66, 1, '2013-03-27 02:32:37'),
(67, 1, '2013-03-27 17:52:53'),
(68, 1, '2013-03-28 02:17:33'),
(69, 1, '2013-03-28 03:13:27'),
(70, 1, '2013-03-28 03:52:15'),
(71, 1, '2013-03-28 04:39:37'),
(72, 2, '2013-03-29 00:19:03'),
(73, 1, '2013-03-29 00:19:25'),
(74, 1, '2013-03-29 00:39:41'),
(75, 1, '2013-03-29 04:01:17'),
(76, 1, '2013-03-29 04:31:34'),
(77, 1, '2013-03-29 05:20:01'),
(78, 1, '2013-03-29 13:20:21'),
(79, 1, '2013-03-29 20:48:28'),
(80, 1, '2013-03-30 01:23:40'),
(81, 1, '2013-03-31 01:01:28'),
(82, 1, '2013-03-31 04:03:28'),
(83, 1, '2013-03-31 16:22:20'),
(84, 1, '2013-03-31 23:25:49'),
(85, 1, '2013-04-01 01:44:09'),
(86, 1, '2013-04-01 02:28:02'),
(87, 1, '2013-04-01 02:41:57'),
(88, 1, '2013-04-01 04:25:02'),
(89, 1, '2013-04-01 04:28:10'),
(90, 1, '2013-04-01 04:29:51'),
(91, 1, '2013-04-02 22:04:38'),
(92, 1, '2013-04-02 22:36:53'),
(93, 1, '2013-04-03 22:47:53'),
(94, 1, '2013-04-03 23:37:34'),
(95, 1, '2013-04-05 03:42:46'),
(96, 1, '2013-04-05 03:58:53'),
(97, 1, '2013-04-05 20:09:39'),
(98, 1, '2013-04-05 20:11:34'),
(99, 1, '2013-04-05 20:18:21'),
(100, 1, '2013-04-05 20:21:20'),
(101, 1, '2013-04-05 20:21:56'),
(102, 1, '2013-04-05 20:22:53'),
(103, 1, '2013-04-05 20:23:18'),
(104, 1, '2013-04-05 20:24:07'),
(105, 1, '2013-04-05 20:25:07'),
(106, 1, '2013-04-07 23:14:38'),
(107, 1, '2013-04-08 23:45:54'),
(108, 1, '2013-04-09 03:32:53'),
(109, 1, '2013-04-09 03:43:03'),
(110, 1, '2013-04-09 03:46:10'),
(111, 1, '2013-04-12 04:20:26');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_materia`
--

CREATE TABLE IF NOT EXISTS `tb_materia` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `materia_nome` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Extraindo dados da tabela `tb_materia`
--

INSERT INTO `tb_materia` (`id`, `materia_nome`) VALUES
(1, 'Matematica'),
(2, 'Geografia'),
(3, 'Quimica');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_mensagem_aluno`
--

CREATE TABLE IF NOT EXISTS `tb_mensagem_aluno` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `aluno_mensagem_titulo` varchar(50) DEFAULT NULL,
  `aluno_mensagem_professor` int(11) DEFAULT NULL,
  `aluno_mensagem_data` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `aluno_mensagem_texto` text,
  `aluno_mensagem_lido` int(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Extraindo dados da tabela `tb_mensagem_aluno`
--

INSERT INTO `tb_mensagem_aluno` (`id`, `aluno_mensagem_titulo`, `aluno_mensagem_professor`, `aluno_mensagem_data`, `aluno_mensagem_texto`, `aluno_mensagem_lido`) VALUES
(1, 'sasa', 1, '2013-04-04 02:13:00', '<p>sasa</p>', 2),
(2, 'dsdsds', 1, '2013-04-03 23:13:46', '<p>dsdsd</p>', 2),
(3, 'sasasasa', 1, '2013-04-04 03:15:24', '<p>sasasa</p>', 2),
(4, 'sasa', 1, '2013-04-09 03:45:11', '<p>sasasa</p>', 2);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_mensagem_escola`
--

CREATE TABLE IF NOT EXISTS `tb_mensagem_escola` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `escola_mensagem_titulo` varchar(50) DEFAULT NULL,
  `escola_mensagem_data` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `escola_mensagem_professor` int(11) DEFAULT NULL,
  `escola_mensagem_texto` text,
  `escola_mensagem_lido` int(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=16 ;

--
-- Extraindo dados da tabela `tb_mensagem_escola`
--

INSERT INTO `tb_mensagem_escola` (`id`, `escola_mensagem_titulo`, `escola_mensagem_data`, `escola_mensagem_professor`, `escola_mensagem_texto`, `escola_mensagem_lido`) VALUES
(13, 'asas', '2013-04-04 02:15:05', 1, '<p>asas</p>', 2),
(14, 'sasa', '2013-04-04 06:15:15', 1, '<p>sasa</p>', 2),
(15, 'dsds', '2013-04-09 06:45:02', 1, '<p>dsdsds</p>', 2);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_nota`
--

CREATE TABLE IF NOT EXISTS `tb_nota` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nota` decimal(4,2) DEFAULT NULL,
  `nota_aluno` int(11) DEFAULT NULL,
  `nota_professor` int(11) DEFAULT NULL,
  `nota_materia` int(11) DEFAULT NULL,
  `nota_mes` char(2) DEFAULT NULL,
  `nota_ano` char(4) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=53 ;

--
-- Extraindo dados da tabela `tb_nota`
--

INSERT INTO `tb_nota` (`id`, `nota`, `nota_aluno`, `nota_professor`, `nota_materia`, `nota_mes`, `nota_ano`) VALUES
(47, '5.50', 3, 1, 1, '01', '2013'),
(48, '6.80', 3, 1, 1, '02', '2013'),
(52, '3.00', 3, 1, 1, '03', '2013');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_particular_professor`
--

CREATE TABLE IF NOT EXISTS `tb_particular_professor` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `particular_professor_nome` int(11) DEFAULT NULL,
  `particular_professor_data` timestamp NULL DEFAULT NULL,
  `particular_professor_titulo` varchar(50) DEFAULT NULL,
  `particular_professor_mensagem` text,
  `particular_professor_lido` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Extraindo dados da tabela `tb_particular_professor`
--

INSERT INTO `tb_particular_professor` (`id`, `particular_professor_nome`, `particular_professor_data`, `particular_professor_titulo`, `particular_professor_mensagem`, `particular_professor_lido`) VALUES
(1, 1, '2013-03-31 01:00:00', 'Prova amanha', 'Teste de mensagem', 1),
(4, 1, '2013-03-31 01:00:00', 'Sem aula', 'teste', 1),
(6, 1, '2013-03-31 01:00:00', 'Teste', 'sasasa', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_professor`
--

CREATE TABLE IF NOT EXISTS `tb_professor` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `professor_nome` varchar(50) DEFAULT NULL,
  `professor_email` varchar(50) DEFAULT NULL,
  `professor_senha` varchar(50) DEFAULT NULL,
  `professor_materia` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Extraindo dados da tabela `tb_professor`
--

INSERT INTO `tb_professor` (`id`, `professor_nome`, `professor_email`, `professor_senha`, `professor_materia`) VALUES
(1, 'Alexandre Cardoso', 'contato@asolucoesweb.com.br', '827ccb0eea8a706c4c34a16891f84e7b', 5),
(2, 'Joao', 'joao@email.com.br', '202cb962ac59075b964b07152d234b70', 2);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_publica_professor`
--

CREATE TABLE IF NOT EXISTS `tb_publica_professor` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `publica_professor_data` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `publica_professor_titulo` varchar(100) DEFAULT NULL,
  `publica_professor_mensagem` text,
  `publica_professor_lido` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Extraindo dados da tabela `tb_publica_professor`
--

INSERT INTO `tb_publica_professor` (`id`, `publica_professor_data`, `publica_professor_titulo`, `publica_professor_mensagem`, `publica_professor_lido`) VALUES
(3, '2013-03-31 23:29:27', 'teste', 'dsdsdss', 1),
(5, '2013-04-01 04:27:02', 'teste', 'dsdsdsds', 1),
(6, '2013-04-01 02:14:24', 'teste', 'sdsdsdsds', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_serie`
--

CREATE TABLE IF NOT EXISTS `tb_serie` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `serie_nome` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Extraindo dados da tabela `tb_serie`
--

INSERT INTO `tb_serie` (`id`, `serie_nome`) VALUES
(1, 'Primeira serie A'),
(2, 'Primeira serie B'),
(3, 'Primeira serie C'),
(4, 'Segunda serie D'),
(5, 'Segunda serie C');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

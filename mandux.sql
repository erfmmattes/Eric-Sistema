-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 05-Abr-2021 às 02:29
-- Versão do servidor: 10.4.17-MariaDB
-- versão do PHP: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `mandux`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cadastros`
--

CREATE TABLE `cadastros` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `eleitor` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(190) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `foto` varchar(190) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `endereco` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `telefone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `senha` varchar(190) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `aniversario` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `localidade` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `profissao` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `cadastros`
--

INSERT INTO `cadastros` (`id`, `eleitor`, `email`, `foto`, `endereco`, `telefone`, `senha`, `aniversario`, `localidade`, `profissao`, `created_at`, `updated_at`) VALUES
(9, 'eric', 'ericmattes@hotmail.com', NULL, NULL, '(73) 63736-3764', 'teste', NULL, NULL, NULL, '2021-04-04 13:41:15', '2021-04-04 13:41:15'),
(10, 'ewew', 'wew', NULL, NULL, '(34) 34343-3444', 'ew', NULL, NULL, NULL, '2021-04-04 13:42:11', '2021-04-04 13:42:11'),
(11, 'qqq', 'rr', 'avatars/uGfn090bcgpwOHPWDQzK8bq1xUkgdYOOSZwP1jRJ.jpeg', NULL, '(43) 43434-3434', 'r3r3', NULL, NULL, NULL, '2021-04-04 13:42:56', '2021-04-04 13:42:56'),
(12, 'rerere', 'ererer', NULL, NULL, '(34) 34343-4343', 'ererer', NULL, NULL, NULL, '2021-04-04 13:43:37', '2021-04-04 13:43:37'),
(13, 'er', 'erer', 'C:\\xampp\\tmp\\php35DF.tmp', NULL, '(43) 43343-5353', 'ere', NULL, NULL, NULL, '2021-04-04 13:44:48', '2021-04-04 13:44:48'),
(14, 'ewewewew', 'weqweqewe', 'avatars/EUklRpjaHH06TVW8ojnlfoLFG2I8S9qdX6kkzWch.jpeg', NULL, '(32) 32323-2323', '23232', NULL, NULL, NULL, '2021-04-04 13:48:30', '2021-04-04 13:48:30'),
(15, 'rere', 'erer', 'avatars/p5f1DaU6PBgrylabJUeYMhkURjlJpERMXlMhKBCW.jpeg', NULL, '(34) 34343-4343', 'erer', NULL, NULL, NULL, '2021-04-04 13:59:10', '2021-04-04 13:59:10'),
(16, 'eric 2', 'rte', 'avatars/O268Zq7ZlsvmsepGpqsc2x8ksygX1QhvxJWLmsyO.jpeg', NULL, '(72) 65244-4242', 'yyet', NULL, NULL, NULL, '2021-04-04 14:11:54', '2021-04-04 14:11:54'),
(17, 'ewr', 'ere', 'avatars/CuvAECAYqQGXbZcEWx8JX6E0sAjKrTW0ohY6rLLT.jpeg', NULL, '(43) 43434-3434', 'erer', NULL, NULL, NULL, '2021-04-04 14:47:32', '2021-04-04 14:47:32'),
(18, 'teste', 'ericmattes@hotmail.com', 'public/avatars/Ei2Gfb05Uk96mfm42eJTbkdtfDuteiZp6EYUi6uP.jpeg', NULL, '(73) 65343-3373', '98726', NULL, NULL, NULL, '2021-04-04 15:50:32', '2021-04-04 15:50:32');

-- --------------------------------------------------------

--
-- Estrutura da tabela `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2019_08_19_000000_create_failed_jobs_table', 1),
(3, '2020_06_10_014511_create_posts_table', 1),
(4, '2014_10_12_100000_create_password_resets_table', 2),
(5, '2020_08_14_184540_create_cadastros_table', 3);

-- --------------------------------------------------------

--
-- Estrutura da tabela `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('ericmattes@hotmail.com', '$2y$10$EuMiGaGU2H2I0EuUbWfjgOBCFeGxn2cY3IZnMicuqU4qGXbxnKbzO', '2020-08-17 17:01:19');

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `telefone` varchar(190) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `foto` varchar(190) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `telefone`, `foto`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'eric', 'ericmattes@hotmail.com', NULL, '(51)99644-1633', 'Nui3l6RPE4KehlCdROHbu69nr9QcfEGJocHQqMRQ.jpeg', '$2y$10$JeU7VI3PoP8AHe5pHvPA6OutFDqpDfZXSiLnKWm26S/TZRPN6yIRq', NULL, '2020-06-11 15:00:43', '2021-04-05 03:28:56'),
(9, 'admin', 'admin@admin.com', NULL, '(51) 99987-6543', 'TtaqOAEXmEzKSIlsICPtcR6zQxaakAlOXqZsmzgD.jpeg', '$2y$10$A0j4ylJS4U50fKoO2hUQzurEFNlXCsCW3NBegx/0horQq8cqKFNLy', NULL, '2021-04-05 03:07:58', '2021-04-05 03:14:59');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `cadastros`
--
ALTER TABLE `cadastros`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`(191));

--
-- Índices para tabela `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `cadastros`
--
ALTER TABLE `cadastros`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT de tabela `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

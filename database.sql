-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Oct 15, 2020 at 07:48 PM
-- Server version: 5.7.26
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `db_name`
--

-- --------------------------------------------------------

--
-- Table structure for table `posizione_lavoro`
--

CREATE TABLE `posizione_lavoro` (
  `id_job` int(3) UNSIGNED NOT NULL,
  `job` varchar(256) DEFAULT NULL,
  `id_job_sector` int(3) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `posizione_lavoro`
--

INSERT INTO `posizione_lavoro` (`id_job`, `job`, `id_job_sector`) VALUES
(1, 'Poliziotto', 1),
(2, 'Sviluppatore Web', 2),
(3, 'Cameriere', 3),
(4, 'Front-end', 2),
(5, 'Back-end', 2);

-- --------------------------------------------------------

--
-- Table structure for table `province`
--

CREATE TABLE `province` (
  `id_pro` int(4) UNSIGNED NOT NULL,
  `nome_provincia` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `province`
--

INSERT INTO `province` (`id_pro`, `nome_provincia`) VALUES
(80, 'Agrigento'),
(58, 'Alessandria'),
(51, 'Ancona'),
(89, 'Arezzo'),
(52, 'Ascoli Piceno'),
(59, 'Asti'),
(12, 'Avellino'),
(66, 'Bari'),
(67, 'Barletta-Andria-Trani'),
(104, 'Belluno'),
(13, 'Benevento'),
(39, 'Bergamo'),
(60, 'Biella'),
(17, 'Bologna'),
(99, 'Bolzano/Bozen'),
(40, 'Brescia'),
(68, 'Brindisi'),
(72, 'Cagliari'),
(81, 'Caltanissetta'),
(56, 'Campobasso'),
(73, 'Carbonia-Iglesias'),
(14, 'Caserta'),
(82, 'Catania'),
(7, 'Catanzaro'),
(1, 'Chieti'),
(41, 'Como'),
(8, 'Cosenza'),
(42, 'Cremona'),
(9, 'Crotone'),
(61, 'Cuneo'),
(83, 'Enna'),
(53, 'Fermo'),
(18, 'Ferrara'),
(90, 'Firenze'),
(69, 'Foggia'),
(19, 'Forli-Cesena'),
(30, 'Frosinone'),
(35, 'Genova'),
(26, 'Gorizia'),
(91, 'Grosseto'),
(36, 'Imperia'),
(57, 'Isernia'),
(2, "L\'Aquila"),
(37, 'La Spezia'),
(31, 'Latina'),
(70, 'Lecce'),
(43, 'Lecco'),
(92, 'Livorno'),
(44, 'Lodi'),
(93, 'Lucca'),
(54, 'Macerata'),
(45, 'Mantova'),
(94, 'Massa-Carrara'),
(5, 'Matera'),
(74, 'Medio Campidano'),
(84, 'Messina'),
(46, 'Milano'),
(20, 'Modena'),
(47, 'Monza e della Brianza'),
(15, 'Napoli'),
(62, 'Novara'),
(75, 'Nuoro'),
(76, 'Ogliastra'),
(77, 'Olbia-Tempio'),
(78, 'Oristano'),
(105, 'Padova'),
(85, 'Palermo'),
(21, 'Parma'),
(48, 'Pavia'),
(101, 'Perugia'),
(55, 'Pesaro e Urbino'),
(3, 'Pescara'),
(22, 'Piacenza'),
(95, 'Pisa'),
(96, 'Pistoia'),
(27, 'Pordenone'),
(6, 'Potenza'),
(97, 'Prato'),
(86, 'Ragusa'),
(23, 'Ravenna'),
(10, 'Reggio di Calabria'),
(24, "Reggio nell\'Emilia"),
(32, 'Rieti'),
(25, 'Rimini'),
(33, 'Roma'),
(106, 'Rovigo'),
(16, 'Salerno'),
(79, 'Sassari'),
(38, 'Savona'),
(98, 'Siena'),
(87, 'Siracusa'),
(49, 'Sondrio'),
(71, 'Taranto'),
(4, 'Teramo'),
(102, 'Terni'),
(63, 'Torino'),
(88, 'Trapani'),
(100, 'Trento'),
(107, 'Treviso'),
(28, 'Trieste'),
(29, 'Udine'),
(103, "Valle d\'Aosta"),
(50, 'Varese'),
(108, 'Venezia'),
(64, 'Verbano-Cusio-Ossola'),
(65, 'Vercelli'),
(109, 'Verona'),
(11, 'Vibo Valentia'),
(110, 'Vicenza'),
(34, 'Viterbo');

-- --------------------------------------------------------

--
-- Table structure for table `settore_lavoro`
--

CREATE TABLE `settore_lavoro` (
  `id_job_sector` int(3) UNSIGNED NOT NULL,
  `job_sector` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `settore_lavoro`
--

INSERT INTO `settore_lavoro` (`id_job_sector`, `job_sector`) VALUES
(1, 'Forze armate e sicurezza'),
(2, 'Informatica ed elettronica'),
(3, 'Ristorazione e alimentazione');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id_users` int(3) UNSIGNED NOT NULL,
  `user_registration` int(11) NOT NULL,
  `name` varchar(256) DEFAULT NULL,
  `age` int(3) UNSIGNED DEFAULT NULL,
  `id_pro` int(4) UNSIGNED DEFAULT NULL,
  `id_job_sector` int(3) UNSIGNED DEFAULT NULL,
  `id_job` int(3) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id_users`, `user_registration`, `name`, `age`, `id_pro`, `id_job_sector`, `id_job`) VALUES
(1, 687567600, 'Daniele', 29, 30, 2, 4),
(2, 915145200, 'Francesco', 21, 33, 2, 2),
(3, 315529200, 'Andrea', 40, 46, 1, 1),
(4, 687567602, 'Manuele', 30, 30, 2, 5),
(5, 915145201, 'Giorgia', 22, 31, 3, 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `posizione_lavoro`
--
ALTER TABLE `posizione_lavoro`
  ADD PRIMARY KEY (`id_job`),
  ADD KEY `id_job_sector` (`id_job_sector`),
  ADD KEY `job` (`job`);

--
-- Indexes for table `province`
--
ALTER TABLE `province`
  ADD PRIMARY KEY (`id_pro`),
  ADD KEY `nome_provincia` (`nome_provincia`);

--
-- Indexes for table `settore_lavoro`
--
ALTER TABLE `settore_lavoro`
  ADD PRIMARY KEY (`id_job_sector`),
  ADD KEY `job_sector` (`job_sector`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_users`),
  ADD KEY `id_pro` (`id_pro`),
  ADD KEY `id_job_sector` (`id_job_sector`),
  ADD KEY `id_job` (`id_job`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `posizione_lavoro`
--
ALTER TABLE `posizione_lavoro`
  MODIFY `id_job` int(3) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `province`
--
ALTER TABLE `province`
  MODIFY `id_pro` int(4) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=111;

--
-- AUTO_INCREMENT for table `settore_lavoro`
--
ALTER TABLE `settore_lavoro`
  MODIFY `id_job_sector` int(3) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id_users` int(3) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`id_pro`) REFERENCES `province` (`id_pro`) ON UPDATE CASCADE,
  ADD CONSTRAINT `users_ibfk_2` FOREIGN KEY (`id_job_sector`) REFERENCES `settore_lavoro` (`id_job_sector`) ON UPDATE CASCADE,
  ADD CONSTRAINT `users_ibfk_3` FOREIGN KEY (`id_job`) REFERENCES `posizione_lavoro` (`id_job`) ON UPDATE CASCADE;
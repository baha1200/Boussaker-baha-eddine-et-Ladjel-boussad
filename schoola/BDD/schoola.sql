-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 15, 2022 at 09:45 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `schoola`
--

-- --------------------------------------------------------

--
-- Table structure for table `cinqieme`
--

CREATE TABLE `cinqieme` (
  `id` int(11) NOT NULL,
  `matierecq` char(20) NOT NULL,
  `commentairecq` varchar(20) NOT NULL,
  `fichier` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `deuxieme`
--

CREATE TABLE `deuxieme` (
  `id` int(11) NOT NULL,
  `matieredx` char(20) NOT NULL,
  `commentairedx` varchar(20) NOT NULL,
  `fichier` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `l'absence des enseignants admin`
--

CREATE TABLE `l'absence des enseignants admin` (
  `id` int(11) NOT NULL,
  `nom` char(50) NOT NULL,
  `matiere` char(30) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `les notifications adm`
--

CREATE TABLE `les notifications adm` (
  `id` int(11) NOT NULL,
  `notification` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `username` char(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin0000');

-- --------------------------------------------------------

--
-- Table structure for table `maternelle`
--

CREATE TABLE `maternelle` (
  `id` int(11) NOT NULL,
  `matieremt` char(20) NOT NULL,
  `commentairemt` varchar(50) NOT NULL,
  `fichier` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `note cq c1`
--

CREATE TABLE `note cq c1` (
  `id` int(11) NOT NULL,
  `nometprenom` char(20) NOT NULL,
  `arabecqc1` int(11) NOT NULL,
  `mathematiquecqc1` float NOT NULL,
  `etudeislamiquecqc1` float NOT NULL,
  `etudecivilecqc1` float NOT NULL,
  `etudescientifiquecqc1` float NOT NULL,
  `historiqueetgeographiquecqc1` float NOT NULL,
  `francaiscqc1` float NOT NULL,
  `etudeartistiquecqc1` float NOT NULL,
  `etudesportifcqc1` float NOT NULL,
  `moyennecqc1` float NOT NULL,
  `trimestrecqc1` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `note cq c2`
--

CREATE TABLE `note cq c2` (
  `id` int(11) NOT NULL,
  `nometprenom` char(20) NOT NULL,
  `arabecqc2` int(11) NOT NULL,
  `mathematiquecqc2` float NOT NULL,
  `etudeislamiquecqc2` float NOT NULL,
  `etudecivilecqc2` float NOT NULL,
  `etudescientifiquecqc2` float NOT NULL,
  `historiqueetgeographiquecqc2` float NOT NULL,
  `francaiscqc2` float NOT NULL,
  `etudeartistiquecqc2` float NOT NULL,
  `etudesportifcqc2` float NOT NULL,
  `moyennecqc2` float NOT NULL,
  `trimestrecqc2` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `note dx c1`
--

CREATE TABLE `note dx c1` (
  `id` int(11) NOT NULL,
  `nometprenom` char(20) NOT NULL,
  `arabedxc1` int(11) NOT NULL,
  `mathematiquedxc1` float NOT NULL,
  `etudeislamiquedxc1` float NOT NULL,
  `etudeciviledxc1` float NOT NULL,
  `etudescientifiquedxc1` float NOT NULL,
  `etudeartistiquedxc1` float NOT NULL,
  `etudesportifdxc1` float NOT NULL,
  `moyennedxc1` float NOT NULL,
  `trimestredxc1` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `note dx c2`
--

CREATE TABLE `note dx c2` (
  `id` int(11) NOT NULL,
  `nometprenom` char(20) NOT NULL,
  `arabedxc2` int(11) NOT NULL,
  `mathematiquedxc2` float NOT NULL,
  `etudeislamiquedxc2` float NOT NULL,
  `etudeciviledxc2` float NOT NULL,
  `etudescientifiquedxc2` float NOT NULL,
  `etudeartistiquedxc2` float NOT NULL,
  `etudesportifdxc2` float NOT NULL,
  `moyennedxc2` float NOT NULL,
  `trimestredxc2` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `note mt c1`
--

CREATE TABLE `note mt c1` (
  `id` int(11) NOT NULL,
  `nometprenom` char(20) NOT NULL,
  `arabemtc1` int(11) NOT NULL,
  `mathematiquemtc1` float NOT NULL,
  `etudeislamiquemtc1` float NOT NULL,
  `reveilscientifiquemtc1` float NOT NULL,
  `etudecivilemtc1` float NOT NULL,
  `dessinmtc1` float NOT NULL,
  `etuderythmiquemtc1` float NOT NULL,
  `theatremtc1` float NOT NULL,
  `musiquemtc1` float NOT NULL,
  `etudesportifmtc1` float NOT NULL,
  `moyennemtc1` float NOT NULL,
  `trimestremtc1` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `note mt c2`
--

CREATE TABLE `note mt c2` (
  `id` int(11) NOT NULL,
  `nometprenom` char(20) NOT NULL,
  `arabemtc2` int(11) NOT NULL,
  `mathematiquemtc2` float NOT NULL,
  `etudeislamiquemtc2` float NOT NULL,
  `reveilscientifiquemtc2` float NOT NULL,
  `etudecivilemtc2` float NOT NULL,
  `dessinmtc2` float NOT NULL,
  `etuderythmiquemtc2` float NOT NULL,
  `theatremtc2` float NOT NULL,
  `musiquemtc2` float NOT NULL,
  `etudesportifmtc2` float NOT NULL,
  `moyennemtc2` float NOT NULL,
  `trimestremtc2` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `note pr c1`
--

CREATE TABLE `note pr c1` (
  `id` int(11) NOT NULL,
  `nometprenom` char(20) NOT NULL,
  `arabeprc1` int(11) NOT NULL,
  `mathematiqueprc1` float NOT NULL,
  `etudeislamiqueprc1` float NOT NULL,
  `etudecivileprc1` float NOT NULL,
  `etudescientifiqueprc1` float NOT NULL,
  `etudeartistiqueprc1` float NOT NULL,
  `etudesportifprc1` float NOT NULL,
  `moyenneprc1` float NOT NULL,
  `trimestreprc1` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `note pr c2`
--

CREATE TABLE `note pr c2` (
  `id` int(11) NOT NULL,
  `nometprenom` char(20) NOT NULL,
  `arabeprc2` int(11) NOT NULL,
  `mathematiqueprc2` float NOT NULL,
  `etudeislamiqueprc2` float NOT NULL,
  `etudecivileprc2` float NOT NULL,
  `etudescientifiqueprc2` float NOT NULL,
  `etudeartistiqueprc2` float NOT NULL,
  `etudesportifprc2` float NOT NULL,
  `moyenneprc2` float NOT NULL,
  `trimestreprc2` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `note qt c1`
--

CREATE TABLE `note qt c1` (
  `id` int(11) NOT NULL,
  `nometprenom` char(20) NOT NULL,
  `arabeqtc1` int(11) NOT NULL,
  `mathematiqueqtc1` float NOT NULL,
  `etudeislamiqueqtc1` float NOT NULL,
  `etudecivileqtc1` float NOT NULL,
  `etudescientifiqueqtc1` float NOT NULL,
  `historiqueetgeographiqueqtc1` float NOT NULL,
  `francaisqtc1` float NOT NULL,
  `etudeartistiqueqtc1` float NOT NULL,
  `etudesportifqtc1` float NOT NULL,
  `moyenneqtc1` float NOT NULL,
  `trimestreqtc1` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `note qt c2`
--

CREATE TABLE `note qt c2` (
  `id` int(11) NOT NULL,
  `nometprenom` char(20) NOT NULL,
  `arabeqtc2` int(11) NOT NULL,
  `mathematiqueqtc2` float NOT NULL,
  `etudeislamiqueqtc2` float NOT NULL,
  `etudecivileqtc2` float NOT NULL,
  `etudescientifiqueqtc2` float NOT NULL,
  `historiqueetgeographiqueqtc2` float NOT NULL,
  `francaisqtc2` float NOT NULL,
  `etudeartistiqueqtc2` float NOT NULL,
  `etudesportifqtc2` float NOT NULL,
  `moyenneqtc2` float NOT NULL,
  `trimestreqtc2` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `note tr c1`
--

CREATE TABLE `note tr c1` (
  `id` int(11) NOT NULL,
  `nometprenom` char(20) NOT NULL,
  `arabetrc1` int(11) NOT NULL,
  `mathematiquetrc1` float NOT NULL,
  `etudeislamiquetrc1` float NOT NULL,
  `etudeciviletrc1` float NOT NULL,
  `etudescientifiquetrc1` float NOT NULL,
  `historiqueetgeographiquetrc1` float NOT NULL,
  `francaistrc1` float NOT NULL,
  `etudeartistiquetrc1` float NOT NULL,
  `etudesportiftrc1` float NOT NULL,
  `moyennetrc1` float NOT NULL,
  `trimestretrc1` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `note tr c2`
--

CREATE TABLE `note tr c2` (
  `id` int(11) NOT NULL,
  `nometprenom` char(20) NOT NULL,
  `arabetrc2` int(11) NOT NULL,
  `mathematiquetrc2` float NOT NULL,
  `etudeislamiquetrc2` float NOT NULL,
  `etudeciviletrc2` float NOT NULL,
  `etudescientifiquetrc2` float NOT NULL,
  `historiqueetgeographiquetrc2` float NOT NULL,
  `francaistrc2` float NOT NULL,
  `etudeartistiquetrc2` float NOT NULL,
  `etudesportiftrc2` float NOT NULL,
  `moyennetrc2` float NOT NULL,
  `trimestretrc2` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `premiere`
--

CREATE TABLE `premiere` (
  `id` int(11) NOT NULL,
  `matierepr` char(20) NOT NULL,
  `commentairepr` varchar(20) NOT NULL,
  `fichier` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `quatrieme`
--

CREATE TABLE `quatrieme` (
  `id` int(11) NOT NULL,
  `matiereqt` char(20) NOT NULL,
  `commentaireqt` varchar(20) NOT NULL,
  `fichier` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `troisieme`
--

CREATE TABLE `troisieme` (
  `id` int(11) NOT NULL,
  `matieretr` char(20) NOT NULL,
  `commentairetr` varchar(20) NOT NULL,
  `fichier` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cinqieme`
--
ALTER TABLE `cinqieme`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `deuxieme`
--
ALTER TABLE `deuxieme`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `l'absence des enseignants admin`
--
ALTER TABLE `l'absence des enseignants admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `les notifications adm`
--
ALTER TABLE `les notifications adm`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `maternelle`
--
ALTER TABLE `maternelle`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `note cq c1`
--
ALTER TABLE `note cq c1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `note cq c2`
--
ALTER TABLE `note cq c2`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `note dx c1`
--
ALTER TABLE `note dx c1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `note dx c2`
--
ALTER TABLE `note dx c2`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `note mt c1`
--
ALTER TABLE `note mt c1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `note mt c2`
--
ALTER TABLE `note mt c2`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `note pr c1`
--
ALTER TABLE `note pr c1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `note pr c2`
--
ALTER TABLE `note pr c2`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `note qt c1`
--
ALTER TABLE `note qt c1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `note qt c2`
--
ALTER TABLE `note qt c2`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `note tr c1`
--
ALTER TABLE `note tr c1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `note tr c2`
--
ALTER TABLE `note tr c2`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `premiere`
--
ALTER TABLE `premiere`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `quatrieme`
--
ALTER TABLE `quatrieme`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `troisieme`
--
ALTER TABLE `troisieme`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cinqieme`
--
ALTER TABLE `cinqieme`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `deuxieme`
--
ALTER TABLE `deuxieme`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `l'absence des enseignants admin`
--
ALTER TABLE `l'absence des enseignants admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `les notifications adm`
--
ALTER TABLE `les notifications adm`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `maternelle`
--
ALTER TABLE `maternelle`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=109;

--
-- AUTO_INCREMENT for table `note cq c1`
--
ALTER TABLE `note cq c1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `note cq c2`
--
ALTER TABLE `note cq c2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `note dx c1`
--
ALTER TABLE `note dx c1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `note dx c2`
--
ALTER TABLE `note dx c2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `note mt c1`
--
ALTER TABLE `note mt c1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=119;

--
-- AUTO_INCREMENT for table `note mt c2`
--
ALTER TABLE `note mt c2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `note pr c1`
--
ALTER TABLE `note pr c1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `note pr c2`
--
ALTER TABLE `note pr c2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `note qt c1`
--
ALTER TABLE `note qt c1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `note qt c2`
--
ALTER TABLE `note qt c2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `note tr c1`
--
ALTER TABLE `note tr c1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `note tr c2`
--
ALTER TABLE `note tr c2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `premiere`
--
ALTER TABLE `premiere`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `quatrieme`
--
ALTER TABLE `quatrieme`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `troisieme`
--
ALTER TABLE `troisieme`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 20-Nov-2021 às 18:23
-- Versão do servidor: 10.4.20-MariaDB
-- versão do PHP: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `trabalho`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `jogos`
--

CREATE TABLE `jogos` (
  `ID` int(5) NOT NULL,
  `NOME` varchar(40) DEFAULT NULL,
  `PLATAFORMA` varchar(6) DEFAULT NULL,
  `ANO` int(4) DEFAULT NULL,
  `GENERO` varchar(10) DEFAULT NULL,
  `PRECO` int(8) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `jogos`
--

INSERT INTO `jogos` (`ID`, `NOME`, `PLATAFORMA`, `ANO`, `GENERO`, `PRECO`) VALUES
(1, 'GTA Trilogy', 'PS4', 2021, 'Aberto', 350),
(2, 'COD Vanguard', 'PS5', 2021, 'FPS', 300),
(3, 'Pokémon Brilliant Pearl', 'Switch', 2021, 'RPG', 270),
(4, 'The Medium', 'XBOXSX', 2021, 'HORROR', 250),
(5, 'Metroid Dread', 'Switch', 2021, 'PLATAFORMA', 320),
(6, 'Guilty Gear -Strive-', 'PS5', 2021, 'Luta', 270),
(7, 'Halo Infinite', 'XONE', 2021, 'FPS', 200),
(8, 'Resident Evil Village', 'PS4', 2021, 'TERROR', 200),
(9, 'Far Cry 6', 'XBOXSX', 2021, 'RPG', 280),
(10, 'Back 4 Blood', 'XONE', 2021, 'FPS', 250),
(11, 'Oddworld: Soulstorm', 'XONE', 2021, 'Plataforma', 200),
(12, 'Kena: Bridge of Spirits', 'PS5', 2021, 'Aventura', 280),
(13, 'Final Fantasy VII Remake', 'PS4', 2020, 'RPG', 200),
(14, 'Street Fighter Arcade Edition', 'PS4', 2018, 'Luta', 100),
(15, 'Dragon Ball FighterZ', 'PS4', 2018, 'Luta', 130),
(16, 'Resident Evil 2 Remake', 'XONE', 2018, 'TERROR', 180),
(17, 'Resident Evil 3', 'PS4', 2020, 'TERROR', 250),
(18, 'Resident Evil 6', 'PS4', 2016, 'TERROR', 80),
(19, 'Marvel vs. Capcom: Infinite', 'ps4', 2018, 'Luta', 150),
(20, 'The Last of Us Remastered', 'PS4', 2014, 'Ação', 80),
(21, 'The Last of Us Part II', 'PS4', 2020, 'Ação', 200),
(22, 'Marvel´s Spider-Man', 'PS4', 2018, 'Ação', 230),
(23, 'Spider Marvel Miles Morales', 'PS5', 2020, 'Ação', 250),
(24, 'Ghost of Tsushima', 'PS4', 2020, 'Ação', 230),
(25, 'God Of War 3 REMASTERED', 'PS4', 2017, 'Ação', 99),
(26, 'Final Fantasy XV', 'PS4', 2016, 'RPG', 150),
(27, 'Death Stranding', 'PS4', 2019, 'Aventura', 150),
(28, 'Metal Gear Solid V', 'PS4', 2015, 'Ação', 80),
(29, 'Horizon Zero Dawn', 'PS4', 2017, 'Ação', 150),
(30, 'Shadow of the Colossus HD', 'PS4', 2016, 'Aventura', 210),
(31, 'HALO INFINITE', 'XBOXSX', 2021, 'FPS', 220),
(32, 'Forza Horizon 5', 'XBOXSX', 2021, 'Corrida', 250),
(33, 'DIRT 5', 'XONE', 2020, 'Corrida', 140),
(34, 'RED DEAD REDEMPTION 2', 'XONE', 2018, 'Aventura', 180),
(35, 'RESIDENT EVIL VILLAGE', 'XONE', 2021, 'TERROR', 250),
(36, 'Injustice 2', 'XONE', 2017, 'Luta', 120),
(37, 'COD Vanguard ', 'XBOXSX', 2021, 'FPS', 300),
(38, 'Sekiro Shadows Die Twice ', 'XONE', 2019, 'Aventura', 250),
(39, 'Mortal Kombat 11', 'XONE', 2019, 'Luta', 150),
(40, 'Mortal Shell ', 'XBOXSX', 2020, 'RPG', 200),
(41, 'Immortals Fenxy Rising ', 'XONE', 2020, 'Aventura', 150),
(42, 'Sea Of Thieves ', 'XONE', 2018, 'Aventura', 150),
(43, 'SQUADRONS ', 'XONE', 2020, 'Ação', 80),
(44, 'COD Black Ops Cold War', 'PS5', 2020, 'FPS', 190),
(45, 'Demon\'s Souls', 'PS5', 2020, 'RPG', 300),
(46, 'GODFALL', 'PS5', 2020, 'RPG', 250),
(48, 'Scarlet Nexus', 'PS5', 2021, 'Ação', 200),
(49, 'Death Stranding Director\'s Cut ', 'PS5', 2021, 'Aventura', 200),
(51, 'Ghost Of Tsushima ', 'PS5', 2020, 'Aventura', 280),
(52, 'Star Wars Jedi Fallen Order', 'PS5', 2019, 'Ação', 150),
(54, 'Sack Boy A Big Adventure ', 'PS5', 2020, 'Plataforma', 250),
(55, 'Final Fantasy X|X-2 Hd', 'PS5', 2019, 'RPG', 110),
(56, 'Metro Exodus ', 'PS5', 2019, 'FPS', 200),
(57, 'Shinmagami Tensei III', 'Switch', 2020, 'Role', 150),
(58, 'Oddworld: Stranger\'s Wrath', 'Switch', 2020, 'Aventura', 200),
(59, 'The Legend Of Zelda Breath Of The Wild ', 'Switch', 2017, 'Aventura', 250),
(60, 'Rosue Legacy ', 'Switch', 2014, 'Ação', 120),
(61, 'Grandia Hd Collection ', 'Switch', 2019, 'RPG', 200),
(62, 'The Legend Of Zelda Skyward Sword', 'Switch', 2021, 'Aventura', 300),
(63, 'Super Mario All Stars 3D Collection ', 'Switch', 2020, 'Aventura', 400),
(64, 'LEGO Jurassic World ', 'Switch', 2018, 'Aventura', 200),
(65, 'Xenoblade Chronicles 2', 'Switch', 2017, 'RPG', 200),
(66, 'Xenoblade Chronicles ', 'Switch', 2020, 'RPG', 220),
(67, 'Final Fansasy XV: Pocket Edition ', 'Switch', 2018, 'RPG', 180),
(68, 'Resident Evil: Origins Collection', 'Switch', 2019, 'Terror', 220),
(69, 'Paper Mario The Origami King ', 'Switch', 2020, 'RPG', 250),
(70, 'Super Mario 3D World Deluxe', 'Switch', 2021, 'Plataforma', 250),
(71, 'Super Mario Maker 2', 'Switch', 2019, 'Plataforma', 300),
(72, ' Trails of Cold Steel III', 'Switch', 2017, 'RPG', 200),
(73, 'Super Mario Odyssey', 'Switch', 2017, 'Aventura', 280);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `jogos`
--
ALTER TABLE `jogos`
  ADD PRIMARY KEY (`ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

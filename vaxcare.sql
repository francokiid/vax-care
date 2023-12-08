-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 08, 2023 at 10:28 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vaxcare`
--

-- --------------------------------------------------------

--
-- Table structure for table `account_tbl`
--

CREATE TABLE `account_tbl` (
  `Username` varchar(255) NOT NULL,
  `PhoneNumber` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `AccountRole` varchar(255) NOT NULL,
  `AccountStatus` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `account_tbl`
--

INSERT INTO `account_tbl` (`Username`, `PhoneNumber`, `Password`, `AccountRole`, `AccountStatus`) VALUES
('abilee', '09954271283', 'H6!z8jBp', 'Recipient', 'Active'),
('abyreynolds', '09745658637', 'lX6%4zS8', 'Recipient', 'Active'),
('aidened', '09976564323', 'yG6L*2@k', 'Recipient', 'Deactivated'),
('aljourney', '09748471836', 'G6@9gJzT', 'Recipient', 'Active'),
('alliahrose', '09726359135', 'xB*9lQ1H', 'Recipient', 'Active'),
('amor.vea', '09390492518', '09Hieg__a', 'Recipient', 'Active'),
('anafeliz', '09390468218', 'cH!Aa_7878', 'Admin', 'Deactivated'),
('angeluvr', '09325930263', 'zB*3pV6Q', 'Recipient', 'Active'),
('aniawatson', '09874467231', '7kF@2gN1', 'Recipient', 'Active'),
('annedyosa', '09987678123', 'wN6!1vJ@', 'Recipient', 'Active'),
('annereyes', '09352821900', '8zK%3wF6', 'Recipient', 'Active'),
('armelynlh', '09474782649', 'zP*5lN9W', 'Recipient', 'Active'),
('aurlede666', '09657434533', 'rF*4jP6V', 'Recipient', 'Active'),
('avemoriah', '09263718393', '2gP@8nW5', 'Recipient', 'Active'),
('b3j3rm4', '09639043088', 'pL@2yR7T', 'Recipient', 'Active'),
('barneybarnes', '09732679369', 'qH*2kV7M', 'Recipient', 'Active'),
('bella__pat', '09758267637', 'eM5!9sK7', 'Recipient', 'Active'),
('brilliant', '09758307375', 'sR*2hL4J', 'Recipient', 'Active'),
('brownliam', '09226853270', 'vL@4Wn3G', 'Recipient', 'Active'),
('callmecollins', '09758304512', 'nM*3bK9E', 'Recipient', 'Active'),
('camillebell', '09823416274', 'qF3&8pY!', 'Recipient', 'Active'),
('carlabrook', '09996593201', 'wQ*9hL5m', 'Recipient', 'Active'),
('cathyrichard', '09965564334', 'dP!2hB6Q', 'Recipient', 'Active'),
('clauds_77', '09474847287', 'jH%1xL3!y', 'Recipient', 'Active'),
('cocomelon', '09547863847', 'tP!5yW8z', 'Recipient', 'Active'),
('cuencabtg', '09758930259', 'xQ!3pY9M', 'Recipient', 'Active'),
('darrenesv', '09263065473', '4oL!9cJ6', 'Recipient', 'Active'),
('davisava', '09113867456', 'T!3s9gA2', 'Recipient', 'Active'),
('deantrbl', '09325930263', 'ay@fernAnd3Z', 'Admin', 'Deactivated'),
('djcheetah', '09758372874', '1cG%6zHq', 'Recipient', 'Active'),
('dlwlrma', '09653241838', 'g30rG!aJa', 'Admin', 'Active'),
('donnabal', '09675825978', 'xZ3@9gW6', 'Recipient', 'Active'),
('eldimaandal', '09257318239', '6sB*3cF8', 'Recipient', 'Active'),
('elisahami', '09784368236', 'bJ*1nM3W', 'Recipient', 'Active'),
('ellaineraz', '09620651643', 'tH*5qL2W', 'Recipient', 'Active'),
('ellise88', '09736152381', 'cZ*3yJ7Q', 'Recipient', 'Active'),
('emsmith', '09752436127', 'yy2$jG3hP', 'Recipient', 'Active'),
('erelabajo', '09386753426', 'bW8$3zV7', 'Recipient', 'Active'),
('fayewebster', '09549302720', 'kali_Uhis98', 'Admin', 'Deactivated'),
('fernandeza', '09912223567', 'uN8!3yS2', 'Recipient', 'Active'),
('fishergirl', '09856347347', 'gB7!4vX1', 'Recipient', 'Active'),
('francokiid', '09390492577', 'i<3BT$iu', 'Recipient', 'Active'),
('freeKath', '09374246619', 'eU2$3wR7', 'Recipient', 'Active'),
('garsee99a', '09885564323', 'Z5%jH@8L', 'Recipient', 'Active'),
('georgiajames', '09875441312', 'eT7!2mP4', 'Recipient', 'Active'),
('gracell', '09725357136', 'bG2%4sJ1', 'Recipient', 'Active'),
('gretaward', '09564412567', 'zV*7fC2J', 'Recipient', 'Active'),
('haileycruz', '09257318239', 'jB*1yL9R', 'Recipient', 'Active'),
('hariettebenett', '09161826273', 'bV@4nW2L', 'Recipient', 'Active'),
('heleeena', '09872368917', 'fW1@6mQ9', 'Recipient', 'Active'),
('helloguiz', '09565477308', 'sH*5nL7M', 'Recipient', 'Active'),
('ilovemily', '09786574628', '8oJ%4bNz', 'Recipient', 'Active'),
('indigorm', '09971456432', 'm1nY0on_j', 'Admin', 'Active'),
('isa90tijo', '09757365224', 'S2X*9kT4', 'Recipient', 'Active'),
('its_michelle', '09875441312', 'J1*oZ7@v', 'Recipient', 'Active'),
('jackharris', '09758364264', 'X*3yV1rW', 'Recipient', 'Active'),
('jackzond', '09225732456', 'uZ5@9pYl', 'Recipient', 'Active'),
('jamesis', '09161826273', 'B2*6sWnY', 'Recipient', 'Active'),
('jamesreads', '09405848394', 'Z*7vL5aS', 'Recipient', 'Active'),
('jannabff', '09976564323', 'lS*2vW8n', 'Recipient', 'Active'),
('jenellesings', '09225732456', 'gM6!7pH4', 'Recipient', 'Active'),
('jenkinsrea', '09724365819', '6pQ%3mV8', 'Recipient', 'Active'),
('jhaneguia', '09452638101', 'nF*8J4tZ', 'Recipient', 'Active'),
('jia_walker', '09385701483', 'R!3yU2@q', 'Recipient', 'Active'),
('john_olivia', '09823416274', 'oF!5nT8L', 'Recipient', 'Active'),
('jonasbalmes', '09912223567', 'U7#bF6yV', 'Recipient', 'Active'),
('jordanjem', '09752482642', 'qR*2vB4H', 'Recipient', 'Active'),
('joscomia', '09759365527', '5mL&7gP9', 'Recipient', 'Active'),
('juanacruz', '09064788773', 'rKivee_95!', 'Recipient', 'Active'),
('juliewood', '09757365224', 'qS*5rJ8z', 'Recipient', 'Active'),
('karyllegirl', '09971456432', 'pH8%4yS!', 'Recipient', 'Active'),
('katarinabluu', '09753453214', 'm#P52s@ap$V', 'Admin', 'Active'),
('kaylabc', '09673591023', 'sL*3gP8Z', 'Recipient', 'Active'),
('kellykelly', '09226853270', 'rA6*1tH9', 'Recipient', 'Active'),
('khate_78', '09725637513', 'dY*9jL7H', 'Recipient', 'Active'),
('kifoster', '09872363728', 'tF@3zW6C', 'Recipient', 'Active'),
('laufeym2m', '09386753426', 'mitsK1_llua', 'Admin', 'Deactivated'),
('leiover', '09987678123', 'kimThv@613', 'Admin', 'Active'),
('lewislouise', '09874725826', 'hP*2Q9!k', 'Recipient', 'Active'),
('lheasw_90', '09939162785', 'xR!8cV9m', 'Recipient', 'Active'),
('lopezm', '09976545321', 'tF2$7qP3', 'Recipient', 'Active'),
('loreqilmore', '09390468261', 'L0R3i__!', 'Recipient', 'Active'),
('lovelydoc', '09678274626', '9hK!7vZ5', 'Recipient', 'Active'),
('lucascueto', '09643756128', '9pT%2oBx', 'Recipient', 'Active'),
('maediaz', '09885564323', 'xG7%4wV2', 'Recipient', 'Active'),
('malorey', '09736912631', 'jR*7zV4P', 'Recipient', 'Active'),
('mamapitan', '09602260198', 'vJ*8wR3P', 'Recipient', 'Active'),
('mariacha', '09939162785', 'zH5@8rQ2', 'Recipient', 'Active'),
('martineeeez', '09874467231', 'fQ9!1bLp', 'Recipient', 'Active'),
('mary_loves', '09265341789', 'hX*6vR3y', 'Recipient', 'Active'),
('miareyes', '09996593201', 'gP4#vU3z', 'Recipient', 'Active'),
('mik2lover', '09752347317', 'vP2L*7gJ', 'Recipient', 'Active'),
('millermason', '09564412567', '1kP%8oJm', 'Recipient', 'Active'),
('montesjuls', '09748265723', 'V8R&2uN4', 'Recipient', 'Active'),
('naaano', '09352821900', 'N%4gK8zF', 'Recipient', 'Active'),
('nhicabagui', '09752436127', '5jK*2hR1', 'Recipient', 'Active'),
('nikkokoko', '09843748321', 'dF@6xZ2l', 'Recipient', 'Active'),
('ohmylesgod', '09549302720', 'gC@1kZ7m', 'Recipient', 'Active'),
('olivercity', '09753943720', 'C4&vA7zG', 'Recipient', 'Active'),
('powelldc', '09643782442', 'rV5%1hN6', 'Recipient', 'Active'),
('princeroch', '09694217423', 'yC*2wP8J', 'Recipient', 'Active'),
('ricococo', '09420546263', 'bS7*4kW2', 'Recipient', 'Active'),
('samcox', '09113867456', 'tM@6bP1l', 'Recipient', 'Active'),
('selenagoman', '09748274263', 'uH8%3rX2', 'Recipient', 'Active'),
('sullivanb', '09728351671', 'fW*8zR3T', 'Recipient', 'Active'),
('thaliasims', '09573883728', 'nL*7tS2Z', 'Recipient', 'Active'),
('themarias', '09263065473', '0hhyuKoh', 'Admin', 'Deactivated'),
('thomastrain', '09265341789', 'dL7&vP4S', 'Recipient', 'Active'),
('vea__long', '09976545321', 'wV*4jN7P', 'Recipient', 'Active'),
('vn.tte', '09064788443', 'vantA@3e88', 'Recipient', 'Active'),
('vroomvhong', '09653241838', 'aX%2gF9W', 'Recipient', 'Active'),
('wagipilit', '09583868753', 'cV!2zN4B', 'Recipient', 'Active'),
('wilbert_man', '09753453214', 'kQ*7mR1t', 'Recipient', 'Active'),
('willchez', '09965564334', 'rW7!iNpY', 'Recipient', 'Active'),
('williamsbagui', '09752347317', 'D6*z1HxQ', 'Recipient', 'Active');

-- --------------------------------------------------------

--
-- Stand-in structure for view `nbaccount_view`
-- (See below for the actual view)
--
CREATE TABLE `nbaccount_view` (
`NewbornID` int(11)
,`LastName` varchar(255)
,`FirstName` varchar(255)
,`MiddleName` varchar(255)
,`DOB` date
,`Sex` varchar(255)
,`Address` varchar(255)
,`Guardian` varchar(255)
,`ImmunizationStatus` varchar(255)
,`Username` varchar(255)
,`PhoneNumber` varchar(255)
,`Password` varchar(255)
);

-- --------------------------------------------------------

--
-- Table structure for table `nbsched_tbl`
--

CREATE TABLE `nbsched_tbl` (
  `SchedID` int(11) NOT NULL,
  `SchedDate` date DEFAULT NULL,
  `NewbornID` int(11) NOT NULL,
  `VaccineID` varchar(255) NOT NULL,
  `SchedStatus` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `nbsched_tbl`
--

INSERT INTO `nbsched_tbl` (`SchedID`, `SchedDate`, `NewbornID`, `VaccineID`, `SchedStatus`) VALUES
(1, '2021-01-13', 1, 'HEP B', 'Done'),
(2, '2021-01-23', 2, 'HEP B', 'Done'),
(3, '2021-01-29', 3, 'HEP B', 'Done'),
(4, '2021-02-02', 1, 'BCG', 'Done'),
(5, '2021-02-05', 4, 'HEP B', 'Done'),
(6, '2021-02-07', 5, 'HEP B', 'Done'),
(7, '2021-02-09', 6, 'HEP B', 'Done'),
(8, '2021-02-09', 7, 'HEP B', 'Done'),
(9, '2021-02-12', 2, 'BCG', 'Done'),
(10, '2021-02-15', 8, 'HEP B', 'Done'),
(11, '2021-02-18', 3, 'BCG', 'Done'),
(12, '2021-02-25', 4, 'BCG', 'Done'),
(13, '2021-02-27', 1, 'PENTA1', 'Done'),
(14, '2021-02-27', 1, 'OPV1', 'Done'),
(15, '2021-02-27', 1, 'PCV1', 'Done'),
(16, '2021-02-27', 5, 'BCG', 'Done'),
(17, '2021-03-01', 6, 'BCG', 'Done'),
(18, '2021-03-01', 7, 'BCG', 'Done'),
(19, '2021-03-07', 8, 'BCG', 'Done'),
(20, '2021-03-09', 2, 'PENTA1', 'Done'),
(21, '2021-03-09', 2, 'OPV1', 'Done'),
(22, '2021-03-09', 2, 'PCV1', 'Done'),
(23, '2021-03-12', 9, 'HEP B', 'Done'),
(24, '2021-03-15', 3, 'PENTA1', 'Done'),
(25, '2021-03-15', 3, 'OPV1', 'Done'),
(26, '2021-03-15', 3, 'PCV1', 'Done'),
(27, '2021-03-21', 10, 'HEP B', 'Done'),
(28, '2021-03-22', 4, 'PENTA1', 'Done'),
(29, '2021-03-22', 4, 'OPV1', 'Done'),
(30, '2021-03-22', 4, 'PCV1', 'Done'),
(31, '2021-03-22', 11, 'HEP B', 'Done'),
(32, '2021-03-24', 5, 'PENTA1', 'Done'),
(33, '2021-03-24', 5, 'OPV1', 'Done'),
(34, '2021-03-24', 5, 'PCV1', 'Done'),
(35, '2021-03-26', 6, 'PENTA1', 'Done'),
(36, '2021-03-26', 6, 'OPV1', 'Done'),
(37, '2021-03-26', 6, 'PCV1', 'Done'),
(38, '2021-03-26', 7, 'PENTA1', 'Done'),
(39, '2021-03-26', 7, 'OPV1', 'Done'),
(40, '2021-03-26', 7, 'PCV1', 'Done'),
(41, '2021-03-27', 12, 'HEP B', 'Done'),
(42, '2021-03-29', 1, 'PENTA2', 'Done'),
(43, '2021-03-29', 1, 'OPV2', 'Done'),
(44, '2021-03-29', 1, 'PCV2', 'Done'),
(45, '2021-03-31', 13, 'HEP B', 'Done'),
(46, '2021-04-01', 8, 'PENTA1', 'Done'),
(47, '2021-04-01', 8, 'OPV1', 'Done'),
(48, '2021-04-01', 8, 'PCV1', 'Done'),
(49, '2021-04-01', 9, 'BCG', 'Done'),
(50, '2021-04-02', 14, 'HEP B', 'Done'),
(51, '2021-04-08', 2, 'PENTA2', 'Done'),
(52, '2021-04-08', 2, 'OPV2', 'Done'),
(53, '2021-04-08', 2, 'PCV2', 'Done'),
(54, '2021-04-10', 10, 'BCG', 'Done'),
(55, '2021-04-11', 11, 'BCG', 'Done'),
(56, '2021-04-14', 3, 'PENTA2', 'Done'),
(57, '2021-04-14', 3, 'OPV2', 'Done'),
(58, '2021-04-14', 3, 'PCV2', 'Done'),
(59, '2021-04-16', 12, 'BCG', 'Done'),
(60, '2021-04-20', 13, 'BCG', 'Done'),
(61, '2021-04-21', 4, 'PENTA2', 'Done'),
(62, '2021-04-21', 4, 'OPV2', 'Done'),
(63, '2021-04-21', 4, 'PCV2', 'Done'),
(64, '2021-04-22', 14, 'BCG', 'Done'),
(65, '2021-04-23', 5, 'PENTA2', 'Done'),
(66, '2021-04-23', 5, 'OPV2', 'Done'),
(67, '2021-04-23', 5, 'PCV2', 'Done'),
(68, '2021-04-25', 6, 'PENTA2', 'Done'),
(69, '2021-04-25', 6, 'OPV2', 'Done'),
(70, '2021-04-25', 6, 'PCV2', 'Done'),
(71, '2021-04-25', 7, 'PENTA2', 'Done'),
(72, '2021-04-25', 7, 'OPV2', 'Done'),
(73, '2021-04-25', 7, 'PCV2', 'Done'),
(74, '2021-04-26', 9, 'PENTA1', 'Done'),
(75, '2021-04-26', 9, 'OPV1', 'Done'),
(76, '2021-04-26', 9, 'PCV1', 'Done'),
(77, '2021-04-28', 1, 'PENTA3', 'Done'),
(78, '2021-04-28', 1, 'OPV3', 'Done'),
(79, '2021-04-28', 1, 'IPV', 'Done'),
(80, '2021-04-28', 1, 'PCV3', 'Done'),
(81, '2021-05-01', 8, 'PENTA2', 'Done'),
(82, '2021-05-01', 8, 'OPV2', 'Done'),
(83, '2021-05-01', 8, 'PCV2', 'Done'),
(84, '2021-05-02', 15, 'HEP B', 'Done'),
(85, '2021-05-05', 10, 'PENTA1', 'Done'),
(86, '2021-05-05', 10, 'OPV1', 'Done'),
(87, '2021-05-05', 10, 'PCV1', 'Done'),
(88, '2021-05-06', 11, 'PENTA1', 'Done'),
(89, '2021-05-06', 11, 'OPV1', 'Done'),
(90, '2021-05-06', 11, 'PCV1', 'Done'),
(91, '2021-05-08', 2, 'PENTA3', 'Done'),
(92, '2021-05-08', 2, 'OPV3', 'Done'),
(93, '2021-05-08', 2, 'IPV', 'Done'),
(94, '2021-05-08', 2, 'PCV3', 'Done'),
(95, '2021-05-11', 12, 'PENTA1', 'Done'),
(96, '2021-05-11', 12, 'OPV1', 'Done'),
(97, '2021-05-11', 12, 'PCV1', 'Done'),
(98, '2021-05-14', 3, 'PENTA3', 'Done'),
(99, '2021-05-14', 3, 'OPV3', 'Done'),
(100, '2021-05-14', 3, 'IPV', 'Done'),
(101, '2021-05-14', 3, 'PCV3', 'Done'),
(102, '2021-05-15', 13, 'PENTA1', 'Done'),
(103, '2021-05-15', 13, 'OPV1', 'Done'),
(104, '2021-05-15', 13, 'PCV1', 'Done'),
(105, '2021-05-17', 14, 'PENTA1', 'Done'),
(106, '2021-05-17', 14, 'OPV1', 'Done'),
(107, '2021-05-17', 14, 'PCV1', 'Done'),
(108, '2021-05-21', 4, 'PENTA3', 'Done'),
(109, '2021-05-21', 4, 'OPV3', 'Done'),
(110, '2021-05-21', 4, 'IPV', 'Done'),
(111, '2021-05-21', 4, 'PCV3', 'Done'),
(112, '2021-05-22', 15, 'BCG', 'Done'),
(113, '2021-05-23', 5, 'PENTA3', 'Done'),
(114, '2021-05-23', 5, 'OPV3', 'Done'),
(115, '2021-05-23', 5, 'IPV', 'Done'),
(116, '2021-05-23', 5, 'PCV3', 'Done'),
(117, '2021-05-25', 6, 'PENTA3', 'Done'),
(118, '2021-05-25', 6, 'OPV3', 'Done'),
(119, '2021-05-25', 6, 'IPV', 'Done'),
(120, '2021-05-25', 6, 'PCV3', 'Done'),
(121, '2021-05-25', 7, 'PENTA3', 'Done'),
(122, '2021-05-25', 7, 'OPV3', 'Done'),
(123, '2021-05-25', 7, 'IPV', 'Done'),
(124, '2021-05-25', 7, 'PCV3', 'Done'),
(125, '2021-05-26', 9, 'PENTA2', 'Done'),
(126, '2021-05-26', 9, 'OPV2', 'Done'),
(127, '2021-05-26', 9, 'PCV2', 'Done'),
(128, '2021-05-31', 8, 'PENTA3', 'Done'),
(129, '2021-05-31', 8, 'OPV3', 'Done'),
(130, '2021-05-31', 8, 'IPV', 'Done'),
(131, '2021-05-31', 8, 'PCV3', 'Done'),
(132, '2021-06-04', 10, 'PENTA2', 'Done'),
(133, '2021-06-04', 10, 'OPV2', 'Done'),
(134, '2021-06-04', 10, 'PCV2', 'Done'),
(135, '2021-06-05', 11, 'PENTA2', 'Done'),
(136, '2021-06-05', 11, 'OPV2', 'Done'),
(137, '2021-06-05', 11, 'PCV2', 'Done'),
(138, '2021-06-10', 12, 'PENTA2', 'Done'),
(139, '2021-06-10', 12, 'OPV2', 'Done'),
(140, '2021-06-10', 12, 'PCV2', 'Done'),
(141, '2021-06-14', 13, 'PENTA2', 'Done'),
(142, '2021-06-14', 13, 'OPV2', 'Done'),
(143, '2021-06-14', 13, 'PCV2', 'Done'),
(144, '2021-06-16', 14, 'PENTA2', 'Done'),
(145, '2021-06-16', 14, 'OPV2', 'Done'),
(146, '2021-06-16', 14, 'PCV2', 'Done'),
(147, '2021-06-16', 15, 'PENTA1', 'Done'),
(148, '2021-06-16', 15, 'OPV1', 'Done'),
(149, '2021-06-16', 15, 'PCV1', 'Done'),
(150, '2021-06-25', 9, 'PENTA3', 'Done'),
(151, '2021-06-25', 9, 'OPV3', 'Done'),
(152, '2021-06-25', 9, 'IPV', 'Done'),
(153, '2021-06-25', 9, 'PCV3', 'Done'),
(154, '2021-07-04', 10, 'PENTA3', 'Done'),
(155, '2021-07-04', 10, 'OPV3', 'Done'),
(156, '2021-07-04', 10, 'IPV', 'Done'),
(157, '2021-07-04', 10, 'PCV3', 'Done'),
(158, '2021-07-05', 11, 'PENTA3', 'Done'),
(159, '2021-07-05', 11, 'OPV3', 'Done'),
(160, '2021-07-05', 11, 'IPV', 'Done'),
(161, '2021-07-05', 11, 'PCV3', 'Done'),
(162, '2021-07-10', 12, 'PENTA3', 'Done'),
(163, '2021-07-10', 12, 'OPV3', 'Done'),
(164, '2021-07-10', 12, 'IPV', 'Done'),
(165, '2021-07-10', 12, 'PCV3', 'Done'),
(166, '2021-07-14', 13, 'PENTA3', 'Done'),
(167, '2021-07-14', 13, 'OPV3', 'Done'),
(168, '2021-07-14', 13, 'IPV', 'Done'),
(169, '2021-07-14', 13, 'PCV3', 'Done'),
(170, '2021-07-16', 14, 'PENTA3', 'Done'),
(171, '2021-07-16', 14, 'OPV3', 'Done'),
(172, '2021-07-16', 14, 'IPV', 'Done'),
(173, '2021-07-16', 14, 'PCV3', 'Done'),
(174, '2021-07-16', 15, 'PENTA2', 'Done'),
(175, '2021-07-16', 15, 'OPV2', 'Done'),
(176, '2021-07-16', 15, 'PCV2', 'Done'),
(177, '2021-08-15', 15, 'PENTA3', 'Done'),
(178, '2021-08-15', 15, 'OPV3', 'Done'),
(179, '2021-08-15', 15, 'IPV', 'Done'),
(180, '2021-08-15', 15, 'PCV3', 'Done'),
(181, '2021-10-10', 1, 'MMR1', 'Done'),
(182, '2021-10-20', 2, 'MMR1', 'Done'),
(183, '2021-10-26', 3, 'MMR1', 'Done'),
(184, '2021-11-02', 4, 'MMR1', 'Done'),
(185, '2021-11-04', 5, 'MMR1', 'Done'),
(186, '2021-11-06', 6, 'MMR1', 'Done'),
(187, '2021-11-06', 7, 'MMR1', 'Done'),
(188, '2021-11-12', 8, 'MMR1', 'Done'),
(189, '2021-12-07', 9, 'MMR1', 'Done'),
(190, '2021-12-16', 10, 'MMR1', 'Done'),
(191, '2021-12-17', 11, 'MMR1', 'Done'),
(192, '2021-12-22', 12, 'MMR1', 'Done'),
(193, '2021-12-26', 13, 'MMR1', 'Done'),
(194, '2021-12-28', 14, 'MMR1', 'Done'),
(195, '2022-01-07', 16, 'HEP B', 'Done'),
(196, '2022-01-08', 17, 'HEP B', 'Done'),
(197, '2022-01-10', 18, 'HEP B', 'Done'),
(198, '2022-01-13', 1, 'MMR2', 'Missed'),
(199, '2022-01-15', 19, 'HEP B', 'Done'),
(200, '2022-01-23', 2, 'MMR2', 'Missed'),
(201, '2022-01-27', 15, 'MMR1', 'Done'),
(202, '2022-01-27', 16, 'BCG', 'Done'),
(203, '2022-01-28', 17, 'BCG', 'Done'),
(204, '2022-01-29', 3, 'MMR2', 'Missed'),
(205, '2022-01-30', 18, 'BCG', 'Done'),
(206, '2022-02-04', 19, 'BCG', 'Done'),
(207, '2022-02-05', 4, 'MMR2', 'Done'),
(208, '2022-02-07', 5, 'MMR2', 'Done'),
(209, '2022-02-09', 6, 'MMR2', 'Done'),
(210, '2022-02-09', 7, 'MMR2', 'Done'),
(211, '2022-02-15', 8, 'MMR2', 'Done'),
(212, '2022-02-15', 20, 'HEP B', 'Done'),
(213, '2022-02-18', 21, 'HEP B', 'Done'),
(214, '2022-02-21', 16, 'PENTA1', 'Done'),
(215, '2022-02-21', 16, 'OPV1', 'Done'),
(216, '2022-02-21', 16, 'PCV1', 'Done'),
(217, '2022-02-22', 17, 'PENTA1', 'Done'),
(218, '2022-02-22', 17, 'OPV1', 'Done'),
(219, '2022-02-22', 17, 'PCV1', 'Done'),
(220, '2022-02-23', 22, 'HEP B', 'Done'),
(221, '2022-02-24', 18, 'PENTA1', 'Done'),
(222, '2022-02-24', 18, 'OPV1', 'Done'),
(223, '2022-02-24', 18, 'PCV1', 'Done'),
(224, '2022-03-01', 19, 'PENTA1', 'Done'),
(225, '2022-03-01', 19, 'OPV1', 'Done'),
(226, '2022-03-01', 19, 'PCV1', 'Done'),
(227, '2022-03-03', 23, 'HEP B', 'Done'),
(228, '2022-03-07', 20, 'BCG', 'Done'),
(229, '2022-03-10', 21, 'BCG', 'Done'),
(230, '2022-03-11', 24, 'HEP B', 'Done'),
(231, '2022-03-12', 9, 'MMR2', 'Done'),
(232, '2022-03-14', 25, 'HEP B', 'Done'),
(233, '2022-03-15', 22, 'BCG', 'Done'),
(234, '2022-03-17', 26, 'HEP B', 'Done'),
(235, '2022-03-21', 10, 'MMR2', 'Done'),
(236, '2022-03-22', 11, 'MMR2', 'Done'),
(237, '2022-03-23', 16, 'PENTA2', 'Done'),
(238, '2022-03-23', 16, 'OPV2', 'Done'),
(239, '2022-03-23', 16, 'PCV2', 'Done'),
(240, '2022-03-23', 23, 'BCG', 'Done'),
(241, '2022-03-24', 17, 'PENTA2', 'Done'),
(242, '2022-03-24', 17, 'OPV2', 'Done'),
(243, '2022-03-24', 17, 'PCV2', 'Done'),
(244, '2022-03-26', 18, 'PENTA2', 'Done'),
(245, '2022-03-26', 18, 'OPV2', 'Done'),
(246, '2022-03-26', 18, 'PCV2', 'Done'),
(247, '2022-03-27', 12, 'MMR2', 'Done'),
(248, '2022-03-31', 13, 'MMR2', 'Done'),
(249, '2022-03-31', 19, 'PENTA2', 'Done'),
(250, '2022-03-31', 19, 'OPV2', 'Done'),
(251, '2022-03-31', 19, 'PCV2', 'Done'),
(252, '2022-03-31', 24, 'BCG', 'Done'),
(253, '2022-04-01', 20, 'PENTA1', 'Done'),
(254, '2022-04-01', 20, 'OPV1', 'Done'),
(255, '2022-04-01', 20, 'PCV1', 'Done'),
(256, '2022-04-02', 14, 'MMR2', 'Done'),
(257, '2022-04-03', 25, 'BCG', 'Done'),
(258, '2022-04-04', 21, 'PENTA1', 'Done'),
(259, '2022-04-04', 21, 'OPV1', 'Done'),
(260, '2022-04-04', 21, 'PCV1', 'Done'),
(261, '2022-04-06', 26, 'BCG', 'Done'),
(262, '2022-04-09', 22, 'PENTA1', 'Done'),
(263, '2022-04-09', 22, 'OPV1', 'Done'),
(264, '2022-04-09', 22, 'PCV1', 'Done'),
(265, '2022-04-17', 23, 'PENTA1', 'Done'),
(266, '2022-04-17', 23, 'OPV1', 'Done'),
(267, '2022-04-17', 23, 'PCV1', 'Done'),
(268, '2022-04-22', 16, 'PENTA3', 'Done'),
(269, '2022-04-22', 16, 'OPV3', 'Done'),
(270, '2022-04-22', 16, 'IPV', 'Done'),
(271, '2022-04-22', 16, 'PCV3', 'Done'),
(272, '2022-04-23', 17, 'PENTA3', 'Done'),
(273, '2022-04-23', 17, 'OPV3', 'Done'),
(274, '2022-04-23', 17, 'IPV', 'Done'),
(275, '2022-04-23', 17, 'PCV3', 'Done'),
(276, '2022-04-25', 18, 'PENTA3', 'Done'),
(277, '2022-04-25', 18, 'OPV3', 'Done'),
(278, '2022-04-25', 18, 'IPV', 'Done'),
(279, '2022-04-25', 18, 'PCV3', 'Done'),
(280, '2022-04-25', 24, 'PENTA1', 'Done'),
(281, '2022-04-25', 24, 'OPV1', 'Done'),
(282, '2022-04-25', 24, 'PCV1', 'Done'),
(283, '2022-04-28', 25, 'PENTA1', 'Done'),
(284, '2022-04-28', 25, 'OPV1', 'Done'),
(285, '2022-04-28', 25, 'PCV1', 'Done'),
(286, '2022-04-30', 19, 'PENTA3', 'Done'),
(287, '2022-04-30', 19, 'OPV3', 'Done'),
(288, '2022-04-30', 19, 'IPV', 'Done'),
(289, '2022-04-30', 19, 'PCV3', 'Done'),
(290, '2022-05-01', 20, 'PENTA2', 'Done'),
(291, '2022-05-01', 20, 'OPV2', 'Done'),
(292, '2022-05-01', 20, 'PCV2', 'Done'),
(293, '2022-05-01', 26, 'PENTA1', 'Done'),
(294, '2022-05-01', 26, 'OPV1', 'Done'),
(295, '2022-05-01', 26, 'PCV1', 'Done'),
(296, '2022-05-02', 15, 'MMR2', 'Done'),
(297, '2022-05-04', 21, 'PENTA2', 'Done'),
(298, '2022-05-04', 21, 'OPV2', 'Done'),
(299, '2022-05-04', 21, 'PCV2', 'Done'),
(300, '2022-05-05', 27, 'HEP B', 'Done'),
(301, '2022-05-08', 28, 'HEP B', 'Done'),
(302, '2022-05-09', 22, 'PENTA2', 'Done'),
(303, '2022-05-09', 22, 'OPV2', 'Done'),
(304, '2022-05-09', 22, 'PCV2', 'Done'),
(305, '2022-05-14', 29, 'HEP B', 'Done'),
(306, '2022-05-17', 23, 'PENTA2', 'Done'),
(307, '2022-05-17', 23, 'OPV2', 'Done'),
(308, '2022-05-17', 23, 'PCV2', 'Done'),
(309, '2022-05-25', 24, 'PENTA2', 'Done'),
(310, '2022-05-25', 24, 'OPV2', 'Done'),
(311, '2022-05-25', 24, 'PCV2', 'Done'),
(312, '2022-05-25', 27, 'BCG', 'Done'),
(313, '2022-05-25', 30, 'HEP B', 'Done'),
(314, '2022-05-28', 25, 'PENTA2', 'Done'),
(315, '2022-05-28', 25, 'OPV2', 'Done'),
(316, '2022-05-28', 25, 'PCV2', 'Done'),
(317, '2022-05-28', 28, 'BCG', 'Done'),
(318, '2022-05-31', 20, 'PENTA3', 'Done'),
(319, '2022-05-31', 20, 'OPV3', 'Done'),
(320, '2022-05-31', 20, 'IPV', 'Done'),
(321, '2022-05-31', 20, 'PCV3', 'Done'),
(322, '2022-05-31', 26, 'PENTA2', 'Done'),
(323, '2022-05-31', 26, 'OPV2', 'Done'),
(324, '2022-05-31', 26, 'PCV2', 'Done'),
(325, '2022-06-03', 21, 'PENTA3', 'Done'),
(326, '2022-06-03', 21, 'OPV3', 'Done'),
(327, '2022-06-03', 21, 'IPV', 'Done'),
(328, '2022-06-03', 21, 'PCV3', 'Done'),
(329, '2022-06-03', 29, 'BCG', 'Done'),
(330, '2022-06-08', 22, 'PENTA3', 'Done'),
(331, '2022-06-08', 22, 'OPV3', 'Done'),
(332, '2022-06-08', 22, 'IPV', 'Done'),
(333, '2022-06-08', 22, 'PCV3', 'Done'),
(334, '2022-06-13', 31, 'HEP B', 'Done'),
(335, '2022-06-14', 30, 'BCG', 'Done'),
(336, '2022-06-16', 23, 'PENTA3', 'Done'),
(337, '2022-06-16', 23, 'OPV3', 'Done'),
(338, '2022-06-16', 23, 'IPV', 'Done'),
(339, '2022-06-16', 23, 'PCV3', 'Done'),
(340, '2022-06-19', 27, 'PENTA1', 'Done'),
(341, '2022-06-19', 27, 'OPV1', 'Done'),
(342, '2022-06-19', 27, 'PCV1', 'Done'),
(343, '2022-06-22', 28, 'PENTA1', 'Done'),
(344, '2022-06-22', 28, 'OPV1', 'Done'),
(345, '2022-06-22', 28, 'PCV1', 'Done'),
(346, '2022-06-24', 24, 'PENTA3', 'Done'),
(347, '2022-06-24', 24, 'OPV3', 'Done'),
(348, '2022-06-24', 24, 'IPV', 'Done'),
(349, '2022-06-24', 24, 'PCV3', 'Done'),
(350, '2022-06-27', 25, 'PENTA3', 'Done'),
(351, '2022-06-27', 25, 'OPV3', 'Done'),
(352, '2022-06-27', 25, 'IPV', 'Done'),
(353, '2022-06-27', 25, 'PCV3', 'Done'),
(354, '2022-06-28', 29, 'PENTA1', 'Done'),
(355, '2022-06-28', 29, 'OPV1', 'Done'),
(356, '2022-06-28', 29, 'PCV1', 'Done'),
(357, '2022-06-30', 26, 'PENTA3', 'Done'),
(358, '2022-06-30', 26, 'OPV3', 'Done'),
(359, '2022-06-30', 26, 'IPV', 'Done'),
(360, '2022-06-30', 26, 'PCV3', 'Done'),
(361, '2022-07-03', 31, 'BCG', 'Done'),
(362, '2022-07-09', 30, 'PENTA1', 'Done'),
(363, '2022-07-09', 30, 'OPV1', 'Done'),
(364, '2022-07-09', 30, 'PCV1', 'Done'),
(365, '2022-07-19', 27, 'PENTA2', 'Missed'),
(366, '2022-07-22', 28, 'PENTA2', 'Done'),
(367, '2022-07-22', 28, 'OPV2', 'Done'),
(368, '2022-07-22', 28, 'PCV2', 'Done'),
(369, '2022-07-28', 29, 'PENTA2', 'Missed'),
(370, '2022-07-28', 31, 'PENTA1', 'Done'),
(371, '2022-07-28', 31, 'OPV1', 'Done'),
(372, '2022-07-28', 31, 'PCV1', 'Done'),
(373, '2022-08-08', 30, 'PENTA2', 'Done'),
(374, '2022-08-08', 30, 'OPV2', 'Done'),
(375, '2022-08-08', 30, 'PCV2', 'Done'),
(376, '2022-08-21', 28, 'PENTA3', 'Done'),
(377, '2022-08-21', 28, 'OPV3', 'Done'),
(378, '2022-08-21', 28, 'IPV', 'Done'),
(379, '2022-08-21', 28, 'PCV3', 'Done'),
(380, '2022-08-27', 31, 'PENTA2', 'Done'),
(381, '2022-08-27', 31, 'OPV2', 'Done'),
(382, '2022-08-27', 31, 'PCV2', 'Done'),
(383, '2022-09-07', 30, 'PENTA3', 'Done'),
(384, '2022-09-07', 30, 'OPV3', 'Done'),
(385, '2022-09-07', 30, 'IPV', 'Done'),
(386, '2022-09-07', 30, 'PCV3', 'Done'),
(387, '2022-09-26', 31, 'PENTA3', 'Done'),
(388, '2022-09-26', 31, 'OPV3', 'Done'),
(389, '2022-09-26', 31, 'IPV', 'Done'),
(390, '2022-09-26', 31, 'PCV3', 'Done'),
(391, '2022-10-04', 16, 'MMR1', 'Done'),
(392, '2022-10-05', 17, 'MMR1', 'Done'),
(393, '2022-10-07', 18, 'MMR1', 'Done'),
(394, '2022-10-12', 19, 'MMR1', 'Done'),
(395, '2022-11-12', 20, 'MMR1', 'Missed'),
(396, '2022-11-15', 21, 'MMR1', 'Missed'),
(397, '2022-11-20', 22, 'MMR1', 'Done'),
(398, '2022-11-28', 23, 'MMR1', 'Done'),
(399, '2022-12-06', 24, 'MMR1', 'Done'),
(400, '2022-12-09', 25, 'MMR1', 'Done'),
(401, '2022-12-12', 26, 'MMR1', 'Done'),
(402, '2023-01-01', 32, 'HEP B', 'Done'),
(403, '2023-01-06', 33, 'HEP B', 'Done'),
(404, '2023-01-07', 16, 'MMR2', 'Done'),
(405, '2023-01-07', 34, 'HEP B', 'Done'),
(406, '2023-01-07', 35, 'HEP B', 'Done'),
(407, '2023-01-08', 17, 'MMR2', 'Done'),
(408, '2023-01-10', 18, 'MMR2', 'Done'),
(409, '2023-01-13', 36, 'HEP B', 'Done'),
(410, '2023-01-15', 19, 'MMR2', 'Done'),
(411, '2023-01-21', 32, 'BCG', 'Done'),
(412, '2023-01-26', 33, 'BCG', 'Done'),
(413, '2023-01-27', 34, 'BCG', 'Done'),
(414, '2023-01-27', 35, 'BCG', 'Done'),
(415, '2023-02-02', 28, 'MMR1', 'Done'),
(416, '2023-02-02', 36, 'BCG', 'Done'),
(417, '2023-02-06', 37, 'HEP B', 'Done'),
(418, '2023-02-15', 32, 'PENTA1', 'Done'),
(419, '2023-02-15', 32, 'OPV1', 'Done'),
(420, '2023-02-15', 32, 'PCV1', 'Done'),
(421, '2023-02-19', 30, 'MMR1', 'Missed'),
(422, '2023-02-20', 33, 'PENTA1', 'Done'),
(423, '2023-02-20', 33, 'OPV1', 'Done'),
(424, '2023-02-20', 33, 'PCV1', 'Done'),
(425, '2023-02-21', 34, 'PENTA1', 'Done'),
(426, '2023-02-21', 34, 'OPV1', 'Done'),
(427, '2023-02-21', 34, 'PCV1', 'Done'),
(428, '2023-02-21', 35, 'PENTA1', 'Done'),
(429, '2023-02-21', 35, 'OPV1', 'Done'),
(430, '2023-02-21', 35, 'PCV1', 'Done'),
(431, '2023-02-21', 38, 'HEP B', 'Done'),
(432, '2023-02-23', 22, 'MMR2', 'Done'),
(433, '2023-02-23', 39, 'HEP B', 'Done'),
(434, '2023-02-26', 37, 'BCG', 'Done'),
(435, '2023-02-27', 36, 'PENTA1', 'Done'),
(436, '2023-02-27', 36, 'OPV1', 'Done'),
(437, '2023-02-27', 36, 'PCV1', 'Done'),
(438, '2023-02-28', 40, 'HEP B', 'Done'),
(439, '2023-03-03', 23, 'MMR2', 'Done'),
(440, '2023-03-10', 31, 'MMR1', 'Done'),
(441, '2023-03-11', 24, 'MMR2', 'Done'),
(442, '2023-03-12', 41, 'HEP B', 'Done'),
(443, '2023-03-13', 38, 'BCG', 'Done'),
(444, '2023-03-14', 25, 'MMR2', 'Done'),
(445, '2023-03-15', 39, 'BCG', 'Done'),
(446, '2023-03-16', 42, 'HEP B', 'Done'),
(447, '2023-03-16', 43, 'HEP B', 'Done'),
(448, '2023-03-17', 26, 'MMR2', 'Done'),
(449, '2023-03-17', 32, 'PENTA2', 'Missed'),
(450, '2023-03-20', 40, 'BCG', 'Done'),
(451, '2023-03-22', 33, 'PENTA2', 'Done'),
(452, '2023-03-22', 33, 'OPV2', 'Done'),
(453, '2023-03-22', 33, 'PCV2', 'Done'),
(454, '2023-03-23', 34, 'PENTA2', 'Missed'),
(455, '2023-03-23', 35, 'PENTA2', 'Done'),
(456, '2023-03-23', 35, 'OPV2', 'Done'),
(457, '2023-03-23', 35, 'PCV2', 'Done'),
(458, '2023-03-23', 37, 'PENTA1', 'Done'),
(459, '2023-03-23', 37, 'OPV1', 'Done'),
(460, '2023-03-23', 37, 'PCV1', 'Done'),
(461, '2023-03-29', 36, 'PENTA2', 'Done'),
(462, '2023-03-29', 36, 'OPV2', 'Missed'),
(463, '2023-04-01', 41, 'BCG', 'Done'),
(464, '2023-04-05', 42, 'BCG', 'Done'),
(465, '2023-04-05', 43, 'BCG', 'Done'),
(466, '2023-04-07', 38, 'PENTA1', 'Done'),
(467, '2023-04-07', 38, 'OPV1', 'Done'),
(468, '2023-04-07', 38, 'PCV1', 'Done'),
(469, '2023-04-09', 39, 'PENTA1', 'Done'),
(470, '2023-04-09', 39, 'OPV1', 'Done'),
(471, '2023-04-09', 39, 'PCV1', 'Done'),
(472, '2023-04-14', 40, 'PENTA1', 'Done'),
(473, '2023-04-14', 40, 'OPV1', 'Done'),
(474, '2023-04-14', 40, 'PCV1', 'Done'),
(475, '2023-04-21', 33, 'PENTA3', 'Done'),
(476, '2023-04-21', 33, 'OPV3', 'Done'),
(477, '2023-04-21', 33, 'IPV', 'Done'),
(478, '2023-04-21', 33, 'PCV3', 'Done'),
(479, '2023-04-22', 35, 'PENTA3', 'Done'),
(480, '2023-04-22', 35, 'OPV3', 'Done'),
(481, '2023-04-22', 35, 'IPV', 'Done'),
(482, '2023-04-22', 35, 'PCV3', 'Done'),
(483, '2023-04-22', 37, 'PENTA2', 'Done'),
(484, '2023-04-22', 37, 'OPV2', 'Done'),
(485, '2023-04-22', 37, 'PCV2', 'Done'),
(486, '2023-04-26', 41, 'PENTA1', 'Done'),
(487, '2023-04-26', 41, 'OPV1', 'Done'),
(488, '2023-04-26', 41, 'PCV1', 'Done'),
(489, '2023-04-30', 42, 'PENTA1', 'Done'),
(490, '2023-04-30', 42, 'OPV1', 'Done'),
(491, '2023-04-30', 42, 'PCV1', 'Done'),
(492, '2023-04-30', 43, 'PENTA1', 'Done'),
(493, '2023-04-30', 43, 'OPV1', 'Done'),
(494, '2023-04-30', 43, 'PCV1', 'Done'),
(495, '2023-05-07', 38, 'PENTA2', 'Missed'),
(496, '2023-05-08', 28, 'MMR2', 'Done'),
(497, '2023-05-09', 39, 'PENTA2', 'Done'),
(498, '2023-05-09', 39, 'OPV2', 'Done'),
(499, '2023-05-09', 39, 'PCV2', 'Done'),
(500, '2023-05-14', 40, 'PENTA2', 'Missed'),
(501, '2023-05-22', 37, 'PENTA3', 'Done'),
(502, '2023-05-22', 37, 'OPV3', 'Done'),
(503, '2023-05-22', 37, 'IPV', 'Done'),
(504, '2023-05-22', 37, 'PCV3', 'Done'),
(505, '2023-05-26', 41, 'PENTA2', 'Done'),
(506, '2023-05-26', 41, 'OPV2', 'Done'),
(507, '2023-05-26', 41, 'PCV2', 'Done'),
(508, '2023-05-30', 42, 'PENTA2', 'Done'),
(509, '2023-05-30', 42, 'OPV2', 'Done'),
(510, '2023-05-30', 42, 'PCV2', 'Done'),
(511, '2023-05-30', 43, 'PENTA2', 'Done'),
(512, '2023-05-30', 43, 'OPV2', 'Done'),
(513, '2023-05-30', 43, 'PCV2', 'Done'),
(514, '2023-06-08', 39, 'PENTA3', 'Done'),
(515, '2023-06-08', 39, 'OPV3', 'Done'),
(516, '2023-06-08', 39, 'IPV', 'Done'),
(517, '2023-06-08', 39, 'PCV3', 'Done'),
(518, '2023-06-13', 31, 'MMR2', 'Done'),
(519, '2023-06-25', 41, 'PENTA3', 'Done'),
(520, '2023-06-25', 41, 'OPV3', 'Done'),
(521, '2023-06-25', 41, 'IPV', 'Done'),
(522, '2023-06-25', 41, 'PCV3', 'Done'),
(523, '2023-06-29', 42, 'PENTA3', 'Done'),
(524, '2023-06-29', 42, 'OPV3', 'Done'),
(525, '2023-06-29', 42, 'IPV', 'Done'),
(526, '2023-06-29', 42, 'PCV3', 'Done'),
(527, '2023-06-29', 43, 'PENTA3', 'Done'),
(528, '2023-06-29', 43, 'OPV3', 'Done'),
(529, '2023-06-29', 43, 'IPV', 'Done'),
(530, '2023-06-29', 43, 'PCV3', 'Done'),
(531, '2023-08-03', 44, 'HEP B', 'Done'),
(532, '2023-08-08', 45, 'HEP B', 'Done'),
(533, '2023-08-09', 46, 'HEP B', 'Done'),
(534, '2023-08-23', 44, 'BCG', 'Done'),
(535, '2023-08-28', 45, 'BCG', 'Done'),
(536, '2023-08-29', 46, 'BCG', 'Done'),
(537, '2023-09-01', 47, 'HEP B', 'Done'),
(538, '2023-09-13', 48, 'HEP B', 'Done'),
(539, '2023-09-17', 44, 'PENTA1', 'Done'),
(540, '2023-09-17', 44, 'OPV1', 'Done'),
(541, '2023-09-17', 44, 'PCV1', 'Done'),
(542, '2023-09-21', 47, 'BCG', 'Done'),
(543, '2023-09-22', 45, 'PENTA1', 'Done'),
(544, '2023-09-22', 45, 'OPV1', 'Done'),
(545, '2023-09-22', 45, 'PCV1', 'Done'),
(546, '2023-09-23', 46, 'PENTA1', 'Done'),
(547, '2023-09-23', 46, 'OPV1', 'Done'),
(548, '2023-09-23', 46, 'PCV1', 'Done'),
(549, '2023-10-03', 33, 'MMR1', 'Done'),
(550, '2023-10-03', 48, 'BCG', 'Done'),
(551, '2023-10-04', 35, 'MMR1', 'Done'),
(552, '2023-10-16', 47, 'PENTA1', 'Done'),
(553, '2023-10-16', 47, 'OPV1', 'Done'),
(554, '2023-10-16', 47, 'PCV1', 'Done'),
(555, '2023-10-17', 44, 'PENTA2', 'Missed'),
(556, '2023-10-22', 45, 'PENTA2', 'Done'),
(557, '2023-10-22', 45, 'OPV2', 'Done'),
(558, '2023-10-22', 45, 'PCV2', 'Done'),
(559, '2023-10-23', 46, 'PENTA2', 'Missed'),
(560, '2023-10-27', 49, 'HEP B', 'Done'),
(561, '2023-10-28', 48, 'PENTA1', 'Done'),
(562, '2023-10-28', 48, 'OPV1', 'Done'),
(563, '2023-10-28', 48, 'PCV1', 'Done'),
(564, '2023-11-03', 37, 'MMR1', 'Done'),
(565, '2023-11-15', 47, 'PENTA2', 'Done'),
(566, '2023-11-15', 47, 'OPV2', 'Done'),
(567, '2023-11-15', 47, 'PCV2', 'Done'),
(568, '2023-11-16', 49, 'BCG', 'Done'),
(569, '2023-11-20', 39, 'MMR1', 'Done'),
(570, '2023-11-21', 45, 'PENTA3', 'Done'),
(571, '2023-11-21', 45, 'OPV3', 'Done'),
(572, '2023-11-21', 45, 'IPV', 'Done'),
(573, '2023-11-21', 45, 'PCV3', 'Done'),
(574, '2023-11-25', 50, 'HEP B', 'Done'),
(575, '2023-11-27', 48, 'PENTA2', 'Done'),
(576, '2023-11-27', 48, 'OPV2', 'Done'),
(577, '2023-11-27', 48, 'PCV2', 'Done'),
(578, '2023-12-07', 41, 'MMR1', 'Done'),
(579, '2023-12-11', 42, 'MMR1', 'Done'),
(580, '2023-12-11', 43, 'MMR1', 'Scheduled'),
(581, '2023-12-22', 49, 'PENTA1', 'Scheduled'),
(582, '2023-12-15', 47, 'PENTA3', 'Scheduled'),
(583, '2023-12-15', 50, 'BCG', 'Scheduled'),
(584, '2023-12-27', 48, 'PENTA3', 'Done'),
(585, '2023-12-27', 48, 'OPV3', 'Scheduled'),
(586, '2024-01-06', 33, 'MMR2', 'Done'),
(587, '2024-01-07', 35, 'MMR2', 'Done'),
(588, '2024-02-06', 37, 'MMR2', 'Done'),
(589, '2024-02-23', 39, 'MMR2', 'Done'),
(590, '2024-03-11', 41, 'MMR2', 'Done'),
(591, '2024-03-15', 42, 'MMR2', 'Done'),
(592, '2024-05-04', 45, 'MMR1', 'Scheduled'),
(596, '2023-12-10', 53, 'BCG', 'Done');

-- --------------------------------------------------------

--
-- Stand-in structure for view `nbsched_view`
-- (See below for the actual view)
--
CREATE TABLE `nbsched_view` (
`SchedID` int(11)
,`SchedDate` date
,`SchedStatus` varchar(255)
,`NewbornID` int(11)
,`LastName` varchar(255)
,`FirstName` varchar(255)
,`MiddleName` varchar(255)
,`DOB` date
,`Sex` varchar(255)
,`Address` varchar(255)
,`Guardian` varchar(255)
,`ImmunizationStatus` varchar(255)
,`Username` varchar(255)
,`VaccineID` varchar(255)
,`VaccineName` varchar(255)
,`DiseasePrevented` varchar(255)
,`RecipientType` varchar(255)
,`QtyOnHand` int(11)
,`QtyReserved` int(11)
,`QtyAvailable` int(11)
,`VaccineStatus` varchar(255)
);

-- --------------------------------------------------------

--
-- Table structure for table `newborn_tbl`
--

CREATE TABLE `newborn_tbl` (
  `NewbornID` int(11) NOT NULL,
  `LastName` varchar(255) NOT NULL,
  `FirstName` varchar(255) NOT NULL,
  `MiddleName` varchar(255) DEFAULT NULL,
  `DOB` date NOT NULL,
  `Sex` varchar(255) NOT NULL,
  `Address` varchar(255) NOT NULL,
  `Guardian` varchar(255) NOT NULL,
  `ImmunizationStatus` varchar(255) NOT NULL,
  `Username` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `newborn_tbl`
--

INSERT INTO `newborn_tbl` (`NewbornID`, `LastName`, `FirstName`, `MiddleName`, `DOB`, `Sex`, `Address`, `Guardian`, `ImmunizationStatus`, `Username`) VALUES
(1, 'Smith', 'Emma', 'Rodriguez', '2021-01-13', 'F', 'Talipapa, Haligue Silangan, Batangas City', ' Charlotte Smith', 'PI', 'emsmith'),
(2, 'Johnson', 'Olivia', 'Marquez', '2021-01-23', 'F', 'Centro Maysahing, Haligue Silangan, Batangas City', ' Dennice Johnson', 'PI', 'john_olivia'),
(3, 'Williams', 'Noah', 'Bagui', '2021-01-29', 'M', 'Ibayiw, Haligue Silangan, Batangas City', ' Lovely Williams', 'PI', 'williamsbagui'),
(4, 'Brown', 'Liam', 'Franco', '2021-02-05', 'M', 'Ibayiw, Haligue Silangan, Batangas City', ' Desah Brown', 'FI', 'brownliam'),
(5, 'Jones', 'Sophia', 'Balmes', '2021-02-07', 'F', 'Binotbot, Haligue Silangan, Batangas City', ' Jen Jones', 'FI', 'jonasbalmes'),
(6, 'Miller', 'Mason', 'Dilag', '2021-02-09', 'M', 'Talipapa, Haligue Silangan, Batangas City', ' Venus Miller', 'FI', 'millermason'),
(7, 'Davis', 'Ava', 'Banaag', '2021-02-09', 'F', 'Mabayabas, Haligue Silangan, Batangas City', ' Ellaine Davis', 'FI', 'davisava'),
(8, 'Garcia', 'Jacob', 'Candor', '2021-02-15', 'M', 'Mabayabas, Haligue Silangan, Batangas City', ' Patricia Garcia', 'FI', 'garsee99a'),
(9, 'Rodriguez', 'William', 'Sanchez', '2021-03-12', 'M', 'Talipapa, Haligue Silangan, Batangas City', ' Elle Rodriguez', 'FI', 'willchez'),
(10, 'Wilson', 'Isabella', 'Festijo', '2021-03-21', 'F', 'Ibayiw, Haligue Silangan, Batangas City', ' Hannah Wilson', 'FI', 'isa90tijo'),
(11, 'Martinez', 'Ethan', 'Magsino', '2021-03-22', 'M', 'Binotbot, Haligue Silangan, Batangas City', ' Madison Martinez', 'FI', 'martineeeez'),
(12, 'Anderson', 'Mia', 'Reyes', '2021-03-27', 'F', 'Centro Maysahing, Haligue Silangan, Batangas City', ' Andrea Anderson', 'FI', 'miareyes'),
(13, 'Taylor', 'James', 'Bathan', '2021-03-31', 'M', 'Talipapa, Haligue Silangan, Batangas City', ' Trishia Taylor', 'FI', 'jamesis'),
(14, 'Thomas', 'Alexander', 'Huertas', '2021-04-02', 'M', 'Mabayabas, Haligue Silangan, Batangas City', ' Amelia Thomas', 'FI', 'thomastrain'),
(15, 'Hernandez', 'Michelle', 'Bantugon', '2021-05-02', 'F', 'Binotbot, Haligue Silangan, Batangas City', ' Kristine Hernandez', 'FI', 'its_michelle'),
(16, 'Moore', 'Benjamin', 'Dimaano', '2022-01-07', 'M', 'Centro Maysahing, Haligue Silangan, Batangas City', ' Jhanessa Moore', 'FI', 'naaano'),
(17, 'Martin', 'Elijah', 'Dimaandal', '2022-01-08', 'M', 'Talipapa, Haligue Silangan, Batangas City', ' Elizabeth Martin', 'FI', 'eldimaandal'),
(18, 'Jackson', 'Daniela', 'Ascan', '2022-01-10', 'F', 'Ibayiw, Haligue Silangan, Batangas City', ' Sofia Jackson', 'FI', 'jackzond'),
(19, 'Thompson', 'Aiden', 'Dela Cruz', '2022-01-15', 'M', 'Talipapa, Haligue Silangan, Batangas City', ' Jamie Thompson', 'FI', 'aidened'),
(20, 'White', 'Lhea', 'Soriano', '2022-02-15', 'F', 'Mabayabas, Haligue Silangan, Batangas City', ' Jannah White', 'PI', 'lheasw_90'),
(21, 'Lopez', 'Matthew', 'Cueto', '2022-02-18', 'M', 'Binotbot, Haligue Silangan, Batangas City', ' Dara Lopez', 'PI', 'lopezm'),
(22, 'Lee', 'Abigail', 'Lumdang', '2022-02-23', 'F', 'Centro Maysahing, Haligue Silangan, Batangas City', ' Evelyn Lee', 'FI', 'abilee'),
(23, 'Gonzalez', 'Lucas', 'Cueto', '2022-03-03', 'M', 'Ibayiw, Haligue Silangan, Batangas City', ' Avery Gonzalez', 'FI', 'lucascueto'),
(24, 'Harris', 'Jackson', 'Morales', '2022-03-11', 'M', 'Talipapa, Haligue Silangan, Batangas City', ' Kiara Harris', 'FI', 'jackharris'),
(25, 'Clark', 'Emily', 'Castillo', '2022-03-14', 'F', 'Mabayabas, Haligue Silangan, Batangas City', ' Aevelyn Clark', 'FI', 'ilovemily'),
(26, 'Lewis', 'David', 'Guzman', '2022-03-17', 'M', 'Binotbot, Haligue Silangan, Batangas City', ' Dianne Lewis', 'FI', 'lewislouise'),
(27, 'Robinson', 'Oliver', 'Mercado', '2022-05-05', 'M', 'Centro Maysahing, Haligue Silangan, Batangas City', ' Angel Robinson', 'PI', 'olivercity'),
(28, 'Walker', 'Jia', 'Obrador', '2022-05-08', 'F', 'Mabayabas, Haligue Silangan, Batangas City', ' Catherine Walker', 'FI', 'jia_walker'),
(29, 'Perez', 'Joseph', 'Comia', '2022-05-14', 'M', 'Centro Maysahing, Haligue Silangan, Batangas City', ' Maria Perez', 'PI', 'joscomia'),
(30, 'Eguia', 'Jhanessa', 'Tamaray', '2022-05-25', 'F', 'Mabayabas, Haligue Silangan, Batangas City', ' Louisa Eguia', 'PI', 'jhaneguia'),
(31, 'Bernardo', 'Kathryn', 'Mendoza', '2022-06-13', 'F', 'Ibayiw, Haligue Silangan, Batangas City', ' Loida Bernardo', 'NI', 'freeKath'),
(32, 'Padilla', 'Daniel', 'Estrada', '2023-01-01', 'M', 'Mabayabas, Haligue Silangan, Batangas City', ' Karla Padilla', 'PI', 'djcheetah'),
(33, 'Montes', 'Julia', 'Espina', '2023-01-06', 'F', 'Centro Maysahing, Haligue Silangan, Batangas City', ' Julliana Montes', 'NI', 'montesjuls'),
(34, 'Reid', 'James', 'Malabanan', '2023-01-07', 'M', 'Centro Maysahing, Haligue Silangan, Batangas City', ' Ysa Reid', 'PI', 'jamesreads'),
(35, 'Cuenca', 'Jake', 'Versosa', '2023-01-07', 'M', 'Ibayiw, Haligue Silangan, Batangas City', ' Kylie Cuenca', 'NI', 'cuencabtg'),
(36, 'Yan', 'Rico', 'Noche', '2023-01-13', 'M', 'Mabayabas, Haligue Silangan, Batangas City', ' Clarinda Yan', 'PI', 'ricococo'),
(37, 'Barretto', 'Claudine', 'Santiago', '2023-02-06', 'F', 'Binotbot, Haligue Silangan, Batangas City', ' Kiana Barretto', 'FI', 'clauds_77'),
(38, 'Abrenica', 'Aljur', 'Valenciano', '2023-02-21', 'M', 'Mabayabas, Haligue Silangan, Batangas City', ' Ana Abrenica', 'PI', 'aljourney'),
(39, 'Brillantes', 'Andrea', 'Mirano', '2023-02-23', 'F', 'Binotbot, Haligue Silangan, Batangas City', ' Mina Brillantes', 'FI', 'brilliant'),
(40, 'Martin', 'Coco', 'Meniosa', '2023-02-28', 'M', 'Binotbot, Haligue Silangan, Batangas City', ' Yvanna Martin', 'PI', 'cocomelon'),
(41, 'Collins', 'Zues', 'Roxas', '2023-03-12', 'M', 'Ibayiw, Haligue Silangan, Batangas City', ' Ciara Collins', 'FI', 'callmecollins'),
(42, 'Natividad', 'Nikko', 'Agquiz', '2023-03-16', 'M', 'Centro Maysahing, Haligue Silangan, Batangas City', ' Nikka Natividad', 'FI', 'nikkokoko'),
(43, 'Ross', 'Wilbert', 'Manguerra', '2023-03-16', 'M', 'Ibayiw, Haligue Silangan, Batangas City', ' Niana Ross', 'PI', 'wilbert_man'),
(44, 'Quizon', 'Karylle', 'Salazar', '2023-08-03', 'F', 'Mabayabas, Haligue Silangan, Batangas City', ' Nathalie Quizon', 'PI', 'karyllegirl'),
(45, 'Curtis', 'Anne', 'Caag', '2023-10-08', 'F', 'Binotbot, Haligue Silangan, Batangas City', ' Solenn Curtis', 'PI', 'annedyosa'),
(46, 'Navarro', 'Vhong', 'Sandoval', '2023-12-06', 'M', 'Mabayabas, Haligue Silangan, Batangas City', ' Mira Navarro', 'PI', 'vroomvhong'),
(47, 'Ortega', 'Ashley', 'Villavicencio', '2023-12-09', 'F', 'Binotbot, Haligue Silangan, Batangas City', ' Bea Ortega', 'PI', 'angeluvr'),
(48, 'Ocampo', 'Myles', 'Diomampo', '2023-12-10', 'F', 'Ibayiw, Haligue Silangan, Batangas City', ' Luna Ocampo', 'PI', 'ohmylesgod'),
(49, 'Espanto', 'Darren', 'Villalobos', '2023-12-07', 'M', 'Centro Maysahing, Haligue Silangan, Batangas City', ' Vierra Espanto', 'PI', 'darrenesv'),
(50, 'Labajo', 'Jhon Karlos', 'Dalisay', '2023-12-05', 'M', 'Mabayabas, Haligue Silangan, Batangas City', 'Kierra Labajo', 'PI', 'erelabajo'),
(53, 'Cruz', 'Juana', 'Soria', '2023-12-03', 'F', 'Talipapa, Haligue Silangan, Batangas City', 'Aya Cruz', 'PI', 'juanacruz'),
(54, 'Eje', 'Angelo', 'Fernandez', '2023-12-02', 'M', 'Mabayabas, Haligue Silangan, Batangas City', 'Feliz Franci', 'NI', 'francokiid');

-- --------------------------------------------------------

--
-- Stand-in structure for view `paccount_view`
-- (See below for the actual view)
--
CREATE TABLE `paccount_view` (
`PregnantID` int(11)
,`LastName` varchar(255)
,`FirstName` varchar(255)
,`MiddleName` varchar(255)
,`LMP` date
,`EDD` date
,`Trimester` varchar(255)
,`Address` varchar(255)
,`ImmunizationStatus` varchar(255)
,`Username` varchar(255)
,`PhoneNumber` varchar(255)
,`Password` varchar(255)
);

-- --------------------------------------------------------

--
-- Table structure for table `pregnant_tbl`
--

CREATE TABLE `pregnant_tbl` (
  `PregnantID` int(11) NOT NULL,
  `LastName` varchar(255) NOT NULL,
  `FirstName` varchar(255) NOT NULL,
  `MiddleName` varchar(255) DEFAULT NULL,
  `LMP` date NOT NULL,
  `EDD` date NOT NULL,
  `Trimester` varchar(255) NOT NULL,
  `Address` varchar(255) NOT NULL,
  `ImmunizationStatus` varchar(255) NOT NULL,
  `Username` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pregnant_tbl`
--

INSERT INTO `pregnant_tbl` (`PregnantID`, `LastName`, `FirstName`, `MiddleName`, `LMP`, `EDD`, `Trimester`, `Address`, `ImmunizationStatus`, `Username`) VALUES
(1, 'Bailey', 'Nhica', 'Marquez', '2023-02-17', '2023-11-17', 'First', 'Talipapa, Haligue Silangan, Batangas City', 'FI', 'nhicabagui'),
(2, 'Belle', 'Camille', 'Marasigan', '2023-01-12', '2023-10-12', 'First', 'Centro Maysahing, Haligue Silangan, Batangas City', 'FI', 'camillebell'),
(3, 'Gomez', 'Valerie', 'Manalo', '2023-01-02', '2023-10-02', 'Second', 'Ibayiw, Haligue Silangan, Batangas City', 'FI', 'mik2lover'),
(4, 'Kelly', 'Joan', 'Umali', '2023-02-02', '2023-11-02', 'First', 'Ibayiw, Haligue Silangan, Batangas City', 'FI', 'kellykelly'),
(5, 'Fernandez', 'Angel', 'Lascano', '2023-01-08', '2023-10-08', 'Second', 'Binotbot, Haligue Silangan, Batangas City', 'FI', 'fernandeza'),
(6, 'Ward', 'Greta', 'Villarez', '2023-02-13', '2023-11-13', 'First', 'Talipapa, Haligue Silangan, Batangas City', 'FI', 'gretaward'),
(7, 'Cox', 'Samantha', 'De Roxas', '2023-04-02', '2024-01-02', 'Second', 'Mabayabas, Haligue Silangan, Batangas City', 'FI', 'samcox'),
(8, 'Diaz', 'Mae', 'Eguia', '2023-01-05', '2023-10-05', 'Third', 'Mabayabas, Haligue Silangan, Batangas City', 'FI', 'maediaz'),
(9, 'Richardson', 'Cathy', 'Cueto', '2023-02-13', '2023-11-13', 'Third', 'Talipapa, Haligue Silangan, Batangas City', 'FI', 'cathyrichard'),
(10, 'Wood', 'Julie', 'Lumdang', '2023-02-11', '2023-11-11', 'Third', 'Ibayiw, Haligue Silangan, Batangas City', 'FI', 'juliewood'),
(11, 'Watson', 'Ania', 'Cortez', '2023-01-09', '2023-10-09', 'First', 'Binotbot, Haligue Silangan, Batangas City', 'FI', 'aniawatson'),
(12, 'Brook', 'Carla', 'Aguado', '2023-02-01', '2023-11-01', 'First', 'Centro Maysahing, Haligue Silangan, Batangas City', 'FI', 'carlabrook'),
(13, 'Bennett', 'Hariette', 'Villostas', '2023-04-03', '2024-01-03', 'First', 'Talipapa, Haligue Silangan, Batangas City', 'FI', 'hariettebenett'),
(14, 'Gray', 'Mary', 'Landicho', '2023-03-01', '2023-12-01', 'Second', 'Mabayabas, Haligue Silangan, Batangas City', 'FI', 'mary_loves'),
(15, 'James', 'Georgia', 'Galicia', '2023-01-18', '2023-10-18', 'Second', 'Binotbot, Haligue Silangan, Batangas City', 'FI', 'georgiajames'),
(16, 'Reyes', 'Anne', 'Maristela', '2023-02-13', '2023-11-13', 'Second', 'Centro Maysahing, Haligue Silangan, Batangas City', 'FI', 'annereyes'),
(17, 'Cruz', 'Hailey', 'Caag', '2023-02-23', '2023-11-23', 'Third', 'Talipapa, Haligue Silangan, Batangas City', 'FI', 'haileycruz'),
(18, 'Hughes', 'Jenelle', 'Mayuga', '2023-01-04', '2023-10-04', 'First', 'Ibayiw, Haligue Silangan, Batangas City', 'FI', 'jenellesings'),
(19, 'Price', 'Janna', 'Alhambra', '2023-03-03', '2023-12-03', 'Third', 'Talipapa, Haligue Silangan, Batangas City', 'FI', 'jannabff'),
(20, 'Myers', 'Marinella', 'Villavicencio', '2023-01-01', '2023-10-01', 'First', 'Mabayabas, Haligue Silangan, Batangas City', 'FI', 'mariacha'),
(21, 'Long', 'Vea', 'Dalisay', '2023-02-12', '2023-11-12', 'Second', 'Binotbot, Haligue Silangan, Batangas City', 'FI', 'vea__long'),
(22, 'Foster', 'Keena', 'Ilagan', '2023-04-01', '2024-01-01', 'First', 'Centro Maysahing, Haligue Silangan, Batangas City', 'FI', 'kifoster'),
(23, 'Sanders', 'Alliah', 'Rose', '2023-02-16', '2023-11-16', 'First', 'Ibayiw, Haligue Silangan, Batangas City', 'FI', 'alliahrose'),
(24, 'Ross', 'Moriah', 'Espina', '2023-03-15', '2023-12-15', 'Second', 'Talipapa, Haligue Silangan, Batangas City', 'FI', 'avemoriah'),
(25, 'Morales', 'Ellise', 'Laroza', '2023-04-04', '2024-01-04', 'First', 'Mabayabas, Haligue Silangan, Batangas City', 'FI', 'ellise88'),
(26, 'Powell', 'Dennise', 'Castillo', '2023-02-17', '2023-11-17', 'Third', 'Binotbot, Haligue Silangan, Batangas City', 'FI', 'powelldc'),
(27, 'Sullivan', 'Bianca', 'Obiedo', '2023-04-17', '2024-01-17', 'Third', 'Centro Maysahing, Haligue Silangan, Batangas City', 'FI', 'sullivanb'),
(28, 'Russell', 'Grace', 'Salazar', '2023-01-18', '2023-10-18', 'First', 'Mabayabas, Haligue Silangan, Batangas City', 'FI', 'gracell'),
(29, 'Ortiz', 'Loreynne', 'Maala', '2023-02-19', '2023-11-19', 'Third', 'Centro Maysahing, Haligue Silangan, Batangas City', 'FI', 'malorey'),
(30, 'Jenkins', 'Rea', 'Majestrado', '2023-04-23', '2024-01-23', 'Third', 'Talipapa, Haligue Silangan, Batangas City', 'FI', 'jenkinsrea'),
(31, 'Guitierrez', 'Khate', 'Arandia', '2023-01-27', '2023-10-27', 'First', 'Ibayiw, Haligue Silangan, Batangas City', 'FI', 'khate_78'),
(32, 'Perry', 'Helena', 'Abellido', '2023-05-23', '2024-02-23', 'Second', 'Talipapa, Haligue Silangan, Batangas City', 'FI', 'heleeena'),
(33, 'Butler', 'Kayla', 'Catapang', '2023-06-24', '2024-03-24', 'Second', 'Mabayabas, Haligue Silangan, Batangas City', 'NI', 'kaylabc'),
(34, 'Barnes', 'Mikah', 'Borlasa', '2023-07-01', '2024-04-01', 'Third', 'Binotbot, Haligue Silangan, Batangas City', 'NI', 'barneybarnes'),
(35, 'Fisher', 'Aliyah', 'Diesmoz', '2023-04-01', '2024-01-01', 'First', 'Centro Maysahing, Haligue Silangan, Batangas City', 'FI', 'fishergirl'),
(36, 'Henderson', 'Armelyn', 'Legaspi', '2023-06-19', '2024-03-19', 'First', 'Mabayabas, Haligue Silangan, Batangas City', 'NI', 'armelynlh'),
(37, 'Coleman', 'Selena', 'Vergara', '2023-05-17', '2024-02-17', 'Second', 'Centro Maysahing, Haligue Silangan, Batangas City', 'NI', 'selenagoman'),
(38, 'Simmons', 'Thalia', 'Aspre', '2023-04-29', '2024-01-29', 'Third', 'Talipapa, Haligue Silangan, Batangas City', 'FI', 'thaliasims'),
(39, 'Patterson', 'Bella', 'Piol', '2023-08-27', '2024-05-27', 'Second', 'Centro Maysahing, Haligue Silangan, Batangas City', 'NI', 'bella__pat'),
(40, 'Jordan', 'Jemma', 'Coro', '2023-05-30', '2024-02-29', 'First', 'Talipapa, Haligue Silangan, Batangas City', 'NI', 'jordanjem'),
(41, 'Reynolds', 'Aby', 'Dimailig', '2023-04-27', '2024-01-27', 'Second', 'Ibayiw, Haligue Silangan, Batangas City', 'FI', 'abyreynolds'),
(42, 'Hamilton', 'Ellisa', 'Medina', '2023-03-19', '2023-12-19', 'Third', 'Talipapa, Haligue Silangan, Batangas City', 'FI', 'elisahami'),
(43, 'Doctama', 'Lovely', 'Soriano', '2023-06-20', '2024-03-20', 'First', 'Talipapa, Haligue Silangan, Batangas City', 'NI', 'lovelydoc'),
(44, 'Princillo', 'Rochelle', 'Cullarin', '2023-04-27', '2024-01-27', 'First', 'Mabayabas, Haligue Silangan, Batangas City', 'FI', 'princeroch'),
(45, 'Baleros', 'Donna', 'Isla', '2023-02-22', '2023-11-22', 'First', 'Ibayiw, Haligue Silangan, Batangas City', 'FI', 'donnabal'),
(46, 'Catapang', 'Aurlede', 'Abrenica', '2023-07-27', '2024-04-27', 'First', 'Centro Maysahing, Haligue Silangan, Batangas City', 'NI', 'aurlede666'),
(47, 'Bejer', 'Margaret', 'Aguinaldo', '2023-04-17', '2024-01-17', 'First', 'Binotbot, Haligue Silangan, Batangas City', 'FI', 'b3j3rm4'),
(48, 'Razon', 'Ellaine', 'Dimaapi', '2023-07-25', '2024-04-25', 'First', 'Centro Maysahing, Haligue Silangan, Batangas City', 'NI', 'ellaineraz'),
(49, 'Malapitan', 'Maris', 'Maristela', '2023-08-16', '2024-05-16', 'Second', 'Mabayabas, Haligue Silangan, Batangas City', 'NI', 'mamapitan'),
(50, 'Pilit', 'Maria', 'Pasumbal', '2023-06-27', '2024-03-27', 'First', 'Talipapa, Haligue Silangan, Batangas City', 'NI', 'wagipilit'),
(51, 'Guiz', 'Dina', 'Virtusio', '2023-04-28', '2024-01-28', 'Second', 'Ibayiw, Haligue Silangan, Batangas City', 'FI', 'helloguiz'),
(52, 'Amor', 'Bea', 'Endaya', '2023-09-02', '2024-06-22', 'Second', 'Talipapa, Haligue Silangan, Batangas City', 'PI', 'amor.vea'),
(53, 'Acha', 'Maria', 'Banawa', '2023-09-09', '2024-05-30', 'Second', 'Talipapa, Haligue Silangan, Batangas City', 'NI', 'vn.tte');

-- --------------------------------------------------------

--
-- Table structure for table `psched_tbl`
--

CREATE TABLE `psched_tbl` (
  `SchedID` int(11) NOT NULL,
  `SchedDate` date NOT NULL,
  `PregnantID` int(11) NOT NULL,
  `VaccineID` varchar(255) NOT NULL,
  `SchedStatus` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `psched_tbl`
--

INSERT INTO `psched_tbl` (`SchedID`, `SchedDate`, `PregnantID`, `VaccineID`, `SchedStatus`) VALUES
(1, '2023-07-30', 20, 'TDAP1', 'Done'),
(2, '2023-07-31', 3, 'TDAP1', 'Done'),
(3, '2023-08-02', 18, 'TDAP1', 'Done'),
(4, '2023-08-03', 8, 'TDAP1', 'Done'),
(5, '2023-08-06', 5, 'TDAP1', 'Done'),
(6, '2023-08-06', 20, 'TDAP2', 'Done'),
(7, '2023-08-07', 3, 'TDAP2', 'Done'),
(8, '2023-08-07', 11, 'TDAP1', 'Done'),
(9, '2023-08-09', 18, 'TDAP2', 'Done'),
(10, '2023-08-10', 2, 'TDAP1', 'Done'),
(11, '2023-08-10', 8, 'TDAP2', 'Done'),
(12, '2023-08-13', 5, 'TDAP2', 'Done'),
(13, '2023-08-14', 11, 'TDAP2', 'Done'),
(14, '2023-08-16', 15, 'TDAP1', 'Done'),
(15, '2023-08-16', 28, 'TDAP1', 'Done'),
(16, '2023-08-17', 2, 'TDAP2', 'Done'),
(17, '2023-08-23', 15, 'TDAP2', 'Done'),
(18, '2023-08-23', 28, 'TDAP2', 'Done'),
(19, '2023-08-25', 31, 'TDAP1', 'Done'),
(20, '2023-08-30', 12, 'TDAP1', 'Done'),
(21, '2023-08-31', 4, 'TDAP1', 'Done'),
(22, '2023-09-01', 31, 'TDAP2', 'Done'),
(23, '2023-09-06', 12, 'TDAP2', 'Done'),
(24, '2023-09-07', 4, 'TDAP2', 'Done'),
(25, '2023-09-09', 10, 'TDAP1', 'Done'),
(26, '2023-09-10', 21, 'TDAP1', 'Done'),
(27, '2023-09-11', 6, 'TDAP1', 'Done'),
(28, '2023-09-11', 9, 'TDAP1', 'Done'),
(29, '2023-09-11', 16, 'TDAP1', 'Done'),
(30, '2023-09-14', 23, 'TDAP1', 'Done'),
(31, '2023-09-15', 1, 'TDAP1', 'Done'),
(32, '2023-09-15', 26, 'TDAP1', 'Done'),
(33, '2023-09-16', 10, 'TDAP2', 'Done'),
(34, '2023-09-17', 21, 'TDAP2', 'Done'),
(35, '2023-09-17', 29, 'TDAP1', 'Done'),
(36, '2023-09-18', 6, 'TDAP2', 'Done'),
(37, '2023-09-18', 9, 'TDAP2', 'Done'),
(38, '2023-09-18', 16, 'TDAP2', 'Done'),
(39, '2023-09-20', 45, 'TDAP1', 'Done'),
(40, '2023-09-21', 17, 'TDAP1', 'Done'),
(41, '2023-09-21', 23, 'TDAP2', 'Done'),
(42, '2023-09-22', 1, 'TDAP2', 'Done'),
(43, '2023-09-22', 26, 'TDAP2', 'Done'),
(44, '2023-09-24', 29, 'TDAP2', 'Done'),
(45, '2023-09-27', 14, 'TDAP1', 'Done'),
(46, '2023-09-27', 45, 'TDAP2', 'Done'),
(47, '2023-09-28', 17, 'TDAP2', 'Done'),
(48, '2023-09-29', 19, 'TDAP1', 'Done'),
(49, '2023-10-04', 14, 'TDAP2', 'Done'),
(50, '2023-10-06', 19, 'TDAP2', 'Done'),
(51, '2023-10-11', 24, 'TDAP1', 'Done'),
(52, '2023-10-15', 42, 'TDAP1', 'Done'),
(53, '2023-10-18', 24, 'TDAP2', 'Done'),
(54, '2023-10-22', 42, 'TDAP2', 'Done'),
(55, '2023-10-28', 22, 'TDAP1', 'Done'),
(56, '2023-10-28', 35, 'TDAP1', 'Done'),
(57, '2023-10-29', 7, 'TDAP1', 'Done'),
(58, '2023-10-30', 13, 'TDAP1', 'Done'),
(59, '2023-10-31', 25, 'TDAP1', 'Done'),
(60, '2023-11-04', 22, 'TDAP2', 'Done'),
(61, '2023-11-04', 35, 'TDAP2', 'Done'),
(62, '2023-11-05', 7, 'TDAP2', 'Done'),
(63, '2023-11-06', 13, 'TDAP2', 'Done'),
(64, '2023-11-07', 25, 'TDAP2', 'Done'),
(65, '2023-11-13', 27, 'TDAP1', 'Done'),
(66, '2023-11-13', 47, 'TDAP1', 'Done'),
(67, '2023-11-19', 30, 'TDAP1', 'Done'),
(68, '2023-11-20', 27, 'TDAP2', 'Done'),
(69, '2023-11-20', 47, 'TDAP2', 'Done'),
(70, '2023-11-23', 41, 'TDAP1', 'Done'),
(71, '2023-11-23', 44, 'TDAP1', 'Done'),
(72, '2023-11-24', 51, 'TDAP1', 'Done'),
(73, '2023-11-25', 38, 'TDAP1', 'Done'),
(74, '2023-11-26', 30, 'TDAP2', 'Done'),
(75, '2023-11-30', 41, 'TDAP2', 'Done'),
(76, '2023-11-30', 44, 'TDAP2', 'Done'),
(77, '2023-12-01', 51, 'TDAP2', 'Done'),
(78, '2023-12-02', 38, 'TDAP2', 'Done'),
(80, '2023-12-19', 32, 'TDAP1', 'Done'),
(82, '2024-01-15', 36, 'TDAP1', 'Scheduled'),
(83, '2024-01-16', 43, 'TDAP1', 'Scheduled'),
(84, '2024-01-20', 33, 'TDAP1', 'Scheduled'),
(85, '2024-01-23', 50, 'TDAP1', 'Scheduled'),
(86, '2024-01-27', 34, 'TDAP1', 'Scheduled'),
(87, '2024-02-20', 48, 'TDAP1', 'Scheduled'),
(88, '2024-02-22', 46, 'TDAP1', 'Scheduled'),
(89, '2024-03-13', 49, 'TDAP1', 'Scheduled'),
(90, '2024-03-24', 39, 'TDAP1', 'Scheduled'),
(91, '2024-04-12', 52, 'TDAP1', 'Done'),
(92, '2023-12-08', 32, 'TDAP2', 'Done'),
(93, '2024-01-07', 53, 'TDAP1', 'Scheduled'),
(94, '2024-01-08', 53, 'TDAP2', 'Scheduled');

-- --------------------------------------------------------

--
-- Stand-in structure for view `psched_view`
-- (See below for the actual view)
--
CREATE TABLE `psched_view` (
`SchedID` int(11)
,`SchedDate` date
,`SchedStatus` varchar(255)
,`PregnantID` int(11)
,`LastName` varchar(255)
,`FirstName` varchar(255)
,`MiddleName` varchar(255)
,`LMP` date
,`EDD` date
,`Trimester` varchar(255)
,`Address` varchar(255)
,`ImmunizationStatus` varchar(255)
,`Username` varchar(255)
,`VaccineID` varchar(255)
,`VaccineName` varchar(255)
,`DiseasePrevented` varchar(255)
,`RecipientType` varchar(255)
,`QtyOnHand` int(11)
,`QtyReserved` int(11)
,`QtyAvailable` int(11)
,`VaccineStatus` varchar(255)
);

-- --------------------------------------------------------

--
-- Table structure for table `vaccine_tbl`
--

CREATE TABLE `vaccine_tbl` (
  `VaccineID` varchar(255) NOT NULL,
  `VaccineName` varchar(255) NOT NULL,
  `DiseasePrevented` varchar(255) NOT NULL,
  `RecipientType` varchar(255) NOT NULL,
  `QtyOnHand` int(11) NOT NULL,
  `QtyReserved` int(11) NOT NULL,
  `QtyAvailable` int(11) NOT NULL,
  `VaccineStatus` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `vaccine_tbl`
--

INSERT INTO `vaccine_tbl` (`VaccineID`, `VaccineName`, `DiseasePrevented`, `RecipientType`, `QtyOnHand`, `QtyReserved`, `QtyAvailable`, `VaccineStatus`) VALUES
('BCG', 'Bacille Calmette-Guerin', 'Tuberculosis', 'Newborn', 17, 1, 16, 'In Stock'),
('DENGV', 'Dengvaxia', 'Dengue', 'Newborn', 20, 0, 20, 'Discontinued'),
('HEP B', 'Hepatitis B', 'Hepatitis B', 'Newborn', 10, 0, 10, 'In Stock'),
('IPV', 'Inactivated Polio Vaccine ', 'Polio', 'Newborn', 10, 0, 10, 'In Stock'),
('MMR1', 'Measles, Mumps, Rubella ', 'Measles, Mumps, Rubella', 'Newborn', 10, 5, 5, 'In Stock'),
('MMR2', 'Measles, Mumps, Rubella ', 'Measles, Mumps, Rubella', 'Newborn', 10, 3, 7, 'In Stock'),
('OPV1', 'Oral Polio Vaccine', 'Polio', 'Newborn', 10, 0, 10, 'In Stock'),
('OPV2', 'Oral Polio Vaccine', 'Polio', 'Newborn', 10, 1, 9, 'In Stock'),
('OPV3', 'Oral Polio Vaccine', 'Polio', 'Newborn', 10, 0, 10, 'In Stock'),
('PCV1', 'Pneumococcal Conjugate Vaccine', 'Pneumococcal Disease', 'Newborn', 10, 0, 10, 'In Stock'),
('PCV2', 'Pneumococcal Conjugate Vaccine', 'Pneumococcal Disease', 'Newborn', 10, 0, 10, 'In Stock'),
('PCV3', 'Pneumococcal Conjugate Vaccine', 'Pneumococcal Disease', 'Newborn', 10, 1, 9, 'In Stock'),
('PENTA1', 'Pentavalent', 'Dipterya, Tetano, Hepa B., Pertussis, Pulmonya, Meningitis', 'Newborn', 10, 1, 9, 'In Stock'),
('PENTA2', 'Pentavalent', 'Dipterya, Tetano, Hepa B., Pertussis, Pulmonya, Meningitis', 'Newborn', 10, 8, 2, 'In Stock'),
('PENTA3', 'Pentavalent', 'Dipterya, Tetano, Hepa B., Pertussis, Pulmonya, Meningitis', 'Newborn', 10, 1, 9, 'In Stock'),
('RV', 'Rotavirus', 'Rotavirus', 'Newborn', 15, 0, 15, 'Discontinued'),
('TDAP1', 'Tetanus, Diphtheria, and Pertussis', 'Tetanus, Diphtheria, Whooping Cough', 'Pregnant', 18, 10, 8, 'In Stock'),
('TDAP2', 'Tetanus, Diphtheria, and Pertussis', 'Tetanus, Diphtheria, Whooping Cough', 'Pregnant', 9, 1, 8, 'In Stock');

-- --------------------------------------------------------

--
-- Structure for view `nbaccount_view`
--
DROP TABLE IF EXISTS `nbaccount_view`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `nbaccount_view`  AS SELECT `newborn_tbl`.`NewbornID` AS `NewbornID`, `newborn_tbl`.`LastName` AS `LastName`, `newborn_tbl`.`FirstName` AS `FirstName`, `newborn_tbl`.`MiddleName` AS `MiddleName`, `newborn_tbl`.`DOB` AS `DOB`, `newborn_tbl`.`Sex` AS `Sex`, `newborn_tbl`.`Address` AS `Address`, `newborn_tbl`.`Guardian` AS `Guardian`, `newborn_tbl`.`ImmunizationStatus` AS `ImmunizationStatus`, `newborn_tbl`.`Username` AS `Username`, `account_tbl`.`PhoneNumber` AS `PhoneNumber`, `account_tbl`.`Password` AS `Password` FROM (`newborn_tbl` join `account_tbl` on(`newborn_tbl`.`Username` = `account_tbl`.`Username`))  ;

-- --------------------------------------------------------

--
-- Structure for view `nbsched_view`
--
DROP TABLE IF EXISTS `nbsched_view`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `nbsched_view`  AS SELECT `nbsched_tbl`.`SchedID` AS `SchedID`, `nbsched_tbl`.`SchedDate` AS `SchedDate`, `nbsched_tbl`.`SchedStatus` AS `SchedStatus`, `newborn_tbl`.`NewbornID` AS `NewbornID`, `newborn_tbl`.`LastName` AS `LastName`, `newborn_tbl`.`FirstName` AS `FirstName`, `newborn_tbl`.`MiddleName` AS `MiddleName`, `newborn_tbl`.`DOB` AS `DOB`, `newborn_tbl`.`Sex` AS `Sex`, `newborn_tbl`.`Address` AS `Address`, `newborn_tbl`.`Guardian` AS `Guardian`, `newborn_tbl`.`ImmunizationStatus` AS `ImmunizationStatus`, `newborn_tbl`.`Username` AS `Username`, `vaccine_tbl`.`VaccineID` AS `VaccineID`, `vaccine_tbl`.`VaccineName` AS `VaccineName`, `vaccine_tbl`.`DiseasePrevented` AS `DiseasePrevented`, `vaccine_tbl`.`RecipientType` AS `RecipientType`, `vaccine_tbl`.`QtyOnHand` AS `QtyOnHand`, `vaccine_tbl`.`QtyReserved` AS `QtyReserved`, `vaccine_tbl`.`QtyAvailable` AS `QtyAvailable`, `vaccine_tbl`.`VaccineStatus` AS `VaccineStatus` FROM ((`nbsched_tbl` join `newborn_tbl` on(`nbsched_tbl`.`NewbornID` = `newborn_tbl`.`NewbornID`)) join `vaccine_tbl` on(`nbsched_tbl`.`VaccineID` = `vaccine_tbl`.`VaccineID`))  ;

-- --------------------------------------------------------

--
-- Structure for view `paccount_view`
--
DROP TABLE IF EXISTS `paccount_view`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `paccount_view`  AS SELECT `pregnant_tbl`.`PregnantID` AS `PregnantID`, `pregnant_tbl`.`LastName` AS `LastName`, `pregnant_tbl`.`FirstName` AS `FirstName`, `pregnant_tbl`.`MiddleName` AS `MiddleName`, `pregnant_tbl`.`LMP` AS `LMP`, `pregnant_tbl`.`EDD` AS `EDD`, `pregnant_tbl`.`Trimester` AS `Trimester`, `pregnant_tbl`.`Address` AS `Address`, `pregnant_tbl`.`ImmunizationStatus` AS `ImmunizationStatus`, `pregnant_tbl`.`Username` AS `Username`, `account_tbl`.`PhoneNumber` AS `PhoneNumber`, `account_tbl`.`Password` AS `Password` FROM (`pregnant_tbl` join `account_tbl` on(`pregnant_tbl`.`Username` = `account_tbl`.`Username`))  ;

-- --------------------------------------------------------

--
-- Structure for view `psched_view`
--
DROP TABLE IF EXISTS `psched_view`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `psched_view`  AS SELECT `psched_tbl`.`SchedID` AS `SchedID`, `psched_tbl`.`SchedDate` AS `SchedDate`, `psched_tbl`.`SchedStatus` AS `SchedStatus`, `pregnant_tbl`.`PregnantID` AS `PregnantID`, `pregnant_tbl`.`LastName` AS `LastName`, `pregnant_tbl`.`FirstName` AS `FirstName`, `pregnant_tbl`.`MiddleName` AS `MiddleName`, `pregnant_tbl`.`LMP` AS `LMP`, `pregnant_tbl`.`EDD` AS `EDD`, `pregnant_tbl`.`Trimester` AS `Trimester`, `pregnant_tbl`.`Address` AS `Address`, `pregnant_tbl`.`ImmunizationStatus` AS `ImmunizationStatus`, `pregnant_tbl`.`Username` AS `Username`, `vaccine_tbl`.`VaccineID` AS `VaccineID`, `vaccine_tbl`.`VaccineName` AS `VaccineName`, `vaccine_tbl`.`DiseasePrevented` AS `DiseasePrevented`, `vaccine_tbl`.`RecipientType` AS `RecipientType`, `vaccine_tbl`.`QtyOnHand` AS `QtyOnHand`, `vaccine_tbl`.`QtyReserved` AS `QtyReserved`, `vaccine_tbl`.`QtyAvailable` AS `QtyAvailable`, `vaccine_tbl`.`VaccineStatus` AS `VaccineStatus` FROM ((`psched_tbl` join `pregnant_tbl` on(`psched_tbl`.`PregnantID` = `pregnant_tbl`.`PregnantID`)) join `vaccine_tbl` on(`psched_tbl`.`VaccineID` = `vaccine_tbl`.`VaccineID`))  ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account_tbl`
--
ALTER TABLE `account_tbl`
  ADD PRIMARY KEY (`Username`);

--
-- Indexes for table `nbsched_tbl`
--
ALTER TABLE `nbsched_tbl`
  ADD PRIMARY KEY (`SchedID`),
  ADD KEY `nbsched_nbid` (`NewbornID`),
  ADD KEY `nbsched_vaxid` (`VaccineID`);

--
-- Indexes for table `newborn_tbl`
--
ALTER TABLE `newborn_tbl`
  ADD PRIMARY KEY (`NewbornID`),
  ADD KEY `nb_acc` (`Username`);

--
-- Indexes for table `pregnant_tbl`
--
ALTER TABLE `pregnant_tbl`
  ADD PRIMARY KEY (`PregnantID`),
  ADD KEY `p_acc` (`Username`);

--
-- Indexes for table `psched_tbl`
--
ALTER TABLE `psched_tbl`
  ADD PRIMARY KEY (`SchedID`),
  ADD KEY `psched_vaxid` (`VaccineID`),
  ADD KEY `psched_pid` (`PregnantID`);

--
-- Indexes for table `vaccine_tbl`
--
ALTER TABLE `vaccine_tbl`
  ADD PRIMARY KEY (`VaccineID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `nbsched_tbl`
--
ALTER TABLE `nbsched_tbl`
  MODIFY `SchedID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=597;

--
-- AUTO_INCREMENT for table `newborn_tbl`
--
ALTER TABLE `newborn_tbl`
  MODIFY `NewbornID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT for table `pregnant_tbl`
--
ALTER TABLE `pregnant_tbl`
  MODIFY `PregnantID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT for table `psched_tbl`
--
ALTER TABLE `psched_tbl`
  MODIFY `SchedID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=95;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `nbsched_tbl`
--
ALTER TABLE `nbsched_tbl`
  ADD CONSTRAINT `nbsched_nbid` FOREIGN KEY (`NewbornID`) REFERENCES `newborn_tbl` (`NewbornID`),
  ADD CONSTRAINT `nbsched_vaxid` FOREIGN KEY (`VaccineID`) REFERENCES `vaccine_tbl` (`VaccineID`);

--
-- Constraints for table `newborn_tbl`
--
ALTER TABLE `newborn_tbl`
  ADD CONSTRAINT `nb_acc` FOREIGN KEY (`Username`) REFERENCES `account_tbl` (`Username`);

--
-- Constraints for table `pregnant_tbl`
--
ALTER TABLE `pregnant_tbl`
  ADD CONSTRAINT `p_acc` FOREIGN KEY (`Username`) REFERENCES `account_tbl` (`Username`);

--
-- Constraints for table `psched_tbl`
--
ALTER TABLE `psched_tbl`
  ADD CONSTRAINT `psched_pid` FOREIGN KEY (`PregnantID`) REFERENCES `pregnant_tbl` (`PregnantID`),
  ADD CONSTRAINT `psched_vaxid` FOREIGN KEY (`VaccineID`) REFERENCES `vaccine_tbl` (`VaccineID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Erstellungszeit: 23. Jan 2022 um 15:06
-- Server-Version: 10.4.21-MariaDB
-- PHP-Version: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Datenbank: `linkvel`
--

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `accountdetails`
--

CREATE TABLE `accountdetails` (
  `AccountKey` int(11) NOT NULL,
  `UserName` varchar(50) NOT NULL,
  `Password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Daten für Tabelle `accountdetails`
--

INSERT INTO `accountdetails` (`AccountKey`, `UserName`, `Password`) VALUES
(1, 'PHeer', '$2y$10$X835NBldI7TOH627rlsh8egOX9chwd8Z/Rzayr9jFyqtpjUNTaBwa'),
(2, 'AManfred', '$2y$10$dsYMNmjndHNvqVHPFyvTC.2r2ZKTKBXrWhysPIGRLVs6fGYHCnzuK'),
(3, 'SHenning', '$2y$10$vmIrKOJsy17.NYKJuV0joeLGXig8XLX2pR1brMwVXvzQkniHmHuvK'),
(4, 'HAhrens', '$2y$10$y.3LcuJ/DwOJQBHu7GK/wuLx5LlIJ6JbZiocnjsnQ22lpmaA0.K5q'),
(5, 'LisaHein', '$2y$10$0SbTcUlH8rNqkfK5S5H0OeH97NRem3RZdq20mUxQgXCcprZFgurOW'),
(6, 'AHerold', '$2y$10$6vWd7f.5TVrJ.yNw9yjOpuAp3KhfZEWFy29kEsrv9plDdLm8yzHOi'),
(7, 'AGeschke', '$2y$10$7ZXPgZWYbND992yq9YKB3.Zbb3qTFri0WzF8g4D12XRZL23JPMeKS'),
(8, 'HLaible', '$2y$10$J9QGGIE0kCqW6v7Cqsoj8ev403HaHiE/sG7zq2VZe/gFFAQQd2w3C'),
(9, 'ATran', '$2y$10$JFk5QeEWyHPiSHvM0UHlM.6jNQl4g68iSq0/jUOoGikZIasn4QJY6'),
(10, 'DDuong', '$2y$10$dN/o0FS28fUdYyzOpCLFH.ocezpmMmfFzDxPLhqJWJyqqzcloyjye');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `commentssection`
--

CREATE TABLE `commentssection` (
  `CommentsSectionKey` int(11) NOT NULL,
  `UserRefKey` int(11) NOT NULL,
  `PostRefKey` int(11) NOT NULL,
  `Comment_Date_Time` datetime NOT NULL,
  `CommentText` varchar(1024) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Daten für Tabelle `commentssection`
--

INSERT INTO `commentssection` (`CommentsSectionKey`, `UserRefKey`, `PostRefKey`, `Comment_Date_Time`, `CommentText`) VALUES
(1, 6, 1, '2022-01-12 17:27:50', 'Portugal ein wunderschönes Land. Ich war da bereits und kann es nur jeden empfehlen dort eine Reise anzutreten!'),
(2, 4, 2, '2022-01-12 17:36:10', 'Ich bin im London aufgewachsen und bin als Jugendlicher wieder nach Deutschland gezogen. Trotz all dem schhlägt mein Herz für die Hauptstadt der britischen Inseln. Die Großstatdt Lodnon schläft nie!'),
(3, 3, 1, '2022-01-12 23:25:12', 'Lissabon ist eine Stadt, die uns ganz besonders ans Herz gewachsen ist. Der Ort verzaubert mit ihrem einzigartigen Charme aus leicht verfallenen, historischen Bauwerken, bunten Hausfassaden, lebhaften Stadtvierteln, tollen Sehenswürdigkeiten und der liebenswerte gelben Straßenbahn jeden Besucher.'),
(4, 1, 2, '2022-01-23 05:04:13', 'London eine wunderschöne Stadt!'),
(5, 1, 1, '2022-01-23 05:04:41', 'Vielen Dank für eure tollen Kommentare!'),
(6, 1, 3, '2022-01-23 05:06:10', 'Leider war ich noch nie in Barcelona, würde es aber liebend gerne nachholen!'),
(7, 2, 4, '2022-01-23 05:07:18', 'Einfach eine geniale Stadt!'),
(8, 5, 1, '2022-01-23 07:48:30', 'Portugal ist immer eine Reise Wert!'),
(9, 5, 1, '2022-01-23 07:53:53', 'Ich liebe Lissabon!'),
(10, 5, 2, '2022-01-23 07:54:51', 'Ich liebe London!');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `contactdetails`
--

CREATE TABLE `contactdetails` (
  `ContactKey` int(11) NOT NULL,
  `FirstName` varchar(50) NOT NULL,
  `MidName` varchar(50) DEFAULT NULL,
  `LastName` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `PhoneNumber` varchar(50) NOT NULL,
  `Birthday` date NOT NULL,
  `Gender` enum('male','female') DEFAULT NULL,
  `StreetAddress` varchar(50) NOT NULL,
  `ZipCode` varchar(50) NOT NULL,
  `Country` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Daten für Tabelle `contactdetails`
--

INSERT INTO `contactdetails` (`ContactKey`, `FirstName`, `MidName`, `LastName`, `Email`, `PhoneNumber`, `Birthday`, `Gender`, `StreetAddress`, `ZipCode`, `Country`) VALUES
(1, 'Paulina', '', 'Heer', 'pheer@gmail.com', '012536182321', '1992-12-12', 'female', 'Am Standpark 2', '99012', 'Germany'),
(2, 'Albert', '', 'Manfred', 'afred@abc.de', '01253618312', '1972-03-12', 'male', 'Am Dach 34', '183712', 'Germany'),
(3, 'Sebastion', '', 'Henning', 'shenning123@abc.de', '012536183191', '1996-03-12', 'male', 'Am Herrenberg 31', '22182', 'Germany'),
(4, 'Hannah', '', 'Ahrens', 'hannah123@abc.de', '03821939132', '1995-03-12', 'female', 'Am Standpark 2', '123198', 'Germany'),
(5, 'Lisa', '', 'Heinreich', 'LHein234@abc.de', '0938276162', '1992-03-21', 'female', 'In der Mauer 3', '737281', 'Germany'),
(6, 'Andres', '', 'Herold', 'AHerold@abc.de', '09297310231', '1992-03-12', 'male', 'Randerlow', '672812', 'Germany'),
(7, 'Antonia', '', 'Geschke', 'AGeschke@linkvel.de', '012536182987', '2003-02-12', 'female', 'Am See 2', '99821', 'Germany'),
(8, 'Helen', '', 'Laible', 'HLaible@linkvel.de', '027173213123', '2003-01-12', 'female', 'Am Mond 2', '99666', 'Germany'),
(9, 'Tran', 'Anh', 'Hoang', 'ATran@linkvel.de', '07293918261', '1998-02-12', 'male', 'Am Ende 2', '872810', 'Germany'),
(10, 'Nguyen', 'Duc', 'Duong', 'NguyenDuc@linkvel.de', '02912312312', '2000-03-12', 'male', 'Am Verzweifeln 2', '88921', 'Germany');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `employee`
--

CREATE TABLE `employee` (
  `EmployeeKey` int(11) NOT NULL,
  `ContactRefKey` int(11) NOT NULL,
  `AccountRefKey` int(11) NOT NULL,
  `Role` varchar(50) NOT NULL,
  `Deparments` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Daten für Tabelle `employee`
--

INSERT INTO `employee` (`EmployeeKey`, `ContactRefKey`, `AccountRefKey`, `Role`, `Deparments`) VALUES
(1, 7, 7, 'Employee', 'Development '),
(2, 8, 8, 'Employee', 'Development'),
(3, 9, 9, 'Employee', 'Development'),
(4, 10, 10, 'Employee', 'Development');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `likes`
--

CREATE TABLE `likes` (
  `LikesKey` int(11) NOT NULL,
  `PostRefKey` int(11) NOT NULL,
  `UserRefKey` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Daten für Tabelle `likes`
--

INSERT INTO `likes` (`LikesKey`, `PostRefKey`, `UserRefKey`) VALUES
(3, 1, 1),
(4, 2, 1),
(5, 3, 1),
(6, 4, 1),
(7, 2, 2),
(8, 1, 2),
(9, 3, 2),
(10, 4, 2),
(11, 1, 5);

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `post`
--

CREATE TABLE `post` (
  `PostKey` int(11) NOT NULL,
  `SuperUserRefKey` int(11) NOT NULL,
  `PostTextFile` varchar(1024) NOT NULL,
  `Headline` varchar(30) NOT NULL,
  `PictureFile` varchar(1024) NOT NULL,
  `Post_Date_Time` datetime DEFAULT NULL,
  `Hashtags` varchar(20) NOT NULL,
  `MapLadiutes` float NOT NULL,
  `MapLongitude` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Daten für Tabelle `post`
--

INSERT INTO `post` (`PostKey`, `SuperUserRefKey`, `PostTextFile`, `Headline`, `PictureFile`, `Post_Date_Time`, `Hashtags`, `MapLadiutes`, `MapLongitude`) VALUES
(1, 1, 'Im letzten Sommer besuchte ich die Statd Lissabon. Eines der schönsten Städte in Europa!', 'Wunderschönes Lissabon', '..\\UserMedia\\PHeerMedia28122021\\Lissabon.jpg', '2021-12-28 22:22:00', '#lissabon', 38.6896, -9.17711),
(2, 2, 'London - eine Metropole der Superlativen mit über acht Millionen Einwohner und ist damit eine der größten Städte in Europas. Immer wieder für eine besonderes Erlebnis zu haben!', 'Metropole  - London', '..\\UserMedia\\AManfred28122921\\London.jpg', '2021-12-28 22:30:14', '#london', 51.5033, -0.1197),
(3, 3, 'Barcelona ist eine Weltstadt.In vielerlei Hinsichten immer hektisch und multikulturell, verspielt und manchmal überzogen. Wer sich für Architektur und Menschen interessiert, sollte sich hier viel Zeit zum Verweilen nehmen. Eine der wohl schönsten Städte die Europa zu bieten hat.\r\n', 'Barcelona - Mehr als ein Club', '..\\UserMedia\\SHenning28122021\\barcelona.jpg', '2021-12-28 23:29:17', '#barcelona', 41.3825, 2.1769),
(4, 4, 'New York ein Wahnsinn beginnt!', 'New York - eine Stadt die nie ', '..\\UserMedia\\HannahAhrens13012022\\NY.jpg', '2022-01-13 00:38:03', '#newyork', 40.7306, -73.9352);

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `standarduser`
--

CREATE TABLE `standarduser` (
  `StandardUserKey` int(11) NOT NULL,
  `UserRefKey` int(11) NOT NULL,
  `StandardUserToken` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Daten für Tabelle `standarduser`
--

INSERT INTO `standarduser` (`StandardUserKey`, `UserRefKey`, `StandardUserToken`) VALUES
(1, 4, 1),
(2, 5, 1),
(3, 6, 1),
(4, 7, 1),
(5, 8, 1),
(6, 9, 1),
(7, 10, 1);

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `superuser`
--

CREATE TABLE `superuser` (
  `SuperUserKey` int(11) NOT NULL,
  `UserRefKey` int(11) NOT NULL,
  `SuperUserToken` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Daten für Tabelle `superuser`
--

INSERT INTO `superuser` (`SuperUserKey`, `UserRefKey`, `SuperUserToken`) VALUES
(1, 1, 1),
(2, 2, 1),
(3, 3, 1),
(4, 4, 1);

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `user`
--

CREATE TABLE `user` (
  `UserKey` int(11) NOT NULL,
  `ContactRefKey` int(11) NOT NULL,
  `AccountRefKey` int(11) NOT NULL,
  `Account_Create_Date_Time` datetime NOT NULL,
  `LastLogin_Date_Time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Daten für Tabelle `user`
--

INSERT INTO `user` (`UserKey`, `ContactRefKey`, `AccountRefKey`, `Account_Create_Date_Time`, `LastLogin_Date_Time`) VALUES
(1, 1, 1, '2021-12-28 22:18:20', '2022-01-23 14:57:29'),
(2, 2, 2, '2021-12-28 22:18:45', '2022-01-23 05:06:51'),
(3, 3, 3, '2021-12-28 22:19:16', '2021-12-28 22:19:16'),
(4, 4, 4, '2021-12-28 22:19:39', '2021-12-28 22:19:39'),
(5, 5, 5, '2021-12-28 23:38:39', '2022-01-23 13:33:49'),
(6, 6, 6, '2021-12-28 23:38:39', '2021-12-28 23:38:39'),
(7, 7, 7, '2022-01-23 01:59:25', '2022-01-23 15:03:42'),
(8, 8, 8, '2022-01-23 02:00:49', '2022-01-23 15:03:51'),
(9, 9, 9, '2022-01-23 02:01:54', '2022-01-23 15:01:22'),
(10, 10, 10, '2022-01-23 02:03:22', '2022-01-23 15:03:57');

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `accountdetails`
--
ALTER TABLE `accountdetails`
  ADD PRIMARY KEY (`AccountKey`);

--
-- Indizes für die Tabelle `commentssection`
--
ALTER TABLE `commentssection`
  ADD PRIMARY KEY (`CommentsSectionKey`),
  ADD KEY `user_commentssection_fk` (`UserRefKey`),
  ADD KEY `post_commentssection_fk` (`PostRefKey`);

--
-- Indizes für die Tabelle `contactdetails`
--
ALTER TABLE `contactdetails`
  ADD PRIMARY KEY (`ContactKey`);

--
-- Indizes für die Tabelle `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`EmployeeKey`),
  ADD KEY `contactdetails_employee_fk` (`ContactRefKey`),
  ADD KEY `accountdetails_employee_fk` (`AccountRefKey`);

--
-- Indizes für die Tabelle `likes`
--
ALTER TABLE `likes`
  ADD PRIMARY KEY (`LikesKey`),
  ADD KEY `post_likes_fk` (`PostRefKey`),
  ADD KEY `user_likes_fk` (`UserRefKey`);

--
-- Indizes für die Tabelle `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`PostKey`),
  ADD KEY `superuser_post_fk` (`SuperUserRefKey`);

--
-- Indizes für die Tabelle `standarduser`
--
ALTER TABLE `standarduser`
  ADD PRIMARY KEY (`StandardUserKey`),
  ADD KEY `user_standarduser_fk` (`UserRefKey`);

--
-- Indizes für die Tabelle `superuser`
--
ALTER TABLE `superuser`
  ADD PRIMARY KEY (`SuperUserKey`),
  ADD KEY `user_superuser_fk` (`UserRefKey`);

--
-- Indizes für die Tabelle `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`UserKey`),
  ADD KEY `contactdetails_user_fk` (`ContactRefKey`),
  ADD KEY `accountdetails_user_fk` (`AccountRefKey`);

--
-- AUTO_INCREMENT für exportierte Tabellen
--

--
-- AUTO_INCREMENT für Tabelle `accountdetails`
--
ALTER TABLE `accountdetails`
  MODIFY `AccountKey` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT für Tabelle `commentssection`
--
ALTER TABLE `commentssection`
  MODIFY `CommentsSectionKey` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT für Tabelle `contactdetails`
--
ALTER TABLE `contactdetails`
  MODIFY `ContactKey` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT für Tabelle `employee`
--
ALTER TABLE `employee`
  MODIFY `EmployeeKey` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT für Tabelle `likes`
--
ALTER TABLE `likes`
  MODIFY `LikesKey` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT für Tabelle `post`
--
ALTER TABLE `post`
  MODIFY `PostKey` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT für Tabelle `standarduser`
--
ALTER TABLE `standarduser`
  MODIFY `StandardUserKey` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT für Tabelle `superuser`
--
ALTER TABLE `superuser`
  MODIFY `SuperUserKey` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT für Tabelle `user`
--
ALTER TABLE `user`
  MODIFY `UserKey` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Constraints der exportierten Tabellen
--

--
-- Constraints der Tabelle `commentssection`
--
ALTER TABLE `commentssection`
  ADD CONSTRAINT `post_commentssection_fk` FOREIGN KEY (`PostRefKey`) REFERENCES `post` (`PostKey`),
  ADD CONSTRAINT `user_commentssection_fk` FOREIGN KEY (`UserRefKey`) REFERENCES `user` (`UserKey`);

--
-- Constraints der Tabelle `employee`
--
ALTER TABLE `employee`
  ADD CONSTRAINT `accountdetails_employee_fk` FOREIGN KEY (`AccountRefKey`) REFERENCES `accountdetails` (`AccountKey`),
  ADD CONSTRAINT `contactdetails_employee_fk` FOREIGN KEY (`ContactRefKey`) REFERENCES `contactdetails` (`ContactKey`);

--
-- Constraints der Tabelle `likes`
--
ALTER TABLE `likes`
  ADD CONSTRAINT `post_likes_fk` FOREIGN KEY (`PostRefKey`) REFERENCES `post` (`PostKey`),
  ADD CONSTRAINT `user_likes_fk` FOREIGN KEY (`UserRefKey`) REFERENCES `user` (`UserKey`);

--
-- Constraints der Tabelle `post`
--
ALTER TABLE `post`
  ADD CONSTRAINT `superuser_post_fk` FOREIGN KEY (`SuperUserRefKey`) REFERENCES `superuser` (`SuperUserKey`);

--
-- Constraints der Tabelle `standarduser`
--
ALTER TABLE `standarduser`
  ADD CONSTRAINT `user_standarduser_fk` FOREIGN KEY (`UserRefKey`) REFERENCES `user` (`UserKey`);

--
-- Constraints der Tabelle `superuser`
--
ALTER TABLE `superuser`
  ADD CONSTRAINT `user_superuser_fk` FOREIGN KEY (`UserRefKey`) REFERENCES `user` (`UserKey`);

--
-- Constraints der Tabelle `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `accountdetails_user_fk` FOREIGN KEY (`AccountRefKey`) REFERENCES `accountdetails` (`AccountKey`),
  ADD CONSTRAINT `contactdetails_user_fk` FOREIGN KEY (`ContactRefKey`) REFERENCES `contactdetails` (`ContactKey`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

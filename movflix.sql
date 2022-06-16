-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 16, 2022 at 01:30 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `movflix`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `Admin_Id` int(11) NOT NULL,
  `Admin_Name` varchar(100) DEFAULT NULL,
  `Admin_Email` varchar(100) DEFAULT NULL,
  `Admin_Password` varchar(100) DEFAULT NULL,
  `Admin_Image` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`Admin_Id`, `Admin_Name`, `Admin_Email`, `Admin_Password`, `Admin_Image`) VALUES
(1, 'M.Ismail', 'Admin@gmail.com', '123', 'public/images/Admin_img/1653542085.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `booking_process`
--

CREATE TABLE `booking_process` (
  `Booking_Id` int(11) NOT NULL,
  `Theaters_Id` int(11) DEFAULT NULL,
  `Movie_Id` int(11) DEFAULT NULL,
  `Seat_Id` int(11) DEFAULT NULL,
  `User_ID` int(11) DEFAULT NULL,
  `Amount` int(11) DEFAULT NULL,
  `Ticket_Date` date DEFAULT NULL,
  `Date` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `Category_Id` int(11) NOT NULL,
  `Category_Name` varchar(100) DEFAULT NULL,
  `Category_Country` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`Category_Id`, `Category_Name`, `Category_Country`) VALUES
(32, 'Action', 'Pakistan'),
(33, 'Historical', 'Afghanistan'),
(34, 'Romance', 'India'),
(35, 'Animation', 'Turkey'),
(36, 'Drama', 'Afghanistan');

-- --------------------------------------------------------

--
-- Table structure for table `movies`
--

CREATE TABLE `movies` (
  `Movie_Id` int(11) NOT NULL,
  `Movie_Poster` varchar(100) DEFAULT NULL,
  `Movie_Title` varchar(100) DEFAULT NULL,
  `Movie_Price` int(11) DEFAULT NULL,
  `Movie_Description` varchar(500) DEFAULT NULL,
  `Movie_Release_year` int(11) DEFAULT NULL,
  `Movie_Director_Name` varchar(100) DEFAULT NULL,
  `Movie_Director_Img` varchar(100) DEFAULT NULL,
  `Movie_Director_Description` varchar(500) DEFAULT NULL,
  `Movie_Url` varchar(500) DEFAULT NULL,
  `Movie_duration_min` varchar(100) DEFAULT NULL,
  `Category_Id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `movies`
--

INSERT INTO `movies` (`Movie_Id`, `Movie_Poster`, `Movie_Title`, `Movie_Price`, `Movie_Description`, `Movie_Release_year`, `Movie_Director_Name`, `Movie_Director_Img`, `Movie_Director_Description`, `Movie_Url`, `Movie_duration_min`, `Category_Id`) VALUES
(32, 'public/images/image1/1652368168.jpg', 'The Legend of Maula Jatt', 2000, 'The Legend of Maula Jatt is an upcoming Pakistani Punjabi language action drama film directed and written by Bilal Lashari and produced by Ammara Hikmat under the production banner of Encyclomedia.', 2022, 'Bilal Lashari', 'public/images/image2/1652368168.jpg', 'Bilal Lashari is a Pakistani film director, cinematographer, screenwriter and occasional actor. He made his directorial debut film in Waar, which holds the record of being the seventh highest-grossing Pakistani film. His next project is a remake of the 1979 film Maula Jatt.', 'https://www.youtube.com/watch?v=Uj6mhJaLuW4', '2h 30 min', 32),
(33, 'public/images/image1/1652272993.jpg', 'Spider-Man: Across the Spider-Verse', 1000, 'Miles Morales returns for the next chapter of the Oscar®-winning Spider-Verse saga, an epic adventure that will transport Brooklyn\'s full-time, friendly neighborhood Spider-Man across the Multiverse to join forces with Gwen Stacy and a new team of Spider-People to face off with a villain more powerful than anything ...', 2021, 'Joaquim Dos Santos,', 'public/images/image2/1652272993.jpg', 'Joaquim Dos Santos is a Portuguese-born American storyboard artist, director, producer, writer, and designer. He is best known for his directing work on the television series Justice League Unlimited,', 'https://www.youtube.com/watch?v=BbXJ3_AQE_o', '2h 10 min', 35),
(34, 'public/images/image1/1652273938.jpg', 'Teefa in Trouble', 2500, 'Teefa, an enforcer is on a mission to kidnap Anya, a girl that gangster Butt believes to be the best match for his son.', 2018, 'Mehmood Aslam', 'public/images/image2/1652273938.jpg', 'Mehmood Aslam is a Pakistani television and stage actor. He has appeared in classic drama series such as Andhera Ujala, Payas, Din, Janjaalpura and is commonly known for his role in ongoing comedy series Bulbulay. Some of his projects include Landa Bazar, Daray Daray Naina, Chhalawa, Achanak, Uraan and Ladies Park.', 'https://www.youtube.com/watch?v=jw5dTVTX9zo', '2h 30min', 34),
(35, 'public/images/image1/1652274585.jpg', 'Stree', 1500, 'Story: The quaint town of Chanderi is haunted by a unique legend. The spirit of an angry woman stalks men during a festive period. During these four nights, the spirit, simply referred to as Stree, calls out to men when they\'re alone. If the men turn around, Stree whisks them away, leaving behind only their clothes', 2019, 'Amar Kaushik', 'public/images/image2/1652274585.jpg', 'Amar Kaushik is an Indian director and actor who is best known for directing the 2018 film Stree.', 'https://www.youtube.com/watch?v=gzeaGcLLl_A', '2h 50min', 33),
(36, 'public/images/image1/1652290622.jpg', 'warr', 1000, 'The film features Shaan Shahid, Meesha Shafi, Ali Azmat, Shamoon Abbasi, Ayesha Khan, Suhaib Rana and Kamran Lashari. It is the sixth highest-grossing Pakistani film.', 2013, 'Bilal Lashari', 'public/images/image2/1652290622.jpg', 'Bilal Lashari is a Pakistani film director, cinematographer, screenwriter and occasional actor. He made his directorial debut film in Waar, which holds the record of being the seventh highest-grossing Pakistani film.', 'https://www.youtube.com/watch?v=73wiKoNceK0', '2h 10min', 32),
(51, 'public/images/image1/1652875917.jpg', 'Total Dhamaal', 5000, 'Four lazy slacker conmen buddies who are jobless, homeless and broke learn about the secret of a hidden treasure from a dying thief and later embark on a race against time to find the mobster\'s buried treasure and claim it while being pursued by a determined police inspector who is hellbent to get the treasure all by ..', 2007, 'Indra Kumar', 'public/images/image2/1652814055.jpg', 'Indra Kumar is an Indian film director and producer. He had five Filmfare nominations, has also appeared in number of Gujarati. Kumar\'s real name is Indra Irani. His latest film produced as Total Dhaamal in', 'https://www.youtube.com/watch?v=fo9EhcwQXcM', '2h 40min', 36),
(58, 'public/images/image1/1652890145.jpg', 'Hindi Medium', 5500, 'Raj and Mita yearn to get Pia, their daughter, educated from a reputed school. When they learn that their background is holding her back, they do everything to ensure that she gets into the school.', 2017, 'Saket Chaudhary', 'public/images/image2/1652890145.jpg', 'Saket Chaudhary is an Indian screenwriter and director mostly known for 2017 sleeper hit Hindi Medium. He also co-wrote Santosh Sivan\'s Asoka and is the director of Pyaar Ke Side Effects, released in September 2006', 'https://www.youtube.com/watch?v=lFzyi-2jCFc', '2h  12min', 36),
(59, 'public/images/image1/1652891086.jpg', 'kgf chapter 1', 10000, 'Rocky, a young man, seeks power and wealth in order to fulfil a promise to his dying mother. His quest takes him to Mumbai, where he gets involved with the notorious gold mafia.', 2018, 'Prashanth Neel', 'public/images/image2/1652891086.jpg', 'Prashanth Neelakantapuram is an Indian film director and screenwriter who primarily works in the Kannada film industry. He made his debut with the 2014 Kannada film, Ugramm and later directed the two-part film series: K.G.F: Chapter 1, and K.G.F: Chapter 2,', 'https://www.youtube.com/watch?v=-KfsY-qwBS0', '2h 40min', 32),
(60, 'public/images/image1/1652892140.jpg', 'Walking with Dinosaurs: The Movie', 1500, 'While on a fossil hunt, a palaeontologist\'s nephew encounters an Alexornis bird from the Cretaceous period. The bird narrates the story of dinosaurs which existed at that time', 2013, 'Barry Cook', 'public/images/image2/1652892140.jpg', 'Barry Cook is an American film director who has worked in the animated film industry since the 1980s. Cook and Tony Bancroft directed Mulan, for which they won the 1998 Annie Award for Best Animated Feature. Cook was also the co-director for Arthur Christmas, directed by Sarah Smith.', 'https://www.youtube.com/watch?v=P7lBKBxIwGM', '1h 27min', 35);

-- --------------------------------------------------------

--
-- Table structure for table `movie_cast`
--

CREATE TABLE `movie_cast` (
  `Cast_Id` int(11) NOT NULL,
  `Actors_Name` varchar(200) DEFAULT NULL,
  `Actors_Img` varchar(200) DEFAULT NULL,
  `Actors_Des` varchar(500) DEFAULT NULL,
  `Actresses_Name` varchar(200) DEFAULT NULL,
  `Actresses_Img` varchar(200) DEFAULT NULL,
  `Actresses_Des` varchar(500) DEFAULT NULL,
  `Movie_Id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `movie_cast`
--

INSERT INTO `movie_cast` (`Cast_Id`, `Actors_Name`, `Actors_Img`, `Actors_Des`, `Actresses_Name`, `Actresses_Img`, `Actresses_Des`, `Movie_Id`) VALUES
(19, 'Hamza Abbasi', 'public/images/Actor_img/1652806368.jpg', 'Hamza Ali Abbasi is a Pakistani former film and television actor and director. He is known for his roles as Afzal in the drama serial Pyarey Afzal, and as Salahuddin in the drama serial Mann Mayal. Abbasi began his acting career in 2006 in the play Dally in the Dark, which was produced by Shah Shahrahbeel.', 'Mahira Khan', 'public/images/Actresses_img/1652286127.jpg', 'Mahira Hafeez Khan is a Pakistani actress. She is best known for portraying the role of Khirad Ashar Hussain in the Pakistani drama Humsafar for which she received numerous accolades, including the Lux Style Award for Best Television Actress. Born in Karachi, Khan started her career as a VJ in 2006.', 32),
(20, 'Jake Johnsona', 'public/images/Actor_Img/1652286515.jpg', 'Mark Jake Johnson Weinberger is an American actor, comedian, film producer and screenwriter best known for his role as Nick Miller in the Fox sitcom New Girl, for which he was nominated for the Critics\'', 'Hailee Steinfeld', 'public/images/Actresses_img/1652286515.jpg', 'Hailee Steinfeld is an American actress and singer. Known for her acting versatility and musical prowess, she is the recipient of various accolades, including a Peabody Award, a Critics\' Choice Movie', 33),
(23, 'Shaan Shahid', 'public/images/Actor_Img/1652290804.jpg', 'Armaghan Shahid, better known by his stage names Shaan Shahid and Shaan, is a Pakistani actor, producer, model, writer and film director.', 'Aisha Uqbah Malik', 'public/images/Actresses_img/1652290804.jpg', 'Aisha Uqbah Malik, also known by her name Aisha Khan, is a Pakistani former television and film actress. Her prominent roles include Mahgul from Khuda Mera Bhi Hai, Noor from Noor-e-Zindagi and Jeena from Mann Mayal.', 36),
(24, 'Rajkummar Rao', 'public/images/Actor_Img/1652290952.jpg', 'Rajkummar Rao is an Indian actor known for his work in Hindi films. He is cited as one of the most experimental actors of his generation. He has appeared in more than 30 films since 2010.', 'Shraddha Kapoor', 'public/images/Actresses_img/1652290952.jpg', 'Shraddha Kapoor is an Indian actress who works in Hindi-language films. She features in listings of the most popular and highest-paid actresses in the country. She has been featured in Forbes India\'s', 35),
(26, 'Ali Zafar', 'public/images/Actor_img/1652464427.jpg', 'Ali Zafar PP is a Pakistani singer-songwriter, model, actor, producer, screenwriter and painter. Zafar started out on Pakistani television before becoming a popular musician.', 'Maya Ali', 'public/images/Actresses_img/1652464427.jpg', 'Maryam Tanveer Ali, known by her stage name Maya Ali, is a Pakistani actress. Ali is known for her roles in dramas and films respectively. She is the recipient of one Lux Style Award for her performance as Manahil Javed in Hum TV\'s tragic romance Mann Mayal.', 34),
(28, 'Arshad Warsi', 'public/images/Actor_Img/1652814767.jpg', 'Arshad Warsi is an Indian actor, producer, dancer, television personality, choreographer and playback singer who appears in Hindi films. He is the recipient of several awards including a Filmfare Award from five nominations and is noted for acting in varied film', 'Madhuri Dixit', 'public/images/Actresses_img/1652814767.jpg', 'Madhuri Dixit Nene is an Indian actress, producer and television personality. One of the most popular leading actresses of Hindi cinema, she has appeared in over 70 Bollywood films', 51),
(29, 'Irrfan Khan', 'public/images/Actor_Img/1652890513.jpg', 'Irrfan Khan, also known simply as Irrfan, was an Indian actor who worked in Indian cinema as well as British and American films', 'Saba Qamar', 'public/images/Actresses_img/1652890513.jpg', 'Saba Qamar Zaman, known professionally as Saba Qamar, is a Pakistani actress and television presenter. She is one of Pakistan\'s most popular and highest-paid celebrities, her roles have been credited as a significant departure from the traditional portrayal of women in Urdu television.', 58),
(30, 'Yash', 'public/images/Actor_Img/1652891526.jpg', 'Naveen Kumar Gowda, better known by his stage name Yash, is an Indian actor who works in Kannada films. He is the recipient of three Filmfare Awards South. Yash began his career with appearances in several television series in the 2000s. He made his film debut in 2007 with Jambada Hudug', 'Tamannaah', 'public/images/Actresses_img/1652891526.jpg', 'Tamanna Bhatia, known professionally as Tamannaah, is an Indian actress who appears primarily in Telugu and Tamil films, along with Hindi films. In addition to acting, she also participates in stage shows and is a prominent celebrity endorser for brands and products', 59),
(31, 'John Leguizamo', 'public/images/Actor_Img/1652892500.jpg', 'ohn Alberto Leguizamo Peláez is an American actor, comedian, producer and writer. He rose to fame with a co-starring role in Super Mario Bros. as Luigi, and a supporting role in the crime drama Carlito\'s Way. He later notably starred in the film To Wong Foo,', 'Angourie Rice', 'public/images/Actresses_img/1652892500.jpg', 'Angourie Rice is an Australian actress. She began her career as a child actress, coming to attention for her roles in These Final Hours and The Nice Guys.', 60);

-- --------------------------------------------------------

--
-- Table structure for table `movie_show_time`
--

CREATE TABLE `movie_show_time` (
  `Show_Id` int(11) NOT NULL,
  `Date` date DEFAULT NULL,
  `Start_time` varchar(100) DEFAULT NULL,
  `End_time` varchar(100) DEFAULT NULL,
  `Theaters_Id` int(11) DEFAULT NULL,
  `Movie_Id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `movie_show_time`
--

INSERT INTO `movie_show_time` (`Show_Id`, `Date`, `Start_time`, `End_time`, `Theaters_Id`, `Movie_Id`) VALUES
(7, '2022-05-28', '06:00', '08:00', 19, 32),
(8, '2022-05-03', '14:00', '15:00', 18, 35),
(9, '2022-05-02', '02:00', '04:00', 18, 32),
(10, '2022-05-30', '10:00', '11:59', 19, 32),
(11, '2022-07-07', '01:00', '03:01', 19, 33),
(12, '2022-07-29', '02:00', '04:00', 58, 32),
(13, '2022-06-04', '02:00', '04:00', 18, 36),
(14, '2022-11-03', '04:00', '06:00', 18, 34),
(53, '2022-05-28', '02:00', '04:00', 58, 51),
(55, '2022-05-15', '09:49', '11:59', 58, 58),
(56, '2020-07-18', '14:00', '16:00', 18, 59),
(57, '2023-02-21', '03:00', '04:20', 18, 60);

-- --------------------------------------------------------

--
-- Table structure for table `movie_theaters`
--

CREATE TABLE `movie_theaters` (
  `Theaters_Id` int(11) NOT NULL,
  `Theaters_Name` varchar(200) DEFAULT NULL,
  `Theaters_Address` varchar(200) DEFAULT NULL,
  `Theaters_Place` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `movie_theaters`
--

INSERT INTO `movie_theaters` (`Theaters_Id`, `Theaters_Name`, `Theaters_Address`, `Theaters_Place`) VALUES
(18, 'Capri Cinema', 'Capri Cinema، M.A Jinnah Rd, Saddar Karachi, Karachi City, Sindh 7420', 'Movie theater in Karachi'),
(19, 'Mega Multiplex Cinema - Millenium Mall', 'Millennium Mall, Rashid Minhas Rd, Gulistan-e-Johar, Karachi, Karachi City, Sindh', 'Movie theater in Karachi'),
(58, 'Saba Cinema', 'Sector 6 New Karachi , Karachi City, Sindh', 'North K');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `Product_Id` int(11) NOT NULL,
  `Product_Name` varchar(100) DEFAULT NULL,
  `Product_description` varchar(200) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `picture` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`Product_Id`, `Product_Name`, `Product_description`, `price`, `picture`) VALUES
(15, 'Muchaco, Crispy Taco, Bean Burrito', 'Hello', 999, 'public/images/Products/1654875211.png'),
(17, 'Crispy Beef Taco, Beef Mucho Nachos', 'ismnasdihiagsf', 500, 'public/images/Products/1654875289.png'),
(18, 'Chicken Quesadilla Crispy Beef Taco', 'zavasvdasd', 499, 'public/images/Products/1654875370.png'),
(21, '3D glasses', '3D glasses support Polarized 3D TV and Real D cinema. Made of durable plastic, these 3D glasses', 999, 'public/images/Products/1654877329.png');

-- --------------------------------------------------------

--
-- Table structure for table `product_order:`
--

CREATE TABLE `product_order:` (
  `Prod_ord_Id` int(11) NOT NULL,
  `Product_id` int(11) DEFAULT NULL,
  `Product_Qty` int(11) DEFAULT NULL,
  `Total_Products` int(11) DEFAULT NULL,
  `Booking_Id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `R_Id` int(11) NOT NULL,
  `R_Name` varchar(100) DEFAULT NULL,
  `R_Des` varchar(200) DEFAULT NULL,
  `R_Stars` int(11) DEFAULT NULL,
  `Movie_Id` int(11) DEFAULT NULL,
  `User_ID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `seat`
--

CREATE TABLE `seat` (
  `Seat_Id` int(11) NOT NULL,
  `Seat_Number` int(11) DEFAULT NULL,
  `Show_Id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `seat`
--

INSERT INTO `seat` (`Seat_Id`, `Seat_Number`, `Show_Id`) VALUES
(1, 1, 7),
(2, 2, 7),
(3, 3, 7),
(11, 4, 7),
(12, 5, 7),
(13, 6, 7),
(14, 7, 7),
(15, 8, 7),
(16, 9, 7),
(17, 10, 7),
(18, 11, 7),
(19, 12, 7),
(20, 13, 7);

-- --------------------------------------------------------

--
-- Table structure for table `seat_booking_status`
--

CREATE TABLE `seat_booking_status` (
  `S2_Id` int(11) NOT NULL,
  `Status` varchar(100) DEFAULT NULL,
  `Seat_Id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `seat_booking_status`
--

INSERT INTO `seat_booking_status` (`S2_Id`, `Status`, `Seat_Id`) VALUES
(7, 'Booked', 1),
(8, 'Booked', 2),
(10, 'Booked', 18);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `User_ID` int(11) NOT NULL,
  `Name` varchar(100) DEFAULT NULL,
  `Image` varchar(100) DEFAULT NULL,
  `Email` varchar(100) DEFAULT NULL,
  `Password` varchar(100) DEFAULT NULL,
  `DateOfBirth` date DEFAULT NULL,
  `Gender` varchar(10) DEFAULT NULL,
  `Contact_No` varchar(100) DEFAULT NULL,
  `Registration_Date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`User_ID`, `Name`, `Image`, `Email`, `Password`, `DateOfBirth`, `Gender`, `Contact_No`, `Registration_Date`) VALUES
(41, 'Shehroz', 'public/images/User_img/1653542188.jpg', 'Shehroz@123', 'S123', '1999-05-15', 'Male', '0335324634', '2022-05-26'),
(42, 'Ismail', 'public/images/User_img/1654088065.jpg', 'Arain@123', 'Arain@123', '2022-06-25', 'Male', '03847574545', '2022-06-01');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`Admin_Id`);

--
-- Indexes for table `booking_process`
--
ALTER TABLE `booking_process`
  ADD PRIMARY KEY (`Booking_Id`),
  ADD KEY `Theaters_Id` (`Theaters_Id`),
  ADD KEY `Movie_Id` (`Movie_Id`),
  ADD KEY `Seat_Id` (`Seat_Id`),
  ADD KEY `User_Id` (`User_ID`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`Category_Id`);

--
-- Indexes for table `movies`
--
ALTER TABLE `movies`
  ADD PRIMARY KEY (`Movie_Id`),
  ADD KEY `Category_Id` (`Category_Id`);

--
-- Indexes for table `movie_cast`
--
ALTER TABLE `movie_cast`
  ADD PRIMARY KEY (`Cast_Id`),
  ADD KEY `Movie_Id` (`Movie_Id`);

--
-- Indexes for table `movie_show_time`
--
ALTER TABLE `movie_show_time`
  ADD PRIMARY KEY (`Show_Id`),
  ADD KEY `Movie_Id` (`Movie_Id`),
  ADD KEY `Theaters_Id` (`Theaters_Id`);

--
-- Indexes for table `movie_theaters`
--
ALTER TABLE `movie_theaters`
  ADD PRIMARY KEY (`Theaters_Id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`Product_Id`);

--
-- Indexes for table `product_order:`
--
ALTER TABLE `product_order:`
  ADD PRIMARY KEY (`Prod_ord_Id`),
  ADD KEY `Product_id` (`Product_id`),
  ADD KEY `Product_id_2` (`Product_id`),
  ADD KEY `Booking_Id` (`Booking_Id`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`R_Id`),
  ADD KEY `Movie_Id` (`Movie_Id`),
  ADD KEY `User_ID` (`User_ID`) USING BTREE;

--
-- Indexes for table `seat`
--
ALTER TABLE `seat`
  ADD PRIMARY KEY (`Seat_Id`),
  ADD KEY `Show_Id` (`Show_Id`);

--
-- Indexes for table `seat_booking_status`
--
ALTER TABLE `seat_booking_status`
  ADD PRIMARY KEY (`S2_Id`),
  ADD KEY `Seat_Id` (`Seat_Id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`User_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `Admin_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `booking_process`
--
ALTER TABLE `booking_process`
  MODIFY `Booking_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `Category_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `movies`
--
ALTER TABLE `movies`
  MODIFY `Movie_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- AUTO_INCREMENT for table `movie_cast`
--
ALTER TABLE `movie_cast`
  MODIFY `Cast_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `movie_show_time`
--
ALTER TABLE `movie_show_time`
  MODIFY `Show_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT for table `movie_theaters`
--
ALTER TABLE `movie_theaters`
  MODIFY `Theaters_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `Product_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `product_order:`
--
ALTER TABLE `product_order:`
  MODIFY `Prod_ord_Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `R_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `seat`
--
ALTER TABLE `seat`
  MODIFY `Seat_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `seat_booking_status`
--
ALTER TABLE `seat_booking_status`
  MODIFY `S2_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `User_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `booking_process`
--
ALTER TABLE `booking_process`
  ADD CONSTRAINT `booking_process_ibfk_1` FOREIGN KEY (`User_ID`) REFERENCES `users` (`User_ID`),
  ADD CONSTRAINT `booking_process_ibfk_2` FOREIGN KEY (`Movie_Id`) REFERENCES `movies` (`Movie_Id`),
  ADD CONSTRAINT `booking_process_ibfk_3` FOREIGN KEY (`Theaters_Id`) REFERENCES `movie_theaters` (`Theaters_Id`),
  ADD CONSTRAINT `booking_process_ibfk_4` FOREIGN KEY (`Seat_Id`) REFERENCES `seat` (`Seat_Id`);

--
-- Constraints for table `movies`
--
ALTER TABLE `movies`
  ADD CONSTRAINT `movies_ibfk_1` FOREIGN KEY (`Category_Id`) REFERENCES `category` (`Category_Id`);

--
-- Constraints for table `movie_cast`
--
ALTER TABLE `movie_cast`
  ADD CONSTRAINT `movie_cast_ibfk_1` FOREIGN KEY (`Movie_Id`) REFERENCES `movies` (`Movie_Id`);

--
-- Constraints for table `movie_show_time`
--
ALTER TABLE `movie_show_time`
  ADD CONSTRAINT `movie_show_time_ibfk_1` FOREIGN KEY (`Movie_Id`) REFERENCES `movies` (`Movie_Id`),
  ADD CONSTRAINT `movie_show_time_ibfk_2` FOREIGN KEY (`Theaters_Id`) REFERENCES `movie_theaters` (`Theaters_Id`);

--
-- Constraints for table `product_order:`
--
ALTER TABLE `product_order:`
  ADD CONSTRAINT `product_order:_ibfk_1` FOREIGN KEY (`Product_id`) REFERENCES `products` (`Product_Id`),
  ADD CONSTRAINT `product_order:_ibfk_2` FOREIGN KEY (`Booking_Id`) REFERENCES `booking_process` (`Booking_Id`);

--
-- Constraints for table `reviews`
--
ALTER TABLE `reviews`
  ADD CONSTRAINT `reviews_ibfk_1` FOREIGN KEY (`Movie_Id`) REFERENCES `movies` (`Movie_Id`),
  ADD CONSTRAINT `reviews_ibfk_2` FOREIGN KEY (`User_ID`) REFERENCES `users` (`User_ID`);

--
-- Constraints for table `seat`
--
ALTER TABLE `seat`
  ADD CONSTRAINT `seat_ibfk_1` FOREIGN KEY (`Show_Id`) REFERENCES `movie_show_time` (`Show_Id`);

--
-- Constraints for table `seat_booking_status`
--
ALTER TABLE `seat_booking_status`
  ADD CONSTRAINT `seat_booking_status_ibfk_1` FOREIGN KEY (`Seat_Id`) REFERENCES `seat` (`Seat_Id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

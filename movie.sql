-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 20, 2018 at 02:26 AM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `movie`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `user_id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `email` varchar(40) NOT NULL,
  `pass` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`user_id`, `name`, `email`, `pass`) VALUES
(6, 'test', 'test@test.com', 'test'),
(7, 'prajwal', 'prajwal331@gmail.com', '967454173c7637d071a8bd30224407e3'),
(62, 'test', 'test@test.com', 'test'),
(63, 'yhjhgjghj', 'prajwal@gmail.com', 'e59e70e135341039e5a350bfe4aa53c0'),
(64, 'tddhtfh', 'prajwal331@gmail.com', 'ee234de14927ce083ca403464dc6514e'),
(65, 'DUD', 'prajwal331@gmail.com', '0c8969db815ef7327c1c7b74d0591aa2'),
(72, '', 'prajwal331@gmail.com', '967454173c7637d071a8bd30224407e3'),
(73, '', 'prajwal331@gmail.com', '967454173c7637d071a8bd30224407e3'),
(74, '', 'prajwal331@gmail.com', '3254de311a57be6b67b95392cd112da2'),
(75, '', 'prajwal331@gmail.com', '967454173c7637d071a8bd30224407e3');

-- --------------------------------------------------------

--
-- Table structure for table `movie`
--

CREATE TABLE `movie` (
  `movie_id` int(10) UNSIGNED NOT NULL,
  `movie_name` varchar(30) NOT NULL,
  `certificate` varchar(10) NOT NULL,
  `synopsis` varchar(1000) NOT NULL,
  `language` varchar(20) NOT NULL,
  `trailer` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `movie`
--

INSERT INTO `movie` (`movie_id`, `movie_name`, `certificate`, `synopsis`, `language`, `trailer`) VALUES
(1, 'Sarkar', 'U/A', 'Sundar, an international business tycoon, arrives in India to vote in the elections - only to find out that there was foul play and someone else cast his vote. His search for the truth will bring him face to face with a host of corrupt and dangerous politicians, but Sundar won\'t stop until the scores are settled and justice is served. ', 'Tamil', 'https://www.youtube.com/embed/U3dqoAHqagk'),
(2, 'Thugs of Hindostan', 'U/A', 'Vijay Krishna Acharya (Victor), the writer-director of the all-time YRF blockbuster Dhoom:3, teams up once again with Aamir Khan in Thugs of Hindostan along with Amitabh Bachchan to give the audience a never seen before experience of larger than life filmmaking!\r\n\r\nThis YRF film holds a double bonanza by bringing together Amitabh Bachchan and Aamir Khan together for the first time ever. That in itself, is film lore in making!\r\n\r\nThe film is set to treat audiences across age groups with the biggest jaw-dropping action sequences seen by audiences on screen to date. With its edge-of-the-seat thrills and an epic adventure and war on the seas, the film is set to light up this Diwali.', 'Hindi', 'https://www.youtube.com/embed/zI-Pux4uaqM'),
(3, 'Taxiwaala ', 'U/A', 'Shiva, a job monger ends up as a taxiwaala only to realise his ride is a beyond what anyone can expect', 'Telugu', 'https://www.youtube.com/embed/9KN3dbZVRwQ'),
(4, 'Victory 2', 'U/A', 'All Chandru (Sharan) wants in life is to lead a peaceful life with his loving wife. But things just don\'t fall in place. On the other hand, Munna (Sharan Again) and Maams (Ravishankar) want to make it big in life and decide to rob a house in disguise. The story takes a turn when Chandru saves Hussain (Naseer) but gets into trouble for doing so. Why is police chasing him? Who is Hussain? Does Munna Have anything to do with it?', 'Kannada', 'https://www.youtube.com/embed/oZ7kTmer5v4'),
(5, 'Badhaai Ho', 'U/A', 'When his middle-aged parents announce the news of an untimely pregnancy, Nakul is far from thrilled. Not only does he find the situation a bit awkward, but there is also the peril of public embarrassment. Can he come to terms with the odd plight his family is in?', 'Hindi', 'https://www.youtube.com/embed/unAljCZMQYw'),
(6, 'The Villain', 'U/A', 'An interesting adaption of the relationship and the analogy of the iconic characters Ram and Ravan set in the present day world.', 'Kannada', 'https://www.youtube.com/embed/Z1Zf7X7BrOs?start=6'),
(7, 'Sarkari. Hi. Pra. Shale Kasara', 'U', '\"Sarkari. Hi. Pra. Shale Kasaragodu, Koduge: Ramanna Rai\" revolves around the lives of children of a Kannada medium school in Kasargodu, Kerala. The joyous and mischief-filled lives of the kids are brought to a halt with the government\'s decision to close the school. What follows is an adventure-filled endeavour of the kids to save their school.', 'Kannada', 'https://www.youtube.com/embed/oA-U1rR3pNc'),
(8, 'Amar Akbar Anthony', 'U/A', 'By all appearances, Anthony, Akbar and Amar seeem to have contrasting personalities despite looking strikingly similar. But is there something more sinister than meets the eye about the trio? An action thriller set in USA, the film stars Ravi Teja and Ileana D\'Cruz in the lead roles.', 'Telugu', 'https://www.youtube.com/embed/s3Q6AM4MDs4'),
(9, '96', 'U', 'A heartwarming tale of romance that endures the test of time, 96 follows the story of Ram and Janu, and their shared destiny. Directed by Prem Kumar, the film stars Vijay Sethupathi and Trisha Krishnan in the lead roles.', 'Tamil', 'https://www.youtube.com/embed/r0synl-lI4I'),
(10, 'Andhadhun', 'U/A', 'A series of mysterious events take place in the life of a blind pianist (Ayushmann Khurrana). Now, he must report a crime that he never actually witnessed.', 'Hindi', 'https://www.youtube.com/embed/2iVYI99VGaw'),
(11, 'Ammachi Yemba Nenapu', 'U/A', 'Ammachi Yemba Nenapu is based on three short stories woven together by the celebrated Kannada writer, Kendra Sahitya Academy awardee Dr.Vaidehi. It is a tale which quietly yet powerfully unfolds the multiple layers of a woman\'s eternal striving for identity in a patriarchal society.', 'Kannada', 'https://www.youtube.com/embed/CDggLVcW7l0'),
(12, 'Thayige Thakka Maga', 'A', 'Parvathi - an honest Lawyer with her short-tempered son Mohandas files a court case against Sharath Kaale, an arrogant son of a wicked politician Prakash Kaale.\r\n\r\nPrakash\'s only ambition is to see his son as a successful politician and therefore the case filed by Parvathi does not go down well with him. He begins to threaten Parvathi and Mohandas. What follows next is how Mohandas channelizes his anger and makes logical use of law and order to fight against Prakash.', 'Kannada', 'https://www.youtube.com/embed/0MrMPM6YslY'),
(13, '8MM Bullet', 'U/A', 'An honest police officer, while chasing a goon, accidentally loses his service gun, which lands up in the hands of a common man who uses the same gun to rob a bank and kill several people in different circumstances.', 'Kannada', 'https://www.youtube.com/embed/by6hjzlCUwo'),
(14, 'Baazaar', 'U/A', 'Baazaar, directed by Gauravv K Chawla and starring Saif Ali Khan, showcases the story of Mumbai\'s city life and its dangerous world of stock trading.', 'Hindi', 'https://www.youtube.com/embed/Pb7iJnIWzNk'),
(15, 'Thimiru Pudichavan', 'U/A', 'Thimiru Pudichavan is a Tamil movie starring Vijay Antony and Nivetha Pethuraj prominent roles. It is a drama directed by Ganeshaa.', 'Tamil', 'https://www.youtube.com/embed/ly1NUHHTCH'),
(16, 'Jeerjimbe', 'U', 'The film sketches the life of a young girl from a remote district in Karnataka is on her courageous pursuit to break away from the clutches of the evil practices of child marriage. How she fights against the evils of society while pedaling towards a brighter, better, and a safe future, forms the crux of the story.', 'Kannada', 'https://www.youtube.com/embed/wpv3HABkwNo'),
(17, 'Puta 109', 'U/A', 'A Police officer (Jayaram Karthik) comes to the residence of a crime novelist ( Naveen Krishna) for investigation. The Police officer has come to investigate the death of the Novelist\'s wife who was murdered recently. The Suspect list has everyone from the house maid to a family friend.\r\n\r\nThe Crime novelist patiently answers all the questions but will the police officer get his answer or will it lead to more questions.', 'Kannada', 'https://www.youtube.com/embed/9-qFCGdLhEY'),
(18, 'Mohalla Assi', 'A', 'Feature film `Mohalla Assi` is based on Sahitya Academy Award winner litterateur Kashi Nath Singh. Directed by famous National Award winner Dr. Chandra Prakash Dwivedi, `Mohalla Assi` is a political satire on cultural changes of a country like India which has a deep rooted cultural heritage in general and a pious & holy city like Varanasi in particular during the Globalization period that happened during the time frame of 1988 to 1998. `Mohalla Assi` travels its voyage on three levels i.e. person, society and country. `Mohalla Assi` tells the story of Dharm Nath Pandey (Sunny Deol), a man of principles and idealism. He has his hold on his surroundings and society as a caretaker of religion and culture.', 'Hindi', 'https://www.youtube.com/embed/G4-uLtTZ7NU'),
(19, 'Jagath Kiladi', 'U/A', 'Jagath Kiladi is a Kannada movie starring Niranjan Shetty and Ameeta S. Kulal in prominent roles. The movie also stars Rangayana Raghu and Suchendra Prasad. It is a drama directed by Arav B. Dheerendra with Giridhar Divan as musician, forming part of the crew.', 'Kannada', 'https://www.youtube.com/embed/xibWDtPoaAM'),
(20, 'Manasina Mareyali', 'U/A', 'Manasina Mareyali is a Kannada movie starring Kishore Yadav, Divya Gowda and Vardhan thirthahalliin prominent roles. It is a drama directed by Oscar Krishna, with King Lingaraj as the Producer, forming part of the crew.', 'Kannada', 'https://www.youtube.com/embed/XWcekflFfAg'),
(21, 'Tumbbad', 'A', 'A mythological story about a goddess who created the entire universe. The plot revolves around the consequences when humans build a temple for her first-born.', 'Hindi', 'https://www.youtube.com/embed/sN75MPxgvX8'),
(22, 'Kaatrin Mozhi', 'U', 'This refreshing comedy-drama is the Tamil remake of the Bollywood film Tumhari Sulu. The plot focuses on a middle-class homemaker’s serendipitous journey to success. As she becomes an RJ for a late night advice show, things get more and more interesting.', 'Tamil', 'https://www.youtube.com/embed/gYlm_zgSxvk');

-- --------------------------------------------------------

--
-- Table structure for table `show_timings`
--

CREATE TABLE `show_timings` (
  `show_id` int(10) UNSIGNED NOT NULL,
  `start_time` datetime NOT NULL,
  `movie_id` int(10) NOT NULL,
  `theatre_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `theatre`
--

CREATE TABLE `theatre` (
  `theatre_id` int(10) UNSIGNED NOT NULL,
  `name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `ticket`
--

CREATE TABLE `ticket` (
  `ticket_id` int(10) UNSIGNED NOT NULL,
  `movie_id` int(11) NOT NULL,
  `theatre_id` int(11) NOT NULL,
  `language_id` varchar(3) NOT NULL,
  `show_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `movie`
--
ALTER TABLE `movie`
  ADD PRIMARY KEY (`movie_id`);

--
-- Indexes for table `show_timings`
--
ALTER TABLE `show_timings`
  ADD PRIMARY KEY (`theatre_id`),
  ADD KEY `movie_id` (`movie_id`,`theatre_id`);

--
-- Indexes for table `theatre`
--
ALTER TABLE `theatre`
  ADD PRIMARY KEY (`theatre_id`);

--
-- Indexes for table `ticket`
--
ALTER TABLE `ticket`
  ADD PRIMARY KEY (`ticket_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;

--
-- AUTO_INCREMENT for table `movie`
--
ALTER TABLE `movie`
  MODIFY `movie_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `theatre`
--
ALTER TABLE `theatre`
  MODIFY `theatre_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ticket`
--
ALTER TABLE `ticket`
  MODIFY `ticket_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

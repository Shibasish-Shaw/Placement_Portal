-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 10, 2021 at 12:32 PM
-- Server version: 5.7.24
-- PHP Version: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `setplacement`
--

-- --------------------------------------------------------

--
-- Table structure for table `apply`
--

CREATE TABLE `apply` (
  `rollNo` int(11) NOT NULL,
  `job_id` int(11) NOT NULL,
  `apply_time` date DEFAULT NULL,
  `cv_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `apply`
--

INSERT INTO `apply` (`rollNo`, `job_id`, `apply_time`, `cv_id`) VALUES
(120000002, 2, '2022-11-10', 30),
(212121001, 2, '2022-11-10', 18),
(212123002, 2, '2022-11-10', 20),
(120000002, 3, '2022-11-10', 30),
(212121001, 3, '2022-11-10', 18),
(120000002, 4, '2022-11-10', 30),
(212121001, 4, '2022-11-10', 18),
(120000002, 5, '2022-11-10', 30),
(212121001, 5, '2022-11-10', 18),
(120000002, 6, '2022-11-10', 30),
(212121001, 6, '2022-11-10', 18);

-- --------------------------------------------------------

--
-- Table structure for table `branch_job`
--

CREATE TABLE `branch_job` (
  `id` int(11) NOT NULL,
  `job_id` int(11) NOT NULL,
  `branch_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `branch_job`
--

INSERT INTO `branch_job` (`id`, `job_id`, `branch_name`) VALUES
(2, 2, 'BTech'),
(3, 2, 'M.Sc'),
(4, 3, 'All Programme'),
(5, 4, 'BDes'),
(6, 4, 'MDes'),
(7, 5, 'BDes'),
(8, 5, 'MDes'),
(9, 6, 'BTech'),
(10, 6, 'MTech');

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

CREATE TABLE `company` (
  `cmp_id` int(11) NOT NULL,
  `cmp_name` varchar(50) NOT NULL,
  `details` varchar(1000) DEFAULT NULL,
  `contactNo` bigint(10) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `company`
--

INSERT INTO `company` (`cmp_id`, `cmp_name`, `details`, `contactNo`, `email`) VALUES
(1, 'Adobe', 'This is one of the best company in india. more thing are there .', 5745124512, 'hr.adobe@gmail.com'),
(2, 'private_comp', 'we will discuss it', 7044136740, 'company_1@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `cv`
--

CREATE TABLE `cv` (
  `cv_id` int(11) NOT NULL,
  `rollNo` int(11) NOT NULL,
  `cv_no` int(11) DEFAULT NULL,
  `cv_data` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `cv`
--

INSERT INTO `cv` (`cv_id`, `rollNo`, `cv_no`, `cv_data`) VALUES
(10, 212123001, 2, 'cv_data/202123001_2.pdf'),
(16, 212123001, 3, 'cv_data/202123001_3.pdf'),
(17, 212123002, 2, 'cv_data/202123002_2.pdf'),
(18, 212121001, 1, 'cv_data/202121001_1.pdf'),
(19, 212123055, 1, 'cv_data/202123055_1.pdf'),
(20, 212123002, 3, 'cv_data/202123002_3.pdf'),
(26, 21120002, 1, 'cv_data/20120002_1.pdf'),
(27, 21120002, 2, 'cv_data/20120002_2.pdf'),
(29, 21120002, 3, 'cv_data/20120002_3.pdf'),
(30, 120000002, 1, 'cv_data/120000002_1.pdf'),
(31, 10102412, 1, 'cv_data/10102412_1.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `job`
--

CREATE TABLE `job` (
  `job_id` int(11) NOT NULL,
  `ctc` int(11) NOT NULL,
  `vacency` int(11) NOT NULL,
  `lastDate` date NOT NULL,
  `joiningDate` date NOT NULL,
  `details` varchar(500) NOT NULL,
  `rec_id` int(11) NOT NULL,
  `typeJob` varchar(15) NOT NULL,
  `cpiCutOff` double DEFAULT '0',
  `cmp_id` int(11) NOT NULL,
  `adertiseDate` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `job`
--

INSERT INTO `job` (`job_id`, `ctc`, `vacency`, `lastDate`, `joiningDate`, `details`, `rec_id`, `typeJob`, `cpiCutOff`, `cmp_id`, `adertiseDate`) VALUES
(2, 2154000, 5, '2021-12-04', '2022-06-19', 'we will discuss on ppt', 13, 'Full Time', 8, 1, '2021-11-04'),
(3, 1200000, 10, '2021-11-19', '2022-06-04', 'we will discuss this in ppt', 14, 'Full Time', 9, 1, '2021-11-04'),
(4, 1245400, 5, '2021-11-13', '2022-09-14', 'We will discuss in PPt', 15, 'Full Time', 8.7, 1, '2021-11-05'),
(5, 1400000, 5, '2021-11-12', '2022-07-08', 'Graphic Designer', 16, 'Full Time', 7.5, 2, '2021-11-09'),
(6, 4500000, 10, '2021-11-12', '2021-11-11', 'nothing', 17, 'Full Time', 7.8, 1, '2021-11-10');

-- --------------------------------------------------------

--
-- Table structure for table `log_in`
--

CREATE TABLE `log_in` (
  `email_id` varchar(50) NOT NULL,
  `passwords` varchar(200) DEFAULT NULL,
  `levels` int(11) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `log_in`
--

INSERT INTO `log_in` (`email_id`, `passwords`, `levels`) VALUES
('shibasishshaw@gmail.com', '1b3abea96142b31573114bf4e39f2251', 1),
('sshaw@gmail.com', '1b3abea96142b31573114bf4e39f2251', 1),
('sshaw01@gmail.com', '1b3abea96142b31573114bf4e39f2251', 1),
('admin1@gmail.com', 'e00cf25ad42683b3df678c61f42c6bda', 0),
('admin2@gmail.com', 'c84258e9c39059a89ab77d846ddab909', 0),
('bhavya@gmail.com', '1b3abea96142b31573114bf4e39f2251', 1),
('spatel@iitg.ac.in', '1b3abea96142b31573114bf4e39f2251', 1),
('msharma@iitg.ac.in', '1b3abea96142b31573114bf4e39f2251', 1),
('company_1@gmail.com', '1b3abea96142b31573114bf4e39f2251', 2),
('hr.adobe@gmail.com', '1b3abea96142b31573114bf4e39f2251', 2),
('huub@gmail.com', '1b3abea96142b31573114bf4e39f2251', 1),
('placement@gmail.com', '1b3abea96142b31573114bf4e39f2251', 3),
('std1@gmail.com', '1b3abea96142b31573114bf4e39f2251', 1),
('std2@gmail.com', '1b3abea96142b31573114bf4e39f2251', 1),
('swati2000@iitg.ac.in', 'e194cedae58a18ef2d109d69e8f72fd5', 1);

-- --------------------------------------------------------

--
-- Table structure for table `maintains_apply`
--

CREATE TABLE `maintains_apply` (
  `comments` varchar(100) DEFAULT NULL,
  `job_id` int(11) NOT NULL,
  `pr_id` int(11) NOT NULL,
  `rollNo` int(11) NOT NULL,
  `approved` char(1) DEFAULT 'N'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `maintains_apply`
--

INSERT INTO `maintains_apply` (`comments`, `job_id`, `pr_id`, `rollNo`, `approved`) VALUES
('You able to apply for Dream Job and super dream job', 2, -1, 120000002, 'Y'),
('You able to apply for Dream Job and super dream job', 2, -1, 212121001, 'Y'),
('You able to apply for Dream Job and super dream job', 2, -1, 212123001, 'Y'),
('You able to apply for Dream Job and super dream job', 2, -1, 212123002, 'Y'),
('You able to apply for Dream Job and super dream job', 3, -1, 120000002, 'Y'),
('You able to apply for Dream Job and super dream job', 3, -1, 212121001, 'Y'),
('You able to apply for Dream Job and super dream job', 3, -1, 212123001, 'Y'),
('You able to apply for Dream Job and super dream job', 4, -1, 120000002, 'Y'),
('You able to apply for Dream Job and super dream job', 4, -1, 212121001, 'Y'),
('You able to apply for Dream Job and super dream job', 4, -1, 212123001, 'Y'),
('You able to apply for Dream Job and super dream job', 5, -1, 120000002, 'Y'),
('You able to apply for Dream Job and super dream job', 5, -1, 212121001, 'Y'),
('You able to apply for Dream Job and super dream job', 5, -1, 212123001, 'Y'),
('You able to apply for Dream Job and super dream job', 6, -1, 120000002, 'Y'),
('You able to apply for Dream Job and super dream job', 6, -1, 212121001, 'Y');

--
-- Triggers `maintains_apply`
--
DELIMITER $$
CREATE TRIGGER `apply_tr_1` BEFORE INSERT ON `maintains_apply` FOR EACH ROW begin
if (select s.cpi from student s where s.rollno= new.rollNo) < (SELECT j.cpiCutOff FROM job j WHERE j.job_id=new.job_id) then set new.approved='N' , new.comments='cpi is low';
ELSE SET new.approved='P' ,new.comments='need to check';
  end if; 
  end
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `apply_tr_2` BEFORE INSERT ON `maintains_apply` FOR EACH ROW begin
if (select s.ppo_ctc from student  s where s.rollNo= new.rollNo) <=600000 AND (select j.ctc from job j where j.job_id=new.job_id)>600000 AND new.approved='P' then set new.approved='Y' , new.comments='You able to apply for Dream Job and super dream job';
elseif (select s.ppo_ctc from student  s where s.rollNo= new.rollNo) <=1600000 AND (select j.ctc from job j where j.job_id=new.job_id)>1600000 AND new.approved='P' then set new.approved='Y' , new.comments='You able to apply for  super dream job';
ELSEIF (select s.ppo_ctc from student  s where s.rollNo= new.rollNo) > 1600000 AND (new.approved='P' or new.approved = 'Y') THEN set new.approved='N', new.comments='you got good ppo';
  end if; 
  end
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `apply_tr_3` BEFORE INSERT ON `maintains_apply` FOR EACH ROW begin
if (select s.ppo_ctc from student  s where s.rollNo= new.rollNo) <=600000 AND (select j.ctc from job j where j.job_id=new.job_id)>600000 AND ( new.approved='P' OR new.approved='Y') then set new.approved='Y' , new.comments='You able to apply for Dream Job and super dream job';
elseif (select o.offer_ctc from offers o where o.rollNo= new.rollNo) <=1600000 AND (select j.ctc from job j where j.job_id=new.job_id)>1600000 AND ( new.approved='P' OR new.approved='Y') then set new.approved='Y' , new.comments='You able to apply for Dream  super dream job';
ELSEIF (select o.offer_ctc from offers o where o.rollNo= new.rollNo) > 1600000 AND (new.approved='P' or new.approved = 'Y') THEN set new.approved='N', new.comments='you got good offers from company';
  end if; 
  end
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `maintains_job`
--

CREATE TABLE `maintains_job` (
  `comments` varchar(100) DEFAULT NULL,
  `job_id` int(11) NOT NULL,
  `pr_id` int(11) NOT NULL,
  `approved` char(1) DEFAULT 'N'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `maintains_job`
--

INSERT INTO `maintains_job` (`comments`, `job_id`, `pr_id`, `approved`) VALUES
('data is ok', 2, 1, 'Y'),
('ok', 3, 1, 'Y'),
('ok now', 4, 1, 'Y'),
('all data is ok', 5, 1, 'Y');

-- --------------------------------------------------------

--
-- Table structure for table `maintains_student`
--

CREATE TABLE `maintains_student` (
  `comments` varchar(100) DEFAULT NULL,
  `rollNo` int(11) NOT NULL,
  `pr_id` int(11) NOT NULL,
  `approved` char(1) DEFAULT 'N'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `maintains_student`
--

INSERT INTO `maintains_student` (`comments`, `rollNo`, `pr_id`, `approved`) VALUES
('Ok all', 1245456, 1, 'Y'),
('ok', 10102412, 1, 'Y'),
('data is ok', 120000002, 1, 'Y'),
('all data is ok', 212121001, 1, 'Y'),
('data is ok', 212123001, 1, 'Y'),
('All data ok', 212123002, 1, 'Y');

-- --------------------------------------------------------

--
-- Table structure for table `offers`
--

CREATE TABLE `offers` (
  `rollNo` int(11) NOT NULL,
  `job_id` int(11) NOT NULL,
  `offer_ctc` int(11) NOT NULL,
  `aecepted` char(1) DEFAULT 'N',
  `offerlastdate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `offers`
--

INSERT INTO `offers` (`rollNo`, `job_id`, `offer_ctc`, `aecepted`, `offerlastdate`) VALUES
(120000002, 2, 2154000, 'N', '2021-11-11'),
(120000002, 6, 4500000, 'N', '2021-11-18'),
(212121001, 6, 4500000, 'N', '2021-11-18');

-- --------------------------------------------------------

--
-- Table structure for table `placement_rep`
--

CREATE TABLE `placement_rep` (
  `pr_id` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `depertment` varchar(25) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `mobileNo` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `placement_rep`
--

INSERT INTO `placement_rep` (`pr_id`, `name`, `depertment`, `email`, `mobileNo`) VALUES
(1, 'Placement Set', 'CCD', 'placement@gmail.com', '8240190816');

-- --------------------------------------------------------

--
-- Table structure for table `programme_job`
--

CREATE TABLE `programme_job` (
  `id` int(11) NOT NULL,
  `job_id` int(11) NOT NULL,
  `programme_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `programme_job`
--

INSERT INTO `programme_job` (`id`, `job_id`, `programme_name`) VALUES
(2, 2, 'Civil Engineering'),
(3, 2, 'Computer Science'),
(4, 2, 'Mathematics'),
(5, 3, 'All dept'),
(6, 4, 'Design'),
(7, 5, 'Design'),
(8, 6, 'Civil Engineering'),
(9, 6, 'Computer Science');

-- --------------------------------------------------------

--
-- Table structure for table `recomendation`
--

CREATE TABLE `recomendation` (
  `rec_id` int(11) NOT NULL,
  `cmp_id` int(11) NOT NULL,
  `recom_word` varchar(25) DEFAULT NULL,
  `rec_key` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `recomendation`
--

INSERT INTO `recomendation` (`rec_id`, `cmp_id`, `recom_word`, `rec_key`) VALUES
(13, 1, 'SDE3', 'Software Engineer'),
(14, 1, 'data scientist', 'Data Scientist'),
(15, 1, 'UX/UI', 'Desine'),
(16, 2, 'UX/UI', 'UX'),
(17, 1, 'SDE2', 'Software Engineer');

-- --------------------------------------------------------

--
-- Table structure for table `slot`
--

CREATE TABLE `slot` (
  `slot_id` int(11) NOT NULL,
  `slot_type` varchar(50) NOT NULL,
  `slot_date` date NOT NULL,
  `slot_time` time NOT NULL,
  `job_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `slot`
--

INSERT INTO `slot` (`slot_id`, `slot_type`, `slot_date`, `slot_time`, `job_id`) VALUES
(1, 'PPT', '2021-11-04', '22:39:00', 2),
(2, 'Coding Test', '2021-11-06', '22:40:00', 2),
(3, 'Online Interview', '2021-11-30', '22:40:00', 2),
(4, 'PPT', '2021-11-05', '22:40:00', 3),
(5, 'Technical Test', '2021-11-11', '22:41:00', 3),
(6, 'On Campus Intervew', '2021-11-27', '22:43:00', 3),
(7, 'PPT', '2021-11-06', '20:08:00', 4),
(8, 'Technical Test', '2021-11-12', '20:08:00', 4),
(9, 'Online Interview', '2021-11-27', '20:10:00', 4),
(10, 'PPT', '2021-11-11', '20:53:00', 5),
(11, 'Technical Test', '2021-11-13', '20:54:00', 5),
(12, 'Online Interview', '2021-11-11', '20:58:00', 5),
(13, 'PPT', '2021-11-11', '11:16:00', 6),
(14, 'Technical Test', '2021-11-13', '11:14:00', 6),
(15, 'Aptitude Test', '2021-11-20', '11:19:00', 6),
(16, 'PPT', '2021-11-21', '11:17:00', 6);

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `rollNo` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `gender` char(1) NOT NULL,
  `mobileNo` varchar(10) NOT NULL,
  `name` varchar(25) NOT NULL,
  `programme` varchar(50) NOT NULL,
  `cpi` double NOT NULL,
  `depertment` varchar(50) NOT NULL,
  `category` varchar(15) DEFAULT NULL,
  `parmenentAdress` varchar(500) NOT NULL,
  `ppo_details` tinyint(1) NOT NULL,
  `ppo_ctc` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`rollNo`, `email`, `gender`, `mobileNo`, `name`, `programme`, `cpi`, `depertment`, `category`, `parmenentAdress`, `ppo_details`, `ppo_ctc`) VALUES
(1245456, 'std1@gmail.com', 'M', '5745124512', 'student no_1', 'BTech', 5.9, 'Bioscience & Bioengineering', 'General', 'Vill - Subhasnagar, P.O- chapla, P.s-Raidighi', 1, 4577874),
(10102412, 'sshaw@iitg.ac.in', 'M', '7044136740', 'Shiv Shaw', 'BDes', 7.9, 'Design', 'obc', 'nothing', 0, 0),
(21120002, 'std2@gmail.com', 'M', '7044136740', 'Abhijit Sen', 'BTech', 7.9, 'Bioscience & Bioengineering', 'General', 'ok', 1, 450000),
(120000002, 'shibasishshaw@gmail.com', 'M', '7044136740', 'Shibasish Shaw', 'MTech', 9.6, 'Computer Science', 'General', 'no', 0, 0),
(212121001, 'msharma@gmail.com', 'M', '7044136740', 'Mohit Sharma', 'BTech', 10, 'Computer Science ', 'General', '1454', 0, 45787),
(212123001, 'spatel@gmail.com', 'M', '7044136740', 'Satyam Patel', 'BTech', 9.5, 'Computer Science ', 'General', 'ok', 0, 0),
(212123002, 'nagar@iitg.ac.in', 'M', '7044136740', 'Nishchal Agarwal', 'BTech', 9.8, 'Mathematics', 'obc', 'Vill - Subahsh nagr', 0, 0),
(212123055, 'swati2000@iitg.ac.in', 'F', '584562', 'swati nain', 'M.Sc', 8, 'Mathematics', 'general', 'b-219 subansiri iitg', 1, 25);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `apply`
--
ALTER TABLE `apply`
  ADD PRIMARY KEY (`job_id`,`rollNo`),
  ADD KEY `apply_fk_1` (`cv_id`),
  ADD KEY `apply_fk_3` (`rollNo`);

--
-- Indexes for table `branch_job`
--
ALTER TABLE `branch_job`
  ADD PRIMARY KEY (`id`),
  ADD KEY `branch_job_fk` (`job_id`);

--
-- Indexes for table `company`
--
ALTER TABLE `company`
  ADD PRIMARY KEY (`cmp_id`);

--
-- Indexes for table `cv`
--
ALTER TABLE `cv`
  ADD PRIMARY KEY (`cv_id`),
  ADD KEY `cv_table_fk` (`rollNo`);

--
-- Indexes for table `job`
--
ALTER TABLE `job`
  ADD PRIMARY KEY (`job_id`),
  ADD KEY `job_fk_1` (`cmp_id`);

--
-- Indexes for table `log_in`
--
ALTER TABLE `log_in`
  ADD PRIMARY KEY (`email_id`);

--
-- Indexes for table `maintains_apply`
--
ALTER TABLE `maintains_apply`
  ADD PRIMARY KEY (`job_id`,`pr_id`,`rollNo`),
  ADD KEY `maintains_apply_fk_3` (`rollNo`);

--
-- Indexes for table `maintains_job`
--
ALTER TABLE `maintains_job`
  ADD PRIMARY KEY (`job_id`,`pr_id`),
  ADD KEY `maintains_job_fk_2` (`pr_id`);

--
-- Indexes for table `maintains_student`
--
ALTER TABLE `maintains_student`
  ADD PRIMARY KEY (`rollNo`,`pr_id`),
  ADD KEY `maintains_student_fk_2` (`pr_id`);

--
-- Indexes for table `offers`
--
ALTER TABLE `offers`
  ADD PRIMARY KEY (`job_id`,`rollNo`),
  ADD KEY `offer_fk_1` (`rollNo`);

--
-- Indexes for table `placement_rep`
--
ALTER TABLE `placement_rep`
  ADD PRIMARY KEY (`pr_id`);

--
-- Indexes for table `programme_job`
--
ALTER TABLE `programme_job`
  ADD PRIMARY KEY (`id`),
  ADD KEY `programme_job_fk` (`job_id`);

--
-- Indexes for table `recomendation`
--
ALTER TABLE `recomendation`
  ADD PRIMARY KEY (`rec_id`);

--
-- Indexes for table `slot`
--
ALTER TABLE `slot`
  ADD PRIMARY KEY (`slot_id`),
  ADD KEY `slot_fk_1` (`job_id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`rollNo`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `branch_job`
--
ALTER TABLE `branch_job`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `company`
--
ALTER TABLE `company`
  MODIFY `cmp_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `cv`
--
ALTER TABLE `cv`
  MODIFY `cv_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `job`
--
ALTER TABLE `job`
  MODIFY `job_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `placement_rep`
--
ALTER TABLE `placement_rep`
  MODIFY `pr_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `programme_job`
--
ALTER TABLE `programme_job`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `recomendation`
--
ALTER TABLE `recomendation`
  MODIFY `rec_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `slot`
--
ALTER TABLE `slot`
  MODIFY `slot_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `apply`
--
ALTER TABLE `apply`
  ADD CONSTRAINT `apply_fk_1` FOREIGN KEY (`cv_id`) REFERENCES `cv` (`cv_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `apply_fk_2` FOREIGN KEY (`job_id`) REFERENCES `job` (`job_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `apply_fk_3` FOREIGN KEY (`rollNo`) REFERENCES `student` (`rollNo`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `branch_job`
--
ALTER TABLE `branch_job`
  ADD CONSTRAINT `branch_job_fk` FOREIGN KEY (`job_id`) REFERENCES `job` (`job_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `cv`
--
ALTER TABLE `cv`
  ADD CONSTRAINT `cv_table_fk` FOREIGN KEY (`rollNo`) REFERENCES `student` (`rollNo`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `job`
--
ALTER TABLE `job`
  ADD CONSTRAINT `job_fk_1` FOREIGN KEY (`cmp_id`) REFERENCES `company` (`cmp_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `maintains_apply`
--
ALTER TABLE `maintains_apply`
  ADD CONSTRAINT `maintains_apply_fk_1` FOREIGN KEY (`job_id`) REFERENCES `job` (`job_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `maintains_apply_fk_3` FOREIGN KEY (`rollNo`) REFERENCES `student` (`rollNo`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `maintains_job`
--
ALTER TABLE `maintains_job`
  ADD CONSTRAINT `maintains_job_fk_1` FOREIGN KEY (`job_id`) REFERENCES `job` (`job_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `maintains_job_fk_2` FOREIGN KEY (`pr_id`) REFERENCES `placement_rep` (`pr_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `maintains_student`
--
ALTER TABLE `maintains_student`
  ADD CONSTRAINT `maintains_student_fk_1` FOREIGN KEY (`rollNo`) REFERENCES `student` (`rollNo`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `maintains_student_fk_2` FOREIGN KEY (`pr_id`) REFERENCES `placement_rep` (`pr_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `offers`
--
ALTER TABLE `offers`
  ADD CONSTRAINT `offer_fk_1` FOREIGN KEY (`rollNo`) REFERENCES `student` (`rollNo`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `offer_fk_2` FOREIGN KEY (`job_id`) REFERENCES `job` (`job_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `programme_job`
--
ALTER TABLE `programme_job`
  ADD CONSTRAINT `programme_job_fk` FOREIGN KEY (`job_id`) REFERENCES `job` (`job_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `slot`
--
ALTER TABLE `slot`
  ADD CONSTRAINT `slot_fk_1` FOREIGN KEY (`job_id`) REFERENCES `job` (`job_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

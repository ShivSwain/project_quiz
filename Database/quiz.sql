-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 17, 2020 at 12:02 PM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 5.6.36

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `quiz_comp`
--

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(10) NOT NULL,
  `firstname` varchar(300) NOT NULL,
  `lastname` varchar(300) NOT NULL,
  `email` varchar(60) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `firstname`, `lastname`, `email`, `username`, `password`) VALUES
(101, 'Shiv', 'Swain', 'shiv@gmail.com', 'shiv', '1234'),
(103, 'raj', 'singh', 'raj1@gmail.com', 'raj', '123'),
(104, 'Sanjay', 'Bhardwaj', 'Sanjay12@gmail.com', 'Sanjay12', 'sanjay123');

-- --------------------------------------------------------

--
-- Table structure for table `played_games`
--

CREATE TABLE `played_games` (
  `gameid` int(10) NOT NULL,
  `playerid` int(10) NOT NULL,
  `total` int(5) NOT NULL,
  `percent` float NOT NULL,
  `attempted` int(5) NOT NULL,
  `result` varchar(50) NOT NULL,
  `date` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `played_games`
--

INSERT INTO `played_games` (`gameid`, `playerid`, `total`, `percent`, `attempted`, `result`, `date`) VALUES
(4010, 101, 10, 66.67, 15, 'Pass', '2020-08-17 03:26:22pm');

-- --------------------------------------------------------

--
-- Table structure for table `questions_list`
--

CREATE TABLE `questions_list` (
  `ques_id` int(5) NOT NULL,
  `ques` varchar(500) NOT NULL,
  `opt1` varchar(100) NOT NULL,
  `opt2` varchar(100) NOT NULL,
  `opt3` varchar(100) NOT NULL,
  `opt4` varchar(100) NOT NULL,
  `answer` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `questions_list`
--

INSERT INTO `questions_list` (`ques_id`, `ques`, `opt1`, `opt2`, `opt3`, `opt4`, `answer`) VALUES
(1, 'A constructor that accepts __________ parameters is called the default constructor ?', '0', '2', '4', '6', '1'),
(2, 'What happens when a class with parameterized constructors and having no default constructor is used in a program and we create an object that needs a zero-argument constructor?', 'Compile-time error', 'Preprocessing error', 'Runtime error', 'Runtime exception', '1'),
(3, 'Destructor has the same name as the constructor and it is preceded by ______ ?', '!', '?', '~', '$', '3'),
(4, 'For automatic objects, constructors and destructors are called each time the objects', 'enter and leave scope', 'inherit parent class', 'are constructed', 'are destroyed', '1'),
(5, 'Which constructor function is designed to copy objects of the same class type ?', 'Create constructor', 'Object constructor', 'Dynamic constructor', 'Copy constructor', '4'),
(6, 'You want subclasses in any package to have access to members of a superclass. Which is the most restrictive access that accomplishes this objective ?', 'public', 'private', 'protected', 'transient', '3'),
(7, 'public class Outer \r\n	{ \r\n		public void someOuterMethod() \r\n		{\r\n        	//Line 5 \r\n    		} \r\n  	  	public class Inner { } \r\n    \r\n    		public static void main(String[] argv) \r\n    		{\r\n    		    	Outer ot = new Outer(); \r\n    	    		//Line 10\r\n    		} \r\n	} \r\n\r\nWhich of the following code fragments inserted, will allow to compile ?', 'new Inner(); //At line 5', 'new Inner(); //At line 10', 'new ot.Inner(); //At line 10', 'new Outer.Inner(); //At line 10', '1'),
(8, 'public class Test { }\r\n\r\nWhat is the prototype of the default constructor ?', 'Test( )', 'Test(void)', 'public Test( )', 'public Test(void)', '3'),
(9, 'You want a class to have access to members of another class in the same package. Which is the most restrictive access that accomplishes this objective?', 'public', 'private', 'protected', 'default access', '4'),
(10, 'What is the widest valid returnType for methodA in line 3?\r\n\r\n	public class ReturnIt \r\n	{ \r\n	    returnType methodA(byte x, double y) /* Line 3 */\r\n	    { \r\n	        return (long)x / y * 2; \r\n	    } \r\n	}', 'int', 'byte', 'long', 'double', '4'),
(11, 'The SQL command to create a table is:', 'MAKE TABLE.', 'ALTER TABLE.', 'DEFINE TABLE.', 'CREATE TABLE.', '4'),
(12, 'A ________ is a stored program that is attached to a table or a view.', 'pseudofile', 'embedded SELECT statement', 'trigger', 'None of the above is correct.', '3'),
(13, 'The DROP TABLE statement:', 'deletes the table structure only.', 'deletes the table structure along with the table data.', 'works whether or not referential integrity constraints would be violated.', 'is not an SQL statement.', '2'),
(14, 'The term _______ is used to refer to a row.', 'Attribute ', 'Tuple ', 'Field ', 'Instance', '2'),
(15, 'For each attribute of a relation, there is a set of permitted values, called the ________ of that attribute.', 'Domain ', 'Relation', 'Set ', 'Schema', '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `played_games`
--
ALTER TABLE `played_games`
  ADD PRIMARY KEY (`gameid`);

--
-- Indexes for table `questions_list`
--
ALTER TABLE `questions_list`
  ADD PRIMARY KEY (`ques_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

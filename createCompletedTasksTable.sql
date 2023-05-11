--
-- Table structure for table `CompletedTasks`
--

CREATE TABLE `CompletedTasks` (
  `id` int(2) NOT NULL,
  `manager` text NOT NULL,
  `workers` text NOT NULL,
  `description` text NOT NULL,
  `grade` int(11) DEFAULT NULL,
  `completed` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
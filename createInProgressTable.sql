--
-- Table structure for table `InProgress`
--

CREATE TABLE `InProgress` (
  `id` INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `manager` text NOT NULL,
  `workers` text NOT NULL,
  `description` text NOT NULL,
  `difficulty` int(11) NOT NULL,
  `due` date NOT NULL,
  `assigned` date NOT NULL,
  `progress` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
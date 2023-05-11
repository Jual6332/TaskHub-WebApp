--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(2) NOT NULL,
  `manager` text,
  `employees` text,
  `name` text NOT NULL,
  `title` text NOT NULL,
  `username` text NOT NULL,
  `password` text NOT NULL,
  `received` text,
  `sent` text,
  `key` text NOT NULL,
  `email` text NOT NULL,
  `emp_requests` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
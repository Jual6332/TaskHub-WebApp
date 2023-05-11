--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `manager`, `employees`, `name`, `title`, `username`, `password`, `received`, `sent`, `key`, `email`, `emp_requests`) VALUES
(1, '3', NULL, 'Lucy Wilkinson', 'Head Honcho', 'luwi8498@colorado.edu', 'yaySchool!', NULL, '0', '123', '', NULL),
(2, '3', NULL, 'Sean ONeal', 'Hungry', 'seon7364@colorado.edu', 'password', '0', '1,2,3', '456', '', NULL),
(3, NULL, '1,2', 'Justin Alvey', 'Guy 1', 'jual6332@colorado.edu', '8674lion', '1,2', NULL, '789', '', NULL),
(4, NULL, NULL, 'Brandon Spitler', 'Guy 2', 'brsp7274@colorado.edu', 'guest', '3', NULL, '719', '', NULL),
(5,NULL,NULL,'user1','None','user1@user.com','user1user1',NULL,NULL,'92683759','None',NULL),
(6,NULL,NULL,'user2','None','user3@user.com','user3user3',NULL,NULL,'82771683','None',NULL),
(7,NULL,NULL,'user4','None','user4@user.com','useruser4',NULL,NULL,'71629521','None',NULL)
;

CREATE TABLE IF NOT EXISTS users(
        `id` INTEGER(2) NOT NULL,
        `manager` TEXT,
        `employees` TEXT,
        `name` TEXT NOT NULL,
        `title` TEXT NOT NULL,
        `username` TEXT NOT NULL,
        `password` TEXT NOT NULL,
        `recieved` TEXT,
        `sent` TEXT,
        `key` INTEGER NOT NULL
);

CREATE TABLE IF NOT EXISTS InProgress(
        id INTEGER(2) NOT NULL,
        manager TEXT NOT NULL,
        workers TEXT NOT NULL,
        description TEXT NOT NULL,
        difficulty INTEGER NOT NULL,
        due DATE NOT NULL,
        assigned DATE NOT NULL,
        progress TEXT
);

CREATE TABLE IF NOT EXISTS CompletedTasks(
        id INTEGER(2) NOT NULL,
        manager TEXT NOT NULL,
        workers TEXT NOT NULL,
        description TEXT NOT NULL,
        grade INTEGER,
        completed DATE NOT NULL
);

INSERT INTO `users` (`id`, `manager`, `employees`, `name`, `title`, `username`, `password`, `recieved`, `sent`, `key`)  VALUES
(01, NULL, 'Sean ONeal', 'Lucy Wilkinson', 'Head Honcho', 'luwi8498', 'yaySchool!', NULL, '0', 123),
(02, 'Lucy Wilkinson', 'Justin Alvey, Brandon Spitler', 'Sean ONeal', 'Hungry', 'seon7364', 'password', '0', '1,2,3', 456),
(03, 'Sean ONeal', NULL, 'Justin Alvey', 'Guy 1', 'jual6332', '8674lion', '1,2', NULL, 789),
(04, 'Sean ONeal', NULL, 'Brandon Spitler', 'Guy 2', 'brsp7274', 'guest', '3', NULL, 719);

INSERT INTO `InProgress` (`id`, `manager`,`workers`,`description`,`difficulty`,`due`,`assigned`,`progress`) VALUES
(0,'Lucy Wilkinson','Sean Oneal','Create USER-1 function',2,'2016-07-01','2016-06-10','Just started'),
(1,'Sean Oneal','Justin Alvey','create USER-2 function',3,'2016-06-23','2016-06-11','Testing'),
(2,'Sean Oneal', 'Justin Alvey','create USER-3 function',2,'2016-06-22','2016-06-12','Designing'),
(3,'Sean Oneal','Brandon Spitler','create Func-01 fucntion',2,'2016-6-17','2016-06-11','Have not started');

INSERT INTO `CompletedTasks` (`id`,`manager`,`workers`,`description`,`grade`,`completed`) VALUES
(4,'Lucy Wilkinson', 'Sean Oneal','Set up trello',10,'2016-06-14'),
(5,'Lucy Wilkinson', 'Sean Oneal','Project part 1',9,'2016-06-12'),
(6,'Sean Oneal', 'Justn Alvey','Team meating',10,'2016-06-16'),
(7, 'Sean Oneal', 'Brandon Spitler','create database',8,'2016-06-16');

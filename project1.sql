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
        PRIMARY KEY (`id`)
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

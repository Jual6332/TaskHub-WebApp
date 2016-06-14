CREATE TABLE employees(
        `id number` INTEGER,
        manager TEXT,
        name TEXT,
        title TEXT,
        `number of tasks assigned` Integer      
);

CREATE TABLE TaskTable(
        id INTEGER,
        manager TEXT,
        `workers names` TEXT,
        description TEXT,
        status TEXT,
        priority INTEGER,
        dependencies TEXT,
        subTasks TEXT
);

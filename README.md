# 3308-project
###Project Title: TaskHub
###Project Team: Justin Alvey, Sean O'Neal, Brandon Spitler, and Lucy Wilkinson
### Project Description:
A social media-type system for work that allows managers to send task requests to employees. keep track of employee performance based on task history
### Vision Statment:
A centralized system that comprehensively tracks employee performance through task completion history
### Motivation: 
To track employee performance for companies with a large number of employees and optimizing task-tracking in the workplace

### Deployment Environment Overview
+ TaskHub is run locally for now, but TaskHub.site will be coming soon! Make sure to be watching.
+ TaskHub utilizes the popular LAMP stack: Linux, Apache, MySQL, and PHP for software development
+ XAMPP was used to develop TaskHub, and is a free and open source cross-platform web server solution stack package developed by Apache Friends (they are super awesome and you should check them out)
+ TaskHub is also equipped with Windows and Mac compatability (see the Compatability section)

### Deployment Environment Setup - Windows
+ The TaskHub webframe was tested on Xampp, v3.2.2. To download Xampp, go to this [website](https://www.apachefriends.org/download.html "ApacheFriends.org") and download Xampp or follow this tutorial [video](https://www.youtube.com/watch?v=mBcLlsXdQMg&list=PL3oMl9a6mutni1eIv5yTmGYkofu0KwjZW&index=2 "Youtube Tutorial by OnlineTuts") 
+ Now that we have Xampp, open up the Xampp control panel (this might be located in your downloads, or you can search in your programs list)
+ From the Xampp Control Panel, make sure the Apache and MySQL modules are running by clicking the "Start" button under Actions for each. If the buttons immediatly under Actions say "Stop" then they are already running and you don;t have to change anything else
+ Let's setup the database for the site. Open a web browser, and type in localhost/phpmyadmin/. This will navigate you to the phpmyadmin setup included with Xampp, with which you can manage your database effectively
+ Now create a database called taskhub, by which we will use for this project. Download the sql file from our github: loadDB2.sql, and navigating back to phpmyadmin, select "Import" from the top toolbar and upload the SQL file. At this point, all tables will be loaded for testing, including the users table where employees and managers login information is kept, the inprogress table which reflects the current tasks being worked on by employees, and the completedtasks table which reflects the taks that have been completed and have been graded by the managers.

### Deployment Environment Setup - Linux

### Dependencies/SetUp
2. The TaskHub webframe was tested on Xampp, an Apache server, v3.2.2. To download Xampp, go to this website and download: https://www.apachefriends.org/download.html or follow this tutorial video: https://www.youtube.com/watch?v=mBcLlsXdQMg&list=PL3oMl9a6mutni1eIv5yTmGYkofu0KwjZW&index=2

3. From the Xampp Control Panel, Apache and MySQL must be running
 
4. MySQL databases are managed from phpMyAdmin

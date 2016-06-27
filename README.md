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
+ TaskHub is also equipped to run on Windows and Mac OS X (see Deployment Environment Setup - Your OS below)
+ From the Xampp Control Panel, Apache and MySQL must be running
+ MySQL databases are managed from phpMyAdmin

### Deployment Environment Setup - Windows
+ The TaskHub webframe was tested on Xampp, v3.2.2. To download Xampp, go to this [website](https://www.apachefriends.org/download.html "ApacheFriends.org") and download Xampp or follow the first steps in this tutorial [video](https://www.youtube.com/watch?v=mBcLlsXdQMg&list=PL3oMl9a6mutni1eIv5yTmGYkofu0KwjZW&index=2 "Youtube Tutorial by OnlineTuts") 
+ Now that we have Xampp, open up the Xampp control panel (this might be located in your downloads, or you can search in your programs list)
+ From the Xampp Control Panel, make sure the Apache and MySQL modules are running by clicking the "Start" button under Actions for each. If the buttons immediately under Actions say "Stop", then they are already running and you don't have to change anything else
+ Let's setup the database for the site. Open a web browser, and type in localhost/phpmyadmin/. This will navigate you to the phpmyadmin setup included with Xampp, with which you can manage database(s) effectively
+ Now create a database called taskhub, which we will use for this project. Download the sql file from our github: loadDB2.sql, and navigating back to phpmyadmin, select "Import" from the top toolbar and upload the SQL file. At this point, all tables will be loaded for testing via the SQL queries. Including are the users table where employees and managers login information is kept, the InProgress table which reflects the current tasks being worked on by employees, and the CompletedTasks table which reflects the taks that have been completed and have been graded by the managers.
+ Navigate back to the TasHub github repo, and download/clone the files
+ Here is where the distinction between Operating Systems comes in. We are going to move the project files into a different location. Navigate to your C-drive, and lick on the folder named "xampp." From here, click on htdocs. Now, unzip the project files folder if you haven't already, and place in the htdocs folder directory. From here, the localhost can be run on your machine.
+ To test it out, run localhost/3308-project-master/, and you should see the welcome page for TaskHub with a sign-in form. Make sure to sign up, and then you will be redirected to your dashboard
+ Note: Once the database is set up, there is really no need to use phpmyadmin - other than to use what is going on behind the scenes. If you are interested you can have a look, but it is not need beyond this point.

### Deployment Environment Setup - Linux
+ The TaskHub webframe was tested on Xampp, v3.2.2. To download Xampp, go to this [website](https://www.apachefriends.org/download.html "ApacheFriends.org") and download Xampp or follow the first steps in this tutorial [video](https://www.youtube.com/watch?v=mBcLlsXdQMg&list=PL3oMl9a6mutni1eIv5yTmGYkofu0KwjZW&index=2 "Youtube Tutorial by OnlineTuts") 
+ Xampp can be installed in a short series of steps using the command line. For download instructions on Linux, see this [FAQ page](https://www.apachefriends.org/faq_linux.html "https://www.apachefriends.org/faq_linux.html") and click "How do I install XAMPP?" for the steps required.

### Deployment Environment Setup - Mac OS X
+ The TaskHub webframe was tested on Xampp, v3.2.2. To download Xampp, go to this [website](https://www.apachefriends.org/download.html "ApacheFriends.org") and download Xampp or follow the first steps in this tutorial [video](https://www.youtube.com/watch?v=mBcLlsXdQMg&list=PL3oMl9a6mutni1eIv5yTmGYkofu0KwjZW&index=2 "Youtube Tutorial by OnlineTuts") 
+ Xampp can be installed by following the short list of steps at this [FAQ page](https://www.apachefriends.org/faq_osx.html "https://www.apachefriends.org/faq_osx.html") by clicking "How do I do install XAMPP for Mac OS X?" and following the steps.

### Repo Code Layout
This repo includes a lot of code, and many different avenues are taken to create the TaskHub software what it is. Included are CSS style pages, custom Javascript code for site functionality, Bootstrap framework packages included to create sleek design, and sql queries which are used to manage databases. But the code can be broken down further. Here is a comprehensive breakdown of all code and files used in TaskHub.

+ **CSCI 3308 Required Project Files**
  + Included are many files required for our class
      1. Part 1: **ProjectPart1.pdf**
          provides a "look-ahead" approach to our project, including our project-tracking software (Trello), VCS (GitHub), and our project description.
      2. Part 2: **03-TaskHub_Part2.sql** is a MySQL dump of our first database tables. Provided a visual interpretation of how our database would function, and using phpMyAdmin, was detrimental in providing function for our project
      3.  Part 4A: **TaskHub_Part_4Testing.pdf** is a breakdown of the method by which we tested our code. Using automated test cases, we were able to find which areas of our backend needed improvement, by testing user functions such as signing in, updating a task, and others.
      4. Part 4B: **TaskHub_Part_4Autodoc.pdf** is an autodocumentation of our code, by which other users and programmers can experience our thought process, and witness the method involved. We hope by making our code open-source and free, we can help other programmers and thinkers solve problems at even the smallest scale of programming.
      5. Part 4C: **TaskHub_Part_4Finish.pdf** provides an overview, and "looking back" view of our project to see what was contributed, what worked with our software process (Trello, GitHub, developing source, etc.) and what product we were able to create as a final product (Demo Video.)
      6. Part 5: TBD
      7. Part 6: Not include - individual peer evals


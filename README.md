* Will update formatting later

   _____      _              _       _      _____ _   
  / ____|    | |            | |     | |    |_   _| |  
 | (___   ___| |__   ___  __| |_   _| | ___  | | | |_ 
  \___ \ / __| '_ \ / _ \/ _` | | | | |/ _ \ | | | __|
  ____) | (__| | | |  __/ (_| | |_| | |  __/_| |_| |_ 
 |_____/ \___|_| |_|\___|\__,_|\__,_|_|\___|_____|\__|
                                                      
                                                    
                                                    
--------------------------------------
CONTENTS OF THIS FILE
--------------------------------------

 Introduction
 Installation
 Files
 Website/Demo


--------------------------------------
INTRODUCTION
--------------------------------------

This is a web application written in hopes to provide an easier means of schedule
creating for the students of Wentworth Institute of Technology. The web application
will allow the student to visually create a class schedule without the need to:
manually find the classes through a multi-page process, manually record CRNs for 
adding classes in bulk, and finally attempt to add the desired classes to the 
students own schedule. All this in, hopefully, one single step. However, the
student still needs to manually enter the class CRNs during actual class registration.
That part is out of the application's hands as that would require a direct connection
with Wentworth's registration system.









--------------------------------------
TECHNICALS
--------------------------------------

The website utilizes:

 * MariaDB
 * Apache HTTP Server
 * PHP 5.4.16
 * JQuery 1.4.4
 * fullCalendar.js
 * BootStrap 3.3.6


--------------------------------------
INSTALLATION
--------------------------------------

For now, GitHub will be the only way to download the complete web application.

Either:
Fork the repository
Clone to your machine

git clone https://github.com/ewduong/ScheduleIt.git



--------------------------------------
FILES
--------------------------------------

index.php

The initial page for the web application. Provides info on what ScheduleIt is and links 
to: searching courses (search.php), making a schedule (schedule.php), an About Us page (about_us.php), and a contact us form.





search.php

The page to search for classes with the desired specifications of: semester, course CRN, class subject, class title, 
desired day(s), start times, end times, professor name, and building location. After input, a table is 
generated based on those specifications.


schedule.php

The page where the actual semi-automated schedule creation action begins. User starts by out by selecting which semester to create a schedule for. Following that, the user selects the class subject and the course number. 

After all the desired classes are added, the user can click the "Create Schedule" button and a calendar is generated, with clickable tabs, for each schedule generated. CRNs for each class and schedule is outputted underneath the calendar for registration, or other miscellaneous use.


about_us.php

A page featuring the developers of ScheduleIt.


schedulegenerator.py

A python script used by schedule.php containing the algorithm for the schedule generation process.


/includes/dbconnect.php

PHP script used by search.php and schedule.php to connect to the MariaDB database containing all class and course information.


/includes folder

Contains PHP scripts used by search.php and schedule.php along with other overlay functions the website has.



/css folder

Contains CSS files used to style the web pages of ScheduleIt.


/fonts folder

Contains fonts used by the website.

/lang folder

Contains language translation javascript files for fullCalendar.js

/sql folder

Contains SQL files used to generate the databases that contain class and course information for each semester.


/js folder

Contains js files used to functionality of the ScheduleIt.


/img folder

Contains images used for ScheduleIt.


--------------------------------------
Website/Demo
--------------------------------------

The original ScheduleIt website can be accessed at: http://scheduleit.sytes.net/


# CRUD on vanilla  Phalcon

As it was assigned by Alexander Belugin **(Mayby I'll add tag later)** I've created the test version of CRUD on Phalcon only. Even JS weren't used in this case. This project could be useful for you as a fundamental web-page on which could be based anything else backend dependent.


# Installation

- First of all, you'll need Phalcon to install. 
Tbh I'm way too lazy to describe that in detail so... I have an Phalcon installation guide instead :D 
 >https://phalcon.io/en-us/download/windows
 
 - It could be not relevant if you haven't install **Open server** or **Xampp** yet (depending on your sexual orientation), but if you hadn't then... Shame on you!
 - Nevertheless you also will be in need of Database for this thing to work. So I have a specific script for you to paste in your SQL ~~CLI~~ command line. 
 >CREATE TABLE `new_table` (  
`idnew_table` int(100) unsigned NOT NULL AUTO_INCREMENT,  
`task_name` varchar(100) NOT NULL,  
`task_description` varchar(500) DEFAULT NULL,  
PRIMARY KEY (`idnew_table`)  
) ENGINE=InnoDB AUTO_INCREMENT=34 DEFAULT CHARSET=latin1;

- Username for database is **root**. Password is empty string. DBname is **crud** and address to run this magnificent piece of ~~shit~~  code is **127.0.0.1:3306**.
- Then to have a test data, I recommend you to paste this command
>INSERT INTO `crud`.`new_table` (`idnew_table`, `task_name`, `task_description`) VALUES ('1', 'Wake up', 'Usually I wake up at 8:30, but today I needed at office earlier than usual, so 7 o\'clock');
INSERT INTO `crud`.`new_table` (`idnew_table`, `task_name`, `task_description`) VALUES ('2', 'Polish your teeth', 'Dzisiaj, zamiast myc zeby, postanowilem popelnic zbrodnie wojenne.');
INSERT INTO `crud`.`new_table` (`idnew_table`, `task_name`, `task_description`) VALUES ('3', 'Make a breakfast', 'Tom-Kha soup with chidren meat, sounds delicious to me ');
INSERT INTO `crud`.`new_table` (`idnew_table`, `task_name`, `task_description`) VALUES ('4', 'Morning workout', 'Get off the computer and do 20 pushups');
INSERT INTO `crud`.`new_table` (`idnew_table`, `task_name`, `task_description`) VALUES ('5', 'Consume the primodial voidness of existance insted of coffee', 'Someone changed the cans in places, so you decided to put anti-matter in your morning coffee instead of sugar. Prepare to the huge explosion');

# Installation
Also I recomend you to rename you project folder to just CRUD, due to the technical issues :p

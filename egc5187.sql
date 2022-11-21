-- Adminer 4.8.1 MySQL 8.0.27 dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

SET NAMES utf8mb4;

CREATE TABLE `course` (
  `id` int NOT NULL AUTO_INCREMENT,
  `title` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `path_url` text COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `course` (`id`, `title`, `description`, `path_url`) VALUES
(1,	'PHP Basics',	'PHP is a widely-used server-side scripting language, and is a very powerful language to use when designing websites. PHP is free to use, and widely documented online. This lesson on the basics of PHP provides an important foundation for you to start working with PHP on your own websites.',	'/~egc5187/instill//course.php?id=1'),
(2,	'PHP Modular Sites',	'Lorem ipsum dolor sit amet\', \'consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.',	'/~egc5187/instill//course.php?id=2');

CREATE TABLE `lesson` (
  `id` int NOT NULL AUTO_INCREMENT,
  `title` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `course_id` int NOT NULL,
  `lesson_type` int NOT NULL,
  `lesson_text` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `path_url` text COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `lesson_type` (`lesson_type`),
  KEY `course_id` (`course_id`),
  CONSTRAINT `lesson_ibfk_2` FOREIGN KEY (`lesson_type`) REFERENCES `lesson_type` (`id`),
  CONSTRAINT `lesson_ibfk_5` FOREIGN KEY (`course_id`) REFERENCES `course` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `lesson` (`id`, `title`, `course_id`, `lesson_type`, `lesson_text`, `path_url`) VALUES
(1,	'Syntax',	1,	3,	' <h1>PHP Syntax</h1>\r\n<p>Knowing the syntax of a language helps speed up your development cycle by reducing the amount of time you spend looking up errors in your code, or fixing errors when code doesn’t function properly. This section provides the basics of the syntax of PHP. </p>\r\n <h2>Php Start and End Tags</h2>\r\n<p>PHP Tags are used to define sections of PHP code. PHP tags can only work in .php files.</p>\r\n<h3>Example of PHP Tags:</h3>\r\n<code>&lt?php (...) ?&gt</code>\r\n<h3>PHP Comments</h3>\r\n<p>Comments are used to denote sections of code to not be run. This can be used when testing code, or to provide notes and labels to your code.</p>\r\n<code>// Is an example of a PHP single line comment<br> # Is also a valid PHP single line comment<br> /*    <br> This is the syntax for a multi-line PHP comment<br>*/</code>\r\n',	'/~egc5187/instill//lesson.php?id=1'),
(2,	'Variables',	1,	3,	'<h1>PHP Variables</h1>\n<p>Variables are how programming languages store information. PHP has a type of variable called environmental variables, which are used to store information about the instance of PHP, and to interact with your PHP scripts.</p>\n<h2>Environmental Variables</h2>\n<p>These are used to store information that is used within PHP itself.</p>\n<table>\n    <tr>\n        <th>Environment Variable</th>\n        <th>Function</th>\n    </tr>\n    <tr>\n        <td><code>$_SERVER</code></td>\n        <td>Server and execution environment information</td>\n    </tr>\n        <tr>\n        <td><code>$_GET</code></td>\n        <td>HTTP GET variable (if they were sent)</td>\n    </tr>\n        </tr>\n        <tr>\n        <td><code>$_POST</code></td>\n        <td>HTTP POST variable (if they were sent)</td>\n    </tr>\n        </tr>\n        <tr>\n        <td><code>$_FILES</code></td>\n        <td>HTTP file upload variables (if any were sent)</td>\n    </tr>\n        </tr>\n        <tr>\n        <td><code>$_Request</code></td>\n        <td>HTTP request variables (inclusive of all $_GET, $_POST, and $_COOKIE variables)</td>\n    </tr>\n        </tr>\n        <tr>\n        <td><code>$_SESSION</code></td>\n        <td>Session variables provide a way to keep variables from one page to another</td>\n    </tr>\n        </tr>\n        <tr>\n        <td><code>$_ENV</code></td>\n        <td>Environment variables</td>\n    </tr>\n        </tr>\n        <tr>\n        <td><code>$_COOKIE</code></td>\n        <td>HTTP cookies (if there are any)</td>\n</table>\n\n<h2>Outputting Variables</h2>\n<p>The “echo” statement can be used to output data to a screen. You can either manually type the data, or you can use output variables. All variables are defined with $[name], for example, a variable can be named as $example\n<p>The “.” is used to concat (or add) together statements and variables.</p>\n<code>\n&lt?php<br>\n$example = “Morning”;<br>\necho “Good “ . $example . “!”;<br>\n?&gt\n</code>\n<p>This will print out “Good Morning!”</p>\n\n<p>You can also use the echo command to do other things:</p>\n<code>\n&lt?php<br>\n$x = 1;<br>\n$y = 2;<br>\necho $x + $y;<br>\n?&gt\n</code>\n<p>This will print out “3”</p>\n\n<p>You do not have to tell PHP which data type the variable is, as PHP is a dynamically typed language.</p>\n',	'/~egc5187/instill//lesson.php?id=2'),
(3,	'Echo',	1,	3,	'<h1>Echoing Variables in PHP</h1>\n\n<p>Echo is used to output text into an html given some data values or just plain text</p>\n\n<code>&lt?php\necho “This is what echo does”;\n?&gt</code>\n\n<p>Echo can also be used to display variables</p>\n\n<code>&lt?php\n$variable = “this is a variable”;\necho $variable;\n?&gt</code>\n\n<p>You can also use html tags to change how the echo prints</p>\n\n<code>&lt?php<br>\n$variable = “this is a heading”;<br>\necho “&lth2&gt” . $variable . “&lt/h2&gt”;<br>\necho “This will be regular text”;<br>\n?&gt</code>\n<p>Variables just needs $ in front of the name and it will work</p>\n',	'/~egc5187/instill//lesson.php?id=3'),
(4,	'Review',	1,	3,	'<h1>Review of PHP Basics</h1>\r\n<?php\r\ninclude \'db_connect.php\';\r\ninclude \'get_quiz.php\';\r\n?>',	'/~egc5187/instill//lesson.php?id=4'),
(5,	'PHP Head',	2,	2,	'The header can contain anything from the start of your HTML code all the way up to your nav bar section. You can copy paste this into a new header.php file. You do not need to worry about HTML syntax as of this moment. Each div does not need an end tag.',	'/~egc5187/instill//lesson.php?id=5'),
(6,	'PHP Navigation',	2,	2,	'The nav section should include your entire nav section, leaving out the lines that overlap with the header.php.',	'/~egc5187/instill//lesson.php?id=6'),
(7,	'PHP Content',	2,	1,	'The content should be everything that has information value. This should contain the majority of your website’s content',	'/~egc5187/instill//lesson.php?id=7'),
(8,	'PHP Footer',	2,	1,	'This should be the rest of your HTML file. This will contain almost all of your ending tags for your HTML page.',	'/~egc5187/instill//lesson.php?id=8'),
(9,	'$page Variable',	2,	1,	'Each page will need some variables defined to make sure each page is unique and for the code to set them apart. This will also allow the navigation to work\r\n\r\nThis will also go hand-in-hand with the $path variable, for the code to get the file. \r\n',	'/~egc5187/instill//lesson.php?id=9');

CREATE TABLE `lesson_type` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `lesson_type` (`id`, `name`) VALUES
(1,	'Tutorial'),
(2,	'Review'),
(3,	'Document');

CREATE TABLE `questions` (
  `questionID` int NOT NULL AUTO_INCREMENT,
  `examID` int NOT NULL,
  `question` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `dateCreated` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`questionID`),
  KEY `examID` (`examID`),
  CONSTRAINT `questions_ibfk_1` FOREIGN KEY (`examID`) REFERENCES `quiz` (`examID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `questions` (`questionID`, `examID`, `question`, `dateCreated`) VALUES
(1,	1,	'What is the php tag?',	'2022-11-10 05:00:00'),
(2,	1,	'Which is a multi-line comment?',	'2022-11-10 05:00:00'),
(3,	1,	'What does the echo statement do?',	'2022-11-10 05:00:00'),
(4,	1,	'How do you declare a variable in PHP?',	'2022-11-10 05:00:00');

CREATE TABLE `quiz` (
  `examID` int NOT NULL AUTO_INCREMENT,
  `heading` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dateCreated` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`examID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `quiz` (`examID`, `heading`, `dateCreated`) VALUES
(1,	'PHP Basics Review',	'2022-11-10 05:00:00');

CREATE TABLE `resorce` (
  `id` int NOT NULL AUTO_INCREMENT,
  `title` int NOT NULL,
  `description` int NOT NULL,
  `link_url` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


CREATE TABLE `sidenav` (
  `id` int NOT NULL AUTO_INCREMENT,
  `title` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `path_url` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `img_url` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `sidenav` (`id`, `title`, `path_url`, `img_url`) VALUES
(1,	'Search',	'/~egc5187/instill/search.php',	'/~egc5187/instill/images/search_icon.png'),
(2,	'Courses',	'/~egc5187/instill/',	'/~egc5187/instill/images/lesson.svg'),
(3,	'Exercises',	'/~egc5187/instill/explore.php',	''),
(4,	'Explore',	'/~egc5187/instill/explore.php',	'/~egc5187/instill/images/explore_icon.png'),
(5,	'Resources',	'/~egc5187/instill/resorces.php',	''),
(7,	'Quizes',	'',	'');

-- 2022-11-17 22:49:56

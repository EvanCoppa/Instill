<?php
// class that holds all php components
class Components {

public function createPageComponent($size, $header, $content, $img_path = null, $img_alt = null, $sub_tag = null) {
   
switch ($size) {
    case 'small':
        echo '<div class="smallComponent">
        <div class="pageComponentContent">
        <h2>' . $header . '</h2>
            <p>' . $content . '</p>
        </div></div>';
        break;
    case 'medium':
        echo '<div class="mediumComponent">
        <div class="pageComponentContent">
        <h2>' . $header . '</h2>
            <p>' . $content . '</p>
        </div>
        <div class="pageComponentImage">
            <img src="' . $img_path . '" alt="' . $img_alt . '">
        </div></div>';
        break;
    case 'large':
        echo '<div class="largeComponent">
        <div class="pageComponentContent">
        <h3>// ' . $sub_tag . ' //</h3>
        <h2>' . $header . '</h2>
            <p>' . $content . '</p>
        <div class="button">
            <div><img src="images/icons8-play-96.png" alt="play button" height="40" width="40"></div>
            <div>Start Learning Now</div>
        </div>    
            
        </div>
        <div class="pageComponentImage">
            <img src="' . $img_path . '" alt="' . $img_alt . '">
        </div> </div>';
        break;
    default:
        # code...
        break;
    }
}

public function createMainComponent(){
    // do this from the data base with for loop or what not

}

 public function createHead(String $title){
    echo' <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>' . $title . '</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="main.js"></script>
    <link rel="stylesheet" href="style.css">';
    
 }

 public function createTopNav()
 {
    echo'
    <div id="topnav">
    <ul>
        <li><img src="images/logo.png" alt="" height="30"></li>
        <li><a href="index.php">Instill</a></li>
        <li><i id="menu" style="margin:auto;" class="fa fa-bars" onclick="expandMenu()"></i></li>
    </ul>
    </div>
</li>
</ul>
</div>';
 }

public function createSideNav() {
 
     echo '<div id="sidenav">';
    // if ($_COOKIE["isOpen"] == "false") {
    //     echo 'style="transition-duration: 0s; width: 5rem;"';
    // }
    // echo '>';
    
    $url = $_SERVER['REQUEST_URI'];
    
    $array_urls = array(
        1  => "",
        2 => "",
        3 => "",
        4 => "",
        5 => "",
    );

    $array_icons = array(
        1  => "",
        2 => "",
        3 => "",
        4 => "",
        5 => "",
    );
    
    $array_names = array(
        1 => "Search",
        2 => "Lessons",
        3 => "Exercises",
        4 => "Explore",
        5 => "Resources",    
    );
    
    foreach ($array_urls as $key => $value) {
        // if (substr($url, 1) == $value) {
        //     echo ' id="active"';
        // }
        if ($key == 1) {
            echo '<a href="' . $value . '" id="active">' . '<div class="icons">' . '<img src="' . $array_icons[$key] . '" />' . '<div class="name">' . $array_names[$key] . '</div> </div> </a>';
        } else {
            echo '<a href="' . $value . '">' . '<div class="icons">' . '<img src="' . $array_icons[$key] . '" />' . '<div class="name">' . $array_names[$key] . '</div> </div> </a>';
        }
    }
}


public function createFooter() {
    echo '
    <footer>
        <div class="footerContent">
            <h1>Instill</h1>
            <hr style="width: 50%;">
            <p>Contact us</p>
            <p>Feedback</p>
            <p>Rubric</p>
        </div>
    </footer>
    ';
}

public function createSideNav2() {
 
    echo '<div id="sidenav2">';
   // if ($_COOKIE["isOpen"] == "false") {
   //     echo 'style="transition-duration: 0s; width: 5rem;"';
   // }
   // echo '>';
   
   $url = $_SERVER['REQUEST_URI'];
   
  

   // Lesson 1 - PHP Basics
// 1.1 - Syntax
// 1.2 - Comments
// 1.3 - Variables
// Lesson 1 Review
// Lesson 2 - PHP Loops
// 2.1 - If Loops
// 2.2 - If Else Loops
// Lesson 2 Review
// Lesson 3 - Operands
// 3.1 - Echo
// 3.2 - VarDump
// 3.3 - HTML Output
// Lesson 3 Review
// Lesson 4 - Forms
// 4.1 - Creating Forms
// 4.2 - Linking Forms
// 4.3 - Get VS Post
// 4.4 - Access Data
// 4.5 - Sending Emails 
// Lesson 4 Overview

// create a multidimensional array for the lessons and the sub lessons
// then loop through the array and create the links

$lessons = array(
    1 => array(
        1 => "1.1 - Syntax",
        2 => "1.2 - Comments",
        3 => "1.3 - Variables",
        4 => "1.4 - Data Types",
        5 => "1.5 - Constants",
        6 => "Lesson 1 Review",
    ),
    2 => array(
        1 => "2.1 - If Loops",
        2 => "2.2 - If Else Loops",
        3 => "Lesson 2 Review",
    ),
    3 => array(
        1 => "3.1 - Echo",
        2 => "3.2 - VarDump",
        3 => "3.3 - HTML Output",
        4 => "Lesson 3 Review",
    ),
    4 => array(
        1 => "4.1 - Creating Forms",
        2 => "4.2 - Linking Forms",
        3 => "4.3 - Get VS Post",
        4 => "4.4 - Access Data",
        5 => "4.5 - Sending Emails ",
        6 => "Lesson 4 Overview",
    ),
    5 => array(
        1 => "5.1 - Arrays",
        2 => "5.2 - Associative Arrays",
        3 => "5.3 - Loops",
        4 => "5.4 - Sort",
        5 => "5.5 - Functions",
        6 => "Lesson 5 Overview",
    ),
    6 => array(
        1 => "6.1 - Includes",
        2 => "6.2 - Classes",
        3 => "6.3 - Objects",
        4 => "6.4 - Inheritance",
        5 => "6.5 - Polymorphism",
        6 => "6.6 - Encapsulation",
        7 => "6.7 - Abstraction",
        8 => "Lesson 6 Overview",
    ),
    7 => array(
        1 => "7.1 - Intro",
        2 => "7.2 - Setup",
        3 => "7.3 - Basics",
        4 => "7.4 - Advanced",
        5 => "Lesson 7 Overview",
    ));
   

    // loop through the lessons and sub lessons creating the links in the side nav
    $i = 0;
    foreach ($lessons as $key => $value) {
        $i++;
       echo '<a href="lesson.php?lesson=">' . '<div class="icons">' . '<div class="name">Lesson '  . $i . ' Overview</div> </div> </a>';
        foreach ($value as $key2 => $value2) {
            echo '<a href="lesson.php?lesson=' . $key . '&sublesson=' . $key2 . '">' . '<div class="icons">' . '<div class="subName">' . $value2 . '</div> </div> </a>';
        }
    }

 
}
}

?>
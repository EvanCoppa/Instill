<?php
// class that holds all php components
class Components {


public function createPageComponent($size, $header, $content, $path, $img_path = null, $img_alt = null, $sub_tag = null) {
   
switch ($size) {
    case 'small':
        echo '<div class="smallComponent">
        <div class="pageComponentContent">
        <h2>' . $header . '</h2>
            <p>' . $content . '</p>
        </div></div>';
        break;
    case 'medium':
        echo '<div class="mediumComponent" onclick="route(\'' . $path . '\')">
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
        case 'mini':
            echo '<div class="miniComponent" onclick="route(\'' . $path . '\')">
            <div class="pageComponentContent">
            <h2>' . $header . '</h2>
                <p>' . $content . '</p>
           
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
    <div class="logo">
        <a href="index.php"><img src="images/logo.png" alt="" height="30"></a>
        <a href="index.php">Instill</a>
        <i id="menu" style="margin:auto;" class="fa fa-bars" onclick="expandMenu()"></i>
    </div>
    <div class="breadc_crumb">
    <ul class="breadcrumb">
  <li><a href="#">Home</a></li>
  <li><a href="#">Pictures</a></li>
  <li><a href="#">Summer 15</a></li>
  <li>Italy</li>
</ul></div> 
</div>';
 }

public function createSideNav($key) {
    echo '<div id="sidenav">';

    include 'db_connect.php';
    $result = $mysqli->query("SELECT * FROM sidenav");
    while ($row = $result->fetch_assoc()) {
        if ($key == $row['id']) {
            echo '<a href="' . $row['path_url'] . '" id="active">' . '<div class="icons">' . '<img src="' . $row['img_url'] . '" />' . '<div class="name">' . $row['title'] . '</div> </div> </a>';
        } else {
            echo '<a href="' . $row['path_url'] . '">' . '<div class="icons">' . '<img src="' . $row['img_url'] . '" />' . '<div class="name">' . $row['title'] . '</div> </div> </a>';
        }
    }

    echo '</div>';

}


public function createFooter() {
    echo '
    <footer>
    <div class="footerTitle">
        <h1>Instill</h1>
        <hr style="width: 50%;">
    </div>

        <div class="footerContent">
           
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
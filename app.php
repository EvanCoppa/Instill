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
    <link rel="stylesheet" href="style.css">';
    
 }

 public function createTopNav()
 {
    echo'
    <div id="topnav">
    <ul>
        <li> <a href="index.php">Instill</a></li>
        </li>
        </li>
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

}
   
?>
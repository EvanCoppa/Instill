<?php
//declaring variables for checkboxes
$yes = "";
$no = "";

 $visitor  = $_POST['visitor'];
 $lessonNum = $_POST['lessonNum'];
 $vdate    = $_POST['vdate'];
 $page    = $_POST['fplace'];
 $rating   = $_POST['rating'];
 $destination_email = "pau.martel21@gmail.com";
$email_subject = "Customer Feedback- Instill";
$email_body = "Visitor name  $visitor\n";
$email_body .= "Lessons Completed $lessonNum\n";
$email_body .= "Date Visited=$vdate\n";
$email_body .= "Favorite Page $page ";
if (isset($_POST['SOMEPLACE'])) {
    $email_body .= $_POST['SOMEPLACE'] .  "\n";
}
$email_body .= "\nRating -> $rating\n";

if (isset($_POST['ye'])) { //isset is checked
    $yes .= $_POST['ye'];
}

if (isset($_POST['ne'])) { 
    $no .= $_POST['ne'];
}

$email_body .= "\nVisited = $yes $no"; 


$email_body .= "\n Updated December 2022 \n";
mail($destination_email, $email_subject, $email_body);
// echo "Data Sent\n";

?>
<html lang="en">
<head>
    <?php 
        include 'app.php'; 
        $components = new Components; 
        $components->createHead('Thank you');
        include 'db_connect.php';
    ?>
</head>
   
    
    <body>
    <header>  
        <nav>
            <?php $components->createTopNav(); $components->createSideNav(2);?>
        </nav>
    </header>
    <main style="display: block;">
        <h1 style="margin: auto; text-align: center;">Thank you for your feedback!</h1>
    <br>
        <a style="margin-left: auto; margin-right: auto;" href="http://solace.ist.rit.edu/~iste240t36/Instill/">
        <img style="margin-left: auto; margin-right: auto;" class="NoBorder" src="images/logo.png" 
            id="home" alt="Home" title="Home"/>
        
        </a>
</main>
    
    </body>

    </html>




        
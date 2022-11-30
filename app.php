<?php
// class that holds all php components
class Components {


public function createPageComponent($size, $header, $content, $path, $img_path = null, $img_alt = null, $sub_tag = null) {
   
switch ($size) {
    case 'small':
        echo '<div class="smallComponent" onclick="route(\'' . $path . '\')">
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
        <ul>
        <li><a href="#"><a href="index.php"><img src="images/logo.png" alt="" height="35"></a></a></li>
        <li><a href="index.php">Instill</a></li>
      </ul>
     </div>
</div>';
// <div class="breadc_crumb">
// <ul class="breadcrumb">
// <li><a href="#">Home</a></li>
// <li><a href="#">Pictures</a></li>
// <li><a href="#">Summer 15</a></li>
// <li>Italy</li>
// </ul></div> 
 }

public function createSideNav($key) {
    echo '<div id="sidenav">';

    include 'db_connect.php';
    $result = $mysqli->query("SELECT * FROM sidenav");
    $i = 1;
    while ($row = $result->fetch_assoc()) {
    
        if ($key == $i) {
            echo '<a href="' . $row['path_url'] . '" id="active">' . '<div class="icons">' . '<img src="' . $row['img_url'] . '" />' . '<div class="name">' . $row['title'] . '</div> </div> </a>';
        } else {
            echo '<a href="' . $row['path_url'] . '">' . '<div class="icons">' . '<img src="' . $row['img_url'] . '" />' . '<div class="name">' . $row['title'] . '</div> </div> </a>';
        }
        $i++;
    }

    echo '</div>';

}
public function connectDB(){
  echo'  $mysqli = mysqli_connect("localhost", "egc5187", "Literacy8+cowherd", "egc5187");
    if (mysqli_connect_errno()) {
        printf("Connect failed: %s\n", mysqli_connect_error());
        exit();
        }';
}

public function createQuiz(){
    session_name("User");
    session_start();
    $path = "./";
    $examID = $_GET['examID'];
    $calledURL = basename($_SERVER['REQUEST_URI']);
    require $path . '../../../dbConnect.inc';
    $sql = "SELECT * FROM quiz WHERE examID = '$examID';";
    
    if (isset($_POST["submitted"])) {
        // Come back and want to grade quiz
        $grade = true;
        echo '<h4 style="color:green;background:#FFFFBF">' . 'Correct Answers Appear' . '</h4>';
    } else {
        $grade = false;
    }      
   echo' <form action="<?php echo $calledURL; ?>" method="POST">';
        
        $result = mysqli_query($mysqli, $sql);
        $quiz_id = 0;
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_array($result)) {
                $quizName = $row['heading'];
                echo '<h2>' . $quizName . '</h2>';
                $_SESSION['quiz'] = $quizName;
                //  echo '<h1>' . $_SESSION['quiz'] . '</h1>';
            } 
            
            $sqlQ = "SELECT * FROM questions WHERE examID = '$examID';";
            $resultQ = mysqli_query($mysqli, $sqlQ);
            $count = 1;
    
            if (mysqli_num_rows($resultQ) > 0) {
                while ($rowQ = mysqli_fetch_array($resultQ)) {
                    $question = $rowQ['question'];
                    $questionID = $rowQ['questionID'];
                    echo $count . '. <p style="display: inline-block;">' . $question . '</p><br/>';
                    $count++;
                    $sqlOptions = "SELECT * FROM multipleChoiceOptions WHERE questionID = '$questionID';";
                    $resultOptions = mysqli_query($mysqli, $sqlOptions);
                    if (mysqli_num_rows($resultOptions) > 0) {
                        $optionCount = 1;
                        while ($rowOptions = mysqli_fetch_array($resultOptions)) {
                            $option = $rowOptions['mcOption'];
                            $c  = $rowOptions['isCorrect'];
    
                            echo '&nbsp;&nbsp;&nbsp;&nbsp;' . $optionCount . ') <label ';
    
                            if ($grade && $c == 1) {
                                echo 'style="font-weight:bold;color:green;background:#FFFFBF;"';
                            }
                            echo '>' . $option . '</label> <input name="' . $questionID . 'Option"  value="' . $c . '" type="radio" />            <br/>';
    
                            $optionCount++;
                        } 
                        echo "<p>&nbsp;</p>";
                    } 
                }
            } 
        } 
       echo' <div id="button"> <input type="submit" name="submitted" value="SUBMIT"> </div><!-- end of div for submit button --> </form>';
        
    
       
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
            <p><a href="feedback.php">Feedback</a></p>
            <p><a href="comments.php">Comments</a></p>
            <p>Rubric</p>
        </div>
    </footer>
    ';
}


public function createCommentsSection($mysqli) {
    if($mysqli) {
        if (!empty($_POST['name']) && !empty($_POST['comment'])) {
            $stmt = $mysqli->prepare("INSERT INTO comments (name, comment) VALUES (?,?)");
                $stmt->bind_param("ss",$_POST['name'],$_POST['comment']);
                $stmt->execute();
                $stmt->close();
        }
        $sql = 'SELECT name, comment FROM comments';
        $res = $mysqli->query($sql);
        if($res){
            while($rowholder = mysqli_fetch_array($res,MYSQLI_ASSOC)){
                $records[] = $rowholder;
            }		
        }
    }
    echo "
    <h2 style='text-align:center;'>Comments</h2>
    <table id='commenttable' style='margin: auto; border: 1px solid'>";
	$startrow=true;
	foreach($records as $this_row){
		if ($startrow) {
			echo '<tr>';
			foreach($this_row as $key => $field) {
				echo '<th>' . htmlspecialchars($key) . '</th>';
			}
			echo '</tr>';
			echo '<tr>';
			foreach($this_row as $key => $field) {
				echo '<td>' . htmlspecialchars($field) . '</td>';
			}	
			echo '</tr>';		
			$startrow=false;

		} else {
			echo '<tr>';
			foreach($this_row as $key => $field) {
				echo '<td>' . htmlspecialchars($field) . '</td>';
			}	
			echo '</tr>';		
		}
		
	} // end of foreach loop
echo'
</table>
<hr/>
<h3 style="text-align: center;">Add to the list</h3>
<form action="comments.php" method="POST" onsubmit="return checkName();">		
	Name: <input type="text" id="name" name="name"/><br>
    Comment:<br /> <textarea id="comment" name="comment" cols="50" rows="10"></textarea>
    <p><input type="submit" value="Add to the List"/></p>
</form>';
}



}

?>
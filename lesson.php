<html lang="en">
<head>
<?php include 'app.php'; $components = new Components; $components->createHead('Lesson');
include 'db_connect.php'?>
</head>
<body>
    <header>  
        <nav>
            <?php $components->createTopNav(); $components->createSideNav(2);?>
    </nav>
</header>
    <main>


    
    
        <div class="contentComponent">
           <?php
            $lesson_id = $_GET['id'];
            if ($lesson_id != 4) {
                $result = $mysqli->query("SELECT * FROM lesson WHERE id = $lesson_id");
                while ($row = $result->fetch_assoc()) {
                    echo $row['lesson_text'];
                }
            } else {
                $examID=1;
                include 'quiz.php';
            }

           ?>
        </div>
</main>
<?php
$components->createFooter()
?>
</body>
</html>



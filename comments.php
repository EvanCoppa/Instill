<html lang="en">
<head>
<?php 
include 'app.php'; 
$components = new Components; 
$components->createHead('Lesson');
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
    <?php
    $components->createCommentsSection($mysqli);

    ?>
</main>
<?php
$components->createFooter()
?>
</body>
</html>
<html lang="en">

<head>
    <?php include 'app.php';
    $components = new Components;
    $components->createHead('Home');
    include 'db_connect.php';
   
    ?>
    <script>
    
    </script>
</head>

<body>
    <header>
        <nav>
            <?php $components->createTopNav();
            $components->createSideNav(2); ?>
        </nav>
    </header>
    <main onclick="refoldMenu()">
        <?php
        $result = $mysqli->query("SELECT * FROM course");
            while ($row = $result->fetch_assoc()) {
                $components->createPageComponent('medium', $row['title'], $row['description'], $row['path_url'], '', 'photo', 'Course');
            }
        ?>

    </main>
    <?php
    $components->createFooter()
    ?>
</body>

</html>
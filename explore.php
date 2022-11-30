<html lang="en">

<head>
    <?php include 'app.php';
    $components = new Components;
    $components->createHead('Explore');
    include 'db_connect.php';
   
    ?>
    <script>
    
    </script>
</head>

<body>
    <header>
        <nav>
            <?php $components->createTopNav();
            $components->createSideNav(4); ?>
        </nav>
    </header>
    <main onclick="refoldMenu()">
        <?php
        $result = $mysqli->query("SELECT * FROM lesson");
            while ($row = $result->fetch_assoc()) {
                $components->createPageComponent('small', $row['title'], '', $row['path_url']);
            }
        ?>

    </main>
    <?php
    $components->createFooter()
    ?>
</body>

</html>
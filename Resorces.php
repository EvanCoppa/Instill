<!-- Presents the users with other php resorces besides our site -->
<html lang="en">

<head>
    <?php include 'app.php';
    $components = new Components;
    $components->createHead('Resorces');
    include 'db_connect.php';
   
    ?>
    <script>
    
    </script>
</head>

<body>
    <header>
        <nav>
            <?php $components->createTopNav();
            $components->createSideNav(5); ?>
        </nav>
    </header>
    <main onclick="refoldMenu()">
        <?php
        // select all from resorce table and create a page component for each
        $result = $mysqli->query("SELECT * FROM resorce");
            while ($row = $result->fetch_assoc()) {
                $components->createPageComponent('medium', $row['title'], $row['description'], $row['path_url'], '', 'photo', 'Resorce');
            }
       
        ?>

    </main>
    <?php
    $components->createFooter()
    ?>
</body>

</html>
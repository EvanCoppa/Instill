<!-- Takes a search imput from the user and return things from the data base that have the same name by a select statment -->
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
            $components->createSideNav(1); ?>
        </nav>
    </header>
    <main onclick="refoldMenu()">
<!-- Takes a search imput from the user 
and return things from the data base that have the same name by a select statment -->
        <div class="search">
            <form action="search.php" method="get">
                <input type="text" name="search" placeholder="Search">
                <input type="submit" value="Search">
            </form>
        </div>
        <?php
       // if the user has imputed something into the search bar select all from the data base that have the same name
        if (isset($_GET['search'])) {
            $search = $_GET['search'];
            $result = $mysqli->query("SELECT * FROM course WHERE title LIKE '%$search%'");
            while ($row = $result->fetch_assoc()) {
                $components->createPageComponent('medium', $row['title'], $row['description'], $row['path_url'], '', 'photo', 'Course');
            }
        }
        ?>
    </main>
    <?php
    $components->createFooter()
    ?>



and return things from the data base that have the same name by a select from the db -->


<?php
   
        ?>

    </main>
    <?php
    $components->createFooter()
    ?>
</body>

</html>
<html lang="en">

<head>
    <?php include 'app.php';
    $components = new Components;
    $components->createHead('Course');
    include 'db_connect.php';
    ?>
</head>

<body>
    <header>
        <nav>
            <?php $components->createTopNav();
            $components->createSideNav(2); ?>
        </nav>
    </header>
    <main>
        
        <!-- <section id="course_header">

            <div class="course_header_content">
                <h1>Course Name</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Luctus est, nunc sed ac nam faucibus. Duis id vulputate porta id blandit mi fringilla.</p>
                <div class="button">
                    <div><img src="images/icons8-play-96.png" alt="play button" height="40" width="40"></div>
                    <div>Start Learning Now</div>
                </div>
            </div>
            <div class="course_header_image">
                <img src="images/mind.png" alt="photo">
            </div>
        </section> -->

        <!-- <section id="course_content">

            <div class="largeComponent">
                <div class="pageComponentContent">
                    <div>
                        <div>
                            <h3>Course Description</h3>
                            <p></p>
                        </div>
                        <div>
                            <h3>Course Details</h3>
                            <ul>
                                <li>
                                    <img src="" alt="">
                                    <h4></h4>
                                </li>
                                <li>
                                    <img src="" alt="">
                                    <h4></h4>
                                </li>
                                <li>
                                    <img src="" alt="">
                                    <h4></h4>
                                </li>
                                <li>
                                    <img src="" alt="">
                                    <h4></h4>
                                </li>
                                <li>
                                    <img src="" alt="">
                                    <h4></h4>
                                </li>
                            </ul>
                        </div>
                        <div>
                            <h3>Takeaway Skills</h3>
                            <ul>
                                <li>
                                    <h4></h4>
                                </li>
                                <li>
                                    <h4></h4>
                                </li>
                                <li>
                                    <h4></h4>
                                </li>
                                <li>
                                    <h4></h4>
                                </li>
                                <li>
                                    <h4></h4>
                                </li>
                            </ul>
                        </div>
                        <div>
                            <h3>Share this course</h3>
                            <ul>

                            </ul>
                        </div>

                    </div>



                </div>

        </section> -->
        <section>
            <?php
            // get the id from the url
            // foreach lesson in the database with the course_id create a link to that page
            // create a link to the course page

            $course_id = $_GET['id'];

            $sql = "SELECT * FROM course WHERE id = $course_id";
            $result = $mysqli->query($sql);
            while ($row = $result->fetch_assoc()) {
                $components->createPageComponent('large', $row['title'], $row['description'], $row['path_url'], '', '' , 'Course');
            }


            $sql = "SELECT * FROM lesson WHERE course_id = $course_id";
            $result = $mysqli->query($sql);
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    // create a page component for each lesson
                    $components->createPageComponent('mini', $row['title'], '', $row['path_url']);
               //     echo "<a href='lesson.php?id=" . $row['id'] . "'>" . $row['title'] . "</a><br>";
                }
            } else {
                echo "0 results";
            }



            ?>
        </section>
    </main>
    <?php
    $components->createFooter()
    ?>
</body>

</html>
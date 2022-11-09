<html lang="en">
<head>
<?php include 'app.php'; $components = new Components; $components->createHead('Lesson');?>
</head>
<body>
    <header>  
        <nav>
            <?php $components->createTopNav(); $components->createSideNav();?>
    </nav>
</header>
    <main>


    
    <?php

$components->createPageComponent('large', 'Lesson 1.1', 'consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', 'images/mind.png', 'photo', 'Tutorial');

?>
        <div class="contentComponent">
            <h1>Php Start and End Tags</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Luctus est, nunc sed ac nam faucibus. Duis id vulputate porta id blandit mi fringilla.</p>
            <code>echo 'if you want to serve PHP code </?php ?>;"</code>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Luctus est, nunc sed ac nam faucibus. Duis id vulputate porta id blandit mi fringilla.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Luctus est, nunc sed ac nam faucibus. Duis id vulputate porta id blandit mi fringilla.</p>
        </div>
</main>
<?php
$components->createFooter()
?>
</body>
</html>



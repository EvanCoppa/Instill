<html lang="en">
    <?php include 'app.php'; $components = new Components; echo $components->createHead('Home');?>

<head>


</head>
<body>
    <header>  
        <nav>
            <?php $components->createTopNav(); $components->createSideNav();?>
    </nav>
</header>

    <main>
    <?php  
            // $size, $header, $content, $img_path optional on small, $img_alt optional on small, $sub_tag optional on small and medium)
            $components->createPageComponent('large', 'PHP Basics', 'This is a website that I made to show off my skills and to show off my projects. I hope you enjoy it!', 'images/image 28.png', 'photo', 'Tutorial');
            $components->createPageComponent('medium', 'Welcome to my website', 'This is a website that I made to show off my skills and to show off my projects. I hope you enjoy it!', 'images/mind.png', 'photo');
            $components->createPageComponent('small', 'Welcome to my website', 'This is a website that I made to show off my skills and to show off my projects. I hope you enjoy it!');
            $components->createPageComponent('small', 'Welcome to my website', 'This is a website that I made to show off my skills and to show off my projects. I hope you enjoy it!');
            $components->createPageComponent('medium', 'Welcome to my website', 'This is a website that I made to show off my skills and to show off my projects. I hope you enjoy it!', 'hello', 'photo');
        ?>


    </main>

<!-- http://solace.ist.rit.edu/~egc5187/ -->
</body>
</html>



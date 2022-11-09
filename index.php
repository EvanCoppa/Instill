<html lang="en">

<head>
    <?php include 'app.php';
    $components = new Components;
    $components->createHead('Home'); ?>
</head>

<body>
    <header>
        <nav>
            <?php $components->createTopNav();
            $components->createSideNav(); ?>
        </nav>
    </header>
    <main onclick="refoldMenu()">
        <?php
        // $size, $header, $content, $img_path optional on small, $img_alt optional on small, $sub_tag optional on small and medium)
        $components->createPageComponent('large', 'PHP Basics', 'consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', 'images/image 28.png', 'photo', 'Tutorial');
        ?>
        <div class="mediumComponent purple">
            <div class="pageComponentContent">
                <h2>Lorem ipsum dolor sit amet</h2>
                <p> Lorem ipsum dolor sit amet', 'consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat</p>
            </div>
            <div class="pageComponentImage">
                <img src="' . $img_path . '" alt="' . $img_alt . '">
            </div>
        </div>
        <?php
        $components->createPageComponent('small', 'Lorem ipsum dolor sit amet', 'consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.');
        $components->createPageComponent('small', 'Lorem ipsum dolor sit amet', 'This is a website that I made to show off my skills and to show off my projects. I hope you enjoy it!');

        $components->createPageComponent('medium', 'Lorem ipsum dolor sit amet', 'consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', '', 'photo');

        $components->createPageComponent('medium', 'Lorem ipsum dolor sit amet', 'This is a website that I made to show off my skills and to show off my projects. I hope you enjoy it!', 'hello', 'photo');
        ?>

    </main>
    <?php
    $components->createFooter()
    ?>
</body>

</html>
<html lang="en">
    <?php include 'app.php'; $components = new Components; echo $components->createHead('Home');?>

<head>


</head>
<body>
    <header>
<?php 
//call the navBar function in the comonets class from app.php


?>
  <nav>
        <div id="topnav">
            <ul>
                <li> <svg onclick="moveSideNav()" width="24px" height="24px" viewBox="0 0 24 24">
                        <path d="M3 18h18v-2H3v2zm0-5h18v-2H3v2zm0-7v2h18V6H3z"></path>
                    </svg>
                </li>
                </li>
            </ul>
        </div>
        </li>
        </ul>
        </div>
            <?php echo $components->createSideNav();?>
    </nav>
    
    <main></main>

<!-- http://solace.ist.rit.edu/~egc5187/ -->
</body>
</html>



    <?php
    session_start();
    ob_start();
        require "data/product.php";
        require "lib/product.php";
        require "lib/cart.php";
        require "lib/url.php";
        require "lib/template.php";

        get_header();
    ?>
        <?php

        $mod = !empty($_GET['mod']) ? $_GET['mod'] : 'home' ;
        $act =  !empty($_GET['act']) ? $_GET['act'] : 'main' ;
        $path = "modules/$mod/$act.php";
        if(file_exists($path)){
            require $path;
        }else{
            require "inc/404.php";
        }
        
        ?>

        <?php
        get_footer();
    ?>   
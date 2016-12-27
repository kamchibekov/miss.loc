
<?php get_header();  ?>

    <?php

    if(!isset($_GET['action']) && empty($_GET['action'])) include_once ('main.php');
    else
        if(isset($_GET['action']) && $_GET['action'] == 'about' ) {

            echo "<br>";
            include_once ('about.php');
        }
    else
    if(isset($_GET['action']) && $_GET['action'] == 'item' ) include_once ('item.php');

    else
    if(isset($_GET['action']) && $_GET['action'] == 'brands' ) include_once ('brands.php');

    else
    if(isset($_GET['action']) && $_GET['action'] == 'page' ) include_once ('page.php');

    else
        include_once ('main.php');


    ?>

<?php get_footer()  ?>
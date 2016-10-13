<?php
 /*  Main Header Template */
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>

<body>
    <header class="header">
        <a href="#" id="menu-icon">Menu</a>
        <a href=""><img src="<?php bloginfo('template_url') ?>/images/trainu_logo.png" alt="" class="logo"></a>        
            <nav class="clearfix main-navigation-container mobile-menu">

           <?php
                wp_nav_menu( $arg = array (
                    'menu_class' => 'main-navigation',
                    'theme_location' => 'primary'
                ));
            ?>
        </nav>
    </header>
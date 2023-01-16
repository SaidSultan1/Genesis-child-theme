<html>
    <head>
        <meta charset="<?php bloginfo('charset'); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?php wp_head(); ?>
    </head>
</html>
<body <?php body_class() ?>>
<div class="js-main-header">
    <header class="site-header">
        <div class="site-logo">
            <?php echo the_custom_logo(); ?>
        </div>
        <div class="nav-menu">
            <?php
            wp_nav_menu(array(
                'theme_location' => 'primary-menu',
                'menu_class'=>'js-nav-menu'
            ));
            ?>
            <div class="nav-toggle">
                <i class="fa fa-bars"></i>
            </div>
        </div>
    </header>
</div>    

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>OpenTERA</title>
    <?php wp_head();?>
</head>
<body>
<header>
    <nav class="navegacion navbar">
        <div class="container">
            <div class="row">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false">
                        <span></span>
                        <span class= "icon-bar"></span>
                        <span class= "icon-bar"></span>
                        <span class= "icon-bar"></span>
                    </button>
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/brand.png" alt="OpenTera" height='48px'>
                </div>
                <div class="navbar-right">

                    <?php
                        wp_nav_menu(array(
                            'theme_location'    => 'menu_principal',
                            'depth'             => 2,
                            'container'         => 'div',
                            'container_id'      => 'navbar',
                            'container_class'   => 'collapse navbar-collapse',
                            'menu_class'        => 'nav navbar-nav navbar-right',
                            'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                            'walker'            => new WP_Bootstrap_Navwalker()
                        ));
                    ?>
                </div>
                
            </div>
            
        </div>
    </nav>

</header>
    

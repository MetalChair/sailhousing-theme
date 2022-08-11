<?php
    // TODO: Consider making this more sane when you have a boatload of menu
    // items. Currently it just shrinks every flex item down
    wp_nav_menu(array(
        "menu" => "secondary",
        "menu_class" => "footer-nav-items",
        "container_class" => "footer-nav-container",
        'theme_location' => 'secondary',
        "fallback_cb" => false
    ));
;?>
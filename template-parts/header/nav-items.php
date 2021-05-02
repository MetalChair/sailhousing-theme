<?php
    // TODO: Consider making this more sane when you have a boatload of menu
    // items. Currently it just shrinks every flex item down
    $menu = wp_nav_menu(array(
        "menu" => "primary",
        "menu_class" => "nav-items-list",
    ));
 
;?>
// Definitions and functions for various components of the sail housing
// solutions website theme. Injected into the wp template at functions.php

function log(toLog){
    if(DEBUG){
        console.log(toLog)
    }
}

add_filter('wp_nav_menu_objects', function( array $items, array $args ) {

    return array_filter( $items, function( $item ) {
        if ($item->url === '/register' && !is_user_logged_in()) return true;
        if ($item->url === '/user' && is_user_logged_in()) return true;
    } );

}, 10, 2 );

var MENU_OPEN = false;

function ToggleMenu(){
    if(MENU_OPEN){
        MENU_OPEN = false;
        document.querySelector(".menu-container").classList.remove("open");
    }else{
        MENU_OPEN = true;
        document.querySelector(".menu-container").classList.add("open");
    }
}

document.addEventListener("DOMContentLoaded", (event) => {
    document.querySelector(".menu-show-button").addEventListener("click", ()=>{
        ToggleMenu();
        document.querySelector(".menu-container").addEventListener("click", ToggleMenu);
    });
});


// console.log(`
// ╔═══╗       ╔╗ ╔╗ ╔╗                      ╔═══╗    ╔╗      ╔╗               
// ║╔═╗║       ║║ ║║ ║║                      ║╔═╗║    ║║     ╔╝╚╗              
// ║╚══╗╔══╗ ╔╗║║ ║╚═╝║╔══╗╔╗╔╗╔══╗╔╗╔═╗ ╔══╗║╚══╗╔══╗║║ ╔╗╔╗╚╗╔╝╔╗╔══╗╔═╗ ╔══╗
// ╚══╗║╚ ╗║ ╠╣║║ ║╔═╗║║╔╗║║║║║║══╣╠╣║╔╗╗║╔╗║╚══╗║║╔╗║║║ ║║║║ ║║ ╠╣║╔╗║║╔╗╗║══╣
// ║╚═╝║║╚╝╚╗║║║╚╗║║ ║║║╚╝║║╚╝║╠══║║║║║║║║╚╝║║╚═╝║║╚╝║║╚╗║╚╝║ ║╚╗║║║╚╝║║║║║╠══║
// ╚═══╝╚═══╝╚╝╚═╝╚╝ ╚╝╚══╝╚══╝╚══╝╚╝╚╝╚╝╚═╗║╚═══╝╚══╝╚═╝╚══╝ ╚═╝╚╝╚══╝╚╝╚╝╚══╝
//                                       ╔═╝║                                  
//                                       ╚══╝                              
// Thanks for looking around ;)  We're not looking for any assistance with SEO. 
// Please only contact if you are interested in the org or have questions.
// `)
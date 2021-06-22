// Definitions and functions for various components of the sail housing
// solutions website theme. Injected into the wp template at functions.php

function log(toLog){
    if(DEBUG){
        console.log(toLog)
    }
}

add_filter('wp_setup_nav_menu', 'add_menu_conditions' );
 
function add_menu_conditions( $item ) {
  if ($item->title === "My Profile" || $item->title === "Logout") {
    $item->_invalid = !is_user_logged_in();
  }
  if ($item->title === "Login" || $item->title === "Join SAIL") {
    $item->_invalid = is_user_logged_in();
  }
 
  return $item;
}

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
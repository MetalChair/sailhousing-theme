// Definitions and functions for various components of the sail housing
// solutions website theme. Injected into the wp template at functions.php

//Disables and enables debug logging for various functions
const DEBUG = true;

//Handle the navbar shrinking on scroll
var showingFullNav = true;
const NAV_HEIGHT = 25;
window.addEventListener('scroll', (event)=>{
    if(window.pageYOffset > NAV_HEIGHT && showingFullNav){
        //Shrink the navbar down
        showingFullNav = false
        document.querySelector(".nav-bar")
            .classList.add("fix-nav")
        document.querySelector(".custom-logo-link")
            .classList.add("logo-minfied")
        console.log("Shrinking nav")
    }else if(window.pageYOffset < NAV_HEIGHT && !showingFullNav){
        showingFullNav = true
        document.querySelector(".nav-bar")
            .classList.remove("fix-nav")
        document.querySelector(".custom-logo-link")
            .classList.remove("logo-minfied")
        console.log("Shrinking nav")
    }
});


function log(toLog){
    if(DEBUG){
        console.log(toLog)
    }
}




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
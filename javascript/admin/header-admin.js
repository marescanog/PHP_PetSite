// Runtime Code
var mobileScreen = window.matchMedia("(max-width:900px)");
var drawer = document.getElementById("drawer");
var mainContent = document.getElementById("main");
var navItems = document.getElementById("menuNav").children;

// Reset to default when breakpoint for mobile has been crossed
function resetDefault(){
    if(drawer.classList.contains("show")){
        drawer.classList.remove("show");
    }

    if(!detectMob()) {
        //Desktop
        openNav();
    } else {
        //Mobile
        closeNav();
    }

}

// listens for a change in window size
mobileScreen.addEventListener('change', resetDefault);


function toggleDrawer(){
    drawer.classList.toggle("show");

    if(!detectMob()) {
        if(drawer.classList.contains("show")){
            closeNav();
        } else {
            openNav();
        }
    }

}

function openNav(){
    mainContent.style.marginLeft = "200px";
}

function closeNav(){
    mainContent.style.marginLeft= "0";
}

// Sets the background color for slected menu item
function setSelectedMenuItem(num){
    if(num == navItems.length || num < 0){
        console.log("Out of Range, check setSelectedMenu Items in header admin javascript");
    } else {
        navItems[num].style.backgroundColor = "#423e57";
    }
}

// Detects Mobile View based on browser width
function detectMob() {
    return ( window.innerWidth <= 900 );
}
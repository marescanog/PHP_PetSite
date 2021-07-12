// Runtime Code
var mobileScreen = window.matchMedia("(max-width:900px)");
var drawer = document.getElementById("drawer");
var navItems = document.getElementById("menuNav").children;

// Reset to default when breakpoint for mobile has been crossed
function resetDefault(mobileScreen){
    if(drawer.classList.contains("show")){
        drawer.classList.remove("show");
    }

    if(document.getElementById("emptyHead").classList.contains("shrink")){
        document.getElementById("emptyHead").classList.remove("shrink");
    }

}

// listens for a change in window size
mobileScreen.addEventListener('change', resetDefault);


function toggleDrawer(){
    drawer.classList.toggle("show");
    document.getElementById("emptyHead").classList.toggle("shrink");
}

// Sets the background color for slected menu item
function setSelectedMenuItem(num){
    if(num == navItems.length || num < 0){
        console.log("Out of Range, check setSelectedMenu Items in header admin javascript");
    } else {
        navItems[num].style.backgroundColor = "#423e57";
    }
}





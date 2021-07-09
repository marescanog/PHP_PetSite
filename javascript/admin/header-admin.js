// Runtime Code
var mobileScreen = window.matchMedia("(max-width:900px)");
var drawer = document.getElementById("drawer");

// Reset to default when breakpoint for mobile has been crossed
function resetDefault(mobileScreen){
    if(drawer.classList.contains("show")){
        drawer.classList.remove("show");
    }
}

// listens for a change in window size
mobileScreen.addEventListener('change', resetDefault);


function toggleDrawer(){
    document.getElementById("drawer").classList.toggle("show");
}



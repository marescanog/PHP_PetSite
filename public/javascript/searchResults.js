var resfilters = document.getElementById("res__all_filters");
var resFilterSpan = document.getElementById("res__filter-span");
var animals = document.getElementsByClassName('res__search-target');
/* Redirects when user clicks on the page */
animals[0].onclick = function () {
    location.href = "info.php";
};

/* Toggles filter text from + to - */
function resToggleFilter(e){
    e.preventDefault();
    resfilters.classList.toggle("res__hidden");
    if(resfilters.classList.contains("res__hidden") == true){
        resFilterSpan.innerText = '+';
    }else{
        resFilterSpan.innerText = '-';
    }
}


  
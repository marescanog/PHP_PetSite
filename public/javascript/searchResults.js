var resfilters = document.getElementById("res__all_filters");
var resFilterSpan = document.getElementById("res__filter-span");
var targets = document.getElementsByClassName('res__search-target');
var hiddenText = document.getElementsByClassName('bar__text_form');
var searchForm = document.getElementById('hom_res_search_filter');
var  pageLink = document.getElementById('pageLink').value; 
/* Redirects when user clicks on the page 
animals[0].onclick = function () {
    location.href = "info.php";
};
*/

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

function loadValues(){
    /* Loads the correct values for the customSelectBoxes based on current selection */
    hiddenText[0].value = document.getElementsByClassName('bar__-option selected')[0].getAttribute('data-value');
    hiddenText[1].value = document.getElementsByClassName('bar__-option selected')[1].getAttribute('data-value');
}


for(let targetIndex = 0; targetIndex < targets.length; targetIndex++){
    targets[targetIndex].onclick = function () {
        location.href = "info.php"+pageLink + "&pet_ID=" +  targets[targetIndex].getAttribute("data-pet-id");
    };
}
        



  
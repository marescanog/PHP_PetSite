/* === Variables ===*/
// Get modal element
var modal = document.getElementById('simpleModal');
// Get modal button
var modalBtn = document.getElementById('modalBtn');
// Get close button
var closeBtn = document.getElementById('closeBtn')


/* === Event  ===*/
// Listen for modal btn click
modalBtn.addEventListener('click', openModal);
// Listen for modal btn close
closeBtn.addEventListener('click', closeModal);
// Listen for outside Click
window.addEventListener('click', clickOutside);



/* === Functions ===*/
// Function to open Modal
function openModal(){
    modal.style.display = 'block';
}

// Function to close Modal
function closeModal(){
    modal.style.display = 'none';
}

// Function to close Modal upon outside click
function clickOutside(e){
    if(e.target == modal){
        modal.style.display = 'none';
    }
}

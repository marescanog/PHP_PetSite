// Detect if Mobile based on browser width
function detectMobFoot() {
    return ( window.innerWidth <= 900 );
}
// Expand content on click
function expandFooterMenuContent(x){
    var footer_dropDown_arrows = document.getElementsByClassName("dropDown-arrow-footer");
    var footer_dropDown_content = document.getElementsByClassName("footer-sitemap-links");
    if(detectMobFoot()){
        for(i = 0; i < footer_dropDown_arrows.length; i++){
            if(i!=x){
                footer_dropDown_arrows[i].classList.remove("dropDown-arrow-expanded-footer");
                footer_dropDown_content[i].classList.remove("display-footer")
            }
        }
        footer_dropDown_arrows[x].classList.toggle("dropDown-arrow-expanded-footer");
        footer_dropDown_content[x].classList.toggle("display-footer")
    }
}


// Redirect to Contact Us Page when Contact Us button is clicked
document.getElementById("contact-button").onclick = function () {
    //location.href = "contact.html";
};

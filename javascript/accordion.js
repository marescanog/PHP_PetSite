const accordionItemheaders = document.querySelectorAll(".que_--accordion-item-header");

accordionItemheaders.forEach(accordionItemHeader => {
    accordionItemHeader.addEventListener("click", event => {
        accordionItemHeader.classList.toggle("active");
        const accordionItemBody = accordionItemHeader.nextElementSibling;
        if(accordionItemHeader.classList.contains("active")){
            accordionItemBody.style.maxHeight = accordionItemBody.scrollHeight*2 + "px";
        }
        else{
            accordionItemBody.style.maxHeight = 0;
        }
    });
});
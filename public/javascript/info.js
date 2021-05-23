            // CHANGE WIDTH ACCORDING TO NUMBER OF IMAGES
            // .inf_slider-images -> width = (total number of images)*100%
            // .inf_slider-images img -> width = 100%/(total number of images)
                /* TO DO ONCE PHP has been established */

            const sliderImages = document.querySelector(".inf_slider-images");
            const sliderButtons = document.querySelectorAll(".inf_thumbnail-button");
            const numberOfImages = document.querySelectorAll(".inf_slider-images img").length;
            const thumbnails = document.querySelectorAll(".inf_-slider-thumbnails img");
            let imageIndex = 1;
            let translateX = 0;
            let mousePosX = 0;
            let newMousePosX = 0;
            var lastMove = null;


            /*  For desktop mousedrag
                var isMouseDown = false;
                document.onmousedown = function() { isMouseDown = true  };
                document.onmouseup   = function() { isMouseDown = false };
                document.onmousemove = function() { if(isMouseDown) {  do drag things  } };
            */

            /* For phone touch screen */
            slider.ontouchstart = function(event){
                lastMove = event;
                mousePosX = event.touches[0].clientX;
            }

            slider.ontouchmove = function(event){
                lastMove = event;
                newMousePosX = lastMove.touches[0].clientX;
            }

            slider.ontouchend = function(){
                let swipeVal = newMousePosX - mousePosX;
                if (swipeVal > 0){
                    previous();
                }else {
                    next();
                }
                sliderImages.style.left = `-${translateX}%`;
            }

            /* Add the click event to the left and right buttons*/
            sliderButtons.forEach(button =>{
                button.addEventListener('click', event =>{
                    if(event.target.id == 'previous'){
                        previous();
                    } else {
                        next();
                    }
                    sliderImages.style.left = `-${translateX}%`;
                });
            });

                function previous(){
                    if(imageIndex != 1){
                        thumbnails[imageIndex-1].classList.remove("inf_thumbnail-image_selected");
                        imageIndex--;
                        translateX -= 100;
                        thumbnails[imageIndex-1].classList.add("inf_thumbnail-image_selected");
                    }
                }

                function next(){
                    if(imageIndex != numberOfImages){
                        thumbnails[imageIndex-1].classList.remove("inf_thumbnail-image_selected");
                        imageIndex++;
                        translateX += 100;
                        thumbnails[imageIndex-1].classList.add("inf_thumbnail-image_selected");
                    }
                }

            /* Assign an onclick function to each thumbnail */
            for (let i = 0; i < thumbnails.length; i++)
            {
                thumbnails[i].onclick = function(){
                    let nDx = index(this);
                    selectThumbnail(nDx);
                }
            }

            /* This function disables the previous selected thumbnail by disabling all thumbnails in a loop*/
            /* and enables the current selected thumbnail */
            function selectThumbnail(clicked){
                for(y = 0; y < thumbnails.length; y++){
                        thumbnails[y].classList.remove("inf_thumbnail-image_selected");
                }
                thumbnails[clicked].classList.add("inf_thumbnail-image_selected"); 
                imageIndex = clicked+1;
                translateX = (imageIndex-1)*100;
                sliderImages.style.left = `-${translateX}%`;
            }

            /* This function returns the index number of an element in an array */
            function index(el) {
                return [...el.parentElement.children].indexOf(el);
            }
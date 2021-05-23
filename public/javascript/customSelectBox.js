        /* Custom Select box for city*/
        var select_logoImage = document.getElementById('selectImage');
        var hom_cityData = document.getElementById('hom_city');
        var hom_animData = document.getElementById('hom_animal');

        /* Adds an a click event for each select bar to signal if it is open */
        for (const dropdown of document.querySelectorAll(".bar__-select")) {
            dropdown.addEventListener('click', function() {
                this.querySelector('.bar__-custom-select').classList.toggle('open');
            this.querySelector('.bar__-select-trigger').classList.toggle('open');
            })
        }

        /* Adds a click event when an option is clicked. This changes the trigger text and changes the option */
        for (const option of document.querySelectorAll(".bar__-option")) {
            option.addEventListener('click', function() {
                if (!this.classList.contains('selected')) {
                    this.parentNode.querySelector('.bar__-option.selected').classList.remove('selected');
                    this.classList.add('selected');
                    this.closest('.bar__-custom-select').querySelector('.bar__-select-trigger span').textContent = this.textContent;
                    if(this.parentNode.getAttribute("data-select-bar-type") == 0){
                        hom_cityData.value = this.getAttribute("data-value");
                    } else {
                        hom_animData.value = this.getAttribute("data-value");
                        /* Changes the image in animal select bar based on choice */
                        select_logoImage.src = `./images/ICONS/searchbar/${hom_animData.value}.svg`;
                    }                    
                }
            })
        }

        /* Adds an a click event for each select bar to check if no select bar targets were clicked thus closes select bar */
        window.addEventListener('click', function(e) {
            for (const select of document.querySelectorAll('.bar__-custom-select')) {
                if (!select.contains(e.target)) {
                    select.classList.remove('open');
                }
            }
            for (const trigger of document.querySelectorAll('.bar__-select-trigger')) {
                if (!trigger.contains(e.target)) {
                    trigger.classList.remove('open');
                }
            }
        });
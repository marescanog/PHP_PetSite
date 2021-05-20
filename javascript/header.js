            var header_dropDowns = document.getElementsByClassName("dropDown-title");
            var header_dropDown_arrows = document.getElementsByClassName("dropDown-arrow");
            var header_dropDown_content = document.getElementsByClassName("dropdown-content");
            
            // Display the nav mobile menu only when Hamburger is clicked
            // Checkbox is hidden on top of the Hanburger menu
            function displayMenuMobile() {
                var checkBox = document.getElementById("myCheck");
                var navMenu = document.getElementById("navMenu");
                // Display the navMenu only when the checkbox is checked
                navMenu.style.display = (checkBox.checked == true) ? "block" : "none";
                // Resets the dropdown content display when navmenu display is none
                if(navMenu.style.display == "none"){
                    for(i = 0; i < header_dropDown_content.length; i++){
                        header_dropDown_arrows[i].classList.remove("dropDown-arrow-expanded");
                        header_dropDown_content[i].classList.remove("display");
                    }
                }
            }

            // Detects Mobile View based on browser width
            function detectMob() {
                return ( window.innerWidth <= 900 );
            }

            // Reset to default when breakpoint for mobile has been crossed
            // Default means all mobile menu options closed
            function resetDefault(x) {
                var checkBox = document.getElementById("myCheck");
                checkBox.checked = (x.matches) ? false : true;
                displayMenuMobile();
            }

            // Expands link options ONLY when on Mobile View
            function expandMobileMenuContent(x){
                var checkBox = document.getElementById("myCheck");
                if(detectMob()){
                    for(i = 0; i < header_dropDown_arrows.length; i++){
                        if(i != x){
                            if (header_dropDown_arrows[i].classList.contains("dropDown-arrow-expanded")){
                                header_dropDown_arrows[i].classList.toggle("dropDown-arrow-expanded");
                            }
                            if (header_dropDown_content[i].classList.contains("display")){
                                header_dropDown_content[i].classList.toggle("display");
                            }
                        }
                    }
                    header_dropDown_arrows[x].classList.toggle("dropDown-arrow-expanded");
                    header_dropDown_content[x].classList.toggle("display");
                }
            }

            // Highlights appropriate page
            function currentPage(pageType){
                var headerLinks = document.getElementsByClassName("sel");
                headerLinks[pageType].classList.toggle("selected");
            }

            // Gets MetaData from page's currentPage property
            function getMeta(metaName) {
                let metas = document.getElementsByTagName('meta');
                for (let i = 0; i < metas.length; i++) {
                    if (metas[i].getAttribute('name') === metaName) {
                    return metas[i].getAttribute('content');
                    }
                }
                return 'not found';
            }

            // Parses the metadata property to an appropriate value to pass to the currentPage function
            function getCurrentPage(metaResult){
                switch (metaResult){
                    case 'ADOPT':
                        return 1;
                    case 'PLACEMENTS':
                        return 2;
                    case 'TESTIMONIALS':
                        return 3;
                    case 'ABOUT':
                        return 4;
                    default:
                        return 0;
                }
            }

            // runtime code
            var x = window.matchMedia("(max-width: 900px)")
            resetDefault(x) // Call listener function at run time
            x.addEventListener('change',resetDefault) // Attach listener function on state changes

            // Highlights the appropriate header when the user is on a certain page based on the page's metadata currentPage property
            currentPage(getCurrentPage(getMeta('currentPage')));


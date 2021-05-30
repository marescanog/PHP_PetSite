<header class="header-container">
        <div class="header-wrapper">
            <div class="header-max-width">
                <div class="icons-and-menu-container">
                    <div class="header-logo-container">
                        <img src="./images/LOGO/LOGO.svg" alt="Cebu Pet Match logo" class="logo-image-style">
                        <img src="./images/LOGO/LOGOTEXT2.svg" alt="Cebu Pet Match" class="logo-image-style">
                    </div>
                    <div class="hamburger-menu-wrap">
                        <input type="checkbox" id="myCheck" onclick="displayMenuMobile()" class="toggler">
                        <div class="hamburger"><div></div></div>
                    </div>
                </div>
                <nav id="navMenu" class="nav-container">
                    <ul>
                        <div class="dropdown">
                            <li><a href="index.php" class="sel">HOME</a></li>
                        </div>
                        <div class="dropdown">
                            <li>
                                <a class="sel dropDown-title" onclick="expandMobileMenuContent(0)">ADOPT</a>
                                <svg class="dropDown-arrow" viewBox="0 0 24 24">
                                    <path d="M 12 14.070312 L 8.179688 10.25 C 7.765625 9.835938 7.09375 9.835938 6.679688 10.25 C 6.265625 10.664062 6.265625 11.335938 6.679688 11.75 L 11.292969 16.363281 C 11.683594 16.753906 12.316406 16.753906 12.707031 16.363281 L 17.320312 11.75 C 17.734375 11.335938 17.734375 10.664062 17.320312 10.25 C 16.90625 9.835938 16.234375 9.835938 15.820312 10.25 Z M 12 14.070312"></path>
                                </svg>
                            </li>
                                <ul class="dropdown-content">
                                        <li><a href="search.php?city=All+Cebu&animal=Dog&gender=Any&age=Any&size=Any">Dog</a> </li>
                                        <li><a href="search.php?city=All+Cebu&animal=Cat&gender=Any&age=Any&size=Any">Cat</a></li>
                                        <li><a href="search.php?city=All+Cebu&animal=Bird&gender=Any&age=Any&size=Any">Bird</a></li>
                                        <li><a href="search.php?city=All+Cebu&animal=Rabbit&gender=Any&age=Any&size=Any">Rodent / Rabbit</a></li>
                                        <li> <a href="search.php?city=All+Cebu&animal=Reptile&gender=Any&age=Any&size=Any">Reptile / Turtle</a></li>
                                </ul>
                        </div>
                        <div class="dropdown">
                            <li>
                                <a class="sel dropDown-title" onclick="expandMobileMenuContent(1)">PLACEMENTS</a>
                                <svg class="dropDown-arrow" viewBox="0 0 24 24">
                                    <path d="M 12 14.070312 L 8.179688 10.25 C 7.765625 9.835938 7.09375 9.835938 6.679688 10.25 C 6.265625 10.664062 6.265625 11.335938 6.679688 11.75 L 11.292969 16.363281 C 11.683594 16.753906 12.316406 16.753906 12.707031 16.363281 L 17.320312 11.75 C 17.734375 11.335938 17.734375 10.664062 17.320312 10.25 C 16.90625 9.835938 16.234375 9.835938 15.820312 10.25 Z M 12 14.070312"></path>
                                </svg>
                            </li>
                            <ul class="dropdown-content">
                                <li><a href="rehome.php">Request to post pet up for adoption</a></li>
                                <li><a href="shelters.php">Nearby Shelters</a></li>                               
                            </ul>
                        </div>
                        <div class="dropdown">
                            <li>
                                <a class="sel dropDown-title" onclick="expandMobileMenuContent(2)">TESTIMONIALS</a>
                                <svg class="dropDown-arrow" viewBox="0 0 24 24">
                                    <path d="M 12 14.070312 L 8.179688 10.25 C 7.765625 9.835938 7.09375 9.835938 6.679688 10.25 C 6.265625 10.664062 6.265625 11.335938 6.679688 11.75 L 11.292969 16.363281 C 11.683594 16.753906 12.316406 16.753906 12.707031 16.363281 L 17.320312 11.75 C 17.734375 11.335938 17.734375 10.664062 17.320312 10.25 C 16.90625 9.835938 16.234375 9.835938 15.820312 10.25 Z M 12 14.070312"></path>
                                </svg>
                            </li>
                            <ul class="dropdown-content">
                                <li><a href="testimony.php?testimony=1">Sarah and Connor</a></li>
                                <li><a href="testimony.php?testimony=2">Nathan</a></li>
                                <li><a href="testimony.php?testimony=3">Melinda</a></li>
                            </ul>
                        </div>
                        <div class="dropdown">
                            <li>
                                <a class="sel dropDown-title" onclick="expandMobileMenuContent(3)">ABOUT</a>
                                <svg class="dropDown-arrow" viewBox="0 0 24 24">
                                    <path d="M 12 14.070312 L 8.179688 10.25 C 7.765625 9.835938 7.09375 9.835938 6.679688 10.25 C 6.265625 10.664062 6.265625 11.335938 6.679688 11.75 L 11.292969 16.363281 C 11.683594 16.753906 12.316406 16.753906 12.707031 16.363281 L 17.320312 11.75 C 17.734375 11.335938 17.734375 10.664062 17.320312 10.25 C 16.90625 9.835938 16.234375 9.835938 15.820312 10.25 Z M 12 14.070312"></path>
                                </svg>
                            </li>
                            <ul class="dropdown-content">
                                <li><a href="about.php">GENERAL</a></li>
                                <li><a href="questions.php">F.A.Q.S</a></li>     
                                <li><a href="contact.php">CONTACT US</a></li>                           
                            </ul>
                        </div>
                    </ul>
                </nav>
            </div>
        </div>
        <script src="./javascript/header.js" type="text/javascript"></script>
    </header>
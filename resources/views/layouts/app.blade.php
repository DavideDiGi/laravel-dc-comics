<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel Comics</title>

        {{-- Includiamo gli assets con la direttiva @vite --}}
        @vite('resources/js/app.js')
    </head>
    <body>
            <header>
                <div class="container">
                    <div class="header-container d-flex justify-content-around align-items-center">
                        <div class="d-flex justify-content-center align-items-center">
                            <div class="logo"><img src="{{ asset('img/dc-logo.png') }}" alt="logo"></div>
                        </div>
                        <nav>
                            <ul>
                                <li>CHARACTERS</li>
                                <li class="active">COMICS</li>
                                <li>MOVIES</li>
                                <li>TV</li>
                                <li>GAMES</li>
                                <li>COLLECTIBLES</li>
                                <li>VIDEOS</li>
                                <li>FANS</li>
                                <li>NEWS</li>
                                <li>SHOP</li>
                            </ul>
                        </nav>
                        <div class="d-flex justify-content-center align-items-center position-relative">
                            <div class="input-group search">
                                <div class="form">
                                    <input type="search" id="form1" class="" />
                                </div>
                                <button type="button" class="btn ">
                                    <span>Search</span>
                                    <i class="fas fa-search"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </header>

        <main class="py-5 bg-primary">
            @yield('content')
        </main>
            <footer>
                <div class="middleFooter">

                    <div class="container">
                        <div class="links-container">
            
                            <div class="comics">
            
                                <h3>DC COMICS</h3>
            
                                <a href="#">Characters</a>
                                <a href="#">Comics</a>
                                <a href="#">Movies</a>
                                <a href="#">TV</a>
                                <a href="#">Games</a>
                                <a href="#">Videos</a>
                                <a href="#">News</a>
            
                            </div>
                            <div class="shop">
            
                                <h3>SHOP</h3>
            
                                <a href="#">Shop DC</a>
                                <a href="#">Shop DC Collectibles</a>
            
            
                            </div>
                            <div class="dc">
            
                                <h3>DC</h3>
            
                                <a href="#">Terms Of Use</a>
                                <a href="#">Privacy Policy (New)</a>
                                <a href="#">Ad choices</a>
                                <a href="#">Advertising</a>
                                <a href="#">Jobs</a>
                                <a href="#">Subscriptions</a>
                                <a href="#">Talent Workshops</a>
                                <a href="#">CPSC Certificates</a>
                                <a href="#">Ratings</a>
                                <a href="#">Shop Help</a>
                                <a href="#">Contact Us</a>
            
                            </div>
                            <div class="sites">
            
                                <h3>SITES</h3>
            
                                <a href="#">DC</a>
                                <a href="#">MAD Magazine</a>
                                <a href="#">DC Kids</a>
                                <a href="#">DC Universe</a>
                                <a href="#">DC Power Visa</a>
            
                            </div>
                            
                            
                        </div>
                        
                        <div class="bg-logo-container"></div>
                        {{-- <div class="rights">All Site Content TM and c 2020 DC Entertainment, unless otherwise noted here. All rights reserved. Cookies Settings</div> --}}
            
            
                    </div>
            
                </div>
                <div class="container">
                   
                    <div class="footer-container d-flex justify-content-between align-items-center">
                        
                            <div class="sign d-flex justify-content-center align-items-center ">
                               <button>SIGN-UP NOW!</button> 
                            </div>
            
                            <div class="nav-container d-flex justify-content-center align-items-center ">
                                <nav>
                                    <ul>
                                        <li class="follow">FOLLOW US</li>
                                        <li><a href="#"><span><img src="/img/footer-facebook.png" alt="facebook"></span></a></li>
                                        <li><a href="#"><span><img src="/img/footer-twitter.png" alt="twitter"></span></a></li>
                                        <li><a href="#"><span><img src="/img/footer-youtube.png" alt="youtube"></span></a></li>
                                        <li><a href="#"><span><img src="/img/footer-pinterest.png" alt="pinterest"></span></a></li>
                                        <li><a href="#"><span><img src="/img/footer-periscope.png" alt="periscope"></span></a></li>
                                    </ul>
                                </nav>
                            </div>
            
                    </div>
            
                </div>
            </footer>
    </body>
</html>

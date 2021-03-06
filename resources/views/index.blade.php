<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ureckon Open School Challenge | Home</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.4.6/css/swiper.min.css" />
    <link rel="stylesheet" href="{{ asset('css/nav_bar.css')}}">
    <link rel="stylesheet" href="{{ asset('css/index.css')}}">
    <link rel="shortcut icon" href="{{ asset('./assets/img/logos/favicon.png')}}" type="image/x-icon">

</head>
<body>
    <section class="container-main">
        <!-- <span class="heading">Gallery</span> -->

        <div class="nav-btn ntbn-vis">
           <i id="ntbni" class="fas fa-bars"></i>
        </div>
        <div class="nav-btn-close closebtn-hid">
                <i id="ntbni" class="fas fa-times"></i>
        </div>

        <div class="nav-bar close">
            <div class="nav-container">
                <h1 class="menu">MENU</h1>
                <a href="#" class="list-item">HOME</a>
                <a href="/about" class="list-item">ABOUT</a>
                <a href="/register" class="list-item">REGISTER</a>
                <a href="/gallery" class="list-item">GALLERY</a>
                <a href="/contact" class="list-item">CONTACT</a>
            </div>
        </div>

       <a href="#"><img src="{{ asset('assets/img/brand-logo.svg')}}" alt="" class="logo"></a>

        <div class="swiper-container">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="slide" id="slide-1">
                        <div class="slider-content-1">
                            <span><span class="first-letter">U</span class
                                        first-letter>reckon <span class="first-letter">O</span>pen <span class="first-letter">S</span>chool <span class="first-letter">C</span>hallenge</span>
                            <p>The <strong class="diff">Gateway</strong> to showcase your <strong class="diff">Talent</strong></p>
                        </div>
                        <div id="scene">
                            <img id="warpbg" class="parallax left top" src="{{asset('assets/img/warpbg.png')}}">
                            <img id="star1" class="parallax top" src="{{asset('assets/img/star1.png')}}">
                            <img id="star6" class="parallax left top" src="{{asset('assets/img/star1.png')}}">
                            <img id="star2" class="parallax left top" src="{{asset('assets/img/star2.png')}}">
                            <img id="star3" class="parallax" src="{{asset('assets/img/star3.png')}}">
                            <img id="star4" class="parallax left top" src="{{asset('assets/img/star4.png')}}">
                            <img id="star5" class="parallax left top" src="{{asset('assets/img/star5.png')}}">
                            <img id="planet" class="parallax left top" src="{{asset('assets/img/planet.png')}}">
                            <img id="robot" class="parallax left top" src="{{asset('assets/img/robot.png')}}">
                            <img id="astronaut" class="parallax top" src="{{asset('assets/img/astronaut.png')}}">
                            <img id="asteroid" class="parallax left top" src="{{asset('assets/img/asteroid.png')}}">
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="slide" id="slide-2">
                        <div class="slider-content">
                            <span>CodeWise</span>
                            <p>Why should college students have all the fun? School students of all ages have a platform to showcase their coding prowess.</p>
                            <a href="{{asset('ps/CodeWise.pdf')}}" class="ps_btn">Get Problem Statement&nbsp;&nbsp;<i class="fas fa-file-download"></i></a>
                            <a href="/register" class="ps_btn register-btn">Register Now&nbsp;&nbsp;<i class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="slide" id="slide-3">
                        <div class="slider-content">
                            <span>Urecka</span>
                            <p>Nothing is more important than your imaginations and creativity. This is the biggest platform to implement your ideas, thoughts and imaginations into reality. You make one prototype model to showcase and present your idea in front of the tech-world</p>
                            <a href="{{asset('ps/Urecka.pdf')}}" class="ps_btn">Get Problem Statement&nbsp;&nbsp;<i class="fas fa-file-download"></i></a>
                            <a href="/register" class="ps_btn register-btn">Register Now&nbsp;&nbsp;<i class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="slide" id="slide-4">
                        <div class="slider-content">
                            <span>UreckQui<span class="invertor">z</span></span>
                            <p>Think you can hone your quizzing skills and bring glory for your school? Then revv up your grey cells, Face off the best school quiz teams, bang the buzzer and be the champion !
                            Exciting prizes await the glorious. Register now, stake your claim and let the world know you are coming.</p>
                            <a href="{{asset('ps/UreckQuiz.pdf')}}" class="ps_btn">Get Problem Statement&nbsp;&nbsp;<i class="fas fa-file-download"></i></a>
                            <a href="/register" class="ps_btn register-btn">Register Now&nbsp;&nbsp;<i class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                        <div class="slide" id="slide-5">
                                <div class="slider-content-5">
                                    <span class="what-next">What to do now...</span>
                                    <div class="register-div">
                                            <div class="container">
                                                <span>Register</span>
                                                <p>UOSC is an excellent platform for young minds to participate in the field of science and explore beyond the old and
                                                rusty school books.
                                                This is your chance to gain new heights of excellence. So buckle up your school belts and tie up your shoe laces to be
                                                the part of UOSC and boost up your experience!! Do not waste time. Take a step towards your victory.
                                                Register now:</p>
                                                <a href="/register" class="gall-btn">Register</a>
                                           </div>
                                    </div>
                                    <div class="gallery-div">
                                        <div class="container">
                                            <span>Gallery</span>
                                            <p>Check out some of the photos, of the amazing experience the school students had in UOSC 2019</p>
                                            <a href="{{asset('assets/img/about_bg.png')}}" download="img" class="gall-btn">Gallery</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                </div>
            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>

    </section>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.4.6/js/swiper.min.js"></script>
    <script src="{{ asset('js/navbar.js')}}"></script>
    <script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
    <script src="{{ asset('js/jquery.parallaxmouse.min.js')}}"></script>
    <script src="{{ asset('js/main.js')}}"></script>
</body>
</html>

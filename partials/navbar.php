<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/bootstrap-grid.css">
    <link rel="stylesheet" href="assets/css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>
</head>
    <style>
            @-webkit-keyframes fadeIn {
            0% { opacity: 0; }
            100% { opacity: 1; }
        }
        
        @keyframes fadeIn {
            0% { opacity: 0; }
            100% { opacity: 1; }
        }
        
        .fadeIn {
            -webkit-animation-name: fadeIn;
            animation-name: fadeIn;
            -webkit-animation-duration: 0.25s;
            animation-duration: 0.25s;
            -webkit-animation-timing-function: ease-in-out;
            animation-timing-function: ease-in-out;
        }
    </style>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script>
        $(document).ready(function () {
            var navbar = $('#navbar');
            var navbarLogo = $('#navbar-logo');
            var firstSection = $('#home'); 
            var lastScrollTop = 0;
            var animationDuration = 500;
        
            $(window).scroll(function () {
                var scrollTop = $(this).scrollTop();
        
                if (scrollTop > lastScrollTop) {
                    // Scrolling down
                    navbar.removeClass('bg-transparent navbar-dark').addClass('bg-white fixed-top fadeIn');
                    navbarLogo.addClass('logo-width').attr('src', 'assets/images/rankrizz-logo-2.svg'); // Change logo src
                    if (scrollTop > firstSection.offset().top) {
                        navbar.slideDown(animationDuration); // Show navbar with animation
                    }
                } else {
                    // Scrolling up
                    navbar.removeClass('bg-transparent navbar-dark').addClass('bg-white fixed-top fadeIn');
                    navbarLogo.addClass('logo-width').attr('src', 'assets/images/rankrizz-logo-2.svg'); // Change logo src
                }
        
                if (scrollTop === 0) {
                    // Reached the top of the page
                    navbar.removeClass('bg-white fixed-top').addClass('bg-transparent navbar-dark');
                    navbarLogo.attr('src', 'assets/images/rankrizz-logo-white.svg'); // Restore original logo src
                }
        
                lastScrollTop = scrollTop;
            });
        
            if ($(window).width() < 992) {
                $('.offcanvas-body .nav-link').addClass('text-dark navbar-dark');
            }else{
                $('.offcanvas-body .nav-link').removeClass('text-dark navbar-dark');
            }
        });

        
       
    </script>
<body>
    <nav class="navbar navbar-expand-lg bg-transparent navbar-dark" id="navbar">
        <div class="container">
            <img src="assets/images/rankrizz-logo-white.svg" alt="" id="navbar-logo" class="logo-width">
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#navbarOffcanvasLg" aria-controls="navbarOffcanvasLg" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="offcanvas offcanvas-start" tabindex="-1" id="navbarOffcanvasLg" aria-labelledby="navbarOffcanvasLgLabel">
                <div class="offcanvas-header">
                    <img class="offcanvas-title logo-width" id="offcanvasNavbarLabel" src="assets/images/rankrizz-logo-2.svg"></img>
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <ul class="navbar-nav justify-content-end flex-grow-1 ">
                        <li class="nav-item">
                            <a class="nav-link active me-2" aria-current="page" href="index.php">Home</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle me-2" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Services
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="development.php">Web Development</a></li>
                                <li><a class="dropdown-item" href="logo-design.php">Logo Designing</a></li>
                                <li><a class="dropdown-item" href="app-development.php">Mobile App Development</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item" href="seo.php">SEO</a></li>
                                <li><a class="dropdown-item" href="ecommerce.php">Ecommerce Web Development</a></li>
                                <li><a class="dropdown-item" href="content-writing.php">Content Writing</a></li>
                                <li><a class="dropdown-item" href="content-writing.php">Social Media Handling</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link me-2" href="portfolio.php">Portfolio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link me-2" href="pricing-2.php">Pricing</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link me-2" href="about-us.php" >About Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link me-2" href="contact-us.php" >Contact Us</a>
                        </li>
                        <li class="nav-item pe-2">
                            <a class="nav-link btn btn-danger bg-danger rounded-circle border-0 p-2 btn-hide" href="tel:+15185120759">
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-phone" width="28" height="28" viewBox="0 0 24 24" stroke-width="1.5" stroke="#ffffff" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                    <path d="M5 4h4l2 5l-2.5 1.5a11 11 0 0 0 5 5l1.5 -2.5l5 2v4a2 2 0 0 1 -2 2a16 16 0 0 1 -15 -15a2 2 0 0 1 2 -2" />
                                </svg>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link btn btn-sm  btn-danger bg-gradient-info text-white rounded-5 border-0 btn-hide" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">Request A Quote</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
    <!-- <nav class="navbar navbar-expand-lg bg-transparent navbar-dark" id="navbar">
        <div class="container">
           <img src="assets/images/rankrizz-logo-white.svg" alt="" id="navbar-logo" class="logo-width">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                    <a class="nav-link active me-2" aria-current="page" href="index.php">Home</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle me-2" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Services
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="development.php">Web Development</a></li>
                            <li><a class="dropdown-item" href="logo-design.php">Logo Designing</a></li>
                            <li><a class="dropdown-item" href="app-development.php">Mobile App Development</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="content-writing.php">Content Writing</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link me-2" href="seo.php">SEO</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link me-2" href="portfolio.php">Portfolio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link me-2" href="pricing-2.php">Pricing</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link me-2" href="about-us.php" >About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link me-2" href="contact-us.php" >Contact Us</a>
                    </li>
                    <li class="nav-item pe-2">
                        <a class="nav-link btn btn-danger bg-danger rounded-circle border-0 p-2 btn-hide">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-phone" width="28" height="28" viewBox="0 0 24 24" stroke-width="1.5" stroke="#ffffff" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                <path d="M5 4h4l2 5l-2.5 1.5a11 11 0 0 0 5 5l1.5 -2.5l5 2v4a2 2 0 0 1 -2 2a16 16 0 0 1 -15 -15a2 2 0 0 1 2 -2" />
                            </svg>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link btn btn-sm  btn-danger bg-gradient-info text-white rounded-5 border-0 btn-hide" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">Request A Qoute</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav> -->
</body>
</html>
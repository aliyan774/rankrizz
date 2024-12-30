<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <? include "partials/head.php";?>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
        <style>
        .owl-carousel-1 .item-1{
            min-height: 450px; /* Adjust the value as needed */
        }
        @media screen and (min-width: 768px) and (max-width: 820px){
            .owl-carousel-1 .item-1{
            min-height: 480px!important; /* Adjust the value as needed */
            }
            
        }
        </style>
    
        <!-- jQuery for Dynamic Equal Height -->
        <script>
            $(document).ready(function() {
                var items = $('.owl-carousel-1 .item-1');
                var maxHeight = Math.max.apply(
                    null,
                    items.map(function() {
                        return $(this).height();
                    }).get()
                );
                items.height(maxHeight);
            });
        </script>
        <script>
            $(document).ready(function() {
                $('.owl-carousel').owlCarousel({
                    loop: true,
                    margin: 30,
                    nav: false,
                    dots: false,
                    stagePadding: 20,
                    responsive: {
                        0: {
                            items: 1
                        },
                        768: {
                            items: 1
                        },
                        1000: {
                            items: 3
                        },
                        1400: {
                            items: 3
                        },
                        1920: {
                            items: 4
                        }
                    }
                });
            });
    
        </script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    </head>
<body>
    <div class="container container-sm justify-content-center align-content-center align-items-center mt-5 pt-xxl-5 pt-xl-5 pt-lg-5 pt-md-3 pt-sm-2 pt-2 pb-5">
        <div class="row mt-5">
            <div class="col-lg-6 col-md-8 col-sm-12 mx-auto">
                <h2 class="fw-bolder text-center">OUR SATISFIED CLIENTS FEEDBACK</h2>
            </div>
        </div>
    </div>
    <div class="owl-carousel owl-carousel-1 owl-theme">
        <div class="item item-1">
            <div class="card bg-gradient-info text-white border-0 w-100 h-100 shadow align-content-center align-items-center text-center">
                <div class="card-body">
                    <h3 class="fw-bold">Alex Crest</h3>
                    <hr>
                    <p class="who-p">RankRizz is a logo design maestro! Collaborating with them turned my brand's image from mundane to unforgettable. Their design magic is pure genius, crafting a logo that truly represents my business. The seamless process and creativity exceeded my expectations. Kudos to RankRizz for turning my logo vision into a visual masterpiece!</p>
                    <div class="rate">
                        <input type="radio" id="star5" name="rate" value="5" />
                        <label for="star5" title="text">5 stars</label>
                        <input type="radio" id="star4" name="rate" value="4" />
                        <label for="star4" title="text">4 stars</label>
                        <input type="radio" id="star3" name="rate" value="3" />
                        <label for="star3" title="text">3 stars</label>
                        <input type="radio" id="star2" name="rate" value="2" />
                        <label for="star2" title="text">2 stars</label>
                        <input type="radio" id="star1" name="rate" value="1" />
                        <label for="star1" title="text">1 star</label>
                    </div>
                </div>
            </div>
        </div>
        <div class="item item-1">
            <div class="card bg-gradient-info text-white border-0 w-100 h-100 shadow align-content-center align-items-center text-center">
                <div class="card-body">
                    <h3 class="fw-bold">Taylor Summit</h3>
                    <hr>
                    <p class="who-p">RankRizz is a digital marketing powerhouse! Since partnering with them, my brand's online presence has soared. Their expertise is incredible, driving engagement and boosting conversions. The clear communication kept me on the pulse. Thanks to RankRizz for transforming my digital marketing aspirations into a thriving reality!</p>
                    <div class="rate">
                        <input type="radio" id="star5" name="rate" value="5" />
                        <label for="star5" title="text">5 stars</label>
                        <input type="radio" id="star4" name="rate" value="4" />
                        <label for="star4" title="text">4 stars</label>
                        <input type="radio" id="star3" name="rate" value="3" />
                        <label for="star3" title="text">3 stars</label>
                        <input type="radio" id="star2" name="rate" value="2" />
                        <label for="star2" title="text">2 stars</label>
                        <input type="radio" id="star1" name="rate" value="1" />
                        <label for="star1" title="text">1 star</label>
                    </div>
                </div>
            </div>
        </div>
        <div class="item item-1">
            <div class="card bg-gradient-info text-white border-0 w-100 h-100 shadow align-content-center align-items-center text-center">
                <div class="card-body">
                    <h3 class="fw-bold">Jordan Pixel</h3>
                    <hr>
                    <p class="who-p">RankRizz is an animation design virtuoso! Collaborating with them brought my ideas to life with vibrant motion. Their animation magic is unparalleled, creating visuals that captivate and tell a compelling story. Kudos to RankRizz for turning my animation dreams into a visually stunning reality!</p>
                    <div class="rate">
                        <input type="radio" id="star5" name="rate" value="5" />
                        <label for="star5" title="text">5 stars</label>
                        <input type="radio" id="star4" name="rate" value="4" />
                        <label for="star4" title="text">4 stars</label>
                        <input type="radio" id="star3" name="rate" value="3" />
                        <label for="star3" title="text">3 stars</label>
                        <input type="radio" id="star2" name="rate" value="2" />
                        <label for="star2" title="text">2 stars</label>
                        <input type="radio" id="star1" name="rate" value="1" />
                        <label for="star1" title="text">1 star</label>
                    </div>
                </div>
            </div>
        </div>
        <div class="item item-1">
            <div class="card bg-gradient-info text-white border-0 w-100 h-100 shadow align-content-center align-items-center text-center">
                <div class="card-body">
                    <h3 class="fw-bold">Max Reynolds</h3>
                    <hr>
                    <p class="who-p">RankRizz is a game-changer! Since teaming up with them, my website went from obscurity to page one glory. The SEO sorcery they performed is nothing short of magic. My site's traffic and sales have soared, and the transparent reports kept me in the loop. Kudos to RankRizz for turning my online dreams into reality!</p>
                    <div class="rate">
                        <input type="radio" id="star5" name="rate" value="5" />
                        <label for="star5" title="text">5 stars</label>
                        <input type="radio" id="star4" name="rate" value="4" />
                        <label for="star4" title="text">4 stars</label>
                        <input type="radio" id="star3" name="rate" value="3" />
                        <label for="star3" title="text">3 stars</label>
                        <input type="radio" id="star2" name="rate" value="2" />
                        <label for="star2" title="text">2 stars</label>
                        <input type="radio" id="star1" name="rate" value="1" />
                        <label for="star1" title="text">1 star</label>
                    </div>
                </div>
            </div>
        </div>
        <div class="item item-1">
            <div class="card bg-gradient-info text-white border-0 w-100 h-100 shadow align-content-center align-items-center text-center">
                <div class="card-body">
                    <h3 class="fw-bold">Ethan Blaze</h3>
                    <hr>
                    <p class="who-p">RankRizz transformed my marketing game! Since joining forces, my brand's visibility soared. Their marketing magic is extraordinary, boosting my traffic and conversions. Transparent reports kept me in the loop. Big shoutout to RankRizz for turning my marketing dreams into reality!</p>
                    <div class="rate">
                        <input type="radio" id="star5" name="rate" value="5" />
                        <label for="star5" title="text">5 stars</label>
                        <input type="radio" id="star4" name="rate" value="4" />
                        <label for="star4" title="text">4 stars</label>
                        <input type="radio" id="star3" name="rate" value="3" />
                        <label for="star3" title="text">3 stars</label>
                        <input type="radio" id="star2" name="rate" value="2" />
                        <label for="star2" title="text">2 stars</label>
                        <input type="radio" id="star1" name="rate" value="1" />
                        <label for="star1" title="text">1 star</label>
                    </div>
                </div>
            </div>
        </div>
        <div class="item item-1">
            <div class="card bg-gradient-info text-white border-0 w-100 h-100 shadow align-content-center align-items-center text-center">
                <div class="card-body">
                    <h3 class="fw-bold">Olivia Tech</h3>
                    <hr>
                    <p class="who-p">RankRizz is a website development wizard! Since teaming up, my site went from average to extraordinary. Their development magic is undeniable, elevating my online presence. The transparent process and sleek designs exceeded my expectations. Cheers to RankRizz for turning my website dreams into a stunning reality!</p>
                    <div class="rate">
                        <input type="radio" id="star5" name="rate" value="5" />
                        <label for="star5" title="text">5 stars</label>
                        <input type="radio" id="star4" name="rate" value="4" />
                        <label for="star4" title="text">4 stars</label>
                        <input type="radio" id="star3" name="rate" value="3" />
                        <label for="star3" title="text">3 stars</label>
                        <input type="radio" id="star2" name="rate" value="2" />
                        <label for="star2" title="text">2 stars</label>
                        <input type="radio" id="star1" name="rate" value="1" />
                        <label for="star1" title="text">1 star</label>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
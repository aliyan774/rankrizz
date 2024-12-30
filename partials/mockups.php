<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/bootstrap-grid.css">
    <link rel="stylesheet" href="assets/css/bootstrap-grid.min.css">
    <link rel="stylesheet"  href="assets/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>
    <style>
    .owl-carousel-2 .item-2 {
            min-height: 500px; /* Adjust the value as needed */
        }
        @media screen and (min-width: 768px) and (max-width: 820px){
            .owl-carousel-2 .item-2{
            min-height: 500px!important; /* Adjust the value as needed */
            }
            
        }
    </style>
    <!-- jQuery for Dynamic Equal Height -->
    <script>
        $(document).ready(function() {
            var items = $('.owl-carousel-2 .item-2');
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
    <div class="owl-carousel owl-carousel-2 owl-theme mt-4">
        <div class="item item-2">
            <div class="card">
                <img src="assets/images/t-1.jpg" alt="" class="card-img">
            </div>
        </div>
        <div class="item item-2">
            <div class="card">
                <img src="assets/images/t-4.jpg" alt="" class="card-img">
            </div>
        </div>
        <div class="item item-2">
           <div class="card">
                <img src="assets/images/t-3.jpg" alt="" class="card-img">
            </div>
        </div>
        <div class="item item-2">
            <div class="card">
                <img src="assets/images/t-2.jpg" alt="" class="card-img">
            </div>
        </div>
        <div class="item item-2">
            <div class="card">
                <img src="assets/images/t-6.jpg" alt="" class="card-img overflow-hidden">
            </div>
        </div>
        <div class="item item-2">
            <div class="card">
                <img src="assets/images/t-7.jpg" alt="" class="card-img overflow-hidden">
            </div>
        </div>
        <div class="item item-2">
            <div class="card">
                <img src="assets/images/t-8.png" alt="" class="card-img overflow-hidden">
            </div>
        </div>
    </div>
</body>
</html>
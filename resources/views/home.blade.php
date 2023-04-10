<!DOCTYPE html>
<html lang="en">

<head>
    <title>MealDrop</title>


    <link rel="icon" href="{{ asset('images/logo.png.jpg') }}">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nothing+You+Could+Do" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('css/open-iconic-bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/animate.css') }}">

    <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/magnific-popup.css') }}">

    <link rel="stylesheet" href="{{ asset('css/aos.css') }}">

    <link rel="stylesheet" href="{{ asset('css/ionicons.min.css') }}">

    <link rel="stylesheet" href="{{ asset('css/bootstrap-datepicker.css') }}">
    <link rel="stylesheet" href="{{ asset('css/jquery.timepicker.css') }}">


    <link rel="stylesheet" href="{{ asset('css/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('css/icomoon.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>


</head>



@if (Session::has('message'))
    <div id="welkomBericht" class="fade-message"
        style=" color: #FFFFFF;
  background: #8b0000;
  border: 1px solid #a33a3a;
  font-size: 1.4em;">
        {{ Session::get('message') }}
    </div>

    <script>
        $(function() {
            setTimeout(function() {
                $('.fade-message').slideUp();
            }, 5000);
        });
    </script>
@endif



<body>

    {{-- <!-- HEADER --------------------------------------------------------------------------> --}}
    @include('header')


    <!-- LANDING SECTION ---------------------------------------------------------------------->
    <section class="home-slider owl-carousel img" style="background-image: url(images/bg_1.jpg);">

        <!-- Welcome to MealDrop -->
        <div class="slider-item" style="background-image: url(images/bg_3.jpg);">
            <div class="container">
                <div class="row slider-text justify-content-center" data-scrollax-parent="true">
                    <div class="container search_bar mt-5">


                        <form class="search_form" action="{{ route('searchfilter') }}" method="GET">

                            <input class="search_input text-light" name="search" type="text"
                                placeholder="what are you looking for?" required>
                            <select name="filter" class="search_filter" required>
                                <option value="" disabled selected hidden>Filter</option>
                                <option value="restaurant">Restaurants</option>
                                <option value="cuisine">Cuisines</option>
                                <option value="fooditems">Food Items</option>
                            </select>
                            <button class="search_btn" type="submit">Search</button>
                        </form>


                    </div>
                    <div class="col-md-7 col-sm-12 text-center ftco-animate">
                        <span class="subheading">Welcome to MealDrop</span>
                        <h1 class="mb-4">We cooked your desired Meals</h1>
                        <p class="mb-4 mb-md-5">Order meals from your favorite restaurants by MealDrop.</p>
                        <p><a href="/browsecuisines" class="btn btn-primary p-3 px-xl-4 py-xl-3">Browse Cuisines</a> <a
                                href="/viewrestaurants"
                                class="btn btn-white btn-outline-white p-3 px-xl-4 py-xl-3">Browse
                                Restaurants</a></p>
                    </div>
                </div>
            </div>
        </div>

    </section>





    <section class="ftco-section">

        {{-- <!-- pop restaurants -------------------------------------------------------------> --}}
        <div class="container">
            <div class="row justify-content-center mb-5 pb-3">
                <div class="col-md-7 heading-section ftco-animate text-center">
                    <h2 class="mb-4">Popular Restaurants</h2>
                    <p>Discover and explore a wide variety of dining options with our extensive list of restaurants.</p>
                </div>
            </div>
        </div>

        {{-- <!-- pop restaurants -------------------------------------------------------------> --}}
        @include('browserestaurants')


        {{-- <!-- pop cuisines -------------------------------------------------------------> --}}
        <div class="container">
            <div class="row justify-content-center mb-5 pb-3 mt-5 pt-5">
                <div class="col-md-7 heading-section text-center ftco-animate">
                    <h2 class="mb-4">Popular Cuisines</h2>
                    <p class="flip"><span class="deg1"></span><span class="deg2"></span><span
                            class="deg3"></span></p>
                    <p class="mt-5">Discover a variety of cuisines from top restaurants in your area, and order online
                        for delivery to your front door.</p>
                </div>
            </div>
        </div>
        {{-- <!-- pop restaurants -------------------------------------------------------------> --}}
        @include('browsecuisines')

    </section>
    {{-- <!-- Services ---------------------------------------------------------------------> --}}
    <section class="ftco-section ftco-services">
        <div class="overlay"></div>
        <div class="container">
            <div class="row justify-content-center mb-5 pb-3">
                <div class="col-md-7 heading-section ftco-animate text-center">
                    <h2 class="mb-4">MealDrop Services</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 ftco-animate">
                    <div class="media d-block text-center block-6 services">
                        <div class="icon d-flex justify-content-center align-items-center mb-5">
                            <span class="flaticon-pizza-1"></span>
                        </div>
                        <div class="media-body">
                            <h3 class="heading">Multiple Restaurants</h3>
                            <p>MealDrop offers browsing multiple restaurants and ordering from them at the same time.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 ftco-animate">
                    <div class="media d-block text-center block-6 services">
                        <div class="icon d-flex justify-content-center align-items-center mb-5">
                            <span class="flaticon-diet"></span>
                        </div>
                        <div class="media-body">
                            <h3 class="heading">Pick your meals</h3>
                            <p>Pick and choose your favorite items from our restaurants' menus.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 ftco-animate">
                    <div class="media d-block text-center block-6 services">
                        <div class="icon d-flex justify-content-center align-items-center mb-5"><span
                                class="flaticon-bicycle"></span></div>
                        <div class="media-body">
                            <h3 class="heading">Fast Deliveries</h3>
                            <p>Don't worry about picking up your meal. Your meal will be delivered to your front door.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- <!-- statistics --------------------------------------------------------------> --}}
    <section class="ftco-counter ftco-bg-dark img" id="section-counter"
        style="background-image: url(images/bg_2.jpg);" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-10">
                    <div class="row">
                        <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
                            <div class="block-18 text-center">
                                <div class="text">
                                    <div class="icon"><span class="flaticon-chef"></span></div>
                                    <strong class="number" data-number="169">0</strong>
                                    <span>Restaurants</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
                            <div class="block-18 text-center">
                                <div class="text">
                                    <div class="icon"><span class="flaticon-pizza-1"></span></div>
                                    <strong class="number" data-number="432">0</strong>
                                    <span>Orders</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
                            <div class="block-18 text-center">
                                <div class="text">
                                    <div class="icon"><span class="flaticon-laugh"></span></div>
                                    <strong class="number" data-number="123">0</strong>
                                    <span>Customers</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
                            <div class="block-18 text-center">
                                <div class="text">
                                    <div class="icon"><span class="flaticon-bicycle"></span></div>
                                    <strong class="number" data-number="11">0</strong>
                                    <span>Delivery Companies</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- footer ----------------------------------------------------------------------------->
    @include('footer')




    {{-- <!-- loader --> --}}
    <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
            <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4"
                stroke="#eeeeee" />
            <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4"
                stroke-miterlimit="10" stroke="#F96D00" />
        </svg></div>

    <script>
        setTimeout(function() {
            var msg = '{{ Session::get('alert') }}';
            var exist = '{{ Session::has('alert') }}';
            if (exist) {
                alert(msg);
            }
        }, 500);
    </script>




    <script src="js/jquery.min.js"></script>
    <script src="js/jquery-migrate-3.0.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/jquery.stellar.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/aos.js"></script>
    <script src="js/jquery.animateNumber.min.js"></script>
    <script src="js/bootstrap-datepicker.js"></script>
    <script src="js/jquery.timepicker.min.js"></script>
    <script src="js/scrollax.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
    <script src="js/google-map.js"></script>
    <script src="js/main.js"></script>

</body>

</html>

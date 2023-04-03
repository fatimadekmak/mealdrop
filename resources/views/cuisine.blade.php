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
</head>

<body>
    {{-- <!-- HEADER --------------------------------------------------------------------------> --}}
    @include('header')

    <!-- END nav -->
    <section class="ftco-section">

        {{-- restaurants of this cuisine --}}
        <div class="container">
            <div class="row justify-content-center mb-5 pb-3">
                <div class="col-md-7 heading-section ftco-animate text-center">
                    <h2 class="mb-4">Browse your favorite {{ $cuis }} restaurants</h2>
                </div>
            </div>
        </div>

        <div class="container-wrap">

            <div class="row no-gutters d-flex">
                @foreach ($rests as $rest)
                    <div class="col-lg-4 d-flex ftco-animate">
                        <div class="services-wrap d-flex">
                            <a href="#" class="img"
                                style="background-image: url({{ asset('restaurantImages/' . $rest->image) }});"></a>
                            <div class="text p-4">
                                <h3>{{ $rest->name }}</h3>
                                <a href="{{ url('/viewmenu', $rest->id) }}"
                                    class="ml-2 btn btn-white btn-outline-white">View Menu</a></p>
                            </div>
                        </div>
                    </div>
                    <br>
                @endforeach

            </div>
        </div>
        <br><br><br><br>

        {{-- food items of this cuisine --}}

        <div class="container">
            <div class="row justify-content-center mb-5 pb-3">
                <div class="col-md-7 heading-section ftco-animate text-center">
                    <h2 class="mb-4">Order your favorite {{ $cuis }} food items</h2>
                </div>
            </div>


            <div class="row">
                @foreach ($items as $item)
                    <div class="col-md-6">
                        <form action="{{ url('/addcart', $item->id) }}" method="post">
                            @csrf
                            <div class="pricing-entry d-flex ftco-animate">
                                <div class="img" style="background-image: url({{ asset('images/pizza-1.jpg') }});">
                                </div>
                                <div class="desc pl-3">
                                    <div class="d-flex text align-items-center">
                                        <h3><span>{{ $item->name }}</span></h3>
                                        <span class="price">{{ $item->price }}</span>
                                    </div>
                                    <div class="d-block">
                                        <p>{{ $item->description }}</p>
                                        <p><a href="{{ url('/viewmenu', $item->rest_id) }}">Restaurant:
                                                {{ $item->rest_name }}</a></p>
                                        <input type="number" name="quantity" min='1' value="1"
                                            style="width: 40px">
                                        <input name="addToCart" type="submit" class="btn btn-white btn-outline-white"
                                            value="Add to cart">
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                @endforeach
            </div>
        </div>

    </section>
    <!-- footer ----------------------------------------------------------------------------->
    @include('footer')



    <!-- loader -->
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

    <script src="{{ asset('js/jquery.min.js') }}"></script>{{ asset('') }}
    <script src="{{ asset('js/jquery-migrate-3.0.1.min.js') }}"></script>
    <script src="{{ asset('js/popper.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/jquery.easing.1.3.js') }}"></script>
    <script src="{{ asset('js/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('js/jquery.stellar.min.js') }}"></script>
    <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('js/aos.js') }}"></script>
    <script src="{{ asset('js/jquery.animateNumber.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap-datepicker.js') }}"></script>
    <script src="{{ asset('js/jquery.timepicker.min.js') }}"></script>
    <script src="{{ asset('js/scrollax.min.js') }}"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
    <script src="{{ asset('js/google-map.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>

</body>

</html>

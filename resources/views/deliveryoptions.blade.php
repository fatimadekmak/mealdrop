<!DOCTYPE html>
<html lang="en">

<head>
    <title>MealDrop</title>
    <link rel="icon" href="{{ asset('images/logo.png.jpg') }}">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Shipping Information</title>


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

    <style>
        .shippingform {
            background-color: #fdd78f;
        }

        .form-control-box {
            border: 1px solid #ccc;
            background-color: #f7f7f7;
            border-radius: 0.25rem;
            padding: 0.375rem 0.75rem;
            width: 400px;
        }

        .form-control-box:focus {
            border-color: #8c8c8c;
            box-shadow: none;
        }
    </style>
</head>

<body>

    {{-- <!-- HEADER --------------------------------------------------------------------------> --}}
    @include('header')

    <div class="container shippingform">
        <form class="row g-3 mt-5 text-dark" action="{{ url('/order') }}" method="POST">
            @csrf
            <div class="col-md-5 m-2">
                <label for="fname" class="form-label">First Name</label><br>
                <input type="text" class="form-control-box" name="fname" required>
            </div>
            <div class="col-md-5 m-2">
                <label for="lname" class="form-label">Last Name</label><br>
                <input type="text" class="form-control-box" name="lname" required>
            </div>
            <div class="col-md-5 m-2">
                <label for="address" class="form-label">Address</label><br>
                <input type="text" class="form-control-box" name="address" placeholder="1234 Main St" required>
            </div>
            <div class="col-md-5 m-2">
                <label for="phoneNum" class="form-label">Phone Number</label><br>
                <input type="text" class="form-control-box" name="phoneNum" required>
            </div>
            <div class="col-md-10 m-2">
                <label for="note" class="form-label">Notes</label><br>
                <textarea class="form-control-box" name="note" placeholder="Any notes for delivery"></textarea>
            </div>
            <div class="col-12 m-2">
                <button type="submit" name="order-sbmt" class="btn btn-dark">Order</button>
            </div>
        </form>
    </div>

    <!-- loader -->
    <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
            <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4"
                stroke="#eeeeee" />
            <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4"
                stroke-miterlimit="10" stroke="#F96D00" />
        </svg></div>

    {{-- <!-- FOOTER --------------------------------------------------------------------------> --}}
    @include('footer')

    <script>
        setTimeout(function() {
            var msg = '{{ Session::get('alert') }}';
            var exist = '{{ Session::has('alert') }}';
            if (exist) {
                alert(msg);
            }
        }, 500);
    </script>

    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.1/dist/js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript"></script>


    <script src="{{ asset('js/jquery.min.js') }}"></script>
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
    {{-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
    <script src="{{ asset('js/google-map.js') }}"></script> --}}
    <script src="{{ asset('js/main.js') }}"></script>

</body>

</html>

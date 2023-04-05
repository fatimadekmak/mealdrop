<!DOCTYPE html>
<html lang="en">

<head>
    <title>MealDrop</title>
    <link rel="icon" href="{{ asset('images/logo.png.jpg') }}">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>View Cart</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style type="text/css">
        body {
            margin-top: 20px;
            background: #dddddd;
        }

        .ui-w-40 {
            width: 40px !important;
            height: auto;
        }

        .card {
            box-shadow: 0 1px 15px 1px rgb(80, 80, 83);
        }

        .ui-product-color {
            display: inline-block;
            overflow: hidden;
            margin: .144em;
            width: .875rem;
            height: .875rem;
            border-radius: 10rem;
            -webkit-box-shadow: 0 0 0 1px rgba(0, 0, 0, 0.15) inset;
            box-shadow: 0 0 0 1px rgba(0, 0, 0, 0.15) inset;
            vertical-align: middle;
        }

        .table {
            color: black;
        }

        .card-body {
            background-color: #fac564;
        }

        .unclickable-link {
            pointer-events: none;
            cursor: default;
            text-decoration: none;
            color: inherit;
        }
    </style>

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

    <div class="container px-3 my-5 clearfix">

        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered m-0">
                        <thead>
                            <tr>

                                <th class="text-center py-3 px-4" style="min-width: 400px;">Order</th>
                                <th class="text-right py-3 px-4" style="width: 100px;">Total Price</th>
                                <th class="text-center py-3 px-4" style="width: 120px;">Status</th>
                                <th class="text-right py-3 px-4" style="width: 100px;">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($orders as $order)
                                <tr>
                                    <td class="p-4">
                                        <div class="media align-items-center">
                                            <div class="media-body">
                                                {{ $order->id }}
                                                <br>
                                                <small>
                                                    <span class="text-dark">Order Details: </span>
                                                    <br>
                                                    @foreach ($order_items[$order->id] as $item)
                                                        {{ $item->food_name }}: ({{ $item->quantity }})
                                                        <br>
                                                    @endforeach
                                                </small>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-right font-weight-semibold align-middle p-4">
                                        ${{ $order->total_price }}</td>
                                    <td class="text-right font-weight-semibold align-middle p-4">
                                        {{ $order->status }}
                                    </td>
                                    <td class="align-middle p-4 text-dark border-2">
                                        @if ($order->status == 'delivered')
                                            <a style="color: black; text-decoration: underline; font-weight: bold;"
                                                href="{{ url('/reorder', $order->id) }}">Reorder</a>
                                        @else
                                            <p style="color:grey;">Reorder</p>
                                        @endif
                                    </td>
                                </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
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

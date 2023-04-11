<div class="container-wrap">
    <div class="row no-gutters d-flex">
        @foreach ($rests as $rest)
            <div class="col-lg-4 d-flex ftco-animate">
                <div class="services-wrap d-flex">
                    <a href="#" class="img"
                        style="background-image: url(restaurantImages/{{ $rest->image }});"></a>
                    <div class="text p-4">
                        <h3>{{ $rest->name }}</h3>
                        <p><b>Cuisine:</b> {{ $rest->cuisine_name }} </p>
                        <a href="{{ url('/viewmenu', $rest->id) }}" class="ml-2 btn btn-white btn-outline-white">View
                            Menu</a></p>
                    </div>
                </div>
            </div>
            <br>
        @endforeach

    </div>
</div>



<br><br><br>

<div class="container-wrap">
    <div class="row no-gutters d-flex">
        @foreach ($cuis as $data)
            <div class="col-lg-4 d-flex ftco-animate">
                <div class="services-wrap d-flex">
                    <a href="#" class="img" style="background-image: url(images/pizza-1.jpg);"></a>
                    <div class="text p-4">
                        <h3>{{ $data->name }}</h3>
                        <p>{{ $data->description }}</p>
                        <a href="cuisine.php" class="ml-2 btn btn-white btn-outline-white">View Cuisine</a></p>
                    </div>
                </div>
            </div>
        @endforeach

    </div>
</div>
<br><br><br>

<section class="pt-5 pb-5">
    <div class="container">
        <div class="col-6">
            <h3 class="mb-3">Restaurant Reviews </h3>
        </div>
        <hr class="border-light border-2"><br>
        <div class="col-md-12">
            <form action="{{ url('/postReview', $id) }}" method="post">
                @csrf
                <div class="row align-items-center">
                    <div class="col">
                        <textarea required style="padding: 10px" name="review_text" cols="100" rows="3"
                            placeholder="leave your review"></textarea>
                    </div>
                    <div class="col text-right">
                        <select required style="height: 50px" name="rating" class="form-select form-select-lg mb-3">
                            <option value="excellent">Excellent</option>
                            <option value="good">Good</option>
                            <option value="average">Average</option>
                            <option value="poor">Poor</option>
                            <option value="terrible">Terrible</option>
                        </select>
                    </div>
                    <div class="col text-right">
                        <input class="btn btn-dark mb-3 mr-1" type="submit" name="leaveReview" value="+ Add Review">
                    </div>
                </div>
            </form>
        </div>
        <br>
        <hr class="border-light border-2">
        <div class="row">

            <div class="col-md-12 text-right">

                <a class="btn btn-dark mb-3 mr-1" href="#carouselExampleIndicators2" role="button" data-slide="prev">
                    < </a>
                        <a class="btn btn-dark mb-3 " href="#carouselExampleIndicators2" role="button"
                            data-slide="next">
                            >
                        </a>
            </div>
            <div class="col-12">
                <div id="carouselExampleIndicators2" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        @foreach ($reviews as $review)
                            @if ($loop->first)
                                <div class="carousel-item active">
                                @else
                                    <div class="carousel-item">
                            @endif
                            <div class="row">

                                <div class="col-lg-6 mb-3 mx-auto">
                                    <div class="card">
                                        <div class="card-body">
                                            <h4 class="card-title" style="color:black">{{ $review->user_name }}</h4>
                                            <h6>Rate: <span class="text-danger">{{ $review->rating }}</span></h6>
                                            <p class="card-text">{{ $review->review_text }}</p>
                                        </div>

                                    </div>
                                </div>
                            </div>
                    </div>
                    @endforeach

                </div>
            </div>
        </div>
    </div>
    </div>
</section>

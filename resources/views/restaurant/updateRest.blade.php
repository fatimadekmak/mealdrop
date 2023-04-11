<x-app-layout>

</x-app-layout>


<!DOCTYPE html>
<html lang="en">

<head>
    @include('restaurant.restcss')
</head>

<body>
    <div class="container-scroller">
        @include('restaurant.restnavbar')

        <div style="position: relative; top: 60px; right: -150px">

            <form name="additem" action="{{ url('updateInfo') }}" method="post" role="form"
                enctype="multipart/form-data">
                <h2>Add Item</h2>
                @csrf
                <!--<div class="settings"> -->
                <div class="line">
                    <label for="input">Restaurant Name</label>
                    <div class="input">
                        <input class="form-control text-light" type="text" name="name"
                            value="{{ $rest->name }}">
                    </div>
                </div>

                <div class="line">
                    <label for="input">Address</label>
                    <div class="input">
                        <input class="form-control text-light" type="text" name="address"
                            value="{{ $rest->address }}">
                    </div>
                </div>

                <div class="line">
                    <label for="input">Phone</label>
                    <div class="input">
                        <input class="form-control text-light" type="text" name="phone"
                            value="{{ $rest->phone }}">
                    </div>
                </div>

                <div class="line">
                    <label for="input">Opening Time</label>
                    <div class="input">
                        <input class="form-control text-light" type="text" name="opening_time"
                            value="{{ $rest->opening_time }}">
                    </div>
                </div>
                <div class="line">
                    <label for="input">Upload an image</label>
                    <div class="input">
                        <input class="form-control text-light" type="file" name="image">
                    </div>
                </div>

                <input type="hidden" name="rest_id" value="{{ $rest->id }}">

                <input class="btn btn-light pb-4" type="submit" name="save" value="update">
            </form>
        </div>
    </div>
    @include('restaurant.restscript')
</body>

</html>

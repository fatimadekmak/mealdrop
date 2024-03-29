<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Become a MealDrop Restaurant</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.2/css/bootstrap.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js"></script>
</head>

<body>
    <div class="container">
        <form class="row g-3 mt-5" action="/processRequest" method="POST">
            @csrf
            <div class="col-md-6">
                <label for="restName" class="form-label">Restaurant Name</label>
                <input type="text" class="form-control" name="restName">
            </div>
            <div class="col-md-6">
                <label for="inputEmail4" class="form-label">Email</label>
                <input type="email" class="form-control" name="inputEmail4">
            </div>
            <div class="col-md-6">
                <label for="inputAddress" class="form-label">Address</label>
                <input type="text" class="form-control" name="inputAddress" placeholder="1234 Main St">
            </div>
            <div class="col-md-6">
                <label for="phoneNum" class="form-label">Phone Number</label>
                <input type="text" class="form-control" name="phoneNum">
            </div>
            <div class="col-md-6">
                <label for="cuisine" class="form-label">Restaurant Cuisine</label>
                <input type="text" class="form-control" name="cuisine">
            </div>
            <div class="col-md-6">
                <label for="opening_hours" class="form-label">Opening Hours</label>
                <input type="text" class="form-control" name="opening_hours" placeholder="7:00-20:00">
            </div>
            <small>once you submit this request, it will be sent and reviewed by MealDrop's admin. Your request will be processed in 24hrs and you will receive an email with the decision.</small>
            <div class="col-12">
                <button type="submit" name="rest-form-sbmt" class="btn btn-dark">Send Request</button>
            </div>
        </form>
    </div>
</body>

</html>

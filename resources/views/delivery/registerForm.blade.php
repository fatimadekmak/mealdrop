<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Become a MealDrop Delivery</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.2/css/bootstrap.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js"></script>
</head>

<body>
    <div class="container">
        <form class="row g-3 mt-5" method="POST">
            <div class="col-md-6">
                <label for="delivName" class="form-label">Delivery Company Name</label>
                <input type="text" class="form-control" name="delivName">
            </div>
            <div class="col-md-6">
                <label for="inputEmail4" class="form-label">Email</label>
                <input type="email" class="form-control" name="inputEmail4">
            </div>
            <div class="col-md-6">
                <label for="phoneNum" class="form-label">Phone Number</label>
                <input type="text" class="form-control" name="phoneNum">
            </div>
            <div class="col-md-6">
                <label for="charges" class="form-label">Delivery Charges Range</label>
                <input type="text" class="form-control" name="charges" placeholder="$0.8-1.2$ per mile">
            </div>
            <div class="col-md-6">
                <label for="employees" class="form-label">Number of drivers in your company</label>
                <input type="email" class="form-control" name="employees">
            </div>
            <div class="col-md-6">
                <label for="working_hours" class="form-label">Working Hours</label>
                <input type="email" class="form-control" name="working_hours" placeholder="8:00-00:00">
            </div>
            <small>once you submit this request, it will be sent and reviewed by MealDrop's admin. Your request will be processed in 24hrs and you will receive an email with the decision.</small>
            <div class="col-12">
                <button type="submit" name="del-form-sbmt" class="btn btn-dark">Send Request</button>
            </div>
        </form>
    </div>
</body>

</html>

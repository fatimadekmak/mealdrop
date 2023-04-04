<x-app-layout>

</x-app-layout>


<!DOCTYPE html>
<html lang="en">

<head>
    @include('admin.admincss')
</head>

<body>
    <div class="container-scroller">
        @include('admin.navbar')

        <div style="position: relative; top: 60px; right: -150px">

            <h2>Restaurants Requests</h2>

            <table bgcolor="grey" border="3px">

                <tr>
                    <th style="padding: 10px">Restaurant Name</th>
                    <th style="padding: 10px">Email</th>
                    <th style="padding: 10px">Address</th>
                    <th style="padding: 10px">Phone Number</th>
                    <th style="padding: 10px">Opening Hours</th>
                    <th style="padding: 10px">Cuisine</th>
                    <th style="padding: 10px">Action</th>
                </tr>
                @foreach ($rests as $req)
                    @if ($req->active == '0')
                        <tr align="center">
                            <td>{{ $req->name }}</td>
                            <td>{{ $req->email }}</td>
                            <td>{{ $req->address }}</td>
                            <td>{{ $req->phone }}</td>
                            <td>{{ $req->opening_time }}</td>
                            <td>{{ $req->cuis_name }}</td>
                            <td>
                                <a href="{{ url('/activaterest', $req->id) }}">Activate</a>
                                <a href="{{ url('/deleterest', $req->id) }}">Delete</a>
                            </td>
                        </tr>
                    @endif
                @endforeach

            </table>
            <br>
            <b>Activate: </b>To accept the request, admin can mark the restaurant as active then create an account for it manually<br> using the provided email. 

            <br><br><br>
            <h2>Delivery Companies Requests</h2>

            <table bgcolor="grey" border="3px">

                <tr>
                    <th style="padding: 10px">Company Name</th>
                    <th style="padding: 10px">Email</th>
                    <th style="padding: 10px">Phone Number</th>
                    <th style="padding: 10px">Number of Drivers</th>
                    <th style="padding: 10px">Working Hours</th>
                    <th style="padding: 10px">Charges/Mile</th>
                    <th style="padding: 10px">Action</th>
                </tr>
                @foreach ($comps as $req)
                    @if ($req->active == '0')
                        <tr align="center">
                            <td>{{ $req->name }}</td>
                            <td>{{ $req->email }}</td>
                            <td>{{ $req->phone }}</td>
                            <td>{{ $req->nb_drivers }}</td>
                            <td>{{ $req->working_hours }}</td>
                            <td>{{ $req->charges_per_mile }}</td>
                            <td>
                                <a href="{{ url('/activatedel', $req->id) }}">Activate</a>
                                <a href="{{ url('/deletedel', $req->id) }}">Delete</a>
                            </td>
                        </tr>
                    @endif
                @endforeach

            </table>
            <br>
            <b>Activate: </b>To accept the request, admin can mark the company as active then  create an account for it manually <br>using the provided email. 
        
        </div>


    </div>

    <div class="container">
        <br>
    </div>
    @include('admin.adminscript')
</body>

</html>

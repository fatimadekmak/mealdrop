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

            <h2>Active Delivery Companies</h2>

            <table bgcolor="grey" border="3px">

                <tr>
                    <th style="padding: 10px">Company Name</th>
                    <th style="padding: 10px">Email</th>
                    <th style="padding: 10px">Phone Number</th>
                    <th style="padding: 10px">Number of Drivers</th>
                    <th style="padding: 10px">Working Hours</th>
                    <th style="padding: 10px">Charges Per Mile</th>
                    <th style="padding: 10px">Action</th>
                </tr>
                @foreach ($companies as $req)
                    @if ($req->active == '1')
                        <tr align="center">
                            <td>{{ $req->name }}</td>
                            <td>{{ $req->email }}</td>
                            <td>{{ $req->phone }}</td>
                            <td>{{ $req->nb_drivers }}</td>
                            <td>{{ $req->working_hours }}</td>
                            <td>{{ $req->charges_per_mile }}</td>
                            <td>
                                <a href="{{ url('/deletedel', $req->id) }}">Delete</a>
                            </td>
                        </tr>
                    @endif
                @endforeach

            </table>

        </div>

    </div>
    @include('admin.adminscript')
</body>

</html>

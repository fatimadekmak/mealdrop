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

            <table bgcolor="grey" border="3px">

                <tr>
                    <th style="padding: 10px">Name</th>
                    <th style="padding: 10px">Email</th>
                    <th style="padding: 10px">Address</th>
                    <th style="padding: 10px">Phone Number</th>
                    <th style="padding: 10px">Opening Hours</th>
                    <th style="padding: 10px">Cuisine</th>
                    <th style="padding: 10px">Action</th>
                </tr>
                @foreach ($requests as $req)
                @if ($req->active=="0")
                    <tr align="center">
                        <td>{{ $req->name }}</td>
                        <td>{{ $req->email }}</td>
                        <td>{{ $req->address }}</td>
                        <td>{{ $req->phone }}</td>
                        <td>{{ $req->opening_time }}</td>
                        <td>{{ $req->cuisine }}</td>
                        <td>
                          <a href="{{ url('/deleterest', $req->id) }}">Delete</a>
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
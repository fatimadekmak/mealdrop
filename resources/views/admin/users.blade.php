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

          <h2>Customer and Admin Accounts</h2>

            <table bgcolor="grey" border="3px">

                <tr>
                    <th style="padding: 30px">Name</th>
                    <th style="padding: 30px">Email</th>
                    <th style="padding: 30px">Action</th>
                </tr>

                @foreach ($data as $data)
                @if ($data->user_type=="0" || $data->user_type=="1")    
                <tr align="center">
                    <td>{{ $data->name }}</td>
                    <td>{{ $data->email }}</td>

                    @if($data->user_type=="0")
                    <td><a href="{{ url('/deleteuser', $data->id) }}">Delete</a></td>
                    @else
                    <td><a >Not Allowed</a></td>
                    @endif
                </tr>
                @endif
                @endforeach
            </table>

        </div>


    </div>
    @include('admin.adminscript')
  </body>
</html>
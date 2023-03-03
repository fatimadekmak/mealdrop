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
                    <th style="padding: 30px">Name</th>
                    <th style="padding: 30px">Email</th>
                    <th style="padding: 30px">Action</th>
                </tr>

                @foreach ($restaurants as $rest)
                @if ($rest->user_type=="2")
                    <tr align="center">
                        <td>{{ $rest->name }}</td>
                        <td>{{ $rest->email }}</td>
                        <td><a href="{{ url('/deleteuser', $rest->id) }}">Delete</a></td>
                    </tr> 
                @endif
                @endforeach
            </table>

        </div>

    </div>
    @include('admin.adminscript')
  </body>
</html>
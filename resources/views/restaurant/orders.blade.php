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

            <table bgcolor="grey" border="3px">

                <tr>
                    <th style="padding: 30px">id</th>
                    <th style="padding: 30px">food items</th>
                    <th style="padding: 30px">address</th>
                    <th style="padding: 30px">customer name</th>
                    
                </tr>

              <!--  @foreach ($data as $data)
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
                @endforeach -->
            </table>

        </div>


    </div>
    @include('restaurant.restscript')
  </body>
</html>

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
                    <th style="padding: 30px">add item</th>
                    <th style="padding: 30px">delete</th>
                    <th style="padding: 30px">price</th>
                    <th style="padding: 30px">description</th>
                    

                    @foreach ($menu as $menu)
                @if ($menu->user_type=="1")
                    <tr align="center">
                        <td>{{ $menu->name }}</td>
                        <td>{{ $menu->email }}</td>
                        <td><a href="{{ url('/deleteitem', $menu->id) }}">Delete</a></td>    
                        <td><a href="{{ url('/additem', $menu->id) }}">Add Item</a></td>
                    
                    </tr> 
                @endif
                @endforeach
                    
                </tr>
            </table>

</div>


</div>
@include('restaurant.restscript')
</body>
</html>


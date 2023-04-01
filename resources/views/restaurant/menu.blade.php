
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

            <form name="additem" action="{{url('addfood')}}" method="post" enctype = "multipart/form-data">
                @csrf
                <div>
                    <label>Name</label>
                    <input type="text" name="Name" required>
                </div>
                <div>
                    <label>Price</label>
                    <input type="number" name="Price" required>
                </div>
                <div>
                    <label>Description</label>
                    <input type="text" name="Description" required>
                </div>
                <div>
                    <input type="submit" name="save" value="save">
                </div>

            </form>
            <div>
            <table bgcolor="grey" border="3px">

                <tr>
                    <th style="padding: 30px">name</th>
                    <th style="padding: 30px">price</th>
                    <th style="padding: 30px">description</th>
                    <th style="padding: 30px">add item</th>
                    <th style="padding: 30px">action</th>

                    @foreach ($data as $data)
                    <tr align="center">
                        <td>{{ $data->Name }}</td>
                        <td>{{ $data->Price }}</td>
                        <td>{{ $data->Description }}</td>
                        
                        <!-- <td><a href="{{ url('/additem', $menu->id) }}">Add Item</a></td>    
                       -->
                        <td><a href="{{ url('/deleteitem', $data->id) }}">Delete Item</a></td> 
                    </tr> 
                @endforeach
                    
                </tr>
            </table>

</div>


</div>
@include('restaurant.restscript')
</body>
</html>


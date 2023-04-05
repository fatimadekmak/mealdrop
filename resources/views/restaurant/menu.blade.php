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

            <form name="additem" action="{{ url('addfood') }}" method="post" enctype="multipart/form-data">
                <h2>Add Item</h2>
                @csrf
                <!--<div class="settings"> -->
                <div class="line">
                    <label for="input">Name</label>
                    <div class="input">
                        <input type="text" name="name" required>
                    </div>
                </div>

                <div class="line">
                    <label for="input">Price</label>
                    <div class="input">
                        <input type="number" name="price" required>
                    </div>
                </div>

                <div class="line">
                    <label for="input">Description</label>
                    <div class="input">
                        <input type="text" name="description" required>
                    </div>
                </div>

                <div class="line">
                    <label for="input">Cuisine</label>
                    <div class="input">
                        <input type="text" name="cuisine" required>
                    </div>
                </div>
                <!-- class="input2" -->

                <input type="submit" name="save" value="save">


            </form>


            <div class="sect">
                <h2>Food Items At My Restaurant</h2>
                <table bgcolor="grey" border="3px">

                    <tr>
                        <th style="padding: 30px">name</th>
                        <th style="padding: 30px">price</th>
                        <th style="padding: 30px">description</th>
                        <th style="padding: 30px">action</th>

                    </tr>
                    @foreach ($food_items as $fooditem)
                        <tr align="center">
                            <td style="width: 150px">{{ $fooditem->name }}</td>
                            <td style="width: 80px">${{ $fooditem->price }}</td>
                            <td style="width: 300px">{{ $fooditem->description }}</td>
                            <td style="width: 80px"><a href="{{ url('/deleteitem', $fooditem->id) }}">Delete Item</a>
                            </td>

                        </tr>
                    @endforeach

                </table>

            </div>
        </div>
    </div>
    @include('restaurant.restscript')
</body>

</html>

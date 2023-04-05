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
            
            <h3>Order: {{ $id }}</h3>
            <h4>Customer Name: {{ $cust_name }}</h2>
            <table bgcolor="grey" border="3px">

                <tr>
                    <th style="padding: 30px">Food Item</th>
                    <th style="padding: 30px">Quantity</th>
                </tr>

                @foreach ($fooditems as $item)
                    <tr>
                        <td style="padding:10px">{{ $item->name }}</td>
                        <td style="padding:10px">{{ $item->quantity }}</td>
                    </tr>
                @endforeach
            </table>

        </div>


    </div>
    @include('restaurant.restscript')
</body>

</html>


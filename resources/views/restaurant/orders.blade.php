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
                    <th style="padding: 30px">Order Number</th>
                    <th style="padding: 30px">customer name</th>
                    {{-- <th style="padding: 30px">food item</th>
                    <th style="padding: 30px">quantity</th> --}}
                    <th style="padding: 30px">price</th>
                </tr>

                @foreach ($orders as $order)
                    <tr>
                        <td style="padding:10px"><a href="{{ url('/vieworder',$order->id) }}">{{ $order->id }}</a></td>
                        <td style="padding:10px">{{ $order->fname }} {{ $order->lname }}</td>
                        <td style="padding:10px">{{ $order->total_price }}</td>
                    </tr>
                @endforeach
            </table>

        </div>


    </div>
    @include('restaurant.restscript')
</body>

</html>


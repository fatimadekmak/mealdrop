<x-app-layout>

</x-app-layout>


<!DOCTYPE html>
<html lang="en">

<head>
    @include('delivery.delcss')
</head>

<body>
    <div class="container-scroller">
        @include('delivery.delnavbar')
        
        <div style="position: relative; top: 60px; right: -150px">
            <div class="container m-5">
                <a class="btn btn-{{ $color }} btn-lg" href="{{ url('/toggleAvailability') }}">{{ $text }}</a>
            </div>
            <table bgcolor="grey" border="3px">

                <tr>
                    <th style="padding: 30px">Restaurant Name</th>
                    <th style="padding: 30px">Address of Restaurant</th>
                    <th style="padding: 30px">Customer Name</th>
                    <th style="padding: 30px">Customer Info</th>
                    <th style="padding: 30px">Status</th>
                    <th style="padding: 30px">Action</th>
                </tr>

                @foreach ($orders as $order)
                    <tr>
                        <td style="padding: 10px; width: 80px">{{ $order->rest_name }}</td>
                        <td style="padding: 10px; width: 180px">{{ $order->rest_add }}</td>
                        <td style="padding: 10px; width: 80px">{{ $order->fname }} {{ $order->lname }}</td>
                        <td style="padding: 10px; width: 180px">{{ $order->shipping_addr }} - {{ $order->phone }}</td>
                        <td style="padding: 10px; width: 80px" align="center">{{ $order->status }}</td>
                        <td style="padding: 10px; width: 140px">
                            <a href="{{ url('/markofd', $order->id) }}">Out for delivery</a>
                            <a href="{{ url('/markdeliv', $order->id) }}">Delivered</a>
                        </td>
                    </tr>
                @endforeach
            </table>

        </div>


    </div>
    @include('delivery.delscript')
</body>

</html>

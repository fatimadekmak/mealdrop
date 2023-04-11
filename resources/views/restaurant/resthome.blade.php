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
        <div class="card">
            <div class="card-body" style="position: relative; top: 60px; right: -150px">
                @forelse(Auth::user()->notifications as $notification)
                    @if ($notification->read_at == null)
                        <div class="alert alert-success" role="alert">
                            [{{ $notification->created_at }}] New Order: {{ $notification->data['order_id'] }}
                            From:
                            ({{ $notification->data['user_name'] }})
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <a href="{{ url('markread', $notification->id) }}" class="float-right mark-as-read">
                                Mark as read
                            </a>
                        </div>
                    @endif
                    @if ($loop->last)
                        <a href="{{ url('markallread') }}" style="color:white">
                            Mark all as read
                        </a>
                    @endif
                @empty
                    There are no new notifications
                @endforelse
            </div>
        </div>
    </div>
    @include('restaurant.restscript')
</body>

</html>

<?php

namespace App\Http\Controllers;

use App\Models\DeliveryCompany;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class DeliveryController extends Controller
{
    public function deliveryorders() {
        $email = Auth::user()->email;
        $del = DeliveryCompany::where('email',$email)->first();
        $del_id = $del->id;
        if($del->available == 1) {
            $color = 'success';
            $text = 'AVAILABLE';
        }
        else {
            $color = 'danger';
            $text = 'UNAVAILABLE';
        }

        $orders = DB::table('orders')
            ->join('restaurant_orders','orders.id','=','restaurant_orders.order_id')
            ->join('restaurants','restaurants.id','=','restaurant_orders.rest_id')
            ->select('restaurants.name as rest_name','restaurants.address as rest_add','orders.*')
            ->where('del_id',$del_id)
            ->whereIn('status',['pending','out_for_delivery'])
            ->get();
        return view('delivery.deliveryorders', compact('orders','color','text'));
        
    }

    public function toggleAvailability() {
        $email = Auth::user()->email;
        $del = DeliveryCompany::where('email',$email)->first();
        $del->available==1?$del->available=0:$del->available=1;
        $del->update();
        return redirect('/deliveryorders');
    }
    
    public function markofd($id) {
        $order = Order::find($id);
        $order->status = 'out_for_delivery';
        $order->update();
        return redirect()->back();
    }

    public function markdeliv($id) {
        $order = Order::find($id);
        $order->status = 'delivered';
        $order->update();
        return redirect()->back();
    }

}

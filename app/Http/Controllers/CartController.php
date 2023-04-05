<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\User;
use App\Models\Order;
use App\Models\FoodItems;
use App\Models\OrderedItem;
use Illuminate\Http\Request;
use App\Models\DeliveryCompany;
use App\Models\Restaurant;
use App\Models\RestaurantOrder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Notifications\NewOrderNotification;
use Illuminate\Support\Facades\Notification;

class CartController extends Controller
{

    public function viewcart(Request $req, $id) {
        $items = Cart::where('user_id',$id)
            ->join('food_items','carts.food_id','=','food_items.id')
            ->join('restaurants','food_items.rest_id','=','restaurants.id')
            ->select('food_items.*','carts.id as cart_id','carts.user_id','carts.quantity','restaurants.name as rest_name')
            ->get();
        return view('cart',compact('items'));
    }

    public function cartdelete($id) {
        $item = Cart::find($id);
        $item->delete();
        return redirect()->back();
    }

    public function cartupdate(Request $request, $id) {
        $item = Cart::find($id);
        $item->quantity = $request->quantity;
        $item->update();
        return redirect()->back();
    }

    public function processorder(Request $req) {
        $user_id = Auth::id();

        $user_name = $req->fname.' '.$req->lname;

        $order = new Order();
        $order->user_id = $user_id;
        $order->del_id = $this->assignDelivery();
        $order->fname = $req->fname;
        $order->lname = $req->lname;
        $order->shipping_addr = $req->address;
        $order->phone = $req->phoneNum;
        $order->note = $req->note;
        $order->save();

        $total =0;
        $items = Cart::where('user_id',$user_id)->get();
        foreach($items as $item) {
            $ordered_item = new OrderedItem();
            $ordered_item->order_id = $order->id;
            $ordered_item->food_item_id	 = $item->food_id;
            $ordered_item->quantity = $item->quantity;
            $ordered_item->save();

            $food = FoodItems::find($item->food_id);
            $rest_id = $food->rest_id;
            $total += $food->price * $item->quantity;

            if(!RestaurantOrder::where('order_id',$order->id)->where('rest_id',$rest_id)->first()) {
                $rest_order = new RestaurantOrder();
                $rest_order->order_id = $order->id;
                $rest_order->rest_id = $rest_id;
                $rest_order->save();

                $rest = Restaurant::find($rest_id);
                $rest_user = User::where('email',$rest->email)->first();
                Notification::send($rest_user, new NewOrderNotification($order->id, $user_name));

            }
            $item->delete();
        }
        $order->total_price = $total;
        $order->update();
        
        $del = DB::table('delivery_companies')
            ->join('users','users.email','=','delivery_companies.email')
            ->where('delivery_companies.id',$order->del_id)
            ->first();

        Notification::send(User::find($del->id), new NewOrderNotification($order->id, $user_name));

        return redirect('/')->with('alert', 'Your order is being processed!');
    }

    public function assignDelivery(){
        $del_company = DeliveryCompany::where('available',1)->first();
        return $del_company->id;
    }
}

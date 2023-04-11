<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use Illuminate\Support\Facades\Auth;
use App\Models\FoodItems;
use App\Models\Restaurant;
use App\Models\Cuisine;
use App\Models\Order;
use App\Models\OrderedItem;
use Illuminate\Support\Facades\DB;

use App\Models\User;

class RestController extends Controller
{
    public function menu()
    {
        $id = Auth::id();

        $user = User::find($id);
        $useremail = $user->email;
        $restaurant_id = Restaurant::where('email', $useremail)->first()->id;
        $food_items = FoodItems::where('rest_id', $restaurant_id)->get();

        return view("restaurant.menu", compact("food_items"));
    }

    public function addfood(Request $request)
    {
        $data = new FoodItems();
        $data->name = $request->name;
        $data->price = $request->price;
        $data->description = $request->description;

        $id = Auth::id();

        $user = User::find($id);
        $useremail = $user->email;
        $restaurant_id = Restaurant::where('email', $useremail)->first()->id;
        $data->rest_id = $restaurant_id;

        // cuisine
        $cuisine = Cuisine::where('name', $request->cuisine)->first();
        if (!$cuisine) {
            $cuisine = new Cuisine();
            $cuisine->name = $request->cuisine;
            $cuisine->description = "";
            $cuisine->save();
        }
        $data->cuisine = $cuisine->id;

        $data->save();
        return redirect()->back();
    }

    public function deleteitem($id)
    {
        $data = FoodItems::find($id);
        $data->delete();
        return redirect()->back();
    }


    public function orders()
    {
        $email = Auth::user()->email;
        $orders = DB::table('restaurants')
            ->join('restaurant_orders', 'restaurant_orders.rest_id', '=', 'restaurants.id')
            ->join('orders', 'restaurant_orders.order_id', '=', 'orders.id')
            ->where('status', '!=', 'delivered')
            ->where('restaurants.email', $email)
            // ->join('ordered_items','ordered_items.order_id','=','orders.order_id')
            // ->join('food_items','food_items.id','=','ordered_items.food_id')
            ->select('orders.*')
            ->get();

        return view("restaurant.orders", compact("orders"));
    }

    public function updateRest()
    {
        $email = Auth::user()->email;
        $rest = Restaurant::where('email', $email)->first();
        return view('restaurant.updateRest', compact('rest'));
    }

    public function updateInfo(Request $r)
    {

        $rest = Restaurant::find($r->rest_id);
        $rest->name = $r->name;
        $rest->address = $r->address;
        $rest->phone = $r->phone;
        $rest->opening_time = $r->opening_time;
        if ($r->image != null) {
            $path = 'restaurantImages';
            $file = $r->image->getClientOriginalName();
            $rest->image = $file;
            $r->image->move(public_path($path), $file);
        }
        $rest->update();

        return redirect()->back();
    }

    public function vieworder($id)
    {
        $user = Auth::user();
        $rest_id = Restaurant::where('email', $user->email)->first()->id;
        $fooditems = OrderedItem::where('order_id', $id)
            ->join('food_items', 'food_items.id', '=', 'ordered_items.food_item_id')
            ->where('food_items.rest_id', $rest_id)
            ->get();
        $cust_name = Order::find($id)->fname . Order::find($id)->lname;
        return view('restaurant.order', compact('fooditems', 'id', 'cust_name'));
    }
}

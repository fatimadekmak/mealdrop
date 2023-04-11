<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Order;
use App\Models\Cuisine;
use App\Models\FoodItems;
use App\Models\Restaurant;
use App\Models\OrderedItem;
use Illuminate\Http\Request;
use App\Models\DeliveryCompany;
use App\Models\RestaurantOrder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Notifications\NewOrderNotification;
use Illuminate\Support\Facades\Notification;


class HomeController extends Controller
{
    public function index()
    {
        return view('home', $this->returnrestaurants(), $this->returncuisines());
    }

    public function viewrestaurants()
    {
        return view('restaurants', $this->returnrestaurants());
    }

    public function returnrestaurants()
    {
        $rests = DB::table('restaurants')
            ->join('cuisines', 'restaurants.cuisine', '=', 'cuisines.id')
            ->where('restaurants.active', '1')
            ->select('restaurants.*', 'cuisines.name as cuisine_name')
            ->get();
        return compact('rests');
    }

    public function browsecuisines()
    {
        return view('cuisines', $this->returncuisines());
    }

    public function returncuisines()
    {
        $cuis = Cuisine::all();
        return compact("cuis");
    }

    public function restaurantForm()
    {
        return view('restaurant.registerForm');
    }

    public function processRequest(Request $request)
    {
        $restaurant = new Restaurant();
        $restaurant->name = $request->restName;
        $restaurant->email = $request->inputEmail4;
        $restaurant->address = $request->inputAddress;
        $restaurant->phone = $request->phoneNum;
        // we have to find the id of the cuisine and add it to the restaurant row
        $cuisine = Cuisine::where('name', $request->cuisine)->first();
        if (!$cuisine) {
            $cuisine = new Cuisine();
            $cuisine->name = $request->cuisine;
            $cuisine->description = "";
            $cuisine->save();
        }
        $restaurant->cuisine = $cuisine->id;
        $restaurant->opening_time = $request->opening_hours;
        $restaurant->save();
        return redirect('/')->with('alert', 'Your request has been successfully sent!');
    }

    public function processDelivRequest(Request $request)
    {
        $company = new DeliveryCompany();
        $company->name = $request->delivName;
        $company->email = $request->inputEmail4;
        $company->phone = $request->phoneNum;
        $company->charges_per_mile = $request->charges;
        $company->nb_drivers = $request->employees;
        $company->working_hours = $request->working_hours;
        $company->save();
        return redirect('/')->with('alert', 'Your request has been successfully sent!');
    }

    public function deliveryForm()
    {
        return view('delivery.registerForm');
    }

    public function orderhistory($id)
    {
        $orders = Order::where('user_id', $id)->get();
        $order_items = array();
        foreach ($orders as $order) {
            $order_items[$order->id] = OrderedItem::where('order_id', $order->id)
                ->join('food_items', 'food_items.id', '=', 'ordered_items.food_item_id')
                ->select('ordered_items.*', 'food_items.name as food_name')
                ->get();
        }
        return view('orderhistory', compact('orders', 'order_items'));
    }

    public function reorder($id)
    {
        $order = Order::find($id);
        $order->status = 'pending';

        $rests = RestaurantOrder::where('order_id', $id)->get();
        foreach ($rests as $rest) {
            $resto = Restaurant::find($rest->rest_id);
            $rest_user = User::where('email', $resto->email)->first();
            Notification::send($rest_user, new NewOrderNotification($order->id, $order->fname . ' ' . $order->lname));
        }
        $order->del_id = DeliveryCompany::where('available', 1)->first()->id;
        $order->save();
        $del = DB::table('delivery_companies')
            ->join('users', 'users.email', '=', 'delivery_companies.email')
            ->where('delivery_companies.id', $order->del_id)
            ->first();

        Notification::send(User::find($del->id), new NewOrderNotification($id,  $order->fname . ' ' . $order->lname));
        return redirect()->back();
    }

    public function redirects()
    {
        $data = FoodItems::all();

        $usertype = Auth::user()->user_type;

        if ($usertype == '1')
            return view('admin.adminhome');
        else if ($usertype == '0')
            return redirect('/');
        else if ($usertype == '2')
            return view('restaurant.resthome');
        else if ($usertype == '3')
            return view('delivery.delhome');
        else {
            return view('home', compact('data'));
        }
    }



    public function searchfilter(Request $request)
    {
        $query = $request->search;
        $filter = $request->filter;

        if ($filter == 'restaurant') {
            $rn = Restaurant::where('name', $query)->first();
            if ($rn == null) {
                return redirect('/')->with('message', 'No Results');
            } else {
                $rid = $rn->id;
                $url = 'http://127.0.0.1:8000/viewmenu/' . $rid;
                return redirect($url);
            }
        }

        if ($filter == 'cuisine') {
            $cn = Cuisine::where('name', $query)->first();
            if ($cn == null) {
                return redirect('/')->with('message', 'No Results');
            } else {
                $cid = $cn->id;
                $url = 'http://127.0.0.1:8000/cuisine/' . $cid;
                return redirect($url);
            }
        }

        if ($filter == 'fooditems') {
            $result = FoodItems::where('name', 'LIKE', '%' . $query . '%')->paginate(5);
            if ($result->isEmpty()) {
                return redirect('/')->with('message', 'No Results');
            } else {
                $menu_links = $result->map(function ($item) {
                    $rest_id = $item->rest_id;
                    $restaurant = Restaurant::find($rest_id);
                    $menu_link = 'http://127.0.0.1:8000/viewmenu/' . $restaurant->id;
                    return $menu_link;
                });
                return view('searchfood', compact('query', 'filter', 'result', 'menu_links'));
            }
        }
    }
}

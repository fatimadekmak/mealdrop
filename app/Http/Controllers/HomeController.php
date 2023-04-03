<?php

namespace App\Http\Controllers;

use App\Models\Cuisine;
use App\Models\DeliveryCompany;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Restaurant;
use App\Models\FoodItems;
use Illuminate\Support\Facades\DB;


class HomeController extends Controller
{
    public function index()
    {
        return view('home',$this->returnrestaurants(),$this->returncuisines());
    }

    public function viewrestaurants() {
        return view('restaurants',$this->returnrestaurants());
    }
    
    public function returnrestaurants() {
        // $rests = restaurant::all();
        // return compact('rests');
        $rests = DB::table('restaurants')
        ->join('cuisines', 'restaurants.cuisine', '=', 'cuisines.id')
        ->select('restaurants.*', 'cuisines.name as cuisine_name')
        ->get();
    return compact('rests');
    }

    public function browsecuisines() {
        return view('cuisines',$this->returncuisines());
    }

    public function returncuisines() {
        $cuis = Cuisine::all();
        return compact("cuis");
    }
    
    public function restaurantForm() {
        return view('restaurant.registerForm');
    }

    public function processRequest(Request $request) {
        $restaurant = new Restaurant();
        $restaurant->name = $request->restName;
        $restaurant->email = $request->inputEmail4;
        $restaurant->address = $request->inputAddress;
        $restaurant->phone = $request->phoneNum;
        // we have to find the id of the cuisine and add it to the restaurant row
        $cuisine = Cuisine::where('name',$request->cuisine)->first();
        if(!$cuisine) {
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

    public function processDelivRequest(Request $request) {
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

    public function deliveryForm() {
        return view('delivery.registerForm');
    }


    public function redirects()
    {
        $data=FoodItems::all();

        $usertype = Auth::user()->user_type;

        if ($usertype == '1')
            return view('admin.adminhome');
        else if ($usertype == '0') 
            return redirect('/');
        else if ($usertype == '2')  
            return view('restaurant.resthome');
        else if($usertype == '3')
            return view('delivery.delhome');
        else{
            return view('home', compact('data'));
        }    
    }



    // public function login(Request $request)
    // {
    //     // Authenticate user
    
    //     $restaurant = Restaurant::where('user_id', $user->id)->first();
    //     if ($restaurant) {
    //         session(['restaurant_id' => $restaurant->id]);
    //     }
    

















    // public function index(Request $request)
    // {
    //     $query = $request->input('query');
    //     $category = $request->input('category');

    //     $restaurants = Restaurant::where('name', 'LIKE', "%$query%")
    //         ->when($category, function ($query, $category) {
    //             return $query->where('category', $category);
    //         })
    //         ->get();

    //     $fooditems = FoodItem::where('name', 'LIKE', "%$query%")
    //         ->when($category, function ($query, $category) {
    //             return $query->whereHas('restaurant', function ($query) use ($category) {
    //                 return $query->where('category', $category);
    //             });
    //         })
    //         ->get();

    //     return view('home', compact('restaurants', 'food_items'));
    // }


}

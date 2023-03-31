<?php

namespace App\Http\Controllers;

use App\Models\DeliveryCompany;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Restaurant;

class HomeController extends Controller
{
    public function index()
    {
        return view('home');
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
        $restaurant->cuisine = $request->cuisine;
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
        $usertype = Auth::user()->user_type;

        if ($usertype == '1')
            return view('admin.adminhome');
        else if ($usertype == '0')
            return view('home');
        else if ($usertype == '2')  
            return view('restaurant.resthome');
        else 
            return view('delivery.delhome');
    }
}

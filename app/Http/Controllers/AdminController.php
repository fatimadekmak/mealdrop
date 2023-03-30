<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

use App\Models\User;
use App\Models\Restaurant;

class AdminController extends Controller
{
    public function user() {
        $data = user::all();
        return view('admin.users', compact("data"));
    }

    public function deleteuser($id) {
        $data = user::find($id);
        $data->delete();
        return redirect()->back();
    }

    public function deleterest($id) {
        $data = restaurant::find($id);
        $data->delete();
        return redirect()->back();
    }

    public function restaurant() {
        $restaurants = user::all();
        return view('admin.restaurants', compact("restaurants"));
    }

    public function requests() {
        $requests = restaurant::all();
        return view('admin.requests', compact("requests"));
    }
    
    public function delivery() {
        $companies = user::all();
        return view('admin.delivery', compact("companies"));
    }
}

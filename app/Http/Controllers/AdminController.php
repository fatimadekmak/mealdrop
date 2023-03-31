<?php

namespace App\Http\Controllers;

use App\Models\DeliveryCompany;
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
        if($data->active==1) {
            $account = User::where('email', $data->email);
            $account->delete();
        }
        $data->delete();
        return redirect()->back();
    }

    public function deletedel($id) {
        $data = DeliveryCompany::find($id);
        if($data->active==1) {
            $account = User::where('email', $data->email);
            $account->delete();
        }
        $data->delete();
        return redirect()->back();
    }

    public function restaurant() {
        $restaurants = restaurant::all();
        return view('admin.restaurants', compact("restaurants"));
    }

    public function delivery() {
        $companies = DeliveryCompany::all();
        return view('admin.delivery', compact("companies"));
    }
    
    public function requests() {
        $rests = restaurant::all();
        $comps = DeliveryCompany::all();
        return view('admin.requests', compact("rests"),compact("comps"));
    }
    
}

<?php

namespace App\Http\Controllers;

use App\Models\DeliveryCompany;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
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

    public function activaterest($id) {
        $rest = Restaurant::find($id);
        $rest->active = 1;
        $rest->update();
        return redirect('requests');
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

    public function activatedel($id) {
        $del = DeliveryCompany::find($id);
        $del->active = 1;
        $del->update();
        return redirect('requests');
    }

    public function restaurant() {
        $restaurants = DB::table('restaurants')
            ->join('cuisines','restaurants.cuisine','=','cuisines.id')
            ->select('restaurants.*','cuisines.name as cuis_name')
            ->get();
        return view('admin.restaurants', compact("restaurants"));
    }

    public function delivery() {
        $companies = DeliveryCompany::all();
        return view('admin.delivery', compact("companies"));
    }
    
    public function requests() {
        $rests = DB::table('restaurants')
        ->join('cuisines','restaurants.cuisine','=','cuisines.id')
        ->select('restaurants.*','cuisines.name as cuis_name')
        ->get();
        $comps = DeliveryCompany::all();
        return view('admin.requests', compact("rests"),compact("comps"));
    }
    
}

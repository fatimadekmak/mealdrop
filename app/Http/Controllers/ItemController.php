<?php

namespace App\Http\Controllers;

use App\Models\Cuisine;
use App\Models\FoodItems;
use App\Models\Restaurant;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    public function viewmenu($id) {
        $items = FoodItems::where('rest_id',$id)->get();
        $name = Restaurant::find($id)->name;
        return view('menu',compact('items'),compact('name'));
    }

    public function viewcuisine($id){
        $cuis = Cuisine::find($id)->name;
        $rests = Restaurant::where('cuisine',$id)->get();
        $items = DB::table('food_items')
        ->join('restaurants', 'restaurants.id', '=', 'food_items.rest_id')
        ->select('food_items.*', 'restaurants.name as rest_name')
        ->where('food_items.cuisine',$id)
        ->get();
        return view('cuisine',compact('cuis','items','rests'));
    }
}

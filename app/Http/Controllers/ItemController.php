<?php

namespace App\Http\Controllers;

use App\Models\FoodItems;
use App\Models\Restaurant;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    public function viewmenu($id) {
        $items = FoodItems::where('rest_id',2)->get();
        $name = Restaurant::find($id)->name;
        return view('menu',compact('items'),compact('name'));
    }
}

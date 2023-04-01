<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\FoodItems;
use App\Models\Restaurant;



class RestController extends Controller
{
    // public function restorders() {
    //     $data = user::all();
    //     return view('restaurant.orders', compact("data"));
    // }

    public function menu(){
        $data = FoodItems::all();
        return view("restaurant.menu", compact("data"));
    }


    // public function fooditem(){
    //     $data = res


    // }



    public function addfood(Request $request){

    $data = new FoodItems();

    $data->Name = $request->name;
    $data->Price = $request->price;
    $data->Description = $request->description;
    $data->save();
    return redirect()->back();

    }



    public function deleteitem($id) {
        $data = FoodItems::find($id);
        $data->delete();
        return redirect()->back();
    }

   
}

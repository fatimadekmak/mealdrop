<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cart;

class CartController extends Controller
{

    public function viewcart(Request $req, $id) {
        $items = Cart::where('user_id',$id)
            ->join('food_items','carts.food_id','=','food_items.id')
            ->join('restaurants','food_items.rest_id','=','restaurants.id')
            ->select('food_items.*','carts.id as cart_id','carts.user_id','carts.quantity','restaurants.name as rest_name')
            ->get();
        return view('cart',compact('items'));
    }

    public function cartdelete($id) {
        $item = Cart::find($id);
        $item->delete();
        return redirect()->back();
    }

    public function cartupdate(Request $request, $id) {
        $item = Cart::find($id);
        $item->quantity = $request->quantity;
        $item->update();
        return redirect()->back();
    }
}

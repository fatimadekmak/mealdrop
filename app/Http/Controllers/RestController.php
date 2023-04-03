<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use Illuminate\Support\Facades\Auth;
use App\Models\FoodItems;
use App\Models\Restaurant;
use App\Models\Cuisine;

use App\Models\User;

class RestController extends Controller
{

//     public function deleteitem($id) {
//         $data = FoodItems::find($id);
//         $data->delete();
//         return redirect()->back();
//     }






    public function menu()
    {
        $id = Auth::id();

        $user = User::find($id);
        $useremail = $user->email;
        $restaurant_id = Restaurant::where('email',$useremail)->first()->id;
        $food_items = FoodItems::where('rest_id', $restaurant_id)->get();

        return view("restaurant.menu", compact("food_items"));
    }

    public function addfood(Request $request)
    {
        $data = new FoodItems();
        $data->name = $request->name;
        $data->price = $request->price;
        $data->description = $request->description;

        $id = Auth::id();

        $user = User::find($id);
        $useremail = $user->email;
        $restaurant_id = Restaurant::where('email',$useremail)->first()->id;
        $data->rest_id = $restaurant_id;

        // cuisine
        $cuisine = Cuisine::where('name',$request->cuisine)->first();
        if (!$cuisine) {
            $cuisine = new Cuisine();
            $cuisine->name = $request->cuisine;
            $cuisine->description = "";
            $cuisine->save();
        }
        $data->cuisine = $cuisine->id;

        $data->save();
        return redirect()->back();
    }

    public function deleteitem($id)
    {
        $data = FoodItems::find($id);
        $data->delete();
        return redirect()->back();
    }



// //orders



public function orders()
{
    $restaurant = Auth::user();
    $orders = $restaurant->orders;

    return view("restaurant.orders", compact("orders"));
}





public function createOrder(Request $request)
{
    $restaurant = Auth::user();
    $customer = Auth::guard("web")->user();

    $order = new Order;
    $order->customer_id = $customer->id;
    $order->restaurant_id = $restaurant->id;
    $order->amount = $request->input("amount");
    $order->status = "Pending";
    $order->save();






   // $order->food_items()->sync($request->input("food_items"));

   return redirect()->route("restaurant.orders");


}


// broadcast(new OrderCreated($order))->toOthers();

// return redirect()->back();

// }











// public function createOrder(Request $request)
// {
//     $validatedData = $request->validate([
//         'food_item_id' => 'required|exists:food_items,id',
//         'quantity' => 'required|integer|min:1',
//         'special_request' => 'nullable|string|max:255'
//     ]);

//     $restaurant = Auth::user();

    
//     $order = new Order;
//     $order->food_item_id = $validatedData['food_item_id'];
//     $order->quantity = $validatedData['quantity'];
//     $order->special_request = $validatedData['special_request'];
//     $order->status = 'Pending';
//     $order->restaurant_id = $restaurant->id;
//     $order->save();

//     return redirect()->back()->with('success', 'Order has been created successfully!');
// }

}

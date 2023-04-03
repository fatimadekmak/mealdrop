<?php

namespace App\Http\Livewire;

use Livewire\Component;
//new
use Illuminate\Support\Facades\DB;
use Livewire\WithPagination;

class RestaurantSearch extends Component
{







    // use WithPagination;

    // public $searchQuery;
    // public $filterCuisine;

    // public function mount()
    // {
    //     $this->searchQuery = '';
    //     $this->filterCuisine = '';
    // }

    // public function render()
    // {
    //     $restaurants = $this->fetchRestaurants();
    //     $cuisines = $this->fetchCuisines();
        
    //     return view('livewire.restaurant-search', compact('restaurants', 'cuisines'));
    // }

    // public function search()
    // {
    //     $this->resetPage();
    // }

    // public function filter()
    // {
    //     $this->resetPage();
    // }

    // private function fetchRestaurants()
    // {
    //     $query = DB::table('restaurants')
    //         ->join('cuisines', 'restaurants.cuisine', '=', 'cuisines.id')
    //         ->select('restaurants.*', 'cuisines.name as cuisine_name');
        
    //     if (!empty($this->searchQuery)) {
    //         $query->where('restaurants.name', 'like', '%' . $this->searchQuery . '%')
    //               ->orWhere('restaurants.description', 'like', '%' . $this->searchQuery . '%');
    //     }

    //     if (!empty($this->filterCuisine)) {
    //         $query->where('cuisines.id', '=', $this->filterCuisine);
    //     }

    //     return $query->paginate(10);
    // }

    // private function fetchCuisines()
    // {
    //     return DB::table('cuisines')->get();
    // }





    //old
public function render()
    {
        return view('livewire.restaurant-search');
    }







    
    
}

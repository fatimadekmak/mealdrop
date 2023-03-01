<?php


namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;


class HomeController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function redirects()
    {
        $usertype = Auth::user()->user_type;

        if ($usertype == '1')
            return view('admin.adminhome');
        else if ($usertype == '0')
            return view('home');
    }
}

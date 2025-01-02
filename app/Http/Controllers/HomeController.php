<?php

namespace App\Http\Controllers;

use App\Models\Donut;
// use App\Models\DonutPrice;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $donuts = Donut::all();
        return view('home', compact('donuts'));
    }

    // public function showMenu()
    // {
    //     $bestsellers = Donut::where('is_bestseller', true)->get();
    //     return view('menu', compact('bestsellers'));
    // }
}
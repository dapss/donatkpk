<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CartController extends Controller
{
    public function index()
    {
        return view('cart'); // Pastikan Anda memiliki view 'cart.blade.php' di dalam folder resources/views
    }
}
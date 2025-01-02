<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    public function showCheckoutForm()
    {
        return view('checkout.form');
    }

    public function processCheckout(Request $request)
    {
        // Perlu validasi proses checkout

        return redirect()->route('checkout.form');
    }

    public function showConfirmation(Request $request)
    {
        // Perlu validasi metode pembayaran

        return view('checkout.confirmation');
    }
}

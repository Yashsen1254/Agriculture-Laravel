<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use App\Models\Checkout;
use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    public function index()
    {
        $carts = Cart::join('product', 'cart.Productid', '=', 'product.Id')
        ->select('cart.*', 'product.*')
        ->get();
        return view('frontend.pages.checkout', compact('carts'));
    }

    public function store(Request $request) {
        $request->validate([
            'Name' => 'required|string|max:255',
            'Mobile' => 'required|numeric',
            'Email' => 'required|email',
            'Address' => 'required|string|max:255',
            'Cartid' => 'required|exists:cart,Id',
        ]);

        // Create a new checkout entry
        $checkout = new Checkout();
        $checkout->Name = $request->Name;
        $checkout->Mobile = $request->Mobile;
        $checkout->Email = $request->Email;
        $checkout->Address = $request->Address;
        $checkout->Cartid = $request->Cartid;
        $checkout->save();

        // Redirect with success message
        return redirect()->route('front.index')->with('success', 'Checkout successful!');
    }
}

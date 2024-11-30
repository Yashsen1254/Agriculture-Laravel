<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\Payment;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index() {
        $orders = Order::get();
        return view('backend.pages.order.index', compact('orders'));
    }
    
    public function update($id) {
        Order::where('id', $id)->update([
            'Status' => 'Delivered',
        ]);

        Payment::create([
            'Orderid' => $id,
        ]);

        return redirect('/admin/order'); 

    }
}
<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class BasketController extends Controller
{
    public function basket()
    {
        return view('basket');
    }

    public function basketPlace()
    {
        return view('order');
    }

    public function basketAdd($productId)
    {
        $orderId = session('orderId');
        if (is_null($orderId)) {
            echo 123;
            $order = Order::create();
            session(['orderId' => $order->id]);
        }else {
            $order = Order::find($orderId);
        }
        $order->products()->attach($productId);
           return view('basket', compact('order'));
        }

}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Cart;
use App\Order;
use Illuminate\Support\Facades\Auth;

class OrdersController extends Controller
{
    /**
     * Show the form for creating a new resource.
     *
     */
    public function getCart() {
        if (!session()->has('cart')) {
            return view('shop.shopping-cart');
        }
        $oldCart = session()->get('cart');
        $cart = new Cart($oldCart);
        return view('shop.shopping-cart', [
            'products' => $cart->items,
            'totalPrice' => $cart->totalPrice
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
        if (!session()->has('cart')) {
            return redirect()->route('auto');
        }
        $oldCart = session()->get('cart');
        $cart = new Cart($oldCart);
        try {

            $order = new Order();
            $order->cart = serialize($cart);
            if(Auth::user() !== null){
                $order->name= Auth::user()->name;
                $order->user_id = Auth::user()->id;

                Auth::user()->orders()->save($order);
            }

        } catch (\Exception $e) {
            return redirect()->route('auto')->with('error', $e->getMessage());
        }

        session()->forget('cart');
        return redirect()->route('auto')->with('success', 'Заказ успешно сохранён!');
    }

}

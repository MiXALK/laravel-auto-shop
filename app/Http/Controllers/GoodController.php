<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Admin\Goods;
use App\Cart;
use App\Order;
use Illuminate\Support\Facades\Auth;


class GoodController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $goods = Goods::all();
        return view('goods.index', [
            'goods' => $goods,
        ]);
    }

    /**
     * Collect goods to cart
     *
     * @param Request $request
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */

    public function addToCart(Request $request, $id) {
        $product = Goods::find($id);
        $oldCart = session()->has('cart') ? session()->get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->add($product, $product->id);
        $request->session()->put('cart', $cart);
        return redirect()->route('auto');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $good = Goods::find($id);
        return view('goods.good', [
            'good' => $good,
        ]);
    }



}

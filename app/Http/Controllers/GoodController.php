<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Admin\Goods;
use App\Cart;


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
//        dd($cart);
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
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

}

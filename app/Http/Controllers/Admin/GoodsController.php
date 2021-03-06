<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\GoodsRequest;
use Illuminate\Support\Facades\DB;
use App\Models\Admin\Goods;
use App\Comments;
use App\Models\Admin\Photos;
use App\Shop;
use App\Category;



class GoodsController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $goods = Goods::all();
//        2 - Вывести товары где цена в диапазоне
//        dd(Goods::whereBetween('price', array(100, 200))->get());
        return view('admin.goods.index', [
            'goods' => $goods,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.goods.make',
        [
            'goods'    => [],
            'categories' => Category::with('children')->where('parent_id', 0)->get(),
            'delimiter'  => ''
        ]);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(GoodsRequest $request)
    {
        $goods = Goods::create($request->all());

        if($request->input('categories')) :
            $goods->categories()->attach($request->input('categories'));
        endif;

        return redirect()->route('goods.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $photos = Photos::all();
        $shops = Shop::all();
        $good = Goods::find($id);

        return view('admin.goods.good', [
            'goods' => $good,
            'photos' => $photos,
            'shops' => $shops,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Goods $goods)
    {
        //используется DI
        return view('admin.goods.edit', [
            'goods' => $goods,
            'categories' => Category::with('children')->where('parent_id', 0)->get(),
            'delimiter'  => ''
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(GoodsRequest $request, Goods $goods)
    {
        $goods->update($request->all());

        // Categories
        $goods->categories()->detach();
        if($request->input('categories')) :
            $goods->categories()->attach($request->input('categories'));
        endif;

        return back();

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $good = Goods::find($id);
        $good->categories()->detach();
        $good->delete();
        return redirect()->route('goods.index');

    }

    public function testDrive(Request $request)
    {

        if($request->input('name')) :
            session()->flash('driver', $request->input('name'));
        endif;

        return back();
    }

}

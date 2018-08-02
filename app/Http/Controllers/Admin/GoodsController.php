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
        return view('admin.goods.make');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(GoodsRequest $request)
    {
        $request->rules();
        Goods::create($request->all());
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
//        $good = Goods::find($id);
        return view('admin.goods.edit', [
            'goods' => $goods,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(GoodsRequest $request, $id)
    {
        //блок заменен строчкой ниже
//        $this->validate($request, [
//            'name' => 'required',
//            'short_description' => 'required',
//            'description' => 'required',
//            'icon' => 'required',
//        ]);

        $request->rules();
        Goods::find($id)->update($request->all());
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
        $good->delete();
        return redirect()->route('goods.index');

    }

}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Admin\Goods;
use App\Comments;

class GoodController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //        $goods = DB::table('goods')
//            ->where('id', '>', 1)->get();
////            ->where('id', '=')
//        $goods = Good::all();
//        dd ($goods);        $goods = Goods::all();

        //SAVE
//        $goodsObj = new Good();
//        $goodsObj ->name = 'Sony';
//        $goodsObj ->short_description = 'Description short';
//        $goodsObj ->description = 'Description';
//        $goodsObj ->icon = 'icon ref';
//        $goodsObj-> save();

        //$goods

//        $goods = Good::all();
//        dd ($goods);
//        return $goods;

        $routes = collect (\Route::getRoutes())->map(function($route){
            return $route->uri();
        });

        $goods = Goods::all();
        return view('goods.index', [
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
    public function store(Request $request)
    {
        //        dd($request->all());
//        $this->validate($request, [
//            'name' => 'required',
//            'short_description' => 'required',
//            'description' => 'required',
//            'icon' => 'required',
//        ]);
//        $goodsObj = new Goods();
//        $goodsObj ->name = $request->name;
//        $goodsObj ->short_description = $request->short_description;
//        $goodsObj ->description = $request->description;
//        $goodsObj ->icon = $request->icon;
//        $goodsObj-> save();

//        Goods::create([
//        'name' => $request->name,
//        'short_description' => $request->short_description,
//        'description' => $request->description,
//        'icon' => $request->icon,
//            ]);
//        Good::create($request->all());
//        return redirect('/goods');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $goods = Goods::all();

        var_dump($goods);
        $count = count([
            'goods' => $goods,
        ]);
        $good = Goods::find($id);
        return view('goods.good', [
            'good' => $good,
            'count' => $count
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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

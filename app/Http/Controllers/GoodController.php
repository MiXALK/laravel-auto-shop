<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Good;

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
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('goods.make');
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
        $this->validate($request, [
            'name' => 'required',
            'short_description' => 'required',
            'description' => 'required',
            'icon' => 'required',
        ]);
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
        Good::create($request->all());
        return redirect('/goods');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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

    public function view (){
        $goods = Goods::all();
        return $goods;
    }
}

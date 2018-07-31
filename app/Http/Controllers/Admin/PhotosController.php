<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Models\Admin\Photos;
use App\Models\Admin\Goods;

class PhotosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $photos = Photos::all();
        return view('admin.photos.index', [
            'photos' => $photos,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.photos.make');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'alt' => 'required',
            'title' => 'required',
            'path' => 'required',
        ]);
        Photos::create($request->all());
        return redirect('/admin/photos');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $photos = Photos::getItem($id);
        return view('admin.photos.photo', [
            'photos' => $photos,
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
        $photos = Photos::getItem($id);
        return view('admin.photos.edit', [
            'photos' => $photos,
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
        $this->validate($request, [
            'name' => 'required',
            'alt' => 'required',
            'title' => 'required',
            'path' => 'required',
        ]);


        Photos::where("id", $id)->update([
            "name" => $request->name,
            "alt" => $request->alt,
            "title" => $request->title,
            "path" => $request->path,
        ]);

        return redirect('/admin/photos/'.$request->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $photo = Photos::find($id);
        $photo->delete();
        return redirect('/admin/photos');
    }

    public function attach(Request $request, $id)
    {
        $this->validate($request, [
            'goods_id' => 'required',

        ]);

        $item = Goods::find($id);
        $item->addPhotos($request->goods_id);

        return back();
    }
}

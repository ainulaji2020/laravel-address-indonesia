<?php

namespace App\Http\Controllers;

use App\Models\citys;
use App\Models\provinces;
use Illuminate\Http\Request;

class citysController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $citys = citys::with('provinces')->get();
        return view('citys.view',[
            'citys' => $citys
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $provinces = provinces::all();
        return view('citys.add', compact('provinces'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
        citys::create([
            'province_id' => $request->province_id,
            'name' => $request->name
        ]);

        return redirect('/citys');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\citys  $citys
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $detail = citys::find($id);
        return view('citys.detail', compact('detail'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\citys  $citys
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $city = citys::where('id','=',$id)->with('provinces')->first();
        $provinces = provinces::all();
        // dd($provinces, $city);
        return view('citys.edit', compact('city','provinces'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\citys  $citys
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // dd($id);
        $city = citys::find($id);
        $city->update([
            'name'=>$request->name,
            'province_id'=>$request->province_id
        ]);
        // dd($city);
        return redirect('/citys');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\citys  $citys
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // dd($id);
        $delete = citys::find($id);
        $delete->delete();
        return redirect('/citys');
    }
}

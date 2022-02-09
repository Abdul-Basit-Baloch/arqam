<?php

namespace App\Http\Controllers;

use App\Models\Bayan;
use Illuminate\Http\Request;

class BayanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bayans = Bayan::all();
        
        $data = compact('bayans');
        
          return view('admin.bayan.index')->with($data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.bayan.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Bayan  $bayan
     * @return \Illuminate\Http\Response
     */
    public function show(Bayan $bayan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Bayan  $bayan
     * @return \Illuminate\Http\Response
     */
    public function edit(Bayan $bayan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Bayan  $bayan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Bayan $bayan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Bayan  $bayan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Bayan $bayan)
    {
        //
    }
}

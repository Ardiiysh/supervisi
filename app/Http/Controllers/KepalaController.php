<?php

namespace App\Http\Controllers;

use App\Kepala;
use Illuminate\Http\Request;

class KepalaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $materials = Material::latest()->paginate(5);
  
        return view('kepala.index',compact('materials'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
     * @param  \App\Kepala  $kepala
     * @return \Illuminate\Http\Response
     */
    public function show(Kepala $kepala)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Kepala  $kepala
     * @return \Illuminate\Http\Response
     */
    public function edit(Kepala $kepala)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Kepala  $kepala
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Kepala $kepala)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Kepala  $kepala
     * @return \Illuminate\Http\Response
     */
    public function destroy(Kepala $kepala)
    {
        //
    }
}

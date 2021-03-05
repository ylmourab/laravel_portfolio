<?php

namespace App\Http\Controllers;

use App\Models\AboutProgression;
use Illuminate\Http\Request;

class AboutProgressionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages.bo.about.progress');
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
     * @param  \App\Models\AboutProgression  $aboutProgression
     * @return \Illuminate\Http\Response
     */
    public function show(AboutProgression $aboutProgression)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\AboutProgression  $aboutProgression
     * @return \Illuminate\Http\Response
     */
    public function edit(AboutProgression $aboutProgression)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\AboutProgression  $aboutProgression
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, AboutProgression $aboutProgression)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\AboutProgression  $aboutProgression
     * @return \Illuminate\Http\Response
     */
    public function destroy(AboutProgression $aboutProgression)
    {
        //
    }
}

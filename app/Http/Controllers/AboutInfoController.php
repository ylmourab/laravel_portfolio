<?php

namespace App\Http\Controllers;

use App\Models\AboutInfo;
use Illuminate\Http\Request;

class AboutInfoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages.bo.about.perso');
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
     * @param  \App\Models\AboutInfo  $aboutInfo
     * @return \Illuminate\Http\Response
     */
    public function show(AboutInfo $aboutInfo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\AboutInfo  $aboutInfo
     * @return \Illuminate\Http\Response
     */
    public function edit(AboutInfo $aboutInfo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\AboutInfo  $aboutInfo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, AboutInfo $aboutInfo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\AboutInfo  $aboutInfo
     * @return \Illuminate\Http\Response
     */
    public function destroy(AboutInfo $aboutInfo)
    {
        //
    }
}

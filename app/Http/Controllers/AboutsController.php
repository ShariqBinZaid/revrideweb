<?php

namespace App\Http\Controllers;

use App\Models\Abouts;
use Illuminate\Http\Request;

class AboutsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('abouts.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Abouts $abouts)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Abouts $abouts)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Abouts $abouts)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Abouts $abouts)
    {
        //
    }
}

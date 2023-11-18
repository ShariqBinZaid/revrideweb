<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use App\Models\Rentals;
use Illuminate\Http\Request;

class RentalsController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function index()
    {
        $rentals = Rentals::get();
        $data['rentals'] = $rentals;
        $data['categories'] = Categories::get();

        $start = \Carbon\Carbon::parse($rentals->min('start_date'));
        $end = \Carbon\Carbon::parse($rentals->max('end_date'));
        $data['duration'] = $start->diff($end);

        return view('sports.index')->with($data);
    }

    public function inner($slug, $id)
    {
        $inners = Rentals::where('id', $id)->get();
        return view('sports.inner')->with(['inners' => $inners[0]]);
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
    public function show(Rentals $rentals)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Rentals $rentals)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Rentals $rentals)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Rentals $rentals)
    {
        //
    }
}

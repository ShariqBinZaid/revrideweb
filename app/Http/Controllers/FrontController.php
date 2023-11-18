<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use App\Models\Rentals;
use App\Models\Tours;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $data['categories'] = Categories::get();
        $data['rentals'] = Rentals::with('Category')->get();
        $tours = Tours::all();
        $data['tours'] = $tours;
        $data['tourrecommendeds'] = $tours->where('recommended', '1')->take(2);
        $start = \Carbon\Carbon::parse($tours->min('start_date'));
        $end = \Carbon\Carbon::parse($tours->max('end_date'));
        $data['duration'] = $start->diff($end);

        return view('welcome')->with($data);
    }
}

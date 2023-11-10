<?php

namespace App\Http\Controllers;

use App\Models\Categories;
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
        $categories = Categories::all();
        return view('welcome')->with('categories');
    }

    public function abouts()
    {
        return view('abouts.index');
    }

    public function sports()
    {
        return view('sports.index');
    }

    public function tours()
    {
        return view('tours.index');
    }

    public function blogs()
    {
        return view('blogs.index');
    }

    public function contacts()
    {
        return view('contacts.index');
    }
}

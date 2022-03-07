<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FoodController extends Controller
{
    public function index()
    {
        return view('landing-page.food.index');
    }

    public function form()
    {
        return view('landing-page.food.form');
    }
}

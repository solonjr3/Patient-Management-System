<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MedicineController extends Controller
{

    public function index()
    {
        return view('landing-page.medicine.index');
    }

}

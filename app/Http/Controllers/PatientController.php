<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PatientController extends Controller
{
    public function index() 
    {

        return view('landing-page.patient.patients');

    }

    public function add() 
    {
    
        return view('landing-page.patient.add');
    
    }


    /* contact tracing form */

    public function ctf()
    {
        return view('landing-page.patient.contact-tracing-form');
    }
}

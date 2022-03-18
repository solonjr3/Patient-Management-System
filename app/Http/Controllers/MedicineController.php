<?php

namespace App\Http\Controllers;

use App\Medicine;
use App\Http\Requests\MedicineValidation;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

use Redirect, Response;
use Session;

class MedicineController extends Controller
{

    public function index()
    {
        return view('landing-page.medicine.index');
    }

    public function form()
    {
        return view('landing-page.medicine.form');
    }

    public function tableIndex()
    {

         $medicines = Medicine::latest()
                      ->orderby('created_at')
                      ->get();

        return view('landing-page.medicine.index', compact('medicines'));

    
    }

    public function store(MedicineValidation $request)
    {
        $validated = $request->validated();



        $medicine = Medicine::create($validated);

        if($medicine->wasRecentlyCreated === true){
            Session::flash('create_message', 'Data submitted successfully. Thank you!');
        } else {
            Session::flash('create_message_error', 'Data submission unsuccessful');
        }

        return back();
        // return redirect()->route('homepage');

        // $post = new Post;

        // $post->name = $request->name;
        // $post->phoneNumber = $request->phoneNumber;
        // $post->email = $request->email;
        // $post->message = $request->message;

        // dd($request->all());

    }

    public function destroy($id)
     {
    
       $delete = Medicine::findOrFail($id);
       $delete->delete();

        if($delete){
        
            Session::flash('delete_message', 'Delete successful');
       
        } else {
            Session::flash('delete_message_error', 'Delete unsuccessful');
        }


        return back();
    
    }

   public function show($id)
   {
       $medicines = Medicine::findOrFail($id);



       return View::make('medicines.show')->with('medicine', $medicines);
   }
}

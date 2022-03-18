<?php

namespace App\Http\Controllers;

use App\Food;
use App\Http\Requests\FoodValidation;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;
use Session;

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

    public function tableIndex()
    {

         $foods = Food::latest()
                      ->orderby('created_at')
                      ->get();

        return view('landing-page.food.index', compact('foods'));

    
    }

    public function store(FoodValidation $request)
    {
        $validated = $request->validated();

        $food = Food::create($validated);

        if($food->wasRecentlyCreated === true){
            Session::flash('create_message', 'Data submitted successfully. Thank you!');
        } else {
            Session::flash('create_message_error', 'Data submission unsuccessful');
        }


        return back();

        // $post = new Post;

        // $post->name = $request->name;
        // $post->phoneNumber = $request->phoneNumber;
        // $post->email = $request->email;
        // $post->message = $request->message;

        // dd($request->all());

    }

    public function destroy($id)
     {
    
       $delete = Food::findOrFail($id);
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
       $foods = Food::findOrFail($id);



       return View::make('foods.show')->with('food', $foods);
   }
}

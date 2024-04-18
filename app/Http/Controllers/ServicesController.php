<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Services;


class ServicesController extends Controller
{
    public function __construct()
    {
       $this->middleware('auth'); 
    }
    public function index(){

        $services =Services::all();
        return view('services.index', compact('services'));
    }

    public function create(){
        return view('services.create');
    }
   
    public function sendData(Request $request){

        $rules =[
            'name' =>'required|min:3'
        ];
        $messages =[
            'name.required'=> 'el nombre de sel servicio es nesesario.',
            'name.min'=> 'Deve tener mas de 3 caracteres.'
        ];

        $this->validate($request,$rules,$messages);

        $services= new Services();
        $services->name= $request->imput('description');
        $services->description= $request->imput('name');
        $services->save();

        return redirect('/servicios');
    }
}

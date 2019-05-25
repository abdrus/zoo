<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Animal;

class Animals extends Controller
{
    public function create(Request $request){
        $animal = new Animal();
        $animal->name = $request->get('name');
        $animal->age = $request->get('age');

        $animal->save();

        return redirect(route('homepage'));
    }

    public function show(){
        $animals = Animal::all();
        return view('animals.show', ['animals' => $animals]);
    }
}

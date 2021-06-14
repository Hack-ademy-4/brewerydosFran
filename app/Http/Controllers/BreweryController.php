<?php

namespace App\Http\Controllers;

use App\Models\Brewery;
use Illuminate\Http\Request;


class BreweryController extends Controller
{  //leer toda la cerveceria
    public function todas()
    {
        $cervecerias = Brewery::all();
        return view("cervecerias",compact('cervecerias'));
    }
  // mostrar form cerveceria
    public function newCerveceria()
    {
      return view ("newCerveceria");
    }
  // guardar datos cerveceria
    public function create(Request $request)
    {
    $validatedData = $request->validate
    ([
    'name'=>'required',
    'description'=>'required',
    'capacity'=>'required'
    ]);

    $cerveceria = new Brewery();
    $cerveceria->name = $validatedData['name'];
    $cerveceria->description = $validatedData['description'];
    $cerveceria->capacity = $validatedData['capacity'];

    $cerveceria->save();

    //Brewery::create($validatedData);
    return redirect()->route("cervecerias");
    }
    // detalle una cerveceria



    public function show($id)
    {
        $cerveceria = Brewery::findOrFail($id);
        return view("breweries-show",compact('cerveceria'));
    }
}
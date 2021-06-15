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

         // Edit datas

         public function edit($id)
         {
             $cerveceria = Brewery::findOrFail($id);
             return view("breweries-edit",compact('cerveceria'));
         }


         public function update($id,Request $request)
         {
             $validatedData = $request->validate([
                 'name'=>'required',
                 'description'=>'required',
                 'capacity'=>'required'
             ]);
     
             $cerveceria = Brewery::findOrFail($id);
             $cerveceria->name = $validatedData['name'];
             $cerveceria->description = $validatedData['description'];
             $cerveceria->capacity = $validatedData['capacity'];
     
             $cerveceria->save();
     
             return redirect()->route('breweries.edit',['id'=>$cerveceria->id]);
         }
     
             public function destroy($id)
         {
             $cerveceria = Brewery::findOrFail($id);
             $cerveceria->delete();
     
             // Brewery::destroy($id);
             return redirect()->route("cervecerias");
     
         } 
}